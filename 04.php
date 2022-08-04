<h1>Tipos de triangulos!</h1>
<form action="#" method="post">
  <label for="#">01º Valor:</label>
  <input type="number" name="a" value="a">
  <label for="#">02º Valor:</label>
  <input type="number" name="b" value="b">
  <label for=" #">03º Valor:</label>
  <input type="number" name="c" value="c">
  <input type="submit" name="submit">
</form>

<?php
  #um triangulo é formado quando três a soma de dois lados qualquer dos três lados
  #equilatero -> 3 lados iguais 
  #Isósceles -> 2 lados iguais (a = b != c)
  #Escaleno -> 3 lados diferentes
  if($_POST){
    if(($_POST["a"] + $_POST["b"] > $_POST["c"]) && ($_POST["a"] + $_POST["c"] > $_POST["b"]) && ($_POST["b"]+$_POST["c"]>$_POST["a"])){
    
    if($_POST["a"]==$_POST["b"] && $_POST["b"]==$_POST["c"])
      echo "Triangulo equilátero - Possui três lados Iguais";
    elseif ($_POST["a"]==$_POST["b"] || $_POST["a"]==$_POST["c"] || $_POST["b"]==$_POST["c"]) 
      echo "Triangulo isósceles - Possui 2 lados iguais";
    else
      echo "Triângulo escaleno - Possui três lados diferentes";
  }else
    echo "Opa! Não é um triangulo";
  }
?>

