<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Item;
use App\Models\Accessory;
use \Cart;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $data['brands1'] = Brand::all();
        // $data['items'] = Product::all();
        $data['items'] = Cart::getContent();
        $data['its'] = Item::all();
        $data['total'] = Cart::getTotal();
        $data['categories'] = Category::all();
        $data['accessories'] = Accessory::all();
        view()->share($data);
    
    
        
    }
}
