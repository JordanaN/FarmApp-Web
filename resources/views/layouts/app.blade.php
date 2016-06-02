<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSS -->
 <link href="{{ asset('css/all.css') }}" rel="stylesheet">

 <title>FarmApp</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <nav class="navbar navbar-default navbar-fixed-top" id="nav-customer" role="navigation">
        <div class="container">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><img class="icone_navbar" src="{{asset('../img/intro5.png')}}" ></li>
             <li class="active"><a href="{{ url('/home') }}">Home</a></li>
           </ul>
           <ul class="nav navbar-nav navbar-right">
              @if (Auth::guest())
              <li>
                <a href="{{ url('/login') }}" data-title="Login" data-toggle="modal" data-target="#myModal" data-modal-width="600px">Login</a>
             </li>
             <li><a href="{{ url('/register') }}">Register</a></li>
             @else
             <li><a href="{{ url('/produtos') }}">Produtos</a></li>
             <li><a href="{{ url('/categorias') }}">Categorias</a></li>
             <li><a href="{{ url('/clientes') }}">Clientes</a></li>
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
               </a>

               <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
               </ul>
            </li>
            @endif
         </ul>
      </div>
   </div>
</nav>
</div>

@yield('content')

</div>

<div class="modal fade" id="myModal">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 </div>
 <div class="modal-body">
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 </div>
</div>
</div>
</div>

<!-- JavaScripts e Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

<script src="{{ URL::asset('js/all.js') }}"></script>
</body>
</html>
