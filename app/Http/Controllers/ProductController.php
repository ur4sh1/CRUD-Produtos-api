<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Exception;

class ProductController
{
    public function index(){
        try{
            $prod = Product::all();
            if($prod){
                return response()->json($prod, 200);
            }else{
                return response()->json("NOT FOUND!", 400);
            }
        } catch(Exception $e) {
            return response()->json($e, 400);
        }
    }

    public function show($id){
        try{
            $prod = Product::find($id);
            if($prod){
                return response()->json($prod, 200);
            }else{
                return response()->json("NOT FOUND!", 400);
            }
        }catch(Exception $e){
            return response()->json($e, 400);
        }
    }

    public function store(Request $request){
        $prod = Product::create($request->all());
        return response()->json($prod, 201);
    }

    public function update(Request $request, $id){
        try{
            $prod = Product::find($id);
            if($prod){
                $prod ->update($request->all());
                return response()->json("UPDATED!",200);
            }else{
                return response()->json("NOT FOUND!",400);
            }
        }catch (Exception $e) {
            return response()->json($e, 400);
        }
    }

    public function destroy($id){
        try{
            $prod = Product::find($id);
            if($prod){
                $prod->delete();
                return response()->json(200);
            }else{
                return response()->json("NOT FOUND!",400);
            }
        }catch(Exception $e){
            return response()->json($e, 400);
        }
    }
}
