# CashFlow

### Sobre
Sistema web para controle de fluxo de caixa, vendas e registro de pagamentos voltado para pequenos comércios. A aplicação inclui autenticação de usuários, controle de permissões (usuário comum e administrador) e registro de auditoria para rastreamento de alterações no sistema. 

<div align="center">
  <table>
    <tr>
      <td><img src="https://github.com/user-attachments/assets/2878bcc2-6abf-4f4d-ae02-a8c20188b2a1" width="400" alt="Demonstração 1"></td>
      <td><img src="https://github.com/user-attachments/assets/2206b29b-b563-4c15-b576-62f3ebae4f6d" width="400" alt="Demonstração 2"></td>
    </tr>
  </table>
</div>

### 🛠 Tecnologias
* **PHP**
* **Laravel**
* **MySQL**
* **Bootstrap**

### ✨ Funcionalidades
1. **Cadastro de vendas** e registro de pagamentos.
2. **Controle de fluxo de caixa**.
3. **Operações CRUD** completas para gerenciamento.
4. **Autenticação e permissões** (Master e Comum).
5. **Registro de auditoria** para rastrear alterações.

### 🚀 Como rodar o projeto
1. Abra o terminal e navegue até a pasta onde deseja ter o projeto e use o comando `git clone https://github.com`.
2. No terminal (na raiz do projeto) execute o comando `composer install`.
3. Crie um banco de dados MySQL com o nome `cashflow`.
4. Configure o arquivo `.env` alterando o nome do banco, usuário e senha (caso tenha).
5. Execute o comando `php artisan key:generate`.
6. Execute o comando `php artisan migrate:fresh`.
7. Execute o comando `php artisan db:seed`.
8. Finalmente, inicie o servidor executando o comando `php artisan serve`.

> [!IMPORTANT]
> **OBSERVAÇÃO:** Para fazer o login e testar o projeto, há uma lista de usuários (master e comum) listados em `database/seeders/UsuarioSeeder.php`.
> Para um teste rápido use os seguintes usuários fictícios:
<table>
    <tr>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Acesso</th>
    </tr>
    <tr>
        <td>joaopedro@exemplo.com </td>
        <td>joao123</td>
        <td>Master</td>
    </tr>
    <tr>
        <td>henrysantos@exemplo.com </td>
        <td>henry123</td>
        <td>Comum</td>
    </tr>
</table>
