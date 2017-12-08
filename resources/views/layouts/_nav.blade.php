<div class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">Memes</a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('users.posts') }}">Ver Posts</a></li>
        <li class="active"><a href="{{ route('users.posts') }}">Subir Post</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="" class="dropdown-toggle" data-toggle="dropdown">Categorias
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            @foreach($categories as $category)
                <li><a href="#">{{$category->name}}</a></li>
            @endforeach   
          </ul>
        </li>
      </ul>
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <ul class="nav navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Delivery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/noticias">Noticias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/premium">Premium</a>
            </li>  
        </ul>
                           <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Ingresar</a></li>
                <li><a href="{{ route('register') }}">Registrar</a></li>
            @else
                @if(Auth::user()->type == 'ADMIN')
                    <li class="nav-item">
                        <a class="nav-link" href="#">Administración</a>
                    </li>
                @endif
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li> 
                            <a href="#">Mis Deliveries</a> 
                        </li>
                        <li> 
                            <a href="#">Mis Promociones</a> 
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Salir
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
    </div>
  </div>
</div>