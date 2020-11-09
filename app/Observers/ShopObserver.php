<?php

namespace App\Observers;

use App\shop;
use App\Mail\ShopActivated;
use Illuminate\Support\Facades\Mail;

class ShopObserver
{
    /**
     * Handle the shop "created" event.
     *
     * @param  \App\shop  $shop
     * @return void
     */
    public function created(shop $shop)
    {
        //
    }

    /**
     * Handle the shop "updated" event.
     *
     * @param  \App\shop  $shop
     * @return void
     */
    public function updated(shop $shop)
    {
        //check if active column is changed from inactive to active

        if($shop->getOriginal('is_active') == false && $shop->is_active == true) {

                //send mail to customer
                Mail::to($shop->owner)->send(new ShopActivated($shop));

                //change role from customer to seller
                $shop->owner->setRole('seller');
        }else {
            //  dd('shop changed to inactive');
        }
    }

    /**
     * Handle the shop "deleted" event.
     *
     * @param  \App\shop  $shop
     * @return void
     */
    public function deleted(shop $shop)
    {
        //
    }

    /**
     * Handle the shop "restored" event.
     *
     * @param  \App\shop  $shop
     * @return void
     */
    public function restored(shop $shop)
    {
        //
    }

    /**
     * Handle the shop "force deleted" event.
     *
     * @param  \App\shop  $shop
     * @return void
     */
    public function forceDeleted(shop $shop)
    {
        //
    }
}
