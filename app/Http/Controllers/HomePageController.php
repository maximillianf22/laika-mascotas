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
            0 => ['discount' => '12', 'name' => 'Hills Canine Treats Chicken', 'price' => '15,120', 'priceBefore' => '16,000', 'priceMember' => '14,200', 'reference' => '85gr', 'img' => 'https://s3.us-east-1.amazonaws.com/laikapp/images_products/10ea470d75cbb51a8bb86b925b53d885.jpg'],
            1 => ['discount' => '13', 'name' => 'Disfraes Americanos - Dewback pet', 'price' => '196,100', 'priceBefore' => '$200,100', 'priceMember' => '190,635', 'reference' => 'STD', 'img' => 'https://laikapp.s3.amazonaws.com/dev_images_products/70615_Disfraces_Americanos___Dewback_pet_1633536988_0_500x500.jpg'],
            2 => ['discount' => '15', 'name' => 'Pedigree Alimento Humedo Para Perro', 'price' => '2,100', 'priceBefore' => '$3,100', 'priceMember' => '1,635', 'reference' => '100gr', 'img' => 'https://laikapp.s3.amazonaws.com/dev_images_products/1479_120674_Pedigree_Alimento_H__medo_Para_Perro_Adulto_Carne_Sobre_1638464672_300x300.jpg'],
            3 => ['discount' => '20', 'name' => 'Ardilla Con Sonido Camel', 'price' => '43,100', 'priceBefore' => '$43,100', 'priceMember' => '36,635', 'reference' => 'grande', 'img' => 'https://laikapp.s3.amazonaws.com/images_products/2626_Smartbones_Pollo_Mini_8_Unidades_500X500.jpg'],
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
