<?php
/**
 * Created by PhpStorm.
 * User: Rob
 * Date: 6/28/2015
 * Time: 11:32 PM
 * Desc: Script to include paypal link for 'other amount' button.
 */
?>

<!--######################################################## - Begin PayPal Integration (w/custom button) - #########################################################-->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
    <input type="hidden" name="cmd" value="_donations">
    <input type="hidden" name="business" value="donations@awraalabama.org">
    <input type="hidden" name="lc" value="US">
    <input type="hidden" name="item_name" value="Friend of AWRA">
    <input type="hidden" name="item_number" value="">
    <input type="hidden" name="amount" value="">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="no_note" value="0">
    <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
    <input id="purchaseModal" type="image" src="img/express-checkout-hero-sg1.png" border="0" style="margin: auto;" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


<!--######################################################## - End PayPal Integration (w/custom button) - #########################################################-->
