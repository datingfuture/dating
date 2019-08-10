<header>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  
 <link href="{{asset('css/backend/bootstrap.css')}}" rel="stylesheet">

  
  

 <script src="{{asset('js/backendjs/jquery-3.3.1.slim.min.js')}}"></script>



<script src="{{asset('js/backendjs/popper.min.js')}}"></script>

<script src="{{asset('js/backendjs/fiteasy.form_validation.js')}}"></script>

<script src="{{asset('js/backendjs/bootstrap.js')}}"></script>


<link href="{{asset('dist/js/jquery-3.2.1.js')}}">


<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</header>





<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
   
   @include('admin.sidenav') 

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      
      @yield('content')


    </main>
  </div>
</div>


<script src="{{ asset('js/backendjs/jquery.min.js') }}"></script> 
<script src="{{ asset('js/backendjs/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/backendjs/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/backendjs/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/backendjs/select2.min.js') }}"></script> 
<script src="{{ asset('js/backendjs/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/backendjs/jquery.validate.js') }}"></script> 
<script src="{{ asset('js/backendjs/matrix.js') }}"></script> 
<script src="{{ asset('js/backendjs/matrix.form_validation.js') }}"></script>
<script src="{{ asset('js/backendjs/matrix.tables.js') }}"></script>
<script src="{{ asset('js/backendjs/matrix.popover.js') }}"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>






@yield('scripts')
