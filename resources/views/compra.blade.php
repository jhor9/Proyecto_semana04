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
            <td>Serie</td>
            <td>Numero_Correo</td>
            <td>Fecha</td>
            <td>IGB_TOTAL</td>
            <td>sub_TOTAL</td>
            <td>TOTAL</td>
        </tr>
        @foreach($dato as $value)
        <tr><td>{{$value->idcompra}}</td>
            <td>{{$value->serie}}</td>
            <td>{{$value->nun_correo}}</td>
            <td>{{$value->fec_rec}}</td>
            <td>{{$value->igb_total}}</td>
            <td>{{$value->sub_total}}</td>
            <td>{{$value->total}}</td>
            
    </tr>
        @endforeach
    </table>
</body>
</html>