<?php
include("includes/header.php");  
include("includes/footer.php"); 
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Map</title>
    </head>

    <body> 
        <div class="navbar p-4 border border-2 border-secondary">
                <div class="col-12 col-md-8">
                    <h1 class= "meldknop-titel">Calaminator<h1> 
                </div>
        </div>
    <style>
        :root{
           --bs-max-width: 100%; 
        }

        .accordion-menu {
        --bs-accordion-color: black;
        --bs-accordion-bg: var(--bs-body-bg);
        --bs-accordion-transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,border-radius 0.15s ease;
        --bs-accordion-border-color: #000000;
        --bs-accordion-border-width: 1px;
        --bs-accordion-border-radius: var(--bs-border-radius);
        --bs-accordion-inner-border-radius: calc(var(--bs-border-radius) - (var(--bs-border-width)));
        --bs-accordion-btn-padding-x: 1.25rem;
        --bs-accordion-btn-padding-y: 1rem;
        --bs-accordion-btn-color: white;
        --bs-accordion-btn-bg: #d94e5b;
        --bs-accordion-btn-icon-width: 1.25rem;
        --bs-accordion-btn-icon-transform: rotate(-180deg);
        --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
        --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        --bs-accordion-body-padding-x: 1.25rem;
        --bs-accordion-body-padding-y: 1rem;
        --bs-accordion-active-color: white;
        --bs-accordion-active-bg: #d94e5b;
        max-width: var(--bs-max-width); 
        margin: 0 auto;
    }

        .accordion-items{
        color: var(--bs-accordion-color);
        background-color: var(--bs-accordion-bg);
    }

        .accordion-buttons{
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
            font-size: 1rem;
            color: var(--bs-accordion-btn-color);
            text-align: left;
            background-color: var(--bs-accordion-btn-bg);
            border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
            border-radius: 0;
            overflow-anchor: none;
            transition: var(--bs-accordion-transition);
            margin-top: 1.5rem; 
    }
        .accordion-body{
            border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
    }
    </style> 
     
     
    <div class="accordion-menu" id="Menu">
        <div class="accordion-items">
            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                s'Hertogenbosch
            </button>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion1">
                <div class="accordion-body">
                    <h3>Nummerlijst:</h3> 
                        <p>
                            Jacob van Maerlantstraat: <a class="single" href="#">06 - 1840 5695</a>
                            <p> 
                            Marathonloop: 
                            <p> 
                            Onderwijsboulevard: 
                            <p> 
                            Stadionlaan: 
                            <p> 
                            Vlijmenseweg: 
                            <p> 
                            Weidonklaan: 
                        </p>
                </div>
            </div>

            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                Rosmalen 
            </button>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion1">
                <div class="accordion-body">
                    <h3>Nummerlijst:</h3> 
                        <p>
                            De Kleine Elst:  
                            <p> 
                            Meester Vriensstraat:  
                        </p>
                </div>
            </div>

            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                Cuijk 
            </button>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion3">
                <div class="accordion-body">
                    <h3>Nummerlijst:</h3> 
                        <p>
                            Beversestraat:  
                            <p> 
                            Jan van Cuijkstraat:   
                        </p>
                </div>
            </div>


            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                Oss 
            </button>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion4">
                <div class="accordion-body">
                    <h3>Nummerlijst:</h3> 
                        <p>
                            Euterpelaan:   
                            <p> 
                            Gasstraat Oost:  
                            <p> 
                            Nelson Mandelaboulevard:  
                        </p>
                </div>
            </div>

            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                Tilburg 
            </button>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion5">
                <div class="accordion-body">
                    <h3>Nummerlijst:</h3> 
                        <p>
                            Ringbaan-Oost: 
                        </p>
                </div>
            </div>

            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                Uden 
            </button>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion6">
                <div class="accordion-body">
                    <h3>Nummerlijst:</h3> 
                        <p>
                            Udenseweg:  
                        </p>
                </div>
            </div>

            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                Veghel 
            </button>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion7">
                <div class="accordion-body">
                    <h3>Nummerlijst:</h3> 
                        <p>
                            Muntelaar: 
                            <p> 
                            R. Evers:  
                        </p>
                </div>
            </div>
        </div>
    </div>
    </div>

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
