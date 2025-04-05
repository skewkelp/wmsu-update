<style>
    <?php 
    require_once '../css/updates/news-articles.css'; 
    ?>
</style>

<?php 
//TEMP DATA
    require_once '../table-articles/table-articles.php';
?>


<div class="hero-banner news-article" >    
    <div class="items">
        <div class="hero-header">
            <h1>NEWS ARTICLES</h1>
        </div>
        <img src="../img/wmsu-logo.png" class="hero-icon"></img>
    </div>
</div>

<div class="page-section news page-margin">
    <div class="recent-news">
        <div class="header-card">
            <h1>LATEST NEWS</h1>
        </div>
        <div class="body-card news">

            <?php $latestarticle = $articleTable[0];?>
            <!-- <div id="news-1" class="img-card b"> -->
            <a href="updates?page-view=news-articles&article-view=true&article-index=0&gallery-style=<?php echo $latestarticle['gallery_style'];?>" class="img-card-link b">
                <div class="img-overlay"></div>
                <div class="img-card b">
                    <img src="<?php echo $latestarticle['thumbnail'];?>" alt="">
                </div>
            </a>
            <div class="description-card latest">
                <h2 class="indented"><a href="updates?page-view=news-articles&article-view=true&article-index=0&gallery-style=<?php echo $latestarticle['gallery_style'];?>"><?php echo $latestarticle['header'];?></a></h2>
                <div class="date">
                    <h2><?php echo $latestarticle['date'];?></h2>
                </div>
            </div>
        </div>
      
    </div>
        
    <hr class="divider news">

    <div class="news-list">
        <?php  
        $slicedArticles = array_slice($articleTable, 1, 3);
        
        foreach ($slicedArticles as $index => $article):
            $originalIndex = $index + 1;
        ?>
        <div class="news-article">
            <a href="updates?page-view=news-articles&article-view=true&article-index=<?php echo $originalIndex;?>&gallery-style=<?php echo $article['gallery_style'];?>" class="img-card-link s">
                <div class="img-overlay"></div>
                <div id="" class="img-card s">
                    <img src="<?php echo $article['thumbnail'];?>" alt="">
                </div>
            </a>
            <div class="description-card news">
                <h2><a href="updates?page-view=news-articles&article-view=true&article-index=<?php echo $originalIndex;?>&gallery-style=<?php echo $article['gallery_style'];?>"><?php echo $article['header'];?></a></h2>
                <div class="date">
                    <h2><?php echo $article['date'];?></h2>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>

<div class="page-section sdg">
    <div class="section-title sdg">
        <h2>THE 17 GOALS</h2>
    </div>

    <div class="sdg-list">
        <button class="filter-button sdg-1">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-1.png"  alt=""></div>

            <div class="icon"><img src="../img/sdg/sdg-icon-1.png" alt=""></div>
        </button>

        <button class="filter-button sdg-2">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-2.png" alt=""></div>

            <div class="icon"><img src="../img/sdg/sdg-icon-2.png" alt=""></div>
        </button>

        <button class="filter-button sdg-3">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-3.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-3.png" alt=""></div>
        </button>
        
        <button class="filter-button sdg-4">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-4.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-4.png" alt=""></div>
        </button>
        
        <button class="filter-button sdg-5">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-5.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-5.png"  alt=""></div>
        </button>

        <button class="filter-button sdg-6">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-6.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-6.png" alt=""></div>
        </button>

        <button class="filter-button sdg-7">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-7.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-7.png" alt=""></div>
        </button>

        <button class="filter-button sdg-8">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-8.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-8.png" alt=""></div>
        </button>

        <button class="filter-button sdg-9">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-9.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-9.png" alt=""></div>
        </button>

        <button class="filter-button sdg-10">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-10.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-10.png" alt=""></div>
        </button>

        <button class="filter-button sdg-11">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-11.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-11.png" alt=""></div>
        </button>

        <button class="filter-button sdg-12">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-12.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-12.png" alt=""></div>
        </button>

        <button class="filter-button sdg-13">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-13.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-13.png" alt=""></div>
        </button>


        <button class="filter-button sdg-14">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-14.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-14.png" alt=""></div>
        </button>

        <button class="filter-button sdg-15">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-15.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-15.png"  alt=""></div>
        </button>

        <button class="filter-button sdg-16">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-16.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-16.png" alt=""></div>
        </button>

        <button class="filter-button sdg-17">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-17.png" alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-17.png" alt=""></div>
        </button>

        <button class="filter-button sdg-goals">
            <div class="sdg-text"><img src="../img/sdg/sdg-text-goal.png"  alt=""></div>
            <div class="icon"><img src="../img/sdg/sdg-icon-goal.png"  alt=""></div>
        </button>
    
    </div>
</div>

<div class="page-section articles page-margin">
    <div class="section-title articles">
        <h2>ARTICLES</h2>
    </div>

    <div class="article-list">
        <?php  
        
        $slicedArticles = array_slice($articleTable, 0, 4);
        
        foreach ($slicedArticles as $index => $article):
            $originalIndex = $index;
        ?>
        <div class="article">
            <div class="main-info articles">
                <a href="updates?page-view=news-articles&article-view=true&article-index=<?php echo $originalIndex;?>&gallery-style=<?php echo $article['gallery_style'];?>" class="img-card-link s">
                    <div class="img-overlay"></div>
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
            <div class="tag articles">
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
        
    <div class="article-list more-articles">
        <a href="updates?page-view=news-articles&more-articles=true&page=1" class="more-articles-link">
            <div class="more-articles-button">
                <h2> See More Articles?</h2>
            </div>
        </a>
    </div>
    

</div>

<div class="page-section info">
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
