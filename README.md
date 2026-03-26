# CashFlow

### Sobre
Sistema web para controle de fluxo de caixa, vendas e registro de pagamentos voltado para pequenos comércios. A aplicação inclui autenticação de usuários, controle de permissões (usuário comum e administrador) e registro de auditoria para rastreamento de alterações no sistema. 

<div align="center">
  <table>
    <tr>
      <td><img src="https://github.com/user-attachments/assets/2878bcc2-6abf-4f4d-ae02-a8c20188b2a1" width="400" alt="Demonstração 1")" width="400" alt="Demonstração 1"></td>
      <td><img src="https://github.com/user-attachments/assets/2206b29b-b563-4c15-b576-62f3ebae4f6d" width="400" alt="Demonstração 2" width="400" alt="Demonstração 2"></td>
    </tr>
  </table>
</div>

### 🛠 Tecnologias
* **PHP 8.2**
* **Laravel 10**
* **Docker & Docker Compose** (Ambiente Isolado)
* **MySQL 8.0**
* **Nginx** (Servidor Web)
* **Bootstrap**

### ✨ Funcionalidades
1. **Cadastro de vendas** e registro de pagamentos.
2. **Controle de fluxo de caixa**.
3. **Operações CRUD** completas para gerenciamento.
4. **Autenticação e permissões** (Master e Comum).
5. **Registro de auditoria** para rastrear alterações.

---

### 🚀 Como rodar o projeto (Docker)

Siga os passos abaixo para subir o ambiente completo utilizando Docker de forma rápida e automatizada:

**Passo 1: Clonar o repositório**
Abra o seu terminal, escolha uma pasta e execute o comando abaixo para baixar o projeto e entrar na pasta:
```bash 
git clone https://github.com/JoaoPedroCM/cashflow && cd cashflow
```

**Passo 2: Configurar as variáveis de ambiente**
Crie o arquivo .env a partir do exemplo. As configurações de banco de dados já estão otimizadas para o Docker:
```bash
cp .env.example .env
```

**Passo 3: Subir os containers**
Inicie os serviços de Banco de Dados, Aplicação e Servidor Web em segundo plano:
```bash
docker compose up -d
```

**Passo 4: Instalação e Preparação do Sistema**
Agora, execute a sequência de comandos abaixo para instalar as dependências do PHP, gerar a chave de segurança e popular o banco de dados
```bash
docker compose exec app composer install
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate:fresh --seed
```

**Passo 5: Acessar a aplicação**
Com tudo pronto, basta abrir o seu navegador nos endereços abaixo:
*   **Aplicação:** http://localhost:8080
*   **Gerenciador de Banco (phpMyAdmin):** http://localhost:8081

### 🔑 Dados de Acesso

Para testar as funcionalidades de permissão (Master e Comum), utilize as credenciais abaixo:

<table>
  <tr>
    <th>Usuário (E-mail)</th>
    <th>Senha</th>
    <th>Nível de Acesso</th>
  </tr>
  <tr>
    <td>joaopedro@exemplo.com</td>
    <td>joao123</td>
    <td><strong>Master</strong></td>
  </tr>
  <tr>
    <td>henrysantos@exemplo.com</td>
    <td>henry123</td>
    <td><strong>Comum</strong></td>
  </tr>
</table>

> [!IMPORTANT]
> **DICA DE DESENVOLVIMENTO:** Como o projeto roda dentro de containers isolados, qualquer comando do Artisan ou Composer deve ser precedido por: `docker compose exec app`.
> Exemplo: `docker compose exec app php artisan tinker`.
