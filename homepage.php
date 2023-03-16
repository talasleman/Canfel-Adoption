<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="header.css">
    <script type="text/javascript" src="adopt.js"> </script>
</head>

<body onload="setTime()">
    <?php
    include 'header.php';
    ?>

    <td id="welcometext">
        <p id="welcomemess">
            Welcome to Canfel Adoption!
        </p>
        <p id="welcomedesc">
            We are glad to have you here! Whether you're looking to adopt, learn more about pets
            or give away one of your pets, we are here for you! The Canfel Adoption Center's mission is to
            provide a
            safe and happy home for our
            beloved pets. Come see us and find your new best friend!</p>

        </p>
        <p class="seemore">
            <a class="side" href="#company">
                Learn More About Our Company >
            </a>

        </p>
        <p class="seemore">
            <a class="side" href="#arrival">
                See our Latest Pet Arrivals >
            </a>

        </p>
    </td>
    <td>
        <img src="https://uploads-ssl.webflow.com/5fcef581573d578e99713e74/5ffcf6648a92b62a9959c84b_AdoptADog3.jpg" alt="dog adoption flower">
    </td>
    </tr>
    <tr>
        <td class="learn" colspan="2">
            <a id="company">
            </a>
            Our Story
            <p class="learntext">
                Canfel Adoption was found in 1963, by Tala Sleman, me. I always had a passion for animals, and
                knew
                I wanted to dedicate my life to giving animals a better life. I have seen many dogs and cat
                abandoned, without a family or a home, and it was a wakeup call for me: I need to save as many
                dogs
                and cats from being abandoned, and I need to give them a safe home, where they can be
                comfortable,
                happy and healthy. Our mission, at Canfel Adoption, is to provide a safe shelter for our beloved
                pets, in hope to find a home for them. And this is where you come in! If you're anything like
                me,
                come visit us and our family! Whether you are looking to adopt, or in need to give away one of
                your
                pets, we are here for you! Change the world, one step at a time!
            </p>

        </td>
    </tr>
    <tr>
        <td class="learn" colspan="2">
            <a id="arrival"></a>
            Our Latest Adoptions
            <br>
            <br>
            <table>
                <tr>
                    <td class="latest">
                        <img class="petimage" src="https://vcahospitals.com/-/media/2/vca/images/lifelearn-images-foldered/18349/bonded_pair.ashx" alt="2 orange cats getting adopted">
                        <br>
                        <p class="learntext">Nila and Oliver, a double adoption!</p>
                    </td>
                    <td class="latest">
                        <img class="petimage" src="https://cvlaval.com/sites/default/files/carousel/chien-14.jpg" alt="black puppy">
                        <br>
                        <p class="learntext">Loki, a 3 months old puppy! </p>
                    </td>
                    <td class="latest">
                        <img class="petimage" src="https://www.bil-jac.com/media/lpufbwp5/istock-1213095415.jpg?anchor=center&mode=crop&width=1024&height=512" alt="cute chihuahua">
                        <br>
                        <p class="learntext"> Bitsy, a beautiful teacup Chihuahua</p>
                    </td>
                </tr>
            </table>


        </td>

    </tr>
    </table>
    </div>

    <?php
    include 'footer.php';
    ?>






</body>

</html>