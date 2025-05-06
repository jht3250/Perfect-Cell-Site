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