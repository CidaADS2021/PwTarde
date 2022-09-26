<?php include "cabecalho.php";?>

<div class="card mt-4 mb-4">
    <div class="card-header bg-primary text-white">Clientes</div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <button class="btn btn-info">Novo Cliente</button>
            </div>

            
            <div class="col-2">
                <select name="opcao" class="form-control">
                    <option selected="selected" value="0">Todos</option>
                    <option value="1">Por Nome</option>
                    <option value="2">Por Código</option>
                </select>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" name="textoPesquisado" />
            </div>
            <div class="col-2">
                <button class="btn btn-primary">Pesquisar</button>

            </div>
        </div>
    </div>
</div>


<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th></th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th>1</th>
      <td>Cida</td>
      <td>aparecida.perlato@gamil.com</td>
      <td><a class="btn btn-primary">Editar</a></td>
      <td><a class="btn btn-info">Excluir</a></td>
    </tr>

    <?php
     for($i = 0;$i< 10; $i++)
     {
         ?>
            <th><?php echo $i; ?></th>
                <td>Name<?php echo $i; ?></td>
                <td>Email.<?php echo $i;?>aparecidaferrari340@gamil.com</td>
                <td><a class="btn btn-primary">Editar</a></td>
                <td><a class="btn btn-info">Excluir</a></td>
             </tr>
         <?php
     }

         ?>

  </tbody>
</table>

<?php include "rodape.php";   ?>