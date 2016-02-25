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
                    <ol class="carousel-indicators">
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
                    </ol>
                    
                    <section class="carousel-inner">
                        <div class="item img-responsive active"><img src="images/carousel/BaclesseRadiotherapy_rt_1.jpg" style="height: 580px;" alt=""></div> 
                        <div class="item img-responsive"><img src="images/carousel/ChildrensMedCenter2_rt_1.jpg" style="height: 580px;" alt=""></div> 
                        <div class="item img-responsive"><img src="images/carousel/EldercareBudapest_rt_1.jpg" style="height: 580px;" alt=""></div> 
                        <div class="item img-responsive"><img src="images/carousel/IMG_0580.JPG" style="height: 580px;" alt=""></div> 
                        <div class="item img-responsive"><img src="images/carousel/IMG_0581.JPG" style="height: 580px;" alt=""></div> 
                        <div class="item img-responsive"><img src="images/carousel/IMG_0584.JPG" style="height: 580px;" alt=""></div> 
                        <div class="item img-responsive"><img src="images/carousel/IMG_0585.JPG" style="height: 580px;" alt=""></div> 
                        <div class="item img-responsive"><img src="images/carousel/McGillD11_rt_1.jpg" style="height: 580px;" alt=""></div> 
                        <div class="item img-responsive"><img src="images/carousel/SeascapeFoods_rt_1.jpg" style="height: 580px;" alt=""></div> 
                        <div class="item img-responsive"><img src="images/carousel/XfitSpa_rt_1.jpg" style="height: 580px;" alt=""></div> 
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