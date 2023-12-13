<?php
?>
<!DOCTYPE html>
<html lang="nl">
<head>
 <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

 <style>
  *{
   margin: 0;
   padding: 0;
  }




  .rodebalktop{
   background-color: #F9100C;
   height: 45px;
  }

  .Index-logo img{
      width: 783px;
      position: absolute;
      left: 93px;
      top: 61px;
  }

  .makersbutton{
      font-size: 86px;
      background-color: #F9100C;
      border-color: #F9100C;
      font-family: Candara, serif;
      padding-left: 150px;
      padding-right: 150px;
      position: absolute;
      right: 200px;
      top: 500px;

  }

  .Quizbutton{
      font-family: Candara, serif;
      font-size: 86px;
      background-color: #F9100C;
      border-color: #F9100C;
      padding-right: 205px;
      padding-left: 203px;
      position: absolute;
      top: 668px;
      right: 194px;
      z-index: 1;
  }



  .vierkantlogo.fixed{
      position: fixed;
      top: 0;
      margin-top: 30px;
      height: 100px;

  }


  /* Voeg deze CSS toe om de Quizbutton op zijn plaats te houden en vervolgens te fixeren bij het scrollen */
  .Quizbutton.fixed {
      position: fixed;
      top: 0;
      right: 250px;
      margin-top: 40px;
      width: 50px;
      font-size: 70px;
      padding-left: 82px;
      padding-right: 218px;
  }

  .makersbutton.fixed{
      position: fixed;
      top: 0;
      left: 32px;
      margin-top: 40px;
      width: 50px;
      font-size: 70px;
      padding-right: 257px;
      padding-left: 43px;
      z-index: 1;
  }



  .Quiztitel,
  .makerstitel{
   color: white;
   text-decoration: none;

  }


  .vierkantlogo {
      background-color: #F9100C;
      width: 80px;
      font-size: 95px;
      position: absolute;
      right: 0;
      margin-top: 30px;
      height: 122px;
      font-family: Candara, serif;
      text-align: center;

  }


   .meldknopi{
    text-decoration: none;
    color: white;
   }


  .flatgebouw {
      background-image: url("images/Gebouw_met_lucht_2.0-01.png");
      background-size: contain;
      background-repeat: no-repeat;
      height: calc(116vw / (2140 / 9291)); /* Hoogte wordt berekend op basis van de aspect ratio van de afbeelding */
      background-position: center top 266px;
  }

  .buttons{
      display: grid;
      width: 184px;
      position: relative;

  }


  .button1{
      top: 120rem;
      left: 300px;
  }

  .button2{
      top: 124rem;
      left: 119px;
  }

.button3{
    top: 136rem;
    left: 419px;
}

  .button4{
      top: 145rem;
      left: 401px;
  }

  .button5{
      top: 150rem;
      left: 450px;
  }

  .button6{
      top: 164rem;
      left: 300px;
  }

.button7{
    top: 173rem;
    left: 450px;
}

.button8{
    top: 181rem;
    left: 380px;
}

  .button9{
      top: 190rem;
      left: 300px;
  }


.button10{
    top: 199rem;
    left: 629px;
}

  .button11{
      top: 207rem;
  }

  .button12{
      top: 197rem;
      left: 521px;
  }

  .intro-wizard-background {
      width: 816px;
  }

  .intro-tekst {
      margin-top: -102rem;
      padding-right: 410px;
      padding-left: 20px;
  }



  .close-area-intro{
    position: absolute;
      top: 44rem;
      left: 737px;
      width: 82px;
      height: 257px;
      cursor: pointer;
    background-color: transparent; /* Maak de achtergrond transparant */
}

  .wizard-container-intro {
      display: none;
      position: fixed;
      top: 424px;
      z-index: 4;
  }


  .wizard-content-intro{
      color: white;
      FONT-FAMILY: Candara, serif;
      font-size: 48px;

  }


  .wizard-container {
      display: none;
      position: relative;
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



 .wizard-content {
     position: fixed;
     bottom: 0;
     font-family: Candara, serif;
     color: white;
  }

 .verdieping1{
     width: 646px;
     position: absolute;
     top: 30%;
     right: 0;
     border-color: white;
     border-style: solid;
     border-width: 168px;
     left: 0;

 }

  .info-wizard {
      position: absolute;
      top: 82rem;
      font-size: 52px;
      border-color: #0e85c726;
      border-width: 40px;
      border-style: solid;
      left: 0;
      right: 0;
      background-color: #0e85c7d6;
 }

  .wizard-container{
      z-index: 3;
  }





 </style>
</head>


<body>


<!-- Wizard-venster voor introductie -->
<div class="wizard-container-intro" id="introWizard">
    <div class="wizard-content-intro">
        <img src="images/wizard.png" alt="wizard-background" class="intro-wizard-background">
        <div class="close-area-intro" id="closeIntroWizard"></div>
        <div class="intro-tekst">

        <h2>Welkom bij de Applicatie</h2>
        <br>
        <p>Een ongeval op het Koning Willem I College… wat nu? <br> <br>
            Iedereen wil aan het einde van de dag weer veilig naar huis. Daarom
            streeft het Koning Willem I College naar een veilige leer- en werkomgeving en naar het voorkomen van ongevallen.
            Helaas zit een ongeluk soms in een klein hoekje en kan zich toch een ongeval voordoen. Met deze applicatie hopen
            Helaas zit een ongeluk soms in een klein hoekje en kan zich toch een ongeval voordoen. Met deze applicatie hopen
            wij jou te hebben geïnformeerd als dat gebeurt.
        </p>

        </div>
    </div>
</div>


<div class="rodebalktop">
</div>

<div class="vierkantlogo">
 <a href="meldknop.php" class="meldknopi">i</a>
</div>

<h1 class="Index-logo">
<img src="images/logo_def-01.png" alt="calmlogo">
</h1>

<button class="makersbutton">
 <a href="makers.php" class="makerstitel">Makers</a>
</button>

<button class="Quizbutton">
 <a href="quiztest.php" class="Quiztitel">Quiz</a>
</button>




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
        <img src="images/verdieping1.png" alt="verdieping1" class="verdieping1">
        <div class="info-wizard">
        <h2>Wizard 1</h2>
        <p>Dit is de inhoud van wizard 1.</p>
        </div>
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


<script>
    function openIntroWizard() {
        document.getElementById('introWizard').style.display = "flex";
    }

    function closeIntroWizard() {
        var introWizard = document.getElementById('introWizard');

        // Close the intro wizard
        introWizard.style.display = "none";
    }

    window.addEventListener('load', function () {
        openIntroWizard();
    });

    document.getElementById('closeIntroWizard').addEventListener('click', function () {
        closeIntroWizard();
    });

    // Voeg een event listener toe voor de close-area-intro
    document.querySelector('.close-area-intro').addEventListener('click', function () {
        closeIntroWizard();
    });
</script>

<script>
    // Function to open the wizard window
    function openWizard(wizardId) {
        document.getElementById(wizardId).style.display = "flex";
    }

    // Function to close the wizard window
    function closeWizard(wizardId) {
        document.getElementById(wizardId).style.display = "none";
    }

    $(document).ready(function () {
        // Vierkantlogo
        var logo = $(".vierkantlogo");
        var logoOffset = logo.offset().top;

        $(window).scroll(function () {
            logo.toggleClass("fixed", $(window).scrollTop() > logoOffset);
        });

        // Makersbutton
        var makersButton = $(".makersbutton");
        var makersOffset = makersButton.offset().top;

        $(window).scroll(function () {
            makersButton.toggleClass("fixed", $(window).scrollTop() > makersOffset);
        });

        // Quizbutton
        var quizButton = $(".Quizbutton");
        var quizOffset = quizButton.offset().top;

        $(window).scroll(function () {
            quizButton.toggleClass("fixed", $(window).scrollTop() > quizOffset);
        });

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
    });

    function openIntroWizard() {
        document.getElementById('introWizard').style.display = "flex";
        $(".vierkantlogo, .makersbutton, .Quizbutton").removeClass("fixed");
    }

</script>

</body>
</html>





