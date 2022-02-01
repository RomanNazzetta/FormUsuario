<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function showList ()
    {
     $usuario = Usuario::all();
     //return json_encode($usuario);
     return view('Usuario-list');
    }
    
    public function Form(){
        return view('newUsuario');
    }
    
    public function newUsuario (Request $request)
    {
                  try {
                if($request->email){
                    Usuario::create([
                        'name'=> $request->name,
                        'email'=>$request->email,
                        'phone'=>$request->phone,
                        'message'=>$request->message,
                    ]);
    
                    $details = [
                        'title'=> 'Nombre:' . $request->name,
                        'body'=> 'Email:' . $request->email,
                        'section'=> 'Mensaje' . $request->message,
                    ];
    
                   \Mail::to ($request->email)->send(new \App\Mail\SendData($details));
                    //return json_encode(['status'=> 'ok']);
                    return 'Email ENVIADO';
                }
    
            } catch (\ErrorException $e){
                return json_encode(['status' =>'faild' , 'message' => $e->getMessage()]);
            }
        }
    }

