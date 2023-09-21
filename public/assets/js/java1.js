function removerItem(){
    document.getElementById().remove();
}

const apiKey = 'c3caa17c9bcc383dd3323ba469d87be7';
const apiUrl = 'URL_DA_API';

function pagarComPix() {
    // código para obter o valor da compra e a chave PIX
    const valor = document.getElementById('valor').value;
    const chavePix = document.getElementById('chavePix').value;

    // código para enviar a transação via API de pagamento
    fetch(apiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${apiKey}`
        },
        body: JSON.stringify({
            valor: valor,
            chavePix: chavePix
        })
    })
        .then(response => {
            // código para atualizar o status do pedido e exibir uma mensagem de confirmação
        })
        .catch(error => {
            // código para exibir uma mensagem de erro
        });
}
