<!-- Start Photo Gallery Section -->
<?php if($displayphotogallerysection) { ?>
<div id="gallery">
   <div class="container-fluid" style="margin-bottom:30px;">
      <div class="toolbar mb2 mt2">
         <button class="btn fil-cat" data-rel="all">All</button>
         <button class="btn fil-cat" data-rel="classroom">Classroom</button>
         <button class="btn fil-cat" data-rel="seminars">Seminars</button>
         <button class="btn fil-cat" data-rel="event">Events</button>
      </div>
   </div>
   <div class="container-fluid">
      <?php if($photogallerytagline) { ?>
      <h6><?php echo $photogallerytagline ?></h6>
      <?php } ?>
      <?php if($photogalleryheading) { ?>
      <h2><?php echo $photogalleryheading ?></h2>
      <?php } ?>
      <div class="row-fluid">
         <div id="portfolio">
            <div class="span4 tile scale-anm classroom all">
               <div class="hovereffect classroom all">
                  <img class="img-responsive" src="<?php echo $classroomimage1 ?>" alt="">
                  <div class="overlay classroom all">
                     <?php if($classroomimage1caption) { ?>
                     <h2><?php echo $classroomimage1caption ?></h2>
                     <?php } ?>
                     <?php if($classroomimage1buttontext) { ?>
                     <a class="info" href="<?php echo $classroomimage1buttonurl ?>"><?php echo $classroomimage1buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm seminars all">
               <div class="hovereffect seminars all">
                  <img class="img-responsive" src="<?php echo $seminarimage1 ?>" alt="">
                  <div class="overlay seminars all">
                     <?php if($seminarimage1caption) { ?>
                     <h2><?php echo $seminarimage1caption ?></h2>
                     <?php } ?>
                     <?php if($seminarimage1buttontext) { ?>
                     <a class="info" href="<?php echo $seminarimage1buttonurl ?>"><?php echo $seminarimage1buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm classroom all">
               <div class="hovereffect classroom all">
                  <img class="img-responsive" src="<?php echo $classroomimage2 ?>" alt="">
                  <div class="overlay classroom all">
                     <?php if($classroomimage2caption) { ?>
                     <h2><?php echo $classroomimage2caption ?></h2>
                     <?php } ?>
                     <?php if($classroomimage2buttontext) { ?>
                     <a class="info" href="<?php echo $classroomimage2buttonurl ?>"><?php echo $classroomimage2buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm classroom all">
               <div class="hovereffect classroom all">
                  <img class="img-responsive" src="<?php echo $classroomimage3 ?>" alt="">
                  <div class="overlay classroom all">
                     <?php if($classroomimage3caption) { ?>
                     <h2><?php echo $classroomimage3caption ?></h2>
                     <?php } ?>
                     <?php if($classroomimage3buttontext) { ?>
                     <a class="info" href="<?php echo $classroomimage3buttonurl ?>"><?php echo $classroomimage3buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm event all">
               <div class="hovereffect event all">
                  <img class="img-responsive" src="<?php echo $eventimage1 ?>" alt="">
                  <div class="overlay event all">
                     <?php if($eventimage1caption) { ?>
                     <h2><?php echo $eventimage1caption ?></h2>
                     <?php } ?>
                     <?php if($eventimage1buttontext) { ?>
                     <a class="info" href="<?php echo $eventimage1buttonurl ?>"><?php echo $eventimage1buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm seminars all">
               <div class="hovereffect seminars all">
                  <img class="img-responsive" src="<?php echo $seminarimage2 ?>" alt="">
                  <div class="overlay seminars all">
                     <?php if($seminarimage2caption) { ?>
                     <h2><?php echo $seminarimage2caption ?></h2>
                     <?php } ?>
                     <?php if($seminarimage2buttontext) { ?>
                     <a class="info" href="<?php echo $seminarimage2buttonurl ?>"><?php echo $seminarimage2buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm event all">
               <div class="hovereffect event all">
                  <img class="img-responsive" src="<?php echo $eventimage2 ?>" alt="">
                  <div class="overlay event all">
                     <?php if($eventimage2caption) { ?>
                     <h2><?php echo $eventimage2caption ?></h2>
                     <?php } ?>
                     <?php if($eventimage2buttontext) { ?>
                     <a class="info" href="<?php echo $eventimage2buttonurl ?>"><?php echo $eventimage2buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm event all">
               <div class="hovereffect event all">
                  <img class="img-responsive" src="<?php echo $eventimage3 ?>" alt="">
                  <div class="overlay event all">
                     <?php if($eventimage3caption) { ?>
                     <h2><?php echo $eventimage3caption ?></h2>
                     <?php } ?>
                     <?php if($eventimage3buttontext) { ?>
                     <a class="info" href="<?php echo $eventimage3buttonurl ?>"><?php echo $eventimage3buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm classroom all">
               <div class="hovereffect classroom all">
                  <img class="img-responsive" src="<?php echo $classroomimage4 ?>" alt="">
                  <div class="overlay classroom all">
                     <?php if($classroomimage4caption) { ?>
                     <h2><?php echo $classroomimage4caption ?></h2>
                     <?php } ?>
                     <?php if($classroomimage4buttontext) { ?>
                     <a class="info" href="<?php echo $classroomimage4buttonurl ?>"><?php echo $classroomimage4buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm event all">
               <div class="hovereffect event all">
                  <img class="img-responsive" src="<?php echo $eventimage4 ?>" alt="">
                  <div class="overlay event all">
                     <?php if($eventimage4caption) { ?>
                     <h2><?php echo $eventimage4caption ?></h2>
                     <?php } ?>
                     <?php if($eventimage4buttontext) { ?>
                     <a class="info" href="<?php echo $eventimage4buttonurl ?>"><?php echo $eventimage4buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm classroom all">
               <div class="hovereffect classroom all">
                  <img class="img-responsive" src="<?php echo $classroomimage5 ?>" alt="">
                  <div class="overlay classroom all">
                     <?php if($classroomimage5caption) { ?>
                     <h2><?php echo $classroomimage5caption ?></h2>
                     <?php } ?>
                     <?php if($classroomimage5buttontext) { ?>
                     <a class="info" href="<?php echo $classroomimage5buttonurl ?>"><?php echo $classroomimage5buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm seminars all">
               <div class="hovereffect seminars all">
                  <img class="img-responsive" src="<?php echo $seminarimage3 ?>" alt="">
                  <div class="overlay seminars all">
                     <?php if($seminarimage3caption) { ?>
                     <h2><?php echo $seminarimage3caption ?></h2>
                     <?php } ?>
                     <?php if($seminarimage3buttontext) { ?>
                     <a class="info" href="<?php echo $seminarimage3buttonurl ?>"><?php echo $seminarimage3buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm classroom all">
               <div class="hovereffect classroom all">
                  <img class="img-responsive" src="<?php echo $classroomimage6 ?>" alt="">
                  <div class="overlay classroom all">
                     <?php if($classroomimage6caption) { ?>
                     <h2><?php echo $classroomimage6caption ?></h2>
                     <?php } ?>
                     <?php if($classroomimage6buttontext) { ?>
                     <a class="info" href="<?php echo $classroomimage6buttonurl ?>"><?php echo $classroomimage6buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm seminars all">
               <div class="hovereffect seminars all">
                  <img class="img-responsive" src="<?php echo $seminarimage4 ?>" alt="">
                  <div class="overlay seminars all">
                     <?php if($seminarimage3caption) { ?>
                     <h2><?php echo $seminarimage3caption ?></h2>
                     <?php } ?>
                     <?php if($seminarimage3buttontext) { ?>
                     <a class="info" href="<?php echo $seminarimage3buttonurl ?>"><?php echo $seminarimage3buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm classroom all">
               <div class="hovereffect classroom all">
                  <img class="img-responsive" src="<?php echo $classroomimage7 ?>" alt="">
                  <div class="overlay classroom all">
                     <?php if($classroomimage7caption) { ?>
                     <h2><?php echo $classroomimage7caption ?></h2>
                     <?php } ?>
                     <?php if($classroomimage7buttontext) { ?>
                     <a class="info" href="<?php echo $classroomimage7buttonurl ?>"><?php echo $classroomimage7buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm classroom all">
               <div class="hovereffect classroom all">
                  <img class="img-responsive" src="<?php echo $classroomimage8 ?>" alt="">
                  <div class="overlay classroom all">
                     <?php if($classroomimage8caption) { ?>
                     <h2><?php echo $classroomimage8caption ?></h2>
                     <?php } ?>
                     <?php if($classroomimage8buttontext) { ?>
                     <a class="info" href="<?php echo $classroomimage8buttonurl ?>"><?php echo $classroomimage8buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm event all">
               <div class="hovereffect event all">
                  <img class="img-responsive" src="<?php echo $eventimage5 ?>" alt="">
                  <div class="overlay event all">
                     <?php if($eventimage5caption) { ?>
                     <h2><?php echo $eventimage5caption ?></h2>
                     <?php } ?>
                     <?php if($eventimage5buttontext) { ?>
                     <a class="info" href="<?php echo $eventimage5buttonurl ?>"><?php echo $eventimage5buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm seminars all">
               <div class="hovereffect seminars all">
                  <img class="img-responsive" src="<?php echo $seminarimage5 ?>" alt="">
                  <div class="overlay seminars all">
                     <?php if($seminarimage5caption) { ?>
                     <h2><?php echo $seminarimage5caption ?></h2>
                     <?php } ?>
                     <?php if($seminarimage5buttontext) { ?>
                     <a class="info" href="<?php echo $seminarimage5buttonurl ?>"><?php echo $seminarimage5buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm classroom all">
               <div class="hovereffect classroom all">
                  <img class="img-responsive" src="<?php echo $classroomimage9 ?>" alt="">
                  <div class="overlay classroom all">
                     <?php if($classroomimage9caption) { ?>
                     <h2><?php echo $classroomimage9caption ?></h2>
                     <?php } ?>
                     <?php if($classroomimage9buttontext) { ?>
                     <a class="info" href="<?php echo $classroomimage9buttonurl ?>"><?php echo $classroomimage9buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm seminars all">
               <div class="hovereffect seminars all">
                  <img class="img-responsive" src="<?php echo $seminarimage6 ?>" alt="">
                  <div class="overlay seminars all">
                     <?php if($seminarimage6caption) { ?>
                     <h2><?php echo $seminarimage6caption ?></h2>
                     <?php } ?>
                     <?php if($seminarimage6buttontext) { ?>
                     <a class="info" href="<?php echo $seminarimage6buttonurl ?>"><?php echo $seminarimage6buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="tile span4 scale-anm event all">
               <div class="hovereffect event all">
                  <img class="img-responsive" src="<?php echo $eventimage6 ?>" alt="">
                  <div class="overlay event all">
                     <?php if($eventimage6caption) { ?>
                     <h2><?php echo $eventimage6caption ?></h2>
                     <?php } ?>
                     <?php if($eventimage6buttontext) { ?>
                     <a class="info" href="<?php echo $eventimage6buttonurl ?>"><?php echo $eventimage6buttontext ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php } ?>
<!-- End Photo Gallery Section -->