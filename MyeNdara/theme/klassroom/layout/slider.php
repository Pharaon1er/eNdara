<!-- Start Slider Section -->
<div class="stage" dir="ltr">
   <div id="SLDR-ONE" class="sldr">
      <ul class="wrp animate">
         <li class="elmnt-one">
            <div class="skew">
               <div class="wrap"><img src="<?php echo $slider1image ?>" width="1000" height="563"></div>
            </div>
         </li>
         <li class="elmnt-two">
            <div class="skew">
               <div class="wrap"><img src="<?php echo $slider2image ?>" width="1000" height="563"></div>
            </div>
         </li>
         <li class="elmnt-three">
            <div class="skew">
               <div class="wrap"><img src="<?php echo $slider3image ?>" width="1000" height="563"></div>
            </div>
         </li>
         <li class="elmnt-four">
            <div class="skew">
               <div class="wrap"><img src="<?php echo $slider4image ?>" width="1000" height="563"></div>
            </div>
         </li>
      </ul>
   </div>
   <div class="clearfix"></div>
   <div class="captions">
      <div class="focalPoint">
         <?php if($slider1caption) { ?>
         <p><?php echo $slider1caption ?></p>
         <?php } ?>
         <?php if($slider1heading) { ?>
         <?php echo $slider1heading ?>
         <?php } ?>
      </div>
      <div>
         <?php if($slider2caption) { ?>
         <p><?php echo $slider2caption ?></p>
         <?php } ?>
         <?php if($slider2heading) { ?>
         <?php echo $slider2heading ?>
         <?php } ?>
      </div>
      <div>
         <?php if($slider3caption) { ?>
         <p><?php echo $slider3caption ?></p>
         <?php } ?>
         <?php if($slider3heading) { ?>
         <?php echo $slider3heading ?>
         <?php } ?>
      </div>
      <div>
         <?php if($slider4caption) { ?>
         <p><?php echo $slider4caption ?></p>
         <?php } ?>
         <?php if($slider4heading) { ?>
         <?php echo $slider4heading ?>
         <?php } ?>
      </div>
   </div>
   <button class="sldr-prv sldr-nav prev"></button>
   <button class="sldr-nxt sldr-nav next"></button>
</div>
<!-- End Slider Section -->
<?php require_once(dirname(__FILE__).'/blocks.php'); ?>
<div class="clearfix"></div>
<script type="text/javascript" src="<?php echo $CFG->wwwroot ?>/theme/klassroom/javascript/jquery.sldr.js"></script>