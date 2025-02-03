
// audio de la musica de la pagina

document.addEventListener('DOMContentLoaded', function() {
    var audio = document.getElementById('mi-audio');

    // Detectar un toque o clic para activar el audio
    document.addEventListener('click', function() {
        audio.muted = false;  // Desmutear el audio
        audio.play().then(() => {
            console.log("Audio desmuteado y reproduciéndose.");
        }).catch((error) => {
            console.log("Error al intentar reproducir el audio:", error);
        });
    }, { once: true }); // Se ejecuta solo una vez
});

  // JavaScript para el menú hamburguesa
  const menuToggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');

  menuToggle.addEventListener('click', () => {
    menu.classList.toggle('show');
  });


    // validad formulario

    function validarFormulario() {
        var nome = document.getElementById("nome").value;
        var sobrenome = document.getElementById("sobrenome").value;
        var email = document.getElementById("email").value;
        var telefone = document.getElementById("telefone").value;
    
        // Validar que no estén vacíos los campos esenciales
        if (nome == "" || sobrenome == "" || email == "" || telefone == "") {
            alert("Por favor, complete todos los campos obligatorios.");
            return false; // Evita el envío del formulario
        }
    
        // Validación para el teléfono (asegurarse de que tenga 10 dígitos)
        var telefonePattern = /^[0-9]{10}$/;
        if (!telefonePattern.test(telefone)) {
            alert("El número de teléfono debe tener 10 dígitos.");
            return false;
        }
    
        // Validación de formato de correo electrónico
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email)) {
            alert("Por favor, ingrese un correo electrónico válido.");
            return false;
        }
    
        // Si todo está correcto, permite que el formulario se envíe
        return true;
    }
   // mostrar el pais del formulario

function mostrarOtroPais() {
    var paisSelect = document.getElementById("pais");
    var otroPaisDiv = document.getElementById("otro_pais_div");
    var otroPaisInput = document.getElementById("otro_pais");

    if (paisSelect.value === "Outro") {
        otroPaisDiv.style.display = "block";
        otroPaisInput.required = true;
    } else {
        otroPaisDiv.style.display = "none";
        otroPaisInput.required = false;
    }
}
