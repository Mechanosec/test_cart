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
    php artisan jwt:secret    
    
    npm install
    npm run dev # для разработки
    npm run build # для остального

    php artisan migrate --seed # для инициализации БД
    php artisan migrate # если нужны только обновть БД
