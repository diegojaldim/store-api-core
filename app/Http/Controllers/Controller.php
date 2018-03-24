<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * Retorna o sucesso após o processamento da API
     * @param string $message Mensagem a ser exibida na resposta
     * @param array() $data Valores em array para o retorno
     * @return Response
     */
    protected function responseSuccess($message, $data = []){
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ], Response::HTTP_OK);
    }
    
    /**
     * Retorna um erro com o status 422
     * @param string $message Mensagem a ser exibida na resposta
     * @param array() $data Valores em array para o retorno
     * @return Response
     */
    protected function responseFail($message, $data = []){
        return response()->json([
            'success' => false,
            'message' => $message,
            'data' => $data
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }
    
}
