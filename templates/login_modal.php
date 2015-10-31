<div class="modal fade" id="login-modal" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" align="center">
                            <h1 class="logo">LEG<span>ISTIFY</span></h1>
                        </div>
                        
                        <!-- Begin # DIV Form -->
                        <div id="div-forms">
                            
                            <!-- Begin # Login Form -->
                            <form id="login-form">
                                <div class="modal-body">
                                    <input id="login_username" class="form-control" type="text" placeholder="Username" required>
                                    <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                    </div>
                                    <div>
                                        <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                        <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End # Login Form -->
                            
                            <!-- Begin | Lost Password Form -->
                            <form id="lost-form" style="display:none;">
                                <div class="modal-body">
                                    <input id="lost_email" class="form-control" type="text" placeholder="Enter your E-Mail" required>
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                                    </div>
                                    <div>
                                        <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                        <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End | Lost Password Form -->
                         <script>/* 
						  $(document).ready(function(){
						  
$("#register-form").submit(function() {
 alert('Yes');
    var url = "../templates/project1.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#register-form").serialize(), // serializes the form's elements.
           success: function(data)
           {
             //  alert(data); // show response from the php script.
			alert('Yes!');
           }
         });
			data.preventDefault();
    return false; // avoid to execute the actual submit of the form.
})
});*/
</script>
								  
                            <!-- Begin | Register Form -->
                            <form id="register-form" class="reg_form1" style="display:none;">
						 <div class="modal-body">
						 <div class="login-bottom">

		                        <ul >
			                          <li><!--<a class="tw" href="#">SIGN IN TWITTER</a>-->
									  <!-- //in body : -->
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div></li>
<!--<a class="logout_go" href="#" style="text-decoration:none;padding-left:35px;padding-bottom:10px; position:relative;top:20px;padding-top:10px;padding-right:32px;color:#fff;background-color:grey;" onclick="signOut();">Sign out</a>-->
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
      function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log("Name: " + profile.getName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script> 
			                           <li><!--<a class="fa" href="#">SIGN IN FACEBOOK
									   --></li>
									   <!--Just some space here-->
									   </br></br></br>
<!--
//in body only (optional in head):
	-->
<script> 
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response); 
    if (response.status === 'connected') {
      testAPI();
    } else if (response.status === 'not_authorized') { 
      document.getElementById('status').innerHTML = 'Please log ' +
        'in with Facebook.';
    } else { 
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }
 
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '781016672021771',
    cookie     : true,  
                       
    xfbml      : true, 
    version    : 'v2.2'
  });
 
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

 (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
 
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script><li><a>
<fb:login-button scope="public_profile,email" data-size="xlarge" data-auto-logout-link="true" onlogin="checkLoginState();">
</fb:login-button>
</a>
<div id="status">
</div></li>
			                           <!--<div class="clear"> </div>-->
		                             </ul> 
</div>
                                    <input id="register_username" class="form-control" type="text" placeholder="Username" required>
                                    <input id="register_address" class="form-control" type="text" placeholder="Address" required>
									<input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
									<input id="register_password" class="form-control" type="password" placeholder="Password" required>
									<input id="register_confirm password" class="form-control" type="password" placeholder="Confirm Password" required>
									<input id="register_contact" class="form-control" type="text" placeholder="Contact" required>
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"  >Register</button>
                                    </div>
                                    <div>
                                        <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                        <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End | Register Form -->
                            
                        </div>
                        <!-- End # DIV Form -->
                        
                    </div>
                </div>
            </div>