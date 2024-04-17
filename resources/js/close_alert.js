const myAlert = document.querySelector(".alert");
const alertCloseBtn = document.querySelector("btn-close");

setTimeout(() => {
    myAlert.classList.remove("show");
    setTimeout(() => {
        myAlert.classList.add("d-none");
    }, 100);
}, 5000);
