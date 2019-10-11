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
* **Url**: http://localhost:8000/api/clients
* **Params:** - **page** = int: número da página a ser exibido













