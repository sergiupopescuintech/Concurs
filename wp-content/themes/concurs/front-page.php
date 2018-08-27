<?php get_header(); ?>
<script src="<?php echo get_template_directory_uri();?>/scripts/jquery.js"></script>
<script src="<?php echo get_template_directory_uri();?>/scripts/parsley.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/scripts/slick.js"></script>
<div class="fluid-container" style="background-image: url(<?php the_field('background_image'); ?>);">
  <div class="container headerfront">
    <div class="row row1">
      <div class="offset-0 col-12 offset-sm-0 col-sm-4 offset-md-0 col-md-3 offset-md-0 col-lg-4 offset-xl-0 col-xl-2" >
        <?php
          $image = get_field('image1');
          if( !empty($image) ): ?>
          	<img class="logofirst" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
      </div>
      <div class=" offset-0 col-6 offset-sm-4 col-sm-4 offset-md-2 col-md-3 offset-lg-2 col-lg-3 offset-xl-6 col-xl-2 divphone">

        <?php
          $image = get_field('telephoneicon');
          if( !empty($image) ): ?>
            <img class="icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        <a href="tel:+40770921650" class="phonenumber1"><?php the_field('phonenumber'); ?></a>
      </div>
      <div class="offset-0 col-6 offset-sm-0 col-sm-12 offset-md-0 col-md-4 offset-lg-0 col-lg-3 offset-xl-0 col-xl-2 divbutton">
        <a href="#sect4" class="button1" onclick="document.getElementById('sect4').classList.add('menupadd1');"><?php the_field('button1text'); ?></a>
      </div>
    </div>
    <div class="row row2">
      <div class="col-md-12 col-lg-7 col-xl-8">
            <div >
              <p class="titlupagina"><?php the_field('titlupagina'); ?></p>
            </div>
            <div>
              <p class="subtitlupagina"><?php the_field('subtitlupagina'); ?></p>
            </div>
            <div>
              <p class="text1"><?php the_field('text1'); ?></p>
            </div>
      </div>
      <div class="offset-sm-2 col-sm-8 offset-md-2 col-md-8 offset-lg-0 col-lg-5 offset-xl-0 col-xl-4 ">
            <div class="chestionar">
                  <div class="divchestionartitlu">
                        <p class="chestionartitlu"><?php the_field('formulartitle'); ?></p>
                        <div class="baraportocalie">
                        </div>
                  </div>
                  <div class="chestionardate">
                        <p class="chestionarsubtitlu"><?php the_field('formularsubtitle'); ?></p>

                        <form data-validate="parsley" data-parsley-validate="" action="http://localhost/ConcursWeb/thank-you/">
                          <input class="casuteformular" type="text" name="firstname" data-parsley-field1 data-parsley-required="true" data-parsley-required-message="Please complete your first name" placeholder="First Name*:" size="30" >
                          <input class="casuteformular" type="text" name="alphanumeric" data-parsley-field2 data-parsley-required="true" data-parsley-required-message="Please complete your last name" placeholder="Last Name*:" >
                          <input class="casuteformular" type="email" name="email" data-parsley-field3 data-parsley-required="true" data-parsley-required-message="Please complete your E-mail" placeholder="E-mail*:" >
                          <input class="casuteformular" type="tel" name="tel" data-parsley-field4  data-parsley-required="true" data-parsley-required-message="Please complete your number" placeholder="Phone:"  >
                          <button href="http://localhost/ConcursWeb/thank-you/" class="submitbutton" type="submit" ><?php the_field('submitbuttontext'); ?></button>
                        </form>
                        <script>
                        window.Parsley.addValidator('field4', {
                            validateString: function(value) {
                              var patt = new RegExp("^\(?([0-9]{3})\)?[-.●]?([0-9]{3})[-.●]?([0-9]{4})$");
                              return patt.test(value);
                            },
                            messages: {
                              en:'Please enter a valid american phone number'
                            }
                            });
                            window.Parsley.addValidator('field1', {
                            validateString: function(value) {
                              var patt = new RegExp("^[a-zA-Z\s]+$");
                              return patt.test(value);
                            },
                            messages: {
                              en:'You Can Only Use Letters'
                            }
                            });

                            window.Parsley.addValidator('field2', {
                            validateString: function(value) {
                              var patt = new RegExp("^[a-zA-Z\s]+$");
                              return patt.test(value);
                            },
                            messages: {
                              en:'You Can Only Use Letters'
                            }
                            });


                        </script>
                  </div>
            </div>
      </div>
    </div>
  </div>
</div>
<div class="fluid-container" id="navbar">
    <div class="divmenu">

        <a id="s1" onclick="document.getElementById('sect1').classList.add('menupadd1'); document.getElementById('s1').classList.add('active'); document.getElementById('s2').classList.remove('active'); document.getElementById('s3').classList.remove('active');" href="#sect1">SECT1</a>

        <a id="s2" onclick="document.getElementById('sect2').classList.add('menupadd1'); document.getElementById('s1').classList.remove('active'); document.getElementById('s2').classList.add('active'); document.getElementById('s3').classList.remove('active');" href="#sect2">SECT2</a>

        <a id="s3" onclick="document.getElementById('sect3').classList.add('menupadd1'); document.getElementById('s1').classList.remove('active'); document.getElementById('s2').classList.remove('active'); document.getElementById('s3').classList.add('active');" href="#sect3">SECT3</a>

    </div>
</div>

<div  class="content" id="contentafter">
   <div class="fluid-container firstsectionback" id="sect1" style="background-image: url(<?php the_field('imagesection1'); ?>);">
     <div class=" container firstsectionfront">
       <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
            <p class="firstsectiontitle"> <?php the_field('s1title'); ?></p>
          </div>
       </div>
       <div class="liniealbastra"></div>
       <div class="row">
         <div class="col-12">
           <p class="fisrtsectiontextline"> <?php the_field('textlinesection1'); ?></p>
         </div>
       </div>
       <div class="row">
           <div class="rowflex1">
     				<div>
              <img class="columnicon" src="<?php the_field('column1image'); ?>" />
              <p class="columntitle"><?php the_field('column1title'); ?></p>
              <p class="liniecoloana"></p>
              <p class="columntext1"><?php the_field('column1text'); ?></p>
     				</div>

     				<div>
              <img class="columnicon" src="<?php the_field('column2image'); ?>" />
              <p class="columntitle"><?php the_field('column2title'); ?></p>
              <p class="liniecoloana"></p>
              <p class="columntext2"><?php the_field('column2text'); ?></p>
     				</div>

     				<div>
              <img class="columnicon" src="<?php the_field('column3image'); ?>" />
              <p class="columntitle"><?php the_field('column3title'); ?></p>
              <p class="liniecoloana"></p>
              <p class="columntext3"><?php the_field('column3text'); ?></p>
     				</div>

            <div>
              <img class="columnicon" src="<?php the_field('column4image'); ?>" />
              <p class="columntitle"><?php the_field('column4title'); ?></p>
              <p class="liniecoloana"></p>
              <p class="columntext4"><?php the_field('column4text'); ?></p>
     				</div>

     			</div>
       </div>
       <div class="row">
         <div class="col-md-12 col-lg-5 col-xl-5">
              <p class="textbeforelist"><?php the_field('textbeforelist'); ?></p>
         </div>
       </div>
       <div class="row listrow">
         <div class="col-md-12 col-lg-10 col-xl-10">
              <p class="listhead"><?php the_field('listhead'); ?></p>
              <ul>
                <li><?php the_field('listitem1'); ?></li>
                <li><?php the_field('listitem2'); ?></li>
                <li><?php the_field('listitem3'); ?></li>
                <li><?php the_field('listitem4'); ?></li>
              </ul>
         </div>
       </div>
       <div class="row">
         <div class="col-md-11 col-lg-11 col-xl-11">
           <p class="s1lastline"><?php the_field('s1lastline'); ?></p>
         </div>
      </div>
     </div>

   </div>
   <div class="fluid-container secondsectionback" id="sect2" style="background-image: url(<?php the_field('imagesection2'); ?>);">
      <div class="container secondsectionfront">
        <div class="row">
          <div class="col-10">
            <p class="secondsectiontitle"><?php the_field('s2title'); ?></p>
          </div>
        </div>
        <div class="linieverde"></div>
        <div class="row">

              <div class="col-lg-4   col-xl-3 ">
                <img class="imgpdf" src="<?php the_field('imagedoc1'); ?>" />
                <a href="#" class="underdoc"><?php the_field('doc1text'); ?></a>
              </div >
              <div class="col-lg-4 offset-xl-1 col-xl-3 ">
                <img class="imgpdf" src="<?php the_field('imagedoc2'); ?>" />
                <a href="#" class="underdoc"><?php the_field('doc2text'); ?></a>
              </div>
              <div class=" col-lg-4 offset-xl-1 col-xl-3 ">
                <img class="imgpdf" src="<?php the_field('imagedoc3'); ?>" />
                <a href="#" class="underdoc"><?php the_field('doc3text'); ?></a>
              </div>

        </div>
      </div>
    </div>
   <div class="fluid-container thirdsectionback" id="sect3" style="background-image: url(<?php the_field('imagesection3'); ?>);">

     <div class="container thirdsectionfront">

       <div class="row">
         <div class="col-10">
           <p class="thirdsectiontitle"><?php the_field('s3title'); ?></p>
         </div>
       </div>
       <div class="linierosie"></div>
       <div class="row">
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
           <img class="tabel" src="<?php the_field('s3img1'); ?>" />
         </div>
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 video">

           <script>
                  function startLightBox(){
                  var lbBg = document.getElementById("lightBoxBg");
                  var lb = document.getElementById("lightBox");

                  lbBg.style.display = "block";
                  lb.style.display = "block";
                  }

                  function dismiss(){
                      var lbBg = document.getElementById("lightBoxBg");
                      var lb = document.getElementById("lightBox");
                      lbBg.style.display = "none";
                      lb.style.display = " none";
                  }
          </script>

              <div id="lightBox">
                <iframe width="700px" height="400px" src="https://www.youtube.com/embed/f-C-7OhK4CM"></iframe>
              </div>
                <a onclick="startLightBox()">
                    <img class="playbutton" src="<?php the_field('playbutton'); ?>"/>
                </a>
              <img class="imgvideo" src="<?php the_field('s3img2'); ?>" />
              <p class="imgvideotext"><?php the_field('imgvideotext'); ?></p>
        </div>
       </div>
     </div>
   </div>
   <div class="fluid-container forthsectionback" id="sect4" style="background-image: url(<?php the_field('imagesection4'); ?>);">
     <div class="container forthsectionfront">
       <div class="row">
         <div class="col-lg-10 col-xl-5">
           <p class="forthsectiontitle"><?php the_field('s4title'); ?></p>
        </div>
      </div>
      <div class="liniealbastruie"></div>
      <div class="thing sliderbottom" id="wrapper" >
        <div>
          <a href=""><img src="<?php the_field('slider1'); ?>" class='slider_img' alt="slider image" /></a>
        </div>
        <div>
          <a href=""><img src="<?php the_field('slider2'); ?>" class='slider_img' alt="slider image" /></a>
        </div>
        <div>
          <a href=""><img src="<?php the_field('slider3'); ?>" class='slider_img' alt="slider image" /></a>
        </div>
        <div>
          <a href=""><img src="<?php the_field('slider4'); ?>" class='slider_img' alt="slider image" /></a>
        </div>
        <div>
          <a href=""><img src="<?php the_field('slider5'); ?>" class='slider_img' alt="slider image" /></a>
        </div>

        <div>
          <a href=""><img src="<?php the_field('slider1'); ?>" class='slider_img' alt="slider image" /></a>
        </div>
        <div>
          <a href=""><img src="<?php the_field('slider2'); ?>" class='slider_img' alt="slider image" /></a>
        </div>
        <div>
          <a href=""><img src="<?php the_field('slider3'); ?>" class='slider_img' alt="slider image" /></a>
        </div>
        <div>
          <a href=""><img src="<?php the_field('slider4'); ?>" class='slider_img' alt="slider image" /></a>
        </div>
        <div>
          <a href=""><img src="<?php the_field('slider5'); ?>" class='slider_img' alt="slider image" /></a>
        </div>

      </div>

      <script type="text/javascript">
      $(document).ready(function(){
          $('.thing').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            speed: 300,
            dots:false,
            arrows:false,
            autoplay: true,
            autoplaySpeed:2000,
            responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
          });
          });
      </script>
     </div>
   </div>
   <div class="fluid-container redline"></div>
   <div class="fluid-container footerback">
     <div class="container footerfront">
       <div class="row footerfirstrow">
         <div class="abcd col-xl-2 col-lg-2 col-md-3 col-sm-3 offset-0 col-12">
           <a href="https://www.insegment.com/" target="_blank"><img src="<?php the_field('footerlogo'); ?>" /></a>
         </div>
         <div class="abd offset-sm-5 col-sm-4 offset-md-6 col-md-3 offset-lg-3 col-lg-3 offset-xl-3 col-xl-3 offset-0 col-12 ">

              <a href="#"><img class="iconite" src="<?php the_field('icon1'); ?>" /></a>
              <a href="#"><img class="iconite" src="<?php the_field('icon2'); ?>" /></a>
              <a href="#"><img class="iconite" src="<?php the_field('icon3'); ?>" /></a>
              <a href="#"><img class="iconite" src="<?php the_field('icon4'); ?>" /></a>

          </div>
      </div>
      <div class="row footersecondrow">
        <div class="col-xl-4 col-lg-4 col-md-12">
          <div class="footertext1">
            <p><?php the_field('footertext1'); ?></p>
            </div>
        </div>
        <div class="offset-md-0 col-md-12 offset-lg-0 col-lg-4 offset-xl-0 col-xl-4">
          <div class="footertext2">
            <a href="https://www.google.com/maps/place/300+Washington+St+%23850,+Newton,+MA+02458,+Statele+Unite+ale+Americii/@42.3567358,-71.1881739,17z/data=!3m1!4b1!4m5!3m4!1s0x89e3780b62a3baf7:0x5a62690bacb96f82!8m2!3d42.3567319!4d-71.1859798" target="blank"class="footertext2"><?php the_field('footertext2'); ?></a>
          </div>
        </div>
        <div class="offset-lg-1 col-lg-3 offset-xl-1 col-xl-3">
          <a href="#"><img class="google" src="<?php the_field('googleicon'); ?>" /></a>
        </div>
      </div>
    </div>
   </div>

   </div>
<script>
      window.onscroll = function() {myFunction()};

      var navbar = document.getElementById("navbar");
      var padd = document.getElementById("contentafter");
      var active = document.getElementsByClassName('active');
      var sticky = navbar.offsetTop;

      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
          padd.classList.add("menupadd")
          for(var i=0; i<active.length; i++)
          {
            active[i].classList.remove('active-absolute');
            active[i].classList.add('active-fixed');
          }

        } else {
          navbar.classList.remove("sticky");
          padd.classList.remove("menupadd");
          for(var i=0; i<active.length; i++)
          {
            active[i].classList.remove('active-fixed');
            active[i].classList.add('active-absolute');
          }
        }
      }
      $(document).scroll(function() {

  var scrollTop = $(window).scrollTop();

        if (scrollTop >= document.getElementById("sect1").offsetTop-10 && scrollTop<document.getElementById("sect2").offsetTop) {
            $('#s1').addClass("active");
        }
        else{
            $('#s1').removeClass("active");
        }
        if (scrollTop >= document.getElementById("sect2").offsetTop-10 && scrollTop < document.getElementById("sect3").offsetTop) {
            $('#s2').addClass("active");
            $('#s1').removeClass("active");
        }
        else{
            $('#s2').removeClass("active");
        }
        if (scrollTop >= document.getElementById("sect3").offsetTop-10 && scrollTop<document.getElementById("sect4").offsetTop) {
            $('#s3').addClass("active");
            $('#s2').removeClass("active");
        }
        else{
            $('#s3').removeClass("active");
        }

});
</script>


<?php get_footer(); ?>
