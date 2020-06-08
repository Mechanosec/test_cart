### запрос на создание продуктов

    CREATE TABLE products (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(250) NOT NULL DEFAULT '',
        description longtext,
        image_url VARCHAR(80) DEFAULT '',
        price double(8,2) DEFAULT 0.00,
        availability tinyint(1) DEFAULT 1,
        deleted_at timestamp,
        created_at timestamp,
        updated_at timestamp
    )


### Развертывание
    composer install
    
    cp .env.example .env
    
    # настроить в файле .env подключение к локальной базе данных
    
    php artisan key:generate
    
    npm install
    npm run dev # для сборки стилей и js

    php artisan migrate # для заполнения базы товарами
