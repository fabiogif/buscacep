<?php
	 require __DIR__ . '/src/BuscaViaCEP_inc.php';
	 //usar o helper
     use Jarouche\ViaCEP\HelperViaCep;
	 
     //tipos permitidos
     $array_tipos =['JSON'];
     
     // testando todos os tipos de requisição
     foreach ($array_tipos as $tipo){
         //helper retorna da dados do cep através dos parâmetros tipo e cep  
         $class_cep = HelperViaCep::getBuscaViaCEP($tipo,'40325465');
            print_r('<pre>');
           print_r($class_cep['result']);
           print_r('</pre>');
     }
   
     
   