<?php
/*
Template Name: Страница thanksPage
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thanks</title>
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/image/logo.png" type="image/x-icon">
  <style type="text/css">
  .divTwo {
      width: 600px;
      min-height: 428px;
      text-align: center;
      z-index: 999999;
      position: relative;
      margin: 80px auto;
      color: #000000;
      font-family:sans-serif;
  }
    body{
      background: #dddddd;
    }
  .divTwo p{
    height: auto;
    margin: 34px auto;
    font-size: 26px;
    color: #050505;
  }
  .divTwo img{
    width: auto;
  }
  .divTwo h6{
    height: auto;
    margin: 34px auto;
    font-size: 40px;
    color: #050505;
  }
  .divTwo p:nth-child(2){
    font-weight: bold;
  }
  .divTwo a{
    display: block;
    width: 292px;
    height: 40px;
    text-transform: uppercase;
    color: #ffffff;
    background: #8ebc54;
    text-align: center;
    font-size:17px;
    padding-top: 20px;
    font-weight: bold;
    border:none;
    text-shadow: none;
    transition:0.3s;
    text-decoration: none;
    margin: 0 auto;
  }
    .divTwo a:hover{
      width: 320px;
    }
      @media screen and (max-width: 480px){
      .divTwo p {
          font-size: 18px;
      }
      .divTwo {
          width: 252px;
      }
      .divTwo a{
        width: 268px;
      }
    }
  </style>
</head>
<body>
<!-- thanks-->
  <div class="divTwo">
    <img src="<?php bloginfo('template_directory'); ?>/image/logo.png">
    <h6>Спасибо<br>Ваша заявка принята</h6>
    <p>Мы свяжемся с Вами в течение 15 минут</p>
    <p><a href="<?php bloginfo( 'url' ) ?>/" rel="homepage">вернуться на сайт</a></p>
  </div>
<!-- thanks-->
</body>
</html>