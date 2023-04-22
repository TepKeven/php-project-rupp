<?php

require_once("./model/Newsletter.php");

    if(isset($_POST) && !empty($_POST)){

        $newsletter_to = $_POST["newsletter_to"];

        if($newsletter_to == 1){

            $result = Newsletter::sendToAllCustomers();
        }

        else{

            $result = Newsletter::sendToNewsletterCustomers();
        }

?>
        
        <script>

            var result = '<?php echo $result; ?>';
            // alert(result);

        </script>

<?php

    }

?>

<div class="py-5">
    <div class="col-12 grid-margin mt-5">
        <form class="card form-newsletter-new" id="form-newsletter-new" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Newsletter Page</h4>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info"><i class="ti-save"></i></button>
                        <a href="/admin/dashboard" class="btn btn-danger mx-2"><i class="ti-back-left"></i></a>
                    </div>
                </div>
                <div class="form-sample">
                    <!-- <p class="card-description">
                        Personal info
                    </p> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="newsletter_to" class="col-sm-3 col-form-label">
                                    To
                                </label>
                                <div class="col-sm-9">
                                    <select id="newsletter_to" name="newsletter_to" class="form-control">
                                        <option value="1" selected="selected">All Customers</option>
                                        <option value="2">All Newsletter Subscriber</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="newsletter_subject" class="col-sm-3 col-form-label">Subject</label>
                                <div class="col-sm-9">
                                    <input type="text" id="newsletter_subject" class="form-control" name="newsletter_subject"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="newsletter_message" class="col-sm-3 col-form-label">Message</label>
                                <div class="col-sm-9">
                                    <textarea id="newsletter_message" class="form-control" name="newsletter_message"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

