<?php
//Header 
include("includes/header.php");  
?>

<!DOCTYPE html>
<html lang="nl">
    <head> 
    
    <!-- Header --> 
    <div class= "rodebalktop">
    </div>

      <!-- Opmaak --> 
      <link rel="stylesheet" href= css/stylesheets.css>

    <!-- Titel --> 
        <title>Map</title>


    <!-- Homeknop --> 
    <div class="homeknop-vak">
        <a href="index.php" class="homeknop-pijl"><</a>
    </div>


    </head>

    <!-- Kop --> 
    <body> 
        <div class="navbar p-4">
                <div class="col-12 col-md-8">
                    <h1 class= "meldknop-titel">KW1C Alarmnummers<h1> 
                </div>
        </div>


    
    
    <!-- Algemeen knoppenoverzicht/lijst --> 
    <div class="accordion-menu" id="Menu">
        <div class="accordion-items">
            <!-- s'Hertogenbosch knop (1) --> 
            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                s'Hertogenbosch
            </button>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion1">
                <div class="accordion-body">
                        <p>
                            J. van Maerlantstraat: <a class= "number" href="tel:+06 - 1840 5695">06 - 1840 5695</a> 
                            <p> 
                            Marathonloop:             <a class= "number" href="tel:+073 - 6249 726">073 - 6249 726</a>  
                            <p> 
                            Onderwijsboulevard:       <a class= "number" href="tel:+073 - 6249 443">073 - 6249 443</a> 
                            <p> 
                            Stadionlaan:              <a class= "number" href="tel:+06 - 2881 6348">06 - 2881 6348</a>  
                            <p> 
                            Vlijmenseweg:             <a class= "number" href="tel:+073 - 6249 626">073 - 6249 626</a> 
                            <p> 
                            Weidonklaan:              <a class= "number" href="tel:+073 - 6249 626">073 - 6249 626</a> 
                        </p>
                </div>
            </div>
        </div>

        <div class="accordion-items">
                <!-- Rosmalen knop (2) --> 
                <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Rosmalen 
                </button>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion2">
                    <div class="accordion-body">
                            <p>
                                De Kleine Elst:           <a class= "number" href="tel:+073 - 6456 620">073 - 6456 620</a>  
                                <p> 
                                Meester Vriensstraat:     <a class= "number" href="tel:+073 - 645 8000">0073 - 645 8000</a>   
                            </p>
                    </div>
                </div> 
            </div>
        
        <div class="accordion-items">
            <!-- Cuijk knop (3) --> 
            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                Cuijk 
            </button>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion3">
                <div class="accordion-body">
                        <p>
                            Beversestraat:            <a class= "number" href="tel:+088 - 017 5555">088 - 017 5555</a>   
                            <p> 
                            J. van Cuijkstraat:      <a class= "number" href="tel:+088 - 017 5555">088 - 017 5555</a>  
                        </p>
                </div>
            </div>
        </div>
        

        <div class="accordion-items">
            <!-- Oss knop (4) --> 
            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                Oss 
            </button>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion4">
                <div class="accordion-body">
                        <p>
                            Euterpelaan:              <a class= "number" href="tel:+088 - 017 5555">088 - 017 5555</a>   
                            <p> 
                            Gasstraat Oost:           <a class= "number" href="tel:+088 - 017 5555">088 - 017 5555</a>     
                            <p> 
                            Nelson Mandelaboulevard:  <a class= "number" href="tel:+088 - 017 5555">088 - 017 5555</a>       
                        </p>
                </div>
            </div>
        </div>

        <div class="accordion-items">
             <!-- Tilburg knop (5) --> 
            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                Tilburg 
            </button>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion5">
                <div class="accordion-body">
                        <p>
                            Ringbaan-Oost:            <a class= "number" href="tel:+088 - 2937 779">088 - 2937 779</a>  
                        </p>
                </div>
            </div>
        </div>

        <div class="accordion-items">
             <!-- Uden knop (6) --> 
            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                Uden 
            </button>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion6">
                <div class="accordion-body">
                        <p>
                            Udenseweg:                <a class= "number" href="tel:+088 - 017 5555">088 - 017 5555</a> 
                        </p>
                </div>
            </div>
        </div>

        <div class="accordion-items">
             <!-- Veghel knop (7) --> 
            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                Veghel 
            </button>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion7">
                <div class="accordion-body">
                        <p>
                            Muntelaar: 
                            <p> 
                            R. Evers:                <a class= "number" href="tel:+088 - 017 5555">088 - 017 5555</a>
                        </p>
                </div>
            </div>
        </div>
    </div>
    </div>

<!--JavaScript element voor functie van accordion knoppen --> 
<script>
	var acc = document.getElementsByClassName("accordion");
		var i;

			for (i = 0; i < acc.length; i++) {
  			    acc[i].addEventListener("click", function() {
    			this.classList.toggle("active");
    	var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>

<footer> 
<div class= "rodebalkonderaan">
    </div>
</footer>