<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <style>
 body{background-color:black;}

 </style>
   
  </head>

  <body>  
    
  <!--CAROUSEEL! SYLE -->
          <style>
              #myCarousel{
                  width: 500px;
                  box-shadow: inset black 10px 10px 40px:
              }

             .carousel-item {
              height: 20rem;
              background-color: black;
              color: white;
              position: relative;}

              .conteiner {
               position: absolute;
               left: 200px;
               top: 80px;}  

             .overlay-image {
              position: absolute;
              left: 0;
              bottom:0;
              right:0;
              top: 0;
              background-position: center;
              background-size:cover;
              opacity:1;}

         </style>

           <!--CAROUSEEL! -->

<div id="myCarousel" class="carousel slide carousel-fade pb-5" data-ride="carousel">

   <ol class="carousel-indicators">
      <li data-target="$myCarousel"
          data-slide-to="0" class="active"></li>
      <li data-target="$myCarousel"
          data-slide-to="1"></li>
      <li data-target="$myCarousel"
          data-slide-to="2"></li>  
    </ol>

<div class="carousel-inner">
                  

      <div class="carousel-item active" data-interval="3000">
        <div class="overlay-image"  style="background-color:green;"></div>
           <div class="container conteiner">

            <h1>bla bla bla</h1>
            <h2>bla bla bla</h2>
            <h3>bla bla bla</h3>
            <h1>bla bla bla</h1>

          </div>
      </div>


    <div class="carousel-item " data-interval="3000" >
        <div class="overlay-image"  style="background-image: url(projects/js_nutshell/images/atmospheric.jpg);"></div>
          <div class="container conteiner">
            <h1>Hier Auch</h1>   
          </div>
     </div>


    <div class="carousel-item" data-interval="3000">
        <div class="overlay-image"  style="background-image: url(/IMG/FOTOOO!.png);">
         </div>
          <div class="container conteiner">
            <h1>WTF</h1>
         </div>
    </div>   


  <!-- 3 Comandos del carusel -->
  <a href="#myCarousel"
               class="carousel-control-prev" role="button"
               data-slide="prev"> 
               <span class="sr-only"></span>
               <span class="carousel-control-prev-icon"
                aria-hidden="true"></span>
</a>
   <a href="#myCarousel"
                 class="carousel-control-next" role="button"
                 data-slide="next"> 
                <span class="sr-only"></span>
                <span class="carousel-control-next-icon"
                 aria-hidden="true"></span>
    </a>

  </div>  
 </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
