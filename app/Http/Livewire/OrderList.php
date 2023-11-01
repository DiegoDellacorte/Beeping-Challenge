<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
class OrderList extends Component
{
    public $orders;
    public $columns = [
        'order_ref' => 'Order Ref',
        'customer_name' => 'Customer Name',
        'total_qty' => 'Total Qty',
    ];
    public function render()
    {
        return view('livewire.order-list');
    }
    public function mount()
    {
        $this->orders = Order::with('lines')->get()->map(function ($order) {
            $totalQty = $order->lines->sum('qty');
            return [
                'id' => $order->id,
                'order_ref' => $order->order_ref,
                'customer_name' => $order->customer_name,
                'total_qty' => $totalQty,
            ];
        });
    }
}
