<div>
      <div class="section">
        <form action="" method="POST" encType="multipart/form-data" class="form-container">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-5 col-12 mx-5">
              <div class="customer-details">
                <div class="section-title">
                  <h3 class="title">Register Form</h3>
                </div>
                <div class="form-group mt-3">
                  <label for="customer_first_name">First Name</label>
                  <input type="text" class="form-control" name="customer_first_name" id="customer_first_name" placeholder="Your First Name" />
                </div>
                <div class="form-group mt-3">
                  <label for="customer_last_name">Last Name</label>
                  <input type="text" class="form-control" name="customer_last_name" id="customer_last_name" placeholder="Your Last Name" />
                </div>
                <div class="form-group mt-3">
                  <label for="customer_email">Email</label>
                  <input type="text" class="form-control" name="customer_email" id="customer_email" placeholder="Your Email" onChange={storeEmail}/>
                </div>
                <div class="form-group mt-3">
                  <label for="customer_password">Password</label>
                  <input type="password" class="form-control" name="customer_password" id="customer_password" placeholder="Your Password" />
                </div>
                <div class="form-group mt-3">
                  <label for="customer_confirm_password">Confirm Password</label>
                  <input type="password" class="form-control" name="customer_confirm_password" id="customer_confirm_password" placeholder="Your Confirm Password" />
                </div>
                <div class="form-group mt-3">
                  <label for="customer_telephone">Telephone</label>
                  <input type="text" class="form-control" name="customer_telephone" id="customer_telephone" placeholder="Your Telephone" />
                </div>
                <div class="form-group mt-3">
                  <label for="customer_image">Profile Image</label> <br/>
                  <label for="customer_image">
                    <img src="/public/assets/client/img/mybestfriend.jpg" style="width:150px; height:150px" class="image-input border border-1"/>
                  </label>
                  <input type="file" class="d-none" name="customer_image" id="customer_image" onChange={chooseImage}/>
                </div>
                <div class="form-group mt-3">
                  <label for="customer_telephone">Subscribe to our Newsletter</label>
                  <div class="form-group d-flex mt-2">
                      <div class="radio-group">
                        <input type="radio" name="customer_newsletter" id="customer_newsletter_yes" value={1}/>
                        <label for="customer_newsletter_yes" class="mx-2">yes</label>
                      </div>
                      <div class="radio-group mx-4">
                        <input type="radio" name="customer_newsletter" id="customer_newsletter_no" value={0}/>
                        <label for="customer_newsletter_no" class="mx-2">No</label>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-12 mx-5">
              <div class="address-details">
                <div class="section-title">
                  <h3 class="title">Address Details</h3>
                </div>
                <div class="form-group mt-3">
                  <label for="customer_company">Company</label>
                  <input type="text" class="form-control" name="customer_company" id="customer_company" placeholder="Your Company" />
                </div>
                <div class="form-group mt-3">
                  <label for="customer_address">Address</label>
                  <input type="text" class="form-control" name="customer_address" id="customer_address" placeholder="Your Address" />
                </div>
                <div class="form-group mt-3">
                  <label for="customer_city">City</label>
                  <input type="text" class="form-control" name="customer_city" id="customer_city" placeholder="Your City" />
                </div>
                <div class="form-group mt-3">
                  <label for="customer_postcode">Postcode</label>
                  <input type="text" class="form-control" name="customer_postcode" id="customer_postcode" placeholder="Your Postcode" />
                </div>
                <div class="mb-5">
                    <label for="customer_country_id" class="form-label">
                        
                    </label>
                    <select id="customer_country_id" name="customer_country_id" class="form-control">
                        <option value="country">Country</option>
                        <option value="cambodia">Cambodia</option>
                        <option value="usa">USA</option>
                        <option value="korea">Korea</option>
                        <option value="japan">Japan</option>
                    </select>
                </div>  
                <div class="d-flex my-4">
                  <button type="button" class="btn btn-dark w-100">Sign up for an Account</button> 
                </div>
                <div class="d-flex justify-content-center">
                    Already have an Account? &nbsp;<a href="/login" class="text-danger">Login now</a>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>