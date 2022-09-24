<?php 
$titulo = "Disciplinas";
include "./cabecalho.php"?>

<div class="card">
    <div class="card-header">
        Lista de Disciplinas
    </div>
    <div class="card-body">
        <div class="row g-3 align-items-center">
            <div class="col-auto pr-3">
                <label for="exampleFormControlInput1" class="col-form-label">Pesquisa de Disciplinas</label>
            </div>
            <div class="col-auto">
                <input type="text" id="form-control" class="form-control" placeholder = "Digite a Materia">
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
  array("0","Algoritmos e Lógica de Programação","Algoritmos","IAL002"),
  array("1","Programação em Microinformática","Microinformática","ILM001"),
  array("2", "Matemática Discreta","Matemática","MMD001"),
  array("3", "Linguagem de Programação","Linguagem","ILP010"),
  array("4", "Eletiva - Programação de Scripts","Scripts","ILP502"),
  array("5", "Estruturas de Dados","E.D","IED001"),
  array("6", "Interação Humano Computador","IHC","IHC001"),
  array("7", "Laboratório de Hardware","Desmonta PC","IHW100"),
  array("8", "Eletiva - Programação WEB","Ferneko","ILP508"),
  array("9", "Sistemas Operacionais I","S.O","ISO100"),
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