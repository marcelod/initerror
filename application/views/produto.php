

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Exemplo</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="home">Home</a></li>
            <li class="active"><a href="produto">Produtos</a></li>
            <li><a href="calendario">Calendário</a></li>
            <li><a href="contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

        <h1>Produtos</h1>

        <div class="list-group">

        <?php foreach ($produtos as $produto): ?>

          <a href="produto/<?php echo $produto->slug ?>" class="list-group-item">
            <?php echo $produto->nome ?>
          </a>
          
        <?php endforeach ?>
        
        </div>
  
    </div><!-- /.container -->


