<?php 
    include ("initialize.php");
?>
        
                <meta charset="UTF-8">
                <meta name="viewport" content="width= device-width, initial-scale-1"/>  
                <title>Navigatiemenu</title>

                <!-- Opmaak --> 
                <link rel="stylesheet" href= css/stylesheets.css>
    

                <!--Bootstrap opmaak -->
                    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

                <!-- Navigatie buttons --> 
                <nav class="navbar p-2 navbar-expand-lg navbar-kw1c border-bottom border-secondary">
                    <ul>
                        <li><a href="<?php echo WWW_ROOT . '/map.php'; ?>" class="text-light fs-4">Home</a></li> 
                        <li><a href="<?php echo WWW_ROOT . '/quiztest.php'; ?>" class="text-light fs-4">Quiz</a></li>
                        <li><a href="<?php echo WWW_ROOT . '/makers.php'; ?>" class="text-light fs-4">Makers</a></li>
                        
                <!-- Meldknop --> 
                        <li><a href="<?php echo WWW_ROOT . '/meldknop.php'; ?>" class="text-light fs-2 btn btn-danger">!</a></li>  
                    </ul> 
                </nav>
       
