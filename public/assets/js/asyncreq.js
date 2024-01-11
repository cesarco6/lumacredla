//Recoge todos los input del frontend y crea un objeto inputData con el valor del input  y el nombre del input como llave
const inputData = {};
const inputs = document.querySelectorAll("input");
inputs.forEach((input) => {
    inputData[input.name] = input.value;
});

// Incluye CSRF-token  en el encabezado de la solicitud AJAX
const csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");

fetch("/almacenadatos", {
    method: "POST",
    headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": csrfToken,
    },
    body: JSON.stringify(inputData),
})
    .then((response) => {
        if (response.ok) {
            return response.json(); // Formatea la response a JSON
        } else {
            throw new Error(
                "La solicitud falló con el estado: " + response.status
            );
        }
    })
    .then((data) => {
        // Maneja datos de response
        console.log("¡Éxito! Datos:", data);
    })
    .catch((error) => {
        // Maneja error
        console.error("Error:", error);
        // Muestra un mensaje de error fácil de usar si es necesario
    });
