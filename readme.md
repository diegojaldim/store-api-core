# Laravel Store API Core
API de teste para e-commerce

## Instalação

- git clone https://github.com/diegojaldim/store-api-core.git
- navegue até a pasta do projeto
- Copie e cole o arquivo '.env.example' com o nome '.env' ou digite o comando cp .env.example .env se estiver usando Linux
- atualize as informações do seu banco de dados no arquivo '.env'
- composer install
- php artisan migrate
- php artisan db:seed
- php artisan passport:install
- php artisan key:generate
- Rode o servidor local com o comando php artisan serve
- Pronto. Agora é só acessar http://localhost:8000

## Uso do sistema
Não há nenhum usuário pré-cadastrado no sistema, é necessário cadastrar um usuário para uso do sistema.