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
      font-family: Tahoma, serif;
      padding-left: 150px;
      padding-right: 150px;
      position: absolute;
      right: 200px;
      top: 500px;

  }

  .Quizbutton{
      font-family: Tahoma, serif;
      font-size: 86px;
      background-color: #F9100C;
      border-color: #F9100C;
      padding-right: 205px;
      padding-left: 203px;
      position: absolute;
      top: 668px;
      right: 194px;
      z-index: 100;
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
      z-index: 100;
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
      font-family: Tahoma, serif;
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
      margin-top: -104rem;
      padding-right: 410px;
      padding-left: 20px;
  }

.pijltje-wizard{
    width: 398px;
    position: fixed;
    top: 68rem;
    left: 36rem;
}



  .wizard-container-intro {
      display: none;
      position: fixed;
      top: 424px;
      z-index: 110;
  }


  .wizard-content-intro{
      color: white;
      FONT-FAMILY: Tahoma, serif;
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
      z-index: 8;
  }



 .wizard-content {
     position: fixed;
     bottom: 0;
     font-family: Tahoma, serif;
     color: white;
     width: 100vw;
     height: 100vh;
     z-index: 10;
  }


  .info-wizard  {
      position: absolute;
      margin-top: 70rem;
      font-size: 28px;
      margin-left: 77px;
  }

  .wizard2-tekst{
      position: absolute;
      margin-top: 1163px;
      font-size: 28px;
      margin-left: 77px;
      padding-left: 10px;
      padding-right: 70px;
  }



  .wizard-gebouw {
      width: 967px;
      position: fixed;
      top: 32rem;
      height: 1001px;
  }


  .close-button {
      font-size: 50px;
      position: absolute;
      top: 46rem;
      left: 54rem;
  }



  .wizard-container#wizard6 {
      z-index: 20;
  }

  .wizard-container#wizard7 {
      z-index: 30;
  }

  .wizard-container#wizard8 {
      z-index: 40;
  }

  .wizard-container#wizard9 {
      z-index: 50;
  }

  .wizard-container#wizard10 {
      z-index: 60;
  }

  .wizard-container#wizard11 {
      z-index: 70;
  }

  .wizard-container#wizard12 {
      z-index: 80;
  }

  .bhv-vest{
      width: 245px;
      position: absolute;
      top: 47rem;
      left: 331px;
      border: solid white 10px;
  }
.plattegrond{
    width: 245px;
    position: absolute;
    top: 46rem;
    left: 22rem;
    border: solid white 10px;
}

.rookmelder{
    width: 245px;
    position: absolute;
    top: 47rem;
    left: 335px;
    border: solid white 10px;
}

.wizard3-tekst{
    position: absolute;
    margin-top: 1044px;
    font-size: 28px;
    margin-left: 77px;
    padding-left: 21px;
    padding-right: 70px;
}

.wizard4-tekst{
    position: absolute;
    margin-top: 1045px;
    font-size: 28px;
    margin-left: 77px;
    padding-left: 21px;
    padding-right: 70px;
}

.blusdeken{
    width: 245px;
    position: absolute;
    top: 47rem;
    left: 335px;
    border: solid white 10px;
}

.wizard5-tekst{
    position: absolute;
    margin-top: 1119px;
    font-size: 28px;
    margin-left: 77px;
    padding-left: 21px;
    padding-right: 70px;
}

.brandblusser{
    width: 245px;
    position: absolute;
    top: 47rem;
    left: 335px;
    border: solid white 10px;
}

.evacuatiestoel{
    width: 245px;
    position: absolute;
    top: 47rem;
    left: 335px;
    border: solid white 10px;
}

.wizard7-tekst{
    position: absolute;
    margin-top: 1050px;
    font-size: 28px;
    margin-left: 77px;
    padding-left: 21px;
    padding-right: 70px;
}

.aed{
    width: 245px;
    position: absolute;
    top: 47rem;
    left: 335px;
    border: solid white 10px;
}

.wizard8-tekst{
    position: absolute;
    margin-top: 1050px;
    font-size: 28px;
    margin-left: 77px;
    padding-left: 21px;
    padding-right: 70px;
}
.handbrandmelder{
    width: 245px;
    position: absolute;
    top: 47rem;
    left: 335px;
    border: solid white 10px;
}

.wizard10-tekst{
    position: absolute;
    margin-top: 1053px;
    font-size: 28px;
    margin-left: 77px;
    padding-left: 21px;
    padding-right: 70px;
}
.verzamelplaats{
    width: 245px;
    position: absolute;
    top: 47rem;
    left: 335px;
    border: solid white 10px;
}

.wizard11-tekst{
    position: absolute;
    margin-top: 1060px;
    font-size: 28px;
    margin-left: 77px;
    padding-left: 21px;
    padding-right: 70px;
}

.wizard12-tekst{
    position: absolute;
    margin-top: 918px;
    font-size: 28px;
    margin-left: 77px;
    padding-left: 21px;
    padding-right: 70px;
}
.nooddeur{
    width: 245px;
    position: absolute;
    top: 47rem;
    left: 335px;
    border: solid white 10px;
}

.ehbo{
    width: 245px;
    position: absolute;
    top: 47rem;
    left: 335px;
    border: solid white 10px;
}

.wizard6-tekst{
    position: absolute;
    margin-top: 1054px;
    font-size: 28px;
    margin-left: 77px;
    padding-left: 21px;
    padding-right: 70px;
}

.noodstop{
    width: 245px;
    position: absolute;
    top: 47rem;
    left: 335px;
    border: solid white 10px;
}
.wizard9-tekst{
    position: absolute;
    margin-top: 1063px;
    font-size: 28px;
    margin-left: 77px;
    padding-left: 21px;
    padding-right: 70px;
}
 </style>
</head>


<body>


<!-- Wizard-venster voor introductie -->
<div class="wizard-container-intro" id="introWizard">
    <div class="wizard-content-intro">
        <img src="images/wizard.png" alt="wizard-background" class="intro-wizard-background">
        <img src="images/Pijltjes_wizard-01.png" alt="pijltje-wizard" class="pijltje-wizard" id="closeIntroWizard">
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
        <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
        <span class="close-button" id="close1">X</span>
        <img src="images/bhv-vest.jpg" alt="bhv-vest" class="bhv-vest">
        <div class="info-wizard">
        <p>Een belangrijk aspect van de veiligheidsmaatregelen van het Koning<br> Willem I College is het team van
            bedrijfshulpverleners (bhv’ers). <br>Bhv’ers zijn getrainde medewerkers die specifieke taken en
            verantwoordelijkheden hebben als zich een calamiteit voordoet. </p>
        </div>
    </div>
</div>

<div class="wizard-container" id="wizard2">
    <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
    <div class="wizard-content">
        <span class="close-button" id="close2">X</span>
        <img src="images/plattegrond.png" alt="plattegrond" class="plattegrond">
        <div class="wizard2-tekst">
        <p>Veiligheid heeft bij het Koning Willem I College een hoge prioriteit.
            Een belangrijk hulpmiddel dat
            we hiervoor gebruiken, is de ontruimingsplattegrond.</p>
        </div>
    </div>
</div>


<div class="wizard-container" id="wizard3">
    <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
    <div class="wizard-content">
        <span class="close-button" id="close3">X</span>
        <img src="images/rookmelder.png" alt="rookmelder" class="rookmelder">
        <div class="wizard3-tekst">
        <p>Automatische melders activeren zelf het brandalarm wanneer er rook
            of hitte wordt gedetecteerd. <br> <br>  Een verschil met de handbrandmelders is
            dat het ontruimingsalarm alleen in dat specifiek deel van het gebouw
            afgaat. De andere delen van het gebouw volgen als de brand niet wordt gedoofd.</p>
        </div>
    </div>
</div>



<div class="wizard-container" id="wizard4">
    <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
    <div class="wizard-content">
        <span class="close-button" id="close4">X</span>
        <img src="images/blusdeken.png" alt="blusdeken" class="blusdeken">
        <div class="wizard4-tekst">
        <p>Een blusdeken is een speciaal ontworpen deken die kan worden gebruikt om
            kleine branden te doven door de zuurstof af te snijden en de vlammen te smoren.
        <br> <br>
            De blusdekens worden in de regel alleen gebruikt door de bhv’ers tijdens een
            calamiteit. Veiligheid is een gedeelde verantwoordelijkheid.
        </p>
        </div>
    </div>
</div>


<div class="wizard-container" id="wizard5">
    <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
    <div class="wizard-content">
        <span class="close-button" id="close5">X</span>
        <img src="images/brandblusser.png" alt="brandblusser" class="brandblusser">
        <div class="wizard5-tekst">
        <p>Een brandblusser is een draagbaar apparaat dat specifiek is ontworpen om beginnende
            branden te bestrijden. Het biedt de mogelijkheid om snel in te grijpen en te voorkomen dat een kleine brand zich uitbreidt..</p>
        </div>
    </div>
</div>


<div class="wizard-container" id="wizard6">
    <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
    <div class="wizard-content">
        <span class="close-button" id="close6">X</span>
        <img src="images/ehbo.png" alt="ehbo" class="ehbo">
        <div class="wizard6-tekst">
        <p>De EHBO-koffers zijn strategisch geplaatst binnen de locaties van het
            Koning Willem I College en bevatten een verscheidenheid aan benodigdheden en
            apparatuur om eerste hulp te verlenen. Denk hierbij aan verbandmiddelen, ontsmettingsmiddelen,
            handschoenen en een reddingsdeken.De EHBO-koffer is een van de hulpmiddelen van de bedrijfshulpverlener
            (bhv’er). </p>
        </div>
        </div>
</div>

<div class="wizard-container" id="wizard7">
    <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
    <div class="wizard-content">
        <span class="close-button" id="close7">X</span>
        <img src="images/Evacuatiestoel.png" alt="evacuatiestoel" class="evacuatiestoel">
        <div class="wizard7-tekst">
            <p>De evacuatiestoel (evac-chair) is een van de hulpmiddelen
                van de bedrijfshulpverlener (bhv’er). De bhv’er zal de evac-chair
                gebruiken bij het vervoeren van mensen met een beperkte mobiliteit
                (zoals rolstoelgebruikers) of slachtoffers die niet meer kunnen lopen.
                Met name wordt de evac-chair ingezet om hen naar een andere verdieping te brengen tijdens een calamiteit.</p>
        </div>
    </div>
</div>


<div class="wizard-container" id="wizard8">
    <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
    <div class="wizard-content">
        <span class="close-button" id="close8">X</span>
        <img src="images/aed.png" alt="aed" class="aed">
        <div class="wizard8-tekst">
        <p>De Automatische Externe Defibrillator (AED) wordt ingezet
            in het geval dat iemand een hartstilstand krijgt. Op iedere
            locatie van het Koning Willem I College is minstens een AED
            aanwezig. Op sommige locaties zijn meerdere AED’s aanwezig.
            De AED is een draagbaar apparaat dat specifiek ontworpen is om een
            elektrische schok te leveren aan het hart van een persoon met een hartritmestoornis</p>
        </div>
        </div>
</div>



<div class="wizard-container" id="wizard9">
    <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
    <div class="wizard-content">
        <span class="close-button" id="close9">X</span>
        <img src="images/noodstop.png" alt="noodstop" class="noodstop">
      <div class="wizard9-tekst">
        <p>Op sommige plekken bij het Koning Willem I College zijn
            er specifieke veiligheidsvoorzieningen aanwezig om snel en
            doeltreffend te reageren als er (mogelijk) een ongeval plaatsvindt.
            Denk hierbij aan noodstoppen.Noodstoppen zijn ontworpen om onmiddellijk
            de werking van machines, apparatuur of gasstromen te laten stoppen in geval van een noodsituatie.</p>
      </div>
    </div>
</div>


<div class="wizard-container" id="wizard10">
    <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
    <div class="wizard-content">
        <span class="close-button" id="close10">X</span>
        <img src="images/handbrandmelder.png" alt="handbrandmelder" class="handbrandmelder">
        <div class="wizard10-tekst">
        <p>Handbrandmelders zijn hulpmiddelen die een aanwezige
            in staat stelt om handmatig een brandalarm te activeren
            als er brand of rook wordt waargenomen. Het activeren van
            een handbrandmelder zorgt ervoor dat er in het hele gebouw
            een ontruimingsalarm afgaat en de bedrijfshulpverleners (bhv’ers) worden gealarmeerd.</p>
        </div>
        </div>
</div>


<div class="wizard-container" id="wizard11">
    <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
    <div class="wizard-content">
        <span class="close-button" id="close11">X</span>
        <img src="images/verzamelplaats.png" alt="verzamelplaats" class="verzamelplaats">
     <div class="wizard11-tekst">
        <p>De verzamelplaats is een essentieel onderdeel
            van de brandveiligheidsmaatregelen bij het Koning Willem I
            College. Als er sprake is van een calamiteit, bijvoorbeeld
            wanneer het ontruimingsalarm afgaat, is de verzamelplaats de
            aangewezen locatie waar alle studenten, medewerkers en bezoekers zich moeten verzamelen.</p>
     </div>
    </div>
</div>


<div class="wizard-container" id="wizard12">
    <img src="images/wizard_gebouw_png-01.png" alt="wizard-gebouw" class="wizard-gebouw">
    <div class="wizard-content">
        <span class="close-button" id="close12">X</span>
        <img src="images/nooddeur.png" alt="nooddeur" class="nooddeur">
       <div class="wizard12-tekst">
        <p>Het Koning Willem I College wil graag voorkomen dat er calamiteiten plaatsvinden.
            Toch kan er soms iets misgaan, waardoor er kleine of grotere calamiteiten plaatsvinden.
            Om ervoor te zorgen dat studenten, medewerkers en bezoekers veilig de gebouwen kunnen
            verlaten tijdens zo’n calamiteit zijn er vluchtroutes en nooddeuren aanwezig.<br> <br>Nooddeuren
            zijn speciaal ontworpen deuren die gemakkelijk en snel kunnen worden geopend
            calamiteiten. Ze mogen niet worden geblokkeerd, moeten zonder sleutel te openen zijn en moeten altijd duidelijk herkenbaar zijn.
        </p>
       </div>
    </div>
</div>


    <script>
        // Functie om een cookie in te stellen
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        // Functie om de waarde van een cookie op te halen
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        // Functie om de introductiewizard te openen of te sluiten op basis van de cookie-status
        function handleIntroWizard() {
            var introWizard = document.getElementById('introWizard');

            // Controleer of de cookie is ingesteld
            if (getCookie('introWizardClosed') !== 'true') {
                // Toon de intro-wizard als de cookie niet is ingesteld
                introWizard.style.display = "flex";
            } else {
                // Verberg de intro-wizard als de cookie is ingesteld
                introWizard.style.display = "none";
            }
        }

        // Functie om de introductiewizard te sluiten en de cookie in te stellen wanneer de gebruiker op 'sluiten' klikt
        function closeIntroWizard() {
            var introWizard = document.getElementById('introWizard');

            // Sluit de intro wizard
            introWizard.style.display = "none";

            // Stel de cookie in om bij te houden dat de gebruiker de intro heeft gesloten
            setCookie('introWizardClosed', 'true', 365); // Hier is de cookie-instelling geldig voor 1 jaar
        }

        window.addEventListener('load', function () {
            handleIntroWizard();
        });

        document.getElementById('closeIntroWizard').addEventListener('click', function () {
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





