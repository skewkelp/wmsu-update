<style>
    <?php require_once '../css/updates.css';?>
    <?php require_once '../css/presidents-report.css';?>
    <?php require_once '../css/fonts.css';?>
</style>

<?php 
  require_once '../table-articles/table-articles.php';

  $indexSample = count($articleTable) - 1;
  $articleSample = $articleTable[$indexSample];
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="hero-banner president-report"> 
    <div class="items">
     <div class="hero-header inter-bold">
          <h1>President's Reports</h1>
</div>
        <img src="../img/hero-banner/PresidentWsmu.png" class="hero-icon"></img>
    </div>       

</div>


<div class="page-margin article">
    <div class="page-section article">
        <a href="updates?page-view=president-report" class="arrow inter-black">&#11164; Back To President's Report</a>
        <div class="page-header-article" >
            <h2 class="title inter-extrabold" style="color: crimson">President's First Report of 2024</h2>
        </div>
        <div class="date">
            <span class="bi-clock icon"></span>
            <h2 class="title-date inter-medium">April 28 2025</h2>
        </div>
       

        <div class="description-card">
            <?php echo $articleSample['description'];?>
        </div>
        <div class="arrows">
      
        <div class="pagination archives">
        <div class="col previous">
            <div class="icon"><img src="../img/icon/back-icon.png" alt=""></div>
            <div class="description d-flex flex-column ">
                <h1>PREVIOUS</h1>
                <div class="text-container">
                    <h2><a href="updates?page-view=archives&article-view=true&article-index=<?php echo $archivedArticles[$prevIndex];?>&archived-index=<?php echo $getYear;?>&month-index=<?php echo $getMonth;?>&gallery-style=<?php echo $prevStyle;?>">
                        <!-- <?php echo $prevArticle? $prevArticle['header']: '';?></a> -->
                    </h2>
                </div>
            </div>
        </div>
        <div class="col next">
            <div class="description d-flex flex-column">
                <h1>NEXT</h1>
                <div class="text-container">
                    <h2><a href="updates?page-view=archives&article-view=true&article-index=<?php echo $archivedArticles[$nextIndex];?>&archived-index=<?php echo $getYear;?>&month-index=<?php echo $getMonth;?>&gallery-style=<?php echo $nextStyle ;?>">
                        <!-- <?php echo $nextArticle? $nextArticle['header'] : '';?></a> -->
                    </h2>
                </div>
            </div>
            <div class="icon"><img src="../img/icon/next-icon.png" alt=""></div>

        </div>
    </div>
    </div>
   
</div>
</div>


