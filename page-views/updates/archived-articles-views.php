<style>
    <?php 
    require_once '../css/updates.css'; 
    ?>
</style>

<?php 
//TEMP DATA
    require_once '../table-articles/table-articles.php';

    $articleIndex = isset($_GET['article-index']) ? $_GET['article-index'] : '';
    $getYear = isset($_GET['archived-index']) ? (int)$_GET['archived-index'] : '';
    $getMonth = isset($_GET['month-index']) ? (int)$_GET['month-index'] : '';
    
    $article = [];

    // 
    $archiveObj = $archives[$getYear];
    // echo '<pre style="margin-left:120px;">';
    // var_dump($archiveObj);
    // echo '</pre>';
    $yearName = $archiveObj["year_pk"];
    $monthList = $archiveObj["months"];
    // echo '<pre style="margin-left:120px;">';
    // var_dump($monthList[11]);
    // echo '</pre>';

    $archivedMonth = $monthList[$getMonth];
    // echo '<pre style="margin-left:120px;">';
    // var_dump($archivedMonth);
    // echo '</pre>';
    $monthName = $archivedMonth['name'];
    $archivedArticles = $archivedMonth['articles_fk'];
    // 
    //   echo '<pre style="margin-left:120px;">';
    //     var_dump($archivedArticles);
    //     echo '</pre>';


    if($articleIndex >= 0){
        $article = $articleTable[$articleIndex];
        $imageCollection = $gallery[$article['gallery_fk']];
        $safeDescription = ($article['description']);
        
        // $safeDescription = nl2br(htmlspecialchars($article['description']));
        $prevIndex = array_search($articleIndex, $archivedArticles) - 1;
        $nextIndex = array_search($articleIndex, $archivedArticles) + 1;
        //  echo '<pre style="margin-left:120px;">';
        // var_dump($prevIndex);
        // echo '</pre>';
        //  echo '<pre style="margin-left:120px;">';
        // var_dump($archivedArticles[$articleIndex]);
        // echo '</pre>';
        
        // $archivedArticles[$prevIndex];
        //  echo '<pre style="margin-left:120px;">';
        // var_dump($prevIndex);
        // echo '</pre>';

        // $archivedArticles[$nextIndex];
        //  echo '<pre style="margin-left:120px;">';
        // var_dump($nextIndex);
        // echo '</pre>';

        // $archivedIndex= $archivedArticles[$prevIndex];
        // var_dump($articleTable[$archivedIndex]);
        //  echo '<pre style="margin-left:120px;">';
        // var_dump($articleTable[$archivedArticles[0]]);
        // echo '</pre>';
        $prevArticle = isset($archivedArticles[$prevIndex]) ? $articleTable[$archivedArticles[$prevIndex]] : false;
        $nextArticle = isset($archivedArticles[$nextIndex]) ? $articleTable[$archivedArticles[$nextIndex]] : false;

        $prevStyle = isset($prevArticle['gallery_style'])? $prevArticle['gallery_style'] : '';

        $nextStyle = isset($nextArticle['gallery_style'])? $nextArticle['gallery_style'] : '';
        
        // echo '<h1>converted description = ' . $safeDescription . '</h1> ';
    }else{
        echo '<h1>index = ' . $articleIndex . '</h1> ';

        echo '<h1>ERROR EMPTY NULL INDEX</h1> ';
    }
?>

<script>
    var prevArticleExists = <?php echo json_encode($prevArticle !== false); ?>;
    var nextArticleExists = <?php echo json_encode($nextArticle !== false); ?>;
    

    document.addEventListener("DOMContentLoaded", function() {
        // Hide or show elements based on existence
        if (!prevArticleExists) {
            document.querySelector('.previous .icon').classList.add('hidden');
            document.querySelector('.previous .description').classList.add('hidden');
        }
        if (!nextArticleExists) {
            document.querySelector('.next .icon').classList.add('hidden');
            document.querySelector('.next .description').classList.add('hidden');
        }
    });
</script>


<div class="hero-banner archives" >
</div>

<div class="page-margin article">
    <div class="page-section article">

        <div class="page-header article">
            <h1><?php echo $article['header'];?></h2>
        </div>
        
        <div class="date">
            <span class="bi-clock icon"></span>
            <h2><?php echo $article['date'];?></h2>
        </div>
        
        <div class="description-card">
            <!-- <?php //<p><?php echo $safeDescription;?> </p> ?> -->
            <?php echo $safeDescription;?>
        </div>
        
        <?php
            if ($safeDescription === '' ) {
                echo '<h2>ERR. EMPTY DESCRIPTION</h2>';
            } elseif($safeDescription === null){
                echo '<h2>ERR. DESCRIPTION NULL</h2>';
            }
        ?>
        
        <!-- 
        <div class="page-header article">
            <h1>In response to the scheduled power interruption by NGCP and Zamcelco in the West Coast area, including WMSU, on Saturday, March 8, 2025, all undergraduate and graduate classes will be conducted online.</h2>
        </div>
        
        <div class="date">
            <span class="bi-clock icon"></span>
            <h2>March 7, 2025</h2>
        </div>
        <div class="description-card">
            <p>In response to the scheduled power interruption by NGCP and Zamcelco in the West Coast area, including WMSU, on Saturday, March 8, 2025, all undergraduate and graduate classes will be conducted online.
            <br><br>
            Faculty and students are encouraged to prepare accordingly to ensure a seamless transition to virtual learning for the day.</p>
        </div> -->

        <?php 
            $galleryStyle = isset($_GET['gallery-style']) ? $_GET['gallery-style'] : 'false';
            $imageElements = '';
            $galleryDisplay = '';
            
            if($galleryStyle === '1'){
                $limit = 1;
            }elseif($galleryStyle === '2'|| $galleryStyle === '3'){
                $limit = 2;
            }elseif($galleryStyle === '5'||$galleryStyle === '6'||$galleryStyle === '7'){
                $limit = 3;
            }elseif($galleryStyle === '8' || $galleryStyle === '9' || $galleryStyle === '10'){
                $limit = 4;
            }

            $slicedCollection = array_slice($imageCollection['images'], 0, $limit);
            if ($galleryStyle === '1'){
                foreach ($slicedCollection as $imagePath) {
                    $imageElements = '<div class="img-container"><img src="' . htmlspecialchars($imagePath) . '" alt=""></div>';
                }

                $galleryDisplay ='
                <div class="gallery style-1" onclick="openLightbox();currentSlide(1)">' . $imageElements . '</div>';

            }elseif($galleryStyle === '2' || $galleryStyle === '3' || $galleryStyle === '5' || $galleryStyle === '6' || $galleryStyle === '7' || $galleryStyle === '8' ){
                foreach ($slicedCollection as $index => $imagePath) {
                    $originalIndex = $index + 1;

                    $imageElements .= '<div class="img-container" onclick="openLightbox();currentSlide('. $originalIndex .')"><img src="' . htmlspecialchars($imagePath) . '" alt=""></div>';
                }

                // if($galleryStyle === '2'){
                //     $style = 'style-2';
                // }elseif($galleryStyle === '3'){
                //     $style = 'style-3';
                // }elseif($galleryStyle === '5'){
                //     $style = 'style-5';
                // }elseif($galleryStyle === '6'){
                //     $style = 'style-6';
                // }elseif($galleryStyle === '7'){
                //     $style = 'style-7';
                // }
                $style = 'style-' . $galleryStyle;

                $galleryDisplay= '
                <div class="gallery ' . $style .'"> ' . $imageElements . ' </div>';
            }
            $galleryDisplay = $galleryDisplay ? $galleryDisplay : '<h2>ERR. NO IMAGE RECEIVED</h2>';

            echo $galleryDisplay;
        ?>

            

        <!-- style="display: none;" -->
        
        <div class="gallery style-5"  style="display: none;"> 
            <div class="img-container" onclick="openLightbox();currentSlide(1)"><img src="../img/article-sample-2.jpg" alt=""></div>
            <div class="img-container" onclick="openLightbox();currentSlide(2)"><img src="../img/article-sample-3.jpg" alt=""></div>
            <div class="img-container" onclick="openLightbox();currentSlide(3)"><img src="../img/article-sample-4.jpg" alt=""></div>
        </div>

        <div class="gallery style-6"  style="display: none;"> 
            <div class="img-container"><img src="../img/article-sample-2.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-3.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-4.jpg" alt=""></div>
        </div>

        <div class="gallery style-7"  style="display: none;"> 
            <div class="img-container"><img src="../img/article-sample-2.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-3.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-4.jpg" alt=""></div>
        </div>

        <div class="gallery style-8"  style="display: none;"> 
            <div class="img-container"><img src="../img/article-sample-2.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-3.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-4.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-1.jpg" alt=""></div>
        </div>

        <div class="gallery style-9"  style="display: none;"> 
            <div class="img-container"><img src="../img/article-sample-2.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-3.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-4.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-1.jpg" alt=""></div>
        </div>

        <div class="gallery style-10"  style="display: none;"> 
            <div class="img-container"><img src="../img/article-sample-2.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-3.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-4.jpg" alt=""></div>
            <div class="img-container"><img src="../img/article-sample-1.jpg" alt=""></div>
        </div>

        <div id="lightbox" class="lightbox">
            <span class="close" onclick="closeLightbox()">&times;</span>
            <div class="lightbox-content">
                <?php 
                $galleryDisplay = '';
                
                foreach ($imageCollection['images'] as $index => $imagePath) {
                    $originalIndex = $index + 1;
                    if($originalIndex == 1){
                        $galleryDisplay .= '
                        <div class="slides active">
                            <img src="' . htmlspecialchars($imagePath) . '" alt="Image ' . $originalIndex . '">
                        </div>';
                    }else{
                        $galleryDisplay .= '
                        <div class="slides">
                            <img src="' . htmlspecialchars($imagePath) . '" alt="Image ' . $originalIndex . '">
                        </div>';
                    }
                }
                // if($galleryStyle === '1'){
                //     foreach ($imageCollection['images'] as $imagePath) {           
                //         $galleryDisplay .= '
                //         <div class="slides active">
                //             <img src="' . htmlspecialchars($imagePath) . '" alt="Image ' . 1 . '">
                //         </div>';
                //     }
                // }else{
                // }

                echo $galleryDisplay;

                ?>
                <!-- <div class="slides active">
                    <img src="../img/article-sample-2.jpg" alt="Image 1">
                </div>
                <div class="slides">
                    <img src="../img/article-sample-3.jpg" alt="Image 2">
                </div>
                <div class="slides">
                    <img src="../img/article-sample-4.jpg" alt="Image 3">
                </div> -->
            </div>
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>
    </div>

    <div class="pagination archives">
        <div class="col previous">
            <div class="icon"><img src="../img/icon/back-icon.png" alt=""></div>
            <div class="description d-flex flex-column ">
                <h1>PREVIOUS</h1>
                <div class="text-container">
                    <h2><a href="updates?page-view=archives&article-view=true&article-index=<?php echo $archivedArticles[$prevIndex];?>&archived-index=<?php echo $getYear;?>&month-index=<?php echo $getMonth;?>&gallery-style=<?php echo $prevStyle;?>">
                        <?php echo $prevArticle? $prevArticle['header']: '';?></a>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col next">
            <div class="description d-flex flex-column">
                <h1>NEXT</h1>
                <div class="text-container">
                    <h2><a href="updates?page-view=archives&article-view=true&article-index=<?php echo $archivedArticles[$nextIndex];?>&archived-index=<?php echo $getYear;?>&month-index=<?php echo $getMonth;?>&gallery-style=<?php echo $nextStyle ;?>">
                        <?php echo $nextArticle? $nextArticle['header'] : '';?></a>
                    </h2>
                </div>
            </div>
            <div class="icon"><img src="../img/icon/next-icon.png" alt=""></div>

        </div>
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


<script>
    let slideIndex = 1;

    function openLightbox() {
        document.getElementById("lightbox").style.display = "block";
        showSlides(slideIndex);
    }

    function closeLightbox() {
        document.getElementById("lightbox").style.display = "none";
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function changeSlide(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slides");

        
        if (n > slides.length) { slideIndex = 1; }
        if (n < 1) { slideIndex = slides.length; }
        
        for (i = 0; i < slides.length; i++) {
            slides[i].classList.remove("active"); // Hide all slides by removing active class
        }
        
        // const img = document.querySelector("gallery-style");


        slides[slideIndex - 1].classList.add("active"); // Show the active slide by adding active class
    }
</script>







