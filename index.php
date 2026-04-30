<?php

$buyurtmalar = [
    [
        "mijoz" => "Ali",
        "status" => "yetkazildi",
        "mahsulotlar" => [
            ["nom" => "Telefon", "narx" => 800000, "soni" => 1],
            ["nom" => "Quloqchin", "narx" => 150000, "soni" => 2],
        ]
    ],
    [
        "mijoz" => "Vali",
        "status" => "bekor",
        "mahsulotlar" => [
            ["nom" => "Noutbuk", "narx" => 5000000, "soni" => 1],
        ]
    ],
    [
        "mijoz" => "Hasan",
        "status" => "yetkazildi",
        "mahsulotlar" => [
            ["nom" => "Soat", "narx" => 300000, "soni" => 1],
        ]
    ],
    [
        "mijoz" => "Ali",
        "status" => "yetkazildi",
        "mahsulotlar" => [
            ["nom" => "Sumka", "narx" => 200000, "soni" => 3],
        ]
    ],
    [
        "mijoz" => "Salim",
        "status" => "yetkazildi",
        "mahsulotlar" => [
            ["nom" => "Krossovka", "narx" => 450000, "soni" => 2],
            ["nom" => "Futbolka", "narx" => 120000, "soni" => 4],
        ]
    ],
    [
        "mijoz" => "Hasan",
        "status" => "yetkazildi",
        "mahsulotlar" => [
            [
                "nom" => "Kitob",
                "narx" => 80000,
                "soni" => 5
            ],
        ]
    ],
];

$jamiXarid = [];

foreach ($buyurtmalar as $buyurtma) {
    if ($buyurtma['status'] == "yetkazildi") {
        $mijoz1 = ($buyurtmalar[0]["mahsulotlar"][0]["narx"] * $buyurtmalar[0]["mahsulotlar"][0]["soni"]) +
            ($buyurtmalar[0]["mahsulotlar"][1]["narx"] * $buyurtmalar[0]["mahsulotlar"][1]["soni"]);
        $mijoz2 = $buyurtmalar[1]["mahsulotlar"]["narx"] * $buyurtmalar[1]["mahsulotlar"]["soni"];
        $mijoz3 = $buyurtmalar[2]["mahsulotlar"]["narx"] * $buyurtmalar[2]["mahsulotlar"]["soni"];
        $mijoz4 = $buyurtmalar[3]["mahsulotlar"]["narx"] * $buyurtmalar[3]["mahsulotlar"]["soni"];
        $mijoz5 = ($buyurtmalar[4]["mahsulotlar"][0]["narx"] * $buyurtmalar[4]["mahsulotlar"][0]["soni"]) +
            ($buyurtmalar[4]["mahsulotlar"][1]["narx"] * $buyurtmalar[4]["mahsulotlar"][1]["soni"]);
        $mijoz6 = $buyurtmalar[5]["mahsulotlar"]["narx"] * $buyurtmalar[5]["mahsulotlar"]["soni"];
    }
}
;

$top1 = 0;
$top2 = 0;
$top3 = 0;

if ($mijoz1 > $mijoz2 && $mijoz1 > $mijoz3 && $mijoz1 > $mijoz4 && $mijoz1 > $mijoz5 && $mijoz1 > $mijoz6) {
    $top1 = $mijoz1;
} else if ($mijoz2 > $mijoz1 && $mijoz2 > $mijoz3 && $mijoz2 > $mijoz4 && $mijoz2 > $mijoz5 && $mijoz2 > $mijoz6) {
    $top2 = $mijoz2;
} else if ($mijoz3 > $mijoz1 && $mijoz3 > $mijoz2 && $mijoz3 > $mijoz4 && $mijoz3 > $mijoz5 && $mijoz3 > $mijoz6) {
    $top3 = $mijoz3;
}


