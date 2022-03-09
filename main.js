const liens = document.getElementsByClassName('list-group-item');

Array.from(liens).forEach(element => {
    element.addEventListener("click", function(){
        Array.from(liens).forEach(el => {
            el.classList.remove("active")
        });
        element.classList.add("active");
    });
});

const displayExtra1 = document.getElementById("extraTotal1");
displayExtra1.value = 0;

const displayMerch1 = document.getElementById("merchTotal1");
displayMerch1.value = 0;

const input1 = document.getElementById("input1")
input1.value = 0;
input1.value = displayExtra1.value + displayMerch1.value;
let select1 = document.getElementById("select1");

function ResultatFinal1(){
    input1.value = parseInt(displayExtra1.value) + parseInt(displayMerch1.value) + parseInt(50) + " " + "euro";  
}

select1.addEventListener("change", event => {
    let value = event.target.value;

    displayMerch1.value = (parseInt(value)) + " " + "euro";

    ResultatFinal1();
})

const checkboxes = document.querySelectorAll('input[type="checkbox"]');

checkboxes.forEach(function(item) {
    item.addEventListener("change", function(e) {
        let total = 0;
        if (e.target.checked == true){
            total =+ parseInt(e.target.value)
        } else {
            total =- parseInt(e.target.value)
        }
        displayExtra1.value = (parseInt(total) + parseInt(displayExtra1.value)) + " " + "euro";

        ResultatFinal1();
    })
})

const displayExtra2 = document.getElementById("extraTotal2");
displayExtra2.value = 0;

const displayMerch2 = document.getElementById("merchTotal2");
displayMerch2.value = 0;

const input2 = document.getElementById("input2")
input2.value = 0;
input2.value = displayExtra2.value + displayMerch2.value;

function ResultatFinal2(){
    input2.value = parseInt(displayExtra2.value) + parseInt(displayMerch2.value) + parseInt(100) + " " + "euro";  
}

let select2 = document.getElementById("select2");

select2.addEventListener("change", event => {
    let value = event.target.value;

    displayMerch2.value = (parseInt(value)) + " " + "euro";

    ResultatFinal2();
    
})

checkboxes.forEach(function(item) {
    item.addEventListener("change", function(e) {
        let total = 0;
        if (e.target.checked == true){
            total =+ parseInt(e.target.value)
        } else {
            total =- parseInt(e.target.value)
        }
        displayExtra2.value = (parseInt(total) + parseInt(displayExtra2.value))  + " " + "euro";

        ResultatFinal2();
    })
})

const displayExtra3 = document.getElementById("extraTotal3");
displayExtra3.value = 0;

const displayMerch3 = document.getElementById("merchTotal3");
displayMerch3.value = 0;

const input3 = document.getElementById("input3")
input3.value = 0;
input3.value = displayExtra3.value + displayMerch3.value;

function ResultatFinal3(){
    input3.value = parseInt(displayExtra3.value) + parseInt(displayMerch3.value) + parseInt(250) + " " + "euro";  
}

let select3 = document.getElementById("select3");

select3.addEventListener("change", event => {
    let value = event.target.value;

    displayMerch3.value = (parseInt(value)) + " " + "euro";

    ResultatFinal3();
    
})

checkboxes.forEach(function(item) {
    item.addEventListener("change", function(e) {
        let total = 0;
        if (e.target.checked == true){
            total =+ parseInt(e.target.value)
        } else {
            total =- parseInt(e.target.value)
        }
        displayExtra3.value = (parseInt(total) + parseInt(displayExtra3.value)) + " " + "euro";

        ResultatFinal3();
    })
})
