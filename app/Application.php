<?php

namespace App;
use Firebase\JWT\JWT;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function generateAuthToken()
    {
        $jwt = JWT::encode([
            'iss' => 'valhalla',
            'sub' => $this->key,
            'iat' => time(),
            'exp' => time() + (5 * 60 * 60),
        ], 'w5yuCV2mQDVTGmn3');

        return $jwt;
    }
}
