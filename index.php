<?php
?>

<?php
?>

<!DOCTYPE html>
<html lang="nl">
<head>
 <title>Home</title>
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
   font-family: Candara;
   margin-top: 116px;
  }

  .makersbutton{
   font-size: 95px;
   background-color: #F9100C;
   border-color: #F9100C;
   font-family: Candara;
   padding-left: 150px;
   padding-right: 150px;
   position: absolute;
   right: 200px;
   top: 500px;

  }

  .Quizbutton{
   font-family: "Candara Regular";
   font-size: 95px;
   background-color: #F9100C;
   border-color: #F9100C;
   padding-left: 208px;
   padding-right: 208px;
   position: absolute;
   top: 700px;
   right: 200px;
  }

  .Quiztitel{
   color: white;
   text-decoration: none;
  }


  .makerstitel{
   color: white;
   text-decoration: none;
  }

  .vierkantlogo{
   background-color: #F9100C;
   width: 80px;
   font-size: 95px;
   position: absolute;
   right: 0;
   margin-top: 30px;
   height: 122px;
   font-family: Candara;
   text-align: center;



   .meldknopi{
    text-decoration: none;
    color: white;
   }
  }

  .rodebalkonderaan{
   background-color: #F9100C;
   height: 222px;
   position: absolute;
   bottom: 0;
   width: 100%;

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


<div class="rodebalkonderaan"></div>

</body>
</html>





