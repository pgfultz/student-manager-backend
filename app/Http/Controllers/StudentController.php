<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use Exception;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();

        return response()->json($students);
    }

    public function store(Request $request){

        try{

            $student = new Student;

            $student->name = $request->name;
            $student->birth_date = $request->birth_date;
            $student->year = $request->year;
            $student->address_cep = $request->address_cep;
            $student->address_street = $request->address_street;
            $student->address_number = $request->address_number;
            $student->address_complement = $request->address_complement;
            $student->address_district = $request->address_district;
            $student->address_city = $request->address_city;
            $student->address_state = $request->address_state;
            $student->mother_name = $request->mother_name;
            $student->mother_cpf = $request->mother_cpf;
            $student->payment_date = $request->payment_date;

            if($student->save()){
                return response()->json($student);
            }else{
                $errorMsg = array(
                    "error" => true,
                    "message" => "Ocorreu um erro ao cadastrar o usuário",
                );
                return response()->json($errorMsg);
            }
        }catch(Exception $e){
            return response()->json($e);
        }
    }
}
