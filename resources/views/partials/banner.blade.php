<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicadores "as 3 bolinhas" que mostram em que posição o slide está! -->

<!--  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <a href="#" title="Aprenda o basico em Mysql">
      <img src="img/mysqlbasico.png" alt="mysql">
      </a>
    </div>

    <div class="item">
      <a href="#" title="Aprenda o basico em PHP">
      <img src="img/phpbasico.png" alt="php">
      </a>
    </div>

    <div class="item">
      <a href="#" title="Conheça o Uri Judge">
      <img src="img/urijudge.png" alt="uri">
      </a>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Voltar</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Avançar</span>
  </a>
</div>

<style media="screen">
  .item img {
    width: 100%;
    max-height: 200px;
  }
</style>
