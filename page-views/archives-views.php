<style>
    <?php 
    require_once '../css/updates.css'; 
    ?>
</style>


<div class="hero-banner archives" >
    
</div>
<?php 
    require_once '../table-articles/table-articles.php';
    $defaultYear = 2; //default year index for archive

    $getYear = isset($_GET['archived-index']) ? (int)$_GET['archived-index'] : '';

    if($getYear){
 
        if($getYear == $defaultYear){
            $currentIndex = $defaultYear - 1;
            $prevYear = $currentIndex;
        }if($getYear > $defaultYear || $getYear < $defaultYear){
            $currentIndex = $getYear - 1;
            $prevYear = $currentIndex;
            if($prevYear == 0){
                $prevNav = false;
            }else{
                $prevNav = isset($archives[$prevYear]) ? $archives[$prevYear] : false;
            }
        }
        $nextYear = $currentIndex + 1;
        //1 = 0  2 = 1, 3 = 2

        $nextNav = isset($archives[$nextYear]) ? $archives[$nextYear] : false;
           
        

        $yearlyArchived = $archives[$currentIndex];
        $monthlyArchived = $yearlyArchived["months"];
        $originalIndex = 0;
        
        $monthlyCount = count($monthlyArchived);
        
        $firstCount = ceil($monthlyCount/2);
        $secondCount = $monthlyCount - $firstCount; 
        
        $firstMonthList = array_slice($monthlyArchived, -1 *($firstCount)); // 
        
        $secondMonthList = array_slice($monthlyArchived, 0,($secondCount)); // 
    
    }
    
    else{
        $currentIndex = 'ERR';
    }

   
?>

<script>
    var prevNavExist = <?php echo json_encode($prevNav !== false); ?>;
    var nextNavExist = <?php echo json_encode($nextNav !== false); ?>;
    

    document.addEventListener("DOMContentLoaded", function() {
        // Hide or show elements based on existence
        if (!prevNavExist) {
            document.querySelector('.previous.archives').classList.add('hidden');
        }
        if (!nextNavExist) {
            document.querySelector('.next.archives').classList.add('hidden');
        }
    });
</script>

<div class="section-title archives">
    <h2>YEARLY
        <?php 
         ////COMMENT DEBUGGING
            // echo '<br>second:' . $secondCount . ' //prevYear:' . $prevYear . ' //currentYear or getYear:' . $getYear .' //nextYear:' .  $nextYear . ' //currentIndex:' . $currentIndex ;
        ?>
    </h2>

    <div class="d-flex flex-row" style="gap: 20px;">
        <a class="button previous archives" href="updates?page-view=archives&archived-index=<?php echo $prevYear;?>">&laquo;</a>
        <h2><?php 
            echo $yearlyArchived["year_pk"];
        ?></h2>
        <a class="button next archives" href="updates?page-view=archives&archived-index=<?php echo $nextYear + 1;?>" >&raquo;</a>
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
            <a href="updates?page-view=archives&more-archives=true&archived-index=<?php echo $getYear;?>&month-index=<?php echo $originalIndex?>">
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
