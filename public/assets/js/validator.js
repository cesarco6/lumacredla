// Función para validar los campos requeridos en la vista actual
function validateActiveViewInputs() {
    // Elige la vista en la que estamos actualmente
    const activeView = document.querySelector(
        ".multisteps-form__panel.js-active"
    );

    // Elige los inputs de la vista a validar
    const activeViewInputs = activeView.querySelectorAll("input");

    for (const input of activeViewInputs) {
        // Elimina cualquier mensaje de error anterior
        const errorMessage = input.nextElementSibling;
        if (
            errorMessage &&
            errorMessage.classList.contains("alert alert-danger")
        ) {
            errorMessage.remove();
        }

        const isValid = validateInput(input); // Llama a la función de validación para cada input

        if (!isValid) {
            return false; // Salida del ciclo y retorna falso para indicar un error de validación general
        }
    }

    return true; // Todos los inputs son validos
}

// Función que discrimina entre tipos de inputs y los valida
function validateInput(input) {
    // checkbox que permite o no tomar los datos de una factura
    const checkbox = document.getElementById("add_factura");
    const isCheckbox = checkbox.checked;
    // Grupo de inputs controlados por el checkbox
    const isCheckboxControlledGroup = input.closest("#info-factura") !== null;

    if (isCheckboxControlledGroup) {
        // Si es un grupo controlado por checkbox, valide solo cuando la casilla de verificación esté marcada
        console.log(isCheckbox);
        if (isCheckbox) {
            const value = input.value.trim();
            if (value === "") {
                displayError(input, "Campo requerido por el checkbox");
                return false;
            }
        }
        return true;
    } else {
        switch (input.type) {
            case "file": {
                //Valida si el archivo existe
                if (input.files.length === 0) {
                    displayError(input, "Ingresa un archivo.");
                    return false;
                }

                const fileSize = input.files[0].size / 1024; // Tamaño en KB/1024 = Mb
                if (fileSize > 2048) {
                    displayError(input, "El archivo debe ser menor a 2 Mb.");
                    return false;
                }

                return true;
            }

            case "date": {
                //Valida que la fecha exista
                if (input.value === "") {
                    displayError(input, "Ingresa la fecha de pago.");
                    return false;
                }

                return true;
            }

            case "email":
                return true;

            case "text": {
                const inputValue = input.value.trim();
                //Valida que el campo no este vacio
                if (inputValue === "") {
                    displayError(input, "Ingresa datos a este campo");
                    return false;
                }

                return true;
            }

            default:
                return true;
        }
    }
}

// Función que despliega el error de validación en linea
function displayError(input, message) {
    const errorMessage = document.createElement("span");
    errorMessage.className = "alert alert-danger";
    errorMessage.textContent = message;
    input.parentNode.insertBefore(errorMessage, input.nextElementSibling);
}
