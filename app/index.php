<?php

require_once 'test.php';

?>

<!--
  __  __            _  _          ____                   _
 |  \/  |          | |(_)        / __ \                 (_)
 | \  / |  ___   __| | _   __ _ | |  | | _ __    ___     _  _ __     _   _   __ _
 | |\/| | / _ \ / _` || | / _` || |  | || '_ \  / _ \   | || '_ \   | | | | / _` |
 | |  | ||  __/| (_| || || (_| || |__| || | | ||  __/ _ | || | | | _| |_| || (_| |
 |_|  |_| \___| \__,_||_| \__,_| \____/ |_| |_| \___|(_)|_||_| |_|(_)\__,_| \__,_|

-->

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>magaz-xiaomi</title>
  <!-- build:css -->
  <link rel="stylesheet" href="css/libs.css">
  <!-- endbuild -->
  <!-- build:css2 -->
  <link rel="stylesheet" href="css/main.css">
  <!-- endbuild -->

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<div class="header">
  <div class="container">
    <div class="row">
    <div class="flex-center">
      <div class="col-md-3">
        <a href="/">
          <img src="http://placehold.it/170x70" alt="">
        </a>
      </div>
      <div class="col-md-6">
        <h1>СУПЕР СЛОГАН</h1>
      </div>
      <div class="col-md-3">
        <div class="phone">
          <p><img src="" alt="">(096) 658-56-43</p>
          <p><img src="" alt="">(096) 658-56-43</p>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="oblako"><p>Цену<br>снижено на<br><span>8%</span></p></div>

<div class="bg-image section">
  <!-- <img class="xiaomi_1" src="img/home.png" alt=""> -->
  <div class="polosa"></div>
  <div class="section-1">
    <img class="socket" src="img/drawing.svg" alt="">
    <h2>
      Купи Power Bank<br>
      <small>Возьми розетку в дорогу</small>
    </h2>
    <div class="bounce">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.4 490.4" style="enable-background:new 0 0 490.4 490.4;" xml:space="preserve" width="60px" height="60px">
      <g>
        <g>
          <path d="M490.4,245.2C490.4,110,380.4,0,245.2,0S0,110,0,245.2s110,245.2,245.2,245.2S490.4,380.4,490.4,245.2z M24.5,245.2 c0-121.7,99-220.7,220.7-220.7s220.7,99,220.7,220.7s-99,220.7-220.7,220.7S24.5,366.9,24.5,245.2z"/>
          <path d="M253.9,360.4l68.9-68.9c4.8-4.8,4.8-12.5,0-17.3s-12.5-4.8-17.3,0l-48,48V138.7c0-6.8-5.5-12.3-12.3-12.3    s-12.3,5.5-12.3,12.3v183.4l-48-48c-4.8-4.8-12.5-4.8-17.3,0s-4.8,12.5,0,17.3l68.9,68.9c2.4,2.4,5.5,3.6,8.7,3.6    S251.5,362.8,253.9,360.4z"/>
        </g>
      </g>
      </svg>
      <a href="#why"></a>
    </div>
  </div>
</div>

<div id="why" class="why">
  <div class="container">
    <div class="row">
      <h2>Оставайтесь всегда на связи</h2>
      <img class="why_img" src="img/why.png" alt="">
      <div class="col-md-3">
        <h3>Lorem ipsum.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure exercitationem obcaecati ipsam consectetur cupiditate voluptates ab atque, temporibus ullam asperiores.</p>
      </div>
      <div class="col-md-3">
        <h3>Lorem ipsum.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore autem quasi reiciendis ex quidem? Illum quam alias unde, ab neque!</p>
      </div>
      <div class="col-md-3">
        <h3>Lorem ipsum.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic facere aliquid id ex necessitatibus reprehenderit, vitae officia dolor ipsum, veniam.</p>
      </div>
      <div class="col-md-3">
        <h3>Lorem ipsum.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, tempore fuga hic? Officiis dicta nesciunt aliquam dolor possimus, recusandae eligendi.</p>
      </div>
    </div>
  </div>
</div>

<div id="section-2" class="section-2 section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Lorem ipsum dolor.</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <form class="form-1">
          <div>
            <input class="sort radio" type="radio" id="up" name="sort" data-sort="my-order:desc">
            <label for="up">Сначала дорогие</label>
          </div>
          <div>
            <input class="sort radio" type="radio" id="down" name="sort" data-sort="my-order:asc">
            <label for="down">Сначала дешовые</label>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <form class="form-2">
          <div>
            <input class="filter radio" data-filter="<?=$list_cat?>" type="radio" id="1" name="sort">
            <label for="1">Все</label>
          </div>
          <?php foreach ($category_name as $name): ?>
              <div>
                  <input class="filter radio" data-filter=".<?=$name['code']?>" type="radio" id="<?=$name['code']?>" name="sort">
                  <label for="<?=$name['code']?>"><?=$name['name']?></label>
              </div>
          <? endforeach; ?>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row" id="Container">
            

          <? foreach ($products as $product) : ?>
          <?php
              $category_code = $product['category'];
              $get_category_code = $category_query . ' WHERE id=' . $category_code;
              $code = $base->get_all_items($get_category_code);
          ?>
          <div class="col-md-3 mix <?=$code['0']['code']?>" data-my-order="<?=$product['price']?>">
            <div class="absolute">
              <div class="product">
                <h3><?=$product['name']?></h3>
                <img src="img/header.jpg" alt="">
                <div class="hover-content">
                  <table>
                    <thead>
                      <tr>
                        <th colspan="2">Характеристики</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                        $product_id = $product['id'];
                        $get_property = 'SELECT `name`, `value` FROM property_produst WHERE product_id=' . $product_id;
                        $propertys = $base->get_all_items($get_property);
                    ?>

                    <? for ($i = 0; $i<count($propertys); $i++): ?>
                        <tr>
                            <td><?=$propertys[$i]['name']?></td>
                            <td><?=$propertys[$i]['value']?></td>
                        </tr>
                    <? endfor; ?>

                    </tbody>
                  </table>
                </div>
                <div class="price"><?=$product['price']?> <span>грн.</span></div>
                <form class="ajaxform" method="POST">
                  <input type="hidden" name="model" value="<?=$product['name']?>" class="model">
                  <input data-toggle="modal" data-target="#myModal" type="submit" value="Заказать" name="order" class="submit">
                </form>
              </div>
            </div>
          </div>
          <?php endforeach; ?>


        </div>
      </div>
    </div>
  </div>
</div>

<div class="how_we_work">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>How we work?</h2>
        <div class="row">
          <div class="flex-center">
            <div class="col-md-5 col-md-offset-4">
              <h3>Выбор Power Bank-а</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ducimus molestiae ipsa, dignissimos modi minima, facere quidem. Voluptates natus quo dolore quasi quidem, rem. Adipisci.</p>
            </div>
            <div class="col-md-3">
              <img src="img/1.svg" alt="">
            </div>
          </div>
        </div>
        <div class="line-left">
            <img src="img/down.svg" alt="">
        </div>
        <div class="row">
          <div class="flex-center">
            <div class="col-md-3">
              <img src="img/2.svg" alt="">
            </div>
            <div class="col-md-5">
              <h3>Подтверждение заказа</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ducimus molestiae ipsa, dignissimos modi minima, facere quidem. Voluptates natus quo dolore quasi quidem, rem. Adipisci.</p>
            </div>
          </div>
        </div>
        <div class="line-left">
            <img src="img/down-right.svg" alt="">
        </div>
        <div class="row">
          <div class="flex-center">
            <div class="col-md-5 col-md-offset-4">
              <h3>Доставка</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ducimus molestiae ipsa, dignissimos modi minima, facere quidem. Voluptates natus quo dolore quasi quidem, rem. Adipisci.</p>
            </div>
            <div class="col-md-3">
              <img src="img/3.svg" alt="">
            </div>
          </div>
        </div>
        <div class="line-left">
            <img src="img/down.svg" alt="">
        </div>
        <div class="row">
          <div class="flex-center">
            <div class="col-md-3">
              <img src="img/4.svg" alt="">
            </div>
            <div class="col-md-5">
              <h3>Оплата при получении</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ducimus molestiae ipsa, dignissimos modi minima, facere quidem. Voluptates natus quo dolore quasi quidem, rem. Adipisci.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about_us">
  <div class="container">
    <h2>Отзывы наших клиентов:</h2>
    <div class="owl-carousel">
      <div>
        <div class="face">
          <img src="//placehold.it/250x250" alt="">
        </div>
        <div class="feedback">
          <h4>Клименко Александр</h4>
          <p>Заказали две банки с девушкой, приятно порадовала цена, доставили оперативно. Спасибо ребятам.</p>
        </div>
      </div>
      <div>
        <div class="face">
          <img src="//placehold.it/250x250" alt="">
        </div>
        <div class="feedback">
          <h4>Клименко Александр</h4>
          <p>Заказали две банки с девушкой, приятно порадовала цена, доставили оперативно. Спасибо ребятам.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 left">
        <p>Copyright &copy; 2016</p>
      </div>
      <div class="col-md-6 right">
        <p>Создание сайта <a href="//mediaone.in.ua" target="_blank">
          <img class="copyright" src="img/maps.svg" alt="Создание сайтов в Киеве - www.mediaone.in.ua" />
        </a></p>
      </div>
    </div>
  </div>
</div>

<!-- ____________________________Modal____________________________ -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h4>Вы заказываете</h4>
        <input class="hidden-jquery hidden-query-style" type="text" value="" disabled="disabled">
        <p>
          Для подтверждения Вашего заказа и уточнения адреса доставки, введите Ваш номер телефона.
        </p>
        <form id="ajaxform" method="post">
          <input class="hidden-jquery" name="model" type="hidden" value="">
          <input id="number" name="number" type="text" placeholder="Ваш номер телефона">
          <input type="submit" value="Позвонить мне">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ____________________________END Modal____________________________ -->

<div id="toTop"> &uarr; Наверх </div>

<script src="js/libs.min.js"></script>
<!-- build:js -->
<script src="js/main.js"></script>
<!-- endbuild -->
</body>
</html>
