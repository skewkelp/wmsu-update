
<style>
    <?php require_once '../css/updates.css';?>
    <?php require_once '../css/media.css';?>
</style>
<?php 
//TEMP DATA
    require_once '../table-articles/table-articles.php';
?>

<div class="hero-banner president-corner"></div>
    
<div class ="section-title president-corner">
    <h2 class="fst-italic">President's Updates</h2>
</div>
<div class="page-section articles president-corner">
    <div class="article-list">
        <?php  
        
        $slicedArticles = array_slice($articleTable, 0, 4);
        
        foreach ($slicedArticles as $index => $article):
            $originalIndex = $index;
        ?>
        <div class="article">
            <div class="main-info articles pres-con">
                <a href="updates?page-view=news-articles&article-view=true&article-index=<?php echo $originalIndex;?>&gallery-style=<?php echo $article['gallery_style'];?>" class="img-card-link s">
                    <div id="" class="img-card s">
                        <img src="<?php echo $article['thumbnail'];?>" alt="">
                    </div>
                </a>
                <div class="description-card articles">
                    <h2><a href="updates?page-view=news-articles&article-view=true&article-index=<?php echo $originalIndex;?>&gallery-style=<?php echo $article['gallery_style'];?>"><?php echo $article['header'];?></a></h2>
                    <div class="date">
                        <h2><?php echo $article['date'];?></h2>
                    </div>
                </div>
            </div>
            <div class="tag articles"  style="display: none;">
                <div class="title-card">
                    <p>Related Info</p>
                </div>
                <div class="label-tags">
                    <?php foreach ($article['sdg_tag'] as $tag): ?>
                        <button class="sdg-label sdg-<?php echo $tag; ?>"><?php echo $tag; ?>
                        </button>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        
    </div>

    
    <div class="article-list more-articles justify-content-center" style="margin-bottom: 40px;">
        <a href="" class="more-articles-link">
            <div class="button more-articles-button">
                <h2>Load More</h2>
            </div>
        </a>
    </div>
</div>

<div class="page-section info ph-120">
    <div class="info-items important-certificates"><img src="../img/important-seal.png" alt=""></div>
    <div class="info-items socmed">
        <p>Follow Us</p>
        <div class="d-flex flex-row justify-content-center">
            <div class="socmed-logo fb"><a href=""></a></div>
            <div class="socmed-logo twitter-x"><a href=""></a></div>
            <div class="socmed-logo instagram"><a href=""></a></div>
            <div class="socmed-logo youtube"><a href=""></a></div>
        </div>
    </div>
    <div class="info-items contacts">
        <p>Contact Us:</p>
        <p>+63(88)991-1771 local 7000</p>
        <p>wmsu@wmsu.edu.ph</p>
    </div>
</div>


    


