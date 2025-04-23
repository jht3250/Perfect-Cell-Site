<div class="question hidden">
    <h2>
        <?php 
            echo $question; 
            if ($questionType === 'checkbox') echo ' (select all that applies)';
        ?>
    </h2>
    <form name="<?php echo $questionName; ?>" action="#" method="POST">
        <?php
            if ($questionType === 'text') {
                require($path . 'src/assets/inc/text.inc.php');
            } else {
                for ($i = 0, $l = count($options); $i < $l; $i++) {
                    require($path . 'src/assets/inc/option.inc.php');
                }
            }
        ?>
        <input type="submit" class="button" value="Check">
    </form>
</div>