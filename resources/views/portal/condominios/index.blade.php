@extends ('portal.master.teste')
@section('teste')
<h5 class="display-4 font-weight-normal"> Condominios</h5>
    
    <div class="text-left">
        <a href="">
            <button class="btn btn-success">Cadastrar novo condominio</button>
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
            @foreach($condominios as $condominios)
            <tr>
              <th scope="row">{{$condominios->id}}</th>
              <td>{{$condominios->name}}</td>
              <td>{{$condominios->email}}</td>
              <td>{{$condominios->endereco}}</td>
              <td>{{$condominios->numero}}</td>
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
