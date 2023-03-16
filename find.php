<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Dog/Cat</title>
    <link rel="stylesheet" href="header.css">
    <script type="text/javascript" src="adopt.js"> </script>
</head>

<body onload="setTime()">
    <?php
    include 'header.php';
    ?>


    <td class="form">
        <h2>
            Find a Dog or a Cat
        </h2>
        <form action="showMatch.php" method="get" id="findform">

            <!-- dog or cat? -->

            <p>
                Are you looking for a Dog or a Cat?
                <br>
                <input type="radio" id="button1" name="pet" value="dog">
                <label for="button1" id="dog">Dog</label>
                <input type="radio" id="button2" name="pet" value="cat">
                <label for="button2" id="cat">Cat</label>
            </p>

            <p>
                Preferred breed of animal
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
                    <option>Doesn't Matter</option>
                </select>
            </p>

            <p>
                Preferred age of animal
                <br>
                <select name="age" id="age">
                    <option>Select an option</option>
                    <option>Less than 1 year old</option>
                    <option>Between 1 and 4 years old</option>
                    <option>Between 5 and 10 years old</option>
                    <option>Between 11 and 15 years old</option>
                    <option>Older than 15</option>
                    <option>Doesn't Matter</option>
                </select>
            </p>

            <p>
                Preferred Gender
                <br>
                <input type="radio" id="button3" name="gender" value="Female">
                <label for="button3" id="female">Female</label>
                <input type="radio" id="button4" name="gender" value="Male">
                <label for="button4" id="male">Male</label>
                <input type="radio" id="button5" name="gender" value="Doesn't Matter">
                <label for="button5" id="nothing">Doesn't Matter</label>
            </p>

            <p>
                The animal needs to get along with: (Pick as many as apply)
                <br>
                <label> <input type="checkbox" id="along1" name="along[]" value="dogs" /> Dogs </label>
                <label> <input type="checkbox" id="along2" name="along[]" value="cats" /> Cats
                </label>
                <label> <input type="checkbox" id="along3" name="along[]" value="children" /> Small Children
                </label>
                <label> <input type="checkbox" id="along4" name="along[]" value="none" /> None
                </label>

            </p>


            <p>
                Thank you for taking the time to fill out our survey!
            </p>

            <button type="submit" value="Submit" onclick="find();showMatch()">
                Submit
            </button>
            <button type="reset" value="Reset">
                Reset
            </button>

        </form>







    </td>

    </tr>


    </table>

    </div>
    <?php
    include 'footer.php';
    ?>



</body>

</html>