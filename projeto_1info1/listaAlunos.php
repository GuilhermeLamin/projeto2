<?php

     include("cabecalho.php");
     include("alunos.php");
     
?>
  
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/tab.js"></script>
    <article class="coluna80">


        <a class="tab " id="tab1">1INFO1</a>
        <a class="tab" id="tab2">1INFO2</a>
        <a class="tab" id="tab3">1INFO3</a>

        
        <ol class="conteudos todos escondidos">
        <section class= "aluno">        
        <ol class="conteudo tab1" id="cont1"> 

<?php


        $lista = listaAlunosTurma('1info1');


        foreach ($lista as $aluno) {
    	
?>

   	      <li><a href="detalhaAluno.php?cod=<?=$aluno['matricula'] ?>"><?=$aluno['nome'] ?> </a></li>


<?php
    }
?>

    </ul>
  </section>


<section class="aluno">
      
      <ol class="conteudo escondido tab2" id="cont2">
    <ol>
<?php



        $lista = listaAlunosTurma('1info2');


        foreach ($lista as $aluno) {
    	
?>

   	      <li><a href="detalhaAluno.php?cod=<?=$aluno['matricula'] ?>" ><?=$aluno['nome'] ?> </a></li>


<?php
    }
?>

    </ol>
  </section>
      <section class="aluno">   
      <ol class="conteudo escondido tab3" id="cont3">
<?php


        $lista = listaAlunosTurma('1info3');


        foreach ($lista as $aluno) {
    	
?>

   	      <li><a href="detalhaAluno.php?cod=<?=$aluno['matricula'] ?>" ><?=$aluno['nome'] ?></a></li>


<?php
    }
?>

    </ol>

  </section>


</article>

<?php

include("rodape.php");

?>