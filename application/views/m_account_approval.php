<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<script type="text/javascript">
window.onload = function() {
    FB.Canvas.setSize({ width: 810, height: 920 });

    // Place following code after FB.init call.
    function onLogin(response) {
      if (response.status == 'connected') {
        FB.api('/me?fields=first_name', function(data) {
          var welcomeBlock = document.getElementById('fb-welcome');
          welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
		  <?php if ( !$this->participant) { ?>
		  var url = '<?php echo base_url("hauth/login/Facebook") ?>';
                var form = $('<form action="' + url + '" method="post">' +
                        '<input type="hidden" name="signed_request" value="' + response.authResponse.signedRequest + '" />' +
                        '</form>');
                $('body').append(form);
                $(form).submit();
		  <?php } ?>		
        });
      }
    }
    FB.getLoginStatus(function(response) {
      // Check login status on load, and if the user is
      // already logged in, go directly to the welcome message.
      if (response.status == 'connected') {
        onLogin(response);
      } else {
        // Otherwise, show Login dialog first.
        FB.login(function(response) {
            // handle the response
            if (response.status == 'connected') {
                var url = '<?php echo base_url("hauth/login/Facebook") ?>';
                var form = $('<form action="' + url + '" method="post">' +
                        '<input type="hidden" name="signed_request" value="' + response.authResponse.signedRequest + '" />' +
                        '</form>');
                $('body').append(form);
                $(form).submit();
            } else {
                top.location.reload();
            }
            console.log(response);
        }, {scope: 'read_stream,email'});
        // Additional initialization code here		  
		}
		console.log(response);
    });
    //FB.AppEvents.activateApp();
    //FB.AppEvents.logEvent('account');    
}
</script>
<div class="bg-yellow row">
    <img class="kisah-title" alt="kisah kasih mamypoko" src="<?php echo base_url('assets/public/img/kisah-kasih.png');?>">
    <div class="mekanisme-body row">
      <div class="col-xs-12 pembatas">              
          <div class="row">
            <div class="register-form">
                <h2 class="vag-font text-info"><div id="fb-welcome"></div></h2>
                <br/><br/>
                <h5>        
                Mohon Enable Popup Browser dan buka browser approval dari facebook
				<br/><br/>
				<img class="img-responsive img-thumbnail" src="<?php echo base_url('assets/public/img/mobile_40164.jpg');?>" alt="PopUp Enable"/>
				<br/><br/>
				Approve Aplikasi Kisah Kasih Mamy Poko dan mohon tunggu sejenak.
                </h5>
            </div><!-- /.register-form -->
        </div><!-- /.row -->
      </div>

    </div>
</div>