<?php 

$bio = ["Biodata" =>
    [
        "Name" => "Dwi Aji Saputra",
        "Age" => 26,
        "Address" => "jl.kemang rt 04/08 Sukatani Tapos kota Depok",
        "Hobbies" => ["Game", "Music"],
        "is_Married" => False,
        "List_Schhool" => [
                [
                    "Name" => "SDN Sukatani 7",
                    "Year_in" => 1999,
                    "Year_out" => 2005,
                ],
                [
                    "Name" => "SMP PGRI Cimanggis",
                    "Year_in" => 2005,
                    "Year_out" => 2008,
                ],
                [
                    "Name" => "SMK Taruna Bhakti",
                    "Year_in" => 2008,
                    "Year_out" => 2011,
                ],
                [
                    "Major" => null,
                ]
            ],
        "Skills" => [
                [
                    "Skill_Name" => "PHP",
                    "Level" => "Beginner",
                ],
                [
                    "Skill_Name" => "CSS",
                    "Level" => "Beginner",
                ],
                [
                    "Skill_Name" => "JavaScript",
                    "Level" => "Beginner",
                ],
            ],
        "Interest_in_Coding" => True,
    ]
];

echo json_encode($bio);
?>
