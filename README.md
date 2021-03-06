# Educational-platform
# Цель работы

Разработать ИС "Онлайн сервис помощи студентам" - сайт решением задач и информационными ресурсами.

# Описание системы

## Пользовательские роли

В системе предусмотрены 2 пользовательские роли:

* Зарегистрированный пользователь может найти интересующее его решение и обладает возможностью добавлять свои решения. Так же он может задать вопрос администратору.
* Посетитель сайта - пользователь, обладающий возможностью просматривать страницы сайта и раздел задания.

## Пользовательские интерфейсы

## Пользовательские сценарии

### Посетитель

При переходе на сайт, посетитель может зарегистрироваться, нажав на кнопку "Зарегистрироваться" в правом верхнем углу и введя все необходимые данные. Затем он может авторизоваться, нажав на кнопку "Войти". Тогда он может пользоваться всем функционалом сайта.

Чтобы посмотреть нужное решение, клиент должен выбрать категорию на главной странице сайта. Перейдя по ссылке, он ознакамливается с решениями, после чего он может вернуться на главную страницу.

Зарегистрированный пользователь так же может добавить свои решения, перейдя по ссылке "Добавить решение". Там он заполняет форму, добавляет все необходимые данные и нажимает кнопку "Добавить". После этого его решение будет автоматически добавлен на сайт в ту категорию, которую он выбрал.

Также посетитель имеет возможность обратиться к администрации сайта, перейдя по ссылке "Обратная связб". Там он заполняет форму и нажимает "Отправить". 

Пользователь может и не регистрироваться на сайте, но тогда он сможет только просматривать решения других людей.


## Компоненты системы

Система строится по архитектуре клиент-сервер. Взаимодействи компонентов происходит по протоколу HTTPS. Все пользовательские интерфейсы представляют собой веб-браузеры с загруженными соответствующими страницами. Сервер хранит все учётные данные пользователей, задания и темы заданий. Для обработки входящих запросов используется веб-сервер Apache, для обработки данных используется СУБД MySQL, программный код написан на PHP.

Система строится в соответствии с шаблоном MVC, где роль модели выполняет БД, роль вида - веб-страницы, а контроллера - скрипты на сервере и на клиентах.

## ТЗ
Сайт с полезной информацией для подготовки к зачетам и экзаменам:
Необходимо предложить пользователю список различных заданий с подробным решением к ним, ссылки на, полезные в подготовке к зачетам и экзаменам, информационные ресурсы по различным предметам.
<br/>На целевой странице должны находиться:  
* описание содержания проекта (что пользователь может найти на сайте)
* ссылки разделы сайта с переходом на страницы сайта
* форму обратной связи

<br/>Другие страницы сайта будут разделены на вкладки:  
1)	  “О нас” – содержит информацию разработчика сайта и его контакты;
2)	  “Решения” – включает в себя базу заданий с подробным решением;
3)	  “Вход/Регистрация” – являются модальными окнами, в которых пользователь в зависимости от выбора зарегистрироваться или авторизоваться;
4)	  Если пользователь уже авторизовался у него появится кнопка “Выйти” и раздел “Добавить задание”, в котором пользователь может добавить свое задание с решением;
5)	  “Поиск” – поиск на сайте.
