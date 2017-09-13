<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;


//	public function add($item){
//        if(array_key_exists($item->id, $this->items)){
//            $this->items[$item->id]['qty']++;
//        }else {
//            $this->items[$item->id] = ['item'=>$item, 'qty'=> 1];
//        }
//	}

//	public function getTotalQuantity(){
//	    return count($this->items);
//    }
//
//    public function getTotalCost(){
//	    $cost = 0;
//	    foreach ($this->items as $id => $item){
//	        $cost += $this->items[$id]['qty'] * $item['item']->price;
//        }
//        return $cost;
//    }



    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $giohang = ['qty' => 0, 'price' => $item->unit_price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $giohang = $this->items[$id];
            }
        }
        $giohang['qty']++;
        $giohang['price'] = $item->unit_price * $giohang['qty'];
        $this->items[$id] = $giohang;
        $this->totalQty++;
        $this->totalPrice += $item->price;

    }


    //xóa nhiều
    public function removeItem($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
