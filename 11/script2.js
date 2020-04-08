var x =0;
var d = '';

function addDig(d) {
    var el = document.getElementById('inF');
    if (el.value == '0') {
        el.value = d;
    } else {
        el.value += d;
    }
}

function op(a) {
    x = parseFloat(document.getElementById('inF').value);
    d = a;
    document.getElementById('inF').value = '0';
}

function doop(){
    var y = parseFloat(document.getElementById('inF').value);
    var res =0;
    if (d == '+') {
        res = x + y;
    } else if (d == '-'){
        res = x - y;
    }
    // ... case
    document.getElementById('inF').value = res;
}