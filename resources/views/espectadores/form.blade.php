<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" lang="pt-br"/>
    </head>
    <body>

         <form  method="POST" action="#" name="form">

             <div>

                 <label for="nome">Nome:</label>
                 <input type="text"  value="{{$espectadores->nome??''}}" id="nome"><br/>

                 <label for="idade">Idade:</label>
                 <input type="int" value="{{$espectadores->idade??''}}" id="idade">

             </div>

         </form>

    </body>
</html>
