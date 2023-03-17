<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>MI CAMPO</h1>
        <a href="{{route('sesion')}}">iniciar sesion</a>
        {{-- <a href="{{route('addProduct')}}">Añadir canción</a>
        <div> --}}

            @foreach ($products as $product)
                <ul>
                    {{-- <li>
                        <a href="{{route('descriptionProduct', $product->id)}}">{{$product->product_name}}</a>
                        <a href="{{route('shoppingCar', $product->id)}}">Añadir a carrito</a>
                    <li> --}}
                </ul>        
            @endforeach
        </div>
    
</body>
</html>