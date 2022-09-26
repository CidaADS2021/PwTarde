<?php include "cabecalho.php"; ?>

<?php

 $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas/byid/".$_GET["id"]);
 $dados = json_decode($dados,true);
//  echo "<pre>";
//  printf_r($dados);
//  echo "</pre>";

?>
<div class="row">
    <div class="col-4 offset-4">
        <form>
            <div class="form-group">
                <labe1>Nome da Disciplina</labe1>
                <input name="nome" class="form-control" value="<?php echo $dados["nome"]; ?>"/>
            </div>

            <div class="form-group">
                <labe1>Id da Disciplina</labe1>
                <input name="nome" class="form-control" value="<?php echo $dados["disciplinaId"]; ?>"/>
            </div>

            <div class="form-group">
                <labe1>Apelido</labe1>
                <input name="nome" class="form-control" value="<?php echo $dados["apelido"]; ?>"/>
            </div>
            
            <div class="form-group">
                <labe1>Sigla</labe1>
                <input name="nome" class="form-control" value="<?php echo $dados["sigla"]; ?>"/>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-sucess">
                    Salvar
                </button>
                
            </div>
        </form>
    </div>
</div>

<?php include "rodape.php"; ?>