//your javascript goes here
// tab sekarang sama dengan berapa
var currentTab = 0;

// load document berdasarkan current tab
document.addEventListener("DOMContentLoaded", function(event) {
    showTab(currentTab);
});

// menampilkan tab
function showTab(n) {
    var x = document.getElementsByClassName("tab");
    var y = document.getElementById("nextBtn");
    //

    // mengilangkan tanda peringatan warning
    document.getElementById("warning").style.display = "none" ;

    // mendisplay block
    x[n].style.display = "block";

    // menghilankan button preview di tab pertama
    // if (n == 0) {
    //     document.getElementById("prevBtn").style.display = "none";

     // menampilkan button ketika sudah tidak di tab pertama
    // } else {
    //     document.getElementById("prevBtn").style.display = "inline";

    // }

    // Menampilkan submit di final tab atau akhir tab
    if (n == (x.length - 1)) {
        y.innerHTML = "Submit";

    // Menampilkan Next jika bukan final tab
    } else {
        y.innerHTML = "Next";
        $(window).scrollTop(0);
    }
}

// @param n integer
// function next atau prev
function nextPrev(nilaiTab) {
var tab, registerForm;
tab = document.getElementsByClassName("tab");
registerForm = document.getElementById("regForm");

submitForm = document.getElementById('nextBtn')

// Cek validate form is not valid
if (nilaiTab == 1 && !validateForm() ) return false;

tab[currentTab].style.display = "none";
currentTab = currentTab + nilaiTab;

if(currentTab == 7){
    document.getElementById("register").innerHTML = "Tentukan Genre Yang Anda Sukai";
}

// cek if current tab is finish
if (currentTab >= tab.length) {

    submitForm.setAttribute('type', 'submit');
    document.getElementById("nextprevious").style.display = "none";
    document.getElementById("register").style.display = "none";
    document.getElementById("text-message").style.display = "block";
        if (document.getElementById("text-message").style.display = "block"){
            $(window).scrollTop(0);
        }
    }
    showTab(currentTab);
}

// validasi form
function validateForm() {
    var tab, input, warning, valid1, valid2;
    valid1 = tab1();
    valid2 = genre1();
    tab = document.getElementsByClassName("tab");
    warning = document.getElementById("warning");
    input = tab[currentTab].getElementsByTagName("input");


    if (currentTab == 0){
        valid1 = true;
        valid2 = true;
    }

    for (i = 0; i < input.length; i++){

        if (input[i].value =="" || valid1 == false || valid2 == false)
        {
            $(window).scrollTop(0); input[i].className +=" invalid" ; warning.style.display = "block"; return false;
        }

    }

    return true;
}

var openes = [];
var cons = [];
var extra = [];
var aggre = [];
var neur = [];
function tab1() {

    var x = document.getElementsByClassName("tab");
    var radioStmt1 = x[currentTab].getElementsByClassName("statement1");
    var radioStmt2 = x[currentTab].getElementsByClassName("statement2");
    var radioStmt3 = x[currentTab].getElementsByClassName("statement3");
    var radioStmt4 = x[currentTab].getElementsByClassName("statement4");
    var radioStmt5 = x[currentTab].getElementsByClassName("statement5");

    let data1,data2,data3,data4,data5;

    // mengecek jika radio buttonya tidak ada dalam tab
    if (radioStmt1.length > 0){

        // perulangan untuk mengecek isi radio button di isi atau tidak
        for (let index = 0; index < radioStmt1.length; index++) {

                if(radioStmt1[index].checked == true){
                    data1 = 1;
                    openes.push(radioStmt1[index].value);
                }

                if(radioStmt2[index].checked == true){
                    data2 = 1;
                    cons.push(radioStmt2[index].value);
                }

                if(radioStmt3[index].checked == true){
                    data3 = 1;
                    extra.push(radioStmt2[index].value);
                }

                if(radioStmt4[index].checked == true){
                    data4 = 1;
                    aggre.push(radioStmt2[index].value);
                }
                if(radioStmt5[index].checked == true){
                    data5 = 1;
                    neur.push(radioStmt2[index].value);
                }

        }


    let result = data1+data2+data3+data4+data5;

    if (result > 4){
        return true;
    }else{
        return false
    }
}
    return true
}

var genre = [];
function genre1() {
    var x = document.getElementsByClassName("tab");
    var radioStmt1 = x[currentTab].getElementsByClassName("genre");
    let data1;

    // mengecek jika radio buttonya tidak ada dalam tab
    if (radioStmt1.length > 0){

        // perulangan untuk mengecek isi radio button di isi atau tidak
        for (let index = 0; index < radioStmt1.length; index++) {
                if(radioStmt1[index].checked == true){
                    data1 = index + 1;
                    genre.push(parseFloat(radioStmt1[index].value /100)) ;
                }
            }

    if (data1 > 6){
        return true
    }else{
        return false
    }
}
    return true
}


function sumA(data){
    let sum = 0;

for (let i = 0; i < data.length; i++) {
    sum += parseFloat(data[i]);
    }
    return sum
}

