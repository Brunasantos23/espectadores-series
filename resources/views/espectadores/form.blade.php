<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" lang="pt-br"/>
    </head>
    <body>

         <form  method="POST" action="{{ route('espectador.store') }}" name="form">

            @csrf

             <div>

                 <label for="nome">Nome:</label>
                 <input type="text"  value="{{$espectadores->nome??''}}" id="nome" name="nome"><br/>

                 <label for="idade">Idade:</label>
                 <input type="int" value="{{$espectadores->idade??''}}" id="idade" name="idade"><br/>

                 <input type="submit" value="Enviar">

             </div>

         </form>

    </body>
</html>
