@extends ('portal.master.teste')
@section('teste')
<h5 class="display-4 font-weight-normal">Unidades</h5>
    
<div class="text-left">
    <a href="">
        <button class="btn btn-success">Cadastrar uma nova Unidade</button>
    </a>
</div>
<br>

    <div class="col-30 m-auto">
    <table class="table" id="teste">
    <thead class="thead-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Endereço</th>
        <th scope="col">Número</th>
      </tr>
    </thead>
    <tbody>
        @foreach($unidades as $unidades)
        <tr>
          <th scope="row">{{$unidades->id}}</th>
          <td>{{$unidades->name}}</td>
          <td>{{$unidades->email}}</td>
          <td>{{$unidades->endereco}}</td>
          <td>{{$unidades->numero}}</td>
          <td>
              <a href="">
              <button class="btn btn-dark">Vizualizar</button>
          </a>

          <a href="">
            <button class="btn btn-primary">Editar</button>
        </a>

        <a href="">
            <button class="btn btn-danger">Deletar</button>
        </a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
