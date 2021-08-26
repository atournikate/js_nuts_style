<?php 
  require_once $_SERVER['HOME'].'/projects/js_nutshell/config.php';
  require_once 'header.inc.php';

?>

<!--BUTTON!!! -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

 

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
        <div class="overlay-image"  style="background-image: url(/projects/js_nutshell/images/exJS_what.png);"></div>
           <div class="container">
            <div class="carousel-caption d-none d-md-block">
                <h5>Opportunity Zürich</h5>
                <p>Established in Spring of 2021 as part of the bla bla bla program.</p>
            </div>
          </div>
      </div>

    <div class="carousel-item " data-interval="3000" >
        <div class="overlay-image"  style="background-image: url(projects/js_nutshell/images/atmospheric.jpg);"></div>
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h5>Challenge</h5>
              <p>The program has a plan of training front- and back-end web developers over the course of 8 months of intensive learning and group projects.</p>
            </div>
          </div>
     </div>

    <div class="carousel-item" data-interval="3000">
        <div class="overlay-image"  style="background-image: url(/projects/js_nutshell/images/exampleCode.png);">
         </div>
          <div class="container conteiner">
            <div class="carousel-caption d-none d-md-block">
              <h5>Dedication</h5>
              <p>This website is a combined group project to create a library of basic and advanced JavaScript functions.</p>
            </div>
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
    
    <!-- Teaser -->
    <div class="teaser">
      <p>Short summary of your subject</p>
    </div>

    <!-- article -->
    <div class="article">
      <h2>Header 2 Something Cool</h2>

      <p>
        Icing jelly beans I love gummi bears wafer pudding jelly-o cotton candy.
        Dragée cotton candy cake I love halvah powder donut. Powder halvah
        pastry chocolate cake pudding I love I love croissant I love.
      </p>

      <h3>Heading 3 More Bla stuff</h3>

      <p>
        I love macaroon dragée liquorice pudding fruitcake I love jelly. I love
        dessert danish jelly marzipan pastry muffin marzipan. Jelly bonbon sweet
        bonbon jelly-o donut powder.
      </p>
    </div>

    <div class="article">
      <h2>Header 2 Something Cool</h2>

      <p>
        Icing jelly beans I love gummi bears wafer pudding jelly-o cotton candy.
        Dragée cotton candy cake I love halvah powder donut. Powder halvah
        pastry chocolate cake pudding I love I love croissant I love.
      </p>

      <h3>Heading 3 More Bla stuff</h3>

      <p>
        I love macaroon dragée liquorice pudding fruitcake I love jelly. I love
        dessert danish jelly marzipan pastry muffin marzipan. Jelly bonbon sweet
        bonbon jelly-o donut powder.
      </p>
    </div>
    <div class="article">
      <h2>Header 2 Something Cool</h2>

      <p>
        Icing jelly beans I love gummi bears wafer pudding jelly-o cotton candy.
        Dragée cotton candy cake I love halvah powder donut. Powder halvah
        pastry chocolate cake pudding I love I love croissant I love.
      </p>

      <h3>Heading 3 More Bla stuff</h3>

      <p>
        I love macaroon dragée liquorice pudding fruitcake I love jelly. I love
        dessert danish jelly marzipan pastry muffin marzipan. Jelly bonbon sweet
        bonbon jelly-o donut powder.
      </p>
    </div>
    <div class="article">
      <h2>Header 2 Something Cool</h2>

      <p>
        Icing jelly beans I love gummi bears wafer pudding jelly-o cotton candy.
        Dragée cotton candy cake I love halvah powder donut. Powder halvah
        pastry chocolate cake pudding I love I love croissant I love.
      </p>

      <h3>Heading 3 More Bla stuff</h3>

      <p>
        I love macaroon dragée liquorice pudding fruitcake I love jelly. I love
        dessert danish jelly marzipan pastry muffin marzipan. Jelly bonbon sweet
        bonbon jelly-o donut powder.
      </p>
    </div>


    <!-- Code Area -->
    <div class="codeArea">
      <h2>Heading 2 Code area stuff</h2>

      <p>
        Cheesecake lollipop jelly-o brownie powder marshmallow icing carrot cake
        chocolate bar. I love cake muffin tootsie roll bear claw jujubes
        marshmallow oat cake topping. Tart gummi bears sesame snaps I love
        pastry.
      </p>

      <div class="container">
        <pre>
            Code here Chocolate cake I love lollipop cookie marzipan topping chocolate bar cupcake.<br> Tiramisu marshmallow pastry chocolate cake cake tart dragée apple pie candy.<br> Fruitcake cupcake brownie ice cream tiramisu I love cake brownie I love.
        </pre>
        <button class="btn btn-run"></button>
      </div>
    </div>

    <!-- Table of Content -->
    <div class="toc">
      <ul>
        <li><a href="#">link 1</a></li>
        <li><a href="#">link 2</a></li>
        <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
        <li><a href="#">link 5</a></li>
        <li><a href="#">link 6</a></li>
      </ul>
    </div>


    <?php include 'footer.inc.php'; ?>
    