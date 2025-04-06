<style>
    <?php require_once '../css/updates.css';?>
    <?php require_once '../css/announcement.css';?>
    <?php require_once '../css/fonts.css';?>
</style>
<?php 
  require_once '../table-articles/table-articles.php';
?>

<div class="hero-banner announcements"></div>
        
 <div class="section-title archives">
    <h2>Latest Announcements</h2>
 </div>


<?php 
  $indexSample = count($articleTable) - 1;
  $articleSample = $articleTable[$indexSample];

?>
<div class ="box">
  <div class="box-content">
    <div class="text-content">
      <h4 class="Date-text"><?php echo $articleSample['date'];?></h4>
        <a href="updates?page-view=announcements&article-view=true" class="clickable-text inter-black"><?php echo $articleSample['header'];?></a>
        <!-- <a href="../page-views/announcement-content.php" class="clickable-text inter-black"><?php echo $articleSample['header'];?></a> -->
      <h4>SDG Goals:</h4> 
      
      
      <div class="SDG-goals-content">
        <div class="label-tags">
          <?php foreach ($articleSample['sdg_tag'] as $tag): ?>
              <button class="sdg-label sdg-<?php echo $tag; ?>"><?php echo $tag; ?>
              </button>
          <?php endforeach; ?>
        </div>
      </div>
  </div>
</div>


 

    
    
    
    
    