@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
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
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <span class="fs-5 fw-bold">A: Jackpot</span>
                                        <div class="row">
                                            <div class="centers" id="al_8">
                                                <input type="text" class="rounded-pill form-control" name="a1" maxlength="2">
                                            </div>
                                            <div class="centers fs-5 fw-bold" id="a2_8">-</div>
                                            <div class="centers fs-5 fw-bold" id="a3_8">-</div>
                                            <div class="centers fs-5 fw-bold" id="a4_8">-</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span class="fs-5 fw-bold">B: Jackpot</span>
                                        <div class="row">
                                            <div class="centers fs-5 fw-bold" id="b1_8">-</div>
                                            <div class="centers fs-5 fw-bold" id="b2_8">-</div>
                                            <div class="centers fs-5 fw-bold" id="b3_8">-</div>
                                            <div class="centers fs-5 fw-bold" id="b4_8">-</div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <hr />
                                    <div class="col-sm-6 text-center">
                                        <span class="fs-5 fw-bold">C: Jackpot</span>
                                        <div class="row">
                                            <div class="centers fs-5 fw-bold" id="c1_8">-</div>
                                            <div class="centers fs-5 fw-bold" id="c2_8">-</div>
                                            <div class="centers fs-5 fw-bold" id="c3_8">-</div>
                                            <div class="centers fs-5 fw-bold" id="c4_8">-</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span class="fs-5 fw-bold">D: Jackpot</span>
                                        <div class="row">
                                            <div class="centers fs-5 fw-bold" id="d1_8">-</div>
                                            <div class="centers fs-5 fw-bold" id="d2_8">-</div>
                                            <div class="centers fs-5 fw-bold" id="d3_8">-</div>
                                            <div class="centers fs-5 fw-bold" id="d4_8">-</div>
                                        </div>
                                    </div>
                                </div> <!-- Row -->

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- row  --}}

        </div>
    </div>
    <style>
        .centers{
            width: 50px;
        }
    </style>
@endsection
