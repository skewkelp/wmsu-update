<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Text Editor with Bullets</title>
    <!-- Include Quill CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        .editor {
            height: 300px;
        }
    </style>
</head>
<body>
<h2>Write Your Article</h2>

<!-- Create the editor container -->
<div id="editor" class="editor"></div>

<!-- Button to submit the content -->
<button id="submit-button">Submit Article</button>

<!-- Hidden form to send data to PHP -->
<form id="article-form" action="submit.php" method="post" style="display:none;">
    <input type="hidden" name="article_content" id="article-content">
</form>

<!-- Include Quill JS -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    // Initialize Quill editor
    var quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, false] }],
                ['bold', 'italic', 'underline'],
                ['clean'], // remove formatting button
                [{ 'list': 'ordered' }, { 'list': 'bullet' }] // Correctly set list buttons
            ]
        }
    });

    document.getElementById('submit-button').addEventListener('click', function() {
        // Get content from the quill editor
        var html = quill.root.innerHTML;
        // Set the content in the hidden input
        document.getElementById('article-content').value = html;
        // Submit the form
        document.getElementById('article-form').submit();
    });
</script>
</body>
</html>



<?php
// SAMPLE GALLERY VIEW
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Image Gallery with Lightbox</title>
//     <style>

//         .gallery {
//             display: flex;
//             justify-content: space-around;
//             margin: 20px;
//         }
        
//         .img-container {
//             cursor: pointer;
//             margin: 10px;
//         }
        
//         .img-container img {
//             width: 200px; /* Set your desired image width */
//             height: auto;
//             border: 2px solid #ddd;
//             border-radius: 4px;
//         }
        
//         .lightbox {
//             display: none; /* Hidden by default */
//             position: fixed;
//             z-index: 1000;
//             left: 0;
//             top: 0;
//             width: 100%;
//             height: 100%;
//             background-color: rgba(0, 0, 0, 0.8);
//         }
        
//         .lightbox-content {
//             position: relative;
//             margin: auto;
//             top: 50%;
//             transform: translateY(-50%);
//             width: 80%;
//         }
        
//         .slides {
//             display: none; /* Hidden by default */
//             opacity: 0; /* Initially hidden */
//             transition: opacity 0.5s ease; /* Smooth transition effect */
//         }

//         .active {
//             display: block; /* Show the active slide */
//             opacity: 1; /* Fade in */
//         }

//         img {
//             max-width: 100%;
//             height: auto;
//         }
        
//         .close {
//             position: absolute;
//             top: 15px;
//             right: 35px;
//             color: white;
//             font-size: 40px;
//             cursor: pointer;
//         }
        
//         .prev, .next {
//             cursor: pointer;
//             position: absolute;
//             top: 50%;
//             width: auto;
//             padding: 16px;
//             color: white;
//             font-weight: bold;
//             font-size: 18px;
//             transition: 0.6s ease;
//             user-select: none;
//         }
        
//         .prev {
//             left: 0;
//         }
        
//         .next {
//             right: 0;
//         }
//     </style>
// </head>
// <body>

// <div class="gallery">
//     <div class="img-container" onclick="openLightbox();currentSlide(1)">
//         <img src="../img/article-sample-2.jpg" alt="Image 1">
//     </div>
//     <div class="img-container" onclick="openLightbox();currentSlide(2)">
//         <img src="../img/article-sample-3.jpg" alt="Image 2">
//     </div>
//     <div class="img-container" onclick="openLightbox();currentSlide(3)">
//         <img src="../img/article-sample-4.jpg" alt="Image 3">
//     </div>
// </div>

// <div id="lightbox" class="lightbox">
//     <span class="close" onclick="closeLightbox()">&times;</span>
//     <div class="lightbox-content">
//         <div class="slides active">
//             <img src="../img/article-sample-1.jpg" alt="Image 1">
//         </div>
//         <div class="slides">
//             <img src="../img/article-sample-3.jpg" alt="Image 2">
//         </div>
//         <div class="slides">
//             <img src="../img/article-sample-4.jpg" alt="Image 3">
//         </div>
//     </div>
//     <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
//     <a class="next" onclick="changeSlide(1)">&#10095;</a>
// </div>

// <script>
//     let slideIndex = 1;

//     function openLightbox() {
//         document.getElementById("lightbox").style.display = "block";
//         showSlides(slideIndex);
//     }

//     function closeLightbox() {
//         document.getElementById("lightbox").style.display = "none";
//     }

//     function currentSlide(n) {
//         showSlides(slideIndex = n);
//     }

//     function changeSlide(n) {
//         showSlides(slideIndex += n);
//     }

//     function showSlides(n) {
//         let i;
//         let slides = document.getElementsByClassName("slides");
        
//         if (n > slides.length) { slideIndex = 1; }
//         if (n < 1) { slideIndex = slides.length; }
        
//         for (i = 0; i < slides.length; i++) {
//             slides[i].classList.remove("active"); // Hide all slides by removing active class
//         }
        
//         slides[slideIndex - 1].classList.add("active"); // Show the active slide by adding active class
//     }
// </script>

// </body>
// </html>
?>
<!-- 157 -->





<?php
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Facebook Image Sizes</title>
//     <style>
//         :root {
//             --primary-color: #5D5CDE;
//             --accent1: #0088a9;
//             --accent2: #00a9a9;
//             --accent3: #00a988;
//             --text-light: #ffffff;
//             --text-dark: #333333;
//             --border-color: #cccccc;
//         }

//         body {
//             font-family: Arial, sans-serif;
//             margin: 0;
//             padding: 20px;
//             background-color: #f5f5f5;
//             color: var(--text-dark);
//         }

//         .dark body {
//             background-color: #181818;
//             color: var(--text-light);
//         }

//         h1 {
//             text-align: center;
//             color: var(--accent1);
//             margin-bottom: 10px;
//         }

//         .subtitle {
//             text-align: center;
//             color: var(--accent2);
//             margin-bottom: 30px;
//         }

//         .layout-container {
//             display: grid;
//             grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
//             gap: 30px;
//             max-width: 1200px;
//             margin: 0 auto;
//         }

//         .layout {
//             border: 2px solid var(--border-color);
//             border-radius: 8px;
//             overflow: hidden;
//             background-color: white;
//             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
//         }

//         .dark .layout {
//             background-color: #252525;
//             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
//         }

//         .layout-title {
//             background-color: var(--accent1);
//             color: white;
//             padding: 8px 12px;
//             margin: 0;
//             font-size: 16px;
//         }

//         .image-container {
//             display: grid;
//             width: 100%;
//             height: 250px;
//             box-sizing: border-box;
//         }

//         /* Style 1 - 1 image */
//         .style-1 .image-container {
//             grid-template-columns: 1fr;
//             grid-template-rows: 1fr;
//         }

//         /* Style 2 - 2 images side by side */
//         .style-2 .image-container {
//             grid-template-columns: 1fr 1fr;
//         }

//         /* Style 3 - 2 images side by side */
//         .style-3 .image-container {
//             grid-template-columns: 1fr 1fr;
//         }

//         /* Style 4 - 2 images stacked */
//         .style-4 .image-container {
//             grid-template-columns: 1fr;
//             grid-template-rows: 1fr 1fr;
//         }

//         /* Style 5 - 3 images */
//         .style-5 .image-container {
//             grid-template-columns: 1fr 1fr 1fr;
//         }

//         /* Style 6 - 3 images */
//         .style-6 .image-container {
//             grid-template-columns: 1fr 1fr;
//             grid-template-rows: 1fr 1fr;
//         }
        
//         .style-6 .image:first-child {
//             grid-row: span 2;
//         }

//         /* Style 7 - 3 images */
//         .style-7 .image-container {
//             grid-template-columns: 1fr 1fr;
//             grid-template-rows: 1fr 1fr;
//         }
        
//         .style-7 .image:first-child {
//             grid-column: span 2;
//         }

//         /* Style 8 - 4 images */
//         .style-8 .image-container {
//             grid-template-columns: 1fr 1fr;
//             grid-template-rows: 1fr 1fr;
//         }

//         /* Style 9 - 4 images */
//         .style-9 .image-container {
//             grid-template-columns: 1fr 1fr;
//             grid-template-rows: 1fr 1fr 1fr;
//         }
        
//         .style-9 .image:first-child {
//             grid-column: span 2;
//         }

//         /* Style 10 - 4 images */
//         .style-10 .image-container {
//             grid-template-columns: 1fr 1fr 1fr;
//             grid-template-rows: 1fr 1fr;
//         }
        
//         .style-10 .image:first-child {
//             grid-column: span 3;
//         }

//         /* Cover styles */
//         .cover .image-container {
//             grid-template-columns: 1fr 1fr 1fr;
//         }

//         .image {
//             background-color: var(--accent1);
//             display: flex;
//             flex-direction: column;
//             align-items: center;
//             justify-content: center;
//             color: white;
//             padding: 10px;
//             text-align: center;
//             overflow: hidden;
//             font-size: 14px;
//             font-weight: bold;
//         }

//         /* Alternate colors for images */
//         .image:nth-of-type(2n) {
//             background-color: var(--accent2);
//         }
        
//         .image:nth-of-type(3n) {
//             background-color: var(--accent3);
//         }

//         .dimension {
//             font-size: 16px;
//             margin-bottom: 5px;
//         }

//         .ratio {
//             font-size: 12px;
//             opacity: 0.8;
//         }

//         /* Responsive adjustments */
//         @media (max-width: 768px) {
//             .layout-container {
//                 grid-template-columns: 1fr;
//             }
            
//             .image-container {
//                 height: 200px;
//             }
//         }
        
//         /* For dark mode support */
//         @media (prefers-color-scheme: dark) {
//             document.documentElement.classList.add('dark');
//         }
        
//         @media (prefers-color-scheme: light) {
//             document.documentElement.classList.remove('dark');
//         }
//     </style>
//     <script>
//         // Check for dark mode
//         if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
//             document.documentElement.classList.add('dark');
//         }
        
//         // Listen for changes in color scheme
//         window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
//             if (event.matches) {
//                 document.documentElement.classList.add('dark');
//             } else {
//                 document.documentElement.classList.remove('dark');
//             }
//         });
//     </script>
// </head>
// <body>
//     <h1>Facebook Image Sizes</h1>
//     <p class="subtitle">by LucidGen.com</p>
    
//     <div class="layout-container">
//         <!-- Style 1 -->
//         <div class="layout style-1">
//             <h2 class="layout-title">Style 1 | 1 image</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                     <br>
//                     <div class="dimension">1200×900</div>
//                     <div class="ratio">(Ratio 1.33:1)</div>
//                     <br>
//                     <div class="dimension">1200×628</div>
//                     <div class="ratio">(Ratio 1.91:1) - Feed cover</div>
//                     <br>
//                     <div class="dimension">1200×518</div>
//                     <div class="ratio">(Ratio 1.32:1) - Share link post</div>
//                     <br>
//                     <div class="dimension">1080×1920</div>
//                     <div class="ratio">(Ratio 9:16) - Story</div>
//                 </div>
//             </div>
//         </div>
        
//         <!-- Style 2 -->
//         <div class="layout style-2">
//             <h2 class="layout-title">Style 2 | 2 images</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//             </div>
//         </div>
        
//         <!-- Style 3 -->
//         <div class="layout style-3">
//             <h2 class="layout-title">Style 3 | 2 images</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">448×900</div>
//                     <div class="ratio">(Ratio 1:2.009)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">448×900</div>
//                     <div class="ratio">(Ratio 1:2.009)</div>
//                 </div>
//             </div>
//         </div>
        
//         <!-- Style 4 -->
//         <div class="layout style-4">
//             <h2 class="layout-title">Style 4 | 2 images</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">900×452</div>
//                     <div class="ratio">(Ratio 1.9:1.002)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×452</div>
//                     <div class="ratio">(Ratio 1.9:1.002)</div>
//                 </div>
//             </div>
//         </div>
        
//         <!-- Style 5 -->
//         <div class="layout style-5">
//             <h2 class="layout-title">Style 5 | 3 images</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//             </div>
//         </div>
        
//         <!-- Style 6 -->
//         <div class="layout style-6">
//             <h2 class="layout-title">Style 6 | 3 images</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">448×900</div>
//                     <div class="ratio">(Ratio 1:2.009)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//             </div>
//         </div>
        
//         <!-- Style 7 -->
//         <div class="layout style-7">
//             <h2 class="layout-title">Style 7 | 3 images</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">900×452</div>
//                     <div class="ratio">(Ratio 1.9:1.002)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//             </div>
//         </div>
        
//         <!-- Style 8 -->
//         <div class="layout style-8">
//             <h2 class="layout-title">Style 8 | 4 images</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//             </div>
//         </div>
        
//         <!-- Style 9 -->
//         <div class="layout style-9">
//             <h2 class="layout-title">Style 9 | 4 images</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">598×900</div>
//                     <div class="ratio">(Ratio 1:1.505)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//             </div>
//         </div>
        
//         <!-- Style 10 -->
//         <div class="layout style-10">
//             <h2 class="layout-title">Style 10 | 4 images</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">900×603</div>
//                     <div class="ratio">(Ratio 1:0.67)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">900×900</div>
//                     <div class="ratio">(Ratio 1:1)</div>
//                 </div>
//             </div>
//         </div>
        
//         <!-- Page Cover -->
//         <div class="layout cover">
//             <h2 class="layout-title">Page cover</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">940×348</div>
//                     <div class="ratio">Desktop</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">820×348</div>
//                     <div class="ratio">Mobile</div>
//                 </div>
//             </div>
//         </div>
        
//         <!-- Group Cover -->
//         <div class="layout cover">
//             <h2 class="layout-title">Group cover</h2>
//             <div class="image-container">
//                 <div class="image">
//                     <div class="dimension">940×348</div>
//                     <div class="ratio">Desktop</div>
//                 </div>
//                 <div class="image">
//                     <div class="dimension">655×348</div>
//                     <div class="ratio">Mobile</div>
//                 </div>
//             </div>
//         </div>
//     </div>
// </body>
// </html>
?>

<?php 
//FOOTER ON news-article previous
?>

<!-- <div class="footer">
    <div class="footer list text">
        <div class="footer-item">
            <div class="d-flex flex-row">
                <div class="footer-logo"></div>
                <h1 class="f-logo-text">| WMSU</h1>
            </div>    
            <p>Copyright © 2025 Western <br> Mindanao State University.<br>
            All rights reserved.</p>
        </div>
        
        <div class="footer-item">
            <h1>ABOUT</h1>
            <p><a href="">Mission</a></p>
            <p><a href="">Vission</a></p>
            <p><a href="">History</a></p>
        </div>
        
        <div class="footer-item">
            <h1>SERVICES</h1>
            
        </div>
        
        <div class="footer-item i4">
            <h1>QUICK LINKS</h1>
            <div class="d-flex flex-column justify-content-start">
                <div class="transparency-seal"><a href=""></a></div>
            </div>
            <p><a href="">Board Of Regents</a></p>
            <p><a href="">Administrative</a></p>
            <p><a href="">Officials</a></p>
        </div>

    </div>
</div> -->

<?php 
//CSS for footer previously

/* footer */
// .footer{
//     display: flex;
//     height: 480px;
//     justify-content: center;
//     align-items: center;
    
//     background-image: url("../img/footer.png");
//     background-size: cover;   
//     background-position: center; 
//     background-repeat: no-repeat; 
//     margin: 0;
// }

// .footer.text{
//     color: white !important;
// }.footer.text p a{
//     color: white !important;

//     font-size: 18px;
// }.footer.text h1{
//     font-size: 25px;
// }
// .f-logo-text{
//     font-size: 42px!important;    
// }


// .footer.list{
//     display: flex;
//     height: auto;
//     align-items: flex-start;
//     width: 1200px;
//     /* background-color: rgb(185, 220, 133)!important; */
//     justify-content: space-evenly;
    
// }

// .footer-item{
//     display: flex;
//     flex-direction: column;
//     justify-content: flex-start;
// }.footer-item.i4{
//     justify-content: center !important;
// }.footer-item h1{
//     font-weight: 700;
// }

// .footer-logo{
//     /* contentview */
//     height: 80px;
//     width: 80px;
//     /* background-color: #00AED9; */
//     background-image: url("../img/wmsu-logo.png");
//     background-size: cover;   
//     background-position: center; 
//     background-repeat: no-repeat; 
// }


// .transparency-seal{
//     height: 100px;
//     width: 100px;
//     background-image: url("../img/transparency-seal.png");
//     background-size: cover;   
//     background-position: center; 
//     background-repeat: no-repeat;
// }
?>