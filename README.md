# Sistema de Cadastro de Usuários

## Descrição

- Desenvolva um sistema de cadastro de usuários. O sistema deve coletar o nome do usuário, email e a senha do usuario. 
- Utilize **HTML** para a interface, **JavaScript** para validação no lado do cliente e **PHP** para processar e armazenar os dados no servidor (usando um banco de dados PostgreSQL ou MySQL).

## O que será avaliado:

- Conhecimento básico em javascript
- Conhecimento básico em html e css
- Conhecimento básico em php
- Conhecimento básico em banco de dados

## Requisitos

### Interface em HTML:

Um formulário com os seguintes campos:
- **Nome** (texto)
- **Email** (email)
- **Senha** (númerico)
- **Botão para enviar**

### Validação com JavaScript:

- Todos os campos são obrigatórios.
- O email deve ter um formato válido.
- A senha deve conter pelo menos 8 caracteres.

### Processamento com PHP:

- Receber os dados do formulário via método POST.
- Validar novamente os dados no servidor para segurança.
- Inserir os dados em uma tabela `usuario` no banco de dados PostgreSQL.
- Retornar uma mensagem de sucesso ou erro para o usuário.

### Banco de Dados PostgreSQL:

Criação de uma tabela `usuario` com os seguintes campos:
- `id` (chave primária, auto-incremento)
- `nome` (VARCHAR)
- `email` (VARCHAR)
- `senha` (TEXT)
- `data_criacao` (TIMESTAMP)
