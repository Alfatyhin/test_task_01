<?php

namespace App\Models;

use App\Mail\OrderAdminSend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Admin extends Model
{
    use HasFactory;

    public $email = 'admin.send@mail.tets'; // enter email admin

    function sendMailOrders(string $result, Orders $data)
    {
        $toEmail = $this->email;

        $message = (new OrderAdminSend([
            'result' => $result,
            'order'  => $data
        ]))
            ->onQueue('ProcessSendingAdminEmail');

        Mail::to($toEmail)
            ->queue($message);

    }
}
