<!-- Start Tutors Section -->
<?php  if ($displaytutorsection) { ?>
<div class="tutors">
   <div class="container-fluid">
      <?php if($tutorssectionheading) { ?>
      <h1><?php echo $tutorssectionheading ?></h1>
      <?php } ?>
      <?php if($tutorssectiontagline) { ?>
      <p class="tagline"><?php echo $tutorssectiontagline ?></p>
      <?php } ?>
      <div class="expert-teachers container" id="first-section">
         <div class="scroll-block-container slider" id="teachers-slider">
            <a class="control_next" id="next-teacher"></a>
            <a class="control_prev" id="prev-teacher"></a>
            <div class="slider-wrapper" id="teacher-slider-wrapper">
               <ul class="teacher-slider" style="width: 1317.5px; margin-left: -155px;">
                  <?php  if ($displaytutor1) { ?>
                  <li id="teacher-0" data-comment="<?php echo $tutor1comment ?>" class="block-transition">
                     <div class="teacher-block">
                        <a href="<?php echo $tutor1url ?>" alt="Teacher Pic">
                        <img class="teacher-pic" src="<?php echo $tutor1image ?>" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           <?php if($tutor1name) { ?>
                           <p class="teacher-name"><?php echo $tutor1name ?></p>
                           <?php } ?>
                           <?php if($tutor1designation) { ?>
                           <p class="teacher-qualification"><?php echo $tutor1designation ?></p>
                           <?php } ?>
                           <?php if($tutor1rating) { ?>
                           <p class="teacher-rating"><?php echo $tutor1rating ?></p>
                           <?php } ?>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
                  <?php  if ($displaytutor2) { ?>
                  <li id="teacher-1" data-comment="<?php echo $tutor2comment ?>" class="block-transition">
                     <div class="teacher-block">
                        <a href="<?php echo $tutor2url ?>" alt="Teacher Pic">
                        <img class="teacher-pic" src="<?php echo $tutor2image ?>" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           <?php if($tutor2name) { ?>
                           <p class="teacher-name"><?php echo $tutor2name ?></p>
                           <?php } ?>
                           <?php if($tutor2designation) { ?>
                           <p class="teacher-qualification"><?php echo $tutor2designation ?></p>
                           <?php } ?>
                           <?php if($tutor2rating) { ?>
                           <p class="teacher-rating"><?php echo $tutor2rating ?></p>
                           <?php } ?>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
                  <?php  if ($displaytutor3) { ?>
                  <li id="teacher-2" data-comment="<?php echo $tutor3comment ?>" class="block-transition">
                     <div class="teacher-block">
                        <a href="<?php echo $tutor3url ?>" alt="Teacher Pic">
                        <img class="teacher-pic" src="<?php echo $tutor3image ?>" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           <?php if($tutor3name) { ?>
                           <p class="teacher-name"><?php echo $tutor3name ?></p>
                           <?php } ?>
                           <?php if($tutor3designation) { ?>
                           <p class="teacher-qualification"><?php echo $tutor3designation ?></p>
                           <?php } ?>
                           <?php if($tutor3rating) { ?>
                           <p class="teacher-rating"><?php echo $tutor3rating ?></p>
                           <?php } ?>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
                  <?php  if ($displaytutor4) { ?>
                  <li id="teacher-3" data-comment="<?php echo $tutor4comment ?>" class="block-transition">
                     <div class="teacher-block">
                        <a href="<?php echo $tutor4url ?>" alt="Teacher Pic">
                        <img class="teacher-pic" src="<?php echo $tutor4image ?>" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           <?php if($tutor4name) { ?>
                           <p class="teacher-name"><?php echo $tutor4name ?></p>
                           <?php } ?>
                           <?php if($tutor4designation) { ?>
                           <p class="teacher-qualification"><?php echo $tutor4designation ?></p>
                           <?php } ?>
                           <?php if($tutor4rating) { ?>
                           <p class="teacher-rating"><?php echo $tutor4rating ?></p>
                           <?php } ?>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
                  <?php  if ($displaytutor5) { ?>
                  <li id="teacher-4" data-comment="<?php echo $tutor5comment ?>" class="block-transition">
                     <div class="teacher-block">
                        <a href="<?php echo $tutor5url ?>" alt="Teacher Pic">
                        <img class="teacher-pic" src="<?php echo $tutor5image ?>" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           <?php if($tutor5name) { ?>
                           <p class="teacher-name"><?php echo $tutor5name ?></p>
                           <?php } ?>
                           <?php if($tutor5designation) { ?>
                           <p class="teacher-qualification"><?php echo $tutor5designation ?></p>
                           <?php } ?>
                           <?php if($tutor5rating) { ?>
                           <p class="teacher-rating"><?php echo $tutor5rating ?></p>
                           <?php } ?>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
                  <?php  if ($displaytutor6) { ?>
                  <li id="teacher-5" data-comment="<?php echo $tutor6comment ?>" class="block-transition">
                     <div class="teacher-block">
                        <a href="<?php echo $tutor6url ?>" alt="Teacher Pic">
                        <img class="teacher-pic" src="<?php echo $tutor6image ?>" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           <?php if($tutor6name) { ?>
                           <p class="teacher-name"><?php echo $tutor6name ?></p>
                           <?php } ?>
                           <?php if($tutor6designation) { ?>
                           <p class="teacher-qualification"><?php echo $tutor6designation ?></p>
                           <?php } ?>
                           <?php if($tutor6rating) { ?>
                           <p class="teacher-rating"><?php echo $tutor6rating ?></p>
                           <?php } ?>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
                  <?php  if ($displaytutor7) { ?>
                  <li id="teacher-6" data-comment="<?php echo $tutor7comment ?>" class="block-transition">
                     <div class="teacher-block">
                        <a href="<?php echo $tutor7url ?>" alt="Teacher Pic">
                        <img class="teacher-pic" src="<?php echo $tutor7image ?>" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           <?php if($tutor7name) { ?>
                           <p class="teacher-name"><?php echo $tutor7name ?></p>
                           <?php } ?>
                           <?php if($tutor7designation) { ?>
                           <p class="teacher-qualification"><?php echo $tutor7designation ?></p>
                           <?php } ?>
                           <?php if($tutor7rating) { ?>
                           <p class="teacher-rating"><?php echo $tutor7rating ?></p>
                           <?php } ?>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
                  <?php  if ($displaytutor8) { ?>
                  <li id="teacher-7" data-comment="<?php echo $tutor8comment ?>" class="block-transition">
                     <div class="teacher-block">
                        <a href="<?php echo $tutor8url ?>" alt="Teacher Pic">
                        <img class="teacher-pic" src="<?php echo $tutor8image ?>" alt="Teacher Pic">
                        </a>  
                        <div class="teacher-info">
                           <?php if($tutor8name) { ?>
                           <p class="teacher-name"><?php echo $tutor8name ?></p>
                           <?php } ?>
                           <?php if($tutor8designation) { ?>
                           <p class="teacher-qualification"><?php echo $tutor8designation ?></p>
                           <?php } ?>
                           <?php if($tutor8rating) { ?>
                           <p class="teacher-rating"><?php echo $tutor8rating ?></p>
                           <?php } ?>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
                  <?php  if ($displaytutor9) { ?>
                  <li id="teacher-7" data-comment="<?php echo $tutor9comment ?>" class="block-transition">
                     <div class="teacher-block">
                        <a href="<?php echo $tutor9url ?>" alt="Teacher Pic">
                        <img class="teacher-pic" src="<?php echo $tutor9image ?>" alt="Teacher Pic">
                        </a>  
                        <div class="teacher-info">
                           <?php if($tutor9name) { ?>
                           <p class="teacher-name"><?php echo $tutor9name ?></p>
                           <?php } ?>
                           <?php if($tutor9designation) { ?>
                           <p class="teacher-qualification"><?php echo $tutor9designation ?></p>
                           <?php } ?>
                           <?php if($tutor9rating) { ?>
                           <p class="teacher-rating"><?php echo $tutor9rating ?></p>
                           <?php } ?>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
               </ul>
            </div>
         </div>
         <div class="teacher-testimonial" id="teacher-comment"></div>
      </div>
   </div>
</div>
<?php } ?>
<!-- End Tutors Section -->
<!-- Google Analytics Tag -->
<script type="text/javascript" src="<?php echo $CFG->wwwroot ?>/theme/klassroom/javascript/profileSlider.min.js"></script>
