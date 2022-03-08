const liens = document.getElementsByClassName('list-group-item');

Array.from(liens).forEach(element => {
    element.addEventListener("click", function(){
        Array.from(liens).forEach(el => {
            el.classList.remove("active")
        });
        element.classList.add("active");
    });
});

