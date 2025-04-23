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

    <?php 
        // name for question form
        $questionName = 'alignment-q1';
        $question = 'True or False, the site should be aligned in a way that guides the users eyes down the page naturally.';
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

        // name for question form
        $questionName = 'alignment-q2';
        $question = 'When is the best time to use center alignment for text?';
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

        // name for question form
        $questionName = 'alignment-q3';
        $question = 'You are aligning a large paragraph of text for your website. It should be _______ aligned.';
        // text, radio, or checkbox
        $questionType = 'text';
        // name for radio is group (common)
        // name for checkbox is individual (unique)
        $options = [];      // not needed for text inputs, leave it empty
        require('../assets/inc/quizQuestion.inc.php');
    ?>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>