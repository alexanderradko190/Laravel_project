# Проект с редактированием, добавлением и получением статей по API

В данном проекте реализовано получение статей по API. На вкладке "статьи" выводятся названия статей вместе с названиями категорий. Статьи можно редактировать, добавлять файлы, менять название категории. Измененные данные записываются в базу данных, и затем обновляются в таблице </br>
На вкладке "Категории" выводится id, название и slug категории </br>
Также реализована возможность регистрации, авторизации и удаления пользователя через пакет breeze для laravel </br>
Основная страница проекта находится на этапе разработки </br>

Чтобы развернуть проект, нужно выполнить следующие команды <br />
git clone https://github.com/AlexanderRadko-php/Laravel_project.git <br />
cd Laravel_project - переходим в проект <br />
Скопировать .env.example и создать в корне проекта файл .env, указать в этом файле название базы данных, порт, логин и пароль для подключения <br/>
composer install или composer update (если composer уже установлен) - создает папку vendor <br />
php artisan serve - запускает локальный сервер с проектом <br />
