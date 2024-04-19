const deleteForms = document.querySelectorAll(".delete-form");
const modalCloseButton = document.getElementById("close-btn");
const modalConfirmButton = document.getElementById("confirm-btn");
const deleteModal = document.getElementById("delete-modal");
const modalText = document.getElementById("modal-text");

//let activeForm = null;

deleteForms.forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        const projectTitle = form.getAttribute("data-dish");
        if (projectTitle) {
            modalText.innerText = projectTitle + "?";
        }
        modalConfirmButton.addEventListener("click", () => {
            form.submit();
        });
    });
});
