function generateDynamicInputs() {
    var numberOfInputs = document.getElementById("noCredenciales").value;
    var container = document.getElementById("dynamicInputsContainer");
    
    //Eliminar entradas dinámicas existentes
    container.innerHTML = "";

    // Agregue nuevas entradas dinámicas basadas en el valor numérico
    for (var i = 1; i <= numberOfInputs; i++) {
        var dynamicInput = document.createElement("div");
        dynamicInput.className = "col-md-12";
        dynamicInput.innerHTML = `
        <div class="wizard-form-field mb-85"><div class="row"><div class="col-md-12"><h4 class="color-red">Credencial ${i}</h4></div><div class="col-12 col-md-6"><div class="wizard-form-input"><div class="w-100"><label for="txtNombre${i}" class="form-label mb-2 text-left w-100">Nombre y primer apellido</label><input type="text" id="txtNombre${i}" class="form-control w-100" placeholder="Ingrese el nombre"></div></div></div><div class="col-12 col-md-6"><div class="wizard-form-input"><div class="w-100"><label for="puesto${i}" class="form-label mb-2 text-left w-100">Puesto<small>(Opcional)</small></label><input type="text" id="puesto${i}" class="form-control w-100"></div></div></div><div class="col-md-12"><div class="row wizard-form-input wizard-document-upload m-0"><label class="col-md-12 mt-0 text-left" style="padding:8px 0">Fotografía Credendial ${i}</label><div class="col-md-12 custom-file mb-4 p-0"><label for="file-upload${i}" class="custom-file-label w-100 mt-0">.JPG o PDF no mayor a 2mb.</label><input type="file" class="custom-file-input w-100 credencialinfo" id="file-upload${i}" name="file-name" capture="document"></div></div></div></div><div class="col-md-12"><hr></div></div>
        `;

        container.appendChild(dynamicInput);
    }
}