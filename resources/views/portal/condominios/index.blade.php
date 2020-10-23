@extends ('portal.master.teste')
@section('teste')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Lista de condominios cadastrados</h1>
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
