<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conic Gradient with Icons</title>
    <style>
        /* 
        --og-sdg-icon-size: 56px;
        --sdg-icon-size: 56px;
        --og-sdg-gradient-container-size: 600px;
        --sdg-gradient-container-size: 600px;
        
        --mask-size: 60%; 
        --og-sdg-side-padding: 120px;
        --sdg-side-padding: 120px; 

        --og-sdg-target-div-position-left: 160px;
        --sdg-target-div-position-left: 160px;

        */
        .page-section.testing{
            background:var(--sdg-section-background-color);
            position: relative;
            justify-content: left;
            padding:40px var(--sdg-side-padding);
        }

        #sdg-section{
            transition: background 0.3s ease-in-out;
        }

        .gradient-container {
            position: relative; 
            /* Positioning for absolute children */
            width: var(--sdg-gradient-container-size);
            height: var(--sdg-gradient-container-size);
            border-radius: 50%; /* Makes the container circular */
            /* overflow: hidden;  */
            /* Prevent overflow */
            overflow: visible;
            z-index: 1;
        }

        .sdg-box {
            width: 100%;
            height: 100%;
            border-radius: 50%; /* Makes the box circular */
            background: conic-gradient(
                var(--sdg-1-background-color) 0% 5.88%,      /* Red 1 */
                var(--sdg-2-background-color) 5.88% 11.76%,   /* Gold 2 */
                var(--sdg-3-background-color) 11.76% 17.64%,  /* Green 3 */
                var(--sdg-4-background-color) 17.64% 23.52%,  /* Dark Red 4 */
                var(--sdg-5-background-color) 23.52% 29.4%,   /* Bright Red 5 */
                var(--sdg-6-background-color) 29.4% 35.28%,   /* Cyan 6 */
                var(--sdg-7-background-color) 35.28% 41.16%,   /* Orange 7 */
                var(--sdg-8-background-color) 41.16% 47.04%,   /* Dark Pink 8 */
                var(--sdg-9-background-color) 47.04% 52.92%,   /* Orange-Red 9 */
                var(--sdg-10-background-color) 52.92% 58.8%,    /* Bright Pink 10 */
                var(--sdg-11-background-color) 58.8% 64.68%,    /* Yellow-Orange 11 */
                var(--sdg-12-background-color) 64.68% 70.56%,    /* Light Brown 12 */
                var(--sdg-13-background-color) 70.56% 76.44%,    /* Dark Green 13 */
                var(--sdg-14-background-color) 76.44% 82.32%,    /* Blue 14 */
                var(--sdg-15-background-color) 82.32% 88.2%,     /* Bright Green 15 */
                var(--sdg-16-background-color) 88.2% 94.08%,     /* Dark Blue 16 */
                var(--sdg-17-background-color) 94.08% 100%       /* Dark Navy 17 */
            );
            transition: background 0.5s ease-in-out;
        }

       

        .sdg-box .icon {
            position: absolute;
            width: var(--sdg-icon-size);
            height: var(--sdg-icon-size);
            /* Default background for icon */
            /* background-color: rgba(255, 255, 255, 0.8);  */
            
            /* Circular shape for placeholder */
            border-radius: 50%; 
            display: flex;
            justify-content: center;
            align-items: center;
            /* border for visibility */
            /* border: 2px solid #f0f0f0;  */
            /* overflow: hidden; */
            transform: translate(-50%, -50%); /* Center the icon at its calculated point */
            transition: transform 0.3s ease;
        }

        
        .sdg-box .icon img{
            width: 100%;/* Adjust as required */
            height: auto;
            max-height: 100%;
            object-fit: contain;
        }



        /* Setting custom properties for each icon */
        .sdg-box .icon:nth-child(1) { top: 10%; left: 57.5%; transform: translate(-50%, -50%) rotate(0deg); }
        .sdg-box .icon:nth-child(2) { top: 16%; left: 71%; transform: translate(-50%, -50%) rotate(22.5deg); }
        .sdg-box .icon:nth-child(3) { top: 25.5%; left: 82%; transform: translate(-50%, -50%) rotate(45deg); }
        .sdg-box .icon:nth-child(4) { top: 39%; left: 88.5%; transform: translate(-50%, -50%) rotate(67.5deg); }
        .sdg-box .icon:nth-child(5) { top: 53.5%; left: 90%; transform: translate(-50%, -50%) rotate(90deg); }
        .sdg-box .icon:nth-child(6) { top: 67.5%; left: 85.5%; transform: translate(-50%, -50%) rotate(112.5deg); }
        .sdg-box .icon:nth-child(7) { top: 80.0%; left: 77.5%; transform: translate(-50%, -50%) rotate(135deg); }
        .sdg-box .icon:nth-child(8) { top: 87.5%; left: 64.5%; transform: translate(-50%, -50%) rotate(157.5deg); }
        .sdg-box .icon:nth-child(9) { top: 90%; left: 50%; transform: translate(-50%, -50%) rotate(180deg); }
        .sdg-box .icon:nth-child(10) { top: 87.5%; left: 35.5%; transform: translate(-50%, -50%) rotate(202.5deg); }
        .sdg-box .icon:nth-child(11) { top: 80%; left: 23%; transform: translate(-50%, -50%) rotate(225deg); }
        .sdg-box .icon:nth-child(12) { top: 68%; left: 14%; transform: translate(-50%, -50%) rotate(247.5deg); }
        .sdg-box .icon:nth-child(13) { top: 54%; left: 10%; transform: translate(-50%, -50%) rotate(270deg); }
        .sdg-box .icon:nth-child(14) { top: 39%; left: 11.5%; transform: translate(-50%, -50%) rotate(292.5deg); }
        .sdg-box .icon:nth-child(15) { top: 26%; left: 18%; transform: translate(-50%, -50%) rotate(315deg); }
        .sdg-box .icon:nth-child(16) { top: 16%; left: 29%; transform: translate(-50%, -50%) rotate(337.5deg); }
        .sdg-box .icon:nth-child(17) { top: 10%; left: 42.5%; transform: translate(-50%, -50%) rotate(360deg); }


        .sdg-box .icon:hover {
            transform: translate(-50%, -50%) scale(1.15); /* Scale up while keeping rotation */
            /* transition: 0.3s; */
            z-index: 2;
        }

        .mask {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 50%;
            left: 50%;
            width: var(--mask-size); /* Control the size of the mask */
            height: var(--mask-size); /* Control the size of the mask */
            /* Same as body background */
            background: #f0f0f0; 
            border-radius: 50%; /* Circular mask */
            transform: translate(-50%, -50%); /* Center the mask */
        }

        .mask .text, .mask .icon{
            width: 80%;
            height: auto;
        }

        #target-div.sdg-display-container{
            display: flex;
            left: var(--sdg-target-div-position-left);
            flex-direction: column;
            opacity: 0;
            position:absolute;
            transition: all 0.45s ease;
        }

        #target-div.active{
            opacity: 1;
            left: calc(var(--sdg-target-div-position-left) * 2 + var(--sdg-gradient-container-size));
            position:absolute;
        }
/* 
        #target-div.sdg-display-container {
            display: flex;
            flex-direction: column;
            opacity: 0; 
            position: absolute;
            transform: translateX(0);
            transition: opacity 0.45s ease, transform 0.45s ease; 
        }

        #target-div.active {
            opacity: 1;
            transform: translateX(calc(160px * 2 + var(--sdg-gradient-container-size))); 
        } */

        #spacer.sdg-display-default{
            position: absolute;
            left:  calc(var(--sdg-target-div-position-left) * 2 + var(--sdg-gradient-container-size));
            opacity: 1;
            transition: all .3s ease-out;
            z-index: 1;
        }#spacer.sdg-display-default.active {
            position: absolute;
            left: calc(var(--sdg-target-div-position-left) * 4 + var(--sdg-gradient-container-size));
            opacity: 0;
            z-index: 0;
        }

        #target-text, #target-icon{
            width: 100%;
            max-width: 200px;
            height: auto;
        }

        /* #target-text.sdg-image.active {
        transition-delay: 0s;
        }

        #target-icon.sdg-image.active {
        transition-delay: 0.1s;
        } */

        

        /* .sdg-display {
            position: relative;
            left: -100px;
            opacity: 1;
            transition: all 0.8s ease;
            z-index: 1;
        }
        
        .sdg-display.active {
            transition: all 0.8s ease;
            left: 0;
            opacity: 1;
            z-index: 0;
        } */

    </style>
</head>


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
                
                <div class="d-flex flex-row justify-content-between">
                    <div class="date">
                        <h2><?php echo $latestarticle['date'];?></h2>
                    </div>
                    <div class="button view-more">
                        <h2><a href="">Learn More -></a></h2>
                    </div>
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


<div id="sdg-section" class="page-section testing">
    <div class="gradient-container">
        <div class="sdg-box">
            <div id="sdg-1" class="icon"><img src="../img/sdg/sdg-icon-1.png" alt=""></div>
            <div id="sdg-2" class="icon"><img src="../img/sdg/sdg-icon-2.png" alt=""></div>
            <div id="sdg-3" class="icon"><img src="../img/sdg/sdg-icon-3.png" alt=""></div>
            <div id="sdg-4" class="icon"><img src="../img/sdg/sdg-icon-4.png" alt=""></div>
            <div id="sdg-5" class="icon"><img src="../img/sdg/sdg-icon-5.png" alt=""></div>
            <div id="sdg-6" class="icon"><img src="../img/sdg/sdg-icon-6.png" alt=""></div>
            <div id="sdg-7" class="icon"><img src="../img/sdg/sdg-icon-7.png" alt=""></div>
            <div id="sdg-8" class="icon"><img src="../img/sdg/sdg-icon-8.png" alt=""></div>
            <div id="sdg-9" class="icon"><img src="../img/sdg/sdg-icon-9.png" alt=""></div>
            <div id="sdg-10" class="icon"><img src="../img/sdg/sdg-icon-10.png" alt=""></div>
            <div id="sdg-11" class="icon"><img src="../img/sdg/sdg-icon-11.png" alt=""></div>
            <div id="sdg-12" class="icon"><img src="../img/sdg/sdg-icon-12.png" alt=""></div>
            <div id="sdg-13" class="icon"><img src="../img/sdg/sdg-icon-13.png" alt=""></div>
            <div id="sdg-14" class="icon"><img src="../img/sdg/sdg-icon-14.png" alt=""></div>
            <div id="sdg-15" class="icon"><img src="../img/sdg/sdg-icon-15.png" alt=""></div>
            <div id="sdg-16" class="icon"><img src="../img/sdg/sdg-icon-16.png" alt=""></div>
            <div id="sdg-17" class="icon"><img src="../img/sdg/sdg-icon-17.png" alt=""></div>
        </div>
        
        <div class="mask">
            <img class="text" src="../img/sdg/sdg-text-goal.png" alt="">
            <img class="icon" src="../img/sdg/sdg-icon-goal.png" alt="">
        </div>
    </div>
    <div id="target-div" class="sdg-display-container" style="padding-top: 40px;">
        <img id="target-text" class="sdg-display" style="width: 300px; height:auto;" src="../img/sdg/sdg-text-goal.png" alt="">
        <img id="target-icon" class="sdg-display" style="width: 300px; height:auto;" src="../img/sdg/sdg-icon-goal.png" alt="">
    </div>
    
    <div id="spacer" class="d-flex flex-column sdg-display-default" style="width: 300px; padding-top:40px;">
        <img id="text" style="width: 300px; height:auto;" src="../img/sdg/sdg-text-goal.png" alt="">
        <img id="icon" style="width: 300px; height:auto;" src="../img/sdg/sdg-icon-goal.png" alt="">
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

<!-- <div class="gradient-container">
    <div class="sdg-box">
        <div class="icon">1<img src="../img/sdg/sdg-icon-1.png" alt=""></div>
        <div class="icon">2<img src="../img/sdg/sdg-icon-2.png" alt=""></div>
        <div class="icon">3<img src="../img/sdg/sdg-icon-3.png" alt=""></div>
        <div class="icon">4<img src="../img/sdg/sdg-icon-4.png" alt=""></div>
        <div class="icon">5<img src="../img/sdg/sdg-icon-5.png" alt=""></div>
        <div class="icon">6<img src="../img/sdg/sdg-icon-6.png" alt=""></div>
        <div class="icon">7<img src="../img/sdg/sdg-icon-7.png" alt=""></div>
        <div class="icon">8<img src="../img/sdg/sdg-icon-8.png" alt=""></div>
        <div class="icon">9<img src="../img/sdg/sdg-icon-9.png" alt=""></div>
        <div class="icon">10<img src="../img/sdg/sdg-icon-10.png" alt=""></div>
        <div class="icon">11<img src="../img/sdg/sdg-icon-11.png" alt=""></div>
        <div class="icon">12<img src="../img/sdg/sdg-icon-12.png" alt=""></div>
        <div class="icon">13<img src="../img/sdg/sdg-icon-13.png" alt=""></div>
        <div class="icon">14<img src="../img/sdg/sdg-icon-14.png" alt=""></div>
        <div class="icon">15<img src="../img/sdg/sdg-icon-15.png" alt=""></div>
        <div class="icon">16<img src="../img/sdg/sdg-icon-16.png" alt=""></div>
        <div class="icon">17<img src="../img/sdg/sdg-icon-17.png" alt=""></div>
    </div>
    <div class="mask"></div>
</div> -->

<script>
    const $sdg1Button = $('#sdg-1');
    const $sdg14Button = $('#sdg-14');
    const $sdg17Button = $('#sdg-17');
    const $targetText = $('#target-text');
    const $targetIcon = $('#target-icon');

    //page section for sdg
    const $sdgSection = $('#sdg-section');

    //gradient cone
    const $sdgBox = $('.sdg-box');

    const $targetDiv = $('#target-div');
    const $spacer = $('#spacer');

    const defaultTextSrc = '../img/sdg/sdg-text-goal.png';
    const defaultIconSrc = '../img/sdg/sdg-icon-goal.png';
    // NOTE
    // $selector.hover(function(){/*mouse enter*/}, function(/*mouse leave*/){});
    
    
    const sdgPosition = {
        'sdg-1': "0% 5.88%",
        'sdg-2': "5.88% 11.76%",
        'sdg-3': "11.76% 17.64%",
        'sdg-4': "17.64% 23.52%",
        'sdg-5': "23.52% 29.4%",
        'sdg-6': "29.4% 35.28%",
        'sdg-7': "35.28% 41.16%",
        'sdg-8': "41.16% 47.04%",
        'sdg-9': "47.04% 52.92%",
        'sdg-10': "52.92% 58.8%",
        'sdg-11': "58.8% 64.68%",
        'sdg-12': "64.68% 70.56%",
        'sdg-13': "70.56% 76.44%",
        'sdg-14': "76.44% 82.32%",
        'sdg-15': "82.32% 88.2%",
        'sdg-16': "88.2% 94.08%",
        'sdg-17': "94.08% 100%",
    };


    const sdgButton = {
        'sdg-1': $('#sdg-1'),
        'sdg-2': $('#sdg-2'),
        'sdg-3': $('#sdg-3'),
        'sdg-4': $('#sdg-4'),
        'sdg-5': $('#sdg-5'),
        'sdg-6': $('#sdg-6'),
        'sdg-7': $('#sdg-7'),
        'sdg-8': $('#sdg-8'),
        'sdg-9': $('#sdg-9'),
        'sdg-10': $('#sdg-10'),
        'sdg-11': $('#sdg-11'),
        'sdg-12': $('#sdg-12'),
        'sdg-13': $('#sdg-13'),
        'sdg-14': $('#sdg-14'),
        'sdg-15': $('#sdg-15'),
        'sdg-16': $('#sdg-16'),
        'sdg-17': $('#sdg-17')
    }
    
    const defaultSdgBoxStyle = `conic-gradient(
            var(--sdg-1-background-color) 0% 5.88%, 
            var(--sdg-2-background-color) 5.88% 11.76%,   
            var(--sdg-3-background-color) 11.76% 17.64%,  
            var(--sdg-4-background-color) 17.64% 23.52%,  
            var(--sdg-5-background-color) 23.52% 29.4%,   
            var(--sdg-6-background-color) 29.4% 35.28%,   
            var(--sdg-7-background-color) 35.28% 41.16%,   
            var(--sdg-8-background-color) 41.16% 47.04%,   
            var(--sdg-9-background-color) 47.04% 52.92%,   
            var(--sdg-10-background-color) 52.92% 58.8%,    
            var(--sdg-11-background-color) 58.8% 64.68%,    
            var(--sdg-12-background-color) 64.68% 70.56%,    
            var(--sdg-13-background-color) 70.56% 76.44%,    
            var(--sdg-14-background-color) 76.44% 82.32%,    
            var(--sdg-15-background-color) 82.32% 88.2%,     
            var(--sdg-16-background-color) 88.2% 94.08%,     
            var(--sdg-17-background-color) 94.08% 100%
            )`;

    var sdgBoolDisplay = false;
    for (let j = 0; j < 17; j++) {
        let index = j + 1;
        sdgButton[`sdg-${index}`].hover(
            function () {
                // Mouse enter
                sdgBoolDisplay = true;
                let gradientParts = "";

                for (let i = 1; i <= 17; i++) {
                    const colorVar = (i === index)
                        ? `var(--sdg-${i}-hover-background-color)`
                        : `var(--sdg-${i}-background-color)`;

                    gradientParts += `${colorVar} ${sdgPosition[`sdg-${i}`]},`;
                }

                // Remove trailing comma
                gradientParts = gradientParts.slice(0, -1);

                //Append conic gradient value from loop
                const sdgBoxStyle = `conic-gradient(${gradientParts})`;
                //Change specified sdg cone color with specific hover value on sdgBox 
                $sdgBox.css('background', sdgBoxStyle);

                //targetText, targetIcon to change img src to appropriate sdg
                $targetText.attr('src', `../img/sdg/sdg-text-${index}.png`).addClass('active');
                $targetIcon.attr('src', `../img/sdg/sdg-icon-${index}.png`).addClass('active');


                // $spacer.addClass('active');
                if(sdgBoolDisplay === true){
                    console.log("BOOLIN 1: TRUE")

                    setTimeout(() => {
                        //Change sdg-section background color
                        $sdgSection.css('background', `var(--sdg-${index}-background-color)`);
                        
                        $spacer.addClass('active');
                        $targetDiv.addClass('active');
                    }, 200);
                }else{
                    console.log("BOOLOUT 1: TRUE")
                    $targetDiv.removeClass('active');
                    $spacer.removeClass('active');
                }

                // if($targetDiv.hasClass('active')){
                // }

            },
            function () {
                sdgBoolDisplay = false;

                // Mouse leave
                //Change sdg cone color to default 
                $sdgBox.css('background', defaultSdgBoxStyle);
                //Change sdg section to default
                $sdgSection.css('background', `var(--sdg-section-background-color)`);


                if(sdgBoolDisplay === true){
                    console.log("BOOLIN 2: TRUE")

                    setTimeout(() => {
                        //targetText, targetIcon to change img src to default
                        $targetText.attr('src', defaultTextSrc).removeClass('active');
                        $targetIcon.attr('src', defaultIconSrc).removeClass('active');
                    }, 300);
                }else{
                    console.log("BOOLOUT 2: TRUE")

                    $spacer.removeClass('active');
                    $targetDiv.removeClass('active');
                }
            }
        );
    }

    
                // // $targetDiv.css({
                // //     opacity: 1
                // //     ,
                // //     position: 'static'
                // // });

                    // $targetDiv.css({
                //     opacity: 1,
                //     position: 'absolute'
                // });
    // <div id="target-div" class="d-flex flex-column" style="padding-top: 40px;">
    //     <img id="target-text" class="sdg-display" style="width: 300px; height:auto;" src="../img/sdg/sdg-text-goal.png" alt="">
    //     <img id="target-icon" class="sdg-display" style="width: 300px; height:auto;" src="../img/sdg/sdg-icon-goal.png" alt="">
    // </div>
    
    // <div id="spacer" class="d-flex flex-column sdg-display-default" style="width: 300px; padding-top:40px;">
    //     <img id="text" style="width: 300px; height:auto;" src="../img/sdg/sdg-text-goal.png" alt="">
    //     <img id="icon" style="width: 300px; height:auto;" src="../img/sdg/sdg-icon-goal.png" alt="">
    // </div>

    // $sdg1Button.hover(
    //     function() {
    //         // Mouse enter
    //         $sdgBox.css('background', `conic-gradient(
    //         var(--sdg-1-hover-background-color) 0% 5.88%, 
    //         var(--sdg-2-background-color) 5.88% 11.76%,   
    //         var(--sdg-3-background-color) 11.76% 17.64%,  
    //         var(--sdg-4-background-color) 17.64% 23.52%,  
    //         var(--sdg-5-background-color) 23.52% 29.4%,   
    //         var(--sdg-6-background-color) 29.4% 35.28%,   
    //         var(--sdg-7-background-color) 35.28% 41.16%,   
    //         var(--sdg-8-background-color) 41.16% 47.04%,   
    //         var(--sdg-9-background-color) 47.04% 52.92%,   
    //         var(--sdg-10-background-color) 52.92% 58.8%,    
    //         var(--sdg-11-background-color) 58.8% 64.68%,    
    //         var(--sdg-12-background-color) 64.68% 70.56%,    
    //         var(--sdg-13-background-color) 70.56% 76.44%,    
    //         var(--sdg-14-background-color) 76.44% 82.32%,    
    //         var(--sdg-15-background-color) 82.32% 88.2%,     
    //         var(--sdg-16-background-color) 88.2% 94.08%,     
    //         var(--sdg-17-background-color) 94.08% 100%
    //         )`);
            
    //         $targetDiv.css({
    //             visibility: 'visible',
    //             // position: 'static'
    //         });

    //         $spacer.addClass('active');

    //         $targetText.attr('src', '../img/sdg/sdg-text-1.png').addClass('active');
    //         $targetIcon.attr('src', '../img/sdg/sdg-icon-1.png').addClass('active');
            
    //     },
    //     function() {
        

    //         $targetDiv.css({
    //             visibility: 'hidden',
    //             position: 'absolute'
    //         });

    //         $spacer.removeClass('active');

    //         // Mouse leave
    //         // $targetText.attr('src', defaultTextSrc).removeClass('active');
    //         // $targetIcon.attr('src', defaultIconSrc).removeClass('active');
    //     }
      
    // );


    // $sdg14Button.hover(
    //     function() {
    //         // Mouse enter
    //         $sdgBox.css('background', `conic-gradient(
    //         var(--sdg-1-background-color) 0% 5.88%, 
    //         var(--sdg-2-background-color) 5.88% 11.76%,   
    //         var(--sdg-3-background-color) 11.76% 17.64%,  
    //         var(--sdg-4-background-color) 17.64% 23.52%,  
    //         var(--sdg-5-background-color) 23.52% 29.4%,   
    //         var(--sdg-6-background-color) 29.4% 35.28%,   
    //         var(--sdg-7-background-color) 35.28% 41.16%,   
    //         var(--sdg-8-background-color) 41.16% 47.04%,   
    //         var(--sdg-9-background-color) 47.04% 52.92%,   
    //         var(--sdg-10-background-color) 52.92% 58.8%,    
    //         var(--sdg-11-background-color) 58.8% 64.68%,    
    //         var(--sdg-12-background-color) 64.68% 70.56%,    
    //         var(--sdg-13-background-color) 70.56% 76.44%,    
    //         var(--sdg-14-hover-background-color) 76.44% 82.32%,    
    //         var(--sdg-15-background-color) 82.32% 88.2%,     
    //         var(--sdg-16-background-color) 88.2% 94.08%,     
    //         var(--sdg-17-background-color) 94.08% 100%
    //         )`);
            
    //         $targetDiv.css({
    //             visibility: 'visible',
    //             position: 'static'
    //         });

    //         $spacer.addClass('active');

    //         $targetText.attr('src', '../img/sdg/sdg-text-14.png').addClass('active');
    //         $targetIcon.attr('src', '../img/sdg/sdg-icon-14.png').addClass('active');
            
    //     },
    //     function() {
    //         $targetDiv.css({
    //             visibility: 'hidden',
    //             position: 'absolute'
    //         });
    //         $spacer.removeClass('active');

    //         $targetText.attr('src', defaultTextSrc).removeClass('active');
    //         $targetIcon.attr('src', defaultIconSrc).removeClass('active');

    //         // Mouse leave
       
    //     }
    // );



            // $targetText.stop(true).fadeOut(300, function () {
            //     $(this).attr('src', '../img/sdg/sdg-text-1.png').fadeIn(300);
            // });

            // $targetIcon.stop(true).fadeOut(300, function () {
            //     $(this).attr('src', '../img/sdg/sdg-icon-1.png').fadeIn(300);
            // });


            // $targetText.stop(true).fadeOut(300, function () {
            //     $(this).attr('src', defaultTextSrc).fadeIn(300);
            // });

            // $targetIcon.stop(true).fadeOut(300, function () {
            //     $(this).attr('src', defaultIconSrc).fadeIn(300);
            // });
  

</script>

</html>