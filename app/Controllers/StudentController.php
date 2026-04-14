<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class StudentsController extends ResourceController
{
    public function index()
    {
        // TODO: fetch all students
        return $this->respond([
            ['id' => 1, 'name' => 'Juan'],
            ['id' => 2, 'name' => 'Maria']
        ]);
    }

    public function show($id = null)
    {
        // TODO: fetch single student by ID
        return $this->respond([
            'id' => $id,
            'name' => 'Sample Student'
        ]);
    }
}
