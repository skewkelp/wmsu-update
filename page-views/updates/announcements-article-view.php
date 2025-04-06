
<style>
    <?php require_once '../css/updates.css';?>

    <?php require_once '../css/announcement.css';?>
    <?php require_once '../css/fonts.css';?>
</style>

<?php 
  require_once '../table-articles/table-articles.php';

  $indexSample = count($articleTable) - 1;
  $articleSample = $articleTable[$indexSample];
?>
<div class="hero-banner announcements"></div>

<div class="page-margin article">
    <div class="page-section article">
        <a href="updates?page-view=announcements" class="arrow">⬅ Back</a>

        <div class="page-header article" >
            <h2 class="title inter-bold" style="color: crimson;
!important;"><?php echo $articleSample['header'];?></h2>
        </div>
        <div class="date">
            <span class="bi-clock icon"></span>
            <h2 class="title-date inter-medium"><?php echo $articleSample['date'];?></h2>
        </div>
        <div class="announcement-pic"></div>

        <div class="description-card">
            <?php echo $articleSample['description'];?>
        </div>

    </div>
    <div style="margin-buttom: 40px;"></div>
</div>

