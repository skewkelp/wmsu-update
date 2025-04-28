<style>
<?php require_once '../css/presidents-report.css';?>
<?php require_once '../css/updates.css';?>
<?php require_once '../css/fonts.css';?>
</style>

<?php 
  require_once '../table-articles/table-articles.php';
?>
<div class="hero-banner president-report"> 
    <div class="items">
     <div class="hero-header inter-bold">
          <h1>President's Reports</h1>
</div>
        <img src="../img/hero-banner/PresidentWsmu.png" class="hero-icon"></img>
    </div>       

</div>



<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="section-title archives">
    <h2>President's Reports</h2>
 </div>

 <?php 
  $indexSample = count($articleTable) - 1;
  $articleSample = $articleTable[$indexSample];

?>
 <div class ="box">
  <div class="box-content">
    <div class="text-content">
      <h4 class="Date-text">April 28 2025</h4>
        <a href="updates?page-view=president-report&article-view=true" class="clickable-text inter-black">1st President's Report</a>
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


