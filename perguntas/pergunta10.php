<html>
	<title>PERGUNTA 10</title>
	<head>
	      <link rel="shortcut icon" href="../imagens/favicon.png"/>
	</head>
		<body>
			<center><h3><img src="../imagens/imagem5.gif">Nos Avalie<he><img src="../imagens/imagem1.png"></center>
			<hr>	
			
			<form action="../perguntas_sql.php" method="POST" name="pergunta10">
			<!-- INICIO DA TABELA DE CONTE�DO -->
                <center><table border=0 width=50%>
                <input name=acao value=pergunta10 type=hidden>
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
                             codpergunta = 10";
                       $cons_pergunta = pg_query ($sql_pergunta);
                       $pergunta = pg_fetch_object ($cons_pergunta);
                       ?>
                       <tr>
                           <td colspan="2"><b><?php echo $pergunta->pergunta?></b></td>
                       </tr>
                       <tr>
                           <td width="5%"><input type="radio" name="respostapergunta10" value="<?php echo $pergunta->codresposta1?>"></td>
                           <td><?php echo $pergunta->resposta1?></td>
                       </tr>
                       <tr>
                           <td width="5%"><input type="radio" name="respostapergunta10" value="<?php echo $pergunta->codresposta2?>"></td>
                           <td><?php echo $pergunta->resposta2?></td>
                       </tr>
                       <tr>
                           <td width="5%"><input type="radio" name="respostapergunta10" value="<?php echo $pergunta->codresposta3?>"></td>
                           <td><?php echo $pergunta->resposta3?></td>
                       </tr>
                       
                       <tr>
                           <td colspan="2"><p align="right"><a href=javascript:salvar()><a href=../comentarios.php ><img src="../imagens/proximo.png" title="Avan�ar para a pr�xima pergunta"></a></a></p></td>
                       </tr>
                       <input name=coringa value='<?php echo $coringa ?>' type=hidden>
                       <input name=pergunta10 value='<?php echo $pergunta->codpergunta ?>' type=hidden>
                </table><center>
                <!-- FIM DA TABELA CONTE�DO -->
			</form>
			</td>	
			</tr>
				
		</body>
</html>
<script>
function salvar()
{
   if (pergunta10.respostapergunta10.value == ""){
      alert("Por Favor! Escolha uma op��o");
      pergunta10.respostapergunta10.focus();
      exit;
   }
   document.pergunta10.submit();
   
}
</script>
