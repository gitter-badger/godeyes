function search(){
    var keywords=document.getElementById('keywords').value;
    var types=document.getElementsByName('type');
    for (var i = 0; i < types.length; i++) {
        if (types[i].checked) {
            type=types[i].value;
        };
    };
    var localhost='http://kaleozhou.iok/';
    var localhost='http://localhost/';
    var url=localhost+"search?keywords="+keywords+"&type="+type;
    location.href=url;
}
function keyDown(e){
    if (e.keyCode=='13') {
        search();
    };
}
document.onkeydown=keyDown;
