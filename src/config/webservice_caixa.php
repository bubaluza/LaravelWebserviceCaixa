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
       * Exibe informações de DEBUG quando igual a $_GET['DEBUG']
       */
      'HASH_DEBUG' => 'HASH SECRETO PARA DEBUG',
   ],

   /**
    * informações que serão impressas no cabeçalho do boleto
    */
   "boleto" => [
      'CEDENTE' => 'NOME DO CEDENTE',
      'IDENTIFICACAO' => 'IDENTIFICACAO DO CEDENTE NO CABECALHO',
      'CNPJ' => '999999999999999',
      'ENDERECO1' => 'PRIMEIRA LINHA DE ENDERECO',
      'ENDERECO2' => 'SEGUNDA LINHA DE ENDERECO',
      'UNIDADE' => '9999',
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