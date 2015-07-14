<?php
/**
 * Created by PhpStorm.
 * User: Rob
 * Date: 12/27/2014
 * Time: 8:37 PM
 * Desc: Vermillion Darter Club Paypal script.
 */
?>

<!--######################################################## - Begin PayPal Integration (w/custom button) - #########################################################-->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input id="purchaseModal" type="image" src="img/express-checkout-hero-sg1.png" border="0" style="margin: auto;" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>



<!--######################################################## - End PayPal Integration (w/custom button) - #########################################################-->
