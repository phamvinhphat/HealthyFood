var a = "ss";
var b = "s2";

var taikhoan = document.getElementById("taikhoan").value;
var matkhau = document.getElementById("matkhau").value;

var login = document.getElementById("login").value;

if(login.attachEvent){
    login.attachEvent('submit',onFormSubmit);
} else {
    login.addEventListener('submit',onFormSubmit);
}

function onFormSubmit(e){
    var tk = taikhoan.value;
    var mk = matkhau.value;

    if(tk == a && mk == b){
        alert('thanh cong');
    } else {
        alert('that bai');
    }

}