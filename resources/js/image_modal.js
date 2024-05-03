const imageButtons = document.querySelectorAll('.image-modal')
const modal = document.getElementById("image-modal-container");
const modalImage = document.getElementById('modal-image')

imageButtons.forEach(image => {
    const img = image.getAttribute('src');
    
    image.addEventListener('click', () => {
        modal.classList.remove('d-none');
        modalImage.src = img;
    })
});

modal.addEventListener('click', () => {
    modal.classList.add('d-none')
})