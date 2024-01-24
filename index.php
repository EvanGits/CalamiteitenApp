
<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- titel --> 
    <title>Index</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <style>
        *{
            margin: 0;
            padding: 0;

        }

    /* container van alle buttons */
        .buttons-container{
            display: flex;
            position: relative;
        }



            .animated-gif {
                transition: transform 0.5s ease; /* Voeg een overgangseffect toe op de grootte */
                cursor: pointer; /* Maak de cursor een wijzer wanneer erop wordt geklikt */
                transform: scale(2); /* Tweemaal zo groot, standaard geanimeerd */
                filter: brightness(0) saturate(100%) invert(75%) sepia(59%) saturate(5786%) hue-rotate(89deg) brightness(129%) contrast(114%);
            }


        .buttons{
            width: 50px;
            height: auto;
        }

    /* positie button 1 */
        .button1{
            position: absolute;
            top: 35vh;
            left: 39vw;
        }

    /* positie button 2 */
        .button2{
            position: absolute;
            top: 104vh;
            left: 51vw;
        }

    /* positie button 3 */
        .button3{
            position: absolute;
            top: 87vh;
            left: 76vw;
        }
    /* positie button 4 */
        .button4{
            position: absolute;
            top: 48vh;
            left: 23vw;
        }

    /* positie button 5 */
        .button5{
            position: absolute;
            top: 70vh;
            left: 72vw;
        }

    /* positie button 6 */
        .button6 {
            position: absolute;
            top: 56vh;
            left: 24vw;
        }


        /* positie button 7 */
        .button7{
            position: absolute;
            top: 78vh;
            left: 41vw;
        }

    /* positie button 8 */
        .button8{
            position: absolute;
            top: 102vh;
            left: 73vw;
        }

    /* positie button 9 */
        .button9 {
            position: absolute;
            top: 60vh;
            left: 34vw;
        }

        /* positie button 10 */
        .button10{
            position: absolute;
            top: 69vh;
            left: 40vw;
        }
    /* positie button 11 */
        .button11{
            position: absolute;
            top: 104vh;
            left: 9vw;
        }

    /* positie button 12*/
        .button12{
            position: absolute;
            top: 81vh;
            left: 72vw;
        }

    /* positie button 13 */
        .button13 {
            position: absolute;
            top: 43vh;
            left: 28vw;
        }
    
    /* positie button 14 */
        .button14{
            position: absolute;
            top: 125vh;
            left: 45vw;
        }
    
    /* positie button 15 */
        .button15{
            position: absolute;
            top: 103vh;
            left: 34vw;
        }
    
    /* bovenste rode balk */

        .rodebalktop{
            background-color: #F9100C;
            height: 45px;
        }

    /* CALM logo */
        .Index-logo img{
            width: 783px;
            position: absolute;
            left: 93px;
            top: 61px;
        }

    /* knop naar makers-pagina */
        .makersbutton{
            font-size: 86px;
            background-color: #F9100C;
            border-color: #F9100C;
            padding-left: 150px;
            padding-right: 153px;
            position: absolute;
            right: 200px;
            top: 500px;

        }
    
    /* knop naar quiz-pagina */
        .Quizbutton{
            font-family: helvetica, serif;
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

        .Uitlegbutton{
            font-family: helvetica, serif;
            font-size: 86px;
            background-color: #F9100C;
            border-color: #F9100C;
            padding-right: 202px;
            padding-left: 163px;
            position: absolute;
            top: 836px;
            right: 194px;
            z-index: 100;
        }



    /* knop naar quiz-pagina */
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

    /* knop makers-pagina ná scrollen */
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


    /* titels pagina's */
        .Quiztitel,
        .makerstitel,
        .Uitlegtitel{
            color: white;
            text-decoration: none;

        }

    /* meldknop (i) logo */
        .vierkantlogo {
            background-color: #F9100C;
            width: 80px;
            font-size: 95px;
            position: absolute;
            right: 0;
            margin-top: 30px;
            height: 122px;
            font-family: helvetica, serif;
            text-align: center;

        }

    /* knop naar meldknop-pagina */
        .meldknopi{
            text-decoration: none;
            color: white;
        }

    /* flatgebouw */
        .flatgebouw-content {
                background-image: url(images/Achtergrond.jpg);
                background-repeat: no-repeat;
                background-position: center;
                min-height: 136vh;
                margin-top: 1100px;
                background-size: cover;
                overflow: hidden;
            }






        /* tekst */
        .intro-tekst {
            margin-top: 2vh;
            padding-right: 11vw;
            padding-left: 5vw;
        }

        /* close button intro */
        .Sluiting-wizard{
            width: 34vw;
            position: absolute;
            top: 4vh;
            left: 91vw;
        }
        /* container */
        .wizard-container-intro {
            display: none;
            position: fixed;
            top: 20vh;
            z-index: 110;
        }

        /* content */
        .wizard-content-intro {
            color: white;
            font-family: helvetica, serif;
            font-size: 5vw;
        }

        /*introwizard achtergrond*/
        .testbackground {
            background-color: #00000080;
            border-radius: 5%;
            position: fixed;
            width: 101vw;
            max-height: 100%;
            }

    /* wizards */
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


        /* content */
        .wizard-content {
            position: fixed;
            top: 40%;
            font-family: helvetica, serif;
            color: white;
            width: 80vw;
            background-color: #00000080;
            border-radius: 5%;
            z-index: 200;
        }

        /* menu waar de wizards in zitten*/
        .wizard-menu{
            display: flex;
            justify-content: center;
        }

        /* wizard tekst */
        .info-wizard  {
            font-size: 3.3vw;
            position: relative;
            bottom: 0;
            padding: 2.5vw;
        }

        /* sluiten van wizard */
        .close-button {
            font-size: 6vw;
            position: absolute;
            left: 93%;
            font-family: helvetica,serif;
            top: 5%;
        }

        /* schalen van afbeelding (versie 1) */
        .img-default{
            margin-top: 2.7vh;
            width: 51vw;
            border: solid white 10px;
        }

        /* schalen van afbeelding (versie 2) */
        .img-default-2{
            margin-top: 2.7vh;
            width: 65vw;
            border: solid white 10px;
        }

        /* afbeeldingen buiten de default marge */
        .img-nondefault{
            margin-top: 2.7vh;
            width: 22vw;
            border: solid white 10px;
        }

    </style>
</head>


<body>


<!-- Wizard-venster voor introductie -->
<div class="wizard-container-intro" id="introWizard">
    <div class="wizard-content-intro">
        <div class="testbackground">
            <span class="Sluiting-wizard" id="closeIntroWizard">X</span>
        <div class="intro-tekst">

            <h2>Welkom bij de Applicatie</h2>
            <br>
            <p>Een ongeval op het Koning Willem I College… wat nu? <br> <br>
                Iedereen wil aan het einde van de dag weer veilig naar huis. Daarom
                streeft het Koning Willem I College naar een veilige leer- en werkomgeving en naar het voorkomen van ongevallen.
                Helaas zit een ongeluk soms in een klein hoekje en kan zich toch een ongeval voordoen. Met deze applicatie
                hopen wij jou te informeren als dat gebeurt. Druk deze tekst weg en verken de knoppen in het gebouw.
                <br> <br>
            </p>
        </div>
    </div>
</div>
</div>

<!-- rode balk --> 
<div class="rodebalktop">
</div>

<!-- knop naar meldknop-pagina  --> 
<div class="vierkantlogo">
    <a href="meldknop.php" class="meldknopi">i</a>
</div>

<!-- CALM logo --> 
<h1 class="Index-logo">
    <img src="images/logo_def-01.png" alt="calmlogo">
</h1>

<!-- knop naar makers-pagina --> 
<button class="makersbutton">
    <a href="makers.php" class="makerstitel">Makers</a>
</button>

<!-- knop naar quiz-pagina --> 
<button class="Quizbutton">
    <a href="quiztest.php" class="Quiztitel">Quiz</a>
</button>

<!-- knop naar quiz-pagina -->
<button id="Uitlegbutton" class="Uitlegbutton">
    <a href="#" class="Uitlegtitel">Uitleg</a>
</button>



<!--Flat als achtergrond en buttons-->
<div class="flatgebouw-content">
    <div class="buttons-container gif-container">
    <img src="images/Gif1.gif"  alt="button1" class="button1 buttons animated-gif" id="button1">

    <img src="images/Gif1.gif" alt="button2" class="button2 buttons animated-gif" id="button2">

    <img src="images/Gif1.gif" alt="button3" class="button3 buttons animated-gif " id="button3">

    <img src="images/Gif1.gif" alt="button4" class="button4 buttons animated-gif" id="button4">

    <img src="images/Gif1.gif" alt="button5" class="button5 buttons animated-gif" id="button5">

    <img src="images/Gif1.gif" alt="button6" class="button6 buttons animated-gif" id="button6">

    <img src="images/Gif1.gif" alt="button7" class="button7 buttons animated-gif" id="button7">

    <img src="images/Gif1.gif" alt="button8" class="button8 buttons animated-gif" id="button8">

    <img src="images/Gif1.gif" alt="button9" class="button9 buttons animated-gif" id="button9">

    <img src="images/Gif1.gif" alt="button10" class="button10 buttons animated-gif" id="button10">

    <img src="images/Gif1.gif" alt="button11" class="button11 buttons animated-gif" id="button11">

    <img src="images/Gif1.gif" alt="button12" class="button12 buttons animated-gif" id="button12">

   <img src="images/Gif1.gif" alt="button13" class="button13 buttons animated-gif" id="button13">

  <img src="images/Gif1.gif" alt="button14" class="button14 buttons animated-gif" id="button14">

   <img src="images/Gif1.gif" alt="button15" class="button15 buttons animated-gif" id="button15">

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
            <img src="images/wizardfoto/ontruimingsplattegrond_lobby.jpg" alt="plattegrond" class="img-default-2">
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
            <img src="images/wizardfoto/brandblusser.jpg" alt="brandblusser" class="img-default-2">
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
            <img src="images/wizardfoto/3e_verdieping_brand_alarm.jpg" alt="handbrandmelder" class="img-default">
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
            <img src="images/wizardfoto/noodroute.jpg" alt="nooddeur" class="img-default-2">
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
                <img src="images/wizardfoto/nooddouche.jpg" alt="nooddouche" class="img-default-2">
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
            <p>Oh, daar gaat Pietje Paniek weer, Hij keek weer eens niet voor zich en gleed uit. Maar vrees niet, want gelukkig had Pietje net op
                tijd onze website bezocht. Hij heeft zich aardig kunnen navigeren op
                onze website en heeft de knop ingedrukt met alle alarmnummers van het KW1C.</p>
        </div>
    </div>
</div>

<div class="wizard-container" id="wizard15">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid">
                <img src="images/wizardfoto/alarmkaart_lobby.jpg" alt="alarmkaart" class="img-default-2">
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

        // Verberg de intro wizard
        introWizard.style.display = "none";
    }

    // Functie om de introductiewizard te tonen of te verbergen op basis van de cookie-status
    function handleIntroWizard() {
        var introWizard = document.getElementById('introWizard');

        // Controleer of de introWizardClosed-cookie is ingesteld
        var introWizardClosed = getCookie('introWizardClosed');
        if (introWizardClosed !== 'true') {
            // Toon de introductiewizard als de cookie niet is ingesteld
            introWizard.style.display = 'flex';
        }
    }

    // Voeg een eventlistener toe aan de Uitlegbutton
    var Uitlegbutton = document.getElementById('Uitlegbutton');
    if (Uitlegbutton) {
        Uitlegbutton.addEventListener('click', function () {
            openIntroWizard();
        });
        console.log("Uitlegbutton gevonden");
    } else {
        console.log("Uitlegbutton niet gevonden");
    }

    window.addEventListener('load', function () {
        console.log("Pagina geladen");

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
</script>



<script>
    // Houd bij welke wizard geopend is
    var openWizardId = null;

    // Function to open the wizard window
    function openWizard(wizardId) {
        // Controleer of er al een andere wizard open is
        if (openWizardId !== null) {
            // Sluit de huidige open wizard voordat je een nieuwe opent
            closeWizard(openWizardId);
        }

        // Open de nieuwe wizard
        document.getElementById(wizardId).style.display = "flex";

        // Update de openWizardId variabele
        openWizardId = wizardId;
    }

    // Function to close the wizard window
    function closeWizard(wizardId) {
        document.getElementById(wizardId).style.display = "none";

        // Reset de openWizardId variabele
        openWizardId = null;
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





