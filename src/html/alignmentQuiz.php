<?php 
    $path = '../../';
    $title = 'Oh CRAP: Alignment - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                <script type="text/javascript" src="../assets/js/languages.js"></script>
                <script src="../assets/js/main.js"></script>';

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
            <input type="radio" id="true" name="impliment" value="t">
            <label for="true">True</label>
            <input type="radio" id="false" name="impliment" value="f">
            <label for="false">False</label>
        </form>
    </div>
    
    <div class="question">
        <p>When is the best time to use center alignment for text?</p>
        <form>
            <input type="radio" id="paragraph" name="contrast" value="paragraphs">
            <label for="paragraph">For long Paragraphs</label>
            <input type="radio" id="handt" name="contrast" value="handTitle">
            <label for="repetitive">Headers and titles</label>
            <input type="radio" id="imgdesc" name="contrast" value="img">
            <label for="imgdesc">Image descriptions</label>
            <input type="radio" id="quotes" name="contrast" value="quote">
            <label for="quotes">For quotes</label>
            <button id="Submit">Submit</button>
        </form>
    </div>

    <div class="question">
        <p>You are aligning a large paragraph of text for your website. It should be _______ aligned.</p>
        <form>
            <label for="answer">Answer:</label><br>
            <input type="text" id="answer" name="answer">
            <button id="Submit">Submit</button>
        </form>
    </div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>