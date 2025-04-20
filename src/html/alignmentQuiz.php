<?php 
    $path = '../../';
    $title = 'Oh CRAP: Alignment - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <section class="card">
        <img src="../assets/images/align_quiz_cover.jpg" alt="">
    </section>

    <div class="question">
        <p>True or False, the site should be aligned in a way that guides the users eyes down the page naturally.</p>
        <form>
            <div>
                <input type="radio" id="true" name="implement" value="correct">
                <label for="true">True</label>
            </div>
            <div>
                <input type="radio" id="false" name="implement" value="incorrect">
                <label for="false">False</label>
            </div>

            <button id="Submit">Submit</button>
        </form>
    </div>
    
    <div class="question">
        <p>When is the best time to use center alignment for text?</p>
        <form>
            <div>
                <input type="radio" id="paragraphs" name="contrast" value="incorrect">
                <label for="paragraphs">For long Paragraphs</label>
            </div>
            <br>
            <div>
                <input type="radio" id="headerTitle" name="contrast" value="correct">
                <label for="headerTitle">Headers and titles</label>
            </div>
            <br>
            <div>
                <input type="radio" id="imgDesc" name="contrast" value="incorrect">
                <label for="imgDesc">Image descriptions</label>
            </div>
            <br>
            <div>
                <input type="radio" id="quotes" name="contrast" value="incorrect">
                <label for="quotes">For quotes</label>
            </div>
        
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>You are aligning a large paragraph of text for your website. It should be _______ aligned.</p>
        <form>
            <div>
                <label for="answer">Answer:</label>
                <input type="text" id="answer" name="answer">
            </div>
            
            <button id="Submit">Submit</button>
        </form>
    </div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>