<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table>
        <tr>
            <td>Codigo</td>
            <td>Id  de compra</td>
            <td>Id de producto</td>
            <td>Descripcion</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Total</td>
        </tr>
        @foreach($dato as $value)
        <tr><td>{{$value->idcompradetalle}}</td>
            <td>{{$value->idcompre}}</td>
            <td>{{$value->idproducto}}</td>
            <td>{{$value->descripcion}}</td>
            <td>{{$value->precio}}</td>
            <td>{{$value->cantidad}}</td>
            <td>{{$value->total}}</td>
            
    </tr>
        @endforeach
    </table>
</body>
</html>