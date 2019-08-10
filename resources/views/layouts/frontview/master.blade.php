<!DOCTYPE>
<html >

<header>
 <title>Dating website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet">


  <link href="{{asset('dist/css/style.css')}}" rel="stylesheet">


  <link href="{{ asset('dist/css/jquery-ui.css') }}" rel="stylesheet">

 <script src="{{asset('js/frontendjs/jquery-3.3.1.slim.min.js')}}"></script>



<script src="{{asset('js/frontendjs/popper.min.js')}}"></script>




<script src="{{asset('js/frontendjs/bootstrap.js')}}"></script>


<link href="{{asset('js/frontendjs/jquery-3.2.1.js')}}">


<link href="{{ asset('dist/css/font-awesome.min.css') }}" rel="stylesheet" />


<script src="{{ asset('js/frontendjs/jquery.js') }}"></script>

<script src="{{ asset('js/frontendjs/jquery.validate.js') }}"></script>
<script src="{{ asset('js/frontendjs/date.js') }}"></script>

<script src="{{ asset('js/frontendjs/jquery-ui.js') }}"></script>
<script src="{{ asset('js/frontendjs/jquery.dataTables.min.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js">
  



</script> 





<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />


<script>
  $(function() {
    $( "#dob" ).datepicker({ 
      dateFormat:'yy-mm-dd',
        changeMonth: true,
      changeYear: true,
        maxDate: '0',
        yearRange: '1950:2018' 
    });
  });
</script>

  
</header>

<body>
<!-- NAVBAR WITH RESPONSIVE TOGGLE -->
   @include('layouts.frontview.header')

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">


    <section id="explore-section" class="bg-light text-muted py-5">
    <div class="container">

      <div class="row">

       @include('layouts.frontview.sidebar')

       @yield('content')

 
      </div>
    </div>

    </section>
  </div>

</main>


@include('layouts.frontview.footer')

@yield('scripts')

</body>
</html>
