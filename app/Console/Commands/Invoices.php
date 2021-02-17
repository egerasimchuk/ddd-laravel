<?php
/**
 * Description of Invoices.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Console\Commands;


use App\Models\Client;
use App\Models\Invoice;
use App\Models\Item;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Invoices extends Command
{

    public function handle()
    {
        $client = Client::findOrFail($this->option('client'));
        $items = Item::whereIdIn($this->option('items'))->get();
        if ($items->isEmpty()) {
            abort(404);
        }
        $invoice = new Invoice();
        $invoice->client_id = $client->id;
        $invoice->status = 'new';
        $invoice->attach($items);
        $invoice->save();

        Mail::send('emails.invoice', [
            'invoice' => $invoice,
        ]);
    }

}
