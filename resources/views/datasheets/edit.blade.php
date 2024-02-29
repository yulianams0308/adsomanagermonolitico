@extends('layouts.plantilla')

@section('content')


    

    <main>
       

        <section class="j">
            <div class="aprendiz1">
                Editar Ficha
            </div>
        </section>
        <section class="f">
            <div class="panel2">
                <i class="fa-solid fa-circle-arrow-left fa-2xs" style="color: #ffffff;"></i>
                <a href="{{route('datasheets.show', $datasheet)}}">Regresar</a>
            </div>
        </section>

        <div class="addresult">
        <form action="{{route('datasheets.update', $datasheet)}}" method="POST" >
  
            @csrf
            @method('PUT')
          
            <div class="form-group">
            <label for="exampleFormControlInput1">Numero ficha</label>
            <input  class="nombreusuario"  type="text" class="form-control" name="numero_ficha" value="{{$datasheet->numero_ficha}}">
          </div>
        
          <div class="form-group">
            <label for="exampleFormControlInput1">Programa</label>
            <input  class="nombreusuario"  type="text" class="form-control" name="programa" value="{{$datasheet->programa}}">
          </div>
        
          {{-- <div class="form-group">
            <label for="exampleFormControlInput1">Competencia</label>
            @foreach($competences as $competence)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="competences[]" value="{{ $competence['id'] }}" {{ in_array($competence['id'], $datasheet->competences->pluck('id')->toArray()) ? 'checked' : '' }}>
                    <label class="form-check-label" for="competence{{ $competence['id'] }}">
                        {{ $competence['nombre_competencia'] }}
                    </label>
                </div>
            @endforeach
        </div> --}}
        
        <div class="form-group">
            <label for="exampleFormControlInput1">Competencias</label>
        
        @foreach($competences as $competence)
            <div class="blockcheck">
                <input type="checkbox" class="small-checkbox" name="competences[]" value="{{ $competence->id }}" {{ in_array($competence->id, $selectedCompetences) ? 'checked' : '' }}>

                <label class="labelcheck">{{ $competence->nombre_competencia }}
                </label>
               
            </div>
        @endforeach
    </div>

   

        
       
        
        
        
        
        
        
        <section class="n">
            <div >
                
                <button type="submit" ><i class="fa-solid fa-arrows-rotate fa-lg" style="color: #ffffff;"></i>&nbsp;Actualizar</button>
            </div>
        </section>
          
          
        
        </form>


       

       

    </main>





    @endsection