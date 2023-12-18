<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DemoController extends Controller
{
  function DemoAction()
  {
    $product = DB::table('products')->get();
    return $product;



  }
  function DemoAction2()
  {
    /* $brand = DB::table('brands')->first(); 
    return $brand; */
    //Retrieving Single raw ..........show By Id Number
    /*    $brand = DB::table('brands')->find('3'); 
       return $brand; 
        */
    //Pluck Method Show by Column Name
    // $brand = DB::table('brands')->pluck('brandName'); 
    // 
    /*  $brand = DB::table('brands')->pluck('brandImg','brandName'); 
     return $brand;  */



    //Aggregetes
    //Count Method counting The Table Row
    /*  $count = DB::table('products')->count();
     return $count; */


    /*  $max = DB::table('products')->max('price');
     return $max; */
    /*  $minimum = DB::table('products')->min('price');
     return $minimum; */
    /* 
            $average= DB::table('products')->avg('price');
            return $average; */

    /*  $total = DB::table('products')->sum('price');
     return $total; */




    //Basic Clause 
    //show specific value from which column call you 
    /*  $col = DB::table('products')->select('title','price','stock')->get();
     return $col; */
    /*   $unique = DB::table('products')->select('title')->distinct()->get();
      return $unique; */

      
       //  Advance Join,where, Clauses
/*        $data = DB::table('products')
       ->where('products.price', ">", 2000)
       ->orWhere('products.price', "=", 200)
       ->get();
       return $data; */


       $data = DB::table('products')
       ->where('products.price', ">", 2000)
       ->whereNot('products.price', "=", 200)
       ->get();
       return $data;

/*    $result = DB::table('products')
   ->join('categories', function (JoinClause $join){
    $join->on('products.category_id', '=', 'categories.id') 
    ->where('products.price', '>', '20000');
   })->get();
   return $result; */

/* 
   $result = DB::table('products')
   ->join('categories', function (JoinClause $join){
    $join->on('products.category_id', '=', 'categories.id') 
    ->where('categories.categoryName', '=', 'Fashion');
   })->get();

   return $result; */

/*    $result = DB::table('products')->
   joinSub(DB::table('orders')->selectRaw('product_id, sum(amount) as total'),'orders',
   function ($join) {
    $join->on('products.id','=','orders.product_id');
    })->groupBy('products.id')
    ->select('products.*','orders.total')->get();
    return $result; */








    //INNER JOIN
    //table joining by table id...to to table id...use table name then join which table joining ...now first table name and .dot than table key id....then 2nd table same process
/*      return DB::table('products')->join('categories','products.category_id', '=', 'categories.id')
     ->join('brands','products.brand_id', '=', 'brands.id')->get(); */


    //LEFT JOIN
    /*  return DB::table('products')->leftJoin('categories','products.category_id', '=', 'categories.id')
     ->leftJoin('brands','products.brand_id', '=', 'brands.id')->get(); */


    //RIGHT JOIN
/*      return DB::table('products')->rightJoin('categories','products.category_id', '=', 'categories.id')
     ->rightJoin('brands','products.brand_id', '=', 'brands.id')->get(); */



    //CROSS JOIN
    //  return DB::table('products')->crossJoin('brands')->get();
    // return DB::table('products')->crossJoin('brands')->get();

    

    //UNION
    //multiple Query
/*     $first = DB::table('products')->where('price','>',50);
    
    $second = DB::table('products')->where('price','=',120)->union($first)->get();

    return $second; */

    // Union All
 /*   $query = DB::table('products')->where('products.price', '>', 2000);
   $query1 = DB::table('products')->where('products.discount', '=', 1); 
   $query->union($query1);
   $results = $query->get();

   return $results; */

  





    //PAGINATE
  /*   $paginateProducts = Products::orderby('created_at','desc')->paginate(3);
    return $paginateProducts;
 */


    // SKIP & TAKE
    /*   $skip = DB::table('users')->skip(1)->take(3)->get();
      return $skip; */


    // LATEST & OLDEST
/* $latest = DB::table('users')->latest()->get();
return $latest; */

    // ORDER BY
// $orderBy = DB::table('users')->orderBy('name','asc')->get();
/* $orderBy = DB::table('users')->orderBy('id','desc')->get();
return $orderBy; */

    // in Random
/* $random = DB::table('users')->inRandomOrder()->get();
return $random; */

    // LIMITING
/* $limit = DB::table('users')->limit(5)->get();
return $limit; */


    // WHERE
// $result = DB::table('products')->where('price','>',3000)->get();
// return DB::table('products')->where('title','LIKE',"%NEW%")->get();
// return DB::table('products')->where('title','NOT LIKE',"%CAR%")->get();
// return DB::table('products')->where('price', '>', 3000)->get();
// return DB::table('products')->where('price', [5000, 2000])->get();
// return DB::table('products')->whereDate('created_at', '2023-02-19')->get();
// return DB::table('products')->whereMonth('created_at', '02')->get();
  
    //try catch block using for error details
  /*   try {
      DB::table('categories')->where('id', '=', 3)->delete();
    } catch (Exception $exception) {
      return $exception->getMessage();
    }
 */





  }
}