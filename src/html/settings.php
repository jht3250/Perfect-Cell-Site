<?php 
    $path = '../../';
    $title = 'Oh CRAP: Settings';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/setttings.css">';
    $jsFiles = '<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                <script type="text/javascript" src="../assets/js/languages.js"></script>
                <script src="../assets/js/main.js"></script>';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main class="settings">
    <h1>Settings</h1>
    <h2>Select Language</h2>
    <div id="google_translate_element"></div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>