var loding      = document.querySelector('.loding');
var timer       = document.querySelector('#timer');
var password    = document.querySelector('#password');
var aye         = document.querySelector('#aye');
var axss        = document.querySelector('#axs').src =  'https://dl.bahalmag.ir/images/%D8%B9%DA%A9%D8%B3_%D9%BE%D8%B1%D9%88%D9%81%D8%A7%DB%8C%D9%84_%D9%BE%D8%B3%D8%B1%D8%A7%D9%86%D9%87_%D9%84%D8%A7%D8%AA%DB%8C_%D8%A8%D8%A7_%D9%85%D8%AA%D9%86_%D8%AE%D9%81%D9%86/%D8%B9%DA%A9%D8%B3-%D9%BE%D8%B1%D9%88%D9%81%D8%A7%DB%8C%D9%84-%D9%BE%D8%B3%D8%B1%D8%A7%D9%86%D9%87-%D9%84%D8%A7%D8%AA%DB%8C-%D8%A8%D8%A7-%D9%85%D8%AA%D9%86-%D8%AE%D9%81%D9%86.jpg';
let ayes        = 1;
let saniye      = 0;
let daghighe    = 0;
let saaat       = 0;
aye.addEventListener('click', function () {
    if (ayes == 1) {
        this.classList.remove('bi-eye-fill');
        this.classList.add('bi-eye-slash');
        password.type = 'text';
        return ayes = 0
    }
    this.classList.remove('bi-eye-slash');
    this.classList.add('bi-eye-fill');
    password.type = 'password';
    return ayes = 1;
}
)
setInterval(function () {
    saniye += 1;
    if (saniye == 60) {
        daghighe++;
        saniye = 0;
    }
    if (daghighe == 60) {
        saaat++;
        daghighe = 0;
    }
    timer.innerHTML = (saaat + " : " + daghighe + " : " + saniye)
}, 1000)


loding.classList.add("loded"); 




