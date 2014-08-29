<?
  include('inc/conecta.inc');


  switch ($acao)
  {
         case novo:
               $sql_avaliacao="
               INSERT INTO
               avaliacoes (
                      pessoa
                      )
               VALUES (
                      '$pessoa'
                      )";
               pg_query($sql_avaliacao);
               #echo $sql_avaliacao;
               break;
  }
               $sql_avaliacaoatual="
               SELECT
                     codavaliacao, pessoa
               FROM
                     avaliacoes ORDER BY codavaliacao DESC limit 1";
               $cons_avaliacaoatual = pg_query($sql_avaliacaoatual);
               $avaliacaoatual = pg_fetch_object($cons_avaliacaoatual);
               $avaliacaoatual->codavaliacao;

               header("location:iniciar_avaliacao.php?coringa=$avaliacaoatual->codavaliacao");

?>
