
const button = document.querySelector('.search-btn');

button.addEventListener("click", function(){
    var key = document.querySelector('.search-txt').value;

    function hilang_spasi(string) {
        return string.split(' ').join('-');
    }

    var search = hilang_spasi(key);

    if (key == '') {
        console.log('Isi Key word');
    }else{
        window.location = '../search/'+search;
    }
});