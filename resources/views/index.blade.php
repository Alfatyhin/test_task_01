<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница
    </title>
    <link rel="stylesheet" href="./css/vendors.min.css">
    <link rel="stylesheet" href="../css/main.min.css">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="maincontent">

        <section class="section order">
          <div class="container">
            @if (isset($result))
              <div class="message_result" >
                  {{$result}}
              </div>
            @else

            <div class="section__title">Тестовое задание</div>
            <div class="order__form">

              <form class="order__form-tag" id="order-form" action="{{route('order.save')}}" method="post">

                  @csrf

                <div class="order__form-col">
                  <div class="order__form-row order__form-row_double">
                    <label class="order__form-block">
                      <div class="order__form-label">Имя</div>
                      <input class="order__form-input" name="name" value="{{ isset($name) ? $name : '' }}" type="text" placeholder="">
                        @if ($errors->has('name'))
                            <div class="alert alert-danger">{{$errors->first('name')}}</div>
                        @endif
                    </label>
                    <label class="order__form-block">
                      <div class="order__form-label">Фамилия</div>
                      <input class="order__form-input" name="last_name" value="{{ isset($last_name) ? $last_name : '' }}" type="text" placeholder="">
                        @if ($errors->has('name'))
                            <div class="alert alert-danger">{{$errors->first('last_name')}}</div>
                        @endif
                    </label>

                  </div>
                  <div class="order__form-row order__form-row_double">
                    <label class="order__form-block">
                      <div class="order__form-label">email</div>
                      <input class="order__form-input" name="email" value="{{ isset($email) ? $email : '' }}" type="email" placeholder="">
                        @if ($errors->has('email'))
                            <div class="alert alert-danger">{{$errors->first('email')}}</div>
                        @endif
                    </label>
                  </div>

                </div>
                <div class="order__form-col">

                  <div class="order__form-buttons">


                    <div class="order__form-row">
                      <input class="order__form-button" name="" type="submit" value="Заказать">
                      <input class="order__form-button order__form-button_reset" name="" type="reset" value="Очистить">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            @endif
          </div>
        </section>
      </div>
    </div>


    <div class="status-popup popup" id="success">
      <div class="status-popup__inner">
        <div class="status-popup__message">Сообщение отправлено</div><a class="status-popup__close btn" href="#">Закрыть</a>
      </div>
    </div>
    <div class="status-popup popup" id="error">
      <div class="status-popup__inner">
        <div class="status-popup__message error-message">Произошла ошибка</div><a class="status-popup__close btn" href="#">Закрыть</a>
      </div>
    </div>
    <script src="./js/vendors.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="./js/main.min.js"></script>
  </body>
</html>
