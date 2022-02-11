<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Criação de espectador</title>
  </head>
  <body>
    <h1>Criação de espectador</h1>

    @if(isset($espectador))
    {!! Form::open(['route' => array('espectador.update'), 'method' => 'PUT', 'name' => 'form'])!!}
    @else
    {!! Form::open(['route' => array('espectador.store'), 'method' => 'POST', 'name' => 'form'])!!}
    @endif

    {!!Form::label('nome', 'Nome:', ['class' => 'form-check-label'])!!}
    {!!Form::text('nome',   isset($espectador) ? $espectador->nome : null, ['class' => 'form-control','placeholder' => 'Somente Letras',  $form??null])!!}

    {!!Form::label('idade', 'Idade:', ['class' => 'form-check-label'])!!}
    {!!Form::number('idade',   isset($espectador) ? $espectador->idade : null, ['class' => 'form-control','placeholder' => 'Somente Números',  $form??null])!!}

    {!!Form::label('serie', 'Série:', ['class' => 'form-check-label'])!!}
    {!!Form::select('serie',$series , isset($espectador) ? 'Confira as séries abaixo:' : null,['class' => 'form-control', $form??null, 'placeholder' => 'Escolha uma série'])!!}

    {!! Form::submit('Enviar', ['class' => 'btn btn-success', $form??null]); !!}

    {!! Form::close() !!}

    <table class="table table-striped">
        <thead>
            <tr>
             <th scope="col">Lista de Séries</th>
            </tr>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Streaming</th>
            <th scope="col">Temporadas</th>
            <th scope="col">Gênero</th>
            <th scope="col">Status</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($espectador->series as $serie)
            <tr>
                <th scope="row">{{$serie->nome}}</th>
                <td>{{$serie->}}</td>
                <td>{{$serie->quant_temp}}</td>
                <td>{{$serie->genero}}</td>
                <td>{{$serie->status}}</td>
                <td><a type="button" class="btn btn-primary" href="{{route('espectadores.destroy',$->id)}}">Excluir</a></td>
              </tr>
            @endforeach
        </tbody>
      </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>
