<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Have a Pet to Give Away?</title>
    <link rel="stylesheet" href="header.css">
    <script type="text/javascript" src="adopt.js"> </script>
</head>

<body onload="setTime()">

    <?php
    include 'header.php';

    ?>

    <td class="form">
        <h2>
            Give Away a Dog or a Cat
        </h2>
        <form id="formgive" action="FormConfirmation.php" method="post">

            <!-- dog or cat? -->

            <p>
                Are you giving away a Dog or a Cat?
                <br>
                <input type="radio" id="button1" name="pet" value="dog">
                <label for="button1" id="dog">Dog</label>
                <input type="radio" id="button2" name="pet" value="cat">
                <label for="button2" id="cat">Cat</label>
            </p>

            <p>
                Breed of animal
                <br>
                <select name="breed" id="breed">
                    <option>Select an option</option>
                    <option>American Bulldog</option>
                    <option>American Bobtail</option>
                    <option>American Eskimo Dog</option>
                    <option>Basset Hound</option>
                    <option>Bengal</option>
                    <option>Bichon Frise</option>
                    <option>Chartreux</option>
                    <option>Chihuahua</option>
                    <option>Doberman</option>
                    <option>Golden Retriever</option>
                    <option>Havana</option>
                    <option>Labradoodle</option>
                    <option>Doesn't Matter</option>
                </select>
            </p>

            <p>
                Age of animal
                <br>
                <select name="age" id="age">
                    <option>Select an option</option>
                    <option>Less than 1 year old</option>
                    <option>Between 1 and 4 years old</option>
                    <option>Between 5 and 10 years old</option>
                    <option>Between 11 and 15 years old</option>
                    <option>Older than 15</option>
                </select>
            </p>

            <p>
                Gender of animal
                <br>
                <input type="radio" id="button3" name="gender" value="Female">
                <label for="button3" id="female">Female</label>
                <input type="radio" id="button4" name="gender" value="Male">
                <label for="button4" id="male">Male</label>
            </p>

            <p>
                The animal gets along with: (Pick as many as apply)
                <br>
                <label> <input type="checkbox" id="along1" name="along" value="dogs" /> Dogs </label>
                <label> <input type="checkbox" id="along2" name="along" value="cats" /> Cats
                </label>
                <label> <input type="checkbox" id="along3" name="along" value="children" /> Small Children
                </label>
                <label> <input type="checkbox" id="along4" name="along[]" value="none" /> None
                </label>

            </p>

            <p>
                <label for="comment">Do you have any additional comments about your animal? If no comment, write no comment.<br></label>
                <textarea name="comment" id="comment" cols="60" rows="10" required></textarea>
            </p>

            <p>
                <label for="name">Owner Full Name</label>
                <input type="text" id="name" name="name" required>
            </p>

            <p>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </p>


            <button type="submit" value="Submit" name="submit" onclick="give(formgive.email.value)">
                Submit
            </button>
            <button type="reset" value="Reset">
                Reset
            </button>

            <p>
                Thank you for taking the time to fill out our survey!
            </p>
        </form>


    </td>




    </table>

    </div>

    <?php
    include 'footer.php';
    ?>


</body>

</html>