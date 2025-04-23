<?php 
    $path = '../../';
    $title = 'Oh CRAP: Proxomity - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '<script src="../assets/js/quiz.js"></script>';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>      
<main>
    <section class="cover">
        <h1>Proximity Quiz</h1>
        <img src="../assets/images/prox_quiz_cover.jpg" alt="">
        <button class="start" onclick="startQuiz()">Start</button>
    </section>

    <?php
        $question = 'Q1: Items that are grouped together are considered in the same part of the visual ___________';
        // text, radio, or checkbox
        $questionType = 'text';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [];      // not needed for text inputs, leave it empty
        require('../assets/inc/quizQuestion.inc.php');

        $question = 'Q2: Why is it so important to space out items?';
        // text, radio, or checkbox
        $questionType = 'radio';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [
            [
                'id' => 'aesthetic', 
                'name' => 'reason', 
                'value' => 'incorrect', 
                'label' => 'It looks better'
            ],
            [
                'id' => 'space', 
                'name' => 'reason', 
                'value' => 'incorrect', 
                'label' => 'To give the user more space to scroll'
            ],
            [
                'id' => 'interference', 
                'name' => 'reason', 
                'value' => 'correct', 
                'label' => 'So items of different groups do not interfere with others'
            ],
            [
                'id' => 'piling', 
                'name' => 'reason', 
                'value' => 'incorrect', 
                'label' => "Don't worry, let them pile up"
            ]
        ];
        require('../assets/inc/quizQuestion.inc.php');

        $question = 'Q3: If images are too close together you should:';
        // text, radio, or checkbox
        $questionType = 'radio';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [
            [
                'id' => 'separate', 
                'name' => 'cluster', 
                'value' => 'incorrect', 
                'label' => 'Use breaks to separate them'
            ],
            [
                'id' => 'margin', 
                'name' => 'cluster', 
                'value' => 'correct', 
                'label' => 'Add margins or padding to each image'
            ],
            [
                'id' => 'hope', 
                'name' => 'cluster', 
                'value' => 'incorrect', 
                'label' => 'Hope it fixes itself on the user screen'
            ],
            [
                'id' => 'do-nothing', 
                'name' => 'cluster', 
                'value' => 'incorrect', 
                'label' => 'Let it sit like that'
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