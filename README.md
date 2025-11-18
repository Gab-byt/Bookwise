# 📚 Bookwise

Bookwise é um sistema simples de gerenciamento de biblioteca/escolha de livros, desenvolvido em PHP. Ele permite organizar, cadastrar e consultar livros, podendo servir como base para projetos maiores ou como MVP de uma aplicação de biblioteca digital.

---

## 🎯 Objetivos do Projeto

- Criar uma aplicação leve para armazenar dados de livros.  
- Permitir cadastro, listagem e consulta de registros.  
- Servir como base de estudo para PHP, PDO e MVC simples.  
- Facilitar futuras integrações (API, interface web, autenticação, etc.).

---

## ⚙️ Funcionalidades

- Cadastro de livros (título, autor, ano, categoria, etc).  
- Listagem de todos os livros cadastrados.  
- Consulta de detalhes de um livro específico.  
- Feedback de operações (ex: mensagem de sucesso após cadastro) via flash messaging.  

---

## 📁 Estrutura do Projeto
Bookwise/
│
├── index.php
├── routes.php
├── functions.php
├── Flash.php
│
└── views/
└── template/
└── app.php
└── home.php
└── 404.php


> A arquitetura é minimalista: sem frameworks, usando PHP puro + PDO para persistência.

---

## 🛠️ Tecnologias Utilizadas

- **PHP 8+** — linguagem principal  
- **PDO** — para abstração do banco de dados  
- **Sessions** — para gerenciamento de flash messages  
- **Frontend básico** — HTML/CSS para visualização das páginas

---

## 🚀 Como Rodar Localmente

1. Clone o repositório:  
   ```bash
   git clone https://github.com/Gab-byt/Bookwise.git

2. Entre na pasta do projeto
cd Bookwise

3. Inicie o servidor

Você pode usar Apache, XAMPP, WAMP ou até o servidor embutido do PHP:

php -S localhost:8000

4. Acesse no navegador
http://localhost:8000

5. Configure o banco de dados

O projeto pode usar SQLite ou MySQL — escolha a opção que preferir.

Crie o arquivo/banco manualmente

Ou importe o esquema se existir

6. Ajuste as credenciais

No arquivo config.php (ou equivalente no seu projeto):

Caminho do SQLite ou

Host, usuário, senha e nome da database (MySQL)

## 🧭 Como a Aplicação Funciona

✔ Página inicial exibe os livros cadastrados
✔ Formulário permite adicionar novos livros
✔ Mensagens de feedback aparecem via Flash Message
✔ Rotas inválidas exibem uma página 404 personalizada

Simples, direto e funcional — ideal para estudar arquitetura MVC e PHP puro.


##🤝 Como Contribuir

Quer melhorar o Bookwise? É fácil:

Faça um fork

Crie sua branch:

git checkout -b feature/minha-feature


Commit:

git commit -m "Adiciona nova feature"


Push:

git push origin feature/minha-feature


Abra um Pull Request

## 📄 Licença

Este projeto está sob a MIT License.
Use, estude, modifique e distribua — é totalmente livre.

## 👤 Autor

Gab-byt
Desenvolvedor e criador do Bookwise 📚💻
