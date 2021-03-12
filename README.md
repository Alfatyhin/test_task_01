# задание:

* Сделать форму обратной связи, которая будет принимать:
* email, имя и фамилию
* Фронтенд: простой, можно взять бутстрап или любую другую библиотеку для верстки
* Бекенд:
1. Должен валидировать,
2. сохранять данные в базу
3. отправлять email администратору сервера, email должен отправляться с помощью очереди,
* ***старайся писать поменьше кода в контроллерах и использовать возможности laravel по максимуму, будет бонусом feature тестирование данного функционала***


# выполнение

* ***верстка взята из задания по бургерной***
1. установка ларавел
2. создание миграций
3. внедрение верстки, убрал всё лишнее
4. создана модель администратора с методом отправки уведомления о заказе через очередь
5. создан роут и контроллер заказов, он принимает данные формы и запускает процесс создания заказа и отправки почты администратору
6. создана модель заказов с методом записи нового заказа, метод также делает валидацию
7. создана очередь отправки писем админу
8. создан класс для писем увудомлений о заказах
9.создан шаблон (очень простой для писем о заказах аднину)
10. попробовал написать тесты, надо дальше разбираться с ними, тема нужная




