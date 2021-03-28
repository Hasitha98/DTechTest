<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;

class TeachersController extends Controller
{
    function GetTeachers() {
        try{$teachers = Teachers::all();

            $responseBody = $this->responseBody(true, "Teachers", "All", $teachers);

        } catch(\Exception $exception) {
            $responseBody = $this->responseBody(false, "Teachers", "Error", $exception);
        }
        return response()->json([ "data" => $responseBody ]);
    }

    function responseBody($success, $name, $message, $result) {
        $body = [
            "success" => $success,
            "name" => $name,
            "message" => $message,
            "result" => $result
        ];
        return $body;
    }
}
