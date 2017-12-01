<?php
	

if(isset($_SESSION['login'])){

	print_r($_POST);

    print_r($_FILES);

  $origem = $_FILES['foto']['tmp_name'];

  $data = date('dmYHis');

  $destino = "imagens/professores/".$data.$_FILES['foto']['name'];
  
    move_uploaded_file($origem, $destino);


 	$siape= $_POST['siape'];
 	$nome = $_POST['nome'];
 	$email = $_POST['email'];
 	$foto = $destino;

 	$linha = "\n".$siape.",".$nome.",".$email.",".$foto;
	
	
	$arquivo = fopen("dados/professores.csv", "a+");

	
	fwrite($arquivo, $linha);

	
	fclose($arquivo);

echo('<meta http-equiv="refresh"content=3;url=listaProfessores.php>');

}else{
  echo("Acesso negado");
  echo('<meta http-equiv="refresh"content=3;url=listaProfessores.php>');
}


?>
