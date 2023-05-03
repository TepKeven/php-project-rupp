<?php

    require_once("./model/Session.php");
    require_once("./model/Customer.php");
    require_once("./model/Address.php");
    require_once("./model/Country.php");

    if(isset($_SESSION["customer_login_token"]) && !empty($_SESSION["customer_login_token"])){

        $session_token = $_SESSION["customer_login_token"];

        $session = Session::findByToken($session_token);
        
        $customer_id = json_decode($session["data"], true)["customer_id"];

        $customer = Customer::findOne($customer_id);

        $address = Address::findOneByCustomer($customer_id);
    }
    else{

?>
        <script>

            window.location.assign("/login");

        </script>
<?php
    }

?>

<div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="profile-detail col-lg-8 col-12 m-auto my-5 p-lg-5 p-3">
              <div class="section-title">
                <h3 class="profile-title">Profile</h3>
              </div>
              <div class="form-group d-flex justify-content-center mb-4">
                <img src="<?=$customer["image"] == null ? "/public/assets/no_image.png" : "/public/images/customer/" . $customer["image"]?>" width="150" height="150" class="image-input border border-1 rounded-circle" />
              </div>
              <h3 class=" text-center">Information</h3><br/>
              <div class="p-4">
                <div class="col-12 d-flex justify-content-between mt-4">
                  <h5>First Name: </h5>
                  <h5><?=$customer["first_name"]?></h5>
                </div>
                <div class="col-12 d-flex justify-content-between mt-4">
                  <h5>Last Name: </h5>
                  <h5><?=$customer["last_name"]?></h5>
                </div>
                <div class="col-12 d-flex justify-content-between mt-4">
                  <h5>Email: </h5>
                  <h5><?=$customer["email"]?></h5>
                </div>
                <div class="col-12 d-flex justify-content-between mt-4">
                  <h5>Phone: </h5>
                  <h5><?=$customer["telephone"]?></h5>
                </div>
                <div class="col-12 d-flex justify-content-between mt-4">
                  <h5>Newsletter: </h5>
                  <h5><?=$customer["newsletter"] == 1 ? "Subscribed" : "Unsubscribed"?></h5>
                </div>
                <div class="col-12 d-flex justify-content-between mt-4">
                  <h5>IP Address: </h5>
                  <h5><?=$customer["ip"] == "::1" ? "127.0.0.1" : $customer["ip"]?></h5>
                </div>
                <div class="col-12 mt-4">
                    <h5>Address(es): </h5>
                    <div class="address-item mt-3">
                         <h5>1. <?=$address["company"]?>, <?=$address["address"]?>, <?=$address["city"]?>, <?=$address["postcode"]?>, <?=Country::findOne($address["country_id"])["name"]?></h5>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                  <button class="btn btn-danger" onClick="customerLogout()">Logout</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>