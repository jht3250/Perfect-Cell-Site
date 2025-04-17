<?php 
    $path = '../../';
    $title = 'Oh CRAP: Repetition - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <section class="card">
        <img src="../assets/images/rep_quiz_cover.jpg" alt="">
    </section>
    
    <div class="question">
        <p>Using repetition correctly can establish ______ and unity in design.</p>
        <form>
            <div>
                <input type="radio" id="balance" name="implement" value="balance">
                <label for="balance">Balance</label>
            </div>
            <div>
                <input type="radio" id="consistancy" name="implement" value="consistancy">
                <label for="consistancy">Consistancy</label>
            </div>
            <div>
                <input type="radio" id="symmetry" name="implement" value="symmetry">
                <label for="symmetry">Symmetry</label>
            </div>
            <div>
                <input type="radio" id="structure" name="implement" value="structure">
                <label for="structure">Structure</label>
            </div>

            <button id="Submit">Submit</button>
        </form>
    </div>
    
    <div class="question">
        <p>What can happen if repetition is overused?</p>
        <form>
            <div>
                <input type="radio" id="design" name="contrast" value="design">
                <label for="design">Design becomes uninteresting</label>
            </div>
            <div>
                <input type="radio" id="repetitive" name="contrast" value="repetitive">
                <label for="repetitive">The website becomes overly repetitve</label>
            </div>
            <div>
                <input type="radio" id="interest" name="contrast" value="interest">
                <label for="interest">Users may lose interest</label>
            </div>
            <div>
                <input type="radio" id="nav" name="contrast" value="nav">
                <label for="nav">Navigation could feel to predictable</label>
            </div>
            
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>In which areas can repetition be effectively used? (Select all that apply)</p>
        <form>
            <div>
                <input type="checkbox" id="fonts" name="contrast" value="fonts">
                <label for="fonts">Fonts styles and text</label>
            </div>
            <div>
                <input type="checkbox" id="shapes" name="contrast" value="shapes">
                <label for="shapes">UI patterns such as buttons and line breaks</label>
            </div>
            <div>
                <input type="checkbox" id="colors" name="contrast" value="colors">
                <label for="colors">Randomizing colors across each page</label>
            </div>
            <div>
                <input type="checkbox" id="image" name="contrast" value="image">
                <label for="image">Consistent image types (e.g. cartoon or real-life)</label>
            </div>
            
            <button id="Submit">Submit</button>
        </form>
    </div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>