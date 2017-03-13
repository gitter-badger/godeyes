function search(){
    var host=document.getElementById('host').value;
    var keywords=document.getElementById('keywords').value;
    var types=document.getElementsByName('type');
    for (var i = 0; i < types.length; i++) {
        if (types[i].checked) {
            type=types[i].value;
        };
    };
    var url=host+"/search?keywords="+keywords+"&type="+type;
    location.href=url;
}
function keyDown(e){
    if (e.keyCode=='13') {
        search();
    };
}
document.onkeydown=keyDown;
