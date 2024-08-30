function onClickCalcular() {
    let oCampoCalculo = document.getElementById("calculo");
    verificaValidadeCalculo(oCampoCalculo.value)
    oResultado = eval(oCampoCalculo.value);
    oCampoCalculo.value = oResultado;
    oCampoCalculo.style.color = oResultado == 0 ? 'gray' : oResultado > 0 ? 'green' : 'red';
}

function onClickAdicionar(sElemento) {
    document.getElementById("calculo").value += sElemento;
}

function onClickApagar() {
    let oCalculo = document.getElementById("calculo")
    oCalculo.value = oCalculo.value.slice(0, -1)
}

function onClickLimpar() {
    document.getElementById("calculo").value = '';
}

function verificaValidadeCalculo(sEntrada) {
    if(typeof(sEntrada.slice(0, 1)) == integer && typeof(sEntrada.at(-1) == integer)) {
        alert('O valor do cálculo deve começar e finalizar com numerais.');
    }
}