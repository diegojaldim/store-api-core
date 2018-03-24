<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\PedidoItem;
use App\Http\Resources\PedidoResource;
use Illuminate\Support\Facades\Auth;
use Validator;
use Cart;

class PedidoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pedido $pedido)
    {
        $user = Auth::user();
        return PedidoResource::collection($pedido->with('items')->where('user_id', $user->id)->paginate());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pedido $pedido)
    {
        $user = Auth::user();
        $input = $request->all();
        
        $validator = Validator::make($input, [
            'endereco_entrega' => 'required'
        ]);
        
        if($validator->fails()){
            return $this->responseFail('Erro ao criar pedido', ['error' => $validator->errors()]);
        }
        
        $pedido->user_id = $user->id;
        $pedido->status_id = '1';
        $pedido->endereco_entrega = $input['endereco_entrega'];
        $pedido->save();
        
        $pedidoID = $pedido->id;
        $cart = Cart::session($user->id);
        
        foreach($cart->getContent()->toArray() as $item){
            $pedidoItem = new PedidoItem();
            $pedidoItem->pedido_id = $pedidoID;
            $pedidoItem->produto_id = $item['id'];
            $pedidoItem->save();
        }
        
        $cart->clear();
        
        return $this->responseSuccess('Pedido efetuado com sucesso', new PedidoResource($pedido));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        return new PedidoResource(Pedido::with('items')->where('user_id', $user->id)->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
