<!DOCTYPE html>
<html>
<head>
  <title>InSegment-ThankYou
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <?php wp_head(); ?>

</head>
<body>
<script src="<?php echo get_template_directory_uri();?>/scripts/jquery.js"></script>
<script src="<?php echo get_template_directory_uri();?>/scripts/parsley.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/scripts/slick.js"></script>
<div class="fluid-container" style="background-image: url(<?php the_field('headerback'); ?>);">
  <div class="container headerfront">
    <div class="row row1">
      <div class="offset-0 col-12 offset-sm-0 col-sm-4 offset-md-0 col-md-3 offset-md-0 col-lg-4 offset-xl-0 col-xl-2" >
        <?php
          $image = get_field('logoimg');
          if( !empty($image) ): ?>
          	<img class="logofirst" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
      </div>
      <div class=" offset-0 col-6 offset-sm-4 col-sm-4 offset-md-2 col-md-3 offset-lg-2 col-lg-3 offset-xl-6 col-xl-2 divphone">

        <?php
          $image = get_field('telicon');
          if( !empty($image) ): ?>
            <img class="icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        <a href="tel:+40770921650" class="phonenumber1"><?php the_field('number'); ?></a>
      </div>
      <div class="offset-0 col-6 offset-sm-0 col-sm-12 offset-md-0 col-md-4 offset-lg-0 col-lg-3 offset-xl-0 col-xl-2 divbutton">
        <a href="#sect4" class="button1" onclick="document.getElementById('sect4').classList.add('menupadd1');"><?php the_field('buttontext'); ?></a>
      </div>
    </div>
    <div class="row">
          <div class="col-12">
              <p  class="titlupag2" ><?php the_field('titlupag2'); ?></p>
          </div>
          <div class="col-12">
              <p class="subtitlupag2"><?php the_field('subtitlupag2'); ?></p>
          </div>

    </div>
    <div class="row">
      <div class="offset-5 col-2">
        <div class="linieturcoaz"></div>
      </div>
    </div>
    <div class="row">
      <div class="offset-2 col-8">
        <p class="textpag2"><?php the_field('textpag2'); ?></p>
      </div>
    </div>
  </div>
</div>
<div class="fluid-container liniemareturcoaz"></div>
<div class="fluid-container footerback">
  <div class="container footerfront">
    <div class="row footerfirstrow">
      <div class="abcd col-xl-2 col-lg-2 col-md-3 col-sm-3 offset-0 col-12">
        <a href="https://www.insegment.com/" target="_blank"><img src="<?php the_field('footerlogo2'); ?>" /></a>
      </div>
      <div class="abd offset-sm-5 col-sm-4 offset-md-6 col-md-3 offset-lg-3 col-lg-3 offset-xl-3 col-xl-3 offset-0 col-12">

           <a href="#"><img class="iconite" src="<?php the_field('footericon1'); ?>" /></a>
           <a href="#"><img class="iconite" src="<?php the_field('footericon2'); ?>" /></a>
           <a href="#"><img class="iconite" src="<?php the_field('footericon3'); ?>" /></a>
           <a href="#"><img class="iconite" src="<?php the_field('footericon4'); ?>" /></a>

       </div>
   </div>
   <div class="row footersecondrow">
     <div class="col-xl-4 col-lg-4 col-md-12">
       <div class="footertext1">
         <p><?php the_field('footertext1p2'); ?></p>
         </div>
     </div>
     <div class="offset-md-0 col-md-12 offset-lg-0 col-lg-4 offset-xl-0 col-xl-4">
       <div class="footertext2">
         <a href="https://www.google.com/maps/place/300+Washington+St+%23850,+Newton,+MA+02458,+Statele+Unite+ale+Americii/@42.3567358,-71.1881739,17z/data=!3m1!4b1!4m5!3m4!1s0x89e3780b62a3baf7:0x5a62690bacb96f82!8m2!3d42.3567319!4d-71.1859798" target="blank"class="footertext2"><?php the_field('footertext2p2'); ?></a>
       </div>
     </div>
     <div class="offset-lg-1 col-lg-3 offset-xl-1 col-xl-3">
       <a href="#"><img class="google" src="<?php the_field('googleiconp2'); ?>" /></a>
     </div>
   </div>
 </div>
</div>
<?php get_footer(); ?>
