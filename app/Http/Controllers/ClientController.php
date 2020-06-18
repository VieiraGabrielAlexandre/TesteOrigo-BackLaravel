<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Validator;


class ClientController extends Controller
{
    

    public function index(){

        try {

            
            $clients = Client::with(['plans'])->get();

            return response()->json($clients);

        } catch (\Exception $ex) {
            return response()->json(["errors" => $ex->getMessage()], 422);
        }

    }

    public function store(Request $request){

        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'telephone' => 'required',
                'city' => 'required',
                'state' => 'required',
                'born_date' => 'required'
            ]);

            if($validator->fails()){
                return response(['message' => 'Validation errors', 'errors' =>  $validator->errors(), 'status' => false], 422);
            }

            $client = Client::create($request->all());

            $client->plans()->attach($request->plan_id);

            return response()->json($client);

        } catch (\Exception $ex) {
            return response()->json(["errors" => $ex->getMessage()], 422);
        }

    }

    public function update(Request $request, $id){

        try {

            $client = Client::find($id)->update($request->all());

            return response()->json($client);

        } catch (\Exception $ex) {
            return response()->json(["errors" => $ex->getMessage()], 422);
        }

    }


    public function destroy($id){

        try {
            
            $client = Client::with(['plans'])->find($id);

            if($client->state == 'São Paulo'){
                foreach($client->plans as $plan){
                    if($plan->name == 'Free'){
                        return response()->json(['error' => 'Can not delete user with free plan living in São Paulo'], 422);
                    }
                }
            }
            $client->plans()->detach();
            $client->delete();
            return response()->json($client);

        } catch (\Exception $ex) {
            return response()->json(["errors" => $ex->getMessage()], 422);
        }

    }

}
