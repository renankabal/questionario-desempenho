<?php
  include('inc/conecta.inc');
  
  $sql_pessoa = "
  SELECT pessoa FROM avaliacoes WHERE codavaliacao=$coringa";
  $cons_pessoa = pg_query($sql_pessoa);
  $pessoa = pg_fetch_object($cons_pessoa);
?>
<html>
	<title>QUESTION�RIO</title>
	<head></head>
		<body>
			<center><img src="imagens/imagem2.png"><br>	
			<font size=3><b>SEJA BEM VINDO <?php echo $pessoa->pessoa ?></b></font></center><br>
			<table border=0 width="60%" align="center">
            <tr>
                <td>
            <font size=2 text-align=justify>
             A empresa Proesc Solu��es em TI, criada no final de 2008, tem como atividade predominante o desenvolvimento de Software para governo eletr�nico.<br>
            <b>Neg�cio:</b>Solu��es em Tecnologia da informa��o.<br>
            <b>Miss�o:</b>Promover o desenvolvimento de solu��es tecnol�gicas inovadoras, visando a agilidade na gest�o da informa��o com responsabilidade social.<br>
            <b>Vis�o:</b>Ser refer�ncia nacional no desenvolvimento de solu��es tecnol�gicas de gest�o, at� 2018.<br>
            <b>Estamos sempre Buscando excelencia nos nossos produtos e por isso contamos com a sua ajuda e com sua opini�es</b></font><p><br></p>
                </td>
            </tr>
            </table>
            <center><a href=javascript:iniciar(<?php echo $coringa ?>) title="Clique aqui para iniciar question�rio de avalia��o"><input type="button" value="INICIAR AVALIA��O"></a><center>
		</body>
</html>
<script>
function iniciar(coringa)
{
   if (confirm('Deseja Realmente Iniciar a Avalia��o ?'))
   {
      location.replace('perguntas/pergunta1.php?coringa='+coringa);
   }
   
}
</script>
