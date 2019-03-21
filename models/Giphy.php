<?php

namespace app\models;

use yii\base\Model;
use yii\httpclient\Client;

class Giphy extends Model {

    public $reCaptcha;

    public function rules() {
        return [
            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className()]
        ];
    }

    public function getRandomGif() {
        $client = new Client();
        $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl('https://api.giphy.com/v1/gifs/random')
                ->setData(['api_key' => 'dc6zaTOxFJmzC', 'rating' => 'pg-13'])
                ->send();
        if ($response->isOk) {
            return $response->data['data']['image_original_url'];
        }
    }

}
