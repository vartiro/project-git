<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>

    
    <?php

      //'m' for months 'M' for months but writen
      //'d' for days 'D' for days but writen 
      //'y' for two digits year 'Y' for four digits year
      //'H' for hours 
      //'i' for minutes 
      //echo date_default_timezone_get() to get timezones
      //date_default_timezone_set('America/Sao_Paulo') to set timezones
      //echo date('z') for the day of the year from 0-365
      //echo date('L') if its a leap year will return 1
      //'a' for lower casa am/pm and 'A' for upper case AM/PM
      //'U' seconds since unix epoch
      //strtotime() transforma uma string em um tempo calculavel 

      /*
      //echo time(); Gives the unix time stamp of that moment
      date_default_timezone_set('America/Sao_Paulo');
      echo date('d-m Y H:i');
      echo '<br>';
      echo date_default_timezone_get();
      echo '<br>';
      echo date('D/M/Y, H:i A, z, U');
      */

      $data_inicial = "2022-04-24";
      $data_final = "2023-01-01";

      $time_inicial = strtotime($data_inicial);
      $time_final = strtotime($data_final);

      echo $data_inicial .' - '. $time_inicial;
      echo '<br>';
      echo $data_final .' - '. $time_final; 
      echo '<br>';

      $diferenca_times = abs($time_final - $time_inicial);

      $diferenca_dias = round($diferenca_times / 86400);

      echo 'faltam um total de '. $diferenca_dias . ' dias até a data marcada'
      



    ?>
    
  </body> 
</html>