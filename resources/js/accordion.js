const accordionButtons = document.querySelectorAll('.cm-accordion-btn');

//per ogni button
accordionButtons.forEach((button, index) => {

    //prendo gli header
    const accordionHeader = document.querySelectorAll(".cm-accordion-header")[index];
    
    //al click di ogni button
    button.addEventListener('click', () => {
        const accordionTargetId = button.dataset.accordionTarget;
        const accordionBodies = document.querySelectorAll(`.${accordionTargetId}`);

        //mostro l'header
        if (accordionHeader.classList.contains('d-none')){
            accordionHeader.classList.remove('d-none')
        } else {
            accordionHeader.classList.add('d-none');
        }

        accordionBodies.forEach(body => {
            if (body) {
                if (body.classList.contains("d-none")) {
                    body.classList.remove("d-none");
                } else {
                    body.classList.add("d-none");
                }
            }
        })
        
        
    })
})

