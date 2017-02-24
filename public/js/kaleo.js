function search(){
    
    var keywords=document.getElementById('keywords').value;

    var types=document.getElementsByName('type');
    for (var i = 0; i < types.length; i++) {
        if (types[i].checked) {
            type=types[i].value;
        };
    };
    var url="http://localhost/search?keywords="+keywords+"&type="+type;
    location.href=url;
}

