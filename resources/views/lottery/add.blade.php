@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-white">
            <div class="card">
                <div class="alert alert-success"></div>
                <form id="form">
                    @csrf
                    <div class="card-body">
                        <h6 class="card-title p-3 mb-2" style="background-color: rgba(0, 0, 0, 0.05)">
                            International - Lottery
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span>
                                            <h5> <?php echo date('l M d,Y'); ?></h5>
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <span>
                                            <h5>Time :
                                                <select style="width:100px" id="time" name="type">
                                                    <option value="">Select </option>
                                                    <option value="8">08:00 AM</option>
                                                    <option value="10">10:00 AM</option>
                                                    <option value="12">12:00 PM</option>
                                                    <option value="3">03:00 PM</option>
                                                    <option value="5">05:00 PM</option>
                                                    <option value="7">07:00 PM</option>
                                                </select>
                                            </h5>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </h6>
                        <div class="col-sm-12 text-white">
                            <div class="row">
                                <div class="col-sm-6 text-center border-right">
                                    <span class="fs-5 fw-bold">A: Jackpot</span>
                                    <div class="clearfix"></div><br>
                                    <div class="row">
                                        <div class="col-sm-3 ">
                                            <input maxlength="2"  class="form-control" name="a1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="2"  class="form-control" name="a2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="3"  class="form-control" name="a3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="3"  class="form-control" name="a4">
                                        </div>
                                        <br >
                                        <br >
                                         <div class="footer" align="center">
                                        <button type="button" class="btn btn-danger custom_btn">Submit</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <span class="fs-5 fw-bold">B: Jackpot</span>
                                    <div class="clearfix"></div><br>
                                   <div class="row">
                                        <div class="col-sm-3">
                                            <input maxlength="2"  class="form-control" name="b1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="2"  class="form-control" name="b2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="3"  class="form-control" name="b3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="3"  class="form-control" name="b4">
                                        </div>
                                         <br >
                                        <br >
                                         <div class="footer" align="center">
                                        <button type="button" class="btn btn-danger custom_btn">Submit</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix"></div><br>
                                <hr />
                                <div class="col-sm-6 text-center border-right">
                                    <span class="fs-5 fw-bold">C: Jackpot</span>
                                    <div class="clearfix"></div><br>
                                   <div class="row">
                                        <div class="col-sm-3">
                                            <input maxlength="2"  class="form-control" name="c1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="2"  class="form-control" name="c2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="3"  class="form-control" name="c3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="3"  class="form-control" name="c4">
                                        </div>
                                         <br >
                                        <br >
                                         <div class="footer" align="center">
                                        <button type="button" class="btn btn-danger custom_btn">Submit</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <span class="fs-5 fw-bold">D: Jackpot</span>
                                    <div class="clearfix"></div><br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input maxlength="2"  class="form-control" name="d1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="2"  class="form-control" name="d2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="3"  class="form-control" name="d3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input maxlength="3"  class="form-control" name="d4">
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
            .container{
    /*background-image: url('{{asset('images/background.jpg')}}');*/
        background: #8a2387;
        background: linear-gradient(320deg,#f27121,#e94057,#8a2387);
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
