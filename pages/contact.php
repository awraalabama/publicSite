<?php
/**
 * Created by PhpStorm.
 * User: Rob
 * Date: 12/27/2014
 * Time: 7:36 PM
 * Desc: Contact page.
 */
?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <hr>
                <h2 id="contactForm" class="intro-text">AWRA AL Section
                    <strong>Contact Info</strong>
                </h2>
                <hr>
                <p class="text-center">We want to connect with you.  Please contact us with any questions or concerns you have.
                    <br />We will also be happy to provide you with additional sponsorship information.
                </p>
                <br />

                <a href="mailto:gmarodis@alruralwater.com?subject=AWRA%20AL%20Section&amp;body=Please%20send%20me%20some%20information%20about%20your%20organization.%0A%0AThanks!" class="btn btn-custom-donation btn-lg" data-toggle="" data-target="">Email Us</a>

                <!-- Contact Form not currently used (6/29/15)  Implement later (possibly). -->
                <!--<form id="contactUs" role="form" action="php/mail.php" method="post" data-parsley-validate>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="userFullName">Full Name</label>
                            <input id="userFullName" name="userFullName" type="text" class="form-control" required placeholder="John Q Public" autocomplete="name">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="userEmail">Email Address</label>
                            <input id="userEmail" name="userEmail" type="email" class="form-control" required placeholder="someone@example.com" autocomplete="email" data-parsley-trigger="keyup">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="userPhone">Phone Number</label>
                            <input id="userPhone" name="userPhone" type="tel" class="form-control" placeholder="xxx-xxx-xxxx" autocomplete="tel" pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label for="userMessage">Message (plain text or html)</label>
                            <textarea id="userMessage" name="userMessage" class="form-control" rows="6" cols="30" placeholder="Please provide us with some details..."></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save" value="contact">
                            <button type="submit" name="Submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>-->

            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Symposium
                    <strong>Information</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-8">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <iframe width="100%" height="450" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?q=Perdido%20Beach%20Resort%2C%20Perdido%20Beach%20Boulevard%2C%20Orange%20Beach%2C%20AL%2C%20United%20States&key=AIzaSyCdWgWRT1ln2-dsPyfL-Xn8Rpix3lKhwGQ"></iframe>
            </div>
            <div class="col-md-4">
                <p>We would love you to attend our Annual Symposium located at the beautiful Perdido Beach Resort in Orange Beach, Alabama.</p>
                <p>Click <a target="_blank" href="http://www.aaes.auburn.edu/water/alabama-water-resources-conference/">symposium registration information</a> to learn more and register for the symposium once that information is available.</p>
            </div>
            <div class="col-md-4">
                <h3>Perdido Beach Resort</h3>
                <p>Phone:
                    <strong>1-800-634-8001</strong>
                </p>
                <p>Website:
                    <strong><a target="_blank" href="http://www.perdidobeachresort.com">www.perdidobeachresort.com</a></strong>
                </p>
                <p>Address:
                    <strong>27200 Perdido Beach Blvd
                        <br>Orange Beach, AL 36561</strong>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
<!-- /.container -->