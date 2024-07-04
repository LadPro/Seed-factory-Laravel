<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <div class="container">
        @forelse ($products as $product)

            <div class="card">
                <h2>{{$product->name}}</h2>
                <h3>{{$product->short_description}}</h3>
                <h3>{{$product->price}} USD</h3>
            </div>
        @empty
            <h1>No hay elementos</h1>    
        @endforelse
            
    </div>
</body>
</html>