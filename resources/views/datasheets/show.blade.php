@extends('layouts.plantilla')

@section('content')


    

    <main>
       

        <section class="j">
            <div class="aprendiz1">
                Ver Ficha
            </div>
        </section>
        <section class="f">
            <div class="panel2">
                <i class="fa-solid fa-circle-arrow-left fa-2xs" style="color: #ffffff;"></i>
                <a href="{{route('datasheets.index')}}">Regresar</a>
            </div>
        </section>

        <div class="addresult">
        <form  >
  
            
          
            <div class="form-group">
            <label for="exampleFormControlInput1">Numero ficha</label>
            <div class="inputdatos"><label for="" class="labeldatos">{{$datasheet->numero_ficha}}</label></div>
            
          </div>
        
          <div class="form-group">
            <label for="exampleFormControlInput1">Programa</label>
            <div class="inputdatos"><label for="" class="labeldatos">{{$datasheet->programa}}</label></div>
          </div>

          @if($competences->count() > 0)
          <div class="form-group">
            <label for="exampleFormControlInput1">Competencias Asignadas</label>
        
            @foreach($competences as $competence)
                
                <div class="inputdatos"><label for="" class="labeldatos">{{ $competence->nombre_competencia }}</label></div>
            @endforeach
        
            </div>
        @endif
        
          
        
        
          
          
        
        </form>
        <section class="n">
            <div >
                {{-- <a href="{{route ('datasheets.edit', $datasheet)}}">
                <button type="submit" ><i class="fa-regular fa-pen-to-square fa-lg" style="color: #ffffff;" >
                </i>&nbsp;Editar</button>
                </a> --}}
                <a href="{{ route('datasheets.edit', $datasheet) }}">
                    <button type="button"><i class="fa-regular fa-pen-to-square fa-lg" style="color: #ffffff;"></i>&nbsp;Editar</button>
                </a>
                <form method="post" action="{{route('datasheets.destroy', $datasheet)}}">
                    @csrf
                    @method('delete')
                    
                    <button type="submit"><i class="fa-regular fa-pen-to-square fa-lg" style="color: #ffffff;"></i>&nbsp;Eliminar</button>
                </form>
                
            </div>
        </section>

        
       

       

    </main>





    
    
@endsection
