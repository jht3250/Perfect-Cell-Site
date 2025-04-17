<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/codeTest.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Form Boxes</title>
    <script src="../assets/js/codeTest.js" defer></script>
</head>
<body>
    <section class="container">
        <h1>Sandbox</h1>

        <div class="editor">
            <div class="left">
                <label><i class='bx bxl-html5'></i>HTML</label>
                <textarea onkeyup="run()" spellcheck="false" id="html-code"></textarea>

                <label><i class='bx bxs-file-css'></i>CSS</label>
                <textarea onkeyup="run()" spellcheck="false" id="css-code"></textarea>

                <label><i class='bx bxl-javascript'></i>JavaScript</label>
                <textarea onkeyup="run()" spellcheck="false" id="js-code"></textarea>
            </div>
            <div class="right">
                <label><i class='bx bx-desktop'></i>Output</label>
                <iframe id="output"></iframe>
            </div>
        </div>
    </section>
</body>
</html>