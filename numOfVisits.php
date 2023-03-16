<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (!(isset($_COOKIE['firstVisit']))) {
        echo "Welcome to my webpage! It is your first time that you are here.";
        setcookie('firstVisit', 'no', time() + 38000000);
    }

    date_default_timezone_set('America/Toronto');
    setcookie('lastVisit', date('D M d H:i:s T Y'), time() + 38000000);


    if (isset($_COOKIE['lastVisit'], $_COOKIE['firstVisit'])) {

        $visit = $_COOKIE['lastVisit'];
        echo "Last time you visited my webpage was on: $visit";
    }




    ?>
</body>

</html>