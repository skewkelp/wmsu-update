<?php


// Creating a multidimensional associative array for multiple persons
$people = [
    [
        "firstName" => "John",
        "lastName" => "Doe",
        "age" => 30,
        "email" => "john.doe@example.com"
    ],
    [
        "firstName" => "Jane",
        "lastName" => "Smith",
        "age" => 25,
        "email" => "jane.smith@example.com"
    ],
    [
        "firstName" => "Alice",
        "lastName" => "Jones",
        "age" => 28,
        "email" => "alice.jones@example.com"
    ]
];


// img_count interchangeably be used as the styling of the gallery
$articleTable = [
    [
        "header" => "In response to the scheduled power interruption by NGCP and Zamcelco in the West Coast area, including WMSU, on Saturday, March 8, 2025, all undergraduate and graduate classes will be conducted online.",
        "description" => "In response to the scheduled power interruption by NGCP and Zamcelco in the West Coast area, including WMSU, on Saturday, March 8, 2025, all undergraduate and graduate classes will be conducted online.\n\nFaculty and students are encouraged to prepare accordingly to ensure a seamless transition to virtual learning for the day.",
        "date" => "March 7, 2025",
        "thumbnail" => "../img/article-1.png",
        "img_count" => "1",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 0
    ],
    [
        "header" => "Western Mindanao State University joins the 2025 National Women’s Month Celebration!",
        "description" => "Western Mindanao State University (WMSU) joined the 2025 National Women’s Month Celebration on March 3, 2025, with an opening program spearheaded by Dr. Mariam Z. Julkarnain, Director of the Gender Research and Resource Center (GRRC).\n\nThe event featured a vibrant opening salvo and the unveiling of a commitment wall, symbolizing the university’s continued advocacy for gender equality and women’s empowerment. A series of activities, including seminars, competitions, and interactive sessions, have been scheduled throughout March to engage and inspire participants.\n\nThis year’s celebration highlights the core objectives of Republic Act 9710, or the Magna Carta of Women, reaffirming WMSU’s commitment to nourishing a society where women have equal rights, power, and opportunities.",
        "date" => "March 7, 2025",
        "thumbnail" => "../img/article-2.png",
        "img_count" => "2",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 1

    ],
    [
        "header" => "SciComustahan Launched: Advancing Science Communication in Mindanao",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../img/article-3.png",
        "img_count" => "3",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 0

    ],
    [
        "header" => "WMSU Pioneers Cutting-Edge Research with the Pure and Analytical Research Center",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../img/article-4.png",
        "img_count" => "3",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 0


    ]
];



$gallery = [
    [
       "images" => ['../table-articles/0/image-1.jpg']
    ],
    [
        "images" => ['../table-articles/1/image-1.jpg', '../table-articles/1/image-2.jpg'],
     ]
];





?>