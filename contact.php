<?php
include('header.php');
?>
<main class="inner contact">
    <!-- BreadCrumb -->
    <section class="breadcrumb_cont">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Contact Us</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section><!-- End breadcrumb-->

    <section class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <form>
                        <h4>Mandatory Informations <span class="text-danger">***</span></h4>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="email">E-mail <span class="text-danger">*</span></label>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="message">Message <span class="text-danger">*</span></label>
                                    <textarea rows="5" placeholder="Message" name="message" id="message"class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <h4>Optional Informations</h4>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" name="company" class="form-control" id="company" placeholder="Company">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" name="website" class="form-control" id="website" placeholder="website">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea rows="3" placeholder="address" name="address" id="address"class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" name="city" class="form-control" id="city" placeholder="City">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="zip">Zip</label>
                                    <input type="text" name="zip" class="form-control" id="zip" placeholder="zip">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <select name="country" id="country" class="selectpicker form-control">
                                        <option value="bangladesh">Bangladesh</option>
                                        <option value="india">India </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone number</label>
                                    <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <img src="images/nocaptcha.gif" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <input type="submit" value="Send" class="btn btn-default dark" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include('footer.php');
?>