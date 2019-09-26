# Site do Matheus
Pequeno portfólio que conta com sistema de login e mensagens.

# Conexão com o Banco de Dados

- Crie o banco de dados LOGIN conforme linha 1 do arquivo [instrucoes.sql](https://github.com/mrocha98/site-matheus/blob/master/SQL/instrucoes.sql)
- Altere as constantes no arquivo [conexao.php](https://github.com/mrocha98/site-matheus/blob/master/conexao.php) para as configurações do seu MYSQL/MARIADB
- _O arquivo [testaConexaoComBanco.php](https://github.com/mrocha98/site-matheus/blob/master/testaConexaoComBanco.php) pode ser executado pelo terminal para validar a conexão_

# Subindo a aplicação

- Opção 1: Servidor XAMPP
  - Inicie o Apache e o MySQL
  - Entre no PHPMyAdmin
  - Crie as tabelas e alimente-as conforme as querys do arquivo [instrucoes.sql](https://github.com/mrocha98/site-matheus/blob/master/SQL/instrucoes.sql)
  - Abra uma nova aba edo seu navegador e digite: ```localhost/site-matheus/index.php```

- Opção 2: Servidor interno do PHP + MySQL Workbench
  - Entre no MySQL Workbench, crie e alimente as tabelas conforme as querys do arquivo instrucoes.sql
  - Abra o terminal, vá até a pasta do projeto e utilize o comando: ```php -S localhost:8080```
    - O número da porta é opcional, costumo utilizar 8000 e 8080
  - Abra o navegador e digite: ```localhost:8080/index.php```


Eu particularmente prefiro a opção 2, mas ela pode não ser muito funcional em dispositivos móveis ~sabe-se lá porque~.
