<?php 
    $path = '../../';
    $title = 'Oh CRAP: Contrast - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '';

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
                <input type="radio" id="engagement" name="implement" value="incorrect">
                <label for="engagement">The page becomes more engaging</label>
            </div>
            <br>
            <div>
                <input type="radio" id="details" name="implement" value="correct">
                <label for="details">Important Details could get lost or overlooked</label>
            </div>
            <br>
            <div>
                <input type="radio" id="navigate" name="implement" value="incorrect">
                <label for="navigate">Users can navigate the page easier</label>
            </div>
            <br>
            <div>
                <input type="radio" id="brand" name="implement" value="incorrect">
                <label for="brand">The brand identity becomes stronger</label>
            </div>

            
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>Contrast is about making certain elements ______ from other elements to highlight important information.</p>
        <form>
            <div>
                <input type="radio" id="blends" name="contrast" value="incorrect">
                <label for="blends">Blend in</label>
            </div>
            <div>
                <input type="radio" id="standOut" name="contrast" value="correct">
                <label for="standOut">Stand Out</label>
            </div>
            <div>
                <input type="radio" id="disappear" name="contrast" value="incorrect">
                <label for="disappear">Disappear</label>
            </div>
            <div>
                <input type="radio" id="uniform" name="contrast" value="incorrect">
                <label for="uniform">Be Uniform</label>
            </div>
            
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>Which of the following are ways to create contrast?</p>
        <form>
            <div>
                <input type="checkbox" id="weight" name="contrast" value="incorrect">
                <label for="weight">Not changing size and weight</label>
            </div>
            <div>
                <input type="checkbox" id="shapes" name="contrast" value="correct">
                <label for="shapes">Using different shapes like circles and squares</label>
            </div>
            <div>
                <input type="checkbox" id="balance" name="contrast" value="correct">
                <label for="balance">Finding a proper color balance</label>
            </div>
            <div>
                <input type="checkbox" id="fonts" name="contrast" value="correct">
                <label for="fonts">Applying different fonts and styles</label>
            </div>
            
            <button id="Submit">Submit</button>
        </form>
    </div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>