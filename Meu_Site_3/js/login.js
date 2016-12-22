var email = getElementById('email');
var password = getElementById('password');

function mostrarValor() {
    alert(document.getElementById("email").value);
}

// Evento que é executado toda vez que uma tecla for pressionada no input
document.getElementById("email").onkeypress = function(e) {
    // 13 é a tecla <ENTER>. Se ela for pressionada, mostrar o valor
    if (e.keyCode == 13) {
        mostrarValor();
        e.preventDefault();
    }
}

// Evento que é executado ao clicar no botão de enviar
document.getElementById("submit").onclick = function(e) {
    mostrarValor();
    e.preventDefault();
}
