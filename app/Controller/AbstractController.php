<?php

namespace App\Controller;

abstract class AbstractController
{
    public function render(string $viewName, array $data = []): void
    {
        $file = __DIR__.'/../../public/view/'.$viewName;
        $file = file_exists($file) ? file_get_contents($file) : '';

        $keys = array_keys($data);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);

        require_once($_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . $viewName);
    }

    public function showJson(array $data): never
    {
        header("Content-Type: application/json");
        echo json_encode($data);
        die();
    }

    public static function redirect(string $route): never
    {
        header("Location: {$route}");
        die();
    }

    /** Deve fazer o include da view */
    abstract public function index(array $requestData): void;
}
