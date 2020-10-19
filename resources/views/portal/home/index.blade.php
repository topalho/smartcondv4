  
    @extends ('portal.master.layout')
    @section('home')
    
    <h1 class="display-4 font-weight-normal">Bem vindo ao SmartCond!</h1>
    <p class="lead font-weight-normal">Sitema de gerenciamento de cobranças para seu condomínio</p>
    <div>
        <svg width="240px" height="240px" viewBox="0 0 16 16" class="bi bi-star-fill" fill="yellow" xmlns="http://www.w3.org/2000/svg">
        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
      </svg>
      <a class="btn btn-outline-secondary"  href="{{ route('portal.administradoras')}}">Continuar!</a>
    </div>
      @endsection