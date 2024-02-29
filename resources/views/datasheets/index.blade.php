@extends('layouts.plantilla')

@section('content')
<section class="j">
    <div class="aprendiz1">
        Fichas
    </div>
</section>
<section class="f">
    <div class="panel2">
        <i class="fa-solid fa-circle-arrow-left fa-2xs" style="color: #ffffff;"></i>
        <a href="/html/tablafichas.html">Regresar</a>
    </div>
</section>

<section class="c">
    {{-- <div class="ficha1">
        FICHAS
    </div> --}}
    <div class="ficha7">
        
        <a href="{{route('datasheets.create')}}" ><i class="fa-solid fa-plus fa-sm" style="color: #ffffff;"></i>&nbsp;Agregar</a>
    </div>
</section>

<div class="profesor">
    <img src="{{ asset('../public/img/teacher-removebg-preview.png') }}" alt="">
</div>

    

<section class="d">
@foreach ( $datasheets as $datasheet)
    <div class="ficha2">
        <a href="{{route ('datasheets.show', $datasheet)}}"> {{$datasheet->numero_ficha}}</a>
        
    </div>

@endforeach
</section>
<div class="profesor2">
    <img src="{{ asset('../public/img/profetailandes.png') }}" alt="">
</div>
@endsection