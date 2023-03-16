<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches</title>
    <link rel="stylesheet" href="header.css">
    <script type="text/javascript" src="adopt.js"> </script>
</head>

<body>
    <?php
    include 'header.php';
    ?>


    <td class="form">

        <?php

        function validate($username)
        {

            $file = file("LoginFile.txt");

            $valid = true;


            for ($i = 0; $i < count($file); $i++) {
                $user = explode(':', $file[$i]);

                if ($username == $user[0]) {
                    echo "Sorry, this username is already taken. Try again.";
                    $valid = false;
                }
            }


            $password = $_GET['password'];

            if ($valid == true) {
                $text = "$username:$password";
                $filename = 'LoginFile.txt';
                $fp = fopen($filename, 'a+') or die("Unable to open file");
                fwrite($fp, PHP_EOL);
                fwrite($fp, $text);
                echo "You have created your account successfully, you are now ready to login!";
            }
        }

        if (isset($_GET['submit'])) {

            validate($_GET['username']);
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