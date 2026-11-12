# 🏢 Empresa CRUD

Sistema web para gerenciamento de funcionários de uma empresa, desenvolvido com **PHP, MySQL e Bootstrap**.

O projeto permite realizar operações de cadastro, consulta, edição e exclusão de funcionários, oferecendo uma interface simples e organizada para o gerenciamento das informações.

## 📋 Funcionalidades

- **Cadastro de funcionários:** registro de novos funcionários com informações pessoais e profissionais.
- **Listagem de funcionários:** visualização dos funcionários cadastrados no banco de dados.
- **Edição de funcionários:** atualização das informações dos registros existentes.
- **Exclusão de funcionários:** remoção de registros com confirmação da operação.
- **Controle de situação:** possibilidade de definir se um funcionário está ativo ou inativo.

## 🛠️ Tecnologias utilizadas

- **PHP** – desenvolvimento da lógica e processamento das operações.
- **MySQL** – armazenamento e gerenciamento dos dados.
- **Bootstrap 5** – estilização e estruturação da interface.
- **HTML5** – construção das páginas.
- **CSS3** – estilização dos elementos.

## 📁 Estrutura do projeto

```text
empresa-crud/
│
├── funcionario/
│   ├── adicionar.php
│   ├── inserir.php
│   ├── listar.php
│   ├── editar.php
│   ├── atualizar.php
│   └── remover.php
│
├── conexao.php
├── empresa.sql
├── index.php
└── menu.php
```

## ⚙️ Como executar o projeto

### 1. Pré-requisitos

Antes de iniciar, é necessário ter instalado:

- [XAMPP](https://www.apachefriends.org/pt_br/index.html)
- Navegador web
- MySQL ou MariaDB

### 2. Clonar o repositório

```bash
git clone https://github.com/joaopedrofmontrezor/empresa-crud.git
```

### 3. Configurar o projeto

Copie a pasta `empresa-crud` para o diretório `htdocs` do XAMPP.

Normalmente localizado em:

```text
C:\xampp\htdocs\
```

### 4. Configurar o banco de dados

1. Inicie o Apache e o MySQL pelo XAMPP.
2. Acesse o phpMyAdmin:

   `http://localhost/phpmyadmin`

3. Importe o arquivo `empresa.sql`, disponível na raiz do projeto.
4. O script contém a estrutura da tabela `funcionario` e um registro inicial para teste.

### 5. Executar a aplicação

Com os serviços iniciados, acesse:

```text
http://localhost/empresa-crud/
```

## 🗄️ Estrutura do banco de dados

O projeto utiliza o banco de dados `empresa`, contendo a tabela `funcionario`.

| Campo | Descrição |
|---|---|
| id | Identificador do funcionário |
| nome | Nome completo |
| email | Endereço de e-mail |
| cargo | Cargo ocupado |
| salario | Salário do funcionário |
| data_admissao | Data de admissão |
| ativo | Situação do funcionário |

## 🎯 Objetivo do projeto

O projeto foi desenvolvido com o objetivo de praticar conceitos fundamentais do desenvolvimento web, incluindo integração entre PHP e MySQL, manipulação de dados, operações CRUD e construção de interfaces utilizando Bootstrap.

## 👨‍💻 Desenvolvedor

**João Pedro Ferreira Montrezor**

- GitHub: [@joaopedrofmontrezor](https://github.com/joaopedrofmontrezor)

---

Desenvolvido para fins de aprendizado e prática em desenvolvimento web.