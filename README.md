#Site do Matheus
Pequeno portfólio que conta com sistema de login e outras firulas.

INSTRUÇÕES DE PUBLICAÇÃO

- Conexão com o Banco de Dados

Crie o banco de dados LOGIN conforme linha 1 do arquivo instrucoes.sql
(*)  Via PHPMyAdmin
(* *) Via MySQLWorkbench (ou pelo terminal mesmo)
Altere as constantes no arquivo conexao.php para suas configurações do MYSQL
O arquivo testaConexaoComBanco.php pode ser executado pelo terminal para validar a conexão

- Subindo a aplicação

Opção 1: Servidor XAMPP (*)

Inicie o Apache e o MySQL
Entre no PHPMyAdmin
Crie as tabelas e alimente-as conforme as querys do arquivo instrucoes.sql
Abra uma nova aba e digite:
    localhost/site-matheus/index.php

Opção 2: Servidor interno do PHP + MySQL Workbench (* *)
Entre no MySQL Workbench, crie e alimente as tabelas conforme as querys do arquivo instrucoes.sql
Abra o terminal, vá até a pasta do projeto e utilize o comando:
    php -S localhost:8080
O número da porta é opcional, costumo utilizar 8000 e 8080
Abra o navegador e digite:
    localhost:8080/index.php


Eu particularmente optei pela opção 2.
