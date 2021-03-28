<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Students;


class StudentsController extends Controller
{
    function GetStudents(){
        try{$students = Students::all();

            $responseBody = $this->responseBody(true, "Students", "All", $students);

        } catch(\Exception $exception) {
            $responseBody = $this->responseBody(false, "Students", "Error", $exception);
        }
        return response()->json([ "data" => $responseBody ]);
    }

    function GetSubjectsToStudent() {
        try{$result = DB::table('student_to_subjects')
                    ->join('students', 'student_to_subjects.student_id', '=', 'students.id')
                    ->join('subjects', 'student_to_subjects.subject_id', '=', 'subjects.id')->get();

                    $responseBody = $this->responseBody(true, "Student's Subjects", "All", $result);

        } catch(\Exception $exception) {
                    $responseBody = $this->responseBody(false, "Student's Subjects", "Error", $exception);
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
