<?php

if($_POST){
    $valor1 = $_POST['valor01'];
    $valor2 = $_POST['valor02'];
    $operacao = $_POST['operacao'];
    
    if ($operacao == 'Soma') {
        $total = $valor1 + $valor2;
        echo $total;
    } elseif ($operacao == 'Subtração') {
        $total = $valor1 - $valor2;
        echo $total;
    } elseif ($operacao == 'Multiplicação') {
        $total = $valor1 * $valor2;
        echo $total;
    } elseif ($operacao == 'Divisão') {
        $total = $valor1 / $valor2;
        echo $total;
    }
    return;
}
   
?>


<form method="post" action="#">
  <label>Valor 1:</label>
  <input type="text" name="valor01">
  <br /><br />
  <label>Valor 2:</label>
  <input type="text" name="valor02">
  <br /><br />
  <select name="operacao">
    <option>Soma</option>
    <br /><br />
    <option>Subtração</option>
    <br /><br />
    <option>Multiplicação</option>
    <br /><br />
    <option>Divisão</option>
    <br /><br />
  </select>
  <input type="submit" value="CALCULAR">
</form>