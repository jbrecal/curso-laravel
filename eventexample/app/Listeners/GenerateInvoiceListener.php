<?php

namespace App\Listeners;

use App\Events\CreateOrderEvent;
use App\Models\Invoice;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GenerateInvoiceListener
{
    public function __construct()  // se ejecutará cuando estemos recepcionando la info de nuestro contenido
    {
        
    }

 
    public function handle(CreateOrderEvent $event): void  // la funcion auxiliar que nos va a permitir ejecutar las diferentes acciones que nos va a interesas desarrollar
    {
        Invoice::create([
            'amount' => $event->order->amount,
            'order_id' => $event->order->id

        ]);
    }
}
