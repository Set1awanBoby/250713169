var nodeLuas;
var nodeKeliling;
var x;

function init() {
    nodeLuas = document.getElementById("hasilLuas").firstChild;
    nodeKeliling = document.getElementById("hasilKeliling").firstChild;
    x = document.getElementById("kotakVisual");
    hitungGeometri();
}

function hitungGeometri() {
    var p = parseFloat(document.getElementById("panjang").value);
    var l = parseFloat(document.getElementById("lebar").value);

    var luas = p * l;;
    var keliling = 2 * (p + l);

    nodeLuas.data = luas;
    nodeKeliling.data = keliling;

    
    x.style.width = (10 * p) + "px";
    x.style.height = (10 * l) + "px";
}

