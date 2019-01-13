<?php

/*
Template Name: Home
*/

//Advanced Custom Fields
$site_title = get_field('site_title');
$tag_line = get_field('tag_line');
$button_text = get_field('button_text');

$first_slider_image = get_field('first_slider_image');
$second_slider_image = get_field('second_slider_image');
$third_slider_image = get_field('third_slider_image');

$gallery_heading = get_field('gallery_heading');

$about_title = get_field('about_title');
$about_image = get_field('about_image');
$about_description = get_field('about_description');

$contact = get_field('contact');

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $site_title; ?></title>
    <script src="assets/js/jquery.js" ></script>
    
    <style>
    
    
    #dimensions{
        position: fixed;
        background-color: #fff;
        cursor: pointer;
        width: 100px;
        z-index: 9999;
    }
        
    #small-hero{
    height: 90%;
    background: url("<?php echo $first_slider_image['url']; ?>");
    background-size: cover;
    background-position: center;
    position: relative;
    top: -20px;
    min-height: 456px;
}
    
</style>
</head>
<body <?php body_class(); ?>>

<!--===FOR TESTING PURPOSES ONLY
===============================================-->
<!--<div id="dimensions">
    <p id="dimH">Height :</p>
    <p id="dimW">Width: </p>
</div>-->
<!--===END OF TESTING MATRIX
================================================-->
    <section id="header">
        
    </section>
    <div class="scallop-purple-down"></div>
    
    <secition id="small-hero">
        <div class="hero-message">
               <h1><?php echo $site_title; ?></h1>
               <h2><?php echo $tag_line; ?></h2>
               <div id="smallHeroCTA" class="hero-cta"><?php echo $button_text; ?></div>
           </div>
    </secition>
  
    <section id="hero">
      
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
           <div class="hero-message">
               <h1><?php echo $site_title; ?></h1>
               <h2><?php echo $tag_line; ?></h2>
               <div id="scrollToCTA" class="hero-cta"><?php echo $button_text; ?></div>
           </div>
            <div class="item active">
              <img src="<?php echo $first_slider_image['url']; ?>" alt="...">
              <div class="carousel-caption">
                
              </div>
            </div>
            <div class="item">
              <img src="<?php echo $second_slider_image['url']; ?>" alt="...">
              <div class="carousel-caption">

              </div>
            </div>
             <div class="item">
              <img src="<?php echo $third_slider_image['url']; ?>" alt="...">
              <div class="carousel-caption">

              </div>
            </div>

          </div>

          <!-- Controls -->
         
          
        </div>
 
   </section><!--hero-->
   
   <div class="scallop-white-up"></div>
   <section id="gallery">
      <h1><?php echo $gallery_heading; ?></h1>
      
      <?php
                        $loop1 = new WP_Query(array(
                            'post_type' => 'gallery_post',
                            'orderby' => 'post_id',
                            'order' => 'DSC'
                        
                        ));
                   
                   ?>
        <?php while($loop1->have_posts()) : $loop1->the_post(); ?>
       
        <div class="gallery-post">
          
           <div class="gallery-wrapper">
               <img src="<?php echo the_post_thumbnail_url(); ?>">
            </div>
           <div class="gallery-title"><?php the_title(); ?></div>
           <?php the_content(); ?>
           <div class="gallery-divider"></div>
       
        
        
        </div><!--gallery-post-->
        <?php endwhile; ?>
        
   </section><!--gallery-->
   <div class="scallop-white-down"></div>
   
   <section id="about">
       <div class="profile">
          <h1><?php echo $about_title; ?></h1>
           <img src="<?php echo $about_image['url']; ?>" alt="">
           <p><?php echo $about_description; ?></p>
       </div>
   </section><!--ABOUT-->
     
     <div style="top: -10px" class="scallop-purple-up"></div>
    <section id="cta">
        <h2>Ready To Order?</h2>
        <img class="animated infinite bounce" src="assets/img/cakes-1953211_1280.png" alt="">
        <h2><?php echo $contact; ?></h2>
    </section><!--CTA-->
     <div style="top: -15px" class="scallop-purple-down"></div>
     
     <section id="footer">
       <h3>Created By</h3>
         <img src="assets/img/email.png" alt="">
        <a href="<?php echo home_url('/').'wp-admin'; ?>">Admin Login</a>
     </section>
      
    <script src="assets/js/bootstrap.js" ></script>
    <script src="assets/js/scroll.js"></script>
    
    <script>
//************end of testing script***************************************
    
/*window.addEventListener("resize", size);
    
function size(){
    var h = window.innerHeight;
    var w = window.innerWidth;
    var dimH = document.getElementById("dimH");
    var dimW = document.getElementById("dimW");
    
    dimH.innerHTML = "Height: " + h + "px";
    dimW.innerHTML = "Width: " + w + "px";
    
};*/
//*****************end of testing script*****************************
    
    </script>
    <?php wp_footer(); ?>
</body>
</html>