function setTime() {
    let today = new Date();
    let hours;
    let minutes;
    let seconds;

    if (today.getHours() < 10) {
        hours = "0" + today.getHours();
    }
    else
        hours = today.getHours();

    if (today.getMinutes() < 10) {
        minutes = "0" + today.getMinutes();
    }
    else
        minutes = today.getMinutes();

    if (today.getSeconds() < 10) {
        seconds = "0" + today.getSeconds();
    }
    else
        seconds = today.getSeconds();

    let date = today.getDate() + "/" + (today.getMonth() + 1) + "/" + today.getFullYear() + " " + hours + ":" + minutes + ":" + seconds;

    let elementsArray = document.getElementsByClassName("time");

    for (let i = 0; i < elementsArray.length; i++) {
        elementsArray[i].innerHTML = date;
    }
}

setInterval(() => {
    setTime()
}, 1000)


function loadPet() {
    fetch('pets.html')
        .then(response => response.text())
        .then(text => document.getElementById('loadpet').innerHTML = text);
}

function find() {


    if (!(document.getElementById("button1").checked) && !(document.getElementById("button2").checked)) {
        alert("Please fill all the fields");
    }

    if (document.getElementById("breed").value === 'Select an option') {
        alert("Please fill all the fields");
    }

    if (document.getElementById("age").value === 'Select an option') {
        alert("Please fill all the fields");
    }

    if (!(document.getElementById("button3").checked) && !(document.getElementById("button4").checked) && !(document.getElementById("button5").checked)) {
        alert("Please fill all the fields");
    }
}

function give(mail) {


    if (!(document.getElementById("button1").checked) && !(document.getElementById("button2").checked)) {
        alert("Please fill all the fields");
    }

    if (document.getElementById("breed").value === 'Select an option') {
        alert("Please fill all the fields");
    }

    if (document.getElementById("age").value === 'Select an option') {
        alert("Please fill all the fields");
    }

    if (!(document.getElementById("button3").checked) && !(document.getElementById("button4").checked)) {
        alert("Please fill all the fields");
    }


    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
        return (true)
    }
    alert("You have entered an invalid email address!")
    return (false)

}





