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

  .Index-titel{
   text-align: center;
   font-size: 160px;
   color: #F9100C;
   margin-top: 116px;
      font-family: Candara, Serif, serif;
  }

  .makersbutton{
   font-size: 95px;
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
   font-size: 95px;
   background-color: #F9100C;
   border-color: #F9100C;
   padding-left: 208px;
   padding-right: 208px;
      position: absolute;
      top: 700px;
      right: 200px;
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
      height: calc(126vw / (2140 / 9291)); /* Hoogte wordt berekend op basis van de aspect ratio van de afbeelding */
      background-position: center top -44px;
  }

  .buttons{
      display: grid;
      justify-content: space-between;
      width: 184px;
      margin-top: 329px;
  }

 </style>
</head>


<body>
<div class="rodebalktop">
</div>

<div class="vierkantlogo">
 <a href="meldknop.php" class="meldknopi">i</a>
</div>

<h1 class="Index-titel">
 Calm
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
<script>
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
    });
</script>
</body>
</html>





