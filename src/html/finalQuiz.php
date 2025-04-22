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
            
            <button id="Submit">Submit</button>
        </form>
    </div>

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
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>