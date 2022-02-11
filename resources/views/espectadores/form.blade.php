<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" lang="pt-br"/>
    </head>
    <body>

        @if(isset($espectador))
           <form method="POST" action="{{route('espectador.update',$espectador->id)}}" accept-charset="UTF-8" name="form">
            @method('PUT')
        @else
           <form  method="POST" action="{{ route('espectador.store') }}" name="form">
        @endif
            @csrf

             <div>

                 <label for="nome">Nome:</label>
                 <input type="text"  value="{{$espectador->nome??''}}" id="nome" name="nome"><br/>

                 <label for="idade">Idade:</label>
                 <input type="int" value="{{$espectador->idade??''}}" id="idade" name="idade"><br/>

                 <input type="submit" value="Enviar">

             </div>

         </form>

         @if(isset($espectador))
            <form  method="POST" action="{{ route('espectador.destroy',$espectador->id) }}" name="form">
                @method('DELETE')
                @csrf

              <input type="submit" value="Deletar">
            </form>
         @endif


    </body>
</html>
