<html>
	<title>COMENTÁRIO</title>
	<head>
	      <link rel="shortcut icon" href="imagens/favicon.png"/>
	<!-- CHAMANDO O EDITOR TINYMCE -->

<script type="text/javascript" src="inc/jscript/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
    // Default skin
    tinyMCE.init({
        //OPÇÕES GERAIS
        mode : "exact",
        elements : "elm1",
        theme : "advanced",
        plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

        //OPÇÕES DE TEMA
        theme_advanced_buttons1 : "Salvar,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        //theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        //theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        //
        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
    });

    // O2k7 skin
    tinyMCE.init({
        //OPÇÕES GERAIS
        mode : "exact",
        elements : "elm2",
        theme : "advanced",
        skin : "o2k7",
        plugins : "pagebreak,style,layer,table,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

        //OPÇÕES DE TEMA
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        //SUBSTITUA OS VALORES PARA O PLUGIN TEMPLATE
        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
    });

    // O2k7 skin (silver)
    tinyMCE.init({
        // General options
        mode : "exact",
        elements : "elm3",
        theme : "advanced",
        skin : "o2k7",
        skin_variant : "silver",
        plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

        //OPÇÕES DE TEMA
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        //SUBSTITUA OS VALORES PARA O PLUGIN TEMPLATE
        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
    });

    // O2k7 skin (silver)
    tinyMCE.init({
        // OPÇÕES GERAIS
        mode : "exact",
        elements : "elm4",
        theme : "advanced",
        skin : "o2k7",
        skin_variant : "blue",
        plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

        //OPÇÕES DE TEMA
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        //SUBSTITUA OS VALORES PARA O PLUGIN TEMPLATE
        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
    });
</script>

<!--- Fin TinyMCE --->
	</head>
		<body>
			<center><h3><img src="imagens/imagem5.gif">Nos Avalie<he><img src="imagens/imagem1.png"></center>
			<hr>
			<form action="perguntas_sql.php" method="POST" name="comentario">
			<!-- INICIO DA TABELA DE CONTEÚDO -->
                <center><table border=0 width=50%>
                <input name=acao value=pergunta1 type=hidden>
                       <?php
                       include('inc/conecta.inc');
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
                             codpergunta = 1";
                       $cons_pergunta = pg_query ($sql_pergunta);
                       $pergunta = pg_fetch_object ($cons_pergunta);
                       ?>

                       <tr>
                           <td><textarea id="elm4" name="comentario" rows="10" cols="50" required></textarea></td>
                       </tr>
                       <tr>
                           <td colspan="2">
                           <p align="right"><a href=javascript:salvar()><img src="imagens/proximo.png" title="Avançar para a próxima pergunta"></a></p></td>
                       </tr>
                       <input name=coringa value='<?php echo $coringa ?>' type=hidden>
                       <input name=pergunta1 value='<?php echo $pergunta->codpergunta ?>' type=hidden>
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
   if (comentarios.comentario.value == ""){
      alert("Por Favor! Nos diga alguma sugestão ou crítica");
      comentarios.comentario.focus();
      exit;
   }
   document.comentarios.submit();
}
</script>
