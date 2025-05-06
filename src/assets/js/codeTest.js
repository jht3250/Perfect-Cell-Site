function init() {
    // collect the code written in the textareas
    let htmlCode = document.getElementById("html-code");
    let cssCode = document.getElementById("css-code");
    let jsCode = document.getElementById("js-code");
    // set placeholder code on load
    htmlCode.value = 
    "<!DOCTYPE html>\n" +
    "<html lang=\"en\">\n" +
    "<head>\n" +
    "    <meta charset=\"UTF-8\">\n" +
    "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n" +
    "    <title>Document</title>\n" +
    "</head>\n" +
    "<body>\n" +
    "    <h1>Bad Examples of CRAP Principles</h1>\n" +
    "    <h2>Contrast</h2>\n" +
    "    <p>This example has poor contrast between the text and background, making it hard to read.</p>\n" +
    "    <div class=\"low-contrast\">\n" +
    "        <p>This text is hard to read because it has low contrast with the background.</p>\n" +
    "    </div>\n" +
    "    <hr>\n" +
    "    <h2>Repetition</h2>\n" +
    "    <p>This example lacks repetition in design elements, making it look inconsistent.</p>\n" +
    "    <div class=\"inconsistent-repetition\">\n" +
    "        <p>This text is in Arial, but the next text is in Times New Roman.</p>\n" +
    "        <p class=\"times-new-roman\">This text is in Times New Roman.</p>\n" +
    "    </div>\n" +
    "    <hr>\n" +
    "    <h2>Alignment</h2>\n" +
    "    <p>This example has poor alignment, making it look unprofessional.</p>\n" +
    "    <div class=\"poor-alignment\">\n" +
    "        <p>This text is aligned to the left, but the next text is centered.</p>\n" +
    "        <p class=\"centered-text\">This text is centered.</p>\n" +
    "    </div>\n" +
    "    <hr>\n" +
    "    <h2>Proximity</h2>\n" +
    "    <p>This example has poor proximity, making it hard to understand the relationship between elements.</p>\n" +
    "    <div class=\"poor-proximity\">\n" +
    "        <p class=\"related-text\">This text is related to the next text.</p>\n" +
    "        <p>This text is not related to the previous text.</p>\n" +
    "    </div>\n" +
    "    <hr>\n" +
    "</body>\n" +
    "</html>";
    // css code
    cssCode.value = 
    ".low-contrast {\n" +
    "    background-color: lightgray;\n" +
    "    color: rgb(187, 186, 186);\n" +
    "    padding: 20px;\n" +
    "}\n" +
    "\n" +
    ".inconsistent-repetition {\n" +
    "    font-family: Arial;\n" +
    "    font-size: 16px;\n" +
    "    color: blue;\n" +
    "    padding: 20px;\n" +
    "}\n" +
    "\n" +
    ".inconsistent-repetition .times-new-roman {\n" +
    "    font-family: 'Times New Roman';\n" +
    "}\n" +
    "\n" +
    ".poor-alignment {\n" +
    "    text-align: left;\n" +
    "    padding: 20px;\n" +
    "}\n" +
    "\n" +
    ".poor-alignment .centered-text {\n" +
    "    text-align: center;\n" +
    "}\n" +
    "\n" +
    ".poor-proximity {\n" +
    "    padding: 20px;\n" +
    "}\n" +
    "\n" +
    ".poor-proximity .related-text {\n" +
    "    margin-bottom: 10px;\n" +
    "}\n" +
    "\n";
    run();
}

function run() {
    // collect the code written in the textareas
    let htmlCode = document.getElementById("html-code");
    let cssCode = document.getElementById("css-code");
    let jsCode = document.getElementById("js-code");
    // output window
    let output = document.getElementById("output");

    // run html and css in the output window
    output.contentDocument.body.innerHTML = htmlCode.value + "<style>" + cssCode.value + "</style>" + "<script>" + jsCode.value + "</script>";

    // run js in the output window
    output.contentWindow.eval(jsCode.value);
}

document.addEventListener("DOMContentLoaded", init);
