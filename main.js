// SCROLL
// appelle tous les element "list-group-item"
const liens = document.getElementsByClassName('list-group-item');

//Function pour le scroll
Array.from(liens).forEach(element => {
    element.addEventListener("click", function(){
        Array.from(liens).forEach(el => {
            el.classList.remove("active")
        });
        element.classList.add("active");
    });
});

//MODAL 1.
// pack standard, total des extra.
const displayExtra1 = document.getElementById("extraTotal1");
displayExtra1.value = 0;

// pack standard, total du merchandising.
const displayMerch1 = document.getElementById("merchTotal1");
displayMerch1.value = 0;

// pack standard, calcule total de tous le produit.
const input1 = document.getElementById("input1")
input1.value = 0;
input1.value = displayExtra1.value + displayMerch1.value;

//appelle de select pour les option.
let select1 = document.getElementById("select1");

//pack standard, display du total final actualise.
function ResultatFinal1(){
    input1.value = parseInt(displayExtra1.value) + parseInt(displayMerch1.value) + parseInt(50) + " " + "euro";  
}

//pack standard, function pour le select.
select1.addEventListener("change", event => {
    let value = event.target.value;

    displayMerch1.value = (parseInt(value)) + " " + "euro";

    ResultatFinal1();
})

// appelle tous le element de type checkbox.
const checkboxes = document.querySelectorAll('input[type="checkbox"]');

// function pour le calcule total des checkbox.
checkboxes.forEach(function(item) {
    item.addEventListener("change", function(e) {
        let total1 = 0;
        if (e.target.checked == true){
            total1 =+ parseInt(e.target.value)
        } else {
            total1 =- parseInt(e.target.value)
        }
        displayExtra1.value = (parseInt(total1) + parseInt(displayExtra1.value)) + " " + "euro";

        ResultatFinal1();
    })
})

//MODAL 2.
// pack best pack, total des extra.
const displayExtra2 = document.getElementById("extraTotal2");
displayExtra2.value = 0;

// pack best pack, total du merchandising.
const displayMerch2 = document.getElementById("merchTotal2");
displayMerch2.value = 0;

// pack best pack, calcule total de tous les produits.
const input2 = document.getElementById("input2")
input2.value = 0;
input2.value = displayExtra2.value + displayMerch2.value;

// pack best pack, Calcule total de tous le prix actualisé.
function ResultatFinal2(){
    input2.value = parseInt(displayExtra2.value) + parseInt(displayMerch2.value) + parseInt(100) + " " + "euro";  
}

// pack best pack, appele de la liste.
let select2 = document.getElementById("select2");

// pack best pack, function pour la liste. 
select2.addEventListener("change", event => {
    let value = event.target.value;

    displayMerch2.value = (parseInt(value)) + " " + "euro";

    ResultatFinal2();
    
})

//pack best pack, function pour le calcule total des checkbox.
checkboxes.forEach(function(item) {
    item.addEventListener("change", function(e) {
        let total2 = 0;
        if (e.target.checked == true){
            total2 =+ parseInt(e.target.value)
        } else {
            total2 =- parseInt(e.target.value)
        }
        displayExtra2.value = (parseInt(total2) + parseInt(displayExtra2.value))  + " " + "euro";

        ResultatFinal2();
    })
})

//MODAL 3.
// pack vip pack, total des Extra.
const displayExtra3 = document.getElementById("extraTotal3");
displayExtra3.value = 0;

// pack vip pack, total du merchandising.
const displayMerch3 = document.getElementById("merchTotal3");
displayMerch3.value = 0;

// pack vip pack, total des produits.
const input3 = document.getElementById("input3")
input3.value = 0;
input3.value = displayExtra3.value + displayMerch3.value;

// pack vip pack, display du total des produits actualise.
function ResultatFinal3(){
    input3.value = parseInt(displayExtra3.value) + parseInt(displayMerch3.value) + parseInt(250) + " " + "euro";  
}

//pack vip pack, appelle de la liste.
let select3 = document.getElementById("select3");

//pack vip pack, fountion pour le calcule de la liste.
select3.addEventListener("change", event => {
    let value = event.target.value;

    displayMerch3.value = (parseInt(value)) + " " + "euro";

    ResultatFinal3();
    
})

// pack vip pack, fountion pour le calcule des checkbox.
checkboxes.forEach(function(item) {
    item.addEventListener("change", function(e) {
        let total3 = 0;
        if (e.target.checked == true){
            total3 =+ parseInt(e.target.value)
        } else {
            total3 =- parseInt(e.target.value)
        }
        displayExtra3.value = (parseInt(total3) + parseInt(displayExtra3.value)) + " " + "euro";

        ResultatFinal3();
    })
})