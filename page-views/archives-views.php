<style>
    <?php 
    require_once '../css/updates.css'; 
    ?>
</style>


<div class="hero-banner archives" >
    
</div>
<?php 
    require_once '../table-articles/table-articles.php';
    $year = 1; //default 
    $yearlyArchived = $archives[$year];
    $monthlyArchived = $yearlyArchived["months"];
    $originalIndex = 0;

    // $slicedArchives = array_slice($monthlyArchived, 0, 6);
    
    $monthlyCount = count($monthlyArchived);
    
    $firstCount = ceil($monthlyCount/2);
    $secondCount = $monthlyCount - $firstCount; 
    
    $firstMonthList = array_slice($monthlyArchived, -1 *($firstCount)); // 
    
    $secondMonthList = array_slice($monthlyArchived, 0,($secondCount)); // 


    // $slicedArchives = array_slice($monthlyArchived, -6); // 

    // $monthsCount = count($slicedArchives); // Get the number of elements
?>


<div class="section-title archives">
    <h2>YEARLY</h2>

    <div class="d-flex flex-row" style="gap: 20px;">
        <a class="button previous archives" href="">&laquo;</a>
        <h2><?php 
            // echo 'second:' . $secondCount;
            echo $yearlyArchived["year_pk"];
        ?></h2>
        <a class="button next archives" href="" >&raquo;</a>
    </div>
</div>
<div class="page-margin">
    <div class="page-section archives">

        <div class="month-list">
        <?php  
        for ($index = $firstCount - 1; $index >= 0; $index--):
            $month = $firstMonthList[$index]; // Access the month using the index
            $originalIndex = $index + 1; // Increment index for display
            ?>
            <a href="">
                <div class="month">
                    <div class="description-card">
                        <h2><?php echo $month["name"] ?></h2>
                        <h2 id="year"><?php echo $yearlyArchived["year_pk"] ?></h2>
                    </div>

                    <div class="vector">
                        <img src="../table-articles/4/image-4.jpg" alt="">
                        <div class="overlay"></div>
                    </div>
               
                </div>
            </a>
        <?php endfor; ?>
        </div>

        <div class="month-list">
        <?php  
        for ($index = $secondCount - 1; $index >= 0; $index--):
            $month = $secondMonthList[$index]; // Access the month using the index
            $originalIndex = $index + 1; // Increment index for display
            ?>
            <a href="">
                <div id="" class="month">
                    <div class="description-card">
                        <h2><?php echo $month["name"] ?></h2>
                        <h2 id="year"><?php echo $yearlyArchived["year_pk"] ?></h2>
                    </div>
    
                    <div class="vector">
                        <img src="" alt="">
                        <div class="overlay"></div>
                    </div>
       
                </div>
            </a>
        <?php endfor; ?>
        </div>
    </div>
</div>
