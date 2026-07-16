<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CategoryController extends Controller
{

    const CATEGORIES=[

        'CT001'=>[
            'code'=>'CT001',
            'name'=>'PHP'
        ],

        'CT002'=>[
            'code'=>'CT002',
            'name'=>'JavaScript'
        ],

        'CT003'=>[
            'code'=>'CT003',
            'name'=>'Python'
        ]

    ];

    public function list():View
    {
        return view('categories.list',[
            'categories'=>self::CATEGORIES
        ]);
    }

    public function view(string $category):View
    {
        $products=[];

        foreach(ProductController::PRODUCTS as $product){

            if($product['catCode']===$category){

                $products[]=$product;

            }

        }

        return view('categories.view',[

            'category'=>self::CATEGORIES[$category],

            'products'=>$products

        ]);
    }

}