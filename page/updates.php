<?php
require_once '../__includes/head.php';

// Get the 'page-view' query parameter
$pageView = isset($_GET['page-view']) ? $_GET['page-view'] : '';

// Determine which file to include based on the 'page-view' parameter
if ($pageView === 'news-articles') {
    $directory = '../page-views/news-articles-views.php';
} elseif ($pageView === 'archives'){
    $directory = '../page-views/archives-views.php';

} else {
    $directory = '../page-views/default-view.php'; // Fallback or default view
}
?>

<body>
    <?php require_once '../__includes/navbar.php'; ?>
    <div class="homepage-body">
        <?php 
            require_once $directory; // Include the determined file
        ?>
    </div>
</body>