# Hello World!
Olá Avaliador!

Para Realizar o processo de Avaliação deste Projeto, siga os passos listados Abaixo.

# Clonar o Projeto!
Url para Clonar o Projeto https://github.com/cassiomx/pastel.git

## Configurações do Projeto ##
Após o término do clone, acesse a pasta do projeto e renomeie o arquivo **.env_rename** para **.env**.
Este arquivo **.env** contém algumas configurações pré-definidas como dados de conexão ao banco de dados e configurações para o envio do e-mail(**Mailtrap**).

Finalizando as configurações do arquivo **.env**, acesse a pasta via terminal e execute os comandos abaixo:

```
composer update
php artisan migrate --seed // irá criar as tabelas e irá cadastrar serie de pasteis
php artisan serve
```
# EndPoints #
## CLIENTS ##
### Client/Index - GET ###
* **Url**  : http://localhost:8000/api/clients
* **Params** - **page** = int: número da página a ser exibido / **per_page** = int: número de registros por página.
* **Retorno:** array: lista de clientes dentro dos filtros realizados.

### Client/Create - POST ##
* **Url**  : http://localhost:8000/api/clients
* **Envio :** - **Json** = {"name":"Teste","email":"teste@gmail.com","phone":"111111111","dateofbirth":"1986-05-15","address":"Avenida Paulista","neighborhood":"Centro","zipecode":"01010001"}.
* **Retorno:** mensagem 200 - json {"result": "success_store"}.

### Client/Show - POST ##
* **Url:**  : http://localhost:8000/api/clients/{id}
* **{id}:** : int - id do Cliente;
* **Retorno:** array: dados do cliente e pedidos dentro do id informado.

### Client/Update - PUT ##
* **Url**  : http://localhost:8000/api/clients/{id}
* **Envio :** - **Json** = {"name":"Teste","email":"teste@gmail.com","phone":"111111111","dateofbirth":"1986-05-15","address":"Avenida Paulista","neighborhood":"Centro","zipecode":"01010001"}.
* **Retorno:** mensagem 200 - json {"result": "success_update"}.

### Client/Delete - DELETE ##
* **Url:**  : http://localhost:8000/api/clients/{id}
* **{id}:** : int - id do Cliente;
* **Retorno:** mensagem 200 - json {"result": "success_delete"}














