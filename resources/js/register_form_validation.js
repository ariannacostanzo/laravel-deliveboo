//form
const form = document.getElementById("registration-form");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    const result = validateForm();
    if (result) {
        form.submit();
    } else {
        return;
    }
});

const wrongValue = (input, error, text, isValid) => {
    input.classList.add("is-invalid");
    error.innerText = text;
    isValid = false;
};

const resetError = (input, error) => {
    error.innerText = '';
    input.classList.remove('is-invalid')
}

const validateForm = () => {
    let isValid = true;

    //! validazione "Nome Ristoratore"
    const nameValue = document.getElementById("name").value.trim();
    const nameInput = document.getElementById("name");
    const nameError = document.getElementById("name-error");

    resetError(nameInput, nameError)

    if (nameValue === "") {
        wrongValue(
            nameInput,
            nameError,
            "Il nome ristoratore è obbligatorio.",
            isValid
        );
    } else if (nameValue.length < 3) {
        wrongValue(
            nameInput,
            nameError,
            "Il nome ristoratore deve essere lungo almeno 3 caratteri.",
            isValid
        );
    } else if (!/^[a-zA-Z\s]*$/.test(nameValue)) {
        wrongValue(
            nameInput,
            nameError,
            "Il nome ristoratore deve contenere solo lettere e spazi.",
            isValid
        );
    }

    //! validazione "Cognome Ristoratore"
    const surnameValue = document.getElementById("surname").value.trim();
    const surnameInput = document.getElementById("surname");
    const surnameError = document.getElementById("surname-error");

    resetError(surnameInput, surnameError);
    

    if (surnameValue === "") {
        wrongValue(
            surnameInput,
            surnameError,
            "Il cognome ristoratore è obbligatorio.",
            isValid
        );
    } else if (surnameValue.length < 3) {
         wrongValue(
             surnameInput,
             surnameError,
             "Il cognome ristoratore deve essere lungo almeno 3 caratteri.",
             isValid
         );
    } else if (!/^[a-zA-Z\s]*$/.test(surnameValue)) {
        wrongValue(
            surnameInput,
            surnameError,
            "Il cognome ristoratore deve contenere solo lettere e spazi.",
            isValid
        );
        
    }

    // ! Validazione "Indirizzo Email"
    const emailValue = document.getElementById("email").value.trim();
    const emailInput = document.getElementById("email");
    const emailError = document.getElementById("email-error");

    // Resetta gli errori
    resetError(emailInput, emailError);
    

    if (emailValue === "") {
        
        wrongValue(
            emailInput,
            emailError,
            "L'indirizzo email è obbligatorio.",
            isValid
        );
    } else if (!isValidemailValue(emailValue)) {
        wrongValue(
            emailInput,
            emailError,
            "L'indirizzo email non è valido.",
            isValid
        );
    }
    function isValidemailValue(emailValue) {
        // Utilizza un'espressione regolare per validare l'indirizzo email
        let emailValueRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailValueRegex.test(emailValue);
    }

    //!Validazione "password" e "conferma password"
    const passwordValue = document.getElementById("password").value.trim();
    const passwordInput = document.getElementById("password");
    const passwordError = document.getElementById("password-error");

    const passwordConfirmValue = document
        .getElementById("password-confirm")
        .value.trim();
    const passwordConfirmInput = document.getElementById("password-confirm");
    const passwordConfirmError = document.getElementById(
        "password-confirm-error"
    );

    // Resetta gli errori
    resetError(passwordInput, passwordError);
    
    resetError(passwordConfirmInput, passwordConfirmError);
    

    if (passwordValue === "") {
        wrongValue(
            passwordInput,
            passwordError,
            "La password è obbligatoria.",
            isValid
        );
    } else if (passwordValue.length < 8) {
        wrongValue(
            passwordInput,
            passwordError,
            "La password deve contenere almeno 8 caratteri.",
            isValid
        );
    } else if (passwordConfirmValue === "") {
        wrongValue(
            passwordConfirmInput,
            passwordConfirmError,
            "Conferma la password",
            isValid
        );
    } else if (passwordValue !== passwordConfirmValue) {
        wrongValue(
            passwordInput,
            passwordError,
            "Le password non corrispondono.",
            isValid
        );
    }

    //! validazione del campo "Nome del ristorante"
    const restaurantNameValue = document
        .getElementById("restaurant_name")
        .value.trim();
    const restaurantNameInput = document.getElementById("restaurant_name");
    const restaurantNameError = document.getElementById(
        "restaurant_name-error"
    );

    // Resetta gli errori
    resetError(restaurantNameInput, restaurantNameError);
    

    if (restaurantNameValue === "") {
        wrongValue(
            restaurantNameInput,
            restaurantNameError,
            "Il nome del ristorante è obbligatorio.",
            isValid
        );
    } else if (restaurantNameValue.length < 3) {
        wrongValue(
            restaurantNameInput,
            restaurantNameError,
            "Il nome del ristorante deve essere lungo almeno 3 caratteri.",
            isValid
        );
    }

    // ! validazione del campo "Indirizzo dell'attività"
    const addressValue = document.getElementById("address").value.trim();
    const addressInput = document.getElementById("address");
    const addressError = document.getElementById("address-error");

    // Resetta gli errori
    resetError(addressInput, addressError);
    

    if (addressValue === "") {
        wrongValue(
            addressInput,
            addressError,
            "L'indirizzo dell'attività è obbligatorio.",
            isValid
        );
    } else if (addressValue.length < 5) {
        wrongValue(
            addressInput,
            addressError,
            "L'indirizzo dell'attività deve essere lungo almeno 5 caratteri",
            isValid
        );
    }

    // ! validazione del campo "Partita IVA"
    const vatNumberValue = document.getElementById("vat_number").value.trim();
    const vatNumberInput = document.getElementById("vat_number");
    const vatNumberError = document.getElementById("vat_number-error");

    // Resetta gli errori
    resetError(vatNumberInput, vatNumberError);
    

    if (vatNumberValue === "") {
        wrongValue(
            vatNumberInput,
            vatNumberError,
            "La Partita IVA è obbligatoria.",
            isValid
        );
    } else if (vatNumberValue.length !== 13) {
        wrongValue(
            vatNumberInput,
            vatNumberError,
            "La Partita IVA deve avere 13 caratteri",
            isValid
        );
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
            isValid
        );
    }

    function isValidUrl(url) {
        // Utilizza un'espressione regolare per verificare se l'URL è valido
        let urlRegex = /^(ftp|http|https):\/\/[^ "]+$/;
        return urlRegex.test(url);
    }

    // ! validazione del campo "Tipologia/e Ristorante"
    const restaurantTypeInputs = document.querySelectorAll(
        'input[name="restaurant_types[]"]:checked'
    );
    const restaurantTypeError = document.getElementById(
        "restaurant_type-error"
    );

    // Resetta gli errori
    restaurantTypeError.innerText = "";

    if (restaurantTypeInputs.length === 0) {
        restaurantTypeError.innerText =
            "!Seleziona almeno una tipologia di ristorante.";
        isValid = false;
    }

    return isValid;
};
