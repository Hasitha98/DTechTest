<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects; 

class SubjectsController extends Controller
{
    function GetSubjects(){
        try{$subjects = Subjects::all();

            $responseBody = $this->responseBody(true, "Subjects", "All", $subjects);

        } catch(\Exception $exception) {
            $responseBody = $this->responseBody(false, "Subjects", "Error", $exception);
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
