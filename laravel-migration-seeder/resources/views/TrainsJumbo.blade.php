<div class="myTrainRow">
    @foreach ($mytrains as $train)
    <span>{{$train->azienda}}</span> 
    -
    <span>{{$train->stazione_partenza}}</span> 
    -
    <span>{{$train->stazione_arrivo}}</span> 
    -
    <span>{{$train->orario_partenza}}</span> 
    -
    <span>{{$train->orario_arrivo}}</span> 
    -
    <span>{{$train->codice_treno}}</span> 
    -
    <span>{{$train->numero_carrozze}}</span> 
    -
    <span>{{$train->in_orario}}</span> 
    -
    <span>{{$train->cancellato}}</span> 
    -
    <br>
    @endforeach

</div>