@extends('layouts.plantilla')

@section('content')


    

    <main>
       

        <section class="j">
            <div class="aprendiz1">
                Añadir Ficha
            </div>
        </section>
        <section class="f">
            <div class="panel2">
                <i class="fa-solid fa-circle-arrow-left fa-2xs" style="color: #ffffff;"></i>
                <a href="{{route('datasheets.index')}}">Regresar</a>
            </div>
        </section>

        <div class="addresult">
        <form action="{{route('datasheets.store')}}" method="POST" >
  
            @csrf
          
            <div class="form-group">
            <label for="exampleFormControlInput1">Numero ficha</label>
            <input  class="nombreusuario"  type="text" class="form-control" name="numero_ficha" placeholder="">
          </div>
        
          <div class="form-group">
            <label for="exampleFormControlInput1">Programa</label>
            <input  class="nombreusuario"  type="text" class="form-control" name="programa" placeholder="">
          </div>
        
          <div class="form-group">
            <label for="exampleFormControlInput1">Competencia</label>
            
                @foreach($competences as $competence)
                    <div class="blockcheck2">
                        <input type="checkbox" class="small-checkbox" name="competences[]" id="competence_{{ $competence['id'] }}" value="{{ $competence['id'] }}">
                        <label class="labelcheck">{{ $competence->nombre_competencia }}
                    </div>
                @endforeach
            
            
        </div>
        
        
        
        <section class="n">
            <div >
                
                <button type="submit" ><i class="fa-regular fa-floppy-disk fa-sm" style="color: #ffffff;" ></i>&nbsp;Guardar</button>
            </div>
        </section>
          
          
        
        </form>


       

       

    </main>





    @endsection