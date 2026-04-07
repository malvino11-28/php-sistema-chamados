# PHP Ticket System

Sistema de chamados (ticket system) desenvolvido em PHP e MySQL, com autenticação de usuários, controle de status e integração futura com IA para classificação automática.

## Objective

Desenvolver um sistema web completo simulando um ambiente real de suporte técnico, com foco em:

- Backend estruturado
- Integração com banco de dados
- Interface funcional
- Boas práticas de desenvolvimento em equipe (Git)

## Team

### Kauan Malvino Garcia

Responsável por:

- Interface (HTML/CSS)
- Integração de telas
- Validações (front e back básicas)
- Experiência do usuário

### Olavo Gomes de Souza

Responsável por:

- Backend (PHP)
- Integração com MySQL
- Regras de negócio
- Estrutura do sistema

## Project Structure

php-ticket-system/
├─ public/
├─ app/
├─ storage/
├─ database/
├─ docs/

## Technologies

- PHP
- MySQL
- HTML/CSS
- JavaScript (básico)
- Git e GitHub

## Features

- Cadastro e login de usuários
- Criação de chamados
- Listagem de chamados
- Edição e exclusão
- Controle de status
- Filtros de busca

## Git Workflow

Regra principal: não trabalhar diretamente na branch main.

### Criar branch

git pull
git checkout -b feature/nome-da-feature

Exemplos:
feature/login
feature/ticket-list
feature/ui-dashboard

### Commit

git add .
git commit -m "feat: descrição da funcionalidade"

### Push

Use push sempre antes de mexer no projeto (para mantê-lo atualizado)
git push origin nome-da-branch

### Pull Request

1. Abrir Pull Request no GitHub
2. Revisar código
3. Aprovar
4. Fazer merge na main

## Best Practices

- Sempre rodar git pull antes de começar
- Commits pequenos e claros
- Não sobrescrever código do outro sem revisar
- Não subir arquivos sensíveis (.env, senhas)

## Environment Configuration

Criar arquivo .env baseado no .env.example:

DB_HOST=localhost
DB_NAME=database_name
DB_USER=root
DB_PASS=

OPENAI_API_KEY=your_key_here

## Status

Em desenvolvimento.

## Next Steps

- Implementar autenticação completa
- Finalizar CRUD de chamados
- Adicionar controle de status
- Integrar IA para classificação automática

## Notes

Projeto com foco em aprendizado prático, organização de código e simulação de ambiente real de desenvolvimento em equipe.
