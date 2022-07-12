<?php

    function converterBase64($file){        
        
        switch($file['error']){
            case UPLOAD_ERR_OK;
                break;
            case UPLOAD_ERR_INI_SIZE;
            case UPLOAD_ERR_FORM_SIZE;
                echo 'arquivo exedeu o tamanho limite';
                exit;
            case UPLOAD_ERR_NO_FILE;
                echo 'arquivo não enviado';
                exit;
            default:
                echo 'erro desconhecido'; 
                exit;
        }

        if($file['size'] > 10000000){
            echo 'tamanho superior a 10mb';
        }

        $tiposValidos = array(
            'png' => 'image/png',
            'jpg' => 'image/jpg',
            'jpeg' => 'image/jpeg'
        );

        if(!array_search($file['type'], $tiposValidos, true)){
            echo 'não é valido ';
        }

        
        $base64 = base64_encode(file_get_contents($file['tmp_name']));
        return sprintf("data:%s;base64,%s", $file['type'], $base64);
    }