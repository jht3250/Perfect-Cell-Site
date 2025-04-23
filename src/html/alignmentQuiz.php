<?php 
    $path = '../../';
    $title = 'Oh CRAP: Alignment - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '<script src="../assets/js/quiz.js"></script>';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <section class="cover">
        <h1>Alignment Quiz</h1>
        <img src="../assets/images/align_quiz_cover.jpg" alt="">
        <button class="start" onclick="startQuiz()">Start</button>
    </section>

    <?php 
        $question = 'Q1: True or False, the site should be aligned in a way that guides the users eyes down the page naturally.';
        // text, radio, or checkbox
        $questionType = 'radio';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [
            [
                'id' => 'true', 
                'name' => 'implementation', 
                'value' => 'correct', 
                'label' => 'True'
            ],
            [
                'id' => 'false', 
                'name' => 'implementation', 
                'value' => 'incorrect', 
                'label' => 'False'
            ]
        ];
        require('../assets/inc/quizQuestion.inc.php');

        $question = 'Q2: When is the best time to use center alignment for text?';
        // text, radio, or checkbox
        $questionType = 'radio';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [
            [
                'id' => 'paragraphs', 
                'name' => 'centerAlignment', 
                'value' => 'incorrect', 
                'label' => 'For long paragraphs'
            ],
            [
                'id' => 'headerTitle', 
                'name' => 'centerAlignment', 
                'value' => 'correct', 
                'label' => 'Headers and titles'
            ],
            [
                'id' => 'imgDesc', 
                'name' => 'centerAlignment', 
                'value' => 'incorrect', 
                'label' => 'Image descriptions'
            ],
            [
                'id' => 'quotes', 
                'name' => 'centerAlignment', 
                'value' => 'incorrect', 
                'label' => 'For quotes'
            ]
        ];
        require('../assets/inc/quizQuestion.inc.php');

        $question = 'Q3: You are aligning a large paragraph of text for your website. It should be _______ aligned.';
        // text, radio, or checkbox
        $questionType = 'text';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [];      // not needed for text inputs, leave it empty
        require('../assets/inc/quizQuestion.inc.php');
    ?>

    <div class="list hidden">
        <span class="arrow" onclick="goLeft()">&lt;</span>
        <span class="nums"></span>
        <span class="arrow" onclick="goRight()">&gt;</span>
    </div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>