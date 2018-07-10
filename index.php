  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <title>Быстрый старт. Размещение интерактивной карты на странице</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
      </script>
      <script type="text/javascript">
          ymaps.ready(init);

          function init(){
              var myMap = new ymaps.Map("map", {
                  center: [55.76, 37.64],
                  zoom: 7
              });
              var myPlacemark = new ymaps.Placemark([55.76, 37.64], {
                  hintContent: 'Содержимое всплывающей подсказки',
                  balloonContent: 'Содержимое балуна'
              });

              myMap.geoObjects.add(myPlacemark);
          }

      </script>
  </head>

  <body>
  <form method="POST">
      <input type="text" name="desc" placeholder="Адрес" value=""/>
      <input type="submit" name="search" value="Искать"/>
  </form>
  <div id="map" style="width: 600px; height: 400px"></div>
  </body>

  </html>

  <?php
      require_once 'autoload.php';
      $address='Тверская 6';
      $api = new \Yandex\Geo\Api();
      $api->setPoint(40.5166187, 50.4452705);
      $result=$api->setQuery($address);
      echo "<pre>";
      print_r($result);
      $api->setLimit(10);

      ?>