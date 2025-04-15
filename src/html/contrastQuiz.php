<?php 
    $path = '../../';
    $title = 'Oh CRAP: Contrast - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                <script type="text/javascript" src="../assets/js/languages.js"></script>
                <script src="../assets/js/main.js"></script>';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <section class="card">
        <img src="../assets/images/contrast_quiz_cover.jpg" alt="">
    </section>
    
    <div class="question">
        <p>What could happen if contrast is not properly implimented?</p>
        <form>
            <input type="radio" id="engage" name="impliment" value="engagement">
            <label for="engage">The page becomes more engaging</label>
            <input type="radio" id="detail" name="impliment" value="details">
            <label for="detail">Important Details could get lost or overlooked</label>
            <input type="radio" id="navigate" name="impliment" value="navigation">
            <label for="navigate">Users can navigate the page easier</label>
            <input type="radio" id="brand" name="impliment" value="branding">
            <label for="brand">The brand identity becomes stronger</label>
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>Contrast is about making certain elements ______ from other elements to highlight important information.</p>
        <form>
            <input type="radio" id="blend" name="contrast" value="blends">
            <label for="blend">Blend in</label>
            <input type="radio" id="StandOut" name="contrast" value="Stand">
            <label for="StandOut">Stand Out</label>
            <input type="radio" id="dissapear" name="contrast" value="vanish">
            <label for="dissapear">Dissapear</label>
            <input type="radio" id="uniform" name="contrast" value="uni">
            <label for="uniform">Be Uniform</label>
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>Which of the following are ways to create contrast?</p>
        <form>
            <input type="checkbox" id="text" name="contrast" value="weight">
            <label for="text">Not changing size and weight</label>
            <input type="checkbox" id="shapes" name="contrast" value="shape">
            <label for="shapes">Using different shapes like circles and squares</label>
            <input type="checkbox" id="color" name="contrast" value="colors">
            <label for="color">Finding a proper color balance</label>
            <input type="checkbox" id="font" name="contrast" value="fonts">
            <label for="font">Applying different fonts and styles</label>
            <button id="Submit">Submit</button>
        </form>
    </div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>