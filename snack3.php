<?php
$groups = [
    '30/08/2022' => [
        [
            'title' => 'Post 1',
            'author' => 'Mattia Rossi',
            'text' => 'Testo Gruppo 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Mattia Rossi',
            'text' => 'Testo Gruppo 2'
        ],
    ],
    '20/08/2022' => [
        [
            'title' => 'Post 3',
            'author' => 'Mattia Rossi',
            'text' => 'Testo Gruppo 3'
        ]
    ],
    '10/08/2022' => [
        [
            'title' => 'Post 4',
            'author' => 'Mattia Rossi',
            'text' => 'Testo Gruppo 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Mattia Rossi',
            'text' => 'Testo Gruppo 5'
        ]
    ],
];

$groups_date = array_keys($groups);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Snack 3</title>
</head>
<body>
  <h1>Php Snack 3</h1>
  <hr/>
  <?php for($i = 0; $i < count($groups); $i++) : ?>
  <?php for($j = 0; $j < count($groups[$groups_date[$i]]); $j++) : ?>
  <div>
    <h2><?php echo $groups[$groups_date[$i]][$j]["title"] ?></h2>
    <span><?php echo $groups[$groups_date[$i]][$j]['author'] . " -- " . $groups_date[$i] ?></span>
    <br />
    <p><?php echo $groups[$groups_date[$i]][$j]['text'] ?></p>
  </div>
  <hr/>
  <?php endfor; ?>
  <?php endfor; ?>
</body>
</html>