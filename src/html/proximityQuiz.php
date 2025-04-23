<?php 
    $path = '../../';
    $title = 'Oh CRAP: Proxomity - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>      
<main>
    <section class="cover">
        <h1>Proximity Quiz</h1>
        <img src="../assets/images/prox_quiz_cover.jpg" alt="">
        <button>Start</button>
    </section>

    <?php
        // name for question form
        $questionName = 'proximity-q1';
        $question = 'Q1: Items that are grouped together are considered in the same part of the visual ___________';
        // text, radio, or checkbox
        $questionType = 'text';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [];      // not needed for text inputs, leave it empty
        require('../assets/inc/quizQuestion.inc.php');

        // name for question form
        $questionName = 'proximity-q2';
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

        // name for question form
        $questionName = 'proximity-q3';
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
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>