<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Updates</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            body {
                margin-top: 91px;
                padding-top: 50px;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                display: flex;
                justify-content: space-around;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                width: 25%;
                 min-width: 320px;
             }

            .title {
                font-size: 84px;
            }
            .titles {
                font-size: 44px;
                margin-top: 10px;
                padding: 10px;
            }
            .links{
                padding-top: 40px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .ul{
                font-size: 20px;
                font-weight: 200;
                text-decoration: none;
                text-align: left;

            }
            .ul span {
                font-size: 24px;
                color: #599e82;
                font-weight: 600;
            }
            .ul li {
                padding-left: 20px;
                margin-bottom: 20px;
            }
            .container.flex-center {
                background: rgb(245, 245, 245);
                padding-bottom: 10px;
                box-shadow: 0px 1px 5px rgba(128, 128, 128, 0.42);
                position: fixed;
                width: 100%;
                top: 0;
                z-index: 555;
            }
            .ul a {
                font-size: 14px;
                font-weight: 600;
                color: #57885b;
            }

        </style>
    </head>
    <body>
        <div class="container flex-center">
            <div class="titles">Republic Api Laravel</div>
            <div class="links flex-center">
                <a href="http://api.republic05.ru/api/documentation">Documentation</a>
                <a href="/api/updates">Updates</a>
                <a href="https://github.com/sinka49/api.republic">GitHub</a>
            </div>
        </div>
        <div class="flex-center position-ref full-height">

           <div class="content">
                <h2>Дебаг</h2>
               <ol class="ul">
                   <li>Убраны обертки типа <br><span>{tours =>[...] }</span><br><span>{places =>[...] }</span><br><span>...</span></li>
                   <li>Получение информации о пользователе <span>/me</span><br><span>...</span></li>
                   <li>Обновление информации о пользователе <span>/me</span><br><span>...</span></li>
                   <li>Обновление аватара <span>/me/avatar</span><br>Проверять только через POSTMAN(Не забыть снять галку в хедерах запроса Content-Type) Через сваггер не пашет падла<span>...</span></li>
                   <li>Смена пароля <span>/me/reset_password</span><br><span>...</span></li>
               </ol>
            </div>
            <div class="content">
                <h2>Что нового?</h2>

                <ol class="ul">
                    <li>Реализована аутентификация пользователя <br><span>/login</span><br>Аутентификация реализуется на основе Bearer схемы. Формат токенов - JWT <br> В каждом новом ответе сервера в хедерах присылается новый токен
                        <br>Это сделано для обеспечения безопасности общения между клентским приложением и сервером. При использовании сваггера  обратить внимание на присланные серваком хедеры
                        <br><span>email: loki@asgard.com <br>password: blabla <br>- test account</span><br><span>...</span></li>
                    <li>Реализована регистрация пользователя <br><span>/signup</span><br><span>...</span></li>
                    <li>Реализована функция забыли пароль <br><span>/refresh_password</span><br><span>...</span></li>
                </ol>
            </div>

            <div class="content">
                <h2>Полезно почитать</h2>

                <ol class="ul">
                    <li>Обзор способов и протоколов аутентификации в веб-приложениях<br><a href="https://habrahabr.ru/company/dataart/blog/262817/">https://habrahabr.ru/company/dataart/blog/262817/</a>
                        <br><span>...</span></li>
                </ol>
            </div>
        </div>
    </body>
</html>
