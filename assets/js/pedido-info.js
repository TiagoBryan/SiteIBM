/*Função para aleatorizar o número do pedido*/

function gerarNumeropedido() {
  let numMinimo = 1;
  let numMaximo = 9999;
  let numpedido = (
    Math.random() * (numMaximo - numMinimo + 1) +
    numMinimo
  ).toFixed(0);
  let pedido = document.getElementById("numero-pedido");

  pedido.innerHTML += `${numpedido}`
}

function dataPedido () {
  let data = new Date().toLocaleDateString("pt-br");

  let hoje = document.getElementById('data-atual')
  
  hoje.innerHTML += `${data}`
}

window.addEventListener("load" , ()=>{
  gerarNumeropedido()
  dataPedido()
})
