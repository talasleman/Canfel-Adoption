<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches</title>
    <link rel="stylesheet" href="header.css">
    <script type="text/javascript" src="adopt.js"> </script>
    <style>
        .form_acc {
            text-align: center;
        }

        .submit_butt {
            width: 200px;
            height: 50px;
            font-size: large;

        }

        .submit_butt:hover {
            background-color: rgb(255, 248, 242);
        }
    </style>
</head>

<body>
    <?php
    include 'header.php';
    ?>


    <td class="form">

        <?php

        $dogcat = $_POST['pet'];
        $breed = $_POST['breed'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $needs = $_POST['along'];
        $comment = $_POST['comment'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $need = "";

        $file = file('AvailablePetInfoFile.txt');

        $content_value = count($file) + 1;

        $username = $_SESSION['username'];
        if (is_countable($needs)) {
            for ($i = 0; $i < count($needs); $i++) {
                $need = $need . $needs[$i];
            }
        }


        $text = "$content_value:$username:$dogcat:$breed:$age:$gender:$needs:$comment:$name:$email";
        $filename = 'AvailablePetInfoFile.txt';
        $fp = fopen($filename, 'a+') or die("Unable to open file");
        fwrite($fp, PHP_EOL);
        fwrite($fp, $text);

        echo "You have successfully submitted your Form. Thank you! Do you want to log out?";
        echo '<form action="FormConfirmation.php" method="get">
        <input type="submit" name="logout" value="Log out">
    </form>';

        if (isset($_GET['logout'])) {
            session_destroy();
            echo "Thank you, you are successfully logged out. See you soon!";
        }


        ?>
    </td>
    </tr>


    </table>

    </div>
    <?php
    include 'footer.php';
    ?>

</body>

</html>