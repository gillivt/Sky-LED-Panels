<?php
require_once("../database/initialize.php");
include_layout_template("header.php");
?>
<!--
File: index.php

Copyright © 2016 Terry Gilliver <terry@comp-solutions.org.uk> - Computer Solutions

Created: 26-Jan-2016 16:41:31

Purpose: Home Page


Modification History:

-->

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">&nbsp;</div>
            <div class="col-sm-12 col-md-4">
                <h1>Sky LED Panels</h1>
                <img class="img-responsive" src="assets/images/Sky_panel_English_2013_page10_image2.png">
            </div>
            <div class="col-sm-12 col-md-6 text">
                <br><br>
                <ul>
                    <li>High efficiency, environmental protection, upto 50,000 hours of service life</li>
                    <li>User friendliness with soft and uniform light, low wattage and heat. No strobing or glare, which protects your eyesight.</li>
                    <li>Easy installation and low maintenance.</li>
                    <li>Superior decorative performance (thin structure of about 20M thickness, with optional images that creates a sensation for reality to the spaces).
                </ul>
            </div>
        </div>
    </div>
</main>

<script src="assets/js/index.js"></script>
<?php
include_layout_template("footer.php");
?>