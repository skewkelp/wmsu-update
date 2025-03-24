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
        "thumbnail" => "../table-articles/0/image-1.jpg",
        "gallery_style" => "1",
        "sdg_tag" => ['3','4','8','9','11','12','13'],
        "gallery_fk" => 0
        ,"status" => "displayed"

    ],
    [
        "header" => "Western Mindanao State University joins the 2025 National Women’s Month Celebration!",
        "description" => "<p>Western Mindanao State University (WMSU) joined the 2025 National Women’s Month Celebration on March 3, 2025, with an opening program spearheaded by Dr. Mariam Z. Julkarnain, Director of the Gender Research and Resource Center (GRRC).<br><br>The event featured a vibrant opening salvo and the unveiling of a commitment wall, symbolizing the university’s continued advocacy for gender equality and women’s empowerment. A series of activities, including seminars, competitions, and interactive sessions, have been scheduled throughout March to engage and inspire participants.<br><br>This year’s celebration highlights the core objectives of Republic Act 9710, or the Magna Carta of Women, reaffirming WMSU’s commitment to nourishing a society where women have equal rights, power, and opportunities.",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/1/image-1.jpg",
        "gallery_style" => "2",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 1
        ,"status" => "displayed"

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
        "thumbnail" => "../table-articles/2/image-1.jpg",
        "gallery_style" => "5",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 2
        ,"status" => "displayed"
    ],
    [
        "header" => "WMSU Celebrates Indigenous Heritage with “Katutubong Sining” Lecture-Workshop",
        "description" => "
       
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "WMSU Celebrates Indigenous Heritage with “Katutubong Sining” Lecture-Workshop",
        "description" => "
        <p>Western Mindanao State University (WMSU) Centro de Estudio Mindanao spearheaded by its Director Dr. Melanie F. Lear hosted “Katutubong Sining: A Lecture-Workshop on Indigenous Arts &amp; Culture” at the WMSU Social Hall February 27, 2025. It was organized in partnership with Katutubo Exchange Philippines (KXPH), the event brought together students and faculty to explore and honor the Philippines’ rich&nbsp;Indigenous cultural heritage and traditional arts.</p>
        <p><br></p>
        <p>The lecture-workshop was led by Dr. Edwin Antonio, Vice Head of the National Committee on Northern Cultural Communities under the National Commission for Culture and the Arts (NCCA) and Founder/Director of KXPH. Dr. Antonio captivated attendees with his deep knowledge, shedding light on the importance of preserving Indigenous traditions in a modern context.</p>
        <p><br></p>
        <p>Held during February, recognized as National Arts Month under Proclamation No. 683, series of 1991, the event also resonated with the United Nations’ International Decade of Indigenous Languages (2022-2032). “Katutubong Sining” served as a vibrant tribute to these milestones, fostering a deeper appreciation of Filipino Indigenous identity among the WMSU community.</p>
        <p><br></p>
        <p>-RGT-</p>
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/4/image-2.jpg",
        "gallery_style" => "6",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 4
        ,"status" => "displayed"
    ],
    [
        "header" => "WMSU Celebrates Indigenous Heritage with “Katutubong Sining” Lecture-Workshop",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "7",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "8",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "9",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "10",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "11",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/4/image-2.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "12",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "13",
        "description" => " ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"

    ],
    [
        "header" => "14",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "15",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"

    ],
    [
        "header" => "16",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "17",
        "description" => "
       
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "18",
        "description" => "
       
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "19",
        "description" => "
       
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "20",
        "description" => "
       
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "21",
        "description" => "
       
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "22",
        "description" => "
       
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "23",
        "description" => "
       
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "24",
        "description" => "
       
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "25",
        "description" => "
       
        ",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "26",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "27",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "28",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "29archived",
        "description" => "",
        "date" => "December 7, 2024",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "archived"
    ],
    [
        "header" => "30",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "31",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "32archived",
        "description" => "",
        "date" => "December 7, 2024",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "archived"
    ],
    [
        "header" => "33archived",
        "description" => "",
        "date" => "December 7, 2024",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "archived"
    ],
    [
        "header" => "34",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "35archived",
        "description" => "",
        "date" => "December 7, 2024",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "archived"
    ],
    [
        "header" => "36",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "37",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "38",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "39",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "40",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "41",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "42",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "43",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "44",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3
        ,"status" => "displayed"
    ],
    [
        "header" => "45",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3,
        "status" => "displayed"
    ],
    [
        "header" => "46",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3,
        "status" => "displayed"
    ],
    [
        "header" => "47",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3,
        "status" => "displayed"
    ],
    [
        "header" => "48",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3,
        "status" => "displayed"
    ],
    [
        "header" => "49",
        "description" => "",
        "date" => "March 7, 2025",
        "thumbnail" => "../table-articles/3/image-1.jpg",
        "gallery_style" => "8",
        "sdg_tag" => ['1'],
        "gallery_fk" => 3,
        "status" => "displayed"
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
    ],
    [
        "images" => ['../table-articles/4/image-1.jpg', '../table-articles/4/image-2.jpg', '../table-articles/4/image-3.jpg', '../table-articles/4/image-4.jpg'],
    ]
];


$archives = [
    [
        "year_pk" => "2023",
        "months" => [
            [
                "name" => "OCTOBER",
                "articles_fk" => []
            ],
            [
                "name" => "NOVEMBER",
                "articles_fk" => []
            ],
            [
                "name" => "DECEMBER",
                "articles_fk" => []
            ],
        ],
    ],
    [   
        "year_pk" => "2024",
        "months" => [
            [
                "name" => "JANUARY",
                "articles_fk" => []
            ],
            [
                "name" => "FEBRUARY",
                "articles_fk" => []
            ],
            [
                "name" => "MARCH",
                "articles_fk" => []
            ],
            [
                "name" => "APRIL",
                "articles_fk" => []
            ],
            [
                "name" => "MAY",
                "articles_fk" => []
            ],
            [
                "name" => "JUNE",
                "articles_fk" => []
            ],
            [
                "name" => "JULY",
                "articles_fk" => []
            ],
            [
                "name" => "AUGUST",
                "articles_fk" => []
            ],
            [
                "name" => "SEPTEMBER",
                "articles_fk" => []
            ],
            [
                "name" => "OCTOBER",
                "articles_fk" => []
            ],
            [
                "name" => "NOVEMBER",
                "articles_fk" => []
            ],
            [
                "name" => "DECEMBER",
                "articles_fk" => [28, 31, 32, 34]
            ],
        ],
    ],
    [
        "year_pk" => "2025",
        "months" => [
            [
                "name" => "JANUARY",
                "articles_fk" => []
            ],
            [
                "name" => "FEBRUARY",
                "articles_fk" => []
            ],
            [
                "name" => "MARCH",
                "articles_fk" => []
            ],
        ],
    ],
];

// [1,2] ?


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