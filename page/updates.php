<?php
require_once '../__includes/head.php';

// Get the 'page-view' query parameter
$pageView = isset($_GET['page-view']) ? $_GET['page-view'] : '';
$articleView = isset($_GET['article-view']) ? $_GET['article-view'] : 'false';
$moreArticlesView = isset($_GET['more-articles']) ? $_GET['more-articles'] : 'false';
$moreArchivesView = isset($_GET['more-archives']) ? $_GET['more-archives'] : 'false';


// Determine which file to include based on the 'page-view' parameter
if ($pageView === 'news-articles') {

    if($moreArticlesView === 'false'){
        if($articleView === 'true'){
            $directory = '../page-views/articles-views.php';
            // $directory = '../page-views/updates/articles-views.php';
        }if($articleView === 'false'){
            $directory = '../page-views/news-articles-views.php';
            // $directory = '../page-views/updates/news-articles-views.php';
        }
       
    }elseif($moreArticlesView === 'true'){
        $directory = '../page-views/updates/more-articles-views.php';
        // $directory = '../page-views/more-articles-views.php';
    }else{


    }

  
} elseif ($pageView === 'archives'){
    $directory = '../page-views/archives-views.php';
} elseif ($pageView === 'media'){
    $directory = '../page-views/updates/media.php';
} elseif ($pageView === 'announcements'){
    if($articleView == 'true'){
    $directory = '../page-views/updates/announcements-article-view.php';
}
else{
    $directory = '../page-views/updates/announcements.php';
}
}else {
    $directory = '../page-views/default-view.php'; // Fallback or default view
}
?>

<link rel="stylesheet" href="../vendor/bootstrap-icons-1.11.3/font/bootstrap-icons.css">


<body>
    <?php require_once '../__includes/navbar.php'; ?>
    <div class="page-body">
        <?php 
            require_once $directory; // Include the determined file
        ?>
    </div>
    <?php
    require_once '../__includes/footer.php';
    ?>
</body>


