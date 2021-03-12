<?php

namespace App\Models;

use App\Http\Controllers\OrdersController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function createOrder(OrdersController $controller)
    {
        $request = \request();

        $controller->validate($request, [
            'name'      => 'required | alpha_dash | between:2,100',
            'last_name' => 'required | alpha_dash | between:2,100',
            'email'     => 'email',
        ]);

        $this->name      = $request->name;
        $this->last_name = $request->last_name;
        $this->email     = $request->email;

        $result = $this->save();

        if ($result) {
            $message = 'Новый заказ создан';
        } else {
            $message = 'Ошибка создания заказа';
        }

        return $message;
    }
}
