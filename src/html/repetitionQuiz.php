<?php 
    $path = '../../';
    $title = 'Oh CRAP: Repetition - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <section class="card">
        <img src="../assets/images/rep_quiz_cover.jpg" alt="">
    </section>

    <?php
        // name for question form
        $questionName = 'repetition-q1';
        $question = 'Using repetition correctly can establish ______ and unity in design.';
        // text, radio, or checkbox
        $questionType = 'radio';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [
            [
                'id' => 'balance', 
                'name' => 'implementation', 
                'value' => 'incorrect', 
                'label' => 'Balance'
            ],
            [
                'id' => 'consistancy', 
                'name' => 'implementation', 
                'value' => 'correct', 
                'label' => 'Consistancy'
            ],
            [
                'id' => 'symmetry', 
                'name' => 'implementation', 
                'value' => 'incorrect', 
                'label' => 'Symmetry'
            ],
            [
                'id' => 'structure', 
                'name' => 'implementation', 
                'value' => 'incorrect', 
                'label' => 'Structure'
            ]
        ];
        require('../assets/inc/quizQuestion.inc.php');

        // name for question form
        $questionName = 'repetition-q2';
        $question = 'What can happen if repetition is overused?';
        // text, radio, or checkbox
        $questionType = 'radio';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [
            [
                'id' => 'uninteresting', 
                'name' => 'overused', 
                'value' => 'correct', 
                'label' => 'Design becomes uninteresting'
            ],
            [
                'id' => 'navigate', 
                'name' => 'overused', 
                'value' => 'incorrect', 
                'label' => 'The website is easy for the user to navigate'
            ],
            [
                'id' => 'retain', 
                'name' => 'overused', 
                'value' => 'incorrect', 
                'label' => 'Users interest will be retain'
            ],
            [
                'id' => 'perfect', 
                'name' => 'overused', 
                'value' => 'incorrect', 
                'label' => 'The design is perfected without any CSS anyways'
            ]
        ];
        require('../assets/inc/quizQuestion.inc.php');

        // name for question form
        $questionName = 'repetition-q3';
        $question = 'In which areas can repetition be effectively used?';
        // text, radio, or checkbox
        $questionType = 'checkbox';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [
            [
                'id' => 'fonts', 
                'name' => 'areas', 
                'value' => 'correct', 
                'label' => 'Fonts styles and text'
            ],
            [
                'id' => 'ui-pattern', 
                'name' => 'areas', 
                'value' => 'incorrect', 
                'label' => 'UI patterns such as buttons and line breaks'
            ],
            [
                'id' => 'colors', 
                'name' => 'areas', 
                'value' => 'incorrect', 
                'label' => 'Randomizing colors across each page'
            ],
            [
                'id' => 'image-style', 
                'name' => 'areas', 
                'value' => 'incorrect', 
                'label' => 'Consistent image style (e.g. cartoon or real-life)'
            ]
        ];
        require('../assets/inc/quizQuestion.inc.php');
    ?>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>