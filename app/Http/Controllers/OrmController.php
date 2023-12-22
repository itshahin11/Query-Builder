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
    // return Product::pluck('price','id');

    // Aggregates
    // return Product::sum('price'); // Sum is Toatl Value
    // return Product::avg('price'); // Average Value 
    // return Product::count('price'); // Counting the Row
    // return Product::max('price'); // Max Heighest Value
    // return Product::min('price'); // Minimum  value



    // Select Clause
    // return Product::select('title', 'price', 'star')->get(); //Specific Column Showing. Which Name calling
    // return Product::select('price')->distinct()->get(); //Unique Value Showing. Which Name calling


    // Where Clauses
    // return Product::where('price', '=', 2000)->get(); //Where is Value 2000 
    // return Product::where('price', '!=', 2000)->get(); //Where is value 2000 is !=Not Equal 
    // return Product::where('price', '>', 2000)->get(); //Where is Value >gratter than 2000 
    // return Product::where('title', 'LIKE','%CAR%')->get(); //Where is Value Like Car 
    // return Product::where('title', 'NOT LIKE','%CAR%')->get(); //Where is Value NOT Like Car


    // Advance Where Clauses
    // return Product::whereBetween('price',[1,400])->get(); //where price is in 1-400 
    // return Product::whereNotBetween('price',[1,400])->get(); //where price is Not in 1-400              
    // return Product::whereIn('price',[1,400])->get(); //where price is in 1 or 400              
    // return Product::whereNotIn('price',[1,400])->get(); //where price is Not in 1 or 400  
    // return Product::whereNull('price')->get(); //where price is Null 
    // return Product::whereNotNull('price')->get(); //where price is  NotNull 
    // return Product::whereDate('updated_at','2023-05-16')->get(); //where Match Date
    // return Product::whereMonth('updated_at','05')->get(); //where Match Month
    // return Product::whereDay('updated_at','05')->get(); //where Match Day 
    // return Product::whereYear('updated_at','2023')->get(); //where Match Year 
    // return Product::whereTime('updated_at','20:08:22')->get(); //where Match Time 
    // return Product::whereColumn('updated_at','>','created_at')->get(); //where Column Gratter Then   



    // OrderBy
    // return Product::orderBy('price','desc')->get(); //Order By Price Descending Order
    // return Product::orderBy('price','asc')->get(); //Order By Price Ascending Order
    // return Product::inRandomOrder()->first(); // Randomize the order of the query results and first() to retrieve the first item from that randomized result set.
    // return Product::latest()->first(); //Show Latest Data 
    // return Product::oldest()->first(); //Show Oldest Data


    // GroupBy
    // return Product::groupBy('price')->get(); //Show with Grouping
    // return Product::groupBy('price')->having('price','>', '100')->get(); //Show with Grouping where is gratterthen price 100

    // Limiting Skiping
    // return Product::skip(5)->take(1)->get(); //Skip First Record & Take One Record After Skipping


    // Paginate
    // return Product::paginate(5); //Show 5 data per page
    // return Product::simplePaginate(2); //Show 5 data per page..next and previous
    // return Product::simplePaginate(2); //Show 5 data per page
 /*    return Product::paginate(
        $perPage = 10,
        $columns = ['*'], // * means all column
        $pageName = 'page_number',
    ); //Show 5 data per page */


     













    







         
    }
}
