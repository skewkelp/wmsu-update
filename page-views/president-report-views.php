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
     <div class="hero-header">
          <h1 class="inter-bold">President's Reports</h1>
</div>
        <img src="../img/hero-banner/PresidentWsmu.png" class="hero-icon"></img>
    </div>       

</div>


<div class="page-margin article">
    <div class="page-section article">
        <a href="updates?page-view=president-report" class="arrow inter-black">&#11164; Back To President's Report</a>
        <div class="page-header-article" >
            <h2 class="title inter-extrabold" style="color: crimson">Historic Milestone: Turnover of the College of Medicine Building Phase 1</h2>
        </div>
        <div class="date">
            <span class="bi-clock icon"></span>
            <h2 class="title-date inter-medium">April 28 2025</h2>
        </div>
       
        <div>
            <img src="../imgs/president-report.jpg" alt="" class="president-report-pic">
        </div>

        <div class="description-card">
            <!-- <?php echo $articleSample['description'];?> -->
         <p class="inter-semibold"> 
Today, January 9, 2025, marks a significant milestone for Western Mindanao State University (WMSU) as the College of Medicine Building Phase 1 was officially turned over to the university. This momentous event was graced by the presence of WMSU President Dr. Ma. Carla A. Ochotorena, members of the Board of Regents, Vice-Presidents, and esteemed members of the WMSU community.  
The Phase 1 project boasts a total floor area of 1,253 square meters, meticulously designed to enhance medical education and training. This state-of-the-art facility includes an ICU Simulation, Ward, Operating Room, Emergency Room, Control Room, Comfort Rooms for male, female, and persons with disabilities (PWD), as well as Utility and Electrical Rooms.  
This transformative project, worth P33,000,000, was made possible through the invaluable support of Senator Pia S. Cayetano, who funded the construction under the FY 2021 General Appropriations Act (GAA). The funding is part of the initiative to increase the carrying capacity of the College of Medicine, enabling WMSU to accommodate more aspiring medical professionals and provide them with top-tier facilities.  
Once fully completed, the entire College of Medicine building will stand as a 4-story edifice with an impressive total floor area of 4,262 square meters. This structure reflects WMSU’s commitment to providing quality education in a conducive learning environment, ensuring future healthcare professionals are well-prepared to serve society.  
The turnover of Phase 1 signifies a step closer to realizing WMSU's vision of being a center of excellence in medical education and healthcare innovation. The university expresses its heartfelt gratitude to Senator Pia S. Cayetano for her generous contribution and unwavering support.  
Congratulations to the WMSU community on this remarkable achievement!
-AI Marquez
      </p> 
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


