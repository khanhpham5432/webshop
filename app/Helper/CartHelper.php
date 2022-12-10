<?php
namespace App\Helper;

class CartHelper {

    public $items = [];
    public $total_quantity = 0;
    public $total_price = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
        $this->total_price = $this->get_Total_Price();
        $this->total_quantity = $this->get_Total_Quantity();
    }

    public function add($product, $quantity = 1){
        $item = [
            'id' => $product->masp,
            'name' => $product->tensp,
            'img' => $product->anhchinh,
            'price' => $product->gia,
            'quantity' => $quantity
        ];
        if (isset($this->items[$product->masp])){
            $this->items[$product->masp]['quantity'] += $quantity;
        } else {
            $this->items[$product->masp] = $item;
        }
        $this->items[$product->masp] = $item;
        session(['cart' => $this->items]);
    }

    public function remove($id){
        if (isset($this->items[$id])){
            unset($this->items[$id]);
        }
        session(['cart' => $this->items]);
    }

    function update($id, $quantity = 1){
        if (isset($this->items[$id])){
            $this->items[$id]['quantity'] = $quantity;
        }
        session(['cart' => $this->items]);
    }

    function clear(){
        session(['cart' => '']);
    }
    
    private function get_Total_Price(){
        $t = 0;
        foreach ($this->items  as $items){
            $t += (int)$items['price'] * $items['quantity'];
        }
        return $t;
    }

    private function get_Total_Quantity(){
        $t = 0;
        foreach ($this->items as $items){
            $t += $items['quantity'];
        }
        return $t;
    }
}
?>