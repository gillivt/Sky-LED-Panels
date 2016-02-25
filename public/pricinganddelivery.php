<?php
require_once("../database/initialize.php");
include_layout_template("header.php");
?>
<!--
File: pricinganddelivery.php

Copyright © 2016 Terry Gilliver <terry@comp-solutions.org.uk> - Computer Solutions

Created: 26-Jan-2016 16:41:31

Purpose: Pricing and Delivery


Modification History:

-->

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">&nbsp;</div>
            <div class="col-sm-12 col-md-10">
                <h1>Pricing &amp; Delivery</h1>
                <p>Each panel using our current stock images is priced at £125.00 The minimum
                    order is 4 panels and discounts apply based on quantities ordered over 8
                    panels. Please contact us for a quotation.</p> 

                <p>Delivery for standard designs are 30 days from order. Special orders will
                    involve a set up cost and will take slightly longer.</p> 

                <p>All prices include delivery costs to a single UK mainland address.</p> 

                <p>Prices quoted exclude VAT which will be charged at the prevailing rate.</p>
            </div>
        </div>
    </div>
</main>

<script src="assets/js/pricinganddelivery.js"></script>
<?php
include_layout_template("footer.php");
?>