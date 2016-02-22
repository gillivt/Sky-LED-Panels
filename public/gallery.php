<?php
require_once("../database/initialize.php");
?>
<!--
File: gallery.php

Copyright © 2016 Terry Gilliver <terry@comp-solutions.org.uk> - Computer Solutions

Created: 26-Jan-2016 16:41:31

Purpose: Gallery Page


Modification History:

-->
<?php include_layout_template('header.php'); ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div  class="col-xs-0 col-sm-1 col-md-2">&nbsp;</div>
            <div class="col-xs-12 col-sm-10 col-md-8">
                <h1>Gallery</h1>
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators hidden-xs hidden-sm hidden-md">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>
                        <li data-target="#myCarousel" data-slide-to="8"></li>
                        <li data-target="#myCarousel" data-slide-to="9"></li>
                        <li data-target="#myCarousel" data-slide-to="10"></li>
                        <li data-target="#myCarousel" data-slide-to="11"></li>
                        <li data-target="#myCarousel" data-slide-to="12"></li>
                        <li data-target="#myCarousel" data-slide-to="13"></li>
                        <li data-target="#myCarousel" data-slide-to="14"></li>
                        <li data-target="#myCarousel" data-slide-to="15"></li>
                        <li data-target="#myCarousel" data-slide-to="16"></li>
                        <li data-target="#myCarousel" data-slide-to="17"></li>
                        <li data-target="#myCarousel" data-slide-to="18"></li>
                        <li data-target="#myCarousel" data-slide-to="19"></li>
                        <li data-target="#myCarousel" data-slide-to="20"></li>
                        <li data-target="#myCarousel" data-slide-to="21"></li>
                        <li data-target="#myCarousel" data-slide-to="22"></li>
                        <li data-target="#myCarousel" data-slide-to="23"></li>
                        <li data-target="#myCarousel" data-slide-to="24"></li>
                        <li data-target="#myCarousel" data-slide-to="25"></li>
                        <li data-target="#myCarousel" data-slide-to="26"></li>
                        <li data-target="#myCarousel" data-slide-to="27"></li>
                    </ol>
                    
                    <section class="carousel-inner">
                        <div class="item active"><img src="images/carousel/Sky_panel_English_2013_page10_image2.png" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image3.jpg" style="width: 100%;" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image4.jpg" style="width: 100%;" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image5.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image6.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image7.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image8.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image9.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image10.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image11.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image12.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image13.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image14.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image15.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image16.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image17.png" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image18.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image19.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image20.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image21.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image22.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image23.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image24.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image25.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image26.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image27.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image28.jpg" style="width: 100%;" class="img-responsive" alt=""></div> 
                        <div class="item"><img src="images/carousel/Sky_panel_English_2013_page10_image29.png" style="width: 100%;" class="img-responsive" alt=""></div> 
                    </section><!--carousel-inner-->
                    <a href="#myCarousel" class="left carousel-control SM" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> 
                    <a href="#myCarousel" class="right carousel-control SM" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> 
                </div><!--carousel-->
            </div><!--col-->
        </div><!--row-->            
    </div><!--container-fluid-->
</main>

<script src="assets/js/gallery.js"></script>
<?php
include_layout_template("footer.php");
?>