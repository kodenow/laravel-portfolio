<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    {{-- <p>{{ $title }}</p> --}}
    {{-- @foreach ($data as $item )
       <p>{{ $item }}</p> 
    @endforeach  --}}
    <h1>Products</h1>
    {{-- <p>{{ $products }}</p> --}}
   <a href="{{ route('products') }}">Products</a>
</body>
</html>