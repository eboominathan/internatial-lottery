@extends('layouts.app')

@section('content')
<br>
<div class="container" style="height:91vh">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="alert alert-success"></div>
                <form id="form">
                    @csrf
                    <div class="card-body">
                            <div class="col-sm-12">
                                <div class="row">

                                    <div class="col-sm-4">

                                                <select style="width:125px" id="time" name="type" class="form-control">
                                                    <option value="">Select time</option>
                                                    <option value="8">08:00 AM</option>
                                                    <option value="10">10:00 AM</option>
                                                    <option value="12">12:00 PM</option>
                                                    <option value="3">03:00 PM</option>
                                                    <option value="5">05:00 PM</option>
                                                    <option value="7">07:00 PM</option>
                                                </select>

                                    </div>
                                    <div class="col-sm-4">

                                            <h5> INTERNATIONAL LOTTERY  <br>RESULT ENTER BOARD</h5>

                                    </div>
                                    <div class="col-sm-4">

                                            <h5> <?php echo date('l M d,Y'); ?></h5>

                                    </div>
                                </div>
                            </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <span class="fs-5 fw-bold">A: Jackpot</span>
                                    <div class="clearfix"></div><br>
                                    <div class="row text-center"  >
                                        <div class="col-sm-3 "></div>
                                        <div class="col-sm-3 ">
                                            <input maxlength="2"  class="form-control" name="a1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="3"  class="form-control" name="a2">
                                        </div>
                                        <br >
                                        <br >
                                         <div class="footer" align="center">
                                        <button type="button" class="btn btn-danger custom_btn">Submit</button>
                                        </div>

                                    </div>
                                </div>



                            </div> <!-- Row -->

                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- row  --}}

        <style>
            body{
    /*background-image: url('{{asset('images/background.jpg')}}');*/
    background: #000000;
    background: linear-gradient(320deg, #000000, #dddddd, #eeeeee);
    }
    .card{
        background: rgba(255, 255, 255, 0.2) !important;
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    body{
    font-family: "Inter",-apple-system,"Nunito",BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;
    }
        </style>

    </div>
</div>
@endsection
