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

        <h1>Find your Best Friend!</h1>
        <?php
        echo '<table class="browse">
         <tr>';

        $dogcat = $_GET['pet'];
        $breed = $_GET['breed'];
        $age = $_GET['age'];
        $gender = $_GET['gender'];
        $needs = $_GET['along'];
        $need = "";

        for ($i = 0; $i < count($needs); $i++) {
            $need = $need . $needs[$i];
        }

        $information = array($dogcat, $breed, $age, $gender, $need);

        $file = file("AvailablePetInfoFile.txt");
        $counter = 0;

        for ($i = 0; $i < count($file); $i++) {
            $valid = true;
            $pet = explode(":", $file[$i]);
            for ($j = 2; $j < 7; $j++) {

                if (($information[$j - 2] != $pet[$j])) {
                    if (!((($j == 3) || ($j == 4) || ($j == 5)) && ($information[$j - 2] == "Doesn't Matter"))) {


                        $valid = false;
                    }
                }
            }
            if ($valid == true) {
                display($i);
                $counter++;
                if ($counter % 3 == 0) {
                    echo '</tr><tr>';
                }
            }
        }

        echo '</tr>
        </table>';

        function display($value)
        {
            $file = file("AvailablePetInfoFile.txt");

            for ($i = 0; $i < count($file); $i++) {
                $pet = explode(":", $file[$i]);
                if ($value == $i) {
                    echo '<td class="pettable">';
                    if ($pet[2] == 'dog') {
                        echo '<img class="petimage" src="http://doggyhaven.com/wp-content/uploads/2015/02/group-dog-header.jpg">
                       <br>
                       <p class="pettext"> A friend that will always light up your day!</p>
                       <ul class="petlist">
                       <li> Breed: ';
                        echo $pet[3];
                        echo '</li>
                            <li>Age: ';
                        echo $pet[4];
                        echo '</li>
                                 <li>Gender: ';
                        echo $pet[5];
                        echo '</li>
                            <li>Can get along with: ';
                        echo $pet[6];
                        echo '</li>
                        </ul>
                          <button class="interested">
                            Interested
                          </button>
                         </td>';
                    } else {
                        echo '<img class="petimage" src="https://www.petplace.com/static/5186348924d5c0afde1a4b84249cd43c/98569/Multiple-cat-household-tips.jpg">
                    <br>';
                        echo '<br>
                       <p class="pettext"> A friend that will always light up your day!</p>
                       <ul class="petlist">
                       <li> Breed: ';
                        echo $pet[3];
                        echo '</li>
                            <li>Age: ';
                        echo $pet[4];
                        echo '</li>
                                 <li>Gender: ';
                        echo $pet[5];
                        echo '</li>
                            <li>Can get along with: ';
                        echo $pet[6];
                        echo '</li>
                        </ul>
                          <button class="interested">
                            Interested
                          </button>
                         </td>';
                    }
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