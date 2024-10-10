<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class CreateOrderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:order {user_id} {amount}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command creates a new random order';

    /**
     * Execute the console command.
     * @return int
     */
    public function handle()
    {
        $user_id = $this->argument('user_id');
        $amount = $this->argument('amount');

        $order = Order::create([
            'user_id' => $user_id,
            'amount' => $amount
        ]);
        return Command::SUCCESS;
    }
}
