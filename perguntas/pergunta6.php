<html>
	<title>PERGUNTA 6</title>
	<head>
	      <link rel="shortcut icon" href="../imagens/favicon.png"/>
	</head>
		<body>
			<center><h3><img src="../imagens/imagem5.gif">Nos Avalie<he><img src="../imagens/imagem1.png"></center>
			<hr>	
			
			<form action="../perguntas_sql.php" method="POST" name="pergunta6">
			<!-- INICIO DA TABELA DE CONTEÚDO -->
                <center><table border=0 width=50%>
                <input name=acao value=pergunta6 type=hidden>
                       <?php
                       include('../inc/conecta.inc');
                       $sql_pergunta = "
                       SELECT
                             codpergunta,
                             pergunta,
                             respostas1.codresposta as codresposta1,
                             respostas2.codresposta as codresposta2,
                             respostas3.codresposta as codresposta3,
                             respostas4.codresposta as codresposta4,
                             respostas5.codresposta as codresposta5,
                             respostas1.resposta as resposta1,
                             respostas2.resposta as resposta2,
                             respostas3.resposta as resposta3,
                             respostas4.resposta as resposta4,
                             respostas5.resposta as resposta5
                       FROM
                             perguntas
                             LEFT JOIN respostas as respostas1 ON respostas1.codresposta = perguntas.codresposta1
                             LEFT JOIN respostas as respostas2 ON respostas2.codresposta = perguntas.codresposta2
                             LEFT JOIN respostas as respostas3 ON respostas3.codresposta = perguntas.codresposta3
                             LEFT JOIN respostas as respostas4 ON respostas4.codresposta = perguntas.codresposta4
                             LEFT JOIN respostas as respostas5 ON respostas5.codresposta = perguntas.codresposta5
                       WHERE
                             codpergunta = 6";
                       $cons_pergunta = pg_query ($sql_pergunta);
                       $pergunta = pg_fetch_object ($cons_pergunta);
                       ?>
                       <tr>
                           <td colspan="2"><b><?php echo $pergunta->pergunta?></b></td>
                       </tr>
                       <tr>
                           <td width="5%"><input type="radio" name="respostapergunta6" value="<?php echo $pergunta->codresposta1?>"></td>
                           <td><?php echo $pergunta->resposta1?></td>
                       </tr>
                       <tr>
                           <td width="5%"><input type="radio" name="respostapergunta6" value="<?php echo $pergunta->codresposta2?>"></td>
                           <td><?php echo $pergunta->resposta2?></td>
                       </tr>
                       <tr>
                           <td width="5%"><input type="radio" name="respostapergunta6" value="<?php echo $pergunta->codresposta3?>"></td>
                           <td><?php echo $pergunta->resposta3?></td>
                       </tr>
                       
                       <tr>
                           <td colspan="2"><p align="right"><a href=javascript:salvar()><a href=pergunta7.php ><img src="../imagens/proximo.png" title="Avançar para a próxima pergunta"></a></a></p></td>
                       </tr>
                       <input name=coringa value='<?php echo $coringa ?>' type=hidden>
                       <input name=pergunta6 value='<?php echo $pergunta->codpergunta ?>' type=hidden>
                </table><center>
                <!-- FIM DA TABELA CONTEÚDO -->
			</form>
			</td>	
			</tr>
				
		</body>
</html>
<script>
function salvar()
{
   if (pergunta6.respostapergunta6.value == ""){
      alert("Por Favor! Escolha uma opção");
      pergunta6.respostapergunta6.focus();
      exit;
   }
   document.pergunta6.submit();
}
</script>
