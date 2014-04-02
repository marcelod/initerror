

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

        <h1>Itens do Produto</h1>

        <div class="panel panel-primary">
          <div class="panel-heading">
            <?php echo strtoupper($produto) ?>
          </div>

          <ul class="list-group">

            <?php if (count($itens) > 0): ?>
              
              <?php foreach ($itens as $item): ?>

              <li class="list-group-item">
                <?php echo $item->nome ?>
              </li>
              
              <?php endforeach ?>

            <?php else: ?>
              <li class="list-group-item">Não há itens cadastrado para esse produto</li>
            <?php endif ?>

        
          </ul>
        </div>
  
    </div><!-- /.container -->


