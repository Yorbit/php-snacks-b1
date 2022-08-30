<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACKS 1</title>
</head>
<body>
    <h1>Php Snack 1</h1>
    <section>
        <h3>Snacks 1</h3>
        <?php
        $arrayTeams = [
            [
                'team1' => 'Lakers',
                'team2' => 'Bulls',
                'point1' => 52,
                'point2' => 40,
            ],
            [
                'team1' => 'NY',
                'team2' => 'Piston',
                'point1' => 64,
                'point2' => 44,
            ],
            [
                'team1' => 'Lakers',
                'team2' => 'Cavaliers',
                'point1' => 67,
                'point2' => 88,
            ],
            [
                'team1' => 'Knicks',
                'team2' => 'Bulls',
                'point1' => 91,
                'point2' => 40,
            ],
            [
                'team1' => 'Knicks',
                'team2' => 'Piston',
                'point1' => 39,
                'point2' => 30,
            ],
        ];
        ?>
        <div>
            <?php for ($i = 0; $i < count($arrayTeams); $i++) { ?>
                <pre>
                <?php
                echo $arrayTeams[$i]['team1'] . ' - ' . $arrayTeams[$i]['team2'] . '  ' . $arrayTeams[$i]['point1'] . ' | ' . $arrayTeams[$i]['point2'];
                ?>
            </pre>
            <?php }; ?>
        </div>
    </section>
</body>
</html>