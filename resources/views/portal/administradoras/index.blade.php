@extends ('portal.master.teste')
@section('teste')    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>teste</h1>
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
                  <th>Nome da Administradora</th>
                  <th>E-mail</th>
                  <th>Endereço</th>
                  <th>Telefone</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($adm as $adm)
                    <tr>
                      <td>{{$adm->name}}</td>
                      <td>{{$adm->email}}</td>
                      <td>{{$adm->endereco}}</td>
                      <td>{{$adm->numero}}</td>
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
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          
@endsection
