<style>
    <?php 
    require_once '../css/updates.css'; 
    ?>
</style>

<?php 
//TEMP DATA
    require_once '../table-articles/table-articles.php';

    $condition = 'isNotSet';
    $articleSize = count($articleTable);
    $articlesPerPage = 12;
    $totalPages = ceil($articleSize / $articlesPerPage);
    
    $moreArticlePage = isset($_GET['page']) ? (int)$_GET['page'] : 'err';
    if($moreArticlePage){
        // $totalPages = 59; // Total pages
        // $articleIndex += 0;
        $pageCount = $moreArticlePage;

        $err = 'no error';
        if($pageCount == 1){
            $condition = 'is-1';
            $articleIndex = 0;
        }elseif($pageCount < 1){
            $condition = 'less-1';
            $pageCount = 1;
            $articleIndex = 0;
        }elseif($pageCount > 1){
            $condition = 'greater-1';
            $count = $moreArticlePage - 1;
            $articleIndex = $count * $articlesPerPage;
        }elseif($pageCount > $totalPages){
            $condition = 'max article page-'. $articleSize;
            $pageCount = 1;
            $articleIndex = 0;
        }
    }
    //ERROR CHECK  
    elseif($moreArticlePage === 'err'){       
        $err = 'error';
        $moreArticlePage = 1;
        $articleIndex = 0;
        $pageCount = '';
        $condition = 'err';
        
    }else{
        $err = 'errorPageNull';
        $condition = 'err';
        $articleIndex = 0;
        $moreArticlePage = 1;
        $pageCount = '';
    }
    
    

?>

<div class="page-margin">
    <div class="page-section articles">
        <div class="section-title articles">
            <h2>ARTICLE UPDATES 
                <?php 
                ////PHP CHECKER COMMENT OUT FOR TESTING
                // echo '//art-size:' . $articleSize . ' ' . ' //pageCount:' .$pageCount . ' ' . ' //actualpage:'. $moreArticlePage .' //articleIndex:'. $articleIndex .' //condition:'. $condition . ' //' . $err;
                ?>
            </h2>
        </div>

        <div class="article-list">
            <?php  
            
            $slicedArticles = array_slice($articleTable, $articleIndex, $articlesPerPage);
            
            foreach ($slicedArticles as $index => $article):
                $originalIndex = $index;
                // if($article["status"] === "archived"){
                //     continue;
                // }
            ?>
            <div class="article">
                <div class="main-info articles">
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

        
        <!-- <div class="pagination more-articles">
            <div class="col previous">
                <div class="icon"><img src="../img/icon/back-icon.png" alt=""></div>
                <h1>PREVIOUS</h1>
                <div class="description d-flex flex-column justify-content-start">
                    <a href=""><h2>1</h2></a>
                </div>
            </div>
            <div class="col">
             
            </div>
            <div class="col next">
                <div class="description d-flex flex-column justify-content-start">
                    <a href=""><h2>1</h2></a>

                </div>
                <h1>NEXT</h1>
                <div class="icon"><img src="../img/icon/next-icon.png" alt=""></div>

            </div>
        </div> -->
        
        <div class="pagination more-articles">
            <a href="?page=<?php echo $pageCount - 1; ?>" class="prev <?php if ($pageCount == 1) echo 'disabled'; ?>">&laquo; Previous</a>
            
            <?php
            // Showing pages dynamically
            if($pageCount){
                for ($i = 1; $i <= $totalPages; $i++) {
                    if ($i == 1 || $i == $totalPages || ($i >= $pageCount - 1 && $i <= $pageCount + 1)) {
                        // Highlight current page
                        echo '<a href="?page-view=news-articles&more-articles=true&page=' . $i . '" class="page-number' . ($i == $pageCount ? ' active' : '') . '">' . $i . '</a>';
                    } elseif ($i == 2 || $i == $totalPages - 1) {
                        echo '<span class="ellipsis">...</span>';
                    }
                }
            }else{
                echo '<a href="?page-view=news-articles&more-articles=true&page=">ERROR</a>';
            }
            
         
            ?>

            <a href="?page-view=news-articles&more-articles=true&page=<?php echo $pageCount + 1; ?>" class="next <?php if ($pageCount == $totalPages) echo 'disabled'; ?>">Next &raquo;</a>
        </div>
        
        <script>
            const pageLinks = document.querySelectorAll('.pagination .page-number');

            pageLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    // Remove 'active' class from all links
                    pageLinks.forEach(link => link.classList.remove('active'));
                    // Add 'active' class to the clicked link
                    this.classList.add('active');
                    // Enable the link to change the page
                    window.location.href = this.href; // Redirect to the clicked link's URL
                });
            });
        </script>

    </div>
</div>

<div class="page-section sdg ph-120">
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
