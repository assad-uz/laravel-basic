<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Country extends Model
{
    /**
     * একটি দেশের সমস্ত আর্টিকেল পেতে HasManyThrough রিলেশনশিপ।
     * কান্ট্রি -> অথর -> আর্টিকেল
     */
    public function articles()
    {
        return $this->hasManyThrough(
            Article::class, // ফাইনাল মডেল: Article
            Author::class,  // ইন্টারমিডিয়েট মডেল: Author
            'country_id',   // authors টেবিলে country_id ফরেন কী
            'author_id'     // articles টেবিলে author_id ফরেন কী
        );
    }
    
    // Authers এর সাথে সাধারণ HasMany রিলেশন
    public function authors()
    {
        return $this->hasMany(Author::class);
    }
}