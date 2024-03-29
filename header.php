<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <script type="text/javascript" src="adopt.js"> </script>
</head>

<body onload="setTime()">
    <!-- Header -->
    <div class="header">
        <a href="homepage.html">
            <img id="headimg" src="data:image/png;base64,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" alt="Dog and cat adoption black cat and white dog hugging eachother logo">
        </a>

        <h1>CANFEL ADOPTION
        </h1>

        <h4>Cat and Dog Adoption Center</h4>
        <h5 class="time"></h5>
    </div>


    <!-- add home page as href -->


    <!-- Side menu -->


    <div class="layout">
        <table>
            <tr>
                <td rowspan="3">
                    <ul class="sidenav">
                        <a class="side" href="homepage.php">
                            <li class="sidebar">Homepage</li>
                        </a>

                        <a class="side" href="Account.php">
                            <li class="sidebar">Create an Account</li>
                        </a>

                        <a class="side" href="find.php">
                            <li class="sidebar">Find a Dog/Cat</li>
                        </a>

                        <a class="side" href="dogcare.php">
                            <li class="sidebar">Dog Care</li>
                        </a>

                        <a class="side" href="catcare.php">
                            <li class="sidebar">Cat Care</li>
                        </a>

                        <a class="side" href="Login.php">
                            <li class="sidebar">Have a Pet to Give Away?</li>
                        </a>

                        <a class="side" href="contact.php">
                            <li class="sidebar">Contact Us</li>
                        </a>

                    </ul>
                </td>
</body>

</html>