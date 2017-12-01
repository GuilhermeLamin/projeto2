<?php

     include("cabecalho.php");
?>
  <!-- conteudo principal -->
  <article class="coluna80">
    <section class="lista">
    <ul>
<?php

     include("professores.php");

        $lista = listaProfessores();

        foreach ($lista as $professor) {
    	
?>
   	      <li><a href="detalhaProfessor.php?cod=<?=$professor['siape'] ?>"><?=$professor['nome'] ?></a></li>

<?php
    }
?>

    </ul>

<?php
//isset - is set - está definida?
if(isset($_SESSION['login'])){
?>  
   <a href="formProfessor.php">Inserir professor</a>
<?php
}
?>

  </section>
  </article>

<?php
    include("rodape.php");

?>