<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <?php include('includes/include_css.html') ?>
           <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>
    </head>
    
    <body>
    
     <?php include('includes/header.html') ?>
		
	<div class="back-cover">
	<div class="breadcumb-wrapper">
	<ol class="breadcrumb">
  <li><a href="index.php">HOME</a></li>
  <li><a href="index.php#villa">VILLA</a></li>
<li><a href="index.php#bamboo-grove">BAMBOO GROVE</a></li>
    <li class="active">AMENITIES</li>
</ol>
</div>

<div class="brd1 animis">
		<div class="back-cover-img">
			
		</div></div>
		<a href="index.php"> <div class="back-button hidden-xs sidepan pic">
		<img src="img/back.png" style="width: 80%;">
		</div></a>
	</div>
	    
	    <div class="container-fluid amin-space-adjust">
	    <div class="head-line" style="margin-top: 25px;"></div>
	    	<div class="ssf wow fadeInUp">BAMBOO<br>
GROOVE</div>
<p class="about-us-info-text wow fadeInUp">
	Located in Alibaug, 'Bamboo Grove' offers a luxury living experience in its carefully designed sprawling 4 bedroom villas with refreshing views of Nature's beauty. A designated Eco-tourism Zone, Alibaug is home to ancient sites, green fields, hillscape and beautiful beaches. It is conveniently located just 20 minutes away from the Mandwa jetty and each villa is available on an area of 34 gunthas (1/40th of an acre).<br><br>

Each villa is Vastu complaint and has a private swimming pool, sunken seat spa room and private sundecks for the recreation and comfort of the residents. An organic kitchen garden, modular kitchen and a barbeque are will help enhance your meal. A gorgeous landscape garden adds to the beauty and serenity of the surroundings. 'Bamboo Grove' provides a resort like experience which will define a holistic and uber chic lifestyle.
</p>
	    </div>		
	    	
    <div style="background-color: #f5f5f5;">	
<div class="container-fluid" style="width: 85%; margin-right: inherit;">
<div class="head-line" style="margin-top: 25px;"></div>
	    	<div class="ssf">GALLARY</div>
<div id="owl-demo" class="owl-carousel">
                <div class="item"><img src="img/slider-paranoma/01.png" alt="Owl Image"></div>
                <div class="item"><img src="img/slider-paranoma/02.png" alt="Owl Image"></div>
                <div class="item"><img src="img/slider-paranoma/03.png" alt="Owl Image"></div>
                <div class="item"><img src="img/slider-paranoma/04.png" alt="Owl Image"></div>
                <div class="item"><img src="img/slider-paranoma/05.png" alt="Owl Image"></div>
                <div class="item"><img src="img/slider-paranoma/06.png" alt="Owl Image"></div>
                <div class="item"><img src="img/slider-paranoma/07.png" alt="Owl Image"></div>
              </div>
	</div>
	</div>
	
   <?php include('includes/footer.html') ?>
         <?php include('includes/include_js.html') ?>
         <script>
         $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 	pagination : false,
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
  navigation:true,
    navigationText: [
      "<i class='icon-chevron-left icon-white'><</i>",
      "<i class='icon-chevron-right icon-white'>></i>"
      ]
  });
 
});
         </script>
			
          <?php include('includes/include_GA.html') ?>
          
    </body>
    
</html>
