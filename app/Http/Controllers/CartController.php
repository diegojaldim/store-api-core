<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use Validator;

class CartController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->responseSuccess('Carrinho', ['cart' => $this->cart()]);
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
    public function store(Request $request)
    {
        $input = $request->all();
        
        $validator = Validator::make($input, [
            'id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);
        
        if($validator->fails()){
            return $this->responseFail('Erro ao inserir produto no carrinho', ['error' => $validator->errors()]);
        }
        
        Cart::session($this->userID())->add($input['id'], $input['name'], $input['price'], $input['quantity'], []);
        return $this->responseSuccess('Produto adicionado com sucesso', ['cart' => $this->cart()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $input = $request->all();
        
        $validator = Validator::make($input, [
            'quantity' => 'required'
        ]);
        
        if($validator->fails()){
            return $this->responseFail('Erro ao editar produto', ['error' => $validator->errors()]);
        }
        
        Cart::session($this->userID())->update($id, [
            'relative' => false,
            'value' => $input['quantity']
        ]);
        
        return $this->responseSuccess('Produto editado com sucesso', ['cart' => $this->cart()]);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::session($this->userID())->remove($id);
        return $this->responseSuccess('Produto excluído com sucesso', ['cart' => $this->cart()]);
    }
    
    /**
     * Retorna a estrutura do carrinho para a API
     * @return array
     */
    private function cart(){
        $cart = Cart::session($this->userID());
        return [
            'items' => $cart->getContent()->toArray(),
            'count' => $cart->getContent()->count(),
            'quantity' => $cart->getTotalQuantity(),
            'total' => $cart->getTotal()
        ];
    }
    
    /**
     * Recupera o ID do usuário logado
     * @return int
     */
    private function userID(){
        $user = Auth::user();
        return $user->id;
    }
}
