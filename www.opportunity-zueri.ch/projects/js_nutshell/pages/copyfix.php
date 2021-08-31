        
        <!--ADD MW-100 TO THE CODEAREA CLASSES-->
        <div class="codeArea flex-container mw-100 codeExample">
            <h3>Example Name</h3>
            <p>
                Description
            </p>

            <div class="row"> <!--WRAP YOUR CODE AND OUTPUT IN A DIV CLASS="ROW" -->
                <!-- <div class="col-6 code"> -->
                    <div class="col-md-6 col-sm-12"></div> <!--INSTEAD OF COL-6, WE GIVE IT A COMMAND THAT TELLS IT TO TAKE UP 6 COLUMNS FROM MEDIUM AND LARGER, AND 12 COLUMNS AT SIZE SMALL AND SMALLER-->
                    <h4>Code:</h4>
                    <p>
                        <!-- CODE -->
                        <code class="language-js"><pre>
                            /* Creating a variable with an emtpy strings */
                            This is your code
                        </pre></code>
                    </p>
                </div>
                <div class="col-6 output">
                    <h4>Output:</h4>
                    <p>        
                        <code class="language-html"></code>
                    </p>
                    <button name="run1" onclick="runScript(0, this);">Run Script</button>
                    <button name="reset1" onclick="reset(0, this);">Reset Script</button>
                </div>
            </div>
            
        </div>


<script src="/projects/js_nutshell/js/topic.M-mirko.js"></script>
    
    <?php include $_SERVER['HOME'].'/projects/js_nutshell/inc/footer.inc.php'; ?>