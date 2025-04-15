<?php 
    $path = '../../';
    $title = 'Oh CRAP: Contrast - Practice';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/practice.css">';
    $jsFiles = '<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                <script type="text/javascript" src="../assets/js/languages.js"></script>
                <script src="../assets/js/main.js"></script>';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <h1>Try it for yourself!</h1>

    <section class="contrast-codepen">

    </section>

    <a href="contrastQuiz.html" class="button">Take Quiz</a>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>