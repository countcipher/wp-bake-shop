<!DOCTYPE html>
<html lang="en">
<head>
   <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Awesome Baker</title>
    <script src="assets/js/jquery.js" ></script>
    
    <style>
    
    
    #dimensions{
        position: fixed;
        background-color: #fff;
        cursor: pointer;
        width: 100px;
        z-index: 9999;
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
               <h1>Awesome Baker</h1>
               <h2>We Prepare The Best Taste In Town!</h2>
               <div id="smallHeroCTA" class="hero-cta">Order Now!</div>
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
               <h1>Awesome Baker</h1>
               <h2>We Prepare The Best Taste In Town!</h2>
               <div id="scrollToCTA" class="hero-cta">Order Now!</div>
           </div>
            <div class="item active">
              <img src="assets/img/macarons-2548827_1280.jpg" alt="...">
              <div class="carousel-caption">
                
              </div>
            </div>
            <div class="item">
              <img src="assets/img/cake-pops-693645_1280.jpg" alt="...">
              <div class="carousel-caption">

              </div>
            </div>
             <div class="item">
              <img src="assets/img/cupcakes-690040_1280.jpg" alt="...">
              <div class="carousel-caption">

              </div>
            </div>

          </div>

          <!-- Controls -->
         
          
        </div>
 
   </section><!--hero-->
   
   <div class="scallop-white-up"></div>
   <section id="gallery">
      <h1>Delicious Creations</h1>
       <div class="gallery-post">
           <div class="gallery-wrapper">
               <img src="assets/img/gallery1.jpg" alt="">
            </div>
           <div class="gallery-title">Item</div>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nesciunt, hic odit, provident voluptas debitis!</p>
           <div class="gallery-divider"></div>
        </div><!--gallery-post-->
       
        <div class="gallery-post">
            <div class="gallery-wrapper">
               <img src="assets/img/gallery2.jpg" alt="">
            </div>
           <div class="gallery-title">Item</div>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nesciunt, hic odit, provident voluptas debitis!</p>
           <div class="gallery-divider"></div>
        </div><!--gallery-post-->
       
        <div class="gallery-post">
           <div class="gallery-wrapper">
               <img src="assets/img/gallery3.jpg" alt="">
            </div>
           <div class="gallery-title">Item</div>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nesciunt, hic odit, provident voluptas debitis!</p>
           <div class="gallery-divider"></div>
        </div><!--gallery-post-->
        
         <div class="gallery-post">
           <div class="gallery-wrapper">
               <img src="assets/img/gallery4.jpg" alt="">
            </div>
           <div class="gallery-title">Item</div>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nesciunt, hic odit, provident voluptas debitis!</p>
           <div class="gallery-divider"></div>
        </div><!--gallery-post-->
        
         <div class="gallery-post">
           <div class="gallery-wrapper">
               <img src="assets/img/gallery5.jpg" alt="">
            </div>
           <div class="gallery-title">Item</div>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nesciunt, hic odit, provident voluptas debitis!</p>
           <div class="gallery-divider"></div>
        </div><!--gallery-post-->
   </section><!--gallery-->
   <div class="scallop-white-down"></div>
   
   <section id="about">
       <div class="profile">
          <h1>About Awesome Baker</h1>
           <img src="assets/img/womanBaking.jpg" alt="">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, fugiat, animi distinctio quas illo deserunt explicabo. Dolor hic quod dicta repellendus illum laboriosam at, quidem laudantium tenetur adipisci labore, temporibus fugiat reprehenderit distinctio, dignissimos modi ipsum quae debitis! A nemo odit officiis dolorum, debitis architecto! Ipsam saepe iste, tempora minima.</p>
       </div>
   </section><!--ABOUT-->
     
     <div style="top: -10px" class="scallop-purple-up"></div>
    <section id="cta">
        <h2>Ready To Order?</h2>
        <img class="animated infinite bounce" src="assets/img/cakes-1953211_1280.png" alt="">
        <h2>Call (555) 555-5555</h2>
    </section><!--CTA-->
     <div style="top: -15px" class="scallop-purple-down"></div>
     
     <section id="footer">
         <h3>Created By</h3>
         <img src="assets/img/email.png" alt="">
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