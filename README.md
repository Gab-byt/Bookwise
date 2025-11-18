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
2.Acesse a pasta do projeto:

cd Bookwise


3.Configure seu servidor web (ex: Apache) ou use o servidor embutido do PHP:

php -S localhost:8000

4.Abra http://localhost:8000 no navegador.

5.  Crie o banco de dados ou arquivo SQLite, dependendo da sua configuração.

6. Ajuste no arquivo config.php (ou equivalente) os parâmetros do DB.

##✅ Como Usar

Acesse a página inicial para ver os livros cadastrados.

Use o formulário de cadastro para inserir novos livros.

Após cadastrar, uma mensagem de sucesso aparece (flash).

Se navegar para rota inválida, a aplicação mostra uma página 404 personalizada.

##📚 Próximos Passos / Melhoria

Validação de formulário (client-side e server-side).

Implementação de autenticação para permitir usuários e permissões.

Versão responsiva (design mobile).

Integração com banco de dados mais robusto (MySQL, PostgreSQL).

API REST para permitir consumo externo.

Paginação, busca e filtros de livros.

Sistema de empréstimo de livros (se for para biblioteca real).

##👥 Contribuição

Contribuições são bem-vindas! Se quiser ajudar:

Fork esse repositório

Crie uma branch para a sua feature (git checkout -b feature/nome-da-feature)

Faça commit das suas mudanças (git commit -m 'Adiciona feature X')

Push para sua branch (git push origin feature/nome-da-feature)

Abra um Pull Request

##📄 Licença

Esse projeto está sob a MIT License (ou outra que você prefira). Sinta-se livre para usar, modificar e distribuir conforme necessário.

##✍️ Autor

Gab­-byt — desenvolvedor principal e idealizador do Bookwise
