<?php
/**
 * Created by PhpStorm.
 * User: Rob
 * Date: 12/27/2014
 * Time: 7:30 PM
 * Desc: Sponsorship page.
 */
?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Thanks To Our
                    <strong>2014 Sponsors!</strong>
                </h2>
                <hr>
            </div>
            <div class="col-lg-12 text-center">
                <h4>Alabama Coal Association</h4>
                <h4>Alabama Farmers Federation</h4>
                <h4>Alabama Power Company</h4>
                <h4>Alabama Pulp and Paper Council</h4>
                <h4>AMEC Environment and Infrastructure</h4>
                <h4>The Atlantic Group, LLC</h4>
                <h4>Auburn University Center for Forest Sustainability</h4>
                <h4>Balch and Bingham, LLP</h4>
                <h4>Cawaco Resources Conservation Council</h4>
                <h4>CH2M Hill</h4>
                <h4>Drummond Company</h4>
                <h4>Hach Hydromet</h4>
                <h4>Kleinschmidt- Energy and Water Resource Consultants </h4>
                <h4>Layne</h4>
                <h4>Normandeau Associates</h4>
                <h4>PowerSouth Energy</h4>
                <h4>Samford University Masters of Science in Environmental Management</h4>
                <h4>University of Alabama, Discovering Alabama</h4>
                <h4>Woolpert</h4>
            </div>
        </div>
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Please Consider
                    <strong>Becoming A Sponsor</strong>
                </h2>
                <hr>
            </div>
            <!-- Pricing Table Section -->
            <?php //ROBSTODO:  Create a spot for a less than $250 contribution.  (6/26/2015)?>
            <section id="pricing-table">
                <section id="pricing-table">
                    <div class="container">
                        <div class="row">
                            <div class="pricing">
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="pricing-table">
                                        <div class="pricing-header">
                                            <p class="pricing-title">Vermillion Darter Club</p>
                                            <p class="pricing-rate"><sup>$</sup>250</p>
                                            <a href="#" class="btn btn-custom btn-lg" data-toggle="modal" data-target="#vermillionModal">Choose</a>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="vermillionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Vermillion Darter Club <strong>($250.00)</strong></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Please click the button below for a painless payment process.</p>
                                                        <br/>
                                                        <p>Thank you again!</p>

                                                        <?php include "php/paypal/vermillion.php" ?>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Maybe Later...</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end modal -->

                                        <!-- to be implemented if committee decides on sponsorship level perks -->
                                        <!--<div class="pricing-list">
                                            <ul>
                                                <li><i class="fa fa-envelope"></i>1,000 messages</li>
                                                <li><i class="fa fa-signal"></i><span>limited</span> data</li>
                                                <li><i class="fa fa-user"></i><span>limited</span> users</li>
                                                <li><i class="fa fa-smile-o"></i>first 10 day free</li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="pricing-table">
                                        <div class="pricing-header">
                                            <p class="pricing-title">Shoal Lily Club</p>
                                            <p class="pricing-rate"><sup>$</sup>500</p>
                                            <a href="#" class="btn btn-custom btn-lg" data-toggle="modal" data-target="#shoalLilyModal">Choose</a>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="shoalLilyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Shoal Lily Club <strong>($500.00)</strong></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Please click the button below for a painless payment process.</p>
                                                        <br/>
                                                        <p>Thank you again!</p>

                                                        <?php include "php/paypal/shoalLily.php" ?>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Maybe Later...</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end modal -->

                                        <!-- to be implemented if committee decides on sponsorship level perks -->
                                        <!--<div class="pricing-list">
                                            <ul>
                                                <li><i class="fa fa-envelope"></i>1,000 messages</li>
                                                <li><i class="fa fa-signal"></i><span>limited</span> data</li>
                                                <li><i class="fa fa-user"></i><span>limited</span> users</li>
                                                <li><i class="fa fa-smile-o"></i>first 10 day free</li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="pricing-table">
                                        <div class="pricing-header">
                                            <p class="pricing-title">Blue Heron Club</p>
                                            <p class="pricing-rate"><sup>$</sup>750</p>
                                              <a href="#" class="btn btn-custom btn-lg" data-toggle="modal" data-target="#blueHeronModal">Choose</a>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="blueHeronModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Blue Heron Club <strong>($750.00)</strong></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Please click the button below for a painless payment process.</p>
                                                        <br/>
                                                        <p>Thank you again!</p>

                                                        <?php include "php/paypal/blueHeron.php" ?>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Maybe Later...</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end modal -->

                                        <!-- to be implemented if committee decides on sponsorship level perks -->
                                        <!--<div class="pricing-list">
                                            <ul>
                                                <li><i class="fa fa-envelope"></i>1,000 messages</li>
                                                <li><i class="fa fa-signal"></i><span>limited</span> data</li>
                                                <li><i class="fa fa-user"></i><span>limited</span> users</li>
                                                <li><i class="fa fa-smile-o"></i>first 10 day free</li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="pricing-table">
                                        <div class="pricing-header">
                                            <p class="pricing-title">Sailfish Club</p>
                                            <p class="pricing-rate"><sup>$</sup>1000</p>
                                             <a href="#" class="btn btn-custom btn-lg" data-toggle="modal" data-target="#sailfishModal">Choose</a>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="sailfishModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Sailfish Club <strong>($1000.00)</strong></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Please click the button below for a painless payment process.</p>
                                                        <br/>
                                                        <p>Thank you again!</p>

                                                        <?php include "php/paypal/sailfish.php" ?>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Maybe Later...</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end modal -->

                                        <!-- to be implemented if committee decides on sponsorship level perks -->
                                        <!--<div class="pricing-list">
                                            <ul>
                                                <li><i class="fa fa-envelope"></i>1,000 messages</li>
                                                <li><i class="fa fa-signal"></i><span>limited</span> data</li>
                                                <li><i class="fa fa-user"></i><span>limited</span> users</li>
                                                <li><i class="fa fa-smile-o"></i>first 10 day free</li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        <!-- Other Donation Amount Section Start-->
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Other Sponsorship
                    <strong>Opportunity</strong>
                </h2>
                <hr>
            </div>
            <div class="col-lg-12 text-center">
                <p>We appreciate all donations.  If you would like to donate a specific amount not covered in one of the above options, please select the option below and set a custom donation amount.</p>
                <?php include "php/paypal/otherDonation.php" ?>
                <!-- <a href="#" class="btn btn-custom-donation btn-lg" data-toggle="modal" data-target="#purchaseModal">Custom Donation</a> -->
            </div>
        </div><!-- Other Donation Amount Section End-->
    </div>
</div>
<!-- /.container -->
