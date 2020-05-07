<!-- Start Project Section -->
<?php if($displayprojectsection) { ?>
<div class="projects">
<div class="container-fluid">
    <?php if($projecttagline) { ?>
    <h6><?php echo $projecttagline ?></h6>
    <?php } ?>
    <?php if($projectheading) { ?>
    <h2><?php echo $projectheading ?></h2>
    <?php } ?>
    <div class="row-fluid">
        <?php if($displayproject1box) { ?>
        <div class="span4 cus hvr-float-shadow">
            <?php if($project1title) { ?>
        <h3><?php echo $project1title ?></h3>
            <?php } ?>
            <?php if($project1description) { ?>
            <p><?php echo $project1description ?></p>
            <?php } ?>
            <?php if($project1readmore) { ?>
            <a href="<?php echo $project1readmoreurl ?>"><?php echo $project1readmore ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            <?php } ?>
        </div>
        <?php } ?>

        
        <?php if($displayproject2box) { ?>
        <div class="span4 cus hvr-float-shadow">
            <?php if($project2title) { ?>
        <h3><?php echo $project2title ?></h3>
            <?php } ?>
            <?php if($project2description) { ?>
            <p><?php echo $project2description ?></p>
            <?php } ?>
            <?php if($project2readmore) { ?>
            <a href="<?php echo $project2readmoreurl ?>"><?php echo $project2readmore ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            <?php } ?>
        </div>
        <?php } ?>
        
        
        
        
<?php if($displayproject3box) { ?>
        <div class="span4 cus hvr-float-shadow">
            <?php if($project3title) { ?>
        <h3><?php echo $project3title ?></h3>
            <?php } ?>
            <?php if($project3description) { ?>
            <p><?php echo $project3description ?></p>
            <?php } ?>
            <?php if($project3readmore) { ?>
            <a href="<?php echo $project3readmoreurl ?>"><?php echo $project3readmore ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            <?php } ?>
        </div>
        <?php } ?>
        
        
        <div class="span12">
            <a href="#"><img src="<?php echo $projectaddbanner ?>" /></a>
        </div>

    
    <div class="clearfix"></div>
    
    
    
    </div>
    
    
    
    
    
    
    
    
    </div>
</div>
<?php } ?>
<!-- End Project Section -->