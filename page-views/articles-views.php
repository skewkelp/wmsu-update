<style>
    <?php 
    require_once '../css/updates.css'; 
    ?>
</style>

<?php 
//TEMP DATA
    require_once '../table-articles/table-articles.php';
?>

<div class="hero-banner news-article" >
</div>

<div class="page-margin article">
    <div class="page-section article">
        <?php 
            $articleIndex = isset($_GET['article-index']) ? $_GET['article-index'] : '';
            $article = [];
            if($articleIndex >= 0){
                $article = $articleTable[$articleIndex];
                $imageCollection = $gallery[$article['gallery_fk']];
                
                $safeDescription = nl2br(htmlspecialchars($article['description']));
                
                // echo '<h1>converted description = ' . $safeDescription . '</h1> ';
            }else{
                echo '<h1>index = ' . $articleIndex . '</h1> ';

                echo '<h1>ERROR EMPTY NULL INDEX</h1> ';
            }
        ?>
        <div class="page-header article">
            <h1><?php echo $article['header'];?></h2>
        </div>
        
        <div class="date">
            <span class="bi-clock icon"></span>
            <h2><?php echo $article['date'];?></h2>
        </div>
        
        <div class="description-card">
            <p><?php echo $safeDescription;?></p>
        </div>

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
            $galleryStyle = isset($_GET['temp-img-count']) ? $_GET['temp-img-count'] : 'false';
            $imageElements = '';
            $galleryDisplay = 'Default';

            if ($galleryStyle === '1'){
                foreach ($imageCollection['images'] as $imagePath) {
                    $imageElements = '<div class="img-container"><img src="' . htmlspecialchars($imagePath) . '" alt=""></div>';
                }

                $galleryDisplay ='
                <div class="gallery style-1" onclick="openLightbox();currentSlide(1)">' . $imageElements . '</div>';

            }elseif($galleryStyle === '2'){
                foreach ($imageCollection['images'] as $index => $imagePath) {
                    $originalIndex = $index + 1;

                    $imageElements .= '<div class="img-container" onclick="openLightbox();currentSlide('. $originalIndex .')"><img src="' . htmlspecialchars($imagePath) . '" alt=""></div>';
                }

                $galleryDisplay= '
                <div class="gallery style-2"> ' . $imageElements . ' </div>';

                
                // $galleryDisplay= '
                // <div class="gallery style-2" > 
                //     <div class="img-container" onclick="openLightbox();currentSlide(1)"><img src="../img/article-sample-1.jpg" alt=""></div>
                //     <div class="img-container" onclick="openLightbox();currentSlide(2)"><img src="../img/article-sample-1.jpg" alt=""></div>
                // </div>';

            }elseif($galleryStyle === '3'){


            }else{
                $galleryDisplay = '<h2>ERR. NO IMAGE RECEIVED</h2>';

            }

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
                <div class="slides active">
                    <img src="../img/article-sample-2.jpg" alt="Image 1">
                </div>
                <div class="slides">
                    <img src="../img/article-sample-3.jpg" alt="Image 2">
                </div>
                <div class="slides">
                    <img src="../img/article-sample-4.jpg" alt="Image 3">
                </div>
            </div>
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>

    </div>

    <div class="pagination">
        <div class="col previous">
            <div class="icon"><img src="../img/icon/back-icon.png" alt=""></div>
            <div class="description d-flex flex-column justify-content-start">
                <h1>PREVIOUS</h1>
                <div class="text-container">
                    <h2><a href="">Western Mindanao State University joins the 2025 National Women’s Month Celebration!</a></h2>
                </div>
            </div>
        </div>
        <div class="col next">
            <div class="description d-flex flex-column justify-content-start">
                <h1>NEXT</h1>
                <div class="text-container">
                    <h2><a href="">Western Mindanao State University joins the 2025 National Women’s Month Celebration!</a></h2>
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







