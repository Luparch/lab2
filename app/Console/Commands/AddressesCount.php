<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class AddressesCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:addresses-count {customerId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Количество адресов покупателя';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $customerId = $this->argument('customerId');
        $customer = Customer::find($customerId);
        if($customer !== null){
            $count = DB::table('addresses')->where('customer_id', '=', $customerId)->count();
            $this->info($count);
        }
        else{
            $this->info('Такого покупателя нет');
        }
    }
}
