

    

    // Seleziona il pulsante di invio del form
    const submitButton = document.getElementById('registration-form');

    // Aggiungi l'event listener per il clic sul pulsante di invio
    submitButton.addEventListener('submit', function(event) {
        // Previeni il comportamento predefinito del form (l'invio)
        event.preventDefault();

        const result = validateForm();
        // Esegui la validazione del form
       if(result) {
        submitButton.submit()
       }else{
        return
       }
    });



function validateForm() {
        // Esegui la validazione
        let isValid = true;
    // Recupera il valore del campo "Nome Ristoratore"
    const name = document.getElementById('name').value.trim();
    const nameError = document.getElementById('name-error');
    
    if (name === '') {
        document.getElementById('name').classList.add('is-invalid');
        document.getElementById('name-error').innerHTML = 'Il nome ristoratore è obbligatorio.';
        isValid = false;
    } else if (name.length < 3) {
        document.getElementById('name').classList.add('is-invalid');
        document.getElementById('name-error').innerHTML = 'Il nome ristoratore deve essere lungo almeno 3 caratteri.';
        isValid = false;
    } else if (!/^[a-zA-Z\s]*$/.test(name)) {
        name.classList.add('is-invalid');
        document.getElementById('name-error').innerHTML = 'Il nome ristoratore deve contenere solo lettere e spazi.';
        isValid = false;
    }

    // Recupera il valore del campo "Cognome Ristoratore"
    const surname = document.getElementById('surname').value.trim();

    if (surname === '') {
        document.getElementById('surname').classList.add('is-invalid');
        document.getElementById('surname-error').innerHTML = 'Il cognome ristoratore è obbligatorio.';
        isValid = false;
    } else if (surname.length < 3) {
        document.getElementById('surname').classList.add('is-invalid');
        document.getElementById('surname-error').innerHTML = 'Il cognome ristoratore deve essere lungo almeno 3 caratteri.';
        isValid = false;
    } else if (!/^[a-zA-Z\s]*$/.test(surname)) {
        document.getElementById('surname').classList.add('is-invalid');
        document.getElementById('surname-error').innerHTML = 'Il cognome ristoratore deve contenere solo lettere e spazi.';
        isValid = false;
    }


     // Recupera il valore del campo "Indirizzo Email"
     let email = document.getElementById('email').value.trim();

     // Resetta gli errori
     document.getElementById('email').classList.remove('is-invalid');
     document.getElementById('email-error').innerHTML = '';

  
     if (email === '') {
         document.getElementById('email').classList.add('is-invalid');
         document.getElementById('email-error').innerHTML = 'L\'indirizzo email è obbligatorio.';
         isValid = false;
     } else if (!isValidEmail(email)) {
         document.getElementById('email').classList.add('is-invalid');
         document.getElementById('email-error').innerHTML = 'L\'indirizzo email non è valido.';
         isValid = false;
     }
     function isValidEmail(email) {
        // Utilizza un'espressione regolare per validare l'indirizzo email
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('password-confirm').value;

    // Resetta gli errori
    document.getElementById('password').classList.remove('is-invalid');
    document.getElementById('password-confirm').classList.remove('is-invalid');
    document.getElementById('password-error').innerHTML = '';


    if (password === '') {
        document.getElementById('password').classList.add('is-invalid');
        document.getElementById('password-error').innerHTML = 'La password è obbligatoria.';
        isValid = false;
    } else if (password.length < 8) {
        document.getElementById('password').classList.add('is-invalid');
        document.getElementById('password-error').innerHTML = 'La password deve contenere almeno 8 caratteri.';
        isValid = false;
    } else if (confirmPassword === '') {
        document.getElementById('password-confirm').classList.add('is-invalid');
        document.getElementById('password-error').innerHTML = 'Conferma la password.';
        isValid = false;
    } else if (password !== confirmPassword) {
        document.getElementById('password-confirm').classList.add('is-invalid');
        document.getElementById('password-error').innerHTML = 'Le password non corrispondono.';
        isValid = false;
    }


     // Recupera il valore del campo "Nome del ristorante"
     let restaurantName = document.getElementById('restaurant_name').value.trim();

     // Resetta gli errori
     document.getElementById('restaurant_name').classList.remove('is-invalid');
     document.getElementById('restaurant_name-error').innerHTML = '';

     if (restaurantName === '') {
         document.getElementById('restaurant_name').classList.add('is-invalid');
         document.getElementById('restaurant_name-error').innerHTML = 'Il nome del ristorante è obbligatorio.';
         isValid = false;
     } else if (restaurantName.length < 3) {
         document.getElementById('restaurant_name').classList.add('is-invalid');
         document.getElementById('restaurant_name-error').innerHTML = 'Il nome del ristorante deve essere lungo almeno 3 caratteri.';
         isValid = false;
     }

      // Recupera il valore del campo "Indirizzo dell'attività"
      let address = document.getElementById('address').value.trim();

      // Resetta gli errori
      document.getElementById('address').classList.remove('is-invalid');
      document.getElementById('address-error').innerHTML = '';

      if (address === '') {
          document.getElementById('address').classList.add('is-invalid');
          document.getElementById('address-error').innerHTML = "L'indirizzo dell'attività è obbligatorio.";
          isValid = false;
      }

       // Recupera il valore del campo "Partita IVA"
       let vatNumber = document.getElementById('vat_number').value.trim();

       // Resetta gli errori
       document.getElementById('vat_number').classList.remove('is-invalid');
       document.getElementById('vat_number-error').innerHTML = '';

       if (vatNumber === '') {
           document.getElementById('vat_number').classList.add('is-invalid');
           document.getElementById('vat_number-error').innerHTML = 'La Partita IVA è obbligatoria.';
           isValid = false;
       } else if (vatNumber.length !== 11) {
           document.getElementById('vat_number').classList.add('is-invalid');
           document.getElementById('vat_number-error').innerHTML = 'La Partita IVA deve contenere 11 cifre.';
           isValid = false;
       } else if (!/^\d+$/.test(vatNumber)) {
           document.getElementById('vat_number').classList.add('is-invalid');
           document.getElementById('vat_number-error').innerHTML = 'La Partita IVA deve contenere solo cifre.';
           isValid = false;
       }

        // Recupera il valore del campo "Immagine"
        let image = document.getElementById('image').value.trim();

        // Resetta gli errori
        document.getElementById('image').classList.remove('is-invalid');
        document.getElementById('image-error').innerHTML = '';

  
        if (image !== '' && !isValidUrl(image)) {
            document.getElementById('image').classList.add('is-invalid');
            document.getElementById('image-error').innerHTML = 'Inserisci un URL valido per l\'immagine.';
            isValid = false;
        }

    function isValidUrl(url) {
        // Utilizza un'espressione regolare per verificare se l'URL è valido
        let urlRegex = /^(ftp|http|https):\/\/[^ "]+$/;
        return urlRegex.test(url);
    }

      // Recupera il valore del campo "Tipologia/e Ristorante"
      let restaurantTypes = document.querySelectorAll('input[name="restaurant_types[]"]:checked');

      // Resetta gli errori
      document.getElementById('restaurant_type-error').innerHTML = '';


      if (restaurantTypes.length === 0) {
          document.getElementById('restaurant_type-error').innerHTML = 'Seleziona almeno una tipologia di ristorante.';
          isValid = false;
      }
    // Restituisci il risultato della validazione
    return isValid;
}