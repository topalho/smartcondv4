@extends ('portal.master.teste')
@section('teste')
<h5 class="display-4 font-weight-normal">Boletos</h5>
    
    <div class="text-left">
        <a href="">
            <button class="btn btn-success">Gerar boleto avulso</button>
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
            @foreach($boletos as $boletos)
            <tr>
              <th scope="row">{{$boletos->id}}</th>
              <td>{{$boletos->name}}</td>
              <td>{{$boletos->email}}</td>
              <td>{{$boletos->endereco}}</td>
              <td>{{$boletos->numero}}</td>
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
