<?php 
$titulo = "Salas";
include "./cabecalho.php"?>

<div class="card">
    <div class="card-header">
        Lista de Salas
    </div>
    <div class="card-body">
        <div class="row g-3 align-items-center">
            <div class="col-auto pr-3">
                <label for="exampleFormControlInput1" class="col-form-label">Pesquisa de Salas</label>
            </div>
            <div class="col-auto">
                <input type="text" id="form-control" class="form-control" placeholder = "Digite a Sala">
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary">Pesquisar</button>
            </div>
        </div>
    </div>
</div>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Apelido</th>
        <th>Sigla</th>
    </tr>
<?php
$tabela = array
(
  array("0","Sala 4","Sala 4","Sala4"),
  array("1","Sala 5","Sala 5","Sala5"),
  array("2", "Laboratório 4","Laboratorio de Informatica","Lab04"),
  array("3", "Laboratório 1","Laboratorio de Informatica","Lab01"),
  array("4", "Laboratório 2","Laboratorio de Informatica","Lab02"),
);
foreach ($tabela as $key => $value) {
        echo "<tr>";
   foreach ($tabela[$key] as $celula){
      echo "<td>".$celula."</td>";
   };
   echo "</tr>";
};
?>
</table>
<?php include "./rodape.php"?>