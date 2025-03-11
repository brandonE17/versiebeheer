
<?php
$games = [
    [
        "name" => "Game 1",
        "image" => "images/game1.png"
    ],
    [
        "name" => "Game 2",
        "image" => "images/game2.png"
    ],
    [
        "name" => "Game 3",
        "image" => "images/game3.png"
    ]
];

header("Content-Type: application/json");
echo json_encode($games);
?>
  