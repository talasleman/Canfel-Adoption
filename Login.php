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

        <h1> Login </h1>

        <form action="Login.php" method="post" action="giveaway.php" method="post" class="form_acc">

            <p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </p>

            <p>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </p>

            <p>
                <input type="submit" value="submit" class="submit_butt" name="submit">
            </p>


        </form>


        <?php
        $file = file('LoginFile.txt');

        $valid = false;
        if (isset($_POST['password']) && (isset($_POST['username'])) && isset($_POST['submit'])) {
            for ($i = 0; $i < count($file); $i++) {
                $user = explode(':', $file[$i]);

                if ((strval($_POST['password'])  == strval(trim($user[1]))) && (strval($_POST['username'])  == strval(trim($user[0])))) {
                    $valid = true;

                    echo '<p class="form_acc"> You successfully logged in!</p>';
                    $_SESSION['username'] = $_POST['username'];


                    echo ' <script>
                                        window.location = "giveaway.php"</script>';

                    break;
                }
                if ($valid == false) {
                    echo "Wrong username or password, please try again.";
                }
            }
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