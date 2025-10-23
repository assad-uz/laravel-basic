<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Has Many Through Articles</title>
    {{-- আপনি এখানে আপনার CSS লিঙ্ক করতে পারেন, যেমন Bootstrap --}}
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .country-card { border: 1px solid #ccc; margin-bottom: 20px; padding: 15px; border-radius: 8px; }
        .article-list { list-style: none; padding: 0; }
        .article-list li { background: #f9f9f9; margin-bottom: 5px; padding: 8px; border-left: 3px solid #007bff; }
        h2 { border-bottom: 2px solid #eee; padding-bottom: 5px; }
    </style>
</head>
<body>

    <h1>Global Articles View (Has Many Through)</h1>
    <p>Displays all articles grouped by their associated country using the HasManyThrough relationship (Country → Author → Article).</p>

    @forelse ($countries as $country)
        <div class="country-card">
            
            {{-- দেশের নাম প্রদর্শন --}}
            <h2>Country: {{ $country->name }} (ID: {{ $country->id }})</h2>
            
            @if ($country->articles->count() > 0)
                <h3>Articles from this country (Total: {{ $country->articles->count() }})</h3>
                
                {{-- আর্টিকেলগুলোর তালিকা --}}
                <ul class="article-list">
                    @foreach ($country->articles as $article)
                        <li>
                            <strong>Title:</strong> {{ $article->title }} 
                            {{-- আর্টিকেলটি কোন লেখকের (ইন্টারমিডিয়েট মডেল) তা দেখানোর জন্য, আপনাকে অথর মডেলের সাথেও রিলেশন ইগার লোড করতে হতো। আপাতত শুধু টাইটেল দেখাচ্ছি। --}}
                            <small>(Article ID: {{ $article->id }})</small>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No articles found for this country.</p>
            @endif
        </div>
    @empty
        <p>No countries found in the database.</p>
    @endforelse

</body>
</html>