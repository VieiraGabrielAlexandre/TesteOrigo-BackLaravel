Para executar o back end, instale o composer pelo link https://getcomposer.org/download/

Depois copie o arquivo .env.example e renomeie para .env, dentro dele estão as configurações que
servidor irá precisar, como o acesso ao banco de dados, insira as informações necessárias para
acessar o banco de dados, como usuário, senha e nome do banco.


Depois, execute o comando no terminal:
php composer.phar install - Esse comando irá instalar todas as dependências necessárias para
executar o projeto

Depois para criar as tabelas no banco de dados, execute o comando:
php artisan migrate - Esse comando irá criar todas as migrações com as tabelas necessárias no banco de dados.

Depois, para gerar todo o conteúdo nas tabelas (clientes e planos), execute os comandos:

composer dump-autoload
php artisan db:seed

Esses dois comando são responsáveis por criar o conteúdo necessário nas tabelas clientes e planos.

Depois, basta executar o projeto localmente:
php artisan serv - Esse comando irá servir o Laravel localmente no endereço: localhost:8000
