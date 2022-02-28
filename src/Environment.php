<?php

namespace Sebastian17Yamandu\VarEnv;

class Environment{

  /**
   * Validar que existe arquivo com variáveis de ambiente
   * @param string $dir - Caminho da pasta onde se enconta o arquivo .env
   */
  public static function load($dir){
    //Verificar as o arquivo com variáveis está definido
    if(!file_exists($dir.'/.env')){
      echo ".env não encontrado";
      return false;
    }

    //Listar as variáveis definidas
    $lines =file($dir.'/.env');
    foreach($lines as $line){
      putenv(trim($line));
    }
  }
}