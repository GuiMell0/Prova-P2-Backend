# 📖 Sobre o Projeto
# Sistema web desenvolvido com Laravel que permite criar, listar, editar e excluir categorias.
# Utiliza Docker para PHP, MySQL e Nginx.

# ✨ Funcionalidades
# - Criar nova categoria
# - Listar categorias
# - Editar categoria
# - Excluir categoria
# - Validação de dados

# 🛠️ Tecnologias Utilizadas
# Backend:
#   Laravel 11.x
#   PHP 8.2
#   MySQL 8.0
#   Eloquent ORM
#
# Frontend:
#   Blade
#   CSS3
#   HTML5
#
# DevOps:
#   Docker
#   Docker Compose
#   Nginx

# 📋 Pré-requisitos
# - Docker Desktop 20.10+
# - Composer (opcional)


# -------------------------------------------------------
# 🚀 COMO EXECUTAR O PROJETO
# -------------------------------------------------------

# 1️⃣ Clone o repositório
git clone https://github.com/seu-usuario/laravel-crud-categorias.git
cd laravel

# 2️⃣ Configure o arquivo .env
# O arquivo já está configurado, mas as variáveis importantes são:
# DB_CONNECTION=mysql
# DB_HOST=db
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=laravel
# DB_PASSWORD=laravel

# 3️⃣ Suba os containers Docker
docker-compose up -d

# 4️⃣ Instale dependências
docker-compose exec app composer install

# 5️⃣ Gere chave da aplicação
docker-compose exec app php artisan key:generate

# 6️⃣ Execute as migrations
docker-compose exec app php artisan migrate

# 7️⃣ Configure permissões
docker-compose exec app chmod -R 777 storage bootstrap/cache

# 9️⃣ Acesse no navegador:
# http://localhost:8000/categorias



# -------------------------------------------------------
# 📂 ESTRUTURA DO PROJETO
# -------------------------------------------------------
# (representação em texto)
#
# laravel/
# ├── app/
# │   ├── Http/Controllers/CategoriaController.php
# │   └── Models/Categoria.php
# ├── bootstrap/
# ├── config/
# ├── database/migrations/xxxx_create_categorias_table.php
# ├── public/css/{style.css, form.css}
# ├── resources/
# │   ├── css/{style.css, form.css}
# │   └── views/categorias/{index.blade.php, create.blade.php, edit.blade.php}
# ├── routes/web.php
# ├── storage/
# ├── tests/
# ├── vendor/
# ├── docker-compose.yml
# ├── dockerfile
# ├── nginx.conf
# ├── .env
# └── README.md



# -------------------------------------------------------
# 🗄️ Estrutura do Banco de Dados
# -------------------------------------------------------
# Tabela: categorias
# id          BIGINT     PK AUTO_INCREMENT
# nome        VARCHAR(255)  NOT NULL
# descricao   TEXT
# created_at  TIMESTAMP
# updated_at  TIMESTAMP



# -------------------------------------------------------
# 🎯 Rotas da Aplicação (Laravel)
# -------------------------------------------------------
# GET     /categorias               -> index
# GET     /categorias/create        -> create
# POST    /categorias               -> store
# GET     /categorias/{id}/edit     -> edit
# PUT     /categorias/{id}          -> update
# DELETE  /categorias/{id}          -> destroy



# -------------------------------------------------------
# 🔧 Comandos Úteis
# -------------------------------------------------------

# Status dos containers
docker-compose ps

# Parar containers
docker-compose stop

# Iniciar containers parados
docker-compose start

# Remover containers
docker-compose down

# Logs em tempo real
docker-compose logs -f

# Acessar o container app
docker-compose exec app bash

# Acessar MySQL
docker-compose exec db mysql -u laravel -p


# Laravel Artisan
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan view:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan route:list

# Criar nova migration
docker-compose exec app php artisan make:migration nome_da_migration

# Criar controller
docker-compose exec app php artisan make:controller NomeController

# Criar model
docker-compose exec app php artisan make:model NomeModel

# Reverter migration
docker-compose exec app php artisan migrate:rollback

# Recriar tabelas
docker-compose exec app php artisan migrate:fresh



# -------------------------------------------------------
# 📚 Arquivos de Configuração
# -------------------------------------------------------
# docker-compose.yml → Orquestra app, webserver (nginx), db (mysql)
# dockerfile → Imagem PHP personalizada
# nginx.conf → Configuração do Nginx

