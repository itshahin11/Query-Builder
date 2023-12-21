<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrmController extends Controller
{
    public function OrmAction(Request $request)
    {
        // Data Insert
        // return Brand::create($request->input());  //Data Insert
        // Data Update
        // return Brand::where('id', $request->id)->update($request->input());
        // UpdateOrInsert
        // return Brand::updateOrCreate(['brandName'=> $request->brandName],$request->input());
        // Data Delete
        // return Brand::where('id', '=', $request->id)->Delete(); 



        // Increament
        // return Product::where('id', 2)->Increament('price', 100);


// Increment with showing Webpage Message
/* 
// Find the product by its ID and increment its price
$productId = 2; // Replace this with the actual ID of your product
$incrementValue = 200; // Replace with the desired increment value

Product::where('id', $productId)->increment('price', $incrementValue);

// You can also use conditions or other criteria to find the product:
// Product::where('column_name', 'condition')->increment('price', $incrementValue);

// Retrieve and display the updated price if needed
$product = Product::find($productId);
if ($product) {
    echo "The new price of the product is: $" . $product->price;
} else {
    echo "Product not found!";
}
 */

        
 //  Decrement
//  return Product::where('id', 2)->decrement('price', 100);


 // Decrement with showing Webpage Message
/*  $productId = 2; // Replace this with the actual ID of your product
$decrementValue = 100; // Replace with the desired increment value

Product::where('id', $productId)->decrement('price', $decrementValue);

$product = Product::find($productId);
if ($product) {
    echo "The new price of the product is: $" . $product->price;
} else {
    echo "Product not found!";
}
      */

    //  Retrieving All Rows
    // return Brand::get();
    // return Brand::all();


    // Retrieving single Row
    // return Brand::first();
    // return Brand::find(2); //2 is id number


    // Retrieving List Of Column Values
    







         
    }
}
