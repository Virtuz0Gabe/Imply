
const form = document.querySelector('form');
const resultado = document.querySelector('#resposta');

form.addEventListener('submit', (event) => {
    event.preventDefault(); // mostrar que essa coisinha

    //const cep = document.querySelector('#CEP').value; <- serve só pra explicar um erro que aconteceu (1/2  - k)
    
    const formData = new FormData(form);
    const url = form.action;

    
    
    fetch(url, {method:'POST', body: formData})   
    

        .then(response => response.json())
        .then(data => {

            
            resposta.innerHTML =
            `
            <p><b>CEP</b>: ${data.cep}</p>
            <p><b>Logradouro</b>: ${data.logradouro}</p>
            <p><b>Bairro</b>: ${data.bairro}</p>
            <p><b>Cidade</b>: ${data.localidade}</p>
            <p><b>Estado</b>: ${data.uf}</p>
            <p><b>DDD</b>: ${data.ddd}</p>
            <p><b>IBGE</b>: ${data.ibge}</p>
            `
        })

    /*
    fetch(url)      <- serve só pra explicar um erro que aconteceu (2/2  - k)
        .then(response => response.json())
        .then(data => {

            resposta.innerHTML = 
            `
            <p>CEP: ${data.cep}</p>
            <p>Logradouro: ${data.logradouro}</p>
            <p>Bairro: ${data.bairro}</p>
            <p>Cidade: ${data.localidade}</p>
            <p>Estado: ${data.uf}</p>
          `;
        })

        .catch(error => console.error(error));

    */
})