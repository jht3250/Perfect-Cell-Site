<?php 
    $path = '../../';
    $title = 'Oh CRAP: Proxomity - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>      
<main>
    <section class="card">
        <img src="../assets/images/prox_quiz_cover.jpg" alt="">
    </section>

    <div class="question">
        <p>Items that are grouped together are considered in the same part of the visual ___________</p>
        <form>
            <div>
                <label for="answer">Answer:</label>
                <input type="text" id="answer" name="answer">
            </div>

            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>Why is it so important to space out items?</p>
        <form>
            <div>
                <input type="radio" id="better" name="contrast" value="incorrect">
                <label for="better">It looks better</label>
            </div>
            <div>
                <input type="radio" id="space" name="contrast" value="incorrect">
                <label for="space">To give the user more space to scroll</label>
            </div>
            <div>
                <input type="radio" id="items" name="contrast" value="correct">
                <label for="items">So items of different groups do not interfere with others</label>
            </div>
            <div>
                <input type="radio" id="pile" name="contrast" value="incorrect">
                <label for="pile">Don't worry, let them pile up</label>
            </div>
            
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>If images are too close together you should:</p>
        <form>
            <div>
                <input type="radio" id="breaks" name="contrast" value="incorrect">
                <label for="breaks">Use breaks to separate them</label>
            </div>
            <div>
                <input type="radio" id="margins" name="contrast" value="correct">
                <label for="margins">Add margins or padding to each image</label>
            </div>
            <div>
                <input type="radio" id="hope" name="contrast" value="incorrect">
                <label for="hope">Hope it fixes itself on the user screen</label>
            </div>
            <div>
                <input type="radio" id="positioning" name="contrast" value="incorrect">
                <label for="positioning">Let it sit like that</label>
            </div>
            
            <button id="Submit">Submit</button>
        </form>
    </div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>