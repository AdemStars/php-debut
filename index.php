<!DOCTYPE html>
<html>
    <head>
        <!--------TITRE -------------------------->
-       <title>JUNGLE BURGER</title>
        <!------LINK CSS-------------------------->
         <link rel="stylesheet" href="./CSS/style.css">
        <!-------------------FONT AWSOME CDN ---------------------------------------->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-------------------BOOTSTRAP 4 CSS------------------------------------------------>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
         <!----------Viewport controle de mise en page sur navigateur mobile --------->
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-------------Lire -->
        <!----CDN Javascript JQUERY--------------------------------------------------->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!--------------------------BOOTSTRAP JAVASCRIPT ------------------->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
         <!---CDN Javascript poppser -------------------------------------->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    </head>







    <body>
        <!---nav de bootstrap/navbar-dark/------------------------------------------------------------------------------->
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top">

        
          <div class="container"> <!----------------------------Container Nvabar------------------------------------------------------------------------------->  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                  <span class="fas fa-bars fa-lg"></span>
                </button>
    
               <a class="navbar-brand" href="./index.html"><img src="img/Jungle.png" class="rounded float-left" height="50" width="60"></span>    </a>
               
               <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="./index.html"><span class="fa fa-home fa-lg"></span> Acceuil</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> Informations</a></li>
                    <li class="nav-item"><a class="nav-link" href="./index.html"><span class="fas fa-hamburger fa-lg"></span> Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>
                <span class="navbar-text">
                    <button type="button" class="btn btn btn-success" data-toggle="modal" data-target="#loginModal">
                    <span class="fa fa-sign-in"></span> Login</button>
                </span>
            </div>
                               
            </div>
        </nav><!------------------------ End Nav ---------------------------------------------------->


<div class="container"><!--------------------Container Géneral  ------------------------------->
          
   <div class="row"><!---------------------ROW BOOTSTRAP ---------->
            <div class="col"><!-----------Column bootstrap --------------->


      <!---------------------------CAROUSEL ----------------------------------------------------------------------------------------------->
      <div id="mycarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!----------ITEM1 ---------------------------->
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="./img/item0.png" alt="First slide">

             <!---Contenu du slide 1 ---->
            <div class="carousel-caption d-none d-md-block">
              <h1>Titre de la PUB1</h1>
              <p>Légende de la slide n°1.</p>
            </div> <!--------------------->  

          </div>



          <!------------ITEM2 -------------------------->
          <div class="carousel-item">
            <img class="d-block img-fluid" src="./img/item2.png" alt="Second slide">

            <!---Contenu du slide 2 ---->
            <div class="carousel-caption d-none d-md-block">
              <h1>Titre de la PUB2</h1>
             <p>Légende de la slide n°2.</p>
                 </div><!--------------------->   
            
         </div>


        

          

          <!----------ITEM3 ---------------------------->
          <div class="carousel-item">
            <img class="d-block img-fluid" src="./img/item3.png" alt="Third slide">
          </div>
        </div>



        <!-------------------------CONTROLE CAROUSEL SLIDE PRECEDENT ---------------------------------------------->
        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <!--------------------------CONTROL CAROUSEL SLIDE SUIVANT ------------------------------------------------->
        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!--------FIN CAROUSEL -------------------------->
     
      
    </div> 
  </div> 
    <?php
    $images = array("burger2.png", "burger3.png", "burger4.png", "burger2.png", "burger3.png", "burger4.png","burger2.png", "burger3.png", "burger4.png");
    ?>
      <?php 
       foreach($images as $image){
         echo '
         <div class="col-12 col-sm-6 col-md-4">
          <!-----------CARD-------------->
          <div class="card mycard">
            <img class="card-img-top photo" src="./img/'. $image .'" alt="Card image cap">
            <div class="card-body bodycard">
              <h5 class="card-title">$name</h5>
              <p class="card-text contentcard">Some quick example text to build on the card title.</p>
            </div>
            <div class="card-body bodycard">
              <!-------Button ------------------------------------>
              <button type="button" class="btn btn btn-success" data-toggle="modal" data-target="#loginModal">
                <span class="fa fa-sign-in"></span>  Voir </button>
              <!----------------------------------------------->
            </div>
          </div>
          <!----------END CARD ------------------>

      </div>

         ';
       }
       ?>
    
  <div class="row row-content">
    <div class="col-12 col-sm-6 col-md-4">


      <!-----------CARD-------------->

      <div class="card mycard">
        <img class="card-img-top photo" src="./img/burger2.png" alt="Card image cap">
        <div class="card-body bodycard">
          <h5 class="card-title">BURGER 1</h5>
          <p class="card-text contentcard">Some quick example text to build on the card title..</p>
        </div>
        <div class="card-body bodycard">
          <!-------Button ------------------------------------>
          <button type="button" class="btn btn btn-success" data-toggle="modal" data-target="#loginModal">
            <span class="fa fa-sign-in"></span>  Voir </button>
          <!----------------------------------------------->
        </div>
        
      </div>

      <!----------END CARD ------------------>
  
    </div>
    <div class="col-12 col-sm-6 col-md-4">
     

          <!-----------CARD-------------->

      <div class="card mycard">
        <img class="card-img-top photo" src="./img/burger3.png" alt="Card image cap">
        <div class="card-body bodycard">
          <h5 class="card-title">BURGER 1</h5>
          <p class="card-text contentcard">Some quick example text to build on the card title..</p>
        </div>
        <div class="card-body bodycard">
          <!-------Button ------------------------------------>
          <button type="button" class="btn btn btn-success" data-toggle="modal" data-target="#loginModal">
            <span class="fa fa-sign-in"></span>  Voir </button>
          <!----------------------------------------------->
        </div>
        
      </div>

      <!----------END CARD ------------------>
  





    </div>
    <div class="col-12 col-sm-6 col-md-4">
   
        <!-----------CARD-------------->

        <div class="card mycard">
          <img class="card-img-top photo" src="./img/burger4.png" alt="Card image cap">
          <div class="card-body bodycard">
            <h5 class="card-title">BURGER 1</h5>
            <p class="card-text contentcard">Some quick example text to build on the card title.</p>
          </div>
          <div class="card-body bodycard">
            <!-------Button ------------------------------------>
            <button type="button" class="btn btn btn-success" data-toggle="modal" data-target="#loginModal">
              <span class="fa fa-sign-in"></span>  Voir </button>
            <!----------------------------------------------->
          </div>
          
        </div>
  
        <!----------END CARD ------------------>


        



    </div>
  
    <div class="col-12 col-sm-6 col-md-4">
   
      <!-----------CARD-------------->

      <div class="card mycard">
        <img class="card-img-top photo" src="./img/burger4.png" alt="Card image cap">
        <div class="card-body bodycard">
          <h5 class="card-title">BURGER 1</h5>
          <p class="card-text contentcard">Some quick example text to build on the card title.</p>
        </div>
        <div class="card-body bodycard">
          <!-------Button ------------------------------------>
          <button type="button" class="btn btn btn-success" data-toggle="modal" data-target="#loginModal">
            <span class="fa fa-sign-in"></span>  Voir </button>
          <!----------------------------------------------->
        </div>
        
      </div>

      <!----------END CARD ------------------>


      



  </div>


  
  </div>

</div> 


<div class="row row-content">
  
</div>


</div>
    </body>


      
</html>