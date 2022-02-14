<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <title>Espectador</title>
 </head>
  <body>
    <h1>Espectador</h1>

    @if(isset($espectador))
     {!! Form::open(['route' => array('espectador.update',$espectador->id), 'method' => 'PUT', 'name' => 'form'])!!}
    @else
     {!! Form::open(['route' => array('espectador.store'), 'method' => 'POST', 'name' => 'form'])!!}
    @endif

    {!!Form::label('nome', 'Nome:', ['class' => 'form-check-label'])!!}
    {!!Form::text('nome',   isset($espectador) ? $espectador->nome : null, ['class' => 'form-control','placeholder' => 'Somente Letras',  $form??null])!!}

    {!!Form::label('idade', 'Idade:', ['class' => 'form-check-label'])!!}
    {!!Form::number('idade',   isset($espectador) ? $espectador->idade : null, ['class' => 'form-control','placeholder' => 'Somente Números',  $form??null])!!}

    {!!Form::label('serie', 'Série:', ['class' => 'form-check-label'])!!}
    {!!Form::select('serie',$series , null,['class' => 'form-control', $form??null, 'placeholder' => 'Escolha uma série'])!!}

    <div class="input-group">
        <span class="input-group-btn">
            {!! Form::submit('Enviar', ['class' => 'btn btn-success margem', $form??null]); !!}

            {!! Form::close() !!}
        </span>

        <span class="input-group-btn">
            @if (isset($espectador))
                {!! Form::open(['route' => array('espectador.destroy', $espectador->id), 'method' => 'DELETE', 'name' => 'form'])!!}
                    {!! Form::submit('Excluir', ['class' => 'btn btn-danger margem']); !!}
                {!! Form::close() !!}
            @endif
        </span>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>
