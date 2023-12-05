<?php 
//Header
include("includes/header.php"); 
?> 

<!-- Titel --> 
<body>
    <div class="navbar p-4 border border-2 border-secondary">
            <div class="col-12 col-md-8">
                <h1 class= "makers-titel">De Makers<h1> 
            </div>
        </div>
    </div>

<!-- Overzicht van makers --> 
<div class= "container mt-5"> 
    <div class= "row justify-content-center d-flex">

    <!-- Maker --> 
        <div class= "col-5 p-4 m-3 col-lg-6 makers-venster1 border border-secondary">
        <img class= "img-fluid" src="<?php echo WWW_ROOT . '/images/profiel.png'?>">  
            <p> Naam: ... <p>
            <p> Functie: ... <p> 
        </div>

    <!-- Maker --> 
        <div class= "col-5 p-4 m-3 col-lg-6 makers-venster2 border border-secondary">
            <p> Naam: ... <p>
            <p> Functie: ... <p> 
        </div>

    <!-- Maker --> 
        <div class= "col-5 p-4 m-3 col-lg-6 makers-venster2 border border-secondary">
            <p> Naam: ... <p>
            <p> Functie: ... <p> 
        </div>

    <!-- Maker --> 
        <div class= "col-5 p-4 m-3 col-lg-6 makers-venster1 border border-secondary">
            <p> Naam: ... <p>
            <p> Functie: ... <p> 
        </div>

    <!-- Maker --> 
        <div class= "col-5 p-4 m-3 col-lg-6 makers-venster1 border border-secondary">
            <p> Naam: ... <p>
            <p> Functie: ... <p> 
        </div>

    <!-- Maker --> 
        <div class= "col-5 p-4 m-3 col-lg-6 makers-venster1 border border-secondary">
            <p> Naam: ... <p>
            <p> Functie: ... <p> 
        </div>
    </div> 
</div>
</body>

<?php 
//Footer
include("includes/footer.php");
?>