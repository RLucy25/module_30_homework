<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<meta http-equiv="content-type" content="text/html"; charset="utf-8"> 
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<title>Главная</title> 
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="./css/styles.css">
<script src="/JS/jquery-1.6.2js" type="text/javascript"></script> 

</head> 
<body>
<div class="wrapper">
    <input type="radio" name="point" id="slide1" checked>
    <input type="radio" name="point" id="slide2">
    <input type="radio" name="point" id="slide3">
    <input type="radio" name="point" id="slide4">
    <input type="radio" name="point" id="slide5">
    <div class="slider">
      <div class="slides slide1"></div>
      <div class="slides slide2"></div>
      <div class="slides slide3"></div>
      <div class="slides slide4"></div>
      <div class="slides slide5"></div>
    </div>	
    <div class="controls">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
      <label for="slide5"></label>
    </div>
  </div>

  <div id="content">
         <div class="box">
    <?php include 'main_view.php'; ?>
              </div>
              <br class="clearfix"/>
      </div>

</body> 
<div class="footer">
            <p><strong>Контакты: ********@mail.ru тел. 945-***-**-** адрес: г.Москва *********</strong></p>
        </div>
<script src="./js/script01.js"></script>
</html>