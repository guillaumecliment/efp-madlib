<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Result</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' href='css/style.css'>
</head>

<body>
    <h1>
        MADLIB! - Result
    </h1>

    <div class="form_box">

        <?php

        // var_dump($_POST);

        $story = 'There once was a ' . $_POST['occupation'] . ' named ' . $_POST['firstname'] . ' who lived in '
            . $_POST['address'] . ' and liked to ' . $_POST['verb'] . " and talk to the neighbor's "
            . $_POST['adjective'] . ' ' . $_POST['surname'] .
            "<br>This bothered " . $_POST['firstname'] . "'s best friend " . $_POST['surname'] . "<br> 
            
            The end";

        echo $story;

        $today = date("Y-m-d");
        $storyName = $today . '_' . strtoupper($_POST['surname']) . '_' . strtoupper($_POST['firstname']) . '.txt';
        $myfile = fopen($storyName, "w");

        fwrite($myfile, $story);
        fclose($myfile);         // Quand on écrit "fopen" on écrit direct le "fclose"


        // VERSION PLUS COURTE:

        // file_put_contents(
        //     string $filename,
        //     mixed $data,
        //     int $flags = 0,
        //     ?resource $context = null
        // ): int|false

        ?>

    </div>

    <?php




    ?>





</body>

</html>