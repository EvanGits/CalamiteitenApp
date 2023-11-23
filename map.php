<?php
    include("includes/header.php");
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Map</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: scroll;
            display: grid;
        }


        .buttons {
            width: 20vw; /* Gebruik vw (viewport width) in plaats van pixels voor breedte */
            display: block;
            margin-bottom: 2vh; /* Gebruik vh (viewport height) in plaats van pixels voor marge onderaan */
            padding: 4vw; /* Gebruik vw voor padding */
            z-index: 2;
            position: absolute;
        }

        .button1 { top: 10%; left: 10%; }
        .button2 { top: 20%; left: 20%; }
        .button3 { top: 30%; left: 30%; }
        .button4 { top: 40%; left: 40%; }
        .button5 { top: 50%; left: 50%; }
        .button6 { top: 60%; left: 60%; }
        .button7 { top: 70%; left: 70%; }
        .button8 { top: 80%; left: 80%; }
        .button9 { top: 90%; left: 75%; }
        .button10 { top: 100%; left: 10%; }
        .button11 { top: 110%; left: 20%; }
        .button12 { top: 255%; left: 65%; }


        .wizard-container {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            justify-content: center;
            align-items: center;
        }

        .wizard-content {
            background-color: #fff;
            position: fixed;
            background-color: rgba(0, 0, 0, 0.6);
            width: 100vw;
            height: 100vh;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }


        #introductieBox{
            position: fixed;
            margin: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            height: 10%;
            background: #F9E7E7;
            border-radius: 10px;
        }

        .close-button
        {
            width: 10%;
            float: inline-end;
        }



        .flatgebouw
        {
            background-image: url(images/betere_flatgebouw.png);
            background-size: contain;
            background-repeat: no-repeat;
            width: 100vw;
            height: calc(100vw / (2161 / 9318)); /* Hoogte wordt berekend op basis van de aspect ratio van de afbeelding */
            margin: 0;

        }

        #wizard1, #wizard2, #wizard3, #wizard4, #wizard5, #wizard6, #wizard7, #wizard8, #wizard9, #wizard10, #wizard11, #wizard12 {
            position: fixed;
            top: 50%;
            bottom: 50%;
        }




    </style>
</head>
<body>




<!-- Introductiewizard -->
<div id="introductieBox">
    <div class="titeltekst">
        <img class="close-button img-fluid d-flex" src= "<?php echo WWW_ROOT . '/images/close.png'?>"  onclick="closeModel()">
        <h2>Dit is een test<h2>
    </div>
    <p>Klik om te slepen</p>
</div>

<!--Flat als achtergrond en buttons-->
<div class="flatgebouw">

    <img src="images/Gif1.gif"  alt="button1" class="button1 buttons" id="button1">

    <img src="images/Gif1.gif" alt="button2" class="button2 buttons" id="button2">

    <img src="images/Gif1.gif" alt="button3" class="button3 buttons" id="button3">

    <img src="images/Gif1.gif" alt="button4" class="button4 buttons" id="button4">

    <img src="images/Gif1.gif" alt="button5" class="button5 buttons" id="button5">

    <img src="images/Gif1.gif" alt="button6" class="button6 buttons" id="button6">

    <img src="images/Gif1.gif" alt="button7" class="button7 buttons" id="button7">

    <img src="images/Gif1.gif" alt="button8" class="button8 buttons" id="button8">

    <img src="images/Gif1.gif" alt="button9" class="button9 buttons" id="button9">

    <img src="images/Gif1.gif" alt="button10" class="button10 buttons" id="button10">

    <img src="images/Gif1.gif" alt="button11" class="button11 buttons" id="button11">

    <img src="images/Gif1.gif" alt="button12" class="button12 buttons" id="button12">
</div>

<!-- Wizard-vensters -->


<div class="wizard-container" id="wizard1">
    <div class="wizard-content">
        <span class="close-button" id="close1">X</span>
        <h2>Wizard 1</h2>
        <p>Dit is de inhoud van wizard 1.</p>
    </div>
</div>

<div class="wizard-container" id="wizard2">
    <div class="wizard-content">
        <span class="close-button" id="close2">X</span>
        <h2>Wizard 2</h2>
        <p>Dit is de inhoud van wizard 2.</p>
    </div>
</div>


<div class="wizard-container" id="wizard3">
    <div class="wizard-content">
        <span class="close-button" id="close3">X</span>
        <h2>Wizard 3</h2>
        <p>Dit is de inhoud van wizard 3.</p>
    </div>
</div>



<div class="wizard-container" id="wizard4">
    <div class="wizard-content">
        <span class="close-button" id="close4">X</span>
        <h2>Wizard 4</h2>
        <p>Dit is de inhoud van wizard 4.</p>
    </div>
</div>


<div class="wizard-container" id="wizard5">
    <div class="wizard-content">
        <span class="close-button" id="close5">X</span>
        <h2>Wizard 5</h2>
        <p>Dit is de inhoud van wizard 5.</p>
    </div>
</div>


<div class="wizard-container" id="wizard6">
    <div class="wizard-content">
        <span class="close-button" id="close6">X</span>
        <h2>Wizard 6</h2>
        <p>Dit is de inhoud van wizard 6.</p>
    </div>
</div>

<div class="wizard-container" id="wizard7">
    <div class="wizard-content">
        <span class="close-button" id="close7">X</span>
        <h2>Wizard 7</h2>
        <p>Dit is de inhoud van wizard 7.</p>
    </div>
</div>


<div class="wizard-container" id="wizard8">
    <div class="wizard-content">
        <span class="close-button" id="close8">X</span>
        <h2>Wizard 8</h2>
        <p>Dit is de inhoud van wizard 8.</p>
    </div>
</div>



<div class="wizard-container" id="wizard9">
    <div class="wizard-content">
        <span class="close-button" id="close9">X</span>
        <h2>Wizard 9</h2>
        <p>Dit is de inhoud van wizard 9.</p>
    </div>
</div>


<div class="wizard-container" id="wizard10">
    <div class="wizard-content">
        <span class="close-button" id="close10">X</span>
        <h2>Wizard 10</h2>
        <p>Dit is de inhoud van wizard 10.</p>
    </div>
</div>


<div class="wizard-container" id="wizard11">
    <div class="wizard-content">
        <span class="close-button" id="close11">X</span>
        <h2>Wizard 11</h2>
        <p>Dit is de inhoud van wizard 11.</p>
    </div>
</div>


<div class="wizard-container" id="wizard12">
    <div class="wizard-content">
        <span class="close-button" id="close12">X</span>
        <h2>Wizard 12</h2>
        <p>Dit is de inhoud van wizard 12.</p>
    </div>
</div>
</div>

<script>
    // Function to open the wizard window
    function openWizard(wizardId) {
        document.getElementById(wizardId).style.display = "flex";
    }

    // Function to close the wizard window
    function closeWizard(wizardId) {
        document.getElementById(wizardId).style.display = "none";
    }

    // Add click event listeners for all buttons
    for (let i = 1; i <= 12; i++) {
        const buttonId = "button" + i;
        const wizardId = "wizard" + i;

        // Open the wizard when the button is clicked
        document.getElementById(buttonId).addEventListener("click", function() {
            openWizard(wizardId);
        });

        // Close the wizard when the close button is clicked
        document.getElementById("close" + i).addEventListener("click", function() {
            closeWizard(wizardId);
        });
    }

    // Sluit de wizard met de sluitknop

    let introductieBox = document.getElementById("introductieBox");

    function closeModel(){
        introductieBox.style.display = "none";
    }




</script>
<?php
include("includes/footer.php");
?>
</body>
</html>







