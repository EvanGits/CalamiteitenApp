
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Index</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        *{
            margin: 0;
            padding: 0;
        }


        .buttons-container{
            display: flex;
            position: relative;
        }

        .buttons{
            width: 100px;
        }

        .button1{
            position: absolute;
            top: 35vh;
            left: 39vw;
        }


        .button2{
            position: absolute;
            top: 104vh;
            left: 51vw;
        }
        

        .button3{
            position: absolute;
            top: 87vh;
            left: 76vw;
        }

        .button4{
            position: absolute;
            top: 48vh;
            left: 23vw;
        }

        .button5{
            position: absolute;
            top: 70vh;
            left: 72vw;
        }

        .button6{
            position: absolute;
            top: 56vh;
            left: 20vw;
        }

        .button7{
            position: absolute;
            top: 78vh;
            left: 41vw;
        }


        .button8{
            position: absolute;
            top: 102vh;
            left: 73vw;
        }

        .button9{
            position: absolute;
            top: 58vh;
            left: 34vw;
        }

        .button10{
            position: absolute;
            top: 69vh;
            left: 40vw;
        }

        .button11{
            position: absolute;
            top: 104vh;
            left: 9vw;
        }


        .button12{
            position: absolute;
            top: 81vh;
            left: 72vw;
        }

        .button13{
            position: absolute;
            top: 43vh;
            left: 24vw;

        }

        .button14{
            position: absolute;
            top: 125vh;
            left: 45vw;
        }

        .button15{
            position: absolute;
            top: 103vh;
            left: 34vw;
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


        .flatgebouw-content {
                background-image: url(images/Achtergrond.jpg);
                background-repeat: no-repeat;
                background-position: center;
                min-height: 136vh;
                margin-top: 1100px;
                background-size: cover;
                overflow: hidden;
            }







        .intro-wizard-background {
            width: 816px;
            margin-top: -62px;
        }

        .intro-tekst {
            margin-top: -104rem;
            padding-right: 410px;
            padding-left: 20px;
        }

        .pijltje-wizard{
            width: 398px;
            position: fixed;
            top: 64rem;
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
            z-index: 100;
        }



        .wizard-content {
            position: fixed;
            top: 40%;
            font-family: Tahoma, serif;
            color: white;
            width: 80vw;
            background-color: #00000080;
            border-radius: 5%;
            z-index: 200;
        }
        
        .wizard-menu{
            display: flex;
            justify-content: center;
        }

        .info-wizard  {
            font-size: 3.3vw;
            position: relative;
            bottom: 0;
            padding: 2.5vw;
        }







        .close-button {
            font-size: 6vw;
            position: absolute;
            left: 90%;
            font-family: Tahoma;
        }



        .img-default{
            margin-top: 2.7vh;
            width: 40vw;
            border: solid white 10px;
        }

        .img-nondefault{
            margin-top: 2.7vh;
            width: 18vw;
            border: solid white 10px;
        }





        #openNextButton {
            background-color: #00000080;
            color: #fff;
            font-size: 24px;
            border: none;
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 150;
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

<!-- Knop voor volgende stap -->
<div id="openNextButton" style="display: flex">►</div>


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
<div class="flatgebouw-content">
    <div class="buttons-container">
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

   <img src="images/Gif1.gif" alt="button13" class="button13 buttons" id="button13">

  <img src="images/Gif1.gif" alt="button14" class="button14 buttons" id="button14">

   <img src="images/Gif1.gif" alt="button15" class="button15 buttons" id="button15">

    </div>
    </div>


<!-- Wizard-vensters -->


<div class="wizard-container" id="wizard1">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/bhv.jpg" alt="bhv-vest" class="img-default">
            </div>
            <span class="close-button" id="close1">X</span>
            </div> 
            <div class="info-wizard">
                <p>Een belangrijk aspect van de veiligheidsmaatregelen van het Koning Willem I College is het team van
                    bedrijfshulpverleners (bhv’ers). Bhv’ers zijn getrainde medewerkers die specifieke taken en
                    verantwoordelijkheden hebben als zich een calamiteit voordoet. </p>
            </div>
      </div>
</div>


<div class="wizard-container" id="wizard2">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/ontruimingsplattegrond_lobby.jpg" alt="plattegrond" class="img-default">
            </div> 
            <span class="close-button" id="close2">X</span>
            </div> 
            <div class="info-wizard">
                <p>Veiligheid heeft het Koning Willem I College een hoge prioriteit.
                Een belangrijk hulpmiddel dat we hiervoor gebruiken is de ontruimingsplattegrond </p>
            </div>
      </div>
</div>


<div class="wizard-container" id="wizard3">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/rookmelder0.png" alt="rookmelder" class="img-nondefault">
            </div> 
            <span class="close-button" id="close3">X</span>
            </div> 
            <div class="info-wizard">
                <p>Automatische melders activeren zelf het brandalarm wanneer er rook
                of hitte wordt gedetecteerd. Een verschil met de handbrandmelders is
                dat het ontruimingsalarm alleen in dat specifiek deel van het gebouw
                afgaat. De andere delen van het gebouw volgen als de brand niet wordt gedoofd.</p>
            </div>
      </div>
</div>



<div class="wizard-container" id="wizard4">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/blusdeken.jpg" alt="blusdeken" class="img-default">
            </div> 
            <span class="close-button" id="close4">X</span>
            </div> 
            <div class="info-wizard">
            	<p>Een blusdeken is een speciaal ontworpen deken die kan worden gebruikt om
                kleine branden te doven door de zuurstof af te snijden en de vlammen te smoren.
                De blusdekens worden in de regel alleen gebruikt door de bhv’ers tijdens een
                calamiteit. Veiligheid is een gedeelde verantwoordelijkheid.
            </div>
      </div>
</div>



<div class="wizard-container" id="wizard5">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/brandblusser.jpg" alt="brandblusser" class="img-default">
            </div> 
            <span class="close-button" id="close5">X</span>
            </div> 
            <div class="info-wizard">
            <p>Een brandblusser is een draagbaar apparaat dat specifiek is ontworpen om beginnende
            branden te bestrijden. Het biedt de mogelijkheid om snel in te grijpen en te voorkomen dat
                een kleine brand zich uitbreidt.</p>
            </div>
      </div>
</div>


<div class="wizard-container" id="wizard6">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/EHBO.jpg" alt="ehbo" class="img-default">
            </div> 
            <span class="close-button" id="close6">X</span>
            </div> 
            <div class="info-wizard">
                <p>De EHBO-koffers zijn strategisch geplaatst binnen de locaties van het
                Koning Willem I College en bevatten een verscheidenheid aan benodigdheden en
                apparatuur om eerste hulp te verlenen. Denk hierbij aan verbandmiddelen, ontsmettingsmiddelen,
                handschoenen en een reddingsdeken.De EHBO-koffer is een van de hulpmiddelen van de bedrijfshulpverlener
                (bhv’er). </p>
            </div>
      </div>
</div>

<div class="wizard-container" id="wizard7">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/evacuatiestoel.jpg" alt="evacuatiestoel" class="img-default">
            </div> 
            <span class="close-button" id="close7">X</span>
            </div> 
            <div class="info-wizard">
                <p>De evacuatiestoel (evac-chair) is een van de hulpmiddelen
                van de bedrijfshulpverlener (bhv’er). De bhv’er zal de evac-chair
                gebruiken bij het vervoeren van mensen met een beperkte mobiliteit
                (zoals rolstoelgebruikers) of slachtoffers die niet meer kunnen lopen.
                Met name wordt de evac-chair ingezet om hen naar een andere verdieping te brengen tijdens een calamiteit.</p>
            </div>
      </div>
</div>


<div class="wizard-container" id="wizard8">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/AED_lobby.jpg" alt="aed" class="img-default">
            </div> 
            <span class="close-button" id="close8">X</span>
            </div> 
            <div class="info-wizard">
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
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/noodknop.jpg" alt="noodstop" class="img-default">
            </div> 
            <span class="close-button" id="close9">X</span>
            </div> 
            <div class="info-wizard">
                <p>Op sommige plekken bij het Koning Willem I College zijn
                er specifieke veiligheidsvoorzieningen aanwezig om snel en
                doeltreffend te reageren als er (mogelijk) een ongeval plaatsvindt.
                Denk hierbij aan noodstoppen.Noodstoppen zijn ontworpen om onmiddellijk
                de werking van machines, apparatuur of gasstromen te laten stoppen in geval van een noodsituatie.</p>
            </div>
      </div>
</div>


<div class="wizard-container" id="wizard10">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/3e_verdieping_brand_alarm.jpg"alt="handbrandmelder" class="img-default">
            </div> 
            <span class="close-button" id="close10">X</span>
            </div> 
            <div class="info-wizard">
                <p>Handbrandmelders zijn hulpmiddelen die een aanwezige
                in staat stelt om handmatig een brandalarm te activeren
                als er brand of rook wordt waargenomen. Het activeren van
                een handbrandmelder zorgt ervoor dat er in het hele gebouw
                een ontruimingsalarm afgaat en de bedrijfshulpverleners (bhv’ers) worden gealarmeerd.</p>
            </div>
      </div>
</div>


<div class="wizard-container" id="wizard11">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/verzamelplek.jpg" alt="verzamelplaats" class="img-default">
            </div> 
            <span class="close-button" id="close11">X</span>
            </div> 
            <div class="info-wizard">
                <p>De verzamelplaats is een essentieel onderdeel
                van de brandveiligheidsmaatregelen bij het Koning Willem I
                College. Als er sprake is van een calamiteit, bijvoorbeeld
                wanneer het ontruimingsalarm afgaat, is de verzamelplaats de
                aangewezen locatie waar alle studenten, medewerkers en bezoekers zich moeten verzamelen.</p>
            </div>
      </div>
</div>


<div class="wizard-container" id="wizard12">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/noodroute.jpg" alt="nooddeur" class="img-default">
            </div> 
            <span class="close-button" id="close12">X</span>
            </div> 
            <div class="info-wizard">
                <p>Het Koning Willem I College wil graag voorkomen dat er calamiteiten plaatsvinden.
                Toch kan er soms iets misgaan, waardoor er kleine of grotere calamiteiten plaatsvinden.
                Om ervoor te zorgen dat studenten, medewerkers en bezoekers veilig de gebouwen kunnen
                verlaten tijdens zo’n calamiteit zijn er vluchtroutes en nooddeuren aanwezig.Nooddeuren
                zijn speciaal ontworpen deuren die gemakkelijk en snel kunnen worden geopend
                calamiteiten. Ze mogen niet worden geblokkeerd, moeten zonder sleutel te openen zijn en
                    moeten altijd duidelijk herkenbaar zijn.
            </div>
      </div>
</div>



<div class="wizard-container" id="wizard13">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid">
                <img src="images/wizardfoto/nooddouche.jpg" alt="nooddouche" class="img-default">
            </div>
            <span class="close-button" id="close13">X</span>
        </div>
        <div class="info-wizard">
            <p>Nooddouches zijn speciaal ontworpen om onmiddellijk hulp
                te bieden wanneer er gevaarlijke stoffen op het lichaam terecht
                zijn gekomen. Deze nooddouches zijn aanwezig op de specifieke plekken
                waar er met gevaarlijke stoffen wordt gewerkt.</p>
        </div>
    </div>
</div>


<div class="wizard-container" id="wizard14">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid">
                <img src="images/wizardfoto/alarmnummers.png" alt="alarmnummersweb" class="img-nondefault">
            </div>
            <span class="close-button" id="close14">X</span>
        </div>
        <div class="info-wizard">
            <p>Oh, daar gaat Pietje Paniek weer, Hij keek weer eens niet voor zich en glee uit. Maar vrees niet, want gelukkig had Pietje net op
                tijd onze website bezocht. Hij heeft zich aardig kunnen navigeren op
                onze website en heeft de knop ingedrukt met alle alarmnummers van het KW1C.</p>
        </div>
    </div>
</div>

<div class="wizard-container" id="wizard15">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid">
                <img src="images/wizardfoto/alarmkaart_lobby.jpg" alt="alarmkaart" class="img-default">
            </div>
            <span class="close-button" id="close15">X</span>
        </div>
        <div class="info-wizard">
            <p>Op alle locaties van het Koning Willem I College hangen alarmkaarten door het hele gebouw heen.
                In nagenoeg alle ruimtes hangt een alarmkaart.

                Op de alarmkaart vind je informatie over wat te doen als er een calamiteit plaatsvindt.
                De alarmkaart geeft korte richtlijnen aan om snel en doeltreffend te handelen bij drie meest
                waarschijnlijke calamiteiten; brand, ongeval en ontruiming.
            </p>
        </div>
    </div>
</div>



<script>
    window.addEventListener('load', function () {
        console.log("Pagina geladen");

        // Voeg een eventlistener toe aan de openNextButton
        var openNextButton = document.getElementById('openNextButton');
        if (openNextButton) {
            openNextButton.addEventListener('click', openIntroWizard);
            console.log("openNextButton gevonden");
        } else {
            console.log("openNextButton niet gevonden");
        }

        // Voeg de event listener toe voor het sluiten van de wizard
        var closeButton = document.getElementById('closeIntroWizard');
        if (closeButton) {
            closeButton.addEventListener('click', function () {
                closeIntroWizard();
            });
            console.log("closeButton gevonden");
        } else {
            console.log("closeButton niet gevonden");
        }

       

        // Roep de handleIntroWizard functie op om de wizard te tonen/verbergen op basis van de cookie-status
        handleIntroWizard();
    });

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

    // Functie om de introductiewizard te sluiten en de cookie in te stellen wanneer de gebruiker op 'sluiten' klikt
    function closeIntroWizard() {
        var introWizard = document.getElementById('introWizard');
        var closeButton = document.getElementById('closeIntroWizard');

        // Toon de close button voor heropenen
        closeButton.style.display = "block";

        // Stel de cookie in om bij te houden dat de gebruiker de intro heeft gesloten
        setCookie('introWizardClosed', 'true', 365); // Hier is de cookie-instelling geldig voor 1 jaar

        // Toon de openNextButton
        var openNextButton = document.getElementById('openNextButton');
        if (openNextButton) {
            openNextButton.style.display = 'block';
        } else {
            console.log("openNextButton niet gevonden");
        }

        // Verberg de intro wizard
        introWizard.style.display = "none";
    }

var introWizard = document.getElementById('introWizard'); 
var openNextButton = document.getElementById('openNextButton')
function hideShow(){
    if(display == 'flex'){
        openNextButton.style.display = "none"; 
    }
    else{
        openNextButton.style.display = 'flex'; 
    }
}




    // Functie om de introductiewizard opnieuw te openen
    function openIntroWizard() {
        // Voeg hier de logica toe om de introductiewizard opnieuw te openen
        console.log("Introductiewizard opnieuw geopend.");

        // Verberg de openNextButton
        var openNextButton = document.getElementById('openNextButton');
        if (openNextButton) {
            openNextButton.style.display = 'none';
        } else {
            console.log("openNextButton niet gevonden");
        }
    }

    // Functie om de introductiewizard te openen of te sluiten op basis van de cookie-status
    function handleIntroWizard() {
        var introWizard = document.getElementById('introWizard');
        var closeButton = document.getElementById('closeIntroWizard');
        var openNextButton = document.getElementById('openNextButton');

        // Controleer of de cookie is ingesteld
        if (getCookie('introWizardClosed') !== 'true') {
            // Toon de intro-wizard als de cookie niet is ingesteld
            introWizard.style.display = "flex";
        } else {
            // Verberg de intro-wizard als de cookie is ingesteld
            introWizard.style.display = "none";
            // Toon de close button, zodat gebruikers de wizard opnieuw kunnen openen
            closeButton.style.display = "block";

            // Toon de openNextButton
            if (openNextButton) {
                openNextButton.style.display = 'block';
            } else {
                console.log("openNextButton niet gevonden");
            }
        }
    }
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
        for (let i = 1; i <= 15; i++) {
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





