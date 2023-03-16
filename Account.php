<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link rel="stylesheet" href="header.css">
    <script type="text/javascript" src="adopt.js"> </script>
    <style>
        #password_msg {
            display: none;
            background-color: rgb(255, 248, 242);
            color: #000;
            padding: 20px;
            margin-top: 10px;
        }

        #password_msg p {
            padding: 10px 35px;
            font-size: 18px;
        }

        #username_msg {
            display: none;
            background-color: rgb(255, 248, 242);
            color: #000;
            padding: 20px;
            margin-top: 10px;
        }

        #username_msg p {
            padding: 10px 35px;
            font-size: 18px;
        }

        .valid {
            color: green;
        }

        .invalid {
            color: red;
        }

        #form_acc {
            text-align: center;
        }

        #submit_butt {
            width: 200px;
            height: 50px;
            font-size: large;
        }

        #submit_butt:hover {
            background-color: rgb(255, 248, 242);
        }
    </style>
</head>

<body>
    <?php
    include 'header.php';
    ?>

    <td class="form">
        <h1> Create an Account</h1>

        <form id="form_acc" action="validate_username.php" method="get">
            <p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" pattern="(?=.*[a-zA-Z0-9]).{1,}" title="A username must contain only letters and digits" required>
            </p>

            <p>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" pattern="(?=.*[a-zA-Z])(?=\w*[0-9]).{4,}" title="A password must be at least 4 characters long, containe only letters and digits, have at least one letter and at least one digit." required>
            </p>

            <p>
                <input type="submit" value="submit" id="submit_butt" name="submit">
            </p>
        </form>

        <div id="username_msg">

            Username must contain the following:
            <p id="digitorletter" class="invalid">
                Minimum 1 digit or letter
            </p>



        </div>


        <div id="password_msg">

            Password must contain the following:
            <p id="length" class="invalid">
                Minimum 4 characters
            </p>
            <p id="digit" class="invalid">
                Minimum 1 digit
            </p>
            <p id="letter" class="invalid">
                Minimum 1 letter
            </p>


        </div>

        <script>
            var username = document.getElementById("username");
            var digitorletter = document.getElementById("digitorletter");


            username.onfocus = function() {
                document.getElementById("username_msg").style.display = "block";
            }

            username.onblur = function() {
                document.getElementById("username_msg").style.display = "none";
            }

            username.onkeyup = function() {
                var digitsorletters = /[a-zA-Z0-9]/g;
                if (username.value.match(digitsorletters)) {
                    digitorletter.classList.remove("invalid");
                    digitorletter.classList.add("valid");
                } else {
                    digitorletter.classList.remove("valid");
                    digitorletter.classList.add("invalid");
                }

            }





            var password = document.getElementById("password");
            var length = document.getElementById("length");
            var digit = document.getElementById("digit");
            var letter = document.getElementById("letter");

            password.onfocus = function() {
                document.getElementById("password_msg").style.display = "block";
            }

            password.onblur = function() {
                document.getElementById("password_msg").style.display = "none";
            }


            password.onkeyup = function() {

                if (password.value.length >= 4) {
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                }

                var letters = /[a-zA-Z]/g;
                if (password.value.match(letters)) {
                    letter.classList.remove("invalid");
                    letter.classList.add("valid");
                } else {
                    letter.classList.remove("valid");
                    letter.classList.add("invalid");
                }

                var digits = /[0-9]/g;
                if (password.value.match(digits)) {
                    digit.classList.remove("invalid");
                    digit.classList.add("valid");
                } else {
                    digit.classList.remove("valid");
                    digit.classList.add("invalid");
                }

            }
        </script>


    </td>

    </tr>


    </table>

    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>