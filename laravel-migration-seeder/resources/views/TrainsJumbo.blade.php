<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.cdnfonts.com/css/ds-digital" rel="stylesheet">
    <link rel="stylesheet" href="{{'css/app.css'}}">
    <title>Document</title>
</head>
<body>
<div class="myTrainRow">


    <div class='row title'>Azienda</div> 
    <div class='row orario title'>Arriva a</div> 
    <div class='row orario title'>Parte per</div> 
    <div class='row title'>Orario Partenza</div> 
    <div class='row title'>Orario Arrivo</div> 
    <div class='row title'>CD TRENO</div> 
    <div class='row title'>Carrozze</div>
    <div class='row title'>Stato</div>
    <div class='row title'></div>


    @foreach ($mytrains as $train)
    <div class='row'>{{$train->azienda}}</div> 
    <div class='row orario'>{{$train->stazione_partenza}}</div> 
    <div class='row orario'>{{$train->stazione_arrivo}}</div> 
    <div class='row'>{{$train->orario_partenza}}</div> 
    <div class='row'>{{$train->orario_arrivo}}</div> 
    <div class='row'>{{$train->codice_treno}}</div> 
    <div class='row'>{{$train->numero_carrozze}}</div>
    @if ($train->in_orario == 1)
    <div class='row'>Puntuale</div>
    @else
    
    @endif
    @if( $train->cancellato == 1)
    <div id='camcellato' class='row'>Cancellato</div> 
    @else
   
    @endif
    
    @if (date('H:i') < $train->orario_partenza and !($train->cancellato == 1))
    <div class="row">
        <span class="circle-left">◉</span>
        <span class="circle-right">◉</span>
    </div>
    @else 
    <div class="row"></div>
    @endif
    @endforeach
    
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js" integrity="sha512-v/wOVTkoU7mXEJC3hXnw9AA6v32qzpknvuUF6J2Lbkasxaxn2nYcl+HGB7fr/kChGfCqubVr1n2sq1UFu3Gh1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

