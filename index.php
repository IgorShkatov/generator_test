<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/main.css">
</head>
<body>
<div class="container-btn">
    <button class="click-btn">Кликни</button>
</div>

<div class="modal-wrapper">
<div class="container">

        <div class="form-wrapper">
            <div class="form-header">
                <h2>Получите набор файлов<br> для руководителя:</h2>
                <button id="btn-close"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                        <image id="Слой_9" data-name="Слой 9" width="16" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABdElEQVQ4jY3TTUtVYRTF8V92QSS449BpxU2tiWaJSS+G3yJBTYJmTSxwUAPBhEA/gEgv36FJBBVaib1oZMP7EZIGxaWyYss+cLjcW+7hOee/nvWsvc6h3Z6eDTzFAr452PRiGfUKTmMIf3DvACJ9eIBBbB6+Xa0GMIorCME1/GoDn8IjDGALN0LgDX7gPC6mk9ctRE5iNU/ewVW8D4F4+QoNXMLldPISvxPux+OEtzGZDhQC8tRGXmU0nTzH8bQ9mNBUnFxAlSabSwnexy104xjOJHwNH8pArLE5qBC9jkUcyWcvcLMZjulokXSE9wxfS88+t4LbCdSwgqP4gu8Z2h10/k+glmmP5J3HMZvf3cUcuspAeQsnsmFDuedpvMvEG9mTMfzERtGTQiC6HfC50p4DjomtRE8CGE5X4WgdeyEQJz/E2Qxrok1gAYTIhWxsONn/F56k7Y+YwdtWaecUFS/+nc7oQVj8lA3b/AdcnijZPOp/AZRiYarKUhfqAAAAAElFTkSuQmCC"/>
                    </svg></button>


            </div>

            <div class="form-content">
                <div class="form-images">
                    <img id="icons-files" src="img/icons.png" alt="icons">
                    <img class="main-img" src="img/form-image.png" alt="main-image">
                </div>
                <div class="form">
                    <form action="sendmail.php" method="post">
                        <label for="email">Введите Email для получения файлов:</label>

                        <input id="email" type="email" name="email" placeholder="E-mail" required>

                        <label for="tel">Введите телефон для подтверждения доступа:</label>
                        <input data-mask="+7 (000) 000-00-00"
                               pattern="\\+7 ([0-9]{3}\) [0-9]{3}[\-][0-9]{2}[\-][0-9]{2}" name="tel" id="tel" class="tel" placeholder="+7 (000) 000-00-00" value="" required>

                        <button type="submit">Скачать файлы <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="39" viewBox="0 0 35 39">
                                <image id="Слой_4" data-name="Слой 4" width="35" height="39" xlink:href="data:img/png;base64,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"/>
                            </svg>
                        </button>
                        <span><p>pdf 4,7 mb</p>
                    <p>doc 0.8 mb</p>
                    <p>xls 1.2 mb</p></span>
                    </form>
                </div>
            </div>



        </div>

</div>
</div>

<script src="js/main.js"></script>
</body>
</html>