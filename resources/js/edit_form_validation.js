//form
const form = document.getElementById("edit-form");
let isValid = true;

form.addEventListener("submit", (e) => {
    e.preventDefault();

    validateForm();
    if (isValid) {
        form.submit();
    } else {
        return;
    }
});

const wrongValue = (input, error, text) => {
    input.classList.add("is-invalid");
    error.innerText = text;
    isValid = false;
    return
    // console.log(valid)
};

const resetError = (input, error) => {
    error.innerText = "";
    input.classList.remove("is-invalid");
};

const validateForm = () => {
    

    //! validazione "Nome Piatto"
    const nameValue = document.getElementById("name").value.trim();
    const nameInput = document.getElementById("name");
    const nameError = document.getElementById("name-error");

    resetError(nameInput, nameError);

    if (nameValue === "") {
        wrongValue(
            nameInput,
            nameError,
            "Il nome del piatto è obbligatorio.",
            
        );
    }

    //! validazione "Ingredienti"
    // const ingredientsValue = document.getElementById("ingredients").value.trim();
    // const ingredientsInput = document.getElementById("ingredients");
    // const ingredientsError = document.getElementById("ingredients-error");

    // resetError(ingredientsInput, ingredientsError);

    // if (!/^[a-zA-Z\s]*$/.test(ingredientsValue)) {
    //     wrongValue(
    //         ingredientsInput,
    //         ingredientsError,
    //         "Gli ingredienti possono contenere solo lettere e spazi.",
            
    //     );
    // }

    // ! Validazione "Indirizzo Email"
    const priceValue = document.getElementById("price").value.trim();
    const priceInput = document.getElementById("price");
    const priceError = document.getElementById("price-error");

    // Resetta gli errori
    resetError(priceInput, priceError);

    if (priceValue === "") {
        wrongValue(
            priceInput,
            priceError,
            "Il prezzo è obbligatorio",
        );
    } else if(priceValue == 0) {
        wrongValue(
            priceInput,
            priceError,
            "Il prezzo è non può essere un numero uguale o minore di 0."
        );
    } else if (!isValidpriceValue(priceValue)) {
        wrongValue(
            priceInput,
            priceError,
            "Il prezzo non è valido.",
        );
    }
    function isValidpriceValue(priceValue) {
        // Utilizza un'espressione regolare per validare l'indirizzo price
        const numberFormatRegex = /^\d+(\.\d+)?$/;
        return numberFormatRegex.test(priceValue);
    }

    

    // ! validazione del campo "Immagine"
    const imageValue = document.getElementById("image").value.trim();
    const imageInput = document.getElementById("image");
    const imageError = document.getElementById("image-error");

    // Resetta gli errori
    resetError(imageInput, imageError);

    if (imageValue !== "" && !isValidUrl(imageValue)) {
        wrongValue(
            imageInput,
            imageError,
            "Inserisci un URL valido per l'immagine.",
        );
    }

    function isValidUrl(url) {
        // Utilizza un'espressione regolare per verificare se l'URL è valido
        let urlRegex = /^(ftp|http|https):\/\/[^ "]+$/;
        return urlRegex.test(url);
    }


    return isValid;
};
