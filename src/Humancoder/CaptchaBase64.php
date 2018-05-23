<?php

/**
 * Executa a comunicação com Humancoder para revelar o captcha base64
 * 
 * @author Anderson Leite <anderson.ol@gmail.com>
 * @copyright Copyright (c) 2018
 */

namespace Humancoder;

use Curl\Curl;

class CaptchaBase64{

    CONST URL = 'http://fasttypers.org/imagepost.ashx';
    
    static function execute($accessKey, $imageBase64){

        try{

            $curl = new Curl();
            
            $curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);

            return $curl->post(
                self::URL, 
                array(
                    'key'         => $accessKey,
                    'action'      => 'upload',
                    'gen_task_id' => 1,
                    'captchatype' => 2,
                    'file'        => $imageBase64
                )
            );
        }
        catch(\Exception $e){

            throw $e;
        }
    }
}