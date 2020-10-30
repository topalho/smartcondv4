@extends ('portal.master.teste')
@section('teste')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Dados do Perfil</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active"><a href="{{route('perfil.index')}}">Perfil</a></li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
    
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                           src="{!! asset('img/alexia.png') !!}"
                           alt="User profile picture">
                    </div>
    
                    <h3 class="profile-username text-center">Aléxia Santos</h3>
    
                    <p class="text-muted text-center">Adminstrativo Sênior</p>
    
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Equipe</b> <a class="float-right">Financeiro/Campinas</a>
                      </li>
                      <li class="list-group-item">
                        <b>Gerente direto</b> <a class="float-right">Cíntia Rezende</a>
                      </li>
                      <li class="list-group-item">
                        <b>Área de atuação</b> <a class="float-right"> FP&A</a>
                      </li>
                    </ul>
    
                    <a href="#" class="btn btn-primary btn-block"><b>Trocar foto</b></a>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    
                <!-- About Me Box -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Sobre mim</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Education</strong>
    
                    <p class="text-muted">
                      Bacharel em Ciências Econômicas
                    </p>
    
                    <hr>
    
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
    
                    <p class="text-muted">Campinas, São Paulo</p>
    
                    <hr>
    
                    <strong><i class="fas fa-pencil-alt mr-1"></i> Habilidades</strong>
    
                    <p class="text-muted">
                      <span class="tag tag-danger">Controladoria</span>
                      <span class="tag tag-success">Finanças</span>
                      <span class="tag tag-info">Planjemento</span>
                      <span class="tag tag-warning">Scrum</span>
                      <span class="tag tag-primary">SAP</span>
                    </p>
    
                    <hr>
    
                    <strong><i class="far fa-file-alt mr-1"></i> Acessos</strong>
    
                    <p class="text-muted">Acesso completo a cadastros de condomínios, unidades e boletos</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Últimos tickets</a></li>
                      <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Registros de atividades</a></li>
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Fale com o RH</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('AdminLTE/dist/img/user1-128x128.jpg')}}" alt="user image">
                            <span class="username">
                              <a href="#">Jonathan Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Morador da unidade 5, apto 15.</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Aléxia, pode gerar um novo boleto para mim referente aos dois meses que estou em atraso?
                          </p>
    
                          <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Compartilhar</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Gostei</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Interações (5)
                              </a>
                            </span>
                          </p>
    
                          <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
    
                        <!-- Post -->
                        <div class="post clearfix">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('AdminLTE/dist/img/user7-128x128.jpg')}}" alt="User Image">
                            <span class="username">
                              <a href="#">Sarah Ross</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Morador da unidade 10, apto 7.</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Aléxia, quando podemos conversar sobre o acordo realizado na última assenbléia? O morador do 501 ainda está colocando som alto após as 22h =/
                          </p>
    
                          <form class="form-horizontal">
                            <div class="input-group input-group-sm mb-0">
                              <input class="form-control form-control-sm" placeholder="Response">
                              <div class="input-group-append">
                                <button type="submit" class="btn btn-danger">Enviar</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.post -->
    
                        <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('AdminLTE/dist/img/user6-128x128.jpg')}}" alt="User Image">
                            <span class="username">
                              <a href="#">Adam Jones</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Fotografo do condomínio</span>
                          </div>
                          <!-- /.user-block -->
                          <div class="row mb-3">
                            <div class="col-sm-6">
                              <img class="img-fluid" src="{{asset('AdminLTE/dist/img/photo1.png')}}" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <div class="row">
                                <div class="col-sm-6">
                                  <img class="img-fluid mb-3" src="{{asset('AdminLTE/dist/img/photo2.png')}}" alt="Photo">
                                  <img class="img-fluid" src="{{asset('AdminLTE/dist/img/photo3.jpg')}}" alt="Photo">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                  <img class="img-fluid mb-3" src="{{asset('AdminLTE/dist/img/photo4.jpg')}}" alt="Photo">
                                  <img class="img-fluid" src="{{asset('AdminLTE/dist/img/photo1.png')}}" alt="Photo">
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
    
                          <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                              </a>
                            </span>
                          </p>
    
                          <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <div class="timeline timeline-inverse">
                          <!-- timeline time label -->
                          <div class="time-label">
                            <span class="bg-danger">
                              2 Nov. 2020
                            </span>
                          </div>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <div>
                            <i class="fas fa-envelope bg-primary"></i>
    
                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 12:05</span>
    
                              <h3 class="timeline-header"><a href="#">Time de atendimento</a> enviado por e-mail</h3>
    
                              <div class="timeline-body">
                                Segue ata de esclarecimento referente a reunião de condomínio realizado no último sábado.
                              </div>
                              <div class="timeline-footer">
                                <a href="#" class="btn btn-primary btn-sm">Ler mais</a>
                                <a href="#" class="btn btn-danger btn-sm">Apagar</a>
                              </div>
                            </div>
                          </div>
                          <!-- END timeline item -->
                          <!-- timeline item -->
                          <div>
                            <i class="fas fa-user bg-info"></i>
    
                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
    
                              <h3 class="timeline-header border-0"><a href="#">Aléxia Santos</a> remetente do e-mail / principal
                              </h3>
                            </div>
                          </div>
                          <!-- END timeline item -->
                          <!-- timeline item -->
                          <div>
                            <i class="fas fa-comments bg-warning"></i>
    
                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
    
                              <h3 class="timeline-header"><a href="#">Jay White</a> comentou na sua publicação</h3>
    
                              <div class="timeline-body">
                                Oie, muito obrigado! Eu estava precisando mesmo desse resumo, tive um imprevisto e não consegui comparecer na reunião.
                              </div>
                              <div class="timeline-footer">
                                <a href="#" class="btn btn-warning btn-flat btn-sm">Responder comentário</a>
                              </div>
                            </div>
                          </div>
                          <!-- END timeline item -->
                          <!-- timeline time label -->
                          <div class="time-label">
                            <span class="bg-success">
                              3 Nov. 2020
                            </span>
                          </div>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <div>
                            <i class="fas fa-camera bg-purple"></i>
    
                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 2 days ago</span>
    
                              <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded de novas fotos</h3>
    
                              <div class="timeline-body">
                                <img src="http://placehold.it/150x100" alt="...">
                                <img src="http://placehold.it/150x100" alt="...">
                                <img src="http://placehold.it/150x100" alt="...">
                                <img src="http://placehold.it/150x100" alt="...">
                              </div>
                            </div>
                          </div>
                          <!-- END timeline item -->
                          <div>
                            <i class="far fa-clock bg-gray"></i>
                          </div>
                        </div>
                      </div>
                      <!-- /.tab-pane -->
    
                      <div class="tab-pane" id="settings">
                        <form class="form-horizontal">
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputName" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName2" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Experiência</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Habilidades</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Eu li e concordo com os <a href="#">termos e condições</a>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Enviar</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.0.2
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
      </footer>
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    
    <!-- jQuery -->
    <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
    </body>