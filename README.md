---

# Laravel Notes

https://github.com/user-attachments/assets/978f6b2d-7822-488b-b64e-d2804260591e

## Descrição

O **Laravel Notes** é um aplicativo de anotações simples, desenvolvido com o framework PHP **Laravel** e utilizando **Blade** para a renderização de views. O objetivo do projeto é fornecer uma plataforma para criação, visualização, edição e exclusão de anotações com **CRUD completo**. A aplicação também implementa uma **confirmação de exclusão** antes de realizar a remoção das notas, além de permitir o uso do **soft delete**, garantindo que os dados não sejam apagados permanentemente.

## Funcionalidades

- **CRUD Completo**: Criar, visualizar, editar e excluir anotações.
- **Confirmação de Excluir**: Antes de excluir uma anotação, o usuário será solicitado a confirmar a ação.
- **Soft Delete**: Anotações excluídas podem ser restauradas se necessário, sem remoção definitiva.

## Requisitos

- PHP >= 7.4
- Composer
- MySQL ou outro banco de dados configurado corretamente

## Instalação

1. **Clone o repositório**:
    ```bash
    git clone https://github.com/Gabriel-otirB/laravel-notes.git
    cd laravel-notes
    ```

2. **Instale as dependências**:
    ```bash
    composer install
    ```

3. **Crie o arquivo `.env`**:
    Copie o arquivo `.env.example` e renomeie para `.env`:
    ```bash
    cp .env.example .env
    ```

4. **Configuração do Banco de Dados**:
    No arquivo `.env`, substitua as configurações de banco de dados conforme suas referências:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_notes
    DB_USERNAME=user_laravel_notes
    DB_PASSWORD=password
    ```

5. **Execute as migrações**:
    Com o banco de dados configurado, execute as migrações para criar as tabelas no banco:
    ```bash
    php artisan migrate
    ```

6. **Execute o Seeder de Usuários**:
    Para popular a tabela de usuários, execute o comando:
    ```bash
    php artisan db:seed --class=UsersTableSeeder
    ```

7. **Acesse a aplicação**:
    Após a configuração, você pode iniciar o servidor de desenvolvimento com o seguinte comando:
    ```bash
    php artisan serve
    ```
    
    Agora, acesse a aplicação em [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Recursos do Projeto

- **Blade Templates**: Utilizado para renderizar as views da aplicação.
- **Laravel Eloquent**: Para gerenciamento da base de dados e consultas de anotações.
- **Soft Deletes**: Implementação de soft delete nas anotações para garantir que não sejam apagadas permanentemente sem recuperação.
- **Validação de Exclusão**: Ações de delete são confirmadas antes de serem realizadas para evitar exclusões acidentais.

## Contribuições
Projeto feito com base acadêmica do professor **João Ribeiro**.
Sinta-se à vontade para contribuir para o projeto. Para isso, faça um **fork** do repositório, faça as modificações desejadas e envie um **pull request**.

---
