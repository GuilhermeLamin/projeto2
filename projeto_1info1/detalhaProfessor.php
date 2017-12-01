
<script type="text/javascript" src="js/jquery"></script>
<script type="text/javascript" src="js/tab.js"></script>
<link rel="stylesheet" type="text/css" href="css/completo.css">


<?php

   include("cabecalho.php");
   include("professores.php");

   $siape = $_GET['cod'];

   $professor = buscaProfessor($siape);
  ?>
  <!-- conteudo principal -->

  <article class="coluna80">
    <section class="foto">
       <section class="pequenas">
      <img src="<?=$professor['foto']?>" class="clicavel" id="sem">
         </section>
    </section>
         <section class="modal img1 escondidos">



        <section class="dados">
        <section class="clique-info"><h3>Mostrar informações</h3></section>

    <section class="escondido info-professor">
      <p>Nome: <?=$professor['nome']?></p>
      <p>Email: <?=$professor['email']?></p>
      <p>Disciplina: Not found</p>
      <p>Sala: Not found</p>

         </section>
    </section>
  </article>

<?php

   include("rodape.php");

?>