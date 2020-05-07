<!-- Start Colour Switcher Section -->
<?php if($displaycolourswitchersection) { ?>
<div id="colourswitcher">
   <input type="checkbox" id="navigation2" />
   <label for="navigation2" class="slideblocklabel"><i class="fa fa-paint-brush"></i></label>
   <nav class="slideblock">
      <?php if($colourswitcherheading) { ?>
      <span class="title"><?php echo $colourswitcherheading ?></span>
      <?php } ?>
      <?php if($colourswitchertagline) { ?>
      <span class="title2"><?php echo $colourswitchertagline ?></span>
      <?php } ?>
      <ul class="clearfix">
         <li><a href="<?php echo new moodle_url($PAGE->url, array('klassroomcolour'=>'blue')); ?>" class="styleswitch
            colour-blue"><img src="<?php echo $OUTPUT->image_url('blue-theme2', 'theme'); ?>" alt="blue" /></a></li>
         <li><a href="<?php echo new moodle_url($PAGE->url, array('klassroomcolour'=>'lightblue')); ?>"
            class="styleswitch colour-lightblue"><img src="<?php echo $OUTPUT->image_url('lightblue-theme2', 'theme'); ?>"
            alt="lightblue" /></a></li>
         <li><a href="<?php echo new moodle_url($PAGE->url, array('klassroomcolour'=>'red')); ?>"
            class="styleswitch colour-red"><img src="<?php echo $OUTPUT->image_url('red-theme2', 'theme'); ?>"
            alt="red" /></a></li>
         <li><a href="<?php echo new moodle_url($PAGE->url, array('klassroomcolour'=>'green')); ?>"
            class="styleswitch colour-green"><img src="<?php echo $OUTPUT->image_url('green-theme2', 'theme');
            ?>"
            alt="green" /></a></li>
         <li><a href="<?php echo new moodle_url($PAGE->url, array('klassroomcolour'=>'yellow')); ?>"
            class="styleswitch colour-yellow"><img src="<?php echo $OUTPUT->image_url('yellow-theme2', 'theme');
            ?>"
            alt="yellow" /></a></li>
         <li><a href="<?php echo new moodle_url($PAGE->url, array('klassroomcolour'=>'purple')); ?>"
            class="styleswitch colour-purple"><img src="<?php echo $OUTPUT->image_url('purple-theme2', 'theme');
            ?>"
            alt="purple" /></a></li>
         <div class="clearfix"></div>
      </ul>
      <?php if($colourswitcherdescription) { ?>
      <p><?php echo $colourswitcherdescription ?></p>
      <?php } ?>  
   </nav>
</div>
<?php } ?>
<!-- End Colour Switcher Section -->