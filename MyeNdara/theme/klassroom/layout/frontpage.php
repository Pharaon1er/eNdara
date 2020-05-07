<?php
   $regionmainbox = 'span12 desktop-first-column';
   $regionmain = 'span12 pull-right';
   $sidepre = 'span4 desktop-first-column';
   $sidepost = 'span3 pull-right';
   ?>
<?php require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes($bodyclasses); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
   <?php require_once(dirname(__FILE__).'/top-header.php'); ?>
   <?php require_once(dirname(__FILE__).'/menu.php'); ?>
   <?php require_once(dirname(__FILE__).'/slider.php'); ?>
   <?php require_once(dirname(__FILE__).'/colourswitcher.php'); ?>  
   <?php require_once(dirname(__FILE__).'/announcement.php'); ?>
   <?php require_once(dirname(__FILE__).'/academics.php'); ?>
   <?php require_once(dirname(__FILE__).'/categories.php'); ?>
   <?php require_once(dirname(__FILE__).'/customsection.php'); ?>
   <!-- Start Search Courses Section -->
   <div class="searchcourses">
      <div class="container-fluid">
      </div>
   </div>
   <!-- Start Search Courses Section -->  
   <!-- Start All Courses section -->    
   <div id="allcourses">
      <div class="container-fluid">
      </div>
   </div>
   <!-- End All Courses section -->
   <!-- Start News section -->   
   <div id="news">
      <div class="container-fluid">
         <div class="row-fluid">
            <div class="news-span8 span8">
            </div>
            <?php if($displayfeaturedpostssection) { ?>
            <div class="span4">
               <?php if($featuredposttagline) { ?>
               <h6><?php echo $featuredposttagline ?></h6>
               <?php } ?>
               <?php if($featuredpostheading) { ?>
               <h2><?php echo $featuredpostheading ?></h2>
               <?php } ?>
               <a href="<?php echo $featuredposturl ?>"><img class="picture" src="<?php echo $featuredpostimage ?>" alt="blog-image" /></a>
               <?php if($featuredposttitle) { ?>
               <h5><a href="<?php echo $featuredposturl ?>"><?php echo $featuredposttitle ?></a></h5>
               <?php } ?>
               <?php if($featuredposttags) { ?>
               <span class="tags">
               <?php echo $featuredposttags ?>    
               </span>
               <?php } ?>
               <?php if($featuredpostdate) { ?>
               <span class="post_date"><i class="fa fa-clock-o"></i> <?php echo $featuredpostdate ?></span>
               <?php } ?>
               <?php if($featuredpostdescription) { ?>
               <p><?php echo $featuredpostdescription ?></p>
               <?php } ?>
               <?php if($featuredpostbuttontext) { ?>
               <a href="<?php echo $featuredpostbuttonurl ?>" class="btn btn-lg"><?php echo $featuredpostbuttontext ?></a>
               <?php } ?>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
   <!-- End News section -->
   <!-- Start Marketing section -->
   <?php  if ($displaymarketingsection) { ?>
   <div class="awesome-start">
      <div class="container-fluid">
         <?php if($marketingheading) { ?>
         <h3><?php echo $marketingheading ?></h3>
         <?php } ?>
      </div>
   </div>
   <?php } ?>
   <!-- End Marketing section -->      
   <!-- Start Enrolled Courses section -->    
   <div id="enrolledcourses">
      <div class="container-fluid">
      </div>
   </div>
   <!-- End Enrolled Courses section -->
   <?php require_once(dirname(__FILE__).'/events.php'); ?>
   <?php require_once(dirname(__FILE__).'/projects.php'); ?>
   <?php require_once(dirname(__FILE__).'/photogallery.php'); ?>
   <!-- Start Page Content Section -->  
   <div id="page-content" class="row-fluid">
      <div class="container-fluid">
         <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
               <section id="region-main" class="<?php echo $regionmain; ?>">
                  <?php
                     echo $OUTPUT->course_content_header();
                     echo $OUTPUT->main_content();
                     echo $OUTPUT->course_content_footer();
                     ?>
               </section>
            </div>
         </div>
      </div>
   </div>
   <!-- End Page Content Section -->
   <!-- Start Tutor Section -->  
   <?php require_once(dirname(__FILE__).'/tutors.php'); ?>
   <!-- End Tutor Section -->
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>
   <script type="text/javascript">
      /* Search Courses */
      jQuery(document).ready(function($) {
      
         if ($('#frontpage-category-combo').length === 0) {
             $('#page #page-content').css({
                 'display': 'none'
             });
         }
          
         if ($('#coursesearch').length === 0) {
             $('#page .newsearch').css({
                 'display': 'none'
             });
         }
          
           if ($('#frontpage-category-names').length === 0) {
             $('#page .defaultcategories').css({
                 'display': 'none'
             });
         }
          
          if ($('#frontpage-category-names').length === 0) {
             $('#page .customcategories').css({
                 'display': 'none'
             });
         }  
      
      });
   </script>