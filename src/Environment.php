<?php

namespace Sebastian17Yamandu\VarEnv;

class Environment{
  
/**
 * Método responsável por carregar as variáveis de ambiente
 *
 * @param string $dir - Caminho absouluta da pasta do arquivo .ENV
 * @return void
 */
  public static function load($dir){
    //Validar se o arquivo .ENV existe
    if(!file_exists($dir.'/.env')){
      return false;
    }
    
    //Definir as variáveis de ambiente
    $lines =file($dir.'/.env');
    foreach($lines as $line){
      putenv(trim($line));
    }
  }

}

?>
