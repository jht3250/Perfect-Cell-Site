<?php 
    $path = '../../';
    $title = 'Oh CRAP: Contrast - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '<script src="../assets/js/quiz.js"></script>';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <section class="cover">
        <h1>Contrast Quiz</h1>
        <img src="../assets/images/contrast_quiz_cover.jpg" alt="">
        <button class="start" onclick="startQuiz()">Start</button>
    </section>

    <?php
        $question = 'Q1: What could happen if contrast is not properly implemented?';
        // text, radio, or checkbox
        $questionType = 'radio';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [
            [
                'id' => 'engagement', 
                'name' => 'implementation', 
                'value' => 'incorrect', 
                'label' => 'The page becomes more engaging'
            ],
            [
                'id' => 'details', 
                'name' => 'implementation', 
                'value' => 'correct', 
                'label' => 'Important details could get lost or overlooked'
            ],
            [
                'id' => 'navigate', 
                'name' => 'implementation', 
                'value' => 'incorrect', 
                'label' => 'Users can navigate the page easier'
            ],
            [
                'id' => 'brand', 
                'name' => 'implementation', 
                'value' => 'incorrect', 
                'label' => 'The brand identity becomes stronger'
            ]
        ];
        require('../assets/inc/quizQuestion.inc.php');

        $question = 'Q2: Contrast is about making certain elements ______ from other elements to highlight important information.';
        // text, radio, or checkbox
        $questionType = 'radio';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [
            [
                'id' => 'blends', 
                'name' => 'contrast', 
                'value' => 'incorrect', 
                'label' => 'Blend in'
            ],
            [
                'id' => 'standOut', 
                'name' => 'contrast', 
                'value' => 'correct', 
                'label' => 'Stand out'
            ],
            [
                'id' => 'disappear', 
                'name' => 'contrast', 
                'value' => 'incorrect', 
                'label' => 'Disappear'
            ],
            [
                'id' => 'uniform', 
                'name' => 'contrast', 
                'value' => 'incorrect', 
                'label' => 'Be uniform'
            ]
        ];
        require('../assets/inc/quizQuestion.inc.php');

        $question = 'Q3: Which of the following are ways to create contrast?';
        // text, radio, or checkbox
        $questionType = 'checkbox';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [
            [
                'id' => 'weight', 
                'name' => 'weight', 
                'value' => 'incorrect', 
                'label' => 'Not changing size and weight'
            ],
            [
                'id' => 'shapes', 
                'name' => 'shapes', 
                'value' => 'correct', 
                'label' => 'Using different shapes like circles and squares'
            ],
            [
                'id' => 'balance', 
                'name' => 'balance', 
                'value' => 'incorrect', 
                'label' => 'Finding a proper color balance'
            ],
            [
                'id' => 'fonts', 
                'name' => 'fonts', 
                'value' => 'incorrect', 
                'label' => 'Applying different fonts and styles'
            ]
        ];
        require('../assets/inc/quizQuestion.inc.php');
    ?>

    <div class="list hidden">
        <span class="arrow" onclick="goLeft()">&lt;</span>
        <span class="nums"></span>
        <span class="arrow" onclick="goRight()">&gt;</span>
    </div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>