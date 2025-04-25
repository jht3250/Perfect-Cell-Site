<main class="practice">
    <h4>Try it yourself!</h4>

    <section class="container">
        <!-- <div class="editor"> -->
            <div class="left">
                <label for="html-code">HTML</label>
                <textarea onkeyup="run()" spellcheck="false" id="html-code" rows="20" cols="30"></textarea>

                <label for="css-code"></i>CSS</label>
                <textarea onkeyup="run()" spellcheck="false" id="css-code" rows="15" cols="30"></textarea>

                <label for="js-code">JavaScript</label>
                <textarea onkeyup="run()" spellcheck="false" id="js-code" rows="10" cols="30"></textarea>
            </div>
            <div class="right">
                <label>Output</label>
                <iframe id="output"></iframe>
            </div>
        <!-- </div> -->
    </section>

    <p class="mobile">This Feature Is Only Available On Desktop Version : &#40;</p>

    <a href="<?php echo $quizFile; ?>" class="button">Take Quiz</a>
</main>