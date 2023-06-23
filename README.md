# Teste Ezoom
# Repositório contendo a implementação do Teste Ezoom

# Escopo do teste
1. Esta aplicação, deve conter um CRUD básico de pelo menos duas áreas e relacionamento entre elas. Exemplo: Categorias e Produtos;
2. Utilize banco de dados MySQL;
3. Publique seu teste em um repositório no seu perfil no GitHub ou Bitbucket;
4. Insira no seu README.md instruções / documentação necessária sobre como instalar e usar a sua aplicação;
5. Sinta-se livre para fazer o layout da aplicação da forma como preferir, utilizando bootstrap, tailwind ou material design.
6. Utilize seeders no lugar de dumps do SQL se precisarmos de alguma informação pré definida no banco de dados.
7. Utilize JWT para autenticação para os endpoints e para o CMS.
### Bônus:
8. Faça uso de pelo menos um padrão de projeto e explique o motivo por ter escolhido ele.

## Padrões de projetos adotado:
 ```
MVC (Model-View-Controller): O padrão MVC para separar a lógica de negócios (model), a apresentação dos dados (view) e o controle das interações (controller).
Strategy: Foi adotado o uso do padrão Strategy para permitir a troca flexível do algorítimo de autenticação pelo padrão JWT;
 ```

 ```
👁👁 PRÉ REQUISITOS PARA POSSIBILITAR A EXECUÇÃO DOS TESTES, GIT, APACHE, PHP, MYSQL
 ```
Para deixar o ambiente do projeto Laravel funcionando, você precisa executar alguns comandos para instalar as dependências, configurar o ambiente e iniciar o servidor. Aqui estão os passos básicos:

1. Abra o Terminal ou o prompt de comando no seu sistema.

2. Navegue até o diretório raiz do projeto Laravel usando o comando `cd`.

3. Execute o seguinte comando para instalar as dependências do projeto:

   ```
   composer install
   ```

   Isso irá baixar todas as dependências do Laravel listadas no arquivo `composer.json` e instalá-las no diretório `vendor`.

4. Depois de instalar as dependências, crie o arquivo `.env` executando o seguinte comando:

   ```
   cp .env.example .env
   ```

   Isso irá criar uma cópia do arquivo `.env.example` como `.env`, que contém as configurações do ambiente. Você pode editar esse arquivo para adicionar suas configurações específicas, como conexão com o banco de dados.

5. Edite o arquivo .env novo e altere as informações do banco conforme a sua instalação local do MySQL ou MariaDB

6. Gere uma nova chave de aplicativo executando o seguinte comando:

   ```
   php artisan key:generate
   ```

   Isso irá gerar uma chave única para sua aplicação Laravel.

7. Agora, você precisa configurar o banco de dados no arquivo `.env`. Abra o arquivo `.env` em um editor de texto e insira as informações de conexão com o banco de dados, como o nome do banco de dados, o usuário e a senha.

8. Execute o comando abaixo para executar as migrações do banco de dados:

   ```
   php artisan migrate
   ```

   Isso criará as tabelas necessárias no banco de dados de acordo com as migrações definidas no diretório `database/migrations`.
   ### Seu usuário para acesso será:
   "rodrigo.rossa@ezoom.com.br" e senha: "senha456"

10. Execute o comando php artisan db:seed para popular o banco de dados com dados de exemplo.
```
php artisan db:seed
```

9. Por fim, inicie o servidor de desenvolvimento do Laravel com o seguinte comando:

   ```
   php artisan serve
   ```

   Isso iniciará o servidor em `http://localhost:8000`, onde você poderá acessar sua aplicação Laravel no navegador.

 Após rodar a migrite 'rodrigo.rossa@ezoom.com.br',
            'password' => Hash::make('senha456'),
