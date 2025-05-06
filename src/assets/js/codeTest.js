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
    "    <title>Document</title>\n"
    "</head>\n" +
    "<body>\n" +
    "    <h1>Good Examples of CRAP Principles</h1>\n" +
    "    <h2>Contrast</h2>\n" +
    "    <p>This example has good contrast between the text and background, making it easy to read.</p>\n" +
    "    <div class=\"high-contrast\">\n" +
    "        <p>This text is easy to read because it has high contrast with the background.</p>\n" +
    "    </div>\n" +
    "    <hr>\n" +
    "    <h2>Repetition</h2>\n" +
    "    <p>This example has good repetition in design elements, making it look consistent.</p>\n" +
    "    <div class=\"consistent-repetition\">\n" +
    "        <p>This text is in Arial, and the next text is also in Arial.</p>\n" +
    "        <p class=\"arial-text\">This text is in Arial.</p>\n" +
    "    </div>\n" +
    "    <hr>\n" +
    "    <h2>Alignment</h2>\n" +
    "    <p>This example has good alignment, making it look professional.</p>\n" +
    "    <div class=\"good-alignment\">\n" +
    "        <p>This text is aligned to the left, and the next text is also aligned to the left.</p>\n" +
    "        <p class=\"left-aligned-text\">This text is left-aligned.</p>\n" +
    "    </div>\n" +
    "    <hr>\n" +
    "    <h2>Proximity</h2>\n" +
    "    <p>This example has good proximity, making it easy to understand the relationship between elements.</p>\n" +
    "    <div class=\"good-proximity\">\n" +
    "        <p class=\"related-text\">This text is related to the next text.</p>\n" +
    "        <p>This text is also related to the previous text.</p>\n" +
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
}

function run() {
    // collect the code written in the textareas
    let htmlCode = document.getElementById("html-code");
    let cssCode = document.getElementById("css-code");
    let jsCode = document.getElementById("js-code");
    // output window
    let output = document.getElementById("output");

    // run html and css in the output window
    output.contentDocument.body.innerHTML = htmlCode.value + "<style>" + cssCode.value + "</style>";

    // run js in the output window
    output.contentWindow.eval(jsCode.value);
}