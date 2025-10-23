<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Has Many Through Articles (Bootstrap)</title>
    
    {{-- 📌 বুটস্ট্র্যাপের জন্য এই লাইনটি আপনার <head> ট্যাগে থাকতে হবে --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- অতিরিক্ত স্টাইল যা Bootstrap-এর অংশ নয়, শুধু সৌন্দর্যের জন্য --}}
    <style>
        .article-list { list-style: disc; padding-left: 20px; margin: 0; }
        .article-list li { margin-bottom: 5px; }
        .container { margin-top: 20px; }
    </style>
</head>
<body>

    {{-- Bootstrap-এর একটি কন্টেইনারের মধ্যে সবকিছু রাখা হলো --}}
    <div class="container"> 
        <h1 class="my-4 text-primary">Global Articles View (Has Many Through)</h1>
        <p class="mb-4 text-muted">Displays all articles grouped by their associated country using the HasManyThrough relationship (Country → Author → Article).</p>

        @if ($countries->isEmpty())
            <div class="alert alert-warning" role="alert">
                No countries found in the database.
            </div>
        @else
            {{--
                টেবিলের জন্য ব্যবহৃত প্রধান ক্লাসগুলি:
                table: বেস টেবিল স্টাইল
                table-striped: এক লাইন পর পর রং
                table-bordered: সবদিকে বর্ডার
                table-hover: হোভার এফেক্ট
            --}}
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Country ID</th>
                        <th>Country Name</th>
                        <th class="text-center">Total Articles</th>
                        <th>Articles List (Title & ID)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country)
                        <tr>
                            <td>{{ $country->id }}</td>
                            <td class="fw-bold text-info">{{ $country->name }}</td>
                            
                            {{-- মোট আর্টিকেলের সংখ্যা --}}
                            <td class="fw-bold text-success text-center">
                                {{ $country->articles->count() }}
                            </td>

                            {{-- আর্টিকেলের তালিকা --}}
                            <td>
                                @if ($country->articles->count() > 0)
                                    <ul class="article-list">
                                        @foreach ($country->articles as $article)
                                            <li>
                                                **{{ $article->title }}** <small class="text-secondary">(ID: {{ $article->id }})</small>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <span class="text-muted fst-italic">No articles.</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    {{-- 📌 বুটস্ট্র্যাপের JS বান্ডেল, যদি ইন্টার‍্যাক্টিভ কিছু থাকে --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>