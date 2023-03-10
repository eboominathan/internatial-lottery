<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>International Lottery</title>
</head>
<body>
  <link href="{{asset('/')}}css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{asset('/')}}css/custom.css" rel="stylesheet" />


  <style>
    .img {
      width: 75px;
      height: 40px;
      /*display: none !important;*/
    }
    .card{
      background: grey !important;
      border: solid 4px #fff;
    }
    .title-block{
    margin: 0px 56px;
    }
  </style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="{{ url('/dashboard') }}">INTERNATIONAL LOTTERY</a>
      <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
      >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li>&nbsp;&nbsp;&nbsp;</li>
        <li class="nav-item">
          <img src="{{asset('/')}}images/malayasia.png" class="img" title="Malaysia" />
        </li>
        <li>&nbsp;&nbsp;&nbsp;</li>
        <li class="nav-item">
          <img src="{{asset('/')}}images/vietnam.png" class="img" title="Vietnam" />
        </li>
        <li>&nbsp;&nbsp;&nbsp;</li>
        <li class="nav-item">
          <img src="{{asset('/')}}images/aus.png" class="img" title="Australia" />
        </li>
        <li>&nbsp;&nbsp;&nbsp;</li>
        <li class="nav-item">
          <img src="{{asset('/')}}images/sing.png" class="img" title="Singapore" />
        </li>
      </ul>
      {{-- <form class="d-flex">
        <input
        class="form-control me-2"
        type="search"
        placeholder="Search"
        aria-label="Search"
        /> --}}
        <a class="  btn btn-warning" href="{{ url('lottery/view') }}">Results</a>

        @if(isset(Auth::user()->id) && Auth::user()->id ==  1)
        <a class="btn btn-success" href="{{url('/register')}}">Create Users</a>
        <a class="btn btn-success" href="{{url('/lottery/create')}}">Create Result</a>
        @endif
        @if(!Auth::user())
        <a class=" btn btn-success" aria-current="page" href="{{url('/login')}}">Login</a>

        @elseif(Auth::user())
          <a class=" btn btn-success"  href="{{ route('signout') }}">Logout</a>
          @endif
    @php
    @endphp

      </form>
    </div>
  </div>
</nav>
<!-- Nav bar ends  -->
@yield('content')
<script src="{{asset('/')}}js/jquery.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.min.js"></script>
<script type="text/javascript">
  var base_url = "{{ url('/')}}";
</script>
<script  src="{{asset('/')}}js/custom.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function() {
        // INITIALIZE DATEPICKER PLUGIN
        $('#datepicker').datepicker({
            clearBtn: true,
            format: "dd-mm-yyyy",
            autoclose: true
        });

        $('#datepicker').change(function(){
                $('form').submit();
        });
    });

</script>

</body>
</html>
