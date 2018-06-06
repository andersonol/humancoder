<?php

/**
 * Executa a comunicação com Humancoder para revelar o captcha base64
 * 
 * @author Anderson Leite <anderson.ol@gmail.com>
 * @copyright Copyright (c) 2018
 */

namespace Humancoder;

use Curl\Curl;

class CaptchaIamNotRobot{

    CONST URL = 'http://fasttypers.org/imagepost.ashx';
    
    static function execute($accessKey, $pageurl, $sitekey){

        try{

            $curl = new Curl();
            
            $curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);

            return $curl->post(
                self::URL, 
                array(
                    'action'      => 'upload',
                    'key'         => $accessKey,
                    'captchatype' => 3,
                    'gen_task_id' => 1,
                    'pageurl'     => $pageurl,
                    'sitekey'     => $sitekey
                )
            );
        }
        catch(\Exception $e){

            throw $e;
        }
    }
}