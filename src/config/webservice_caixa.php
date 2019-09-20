<?php

return [

   "config" => [

      /**
       * Número de tentativas e timeout antes de falhar
       */
      "RETRIES" => 20,        // número de tentativas de conexão com o WS antes de falhar
      "TIMEOUT" => 5,         // timeout para desistir da resposta
      "INTERVAL" => 1.5,      // intervalo entre tentativas

      /**
       * Modo de desenvolvimento. Exibe erros e outras informações.
       */
      "DESENVOLVIMENTO" => true,

      /**
       * Tag <VERSAO> do <HEADER>
       */
      "VERSAO" => '1.2',

      /**
       * Exibe informações de DEBUG quando igual a $_GET['DEBUG']
       */
      'HASH_DEBUG' => 'HASH SECRETO PARA DEBUG',

      /**
       * configurações header wsdl caixa
       */
      'USUARIO_SERVICO' => 'SGCBS02P',
      'SISTEMA_ORIGEM' => 'SIGCB',
   ],

   /**
    * Localização HTTP dos arquivos WSDL
    */
   "wsdl" => [
      "base_url" => 'https://barramento.caixa.gov.br',
      "consulta" => "/sibar/ConsultaCobrancaBancaria/Boleto/Externo?wsdl",
      "manutencao" => "/sibar/ManutencaoCobrancaBancaria/Boleto/Externo?wsdl",
   ],

];