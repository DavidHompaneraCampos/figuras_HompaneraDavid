function validaForm() {
    lado1 = document.getElementById('lado1').value;
    lado2 = document.getElementById('lado2').value;
    lado3 = document.getElementById('lado3').value;
    radio = document.getElementById('radio').value;
    error = "";

    if (lado1 == "" || lado2 == "" || lado3 == "" || radio == "") {
        error.textContent = "Debes rellenar todos los campos";
        return false;
    }

    error.textContent = "";
    return true;
}