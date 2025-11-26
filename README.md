# 📖 Sistema Laravel CRUD de Categorias

Sistema web desenvolvido com **Laravel** que permite **criar**,
**listar**, **editar** e **excluir** categorias.\
A aplicação utiliza **Docker** para facilitar a configuração do ambiente
de desenvolvimento, incluindo **PHP**, **MySQL** e **Nginx**.

------------------------------------------------------------------------

## ✨ Funcionalidades

-   ✅ Criar nova categoria\
-   ✅ Listar todas as categorias\
-   ✅ Editar categoria existente\
-   ✅ Excluir categoria\
-   ✅ Validação de dados

------------------------------------------------------------------------

## 🛠️ Tecnologias Utilizadas

### **Backend**

-   Laravel **11.x**
-   PHP **8.2**
-   MySQL **8.0**
-   Eloquent ORM

### **Frontend**

-   Blade Templates
-   HTML5
-   CSS3

### **DevOps**

-   Docker
-   Docker Compose
-   Nginx

------------------------------------------------------------------------

## 📋 Pré-requisitos

Antes de iniciar, é necessário ter instalado:

-   **Docker Desktop** (20.10 ou superior)
-   **Composer** (opcional, apenas se quiser rodar sem Docker)

------------------------------------------------------------------------

## 🚀 Como Executar o Projeto

### **Clone o repositório**

``` bash
git clone https://github.com/seu-usuario/laravel-crud-categorias.git
cd laravel
```

### **Configure o arquivo `.env`**

O projeto já inclui um `.env` configurado. Verifique os dados do banco:

``` env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

### **Suba os containers Docker**

``` bash
docker-compose up -d
```

### **Instale as dependências**

``` bash
docker-compose exec app composer install
```

### **Gere a chave da aplicação**

``` bash
docker-compose exec app php artisan key:generate
```

### **Execute as migrations**

``` bash
docker-compose exec app php artisan migrate
```

### **Configure permissões**

``` bash
docker-compose exec app chmod -R 777 storage bootstrap/cache
```

### **Acesse a aplicação**

👉 http://localhost:8000/categorias

------------------------------------------------------------------------

## 📂 Estrutura do Projeto

    laravel/
    ├── app/
    │   ├── Http/
    │   │   └── Controllers/
    │   │       └── CategoriaController.php
    │   └── Models/
    │       └── Categoria.php
    │
    ├── bootstrap/
    ├── config/
    │
    ├── database/
    │   └── migrations/
    │       └── xxxx_create_categorias_table.php
    │
    ├── public/
    │   └── css/
    │       ├── style.css
    │       └── form.css
    │
    ├── resources/
    │   ├── css/
    │   │   ├── style.css
    │   │   └── form.css
    │   └── views/
    │       └── categorias/
    │           ├── index.blade.php
    │           ├── create.blade.php
    │           └── edit.blade.php
    │
    ├── routes/
    │   └── web.php
    │
    ├── docker-compose.yml
    ├── dockerfile
    ├── nginx.conf
    ├── .env
    └── README.md

------------------------------------------------------------------------

## 🗄️ Estrutura do Banco de Dados

**Tabela: categorias**

  Campo        Tipo           Descrição
  ------------ -------------- ---------------------------------
  id           BIGINT         Chave primária, auto incremento
  nome         VARCHAR(255)   Nome da categoria (obrigatório)
  descricao    TEXT           Descrição (opcional)
  created_at   TIMESTAMP      Data de criação
  updated_at   TIMESTAMP      Data de atualização

------------------------------------------------------------------------

## 🎯 Rotas da Aplicação

  ------------------------------------------------------------------------
  Método   URI                      Ação      Descrição
  -------- ------------------------ --------- ----------------------------
  GET      /categorias              index     Lista categorias

  GET      /categorias/create       create    Formulário de criação

  POST     /categorias              store     Salva nova categoria

  GET      /categorias/{id}/edit    edit      Formulário de edição

  PUT      /categorias/{id}         update    Atualiza categoria

  DELETE   /categorias/{id}         destroy   Exclui categoria
  ------------------------------------------------------------------------

------------------------------------------------------------------------

## 🔧 Comandos Úteis

### **Gerenciar Containers Docker**

``` bash
docker-compose ps
docker-compose stop
docker-compose start
docker-compose down
docker-compose logs -f
docker-compose exec app bash
docker-compose exec db mysql -u laravel -p
```

### **Comandos Artisan**

``` bash
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan view:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan route:list

docker-compose exec app php artisan make:migration nome_da_migration
docker-compose exec app php artisan make:controller NomeController
docker-compose exec app php artisan make:model NomeModel

docker-compose exec app php artisan migrate:rollback
docker-compose exec app php artisan migrate:fresh
```

------------------------------------------------------------------------

## 📚 Arquivos de Configuração

### **docker-compose.yml**

Orquestra: - app (Laravel + PHP 8.2) - webserver (Nginx) - db (MySQL
8.0)

### **dockerfile**

Imagem personalizada para PHP com extensões necessárias.

### **nginx.conf**

Configuração do Nginx para servir a aplicação Laravel.

