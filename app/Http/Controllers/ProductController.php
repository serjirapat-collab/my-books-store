<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductController extends Controller
{
    const PRODUCTS = [

        'BK001' => [
            'code'=>'BK001',
            'catCode'=>'CT001',
            'name'=>'Programming PHP',
            'description'=>'Programming PHP Description'
        ],

        'BK002' => [
            'code'=>'BK002',
            'catCode'=>'CT002',
            'name'=>'JavaScript: The Definitive Guide',
            'description'=>'JavaScript Description'
        ],

        'BK003' => [
            'code'=>'BK003',
            'catCode'=>'CT001',
            'name'=>'Learning PHP, MySQL & JavaScript',
            'description'=>'Learning PHP Description'
        ],

        'BK004' => [
            'code'=>'BK004',
            'catCode'=>'CT003',
            'name'=>'Python Crash Course, 2nd Edition',
            'description'=>'Python Description'
        ],
    ];

    public function list():View
    {
        return view('products.list',[
            'products'=>self::PRODUCTS,
            'categories'=>CategoryController::CATEGORIES
        ]);
    }

    public function view(string $product):View
    {
        return view('products.view',[
            'product'=>self::PRODUCTS[$product],
            'category'=>CategoryController::CATEGORIES[
                self::PRODUCTS[$product]['catCode']
            ]
        ]);
    }

}