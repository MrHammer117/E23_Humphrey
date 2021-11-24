<?php
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-==-=-
//
// File name: 	    footer.inc.php
//
// File purpose: 	This is the place to hold footer along with copyright statement
//					that would appear on all pages of the website
//
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-==-=-

$date = date("Y-m-d");
$dateparts = explode('-',$date);
$currentyear = $dateparts[0]+0; // +0 converts string containing date to an integer

// TODO: create a variable that will hold "-18" or "-09" to be able to display copyright with 2004-18 or 2004-09
// depending on the current year. Assume website was originally developed in 2009. DO NOT HARDCODE the current year.

?>

<div class="footer-distributed">
<a href="#">CONTACT US</a> | <a href="/sitemap.html">SITE MAP</a> |
<a href="#" title="Accessibility Policy">ACCESSIBILITY POLILCY</a> |
<a href="#" title="Privacy Policy">PRIVACY POLICY</a><br />

<div id="copyright">
<!-- TODO: utilize <?php ?> tags to add WEBSITE_NAME, DEV_COMPANY_NAME, and copyright dates from 2009 to current year -->
</div>

</div>