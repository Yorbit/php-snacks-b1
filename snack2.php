<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACKS 2</title>
</head>
<body>
    <section>
        <?php 
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];
        ?>
        <h1>Php Snack 2</h1>
        <pre>
            <?php
                if ( (strlen($name) > 3) && (strpos($mail, '@') > 2) && strpos($mail, '.') > 3 && (is_numeric($age)) )  {                    
                    echo 'Accesso Riuscito';
                } else {
                    echo 'Accesso Negato';
                };
            ?>
        </pre>
    </section>
</body>
</html>