<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use Session;
use App\Cart;
use App\Slide;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.menu', function ($view) {
            $loai_sp = ProductType::all();
            $view->with('loaisp', $loai_sp);
        });

        view()->composer(['layout.menu', 'pages.DatHang'], function ($view) {
            if (Session('cart')) {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart' => Session::get('cart'), 'product_cart' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
            }


        });

        view()->composer('layout.slides', function ($view) {
            $slide = Slide::all();
            $view->with('slide', $slide);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
