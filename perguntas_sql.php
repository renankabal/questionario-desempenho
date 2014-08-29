<?
  include('inc/conecta.inc');


  switch ($acao)
  {
         case pergunta1:
               $sql_avaliacao="
               UPDATE
                     avaliacoes
               SET
                     pergunta1=$pergunta1,
                     respostapergunta1=$respostapergunta1
               WHERE
                     codavaliacao=$coringa";
               pg_query($sql_avaliacao);
               #echo $sql_avaliacao;
               break;
			   
			   
		case pergunta2:
               $sql_avaliacao="
               UPDATE
                     avaliacoes
               SET
                     pergunta2=$pergunta2,
                     respostapergunta2=$respostapergunta2
               WHERE
                     codavaliacao=$coringa";
               pg_query($sql_avaliacao);
               #echo $sql_avaliacao;
               break;
               

       case pergunta3:
               $sql_avaliacao="
               UPDATE
                     avaliacoes
               SET
                     pergunta3=$pergunta3,
                     respostapergunta3=$respostapergunta3
               WHERE
                     codavaliacao=$coringa";
               pg_query($sql_avaliacao);
               #echo $sql_avaliacao;
               break;  

          case pergunta4:
               $sql_avaliacao="
               UPDATE
                     avaliacoes
               SET
                     pergunta4=$pergunta4,
                     respostapergunta4=$respostapergunta4
               WHERE
                     codavaliacao=$coringa";
               pg_query($sql_avaliacao);
               #echo $sql_avaliacao;
               break;    

         case pergunta5:
               $sql_avaliacao="
               UPDATE
                     avaliacoes
               SET
                     pergunta5=$pergunta5,
                     respostapergunta5=$respostapergunta5
               WHERE
                     codavaliacao=$coringa";
               pg_query($sql_avaliacao);
               #echo $sql_avaliacao;
               break;   

          case pergunta6:
               $sql_avaliacao="
               UPDATE
                     avaliacoes
               SET
                     pergunta6=$pergunta6,
                     respostapergunta6=$respostapergunta6
               WHERE
                     codavaliacao=$coringa";
               pg_query($sql_avaliacao);
               #echo $sql_avaliacao;
               break;               

         case pergunta7:
               $sql_avaliacao="
               UPDATE
                     avaliacoes
               SET
                     pergunta7=$pergunta7,
                     respostapergunta7=$respostapergunta7
               WHERE
                     codavaliacao=$coringa";
               pg_query($sql_avaliacao);
               #echo $sql_avaliacao;
               break;      

          case pergunta8:
               $sql_avaliacao="
               UPDATE
                     avaliacoes
               SET
                     pergunta8=$pergunta8,
                     respostapergunta8=$respostapergunta8
               WHERE
                     codavaliacao=$coringa";
               pg_query($sql_avaliacao);
               #echo $sql_avaliacao;
               break;     

         case pergunta9:
               $sql_avaliacao="
               UPDATE
                     avaliacoes
               SET
                     pergunta9=$pergunta9,
                     respostapergunta9=$respostapergunta9
               WHERE
                     codavaliacao=$coringa";
               pg_query($sql_avaliacao);
               #echo $sql_avaliacao;
               break;      

         case pergunta10:
               $sql_avaliacao="
               UPDATE
                     avaliacoes
               SET
                     pergunta10=$pergunta10,
                     respostapergunta10=$respostapergunta10
               WHERE
                     codavaliacao=$coringa";
               pg_query($sql_avaliacao);
               #echo $sql_avaliacao;
               break;

         case comentarios:
               $sql_comentarios="
               UPDATE
                     avaliacoes
               SET
                     pergunta1=$pergunta1,
                     respostapergunta1=$respostapergunta1
               WHERE
                     codavaliacao=$coringa";
               pg_query($sql_comentarios);
               #echo $sql_comentarios;
               break;
  }
               header("location:comentarios.php");

               #header("location:pergunta2.php?coringa=$avaliacaoatual->codavaliacao");

?>
