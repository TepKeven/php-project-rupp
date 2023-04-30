<?php

    require_once("./model/Customer.php");

    if(isset($_POST) && !empty($_POST)){

        $token = Customer::login();

        if($token !== -1){

            $_SESSION["customer_login_token"] = $token;
?>
            <script>
                window.location.assign("/shop");
            </script>
<?php
        }

    }


?>


<div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-center py-3">
          <form action="" method="POST" encType="multipart/form-data" class="login-details mt-5 p-5 col-lg-7 col-12 border border-2">
            <div class="section-title">
              <h3 class="title" >Login</h3>
            </div>
            <div class="form-group mt-4">
                <label for="customer_login_email">Email Address</label>
                <input type="text" class="form-control" name="customer_login_email" id="customer_login_email" placeholder="Your Email" />
            </div>
            <div class="form-group mt-4">
                <label for="customer_login_password">Password</label>
                <input type="password" class="form-control" name="customer_login_password" id="customer_login_password" placeholder="Your Password" />
            </div>
            <div class="d-flex justify-content-around mt-4">
              <div>
                  <a href="#" class="text-danger">Forgot password?</a>
              </div>
              <div>
                  Not a member? <a href="/register" class="text-danger">Register</a>
              </div>
            </div>
            <button type="submit" class="btn btn-dark mt-5 w-100" onClick={setLogin}>Sign in</button>
            <!-- <LoginSocialGoogle
              client_id={process.env.REACT_APP_GG_APP_ID || ''}
              // onLoginStart={onLoginStart}
              redirect_uri={REDIRECT_URI}
              scope="openid profile email"
              discoveryDocs="claims_supported"
              access_type="offline"
              onResolve={({ provider, data }) => {
                // setProvider(provider);
                // setProfile(data);
              }}
              onReject={err => {
                console.log(err);
              }}
            >
              <GoogleLoginButton /> -->
            <!-- </LoginSocialGoogle> -->
          </form>
        </div>
      </div>
    </div>