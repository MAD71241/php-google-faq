<?php

include "faq.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            padding: 30px;
            text-align: justify
        }

        h2 {
            font-size: 2.25rem;
        }
    </style>
    <title>Google FAQ</title>
</head>

<body>
    <?php

    foreach ($faq as $key => $value) {
    ?>
        <h2><?php echo $key ?></h2>
        <?php for ($i = 0; $i < count($value); $i++) { ?>
            <p>
                <?php
                echo $value[$i];
                ?>
            </p>
    <?php
        }
    }

    ?>
</body>

</html>