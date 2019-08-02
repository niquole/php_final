<?php
namespace Cms\Controllers;

use Cms\Core\App;

class ApiUserController {
    public function index()
    {
        $user =  App::get('db')->fetchAll("user");

        echo json_encode($user);
    }

    public function find()
    {
        $pet =  App::get('db')->fetchOne("user", $_POST);

        echo json_encode(user[0]);
    }

    public function store()
    {
        App::get('db')->insert("user", $_POST);

        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function update()
    {
        App::get('db')->update("user", $_POST);
        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function delete()
    {
        App::get('db')->delete("user", $_POST);
        echo json_encode([
            'result' => 'success'
        ]);
    }
}