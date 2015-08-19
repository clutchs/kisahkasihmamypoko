var ComponentsPickers = function () {

    var handleDatePickers = function () {

        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: App.isRTL(),
                autoclose: true
            });
            $('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
        }
    }

    var handleTimePickers = function () {

        if (jQuery().timepicker) {
            $('.timepicker-default').timepicker({
                autoclose: true,
                showSeconds: true,
                minuteStep: 1
            });

            $('.timepicker-no-seconds').timepicker({
                autoclose: true,
                minuteStep: 5
            });

            $('.timepicker-24').timepicker({
                autoclose: true,
                minuteStep: 5,
                showSeconds: true,
                showMeridian: false
            });

            // handle input group button click
            $('.timepicker').parent('.input-group').on('click', '.input-group-btn', function(e){
                e.preventDefault();
                $(this).parent('.input-group').find('.timepicker').timepicker('showWidget');
            });
        }
    }

    var handleDateRangePickers = function () {
        if (!jQuery().daterangepicker) {
            return;
        }

        $('#defaultrange').daterangepicker({
                opens: (App.isRTL() ? 'left' : 'right'),
                format: 'MM/DD/YYYY',
                separator: ' to ',
                startDate: moment().subtract('days', 29),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2014',
            },
            function (start, end) {
                console.log("Callback has been called!");
                $('#defaultrange input').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );        

        $('#defaultrange_modal').daterangepicker({
                opens: (App.isRTL() ? 'left' : 'right'),
                format: 'MM/DD/YYYY',
                separator: ' to ',
                startDate: moment().subtract('days', 29),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2014',
            },
            function (start, end) {
                $('#defaultrange_modal input').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );  

        // this is very important fix when daterangepicker is used in modal. in modal when daterange picker is opened and mouse clicked anywhere bootstrap modal removes the modal-open class from the body element.
        // so the below code will fix this issue.
        $('#defaultrange_modal').on('click', function(){
            if ($('#daterangepicker_modal').is(":visible") && $('body').hasClass("modal-open") == false) {
                $('body').addClass("modal-open");
            }
        });

        $('#reportrange, #reportrangepicker').daterangepicker({
                opens: (App.isRTL() ? 'left' : 'right'),
                startDate: moment().subtract('days', 29),
                endDate: moment(),
                minDate: '2014-12-31',
                maxDate: '2015-12-31',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                },
                buttonClasses: ['btn'],
                applyClass: 'green',
                cancelClass: 'default',
                format: 'YYYY-MM-DD',
                separator: ' to ',
                locale: {
                    applyLabel: 'Apply',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom Range',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            },
            function (start, end) {
                console.log("Callback has been called!");
                $('#reportrange span, #reportrangepicker span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );
        //Set the initial state of the picker label
        $('#reportrange span, #reportrangepicker span').html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
		
		function showChartTooltip(x, y, xValue, yValue) {
			$('<div id="tooltip" class="chart-tooltip">'+yValue+'<\/div>').css({
				position: 'absolute',
				display: 'none',
				top: y - 40,
				left: x - 40,
				border: '0px solid #ccc',
				padding: '2px 6px',
				'background-color': '#fff',
			}).appendTo("body").fadeIn(200);
		}
			
		$('form[name="form-report-range"]').submit(function() {
			// Modified for ajax request for participants stats
			$.ajax({
				// have to use synchronous here, else the function 
				// will return before the data is fetched
				method:'POST',
				async: false,
				url: 'index',
				dataType:"json",
				sortData:true,
				data:$(this).serializeArray(),
				success: function(data) {

                    // Join Statistics
                    if ($('#join_statistics').size() != 0) {

    					var participants = 
                            data.result.stats_join
                            /*
                            ['01/2013', 500],
                            ['02/2013', 1500],
                            ['03/2013', 2600],
                            ['04/2013', 1200],
                            ['05/2013', 560],
                            ['06/2013', 2000],
                            ['07/2013', 2350],
                            ['08/2013', 1500],
                            ['09/2013', 4700],
                            ['10/2013', 1300],
                            */
                        ;

                        $('#join_statistics_loading').hide();
                        $('#join_statistics_content').show();

                        var plot_statistics = $.plot($("#join_statistics"), 
                            [{
                                data:participants,
                                lines: {
                                    fill: 0.6,
                                    lineWidth: 0
                                },
                                color: ['#ff9900']
                            },
                            {
                                data: participants,
                                points: {
                                    show: true,
                                    fill: true,
                                    radius: 5,
                                    fillColor: "#ff9933",
                                    lineWidth: 3
                                },
                                color: '#fff',
                                shadowSize: 0
                            }],
                            {
                            xaxis: {
                                tickLength: 0,
                                tickDecimals: 0,                        
                                mode: "categories",
                                min: 0,
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            yaxis: {
                                ticks: 5,
                                tickDecimals: 0,
                                tickColor: "#eee",
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            grid: {
                                hoverable: true,
                                clickable: true,
                                tickColor: "#eee",
                                borderColor: "#eee",
                                borderWidth: 1
                            }
                        });

						var previousPoint = null;
						$("#join_statistics").bind("plothover", function (event, pos, item) {
							$("#x").text(pos.x.toFixed(2));
							$("#y").text(pos.y.toFixed(2));
							if (item) {
								if (previousPoint != item.dataIndex) {
									previousPoint = item.dataIndex;

									$("#tooltip").remove();
									var x = item.datapoint[0].toFixed(2),
										y = item.datapoint[1].toFixed(2);

									showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' Join');
								}
							} else {
								$("#tooltip").remove();
								previousPoint = null;
							}
						}); 
					}


                    // Submit Statistics
                    if ($('#submit_statistics').size() != 0) {

                        var participants = 
                            data.result.stats_submit
                            /*
                            ['01/2013', 500],
                            ['02/2013', 1500],
                            ['03/2013', 2600],
                            ['04/2013', 1200],
                            ['05/2013', 560],
                            ['06/2013', 2000],
                            ['07/2013', 2350],
                            ['08/2013', 1500],
                            ['09/2013', 4700],
                            ['10/2013', 1300],
                            */
                        ;

                        $('#submit_statistics_loading').hide();
                        $('#submit_statistics_content').show();

                        var plot_statistics = $.plot($("#submit_statistics"), 
                            [{
                                data:participants,
                                lines: {
                                    fill: 0.6,
                                    lineWidth: 0
                                },
                                color: ['#ff9900']
                            },
                            {
                                data: participants,
                                points: {
                                    show: true,
                                    fill: true,
                                    radius: 5,
                                    fillColor: "#ff9933",
                                    lineWidth: 3
                                },
                                color: '#fff',
                                shadowSize: 0
                            }],
                            {
                            xaxis: {
                                tickLength: 0,
                                tickDecimals: 0,                        
                                mode: "categories",
                                min: 0,
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            yaxis: {
                                ticks: 5,
                                tickDecimals: 0,
                                tickColor: "#eee",
                                font: {
                                    lineHeight: 14,
                                    style: "normal",
                                    variant: "small-caps",
                                    color: "#6F7B8A"
                                }
                            },
                            grid: {
                                hoverable: true,
                                clickable: true,
                                tickColor: "#eee",
                                borderColor: "#eee",
                                borderWidth: 1
                            }
                        });

                        var previousPoint = null;
                        $("#submit_statistics").bind("plothover", function (event, pos, item) {
                            $("#x").text(pos.x.toFixed(2));
                            $("#y").text(pos.y.toFixed(2));
                            if (item) {
                                if (previousPoint != item.dataIndex) {
                                    previousPoint = item.dataIndex;

                                    $("#tooltip").remove();
                                    var x = item.datapoint[0].toFixed(2),
                                        y = item.datapoint[1].toFixed(2);

                                    showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' Join');
                                }
                            } else {
                                $("#tooltip").remove();
                                previousPoint = null;
                            }
                        }); 
                    }

				}
			});
			return false;
		});
    }

    var handleDatetimePicker = function () {

        $(".form_datetime").datetimepicker({
            autoclose: true,
            isRTL: App.isRTL(),
            format: "dd MM yyyy - hh:ii",
            pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left")
        });

        $(".form_advance_datetime").datetimepicker({
            isRTL: App.isRTL(),
            format: "dd MM yyyy - hh:ii",
            autoclose: true,
            todayBtn: true,
            startDate: "2013-02-14 10:00",
            pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left"),
            minuteStep: 10
        });

        $(".form_meridian_datetime").datetimepicker({
            isRTL: App.isRTL(),
            format: "dd MM yyyy - HH:ii P",
            showMeridian: true,
            autoclose: true,
            pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left"),
            todayBtn: true
        });

        $('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
    }

    var handleClockfaceTimePickers = function () {

        if (!jQuery().clockface) {
            return;
        }

        $('.clockface_1').clockface();

        $('#clockface_2').clockface({
            format: 'HH:mm',
            trigger: 'manual'
        });

        $('#clockface_2_toggle').click(function (e) {
            e.stopPropagation();
            $('#clockface_2').clockface('toggle');
        });

        $('#clockface_2_modal').clockface({
            format: 'HH:mm',
            trigger: 'manual'
        });

        $('#clockface_2_modal_toggle').click(function (e) {
            e.stopPropagation();
            $('#clockface_2_modal').clockface('toggle');
        });

        $('.clockface_3').clockface({
            format: 'H:mm'
        }).clockface('show', '14:30');
    }

    var handleColorPicker = function () {
        if (!jQuery().colorpicker) {
            return;
        }
        $('.colorpicker-default').colorpicker({
            format: 'hex'
        });
        $('.colorpicker-rgba').colorpicker();
    }
   

    return {
        //main function to initiate the module
        init: function () {
            handleDatePickers();
            handleTimePickers();
            handleDatetimePicker();
            handleDateRangePickers();
            handleClockfaceTimePickers();
            handleColorPicker();
        }
    };

}();