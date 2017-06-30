<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Stanislal</title>
    <!-- Links .css - Inicio -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <!-- Links .css - Fim -->
  </head>

  <body>
    <div class="size-header-top">
      <div class="size-all">
        @include ('partials.header')
      </div>
    </div>
    <div class="size-all">
      <div class="size-logo-middle">
        <a href="#" title="Stanislal Project">
          <img src="img/logo5.png">
        </a>
      </div>
      <div class="size-menu-middle">
        @include ('partials.menu_middle')
      </div>
      <div class="size-container-body">
        <div class="size-container-left">
          <div class="size-menu-left">
            @include ('partials.menu_left')
          </div>
        </div>
        <div class="size-container-right">
          <div class="size-banner">
            @include ('partials.banner')
          </div>
          <div class="size-breadcrumb">
            @include ('partials.breadcrumb')
          </div>
          <div class="size-content">
            @yield ('content')
          </div>
        </div>

      </div>
    </div>
    <div class="size-footer-bottom">
      <div class="size-all">
        @include ('partials.footer')
      </div>

    </div>


<style media="screen">

body {
  background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
    background-color: rgba(0, 0, 0, 0);
    background-image: linear-gradient(141deg, rgb(15, 184, 173) 0%, rgb(31, 200, 219) 51%, rgb(44, 181, 232) 75%);
    background-repeat: repeat;
    background-attachment: scroll;
    background-clip: border-box;
    background-origin: padding-box;
    background-position-x: 0%;
    background-position-y: 0%;
    background-size: auto auto;
}

.size-header-top {
  width: 100%;
  height: 75px;
  margin-bottom: 10px;
  min-width: 1200px;
  background: linear-gradient(to right,#453e49 0,#363039 50%,#453e49 100%);

  border-bottom: 2px solid #c4b4a8;
  color:#dad6bf;
}
.size-header-top .size-all {
  display: flex;
  padding-top: 24px;
  height: auto;
  font-size: 12px;

}
.size-all {
  width: 1200px;
  padding-left: 75px;
  padding-right: 75px;
  margin-top: 0px;
  margin-bottom: 0px;
  margin-left: auto;
  margin-right: auto;
  overflow-x: hidden;
  overflow-y: hidden;

//  border: 1px solid black;
}

.size-logo-middle {
  width: 100%;
  text-align:center;
  position: relative;
  min-height: 250px;


//  border: 1px solid black;
}

.size-logo-middle img {

  margin-bottom: 5px;
}

.size-menu-middle {
  width: 100%;

  position: relative;
//  border: 1px solid black;
}

.size-container-body {
  min-height: 800px;
  position: relative;
  display: flex;   //    Faz com que os filhos possuam sua divisão sem sobrepor

  border: 1px solid black;
}

.size-container-left {
  width: 30%;

  position: relative;
  background: linear-gradient(to right,#453e49 0,#363039 50%,#453e49 100%);
  height: auto;
  border: 1px solid black;
}

.size-container-right {
  width: 70%;
  background-color: #f1e4da;
  position: relative;
  height: auto;


  border: 1px solid black;
}

.size-footer-bottom {
  position: relative;
  min-width: 1200px;
  height: 50px;
  margin-top: 10px;
  background: linear-gradient(to right,#453e49 0,#363039 50%,#453e49 100%);

  border-top: 2px solid #c4b4a8;
}
.size-footer-bottom .size-all {
  display: flex;
  height: auto;
  font-size: 12px;
}

.size-banner {
  width:100%;
  border-bottom: 1px solid black;

//  background-color: purple;
}

.size-breadcrumb .breadcrumb {
  background-color: #dec9c2;
  border-radius: 0px;
  font-size: 12px;
  margin-bottom: 0px;
}

.size-content {
  padding: 10px 20px;    // qualquer coisa modificar é o espaçamento padrão do cotent
}

</style>

  <!-- Incluir todos os plugins compilados , ou incluir arquivos individuiais necessarios  .js - Inicio -->
   <!-- jQuery (Necessario para Boostrap Plugins JavaScript) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="/js/bootstrap.min.js"></script>
   <script src="/jquery/jquery-3.2.1.min.js" charset="UTF-8"></script>
  <!-- Incluir todos os plugins compilados , ou incluir arquivos individuiais necessarios  .js - Fim -->
  </body>
</html>
