<?php

namespace App\Core;

class Request
{
    public function getPath()
    {
        // $path = $_SERVER['REQUEST_URI'] ?? '/';
        $path = $_SERVER['PATH_INFO'] ?? '/';
        $path =  str_replace('/public', '', $path); 
        $position = strpos($path, '?');

        if (!$position) {
            return $path;
        }
        // Removes query string and returns only the path
        return substr($path, 0, $position);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
