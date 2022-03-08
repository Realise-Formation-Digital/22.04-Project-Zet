let result1 = document.getElementById("prix-total-btn1")
result1.value= 50;

const select1 = document.getElementById("select1");



select1.addEventListener("change", (event) => {

    let valeur5 = event.target.value;

    result1.value = (parseInt(result1.value) + parseInt(valeur5));
});