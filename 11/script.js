
function btnPress(){
    var el = document.getElementById('res');
    var val = parseInt(el.innerText) + 1;
    el.innerText = val;

    //document.getElementById('res').innerText = parseInt(document.getElementById('res').innerText) + 1;
}

function changeColor(el) {
    console.info(el.style.color);
    el.style.color = '#f99';
    console.info(el.style.color);
}