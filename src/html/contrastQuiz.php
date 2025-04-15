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
        <p>What could happen if contrast is not properly implemented?</p>
        <form>
            <div>
                <input type="radio" id="engagement" name="implement" value="engagement">
                <label for="engagement">The page becomes more engaging</label>
            </div>
            <div>
                <input type="radio" id="details" name="implement" value="details">
                <label for="details">Important Details could get lost or overlooked</label>
            </div>
            <div>
                <input type="radio" id="navigate" name="implement" value="navigate">
                <label for="navigate">Users can navigate the page easier</label>
            </div>
            <div>
                <input type="radio" id="brand" name="implement" value="brand">
                <label for="brand">The brand identity becomes stronger</label>
            </div>
            
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>Contrast is about making certain elements ______ from other elements to highlight important information.</p>
        <form>
            <div>
                <input type="radio" id="blends" name="contrast" value="blends">
                <label for="blends">Blend in</label>
            </div>
            <div>
                <input type="radio" id="standOut" name="contrast" value="standOut">
                <label for="standOut">Stand Out</label>
            </div>
            <div>
                <input type="radio" id="disappear" name="contrast" value="disappear">
                <label for="disappear">Disappear</label>
            </div>
            <div>
                <input type="radio" id="uniform" name="contrast" value="uniform">
                <label for="uniform">Be Uniform</label>
            </div>
            
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>Which of the following are ways to create contrast?</p>
        <form>
            <div>
                <input type="checkbox" id="weight" name="contrast" value="weight">
                <label for="weight">Not changing size and weight</label>
            </div>
            <div>
                <input type="checkbox" id="shapes" name="contrast" value="shapes">
                <label for="shapes">Using different shapes like circles and squares</label>
            </div>
            <div>
                <input type="checkbox" id="balance" name="contrast" value="balance">
                <label for="balance">Finding a proper color balance</label>
            </div>
            <div>
                <input type="checkbox" id="fonts" name="contrast" value="fonts">
                <label for="fonts">Applying different fonts and styles</label>
            </div>
            
            <button id="Submit">Submit</button>
        </form>
    </div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>