<h1>Matrícula Curso PHP</h1>
<form action="#" method="post">
  <label for="#">Nome:</label>
  <input type="text" name="nome"><br><br>
  <label for="#">E-mail:</label>
  <input type="email" name="email"><br><br>
  <label for=" #">Data de nascimento:</label>
  <input type="date" name="datanasc"><br><br>
  <label for=" #">Telefone para Contato?</label>
  <input type="text" name="phone"><br><br>
  <label for=" #">Teve contato com PHP?</label>
  <input type="text" name="contatophp"><br><br>
  <label for=" #">Porgrama em outra Linguagem, Qual?</label>
  <input for="for" type="text" name="outraling"><br><br>
  <input type="submit" name="submit">
</form>

<?php
if($_POST){
  if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nasc = $_POST['datanasc'];
    $telefone = $_POST['phone'];
    $contatophp = $_POST['contatophp'];
    $linguagem = $_POST['outraling'];
    
      echo  "<h3>Dados do Aluno:</h3><br> Nome: ".$nome."<br> E-mail: ".$email." <br>  Data de Nascimento ".$nasc." <br> Telefone: ".$telefone." <br> Contato com PHP ".$contatophp." <br> Porgrama em outra Linguagem ".$linguagem." ";  
  }
  
}  
?>