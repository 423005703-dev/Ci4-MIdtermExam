<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class AuthController extends ResourceController
{
    public function issueToken()
    {
        // TODO: validate user credentials
        return $this->respond([
            'token' => 'sample_generated_token'
        ]);
    }

    public function revokeToken()
    {
        // TODO: revoke token logic
        return $this->respond([
            'message' => 'Token revoked'
        ]);
    }
}
