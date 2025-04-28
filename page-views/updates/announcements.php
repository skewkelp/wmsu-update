<style>
    <?php require_once '../css/updates.css';?>
    <?php require_once '../css/announcements.css';?>
    <?php require_once '../css/fonts.css';?>
</style>
<?php 
  require_once '../table-articles/table-articles.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="hero-banner announcements"></div>

<!-- <div class="hero-banner announcements" >    
    <div class="items">
        <div class="hero-header">
          <h1>ANNOUNCEMENTS</h1>
        </div>
        <img src="../img/wmsu-logo.png" class="hero-icon"></img>
    </div>
</div>         -->
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
        <!-- <a href="../page-views/updates/announcements-article-view.php" class="clickable-text inter-black"><?php echo $articleSample['header'];?></a> -->
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
</div>

