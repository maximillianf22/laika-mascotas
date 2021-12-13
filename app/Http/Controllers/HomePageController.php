<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = [
            0 => ['discount' => '10', 'name' => 'Ardilla Con Sonido Camel', 'price' => '43,100', 'priceBefore' => '$43,100', 'priceMember' => '36,635', 'reference' => 'grande', 'img' => 'https://laikapp.s3.amazonaws.com/images_products/2626_Smartbones_Pollo_Mini_8_Unidades_500X500.jpg'],
            1 => ['discount' => '10', 'name' => 'Ardilla Con Sonido Camel', 'price' => '43,100', 'priceBefore' => '$43,100', 'priceMember' => '36,635', 'reference' => 'grande', 'img' => 'https://laikapp.s3.amazonaws.com/images_products/2626_Smartbones_Pollo_Mini_8_Unidades_500X500.jpg'],
            2 => ['discount' => '10', 'name' => 'Ardilla Con Sonido Camel', 'price' => '43,100', 'priceBefore' => '$43,100', 'priceMember' => '36,635', 'reference' => 'grande', 'img' => 'https://laikapp.s3.amazonaws.com/images_products/2626_Smartbones_Pollo_Mini_8_Unidades_500X500.jpg'],
            3 => ['discount' => '10', 'name' => 'Ardilla Con Sonido Camel', 'price' => '43,100', 'priceBefore' => '$43,100', 'priceMember' => '36,635', 'reference' => 'grande', 'img' => 'https://laikapp.s3.amazonaws.com/images_products/2626_Smartbones_Pollo_Mini_8_Unidades_500X500.jpg'],
        ];

        return Inertia::render('Home', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function show(HomePage $homePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePage $homePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePage $homePage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePage $homePage)
    {
        //
    }
}
