<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class HasManyThroughController extends Controller
{
    /**
     * সকল কান্ট্রি এবং তাদের সাথে সম্পর্কিত আর্টিকেল লোড করে।
     */
    public function index()
    {
        // 'articles' হলো Country মডেলে ডিফাইন করা HasManyThrough রিলেশনশিপ
        $countries = Country::with('articles')->get();
        
        // ডেটা ভিউ-তে পাঠানো
        return view('has-many-through.index', compact('countries'));
        
        // অথবা ডেটা দেখতে চাইলে
        // return $countries;
    }
}