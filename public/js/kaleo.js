function search(){
    var keywords=document.getElementById('keywords').value;
    var url="http://localhost/search?keywords="+keywords;
    location.href=url;
}
