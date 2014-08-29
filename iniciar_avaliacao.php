<?php
  include('inc/conecta.inc');
  
  $sql_pessoa = "
  SELECT pessoa FROM avaliacoes WHERE codavaliacao=$coringa";
  $cons_pessoa = pg_query($sql_pessoa);
  $pessoa = pg_fetch_object($cons_pessoa);
?>
<html>
	<title>QUESTIONÁRIO</title>
	<head></head>
		<body>
			<center><img src="imagens/imagem2.png"><br>	
			<font size=3><b>SEJA BEM VINDO <?php echo $pessoa->pessoa ?></b></font></center><br>
			<table border=0 width="60%" align="center">
            <tr>
                <td>
            <font size=2 text-align=justify>
             A empresa Proesc Soluções em TI, criada no final de 2008, tem como atividade predominante o desenvolvimento de Software para governo eletrônico.<br>
            <b>Negócio:</b>Soluções em Tecnologia da informação.<br>
            <b>Missão:</b>Promover o desenvolvimento de soluções tecnológicas inovadoras, visando a agilidade na gestão da informação com responsabilidade social.<br>
            <b>Visão:</b>Ser referência nacional no desenvolvimento de soluções tecnológicas de gestão, até 2018.<br>
            <b>Estamos sempre Buscando excelencia nos nossos produtos e por isso contamos com a sua ajuda e com sua opiniões</b></font><p><br></p>
                </td>
            </tr>
            </table>
            <center><a href=javascript:iniciar(<?php echo $coringa ?>) title="Clique aqui para iniciar questionário de avaliação"><input type="button" value="INICIAR AVALIAÇÃO"></a><center>
		</body>
</html>
<script>
function iniciar(coringa)
{
   if (confirm('Deseja Realmente Iniciar a Avaliação ?'))
   {
      location.replace('perguntas/pergunta1.php?coringa='+coringa);
   }
   
}
</script>
