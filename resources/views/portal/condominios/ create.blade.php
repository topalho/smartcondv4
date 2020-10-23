@extends ('portal.master.teste')
@section('teste')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Cadastrar novos condomínios</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Perfil</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <!-- Input addon -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Insira os dados aqui:</h3>
            </div>
            <div class="card-body">
              <div class="input-group mb-2" style='text-align:right'>
             
              <form name="formCad" id="formCad" method="GET" action="{{url('condominios')}}">
                @csrf
                <input type="text" name="nome" class="form-control" placeholder="Nome completo">
                <input type="text" name="email" class="form-control" placeholder="E-mail">
                <input type="text" name="telefone" class="form-control" placeholder="Telefone">
                <input type="text" name="endereco" class="form-control" placeholder="Endereço">
                <input type="text" name="numero" class="form-control" placeholder="Número">
                <input type="text" name="complemento" class="form-control" placeholder="Complemento">
                <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                <input type="text" name="estado" class="form-control" placeholder="Estado"> <br>
                <button type="submit" name="" class="btn btn-primary">Cadastrar</button>

            </form>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>

@endsection
