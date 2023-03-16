<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('editProduct', $products->id)}}" method="POST">

        @csrf

        <label>
            Producto
            <input type="text" name="product_name">
        </label><br><br>
        

        <label>
            Código
            <input type="text" name="code">
        </label><br><br>

        <label>
            Precio
            <input type="text" name="price">
        </label><br><br>

        <textarea name="description" id="" cols="30" rows="10"> Descripción</textarea>
        <br><br>

        <label>
            Imagen
            <input type="file" name="image">
        </label><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>