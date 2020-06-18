<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use Validator;


class PlanController extends Controller
{
    

    public function index(){

        try {
            
            $plans = Plan::get();

            return response()->json($plans);

        } catch (\Exception $ex) {
            return response()->json(["errors" => $ex->getMessage()], 422);
        }

    }

   

}
