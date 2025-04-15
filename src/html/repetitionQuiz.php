<?php 
    $path = '../../';
    $title = 'Oh CRAP: Repetition - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                <script type="text/javascript" src="../assets/js/languages.js"></script>
                <script src="../assets/js/main.js"></script>';

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
            <input type="radio" id="balance" name="impliment" value="balance">
            <label for="balance">Balance</label>
            <input type="radio" id="consistancy" name="impliment" value="consistancy">
            <label for="consistancy">Consistancy</label>
            <input type="radio" id="symmetry" name="impliment" value="symmetry">
            <label for="symmetry">Symmetry</label>
            <input type="radio" id="structure" name="impliment" value="structure">
            <label for="structure">Structure</label>
            <button id="Submit">Submit</button>
        </form>
    </div>
    
    <div class="question">
        <p>What can happen if repetition is overused?</p>
        <form>
            <input type="radio" id="design" name="contrast" value="blends">
            <label for="design">Design becomes uninteresting</label>
            <input type="radio" id="repetitive" name="contrast" value="Stand">
            <label for="repetitive">The website becomes overly repetitve</label>
            <input type="radio" id="interest" name="contrast" value="interest">
            <label for="interest">Users may lose interest</label>
            <input type="radio" id="navi" name="contrast" value="nav">
            <label for="navi">Navigation could feel to predictable</label>
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>In which areas can repetition be effectively used? (Select all that apply)</p>
        <form>
            <input type="checkbox" id="text" name="contrast" value="weight">
            <label for="text">Fonts styles and text</label>
            <input type="checkbox" id="shapes" name="contrast" value="shape">
            <label for="shapes">UI patterns such as buttons and line breaks</label>
            <input type="checkbox" id="color" name="contrast" value="colors">
            <label for="color">Randomizing colors across each page</label>
            <input type="checkbox" id="font" name="contrast" value="fonts">
            <label for="font">Consistent image types (e.g. cartoon or real-life)</label>
            <button id="Submit">Submit</button>
        </form>
    </div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>