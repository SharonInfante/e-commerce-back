<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('editProduct', $products)}}">Editar producto</a><br><br><br>
    <a href="{{route('deleteProduct', $products)}}">Eliminar producto</a><br><br><br>

    <p>Producto {{$products->product_name}} </p>
    <img src="{{ asset('storage/' . $products->image) }}" alt="product">

</body>
</html>

