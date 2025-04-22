<?php 
    $path = '../../';
    $title = 'Oh CRAP: Final Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <section class="card">
        <img src="../assets/images/crap_final_cover.jpg" alt="">
    </section>

    <div class="question">
        <form>
            <p>What does CRAP stand for?</p>
            <label for="C">C: </label>
            <input type="text" id="C" name="C">
            <label for="R">R: </label>
            <input type="text" id="R" name="R">
            <label for="A">A: </label>
            <input type="text" id="A" name="A">
            <label for="P">P: </label>
            <input type="text" id="P" name="P">
            <br>
            <br>
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>A web designer changes the background color of the page, then changes the color of the text to make it more legible. What principle is he using?</p>
        <form>
            <div>
                <input type="radio" id="contrast" name="implement" value="correct">
                <label for="contrast">Contrast</label>
            </div>
            <br>
            <div>
                <input type="radio" id="repetition" name="implement" value="incorrect">
                <label for="repetition">Repetition</label>
            </div>
            <br>
            <div>
                <input type="radio" id="alignment" name="implement" value="incorrect">
                <label for="alignment">Alignment</label>
            </div>
            <br>
            <div>
                <input type="radio" id="proximity" name="implement" value="incorrect">
                <label for="proximity">Proximity</label>
            </div>
        </form>
    </div>

    <div class="question">
        <p>A lot of articles are stuffed together on a sidebar on a news website. This is a poor example of _____</p>
        <form>
            <div>
                <input type="radio" id="contrast" name="implement" value="incorrect">
                <label for="contrast">Contrast</label>
            </div>
            <br>
            <div>
                <input type="radio" id="repetition" name="implement" value="incorrect">
                <label for="repetition">Repetition</label>
            </div>
            <br>
            <div>
                <input type="radio" id="alignment" name="implement" value="incorrect">
                <label for="alignment">Alignment</label>
            </div>
            <br>
            <div>
                <input type="radio" id="proximity" name="implement" value="correct">
                <label for="proximity">Proximity</label>
            </div>
        </form>
    </div>

    <div class="question">
        <p>A man is writing an article about how much he hates his boss. Where should the header be?</p>
        <form>
            <div>
                <input type="radio" id="left" name="implement" value="incorrect">
                <label for="left">Left</label>
            </div>
            <br>
            <div>
                <input type="radio" id="right" name="implement" value="incorrect">
                <label for="right">Right</label>
            </div>
            <br>
            <div>
                <input type="radio" id="center" name="implement" value="correct">
                <label for="center">Center</label>
            </div>
            <br>
            <div>
                <input type="radio" id="box" name="implement" value="incorrect">
                <label for="box">Box-Aligned</label>
            </div>
        </form>
    </div>

    <div class="question">
        <p>What is the best way to utilize repetition?</p>
        <form>
            <div>
                <input type="radio" id="same" name="implement" value="incorrect">
                <label for="same">Strictly always the same alignments and set up to each page</label>
            </div>
            <br>
            <div>
                <input type="radio" id="skeleton" name="implement" value="correct">
                <label for="skeleton">A general skeleton, but still enough to spice it up on each page</label>
            </div>
            <br>
            <div>
                <input type="radio" id="chaos" name="implement" value="incorrect">
                <label for="chaos">Pure chaos</label>
            </div>
            <br>
            <div>
                <input type="radio" id="enough" name="implement" value="incorrect">
                <label for="enough">Pretend to know what you are doing enough</label>
            </div>
        </form>
    </div>
    

</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>