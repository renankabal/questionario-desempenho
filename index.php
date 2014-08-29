<html>
	<title>Formulário</title>
	<head>
	      <link rel="shortcut icon" href="imagens/favicon.png"/>
	</head>
		<body>
			<center><h3><img src="imagens/imagem5.gif">Nos Avalie<he><img src="imagens/imagem1.png"></center>
			<hr>	
			
			<form action="comandos_sql.php" method="POST" name="formulario">
			<center><table border=1 width=50%>
			<input name=acao value=novo type=hidden>
			<tr>
				<td width=10%><b>Nome</b></td>
				<td><input name="pessoa" size="68" type="text" onkeyup="up(this)" required autofocus></td>
			</tr>
				 <td colspan="2">
					<center><a href=javascript:salvar()><img src="imagens/salvar.png"></a>
					<input type="reset" value="Limpar" onClick="limpa()"></center>
				 </td>
			</tr>				
			</table><center>
			</form>
			</td>	
			</tr>

			<center><br><b><font size=2>Desenvolvido por ®<br>
			Desenvolvedor WEB
			</font></b></center>				
				
		</body>
</html>
<script>
function salvar()
{
   if (formulario.pessoa.value == "")
   {
      alert("Por favor preencha seu 'NOME' !!!");
      formulario.pessoa.focus();
      exit;
   }
   document.formulario.submit();
}
//TESTA PARA O CAMPO RECEBER APENAS NÚMEROS
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
//CONVERTE MINÚSCULAS EM MAIÚSCULAS
function up(lstr){
	var str=lstr.value; //obtem o valor
	lstr.value=str.toUpperCase(); //converte as strings e retorna ao campo
}
//CONVERTE MAIÚSCULAS EM MINÚSCULAS
function down(lstr){
	var str=lstr.value; //obtem o valor
	lstr.value=str.toLowerCase(); //converte as strings e retorna ao campo
}
</script>
