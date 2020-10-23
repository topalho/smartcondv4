@extends ('portal.master.teste')
@section('teste')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista das unidades cadastradas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">//</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
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
