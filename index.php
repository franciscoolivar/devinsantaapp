<html>
  <body>
    <h1>Testando a Conexação com Mysql</h1>
    <?php
      $conecta = mysql_connect("mysql23283-devinsanta.jelastic.websolute.net.br", "olivar", "abcd1234") or print (mysql_error()); 
      mysql_select_db("devinsantaapp", $conecta) or print(mysql_error()); 
      $sql = "SELECT * FROM usuario"; 
      $result = mysql_query($sql, $conecta); 
 
      while($consulta = mysql_fetch_array($result)) { 
       print "Coluna1: $consulta[coluna1] - Coluna2: $consulta[coluna2]<br>"; 
      } 
     mysql_free_result($result);   
     mysql_close($conecta); 

   ?>
  </body>
</html>