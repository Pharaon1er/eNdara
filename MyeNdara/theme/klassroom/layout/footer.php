<!-- Start Clients Logo section -->
<?php  if ($display_clientlogoarea) { ?>
<div class="clients-logo">
   <div class="container-fluid">
      <div class="row-fluid">
         <div class="span2">
            <img src="<?php echo $clientlogo1 ?>" alt="client-logo-1" />
         </div>
         <div class="span2">
            <img src="<?php echo $clientlogo2 ?>" alt="client-logo-2" />
         </div>
         <div class="span2">
            <img src="<?php echo $clientlogo3 ?>" alt="client-logo-3" />
         </div>
         <div class="span2">
            <img src="<?php echo $clientlogo4 ?>" alt="client-logo-4" />
         </div>
         <div class="span2">
            <img src="<?php echo $clientlogo5 ?>" alt="client-logo-5" />
         </div>
         <div class="span2">
            <img src="<?php echo $clientlogo6 ?>" alt="client-logo-6" />
         </div>
      </div>
   </div>
</div>
<?php } ?>
<!-- End Clients Logo section -->
<!-- Start Footer Section -->
<footer id="page-footer">
   <div class="container-fluid">
      <div class="row-fluid">
         <div class="span3">
            <img class="footer-logo" src="<?php echo $footerlogo ?>" alt="footer-logo" />
            <?php if($footersection1description) { ?>
            <p><?php echo $footersection1description ?></p>
            <?php } ?>
         </div>
         <div class="span3">
            <ul>
               <li>
                  <?php if($footersection2heading) { ?>
                  <h5><?php echo $footersection2heading ?></h5>
                  <?php } ?>
                  <ul class="common">
                     <?php if($footersection2link1) { ?>
                     <li><a href="<?php echo $footersection2link1url ?>"><?php echo $footersection2link1 ?></a></li>
                     <?php } ?>
                     <?php if($footersection2link2) { ?>
                     <li><a href="<?php echo $footersection2link2url ?>"><?php echo $footersection2link2 ?></a></li>
                     <?php } ?>
                     <?php if($footersection2link3) { ?>
                     <li><a href="<?php echo $footersection2link3url ?>"><?php echo $footersection2link3 ?></a></li>
                     <?php } ?>
                     <?php if($footersection2link4) { ?>
                     <li><a href="<?php echo $footersection2link4url ?>"><?php echo $footersection2link4 ?></a></li>
                     <?php } ?>
                     <?php if($footersection2link5) { ?>
                     <li><a href="<?php echo $footersection2link5url ?>"><?php echo $footersection2link5 ?></a></li>
                     <?php } ?>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="span3">
            <ul>
               <li>
                  <?php if($footersection3heading) { ?>
                  <h5><?php echo $footersection3heading ?></h5>
                  <?php } ?>
                  <ul class="common">
                     <?php if($footersection3link1) { ?>
                     <li><a href="<?php echo $footersection3link1url ?>"><?php echo $footersection3link1 ?></a></li>
                     <?php } ?>
                     <?php if($footersection3link2) { ?>
                     <li><a href="<?php echo $footersection3link2url ?>"><?php echo $footersection3link2 ?></a></li>
                     <?php } ?>
                     <?php if($footersection3link3) { ?>
                     <li><a href="<?php echo $footersection3link3url ?>"><?php echo $footersection3link3 ?></a></li>
                     <?php } ?>
                     <?php if($footersection3link4) { ?>
                     <li><a href="<?php echo $footersection3link4url ?>"><?php echo $footersection3link4 ?></a></li>
                     <?php } ?>
                     <?php if($footersection3link5) { ?>
                     <li><a href="<?php echo $footersection3link5url ?>"><?php echo $footersection3link5 ?></a></li>
                     <?php } ?>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="span3">
            <ul>
               <li>
                  <?php if($footersection4heading) { ?>
                  <h5><?php echo $footersection4heading ?></h5>
                  <?php } ?>
                  <ul class="common">
                     <?php if($footersection4link1) { ?>
                     <li><a href="<?php echo $footersection4link1url ?>"><?php echo $footersection4link1 ?></a></li>
                     <?php } ?>
                     <?php if($footersection4link2) { ?>
                     <li><a href="<?php echo $footersection4link2url ?>"><?php echo $footersection4link2 ?></a></li>
                     <?php } ?>
                     <?php if($footersection4link3) { ?>
                     <li><a href="<?php echo $footersection4link3url ?>"><?php echo $footersection4link3 ?></a></li>
                     <?php } ?>
                     <?php if($footersection4link4) { ?>
                     <li><a href="<?php echo $footersection4link4url ?>"><?php echo $footersection4link4 ?></a></li>
                     <?php } ?>
                     <?php if($footersection4link5) { ?>
                     <li><a href="<?php echo $footersection4link5url ?>"><?php echo $footersection4link5 ?></a></li>
                     <?php } ?>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="bottom-footer">
         <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
         <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
         <?php
            echo $html->footnote;
            //echo $OUTPUT->login_info();
            //echo $OUTPUT->home_link();
            echo $OUTPUT->standard_footer_html();
            ?>
      </div>
   </div>
</footer>
<!-- End Footer Section -->
<?php echo $OUTPUT->standard_end_of_body_html() ?>
<!-- Start Back To Top -->    
<?php
   // Code for back to top.
   if (!empty($PAGE->theme->settings->backtotop)) {
   ?>
<div id="backtotop" style="display: none;"> 
   <a class="scrollup" href="javascript:void(0);" title="<?php echo get_string('backtotop', 'theme_klassroom')?>">
   </a>
</div>
<?php 
   }
   ?>
<!-- End Back To Top -->  
</div>
<script>
   jQuery(document).ready(function($) {
       
       $( '.sldr' ).each( function() {
   		var th = $( this );
   		th.sldr({
   			focalClass    : 'focalPoint',
   			offset        : th.width() / 2,
   			sldrWidth     : 'responsive',
   			nextSlide     : th.nextAll( '.sldr-nav.next:first' ),
   			previousSlide : th.nextAll( '.sldr-nav.prev:first' ),
   			selectors     : th.nextAll( '.selectors:first' ).find( 'li' ),
   			toggle        : th.nextAll( '.captions:first' ).find( 'div' ),
   			sldrInit      : sliderInit,
   			sldrStart     : slideStart,
   			sldrComplete  : slideComplete,
   			sldrLoaded    : sliderLoaded,
   			sldrAuto      : true,
   			sldrTime      : 5000,
   			hasChange     : true
   		});
   	});
   });
       
   
   /**
    * Sldr Callbacks
    */
   
   /**
    * When the sldr is initiated, before the DOM is manipulated
    * @param {object} args the slides, callback, and config of the slider
    * @return null
    */
   function sliderInit( args ) {
   
   }
   
   /**
    * When individual slides are loaded
    * @param {object} args the slides, callback, and config of the slider
    * @return null
    */
   function slideLoaded( args ) {
   
   }
   
   /**
    * When the full slider is loaded, after the DOM is manipulated
    * @param {object} args the slides, callback, and config of the slider
    * @return null
    */
   function sliderLoaded( args ) {
   
   }
   
   /**
    * Before the slides change focal points
    * @param {object} args the slides, callback, and config of the slider
    * @return null
    */
   function slideStart( args ) {
   
   }
   
   /**
    * After the slides are done changing focal points
    * @param {object} args the slides, callback, and config of the slider
    * @return null
    */
   function slideComplete( args ) {
   
   }
   
</script>
</body>
</html>