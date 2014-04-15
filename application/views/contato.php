

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
            <li><a href="produto">Produtos</a></li>
            <li><a href="calendario">Calendário</a></li>
            <li class="active"><a href="contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

        <h1>Contato</h1>  

        <?php echo validation_errors();?>  

        <?php echo form_open('contato/enviar'); ?>

            <div class="form-group">
              <label for="nome">*Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Deixe um nome para contato" value="<?php echo set_value('nome'); ?>">
            </div>

            <div class="form-group">
              <label for="email">*E-mail</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Deixe um e-mail para contato" value="<?php echo set_value('email'); ?>">
            </div>

            <div class="form-group">
              <label for="mensagem">*Mensagem</label>
              <textarea name="mensagem" id="mensagem" class="form-control" placeholder="Deixe aqui uma mensagem" rows="5"><?php echo set_value('mensagem'); ?></textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Enviar">

        <?php echo form_close(); ?>
  
    </div><!-- /.container -->
