<?php

namespace App\Http\Controllers;

use App\Mail\TesteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TesteController extends Controller {

    public function vaiGaroto() {

        try {
            
            Mail::to('mr.machado@gmail.com')->send(new TesteMail());
            
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        
        // // return GoogleTranslate::trans('Eu sou Marcelo', 'en');
        // // // ou 
        // // $str = new GoogleTranslate('en');
        // // return $str->translate('Eu sou Marcelo');

        // $languages = [
        //     'en', 
        //     'fr', 
        //     'it', 
        //     'es', 
        //     'de', 
        //     'nl', 
        //     'ru', 
        //     'ja', 
        //     'zh',
        //     'ko', 
        // ];

        // $arquivos = [
        //     // 'index/about.php' => '../resources/lang/pt-BR/index/about.php',
        //     // 'index/branches.php' => '../resources/lang/pt-BR/index/branches.php',
        //     // 'index/contact.php' => '../resources/lang/pt-BR/index/contact.php',
        //     'index/contact-link.php' => '../resources/lang/pt-BR/index/contact-link.php',
        //     // 'index/counter.php' => '../resources/lang/pt-BR/index/counter.php',
        //     // 'index/customers.php' => '../resources/lang/pt-BR/index/customers.php',
        //     // 'index/main.php' => '../resources/lang/pt-BR/index/main.php',
        //     // 'index/quote.php' => '../resources/lang/pt-BR/index/quote.php',
        //     // 'index/services.php' => '../resources/lang/pt-BR/index/services.php',
        //     // 'layout/header.php' => '../resources/lang/pt-BR/layout/header.php',
        // ];

        // $str = new GoogleTranslate();
        // $str->setSource('pt-BR');

        // set_time_limit(500);

        // foreach ($languages as $language) {
                
        //     $str->setTarget($language);
            
        //     echo '<br />// ********';
        //     echo '<br />// ' . $language . '';
        //     echo '<br />// ******** <br />';
        //     foreach ($arquivos as $arq => $arquivo) {
        //         $campos = require $arquivo;
                
        //         echo '<br />// ' . $arq . ' <br />';
        //         echo 'return [ <br />';
        //         foreach ($campos as $key => $value) {
        //             echo '\'' . $key . '\' => \'' . $str->translate($value) . '\',<br />';
        //         }
        //         echo ']; <br />';
        //     }
        // }

        // return;
    }
}
