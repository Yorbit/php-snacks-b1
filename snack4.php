<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACKS 3</title>
</head>
<body>
    <section>
        <h1>Php Snack 3</h1>
        <?php 
            $array = [];
            while (count($array) < 15) { 
                $random = rand(1,15);          
                if (!in_array($random, $array)) {          
                    array_push($array, $random);          
                }
            };
        ?>
        <pre>
            <?php 
                var_dump($array);
            ?>
        </pre>
    </section>
</body>
</html>