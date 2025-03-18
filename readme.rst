# CI-CRUD - CodeIgniter com MySQL

## 📌 Sobre o Projeto

Este projeto é um CRUD desenvolvido com o framework **CodeIgniter** e utiliza um banco de dados **MySQL** para gerenciar usuários. A aplicação permite cadastrar, listar, editar e excluir usuários através de um painel administrativo.

## 🚀 Tecnologias Utilizadas

- **PHP** (CodeIgniter Framework)
- **MySQL** (phpMyAdmin para gerenciamento)
- **HTML, CSS, JavaScript** (Front-end básico)
- **Bootstrap** (para estilização)

## 📂 Estrutura do Projeto

```
/application
    /controllers
        Users.php
    /models
        User_model.php
    /views
        users/
            index.php
            create.php
            edit.php
/config
    database.php
/public
    index.php
```

## 🛠️ Configuração do Banco de Dados

1. Crie um banco de dados no **phpMyAdmin** ou via terminal:
   ```sql
   CREATE DATABASE ci_crud;
   ```
2. Configure a conexão no arquivo `application/config/database.php`:
   ```php
   $db['default'] = array(
       'dsn'   => '',
       'hostname' => 'localhost',
       'username' => 'root',
       'password' => '',
       'database' => 'ci_crud',
       'dbdriver' => 'mysqli',
       'dbprefix' => '',
       'pconnect' => FALSE,
       'db_debug' => TRUE,
   );
   ```
3. Importe a estrutura inicial do banco de dados (`ci_crud.sql`) localizada na raiz do projeto:
   ```sh
   mysql -u root -p ci_crud < ci_crud.sql
   ```

## 📌 Rotas Principais

- **`/users`** → Lista todos os usuários
- **`/users/create`** → Formulário de cadastro
- **`/users/edit/{id}`** → Editar usuário
- **`/users/delete/{id}`** → Deletar usuário

## ▶️ Como Rodar o Projeto

1. Clone o repositório:
   ```sh
   git clone https://github.com/carolina-sv/CI-CRUD.git
   ```
2. Acesse a pasta do projeto:
   ```sh
   cd CI-CRUD
   ```
3. Inicie o servidor embutido do PHP:
   ```sh
   php -S localhost:8080 -t public/
   ```
4. Acesse no navegador:
   ```sh
   http://localhost:8080
   ```

##

[Repositório no GitHub](https://github.com/carolina-sv/CI-CRUD)



************
Installation
************

Please see the `installation section <https://codeigniter.com/userguide3/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
