<?php 
  require_once '../config.php';
  require_once 'header.inc.php';

?>

<main class="mw-100 m-5 p-3">
  <section class="container summary">
    <h2>H2 Summary</h2>

    <p>
      Cheesecake lollipop jelly-o brownie powder marshmallow icing carrot cake
      chocolate bar. I love cake muffin tootsie roll bear claw jujubes
      marshmallow oat cake topping. Tart gummi bears sesame snaps I love
      pastry.
    </p>
  </section>

  <hr>

  <section class="container explanation">
    <h2>H2 Description</h2>

    <p>
      Cheesecake lollipop jelly-o brownie powder marshmallow icing carrot cake
      chocolate bar. I love cake muffin tootsie roll bear claw jujubes
      marshmallow oat cake topping. Tart gummi bears sesame snaps I love
      pastry.
    </p>

    <!-- Code Area -->
    <div class="flex-container codeExample">
      <div class="row">
        <div class="col-sm-12 col-md-6 code my-3 mx-auto">
        <h4>Input:</h4>
          <pre>
            <code class = "language-css">
              let a = 4;
              let b = 1;  
              /*  statement string with math expression placeholders that
                  will be replaced by their respective results */
              let statement = `Twenty-one is ${a + b} and not ${2 * a + b}.`;

              console.log(statement);  
            </code>
          </pre>
        </div>
              
        <div class="col-sm-12 col-md-6 code my-3 mx-auto">
          <h4>Output:</h4>
          
          <div id="outputbmi"></div>
          
          <button class="btn btn-run" onclick="run(this)">Run</button>
          <button class="btn btn-run" onclick="reset(this)">Reset</button>
        </div>
      </div>
      
    </div>
  </section>
      
  </div>
</main>


    <?php include 'footer.inc.php'; ?>