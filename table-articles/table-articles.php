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


// img_count to gallery_style
// NOTE: description in this version is appended with html styling due to quil.js, when data is sent through db mysql using the input styling with quil html gets appended. Check within the testing page (check other link dropdown open link named "test") to see reference, idea
$articleTable = [
    [
        "header" => "In response to the scheduled power interruption by NGCP and Zamcelco in the West Coast area, including WMSU, on Saturday, March 8, 2025, all undergraduate and graduate classes will be conducted online.",
        "description" => "<p>In response to the scheduled power interruption by NGCP and Zamcelco in the West Coast area, including WMSU, on Saturday, March 8, 2025, all undergraduate and graduate classes will be conducted online.<br><br>Faculty and students are encouraged to prepare accordingly to ensure a seamless transition to virtual learning for the day.</p>",
        "date" => "March 7, 2025",
        "thumbnail" => "../img/article-1.png",
        "gallery_style" => "1",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 0
    ],
    [
        "header" => "Western Mindanao State University joins the 2025 National Women’s Month Celebration!",
        "description" => "<p>Western Mindanao State University (WMSU) joined the 2025 National Women’s Month Celebration on March 3, 2025, with an opening program spearheaded by Dr. Mariam Z. Julkarnain, Director of the Gender Research and Resource Center (GRRC).<br><br>The event featured a vibrant opening salvo and the unveiling of a commitment wall, symbolizing the university’s continued advocacy for gender equality and women’s empowerment. A series of activities, including seminars, competitions, and interactive sessions, have been scheduled throughout March to engage and inspire participants.<br><br>This year’s celebration highlights the core objectives of Republic Act 9710, or the Magna Carta of Women, reaffirming WMSU’s commitment to nourishing a society where women have equal rights, power, and opportunities.",
        "date" => "March 7, 2025",
        "thumbnail" => "../img/article-2.png",
        "gallery_style" => "2",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 1

    ],
    [
        "header" => "SciComustahan Launched: Advancing Science Communication in Mindanao",
        "description" => "
        <p>Western Mindanao State University, in partnership with the Western Mindanao Agriculture, Aquatic and Natural Resources Research and Development Consortium (WESMAARRDEC), officially launched SciComustahan: Kwentong TechTrans sa SciComunidad ng Mindanao, marking a significant milestone in advancing science communication in Mindanao. This pioneering initiative sets the stage for bridging scientific advancements with public engagement, fostering a more informed and connected community in Agriculture, Aquatic, and Natural Resources (AANR) technologies.</p>
        <p><br></p>
        <p>The pre-launching event, held on February 21, included the signing of the memoranda of understanding and agreement, formalizing partnerships aimed at ensuring collaborative efforts in knowledge-sharing and technology transfer. The official launch took place on February 28, coinciding with the airing of the program’s first episode, marking the beginning of SciComustahan’s journey in bringing science closer to the public.</p>
        <p><br></p>
        <p>Dr. Nursia M. Barjose, Vice President for Academic Affairs, who represented University President Dr. Ma. Carla A. Ochotorena, emphasized the broader impact of the project, stating, “This project is a start of a transformative journey that will not only enhance communication but also connect, inform, and empower our communities, unlocking the immense potential of research and technology to drive meaningful change.”</p>
        <p><br></p>
        <p>Funded by DOST-PCAARRD under WESMAARRDEC, the initiative is spearheaded by Ms. Kimberly Joy R. Kilat of the Mass Communication Department, who envisioned a platform where scientific discourse is both accessible and engaging. During her speech at the launch event, Kilat stated, “SciComustahan is more than just a program; it is a movement that fosters meaningful conversations about science and technology.” “Our goal is to make scientific knowledge not only informative but also engaging and relevant to the everyday lives of people in Mindanao”, Kilat added.</p>
        <p><br></p>
        <p>During the launch, attendees, farmers and fisher folks association, and key stakeholders, witnessed the signing of the Memorandum of Understanding between WMSU, WESMAARRDEC and four (4) other consortia in Mindanao, and DOST-PCAARRD’s RAISE program. This formalized partnerships aimed at ensuring collaborative efforts in knowledge-sharing and technology transfer.</p>
        <p><br></p>
        <p>As part of the launch, the program’s key components were introduced:</p>
        <p><br></p>
        <ol><li>𝐒𝐡𝐚𝐫𝐢𝐧𝐠 𝐄𝐱𝐩𝐞𝐫𝐭𝐢𝐬𝐞 – Scientists and technology experts will be central to discussions, ensuring accurate and practical knowledge dissemination.</li>
        <li>𝐂𝐞𝐥𝐞𝐛𝐫𝐚𝐭𝐢𝐧𝐠 𝐒𝐮𝐜𝐜𝐞𝐬𝐬 – Adopters of AANR technologies will share about their journeys, offering inspiration and practical insights for others looking to invest in innovation.</li><li>𝐄𝐧𝐠𝐚𝐠𝐢𝐧𝐠 𝐂𝐨𝐧𝐭𝐞𝐧𝐭 – Pre-edited educational videos will be broadcasted, showcasing how multimedia will play a vital role in communicating science to the public.</li></ol>
        <p><br></p
        p>The SciComustahan launch marks the beginning of a dynamic and innovative approach to science communication. By leveraging television, radio, and digital platforms, the program is set to enhance knowledge exchange and encourage the adoption of AANR technologies across Mindanao.</p>
        <p><br></p>
        <p>With its official unveiling, SciComustahan is poised to empower local communities, strengthen collaboration among stakeholders, and ensure that scientific advancements translate into tangible benefits for the region. This launch is just the first step in a transformative journey, setting the foundation for a future where science is more accessible, engaging, and impactful. (LMP, PAO)</p>
        <p><br></p>
        <p>To maximize its reach, SciComustahan will be aired every Friday at 6:30pm through the following platforms:</p>
        <ul><li>Emedia Digital TV Channel 40</li></ul>
        <ul><li>Emedia Digital TV Channel 40</li></ul>
        <ul><li>Sky Cable Channel 54</li></ul>
        <ul><li>E-media Mo FM Facebook Page</li></ul>",
        "date" => "March 7, 2025",
        "thumbnail" => "../img/article-3.png",
        "gallery_style" => "5",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 2

    ],
    [
        "header" => "WMSU Pioneers Cutting-Edge Research with the Pure and Analytical Research Center",
        "description" => "
        <p>Western Mindanao State University has taken a transformative leap in scientific research and innovation with the establishment of the Pure and Analytical Research Center (PARC). More than just a facility, PARC represents the university’s unwavering commitment to advancing molecular and chemical research, fostering interdisciplinary collaboration, and equipping researchers with state-of-the-art technology. This milestone aligns with WMSU’s vision of becoming a leading research institution, driving impactful discoveries that benefit both academia and society.</p>
        <p><br></p>
        <p>The establishment of PARC is a testament to the dedication and collective efforts of researchers, faculty members, and institutional leaders. It emerged from the NICER Phase 1 Project 2: Molecular and Nutritional Assessment of ZamPen Native Chicken, along with other personally funded projects, paving the way for a research hub that houses high-end instrumentation facilities to support the scientific community. With a clear vision of becoming a premier research facility in molecular and chemical research, PARC is designed to provide cutting-edge services anchored in science-based technology and innovation. It remains steadfast in its mission to generate socially responsive research while offering pure and analytical services that contribute to sustainable growth and development in the region.</p>
        <p><br></p>
        <p>As one of the 10 newly established research centers at WMSU, PARC was officially approved under BOR Resolution No. 038 and has been structured into two primary divisions: the Pure and Analytical Research Laboratory – Chemical Division, led by Dr. Reynante E. Autida, RCh, and the Molecular Division, headed by Dr. Melbert C. Sepe. These divisions serve over 100 students, faculty researchers, and external stakeholders, extending their services beyond the university to cater to other institutions, agencies, and research entities in Region IX and beyond.</p>
        <p><br></p>
        <p>PARC is part of WMSU’s broader initiative to advance multidisciplinary research, joining nine other specialized research centers that highlight the university’s commitment to scientific excellence and innovation. These ten research units represent a diverse range of disciplines, reinforcing WMSU’s position as a hub for research and development:</p>
        <p><br></p>
        <ol>
        <li>Native Chicken R&amp;D Center</li>
        <li>Pure and Analytical Research Center</li>
        <li>WMSU Socio-Economic Research and Data Analytic Center (SERDAC)</li>
        <li>Research Innovation Center for Metals and Engineering</li>
        <li>Research Center for Culinary Nutrition and Food Product Innovation</li>
        <li>Climate Change Research Center (CCRC)</li>
        <li>Center for Health Research and Health Systems Research</li>
        <li>Ethnobotanical and Pharmacological Center</li>
        <li>WMSU Biodiversity Research Center</li>
        <li>Research Center for Language and Literature Studies</li>
        </ol>
        <p><br></p>
        <p>The success of PARC has been further strengthened through strategic partnerships with prominent institutions, including the Philippine Genome Center-University of the Philippines Mindanao, Department of Science and Technology- IX (DOST-IX), DOST Philippine Council for Agriculture, Aquatic and Natural Resources Research and Development (PCAARRD), Science for Change Program, COARE or the Computing and Archiving Research Environment, and the National University of Singapore.</p>
        <p><br></p>
        <p>Aligned with WMSU’s University 4.0 initiative, PARC is committed to ensuring its sustainability through income-generating projects, research opportunities, and continuous innovations. The center’s establishment significantly contributes to the university’s efforts in SUC Leveling, a key component in institutional development and national recognition. The importance of meaningful research was highlighted by Dr. Marvin A. Maulion, Director for Research Center Operations Office, who emphasized that research should focus on addressing real-world problems rather than simply creating market-driven products. This principle aligns with the words of DOST Secretary Renato U. Solidum, who urged scientists to solve societal challenges through impactful research.</p>
        <p><br></p>
        <p>The launch of the Pure and Analytical Research Center is more than just a celebration of infrastructure—it is a major step in transforming WMSU into a smart research university. As the university continues to expand its research frontiers, the commitment to excellence, collaboration, and sustainability remains at the core of its mission.</p>
        <p><br></p>
        <p>With faith, humility, and unity, WMSU moves forward with confidence, ensuring a future defined by groundbreaking research and scientific progress. The Pure and Analytical Research Center stands as a beacon of knowledge and innovation, not only for the university but for the entire region and the nation as a whole. (LMP, PAO)</p>
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../img/article-4.png",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3


    ]
];


$gallery = [
    [
       "images" => ['../table-articles/0/image-1.jpg']
    ],
    [
        "images" => ['../table-articles/1/image-1.jpg', '../table-articles/1/image-2.jpg'],
    ],
    [
        "images" => ['../table-articles/2/image-1.jpg', '../table-articles/2/image-2.jpg', '../table-articles/2/image-3.jpg'],
    ],
    [
        "images" => ['../table-articles/3/image-1.jpg', '../table-articles/3/image-2.jpg', '../table-articles/3/image-3.jpg', '../table-articles/3/image-4.jpg', '../table-articles/3/image-5.jpg', '../table-articles/3/image-6.jpg', '../table-articles/3/image-7.jpg', '../table-articles/3/image-8.jpg', '../table-articles/3/image-9.jpg', '../table-articles/3/image-10.jpg', '../table-articles/3/image-11.jpg', '../table-articles/3/image-12.jpg', '../table-articles/3/image-13.jpg', '../table-articles/3/image-14.jpg']
    ]
];


// $articleTable = [
//     [
//         "header" => "In response to the scheduled power interruption by NGCP and Zamcelco in the West Coast area, including WMSU, on Saturday, March 8, 2025, all undergraduate and graduate classes will be conducted online.",
//         "description" => "In response to the scheduled power interruption by NGCP and Zamcelco in the West Coast area, including WMSU, on Saturday, March 8, 2025, all undergraduate and graduate classes will be conducted online.\n\nFaculty and students are encouraged to prepare accordingly to ensure a seamless transition to virtual learning for the day.",
//         "date" => "March 7, 2025",
//         "thumbnail" => "../img/article-1.png",
//         "gallery_style" => "1",
//         "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
//         "gallery_fk" => 0
//     ],
//     [
//         "header" => "Western Mindanao State University joins the 2025 National Women’s Month Celebration!",
//         "description" => "Western Mindanao State University (WMSU) joined the 2025 National Women’s Month Celebration on March 3, 2025, with an opening program spearheaded by Dr. Mariam Z. Julkarnain, Director of the Gender Research and Resource Center (GRRC).\n\nThe event featured a vibrant opening salvo and the unveiling of a commitment wall, symbolizing the university’s continued advocacy for gender equality and women’s empowerment. A series of activities, including seminars, competitions, and interactive sessions, have been scheduled throughout March to engage and inspire participants.\n\nThis year’s celebration highlights the core objectives of Republic Act 9710, or the Magna Carta of Women, reaffirming WMSU’s commitment to nourishing a society where women have equal rights, power, and opportunities.",
//         "date" => "March 7, 2025",
//         "thumbnail" => "../img/article-2.png",
//         "gallery_style" => "2",
//         "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
//         "gallery_fk" => 1

//     ],
//     [
//         "header" => "SciComustahan Launched: Advancing Science Communication in Mindanao",
//         "description" => "Western Mindanao State University, in partnership with the Western Mindanao Agriculture, Aquatic and Natural Resources Research and Development Consortium (WESMAARRDEC), officially launched SciComustahan: Kwentong TechTrans sa SciComunidad ng Mindanao, marking a significant milestone in advancing science communication in Mindanao. This pioneering initiative sets the stage for bridging scientific advancements with public engagement, fostering a more informed and connected community in Agriculture, Aquatic, and Natural Resources (AANR) technologies.\n\nThe pre-launching event, held on February 21, included the signing of the memoranda of understanding and agreement, formalizing partnerships aimed at ensuring collaborative efforts in knowledge-sharing and technology transfer. The official launch took place on February 28, coinciding with the airing of the program’s first episode, marking the beginning of SciComustahan’s journey in bringing science closer to the public.\n\nDr. Nursia M. Barjose, Vice President for Academic Affairs, who represented University President Dr. Ma. Carla A. Ochotorena, emphasized the broader impact of the project, stating, “This project is a start of a transformative journey that will not only enhance communication but also connect, inform, and empower our communities, unlocking the immense potential of research and technology to drive meaningful change.”\n\nFunded by DOST-PCAARRD under WESMAARRDEC, the initiative is spearheaded by Ms. Kimberly Joy R. Kilat of the Mass Communication Department, who envisioned a platform where scientific discourse is both accessible and engaging. During her speech at the launch event, Kilat stated, “SciComustahan is more than just a program; it is a movement that fosters meaningful conversations about science and technology.” “Our goal is to make scientific knowledge not only informative but also engaging and relevant to the everyday lives of people in Mindanao”, Kilat added.\n\nDuring the launch, attendees, farmers and fisher folks association, and key stakeholders, witnessed the signing of the Memorandum of Understanding between WMSU, WESMAARRDEC and four (4) other consortia in Mindanao, and DOST-PCAARRD's RAISE program. This formalized partnerships aimed at ensuring collaborative efforts in knowledge-sharing and technology transfer.\n\nAs part of the launch, the program's key components were introduced:\n\n1. Sharing Expertise - Scientists and technology experts will be central to discussions, ensuring accurate and practical knowledge dissemination.\n\n𝟐. 𝐂𝐞𝐥𝐞𝐛𝐫𝐚𝐭𝐢𝐧𝐠 𝐒𝐮𝐜𝐜𝐞𝐬𝐬 – Adopters of AANR technologies will share about their journeys, offering inspiration and practical insights for others looking to invest in innovation.\n\n𝟑. 𝐄𝐧𝐠𝐚𝐠𝐢𝐧𝐠 𝐂𝐨𝐧𝐭𝐞𝐧𝐭 – Pre-edited educational videos will be broadcasted, showcasing how multimedia will play a vital role in communicating science to the public.\n\nThe SciComustahan launch marks the beginning of a dynamic and innovative approach to science communication. By leveraging television, radio, and digital platforms, the program is set to enhance knowledge exchange and encourage the adoption of AANR technologies across Mindanao.\n\nWith its official unveiling, SciComustahan is poised to empower local communities, strengthen collaboration among stakeholders, and ensure that scientific advancements translate into tangible benefits for the region. This launch is just the first step in a transformative journey, setting the foundation for a future where science is more accessible, engaging, and impactful. (LMP, PAO)\n\nTo maximize its reach, SciComustahan will be aired every Friday at 6:30pm through the following platforms:\n\n- Emedia Digital TV Channel 40\n\n- Sky Cable Channel 54\n\n- MCTV Channel 98\n\n- E-media Mo FM Facebook Page",
//         "date" => "March 7, 2025",
//         "thumbnail" => "../img/article-3.png",
//         "gallery_style" => "3",
//         "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
//         "gallery_fk" => 0

//     ],
//     [
//         "header" => "WMSU Pioneers Cutting-Edge Research with the Pure and Analytical Research Center",
//         "description" => "",
//         "date" => "March 7, 2025",
//         "thumbnail" => "../img/article-4.png",
//         "gallery_style" => "3",
//         "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
//         "gallery_fk" => 0


//     ]
// ];







?>