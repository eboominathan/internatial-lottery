@extends('layouts.app')

@section('content')
<style type="text/css">
    .container-fluid{
        /*background-image: url('{{asset('images/background.jpg')}}');*/
            background: #8a2387;
            background: linear-gradient(320deg,#f27121,#e94057,#8a2387);
        }
        .card{            
            background: rgba(255, 255, 255, 0.2);
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

    <div class="container-fluid text-white">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title p-3 mb-2" style="background-color: rgba(0, 0, 0, 0.05)">
                            Internationa1 - Lottery
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span>
                                            <h5> <?=date('l M d,Y') ?> </h5>
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <span>
                                            <h5>Time :8.00 AM</h5>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </h6>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 text-center border-right">
                                    <span class="fs-5 fw-bold">A: Jackpot</span>
                                    <div class="row">
                                        <div class="center fs-5 fw-bold" id="a1_8">-</div>
                                        <div class="center fs-5 fw-bold" id="a2_8">-</div>
                                        <div class="center fs-5 fw-bold" id="a3_8">-</div>
                                        <div class="center fs-5 fw-bold" id="a4_8">-</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <span class="fs-5 fw-bold">B: Jackpot</span>
                                    <div class="row">
                                        <div class="center fs-5 fw-bold" id="b1_8">-</div>
                                        <div class="center fs-5 fw-bold" id="b2_8">-</div>
                                        <div class="center fs-5 fw-bold" id="b3_8">-</div>
                                        <div class="center fs-5 fw-bold" id="b4_8">-</div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <hr />
                                <div class="col-sm-6 text-center border-right">
                                    <span class="fs-5 fw-bold">C: Jackpot</span>
                                    <div class="row">
                                        <div class="center fs-5 fw-bold" id="c1_8">-</div>
                                        <div class="center fs-5 fw-bold" id="c2_8">-</div>
                                        <div class="center fs-5 fw-bold" id="c3_8">-</div>
                                        <div class="center fs-5 fw-bold" id="c4_8">-</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <span class="fs-5 fw-bold">D: Jackpot</span>
                                    <div class="row">
                                        <div class="center fs-5 fw-bold" id="d1_8">-</div>
                                        <div class="center fs-5 fw-bold" id="d2_8">-</div>
                                        <div class="center fs-5 fw-bold" id="d3_8">-</div>
                                        <div class="center fs-5 fw-bold" id="d4_8">-</div>
                                    </div>
                                </div>
                            </div> <!-- Row -->


                            <hr>
                            <div class="footer">
                                <div class="c-result-card__next-draw">
                                    <div class="c-result-card__next-draw-details">
                                        <span class="c-result-card__sub-title c-result-card__prize-label">2 Digits Lucky
                                        Draw / 1 X 50 </span>
                                        <span class="c-result-card__sub-title c-result-card__prize-label"> Est. Jackpot
                                            <b>$ 291 Million</b> </span>
                                        </div>
                                        <dl class="c-result-card__prize-details">
                                            <dt class="c-result-card__prize-label"><b>3 Digits Lucky Draw / 1 X 400 </b></dt>
                                        </dl>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- row  --}}
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title p-3 mb-2" style="background-color: rgba(0, 0, 0, 0.05)">
                                Internationa1 - Lottery
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span>
                                                <h5> <?=date('l M d,Y') ?> </h5>
                                            </span>
                                        </div>
                                        <div class="col-sm-6">
                                            <span>
                                                <h5>Time :10.00 AM</h5>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </h6>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 text-center border-right">
                                        <span class="fs-5 fw-bold">A: Jackpot</span>
                                        <div class="row">
                                            <div class="center fs-5 fw-bold" id="a1_10">-</div>
                                            <div class="center fs-5 fw-bold" id="a2_10">-</div>
                                            <div class="center fs-5 fw-bold" id="a3_10">-</div>
                                            <div class="center fs-5 fw-bold" id="a4_10">-</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span class="fs-5 fw-bold">B: Jackpot</span>
                                        <div class="row">
                                            <div class="center fs-5 fw-bold" id="b1_10">-</div>
                                            <div class="center fs-5 fw-bold" id="b2_10">-</div>
                                            <div class="center fs-5 fw-bold" id="b3_10">-</div>
                                            <div class="center fs-5 fw-bold" id="b4_10">-</div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <hr />
                                    <div class="col-sm-6 text-center border-right">
                                        <span class="fs-5 fw-bold">C: Jackpot</span>
                                        <div class="row">
                                            <div class="center fs-5 fw-bold" id="c1_10">-</div>
                                            <div class="center fs-5 fw-bold" id="c2_10">-</div>
                                            <div class="center fs-5 fw-bold" id="c3_10">-</div>
                                            <div class="center fs-5 fw-bold" id="c4_10">-</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span class="fs-5 fw-bold">D: Jackpot</span>
                                        <div class="row">
                                            <div class="center fs-5 fw-bold" id="d1_10">-</div>
                                            <div class="center fs-5 fw-bold" id="d2_10">-</div>
                                            <div class="center fs-5 fw-bold" id="d3_10">-</div>
                                            <div class="center fs-5 fw-bold" id="d4_10">-</div>
                                        </div>
                                    </div>
                                </div> <!-- Row -->


                                <hr>
                                <div class="footer">
                                    <div class="c-result-card__next-draw">
                                        <div class="c-result-card__next-draw-details">
                                            <span class="c-result-card__sub-title c-result-card__prize-label">2 Digits Lucky
                                            Draw / 1 X 50 </span>
                                            <span class="c-result-card__sub-title c-result-card__prize-label"> Est. Jackpot
                                                <b>$ 291 Million</b> </span>
                                            </div>
                                            <dl class="c-result-card__prize-details">
                                                <dt class="c-result-card__prize-label"><b>3 Digits Lucky Draw / 1 X 400 </b></dt>
                                            </dl>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- row  --}}
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title p-3 mb-2" style="background-color: rgba(0, 0, 0, 0.05)">
                                    Internationa1 - Lottery
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <span>
                                                    <h5> <?=date('l M d,Y') ?> </h5>
                                                </span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span>
                                                    <h5>Time :12.00 PM</h5>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </h6>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 text-center border-right">
                                            <span class="fs-5 fw-bold">A: Jackpot</span>
                                            <div class="row">
                                                <div class="center fs-5 fw-bold" id="a1_12">-</div>
                                                <div class="center fs-5 fw-bold" id="a2_12">-</div>
                                                <div class="center fs-5 fw-bold" id="a3_12">-</div>
                                                <div class="center fs-5 fw-bold" id="a4_12">-</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <span class="fs-5 fw-bold">B: Jackpot</span>
                                            <div class="row">
                                                <div class="center fs-5 fw-bold" id="b1_12">-</div>
                                                <div class="center fs-5 fw-bold" id="b2_12">-</div>
                                                <div class="center fs-5 fw-bold" id="b3_12">-</div>
                                                <div class="center fs-5 fw-bold" id="b4_12">-</div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <hr />
                                        <div class="col-sm-6 text-center border-right">
                                            <span class="fs-5 fw-bold">C: Jackpot</span>
                                            <div class="row">
                                                <div class="center fs-5 fw-bold" id="c1_12">-</div>
                                                <div class="center fs-5 fw-bold" id="c2_12">-</div>
                                                <div class="center fs-5 fw-bold" id="c3_12">-</div>
                                                <div class="center fs-5 fw-bold" id="c4_12">-</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <span class="fs-5 fw-bold">D: Jackpot</span>
                                            <div class="row">
                                                <div class="center fs-5 fw-bold" id="d1_12">-</div>
                                                <div class="center fs-5 fw-bold" id="d2_12">-</div>
                                                <div class="center fs-5 fw-bold" id="d3_12">-</div>
                                                <div class="center fs-5 fw-bold" id="d4_12">-</div>
                                            </div>
                                        </div>
                                    </div> <!-- Row -->


                                    <hr>
                                    <div class="footer">
                                        <div class="c-result-card__next-draw">
                                            <div class="c-result-card__next-draw-details">
                                                <span class="c-result-card__sub-title c-result-card__prize-label">2 Digits Lucky
                                                Draw / 1 X 50 </span>
                                                <span class="c-result-card__sub-title c-result-card__prize-label"> Est. Jackpot
                                                    <b>$ 291 Million</b> </span>
                                                </div>
                                                <dl class="c-result-card__prize-details">
                                                    <dt class="c-result-card__prize-label"><b>3 Digits Lucky Draw / 1 X 400 </b></dt>
                                                </dl>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- row --}}
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title p-3 mb-2" style="background-color: rgba(0, 0, 0, 0.05)">
                                        Internationa1 - Lottery
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <span>
                                                        <h5> <?=date('l M d,Y') ?> </h5>
                                                    </span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span>
                                                        <h5>Time :03.00 PM</h5>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </h6>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6 text-center border-right">
                                                <span class="fs-5 fw-bold">A: Jackpot</span>
                                                <div class="row">
                                                    <div class="center fs-5 fw-bold" id="a1_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="a2_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="a3_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="a4_3">-</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-center">
                                                <span class="fs-5 fw-bold">B: Jackpot</span>
                                                <div class="row">
                                                    <div class="center fs-5 fw-bold" id="b1_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="b2_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="b3_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="b4_3">-</div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <hr />
                                            <div class="col-sm-6 text-center border-right">
                                                <span class="fs-5 fw-bold">C: Jackpot</span>
                                                <div class="row">
                                                    <div class="center fs-5 fw-bold" id="c1_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="c2_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="c3_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="c4_3">-</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-center">
                                                <span class="fs-5 fw-bold">D: Jackpot</span>
                                                <div class="row">
                                                    <div class="center fs-5 fw-bold" id="d1_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="d2_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="d3_3">-</div>
                                                    <div class="center fs-5 fw-bold" id="d4_3">-</div>
                                                </div>
                                            </div>
                                        </div> <!-- Row -->


                                        <hr>
                                        <div class="footer">
                                            <div class="c-result-card__next-draw">
                                                <div class="c-result-card__next-draw-details">
                                                    <span class="c-result-card__sub-title c-result-card__prize-label">2 Digits Lucky
                                                    Draw / 1 X 50 </span>
                                                    <span class="c-result-card__sub-title c-result-card__prize-label"> Est. Jackpot
                                                        <b>$ 291 Million</b> </span>
                                                    </div>
                                                    <dl class="c-result-card__prize-details">
                                                        <dt class="c-result-card__prize-label"><b>3 Digits Lucky Draw / 1 X 400 </b></dt>
                                                    </dl>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- row --}}
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title p-3 mb-2" style="background-color: rgba(0, 0, 0, 0.05)">
                                            Internationa1 - Lottery
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <span>
                                                            <h5> <?=date('l M d,Y') ?> </h5>
                                                        </span>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span>
                                                            <h5>Time :05.00 AM</h5>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </h6>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6 text-center border-right">
                                                    <span class="fs-5 fw-bold">A: Jackpot</span>
                                                    <div class="row">
                                                        <div class="center fs-5 fw-bold" id="a1_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="a2_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="a3_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="a4_5">-</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-center">
                                                    <span class="fs-5 fw-bold">B: Jackpot</span>
                                                    <div class="row">
                                                        <div class="center fs-5 fw-bold" id="b1_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="b2_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="b3_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="b4_5">-</div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <hr />
                                                <div class="col-sm-6 text-center border-right">
                                                    <span class="fs-5 fw-bold">C: Jackpot</span>
                                                    <div class="row">
                                                        <div class="center fs-5 fw-bold" id="c1_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="c2_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="c3_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="c4_5">-</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-center">
                                                    <span class="fs-5 fw-bold">D: Jackpot</span>
                                                    <div class="row">
                                                        <div class="center fs-5 fw-bold" id="d1_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="d2_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="d3_5">-</div>
                                                        <div class="center fs-5 fw-bold" id="d4_5">-</div>
                                                    </div>
                                                </div>
                                            </div> <!-- Row -->


                                            <hr>
                                            <div class="footer">
                                                <div class="c-result-card__next-draw">
                                                    <div class="c-result-card__next-draw-details">
                                                        <span class="c-result-card__sub-title c-result-card__prize-label">2 Digits Lucky
                                                        Draw / 1 X 50 </span>
                                                        <span class="c-result-card__sub-title c-result-card__prize-label"> Est. Jackpot
                                                            <b>$ 291 Million</b> </span>
                                                        </div>
                                                        <dl class="c-result-card__prize-details">
                                                            <dt class="c-result-card__prize-label"><b>3 Digits Lucky Draw / 1 X 400 </b></dt>
                                                        </dl>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- row --}}
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title p-3 mb-2" style="background-color: rgba(0, 0, 0, 0.05)">
                                                Internationa1 - Lottery
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <span>
                                                                <h5> <?=date('l M d,Y') ?> </h5>
                                                            </span>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span>
                                                                <h5>Time :07.00 PM</h5>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </h6>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-6 text-center border-right">
                                                        <span class="fs-5 fw-bold">A: Jackpot</span>
                                                        <div class="row">
                                                            <div class="center fs-5 fw-bold" id="a1_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="a2_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="a3_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="a4_7">-</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        <span class="fs-5 fw-bold">B: Jackpot</span>
                                                        <div class="row">
                                                            <div class="center fs-5 fw-bold" id="b1_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="b2_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="b3_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="b4_7">-</div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <hr />
                                                    <div class="col-sm-6 text-center border-right">
                                                        <span class="fs-5 fw-bold">C: Jackpot</span>
                                                        <div class="row">
                                                            <div class="center fs-5 fw-bold" id="c1_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="c2_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="c3_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="c4_7">-</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        <span class="fs-5 fw-bold">D: Jackpot</span>
                                                        <div class="row">
                                                            <div class="center fs-5 fw-bold" id="d1_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="d2_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="d3_7">-</div>
                                                            <div class="center fs-5 fw-bold" id="d4_7">-</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- Row -->


                                                <hr>
                                                <div class="footer">
                                                    <div class="c-result-card__next-draw">
                                                        <div class="c-result-card__next-draw-details">
                                                            <span class="c-result-card__sub-title c-result-card__prize-label">2 Digits Lucky
                                                            Draw / 1 X 50 </span>
                                                            <span class="c-result-card__sub-title c-result-card__prize-label"> Est. Jackpot
                                                                <b>$ 291 Million</b> </span>
                                                            </div>
                                                            <dl class="c-result-card__prize-details">
                                                                <dt class="c-result-card__prize-label"><b>3 Digits Lucky Draw / 1 X 400 </b></dt>
                                                            </dl>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- row --}}






                                </div> <!-- Big row -->
                            </div>


                            {{--  footer  --}}
                          
                            <div class="container">
    <ul class="c-footer-navigation__state-links o-layout u-list-plain">
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="alabama/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Alabama">
          <span>AL</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="arizona/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Arizona">
          <span>AZ</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="arkansas/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Arkansas">
          <span>AR</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="california/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="California">
          <span>CA</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="colorado/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Colorado">
          <span>CO</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="connecticut/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Connecticut">
          <span>CT</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="delaware/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Delaware">
          <span>DE</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="district-of-columbia/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="District of Columbia">
          <span>DC</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="florida/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Florida">
          <span>FL</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="georgia/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Georgia">
          <span>GA</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="idaho/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Idaho">
          <span>ID</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="illinois/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Illinois">
          <span>IL</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="indiana/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Indiana">
          <span>IN</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="iowa/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Iowa">
          <span>IA</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="kansas/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Kansas">
          <span>KS</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="kentucky/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Kentucky">
          <span>KY</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="louisiana/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Louisiana">
          <span>LA</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="maine/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Maine">
          <span>ME</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="maryland/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Maryland">
          <span>MD</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="massachusetts/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Massachusetts">
          <span>MA</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="michigan/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Michigan">
          <span>MI</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="minnesota/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Minnesota">
          <span>MN</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="mississippi/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Mississippi">
          <span>MS</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="missouri/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Missouri">
          <span>MO</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="montana/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Montana">
          <span>MT</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="nebraska/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Nebraska">
          <span>NE</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="new-hampshire/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="New Hampshire">
          <span>NH</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="new-jersey/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="New Jersey">
          <span>NJ</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="new-mexico/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="New Mexico">
          <span>NM</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="new-york/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="New York">
          <span>NY</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="north-carolina/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="North Carolina">
          <span>NC</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="north-dakota/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="North Dakota">
          <span>ND</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="ohio/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Ohio">
          <span>OH</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="oklahoma/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Oklahoma">
          <span>OK</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="oregon/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Oregon">
          <span>OR</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="pennsylvania/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Pennsylvania">
          <span>PA</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="puerto-rico/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Puerto Rico">
          <span>PR</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="rhode-island/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Rhode Island">
          <span>RI</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="south-carolina/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="South Carolina">
          <span>SC</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="south-dakota/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="South Dakota">
          <span>SD</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="tennessee/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Tennessee">
          <span>TN</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="texas/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Texas">
          <span>TX</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="vermont/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Vermont">
          <span>VT</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="virginia/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Virginia">
          <span>VA</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="washington/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Washington">
          <span>WA</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="west-virginia/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="West Virginia">
          <span>WV</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="wisconsin/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Wisconsin">
          <span>WI</span>
        </a>
      </li>
      <li class="o-layout__col o-layout__col--6 o-layout__col--3@md o-layout__col--2@lg">
        <a href="wyoming/index.html" class="c-state-link c-state-link--abbr" data-state-link-content="Wyoming">
          <span>WY</span>
        </a>
      </li>
    </ul>
                            {{--  footer  --}}


                            <style type="text/css">
                                @font-face {
    font-display: swap;
    font-family: DM Sans;
    font-style: normal;
    font-weight: 400;
    src: url(build/fonts/DMSans-Regular.eot);
    src: local("DM Sans Regular"),local("DMSans-Regular"),url(build/fonts/DMSans-Regulard41d.eot?#iefix) format("embedded-opentype"),url(build/fonts/DMSans-Regular.woff2) format("woff2"),url(build/fonts/DMSans-Regular.woff) format("woff"),url(build/fonts/DMSans-Regular.ttf) format("truetype"),url(build/fonts/DMSans-Regular.svg#DMSans) format("svg");
}

@font-face {
    font-display:swap;font-family:DM Sans;font-style:Italic;font-weight:400;src:url(build/fonts/DMSans-Italic.eot);src:local("DM Sans Italic"),local("DMSans-Italic"),url(build/fonts/DMSans-Italicd41d.eot?#iefix) format("embedded-opentype"),url(build/fonts/DMSans-Italic.woff2) format("woff2"),url(build/fonts/DMSans-Italic.woff) format("woff"),url(build/fonts/DMSans-Italic.ttf) format("truetype"),url(build/fonts/DMSans-Italic.svg#DMSans) format("svg");
}

@font-face {
    font-display:swap;font-family:DM Sans;font-style:normal;font-weight:500;src:url(build/fonts/DMSans-Medium.eot);src:local("DM Sans Medium"),local("DMSans-Medium"),url(build/fonts/DMSans-Mediumd41d.eot?#iefix) format("embedded-opentype"),url(build/fonts/DMSans-Medium.woff2) format("woff2"),url(build/fonts/DMSans-Medium.woff) format("woff"),url(build/fonts/DMSans-Medium.ttf) format("truetype"),url(build/fonts/DMSans-Medium.svg#DMSans) format("svg");
}

@font-face {
    font-display:swap;font-family:DM Sans;font-style:italic;font-weight:500;src:url(build/fonts/DMSans-MediumItalic.eot);src:local("DM Sans Medium Italic"),local("DMSans-MediumItalic"),url(build/fonts/DMSans-MediumItalicd41d.eot?#iefix) format("embedded-opentype"),url(build/fonts/DMSans-MediumItalic.woff2) format("woff2"),url(build/fonts/DMSans-MediumItalic.woff) format("woff"),url(build/fonts/DMSans-MediumItalic.ttf) format("truetype"),url(build/fonts/DMSans-MediumItalic.svg#DMSans) format("svg");
}

@font-face {
    font-display:swap;font-family:DM Sans;font-style:normal;font-weight:700;src:url(build/fonts/DMSans-Bold.eot);src:local("DM Sans Bold"),local("DMSans-Bold"),url(build/fonts/DMSans-Boldd41d.eot?#iefix) format("embedded-opentype"),url(build/fonts/DMSans-Bold.woff2) format("woff2"),url(build/fonts/DMSans-Bold.woff) format("woff"),url(build/fonts/DMSans-Bold.ttf) format("truetype"),url(build/fonts/DMSans-Bold.svg#DMSans) format("svg");
}

@font-face {
    font-display:swap;font-family:DM Sans;font-style:italic;font-weight:700;src:url(build/fonts/DMSans-BoldItalic.eot);src:local("DM Sans Bold Italic"),local("DMSans-BoldItalic"),url(build/fonts/DMSans-BoldItalicd41d.eot?#iefix) format("embedded-opentype"),url(build/fonts/DMSans-BoldItalic.woff2) format("woff2"),url(build/fonts/DMSans-BoldItalic.woff) format("woff"),url(build/fonts/DMSans-BoldItalic.ttf) format("truetype"),url(build/fonts/DMSans-BoldItalic.svg#DMSans) format("svg");
}

html {
    box-sizing: border-box;
}

*,:after,:before {
    box-sizing: inherit;
}/*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */html {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    line-height: 1.15;
}

body {
    margin: 0;
}

article,aside,footer,header,nav,section {
    display: block;
}

h1 {
    font-size: 2em;
    margin: .67em 0;
}

figcaption,figure,main {
    display: block;
}

figure {
    margin: 1em 40px;
}

hr {
    box-sizing: initial;
    height: 0;
    overflow: visible;
}

pre {
    font-family: monospace,monospace;
    font-size: 1em;
}

a {
    -webkit-text-decoration-skip: objects;
    background-color: initial;
}

abbr[title] {
    border-bottom: none;
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
}

b,strong {
    font-weight: inherit;
    font-weight: bolder;
}

code,kbd,samp {
    font-family: monospace,monospace;
    font-size: 1em;
}

dfn {
    font-style: italic;
}

mark {
    background-color: #ff0;
    color: #000;
}

small {
    font-size: 80%;
}

sub,sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: initial;
}

sub {
    bottom: -.25em;
}

sup {
    top: -.5em;
}

audio,video {
    display: inline-block;
}

audio:not([controls]) {
    display: none;
    height: 0;
}

img {
    border-style: none;
}

svg:not(:root) {
    overflow: hidden;
}

button,input,optgroup,select,textarea {
    font-family: sans-serif;
    font-size: 100%;
    line-height: 1.15;
    margin: 0;
}

button,input {
    overflow: visible;
}

button,select {
    text-transform: none;
}

[type=reset],[type=submit],button,html [type=button] {
    -webkit-appearance: button;
}

[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner {
    border-style: none;
    padding: 0;
}

[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring {
    outline: 1px dotted ButtonText;
}

fieldset {
    padding: .35em .75em .625em;
}

legend {
    box-sizing: border-box;
    color: inherit;
    display: table;
    max-width: 100%;
    padding: 0;
    white-space: normal;
}

progress {
    display: inline-block;
    vertical-align: initial;
}

textarea {
    overflow: auto;
}

[type=checkbox],[type=radio] {
    box-sizing: border-box;
    padding: 0;
}

[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button {
    height: auto;
}

[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px;
}

[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit;
}

details,menu {
    display: block;
}

summary {
    display: list-item;
}

canvas {
    display: inline-block;
}

[hidden],template {
    display: none;
}

button,input,optgroup,select,textarea {
    color: inherit;
}

blockquote,body,dd,dl,fieldset,figure,h1,h2,h3,h4,h5,h6,hr,legend,ol,p,pre,ul {
    margin: 0;
    padding: 0;
}

li>ol,li>ul {
    margin-bottom: 0;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

fieldset {
    border: 0;
    min-width: 0;
}

address,blockquote,dl,fieldset,figure,h1,h2,h3,h4,h5,h6,hr,ol,p,pre,table,ul {
    margin-bottom: 16px;
}

dd,ol,ul {
    margin-left: 16px;
}

html {
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    font-size: 1.125em;
    line-height: 1.5555556;
    min-height: 100%;
    scroll-behavior: smooth;
}

@media (prefers-reduced-motion:reduce) {
    html html {
        scroll-behavior: auto;
    }
}

body {
    background-color: #f4f4f7;
    color: #0a0827;
    font-family: DM Sans,sans-serif,serif;
    font-weight: 400;
}

h1 {
    font-size: 36px;
    font-size: 2rem;
    line-height: 1.2222222;
}

h2 {
    font-size: 21px;
    font-size: 1.1666667rem;
    line-height: 1.3333333;
}

@media (min-width:48em) {
    h2 {
        font-size: 24px;
        font-size: 1.3333333rem;
        line-height: 1.3333333;
    }
}

h3 {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

@media (min-width:48em) {
    h3 {
        font-size: 21px;
        font-size: 1.1666667rem;
        line-height: 1.2380952;
    }
}

h4 {
    line-height: 1.375;
}

h4,h5 {
    font-size: 16px;
    font-size: .8888889rem;
}

h5 {
    line-height: 1.25;
}

h6 {
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    line-height: 1.125;
}

address {
    font-style: normal;
}

a {
    color: inherit;
}

.o-list-bare {
    list-style: none;
}

.o-list-bare,.o-list-bare__item {
    margin-left: 0;
}

.o-list-inline {
    list-style: none;
    margin-left: 0;
}

.o-list-inline__item {
    display: inline-block;
}

.o-ratio {
    display: block;
    position: relative;
}

.o-ratio:before {
    content: "";
    display: block;
    padding-bottom: 100%;
    width: 100%;
}

.o-ratio>embed,.o-ratio>iframe,.o-ratio>object,.o-ratio__content {
    bottom: 0;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.o-ratio--2\:1:before {
    padding-bottom: 50%;
}

.o-ratio--4\:3:before {
    padding-bottom: 75%;
}

.o-ratio--16\:9:before {
    padding-bottom: 56.25%;
}

.o-ratio--img-contain>.o-ratio__content:before {
    height: auto;
    margin: auto;
    max-height: 100%;
    max-width: 100%;
    width: auto;
}

.o-pack {
    display: table;
    margin-left: 0;
    table-layout: fixed;
    width: 100%;
}

.o-pack__item {
    display: table-cell;
    vertical-align: top;
}

.o-pack--middle>.o-pack__item {
    vertical-align: middle;
}

.o-pack--bottom>.o-pack__item {
    vertical-align: bottom;
}

.o-pack--auto {
    table-layout: auto;
}

.o-pack--tiny {
    border-spacing: 4px;
}

.o-pack--small {
    border-spacing: 8px;
}

.o-pack--default {
    border-spacing: 16px;
}

.o-pack--large {
    border-spacing: 24px;
}

.o-pack--huge {
    border-spacing: 32px;
}

.o-pack--reverse {
    direction: rtl;
}

.o-pack--reverse>.o-pack__item {
    direction: ltr;
}

.o-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 1218px;
    padding-left: 16px;
    padding-right: 16px;
}

.o-container--medium {
    max-width: 1018px;
}

.o-container--narrow {
    max-width: 820px;
}

.o-container--slim {
    max-width: 621px;
}

.o-container--content {
    padding-bottom: 56px;
    padding-top: 24px;
}

.o-container--sm {
    padding-left: 8px;
    padding-right: 8px;
}

.o-container--vertically-centered {
    -ms-flex-pack: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    justify-content: center;
    min-height: 100%;
}

@media (min-width:48em) {
    .o-container {
        padding-left: 24px;
        padding-right: 24px;
    }

    .o-container--content {
        padding-bottom: 80px;
        padding-top: 40px;
    }
}

.o-adaptive-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 1218px;
}

.o-adaptive-container--medium {
    max-width: 1018px;
}

.o-adaptive-container--narrow {
    max-width: 820px;
}

.o-adaptive-container--slim {
    max-width: 621px;
}

.o-adaptive-container--content {
    padding-bottom: 56px;
    padding-top: 24px;
}

.o-adaptive-container__pad-item {
    padding-left: 16px;
    padding-right: 16px;
}

.o-adaptive-container__pad-item--sm {
    padding-left: 8px;
    padding-right: 8px;
}

@media (min-width:48em) {
    .o-adaptive-container {
        padding-left: 24px;
        padding-right: 24px;
    }

    .o-adaptive-container__pad-item {
        padding-left: 0;
        padding-right: 0;
    }

    .o-adaptive-container--content {
        padding: 40px 0 80px;
    }
}

.o-layout {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    -ms-flex-direction: row;
    flex-direction: row;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-left: -16px;
}

@media (min-width:73.125em) {
    .o-layout {
        margin-left: -24px;
    }
}

.o-layout--list-bare {
    list-style-type: none;
}

.o-layout--flush {
    margin-left: 0;
}

.o-layout--flush .o-layout__col {
    padding-left: 0;
}

.o-layout--stretch .o-layout__col {
    display: -ms-flexbox;
    display: flex;
}

.o-layout--ui-list .o-layout__col {
    margin-bottom: 16px;
}

.o-layout--tile .o-layout__col {
    margin-bottom: 24px;
}

.o-layout--adaptive {
    margin-right: -16px;
}

.o-layout--adaptive .o-layout__col {
    padding-left: 0;
}

.o-layout--reverse {
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
}

.o-layout--start {
    -ms-flex-pack: start;
    justify-content: flex-start;
    text-align: left;
}

.o-layout--center {
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
}

.o-layout--end {
    -ms-flex-pack: end;
    justify-content: flex-end;
    text-align: right;
}

.o-layout--top {
    -ms-flex-align: start;
    align-items: flex-start;
}

.o-layout--middle {
    -ms-flex-align: center;
    align-items: center;
}

.o-layout--bottom {
    -ms-flex-align: end;
    align-items: flex-end;
}

.o-layout--around {
    -ms-flex-pack: distribute;
    justify-content: space-around;
}

.o-layout--between {
    -ms-flex-pack: justify;
    justify-content: space-between;
}

@media (min-width:22.5em) {
    .o-layout--reverse\@xs {
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse;
    }

    .o-layout--start\@xs {
        -ms-flex-pack: start;
        justify-content: flex-start;
        text-align: left;
    }

    .o-layout--center\@xs {
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center;
    }

    .o-layout--end\@xs {
        -ms-flex-pack: end;
        justify-content: flex-end;
        text-align: right;
    }

    .o-layout--top\@xs {
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .o-layout--middle\@xs {
        -ms-flex-align: center;
        align-items: center;
    }

    .o-layout--bottom\@xs {
        -ms-flex-align: end;
        align-items: flex-end;
    }

    .o-layout--around\@xs {
        -ms-flex-pack: distribute;
        justify-content: space-around;
    }

    .o-layout--between\@xs {
        -ms-flex-pack: justify;
        justify-content: space-between;
    }
}

@media (min-width:23.4375em) {
    .o-layout--reverse\@sm {
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse;
    }

    .o-layout--start\@sm {
        -ms-flex-pack: start;
        justify-content: flex-start;
        text-align: left;
    }

    .o-layout--center\@sm {
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center;
    }

    .o-layout--end\@sm {
        -ms-flex-pack: end;
        justify-content: flex-end;
        text-align: right;
    }

    .o-layout--top\@sm {
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .o-layout--middle\@sm {
        -ms-flex-align: center;
        align-items: center;
    }

    .o-layout--bottom\@sm {
        -ms-flex-align: end;
        align-items: flex-end;
    }

    .o-layout--around\@sm {
        -ms-flex-pack: distribute;
        justify-content: space-around;
    }

    .o-layout--between\@sm {
        -ms-flex-pack: justify;
        justify-content: space-between;
    }
}

@media (min-width:48em) {
    .o-layout--reverse\@md {
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse;
    }

    .o-layout--start\@md {
        -ms-flex-pack: start;
        justify-content: flex-start;
        text-align: left;
    }

    .o-layout--center\@md {
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center;
    }

    .o-layout--end\@md {
        -ms-flex-pack: end;
        justify-content: flex-end;
        text-align: right;
    }

    .o-layout--top\@md {
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .o-layout--middle\@md {
        -ms-flex-align: center;
        align-items: center;
    }

    .o-layout--bottom\@md {
        -ms-flex-align: end;
        align-items: flex-end;
    }

    .o-layout--around\@md {
        -ms-flex-pack: distribute;
        justify-content: space-around;
    }

    .o-layout--between\@md {
        -ms-flex-pack: justify;
        justify-content: space-between;
    }
}

@media (min-width:73.125em) {
    .o-layout--reverse\@lg {
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse;
    }

    .o-layout--start\@lg {
        -ms-flex-pack: start;
        justify-content: flex-start;
        text-align: left;
    }

    .o-layout--center\@lg {
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center;
    }

    .o-layout--end\@lg {
        -ms-flex-pack: end;
        justify-content: flex-end;
        text-align: right;
    }

    .o-layout--top\@lg {
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .o-layout--middle\@lg {
        -ms-flex-align: center;
        align-items: center;
    }

    .o-layout--bottom\@lg {
        -ms-flex-align: end;
        align-items: flex-end;
    }

    .o-layout--around\@lg {
        -ms-flex-pack: distribute;
        justify-content: space-around;
    }

    .o-layout--between\@lg {
        -ms-flex-pack: justify;
        justify-content: space-between;
    }
}

.o-layout__col {
    -ms-flex: 1 0 auto;
    flex: 1 0 auto;
    padding-left: 16px;
}

.o-layout__col--adaptive {
    padding-left: 32px;
}

.o-layout__col--auto {
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
    max-width: 100%;
}

.o-layout__col--1 {
    -ms-flex-preferred-size: 8.3333333%;
    flex-basis: 8.3333333%;
    max-width: 8.3333333%;
}

.o-layout__col--2 {
    -ms-flex-preferred-size: 16.6666667%;
    flex-basis: 16.6666667%;
    max-width: 16.6666667%;
}

.o-layout__col--3 {
    -ms-flex-preferred-size: 25%;
    flex-basis: 25%;
    max-width: 25%;
}

.o-layout__col--4 {
    -ms-flex-preferred-size: 33.3333333%;
    flex-basis: 33.3333333%;
    max-width: 33.3333333%;
}

.o-layout__col--5 {
    -ms-flex-preferred-size: 41.6666667%;
    flex-basis: 41.6666667%;
    max-width: 41.6666667%;
}

.o-layout__col--6 {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    max-width: 50%;
}

.o-layout__col--7 {
    -ms-flex-preferred-size: 58.3333333%;
    flex-basis: 58.3333333%;
    max-width: 58.3333333%;
}

.o-layout__col--8 {
    -ms-flex-preferred-size: 66.6666667%;
    flex-basis: 66.6666667%;
    max-width: 66.6666667%;
}

.o-layout__col--9 {
    -ms-flex-preferred-size: 75%;
    flex-basis: 75%;
    max-width: 75%;
}

.o-layout__col--10 {
    -ms-flex-preferred-size: 83.3333333%;
    flex-basis: 83.3333333%;
    max-width: 83.3333333%;
}

.o-layout__col--11 {
    -ms-flex-preferred-size: 91.6666667%;
    flex-basis: 91.6666667%;
    max-width: 91.6666667%;
}

.o-layout__col--12 {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    max-width: 100%;
}

.o-layout__col--offset-1 {
    margin-left: 8.3333333%;
}

.o-layout__col--offset-2 {
    margin-left: 16.6666667%;
}

.o-layout__col--offset-3 {
    margin-left: 25%;
}

.o-layout__col--offset-4 {
    margin-left: 33.3333333%;
}

.o-layout__col--offset-5 {
    margin-left: 41.6666667%;
}

.o-layout__col--offset-6 {
    margin-left: 50%;
}

.o-layout__col--offset-7 {
    margin-left: 58.3333333%;
}

.o-layout__col--offset-8 {
    margin-left: 66.6666667%;
}

.o-layout__col--offset-9 {
    margin-left: 75%;
}

.o-layout__col--offset-10 {
    margin-left: 83.3333333%;
}

.o-layout__col--offset-11 {
    margin-left: 91.6666667%;
}

.o-layout__col--offset-12 {
    margin-left: 100%;
}

.o-layout__col--first {
    -ms-flex-order: -1;
    order: -1;
}

.o-layout__col--last {
    -ms-flex-order: 1;
    order: 1;
}

.o-layout__col--right {
    text-align: right;
}

@media (min-width:73.125em) {
    .o-layout__col,.o-layout__col--adaptive {
        padding-left: 24px;
    }
}

@media (min-width:22.5em) {
    .o-layout__col--auto\@xs {
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
        max-width: 100%;
    }

    .o-layout__col--1\@xs {
        -ms-flex-preferred-size: 8.3333333%;
        flex-basis: 8.3333333%;
        max-width: 8.3333333%;
    }

    .o-layout__col--2\@xs {
        -ms-flex-preferred-size: 16.6666667%;
        flex-basis: 16.6666667%;
        max-width: 16.6666667%;
    }

    .o-layout__col--3\@xs {
        -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
        max-width: 25%;
    }

    .o-layout__col--4\@xs {
        -ms-flex-preferred-size: 33.3333333%;
        flex-basis: 33.3333333%;
        max-width: 33.3333333%;
    }

    .o-layout__col--5\@xs {
        -ms-flex-preferred-size: 41.6666667%;
        flex-basis: 41.6666667%;
        max-width: 41.6666667%;
    }

    .o-layout__col--6\@xs {
        -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
        max-width: 50%;
    }

    .o-layout__col--7\@xs {
        -ms-flex-preferred-size: 58.3333333%;
        flex-basis: 58.3333333%;
        max-width: 58.3333333%;
    }

    .o-layout__col--8\@xs {
        -ms-flex-preferred-size: 66.6666667%;
        flex-basis: 66.6666667%;
        max-width: 66.6666667%;
    }

    .o-layout__col--9\@xs {
        -ms-flex-preferred-size: 75%;
        flex-basis: 75%;
        max-width: 75%;
    }

    .o-layout__col--10\@xs {
        -ms-flex-preferred-size: 83.3333333%;
        flex-basis: 83.3333333%;
        max-width: 83.3333333%;
    }

    .o-layout__col--11\@xs {
        -ms-flex-preferred-size: 91.6666667%;
        flex-basis: 91.6666667%;
        max-width: 91.6666667%;
    }

    .o-layout__col--12\@xs {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        max-width: 100%;
    }

    .o-layout__col--offset-1\@xs {
        margin-left: 8.3333333%;
    }

    .o-layout__col--offset-2\@xs {
        margin-left: 16.6666667%;
    }

    .o-layout__col--offset-3\@xs {
        margin-left: 25%;
    }

    .o-layout__col--offset-4\@xs {
        margin-left: 33.3333333%;
    }

    .o-layout__col--offset-5\@xs {
        margin-left: 41.6666667%;
    }

    .o-layout__col--offset-6\@xs {
        margin-left: 50%;
    }

    .o-layout__col--offset-7\@xs {
        margin-left: 58.3333333%;
    }

    .o-layout__col--offset-8\@xs {
        margin-left: 66.6666667%;
    }

    .o-layout__col--offset-9\@xs {
        margin-left: 75%;
    }

    .o-layout__col--offset-10\@xs {
        margin-left: 83.3333333%;
    }

    .o-layout__col--offset-11\@xs {
        margin-left: 91.6666667%;
    }

    .o-layout__col--offset-12\@xs {
        margin-left: 100%;
    }

    .o-layout__col--first\@xs {
        -ms-flex-order: -1;
        order: -1;
    }

    .o-layout__col--last\@xs {
        -ms-flex-order: 1;
        order: 1;
    }

    .o-layout__col--right\@xs {
        text-align: right;
    }
}

@media (min-width:23.4375em) {
    .o-layout__col--auto\@sm {
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
        max-width: 100%;
    }

    .o-layout__col--1\@sm {
        -ms-flex-preferred-size: 8.3333333%;
        flex-basis: 8.3333333%;
        max-width: 8.3333333%;
    }

    .o-layout__col--2\@sm {
        -ms-flex-preferred-size: 16.6666667%;
        flex-basis: 16.6666667%;
        max-width: 16.6666667%;
    }

    .o-layout__col--3\@sm {
        -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
        max-width: 25%;
    }

    .o-layout__col--4\@sm {
        -ms-flex-preferred-size: 33.3333333%;
        flex-basis: 33.3333333%;
        max-width: 33.3333333%;
    }

    .o-layout__col--5\@sm {
        -ms-flex-preferred-size: 41.6666667%;
        flex-basis: 41.6666667%;
        max-width: 41.6666667%;
    }

    .o-layout__col--6\@sm {
        -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
        max-width: 50%;
    }

    .o-layout__col--7\@sm {
        -ms-flex-preferred-size: 58.3333333%;
        flex-basis: 58.3333333%;
        max-width: 58.3333333%;
    }

    .o-layout__col--8\@sm {
        -ms-flex-preferred-size: 66.6666667%;
        flex-basis: 66.6666667%;
        max-width: 66.6666667%;
    }

    .o-layout__col--9\@sm {
        -ms-flex-preferred-size: 75%;
        flex-basis: 75%;
        max-width: 75%;
    }

    .o-layout__col--10\@sm {
        -ms-flex-preferred-size: 83.3333333%;
        flex-basis: 83.3333333%;
        max-width: 83.3333333%;
    }

    .o-layout__col--11\@sm {
        -ms-flex-preferred-size: 91.6666667%;
        flex-basis: 91.6666667%;
        max-width: 91.6666667%;
    }

    .o-layout__col--12\@sm {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        max-width: 100%;
    }

    .o-layout__col--offset-1\@sm {
        margin-left: 8.3333333%;
    }

    .o-layout__col--offset-2\@sm {
        margin-left: 16.6666667%;
    }

    .o-layout__col--offset-3\@sm {
        margin-left: 25%;
    }

    .o-layout__col--offset-4\@sm {
        margin-left: 33.3333333%;
    }

    .o-layout__col--offset-5\@sm {
        margin-left: 41.6666667%;
    }

    .o-layout__col--offset-6\@sm {
        margin-left: 50%;
    }

    .o-layout__col--offset-7\@sm {
        margin-left: 58.3333333%;
    }

    .o-layout__col--offset-8\@sm {
        margin-left: 66.6666667%;
    }

    .o-layout__col--offset-9\@sm {
        margin-left: 75%;
    }

    .o-layout__col--offset-10\@sm {
        margin-left: 83.3333333%;
    }

    .o-layout__col--offset-11\@sm {
        margin-left: 91.6666667%;
    }

    .o-layout__col--offset-12\@sm {
        margin-left: 100%;
    }

    .o-layout__col--first\@sm {
        -ms-flex-order: -1;
        order: -1;
    }

    .o-layout__col--last\@sm {
        -ms-flex-order: 1;
        order: 1;
    }

    .o-layout__col--right\@sm {
        text-align: right;
    }
}

@media (min-width:48em) {
    .o-layout__col--auto\@md {
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
        max-width: 100%;
    }

    .o-layout__col--1\@md {
        -ms-flex-preferred-size: 8.3333333%;
        flex-basis: 8.3333333%;
        max-width: 8.3333333%;
    }

    .o-layout__col--2\@md {
        -ms-flex-preferred-size: 16.6666667%;
        flex-basis: 16.6666667%;
        max-width: 16.6666667%;
    }

    .o-layout__col--3\@md {
        -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
        max-width: 25%;
    }

    .o-layout__col--4\@md {
        -ms-flex-preferred-size: 33.3333333%;
        flex-basis: 33.3333333%;
        max-width: 33.3333333%;
    }

    .o-layout__col--5\@md {
        -ms-flex-preferred-size: 41.6666667%;
        flex-basis: 41.6666667%;
        max-width: 41.6666667%;
    }

    .o-layout__col--6\@md {
        -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
        max-width: 50%;
    }

    .o-layout__col--7\@md {
        -ms-flex-preferred-size: 58.3333333%;
        flex-basis: 58.3333333%;
        max-width: 58.3333333%;
    }

    .o-layout__col--8\@md {
        -ms-flex-preferred-size: 66.6666667%;
        flex-basis: 66.6666667%;
        max-width: 66.6666667%;
    }

    .o-layout__col--9\@md {
        -ms-flex-preferred-size: 75%;
        flex-basis: 75%;
        max-width: 75%;
    }

    .o-layout__col--10\@md {
        -ms-flex-preferred-size: 83.3333333%;
        flex-basis: 83.3333333%;
        max-width: 83.3333333%;
    }

    .o-layout__col--11\@md {
        -ms-flex-preferred-size: 91.6666667%;
        flex-basis: 91.6666667%;
        max-width: 91.6666667%;
    }

    .o-layout__col--12\@md {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        max-width: 100%;
    }

    .o-layout__col--offset-1\@md {
        margin-left: 8.3333333%;
    }

    .o-layout__col--offset-2\@md {
        margin-left: 16.6666667%;
    }

    .o-layout__col--offset-3\@md {
        margin-left: 25%;
    }

    .o-layout__col--offset-4\@md {
        margin-left: 33.3333333%;
    }

    .o-layout__col--offset-5\@md {
        margin-left: 41.6666667%;
    }

    .o-layout__col--offset-6\@md {
        margin-left: 50%;
    }

    .o-layout__col--offset-7\@md {
        margin-left: 58.3333333%;
    }

    .o-layout__col--offset-8\@md {
        margin-left: 66.6666667%;
    }

    .o-layout__col--offset-9\@md {
        margin-left: 75%;
    }

    .o-layout__col--offset-10\@md {
        margin-left: 83.3333333%;
    }

    .o-layout__col--offset-11\@md {
        margin-left: 91.6666667%;
    }

    .o-layout__col--offset-12\@md {
        margin-left: 100%;
    }

    .o-layout__col--first\@md {
        -ms-flex-order: -1;
        order: -1;
    }

    .o-layout__col--last\@md {
        -ms-flex-order: 1;
        order: 1;
    }

    .o-layout__col--right\@md {
        text-align: right;
    }
}

@media (min-width:73.125em) {
    .o-layout__col--auto\@lg {
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
        max-width: 100%;
    }

    .o-layout__col--1\@lg {
        -ms-flex-preferred-size: 8.3333333%;
        flex-basis: 8.3333333%;
        max-width: 8.3333333%;
    }

    .o-layout__col--2\@lg {
        -ms-flex-preferred-size: 16.6666667%;
        flex-basis: 16.6666667%;
        max-width: 16.6666667%;
    }

    .o-layout__col--3\@lg {
        -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
        max-width: 25%;
    }

    .o-layout__col--4\@lg {
        -ms-flex-preferred-size: 33.3333333%;
        flex-basis: 33.3333333%;
        max-width: 33.3333333%;
    }

    .o-layout__col--5\@lg {
        -ms-flex-preferred-size: 41.6666667%;
        flex-basis: 41.6666667%;
        max-width: 41.6666667%;
    }

    .o-layout__col--6\@lg {
        -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
        max-width: 50%;
    }

    .o-layout__col--7\@lg {
        -ms-flex-preferred-size: 58.3333333%;
        flex-basis: 58.3333333%;
        max-width: 58.3333333%;
    }

    .o-layout__col--8\@lg {
        -ms-flex-preferred-size: 66.6666667%;
        flex-basis: 66.6666667%;
        max-width: 66.6666667%;
    }

    .o-layout__col--9\@lg {
        -ms-flex-preferred-size: 75%;
        flex-basis: 75%;
        max-width: 75%;
    }

    .o-layout__col--10\@lg {
        -ms-flex-preferred-size: 83.3333333%;
        flex-basis: 83.3333333%;
        max-width: 83.3333333%;
    }

    .o-layout__col--11\@lg {
        -ms-flex-preferred-size: 91.6666667%;
        flex-basis: 91.6666667%;
        max-width: 91.6666667%;
    }

    .o-layout__col--12\@lg {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        max-width: 100%;
    }

    .o-layout__col--offset-1\@lg {
        margin-left: 8.3333333%;
    }

    .o-layout__col--offset-2\@lg {
        margin-left: 16.6666667%;
    }

    .o-layout__col--offset-3\@lg {
        margin-left: 25%;
    }

    .o-layout__col--offset-4\@lg {
        margin-left: 33.3333333%;
    }

    .o-layout__col--offset-5\@lg {
        margin-left: 41.6666667%;
    }

    .o-layout__col--offset-6\@lg {
        margin-left: 50%;
    }

    .o-layout__col--offset-7\@lg {
        margin-left: 58.3333333%;
    }

    .o-layout__col--offset-8\@lg {
        margin-left: 66.6666667%;
    }

    .o-layout__col--offset-9\@lg {
        margin-left: 75%;
    }

    .o-layout__col--offset-10\@lg {
        margin-left: 83.3333333%;
    }

    .o-layout__col--offset-11\@lg {
        margin-left: 91.6666667%;
    }

    .o-layout__col--offset-12\@lg {
        margin-left: 100%;
    }

    .o-layout__col--first\@lg {
        -ms-flex-order: -1;
        order: -1;
    }

    .o-layout__col--last\@lg {
        -ms-flex-order: 1;
        order: 1;
    }

    .o-layout__col--right\@lg {
        text-align: right;
    }
}

.o-lusa-col {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    -ms-flex-direction: row;
    flex-direction: row;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-left: -16px;
    padding-bottom: 40px;
    padding-top: 32px;
}

.o-lusa-col__content,.o-lusa-col__side {
    -ms-flex: 1 0 auto;
    flex: 1 0 auto;
    padding-left: 16px;
    width: 100%;
}

.o-lusa-col__side {
    padding-top: 24px;
}

@media (min-width:48em) {
    .o-lusa-col {
        padding-bottom: 56px;
    }
}

@media (min-width:73.125em) {
    .o-lusa-col {
        margin-left: 0;
        padding-bottom: 40px;
        padding-top: 0;
    }

    .o-lusa-col__content,.o-lusa-col__side {
        padding-top: 32px;
    }

    .o-lusa-col__content {
        -ms-flex-preferred-size: 68%;
        flex-basis: 68%;
        max-width: 68%;
        padding-left: 0;
        padding-right: 24px;
        position: relative;
    }

    .o-lusa-col__content:after {
        box-shadow: inset -1px 0 0 0 #dfdee8;
        content: "";
        display: block;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: -1;
    }

    .o-lusa-col__side {
        -ms-flex: 1;
        flex: 1;
        padding-left: 24px;
    }
}

.o-lusa-game-col {
    padding-bottom: 40px;
    padding-top: 24px;
}

.o-lusa-game-col__upcoming {
    margin-bottom: 36px;
}

.o-lusa-game-col__game-aside {
    margin-bottom: 48px;
}

.o-lusa-game-col__result-list {
    margin-bottom: 32px;
}

.o-lusa-game-col__game-aside {
    border-top: 1px solid #dfdee8;
    left: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
    padding: 32px 8px;
    position: relative;
    right: 50%;
    width: 100vw;
}

.o-lusa-game-col__action-link {
    padding: 8px 0 0;
}

.o-lusa-game-col--tight .o-lusa-game-col__game-aside {
    margin-bottom: 0;
    padding-bottom: 0;
}

@media (min-width:48em) {
    .o-lusa-game-col {
        padding-top: 32px;
    }

    .o-lusa-game-col__upcoming {
        margin-bottom: 36px;
    }

    .o-lusa-game-col__game-aside {
        margin-bottom: 56px;
    }

    .o-lusa-game-col__action-link {
        padding-left: 0;
        padding-right: 0;
    }
}


.c-btn {
    -webkit-touch-callout: none;
    background-size: 24px;
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 4px 0 #2622620d;
    cursor: pointer;
    display: inline-block;
    font: inherit;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    letter-spacing: 1.25px;
    line-height: 1.4285714;
    padding: 10px 12px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    vertical-align: middle;
}

.c-btn:hover {
    box-shadow: 0 2px 4px 0 #0a082740;
}

.c-btn:focus {
    outline: none;
}

.c-btn:disabled {
    box-shadow: none;
    cursor: auto;
    opacity: .65;
}

.c-btn--radio {
    box-shadow: none;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.5;
    padding-bottom: 8px;
    padding-top: 8px;
    text-transform: none;
}

.c-btn--radio input[type=radio] {
    height: 0;
    visibility: hidden;
    width: 0;
}

.c-btn--radio:hover {
    box-shadow: inset 0 0 0 2px #0a0827;
}

.c-btn--enabled {
    background-color: #fff;
    box-shadow: inset 0 0 0 2px #dfdee8;
    color: #0a0827;
    letter-spacing: .5px;
}

.c-btn--lg {
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 20px;
    padding: 14px 12px;
}

.c-btn--xl {
    padding: 22px 12px;
}

.c-btn--block {
    display: block;
    width: 100%;
}

.c-btn--themed {
    color: #fff;
}

.c-btn--ghost {
    box-shadow: inset 0 0 0 1px #ffffff80;
    color: #fff;
}

.c-btn--primary {
    background-color: #262262;
    color: #fff;
    letter-spacing: .5px;
}

.c-btn--secondary {
    background-color: #008874;
    color: #fff;
    letter-spacing: .5px;
}

.c-btn--neutral {
    background-color: #fff;
}

.c-btn--cta,.c-btn--neutral {
    color: #0a0827;
    letter-spacing: .5px;
}

.c-btn--cta {
    background-color: #ffd814;
    box-shadow: inset 0 0 0 1px #0a0827;
}

.c-btn--cta:hover {
    box-shadow: inset 0 0 0 1px #0a0827,0 2px 4px 0 #0a082740;
}

.c-btn--muted {
    background-color: #3b3952;
    color: #fff;
    letter-spacing: .5px;
}

.c-btn--muted:hover {
    box-shadow: inset 0 0 0 2px #fff;
}

.c-btn--clear {
    background-color: initial;
    color: #0a0827;
}

.c-btn--clear,.c-btn--clear:hover {
    box-shadow: none;
}

.c-btn--content-link {
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/arrow-right.adad23de.svg);
    background-position: top 50% right 12px;
    background-repeat: no-repeat;
    background-size: 16px;
    box-shadow: 0 1px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;
    color: #0a0827;
    padding-left: 16px;
    padding-right: 36px;
    text-align: left;
}

.c-btn--content-link-active,.c-btn--content-link:focus,.c-btn--content-link:hover {
    box-shadow: 0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827;
}

.c-btn--arrow-link {
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/arrow-right.adad23de.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 2px #dfdee8;
    color: #0a0827;
    padding: 8px;
    text-align: left;
}

.c-btn--arrow-link:focus,.c-btn--arrow-link:hover {
    box-shadow: 0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827;
}

.c-btn--right-arrow {
    background-image: url(build/images/icons/16px/dark/arrow-right.adad23de.svg);
    background-position: center right 8px;
    background-repeat: no-repeat;
    background-size: 16px;
    padding: 10px 32px 10px 10px;
    text-align: left;
}

.c-btn--left-arrow {
    background-position: center left 8px;
    padding: 10px 10px 10px 32px;
    text-align: right;
}

.c-btn--back,.c-btn--left-arrow {
    background-image: url(build/images/icons/16px/dark/arrow-left.e820daf7.svg);
    background-repeat: no-repeat;
    background-size: 16px;
}

.c-btn--back {
    background-color: initial;
    background-position: top 50% left 12px;
    border: none;
    color: #0a0827;
    padding: 8px 8px 8px 36px;
    text-align: left;
}

.c-btn--back,.c-btn--back:focus,.c-btn--back:hover {
    box-shadow: none;
}

.c-btn--export {
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/export.728edb5e.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 2px #26226226;
    color: #0a0827;
    padding: 8px;
    text-align: left;
}

.c-btn--export:focus,.c-btn--export:hover {
    box-shadow: 0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827;
}

.c-btn--close {
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/close.dd4cce19.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    color: #0a0827;
    padding: 12px;
    text-align: center;
}

.c-btn--close,.c-btn--close:focus,.c-btn--close:hover {
    box-shadow: none;
}

.c-btn--download {
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/download.83e691cf.svg);
    background-position: top 50% right 12px;
    background-repeat: no-repeat;
    background-size: 16px;
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 2px #26226226;
    color: #0a0827;
    padding-left: 16px;
    padding-right: 36px;
    text-align: left;
}

.c-btn--download:focus,.c-btn--download:hover {
    box-shadow: 0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827;
}

.c-btn--toggle {
    background-image: url(build/images/icons/16px/dark/arrow-down.5c114ae6.svg);
    background-position: top 50% right 12px;
    background-repeat: no-repeat;
    background-size: 16px;
    color: #0a0827;
    padding-left: 16px;
    padding-right: 36px;
    text-align: left;
}

.c-btn--toggle-active,.c-btn--toggle:focus,.c-btn--toggle:hover {
    box-shadow: 0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827;
}

.c-btn--graph {
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/graph.dfb064ea.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 2px #26226226;
    color: #0a0827;
    height: 32px;
    padding: 8px;
    text-align: left;
    width: 32px;
}

.c-btn--graph span {
    display: none;
}

.c-btn--graph:focus,.c-btn--graph:hover {
    box-shadow: 0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827;
}

.c-input {
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;
    display: inline-block;
    font-family: DM Sans,sans-serif;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.25;
    padding: 11px 12px 9px;
}

.c-input--full {
    display: block;
    width: 100%;
}

.c-input--applied,.c-input--is-active {
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 2px #0a0827;
}

.c-input--is-active {
    font-weight: 800;
}

.c-input--is-invalid {
    background-color: #f9e9ea;
    box-shadow: 0 2px 4px 0 #be1e2d0d,inset 0 0 0 1px #be1e2d;
    color: #be1e2d;
}

.c-input:focus {
    outline: none;
}

.c-input::-webkit-input-placeholder {
    color: #0a082766;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.25;
}

.c-input::placeholder {
    color: #0a082766;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.25;
}

.c-input:-ms-input-placeholder {
    color: #0a082766;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.25;
}

.c-input::-ms-input-placeholder {
    color: #0a082766;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.25;
}

.c-input--lg {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
    padding: 16px;
}

.c-input--lg::-webkit-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg::placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg:-ms-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg::-ms-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--search {
    background-position: center right 16px;
}

.c-input--search,.c-input--search-left {
    background-image: url(build/images/icons/16px/dark/search.bcae700b.svg);
    background-repeat: no-repeat;
    text-align: left;
}

.c-input--search-left {
    background-position: center left 12px;
    padding-left: 36px;
}

.c-input--select {
    background-image: url(build/images/icons/16px/dark/arrow-down.5c114ae6.svg);
}

.c-input--filter,.c-input--select {
    background-position: center right 12px;
    background-repeat: no-repeat;
    padding-right: 36px;
    text-align: left;
}

.c-input--filter {
    background-image: url(build/images/icons/16px/dark/filter.936c05e3.svg);
}

.c-input--date {
    background-image: url(build/images/icons/16px/dark/calendar.2643f062.svg);
    background-position: bottom 12px left 12px;
    background-repeat: no-repeat;
    padding-left: 36px;
    text-align: right;
}

.c-state-link {
    box-shadow: inset 0 -1px 0 0 #0a08271a;
    color: #0a0827;
    display: inline-block;
    list-style-type: none;
    margin-bottom: 8px;
    overflow: hidden;
    padding-bottom: 9px;
    padding-top: 10px;
    text-decoration: none;
    text-overflow: ellipsis;
    vertical-align: middle;
    white-space: nowrap;
    width: 100%;
}

.c-state-link--active,.c-state-link:hover {
    box-shadow: inset 0 -2px 0 0 #be1e2d;
    color: #be1e2d;
}

.c-state-link--abbr {
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 1.4285714;
}

.c-state-link--abbr span {
    display: inline-block;
    font-weight: 700;
    min-width: 28px;
}

.c-state-link--abbr:after {
    content: attr(data-state-link-content);
    font-weight: 400;
    position: relative;
    right: 0;
    text-indent: 40px;
    text-transform: none;
}

.c-state-link--abbr:after,.c-state-link--name {
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 1.5;
}

.c-state-link--name:before {
    content: attr(data-state-link-content);
    display: inline-block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    left: 0;
    line-height: 1.4285714;
    min-width: 28px;
    position: relative;
    text-transform: none;
}

@media (max-width:73.115em) {
    .c-state-link--in-nav {
        box-shadow: none;
        color: #fff;
        font-size: 18px;
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.3333333;
        margin-bottom: 0;
        padding-bottom: 8px;
        padding-top: 8px;
        text-decoration: none;
    }

    .c-state-link--in-nav:hover {
        background-color: #626078;
        box-shadow: inset 4px 0 0 0 #fff;
        color: #fff;
    }

    .c-state-link--in-nav:before {
        color: #adacba;
        display: inline-block;
        font-size: 18px;
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.3333333;
        margin-right: 8px;
        min-width: 28px;
    }

    .c-state-link--in-nav.c-state-link--active {
        background-color: #626078;
        box-shadow: inset 4px 0 0 0 #fff;
    }
}

.c-footer-navigation {
    background-color: #fff;
    padding-bottom: 40px;
    padding-top: 40px;
}

.c-footer-navigation--themed {
    border-bottom: 1px solid #dfdee8;
    border-top: 1px solid #dfdee8;
}

.c-footer-navigation__input {
    margin-bottom: 16px;
}

.c-footer-navigation__multistate-block {
    padding-top: 24px;
}

.c-footer-navigation__multi-state-links {
    margin-bottom: 0;
}

.c-footer-navigation__multi-state-link {
    margin-bottom: 8px;
}

.c-footer-navigation__multi-state-link:last-of-type,
            .c-footer-navigation__state-links {
    margin-bottom: 0;
}

@media (min-width:48em) {
    .
                c-footer-navigation {
        padding-bottom: 56px;
        padding-top: 48px;
    }

    .c-footer-navigation__multistate-block {
        padding-top: 40px;
    }

    .c-footer-navigation__multi-state-link {
        margin-bottom: 16px;
    }
}

.c-form-card {
    background-color: #fff;
    border: 1px solid #dfdee8;
    border-radius: 8px;
    padding: 16px;
}

.c-form-card--adaptive {
    border-radius: 0;
}

@media (min-width:48em) {
    .c-form-card--adaptive {
        border-radius: 8px;
    }
}

.c-form-card--muted {
    background-color: #0a08270d;
}

.c-form-card__title {
    font-size: 18px;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.1111111;
    margin-bottom: 0;
}

@media (max-width:47.99em) {
    .c-form-card__title {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-bottom: 8px;
    }
}

.c-form-card__sub-text {
    color: #0a0827cc;
    font-size: 12px;
    font-size: .6666667rem;
    line-height: 1.3333333;
    margin-bottom: 0;
}

.c-form-card__title+.c-form-card__sub-text {
    margin-top: 4px;
}

.c-form-card__input {
    margin-right: 8px;
}

.c-form-card__calculated-values {
    font-size: 24px;
    font-size: 1.3333333rem;
    font-weight: 700;
    line-height: 1.25;
    margin-bottom: 0;
    white-space: nowrap;
}

.c-form-card__calculated-values--sm {
    font-size: 20px;
    font-size: 1.1111111rem;
    font-weight: 500;
    line-height: 1.3;
}

.c-form-card__calculated-values--md {
    font-size: 18px;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.6666667;
}

@media (max-width:47.99em) {
    .c-form-card__calculated-values {
        margin-top: 16px;
    }
}

.c-tool-card {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #fff;
    border: 1px solid #dfdee8;
    border-radius: 8px;
    box-shadow: 0 2px 8px 0 #2622620d;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    justify-content: center;
    opacity: 1;
    overflow: hidden;
    padding: 24px;
    position: relative;
    text-align: center;
    transition: opacity .15s ease-in-out;
}

.c-tool-card>:last-child {
    margin-bottom: 0;
}

.c-tool-card--flex {
    height: 100%;
}

.c-tool-card--coming-soon {
    opacity: .4;
}

.c-tool-card__icon {
    height: 56px;
    margin-bottom: 14px;
    width: 56px;
}

.c-tool-card__link {
    color: #0a0827;
    text-decoration: none;
}

.c-tool-card__link:after {
    bottom: 0;
    content: "";
    left: 0;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
    white-space: nowrap;
    z-index: 1;
}

.c-tool-card__title {
    font-size: 21px;
    font-size: 1.1666667rem;
    line-height: 1.2380952;
    margin-bottom: 2px;
}

.c-tool-card__title:before {
    background-image: url(build/images/icons/16px/color/lock.d10139fe.svg);
    background-repeat: no-repeat;
    background-size: 24px;
    content: "";
    display: inline-block;
    height: 24px;
    opacity: 0;
    position: absolute;
    right: 24px;
    top: 24px;
    transition: opacity .3s ease-in-out;
    width: 24px;
}

.c-tool-card--authenticated-only .c-tool-card__title:before {
    opacity: 1;
}

.c-tool-card__desc {
    color: #626078;
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 1.4285714;
}

.c-game-link-card {
    -ms-flex-align: center;
    align-items: center;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 8px 0 #2622620d;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    padding: 12px 48px 12px 12px;
    position: relative;
}

.c-game-link-card:before {
    background-image: url(build/images/backgrounds/balls-default.179760b0.svg);
    background-position: top 50% right -64px;
    background-repeat: no-repeat;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.c-game-link-card--megamillions:before,.c-game-link-card--powerball:before {
    background-position: top 50% right -90px;
}

.c-game-link-card--powerball {
    background-image: linear-gradient(to top right,#ff9e9ebf,#ffd1d1bf);
}

.c-game-link-card--powerball:before {
    background-image: url(build/images/backgrounds/balls-pb.65805d3b.svg);
}

.c-game-link-card--megamillions {
    background-image: linear-gradient(to top right,#ffd866bf,#feecb2bf);
}

.c-game-link-card--megamillions:before {
    background-image: url(build/images/backgrounds/balls-mm.10926be8.svg);
}

.c-game-link-card__media {
    height: 48px;
    margin-right: 12px;
    width: 48px;
    z-index: 1;
}

.c-game-link-card__link {
    color: #0a0827;
    display: inline-block;
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 700;
    line-height: 1.2380952;
    text-decoration: none;
    z-index: 1;
}

@media (min-width:48em) {
    .c-game-link-card {
        border-radius: 8px;
    }
}

.c-jackpot-card {
    background-color: #fff;
    border: 1px solid #dfdee8;
    border-radius: 8px;
    box-shadow: 0 2px 8px 0 #0a08270d;
    display: block;
    padding: 0 16px;
    position: relative;
}

.c-jackpot-card:last-child {
    margin-bottom: 16px;
}

.c-jackpot-card__header {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    padding: 16px 0 4px;
    width: 100%;
}

@media (min-width:73.125em) {
    .c-jackpot-card__game-details {
        -ms-flex-pack: justify;
        -ms-flex-align: center;
        align-items: center;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
}

.c-jackpot-card__jackpot {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    font-size: 18px;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.3333333;
    padding: 0 0 16px 60px;
}

.c-jackpot-card__jackpot-direction {
    margin-left: 4px;
}

.c-jackpot-card__jackpot--has-extra .c-jackpot-card__jackpot-row {
    padding-bottom: 10px;
}

.c-jackpot-card__state {
    padding: 0;
    position: absolute;
    right: 16px;
    top: 16px;
}

.c-jackpot-card__icon {
    -ms-flex-align: center;
    align-items: center;
    margin-right: 8px;
}

.c-jackpot-card__prize-label {
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.5;
    position: relative;
    text-align: right;
}

.c-jackpot-card__prize-label:before {
    background-image: url(build/images/icons/24px/color/dollar.42d1b55f.svg);
    background-position: 50% 50%;
    background-size: 24px 24px;
    content: "";
    display: inline-block;
    height: 24px;
    margin-right: 8px;
    vertical-align: top;
    width: 24px;
}

.c-jackpot-card__prize-value {
    display: block;
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 700;
    line-height: 1.2380952;
    margin-left: auto;
    text-align: right;
}

.c-jackpot-card__prize-sub-value {
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 500;
    line-height: 1.4285714;
    margin-left: auto;
}

.c-jackpot-card__jackpot-history {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    position: static;
    width: 100%;
}

.c-jackpot-card__jackpot-history .c-btn {
    position: absolute;
    right: 16px;
    top: 60px;
}

.c-jackpot-card__jackpot-history-chart {
    display: none;
}

.c-jackpot-card__jackpot-history-chart.is-open {
    display: block;
    height: 366px;
    padding: 8px 0;
    width: 100%;
}

.c-jackpot-card__jackpot-history-chart .c-loader {
    min-height: 366px;
}

.c-jackpot-card__title {
    display: block;
    font-size: 18px;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.4444444;
}

.c-jackpot-card__date {
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 500;
    line-height: 1.4285714;
}

@media (min-width:73.125em) {
    .c-jackpot-card__date {
        font-size: 18px;
        font-size: 1rem;
        font-weight: 300;
        line-height: 1.2222222;
    }
}

.c-jackpot-card__logo {
    height: 48px;
    margin-right: 12px;
    width: 48px;
}

.c-jackpot-card__jackpot-label {
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.5;
}

.c-jackpot-card__btn {
    display: block;
    width: 100%;
}

.c-jackpot-card__btn:after {
    bottom: 0;
    content: "";
    left: 0;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
    white-space: nowrap;
    z-index: 1;
}

@media (min-width:73.125em) {

    .c-jackpot-card {
        -ms-flex-pack: justify;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .c-jackpot-card:hover {
        box-shadow: 0 2px 8px 0 #0a08270d,inset 0 0 0 2px #0a0827;
        cursor: pointer;
    }

    .c-jackpot-card:hover .c-jackpot-card__btn {
        box-shadow: inset 0 0 0 2px #0a0827;
    }

    .c-jackpot-card__header {
        -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
        height: 100%;
        padding: 16px 0;
    }

    .c-jackpot-card__jackpot {
        -ms-flex-preferred-size: 25%;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        align-items: center;
        flex-basis: 25%;
        justify-content: center;
        padding-bottom: 8px;
        padding-top: 8px;
    }

    .c-jackpot-card__jackpot--has-extra {
        padding-bottom: 0;
    }

    .c-jackpot-card__state {
        -ms-flex-align: center;
        -ms-flex-pack: center;
        align-items: center;
        display: -ms-flexbox;
        display: flex;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        justify-content: center;
        padding-bottom: 8px;
        padding-right: 48px;
        padding-top: 8px;
        position: static;
    }

    .c-jackpot-card__jackpot-history .c-btn {
        top: 24px;
    }

    .c-jackpot-card__jackpot-list {
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    .c-jackpot-card__link,.c-jackpot-card__prize {
        box-shadow: inset 0 1px 0 0 #f4f4f7;
    }

    .c-jackpot-card__prize {
        -ms-flex-preferred-size: 45%;
        flex-basis: 45%;
    }

    .c-jackpot-card__prize-sub-value {
        display: inline-block;
        font-size: 14px;
        font-size: .7777778rem;
        font-weight: 500;
        line-height: 1.4285714;
        margin-left: auto;
    }

    .c-jackpot-card__link {
        -ms-flex-preferred-size: 55%;
        flex-basis: 55%;
        padding: 16px 0;
    }

    .c-jackpot-card__jackpot-row {
        -ms-flex-pack: end;
        box-shadow: none;
        justify-content: flex-end;
    }

    .c-jackpot-card__jackpot-row+.c-jackpot-card__jackpot-row {
        box-shadow: inset 0 1px 0 0 #f4f4f7;
        padding-bottom: 4px;
    }

    .c-jackpot-card__jackpot-meta {
        margin-right: auto;
    }

    .c-jackpot-card__prize-label {
        margin-right: 8px;
    }

    .c-jackpot-card__prize-details {
        padding: 0;
    }

    .c-jackpot-card__btn,.c-jackpot-card__prize-details {
        -ms-flex-item-align: center;
        align-self: center;
        width: auto;
    }

    .c-jackpot-card__btn {
        font-size: 14px;
        font-size: .7777778rem;
        height: auto;
        line-height: 1.4285714;
        margin-left: auto;
        padding: 6px 36px 6px 12px;
    }
}

.c-next-draw-card {
    background-color: #fff;
    background-image: linear-gradient(180deg,#ffffff80 0,#fff 80px);
    border: 1px solid #0a0827;
    border-radius: 8px;
    box-shadow: 0 2px 8px 0 #2622620d;
    list-style-type: none;
    margin-bottom: 16px;
    padding-left: 16px;
    padding-right: 16px;
    position: relative;
}

.c-next-draw-card--themed:before {
    background-image: url(build/images/backgrounds/balls-default.179760b0.svg);
    background-position: top 50% right -64px;
    background-repeat: no-repeat;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.c-next-draw-card--themed .c-next-draw-card__header {
    margin-bottom: 12px;
}

.c-next-draw-card--themed .c-next-draw-card__prize-label {
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.5;
    position: relative;
}

.c-next-draw-card--themed .c-next-draw-card__prize-label:before {
    background-image: url(build/images/icons/24px/dark/dollar.bdec4f04.svg);
}

.c-next-draw-card--themed .c-next-draw-card__date {
    color: #0a0827;
}

.c-next-draw-card--themed .c-next-draw-card__cta {
    padding: 0 0 16px;
}

.c-next-draw-card__body {
    position: relative;
    z-index: 1;
}

.c-next-draw-card__header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
    margin-bottom: 4px;
    padding-top: 16px;
}

.c-next-draw-card__header-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1;
    flex: 1;
    -ms-flex-direction: column;
    flex-direction: column;
}

.c-next-draw-card__game-title {
    box-shadow: inset 0 -1px 0 0 #dfdee8;
    font-size: 21px;
    font-size: 1.1666667rem;
    line-height: 1.1428571;
    padding-bottom: 8px;
}

.c-next-draw-card__title {
    font-size: 21px;
    font-size: 1.1666667rem;
    line-height: 1.2380952;
    margin: 0;
}

.c-next-draw-card__date {
    -ms-flex-order: -1;
    color: #413e5b;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 500;
    line-height: 1.4285714;
    order: -1;
}

.c-next-draw-card__header-media {
    margin-bottom: 0;
    margin-left: auto;
    margin-right: 12px;
}

.c-next-draw-card__prize-details {
    -ms-flex-align: end;
    align-items: flex-end;
    box-shadow: inset 0 1px 0 0 #dfdee8;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0;
    padding: 16px 0;
    width: 100%;
}

.c-next-draw-card__prize-label {
    color: #413e5b;
    -ms-flex: 0 1 50%;
    flex: 0 1 50%;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.5;
    position: relative;
}

.c-next-draw-card__prize-label:before {
    background-image: url(build/images/icons/24px/color/dollar.42d1b55f.svg);
    background-position: 50% 50%;
    background-size: 24px 24px;
    content: "";
    display: inline-block;
    height: 24px;
    margin-right: 8px;
    vertical-align: top;
    width: 24px;
}

.c-next-draw-card__prize-value {
    -ms-flex-item-align: end;
    align-self: flex-end;
    display: block;
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 700;
    line-height: 1.2380952;
    margin: 0 0 0 auto;
    text-align: right;
    width: auto;
}

.c-next-draw-card__prize-sub-value {
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 500;
    line-height: 1.4285714;
}

.c-next-draw-card__cash-prize-label {
    -ms-flex-item-align: end;
    align-self: flex-end;
    display: block;
    -ms-flex: 1;
    flex: 1;
    margin-right: 0;
    min-width: 50%;
    text-align: right;
}

.c-next-draw-card__cash-prize-label,.c-next-draw-card__cash-prize-value {
    color: #0a0827cc;
    color: #0a082799;
    font-size: 12px;
    font-size: .6666667rem;
    font-size: 13px;
    font-size: .7222222rem;
    font-weight: 500;
    line-height: 1.3333333;
    line-height: 1.5384615;
}

.c-next-draw-card__cash-prize-value {
    margin-left: 4px;
}

.c-next-draw-card--countdown .c-next-draw-card__date {
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 400;
    line-height: 1.3333333;
}

.c-next-draw-card--countdown .c-next-draw-card__label {
    left: 16px;
    position: absolute;
    top: -12px;
    z-index: 2;
}

.c-next-draw-card__cta {
    padding: 0 16px 16px;
}

.c-next-draw-card--featured {
    background-color: #fff;
    background-image: linear-gradient(1turn,#ffffffd9,#fff 30px);
    border-bottom-color: #dfdee8;
    border-left: 0;
    border-radius: 0;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    border-right: 0;
    border-top: 1px solid #dfdee8;
    color: #0a0827b3;
    margin-bottom: 0;
}

.c-next-draw-card--featured:before {
    background-image: none;
}

.c-next-draw-card--featured .c-next-draw-card__label {
    left: 8px;
    position: absolute;
    top: -12px;
    z-index: 2;
}

.c-next-draw-card--featured .c-next-draw-card__header {
    margin-bottom: 0;
    padding-top: 24px;
}

.c-next-draw-card--featured .c-next-draw-card__date {
    color: #0a0827b3;
    font-size: 18px;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.2222222;
    margin-bottom: 10px;
}

.c-next-draw-card--featured .c-next-draw-card__cta {
    padding: 8px 0 16px;
}

@media (min-width:48em) {
    .c-next-draw-card--featured {
        margin-bottom: 0;
    }
}

.c-next-draw-card--bordered {
    padding: 0;
}

.c-next-draw-card--bordered .c-next-draw-card__header {
    margin: 0;
    padding: 0;
}

.c-next-draw-card--bordered .c-next-draw-card__header-media {
    -ms-flex-item-align: center;
    -ms-flex-pack: center;
    align-self: center;
    box-shadow: inset -1px 0 0 0 #0a08270d;
    display: block;
    justify-content: center;
    margin-right: 16px;
    padding: 0 12px;
}

.c-next-draw-card--bordered .c-next-draw-card__logo {
    display: block;
}

.c-next-draw-card--bordered .c-next-draw-card__date {
    margin-bottom: 3px;
}

.c-next-draw-card--bordered .c-next-draw-card__header-body {
    -ms-flex-pack: center;
    justify-content: center;
    padding: 12px 8px 12px 0;
}

.c-next-draw-card--bordered .c-next-draw-card__prize-details {
    padding: 19px 16px;
}

@media (min-width:73.125em) {
    .c-next-draw-card {
        border-radius: 8px;
        margin-bottom: 24px;
    }

    .c-next-draw-card--themed {
        margin-bottom: 16px;
    }

    .c-next-draw-card--featured {
        border-radius: 0;
        -ms-flex: auto;
        flex: auto;
        margin-bottom: 0;
        padding-bottom: 8px;
        padding-left: 24px;
        padding-right: 24px;
        width: 100%;
    }

    .c-next-draw-card--featured .c-next-draw-card__label {
        left: 16px;
    }

    .c-next-draw-card--featured .c-next-draw-card__header {
        margin-bottom: 0;
        padding-top: 32px;
    }
}

.c-upcoming-jackpot-card {
    background-color: #fff;
    background-image: linear-gradient(180deg,#ffffff80 0,#fff 80px);
    border: 1px solid #dfdee8;
    border-radius: 8px;
    box-shadow: 0 2px 8px 0 #2622620d;
    list-style-type: none;
    padding-left: 16px;
    padding-right: 16px;
    position: relative;
    width: 100%;
}

.c-carousel__item>.c-upcoming-jackpot-card {
    width: 272px;
}

@media (min-width:23.4375em) {
    .c-carousel__item>.c-upcoming-jackpot-card {
        width: 312px;
    }
}

@media (min-width:73.125em) {
    .c-carousel__item>.c-upcoming-jackpot-card {
        width: 370px;
    }
}

.c-upcoming-jackpot-card--themed:before {
    background-image: url(build/images/backgrounds/balls-default.179760b0.svg);
    background-position: top 50% right -64px;
    background-repeat: no-repeat;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.c-upcoming-jackpot-card--themed .c-upcoming-jackpot-card__prize-label {
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.5;
    position: relative;
    text-align: right;
}

.c-upcoming-jackpot-card--themed .c-upcoming-jackpot-card__prize-label:before {
    background-image: url(build/images/icons/24px/dark/dollar.bdec4f04.svg);
}

.c-upcoming-jackpot-card__body {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100%;
    justify-content: space-between;
    position: relative;
    z-index: 1;
}

.c-upcoming-jackpot-card__header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
    margin-bottom: 4px;
    padding-top: 16px;
}

.c-upcoming-jackpot-card__header-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1;
    flex: 1;
    -ms-flex-direction: column;
    flex-direction: column;
}

.c-upcoming-jackpot-card__title {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.4444444;
    margin: 0;
}

.c-playing-card--sm {
    height: 40px;
    width: 32px;
}

.c-playing-card__suit,.c-playing-card__value {
    display: block;
    margin: 0;
}

.c-playing-card__value {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1;
}

.c-playing-card--sm .c-playing-card__value {
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1;
}

.c-playing-card__suit {
    font-size: 22px;
    font-size: 1.2222222rem;
    line-height: .8181818;
}

.c-playing-card--sm .c-playing-card__suit {
    font-size: 22px;
    font-size: 1.2222222rem;
    line-height: .7272727;
}

.c-playing-card--red {
    color: #be1e2d;
}

.c-playing-card--black {
    color: #0a0827;
}

.c-result-card {
    background-color: #fff;
    border-radius: 12px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-bottom: 32px;
}

.c-result-card~.c-result-card {
    margin-top: 52px;
}

.c-result-card--squeeze~.c-result-card--squeeze {
    margin-top: 0;
}

.c-result-card--squeeze {
    background-color: #fff;
    border: 1px solid #0a0827;
    border-radius: 12px;
    margin-bottom: 24px;
}

.c-result-card--squeeze .c-result-card__header,.c-result-card--squeeze .c-result-card__result-list,.c-result-card--squeeze .c-result-card__result-row {
    -ms-flex-align: start;
    align-items: flex-start;
    border: none;
    margin-left: 0;
    margin-right: 0;
    text-align: left;
}

.c-result-card--squeeze .c-result-card__title {
    color: #0a0827;
    font-weight: 700;
}

.c-result-card--squeeze .c-result-card__header {
    background-image: none;
}

.c-result-card--squeeze .c-result-card__result,.c-result-card--squeeze .c-result-card__result-row {
    border: none;
}

.c-result-card--squeeze .c-result-card__result-row+.c-result-card__result-row {
    border-top: 1px solid #c4c3cc;
}

.c-result-card--squeeze .c-result-card__prize {
    background-color: #fff;
    border: none;
    border-top: 1px solid #c4c3cc;
    display: -ms-flexbox;
    display: flex;
    margin: 0 16px;
}

.c-result-card--squeeze .c-result-card__prize-btn {
    -ms-flex-item-align: center;
    -ms-flex-align: center;
    align-items: center;
    align-self: center;
    background-color: #fff;
    background-image: url(build/images/icons/24px/dark/arrow-right.7e7acc47.svg);
    background-position: top 50% right 2px;
    background-repeat: no-repeat;
    border: 1px solid #0a0827;
    border-radius: 8px;
    box-shadow: none;
    color: #0a0827;
    display: -ms-flexbox;
    display: flex;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 700;
    height: 32px;
    letter-spacing: 0;
    line-height: 1.25;
    margin-left: auto;
    margin-right: 0;
    text-decoration: none;
    text-transform: none;
    vertical-align: middle;
    width: 32px;
}

.c-result-card--squeeze .c-result-card__prize-details {
    border-bottom: none;
    display: -ms-inline-flexbox;
    display: inline-flex;
    padding-left: 0;
    padding-right: 0;
    width: auto;
}

.c-result-card--squeeze .c-result-card__header {
    padding: 16px 16px 0;
}

.c-result-card--squeeze .c-result-card__result {
    background-color: initial;
    padding: 0 16px;
}

.c-result-card--squeeze .c-result-card__result-list {
    -ms-flex-pack: start;
    justify-content: flex-start;
}

.c-result-card--squeeze>:last-child {
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
}

.c-result-card--themed .c-result-card__header {
    background-color: currentColor;
    background-image: linear-gradient(180deg,#ffffffe6 0,#fff 80px);
}

.c-result-card--squeeze.c-result-card--themed .c-result-card__header {
    background-color: currentColor;
    background-image: linear-gradient(180deg,#ffffffe6 0,#fff 36px);
}

.c-result-card--minimal {
    display: block;
}

.c-result-card--minimal .c-result-card__prize,.c-result-card--minimal .c-result-card__result {
    display: table-cell;
}

.c-result-card--minimal .c-result-card__result {
    width: 100%;
}

.c-result-card--minimal .c-result-card__prize {
    background-color: initial;
    border-bottom-right-radius: 12px;
    border-top: none;
    padding-right: 16px;
}

.c-result-card--full .c-result-card__prize-tables {
    color: #0a0827;
}

.c-result-card--full .c-result-card__prize-tables-heading {
    background-image: linear-gradient(180deg,#dfdee8b3 0,#fff 36px);
    border-top: 1px solid #dfdee8;
    color: #0a0827;
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
    margin-bottom: 0;
    padding: 16px 16px 0;
}

.c-result-card--full .u-responsive-table {
    margin-bottom: 0;
}

.c-result-card--full .c-selector-table__control {
    margin: 0;
    white-space: nowrap;
}

.c-result-card--full .c-selector-table__controls {
    background-color: #fff;
    border-bottom: 1px solid #dfdee8;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    padding-left: 0;
    padding-right: 0;
}

.c-result-card--full .c-selector-table__controls .c-carousel__item:first-child {
    padding-left: 16px;
}

.c-result-card--full .c-selector-table__controls .c-radio-field--button {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #fff;
    border: none;
    border-radius: 8px;
    box-shadow: inset 0 0 0 2px #dfdee8;
    color: #0a0827;
    display: -ms-inline-flexbox;
    display: inline-flex;
    font-family: inherit;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    justify-content: center;
    letter-spacing: 0;
    line-height: 24px;
    min-width: 40px;
    padding: 8px 12px;
    text-decoration: none;
    text-transform: none;
    transition: background-color .3s ease-in-out,color .3s ease-in-out;
}

.c-result-card--full .c-selector-table__controls .c-radio-field--button.is-checked {
    background-color: #262262;
    box-shadow: 0 2px 4px 0 #2622620d;
    color: #fff;
}

.c-result-card--full .c-result-card__prize-table {
    color: #0a0827;
    margin-bottom: 8px;
}

.c-result-card--full .c-result-card__prize-table :last-child>:last-child>td {
    border-bottom: 0;
}

.c-result-card__header {
    -ms-flex-align: center;
    align-items: center;
    border-left: 2px solid #0a0827;
    border-right: 2px solid #0a0827;
    border-top: 2px solid #0a0827;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    text-align: center;
}

@media (min-width:73.125em) {
    .c-carousel__item>.c-mini-next-draw-card {
        width: 370px;
    }
}

.c-info-button {
    display: inline-block;
    height: 16px;
    position: relative;
    width: 16px;
}

.c-info-button__button {
    background: none;
    border: none;
    cursor: pointer;
    height: 16px;
    left: 0;
    padding: 0;
    position: absolute;
    top: 0;
    width: 16px;
}

.c-info-button__button svg {
    fill: #0a082766;
}

.c-info-button__tooltip {
    background: #0a0827;
    border-radius: 8px;
    bottom: calc(100% + 12px);
    color: #fff;
    font-size: 14px;
    left: calc(50% - 150px);
    padding: 8px 16px;
    position: absolute;
    width: 300px;
}

.c-info-button__tooltip :last-child {
    margin-bottom: 4px;
}

.c-info-button__tooltip:before {
    background: #0a0827;
    border-bottom-right-radius: 4px;
    bottom: -6px;
    content: "";
    display: block;
    height: 12px;
    left: 144px;
    position: absolute;
    transform: rotate(45deg);
    width: 12px;
}

.c-info-button__tooltip.is-hidden {
    display: none;
}

.c-info-button__tooltip.is-on {
    display: block;
}

.c-tool {
    margin-bottom: 56px;
    position: relative;
    z-index: 1;
}

.c-tool__breadcrumb {
    color: #0a0827;
    display: block;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 1px;
    line-height: 24px;
    margin-bottom: 8px;
    padding: 12px 0;
    text-decoration: none;
    text-transform: uppercase;
}

.c-tool__breadcrumb:before {
    background-image: url(build/images/icons/16px/dark/arrow-right.adad23de.svg);
    background-position: 0 2px;
    background-size: 20px;
    content: "";
    display: inline-block;
    height: 20px;
    margin-right: 4px;
    transform: rotate(180deg);
    vertical-align: middle;
    width: 20px;
}

.c-tool__title {
    font-size: 28px;
    font-size: 1.5555556rem;
    line-height: 1.2142857;
}

.c-tool__preview-overlay {
    height: 100%;
    position: absolute;
    top: 75px;
    width: 100%;
    z-index: 99999;
}

.c-tool__description * {
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.5;
}

.c-tool__blurred {
    filter: blur(8px);
    pointer-events: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.c-tool__section {
    background: #fff;
    border: 1px solid #dfdee8;
    border-radius: 8px;
    margin-bottom: 16px;
    padding: 16px;
    position: relative;
}

.c-tool__section>:last-child {
    margin: 0;
}

.c-tool__section-header {
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    letter-spacing: 1.25px;
    line-height: 1.4285714;
    text-transform: uppercase;
}

.c-tool__section-secondary-title,.c-tool__section-title {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 700;
    line-height: 1.2380952;
    margin-bottom: 4px;
}

.c-tool__section-secondary-title .c-info-button,.c-tool__section-title .c-info-button {
    display: -ms-inline-flexbox;
    display: inline-flex;
}

.c-tool__section-secondary-title {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.2222222;
}

.c-tool__section-description {
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 24px;
}

.c-tool__content-card-title {
    display: block;
    font-size: 18px;
    font-size: 1rem;
    font-weight: 500;
    font-weight: 700;
    line-height: 1.5555556;
    margin-bottom: 12px;
    text-align: center;
    width: 100%;
}

.c-tool__content-card-subtitle {
    display: block;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.3333333;
    text-align: center;
    text-transform: uppercase;
    width: 100%;
}

.c-tool__content-card-item {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-bottom: 16px;
}

.c-tool__info-list {
    margin-left: 0;
}

.c-tool__info-list-item {
    -ms-flex-pack: justify;
    box-shadow: inset 0 -1px 0 0 #dfdee8;
    display: -ms-flexbox;
    display: flex;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    justify-content: space-between;
    line-height: 1.5;
    margin-bottom: 0;
    padding: 8px 0;
}

.c-tool__info-list-item-title {
    margin-right: 8px;
}

.c-tool__info-list-item:last-child {
    box-shadow: none;
}

.c-tool__meter {
    color: #0a0827cc;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    line-height: 1.5;
    width: 100%;
}

.c-tool__meter-details {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
}

.c-tool__key {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    line-height: 1.5;
}

.c-tool__key:before {
    border: 4px solid;
    border-radius: 100%;
    content: "";
    display: inline-block;
    height: 13px;
    margin-right: 8px;
    width: 13px;
}

.c-tool__key--tool-color-1:before {
    border-color: #ff9e00;
}

.c-tool__key--tool-color-2:before {
    border-color: #326eb1;
}

.c-tool__key--tool-color-3:before {
    border-color: #008874;
}

.c-tool__key--tool-color-4:before {
    border-color: #be1e2d;
}

.c-tool__key--tool-color-5:before {
    border-color: #b63dcd;
}

.c-tool__key--tool-color-6:before {
    border-color: #a1cf6b;
}

.c-tool__key--tool-color-7:before {
    border-color: #cf517a;
}

.c-tool__key--tool-color-8:before {
    border-color: #e1d04a;
}

.c-tool__key--tool-color-9:before {
    border-color: #e46d46;
}

.c-tool__key--tool-color-10:before {
    border-color: #33adb6;
}

.c-tool__key--tool-color-11:before {
    border-color: #ff9e00;
}

.c-tool__key--tool-color-12:before {
    border-color: #326eb1;
}

.c-tool__key--tool-color-13:before {
    border-color: #008874;
}

.c-tool__key--tool-color-14:before {
    border-color: #be1e2d;
}

.c-tool__key--tool-color-15:before {
    border-color: #b63dcd;
}

.c-tool__key--tool-color-16:before {
    border-color: #a1cf6b;
}

.c-tool__key--tool-color-17:before {
    border-color: #cf517a;
}

.c-tool__key--tool-color-18:before {
    border-color: #e1d04a;
}

.c-tool__key--tool-color-19:before {
    border-color: #e46d46;
}

.c-tool__key--tool-color-20:before {
    border-color: #33adb6;
}

.c-tool__key--tool-color-21:before {
    border-color: #ff9e00;
}

.c-tool__key--tool-color-22:before {
    border-color: #326eb1;
}

.c-tool__key--tool-color-23:before {
    border-color: #008874;
}

.c-tool__key--tool-color-24:before {
    border-color: #be1e2d;
}

.c-tool__draws-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.c-tool__draws-field {
    -ms-flex: 1 1 calc(33.333% - 8px);
    flex: 1 1 calc(33.333% - 8px);
    font-size: 15px!important;
}

.c-tool__number-picker .c-radio-field {
    min-width: 39px;
}

.c-tool__number-picker .c-checkbox-field {
    min-width: 60px;
}

.c-tool .c-checkbox-group__min-display {
    position: absolute;
    right: 16px;
    top: 10px;
}

.c-tool .c-accordion-group__item {
    border: 0;
}

@media (max-width:47.99em) {
    .c-tool .c-accordion-group__control {
        padding-left: 0;
        padding-right: 0;
    }

    .c-tool .c-accordion-group__panel {
        padding-left: 40px;
        padding-right: 0;
    }

    .c-tool .c-ball--xs,.c-tool .c-ball--xs .c-ball__label {
        font-size: 10px;
        font-size: .5555556rem;
        height: 20px;
        line-height: 1.2;
        width: 20px;
    }
}

.c-tool__footer-title {
    margin-bottom: 8px;
    padding-top: 32px;
}

.c-tool-number-display__header {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 8px;
}

.c-tool-number-display__header h2 {
    font-size: 21px;
    margin-bottom: 0;
    margin-right: 8px;
}

.c-tool-number-display .c-ball {
    display: -ms-inline-flexbox;
    display: inline-flex;
}

.c-tool-number-display--long .c-ball {
    margin-bottom: 4px;
}

.c-form-submit-button {
    font-size: 14px;
    font-size: .7777778rem;
    letter-spacing: 1.25px;
    line-height: 20px;
}

.c-form-submit-button.is-disabled {
    background-color: #dfdee8;
    color: #626078;
}

.c-form-submit-button--w-icon {
    background-image: url(build/images/icons/16px/light/check.f81dfa2f.svg);
    background-position: right 16px top 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    padding-right: 48px;
    text-align: left;
}

.c-form-submit-button--w-icon.is-disabled {
    background-color: #dfdee8;
    background-image: url(build/images/icons/16px/dark/check.f81dfa2f.svg);
    color: #626078;
}

.c-form-reset-button {
    background-color: #008874;
    color: #fff;
    font-size: 14px;
    font-size: .7777778rem;
    letter-spacing: 1.25px;
    line-height: 20px;
    text-align: center;
    width: 100%;
}

.c-form-reset-button.is-disabled {
    background-color: #dfdee8;
    color: #626078;
}

.c-content-toggle {
    overflow: hidden;
}

.c-content-toggle__panel--hidden {
    display: none;
}

.c-loader {
    -ms-flex-direction: column;
    flex-direction: column;
    min-height: 400px;
}

.c-loader,.c-loader__icon {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
}

.c-loader__icon {
    margin: 0 auto 16px;
    position: relative;
    z-index: 10;
}

.c-loader svg,.c-loader__icon {
    height: 50px;
    width: 50px;
}

.c-loader__circle-container {
    height: 50px;
    max-width: 100px;
    position: absolute;
    transform-origin: center;
    width: 50px;
    will-change: transform;
}

.c-loader__circle-container--clockwise {
    animation: clockwise-spin 2s linear infinite;
}

.c-loader__circle-container--anticlockwise {
    animation: anticlockwise-spin 2s linear infinite;
}

.c-loader__circle {
    fill: #0000;
    stroke: #262262;
    stroke-linecap: round;
    stroke-dasharray: 283;
    stroke-dashoffset: 280;
    stroke-width: 3px;
    animation: circle-animation-1 1.5s ease-in-out infinite both;
    display: block;
    transform-origin: 50% 50%;
}

.c-loader__circle--anticlockwise {
    stroke-width: 14px;
    stroke-dasharray: 280;
    stroke-dashoffset: 270;
    animation: circle-animation-2 2s ease-in-out infinite both;
}

.c-loader__number {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    color: #be1e2d;
    display: -ms-flexbox;
    display: flex;
    font-size: lusa-font-size(20px,24px);
    font-weight: 700;
    height: 100%;
    justify-content: center;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

@keyframes clockwise-spin {
    0% {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(1turn);
    }
}

@keyframes anticlockwise-spin {
    0% {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(-1turn);
    }
}

@keyframes circle-animation-1 {
    0%,25% {
        stroke-dashoffset: 280;
        transform: rotate(0);
    }

    50%,75% {
        stroke-dashoffset: 75;
        transform: rotate(45deg);
    }

    to {
        stroke-dashoffset: 280;
        transform: rotate(1turn);
    }
}

@keyframes circle-animation-2 {
    0%,25% {
        stroke-dashoffset: 125;
        transform: rotate(0);
    }

    50%,75% {
        stroke-dashoffset: 270;
        transform: rotate(-45deg);
    }

    to {
        stroke-dashoffset: 125;
        transform: rotate(-1turn);
    }
}

.c-loader__text {
    font-size: 18px;
    font-size: 1rem;
    font-weight: 900;
    line-height: 1.5;
    padding: 0 16px;
    text-align: center;
}

.c-loader__text span:after {
    content: attr(data-ellipsis);
    position: absolute;
}

@keyframes loader-bounce-delay {
    0%,80%,to {
        transform: scale(0);
    }

    40% {
        transform: scale(1);
    }
}

.c-dropdown {
    display: inline-block;
    position: relative;
}

.c-dropdown--full {
    width: 100%;
}

.c-dropdown__button {
    cursor: pointer;
    white-space: nowrap;
}

.c-dropdown--w-inner-label .c-dropdown__button {
    -ms-flex-pack: justify;
    background-position: bottom 6px right 8px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 52px;
    justify-content: space-between;
}

@media (min-width:48em) {
    .c-dropdown--w-inner-label .c-dropdown__button {
        background-position: bottom 12px right 12px;
        height: 64px;
    }
}

@media (min-width:73.125em) {
    .c-dropdown__button {
        padding: 11px 44px 9px 16px;
    }
}

.c-dropdown__button-label {
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 800;
    letter-spacing: 1px;
    line-height: 16px;
    text-transform: uppercase;
}

.c-dropdown__button.is-on {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.c-dropdown__target {
    background-color: #fff;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;
    display: block;
    left: 0;
    list-style-type: none;
    margin: 0;
    min-width: 100%;
    padding: 8px;
    position: absolute;
    top: calc(100% - 1px);
    white-space: nowrap;
    z-index: 75;
}

.c-dropdown__target-body {
    -webkit-overflow-scrolling: touch;
    overflow-y: scroll;
    overscroll-behavior-y: contain;
}

.c-dropdown__target.is-on {
    transform: scale(1);
}

.c-dropdown__target.is-hidden {
    display: none;
}

.c-dropdown__target-footer {
    -ms-flex-pack: justify;
    -ms-flex-align: center;
    align-items: center;
    border-top: 1px solid #dfdee8;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    margin-left: -8px;
    margin-right: -8px;
    margin-top: 8px;
    padding: 16px 16px 8px;
}

.c-dropdown__target-footer-submit {
    -ms-flex: 1;
    flex: 1;
    margin-left: 16px;
}

.c-select-field {
    position: relative;
}

.c-select-field--full {
    width: 100%;
}

.c-select-field .c-dropdown__button {
    color: #0a0827;
    overflow: hidden;
    padding-left: 8px;
    padding-right: 32px;
    text-overflow: ellipsis;
}

@media (min-width:48em) {
    .c-select-field .c-dropdown__button {
        padding-left: 16px;
        padding-right: 32px;
    }
}

.c-select-field.is-disabled .c-dropdown__button {
    background-color: #f4f4f7;
    background-image: url(build/images/icons/16px/color/arrow-down.8eff9a1c.svg);
    color: #0a082780;
    pointer-events: none;
}

.c-select-field .c-input--is-invalid .c-dropdown__button-label {
    color: #be1e2d;
}

.c-select-field__optgroup {
    margin-bottom: 8px;
}

.c-select-field__optgroup-name {
    color: #413e5b;
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    letter-spacing: 1.25px;
    line-height: 1.4285714;
    line-height: 20px;
    text-align: left;
    text-transform: uppercase;
}

.c-select-field .c-radio-field {
    white-space: normal;
}

.c-select-field .c-radio-field__input {
    clip: rect(0 0 0 0)!important;
    border: 0!important;
    -webkit-clip-path: inset(50%)!important;
    clip-path: inset(50%)!important;
    height: 1px!important;
    margin: -1px!important;
    overflow: hidden!important;
    padding: 0!important;
    position: absolute!important;
    position: relative!important;
    white-space: nowrap!important;
    width: 1px!important;
}

.c-select-field__error-message {
    background: #f2d2d5;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    color: #be1e2d;
    display: block;
    font-size: 13px;
    font-size: .7222222rem;
    font-weight: 500;
    line-height: 1.5384615;
    margin: -6px 0 8px;
    padding: 10px 8px 4px;
}

.c-export-menu {
    cursor: pointer;
    display: block;
    height: 40px;
    position: relative;
    width: 40px;
}

.c-export-menu__container {
    background-color: #fff;
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;
    min-height: 40px;
    min-width: 40px;
    overflow: hidden;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
    z-index: 74;
}

.c-export-menu__button {
    background-color: initial;
    background-image: url(build/images/icons/16px/dark/export.728edb5e.svg);
    background-position: center left 12px;
    background-repeat: no-repeat;
    background-size: 16px;
    border: none;
    cursor: pointer;
    font-family: DM Sans,sans-serif;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    left: 0;
    line-height: 1.25;
    padding: 11px 12px 9px 36px;
    position: absolute;
    text-align: left;
    width: 120px;
}

.c-export-menu__button-label {
    opacity: 0;
}

.c-export-menu__list {
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: none;
    display: block;
    list-style-type: none;
    margin: 40px 0 0;
    min-width: 100%;
    overflow: scroll;
    overflow: -moz-scrollbars-none;
    overscroll-behavior-y: contain;
    padding: 16px 12px;
    scrollbar-width: none;
    white-space: nowrap;
    width: 120px;
    z-index: 75;
}

.c-export-menu__list::-webkit-scrollbar {
    display: none;
}

.c-export-menu__list-item {
    margin-bottom: 16px;
}

.c-export-menu__list-item:last-child {
    margin-bottom: 0;
}

.c-export-menu__list-button {
    -ms-flex-align: center;
    align-items: center;
    background: none;
    border: 0;
    cursor: pointer;
    display: -ms-flexbox;
    display: flex;
    font-family: DM Sans,sans-serif;
    font-size: 16px;
    padding: 0;
}

.c-export-menu__list-button img,.c-export-menu__list-button svg {
    margin-right: 12px;
}

.c-export-menu__list.is-hidden {
    display: none;
}

.c-number-checker-filter-sheet .c-sheet__header {
    -ms-flex-pack: justify;
    box-shadow: inset 0 -1px 0 0 #dfdee8;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    line-height: 1;
    padding: 11px 16px;
}

.c-number-checker-filter-sheet__title {
    display: block;
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 900;
    height: 100%;
    line-height: 24px;
}

.c-number-checker-filter-sheet__close-btn {
    -ms-flex-item-align: end;
    align-self: flex-end;
    justify-self: flex-end;
}

.c-number-checker-filter-sheet .c-sheet__body {
    -webkit-overflow-scrolling: touch;
    height: 100%;
    overflow-y: scroll;
    overscroll-behavior-y: contain;
    padding-top: 16px;
    position: relative;
}

.c-number-checker-filter-sheet__section {
    padding: 16px;
}

@media (min-width:73.125em) {
    .c-number-checker-filter-sheet__section {
        display: inline-block;
        padding: 0 8px 0 0;
    }

    .c-number-checker-filter-sheet__section .c-checkbox-group__legend {
        background-color: #fff;
        background-position: right 12px top 50%;
        background-repeat: no-repeat;
        border: #0000;
        border-radius: 6px;
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-size: .8888889rem;
        font-weight: 500;
        letter-spacing: 0;
        line-height: 20px;
        outline: none;
        padding: 11px 44px 9px 16px;
        text-align: left;
        text-transform: none;
        width: 100%;
    }
}

.c-number-checker-filter-sheet__results-selection {
    border-top: 1px solid #f4f4f7;
    margin-bottom: 16px;
    padding: 16px 16px 0;
}

.c-number-checker-filter-sheet__results-selection legend {
    float: left;
}

.c-number-checker-filter-sheet__results-selection legend+* {
    clear: both;
}

@media (min-width:73.125em) {
    .c-number-checker-filter-sheet__results-selection {
        border-top: 0;
        display: inline-block;
        margin: 0;
        padding: 0;
    }

    .c-number-checker-filter-sheet__results-selection .c-date-range-field__legend {
        display: none;
    }
}

.c-number-checker-filter-sheet__help-text {
    color: #0a0827bf;
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 21px;
}

.c-number-checker-filter-sheet .c-sheet__footer {
    background-color: #fff;
    bottom: 0;
    box-shadow: 0 -3px 8px 0 #0000000d;
    left: 0;
    padding: 16px 16px 128px;
    width: 100%;
}

.c-number-checker-filter-sheet .c-radio-field__children {
    display: block;
    margin-left: 32px;
    margin-top: 8px;
}

.c-number-checker-filter-sheet .c-date-range-field {
    margin-bottom: 0!important;
}

@media (min-width:73.125em) {
    .c-number-checker-filter-sheet .c-date-range-field__display {
        background-position: right 12px top 50%;
        background-repeat: no-repeat;
        padding: 11px 44px 9px 16px;
    }

    .c-number-checker-filter-sheet__help-text {
        display: none;
    }

    .c-number-checker-filter-sheet__menu-list {
        background-color: #fff;
        border: 1px solid #dfdee8;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        display: block;
        list-style-type: none;
        margin: 0;
        overflow: visible;
        padding: 8px;
        position: absolute;
        top: calc(100% + 8px);
        width: auto;
    }

    .c-number-checker-filter-sheet__menu-list.is-hidden {
        display: none;
    }

    .c-number-checker-filter-sheet__menu-list.is-on {
        display: block;
    }
}

.c-date-field {
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-bottom: 0;
    position: relative;
}

.c-date-field--full {
    width: 100%;
}

.c-date-field__legend {
    color: #0a0827;
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 900;
    letter-spacing: 1.25px;
    line-height: 24px;
    text-transform: uppercase;
}

.c-date-field__next-button,.c-date-field__prev-button {
    background-position: right 12px top 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    cursor: pointer;
    height: 40px;
    position: absolute;
    top: calc(50% - 20px);
    width: 40px;
}

.c-date-field__next-button.is-disabled,.c-date-field__prev-button.is-disabled {
    cursor: auto;
    opacity: .25;
}

.c-date-field--has-top-label .c-date-field__next-button,.c-date-field--has-top-label .c-date-field__prev-button {
    top: calc(50% - 14px);
}

.c-date-field__prev-button {
    background-image: url(build/images/icons/16px/dark/arrow-left.e820daf7.svg);
    left: 0;
    margin-right: 4px;
}

.c-date-field__next-button {
    background-image: url(build/images/icons/16px/dark/arrow-right.adad23de.svg);
    margin-left: 4px;
    right: 0;
}

.c-date-field__display {
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/calendar.2643f062.svg);
    background-position: left 12px top 50%;
    background-repeat: no-repeat;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 500;
    line-height: 20px;
    margin: 0 auto;
    padding: 11px 16px 9px 44px;
    position: relative;
}

.c-date-field--has-arrows .c-date-field__display {
    background-position: left 52px top 50%;
    padding: 11px 56px 9px 84px;
}

.c-date-field--full .c-date-field__display {
    width: 100%;
}

.c-date-field--has-top-label .c-date-field__display {
    background-position: left 12px top calc(50% + 6px);
}

.c-date-field--has-top-label.c-date-field--has-arrows .c-date-field__display {
    background-position: left 52px top calc(50% + 6px);
}

.c-date-field__bottom-label,.c-date-field__top-label {
    display: block;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 400;
    line-height: 20px;
}

.c-date-field__top-label {
    margin-top: -8px;
}

.c-date-field__overlay {
    -ms-flex-pack: end;
    background: #0a082799;
    display: -ms-flexbox;
    display: flex;
    height: 100vh;
    justify-content: flex-end;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 99999;
}

.c-date-field__picker {
    background: #fff;
    border: 1px solid #dfdee8;
    border-radius: 6px;
    left: 8px;
    position: fixed;
    top: 140px;
    width: calc(100% - 16px);
    z-index: 99999;
}

@media (min-width:48em) {
    .c-date-field__picker {
        left: calc(50% - 180px);
        max-width: 314px;
        position: absolute;
    }
}

.c-date-field__picker-footer {
    -ms-flex-pack: justify;
    -ms-flex-align: center;
    align-items: center;
    border-top: 1px solid #dfdee8;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    padding: 16px;
    text-align: right;
}

.c-date-field__picker .rdp {
    display: block;
    font-size: 16px;
}

.c-date-field__picker .rdp-day_disabled {
    pointer-events: none;
}

.c-date-field__picker .rdp-day_today {
    background: #f4f4f7;
    color: #0a0827;
    font-weight: 700;
}

.c-date-field__picker .rdp-day_today.rdp-day_disabled {
    color: #dee2e2;
}

.c-date-field__picker .rdp-day:not(.rdp-day_selected):not(.rdp-day_disabled):not(.rdp-day_outside):hover {
    background-color: #fcedd1!important;
}

.c-date-field__picker .rdp-day_selected:not(.rdp-day_start):not(.rdp-day_end):not(.rdp-day_outside) {
    background-color: #fcedd1!important;
    color: #0a0827;
}

.c-date-field__picker .rdp-day {
    border-radius: 0!important;
}

.c-date-field__picker .rdp-day_start {
    border-bottom-left-radius: 50%!important;
    border-top-left-radius: 50%!important;
}

.c-date-field__picker .rdp-day_end {
    border-bottom-right-radius: 50%!important;
    border-top-right-radius: 50%!important;
}

.c-date-field__picker .rdp-day {
    font-size: 12px;
    height: 40px;
    padding: 11px;
    width: 40px;
}

.c-date-field__picker .rdp-day_selected:not(.rdp-day_disabled):not(.rdp-day_outside) {
    background-color: #f2a33a;
    color: #0a0827;
}

.c-date-field__picker .rdp-day_selected:not(.rdp-day_disabled):not(.rdp-day_outside):hover {
    background-color: #f2a33a!important;
}

.c-date-field__picker .rdp-head_cell {
    color: #8b9898;
    font-size: .875em;
    font-weight: 400;
}

.c-date-field__picker .rdp-caption_label {
    -ms-flex-pack: center;
    font-size: 16px;
    justify-content: center;
    width: 100%;
}

.c-date-field__picker .rdp-nav {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    left: 0;
    padding: 16px;
    position: absolute;
    width: 100%;
    z-index: 1;
}

.c-date-field__picker .rdp-button {
    border-radius: 6px;
}

.c-date-field__picker .rdp-button:hover:not([disabled]) {
    background-color: #f4f4f7;
}

.c-date-field__picker .rdp-button:active:not([disabled]),.c-date-field__picker .rdp-button:focus:not([disabled]) {
    background-color: #f4f4f7;
    border: none;
}

.c-date-field__picker .rdp-months {
    -ms-flex-pack: center;
    justify-content: center;
}

.c-date-field__footer {
    -ms-flex-pack: justify;
    border-top: 1px solid #dfdee8;
    display: block;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    padding: 16px;
}

.c-date-field__footer .c-btn:not(.c-btn--cta) {
    font-weight: 500;
}

.c-date-field__footer .c-btn--cta {
    cursor: pointer;
    padding: 12px 48px;
}

.c-date-field__button {
    background-image: url(build/images/icons/16px/dark/arrow-right.adad23de.svg);
    background-position: 8px;
    background-repeat: no-repeat;
    background-size: 16px;
    cursor: pointer;
    height: 32px;
    position: absolute;
    top: 16px;
    width: 32px;
}

.c-date-field__button--prev {
    left: 16px;
}

.c-date-field__button--next {
    right: 16px;
}

.c-date-range-field {
    margin-bottom: 0;
}

.c-date-range-field__legend {
    color: #0a0827;
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 900;
    letter-spacing: 1.25px;
    line-height: 24px;
    text-transform: uppercase;
}

.c-date-range-field__toggles {
    display: -ms-flexbox;
    display: flex;
}

@media (max-width:23.4275em) {
    .c-date-range-field__toggles {
        -ms-flex-direction: column;
        flex-direction: column;
    }
}

@media (min-width:23.4375em) {
    .c-date-range-field__toggles {
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 280px;
    }
}

.c-date-range-field__display {
    -ms-flex-align: end;
    align-items: flex-end;
    cursor: pointer;
    display: -ms-inline-flexbox;
    display: inline-flex;
    font-weight: 200;
    height: 56px;
    position: relative;
}

@media (max-width:23.4275em) {
    .c-date-range-field__display {
        margin-bottom: 8px;
    }
}

@media (min-width:23.4375em) {
    .c-date-range-field__display {
        width: 132px;
    }
}

.c-date-range-field__display-label {
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 800;
    left: 12px;
    line-height: 16px;
    position: absolute;
    text-transform: uppercase;
    top: 8px;
}

@media (max-width:73.115em) {
    .c-date-range-field__overlay {
        display: block;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 99990;
    }
}

.c-date-range-field__overlay {
    -ms-flex-pack: end;
    background: #0a082799;
    display: -ms-flexbox;
    display: flex;
    height: 100vh;
    justify-content: flex-end;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 99999;
}

.c-date-range-field__picker {
    background: #fff;
    border: 1px solid #dfdee8;
    border-radius: 6px;
    left: 16px;
    position: absolute;
    top: 140px;
    width: calc(100% - 32px);
    z-index: 99999;
}

@media (min-width:48em) {
    .c-date-range-field__picker {
        left: calc(50% - 324px);
        max-width: 648px;
    }
}

.c-date-range-field__picker-footer {
    -ms-flex-pack: justify;
    -ms-flex-align: center;
    align-items: center;
    border-top: 1px solid #dfdee8;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    padding: 16px;
    text-align: right;
}

.c-date-range-field__picker .rdp {
    display: block;
    font-size: 16px;
}

.c-date-range-field__picker .rdp-day_disabled {
    pointer-events: none;
}

.c-date-range-field__picker .rdp-day_today {
    background: #f4f4f7;
    color: #0a0827;
    font-weight: 700;
}

.c-date-range-field__picker .rdp-day_today.rdp-day_disabled {
    color: #dee2e2;
}

.c-date-range-field__picker .rdp-day:not(.rdp-day_selected):not(.rdp-day_disabled):not(.rdp-day_outside):hover {
    background-color: #fcedd1!important;
}

.c-date-range-field__picker .rdp-day_selected:not(.rdp-day_range_start):not(.rdp-day_range_end):not(.rdp-day_outside) {
    background-color: #fcedd1!important;
    color: #0a0827;
}

.c-date-range-field__picker .rdp-day {
    border-radius: 0!important;
}

.c-date-range-field__picker .rdp-day_range_start {
    border-bottom-left-radius: 50%!important;
    border-top-left-radius: 50%!important;
}

.c-date-range-field__picker .rdp-day_range_end {
    border-bottom-right-radius: 50%!important;
    border-top-right-radius: 50%!important;
}

.c-date-range-field__picker .rdp-day {
    font-size: 12px;
    height: 40px;
    padding: 11px;
    width: 40px;
}

.c-date-range-field__picker .rdp-button:active:not(.rdp-day_selected),.c-date-range-field__picker .rdp-button:focus:not(.rdp-day_selected) {
    background-color: #fff;
    border: none!important;
}

.c-date-range-field__picker .rdp-day_selected:not(.rdp-day_disabled):not(.rdp-day_outside) {
    background-color: #f2a33a;
    border-color: #0000;
    color: #0a0827;
}

.c-date-range-field__picker .rdp-day_selected:not(.rdp-day_disabled):not(.rdp-day_outside):hover {
    background-color: #f2a33a!important;
    border-color: #0000;
}

.c-date-range-field__picker .rdp-head_cell {
    color: #8b9898;
    font-size: .875em;
    font-weight: 400;
}

.c-date-range-field__picker .rdp-caption_label {
    -ms-flex-pack: center;
    font-size: 16px;
    justify-content: center;
    width: 100%;
}

.c-date-range-field__picker .rdp-nav {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    left: 0;
    padding: 8px;
    position: absolute;
    top: -16px!important;
    width: 100%;
    z-index: 1;
}

.c-date-range-field__picker .rdp-multiple_months .rdp-nav {
    padding: 8px 0;
    transform: none;
}

.c-date-range-field__picker .rdp-multiple_months .rdp-caption_end .rdp-nav {
    -ms-flex-pack: end;
    justify-content: flex-end;
    right: 0;
}

.c-date-range-field__picker .rdp-nav_button {
    border-radius: 6px;
}

.c-date-range-field__picker .rdp-nav_button:hover:not([disabled]) {
    background-color: #f4f4f7;
}

.c-date-range-field__picker .rdp-nav_button:active:not([disabled]),.c-date-range-field__picker .rdp-nav_button:focus:not([disabled]) {
    background-color: #f4f4f7;
    border: none;
}

.c-date-range-field__picker .rdp-months {
    -ms-flex-pack: center;
    justify-content: center;
    position: relative;
}

.c-date-range-field__footer {
    -ms-flex-pack: justify;
    border-top: 1px solid #dfdee8;
    display: block;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    padding: 16px;
}

.c-date-range-field__footer .c-btn:not(.c-btn--cta) {
    font-weight: 500;
}

.c-date-range-field__footer .c-btn--cta {
    cursor: pointer;
    padding: 12px 48px;
}

.c-date-range-field__button {
    background-image: url(build/images/icons/16px/dark/arrow-right.adad23de.svg);
    background-position: 8px;
    background-repeat: no-repeat;
    background-size: 16px;
    cursor: pointer;
    height: 32px;
    position: absolute;
    top: 16px;
    width: 32px;
}

.c-date-range-field__button--prev {
    left: 16px;
}

.c-date-range-field__button--next {
    right: 16px;
}

.c-text-field {
    display: block;
}

.c-text-field.is-hidden {
    clip: rect(0 0 0 0)!important;
    border: 0!important;
    -webkit-clip-path: inset(50%)!important;
    clip-path: inset(50%)!important;
    height: 1px!important;
    margin: -1px!important;
    overflow: hidden!important;
    padding: 0!important;
    position: absolute!important;
    white-space: nowrap!important;
    width: 1px!important;
}

.c-text-field__input-container {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    position: relative;
}

.c-text-field.is-disabled .c-text-field__input-container {
    background-color: #f4f4f7;
}

.c-text-field--prefix .c-text-field__input-container:before {
    content: attr(data-prefix);
    font-weight: 500;
}

.c-text-field--suffix .c-text-field__input-container:after {
    content: attr(data-suffix);
    font-weight: 500;
}

.c-text-field--w-inner-label .c-text-field__input-container {
    -ms-flex-align: end;
    align-items: flex-end;
    background-position: bottom 12px right 16px;
    height: 64px;
    padding-left: 16px;
    padding-right: 16px;
}

.c-text-field__inner-label {
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 800;
    left: 16px;
    letter-spacing: 1px;
    line-height: 16px;
    position: absolute;
    text-transform: uppercase;
    top: 11px;
}

.c-text-field__input {
    -webkit-appearance: none;
    appearance: none;
    background: #0000;
    border: none;
    -ms-flex: 1;
    flex: 1;
    font-family: DM Sans,sans-serif;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.25;
    min-height: 28px;
    width: 0;
}

.c-text-field__input:focus {
    outline: none;
}

.c-text-field__input::-ms-clear {
    display: none;
}

.c-text-field.is-disabled .c-text-field__input {
    color: #0a082780;
}

.c-input--lg .c-text-field__input {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-text-field__input::-webkit-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-text-field__input::placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-text-field__input:-ms-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-text-field__input::-ms-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-text-field__error-message {
    background: #f2d2d5;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    color: #be1e2d;
    display: block;
    font-size: 13px;
    font-size: .7222222rem;
    font-weight: 500;
    line-height: 1.5384615;
    margin: -6px 0 8px;
    padding: 10px 8px 4px;
}

.c-number-field.is-hidden {
    clip: rect(0 0 0 0)!important;
    border: 0!important;
    -webkit-clip-path: inset(50%)!important;
    clip-path: inset(50%)!important;
    height: 1px!important;
    margin: -1px!important;
    overflow: hidden!important;
    padding: 0!important;
    position: absolute!important;
    white-space: nowrap!important;
    width: 1px!important;
}

.c-number-field__input-container {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    position: relative;
}

.c-number-field.is-disabled .c-number-field__input-container {
    background-color: #f4f4f7;
}

.c-number-field--prefix .c-number-field__input-container:before {
    content: attr(data-prefix);
    font-weight: 500;
}

.c-number-field.is-disabled .c-number-field__input-container:before {
    color: #0a082780;
}

.c-number-field--suffix .c-number-field__input-container:after {
    content: attr(data-suffix);
    font-weight: 500;
}

.c-number-field.is-disabled .c-number-field__input-container:after {
    color: #0a082780;
}

.c-number-field__button-minus,.c-number-field__button-plus {
    background: none;
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 12px;
    border: none;
    cursor: pointer;
    height: 16px;
    width: 16px;
}

.c-number-field__button-minus {
    background-image: url(build/images/icons/16px/dark/minus.9d5e791c.svg);
}

.c-number-field__button-plus {
    background-image: url(build/images/icons/16px/dark/plus.5f0e14b2.svg);
}

.c-number-field__input {
    -webkit-appearance: none;
    appearance: none;
    -moz-appearance: textfield;
    background: #0000;
    border: none;
    -ms-flex: 1;
    flex: 1;
    font-family: DM Sans,sans-serif;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.25;
    margin: 0;
    min-height: 28px;
    width: 0;
}

.c-number-field__input::-webkit-inner-spin-button,.c-number-field__input::-webkit-outer-spin-button {
    -webkit-appearance: none;
    appearance: none;
    margin: 0;
}

.c-number-field__input:focus {
    outline: none;
}

.c-number-field.is-disabled .c-number-field__input {
    color: #0a082780;
}

.c-input--lg .c-number-field__input {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-number-field__input::-webkit-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-number-field__input::placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-number-field__input:-ms-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-number-field__input::-ms-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-number-field--buttons .c-number-field__input {
    text-align: center;
}

.c-checkbox-field {
    -ms-flex-align: center;
    align-items: center;
    cursor: pointer;
    display: -ms-flexbox;
    display: flex;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 20px;
    margin-bottom: 4px;
    padding: 4px;
}

.c-checkbox-field.c-checkbox-field--full {
    width: 100%;
}

.c-checkbox-field.c-checkbox-field--left {
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.c-checkbox-field.c-checkbox-field--no-bg {
    padding-left: 0;
}

.c-checkbox-field.is-checked {
    background-color: #2622621a;
    border-radius: 8px;
    font-weight: 900;
}

.c-checkbox-field.is-checked.c-checkbox-field--no-bg {
    background: none;
    font-weight: 500;
    padding-left: 0;
}

.c-checkbox-field__input {
    -ms-flex-align: center;
    -ms-flex-negative: 0;
    align-items: center;
    appearance: none;
    -webkit-appearance: none;
    background-color: #fff;
    border: 1px solid #dfdee8;
    border-radius: 8px;
    display: -ms-flexbox;
    display: flex;
    flex-shrink: 0;
    height: 24px;
    margin-right: 12px;
    padding: 0;
    transition: all .3s linear;
    vertical-align: middle;
    width: 24px;
}

.c-checkbox-field--left .c-checkbox-field__input {
    margin-left: 12px;
    margin-right: 0;
}

.c-checkbox-field__input:hover {
    border: 1px solid #262262;
    cursor: pointer;
}

.c-checkbox-field__input:checked {
    background-color: #262262;
    border: 1px solid #262262;
    position: relative;
}

.c-checkbox-field__input:checked:after {
    border: solid #fff;
    border-width: 0 3px 3px 0;
    color: #fff;
    content: "";
    display: -ms-flexbox;
    display: flex;
    height: 13px;
    margin: 0 auto;
    position: relative;
    text-align: center;
    top: -2px;
    transform: rotate(45deg);
    vertical-align: middle;
    width: 8px;
}

.c-checkbox-field__input:focus {
    outline: none;
}

.c-checkbox-field__input:disabled {
    background-color: #dfdee8;
    border: 1px solid #dfdee8;
    cursor: auto;
}

.c-checkbox-field--button {
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/plus.5f0e14b2.svg);
    background-position: left 8px top 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    border: none;
    border-radius: 8px;
    box-shadow: inset 0 0 0 2px #dfdee8,0 2px 4px 0 #2622620d;
    color: #0a0827;
    display: inline-block;
    font-family: inherit;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 900;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 24px;
    padding: 8px 12px 8px 32px;
    text-align: center;
    text-decoration: none;
    text-transform: none;
}

.c-checkbox-field--button.is-checked {
    background-color: #262262;
    background-image: url(build/images/icons/16px/dark/check.f81dfa2f.svg);
    box-shadow: 0 2px 4px 0 #2622620d;
    color: #fff;
}

.c-checkbox-field--button.is-disabled {
    background-color: #f4f4f7;
}

.c-checkbox-field--button .c-checkbox-field__input {
    cursor: pointer;
    height: 0;
    opacity: 0;
    position: absolute;
    width: 0;
}

.c-checkbox-field--ball {
    -ms-flex-line-pack: center;
    -ms-flex-pack: center;
    align-content: center;
    background-color: #fff;
    border-radius: 100%;
    box-shadow: inset 0 0 0 1px #0a0827cc;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 700;
    height: 40px;
    justify-content: center;
    line-height: 1.1428571;
    margin-bottom: 8px;
    margin-right: 8px;
    text-align: center;
    transition: opacity .15s ease-in-out;
    width: 40px;
}

@supports (display:grid) {
    .c-checkbox-field--ball {
        margin: 0;
    }
}

.c-checkbox-field--ball.is-checked {
    background-color: #413e5b;
    background-image: radial-gradient(circle at top,#ffffff26 30%,#fff0 75%);
    border-radius: 100%;
    box-shadow: inset 0 0 0 1px #413e5b;
    color: #fff;
}

.c-checkbox-field--ball.is-disabled {
    opacity: .5;
}

.c-checkbox-field--ball .c-checkbox-field__input {
    cursor: pointer;
    height: 0;
    opacity: 0;
    position: absolute;
    width: 0;
}

.c-checkbox-field--ball.c-checkbox-field--red.is-checked {
    background-color: #be1e2d;
    box-shadow: inset 0 0 0 1px #be1e2d;
}

.c-checkbox-field--ball.c-checkbox-field--yellow.is-checked {
    background-color: #ff9e00;
    box-shadow: inset 0 0 0 1px #ff9e00;
    color: #0a0827;
}

.c-checkbox-field--toggle .c-checkbox-field__input {
    background-color: #dfdee8;
    border: none;
    border-radius: 9999px;
    height: 26px;
    padding: 4px;
    position: relative;
    transition: all .15s ease-in-out;
    vertical-align: middle;
    width: 48px;
}

.c-checkbox-field--toggle .c-checkbox-field__input:after {
    background-color: #fff;
    border: none;
    border-radius: 50%;
    content: "";
    display: block;
    height: 20px;
    position: absolute;
    top: 3px;
    transform: translateX(0);
    transition: all .15s ease-in-out;
    width: 20px;
}

.c-checkbox-field--toggle .c-checkbox-field__input:hover {
    background-color: #0a082733;
    cursor: pointer;
}

.c-checkbox-field--toggle .c-checkbox-field__input:checked {
    background-color: #68c554;
}

.c-checkbox-field--toggle .c-checkbox-field__input:checked:after {
    transform: translateX(20px);
    transition: all .15s ease-in-out;
}

.c-checkbox-group {
    margin-bottom: 0;
}

.c-checkbox-group__legend {
    color: #0a0827;
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 900;
    letter-spacing: 1.25px;
    line-height: 12px;
    margin-bottom: 8px;
    text-transform: uppercase;
}

.c-checkbox-group .c-checkbox-field--button {
    margin-bottom: 8px;
    margin-right: 4px;
}

.c-checkbox-group--ball .c-checkbox-group__fields {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

@supports (display:grid) {
    .c-checkbox-group--ball .c-checkbox-group__fields {
        grid-column-gap: 8px;
        grid-row-gap: 8px;
        column-gap: 8px;
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(44px,1fr));
        row-gap: 8px;
    }
}

.c-checkbox-group__min-display {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 1px;
    line-height: 20px;
    margin-top: 8px;
    text-decoration: none;
    text-transform: uppercase;
}

.c-checkbox-group__min-display-icon {
    height: 16px;
    margin-left: 8px;
    width: 16px;
}

.c-checkbox-group__min-display-icon svg path:not(.check-circle__check) {
    fill: #dfdee8!important;
}

.c-checkbox-group__min-display.is-complete .c-checkbox-group__min-display-icon svg path:not(.check-circle__check) {
    fill: #008874!important;
}

.c-checkbox-group__reset {
    background: none;
    border: 0;
    color: #0a0827;
    cursor: pointer;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    letter-spacing: 1.25px;
    line-height: 1.4285714;
    margin-top: 16px;
    padding: 0;
    text-align: left;
    text-transform: uppercase;
    transition: color .15s ease-in-out;
}

.c-checkbox-group__reset:hover {
    border-bottom: 1px solid;
}

.c-checkbox-group__reset.is-disabled {
    color: #0a082766;
    cursor: default;
}

.c-checkbox-group__reset.is-disabled:hover {
    border-bottom: none;
}

.c-radio-field {
    cursor: pointer;
}

.c-radio-field--standard {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 20px;
    padding: 8px;
    text-align: left;
}

.c-radio-field--standard.is-checked {
    background-color: #2622621a;
    border-radius: 8px;
    font-weight: 900;
}

.c-radio-field--standard .c-radio-field__input {
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;
    border: 1px solid #dfdee8;
    border-radius: 50%;
    height: 32px;
    margin-right: 12px;
    transition: all .3s linear;
    vertical-align: middle;
    width: 32px;
}

.c-radio-field--standard .c-radio-field__input:hover {
    border: 1px solid #262262;
    cursor: pointer;
}

.c-radio-field--standard .c-radio-field__input:checked {
    background-color: #262262;
    border: 1px solid #262262;
    box-shadow: inset 0 0 0 8px #fff;
}

.c-radio-field--standard .c-radio-field__input:focus {
    outline: none;
}

.c-radio-field--sm .c-radio-field__input {
    height: 24px;
    width: 24px;
}

.c-radio-field--sm .c-radio-field__input:checked {
    background-color: #262262;
    border: 1px solid #262262;
    box-shadow: inset 0 0 0 4px #fff;
}

.c-radio-field--button {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #fff;
    border: none;
    border-radius: 8px;
    box-shadow: inset 0 0 0 2px #dfdee8,0 2px 4px 0 #2622620d;
    box-shadow: inset 0 0 0 2px #dfdee8;
    color: #0a0827;
    display: -ms-inline-flexbox;
    display: inline-flex;
    font-family: inherit;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 900;
    font-weight: 500;
    justify-content: center;
    letter-spacing: 0;
    line-height: 24px;
    min-width: 40px;
    padding: 8px 12px;
    text-decoration: none;
    text-transform: none;
    transition: background-color .3s ease-in-out,color .3s ease-in-out;
}

.c-radio-field--button.is-checked {
    background-color: #262262;
    box-shadow: 0 2px 4px 0 #2622620d;
    color: #fff;
}

@media print {
    .c-radio-field--button.is-checked {
        box-shadow: inset 0 0 0 2px #262262;
    }
}

.c-radio-field--button.is-disabled {
    background-color: #f4f4f7;
}

.c-radio-field--button .c-radio-field__input {
    clip: rect(0 0 0 0)!important;
    border: 0!important;
    -webkit-clip-path: inset(50%)!important;
    clip-path: inset(50%)!important;
    height: 1px!important;
    margin: -1px!important;
    overflow: hidden!important;
    padding: 0!important;
    position: absolute!important;
    position: relative!important;
    white-space: nowrap!important;
    width: 1px!important;
}

.c-radio-group {
    margin-bottom: 0;
}

.c-radio-group__legend {
    color: #0a0827;
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 900;
    letter-spacing: 1.25px;
    line-height: 12px;
    text-transform: uppercase;
}

.c-radio-group .c-radio-field--button {
    margin-bottom: 8px;
    margin-right: 4px;
}

@media (min-width:23.4375em) {
    .c-radio-group .c-radio-field--button {
        margin-right: 8px;
    }
}

.c-selector-table__controls,.c-selector-table__toggles {
    -ms-flex-align: center;
    align-items: center;
    background-color: #0a0827;
    border-bottom: 1px solid #ffffff1a;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    color: #fff;
    display: -ms-flexbox;
    display: flex;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.5;
    padding: 12px 16px;
    text-align: left;
}

.c-selector-table--no-radius .c-selector-table__controls,.c-selector-table--no-radius .c-selector-table__toggles {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    padding-left: 0;
    padding-right: 0;
}

.c-selector-table__controls .c-carousel,.c-selector-table__toggles .c-carousel {
    width: auto;
}

.c-selector-table--no-radius .c-selector-table__controls .c-carousel__item:first-child,.c-selector-table--no-radius .c-selector-table__toggles .c-carousel__item:first-child {
    padding-left: 16px;
}

.c-selector-table--no-radius .c-selector-table__controls .c-radio-group__legend+.c-carousel>.c-carousel__item:first-child,.c-selector-table--no-radius .c-selector-table__toggles .c-radio-group__legend+.c-carousel>.c-carousel__item:first-child {
    padding-left: 0;
}

.c-selector-table__controls .c-carousel__item:last-child,.c-selector-table__toggles .c-carousel__item:last-child {
    padding-right: 16px!important;
}

.c-selector-table__controls .c-radio-group__legend,.c-selector-table__toggles .c-radio-group__legend {
    color: #0a0827cc;
    color: #fff;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 1.5;
    margin-bottom: 0;
    margin-right: 16px;
    text-transform: none;
    white-space: pre;
}

.c-selector-table--no-radius .c-selector-table__controls .c-radio-group__legend,.c-selector-table--no-radius .c-selector-table__toggles .c-radio-group__legend {
    margin-left: 16px;
}

.c-selector-table__controls .c-radio-field,.c-selector-table__toggles .c-radio-field {
    background-color: #413e5b;
    box-shadow: none;
    color: #fff;
    margin-bottom: 0!important;
    transition: background-color .3s ease-in-out,color .3s ease-in-out;
}

.c-selector-table__controls .c-radio-field.is-checked,.c-selector-table__toggles .c-radio-field.is-checked {
    background-color: #fff;
    color: #0a0827;
}

.c-selector-table__label {
    margin-bottom: 0;
    margin-right: 12px;
}

.c-selector-table__control {
    margin-right: 8px;
}

.c-selector-table__control:last-of-type {
    margin-right: 0;
}

.c-selector-table__table thead,.c-selector-table__table thead th {
    border-top: 0;
}

.c-selector-table__table thead tr:first-of-type th:first-child,.c-selector-table__table thead tr:first-of-type th:last-child {
    border-radius: 0;
}

.c-selector-table__table--hidden {
    display: none;
}

@media (min-width:48em) {
    .c-selector-table__controls,.c-selector-table__toggles {
        padding: 12px 20px;
    }

    .c-selector-table__table table {
        table-layout: fixed;
    }

    .c-selector-table--flush .c-selector-table__controls,.c-selector-table--flush .c-selector-table__table :last-child>:last-child>td:first-child,.c-selector-table--flush .c-selector-table__table :last-child>:last-child>td:last-child {
        border-radius: 0;
    }
}

.c-bar-chart {
    display: -ms-flexbox;
    display: flex;
    height: 350px;
    position: relative;
    width: 100%;
}

@media (min-width:48em) {
    .c-bar-chart {
        height: 370px;
    }
}

.c-bar-chart__bars {
    -ms-flex-pack: justify;
    -ms-flex-align: end;
    align-items: flex-end;
    display: -ms-flexbox;
    display: flex;
    height: 350px;
    justify-content: space-between;
    padding-bottom: 64px;
    padding-left: 48px;
    padding-top: 8px;
    width: 100%;
    z-index: 2;
}

@media (min-width:48em) {
    .c-bar-chart__bars {
        height: 370px;
    }
}

.c-bar-chart__bar {
    -ms-flex-pack: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    height: 100%;
    justify-content: center;
    transform-origin: bottom;
}

.c-bar-chart__bar:after {
    background: linear-gradient(180deg,#ff9e00,#ff9e0080);
    content: "";
    height: 100%;
    width: 16px;
}

@media (min-width:48em) {
    .c-bar-chart__bar:after {
        width: 24px;
    }
}

@media (min-width:73.125em) {
    .c-bar-chart__bar:after {
        width: 32px;
    }
}

.c-bar-chart__x-axis {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100%;
    padding-left: 48px;
    position: absolute;
    width: 100%;
}

.c-bar-chart__x-axis-labels {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
}

.c-bar-chart__x-axis-label {
    -ms-flex: 1;
    flex: 1;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.3333333;
    margin-top: 8px;
    text-align: center;
    text-transform: uppercase;
}

.c-bar-chart__x-axis-lines {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1;
    flex: 1;
    height: 100%;
    justify-content: space-between;
}

.c-bar-chart__x-axis-line {
    -ms-flex-pack: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1;
    flex: 1;
    height: 100%;
    justify-content: center;
}

.c-bar-chart__x-axis-line:after {
    background: #dfdee8;
    content: "";
    height: 100%;
    width: 1px;
}

.c-bar-chart__x-axis-title {
    display: block;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.3333333;
    margin-top: 16px;
    text-align: center;
    text-transform: uppercase;
    width: 100%;
}

.c-bar-chart__y-axis {
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-bottom: 56px;
    position: absolute;
    width: 100%;
}

.c-bar-chart__y-axis-labels {
    -ms-flex-pack: justify;
    -ms-flex-align: end;
    align-items: flex-end;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100%;
    justify-content: space-between;
    width: 48px;
}

.c-bar-chart__y-axis-label {
    -ms-flex-align: center;
    align-items: center;
    display: block;
    display: -ms-flexbox;
    display: flex;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.3333333;
    padding-right: 12px;
    text-transform: uppercase;
}

.c-bar-chart__y-axis-lines {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1;
    flex: 1;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100%;
    justify-content: space-between;
}

.c-bar-chart__y-axis-line {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    height: 16px;
    width: 100%;
}

.c-bar-chart__y-axis-line:after {
    background: #dfdee8;
    content: "";
    height: 1px;
    width: 100%;
}

.c-carousel {
    width: 100%;
}

.c-carousel:not(.c-carousel--disabled) {
    -ms-overflow-style: none;
    cursor: grab;
    display: -ms-flexbox;
    display: flex;
    margin: -16px 0;
    overflow-x: scroll;
    overflow: -moz-scrollbars-none;
    overscroll-behavior-x: contain;
    padding: 16px 0;
    scrollbar-width: none;
}

.c-carousel:not(.c-carousel--disabled)::-webkit-scrollbar {
    display: none;
}

.c-carousel:not(.c-carousel--disabled) .c-carousel__item {
    -ms-flex-preferred-size: auto;
    display: -ms-flexbox;
    display: flex;
    flex-basis: auto;
    min-height: 100%;
    padding-right: 16px;
    scroll-snap-align: start;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.c-carousel:not(.c-carousel--disabled) .c-carousel__item:last-child {
    padding-right: 0;
}

.c-carousel.is-dragging {
    cursor: grabbing;
}

.c-carousel.c-carousel--snap-scroll:not(.c-carousel--disabled) {
    scroll-padding: 0 16px;
    -webkit-scroll-snap-type: x mandatory;
    -ms-scroll-snap-type: x mandatory;
    scroll-snap-type: x mandatory;
}

@media (min-width:48em) {
    .c-carousel.c-carousel--snap-scroll:not(.c-carousel--disabled) {
        scroll-padding: 0 24px;
    }
}

@media (min-width:73.125em) {
    .c-carousel.c-carousel--snap-scroll:not(.c-carousel--disabled) {
        scroll-padding: 0 calc(50vw - 585px);
    }
}

.c-carousel.c-carousel--w-container:not(.c-carousel--disabled) .c-carousel__item:nth-last-child(2) {
    padding-right: 0;
}

.c-carousel.c-carousel--w-container:not(.c-carousel--disabled) .c-carousel__buffer {
    padding-left: 8px;
}

@media (min-width:48em) {
    .c-carousel.c-carousel--w-container:not(.c-carousel--disabled) .c-carousel__buffer {
        padding-left: 24px;
    }
}

@media (min-width:73.125em) {
    .c-carousel.c-carousel--w-container:not(.c-carousel--disabled) .c-carousel__buffer {
        padding-left: calc(50% - 585px);
    }
}

.c-carousel-controls {
    position: relative;
}

.c-carousel-controls.is-at-end:not(.c-carousel-controls--disabled):after,.c-carousel-controls.is-at-start:not(.c-carousel-controls--disabled):before {
    content: none;
}

.c-carousel-controls:not(.c-carousel-controls--disabled) .c-carousel-controls__buttons {
    bottom: 100%;
    position: absolute;
    right: 8px;
}

@media (min-width:48em) {
    .c-carousel-controls:not(.c-carousel-controls--disabled) .c-carousel-controls__buttons {
        right: 24px;
    }
}

.c-carousel-controls:not(.c-carousel-controls--disabled) .c-carousel-controls__button {
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    height: 32px;
    padding: 8px;
    width: 32px;
}

.c-carousel-controls:not(.c-carousel-controls--disabled) .c-carousel-controls__button.is-disabled {
    opacity: .5;
    pointer-events: none;
}

.c-carousel-controls:not(.c-carousel-controls--disabled) .c-carousel-controls__button--prev {
    background-image: url(build/images/icons/16px/light/arrow-left.1bea3f5a.svg);
    margin-right: 4px;
}

.c-carousel-controls:not(.c-carousel-controls--disabled) .c-carousel-controls__button--next {
    background-image: url(build/images/icons/16px/light/arrow-right.a99e7505.svg);
}

.c-carousel-controls:not(.c-carousel-controls--disabled) .c-carousel-controls__carousel {
    -ms-overflow-style: none;
    cursor: grab;
    display: -ms-flexbox;
    display: flex;
    margin: -16px 0;
    overflow-x: scroll;
    overflow: -moz-scrollbars-none;
    overscroll-behavior-x: contain;
    padding: 16px 0;
    scrollbar-width: none;
}

.c-carousel-controls:not(.c-carousel-controls--disabled) .c-carousel-controls__carousel::-webkit-scrollbar {
    display: none;
}

.c-carousel-controls:not(.c-carousel-controls--disabled) .c-carousel-controls__item {
    -ms-flex-preferred-size: auto;
    display: -ms-flexbox;
    display: flex;
    flex-basis: auto;
    min-height: 100%;
    padding-right: 16px;
    scroll-snap-align: start;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.c-carousel-controls:not(.c-carousel-controls--disabled) .c-carousel-controls__item:last-child {
    padding-right: 0;
}

.c-carousel-controls:not(.c-carousel-controls--disabled) .c-carousel-controls__container {
    height: 100%;
    pointer-events: none;
    position: absolute;
    top: 0;
    width: 100%;
}

.c-carousel-controls.is-dragging .c-carousel-controls__carousel {
    cursor: grabbing;
}

.c-carousel-controls.c-carousel-controls--snap-scroll:not(.c-carousel-controls--disabled) .c-carousel-controls__carousel {
    scroll-padding: 0 16px;
    -webkit-scroll-snap-type: x mandatory;
    -ms-scroll-snap-type: x mandatory;
    scroll-snap-type: x mandatory;
}

@media (min-width:48em) {
    .c-carousel-controls.c-carousel-controls--snap-scroll:not(.c-carousel-controls--disabled) .c-carousel-controls__carousel {
        scroll-padding: 0 24px;
    }
}

@media (min-width:73.125em) {
    .c-carousel-controls.c-carousel-controls--snap-scroll:not(.c-carousel-controls--disabled) .c-carousel-controls__carousel {
        scroll-padding: 0 calc(50vw - 585px);
    }
}

.c-carousel-controls.c-carousel-controls--w-container:not(.c-carousel-controls--disabled) .c-carousel-controls__item:nth-last-child(2) {
    padding-right: 0;
}

.c-carousel-controls.c-carousel-controls--w-container:not(.c-carousel-controls--disabled) .c-carousel-controls__buffer {
    padding-left: 8px;
}

@media (min-width:48em) {
    .c-carousel-controls.c-carousel-controls--w-container:not(.c-carousel-controls--disabled) .c-carousel-controls__buffer {
        padding-left: 24px;
    }
}

@media (min-width:73.125em) {
    .c-carousel-controls.c-carousel-controls--w-container:not(.c-carousel-controls--disabled) .c-carousel-controls__buffer {
        padding-left: calc(50% - 585px);
    }
}

.c-carousel-controls.c-carousel-controls--w-container:not(.c-carousel-controls--disabled) .c-carousel-controls__frame {
    background: #ffffffd9;
    height: 100%;
    position: absolute;
    top: 0;
    width: calc(50% - 585px);
    z-index: 10;
}

.c-carousel-controls.c-carousel-controls--w-container:not(.c-carousel-controls--disabled) .c-carousel-controls__frame--left {
    left: 0;
}

.c-carousel-controls.c-carousel-controls--w-container:not(.c-carousel-controls--disabled) .c-carousel-controls__frame--right {
    right: 0;
}

.c-carousel-controls.c-carousel-controls--w-container:not(.c-carousel-controls--disabled) .c-carousel-controls__container {
    left: 0;
    margin-left: 16px;
    max-width: 1170px;
    width: calc(100% - 32px);
}

@media (min-width:48em) {
    .c-carousel-controls.c-carousel-controls--w-container:not(.c-carousel-controls--disabled) .c-carousel-controls__container {
        margin-left: 16px;
        width: calc(100% - 48px);
    }
}

@media (min-width:73.125em) {
    .c-carousel-controls.c-carousel-controls--w-container:not(.c-carousel-controls--disabled) .c-carousel-controls__container {
        margin-left: calc(50% - 585px);
        width: 100%;
    }
}

.c-carousel-controls.c-carousel-controls--w-container.c-carousel-controls--on-background:not(.c-carousel-controls--disabled) .c-carousel-controls__frame {
    background: #f4f4f7d9;
}

.c-pagination__counter,.c-pagination__end {
    color: #0a082799;
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    letter-spacing: 1.25px;
    line-height: 1.4285714;
    padding-bottom: 6px;
    padding-top: 6px;
    text-align: center;
    text-transform: uppercase;
}

.c-archive-filter-sheet {
    -ms-flex-pack: end;
    display: -ms-flexbox;
    display: flex;
    display: none;
    height: 100vh;
    justify-content: flex-end;
    opacity: 0;
    position: fixed;
    right: 0;
    top: 0;
    width: 100%;
    z-index: 99999;
}

@media (min-width:48em) {
    .c-archive-filter-sheet {
        display: inline-block!important;
        height: auto;
        opacity: 1!important;
        position: relative;
        width: auto;
        z-index: auto;
    }
}

.c-archive-filter-sheet__bg {
    background: #0a082799;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

@media (min-width:48em) {
    .c-archive-filter-sheet__bg {
        display: none;
    }
}

.c-archive-filter-sheet__button {
    cursor: pointer;
    width: 100%;
}

@media (min-width:48em) {
    .c-archive-filter-sheet__button {
        display: none;
    }
}

@media (max-width:47.99em) {
    .c-archive-filter-sheet__inner {
        background-color: #fff;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        height: 100vh;
        padding-right: 200px;
        position: absolute;
        right: -200px;
        transform: translate(100vw);
        width: calc(100% + 152px);
    }
}

@media (min-width:48em) {
    .c-archive-filter-sheet__inner {
        transform: none!important;
    }
}

.c-archive-filter-sheet__header {
    -ms-flex-pack: justify;
    box-shadow: inset 0 -1px 0 0 #dfdee8;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    line-height: 1;
    padding: 11px 16px;
}

@media (min-width:48em) {
    .c-archive-filter-sheet__header {
        display: none;
    }
}

.c-archive-filter-sheet__title {
    display: block;
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 900;
    height: 100%;
    line-height: 24px;
}

.c-archive-filter-sheet__close-btn {
    background-color: initial;
    background-image: url(build/images/icons/16px/light/close.a12e8f7e.svg);
    margin: 12px;
    position: absolute;
    right: 100%;
    top: 0;
}

@media (max-width:47.99em) {
    .c-archive-filter-sheet__body {
        -webkit-overflow-scrolling: touch;
        height: 100%;
        overflow-y: scroll;
        overscroll-behavior-y: contain;
        position: relative;
    }
}

@media (min-width:48em) {
    .c-archive-filter-sheet__body {
        display: -ms-flexbox;
        display: flex;
    }
}

@media (max-width:47.99em) {
    .c-archive-filter-sheet__body-section {
        padding: 16px;
    }

    .c-archive-filter-sheet__body-section--date-range {
        border-top: 1px solid #dfdee8;
    }
}

@media (min-width:48em) {
    .c-archive-filter-sheet__body-section {
        padding-right: 8px;
    }
}

@media (max-width:47.99em) {
    .c-archive-filter-sheet__dropdown {
        width: 100%;
    }

    .c-archive-filter-sheet__dropdown .c-dropdown__button {
        -webkit-appearance: none;
        appearance: none;
        background: none;
        border: 0;
        box-shadow: none;
        cursor: default;
        font-size: 14px;
        font-size: .7777778rem;
        letter-spacing: 1.25px;
        line-height: 24px;
        padding: 0 0 8px 8px;
        pointer-events: none;
        text-transform: uppercase;
    }

    .c-archive-filter-sheet__dropdown .c-dropdown__target {
        background: none;
        border: 0;
        box-shadow: none;
        display: block;
        overflow: visible;
        padding: 0;
        position: relative;
    }
}

@media (min-width:48em) {
    .c-archive-filter-sheet__dropdown.c-archive-filter-sheet__draws .c-dropdown__button {
        width: 131px;
    }

    .c-archive-filter-sheet__dropdown.c-archive-filter-sheet__days .c-dropdown__button {
        width: 220px;
    }
}

.c-archive-filter-sheet__checkbox-field {
    margin-bottom: 4px;
}

.c-archive-filter-sheet__checkbox-field:last-child {
    margin-bottom: 0;
}

.c-archive-filter-sheet__field-info {
    display: inline-block;
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 21px;
    margin-bottom: 8px;
}

.c-archive-filter-sheet__footer {
    background-color: #fff;
    bottom: 0;
    box-shadow: 0 -3px 8px 0 #0000000d;
    left: 0;
    padding: 16px;
    width: 100%;
}

@media (max-width:47.99em) {
    .c-archive-filter-sheet__footer {
        padding-bottom: 128px;
    }
}

@media (min-width:48em) {
    .c-archive-filter-sheet__footer {
        display: none;
    }
}

.c-archive-filter-sheet__date-range .c-dropdown__target {
    padding: 8px;
    white-space: normal;
}

.c-archive-filter-sheet .c-date-range-field {
    margin-bottom: 0!important;
}

@media (max-width:47.99em) {
    .c-archive-filter-sheet__days .c-dropdown__target-footer {
        display: none;
    }
}

.c-mini-quick-picks {
    position: relative;
}

.c-mini-quick-picks .c-content-card {
    overflow: visible;
}

.c-mini-quick-picks__link {
    box-shadow: none;
    color: #413e5b;
    margin-bottom: 16px;
    padding-bottom: 0;
    padding-left: 0;
    padding-top: 0;
}

.c-mini-quick-picks__link:focus,.c-mini-quick-picks__link:hover {
    box-shadow: none;
}

.c-mini-quick-picks__description {
    color: #413e5b;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 24px;
}

.c-mini-quick-picks__result-container {
    margin-bottom: -12px;
    margin-top: -16px;
    overflow: hidden;
    padding-bottom: 12px;
    padding-top: 16px;
}

@media (max-width:47.99em) {
    .c-mini-quick-picks__result-container {
        height: 80px;
        margin-bottom: 16px;
    }
}

.c-mini-quick-picks .c-result {
    max-width: none;
}

.c-mini-quick-picks .c-ball {
    font-size: 21px;
    font-size: 1.1666667rem;
    height: 40px;
    line-height: 1.1428571;
    width: 40px;
}

@media (min-width:23.4375em) {
    .c-mini-quick-picks .c-ball {
        font-size: 24px;
        font-size: 1.3333333rem;
        height: 48px;
        line-height: 1.1666667;
        width: 48px;
    }
}

@media (min-width:48em) {
    .c-mini-quick-picks .c-ball {
        font-size: 28px;
        font-size: 1.5555556rem;
        height: 64px;
        line-height: 24px;
        margin-right: 8px;
        width: 64px;
    }
}

.c-mini-quick-picks__button {
    background-color: #262262;
    background-image: url(build/images/icons/30px/light/reload.e2bb7ef0.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 30px;
    border: none;
    border-radius: 100%;
    cursor: pointer;
    height: 64px;
    margin-bottom: 6px;
    width: 64px;
}

@media (max-width:47.99em) {
    .c-mini-quick-picks__button {
        bottom: -32px;
        left: 16px;
        position: absolute;
    }
}

.c-content-area {
    position: relative;
}

.c-content-area--has-layers {
    overflow: hidden;
}

.c-content-area--has-layers:before {
    background-color: #0a082799;
    content: "";
    display: block;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 50;
}

.c-prize-sheet {
    background-image: linear-gradient(180deg,#ffffffbf 0,#fff 80px);
    display: block;
    height: 100%;
    width: 100%;
    z-index: 100;
    z-index: 99999;
}

.c-prize-sheet__body {
    padding-top: 16px;
}

@media (max-width:47.99em) {
    .c-prize-sheet__body {
        padding-bottom: 128px;
    }
}

.c-prize-sheet__header {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    margin: 0 16px;
    padding-bottom: 4px;
}

.c-prize-sheet__title {
    font-weight: 700;
}

.c-prize-sheet__sub-title,.c-prize-sheet__title {
    display: block;
    font-size: 21px;
    font-size: 1.1666667rem;
    line-height: 1.3333333;
}

.c-prize-sheet__media {
    -ms-flex-align: center;
    align-items: center;
    height: 48px;
    justify-self: flex-end;
    margin-left: auto;
    width: 48px;
}

.c-prize-sheet__result {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0 16px;
}

.c-prize-sheet__result--has-extra .c-prize-sheet__result-row {
    padding-bottom: 10px;
    padding-top: 12px;
}

.c-prize-sheet__result-row {
    -ms-flex-align: center;
    -ms-flex-pack: start;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: flex-start;
    padding: 12px 0;
    width: 100%;
}

.c-prize-sheet__result-row+.c-prize-sheet__result-row {
    box-shadow: inset 0 1px 0 0 #0a08270d;
}

.c-prize-sheet__prize {
    -ms-flex-pack: justify;
    box-shadow: inset 0 1px 0 0 #0a08270d,inset 0 -1px 0 0 #0a08270d;
    margin: 0 16px 24px;
    padding: 16px 0;
}

.c-prize-sheet__prize,.c-prize-sheet__prize-details {
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
}

.c-prize-sheet__prize-details {
    -ms-flex-item-align: center;
    -ms-flex-align: baseline;
    -ms-flex-pack: justify;
    align-items: baseline;
    align-self: center;
    margin-bottom: 0;
    width: 100%;
}

.c-prize-sheet__prize-label {
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 500;
    line-height: 1.7142857;
    margin-right: 8px;
    position: relative;
    text-align: right;
}

@media (min-width:23.4375em) {
    .c-prize-sheet__prize-label {
        font-size: 16px;
        font-size: .8888889rem;
        line-height: 1.5;
    }
}

.c-prize-sheet__prize-label:before {
    background-image: url(build/images/icons/24px/color/dollar.42d1b55f.svg);
    background-position: 50% 50%;
    background-size: 24px 24px;
    content: "";
    display: inline-block;
    height: 24px;
    margin-right: 8px;
    vertical-align: top;
    width: 24px;
}

.c-prize-sheet__prize-value {
    display: block;
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 700;
    line-height: 1.2380952;
    margin: 0;
    text-align: right;
}

.c-prize-sheet__prize-cash-value {
    color: #0a0827cc;
    display: block;
    font-size: 12px;
    font-size: .6666667rem;
    font-size: 13px;
    font-size: .7222222rem;
    font-weight: 500;
    line-height: 1.3333333;
    line-height: 1.5384615;
}

.c-prize-sheet__prize-sub-value {
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 500;
    line-height: 1.4285714;
}

.c-prize-sheet__wager-toggle {
    padding: 0 16px;
}

.c-prize-sheet__wager-label {
    font-size: 18px;
    font-size: 1rem;
    font-weight: 500;
    line-height: 1.3333333;
    margin-bottom: 12px;
}

.c-prize-sheet .c-selector-table__control {
    margin: 0;
    white-space: pre;
}

.c-prize-sheet__no-divs-message {
    margin: 0 16px;
}

.c-prize-sheet__playtype-multi {
    vertical-align: bottom;
}

.c-prize-sheet__playtype-orders {
    -ms-flex-pack: end;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    font-weight: 300;
    justify-content: flex-end;
}

.c-prize-sheet__playtype-order {
    display: inline-block;
    white-space: pre;
}

.c-prize-sheet__playtype-order:before {
    background-image: url(build/images/icons/16px/color/exact-match.ca22ae17.svg);
    content: "";
    display: inline-block;
    height: 16px;
    margin-right: 4px;
    position: relative;
    top: 2px;
    width: 16px;
}

.c-prize-sheet__playtype-order--any:before {
    background-image: url(build/images/icons/16px/color/any-order.c7de6c28.svg);
}

.c-prize-sheet__table-message {
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 1.4285714;
}

@media (min-width:73.125em) {
    .c-prize-sheet .c-prize-sheet__btn,.c-prize-sheet .c-prize-sheet__header,.c-prize-sheet .c-prize-sheet__result {
        margin: 0 32px;
    }

    .c-prize-sheet .c-prize-sheet__prize {
        margin: 0 0 24px;
        padding: 16px 32px;
    }

    .c-prize-sheet .c-prize-sheet__wager-toggle {
        padding: 0 32px;
    }

    .c-prize-sheet .c-table td:first-child,.c-prize-sheet .c-table th:first-child {
        padding-left: 32px;
    }

    .c-prize-sheet .c-table td:last-child,.c-prize-sheet .c-table th:last-child {
        padding-right: 32px;
    }

    .c-prize-sheet .c-table :last-child>:last-child>td:first-child {
        border-bottom-left-radius: 0;
    }

    .c-prize-sheet .c-table :last-child>:last-child>td:last-child {
        border-bottom-right-radius: 0;
    }
}

.c-horizontal-rule {
    background-color: #dfdee8;
    border: 0;
    height: 1px;
    width: 100%;
}

.c-horizontal-rule--adaptive {
    margin-left: -16px;
    margin-right: -16px;
    width: calc(100% + 32px);
}

.c-hot-cold-numbers-card__section {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-bottom: 24px;
}

.c-hot-cold-numbers-card__section-title {
    font-size: 18px;
    font-size: 1rem;
    line-height: 21.6px;
    margin-bottom: 12px;
}

.c-hot-cold-numbers-card .c-ball {
    font-size: 24px;
    font-size: 1.3333333rem;
    height: 48px;
    line-height: 24px;
    width: 48px;
}

.c-results-archive__retired-message {
    margin-top: 24px;
}

@media (min-width:73.125em) {
    .c-results-archive__retired-message {
        margin: 24px auto 0;
        max-width: 400px;
    }
}

.c-homepage-jackpot-stats-card {
    margin: 0;
}

.c-homepage-jackpot-stats-card__item {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    box-shadow: inset 0 1px 0 0 #dfdee8;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    justify-content: center;
    margin-left: -16px;
    margin-right: -16px;
    padding: 32px 16px;
}

.c-homepage-jackpot-stats-card__item:last-child {
    padding-bottom: 16px;
}

.c-homepage-jackpot-stats-card__item .c-meter {
    margin-bottom: 4px;
    margin-top: 10px;
}

.c-homepage-jackpot-stats-card__item-title {
    color: #626078;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    letter-spacing: 1.25px;
    line-height: 1.4285714;
    margin-bottom: 4px;
    text-transform: uppercase;
}

.c-homepage-jackpot-stats-card__item-text {
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 700;
    line-height: 1.2380952;
    line-height: 28px;
}

.c-homepage-biggest-jackpots-card__list {
    counter-reset: list;
    margin-left: -16px;
    margin-right: -16px;
}

.c-homepage-biggest-jackpots-card__list-item {
    -ms-flex-align: center;
    align-items: center;
    box-shadow: inset 0 1px 0 0 #dfdee8;
    display: -ms-flexbox;
    display: flex;
    list-style-type: none;
    padding: 16px;
    position: relative;
}

.c-homepage-biggest-jackpots-card__list-item:last-child {
    padding-bottom: 0;
}

.c-homepage-biggest-jackpots-card__list-item:before {
    -ms-flex-item-align: center;
    align-self: center;
    color: #be1e2d;
    content: counter(list) ".";
    counter-increment: list;
    font-weight: 800;
    overflow: hidden;
    position: relative;
    width: 32px;
}

.c-homepage-biggest-jackpots-card__list-item:after {
    -ms-flex-item-align: center;
    align-self: center;
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/arrow-right.adad23de.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    border: 2px solid #dfdee8;
    border-radius: 8px;
    box-shadow: 0 2px 4px 0 #2622620d;
    color: #0a0827;
    content: "";
    height: 32px;
    overflow: hidden;
    pointer-events: none;
    position: absolute;
    right: 16px;
    top: auto;
    white-space: nowrap;
    width: 32px;
}

.c-homepage-biggest-jackpots-card__list-item-link {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    text-decoration: none;
    width: 100%;
}

.c-homepage-biggest-jackpots-card__list-item-logo {
    height: 48px;
    margin-right: 16px;
    padding: 4px;
    width: 72px;
}

@media (min-width:48em) {
    .c-homepage-biggest-jackpots-card__list-item-logo {
        width: 100px;
    }
}

.c-homepage-biggest-jackpots-card__list-item-body {
    -ms-flex: 1;
    flex: 1;
    padding-right: 40px;
}

.c-homepage-biggest-jackpots-card__jackpot {
    display: block;
    font-size: 22px;
    font-size: 1.2222222rem;
    font-weight: 700;
    line-height: 22px;
    margin-bottom: 4px;
}

.c-homepage-biggest-jackpots-card__game {
    display: block;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    line-height: 20px;
}

.c-homepage-biggest-jackpots-card__state {
    color: #626078;
}

@media (min-width:48em) {
    .c-homepage-biggest-jackpots-card__game,.c-homepage-biggest-jackpots-card__jackpot {
        display: inline-block;
        margin-bottom: 0;
    }

    .c-homepage-biggest-jackpots-card__jackpot {
        margin-right: 8px;
    }
}

.c-homepage-jackpots-chart-card {
    overflow: visible;
}

@media (max-width:23.4275em) {
    .c-homepage-jackpots-chart-card .c-radio-field {
        font-size: 14px;
        font-size: .7777778rem;
        line-height: 20px;
    }
}

.c-homepage-jackpots-chart-card__stats-date,.c-homepage-jackpots-chart-card__stats-game {
    font-size: 12px;
    letter-spacing: .5px;
    text-transform: uppercase;
}

.c-homepage-jackpots-chart-card__stats-game {
    color: #fff;
    font-weight: 700;
    margin: 0;
}

.c-homepage-jackpots-chart-card__stats-jackpot {
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 20px;
    margin: 0;
}

.c-homepage-jackpots-chart-card__stats-item:last-child .c-homepage-jackpots-chart-card__stats-data {
    padding-bottom: 0;
}

@media (min-width:73.125em) {
    .c-homepage-jackpots-chart-card__stats-data {
        padding-bottom: 0;
    }
}

@media (max-width:47.99em) {
    .c-homepage-number-frequencies-card__due-not-due-numbers {
        border-bottom: 1px solid #dfdee8;
        margin-bottom: 32px;
    }
}

.c-homepage-number-frequencies-card .c-radio-group {
    display: -ms-flexbox;
    display: flex;
    margin-left: -16px;
    margin-right: -16px;
    margin-top: -16px;
}

@media (min-width:48em) {
    .c-homepage-number-frequencies-card .c-radio-group {
        margin-left: -12px;
        margin-right: 0;
        margin-top: -12px;
    }
}

.c-homepage-number-frequencies-card .c-radio-field {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    border-bottom: 2px solid #fff;
    display: -ms-flexbox;
    display: flex;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    justify-content: center;
    letter-spacing: 1.25px;
    line-height: 20px;
    opacity: .6;
    padding: 14px 8px;
    text-align: center;
    text-transform: uppercase;
    width: 50%;
}

@media (max-width:23.4275em) {
    .c-homepage-number-frequencies-card .c-radio-field {
        font-size: 12px;
        font-size: .6666667rem;
        line-height: 16px;
    }
}

.c-homepage-number-frequencies-card .c-radio-field.is-checked {
    border-bottom: 2px solid #0a0827;
    opacity: 1;
}

.c-homepage-number-frequencies-card .c-radio-field__input {
    clip: rect(0 0 0 0)!important;
    border: 0!important;
    -webkit-clip-path: inset(50%)!important;
    clip-path: inset(50%)!important;
    height: 1px!important;
    margin: -1px!important;
    overflow: hidden!important;
    padding: 0!important;
    position: absolute!important;
    white-space: nowrap!important;
    width: 1px!important;
}

.c-homepage-number-frequencies-card__list {
    margin: 0;
}

.c-homepage-number-frequencies-card__list-item {
    -ms-flex-align: center;
    align-items: center;
    border-bottom: 1px solid #dfdee8;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 16px;
}

.c-homepage-number-frequencies-card__list-item:last-child {
    border-bottom: 0;
}

.c-homepage-number-frequencies-card__list-item-title {
    font-size: 18px;
    font-size: 1rem;
    font-weight: 900;
    line-height: 24px;
}

.c-homepage-number-frequencies-card__list-item-subtitle {
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 24px;
}

.c-homepage-number-frequencies-card__chart {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100%;
    justify-content: space-between;
}

.c-homepage-number-frequencies-card__chart-header {
    margin-top: 8px;
    text-align: center;
}

.c-homepage-number-frequencies-card__chart-title {
    font-size: 18px;
    font-size: 1rem;
    font-weight: 700;
    line-height: 24px;
    margin-bottom: 0;
}

.c-homepage-number-frequencies-card__chart-subtitle {
    color: #626078;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 24px;
}

.c-homepage-lost-for-numbers-card .c-checkbox-field:not(.is-checked) {
    font-weight: 500;
}

.c-homepage-lost-for-numbers-card__line {
    -ms-flex-pack: justify;
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    margin-bottom: -12px;
    margin-top: 0;
    overflow: hidden;
    padding-bottom: 16px;
    padding-top: 16px;
}

.c-homepage-lost-for-numbers-card__line--empty {
    opacity: .5;
}

.c-homepage-lost-for-numbers-card .c-result {
    max-width: 500px;
}

.c-homepage-lost-for-numbers-card__line-copy {
    background-image: url(build/images/icons/16px/dark/copy.56d70f3c.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    border: 2px solid #dfdee8;
    height: 32px;
    margin-left: 8px;
    width: 32px;
}

.c-homepage-lost-for-numbers-card__line-copy span,.c-homepage-lost-for-numbers-card__line-copy--hidden {
    display: none;
}

@media (min-width:73.125em) {
    .c-homepage-lottery-predictions-card {
        -ms-flex-pack: justify;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        height: 346px;
        justify-content: space-between;
    }
}

.c-homepage-lottery-predictions-card__icon {
    -ms-flex-pack: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    margin-bottom: 16px;
}

.c-meter {
    display: inline-block;
    height: 40px;
    position: relative;
}

.c-meter--full {
    width: 100%;
}

.c-meter--slim {
    height: 15px;
}

.c-meter__meter {
    -webkit-appearance: none;
    appearance: none;
    background: #dfdee8;
    border-radius: 6px;
    height: 40px;
    line-height: 0;
    overflow: hidden;
    width: 100%;
}

.c-meter--slim .c-meter__meter {
    border-radius: 9999px;
    height: 15px;
}

.c-meter__meter-bar {
    display: inline-block;
    height: 100%;
    transition: width 1s;
}

.c-meter--tool-color-1 .c-meter__meter-bar,.c-meter__meter-bar {
    background-image: linear-gradient(90deg,#ff9e0080,#ff9e00);
}

.c-meter--tool-color-2 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#326eb180,#326eb1);
}

.c-meter--tool-color-3 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter--tool-color-4 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#be1e2d80,#be1e2d);
}

.c-meter--tool-color-5 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#b63dcd80,#b63dcd);
}

.c-meter--tool-color-6 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#a1cf6b80,#a1cf6b);
}

.c-meter--tool-color-7 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#cf517a80,#cf517a);
}

.c-meter--tool-color-8 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#e1d04a80,#e1d04a);
}

.c-meter--tool-color-9 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#e46d4680,#e46d46);
}

.c-meter--tool-color-10 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#33adb680,#33adb6);
}

.c-meter--tool-color-11 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#ff9e0080,#ff9e00);
}

.c-meter--tool-color-12 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#326eb180,#326eb1);
}

.c-meter--tool-color-13 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter--tool-color-14 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#be1e2d80,#be1e2d);
}

.c-meter--tool-color-15 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#b63dcd80,#b63dcd);
}

.c-meter--tool-color-16 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#a1cf6b80,#a1cf6b);
}

.c-meter--tool-color-17 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#cf517a80,#cf517a);
}

.c-meter--tool-color-18 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#e1d04a80,#e1d04a);
}

.c-meter--tool-color-19 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#e46d4680,#e46d46);
}

.c-meter--tool-color-20 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#33adb680,#33adb6);
}

.c-meter--tool-color-21 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#ff9e0080,#ff9e00);
}

.c-meter--tool-color-22 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#326eb180,#326eb1);
}

.c-meter--tool-color-23 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter--error .c-meter__meter-bar,.c-meter--tool-color-24 .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#be1e2d80,#be1e2d);
}

.c-meter--success .c-meter__meter-bar {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter__meter::-moz-meter-bar {
    display: inline-block;
    height: 100%;
    -moz-transition: width 1s;
    transition: width 1s;
}

.c-meter--tool-color-1 .c-meter__meter::-moz-meter-bar,.c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#ff9e0080,#ff9e00);
}

.c-meter--tool-color-2 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#326eb180,#326eb1);
}

.c-meter--tool-color-3 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter--tool-color-4 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#be1e2d80,#be1e2d);
}

.c-meter--tool-color-5 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#b63dcd80,#b63dcd);
}

.c-meter--tool-color-6 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#a1cf6b80,#a1cf6b);
}

.c-meter--tool-color-7 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#cf517a80,#cf517a);
}

.c-meter--tool-color-8 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#e1d04a80,#e1d04a);
}

.c-meter--tool-color-9 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#e46d4680,#e46d46);
}

.c-meter--tool-color-10 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#33adb680,#33adb6);
}

.c-meter--tool-color-11 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#ff9e0080,#ff9e00);
}

.c-meter--tool-color-12 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#326eb180,#326eb1);
}

.c-meter--tool-color-13 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter--tool-color-14 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#be1e2d80,#be1e2d);
}

.c-meter--tool-color-15 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#b63dcd80,#b63dcd);
}

.c-meter--tool-color-16 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#a1cf6b80,#a1cf6b);
}

.c-meter--tool-color-17 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#cf517a80,#cf517a);
}

.c-meter--tool-color-18 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#e1d04a80,#e1d04a);
}

.c-meter--tool-color-19 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#e46d4680,#e46d46);
}

.c-meter--tool-color-20 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#33adb680,#33adb6);
}

.c-meter--tool-color-21 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#ff9e0080,#ff9e00);
}

.c-meter--tool-color-22 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#326eb180,#326eb1);
}

.c-meter--tool-color-23 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter--error .c-meter__meter::-moz-meter-bar,.c-meter--tool-color-24 .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#be1e2d80,#be1e2d);
}

.c-meter--success .c-meter__meter::-moz-meter-bar {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter__meter::-webkit-meter-bar {
    -webkit-appearance: none;
    appearance: none;
    background: #dfdee8;
    border-radius: 6px;
    height: 40px;
    overflow: hidden;
}

.c-meter--slim .c-meter__meter::-webkit-meter-bar {
    height: 15px;
}

.c-meter__meter::-webkit-meter-even-less-good-value,.c-meter__meter::-webkit-meter-optimum-value,.c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#ff9e0080,#ff9e00);
    display: inline-block;
    height: 100%;
    -webkit-transition: width 1s;
    transition: width 1s;
}

.c-meter--tool-color-1 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-1 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-1 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#ff9e0080,#ff9e00);
}

.c-meter--tool-color-2 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-2 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-2 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#326eb180,#326eb1);
}

.c-meter--tool-color-3 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-3 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-3 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter--tool-color-4 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-4 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-4 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#be1e2d80,#be1e2d);
}

.c-meter--tool-color-5 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-5 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-5 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#b63dcd80,#b63dcd);
}

.c-meter--tool-color-6 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-6 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-6 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#a1cf6b80,#a1cf6b);
}

.c-meter--tool-color-7 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-7 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-7 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#cf517a80,#cf517a);
}

.c-meter--tool-color-8 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-8 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-8 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#e1d04a80,#e1d04a);
}

.c-meter--tool-color-9 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-9 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-9 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#e46d4680,#e46d46);
}

.c-meter--tool-color-10 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-10 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-10 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#33adb680,#33adb6);
}

.c-meter--tool-color-11 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-11 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-11 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#ff9e0080,#ff9e00);
}

.c-meter--tool-color-12 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-12 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-12 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#326eb180,#326eb1);
}

.c-meter--tool-color-13 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-13 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-13 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter--tool-color-14 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-14 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-14 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#be1e2d80,#be1e2d);
}

.c-meter--tool-color-15 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-15 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-15 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#b63dcd80,#b63dcd);
}

.c-meter--tool-color-16 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-16 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-16 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#a1cf6b80,#a1cf6b);
}

.c-meter--tool-color-17 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-17 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-17 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#cf517a80,#cf517a);
}

.c-meter--tool-color-18 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-18 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-18 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#e1d04a80,#e1d04a);
}

.c-meter--tool-color-19 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-19 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-19 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#e46d4680,#e46d46);
}

.c-meter--tool-color-20 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-20 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-20 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#33adb680,#33adb6);
}

.c-meter--tool-color-21 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-21 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-21 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#ff9e0080,#ff9e00);
}

.c-meter--tool-color-22 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-22 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-22 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#326eb180,#326eb1);
}

.c-meter--tool-color-23 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-23 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-23 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter--error .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--error .c-meter__meter::-webkit-meter-optimum-value,.c-meter--error .c-meter__meter::-webkit-meter-suboptimum-value,.c-meter--tool-color-24 .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--tool-color-24 .c-meter__meter::-webkit-meter-optimum-value,.c-meter--tool-color-24 .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#be1e2d80,#be1e2d);
}

.c-meter--success .c-meter__meter::-webkit-meter-even-less-good-value,.c-meter--success .c-meter__meter::-webkit-meter-optimum-value,.c-meter--success .c-meter__meter::-webkit-meter-suboptimum-value {
    background-image: linear-gradient(90deg,#00887480,#008874);
}

.c-meter__meter-label {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    height: 40px;
    justify-content: center;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.c-meter--slim .c-meter__meter-label {
    height: 15px;
}

.c-game-jackpot-chart-card {
    margin-bottom: 16px!important;
    overflow: visible;
    position: relative;
}

.c-game-jackpot-chart-card__sup-title {
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1.5px;
    opacity: .7;
}

.c-game-jackpot-chart-card__title {
    font-size: 22px;
    margin-bottom: 8px;
}

@media (max-width:23.4275em) {
    .c-game-jackpot-chart-card .c-radio-field {
        font-size: 14px;
        font-size: .7777778rem;
        line-height: 20px;
    }
}

.c-game-jackpot-chart-card__toggles {
    position: absolute;
    right: 0;
    top: 0;
}

.c-game-jackpot-chart-card__toggles .o-btn {
    background: none;
    border-radius: 8px;
    margin-right: 4px;
}

.c-game-jackpot-chart-card__toggles .o-btn:last-child {
    margin-right: 0;
}

.c-game-jackpot-chart-card__toggles .o-btn.is-selected {
    background: #262262;
    color: #fff;
}

.c-game-jackpot-chart-card .c-content-card {
    overflow: visible;
}

.c-game-jackpot-chart-card__statistics {
    margin-bottom: -16px;
    margin-left: -16px;
    margin-right: -16px;
}

.c-game-jackpot-chart-card__statistics:last-child {
    margin-bottom: -16px;
}

@media (min-width:73.125em) {
    .c-game-jackpot-chart-card__statistics {
        display: -ms-flexbox;
        display: flex;
    }
}

.c-game-jackpot-chart-card__statistics-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

@media (max-width:73.115em) {
    .c-game-jackpot-chart-card__statistics-group {
        width: 100%;
    }
}

@media (min-width:73.125em) {
    .c-game-jackpot-chart-card__statistics-group:last-child {
        -ms-flex: 1;
        flex: 1;
    }
}

.c-game-jackpot-chart-card__statistics-item {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    border-right: 1px solid #dfdee8;
    border-top: 1px solid #dfdee8;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    justify-content: center;
    padding: 24px;
    text-align: center;
}

.c-game-jackpot-chart-card__statistics-group:first-child .c-game-jackpot-chart-card__statistics-item {
    width: 50%;
}

@media (min-width:48em) {
    .c-game-jackpot-chart-card__statistics-group:first-child .c-game-jackpot-chart-card__statistics-item {
        width: 25%;
    }
}

@media (min-width:73.125em) {
    .c-game-jackpot-chart-card__statistics-group:first-child .c-game-jackpot-chart-card__statistics-item {
        width: auto;
    }
}

.c-game-jackpot-chart-card__statistics-group:last-child .c-game-jackpot-chart-card__statistics-item {
    width: 100%;
}

@media (min-width:48em) {
    .c-game-jackpot-chart-card__statistics-group:last-child .c-game-jackpot-chart-card__statistics-item {
        width: 50%;
    }

    .c-game-jackpot-chart-card__statistics-group:last-child .c-game-jackpot-chart-card__statistics-item:last-child {
        -ms-flex-align: end;
        align-items: flex-end;
    }
}

@media (min-width:73.125em) {
    .c-game-jackpot-chart-card__statistics-group:last-child .c-game-jackpot-chart-card__statistics-item {
        width: auto;
    }

    .c-game-jackpot-chart-card__statistics-group:last-child .c-game-jackpot-chart-card__statistics-item:last-child {
        -ms-flex: 1;
        flex: 1;
    }
}

.c-game-jackpot-chart-card__statistics-group:last-child .c-game-jackpot-chart-card__statistics-item .c-btn {
    padding-bottom: 14px;
    padding-top: 14px;
}

@media (max-width:47.99em) {
    .c-game-jackpot-chart-card__statistics-group:last-child .c-game-jackpot-chart-card__statistics-item .c-btn {
        width: 100%;
    }
}

@media (min-width:73.125em) {
    .c-game-jackpot-chart-card__statistics-item.c-game-jackpot-chart-card__avg-jackpot {
        min-width: 180px;
    }
}

.c-game-jackpot-chart-card__statistics-label {
    color: #626078;
    display: block;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 500;
    letter-spacing: .5px;
    line-height: 16px;
    margin-bottom: 4px;
    text-transform: uppercase;
}

.c-game-jackpot-chart-card__statistics-text {
    display: block;
    font-size: 18px;
    font-size: 1rem;
    font-weight: 800;
    line-height: 24px;
}

.c-line-chart__keys {
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 24px;
}

.c-line-chart__key {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    margin-right: 24px;
}

@media (max-width:23.4275em) {
    .c-line-chart__key-text {
        font-size: 16px;
        font-size: .8888889rem;
        font-weight: 400;
        line-height: 1.5;
    }
}

.c-line-chart__chart-marker {
    background-color: #ff9e00;
    border-radius: 100%;
    box-shadow: 0 3px 6px #0a08271a;
    display: inline-block;
    height: 20px;
    margin-right: 8px;
    position: relative;
    width: 20px;
}

.c-line-chart__chart-marker:before {
    background: #fff;
    border-radius: 100%;
    content: "";
    height: 16px;
    left: 2px;
    position: absolute;
    top: 2px;
    width: 16px;
}

.c-line-chart__chart-marker:after {
    background-color: inherit;
    border-radius: 100%;
    content: "";
    height: 8px;
    left: 6px;
    position: absolute;
    top: 6px;
    width: 8px;
}

.c-line-chart__chart {
    min-height: 350px;
    position: relative;
}

.c-line-chart__chart,.c-line-chart__y-axis {
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    width: 100%;
}

.c-line-chart__y-axis {
    padding-bottom: 24px;
    position: absolute;
}

.c-line-chart--w-x-axis-title .c-line-chart__y-axis {
    padding-bottom: 56px;
}

.c-line-chart__y-axis-labels {
    -ms-flex-pack: justify;
    -ms-flex-align: end;
    align-items: flex-end;
    background-color: #fff;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100%;
    justify-content: space-between;
    left: 0;
    padding-bottom: 36px;
    padding-top: 12px;
    position: absolute;
    width: 60px;
}

.c-line-chart--w-x-axis-title .c-line-chart__y-axis-labels {
    padding-bottom: 68px;
}

.c-line-chart__y-axis-label {
    -ms-flex-align: center;
    align-items: center;
    display: block;
    display: -ms-flexbox;
    display: flex;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.3333333;
    min-height: 16px;
    padding-right: 12px;
    text-transform: uppercase;
}

.c-line-chart__y-axis-lines {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100%;
    justify-content: space-between;
    padding-bottom: 36px;
    padding-left: 60px;
    padding-top: 12px;
    position: absolute;
    width: 100%;
}

.c-line-chart--w-x-axis-title .c-line-chart__y-axis-lines {
    padding-bottom: 68px;
}

.c-line-chart__y-axis-line {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    height: 16px;
    width: 100%;
}

.c-line-chart__y-axis-line:after {
    background: #dfdee8;
    content: "";
    height: 1px;
    width: 100%;
}

.c-line-chart__overflow-container {
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: none;
    height: 100%;
    overflow: scroll;
    overflow: -moz-scrollbars-none;
    overscroll-behavior-x: contain;
    padding-left: 60px;
    position: relative;
    scrollbar-width: none;
    width: 100%;
}

.c-line-chart__overflow-container::-webkit-scrollbar {
    display: none;
}

.c-line-chart__overflow {
    height: 100%;
    position: relative;
    width: 1078px;
}

.c-line-chart__x-axis {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100%;
    padding: 12px;
    position: absolute;
    width: 100%;
}

.c-line-chart__x-axis-labels {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
}

.c-line-chart__x-axis-label {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.3333333;
    margin-top: 8px;
    text-align: center;
    text-transform: uppercase;
}

.c-line-chart__x-axis-lines {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    height: 100%;
    justify-content: space-between;
}

.c-line-chart__x-axis-line {
    -ms-flex-pack: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    height: 100%;
    justify-content: center;
}

.c-line-chart__x-axis-line:after {
    background: #dfdee8;
    content: "";
    height: 100%;
    width: 1px;
}

.c-line-chart__x-axis-title {
    display: block;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.3333333;
    margin-top: 16px;
    text-align: center;
    text-transform: uppercase;
    width: 100%;
}

.c-line-chart__lines {
    -ms-flex-pack: justify;
    -ms-flex-align: end;
    align-items: flex-end;
    display: -ms-flexbox;
    display: flex;
    height: 350px;
    justify-content: space-between;
    padding: 20px 12px 44px;
    width: 100%;
    z-index: 2;
}

.c-line-chart--w-x-axis-title .c-line-chart__lines {
    padding-bottom: 64px;
}

.c-line-chart__svg {
    height: 100%;
    width: 100%;
}

.c-line-chart__svg * {
    vector-effect: non-scaling-stroke;
}

.c-line-chart__line {
    fill: none;
    stroke-width: 2;
    stroke-linejoin: round;
}

.c-line-chart__chart-markers {
    height: calc(100% - 24px);
    left: 12px;
    padding-top: 40px;
    pointer-events: none;
    position: absolute;
    top: -20px;
    width: calc(100% - 24px);
}

.c-line-chart__chart-markers .c-line-chart__chart-marker {
    left: calc(100% - 12px);
    margin: 0;
    position: absolute;
    top: calc(100% - 12px);
}

.c-line-chart__chart-marker-bar {
    background: #0a08270d;
    height: 100%;
    left: calc(100% - 12px);
    position: absolute;
    top: 0;
    width: 24px;
}

.c-line-chart__chart-marker-bar .c-tooltip {
    position: absolute;
    top: calc(50% - 80px);
}

.c-line-chart__chart-marker-bar .c-tooltip__section {
    text-align: center;
}

.c-line-chart__chart-marker-container {
    height: 100%;
    position: relative;
    width: 100%;
}

.c-tooltip {
    -ms-flex-align: center;
    -ms-flex-pack: justify;
    align-items: center;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -ms-flex-direction: column;
    flex-direction: column;
    justify-content: space-between;
    position: absolute;
    width: 200px;
    z-index: 100;
}

.c-tooltip--top {
    bottom: calc(100% + 16px);
    right: -92px;
}

.c-tooltip--right {
    left: calc(100% + 16px);
    top: -42px;
}

.c-tooltip--bottom {
    left: -92px;
    top: calc(100% + 16px);
}

.c-tooltip--left {
    right: calc(100% + 16px);
    top: -42px;
}

.c-tooltip__section {
    -ms-flex-pack: center;
    background: #0a0827;
    border-radius: 8px;
    color: #0a0827cc;
    color: #fff;
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    -ms-flex-direction: column;
    flex-direction: column;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 400;
    justify-content: center;
    line-height: 1.4285714;
    margin-bottom: 4px;
    padding: 8px 16px;
    position: relative;
    width: 100%;
}

.c-tooltip__section:last-child:before {
    background: #0a0827;
    border-bottom-right-radius: 4px;
    content: "";
    height: 12px;
    position: absolute;
    width: 12px;
}

.c-tooltip--top .c-tooltip__section:last-child:before {
    left: calc(50% - 6px);
    top: calc(100% - 6px);
    transform: rotate(45deg);
}

.c-tooltip--right .c-tooltip__section:last-child:before {
    right: calc(100% - 6px);
    top: calc(50% - 6px);
    transform: rotate(135deg);
}

.c-tooltip--bottom .c-tooltip__section:last-child:before {
    bottom: calc(100% - 6px);
    left: calc(50% - 6px);
    transform: rotate(225deg);
}

.c-tooltip--left .c-tooltip__section:last-child:before {
    left: calc(100% - 6px);
    top: calc(50% - 6px);
    transform: rotate(315deg);
}

.c-content-slide {
    overflow: hidden;
}

@media (min-width:48em) {
    .c-content-slide {
        margin-left: -16px;
        margin-right: -16px;
        padding-left: 16px;
        padding-right: 16px;
    }
}

.c-modal__bg {
    -ms-flex-pack: end;
    background: #0a082799;
    display: -ms-flexbox;
    display: flex;
    justify-content: flex-end;
    width: 100%;
}

.c-modal__bg,.c-sheet {
    height: 100vh;
    position: fixed;
    top: 0;
    z-index: 99999;
}

.c-sheet {
    background-color: #fff;
    max-width: 628px;
    width: calc(100% + 152px);
}

.c-sheet__close-button {
    background-color: initial;
    background-image: url(build/images/icons/16px/light/close.a12e8f7e.svg);
    margin: 12px;
    position: absolute;
    top: 0;
}

.c-sheet--right .c-sheet__close-button {
    right: 100%;
}

.c-sheet--left .c-sheet__close-button {
    left: 100%;
}

.c-sheet__content {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100vh;
    max-width: 628px;
}

.c-sheet__body {
    -webkit-overflow-scrolling: touch;
    overflow-y: scroll;
    overscroll-behavior-y: contain;
}

.c-sheet--right {
    right: 0;
}

.c-sheet--right .c-sheet__content {
    padding-right: 200px;
}

.c-sheet--left {
    left: 0;
}

.c-sheet--left .c-sheet__content {
    padding-left: 200px;
}

.c-number-checker-result-card {
    background-color: #fff;
    display: block;
    position: relative;
    width: 100%;
}

.c-number-checker-result-card .c-ball {
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-right: 4px;
    position: relative;
}

.c-number-checker-result-card .c-ball.c-ball--disabled,.c-number-checker-result-card .c-ball.c-ball--irrelevant {
    opacity: .5;
}

.c-number-checker-result-card .c-ball:not(.c-ball--disabled):after {
    background-image: url(build/images/icons/16px/dark/check-circle.8ee13a8a.svg);
    background-size: 16px;
    bottom: -2px;
    content: "";
    height: 16px;
    position: absolute;
    right: -2px;
    width: 16px;
}

.c-number-checker-result-card .c-result__abbr {
    margin-right: 4px;
}

.c-number-checker-result-card__date {
    font-size: 18px;
    font-size: 1rem;
    font-weight: 500;
    line-height: 28px;
    margin-bottom: 16px;
}

.c-number-checker-result-card__result {
    display: block;
    padding: 16px 0;
}

.c-number-checker-result-card__result-label {
    color: #0a0827b3;
    display: block;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.5;
    margin-bottom: 4px;
}

.c-number-checker-result-card__claim-label,.c-number-checker-result-card__prize-label {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 24px;
}

.c-number-checker-result-card__claim-label-icon,.c-number-checker-result-card__prize-label-icon {
    height: 24px;
    margin-right: 8px;
    width: 24px;
}

.c-number-checker-result-card__claim-text,.c-number-checker-result-card__prize-text {
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 700;
    line-height: 26px;
}

.c-number-checker-result-card__unknown {
    color: #0a082780;
}

.c-empty-state {
    -ms-flex-align: center;
    -ms-flex-pack: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
}

.c-empty-state__content {
    margin: 64px;
    max-width: 300px;
    text-align: center;
}

.c-empty-state__heading {
    font-size: 24px;
    font-size: 1.3333333rem;
    font-weight: 700;
    line-height: 1.1666667;
}

.c-empty-state__description {
    color: #0a0827cc;
    font-size: 18px;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5555556;
}

.c-coupon-card--coupon {
    background-clip: padding-box;
    background-color: #0a0827;
    border: 4px solid #0000;
    border-radius: 8px;
    color: #fff;
    padding: 24px 20px;
    position: relative;
    width: 100%;
}

.c-coupon-card--coupon.c-coupon-card--light {
    background-color: #fff;
    color: #0a0827;
}

.c-coupon-card--coupon:before {
    background: linear-gradient(90deg,#ffd51e,#007dc2,#1f1f1f);
    border-radius: inherit;
    bottom: 0;
    content: "";
    left: 0;
    margin: -12px -4px -4px;
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1;
}

.c-coupon-card--coupon .c-coupon-card__heading {
    font-size: 24px;
    font-size: 1.3333333rem;
    font-weight: 700;
    line-height: 1.1666667;
    margin-bottom: 8px;
}

.c-coupon-card--coupon .c-coupon-card__body {
    color: #0a0827cc;
    color: inherit;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    line-height: 1.5;
    margin-bottom: 8px;
    opacity: .8;
}

.c-coupon-card--coupon .c-coupon-card__image {
    height: 40px;
}

.c-coupon-card--coupon .c-coupon-card__info {
    display: -ms-flexbox;
    display: flex;
}

.c-coupon-card--coupon .c-coupon-card__info-item {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1;
    flex: 1;
    -ms-flex-direction: column;
    flex-direction: column;
}

.c-coupon-card--coupon .c-coupon-card__info-item strong {
    color: #0a0827cc;
    color: inherit;
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 500;
    line-height: 1.4285714;
}

.c-coupon-card--coupon .c-coupon-card__info-item span {
    color: #0a0827cc;
    color: inherit;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 400;
    line-height: 1.4285714;
    opacity: .8;
}

.c-coupon-card--coupon .c-coupon-card__perforation {
    position: relative;
}

@media (max-width:47.99em) {
    .c-coupon-card--coupon .c-coupon-card__perforation {
        height: 24px;
        margin-bottom: 8px;
        margin-left: -20px;
        margin-right: -20px;
        padding: 12px 0;
        width: calc(100% + 40px);
    }
}

.c-coupon-card--coupon .c-coupon-card__perforation:after,.c-coupon-card--coupon .c-coupon-card__perforation:before {
    background: #f4f4f7;
    border: 4px solid #0000;
    border-radius: 100%;
    content: "";
    height: 24px;
    position: absolute;
    width: 24px;
}

@media (max-width:47.99em) {
    .c-coupon-card--coupon .c-coupon-card__perforation:after,.c-coupon-card--coupon .c-coupon-card__perforation:before {
        top: 0;
    }
}

.c-coupon-card--coupon .c-coupon-card__perforation:before {
    border-bottom-color: #ffd51e;
    border-right-color: #ffd51e;
}

@media (max-width:47.99em) {
    .c-coupon-card--coupon .c-coupon-card__perforation:before {
        left: -16px;
        transform: rotate(-45deg);
    }
}

.c-coupon-card--coupon .c-coupon-card__perforation:after {
    border-bottom-color: #1f1f1f;
    border-left-color: #1f1f1f;
}

@media (max-width:47.99em) {
    .c-coupon-card--coupon .c-coupon-card__perforation:after {
        right: -16px;
        transform: rotate(45deg);
    }
}

.c-coupon-card--coupon .c-coupon-card__perforation span {
    display: block;
}

@media (max-width:47.99em) {
    .c-coupon-card--coupon .c-coupon-card__perforation span {
        border-bottom: 4px dashed #413e5b;
        margin-top: -2px;
    }

    .c-coupon-card--light .c-coupon-card--coupon .c-coupon-card__perforation span {
        border-color: #dfdee8;
    }
}

.c-coupon-card--coupon .c-coupon-card__code {
    background: #ffffff1a;
    border-radius: 8px;
    box-shadow: inset 0 0 0 2px #413e5b;
    color: inherit;
    display: block;
    font-family: Roboto Mono,Courier New,Courier,monospace;
    font-size: 24px;
    font-size: 1.3333333rem;
    font-weight: 700;
    line-height: 1.1666667;
    margin-bottom: 8px;
    padding: 14px 12px;
    text-align: center;
}

.c-coupon-card--light .c-coupon-card--coupon .c-coupon-card__code {
    background: #f4f4f7;
    box-shadow: inset 0 0 0 2px #dfdee8;
}

.c-coupon-card--light .c-coupon-card--coupon .c-coupon-card__actions .c-btn {
    background-color: #262262;
    color: #fff;
}

@media (min-width:48em) {
    .c-coupon-card--coupon {
        display: -ms-flexbox;
        display: flex;
    }

    .c-coupon-card--coupon:before {
        background: linear-gradient(0deg,#ffd51e,#007dc2,#1f1f1f);
        margin-left: -12px;
        margin-top: -4px;
    }

    .c-coupon-card--coupon .c-coupon-card__details {
        -ms-flex: 1;
        flex: 1;
        padding-left: 56px;
        position: relative;
    }

    .c-coupon-card--coupon .c-coupon-card__image {
        left: 0;
        position: absolute;
        top: calc(50% + 50px);
        transform: rotate(-90deg);
        transform-origin: top left;
    }

    .c-coupon-card--coupon .c-coupon-card__heading {
        font-size: 28px;
        font-size: 1.5555556rem;
        font-weight: 700;
        line-height: 1.2142857;
    }

    .c-coupon-card--coupon .c-coupon-card__body {
        color: #0a0827cc;
        color: inherit;
        font-size: 18px;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5555556;
        opacity: .8;
    }

    .c-coupon-card--coupon .c-coupon-card__info {
        margin-bottom: 0;
    }

    .c-coupon-card--coupon .c-coupon-card__info-item {
        display: block;
    }

    .c-coupon-card--coupon .c-coupon-card__info-item strong {
        display: inline;
    }

    .c-coupon-card--coupon .c-coupon-card__perforation {
        margin: -20px 16px;
        padding: 0 12px;
        width: 24px;
    }

    .c-coupon-card--coupon .c-coupon-card__perforation:after,.c-coupon-card--coupon .c-coupon-card__perforation:before {
        left: 0;
    }

    .c-coupon-card--coupon .c-coupon-card__perforation:before {
        bottom: -20px;
        transform: rotate(225deg);
    }

    .c-coupon-card--coupon .c-coupon-card__perforation:after {
        top: -20px;
        transform: rotate(-45deg);
    }

    .c-coupon-card--coupon .c-coupon-card__perforation span {
        border-right: 4px dashed #413e5b;
        height: 100%;
        margin-left: -2px;
    }

    .c-coupon-card--light .c-coupon-card--coupon .c-coupon-card__perforation span {
        border-color: #dfdee8;
    }

    .c-coupon-card--coupon .c-coupon-card__actions {
        -ms-flex-pack: center;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        justify-content: center;
        min-width: 220px;
    }
}

.c-coupon-card--bright {
    background: linear-gradient(30deg,#0700b8 50%,#0f8);
    color: #fff;
}

.c-coupon-card--bright .c-coupon-card__image {
    height: 75px;
    margin-bottom: 16px;
}

.c-coupon-card--bright .c-coupon-card__heading {
    font-size: 30px;
    font-size: 1.6666667rem;
    font-weight: 700;
    line-height: .8;
    margin-bottom: 8px;
}

.c-coupon-card--bright .c-coupon-card__body {
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    line-height: 1.5;
    margin-bottom: 16px;
}

.c-coupon-card--bright .c-coupon-card__code {
    background: #ffffff1a;
    background: #f4f4f726;
    border-radius: 8px;
    box-shadow: inset 0 0 0 2px #413e5b;
    box-shadow: inset 0 0 0 2px #dfdee840;
    color: inherit;
    display: block;
    font-family: Roboto Mono,Courier New,Courier,monospace;
    font-size: 24px;
    font-size: 1.3333333rem;
    font-weight: 700;
    line-height: 1.1666667;
    margin-bottom: 8px;
    padding: 10px 12px;
    text-align: center;
}

.c-how-to-claim-card {
    text-align: center;
}

.c-how-to-claim-card__image {
    margin: -12px -12px 16px;
}

.c-how-to-claim-card__image img {
    border-bottom: 1px solid #dfdee8;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    width: 100%;
}

.c-how-to-claim-card__title {
    margin-bottom: 4px;
}

.c-how-to-claim-card__desc {
    margin-bottom: 0;
}

.c-notifications {
    bottom: 100%;
    left: calc(100% - 280px);
    position: relative;
    width: 280px;
}

@media (min-width:48em) {
    .c-notifications {
        left: calc(100% - 350px);
        width: 350px;
    }
}

.c-notifications .c-message {
    margin: 0 32px 16px;
}

.c-notifications .c-message:last-child {
    margin-bottom: 32px;
}

.c-bottom-bar {
    -ms-flex-align: center;
    -ms-flex-pack: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column-reverse;
    flex-direction: column-reverse;
    justify-content: center;
    position: relative;
    transform: translateY(150%);
    width: 100%;
}

.c-bottom-bar:after {
    background-color: #262262;
    content: "";
    height: 50px;
    left: 0;
    position: absolute;
    top: 100%;
    width: 100%;
}

.c-bottom-bar__body {
    -ms-flex-align: center;
    -ms-flex-pack: center;
    align-items: center;
    background: #fff;
    box-shadow: 0 0 20px #2622621a;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    padding: 8px 0;
    width: 100%;
}

.c-bottom-bar__close-btn {
    -ms-flex-item-align: end;
    align-self: flex-end;
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/close.dd4cce19.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    border: 0;
    border-top-left-radius: 4px;
    cursor: pointer;
    height: 24px;
    padding: 0;
    width: 24px;
}

.c-global-overlay-footer {
    bottom: 0;
    left: 0;
    pointer-events: none;
    position: fixed;
    text-align: right;
    width: 100%;
    z-index: 140;
}

.c-global-overlay-footer__item {
    pointer-events: all;
    text-align: left;
}

.c-ad-wrapper,.c-ad-wrapper__ad-unit {
    -ms-flex-align: center;
    -ms-flex-pack: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    padding: 0;
    text-align: center;
    width: 100%;
}

.c-ad-wrapper__ad-unit {
    min-height: 250px;
    min-width: 300px;
}

.c-ad-wrapper__ad-unit--footer {
    height: 50px;
    min-height: auto;
    min-width: 320px;
}

.c-ad-wrapper td {
    padding: 0;
}

@media (min-width:23.4375em) {
    .c-ad-wrapper__ad-unit {
        min-height: 280px;
        min-width: 336px;
    }

    .c-ad-wrapper__ad-unit--footer {
        height: 50px;
        min-height: auto;
        min-width: 300px;
    }
}

.c-ad-wrapper--in-content {
    display: block;
    margin-bottom: 40px;
}

.c-ad-wrapper--in-aside {
    display: block;
    margin-bottom: 16px;
}

@media (min-width:48em) {
    .c-ad-wrapper--in-aside {
        margin-bottom: 24px;
    }

    .c-ad-wrapper__double {
        display: -ms-flexbox;
        display: flex;
    }

    .c-ad-wrapper__double>* {
        margin: 0 16px;
    }

    .c-ad-wrapper__ad-unit--footer {
        height: 90px;
    }
}

@media print {
    .c-ad-wrapper {
        display: none;
    }
}

.c-state-search-dropdown {
    position: relative;
}

.c-state-search-dropdown__input {
    color: #0a0827;
}

.c-state-search-dropdown__input--active {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.c-state-search-dropdown__list {
    background-color: #fff;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    border-top: 1px solid #f4f4f7;
    box-shadow: 0 24px 24px 0 #0a082733;
    display: block;
    list-style-type: none;
    margin: 0;
    max-height: 50vh;
    overflow-x: auto;
    padding: 0;
    position: absolute;
    text-align: left;
    width: 100%;
    z-index: 99999;
}

.c-state-search-dropdown__list-item {
    -ms-flex-align: center;
    align-items: center;
    box-shadow: inset 0 -1px 0 0 #f4f4f7;
    display: -ms-flexbox;
    display: flex;
    position: relative;
}

.c-state-search-dropdown .c-state-link {
    margin-bottom: 0;
    padding: 13px 16px;
}

.c-state-search-dropdown .c-state-link--abbr {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.2222222;
}

.c-state-search-dropdown .c-state-link--abbr span {
    font-weight: 700;
    width: 36px;
}

.c-state-search-dropdown .c-state-link--abbr:after {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.2222222;
}

.c-state-search-dropdown__state-badge {
    -ms-flex-align: center;
    -ms-flex-pack: center;
    align-items: center;
    background-color: #262262;
    border-radius: 100%;
    color: #fff;
    display: -ms-flexbox;
    display: flex;
    font-size: 14px;
    font-size: .7777778rem;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    height: 24px;
    justify-content: center;
    line-height: 1.1428571;
    line-height: 1.3333333;
    margin-left: 16px;
    width: 24px;
}

.c-state-search-dropdown__list-link {
    color: #0a0827;
    -ms-flex: 1;
    flex: 1;
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.7777778;
    padding: 8px 16px;
    text-decoration: none;
    z-index: 1;
}

.c-state-search-dropdown__list-link:after {
    bottom: 0;
    content: "";
    left: 0;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
    white-space: nowrap;
}

.c-state-search-dropdown .c-empty-state__content {
    margin: 32px;
}

.c-state-search-dropdown .c-empty-state__heading {
    color: #0a0827;
}

.c-search-sheet {
    -webkit-overflow-scrolling: touch;
    background-color: #fff;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100%;
    height: 100vh;
    height: -webkit-fill-available;
    height: stretch;
    overflow: scroll;
    overscroll-behavior-y: contain;
    width: 100%;
}

.c-search-sheet__header {
    -ms-flex-pack: justify;
    box-shadow: inset 0 -1px 0 0 #dfdee8;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    line-height: 1;
    position: relative;
}

.c-search-sheet__body {
    -webkit-overflow-scrolling: touch;
    height: 100%;
    overflow-y: scroll;
    overscroll-behavior-y: contain;
    position: relative;
}

.c-search-sheet__back-button {
    background-color: initial;
    background-image: url(build/images/icons/16px/light/close.a12e8f7e.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    border: 0;
    cursor: pointer;
    height: 58px;
    padding: 0;
    position: absolute;
    right: -100%;
    top: 0;
    width: 58px;
    z-index: 1;
}

.c-search-sheet .c-text-field {
    width: 100%;
}

.c-search-sheet__input {
    border-radius: 0;
}

.c-search-sheet__list {
    margin: 0;
    padding-bottom: 128px;
}

.c-search-sheet .c-empty-state {
    padding-bottom: 128px;
}

.c-search-sheet .c-state-link {
    margin-bottom: 0;
    padding: 13px 16px;
}

.c-search-sheet .c-state-link--abbr {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.2222222;
}

.c-search-sheet .c-state-link--abbr span {
    font-weight: 700;
    width: 36px;
}

.c-search-sheet .c-state-link--abbr:after {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.2222222;
}

.c-copy-to-clipboard__input {
    clip: rect(0 0 0 0)!important;
    border: 0!important;
    -webkit-clip-path: inset(50%)!important;
    clip-path: inset(50%)!important;
    height: 1px!important;
    margin: -1px!important;
    overflow: hidden!important;
    padding: 0!important;
    position: absolute!important;
    white-space: nowrap!important;
    width: 1px!important;
}

.c-back-to-top-button {
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/arrow-stem-up.3c592f67.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 2px #26226226;
    height: 40px;
    margin-bottom: 16px;
    margin-right: 16px;
    position: relative;
    width: 40px;
}

.c-back-to-top-button:focus,.c-back-to-top-button:hover {
    box-shadow: 0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827;
}

@media (min-width:73.125em) {
    .c-back-to-top-button {
        margin-bottom: 32px;
        margin-right: 32px;
    }
}

.c-generic-modal {
    background: #fff;
    border: 1px solid #dfdee8;
    border-radius: 6px;
    left: 16px;
    padding: 16px;
    position: fixed;
    top: 140px;
    width: calc(100% - 32px);
    z-index: 99999;
}

@media (min-width:48em) {
    .c-generic-modal {
        left: calc(50% - 324px);
        max-width: 648px;
    }
}

.c-generic-modal__overlay {
    -ms-flex-pack: end;
    background: #0a082799;
    display: -ms-flexbox;
    display: flex;
    height: 100vh;
    justify-content: flex-end;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 99999;
}

.c-generic-modal__header {
    position: relative;
}

.c-generic-modal__close-button {
    position: absolute;
    right: 0;
}

.c-generic-modal__body {
    -webkit-overflow-scrolling: touch;
    max-height: calc(100vh - 280px);
    overflow-y: scroll;
    overscroll-behavior-y: contain;
}

.c-generic-modal__body :last-child {
    margin-bottom: 0;
}

.c-modal-toggle__modal-body {
    display: none;
}

.c-details-table {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-bottom: 16px;
}

.c-details-table--full {
    width: 100%;
}

.c-details-table--fit {
    white-space: nowrap;
}

.c-details-table dd,.c-details-table dt {
    -ms-flex-align: center;
    align-items: center;
    background: #fff;
    border-bottom: 1px solid #dfdee8;
    display: -ms-flexbox;
    display: flex;
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 1.2857143;
    padding: 16px;
    width: 50%;
}

.c-details-table dd:first-child,.c-details-table dd:nth-child(2),.c-details-table dt:first-child,.c-details-table dt:nth-child(2) {
    border-top: 1px solid #dfdee8;
}

.c-details-table dd {
    margin: 0;
}

.c-details-table--zebra dd:nth-child(4n+4),.c-details-table--zebra dt:nth-child(4n+3) {
    background-color: #f4f4f740;
}

@media (min-width:48em) {
    .c-details-table dd,.c-details-table dt {
        font-size: 16px;
        font-size: .8888889rem;
        line-height: 1.375;
        padding: 20px;
    }
}

@media (min-width:73.125em) {
    .c-details-table dd:nth-child(odd),.c-details-table dt:nth-child(odd) {
        border-left: 1px solid #dfdee8;
    }

    .c-details-table dd:nth-child(2n),.c-details-table dt:nth-child(2n) {
        border-right: 1px solid #dfdee8;
    }

    .c-details-table dd:first-child,.c-details-table dt:first-child {
        border-top-left-radius: 8px;
    }

    .c-details-table dd:nth-child(2),.c-details-table dt:nth-child(2) {
        border-top-right-radius: 8px;
    }

    .c-details-table dd:nth-last-child(2),.c-details-table dt:nth-last-child(2) {
        border-bottom-left-radius: 8px;
    }

    .c-details-table dd:last-child,.c-details-table dt:last-child {
        border-bottom-right-radius: 8px;
    }
}

@supports (display:grid) {
    .c-details-table {
        display: grid;
        grid-template-columns: -webkit-min-content auto;
        grid-template-columns: min-content auto;
    }

    .c-details-table dd,.c-details-table dt {
        width: 100%;
    }

    .c-details-table dt {
        grid-column-start: 1;
    }

    .c-details-table dd {
        grid-column-start: 2;
    }
}

.c-textarea-field {
    display: block;
}

.c-textarea-field.is-hidden {
    clip: rect(0 0 0 0)!important;
    border: 0!important;
    -webkit-clip-path: inset(50%)!important;
    clip-path: inset(50%)!important;
    height: 1px!important;
    margin: -1px!important;
    overflow: hidden!important;
    padding: 0!important;
    position: absolute!important;
    white-space: nowrap!important;
    width: 1px!important;
}

.c-textarea-field__input-container {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    min-height: 220px;
    position: relative;
}

.c-textarea-field--w-inner-label .c-textarea-field__input-container {
    -ms-flex-align: start;
    -ms-flex-pack: justify;
    align-items: flex-start;
    background-position: bottom 12px right 12px;
    -ms-flex-direction: column;
    flex-direction: column;
    justify-content: space-between;
    padding-left: 16px;
    padding-right: 16px;
}

.c-textarea-field__inner-label {
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 800;
    left: 16px;
    letter-spacing: 1px;
    line-height: 16px;
    text-transform: uppercase;
    top: 11px;
}

.c-textarea-field__input {
    -webkit-appearance: none;
    appearance: none;
    background: #0000;
    border: none;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    font-family: DM Sans,sans-serif;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.25;
    min-height: 180px!important;
    width: 100%!important;
}

.c-textarea-field__input:focus {
    outline: none;
}

.c-input--lg .c-textarea-field__input {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-textarea-field__input::-webkit-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-textarea-field__input::placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-textarea-field__input:-ms-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-input--lg .c-textarea-field__input::-ms-input-placeholder {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.3333333;
}

.c-textarea-field__error-message {
    background: #f2d2d5;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    color: #be1e2d;
    display: block;
    font-size: 13px;
    font-weight: 500;
    line-height: 2;
    margin: -6px 0 8px;
    padding: 10px 8px 4px;
}

.c-recaptcha-field {
    display: inline-block;
    min-height: 78px;
}

.c-recaptcha-field__error-message {
    background: #f2d2d5;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    color: #be1e2d;
    display: block;
    font-size: 13px;
    font-weight: 500;
    line-height: 2;
    margin: -8px 0 8px;
    padding: 10px 8px 4px;
    width: calc(100% - 2px);
}

@media (max-width:47.99em) {
    .c-game-combinations-tool__date-field {
        margin-top: 8px;
    }
}

.c-game-combinations-tool__winning-numbers-card {
    height: 124px;
    overflow: hidden;
}

@media (min-width:48em) {
    .c-game-combinations-tool__winning-numbers-card {
        height: 78px;
    }
}

@media (max-width:47.99em) {
    .c-game-combinations-tool__result {
        margin-top: 8px;
    }
}

@media (min-width:48em) {
    .c-game-combinations-tool__result {
        -ms-flex-pack: end;
        justify-content: flex-end;
    }
}

.c-game-combinations-tool__no-combinations {
    opacity: .3;
}

.c-game-combinations-tool__export {
    -ms-flex-pack: end;
    display: -ms-flexbox;
    display: flex;
    justify-content: flex-end;
}

.c-odds-table .c-select-field {
    width: 100%;
}

.c-odds-table .u-responsive-table {
    border-radius: 8px;
    overflow-x: visible;
    overflow-y: hidden;
}

.c-odds-table .c-table th {
    cursor: pointer;
}

@media (max-width:47.99em) {
    .c-odds-table .c-table td,.c-odds-table .c-table th {
        padding: 16px 12px;
        white-space: normal;
    }
}

.c-odds-table__th {
    -ms-flex-align: center;
    -ms-flex-pack: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
}

.c-odds-table__sort-indicator {
    display: block;
    height: 12px;
    margin-left: 4px;
    opacity: .75;
    transition: transform .15s ease-in-out;
    width: 12px;
    will-change: transform;
}

.c-odds-table__sort-indicator--active {
    background-image: url(build/images/icons/16px/light/arrow-stem-down.a166b959.svg);
    background-position: top 50% center;
    background-repeat: no-repeat;
    background-size: 12px;
}

.c-odds-table__sort-indicator--desc {
    transform: rotate(180deg);
}

.c-odds-table__game {
    margin: 0 auto;
    text-align: center;
    width: 100px;
}

@media (min-width:48em) {
    .c-odds-table__game {
        -ms-flex-align: center;
        align-items: center;
        display: -ms-flexbox;
        display: flex;
        text-align: left;
        width: 220px;
    }
}

.c-odds-table__game-logo {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    margin: 0 auto 4px;
    width: 50px;
}

@media (min-width:48em) {
    .c-odds-table__game-logo {
        height: 24px;
        margin: 0 16px 0 0;
    }
}

.c-odds-table__game-logo img {
    width: 100%;
}

.c-odds-table__game-name {
    white-space: normal;
    width: calc(100% - 66px);
}

.c-odds-table__jackpot {
    min-width: 129px;
    text-align: center;
}

.c-odds-table__overall {
    min-width: 105px;
    text-align: center;
}

.c-odds-table__state {
    text-align: right;
    width: 111px;
}

.c-odds-table__state .c-odds-table__th {
    -ms-flex-pack: end;
    justify-content: flex-end;
}

@media (max-width:47.99em) {
    .c-odds-table .c-pill {
        font-size: 12px;
        font-size: .6666667rem;
        line-height: 1.3333333;
    }
}

.c-odds-card {
    background-color: #fff;
    display: block;
    padding: 0 16px;
    position: relative;
}

.c-odds-card:last-child {
    margin-bottom: 16px;
}

.c-odds-card__header {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    padding: 16px 0;
    width: 100%;
}

@media (min-width:73.125em) {
    .c-odds-card__game-details {
        -ms-flex-pack: justify;
        -ms-flex-align: center;
        align-items: center;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
}

.c-odds-card__title {
    display: block;
    font-size: 18px;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.4444444;
}

.c-odds-card__logo {
    height: 48px;
    margin-right: 12px;
    width: 48px;
}

.c-odds-card__odds {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    font-size: 18px;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.3333333;
    padding: 0 0 16px;
}

.c-odds-card__odds-list {
    -ms-flex-pack: justify;
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
    width: 100%;
}

.c-odds-card__odds-title {
    color: #413e5b;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.5;
    position: relative;
    text-align: right;
}

.c-odds-card__odds-title:before {
    background-position: 50% 50%;
    background-size: 24px 24px;
    content: "";
    display: inline-block;
    height: 24px;
    margin-right: 8px;
    vertical-align: top;
    width: 24px;
}

.c-odds-card__odds--jackpot .c-odds-card__odds-title:before {
    background-image: url(build/images/icons/24px/color/dollar.42d1b55f.svg);
}

.c-odds-card__odds--overall .c-odds-card__odds-title:before {
    background-image: url(build/images/icons/24px/dark/dollar.bdec4f04.svg);
    opacity: .3333;
}

.c-odds-card__odds-label {
    display: block;
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 700;
    line-height: 1.2380952;
    margin-left: auto;
    text-align: right;
}

.c-odds-card__icon {
    -ms-flex-align: center;
    align-items: center;
    margin-right: 8px;
}

.c-odds-card__state {
    padding: 0;
    position: absolute;
    right: 16px;
    top: 24px;
}

@media (min-width:73.125em) {
    .c-odds-card {
        -ms-flex-pack: justify;
        border-radius: 8px;
        box-shadow: 0 2px 8px 0 #0a08270d;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .c-odds-card:hover {
        box-shadow: 0 2px 8px 0 #0a08270d,inset 0 0 0 2px #0a0827;
        cursor: pointer;
    }

    .c-odds-card:hover .c-odds-card__btn {
        box-shadow: inset 0 0 0 2px #0a0827;
    }

    .c-odds-card__header {
        height: 100%;
        padding: 16px 0;
    }

    .c-odds-card__header,.c-odds-card__odds {
        -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
    }

    .c-odds-card__odds {
        padding-bottom: 8px;
        padding-top: 8px;
    }

    .c-odds-card__odds-list {
        -ms-flex-pack: center;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-direction: column;
        flex-direction: column;
        justify-content: center;
        margin-bottom: 0;
    }

    .c-odds-card__odds-title {
        color: #0a082799;
        display: block;
        font-size: 14px;
        font-size: .7777778rem;
        font-weight: 700;
        letter-spacing: 1.25px;
        line-height: 1.4285714;
        margin-bottom: 8px;
        text-transform: uppercase;
    }

    .c-odds-card__odds-title:before {
        content: none!important;
    }

    .c-odds-card__odds-label {
        margin-left: 0;
    }

    .c-odds-card__state {
        -ms-flex-align: center;
        -ms-flex-pack: end;
        align-items: center;
        display: -ms-flexbox;
        display: flex;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        justify-content: flex-end;
        padding-bottom: 8px;
        padding-right: 48px;
        padding-top: 8px;
        position: static;
    }

    .c-odds-card__jackpot-history .c-btn {
        top: 24px;
    }

    .c-odds-card__jackpot-list {
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    .c-odds-card__link,.c-odds-card__prize {
        box-shadow: inset 0 1px 0 0 #f4f4f7;
    }

    .c-odds-card__prize {
        -ms-flex-preferred-size: 45%;
        flex-basis: 45%;
    }

    .c-odds-card__prize-sub-value {
        display: inline-block;
        font-size: 14px;
        font-size: .7777778rem;
        font-weight: 500;
        line-height: 1.4285714;
        margin-left: auto;
    }

    .c-odds-card__link {
        -ms-flex-preferred-size: 55%;
        flex-basis: 55%;
        padding: 16px 0;
    }

    .c-odds-card__jackpot-row {
        -ms-flex-pack: end;
        box-shadow: none;
        justify-content: flex-end;
    }

    .c-odds-card__jackpot-row+.c-odds-card__jackpot-row {
        box-shadow: inset 0 1px 0 0 #f4f4f7;
        padding-bottom: 4px;
    }

    .c-odds-card__jackpot-meta {
        margin-right: auto;
    }

    .c-odds-card__prize-label {
        margin-right: 8px;
    }

    .c-odds-card__prize-details {
        padding: 0;
    }

    .c-odds-card__btn,.c-odds-card__prize-details {
        -ms-flex-item-align: center;
        align-self: center;
        width: auto;
    }

    .c-odds-card__btn {
        font-size: 14px;
        font-size: .7777778rem;
        height: auto;
        line-height: 1.4285714;
        margin-left: auto;
        padding: 6px 36px 6px 12px;
    }
}

.c-result-table-title {
    font-size: 24px;
    font-size: 1.3333333rem;
    font-weight: 700;
    line-height: 1.1666667;
    margin-bottom: 48px;
    text-align: center;
}

@media (min-width:73.125em) {
    .c-result-table-title {
        font-size: 24px;
        font-size: 1.3333333rem;
        line-height: 1.3333333;
        margin-bottom: 16px;
        text-align: left;
    }
}

.c-daily-games-table td:first-child,.c-daily-games-table th:first-child {
    min-width: 120px;
}

@media (min-width:48em) {
    .c-daily-games-table td:first-child,.c-daily-games-table th:first-child {
        width: 200px!important;
    }
}

.c-daily-games-table td:not(:first-child),.c-daily-games-table th:not(:first-child) {
    text-align: center;
}

.c-daily-games-table td {
    min-width: 90px;
    padding: 8px 16px;
}

.c-daily-games-table .u-responsive-table {
    border-radius: 8px;
    overflow-x: visible;
    overflow-y: hidden;
}

.c-daily-games-table__game-toggle {
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 24px;
}

.c-daily-games-table__game-toggle .c-radio-field {
    width: 100%;
}

.c-daily-games-table__game-toggle .c-radio-field:last-child {
    margin-right: 0;
}

.c-daily-games-table__state-dropdown-body {
    max-height: 183px;
}

@media (min-width:48em) {
    .c-daily-games-table__state-dropdown-body {
        max-height: 343px;
    }
}

.c-daily-games-table__state-dropdown-footer {
    margin-top: 0;
}

.c-daily-games-table__highlight-export {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
}

.c-daily-games-table__highlight {
    cursor: pointer;
    display: block;
    height: 40px;
    position: relative;
    width: 190px;
}

@media (max-width:47.99em) {
    .c-daily-games-table__highlight {
        z-index: 73;
    }

    .c-daily-games-table__highlight.is-open {
        z-index: 75;
    }
}

@media (min-width:48em) {
    .c-daily-games-table__highlight {
        width: 100%;
    }
}

.c-daily-games-table__highlight-container {
    border-radius: 8px;
    min-height: 40px;
    min-width: 190px;
    overflow: hidden;
    text-align: right;
}

@media (max-width:47.99em) {
    .c-daily-games-table__highlight-container {
        background-color: #fff;
        border: none;
        box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;
        left: 0;
        position: absolute;
        top: 0;
    }
}

@media (min-width:48em) {
    .c-daily-games-table__highlight-container {
        display: -ms-flexbox;
        display: flex;
        width: 100%;
    }
}

.c-daily-games-table__highlight-button {
    background-color: initial;
    background-image: url(build/images/icons/16px/dark/highlight.8d3d7eb0.svg);
    background-position: center left 12px;
    background-repeat: no-repeat;
    background-size: 16px;
    border: none;
    cursor: pointer;
    font-family: DM Sans,sans-serif;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    left: 0;
    line-height: 1.25;
    padding: 11px 12px 9px 36px;
    position: absolute;
    text-align: left;
    width: 324px;
}

@media (min-width:48em) {
    .c-daily-games-table__highlight-button {
        background-position: 0;
        cursor: auto;
        padding: 11px 12px 9px 24px;
        position: static;
        width: auto;
    }
}

.c-daily-games-table__highlight__button-label {
    opacity: 0;
}

.c-daily-games-table__highlight-label {
    display: block;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.5;
}

@media (max-width:47.99em) {
    .c-daily-games-table__highlight-label {
        margin-bottom: 4px;
        margin-left: 8px;
    }
}

@media (min-width:48em) {
    .c-daily-games-table__highlight-label {
        margin-right: 16px;
    }
}

.c-daily-games-table__highlight-group {
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: none;
    display: block;
    list-style-type: none;
    margin: 40px 0 0;
    min-width: 100%;
    overflow: scroll;
    overflow: -moz-scrollbars-none;
    overscroll-behavior-y: contain;
    padding: 4px 12px 16px;
    scrollbar-width: none;
    white-space: nowrap;
    width: 304px;
}

.c-daily-games-table__highlight-group::-webkit-scrollbar {
    display: none;
}

@media (min-width:23.4375em) {
    .c-daily-games-table__highlight-group {
        width: 324px;
    }
}

@media (min-width:48em) {
    .c-daily-games-table__highlight-group {
        margin-top: 0;
        padding: 0;
        width: auto;
    }
}

.c-daily-games-table__highlight-group .c-checkbox-group__fields {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:first-child {
    background-color: #ff9e00;
}

.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(2) {
    background-color: #326eb1;
}

.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(3) {
    background-color: #008874;
}

.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(4) {
    background-color: #be1e2d;
}

.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(5) {
    background-color: #b63dcd;
}

.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(6) {
    background-color: #a1cf6b;
}

.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(7) {
    background-color: #cf517a;
}

.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(8) {
    background-color: #e1d04a;
}

.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(9) {
    background-color: #e46d46;
}

.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(10) {
    background-color: #33adb6;
}

@media (max-width:47.99em) {
    .c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field {
        width: calc(20% - 3.2px);
    }

    .c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field:nth-child(5n) {
        margin-right: 0;
    }

    .c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field:nth-child(n+6) {
        margin-bottom: 0;
    }
}

@media (min-width:48em) {
    .c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field {
        margin-bottom: 0;
        max-width: 53px;
    }
}

.c-daily-games-table__export {
    -ms-flex-pack: end;
    display: -ms-flexbox;
    display: flex;
    justify-content: flex-end;
    margin-bottom: 8px;
    margin-left: 8px;
}

.c-daily-games-table__result {
    display: -ms-flexbox;
    display: flex;
}

.c-daily-games-table__result,.c-daily-games-table__result-item {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    justify-content: center;
}

.c-daily-games-table__result-item {
    border-radius: 4px;
    display: -ms-inline-flexbox;
    display: inline-flex;
    height: 20px;
    margin-right: 4px;
    width: 16px;
}

.c-daily-games-table__result-item:last-child {
    margin-right: 0;
}

.c-daily-games-table__result-item--highlighted {
    font-weight: 500;
}

.c-daily-games-table__result-item--highlighted-0 {
    background-color: #ff9e00;
    color: #fff;
    font-weight: 900;
}

.c-daily-games-table__result-item--highlighted-1 {
    background-color: #326eb1;
    color: #fff;
    font-weight: 900;
}

.c-daily-games-table__result-item--highlighted-2 {
    background-color: #008874;
    color: #fff;
    font-weight: 900;
}

.c-daily-games-table__result-item--highlighted-3 {
    background-color: #be1e2d;
    color: #fff;
    font-weight: 900;
}

.c-daily-games-table__result-item--highlighted-4 {
    background-color: #b63dcd;
    color: #fff;
    font-weight: 900;
}

.c-daily-games-table__result-item--highlighted-5 {
    background-color: #a1cf6b;
    color: #fff;
    font-weight: 900;
}

.c-daily-games-table__result-item--highlighted-6 {
    background-color: #cf517a;
    color: #fff;
    font-weight: 900;
}

.c-daily-games-table__result-item--highlighted-7 {
    background-color: #e1d04a;
    color: #fff;
    font-weight: 900;
}

.c-daily-games-table__result-item--highlighted-8 {
    background-color: #e46d46;
    color: #fff;
    font-weight: 900;
}

.c-daily-games-table__result-item--highlighted-9 {
    background-color: #33adb6;
    color: #fff;
    font-weight: 900;
}

.c-quick-picks-card {
    overflow: visible;
    position: relative;
}

.c-quick-picks-card--w-buy-button {
    margin-bottom: 32px;
}

.c-quick-picks-card--simple {
    border: 1px solid #dfdee8;
    box-shadow: none;
    width: 100%;
}

.c-quick-picks-card__header {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
}

.c-quick-picks-card__logo {
    height: 48px;
    margin-right: 12px;
    width: 48px;
}

.c-quick-picks-card__title {
    display: block;
    font-size: 21px;
    font-size: 1.1666667rem;
    font-weight: 700;
    line-height: 1.2380952;
    margin-bottom: 0;
}

.c-quick-picks-card__subtitle {
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 500;
    line-height: 1.4285714;
}

.c-quick-picks-card__body {
    color: #413e5b;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 24px;
    margin-bottom: 0;
    margin-top: 8px;
}

.c-quick-picks-card__inputs {
    margin-top: 8px;
}

.c-quick-picks-card__input-title {
    color: #0a0827cc;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 500;
    line-height: 16px;
}

@media (min-width:48em) {
    .c-quick-picks-card__input-title {
        font-size: 14px;
        font-size: .7777778rem;
        line-height: 20px;
    }
}

.c-quick-picks-card .c-checkbox-field {
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 20px;
}

@media (min-width:48em) {
    .c-quick-picks-card .c-checkbox-field {
        margin-top: 20px;
    }
}

.c-quick-picks-card__lines-input {
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-bottom: 8px;
    margin-top: 4px;
    width: 100%;
}

.c-quick-picks-card__range-label {
    line-height: 20px;
}

.c-quick-picks-card__buttons-label,.c-quick-picks-card__range-label {
    -ms-flex-negative: 0;
    color: #0a082799;
    display: inline-block;
    flex-shrink: 0;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 500;
    margin-right: 16px;
}

.c-quick-picks-card__buttons-label {
    height: 16px;
    line-height: 16px;
}

.c-quick-picks-card .c-quick-picks-button-group {
    display: -ms-flexbox;
    display: flex;
    width: 235px;
}

@media (min-width:23.4375em) {
    .c-quick-picks-card .c-quick-picks-button-group {
        width: 290px;
    }
}

.c-quick-picks-card .c-quick-picks-button-group__button {
    -ms-flex: 1;
    flex: 1;
}

.c-quick-picks-card__lines-group {
    display: -ms-flexbox;
    display: flex;
    width: 100%;
}

.c-quick-picks-card__lines-field {
    -ms-flex: 1;
    flex: 1;
    margin-right: 4px;
    min-width: 39px;
}

.c-quick-picks-card__lines-field:last-of-type {
    margin-right: 0!important;
}

.c-quick-picks-card__game-config-inputs {
    margin-top: 4px;
}

@media (min-width:48em) {
    .c-quick-picks-card__game-config-inputs {
        margin-top: 8px;
    }
}

.c-quick-picks-card__lines {
    margin-left: 0;
    overflow: hidden;
    position: relative;
}

@media (max-width:23.4275em) {
    .c-quick-picks-card--actions-below .c-quick-picks-card__lines {
        margin-bottom: 16px;
    }
}

.c-quick-picks-card .o-ui-list__item {
    margin-bottom: 0;
}

.c-quick-picks-card .c-result {
    -webkit-tap-highlight-color: transparent;
    background-color: #fff;
    cursor: pointer;
    height: 100%;
    max-width: none;
    padding: 16px 0;
    position: relative;
    transition: left .15s ease-in-out;
    width: 100%;
    z-index: 2;
}

.c-quick-picks-card .c-ball {
    -ms-flex-pack: start;
    border-radius: 100%;
    justify-content: flex-start;
    overflow: hidden;
}

.c-quick-picks-card .c-ball,.c-quick-picks-card .c-ball__label {
    -ms-flex-positive: 0;
    -ms-flex-negative: 0;
    -ms-flex-preferred-size: 36px;
    flex-basis: 36px;
    flex-grow: 0;
    flex-shrink: 0;
    font-size: 18px;
    font-size: 1rem;
    height: 36px;
    line-height: 1.1111111;
    width: 36px;
}

@media (min-width:23.4375em) {
    .c-quick-picks-card .c-ball,.c-quick-picks-card .c-ball__label {
        -ms-flex-preferred-size: 44px;
        flex-basis: 44px;
        font-size: 22px;
        font-size: 1.2222222rem;
        height: 48px;
        height: 44px;
        line-height: 1.1818182;
        width: 48px;
        width: 44px;
    }
}

@media (min-width:48em) {
    .c-quick-picks-card--gamepage .c-quick-picks-card .c-ball,.c-quick-picks-card--gamepage .c-quick-picks-card .c-ball__label {
        font-size: 28px;
        font-size: 1.5555556rem;
        line-height: 24px;
        margin-right: 8px;
    }
}

.c-quick-picks-card__line {
    -ms-flex-align: center;
    align-items: center;
    border-bottom: 1px solid #dfdee8;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 0;
    overflow: hidden;
    position: relative;
}

@media (min-width:73.125em) {
    .c-quick-picks-card__line--long .c-ball,.c-quick-picks-card__line--long .c-ball__label {
        -ms-flex-preferred-size: 36px;
        flex-basis: 36px;
        font-size: 18px;
        font-size: 1rem;
        height: 36px;
        line-height: 1.3333333;
        width: 36px;
    }
}

.o-ui-list__item:last-child .c-quick-picks-card__line {
    border-bottom: none;
}

.c-quick-picks-card__line-copy {
    background-image: url(build/images/icons/16px/dark/copy.56d70f3c.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    border: 2px solid #dfdee8;
    height: 40px;
    margin-left: 16px;
    width: 40px;
}

.c-quick-picks-card__line-copy--hidden {
    display: none;
}

.c-quick-picks-card__footer {
    margin-top: 4px;
}

.c-quick-picks-card__button--reload {
    background-color: #262262;
    background-image: url(build/images/icons/30px/light/reload.e2bb7ef0.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 30px;
    border: none;
    border-radius: 100%;
    bottom: -38px;
    cursor: pointer;
    height: 64px;
    margin-bottom: 6px;
    position: absolute;
    right: 16px;
    width: 64px;
}

.c-quick-picks-card__buy-button {
    background-image: url(build/images/icons/16px/dark/arrow-stem-up-right.d24c2f14.svg);
    background-position: center right 12px;
    background-repeat: no-repeat;
    background-size: 16px;
    bottom: -20px;
    letter-spacing: 1.25px;
    padding: 11px 36px 9px 16px;
    position: absolute;
    right: 16px;
    text-align: left;
}

.c-quick-picks-card--buy-button-left .c-quick-picks-card__buy-button {
    left: 16px;
    right: 0;
}

.c-quick-picks-card__single-action {
    -ms-flex-item-align: stretch;
    align-self: stretch;
    background: none;
    background-color: #fff;
    background-image: url(build/images/icons/16px/dark/dot-menu.eeb68a0a.svg);
    background-position: 100%;
    background-repeat: no-repeat;
    background-size: 16px;
    border: 0;
    cursor: pointer;
    margin: 16px 0;
    position: relative;
    transition: left .15s ease-in-out;
    width: 30px;
    z-index: 2;
}

.c-quick-picks-card__single-buttons {
    -ms-flex-align: center;
    align-items: center;
    cursor: pointer;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    position: absolute;
    right: 0;
    width: 100px;
}

.c-quick-picks-card .c-copy-to-clipboard,.c-quick-picks-card__single-buy {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    background: #dfdee8;
    display: -ms-flexbox;
    display: flex;
    font-size: 16px;
    font-weight: 700;
    height: calc(100% - 32px);
    justify-content: center;
    letter-spacing: 1.5px;
    line-height: 1.2;
    padding: 16px 0;
    text-transform: uppercase;
    width: 100%;
    z-index: 1;
}

.c-quick-picks-card__single-buy,.c-quick-picks-card__single-copy {
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.c-quick-picks-card__single-buy {
    background: #008874;
    color: #fff;
}

.c-range-field {
    width: 100%;
}

.c-range-field__input-container {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
}

.c-range-field__input {
    width: 100%;
}

.c-range-field__display {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    font-size: 12px;
    font-size: .6666667rem;
    line-height: 24px;
    margin-left: 16px;
    padding: 4px 6px;
    text-align: center;
    width: 40px;
}

.c-range-field input[type=range]::-moz-range-track {
    animate: .2s;
    background: #dfdee8;
    border-radius: 9999px;
    cursor: pointer;
    height: 10px;
    width: 100%;
}

.c-range-field input[type=range]::-moz-range-thumb {
    background: #fff;
    border: 1px solid #dfdee8;
    border-radius: 100%;
    box-shadow: 0 2px 4px 0 #0a082740;
    cursor: pointer;
    height: 16px;
    width: 16px;
}

.c-range-field input[type=range]::-moz-range-progress {
    background-color: #262262;
    border-radius: 9999px;
    height: 10px;
}

.c-quick-picks-button-group__button {
    -ms-flex-align: center;
    -ms-flex-pack: center;
    align-items: center;
    background-color: initial;
    border: none;
    border-radius: 8px;
    box-shadow: inset 0 0 0 2px #dfdee8,0 2px 4px 0 #2622620d;
    box-shadow: inset 0 0 0 2px #dfdee8;
    color: #0a0827;
    cursor: pointer;
    display: -ms-inline-flexbox;
    display: inline-flex;
    font-family: inherit;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 900;
    font-weight: 500;
    justify-content: center;
    letter-spacing: 0;
    line-height: 24px;
    margin-right: 4px;
    min-width: 40px;
    padding: 4px 6px;
    text-align: center;
    text-decoration: none;
    text-transform: none;
    transition: background-color .3s ease-in-out,color .3s ease-in-out;
}

@media (min-width:23.4375em) {
    .c-quick-picks-card--homepage .c-quick-picks-button-group__button {
        font-size: 16px;
        font-size: .8888889rem;
        line-height: 24px;
        min-width: 51px;
        padding: 8px 12px;
    }

    .c-quick-picks-button-group__button {
        margin-right: 8px;
    }
}

.c-quick-picks-button-group__button:last-child {
    margin-right: 0;
}

.c-quick-picks-button-group__button.is-checked {
    background-color: #262262;
    box-shadow: 0 2px 4px 0 #2622620d;
    color: #fff;
}

.c-quick-picks-button-group__button.is-disabled {
    background-color: #f4f4f7;
}

.c-quick-picks-button-group__icon {
    height: 16px;
    margin-left: 8px;
    width: 16px;
}

.c-state-results-table {
    opacity: 1;
}

.c-state-results-table .c-content-slide {
    width: calc(100% - 68px);
}

.c-state-results-table .c-state-results-table__controls--export .c-content-slide {
    width: calc(100% - 40px);
}

.c-state-results-table__controls {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    margin: 0 auto 16px;
    max-width: 400px;
    position: relative;
}

@media (min-width:73.125em) {
    .c-state-results-table__controls {
        margin-bottom: 32px;
    }
}

.c-state-results-table__controls .c-content-slide {
    left: 50px;
    position: relative;
}

.c-state-results-table__controls .c-content-slide__panel {
    text-align: center;
}

.c-state-results-table__controls-title {
    margin-bottom: 0;
}

.c-state-results-table__controls-icon {
    padding: 8px;
}

.c-state-results-table__controls-buttons {
    -ms-flex-pack: justify;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    position: absolute;
    right: 0;
    top: -3px;
    width: 100%;
}

.c-state-results-table__controls-button {
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    height: 32px;
    padding: 8px;
    width: 32px;
}

.c-state-results-table__controls-button.is-disabled {
    background-color: initial;
    box-shadow: none;
    opacity: .3;
    pointer-events: none;
}

.c-state-results-table__controls-button--prev {
    background-image: url(build/images/icons/16px/dark/arrow-left.e820daf7.svg);
    margin-right: 4px;
}

.c-state-results-table__controls-button--next {
    background-image: url(build/images/icons/16px/dark/arrow-right.adad23de.svg);
    margin-left: 4px;
}

.c-state-results-table .c-results-table {
    margin-top: 48px;
}

.c-state-results-table__no-draws {
    -ms-flex-pack: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    width: 100%;
}

@media (min-width:48em) {
    .c-state-results-table__no-draws {
        padding: 32px;
    }
}

.c-state-results-table__no-draws .c-message {
    max-width: 400px;
    width: 100%;
}

.c-state-results-table__no-draws .c-empty-state__content {
    margin: 16px;
}

.c-live-results-table {
    background: #fff;
    margin-bottom: 32px;
    position: relative;
}

@media (max-width:47.99em) {
    .c-live-results-table {
        padding: 16px 8px 8px;
    }
}

@media (min-width:48em) {
    .c-live-results-table {
        padding-top: 12px;
    }
}

.c-live-results-table__header {
    margin-bottom: 12px;
    position: relative;
}

.c-live-results-table__header h2 {
    margin: 0;
}

.c-live-results-table__indicator {
    height: 16px;
    position: relative;
    width: 16px;
}

.c-live-results-table__indicator,.c-live-results-table__indicator:after {
    background: #4fab57;
    border-radius: 100%;
    display: inline-block;
    margin-left: 16px;
}

.c-live-results-table__indicator:after {
    animation: pulse 3s ease-in-out infinite;
    content: "";
    height: 40px;
    left: -28px;
    position: absolute;
    top: -12px;
    width: 40px;
}

.c-live-results-table .c-expanding-menu {
    position: absolute;
    right: 0;
    top: -6px;
}

@media (min-width:48em) {
    .c-live-results-table .c-expanding-menu {
        cursor: default;
        height: auto;
        width: auto;
    }

    .c-live-results-table .c-expanding-menu__container {
        border: none;
        border-radius: 0!important;
        box-shadow: none!important;
        max-height: none!important;
        position: relative;
    }

    .c-live-results-table .c-expanding-menu__button {
        display: none;
    }

    .c-live-results-table .c-expanding-menu__list {
        display: -ms-flexbox!important;
        display: flex!important;
        margin-top: 0;
        max-width: none!important;
        opacity: 1!important;
        padding: 4px 0;
        width: auto!important;
    }

    .c-live-results-table .c-expanding-menu__list-item {
        margin-bottom: 0;
    }

    .c-live-results-table .c-expanding-menu__list-item .c-radio-field {
        padding: 8px;
    }
}

.c-live-results-table__extra-controls-button {
    font-weight: 300;
    position: absolute;
    right: 0;
    top: -8px;
}

@media (min-width:48em) {
    .c-live-results-table__extra-controls-button {
        display: none;
    }
}

.c-live-results-table__extra-controls .c-text-field {
    -ms-flex: 1;
    flex: 1;
    margin-top: 16px;
}

.c-live-results-table__extra-controls .c-radio-group {
    right: 0;
    top: 31px;
}

@media (max-width:47.99em) {
    .c-live-results-table__extra-controls .c-radio-group {
        background: #fff;
        border-radius: 4px;
        box-shadow: 0 1px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;
        padding: 8px;
        position: absolute;
        z-index: 9999;
    }
}

@media (min-width:48em) {
    .c-live-results-table__extra-controls .c-radio-group {
        display: -ms-flexbox;
        display: flex;
        right: 16px;
        top: 19px;
    }
}

.c-live-results-table__extra-controls .c-radio-field {
    color: #0a0827;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    padding: 0;
}

.c-live-results-table__extra-controls .c-radio-field.is-checked {
    background-color: initial;
    font-weight: 300;
}

.c-live-results-table .u-responsive-table {
    margin-bottom: 16px;
}

.c-live-results-table table {
    margin-bottom: -8px!important;
    margin-left: -8px;
    margin-right: -8px;
    table-layout: fixed;
    width: calc(100% + 16px);
}

@media (min-width:48em) {
    .c-live-results-table table {
        margin-bottom: -16px!important;
        margin-left: -24px;
        margin-right: -24px;
        width: calc(100% + 48px);
    }
}

.c-live-results-table thead {
    background: #f4f4f7;
}

.c-live-results-table .c-table thead th {
    background-color: #0a0827;
}

.c-live-results-table--paused tbody {
    opacity: .5;
}

.c-live-results-table td,.c-live-results-table th {
    padding: 12px 24px;
}

@media (max-width:47.99em) {
    .c-live-results-table td,.c-live-results-table th {
        padding: 8px;
    }
}

.c-live-results-table th:first-child {
    border-radius: 0!important;
}

.c-live-results-table td:last-child,.c-live-results-table th:last-child {
    border-radius: 0!important;
    text-align: right;
}

@media (min-width:48em) {
    .c-live-results-table td:last-child,.c-live-results-table th:last-child {
        width: 90px;
    }
}

.c-live-results-table td {
    background: #fff;
}

.c-live-results-table .c-table :last-child>:last-child>td {
    border-bottom: none;
}

.c-live-results-table .c-table :last-child>:last-child>td:first-child,.c-live-results-table .c-table :last-child>:last-child>td:last-child {
    border-radius: 0;
}

.c-live-results-table__paused-message {
    position: relative;
}

.c-live-results-table__paused-message td {
    background: #dfdee8!important;
    color: #0a0827cc!important;
    cursor: pointer;
    padding: 12px 24px;
    text-align: center!important;
}

@media (max-width:47.99em) {
    .c-live-results-table__paused-message td:nth-child(2),.c-live-results-table__paused-message td:nth-child(3) {
        display: none;
    }
}

.c-live-results-table__paused-message td:after {
    color: #0a0827;
    content: attr(data-label);
    left: 0;
    position: absolute;
    text-align: center;
    top: 12px;
    width: 100%;
}

@media (max-width:47.99em) {
    .c-live-results-table__paused-message td:after {
        display: none;
    }
}

@media (min-width:48em) {
    .c-live-results-table__paused-message-text {
        visibility: hidden;
    }
}

.c-live-results-table__separator {
    position: relative;
}

.c-live-results-table__separator td {
    background: #f4f4f7;
    color: #0a0827;
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.3333333;
    padding: 4px;
    text-align: center;
    text-transform: uppercase;
}

@media (max-width:47.99em) {
    .c-live-results-table__separator td:nth-child(2),.c-live-results-table__separator td:nth-child(3) {
        display: none;
    }
}

.c-live-results-table__separator td:after {
    color: #0a0827;
    content: attr(data-label);
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    left: 0;
    letter-spacing: 1px;
    line-height: 1.3333333;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    width: 100%;
}

@media (max-width:47.99em) {
    .c-live-results-table__separator td:after {
        display: none;
    }
}

@media (min-width:48em) {
    .c-live-results-table__separator-text {
        visibility: hidden;
    }
}

.c-live-results-table__paused {
    background: #5464e8!important;
    color: #fff!important;
    cursor: pointer;
    text-align: center!important;
}

.c-live-results-table__paused svg {
    fill: #fff;
    margin-right: 16px;
}

.c-live-results-table__item {
    position: relative;
}

.c-live-results-table__item-game {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    text-decoration: none;
}

.c-live-results-table__item-logo {
    height: 40px;
    margin-right: 16px;
    width: 40px;
}

@media (max-width:47.99em) {
    .c-live-results-table__item-logo {
        display: none;
    }
}

.c-live-results-table__item-subtitle {
    color: #0a082766;
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    font-weight: 300;
    letter-spacing: 1.25px;
    line-height: 1.4285714;
    text-transform: uppercase;
}

@media (max-width:47.99em) {
    .c-live-results-table__item-subtitle {
        font-size: 12px;
        font-size: .6666667rem;
        line-height: 1.6666667;
    }
}

.c-live-results-table__item-link-container {
    position: relative;
}

.c-live-results-table__item-link {
    display: block;
    height: 100%;
    left: 0;
    position: absolute;
    text-decoration: none;
    top: 0;
    width: 100%;
    z-index: 1;
}

@media (min-width:48em) {
    .c-live-results-table__item-link {
        background-image: url(build/images/icons/16px/dark/arrow-right.adad23de.svg);
        background-position: right 24px center;
        background-repeat: no-repeat;
        background-size: 16px;
    }
}

.c-live-results-table__time {
    background: #413e5b;
    border-radius: 4px;
    color: #fff;
    display: inline-block;
    font-weight: 900;
    letter-spacing: 1px;
    margin-bottom: 4px;
    padding: 4px 16px;
    text-transform: uppercase;
}

.c-live-results-table .c-countdown {
    display: inline-block;
    text-transform: lowercase;
}

.c-live-results-table__result-row:nth-child(n+2) {
    margin-top: 16px;
}

.c-live-results-table .c-result--long {
    margin-bottom: 0;
}

.c-live-results-table .c-result-card__result-label {
    margin-bottom: 4px;
    text-align: left;
}

.c-live-results-table__in-progress-col .c-live-results-table__sub,.c-live-results-table__not-in-progress-col .c-live-results-table__sub,.c-live-results-table__result-col .c-live-results-table__sub {
    color: #0a0827cc;
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.4285714;
    margin-top: 4px;
    opacity: .8;
}

@media (min-width:48em) {
    .c-live-results-table__in-progress-col .c-live-results-table__sub,.c-live-results-table__not-in-progress-col .c-live-results-table__sub,.c-live-results-table__result-col .c-live-results-table__sub {
        display: none;
    }
}

.c-live-results-table__delayed,.c-live-results-table__not-in-progress {
    background: #dfdee8;
    border-radius: 4px;
    display: inline-block;
    font-weight: 900;
    letter-spacing: 1px;
    padding: 4px 16px;
    text-align: center;
    text-transform: uppercase;
}

@media (max-width:47.99em) {
    .c-live-results-table__delayed,.c-live-results-table__not-in-progress {
        font-size: 10px;
        font-size: .5555556rem;
        line-height: 12px;
    }
}

.c-live-results-table__live {
    animation: throb 1.5s ease-in-out infinite;
    background: #4fab57;
    border-radius: 4px;
    color: #fff;
    display: inline-block;
    font-weight: 900;
    letter-spacing: 1px;
    padding: 4px 16px;
    text-align: center;
    text-transform: uppercase;
}

@media (max-width:47.99em) {
    .c-live-results-table__live {
        font-size: 10px;
        font-size: .5555556rem;
        line-height: 12px;
    }
}

.c-live-results-table--paused .c-live-results-table__live {
    animation: none;
}

.c-live-results-table__load-more-button {
    display: block;
    margin: 0 auto;
}

.c-live-results-table .svg-wait__arrow {
    animation: spin 20s ease-in-out infinite;
    transform-origin: center;
}

.c-live-results-table--paused .svg-wait__arrow {
    animation: none;
}

.c-live-results-table .c-table thead th {
    font-weight: 500;
    letter-spacing: 0;
    text-transform: none;
}

.c-live-results-table .c-table tbody tr th:first-child,.c-live-results-table .c-table tr td:first-child {
    border-left: 0;
}

.c-live-results-table .c-table tbody tr th:last-child,.c-live-results-table .c-table tr td:last-child {
    border-right: 0;
}

@media (max-width:47.99em) {
    .c-live-results-table .c-live-results-table__in-progress-body tr td:nth-child(3),.c-live-results-table .c-live-results-table__not-in-progress-body tr td:nth-child(3),.c-live-results-table .c-live-results-table__result-body tr td:nth-child(3),.c-live-results-table .c-live-results-table__upcoming-body tr:not(.c-live-results-table__separator) td:nth-child(2),.c-live-results-table .c-table tr td:nth-child(4),.c-live-results-table .c-table tr th:nth-child(3),.c-live-results-table .c-table tr th:nth-child(4) {
        display: none;
    }
}

@keyframes pulse {
    0% {
        opacity: 1;
        transform: scale(0);
    }

    to {
        opacity: 0;
        transform: scale(1);
    }
}

@keyframes throb {
    0% {
        opacity: 1;
    }

    50% {
        opacity: .75;
    }

    to {
        opacity: 1;
    }
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    47.5% {
        transform: rotate(0deg);
    }

    50% {
        transform: rotate(1turn);
    }

    52.5% {
        transform: rotate(1turn);
    }

    to {
        transform: rotate(1turn);
    }
}

.c-promo-card {
    background: linear-gradient(30deg,#0700b8 50%,#0f8);
    color: #fff;
}

.c-promo-card__subtitle {
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    letter-spacing: 1.25px;
    line-height: 1.4285714;
    margin-bottom: 8px;
    text-transform: uppercase;
}

.c-promo-card__image {
    height: 75px;
    margin-bottom: 16px;
}

.c-promo-card__title {
    font-size: 30px;
    font-size: 1.6666667rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 8px;
}

.c-promo-card__body {
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    line-height: 1.5;
    margin-bottom: 16px;
}

.c-password-field {
    position: relative;
}

.c-password-field__show-button {
    background: none;
    box-shadow: none;
    color: #0a082780;
    position: absolute;
    right: 0;
    top: 31px;
}

.c-password-field__show-button:hover {
    box-shadow: none;
}

.c-password-field__show-button:focus,.c-password-field__show-button:hover {
    color: #0a0827;
}

.c-password-field .c-text-field__input-container {
    padding-right: 70px;
}

.c-password-field__checklist {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-bottom: 0;
    padding: 8px 4px;
}

.c-password-field__checklist-item {
    -ms-flex-align: center;
    align-items: center;
    color: #0a0827cc;
    display: -ms-flexbox;
    display: flex;
    font-size: 12px;
    font-size: .6666667rem;
    line-height: 1.6666667;
    width: 50%;
}

.c-password-field__checklist-icon {
    display: inline-block;
    height: 16px;
    margin-right: 8px;
    width: 16px;
}

.c-password-field__checklist-icon svg {
    height: 16px;
    width: 16px;
}

.c-password-field__checklist-icon svg path:not(.check-circle__check) {
    fill: #dfdee8!important;
    transition: fill .15s ease-in-out;
}

.c-password-field__checklist-item--valid .c-password-field__checklist-icon svg path:not(.check-circle__check) {
    fill: #008874!important;
}

.c-registration-form {
    border-bottom: 1px solid #dfdee8;
    margin-bottom: 16px;
    overflow: visible;
}

.c-registration-form__newsletter {
    margin-bottom: 12px;
    margin-top: 12px;
}

.c-delete-account-form,.c-reset-password-request-form,.c-reset-password-reset-form {
    border-bottom: 1px solid #dfdee8;
    margin-bottom: 16px;
    overflow: visible;
}

.c-dob-field__container {
    display: -ms-flexbox;
    display: flex;
    position: relative;
}

.c-dob-field.is-disabled .c-dob-field__container {
    background-color: #f4f4f7;
}

.c-dob-field__input {
    margin-right: 16px;
    width: 48px;
}

.c-dob-field__input:last-child {
    -ms-flex-positive: 1;
    flex-grow: 1;
    margin-right: 0;
}

.c-dob-field .c-number-field__input-container.c-input,.c-dob-field .c-text-field__input-container.c-input {
    background: none;
    box-shadow: none;
    padding: 0;
}

.c-dob-field.is-disabled .c-dob-field .c-number-field__input {
    color: #0a082780;
}

.c-dob-field__error-message {
    background: #f2d2d5;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    color: #be1e2d;
    display: block;
    font-size: 13px;
    font-size: .7222222rem;
    font-weight: 500;
    line-height: 1.5384615;
    margin: -6px 0 8px;
    padding: 10px 8px 4px;
}

.c-login-form--admin .c-login-form__submit-button {
    background-color: #262262!important;
}

.c-login-form__remember-me {
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 1.4285714;
}

.c-profile-form {
    border-bottom: 1px solid #dfdee8;
    margin-bottom: 16px;
    overflow: visible;
}

.pac-container {
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;
    font-family: DM Sans,sans-serif,serif;
    padding: 16px 4px 4px;
    z-index: 1;
}

.pac-icon {
    margin-top: 0;
}

.pac-item {
    border-radius: 8px;
    border-top: none;
    color: #0a0827;
    cursor: pointer;
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 20px;
    margin-bottom: 4px;
    padding: 8px;
}

.pac-item:last-child {
    margin-bottom: 0;
}

.pac-item:hover {
    background: #f4f4f7;
}

.pac-item-query {
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 20px;
}

.c-notifications-form .c-notifications-form__checkbox-row {
    margin-bottom: 16px;
}

.c-notifications-form .c-checkbox-field {
    font-size: 18px;
    font-size: 1rem;
    font-weight: 500;
    line-height: 1;
    padding: 0;
}

.c-notifications-form .c-notifications-form__checkbox-description {
    color: #0a0827cc;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    line-height: 1.5;
    margin-bottom: 0;
    margin-right: 60px;
}

.c-lucky-numbers-ticket {
    background-image: url(build/images/backgrounds/stars-bg.06b6efb3.svg);
    background-position: top;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 8px;
    box-shadow: inset 0 0 100px 0 #000000e6;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 24px 16px;
    position: relative;
    text-align: center;
    width: 100%;
}

.c-lucky-numbers-ticket--daily .c-lucky-numbers-ticket__row {
    -ms-flex-align: center;
    -ms-flex-pack: end;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: flex-end;
}

.c-lucky-numbers-ticket--daily .c-lucky-numbers-ticket__line {
    -ms-flex-pack: end;
    -ms-flex: 1;
    flex: 1;
    justify-content: flex-end;
    margin-left: auto;
    margin-right: 0;
    padding: 8px 0;
}

.c-lucky-numbers-ticket--daily .c-lucky-numbers-ticket__draw-icon {
    -ms-flex-item-align: center;
    align-self: center;
    display: none;
    margin-right: 8px;
}

.c-lucky-numbers-ticket--daily .c-lucky-numbers-ticket__draw-label {
    -ms-flex-item-align: center;
    align-self: center;
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    line-height: 1.1428571;
    padding: 16px 0;
    text-transform: uppercase;
}

.c-lucky-numbers-ticket__header {
    -ms-flex-align: start;
    align-items: flex-start;
    color: #fff;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
    margin-bottom: 32px;
}

.c-lucky-numbers-ticket__header-body {
    -ms-flex-item-align: center;
    align-self: center;
    color: #fff;
    -ms-flex: 1;
    flex: 1;
    text-align: left;
}

.c-lucky-numbers-ticket__title {
    font-size: 24px;
    font-size: 1.3333333rem;
    line-height: 1.3333333;
    margin-bottom: 0;
}

.c-lucky-numbers-ticket__logo {
    background-color: #fff;
    border-radius: 100%;
    height: 64px;
    margin-left: 8px;
    padding: 4px;
    width: 64px;
}

.c-lucky-numbers-ticket__sub {
    color: #fff;
    text-align: left;
}

.c-lucky-numbers-ticket__body {
    background-color: #0000004d;
    border-radius: 8px;
    box-shadow: inset 0 0 0 1px #ffffff4d;
    color: #fff;
    padding: 16px;
    text-align: left;
}

.c-lucky-numbers-ticket__date {
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.5;
    margin-bottom: 16px;
}

.c-lucky-numbers-ticket__line {
    -ms-flex-pack: start;
    display: -ms-flexbox;
    display: flex;
    justify-content: flex-start;
    list-style: none;
    margin: 0 auto 0 0;
    width: 100%;
}

.c-lucky-numbers-ticket__abbr {
    color: #fff;
}

.c-lucky-numbers-ticket__placeholder {
    color: #fffc;
    text-align: left;
}

@media (min-width:23.4375em) {
    .c-lucky-numbers-ticket .c-lucky-numbers-ticket__draw-icon {
        display: block;
    }
}

.c-donut-chart {
    height: 180px;
    position: relative;
    width: 180px;
}

.c-donut-chart__svg {
    transform: rotate(-90deg);
}

.c-donut-chart__value {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    font-size: 24px;
    font-size: 1.3333333rem;
    font-weight: 700;
    height: 100%;
    justify-content: center;
    left: 0;
    line-height: 1.1666667;
    position: absolute;
    top: 0;
    width: 100%;
}

.c-result-example__group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-left: 0;
}

@media (max-width:23.4275em) {
    .c-result-example__group {
        margin-bottom: 4px;
    }
}

.c-result-example__separator {
    display: inline-block;
    font-weight: 700;
    margin-right: 4px;
}

@media (max-width:47.99em) {
    .c-result-example__separator {
        line-height: 20px;
    }
}

.c-tool-list__item {
    margin-bottom: 16px;
}

.c-tool-link-card {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    overflow: visible;
    padding: 16px;
    width: 100%;
}

.c-tool-link-card:after {
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 2px #26226226;
}

.c-tool-link-card--coming-soon {
    opacity: .5;
    pointer-events: none;
}

.c-tool-link-card--authenticated-only:after {
    background-image: url(build/images/icons/16px/color/lock.d10139fe.svg);
}

.c-tool-link-card__icon {
    height: 40px;
    margin-right: 12px;
    width: 40px;
}

.c-tool-link-card__icon svg {
    height: 40px;
    width: 40px;
}

.c-tool-link-card__body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    font-weight: 700;
}

.c-tool-link-card__title {
    font-size: 18px;
    font-size: 1rem;
    line-height: 1.2222222;
    text-decoration: none;
}

.c-tool-link-card__desc {
    color: #0a0827cc;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 400;
    line-height: 1.4285714;
    margin-bottom: 0;
}

.c-tool-link-card--coming-soon .c-tool-link-card__desc {
    font-size: 12px;
    font-size: .6666667rem;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.3333333;
    margin-top: 4px;
    text-transform: uppercase;
}

.c-toggle-field {
    border-radius: 8px;
    overflow: hidden;
    position: relative;
    width: 100%;
}

.c-toggle-field__slider {
    background-color: #2622621a;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
}

.c-toggle-field .c-radio-group {
    display: -ms-flexbox;
    display: flex;
}

.c-toggle-field .c-radio-field {
    border: 1px solid #dfdee8;
    border-radius: 0;
    color: #0a082780!important;
    cursor: pointer;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 900;
    letter-spacing: 1.25px;
    line-height: 20px;
    padding: 8px 0;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    transition: color .3s ease-in-out;
    vertical-align: middle;
    width: 100%;
    z-index: 1;
}

.c-toggle-field .c-radio-field:first-child {
    border-bottom-left-radius: 8px;
    border-top-left-radius: 8px;
}

.c-toggle-field .c-radio-field:last-child {
    border-bottom-right-radius: 8px;
    border-top-right-radius: 8px;
}

.c-toggle-field .c-radio-field.is-checked {
    border: 1px solid #262262!important;
    color: #0a0827!important;
}

.c-toggle-field .c-radio-field__input {
    clip: rect(0 0 0 0)!important;
    border: 0!important;
    -webkit-clip-path: inset(50%)!important;
    clip-path: inset(50%)!important;
    height: 1px!important;
    margin: -1px!important;
    overflow: hidden!important;
    padding: 0!important;
    position: absolute!important;
    white-space: nowrap!important;
    width: 1px!important;
}

.c-user-acquisition-card {
    animation: fade-in .6s ease-in-out;
    border: 1px solid #0a0827;
    margin: 40px auto 52px;
    max-width: 700px;
    position: -webkit-sticky;
    position: sticky;
    text-align: center;
    top: 0;
}

.c-user-acquisition-card__img {
    margin: 0 auto 16px;
    max-width: 200px;
    width: 100px;
}

@keyframes fade-in {
    0% {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

.c-spotlight-card {
    -ms-flex-pack: end;
    background-color: #fff;
    border-radius: 12px;
    color: #fff;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    justify-content: flex-end;
    min-height: 300px;
    overflow: hidden;
    position: relative;
    width: 100%;
}

.c-spotlight-card--simple .c-spotlight-card__body {
    -ms-flex-pack: center;
    justify-content: center;
}

.c-spotlight-card--cyan.c-spotlight-card--community {
    background-image: radial-gradient(farthest-side,#ffffff0d 99.9%,#fff0 100%),linear-gradient(to top right,#0e475e,#4eaac6);
}

.c-spotlight-card--cyan,.c-spotlight-card--cyan.c-spotlight-card--community {
    background-color: #4eaac6;
    background-position: right -340px top -300px,right 0 top;
    background-repeat: no-repeat;
    background-size: 650px 650px,cover;
}

.c-spotlight-card--cyan {
    background-image: radial-gradient(farthest-side,#ffffff0d 100%,#0000),linear-gradient(to top right,#0e475e,#4eaac6);
}

.c-spotlight-card--lucky.c-spotlight-card--green {
    background-color: #159e4c;
    background-image: url(build/images/backgrounds/lucky.2f4d8089.svg),radial-gradient(farthest-side,#ffffff0d 99.9%,#fff0 100%),linear-gradient(to top right,#008874,#159e4c);
    background-position: right 0 top 0,right -340px top -300px,right 0 top;
    background-repeat: no-repeat;
    background-size: auto,650px 650px,cover;
}

.c-spotlight-card--green {
    background-color: #159e4c;
    background-image: radial-gradient(farthest-side,#ffffff0d 100%,#0000),linear-gradient(to top right,#008874,#159e4c);
}

.c-spotlight-card--blue,.c-spotlight-card--green {
    background-position: right -340px top -300px,right 0 top;
    background-repeat: no-repeat;
    background-size: 650px 650px,cover;
}

.c-spotlight-card--blue {
    background-color: #262262;
    background-image: radial-gradient(farthest-side,#ffffff0d 99.9%,#fff0 100%),linear-gradient(to top right,#6358ff,#262262);
}

.c-spotlight-card--orange {
    background-color: #fff;
    background-image: radial-gradient(farthest-side,#ffffff0d 99.9%,#fff0 100%),linear-gradient(to top right,#ff9e00,#fff);
    background-position: right -340px top -300px,right 0 top;
    background-repeat: no-repeat;
    background-size: 650px 650px,cover;
    color: #0a0827;
}

.c-spotlight-card--orange .c-spotlight-card__sub {
    color: #0a0827cc;
}

.c-spotlight-card__media,.c-spotlight-card__rank {
    margin-bottom: auto;
    max-height: 100px;
    width: 160px;
}

.c-spotlight-card__rank {
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    height: 100px;
    justify-content: center;
    width: 235px;
}

.c-spotlight-card__rank-icon {
    height: 50px;
    margin-right: 16px;
    width: 50px;
}

.c-spotlight-card__rank-info {
    -ms-flex-pack: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    justify-content: center;
}

.c-spotlight-card__rank-title {
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    letter-spacing: 1.25px;
    line-height: 1.4285714;
    opacity: .8;
    text-transform: uppercase;
}

.c-spotlight-card__rank-rank {
    font-weight: 700;
    margin-bottom: 0;
}

.c-spotlight-card__body {
    -ms-flex-align: center;
    -ms-flex-item-align: center;
    -ms-flex-pack: end;
    align-items: center;
    align-self: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex: auto;
    flex: auto;
    -ms-flex-direction: column;
    flex-direction: column;
    justify-content: flex-end;
    padding: 24px;
    text-align: center;
}

.c-spotlight-card__title {
    font-size: 24px;
    font-size: 1.3333333rem;
    font-weight: 700;
    line-height: 1.3333333;
    margin-bottom: 4px;
}

.c-spotlight-card__sub {
    color: #fffc;
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 1.4285714;
    margin-bottom: 0;
}

.c-spotlight-card__footer {
    -ms-flex-line-pack: center;
    -ms-flex-pack: justify;
    align-content: center;
    background-color: #0000001a;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    padding: 20px 24px;
    width: 100%;
}

.c-spotlight-card__cta {
    display: block;
    -ms-flex: 1;
    flex: 1;
    font-weight: 500;
    text-decoration: none;
}

.c-spotlight-card__cta:before {
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.c-user-account-menu {
    cursor: pointer;
    display: block;
    height: 40px;
    margin: 4px;
    position: relative;
    width: 40px;
}

@media (min-width:48em) {
    .c-user-account-menu {
        height: 48px;
        margin: 4px 0;
        width: 144px;
    }
}

.c-user-account-menu__container {
    background-color: #fff;
    border: none;
    border-radius: 8px;
    min-height: 40px;
    min-width: 40px;
    overflow: hidden;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
    z-index: 74;
}

@media (min-width:48em) {
    .c-user-account-menu__container {
        min-height: 48px;
        min-width: 144px;
    }
}

.c-user-account-menu__button {
    background-color: initial;
    border: none;
    cursor: pointer;
    font-family: DM Sans,sans-serif;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    left: 0;
    line-height: 1.25;
    min-width: 200px;
    padding: 4px;
    position: absolute;
    text-align: left;
}

@media (min-width:48em) {
    .c-user-account-menu__button {
        padding: 8px 12px;
    }
}

.c-user-account-menu__list {
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: none;
    display: block;
    display: none;
    list-style-type: none;
    margin: 40px 0 0;
    min-width: 100%;
    opacity: 0;
    overflow: scroll;
    overflow: -moz-scrollbars-none;
    overscroll-behavior-y: contain;
    scrollbar-width: none;
    white-space: nowrap;
    width: 200px;
    z-index: 75;
}

.c-user-account-menu__list::-webkit-scrollbar {
    display: none;
}

@media (min-width:48em) {
    .c-user-account-menu__list {
        margin-top: 48px;
    }
}

.c-user-account-menu__list-group {
    border-top: 1px solid #dfdee8;
    padding-bottom: 4px;
    padding-top: 4px;
}

.c-user-account-menu__list-button {
    -ms-flex-align: center;
    align-items: center;
    cursor: pointer;
    display: -ms-flexbox;
    display: flex;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.25;
    padding: 12px 12px 12px 40px;
    text-decoration: none;
}

.c-user-account-menu__list-button.has-icon {
    background-position: 12px 14px;
    background-repeat: no-repeat;
    background-size: 16px;
}

.c-user-account-menu__list-button:hover {
    background-color: #f4f4f7;
}

.c-user-account-menu__list-button img,.c-user-account-menu__list-button svg {
    margin-right: 12px;
}

.c-user-account-menu__list.is-hidden {
    display: none;
}

.c-tools-acquisition-card {
    background-color: #262262;
    background-image: url(build/images/backgrounds/balls-default.179760b0.svg);
    color: #fff;
    text-align: center;
}

.c-tools-acquisition-card__cta {
    margin-bottom: 16px;
}

@media (min-width:48em) {
    .c-tools-acquisition-card__cta {
        -ms-flex-pack: center;
        -ms-flex-align: center;
        align-items: center;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
    }
}

.c-tools-acquisition-card__cta-text {
    color: #fff;
    font-size: 24px;
    font-size: 1.3333333rem;
    font-weight: 700;
    line-height: 1.1666667;
}

@media (min-width:48em) {
    .c-tools-acquisition-card__cta-text {
        margin-bottom: 0;
        margin-right: 16px;
    }
}

.c-tools-acquisition-card__login-text {
    color: #0a0827cc;
    color: #fffc;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 400;
    line-height: 1.4285714;
}

.c-accessible-select-field__button:focus {
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 2px #0a0827;
}

.c-accessible-select-field__list-item {
    display: block;
}

.c-accessible-select-field__list-item.is-focused:not(.is-default) {
    border-radius: 8px;
    box-shadow: 0 2px 4px 0 #dfdee8,inset 0 0 0 2px #dfdee8;
}

.c-accessible-select-field__list-item.is-default {
    cursor: default;
    opacity: .5;
}

.c-user-promo-card {
    background-color: #fff;
    background-image: url(build/images/backgrounds/balls-pattern.9a59667e.svg);
    background-position: 100% 100%;
    background-repeat: no-repeat;
    background-size: contain;
    border: 1px solid #0a0827;
    border-radius: 8px;
    box-shadow: 0 2px 8px 0 #2622620d;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 32px 24px 24px;
    position: relative;
    width: 100%;
}

.c-user-promo-card--split {
    background-image: url(build/images/backgrounds/balls-pattern.9a59667e.svg),linear-gradient(180deg,#a1cf6b0d,#a1cf6b0d);
}

.c-user-promo-card__media {
    margin-bottom: 16px;
}

.c-user-promo-card__logo {
    display: block;
}

.c-user-promo-card__title {
    font-size: 24px;
    font-size: 1.3333333rem;
    line-height: 1.3333333;
}

.c-user-promo-card__sub {
    font-size: 20px;
    font-size: 1.1111111rem;
    line-height: 1.2;
    margin-bottom: 20px;
}

.c-user-promo-card__reasons {
    list-style-type: none;
    margin: 0 0 16px;
    padding: 0;
}

.c-user-promo-card__reasons li {
    background-image: url(build/images/logo-ball-dark.50800864.svg);
    background-position: 0;
    background-repeat: no-repeat;
    background-size: 24px 24px;
    color: #0a082799;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.5;
    margin-bottom: 12px;
    padding-left: 36px;
}

.c-user-promo-card__reasons li:last-of-type {
    margin-bottom: 0;
}

.c-user-promo-card__cta {
    font-size: 24px;
    font-size: 1.3333333rem;
    line-height: 1.1666667;
    text-transform: none;
}

@media (min-width:73.125em) {
    .c-user-promo-card--split .c-user-promo-card__reasons {
        -ms-flex-line-pack: center;
        align-content: center;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding: 4px 0;
    }

    .c-user-promo-card--split .c-user-promo-card__reasons li {
        -ms-flex: 50%;
        flex: 50%;
    }

    .c-user-promo-card--split .c-user-promo-card__reasons li:last-of-type {
        margin-bottom: 12px;
    }
}

.c-expanding-menu {
    cursor: pointer;
    display: block;
    height: 40px;
    position: relative;
    width: 40px;
}

.c-expanding-menu__container {
    background-color: #fff;
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;
    min-height: 40px;
    min-width: 40px;
    overflow: hidden;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
    z-index: 74;
}

.c-expanding-menu__button {
    background-color: initial;
    background-image: url(build/images/icons/16px/dark/export.728edb5e.svg);
    background-position: center left 12px;
    background-repeat: no-repeat;
    background-size: 16px;
    border: 0;
    cursor: pointer;
    font-family: DM Sans,sans-serif;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    left: 0;
    line-height: 1.25;
    min-height: 40px;
    padding: 11px 12px 9px 36px;
    position: absolute;
    text-align: left;
    width: 120px;
}

.c-expanding-menu__button-label {
    opacity: 0;
}

.c-expanding-menu__list {
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: none;
    display: block;
    list-style-type: none;
    margin: 40px 0 0;
    min-width: 100%;
    overflow: scroll;
    overflow: -moz-scrollbars-none;
    overscroll-behavior-y: contain;
    padding: 16px 12px;
    scrollbar-width: none;
    white-space: nowrap;
    width: 120px;
    z-index: 75;
}

.c-expanding-menu__list::-webkit-scrollbar {
    display: none;
}

.c-expanding-menu__list-item {
    margin-bottom: 16px;
}

.c-expanding-menu__list-item:last-child {
    margin-bottom: 0;
}

.c-expanding-menu__list-button {
    -ms-flex-align: center;
    align-items: center;
    background: none;
    background-repeat: no-repeat;
    background-size: 16px;
    border: 0;
    cursor: pointer;
    display: -ms-flexbox;
    display: flex;
    font-family: DM Sans,sans-serif;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1;
    padding: 0 0 0 24px;
    text-decoration: none;
}

.c-expanding-menu__list-button img,.c-expanding-menu__list-button svg {
    margin-right: 12px;
}

.c-expanding-menu__list.is-hidden {
    display: none;
}

.c-jackpots .c-select-field {
    width: 100%;
}

.c-jackpots__table {
    margin-top: 8px;
}

.c-jackpots__table,.c-jackpots__table-items {
    display: block;
    width: 100%;
}

.c-jackpots__table tr {
    margin-bottom: 16px;
}

.c-jackpots__state-dropdown-body {
    max-height: 183px;
}

@media (min-width:48em) {
    .c-jackpots__state-dropdown-body {
        max-height: 343px;
    }
}

.c-jackpots__state-dropdown-footer {
    margin-top: 0;
}

.c-jackpot-tool__select-field {
    width: 288px;
}

@media (max-width:47.99em) {
    .c-payment-schedule-tool__select-field {
        margin-bottom: 8px;
    }
}

.c-cash-converter-tool__number-field {
    display: inline-block;
    width: 288px;
}

@media (max-width:47.99em) {
    .c-cash-converter-tool__number-field {
        margin-top: 8px;
    }

    .c-cash-converter-tool__select-field {
        margin-bottom: 8px;
    }
}

.c-jackpot-tax-tool .c-form-card__title {
    margin-bottom: 0;
}

.c-jackpot-tax-tool .c-form-card__calculated-values {
    margin-top: 0;
}

.c-jackpot-tax-tool .c-form-card__calculated-values--sm {
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.25;
}

.c-number-checker__result-header {
    margin-bottom: 16px;
}

.c-number-checker__result-header-text {
    font-size: 21px;
    margin-bottom: 8px;
}

.c-number-checker__result-header .c-export-menu__button {
    height: 40px;
    padding: 12px;
    width: 40px;
}

.c-number-checker__result-actions {
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 16px;
}

.c-number-checker__result-actions .c-number-checker__filter-toggle,.c-number-checker__result-actions .c-number-checker__sort-field {
    cursor: pointer;
    -ms-flex: 1;
    flex: 1;
    margin-right: 8px;
}

.c-number-checker__result-list {
    display: block;
    margin-bottom: 24px;
    width: 100%;
}

.c-number-checker__result-items {
    display: block;
    margin: 0;
    width: 100%;
}

.c-number-checker__result-item {
    margin-bottom: 24px;
}

.c-number-checker__result-item-header {
    background-color: #dfdee8;
    color: #0a082799;
    display: block;
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    letter-spacing: 1.25px;
    line-height: 1.4285714;
    margin-bottom: 16px;
    padding-bottom: 6px;
    padding-top: 6px;
    text-transform: uppercase;
}

.c-number-checker__result-item-header td,.c-number-checker__result-item-header th {
    display: block;
    padding: 0;
    text-align: center;
}

.c-number-checker__tr {
    -ms-flex-pack: justify;
    -ms-flex-align: center;
    align-items: center;
    border-top: 1px solid #f4f4f7;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    padding: 16px 0 4px;
}

.c-number-checker__filter-panel-section {
    border-bottom: 1px solid #dfdee8;
    margin-bottom: 16px;
    padding: 16px;
}

.c-number-checker__filter-panel .c-filter-sheet__footer .c-btn {
    width: 100%;
}

.c-number-checker__specific-date.is-hidden {
    display: none;
}

.c-number-checker__pagination-end {
    display: -ms-flexbox;
    display: flex;
    width: 100%;
}

.c-number-checker__pagination-end td {
    -ms-flex: 1;
    flex: 1;
}

.c-quick-picks__info-button-body-header {
    display: block;
    font-size: 18px;
    font-weight: 900;
    margin-bottom: 16px;
    text-align: center;
}

.c-quick-picks .c-info-button__tooltip a {
    border-bottom: 1px solid #fff;
    color: #fff;
    font-weight: 900;
    text-decoration: none;
}

.c-quick-picks__lines .c-radio-field {
    min-width: 39px;
}

.c-quick-picks__pairs .c-checkbox-field {
    margin-bottom: 8px;
}

.c-quick-picks__pairs .c-checkbox-field:last-child {
    margin-bottom: 0;
}

.c-quick-picks__line {
    -ms-flex-pack: justify;
    -ms-flex-align: center;
    align-items: center;
    background: #fff;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    margin-bottom: 24px;
    padding: 16px;
}

.c-quick-picks__line:last-child {
    margin-bottom: 16px;
}

@media (max-width:23.4275em) {
    .c-quick-picks__line {
        padding: 16px 8px;
    }
}

.c-quick-picks__line .c-ball {
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-right: 4px;
}

.c-quick-picks__line-copy {
    background-image: url(build/images/icons/16px/dark/copy.56d70f3c.svg);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: 16px;
    border: 2px solid #dfdee8;
    height: 32px;
    width: 32px;
}

.c-quick-picks__line-copy span {
    display: none;
}

.c-quick-picks__result-header {
    -ms-flex-pack: justify;
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    margin-bottom: 16px;
}

.c-quick-picks__result-header-text {
    font-size: 21px;
    margin-bottom: 0;
}

.c-hot-cold__distribution-grid {
    width: 100%;
}

@supports (display:grid) {
    .c-hot-cold__distribution-grid {
        grid-column-gap: 8px;
        grid-row-gap: 8px;
        column-gap: 8px;
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(40px,1fr));
        row-gap: 8px;
    }
}

.c-hot-cold__distribution-grid .c-ball {
    margin-bottom: 8px;
    margin-right: 8px;
}

@supports (display:grid) {
    .c-hot-cold__distribution-grid .c-ball {
        margin: 0;
    }
}

.c-hot-cold__distribution-table {
    width: calc(100% + 32px);
}

.c-hot-cold__distribution-table td:first-child,.c-hot-cold__distribution-table th:first-child {
    border-left: 0!important;
    padding-left: 32px;
}

.c-hot-cold__distribution-table td:last-child,.c-hot-cold__distribution-table th:last-child {
    border-right: 0!important;
    padding-right: 32px;
}

.c-hot-cold__distribution-table tr:last-child td {
    border-bottom: 0;
    border-radius: 0!important;
}

@media (min-width:73.125em) {
    .c-hot-cold__distribution-table {
        width: calc(100% + 24px);
    }

    .c-hot-cold__distribution-table td:first-child,.c-hot-cold__distribution-table th:first-child {
        padding-left: 24px;
    }

    .c-hot-cold__distribution-table td:last-child,.c-hot-cold__distribution-table th:last-child {
        padding-right: 24px;
    }
}

.c-drawn-together__overview-card-label {
    color: #0a0827cc;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    line-height: 1.5;
}

.c-endings__analysis-ending-radio-field {
    width: 40px;
}

.c-sums .c-content-slide {
    margin-bottom: -200px;
    padding-bottom: 200px;
}

@media (max-width:47.99em) {
    .c-even-odd .c-accordion-group__control {
        padding-left: 0;
        padding-right: 0;
    }

    .c-even-odd .c-accordion-group__panel {
        padding-left: 40px;
        padding-right: 0;
    }

    .c-even-odd .c-ball--xs,.c-even-odd .c-ball--xs .c-ball__label {
        font-size: 10px;
        font-size: .5555556rem;
        height: 20px;
        line-height: 1.2;
        width: 20px;
    }
}

.c-even-odd__analysis-result-example {
    -ms-flex-pack: center;
    justify-content: center;
}

@media (max-width:47.99em) {
    .c-high-low .c-accordion-group__control {
        padding-left: 0;
        padding-right: 0;
    }

    .c-high-low .c-accordion-group__panel {
        padding-left: 40px;
        padding-right: 0;
    }

    .c-high-low .c-ball--xs,.c-high-low .c-ball--xs .c-ball__label {
        font-size: 10px;
        font-size: .5555556rem;
        height: 20px;
        line-height: 1.2;
        width: 20px;
    }
}

.c-high-low__analysis-result-example {
    -ms-flex-pack: center;
    justify-content: center;
}

.c-media-header {
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    position: relative;
}

.c-media-header__media {
    margin: 0 8px 0 0;
}

.c-media-header__logo {
    display: block;
    pointer-events: none;
}

.c-media-header__body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1;
    flex: 1;
    -ms-flex-direction: column-reverse;
    flex-direction: column-reverse;
}

.c-media-header__title {
    font-size: 18px;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.2222222;
    margin-bottom: 0;
    padding-right: 40px;
}

.c-media-header__abbr {
    font-weight: 400;
    text-transform: uppercase;
}

.c-media-header__sub {
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 500;
    line-height: 1.4285714;
    margin-bottom: 1px;
}

.c-media-header__btn {
    -ms-flex: none;
    flex: none;
    height: 32px;
    width: 32px;
}

.c-definition {
    scroll-padding-top: 70px;
}

.c-definition__group {
    border-top: 1px solid #dfdee8;
    display: -ms-flexbox;
    display: flex;
    padding: 40px 0;
    position: relative;
}

.c-definition__group:last-of-type {
    border-bottom: none;
}

.c-definition__group-title {
    color: #0a0827cc;
    font-size: 32px;
    font-size: 1.7777778rem;
    font-weight: 700;
    line-height: 1.25;
    padding-right: 32px;
}

.c-definition dt {
    font-size: 20px;
    font-size: 1.1111111rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 8px;
}

.c-definition dt[id] {
    scroll-margin-top: 56px;
}

@media (min-width:48em) {
    .c-definition dt[id] {
        scroll-margin-top: 72px;
    }
}

.c-definition dd {
    color: #0a0827cc;
    margin: 0 0 40px;
}

.c-definition dd:last-of-type,.c-definition dd:last-of-type>:last-child {
    margin-bottom: 0;
}

.a-fade-group {
    position: relative;
    width: 100%;
}

.a-fade-item {
    display: none;
    opacity: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.a-fade-item.is-active {
    display: block;
    opacity: 1;
    position: static;
}

.t-display {
    font-size: 42px;
    font-size: 2.3333333rem;
    font-weight: 700;
    line-height: 1.1904762;
}

.t-h1 {
    font-size: 36px;
    font-size: 2rem;
    line-height: 1.2222222;
}

.t-h1,.t-h2 {
    font-weight: 700;
}

.t-h2 {
    font-size: 32px;
    font-size: 1.7777778rem;
    line-height: 1.1875;
}

.t-h3 {
    font-size: 28px;
    font-size: 1.5555556rem;
    line-height: 1.2142857;
}

.t-h3,.t-h4 {
    font-weight: 700;
}

.t-h4 {
    font-size: 24px;
    font-size: 1.3333333rem;
    line-height: 1.1666667;
}

.t-h5 {
    font-weight: 700;
}

.t-h5,.t-h6 {
    font-size: 21px;
    font-size: 1.1666667rem;
    line-height: 1.2380952;
}

.t-h6 {
    font-weight: 400;
}

.t-body-1 {
    color: #0a0827cc;
}

.t-body-1,.t-body-2 {
    font-size: 18px;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5555556;
}

.t-bold-1 {
    color: #0a0827cc;
}

.t-bold-1,.t-bold-2 {
    font-size: 18px;
    font-size: 1rem;
    font-weight: 500;
    line-height: 1.5555556;
}

.t-body-small-1 {
    color: #0a0827cc;
}

.t-body-small-1,.t-body-small-2 {
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 400;
    line-height: 1.5;
}

.t-bold-small-1 {
    color: #0a0827cc;
}

.t-bold-small-1,.t-bold-small-2 {
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 500;
    line-height: 1.5;
}

.t-small-1 {
    color: #0a0827cc;
}

.t-small-1,.t-small-2 {
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 400;
    line-height: 1.4285714;
}

.t-small-bold-1 {
    color: #0a0827cc;
}

.t-small-bold-1,.t-small-bold-2 {
    font-weight: 500;
}

.t-button,.t-small-bold-1,.t-small-bold-2 {
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 1.4285714;
}

.t-button {
    letter-spacing: 1.25px;
}

.t-button,.t-button-large {
    font-weight: 700;
    text-transform: uppercase;
}

.t-button-large {
    font-size: 16px;
    font-size: .8888889rem;
    letter-spacing: 1.5px;
    line-height: 1.25;
}

.t-overline {
    font-size: 14px;
    font-size: .7777778rem;
    font-weight: 700;
    letter-spacing: 1.25px;
    line-height: 1.4285714;
    text-transform: uppercase;
}

.t-overline-small {
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.t-overline-small,.t-sub-text {
    font-size: 12px;
    font-size: .6666667rem;
    line-height: 1.3333333;
}

.t-sub-text {
    color: #0a0827cc;
}

.t-lower {
    text-transform: lowercase;
}

.t-center {
    text-align: center;
}

.t-right {
    text-align: right;
}

#fs-sticky-footer {
    z-index: 150;
}

.st-search-container {
    position: relative;
}

.st-search-suggestions .st-spelling-suggestion-link {
    -ms-flex-align: start;
    align-items: flex-start;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px 0 #0a08270d;
    color: #0a0827;
    display: -ms-flexbox;
    display: flex;
    font-family: DM Sans,sans-serif,serif;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.25;
    margin: 0;
    position: relative;
    text-align: left;
}

.st-ui-no-results .st-spelling-suggestion-link.st-ui-type-heading {
    background-image: none;
    color: #0a0827;
    font-weight: 400;
    margin: 0;
    padding: 16px;
}

.c-text-field__input-container .st-default-search-input,.c-text-field__input-container .st-ui-search-input {
    background: none;
    background-clip: padding-box;
    border: none;
    border-radius: 6px;
    box-shadow: none;
    box-sizing: initial;
    color: #3b454f;
    display: inline-block;
    font-family: DM Sans,sans-serif,serif;
    font-weight: 400;
    height: auto;
    padding: 0;
    width: auto;
}

.st-ui-injected-search-summary.st-search-summary {
    font-family: DM Sans,sans-serif,serif;
    padding: 16px 0 24px;
}

.st-autocomplete-results.st-ui-autocomplete a.st-ui-result.__swiftype_result {
    border: none;
    border-radius: 0;
    box-shadow: 0 0 1px 0 #26226280;
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.25;
    margin-bottom: 0;
    padding: 16px 12px;
}

@media (min-width:73.125em) {
    .st-autocomplete-results.st-ui-autocomplete a.st-ui-result.__swiftype_result {
        padding: 16px;
    }
}

.st-autocomplete-results.st-ui-autocomplete a.st-ui-result.__swiftype_result .st-ui-type-heading {
    font-size: 16px;
    font-size: .8888889rem;
    line-height: 1.25;
    margin-bottom: 4px;
    margin-right: 8px;
}

.st-autocomplete-results.st-ui-autocomplete a.st-ui-result.__swiftype_result .st-ui-type-detail {
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 1.2857143;
}

a.st-ui-result.__swiftype_result {
    background-color: #fff;
    border: 1px solid #dfdee8;
    border-radius: 6px;
    box-shadow: 0 2px 8px 0 #2622620d;
    margin-bottom: 8px;
    padding: 16px;
}

a.st-ui-result.__swiftype_result:last-of-type {
    border-bottom: 1px solid #dfdee8;
}

@media (min-width:73.125em) {
    a.st-ui-result.__swiftype_result {
        margin-bottom: 16px;
        padding: 24px;
    }
}

a.st-ui-result.__swiftype_result:hover {
    border: 1px solid #262262;
    box-shadow: 0 2px 8px 0 #26226226;
}

a.st-ui-result.__swiftype_result .st-ui-type-heading {
    color: #0a0827;
    font-family: DM Sans,sans-serif,serif;
    font-size: 16px;
    font-size: .8888889rem;
    font-weight: 700;
    line-height: 1.25;
    margin-bottom: 4px;
}

@media (min-width:73.125em) {
    a.st-ui-result.__swiftype_result .st-ui-type-heading {
        font-size: 18px;
        font-size: 1rem;
        line-height: 1.2222222;
        margin-bottom: 8px;
    }
}

a.st-ui-result.__swiftype_result .st-ui-type-detail,a.st-ui-result.__swiftype_result .st-ui-type-heading {
    margin-right: 24px;
}

@media (min-width:73.125em) {
    a.st-ui-result.__swiftype_result .st-ui-type-detail,a.st-ui-result.__swiftype_result .st-ui-type-heading {
        margin-right: 32px;
    }
}

a.st-ui-result.__swiftype_result .st-ui-type-detail,a.st-ui-result.__swiftype_result .st-ui-type-detail-bold {
    color: #0a082780;
    font-family: DM Sans,sans-serif,serif;
    font-size: 14px;
    font-size: .7777778rem;
    line-height: 1.4285714;
    max-height: 40px;
}

a.st-ui-result.__swiftype_result:before {
    border-color: #0a082780;
    border-style: solid;
    border-width: 1px 1px 0 0;
    content: "";
    display: block;
    height: 8px;
    margin-top: -4px;
    position: absolute;
    right: 16px;
    top: 50%;
    transform: rotate(45deg);
    width: 8px;
}

@media (min-width:73.125em) {
    a.st-ui-result.__swiftype_result:before {
        height: 12px;
        margin-top: -6px;
        right: 24px;
        top: 50%;
        width: 12px;
    }
}

a.st-ui-result.__swiftype_result:hover:before {
    border-color: #262262;
}

.st-ui-pagination.st-search-pagination .st-query-present {
    -ms-flex-pack: center;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    padding: 24px 0;
    width: 100%;
}

.st-ui-pagination-link.st-result-pagination-link,.st-ui-pagination-link.st-ui-pagination-number-link {
    text-decoration: none;
}

.st-ui-pagination-link.st-ui-pagination-number-link.st-result-pagination-link {
    -ms-flex-align: center;
    -ms-flex-pack: center;
    align-items: center;
    border-radius: 100%;
    color: #0a0827;
    display: -ms-flexbox;
    display: flex;
    height: 32px;
    justify-content: center;
    margin-right: 8px;
    padding: 8px;
    text-align: center;
    width: 32px;
}

.st-ui-pagination-link.st-ui-pagination-number-link.st-result-pagination-link.active {
    background-color: #008874;
    color: #fff;
}

.u-padding {
    padding: 16px!important;
}

.u-padding-tiny {
    padding: 4px!important;
}

.u-padding-small {
    padding: 8px!important;
}

.u-padding-large {
    padding: 24px!important;
}

.u-padding-huge {
    padding: 32px!important;
}

.u-padding-none {
    padding: 0!important;
}

.u-padding-top {
    padding-top: 16px!important;
}

.u-padding-top-tiny {
    padding-top: 4px!important;
}

.u-padding-top-small {
    padding-top: 8px!important;
}

.u-padding-top-large {
    padding-top: 24px!important;
}

.u-padding-top-huge {
    padding-top: 32px!important;
}

.u-padding-top-none {
    padding-top: 0!important;
}

.u-padding-right {
    padding-right: 16px!important;
}

.u-padding-right-tiny {
    padding-right: 4px!important;
}

.u-padding-right-small {
    padding-right: 8px!important;
}

.u-padding-right-large {
    padding-right: 24px!important;
}

.u-padding-right-huge {
    padding-right: 32px!important;
}

.u-padding-right-none {
    padding-right: 0!important;
}

.u-padding-bottom {
    padding-bottom: 16px!important;
}

.u-padding-bottom-tiny {
    padding-bottom: 4px!important;
}

.u-padding-bottom-small {
    padding-bottom: 8px!important;
}

.u-padding-bottom-large {
    padding-bottom: 24px!important;
}

.u-padding-bottom-huge {
    padding-bottom: 32px!important;
}

.u-padding-bottom-none {
    padding-bottom: 0!important;
}

.u-padding-left {
    padding-left: 16px!important;
}

.u-padding-left-tiny {
    padding-left: 4px!important;
}

.u-padding-left-small {
    padding-left: 8px!important;
}

.u-padding-left-large {
    padding-left: 24px!important;
}

.u-padding-left-huge {
    padding-left: 32px!important;
}

.u-padding-left-none {
    padding-left: 0!important;
}

.u-padding-horizontal {
    padding-left: 16px!important;
    padding-right: 16px!important;
}

.u-padding-horizontal-tiny {
    padding-left: 4px!important;
    padding-right: 4px!important;
}

.u-padding-horizontal-small {
    padding-left: 8px!important;
    padding-right: 8px!important;
}

.u-padding-horizontal-large {
    padding-left: 24px!important;
    padding-right: 24px!important;
}

.u-padding-horizontal-huge {
    padding-left: 32px!important;
    padding-right: 32px!important;
}

.u-padding-horizontal-none {
    padding-left: 0!important;
    padding-right: 0!important;
}

.u-padding-vertical {
    padding-bottom: 16px!important;
    padding-top: 16px!important;
}

.u-padding-vertical-tiny {
    padding-bottom: 4px!important;
    padding-top: 4px!important;
}

.u-padding-vertical-small {
    padding-bottom: 8px!important;
    padding-top: 8px!important;
}

.u-padding-vertical-large {
    padding-bottom: 24px!important;
    padding-top: 24px!important;
}

.u-padding-vertical-huge {
    padding-bottom: 32px!important;
    padding-top: 32px!important;
}

.u-padding-vertical-none {
    padding-bottom: 0!important;
    padding-top: 0!important;
}

.u-margin {
    margin: 16px!important;
}

.u-margin-tiny {
    margin: 4px!important;
}

.u-margin-small {
    margin: 8px!important;
}

.u-margin-large {
    margin: 24px!important;
}

.u-margin-huge {
    margin: 32px!important;
}

.u-margin-none {
    margin: 0!important;
}

.u-margin-top {
    margin-top: 16px!important;
}

.u-margin-top-tiny {
    margin-top: 4px!important;
}

.u-margin-top-small {
    margin-top: 8px!important;
}

.u-margin-top-large {
    margin-top: 24px!important;
}

.u-margin-top-huge {
    margin-top: 32px!important;
}

.u-margin-top-none {
    margin-top: 0!important;
}

.u-margin-right {
    margin-right: 16px!important;
}

.u-margin-right-tiny {
    margin-right: 4px!important;
}

.u-margin-right-small {
    margin-right: 8px!important;
}

.u-margin-right-large {
    margin-right: 24px!important;
}

.u-margin-right-huge {
    margin-right: 32px!important;
}

.u-margin-right-none {
    margin-right: 0!important;
}

.u-margin-bottom {
    margin-bottom: 16px!important;
}

.u-margin-bottom-tiny {
    margin-bottom: 4px!important;
}

.u-margin-bottom-small {
    margin-bottom: 8px!important;
}

.u-margin-bottom-large {
    margin-bottom: 24px!important;
}

.u-margin-bottom-huge {
    margin-bottom: 32px!important;
}

.u-margin-bottom-none {
    margin-bottom: 0!important;
}

.u-margin-left {
    margin-left: 16px!important;
}

.u-margin-left-tiny {
    margin-left: 4px!important;
}

.u-margin-left-small {
    margin-left: 8px!important;
}

.u-margin-left-large {
    margin-left: 24px!important;
}

.u-margin-left-huge {
    margin-left: 32px!important;
}

.u-margin-left-none {
    margin-left: 0!important;
}

.u-margin-horizontal {
    margin-left: 16px!important;
    margin-right: 16px!important;
}

.u-margin-horizontal-tiny {
    margin-left: 4px!important;
    margin-right: 4px!important;
}

.u-margin-horizontal-small {
    margin-left: 8px!important;
    margin-right: 8px!important;
}

.u-margin-horizontal-large {
    margin-left: 24px!important;
    margin-right: 24px!important;
}

.u-margin-horizontal-huge {
    margin-left: 32px!important;
    margin-right: 32px!important;
}

.u-margin-horizontal-none {
    margin-left: 0!important;
    margin-right: 0!important;
}

.u-margin-vertical {
    margin-bottom: 16px!important;
    margin-top: 16px!important;
}

.u-margin-vertical-tiny {
    margin-bottom: 4px!important;
    margin-top: 4px!important;
}

.u-margin-vertical-small {
    margin-bottom: 8px!important;
    margin-top: 8px!important;
}

.u-margin-vertical-large {
    margin-bottom: 24px!important;
    margin-top: 24px!important;
}

.u-margin-vertical-huge {
    margin-bottom: 32px!important;
    margin-top: 32px!important;
}

.u-margin-vertical-none {
    margin-bottom: 0!important;
    margin-top: 0!important;
}

.u-flow-10-to-14 {
    margin-bottom: 40px;
}

@media (min-width:73.125em) {
    .u-flow-10-to-14 {
        margin-bottom: 56px;
    }
}

.u-flow-11-to-8 {
    margin-bottom: 44px;
}

@media (min-width:73.125em) {
    .u-flow-11-to-8 {
        margin-bottom: 32px;
    }
}

.u-flow-11-to-6 {
    margin-bottom: 44px;
}

@media (min-width:73.125em) {
    .u-flow-11-to-6 {
        margin-bottom: 24px;
    }
}

.u-flow-8-to-15 {
    margin-bottom: 32px;
}

@media (min-width:73.125em) {
    .u-flow-8-to-15 {
        margin-bottom: 60px;
    }
}

.u-flow-10-to-15 {
    margin-bottom: 40px;
}

@media (min-width:73.125em) {
    .u-flow-10-to-15 {
        margin-bottom: 60px;
    }
}

.u-list-plain {
    list-style: none;
}

.u-responsive-table {
    margin-bottom: 16px;
    overflow: auto;
}

.u-responsive-table table {
    box-shadow: none;
    margin-bottom: 0;
}

.u-responsive-table--full {
    left: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
    position: relative;
    right: 50%;
    width: 100vw;
}

@media (min-width:73.125em) {
    .u-responsive-table--full {
        left: auto;
        margin-left: auto;
        margin-right: auto;
        right: auto;
        width: 100%;
    }

    .u-responsive-table {
        margin-bottom: 32px;
    }
}

.u-bg-white {
    background-color: #fff;
}

.u-pointer-events--none {
    pointer-events: none;
}

.u-pointer-events--auto {
    pointer-events: auto;
}

.u-container-games .o-adaptive-container__pad-item {
    padding-left: 0;
}

@media print {
    *,:after,:before {
        background: #0000!important;
        color: #000!important;
        text-shadow: none!important;
    }

    a,a:visited {
        text-decoration: underline;
    }

    a[href^="#"]:after,a[href^="javascript:"]:after {
        content: "";
    }

    blockquote,pre {
        border: 1px solid #999;
        break-inside: avoid;
        page-break-inside: avoid;
    }

    table {
        break-inside: auto;
        page-break-inside: auto;
    }

    thead {
        display: table-header-group;
    }

    img,tr {
        break-after: auto;
        break-before: auto;
        break-inside: avoid;
        page-break-after: auto;
        page-break-before: auto;
        page-break-inside: avoid;
    }

    img {
        max-width: 100%!important;
    }

    h2,h3,p {
        orphans: 3;
        widows: 3;
    }

    h2,h3 {
        break-after: avoid;
        page-break-after: avoid;
    }

    .u-print-none {
        display: none!important;
    }

    .o-layout {
        display: block;
    }

    .c-bottom-bar,.c-breadcrumbs,.c-copy-to-clipboard,.c-daily-games-table .c-dropdown,.c-daily-games-table__highlight,.c-export-menu,.c-filter-bar,.c-footer-navigation,.c-form-reset-button,.c-global-footer,.c-global-header__control,.c-global-nav,.c-info-button,.c-loader,.c-navbar,.c-number-checker__result-actions,.c-number-checker__result-item-header,.c-pagination__counter,.c-pagination__end,.c-pagination__load-more-button,.c-prize-sheet,.c-region-menu,.c-result-card__prize-btn,.c-results-table__item-header,.c-tool-list,.c-tool__breadcrumb,.c-tool__title,.c-user-account-menu {
        display: none!important;
    }
}

.u-hidden-visually {
    clip: rect(0 0 0 0)!important;
    border: 0!important;
    -webkit-clip-path: inset(50%)!important;
    clip-path: inset(50%)!important;
    height: 1px!important;
    margin: -1px!important;
    overflow: hidden!important;
    padding: 0!important;
    position: absolute!important;
    white-space: nowrap!important;
    width: 1px!important;
}

.u-hidden {
    display: none!important;
}

        .o-container{margin-left:auto;margin-right:auto;max-width:1218px;padding-left:16px;padding-right:16px}.o-container--medium{max-width:1018px}.o-container--narrow{max-width:820px}.o-container--slim{max-width:621px}.o-container--content{padding-bottom:56px;padding-top:24px}.o-container--sm{padding-left:8px;padding-right:8px}.o-container--vertically-centered{-ms-flex-pack:center;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;justify-content:center;min-height:100%}@media (min-width:48em){.o-container{padding-left:24px;padding-right:24px}.o-container--content{padding-bottom:80px;padding-top:40px}}.o-adaptive-container{margin-left:auto;margin-right:auto;max-width:1218px}.o-adaptive-container--medium{max-width:1018px}.o-adaptive-container--narrow{max-width:820px}.o-adaptive-container--slim{max-width:621px}.o-adaptive-container--content{padding-bottom:56px;padding-top:24px}.o-adaptive-container__pad-item{padding-left:16px;padding-right:16px}.o-adaptive-container__pad-item--sm{padding-left:8px;padding-right:8px}@media (min-width:48em){.o-adaptive-container{padding-left:24px;padding-right:24px}.o-adaptive-container__pad-item{padding-left:0;padding-right:0}.o-adaptive-container--content{padding:40px 0 80px}}.o-layout{display:-ms-flexbox;display:flex;-ms-flex:0 1 auto;flex:0 1 auto;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-left:-16px}@media (min-width:73.125em){.o-layout{margin-left:-24px}}.o-layout--list-bare{list-style-type:none}.o-layout--flush{margin-left:0}.o-layout--flush .o-layout__col{padding-left:0}.o-layout--stretch .o-layout__col{display:-ms-flexbox;display:flex}.o-layout--ui-list .o-layout__col{margin-bottom:16px}.o-layout--tile .o-layout__col{margin-bottom:24px}.o-layout--adaptive{margin-right:-16px}.o-layout--adaptive .o-layout__col{padding-left:0}.o-layout--reverse{-ms-flex-direction:row-reverse;flex-direction:row-reverse}.o-layout--start{-ms-flex-pack:start;justify-content:flex-start;text-align:left}.o-layout--center{-ms-flex-pack:center;justify-content:center;text-align:center}.o-layout--end{-ms-flex-pack:end;justify-content:flex-end;text-align:right}.o-layout--top{-ms-flex-align:start;align-items:flex-start}.o-layout--middle{-ms-flex-align:center;align-items:center}.o-layout--bottom{-ms-flex-align:end;align-items:flex-end}.o-layout--around{-ms-flex-pack:distribute;justify-content:space-around}.o-layout--between{-ms-flex-pack:justify;justify-content:space-between}@media (min-width:22.5em){.o-layout--reverse\@xs{-ms-flex-direction:row-reverse;flex-direction:row-reverse}.o-layout--start\@xs{-ms-flex-pack:start;justify-content:flex-start;text-align:left}.o-layout--center\@xs{-ms-flex-pack:center;justify-content:center;text-align:center}.o-layout--end\@xs{-ms-flex-pack:end;justify-content:flex-end;text-align:right}.o-layout--top\@xs{-ms-flex-align:start;align-items:flex-start}.o-layout--middle\@xs{-ms-flex-align:center;align-items:center}.o-layout--bottom\@xs{-ms-flex-align:end;align-items:flex-end}.o-layout--around\@xs{-ms-flex-pack:distribute;justify-content:space-around}.o-layout--between\@xs{-ms-flex-pack:justify;justify-content:space-between}}@media (min-width:23.4375em){.o-layout--reverse\@sm{-ms-flex-direction:row-reverse;flex-direction:row-reverse}.o-layout--start\@sm{-ms-flex-pack:start;justify-content:flex-start;text-align:left}.o-layout--center\@sm{-ms-flex-pack:center;justify-content:center;text-align:center}.o-layout--end\@sm{-ms-flex-pack:end;justify-content:flex-end;text-align:right}.o-layout--top\@sm{-ms-flex-align:start;align-items:flex-start}.o-layout--middle\@sm{-ms-flex-align:center;align-items:center}.o-layout--bottom\@sm{-ms-flex-align:end;align-items:flex-end}.o-layout--around\@sm{-ms-flex-pack:distribute;justify-content:space-around}.o-layout--between\@sm{-ms-flex-pack:justify;justify-content:space-between}}@media (min-width:48em){.o-layout--reverse\@md{-ms-flex-direction:row-reverse;flex-direction:row-reverse}.o-layout--start\@md{-ms-flex-pack:start;justify-content:flex-start;text-align:left}.o-layout--center\@md{-ms-flex-pack:center;justify-content:center;text-align:center}.o-layout--end\@md{-ms-flex-pack:end;justify-content:flex-end;text-align:right}.o-layout--top\@md{-ms-flex-align:start;align-items:flex-start}.o-layout--middle\@md{-ms-flex-align:center;align-items:center}.o-layout--bottom\@md{-ms-flex-align:end;align-items:flex-end}.o-layout--around\@md{-ms-flex-pack:distribute;justify-content:space-around}.o-layout--between\@md{-ms-flex-pack:justify;justify-content:space-between}}@media (min-width:73.125em){.o-layout--reverse\@lg{-ms-flex-direction:row-reverse;flex-direction:row-reverse}.o-layout--start\@lg{-ms-flex-pack:start;justify-content:flex-start;text-align:left}.o-layout--center\@lg{-ms-flex-pack:center;justify-content:center;text-align:center}.o-layout--end\@lg{-ms-flex-pack:end;justify-content:flex-end;text-align:right}.o-layout--top\@lg{-ms-flex-align:start;align-items:flex-start}.o-layout--middle\@lg{-ms-flex-align:center;align-items:center}.o-layout--bottom\@lg{-ms-flex-align:end;align-items:flex-end}.o-layout--around\@lg{-ms-flex-pack:distribute;justify-content:space-around}.o-layout--between\@lg{-ms-flex-pack:justify;justify-content:space-between}}.o-layout__col{-ms-flex:1 0 auto;flex:1 0 auto;padding-left:16px}.o-layout__col--adaptive{padding-left:32px}.o-layout__col--auto{-ms-flex-preferred-size:auto;flex-basis:auto;max-width:100%}.o-layout__col--1{-ms-flex-preferred-size:8.3333333%;flex-basis:8.3333333%;max-width:8.3333333%}.o-layout__col--2{-ms-flex-preferred-size:16.6666667%;flex-basis:16.6666667%;max-width:16.6666667%}.o-layout__col--3{-ms-flex-preferred-size:25%;flex-basis:25%;max-width:25%}.o-layout__col--4{-ms-flex-preferred-size:33.3333333%;flex-basis:33.3333333%;max-width:33.3333333%}.o-layout__col--5{-ms-flex-preferred-size:41.6666667%;flex-basis:41.6666667%;max-width:41.6666667%}.o-layout__col--6{-ms-flex-preferred-size:50%;flex-basis:50%;max-width:50%}.o-layout__col--7{-ms-flex-preferred-size:58.3333333%;flex-basis:58.3333333%;max-width:58.3333333%}.o-layout__col--8{-ms-flex-preferred-size:66.6666667%;flex-basis:66.6666667%;max-width:66.6666667%}.o-layout__col--9{-ms-flex-preferred-size:75%;flex-basis:75%;max-width:75%}.o-layout__col--10{-ms-flex-preferred-size:83.3333333%;flex-basis:83.3333333%;max-width:83.3333333%}.o-layout__col--11{-ms-flex-preferred-size:91.6666667%;flex-basis:91.6666667%;max-width:91.6666667%}.o-layout__col--12{-ms-flex-preferred-size:100%;flex-basis:100%;max-width:100%}.o-layout__col--offset-1{margin-left:8.3333333%}.o-layout__col--offset-2{margin-left:16.6666667%}.o-layout__col--offset-3{margin-left:25%}.o-layout__col--offset-4{margin-left:33.3333333%}.o-layout__col--offset-5{margin-left:41.6666667%}.o-layout__col--offset-6{margin-left:50%}.o-layout__col--offset-7{margin-left:58.3333333%}.o-layout__col--offset-8{margin-left:66.6666667%}.o-layout__col--offset-9{margin-left:75%}.o-layout__col--offset-10{margin-left:83.3333333%}.o-layout__col--offset-11{margin-left:91.6666667%}.o-layout__col--offset-12{margin-left:100%}.o-layout__col--first{-ms-flex-order:-1;order:-1}.o-layout__col--last{-ms-flex-order:1;order:1}.o-layout__col--right{text-align:right}@media (min-width:73.125em){.o-layout__col,.o-layout__col--adaptive{padding-left:24px}}@media (min-width:22.5em){.o-layout__col--auto\@xs{-ms-flex-preferred-size:auto;flex-basis:auto;max-width:100%}.o-layout__col--1\@xs{-ms-flex-preferred-size:8.3333333%;flex-basis:8.3333333%;max-width:8.3333333%}.o-layout__col--2\@xs{-ms-flex-preferred-size:16.6666667%;flex-basis:16.6666667%;max-width:16.6666667%}.o-layout__col--3\@xs{-ms-flex-preferred-size:25%;flex-basis:25%;max-width:25%}.o-layout__col--4\@xs{-ms-flex-preferred-size:33.3333333%;flex-basis:33.3333333%;max-width:33.3333333%}.o-layout__col--5\@xs{-ms-flex-preferred-size:41.6666667%;flex-basis:41.6666667%;max-width:41.6666667%}.o-layout__col--6\@xs{-ms-flex-preferred-size:50%;flex-basis:50%;max-width:50%}.o-layout__col--7\@xs{-ms-flex-preferred-size:58.3333333%;flex-basis:58.3333333%;max-width:58.3333333%}.o-layout__col--8\@xs{-ms-flex-preferred-size:66.6666667%;flex-basis:66.6666667%;max-width:66.6666667%}.o-layout__col--9\@xs{-ms-flex-preferred-size:75%;flex-basis:75%;max-width:75%}.o-layout__col--10\@xs{-ms-flex-preferred-size:83.3333333%;flex-basis:83.3333333%;max-width:83.3333333%}.o-layout__col--11\@xs{-ms-flex-preferred-size:91.6666667%;flex-basis:91.6666667%;max-width:91.6666667%}.o-layout__col--12\@xs{-ms-flex-preferred-size:100%;flex-basis:100%;max-width:100%}.o-layout__col--offset-1\@xs{margin-left:8.3333333%}.o-layout__col--offset-2\@xs{margin-left:16.6666667%}.o-layout__col--offset-3\@xs{margin-left:25%}.o-layout__col--offset-4\@xs{margin-left:33.3333333%}.o-layout__col--offset-5\@xs{margin-left:41.6666667%}.o-layout__col--offset-6\@xs{margin-left:50%}.o-layout__col--offset-7\@xs{margin-left:58.3333333%}.o-layout__col--offset-8\@xs{margin-left:66.6666667%}.o-layout__col--offset-9\@xs{margin-left:75%}.o-layout__col--offset-10\@xs{margin-left:83.3333333%}.o-layout__col--offset-11\@xs{margin-left:91.6666667%}.o-layout__col--offset-12\@xs{margin-left:100%}.o-layout__col--first\@xs{-ms-flex-order:-1;order:-1}.o-layout__col--last\@xs{-ms-flex-order:1;order:1}.o-layout__col--right\@xs{text-align:right}}@media (min-width:23.4375em){.o-layout__col--auto\@sm{-ms-flex-preferred-size:auto;flex-basis:auto;max-width:100%}.o-layout__col--1\@sm{-ms-flex-preferred-size:8.3333333%;flex-basis:8.3333333%;max-width:8.3333333%}.o-layout__col--2\@sm{-ms-flex-preferred-size:16.6666667%;flex-basis:16.6666667%;max-width:16.6666667%}.o-layout__col--3\@sm{-ms-flex-preferred-size:25%;flex-basis:25%;max-width:25%}.o-layout__col--4\@sm{-ms-flex-preferred-size:33.3333333%;flex-basis:33.3333333%;max-width:33.3333333%}.o-layout__col--5\@sm{-ms-flex-preferred-size:41.6666667%;flex-basis:41.6666667%;max-width:41.6666667%}.o-layout__col--6\@sm{-ms-flex-preferred-size:50%;flex-basis:50%;max-width:50%}.o-layout__col--7\@sm{-ms-flex-preferred-size:58.3333333%;flex-basis:58.3333333%;max-width:58.3333333%}.o-layout__col--8\@sm{-ms-flex-preferred-size:66.6666667%;flex-basis:66.6666667%;max-width:66.6666667%}.o-layout__col--9\@sm{-ms-flex-preferred-size:75%;flex-basis:75%;max-width:75%}.o-layout__col--10\@sm{-ms-flex-preferred-size:83.3333333%;flex-basis:83.3333333%;max-width:83.3333333%}.o-layout__col--11\@sm{-ms-flex-preferred-size:91.6666667%;flex-basis:91.6666667%;max-width:91.6666667%}.o-layout__col--12\@sm{-ms-flex-preferred-size:100%;flex-basis:100%;max-width:100%}.o-layout__col--offset-1\@sm{margin-left:8.3333333%}.o-layout__col--offset-2\@sm{margin-left:16.6666667%}.o-layout__col--offset-3\@sm{margin-left:25%}.o-layout__col--offset-4\@sm{margin-left:33.3333333%}.o-layout__col--offset-5\@sm{margin-left:41.6666667%}.o-layout__col--offset-6\@sm{margin-left:50%}.o-layout__col--offset-7\@sm{margin-left:58.3333333%}.o-layout__col--offset-8\@sm{margin-left:66.6666667%}.o-layout__col--offset-9\@sm{margin-left:75%}.o-layout__col--offset-10\@sm{margin-left:83.3333333%}.o-layout__col--offset-11\@sm{margin-left:91.6666667%}.o-layout__col--offset-12\@sm{margin-left:100%}.o-layout__col--first\@sm{-ms-flex-order:-1;order:-1}.o-layout__col--last\@sm{-ms-flex-order:1;order:1}.o-layout__col--right\@sm{text-align:right}}@media (min-width:48em){.o-layout__col--auto\@md{-ms-flex-preferred-size:auto;flex-basis:auto;max-width:100%}.o-layout__col--1\@md{-ms-flex-preferred-size:8.3333333%;flex-basis:8.3333333%;max-width:8.3333333%}.o-layout__col--2\@md{-ms-flex-preferred-size:16.6666667%;flex-basis:16.6666667%;max-width:16.6666667%}.o-layout__col--3\@md{-ms-flex-preferred-size:25%;flex-basis:25%;max-width:25%}.o-layout__col--4\@md{-ms-flex-preferred-size:33.3333333%;flex-basis:33.3333333%;max-width:33.3333333%}.o-layout__col--5\@md{-ms-flex-preferred-size:41.6666667%;flex-basis:41.6666667%;max-width:41.6666667%}.o-layout__col--6\@md{-ms-flex-preferred-size:50%;flex-basis:50%;max-width:50%}.o-layout__col--7\@md{-ms-flex-preferred-size:58.3333333%;flex-basis:58.3333333%;max-width:58.3333333%}.o-layout__col--8\@md{-ms-flex-preferred-size:66.6666667%;flex-basis:66.6666667%;max-width:66.6666667%}.o-layout__col--9\@md{-ms-flex-preferred-size:75%;flex-basis:75%;max-width:75%}.o-layout__col--10\@md{-ms-flex-preferred-size:83.3333333%;flex-basis:83.3333333%;max-width:83.3333333%}.o-layout__col--11\@md{-ms-flex-preferred-size:91.6666667%;flex-basis:91.6666667%;max-width:91.6666667%}.o-layout__col--12\@md{-ms-flex-preferred-size:100%;flex-basis:100%;max-width:100%}.o-layout__col--offset-1\@md{margin-left:8.3333333%}.o-layout__col--offset-2\@md{margin-left:16.6666667%}.o-layout__col--offset-3\@md{margin-left:25%}.o-layout__col--offset-4\@md{margin-left:33.3333333%}.o-layout__col--offset-5\@md{margin-left:41.6666667%}.o-layout__col--offset-6\@md{margin-left:50%}.o-layout__col--offset-7\@md{margin-left:58.3333333%}.o-layout__col--offset-8\@md{margin-left:66.6666667%}.o-layout__col--offset-9\@md{margin-left:75%}.o-layout__col--offset-10\@md{margin-left:83.3333333%}.o-layout__col--offset-11\@md{margin-left:91.6666667%}.o-layout__col--offset-12\@md{margin-left:100%}.o-layout__col--first\@md{-ms-flex-order:-1;order:-1}.o-layout__col--last\@md{-ms-flex-order:1;order:1}.o-layout__col--right\@md{text-align:right}}@media (min-width:73.125em){.o-layout__col--auto\@lg{-ms-flex-preferred-size:auto;flex-basis:auto;max-width:100%}.o-layout__col--1\@lg{-ms-flex-preferred-size:8.3333333%;flex-basis:8.3333333%;max-width:8.3333333%}.o-layout__col--2\@lg{-ms-flex-preferred-size:16.6666667%;flex-basis:16.6666667%;max-width:16.6666667%}.o-layout__col--3\@lg{-ms-flex-preferred-size:25%;flex-basis:25%;max-width:25%}.o-layout__col--4\@lg{-ms-flex-preferred-size:33.3333333%;flex-basis:33.3333333%;max-width:33.3333333%}.o-layout__col--5\@lg{-ms-flex-preferred-size:41.6666667%;flex-basis:41.6666667%;max-width:41.6666667%}.o-layout__col--6\@lg{-ms-flex-preferred-size:50%;flex-basis:50%;max-width:50%}.o-layout__col--7\@lg{-ms-flex-preferred-size:58.3333333%;flex-basis:58.3333333%;max-width:58.3333333%}.o-layout__col--8\@lg{-ms-flex-preferred-size:66.6666667%;flex-basis:66.6666667%;max-width:66.6666667%}.o-layout__col--9\@lg{-ms-flex-preferred-size:75%;flex-basis:75%;max-width:75%}.o-layout__col--10\@lg{-ms-flex-preferred-size:83.3333333%;flex-basis:83.3333333%;max-width:83.3333333%}.o-layout__col--11\@lg{-ms-flex-preferred-size:91.6666667%;flex-basis:91.6666667%;max-width:91.6666667%}.o-layout__col--12\@lg{-ms-flex-preferred-size:100%;flex-basis:100%;max-width:100%}.o-layout__col--offset-1\@lg{margin-left:8.3333333%}.o-layout__col--offset-2\@lg{margin-left:16.6666667%}.o-layout__col--offset-3\@lg{margin-left:25%}.o-layout__col--offset-4\@lg{margin-left:33.3333333%}.o-layout__col--offset-5\@lg{margin-left:41.6666667%}.o-layout__col--offset-6\@lg{margin-left:50%}.o-layout__col--offset-7\@lg{margin-left:58.3333333%}.o-layout__col--offset-8\@lg{margin-left:66.6666667%}.o-layout__col--offset-9\@lg{margin-left:75%}.o-layout__col--offset-10\@lg{margin-left:83.3333333%}.o-layout__col--offset-11\@lg{margin-left:91.6666667%}.o-layout__col--offset-12\@lg{margin-left:100%}.o-layout__col--first\@lg{-ms-flex-order:-1;order:-1}.o-layout__col--last\@lg{-ms-flex-order:1;order:1}.o-layout__col--right\@lg{text-align:right}}.o-lusa-col{display:-ms-flexbox;display:flex;-ms-flex:0 1 auto;flex:0 1 auto;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-left:-16px;padding-bottom:40px;padding-top:32px}.o-lusa-col__content,.o-lusa-col__side{-ms-flex:1 0 auto;flex:1 0 auto;padding-left:16px;width:100%}.o-lusa-col__side{padding-top:24px}@media (min-width:48em){.o-lusa-col{padding-bottom:56px}}@media (min-width:73.125em){.o-lusa-col{margin-left:0;padding-bottom:40px;padding-top:0}.o-lusa-col__content,.o-lusa-col__side{padding-top:32px}.o-lusa-col__content{-ms-flex-preferred-size:68%;flex-basis:68%;max-width:68%;padding-left:0;padding-right:24px;position:relative}.o-lusa-col__content:after{box-shadow:inset -1px 0 0 0 #dfdee8;content:"";display:block;height:100%;left:0;position:absolute;top:0;width:100%;z-index:-1}.o-lusa-col__side{-ms-flex:1;flex:1;padding-left:24px}}.o-lusa-game-col{padding-bottom:40px;padding-top:24px}.o-lusa-game-col__upcoming{margin-bottom:36px}.o-lusa-game-col__game-aside{margin-bottom:48px}.o-lusa-game-col__result-list{margin-bottom:32px}.o-lusa-game-col__game-aside{border-top:1px solid #dfdee8;left:50%;margin-left:-50vw;margin-right:-50vw;padding:32px 8px;position:relative;right:50%;width:100vw}.o-lusa-game-col__action-link{padding:8px 0 0}.o-lusa-game-col--tight .o-lusa-game-col__game-aside{margin-bottom:0;padding-bottom:0}@media (min-width:48em){.o-lusa-game-col{padding-top:32px}.o-lusa-game-col__upcoming{margin-bottom:36px}.o-lusa-game-col__game-aside{margin-bottom:56px}.o-lusa-game-col__action-link{padding-left:0;padding-right:0}}@media (min-width:73.125em){.o-lusa-game-col{overflow:hidden;padding-top:0}.o-lusa-game-col__result-list{float:left;padding-right:24px;padding-top:32px;position:relative;width:68%}.o-lusa-game-col__result-list:after{box-shadow:inset -1px 0 0 0 #dfdee8;content:"";display:block;height:100%;left:0;position:absolute;top:0;width:100%;z-index:-1}.o-lusa-game-col__upcoming{margin-bottom:0;padding-top:80px}.o-lusa-game-col__game-aside,.o-lusa-game-col__upcoming{float:right;padding-left:23px;width:32%}.o-lusa-game-col__game-aside{background-color:initial;border-bottom:none;border-top:none;left:auto;margin-left:0;margin-right:0;padding-bottom:32px;padding-right:0;padding-top:0;position:relative;right:auto}}.o-lusa-archive-col{padding-bottom:40px}.o-lusa-archive-col__result-list{margin-bottom:48px}.o-lusa-archive-col__action-link{padding:24px 16px 0}@media (min-width:48em){.o-lusa-archive-col__result-list{margin-bottom:56px}.o-lusa-archive-col__action-link{padding-left:0;padding-right:0}}@media (min-width:73.125em){.o-lusa-archive-col{-ms-flex-line-pack:center;-ms-flex-pack:center;-ms-flex-align:center;align-content:center;align-items:center;display:-ms-flexbox;display:flex;justify-content:center}.o-lusa-archive-col__result-list{-ms-flex-preferred-size:66%;flex-basis:66%}}@media print{.o-lusa-archive-col{padding-bottom:0}.o-lusa-archive-col__result-list{margin-bottom:0}}.o-content-section{margin-bottom:40px}.o-link-card{position:relative}.o-link-card:after{background-color:#fff;background-image:url(build/images/icons/16px/dark/arrow-right.adad23de.svg);background-position:50%;background-repeat:no-repeat;border-radius:8px;box-shadow:0 2px 4px 0 #2622620d;color:#0a0827;content:"";height:32px;overflow:hidden;position:absolute;right:16px;top:auto;white-space:nowrap;width:32px}.o-link-card:hover:after{box-shadow:inset 0 0 0 2px #0a0827,0 2px 4px 0 #2622620d}.o-link-card__link:after{bottom:0;content:"";left:0;overflow:hidden;position:absolute;right:0;top:0;white-space:nowrap;z-index:1}.o-ui-list{display:block;margin-bottom:0;width:100%}.o-ui-list--game-table{margin-bottom:24px}.o-ui-list__items{display:block;margin:0;width:100%}.o-ui-list__items>:last-child{margin-bottom:0}.o-ui-list__item{display:block;margin-bottom:16px;text-align:left;width:100%}.o-ui-list--compact .o-ui-list__item{margin-bottom:8px}@media (max-width:47.99em){.o-ui-list--compact\@\<md .o-ui-list__item{margin-bottom:8px}}.o-card-group{margin-bottom:16px}.o-card-group__item{border-radius:0;margin-bottom:2px}.o-card-group .o-card-group__item{border-radius:0}.o-card-group__item:first-of-type{border-top-left-radius:8px;border-top-right-radius:8px}.o-card-group__item:last-of-type{border-bottom-left-radius:8px;border-bottom-right-radius:8px}.o-scroller{-webkit-overflow-scrolling:touch;-ms-overflow-style:none;display:-ms-flexbox;display:flex;-ms-flex-wrap:nowrap;flex-wrap:nowrap;font-size:1em;list-style-type:none;margin:0;overflow:visible;overflow-x:scroll;overflow-y:hidden;overflow:-moz-scrollbars-none;overscroll-behavior-x:contain;padding:0 0 8px;position:relative;scrollbar-width:none;white-space:nowrap;width:100%}.o-scroller::-webkit-scrollbar{display:none;width:0!important}.o-scroller__item{display:-ms-flexbox;display:flex;-ms-flex:0 0 312px;flex:0 0 312px;margin-right:16px;white-space:normal;width:312px}.o-scroller__item:last-of-type{margin-right:0}@media (min-width:73.125em){.o-scroller__item{-ms-flex:0 0 353px;flex:0 0 353px;margin-right:24px;min-width:353px}}.o-header-actions{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;margin-bottom:16px;width:100%}.o-header-actions__title{justify-self:center;margin-bottom:0}.o-header-actions__controls{display:-ms-flexbox;display:flex;margin-left:auto}.o-header-actions__controls :last-child{margin-right:0}.o-header-actions__control{height:32px;margin-right:4px;width:32px}.o-header-actions__control--inactive{opacity:.4}@media (min-width:73.125em){.o-header-actions{margin-bottom:24px}}.o-header-game{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;margin-bottom:4px;width:100%}.o-header-game__title{margin-bottom:0}.o-header-game__media{margin-left:auto}@media (min-width:48em){.o-header-game__title{-ms-flex-order:2;order:2}.o-header-game__media{-ms-flex-order:1;margin-left:0;margin-right:16px;order:1}}.o-sticky-header{position:-webkit-sticky;position:sticky;top:0;z-index:99990}@media print{.o-sticky-header{position:relative}}@media (min-width:48em){.o-sticky-sidebar{position:-webkit-sticky;position:sticky;top:136px}}@media print{.o-sticky-sidebar{position:relative}}.rdp{--rdp-cell-size:40px;--rdp-accent-color:#00f;--rdp-background-color:#e7edff;--rdp-accent-color-dark:#3003e1;--rdp-background-color-dark:#180270;--rdp-outline:2px solid var(--rdp-accent-color);--rdp-outline-selected:3px solid var(--rdp-accent-color);margin:1em}.rdp-vhidden{clip:rect(1px,1px,1px,1px)!important;-webkit-appearance:none;appearance:none;background:#0000;border:0;border:0!important;box-sizing:border-box;height:1px!important;margin:0;overflow:hidden!important;padding:0;padding:0!important;position:absolute!important;top:0;width:1px!important}.rdp-button_reset{appearance:none;-moz-appearance:none;-webkit-appearance:none;background:none;color:inherit;cursor:default;font:inherit;margin:0;padding:0;position:relative}.rdp-button_reset:focus-visible{outline:none}.rdp-button{border:2px solid #0000}.rdp-button[disabled]:not(.rdp-day_selected){opacity:.25}.rdp-button:not([disabled]){cursor:pointer}.rdp-button:focus-visible:not([disabled]){background-color:var(--rdp-background-color);border:var(--rdp-outline);color:inherit}.rdp-button:hover:not([disabled]):not(.rdp-day_selected){background-color:var(--rdp-background-color)}.rdp-months{display:-ms-flexbox;display:flex}.rdp-month{margin:0 1em}.rdp-month:first-child{margin-left:0}.rdp-month:last-child{margin-right:0}.rdp-table{border-collapse:collapse;margin:0;max-width:calc(var(--rdp-cell-size)*7)}.rdp-with_weeknumber .rdp-table{border-collapse:collapse;max-width:calc(var(--rdp-cell-size)*8)}.rdp-caption{-ms-flex-align:center;-ms-flex-pack:justify;align-items:center;display:-ms-flexbox;display:flex;justify-content:space-between;padding:0;text-align:left}.rdp-multiple_months .rdp-caption{display:block;position:relative;text-align:center}.rdp-caption_dropdowns,.rdp-caption_label{display:-ms-inline-flexbox;display:inline-flex;position:relative}.rdp-caption_label{-ms-flex-align:center;align-items:center;border:2px solid #0000;color:currentColor;font-family:inherit;font-size:140%;font-weight:700;margin:0;padding:0 .25em;white-space:nowrap;z-index:1}.rdp-nav{white-space:nowrap}.rdp-multiple_months .rdp-caption_start .rdp-nav{left:0;position:absolute;top:50%;transform:translateY(-50%)}.rdp-multiple_months .rdp-caption_end .rdp-nav{position:absolute;right:0;top:50%;transform:translateY(-50%)}.rdp-nav_button{-ms-flex-pack:center;border-radius:100%;height:var(--rdp-cell-size);justify-content:center;padding:.25em;width:var(--rdp-cell-size)}.rdp-dropdown_month,.rdp-dropdown_year,.rdp-nav_button{-ms-flex-align:center;align-items:center;display:-ms-inline-flexbox;display:inline-flex}.rdp-dropdown_month,.rdp-dropdown_year{position:relative}.rdp-dropdown{-webkit-appearance:none;appearance:none;background-color:initial;border:none;bottom:0;cursor:inherit;font-family:inherit;font-size:inherit;left:0;line-height:inherit;margin:0;opacity:0;padding:0;position:absolute;top:0;width:100%;z-index:2}.rdp-dropdown[disabled]{color:unset;opacity:unset}.rdp-dropdown:focus-visible:not([disabled])+.rdp-caption_label{background-color:var(--rdp-background-color);border:var(--rdp-outline);border-radius:6px}.rdp-dropdown_icon{margin:0 0 0 5px}.rdp-head{border:0}.rdp-head_row,.rdp-row{height:100%}.rdp-head_cell{font-size:.75em;font-weight:700;height:100%;height:var(--rdp-cell-size);padding:0;text-align:center;text-transform:uppercase;vertical-align:middle}.rdp-tbody{border:0}.rdp-tfoot{margin:.5em}.rdp-cell{height:100%;height:var(--rdp-cell-size);padding:0;text-align:center;width:var(--rdp-cell-size)}.rdp-weeknumber{font-size:.75em}.rdp-day,.rdp-weeknumber{-ms-flex-align:center;-ms-flex-pack:center;align-items:center;border:2px solid #0000;border-radius:100%;box-sizing:border-box;display:-ms-flexbox;display:flex;height:var(--rdp-cell-size);justify-content:center;margin:0;max-width:var(--rdp-cell-size);overflow:hidden;width:var(--rdp-cell-size)}.rdp-day_today:not(.rdp-day_outside){font-weight:700}.rdp-day_selected,.rdp-day_selected:focus-visible,.rdp-day_selected:hover{background-color:var(--rdp-accent-color);color:#fff;opacity:1}.rdp-day_outside{opacity:.5}.rdp-day_selected:focus-visible{outline:var(--rdp-outline);outline-offset:2px;z-index:1}.rdp:not([dir=rtl]) .rdp-day_range_start:not(.rdp-day_range_end){border-bottom-right-radius:0;border-top-right-radius:0}.rdp:not([dir=rtl]) .rdp-day_range_end:not(.rdp-day_range_start),.rdp[dir=rtl] .rdp-day_range_start:not(.rdp-day_range_end){border-bottom-left-radius:0;border-top-left-radius:0}.rdp[dir=rtl] .rdp-day_range_end:not(.rdp-day_range_start){border-bottom-right-radius:0;border-top-right-radius:0}.rdp-day_range_end.rdp-day_range_start{border-radius:100%}.rdp-day_range_middle{border-radius:0}.c-global-header{background-color:#fff;box-shadow:inset 0 -1px 0 0 #dfdee8;min-height:48px;position:relative}.c-global-header__container{-ms-flex-pack:end;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-flow:row wrap;flex-flow:row wrap;justify-content:flex-end;margin-left:auto;margin-right:auto;max-width:1218px}.c-global-header__logo-link{-ms-flex-item-align:stretch;-ms-flex-align:center;align-items:center;align-self:stretch;display:-ms-flexbox;display:flex;margin-left:8px;margin-right:8px}@media (max-width:73.115em){.c-global-header__user-actions{margin-left:auto;min-height:48px}}.c-global-header__user-action{-ms-flex-align:center;-ms-flex-item-align:stretch;align-items:center;align-self:stretch;animation:fade-in .3s ease-in-out;box-shadow:inset 1px 0 0 0 #dfdee8;display:-ms-flexbox;display:flex;-ms-flex:1;flex:1;font-size:16px;font-size:.8888889rem;font-weight:500;height:48px;line-height:1.125;padding:8px 12px;text-decoration:none}@media (max-width:73.115em){.c-global-header__user-login{background-image:url(build/images/icons/16px/dark/user.1c43bfd4.svg);background-position:center left 16px;background-repeat:no-repeat;background-size:16px;height:48px;padding:8px 12px 8px 36px}}@media (max-width:22.49em){.c-global-header__user-login-label{display:none}}.c-global-header__user-icon{-ms-flex-align:center;-ms-flex-pack:center;align-items:center;background:#33adb6;border-radius:100%;color:#fff;display:-ms-inline-flexbox;display:inline-flex;font-size:16px;font-size:.8888889rem;font-weight:700;height:32px;justify-content:center;line-height:1.5;margin-right:8px;text-transform:uppercase;width:32px}.c-global-header .c-global-header__join-link{display:none}.c-global-header__logo{display:block;height:14px;width:140px}.c-global-header__control{-ms-flex-item-align:stretch;align-self:stretch;background-color:initial;background-repeat:no-repeat;background-size:16px;border:none;box-shadow:inset 1px 0 0 0 #dfdee8;cursor:pointer;outline:none}.c-global-header__menu-control{-ms-flex-order:1;background-image:url(build/images/icons/16px/dark/hamburger.b2b1db1c.svg);background-position:center right 16px;background-size:16px;color:#0a0827;font-family:DM Sans,sans-serif;font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.1428571;order:1;padding:16px 32px 16px 16px}.c-global-header__menu-control--active{background-image:none}.c-global-header__search-control{background-image:url(build/images/icons/16px/dark/search.bcae700b.svg);background-position:50%;padding:16px 24px}@media (max-width:73.115em){.c-global-header__nav{display:none;height:100vh;left:0;padding-top:48px;position:fixed;right:48px;top:0;transform:translateX(-100vw);z-index:99990}.c-global-header__nav:before{background-color:#0a0827;content:"";height:100vh;position:absolute;right:100%;top:0;width:50px}.c-global-header--expanded .c-global-header__logo-link{height:48px;left:0;margin-left:0;padding-left:8px;position:fixed;top:0;width:calc(100% - 48px);z-index:99991}.c-global-header--expanded .c-global-header__logo{filter:invert(1%) sepia(1%) saturate(1%) hue-rotate(1deg) brightness(1000%) contrast(100%)}}@media (min-width:48em){.c-global-header{min-height:56px}.c-global-header--expanded .c-global-header__logo-link{height:56px}.c-global-header--expanded .c-global-header__nav{padding-top:56px;right:56px}.c-global-header__logo{height:20px;width:206px}.c-global-header .c-global-header__join-link{-ms-flex-item-align:center;align-self:center;animation:fade-in .3s ease-in-out;display:block;font-size:16px;font-size:.8888889rem;line-height:1.5;margin-right:16px;padding:4px 24px;text-transform:none}.c-global-header__user-actions{-ms-flex-item-align:stretch;align-self:stretch;box-shadow:inset -1px 0 0 0 #dfdee8;display:-ms-flexbox;display:flex;min-height:56px;min-width:176px;padding:0 8px}.c-global-header__user-action{-ms-flex-item-align:center;align-self:center;background-image:none;box-shadow:none;display:block;font-size:16px;font-size:.8888889rem;font-weight:500;height:auto;line-height:1.5;padding:12px 0;text-align:center;text-decoration:none}.c-global-header__menu-control,.c-global-header__search-control{background-position:50%;padding:16px 28px}.c-global-header__search-control{box-shadow:none}}@media (min-width:73.125em){.c-global-header__container{padding-left:24px;padding-right:24px}.c-global-header__logo-link{margin-left:0}.c-global-header__menu-control{display:none}.c-global-header__user-actions{-ms-flex-order:1;-ms-flex-item-align:stretch;align-self:stretch;box-shadow:inset -1px 0 0 0 #dfdee8;display:-ms-flexbox;display:flex;min-width:176px;order:1;padding:0 8px}.c-global-header__user-action{-ms-flex-item-align:center;align-self:center;background-image:none;box-shadow:none;display:block;font-size:16px;font-size:.8888889rem;font-weight:500;height:auto;line-height:1.5;padding:12px 0;text-align:center;text-decoration:none}.c-global-header__user-login{padding:12px 0}.c-global-header .c-global-header__join-link{-ms-flex-item-align:center;align-self:center;animation:fade-in .3s ease-in-out;display:block;font-size:16px;font-size:.8888889rem;line-height:1.5;margin-right:16px;padding:4px 24px;text-transform:none}.c-global-header__nav{margin-left:auto}.c-global-header__search-control{box-shadow:inset 1px 0 0 0 #dfdee8,inset -1px 0 0 0 #dfdee8;margin-left:0;padding:16px 28px}}@media print{.c-global-header{min-height:20px}}.c-global-nav{background-color:#0a0827}@media (max-width:73.115em){.c-global-nav{z-index:99990}}.c-global-nav__overlay{-ms-flex-pack:end;background-color:#0a082799;background-image:url(build/images/icons/16px/light/close.a12e8f7e.svg);background-position:top 16px right 16px;background-repeat:no-repeat;background-size:16px;cursor:pointer;display:-ms-flexbox;display:flex;height:100vh;justify-content:flex-end;position:fixed;top:0;width:100%;z-index:99990}@media (min-width:48em){.c-global-nav__overlay{background-position:top 20px right 20px}}@media (min-width:73.125em){.c-global-nav__overlay{display:none!important}}.c-global-nav__menu{margin:0}.c-global-nav__item{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;justify-items:stretch;padding-left:16px;padding-right:16px;width:100%}.c-global-nav__item:last-of-type .c-global-nav__link{box-shadow:none}.c-global-nav__link{box-shadow:inset 0 -1px 0 0 #ffffff26;color:#fff;display:block;font-size:21px;font-size:1.1666667rem;font-weight:500;line-height:1.3333333;padding-bottom:14px;padding-top:14px;text-align:left;text-decoration:none}.c-global-nav__sub-menu-control{background-color:initial;background-image:url(build/images/icons/16px/light/arrow-up.676cf1ae.svg);background-position:center right 0;background-repeat:no-repeat;background-size:16px;border:none;cursor:pointer;font-family:DM Sans,sans-serif;outline:none;padding-left:0;padding-right:0}.c-global-nav__sub-menu-control--expanded{background-image:url(build/images/icons/16px/light/arrow-down.99fe4dfb.svg)}.c-global-nav__sub-menu{display:block;list-style-type:none}.c-global-nav__sub-menu-link{color:#fff;display:block;padding-bottom:8px;padding-top:8px;text-decoration:none}.c-global-nav__link-block-link{color:#fff;display:block;padding:8px 16px;text-decoration:none}.c-global-nav__link-block-link:hover{background-color:#626078;box-shadow:inset 4px 0 0 0 #fff;color:#fff}.c-global-nav__link-block-desc{color:#0a082799;display:none;font-size:16px;font-size:.8888889rem;line-height:1.5;margin-bottom:0}@media (max-width:73.115em){.c-global-nav__menu{-webkit-overflow-scrolling:touch;height:100%;overflow-y:scroll;overscroll-behavior-y:contain;padding-bottom:304px;padding-top:8px}.c-global-nav__user-block{-ms-flex-pack:center;background-image:url(build/images/backgrounds/general-page-header.ec328463.svg);background-position:top 50% right -64px;background-size:140%;box-shadow:inset 0 1px 0 0 #ffffff26,inset 0 -1px 0 0 #ffffff26;color:#fffc;-ms-flex-direction:column;flex-direction:column;font-size:16px;font-size:.8888889rem;justify-content:center;line-height:1.5;min-height:160px;padding:16px;text-align:center;width:100%}.c-global-nav__user-action,.c-global-nav__user-block{background-repeat:no-repeat;display:-ms-flexbox;display:flex}.c-global-nav__user-action{-ms-flex-align:center;align-items:center;background-image:url(build/images/icons/16px/light/arrow-right.a99e7505.svg);background-position:100%;background-size:16px;padding-right:32px;text-decoration:none}.c-global-nav__user-action-body{-ms-flex-align:start;align-items:flex-start;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.c-global-nav__user-link{color:#fff;display:block;font-size:21px;font-size:1.1666667rem;font-weight:500;line-height:1;text-align:left;text-decoration:none}.c-global-nav__user-icon{-ms-flex-align:center;-ms-flex-pack:center;-ms-flex-negative:0;align-items:center;background:#33adb6;border-radius:100%;color:#fff;display:-ms-inline-flexbox;display:inline-flex;flex-shrink:0;font-size:20px;font-size:1.1111111rem;font-weight:700;height:50px;justify-content:center;line-height:1.4;margin-right:16px;text-transform:uppercase;width:50px}.c-global-nav__user-info{max-width:150px;overflow:hidden;text-overflow:ellipsis}.c-global-nav__sub-menu-wrapper--expanded{box-shadow:inset 0 4px 12px #0a082740}.c-global-nav__sub-menu{background-color:#413e5b;margin:0 -16px;padding:0}.c-global-nav__sub-menu .c-global-nav__item{padding-left:0;padding-right:0}.c-global-nav__sub-item{padding-left:0}.c-global-nav__sub-menu-link{display:block;padding-left:16px;padding-right:16px}}@media (min-width:73.125em){.c-global-nav{background-color:initial;transform:none!important}.c-global-nav__user-block{display:none}.c-global-nav__menu{display:-ms-flexbox;display:flex}.c-global-nav__item{display:block;-ms-flex-direction:row;flex-direction:row;padding:0;width:auto}.c-global-nav__item--hidden\@md{display:none}.c-global-nav__link{box-shadow:none;color:#0a0827;font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.3125;padding:18px 12px 17px;text-align:center}.c-global-nav__link--active{background-color:#0a08270d;box-shadow:inset 0 -2px 0 0 #0a0827,inset 1px 0 0 0 #dfdee8,inset -1px 0 0 0 #dfdee8}.c-global-nav__sub-menu-control{background-image:url(build/images/icons/16px/dark/arrow-down.5c114ae6.svg);background-position:center right 12px;padding-right:32px}.c-global-nav__sub-menu-control--expanded{background-color:#0a08270d;background-image:url(build/images/icons/16px/dark/arrow-up.90162eff.svg)}.c-global-nav__sub-menu-wrapper{-webkit-overflow-scrolling:touch;background-color:#fff;box-shadow:0 12px 16px 0 #0a08271a;display:none;height:auto;left:0;max-height:calc(100vh - 56px);opacity:0;overflow-y:scroll;overscroll-behavior-x:contain;position:absolute;right:0;transform:translateY(-20px);width:100%;width:100vw;z-index:150}.c-global-nav__sub-menu-container{margin-left:auto;margin-right:auto;max-width:1218px;padding-left:24px;padding-right:24px}.c-global-nav__sub-menu{box-shadow:none;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-bottom:0;padding-bottom:24px;padding-top:8px}.c-global-nav__link-block{box-shadow:inset 0 -1px 0 0 #0a08271a;padding:24px 0;position:relative}.c-global-nav__link-block:hover{box-shadow:inset 0 -1px 0 0 #be1e2d}.c-global-nav__link-block-link{color:#0a0827;display:block;font-size:26px;font-size:1.4444444rem;font-weight:900;line-height:1.2307692;margin-bottom:8px;padding:0;text-decoration:none}.c-global-nav__link-block-link:hover{background-color:initial;color:#0a0827}.c-global-nav__link-block-link:before{content:"";display:block;height:100%;left:0;position:absolute;top:0;width:100%}.c-global-nav__item--hidden\@md,.c-global-nav__link-block-desc{display:block}}.c-global-footer{background-color:#0a0827;color:#ffffffbf;padding-top:40px}.c-global-footer__lusa-logo{display:block;margin-bottom:16px}.c-global-footer__lusa-logo path{fill:#adacba}@media (min-width:48em){.c-global-footer__lusa-logo{margin-bottom:24px}}.c-global-footer__link-block-list{list-style-type:none;margin-bottom:24px}.c-global-footer__link-block-list>:last-child{margin-bottom:0}@media (min-width:73.125em){.c-global-footer__link-block-list{margin-bottom:8px}}.c-global-footer__link-block{box-shadow:inset 0 -1px 0 0 #413e5b;display:block;font-size:16px;font-size:.8888889rem;line-height:1.5;margin-bottom:8px;padding-bottom:12px;padding-top:12px;position:relative}.c-global-footer__link-block:active,.c-global-footer__link-block:focus,.c-global-footer__link-block:hover{box-shadow:inset 0 -2px 0 0 #ff9e00}.c-global-footer__link-block:active .c-global-footer__link-block-desc,.c-global-footer__link-block:focus .c-global-footer__link-block-desc,.c-global-footer__link-block:hover .c-global-footer__link-block-desc{color:#ff9e00bf}@media (min-width:48em){.c-global-footer__link-block{margin-bottom:16px}}.c-global-footer__link-block-link{color:#fff;display:block;font-weight:700;text-decoration:none}.c-global-footer__link-block-link:active,.c-global-footer__link-block-link:focus,.c-global-footer__link-block-link:hover{color:#ff9e00}.c-global-footer__link-block-link:after{content:"";cursor:pointer;display:block;height:100%;left:0;position:absolute;top:0;width:100%}.c-global-footer__link-block-desc{color:#ffffffbf;font-weight:400}.c-global-footer__link-bar{box-shadow:inset 0 -1px 0 0 #413e5b;display:-ms-flexbox;display:flex;-ms-flex:0 1 auto;flex:0 1 auto;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;list-style:none;margin:0;padding:0 0 24px}.c-global-footer__link-bar--social{padding:24px 0}@media (min-width:48em){.c-global-footer__link-bar{-ms-flex-align:center;align-items:center}}@media (min-width:73.125em){.c-global-footer__link-bar{padding:8px 0 32px}.c-global-footer__link-bar--social{padding:24px 0}}.c-global-footer__link-bar-item{-ms-flex-preferred-size:50%;flex-basis:50%;margin-bottom:8px;max-width:50%}.c-global-footer__link-bar-item--social-icon{-ms-flex-preferred-size:auto;flex-basis:auto;margin-bottom:0;margin-right:16px;padding:0}.c-global-footer__link-bar-item--social-icon a{display:block}.c-global-footer__link-bar-item--social-icon svg{display:block;height:48px;width:48px}.c-global-footer__link-bar-item--social-icon:hover{filter:brightness(0) saturate(100%) invert(64%) sepia(97%) saturate(2204%) hue-rotate(359deg) brightness(102%) contrast(107%)}@media (min-width:48em){.c-global-footer__link-bar-item--social-icon{padding:0}.c-global-footer__link-bar-item{-ms-flex-preferred-size:auto;flex-basis:auto;margin-bottom:0;margin-right:24px;max-width:100%}.c-global-footer__link-bar-item:last-of-type{margin-right:0}}@media (min-width:48em) and (min-width:48em){.c-global-footer__link-bar-item--last-text{-ms-flex:auto;flex:auto}}.c-global-footer__link-bar-icon{display:block}.c-global-footer__link-bar-link{color:#fff;display:block;font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.7142857;text-decoration:none}.c-global-footer__link-bar-link:active,.c-global-footer__link-bar-link:focus,.c-global-footer__link-bar-link:hover{color:#ff9e00}.c-global-footer__small-print{background-color:#ffffff0d;padding-bottom:32px;padding-top:24px}.c-global-footer__small-print small{color:#fffc;display:block;font-size:14px;font-size:.7777778rem;line-height:1.4285714;margin-bottom:16px}@media (min-width:73.125em){.c-global-footer__small-print{padding-bottom:40px}}.c-global-footer__badges{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;list-style-type:none;margin:0;padding:24px 0}.c-global-footer__badges__item{margin-right:16px}.c-global-footer__badges__item img{display:block}.c-global-footer__badges__item--wide svg{max-width:90px}@media (min-width:23.4375em){.c-global-footer__badges__item--wide svg{max-width:none}}.c-global-footer__badges>:last-child{margin-right:0}.c-global-footer__lusa-seal{-ms-flex-align:center;align-items:center;box-shadow:inset 0 1px 0 0 #413e5b;display:-ms-flexbox;display:flex;padding-bottom:24px;padding-top:24px;width:100%}@media (min-width:48em){.c-global-footer__lusa-seal{-ms-flex-item-align:end;align-self:flex-end;box-shadow:none}}.c-global-footer__lusa-seal-badge{margin-right:16px}.c-global-footer__lusa-seal-badge svg{display:block;height:64px;width:64px}.c-global-footer__lusa-seal-text{color:#ffffffbf;font-size:14px;font-size:.7777778rem;line-height:1.1428571;margin-bottom:0}.c-global-footer__updated{color:#fff;font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.4285714;margin-bottom:0}.c-btn{-webkit-touch-callout:none;background-size:24px;border:none;border-radius:8px;box-shadow:0 2px 4px 0 #2622620d;cursor:pointer;display:inline-block;font:inherit;font-size:14px;font-size:.7777778rem;font-weight:700;letter-spacing:1.25px;line-height:1.4285714;padding:10px 12px;text-align:center;text-decoration:none;text-transform:uppercase;-webkit-user-select:none;-ms-user-select:none;user-select:none;vertical-align:middle}.c-btn:hover{box-shadow:0 2px 4px 0 #0a082740}.c-btn:focus{outline:none}.c-btn:disabled{box-shadow:none;cursor:auto;opacity:.65}.c-btn--radio{box-shadow:none;font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5;padding-bottom:8px;padding-top:8px;text-transform:none}.c-btn--radio input[type=radio]{height:0;visibility:hidden;width:0}.c-btn--radio:hover{box-shadow:inset 0 0 0 2px #0a0827}.c-btn--enabled{background-color:#fff;box-shadow:inset 0 0 0 2px #dfdee8;color:#0a0827;letter-spacing:.5px}.c-btn--lg{font-size:16px;font-size:.8888889rem;line-height:20px;padding:14px 12px}.c-btn--xl{padding:22px 12px}.c-btn--block{display:block;width:100%}.c-btn--themed{color:#fff}.c-btn--ghost{box-shadow:inset 0 0 0 1px #ffffff80;color:#fff}.c-btn--primary{background-color:#262262;color:#fff;letter-spacing:.5px}.c-btn--secondary{background-color:#008874;color:#fff;letter-spacing:.5px}.c-btn--neutral{background-color:#fff}.c-btn--cta,.c-btn--neutral{color:#0a0827;letter-spacing:.5px}.c-btn--cta{background-color:#ffd814;box-shadow:inset 0 0 0 1px #0a0827}.c-btn--cta:hover{box-shadow:inset 0 0 0 1px #0a0827,0 2px 4px 0 #0a082740}.c-btn--muted{background-color:#3b3952;color:#fff;letter-spacing:.5px}.c-btn--muted:hover{box-shadow:inset 0 0 0 2px #fff}.c-btn--clear{background-color:initial;color:#0a0827}.c-btn--clear,.c-btn--clear:hover{box-shadow:none}.c-btn--content-link{background-color:#fff;background-image:url(build/images/icons/16px/dark/arrow-right.adad23de.svg);background-position:top 50% right 12px;background-repeat:no-repeat;background-size:16px;box-shadow:0 1px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;color:#0a0827;padding-left:16px;padding-right:36px;text-align:left}.c-btn--content-link-active,.c-btn--content-link:focus,.c-btn--content-link:hover{box-shadow:0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827}.c-btn--arrow-link{background-color:#fff;background-image:url(build/images/icons/16px/dark/arrow-right.adad23de.svg);background-position:50%;background-repeat:no-repeat;background-size:16px;box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 2px #dfdee8;color:#0a0827;padding:8px;text-align:left}.c-btn--arrow-link:focus,.c-btn--arrow-link:hover{box-shadow:0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827}.c-btn--right-arrow{background-image:url(build/images/icons/16px/dark/arrow-right.adad23de.svg);background-position:center right 8px;background-repeat:no-repeat;background-size:16px;padding:10px 32px 10px 10px;text-align:left}.c-btn--left-arrow{background-position:center left 8px;padding:10px 10px 10px 32px;text-align:right}.c-btn--back,.c-btn--left-arrow{background-image:url(build/images/icons/16px/dark/arrow-left.e820daf7.svg);background-repeat:no-repeat;background-size:16px}.c-btn--back{background-color:initial;background-position:top 50% left 12px;border:none;color:#0a0827;padding:8px 8px 8px 36px;text-align:left}.c-btn--back,.c-btn--back:focus,.c-btn--back:hover{box-shadow:none}.c-btn--export{background-color:#fff;background-image:url(build/images/icons/16px/dark/export.728edb5e.svg);background-position:50%;background-repeat:no-repeat;background-size:16px;box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 2px #26226226;color:#0a0827;padding:8px;text-align:left}.c-btn--export:focus,.c-btn--export:hover{box-shadow:0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827}.c-btn--close{background-color:#fff;background-image:url(build/images/icons/16px/dark/close.dd4cce19.svg);background-position:50%;background-repeat:no-repeat;background-size:16px;color:#0a0827;padding:12px;text-align:center}.c-btn--close,.c-btn--close:focus,.c-btn--close:hover{box-shadow:none}.c-btn--download{background-color:#fff;background-image:url(build/images/icons/16px/dark/download.83e691cf.svg);background-position:top 50% right 12px;background-repeat:no-repeat;background-size:16px;box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 2px #26226226;color:#0a0827;padding-left:16px;padding-right:36px;text-align:left}.c-btn--download:focus,.c-btn--download:hover{box-shadow:0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827}.c-btn--toggle{background-image:url(build/images/icons/16px/dark/arrow-down.5c114ae6.svg);background-position:top 50% right 12px;background-repeat:no-repeat;background-size:16px;color:#0a0827;padding-left:16px;padding-right:36px;text-align:left}.c-btn--toggle-active,.c-btn--toggle:focus,.c-btn--toggle:hover{box-shadow:0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827}.c-btn--graph{background-color:#fff;background-image:url(build/images/icons/16px/dark/graph.dfb064ea.svg);background-position:50%;background-repeat:no-repeat;background-size:16px;box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 2px #26226226;color:#0a0827;height:32px;padding:8px;text-align:left;width:32px}.c-btn--graph span{display:none}.c-btn--graph:focus,.c-btn--graph:hover{box-shadow:0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827}.c-input{-webkit-appearance:none;appearance:none;background-color:#fff;border:none;border-radius:8px;box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;display:inline-block;font-family:DM Sans,sans-serif;font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.25;padding:11px 12px 9px}.c-input--full{display:block;width:100%}.c-input--applied,.c-input--is-active{box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 2px #0a0827}.c-input--is-active{font-weight:800}.c-input--is-invalid{background-color:#f9e9ea;box-shadow:0 2px 4px 0 #be1e2d0d,inset 0 0 0 1px #be1e2d;color:#be1e2d}.c-input:focus{outline:none}.c-input::-webkit-input-placeholder{color:#0a082766;font-size:16px;font-size:.8888889rem;line-height:1.25}.c-input::placeholder{color:#0a082766;font-size:16px;font-size:.8888889rem;line-height:1.25}.c-input:-ms-input-placeholder{color:#0a082766;font-size:16px;font-size:.8888889rem;line-height:1.25}.c-input::-ms-input-placeholder{color:#0a082766;font-size:16px;font-size:.8888889rem;line-height:1.25}.c-input--lg{font-size:18px;font-size:1rem;line-height:1.3333333;padding:16px}.c-input--lg::-webkit-input-placeholder{font-size:18px;font-size:1rem;line-height:1.3333333}.c-input--lg::placeholder{font-size:18px;font-size:1rem;line-height:1.3333333}.c-input--lg:-ms-input-placeholder{font-size:18px;font-size:1rem;line-height:1.3333333}.c-input--lg::-ms-input-placeholder{font-size:18px;font-size:1rem;line-height:1.3333333}.c-input--search{background-position:center right 16px}.c-input--search,.c-input--search-left{background-image:url(build/images/icons/16px/dark/search.bcae700b.svg);background-repeat:no-repeat;text-align:left}.c-input--search-left{background-position:center left 12px;padding-left:36px}.c-input--select{background-image:url(build/images/icons/16px/dark/arrow-down.5c114ae6.svg)}.c-input--filter,.c-input--select{background-position:center right 12px;background-repeat:no-repeat;padding-right:36px;text-align:left}.c-input--filter{background-image:url(build/images/icons/16px/dark/filter.936c05e3.svg)}.c-input--date{background-image:url(build/images/icons/16px/dark/calendar.2643f062.svg);background-position:bottom 12px left 12px;background-repeat:no-repeat;padding-left:36px;text-align:right}.c-state-link{box-shadow:inset 0 -1px 0 0 #0a08271a;color:#0a0827;display:inline-block;list-style-type:none;margin-bottom:8px;overflow:hidden;padding-bottom:9px;padding-top:10px;text-decoration:none;text-overflow:ellipsis;vertical-align:middle;white-space:nowrap;width:100%}.c-state-link--active,.c-state-link:hover{box-shadow:inset 0 -2px 0 0 #be1e2d;color:#be1e2d}.c-state-link--abbr{font-size:14px;font-size:.7777778rem;line-height:1.4285714}.c-state-link--abbr span{display:inline-block;font-weight:700;min-width:28px}.c-state-link--abbr:after{content:attr(data-state-link-content);font-weight:400;position:relative;right:0;text-indent:40px;text-transform:none}.c-state-link--abbr:after,.c-state-link--name{font-size:14px;font-size:.7777778rem;line-height:1.5}.c-state-link--name:before{content:attr(data-state-link-content);display:inline-block;font-size:14px;font-size:.7777778rem;font-weight:700;left:0;line-height:1.4285714;min-width:28px;position:relative;text-transform:none}@media (max-width:73.115em){.c-state-link--in-nav{box-shadow:none;color:#fff;font-size:18px;font-size:1rem;font-weight:500;line-height:1.3333333;margin-bottom:0;padding-bottom:8px;padding-top:8px;text-decoration:none}.c-state-link--in-nav:hover{background-color:#626078;box-shadow:inset 4px 0 0 0 #fff;color:#fff}.c-state-link--in-nav:before{color:#adacba;display:inline-block;font-size:18px;font-size:1rem;font-weight:500;line-height:1.3333333;margin-right:8px;min-width:28px}.c-state-link--in-nav.c-state-link--active{background-color:#626078;box-shadow:inset 4px 0 0 0 #fff}}.c-footer-navigation{background-color:#fff;padding-bottom:40px;padding-top:40px}.c-footer-navigation--themed{border-bottom:1px solid #dfdee8;border-top:1px solid #dfdee8}.c-footer-navigation__input{margin-bottom:16px}.c-footer-navigation__multistate-block{padding-top:24px}.c-footer-navigation__multi-state-links{margin-bottom:0}.c-footer-navigation__multi-state-link{margin-bottom:8px}.c-footer-navigation__multi-state-link:last-of-type,
            .c-footer-navigation__state-links{
                margin-bottom:0
            }
            @media (min-width:48em){.
                c-footer-navigation{
                    padding-bottom:56px;
                    padding-top:48px
                }.c-footer-navigation__multistate-block{padding-top:40px}.c-footer-navigation__multi-state-link{margin-bottom:16px}}.c-form-card{background-color:#fff;border:1px solid #dfdee8;border-radius:8px;padding:16px}.c-form-card--adaptive{border-radius:0}@media (min-width:48em){.c-form-card--adaptive{border-radius:8px}}.c-form-card--muted{background-color:#0a08270d}.c-form-card__title{font-size:18px;font-size:1rem;font-weight:400;line-height:1.1111111;margin-bottom:0}@media (max-width:47.99em){.c-form-card__title{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;margin-bottom:8px}}.c-form-card__sub-text{color:#0a0827cc;font-size:12px;font-size:.6666667rem;line-height:1.3333333;margin-bottom:0}.c-form-card__title+.c-form-card__sub-text{margin-top:4px}.c-form-card__input{margin-right:8px}.c-form-card__calculated-values{font-size:24px;font-size:1.3333333rem;font-weight:700;line-height:1.25;margin-bottom:0;white-space:nowrap}.c-form-card__calculated-values--sm{font-size:20px;font-size:1.1111111rem;font-weight:500;line-height:1.3}.c-form-card__calculated-values--md{font-size:18px;font-size:1rem;font-weight:700;line-height:1.6666667}@media (max-width:47.99em){.c-form-card__calculated-values{margin-top:16px}}.c-tool-card{-ms-flex-pack:center;-ms-flex-align:center;align-items:center;background-color:#fff;border:1px solid #dfdee8;border-radius:8px;box-shadow:0 2px 8px 0 #2622620d;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;justify-content:center;opacity:1;overflow:hidden;padding:24px;position:relative;text-align:center;transition:opacity .15s ease-in-out}.c-tool-card>:last-child{margin-bottom:0}.c-tool-card--flex{height:100%}.c-tool-card--coming-soon{opacity:.4}.c-tool-card__icon{height:56px;margin-bottom:14px;width:56px}.c-tool-card__link{color:#0a0827;text-decoration:none}.c-tool-card__link:after{bottom:0;content:"";left:0;overflow:hidden;position:absolute;right:0;top:0;white-space:nowrap;z-index:1}.c-tool-card__title{font-size:21px;font-size:1.1666667rem;line-height:1.2380952;margin-bottom:2px}.c-tool-card__title:before{background-image:url(build/images/icons/16px/color/lock.d10139fe.svg);background-repeat:no-repeat;background-size:24px;content:"";display:inline-block;height:24px;opacity:0;position:absolute;right:24px;top:24px;transition:opacity .3s ease-in-out;width:24px}.c-tool-card--authenticated-only .c-tool-card__title:before{opacity:1}.c-tool-card__desc{color:#626078;font-size:14px;font-size:.7777778rem;line-height:1.4285714}.c-game-link-card{-ms-flex-align:center;align-items:center;background-color:#fff;border-radius:8px;box-shadow:0 2px 8px 0 #2622620d;display:-ms-flexbox;display:flex;overflow:hidden;padding:12px 48px 12px 12px;position:relative}.c-game-link-card:before{background-image:url(build/images/backgrounds/balls-default.179760b0.svg);background-position:top 50% right -64px;background-repeat:no-repeat;content:"";height:100%;left:0;position:absolute;top:0;width:100%}.c-game-link-card--megamillions:before,.c-game-link-card--powerball:before{background-position:top 50% right -90px}.c-game-link-card--powerball{background-image:linear-gradient(to top right,#ff9e9ebf,#ffd1d1bf)}.c-game-link-card--powerball:before{background-image:url(build/images/backgrounds/balls-pb.65805d3b.svg)}.c-game-link-card--megamillions{background-image:linear-gradient(to top right,#ffd866bf,#feecb2bf)}.c-game-link-card--megamillions:before{background-image:url(build/images/backgrounds/balls-mm.10926be8.svg)}.c-game-link-card__media{height:48px;margin-right:12px;width:48px;z-index:1}.c-game-link-card__link{color:#0a0827;display:inline-block;font-size:21px;font-size:1.1666667rem;font-weight:700;line-height:1.2380952;text-decoration:none;z-index:1}@media (min-width:48em){.c-game-link-card{border-radius:8px}}.c-jackpot-card{background-color:#fff;border:1px solid #dfdee8;border-radius:8px;box-shadow:0 2px 8px 0 #0a08270d;display:block;padding:0 16px;position:relative}.c-jackpot-card:last-child{margin-bottom:16px}.c-jackpot-card__header{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;padding:16px 0 4px;width:100%}@media (min-width:73.125em){.c-jackpot-card__game-details{-ms-flex-pack:justify;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;justify-content:space-between;width:100%}}.c-jackpot-card__jackpot{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;font-size:18px;font-size:1rem;font-weight:700;line-height:1.3333333;padding:0 0 16px 60px}.c-jackpot-card__jackpot-direction{margin-left:4px}.c-jackpot-card__jackpot--has-extra .c-jackpot-card__jackpot-row{padding-bottom:10px}.c-jackpot-card__state{padding:0;position:absolute;right:16px;top:16px}.c-jackpot-card__icon{-ms-flex-align:center;align-items:center;margin-right:8px}.c-jackpot-card__prize-label{font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5;position:relative;text-align:right}.c-jackpot-card__prize-label:before{background-image:url(build/images/icons/24px/color/dollar.42d1b55f.svg);background-position:50% 50%;background-size:24px 24px;content:"";display:inline-block;height:24px;margin-right:8px;vertical-align:top;width:24px}.c-jackpot-card__prize-value{display:block;font-size:21px;font-size:1.1666667rem;font-weight:700;line-height:1.2380952;margin-left:auto;text-align:right}.c-jackpot-card__prize-sub-value{display:block;font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.4285714;margin-left:auto}.c-jackpot-card__jackpot-history{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;position:static;width:100%}.c-jackpot-card__jackpot-history .c-btn{position:absolute;right:16px;top:60px}.c-jackpot-card__jackpot-history-chart{display:none}.c-jackpot-card__jackpot-history-chart.is-open{display:block;height:366px;padding:8px 0;width:100%}.c-jackpot-card__jackpot-history-chart .c-loader{min-height:366px}.c-jackpot-card__title{display:block;font-size:18px;font-size:1rem;font-weight:700;line-height:1.4444444}.c-jackpot-card__date{display:block;font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.4285714}@media (min-width:73.125em){.c-jackpot-card__date{font-size:18px;font-size:1rem;font-weight:300;line-height:1.2222222}}.c-jackpot-card__logo{height:48px;margin-right:12px;width:48px}.c-jackpot-card__jackpot-label{font-size:16px;font-size:.8888889rem;line-height:1.5}.c-jackpot-card__btn{display:block;width:100%}.c-jackpot-card__btn:after{bottom:0;content:"";left:0;overflow:hidden;position:absolute;right:0;top:0;white-space:nowrap;z-index:1}@media (min-width:73.125em){.c-jackpot-card{-ms-flex-pack:justify;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;justify-content:space-between}.c-jackpot-card:hover{box-shadow:0 2px 8px 0 #0a08270d,inset 0 0 0 2px #0a0827;cursor:pointer}.c-jackpot-card:hover .c-jackpot-card__btn{box-shadow:inset 0 0 0 2px #0a0827}.c-jackpot-card__header{-ms-flex-preferred-size:50%;flex-basis:50%;height:100%;padding:16px 0}.c-jackpot-card__jackpot{-ms-flex-preferred-size:25%;-ms-flex-align:center;-ms-flex-pack:center;align-items:center;flex-basis:25%;justify-content:center;padding-bottom:8px;padding-top:8px}.c-jackpot-card__jackpot--has-extra{padding-bottom:0}.c-jackpot-card__state{-ms-flex-align:center;-ms-flex-pack:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex:1 1 auto;flex:1 1 auto;justify-content:center;padding-bottom:8px;padding-right:48px;padding-top:8px;position:static}.c-jackpot-card__jackpot-history .c-btn{top:24px}.c-jackpot-card__jackpot-list{-ms-flex-pack:end;justify-content:flex-end}.c-jackpot-card__link,.c-jackpot-card__prize{box-shadow:inset 0 1px 0 0 #f4f4f7}.c-jackpot-card__prize{-ms-flex-preferred-size:45%;flex-basis:45%}.c-jackpot-card__prize-sub-value{display:inline-block;font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.4285714;margin-left:auto}.c-jackpot-card__link{-ms-flex-preferred-size:55%;flex-basis:55%;padding:16px 0}.c-jackpot-card__jackpot-row{-ms-flex-pack:end;box-shadow:none;justify-content:flex-end}.c-jackpot-card__jackpot-row+.c-jackpot-card__jackpot-row{box-shadow:inset 0 1px 0 0 #f4f4f7;padding-bottom:4px}.c-jackpot-card__jackpot-meta{margin-right:auto}.c-jackpot-card__prize-label{margin-right:8px}.c-jackpot-card__prize-details{padding:0}.c-jackpot-card__btn,.c-jackpot-card__prize-details{-ms-flex-item-align:center;align-self:center;width:auto}.c-jackpot-card__btn{font-size:14px;font-size:.7777778rem;height:auto;line-height:1.4285714;margin-left:auto;padding:6px 36px 6px 12px}}.c-next-draw-card{background-color:#fff;background-image:linear-gradient(180deg,#ffffff80 0,#fff 80px);border:1px solid #0a0827;border-radius:8px;box-shadow:0 2px 8px 0 #2622620d;list-style-type:none;margin-bottom:16px;padding-left:16px;padding-right:16px;position:relative}.c-next-draw-card--themed:before{background-image:url(build/images/backgrounds/balls-default.179760b0.svg);background-position:top 50% right -64px;background-repeat:no-repeat;content:"";height:100%;left:0;position:absolute;top:0;width:100%}.c-next-draw-card--themed .c-next-draw-card__header{margin-bottom:12px}.c-next-draw-card--themed .c-next-draw-card__prize-label{font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5;position:relative}.c-next-draw-card--themed .c-next-draw-card__prize-label:before{background-image:url(build/images/icons/24px/dark/dollar.bdec4f04.svg)}.c-next-draw-card--themed .c-next-draw-card__date{color:#0a0827}.c-next-draw-card--themed .c-next-draw-card__cta{padding:0 0 16px}.c-next-draw-card__body{position:relative;z-index:1}.c-next-draw-card__header{display:-ms-flexbox;display:flex;-ms-flex-direction:row-reverse;flex-direction:row-reverse;margin-bottom:4px;padding-top:16px}.c-next-draw-card__header-body{display:-ms-flexbox;display:flex;-ms-flex:1;flex:1;-ms-flex-direction:column;flex-direction:column}.c-next-draw-card__game-title{box-shadow:inset 0 -1px 0 0 #dfdee8;font-size:21px;font-size:1.1666667rem;line-height:1.1428571;padding-bottom:8px}.c-next-draw-card__title{font-size:21px;font-size:1.1666667rem;line-height:1.2380952;margin:0}.c-next-draw-card__date{-ms-flex-order:-1;color:#413e5b;font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.4285714;order:-1}.c-next-draw-card__header-media{margin-bottom:0;margin-left:auto;margin-right:12px}.c-next-draw-card__prize-details{-ms-flex-align:end;align-items:flex-end;box-shadow:inset 0 1px 0 0 #dfdee8;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:0;padding:16px 0;width:100%}.c-next-draw-card__prize-label{color:#413e5b;-ms-flex:0 1 50%;flex:0 1 50%;font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5;position:relative}.c-next-draw-card__prize-label:before{background-image:url(build/images/icons/24px/color/dollar.42d1b55f.svg);background-position:50% 50%;background-size:24px 24px;content:"";display:inline-block;height:24px;margin-right:8px;vertical-align:top;width:24px}.c-next-draw-card__prize-value{-ms-flex-item-align:end;align-self:flex-end;display:block;font-size:21px;font-size:1.1666667rem;font-weight:700;line-height:1.2380952;margin:0 0 0 auto;text-align:right;width:auto}.c-next-draw-card__prize-sub-value{font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.4285714}.c-next-draw-card__cash-prize-label{-ms-flex-item-align:end;align-self:flex-end;display:block;-ms-flex:1;flex:1;margin-right:0;min-width:50%;text-align:right}.c-next-draw-card__cash-prize-label,.c-next-draw-card__cash-prize-value{color:#0a0827cc;color:#0a082799;font-size:12px;font-size:.6666667rem;font-size:13px;font-size:.7222222rem;font-weight:500;line-height:1.3333333;line-height:1.5384615}.c-next-draw-card__cash-prize-value{margin-left:4px}.c-next-draw-card--countdown .c-next-draw-card__date{font-size:21px;font-size:1.1666667rem;font-weight:400;line-height:1.3333333}.c-next-draw-card--countdown .c-next-draw-card__label{left:16px;position:absolute;top:-12px;z-index:2}.c-next-draw-card__cta{padding:0 16px 16px}.c-next-draw-card--featured{background-color:#fff;background-image:linear-gradient(1turn,#ffffffd9,#fff 30px);border-bottom-color:#dfdee8;border-left:0;border-radius:0;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-right:0;border-top:1px solid #dfdee8;color:#0a0827b3;margin-bottom:0}.c-next-draw-card--featured:before{background-image:none}.c-next-draw-card--featured .c-next-draw-card__label{left:8px;position:absolute;top:-12px;z-index:2}.c-next-draw-card--featured .c-next-draw-card__header{margin-bottom:0;padding-top:24px}.c-next-draw-card--featured .c-next-draw-card__date{color:#0a0827b3;font-size:18px;font-size:1rem;font-weight:700;line-height:1.2222222;margin-bottom:10px}.c-next-draw-card--featured .c-next-draw-card__cta{padding:8px 0 16px}@media (min-width:48em){.c-next-draw-card--featured{margin-bottom:0}}.c-next-draw-card--bordered{padding:0}.c-next-draw-card--bordered .c-next-draw-card__header{margin:0;padding:0}.c-next-draw-card--bordered .c-next-draw-card__header-media{-ms-flex-item-align:center;-ms-flex-pack:center;align-self:center;box-shadow:inset -1px 0 0 0 #0a08270d;display:block;justify-content:center;margin-right:16px;padding:0 12px}.c-next-draw-card--bordered .c-next-draw-card__logo{display:block}.c-next-draw-card--bordered .c-next-draw-card__date{margin-bottom:3px}.c-next-draw-card--bordered .c-next-draw-card__header-body{-ms-flex-pack:center;justify-content:center;padding:12px 8px 12px 0}.c-next-draw-card--bordered .c-next-draw-card__prize-details{padding:19px 16px}@media (min-width:73.125em){.c-next-draw-card{border-radius:8px;margin-bottom:24px}.c-next-draw-card--themed{margin-bottom:16px}.c-next-draw-card--featured{border-radius:0;-ms-flex:auto;flex:auto;margin-bottom:0;padding-bottom:8px;padding-left:24px;padding-right:24px;width:100%}.c-next-draw-card--featured .c-next-draw-card__label{left:16px}.c-next-draw-card--featured .c-next-draw-card__header{margin-bottom:0;padding-top:32px}}.c-upcoming-jackpot-card{background-color:#fff;background-image:linear-gradient(180deg,#ffffff80 0,#fff 80px);border:1px solid #dfdee8;border-radius:8px;box-shadow:0 2px 8px 0 #2622620d;list-style-type:none;padding-left:16px;padding-right:16px;position:relative;width:100%}.c-carousel__item>.c-upcoming-jackpot-card{width:272px}@media (min-width:23.4375em){.c-carousel__item>.c-upcoming-jackpot-card{width:312px}}@media (min-width:73.125em){.c-carousel__item>.c-upcoming-jackpot-card{width:370px}}.c-upcoming-jackpot-card--themed:before{background-image:url(build/images/backgrounds/balls-default.179760b0.svg);background-position:top 50% right -64px;background-repeat:no-repeat;content:"";height:100%;left:0;position:absolute;top:0;width:100%}.c-upcoming-jackpot-card--themed .c-upcoming-jackpot-card__prize-label{font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5;position:relative;text-align:right}.c-upcoming-jackpot-card--themed .c-upcoming-jackpot-card__prize-label:before{background-image:url(build/images/icons/24px/dark/dollar.bdec4f04.svg)}.c-upcoming-jackpot-card__body{-ms-flex-pack:justify;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;height:100%;justify-content:space-between;position:relative;z-index:1}.c-upcoming-jackpot-card__header{display:-ms-flexbox;display:flex;-ms-flex-direction:row-reverse;flex-direction:row-reverse;margin-bottom:4px;padding-top:16px}.c-upcoming-jackpot-card__header-body{display:-ms-flexbox;display:flex;-ms-flex:1;flex:1;-ms-flex-direction:column;flex-direction:column}.c-upcoming-jackpot-card__title{font-size:18px;font-size:1rem;line-height:1.4444444;margin:0}@media (min-width:23.4375em){.c-upcoming-jackpot-card__title{font-size:21px;font-size:1.1666667rem;line-height:1.2380952}}.c-upcoming-jackpot-card__state{font-weight:300}.c-upcoming-jackpot-card__date{-ms-flex-order:-1;font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.4285714;order:-1}.c-upcoming-jackpot-card__logo{height:48px;pointer-events:none;width:48px}.c-upcoming-jackpot-card__dow{font-weight:700}.c-upcoming-jackpot-card__header-media{margin-bottom:0;margin-left:auto;margin-right:12px}.c-upcoming-jackpot-card__prize-details{-ms-flex-item-align:center;-ms-flex-align:baseline;align-items:baseline;align-self:center;box-shadow:inset 0 1px 0 0 #dfdee8;display:-ms-flexbox;display:flex;margin:0;padding:14px 0 16px;width:100%}.c-upcoming-jackpot-card__prize-label{font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5;position:relative;text-align:right}.c-upcoming-jackpot-card__prize-label:before{background-image:url(build/images/icons/24px/color/dollar.42d1b55f.svg);background-position:50% 50%;background-size:24px 24px;content:"";display:inline-block;height:24px;margin-right:8px;vertical-align:top;width:24px}.c-upcoming-jackpot-card__prize-value{display:block;font-size:21px;font-size:1.1666667rem;font-weight:700;line-height:1.2380952;margin-left:auto}.c-upcoming-jackpot-card--countdown .c-upcoming-jackpot-card__date{font-size:21px;font-size:1.1666667rem;font-weight:400;line-height:1.3333333}.c-upcoming-jackpot-card--countdown .c-upcoming-jackpot-card__label{left:16px;position:absolute;top:-12px;z-index:2}.c-upcoming-jackpot-card--countdown .c-upcoming-jackpot-card__body{padding-top:8px}.c-upcoming-jackpot-card__cta{padding:8px 0 16px}.c-page-header{background-color:#262262;color:#fff;padding:16px 0;position:relative;z-index:100}.c-page-header__container{margin-left:auto;margin-right:auto;max-width:1218px;padding-left:8px;padding-right:8px;position:relative}.c-page-header:before{background-color:#00000080;background-image:linear-gradient(180deg,#0000 40%,#000c);z-index:-1}.c-page-header:after,.c-page-header:before{content:"";display:block;height:100%;left:0;position:absolute;top:0;width:100%}.c-page-header:after{background-position:50%;background-size:cover;z-index:-2}.c-page-header__title-container{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex}.c-page-header__title-section{color:#fff;-ms-flex:1;flex:1;margin-right:12px}.c-page-header__breadcrumbs{display:none}.c-page-header__title{font-size:26px;font-size:1.4444444rem;font-weight:900;line-height:1.2307692;margin-bottom:0}.c-page-header__title--top{color:#fffc;display:block;font-size:16px;font-size:.8888889rem;font-weight:400;line-height:1.375}.c-page-header__game-logo{background-color:#fff;border-radius:100%;padding:10px}@media (min-width:23.4375em){.c-page-header__game-logo{height:72px;width:72px}}.c-page-header__state-badge{-ms-flex-pack:center;-ms-flex-align:center;align-items:center;background-color:#0003;border-radius:100%;box-shadow:inset 0 0 0 1px #fff;color:#fff;display:-ms-flexbox;display:flex;font-size:22px;font-size:1.2222222rem;font-weight:700;height:56px;justify-content:center;line-height:1;margin-left:auto;width:56px}@media (min-width:23.4375em){.c-page-header__state-badge{font-size:24px;font-size:1.3333333rem;height:72px;line-height:1;width:72px}}.c-page-header--multistate{display:-ms-flexbox;display:flex}.c-page-header--multistate .c-page-header__container{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;width:100%}.c-page-header--multistate .c-page-header__title-container{-ms-flex-line-pack:justify;align-content:space-between;display:-ms-flexbox;display:flex;width:100%}.c-page-header--multistate:after{background-image:url(build/images/state-images/us-flag-sm.d993b9c6.jpg)}@media (min-width:48em){.c-page-header--multistate:after{background-image:url(build/images/state-images/us-flag.1c99d01c.jpg)}}.c-page-header--al:after{background-image:url(build/images/state-images/al-sm.17d0f6fb.jpg)}@media (min-width:48em){.c-page-header--al:after{background-image:url(build/images/state-images/al.8d654316.jpg)}}.c-page-header--az:after{background-image:url(build/images/state-images/az-sm.703a390f.jpg)}@media (min-width:48em){.c-page-header--az:after{background-image:url(build/images/state-images/az.d58ab460.jpg)}}.c-page-header--ar:after{background-image:url(build/images/state-images/ar-sm.aadacc92.jpg)}@media (min-width:48em){.c-page-header--ar:after{background-image:url(build/images/state-images/ar.7271609b.jpg)}}.c-page-header--ca:after{background-image:url(build/images/state-images/ca-sm.dc302b94.jpg)}@media (min-width:48em){.c-page-header--ca:after{background-image:url(build/images/state-images/ca.c0f6674a.jpg)}}.c-page-header--co:after{background-image:url(build/images/state-images/co-sm.7e015bb3.jpg)}@media (min-width:48em){.c-page-header--co:after{background-image:url(build/images/state-images/co.9ced9947.jpg)}}.c-page-header--ct:after{background-image:url(build/images/state-images/ct-sm.6132ca27.jpg)}@media (min-width:48em){.c-page-header--ct:after{background-image:url(build/images/state-images/ct.792e99f8.jpg)}}.c-page-header--de:after{background-image:url(build/images/state-images/de-sm.555b34e9.jpg)}@media (min-width:48em){.c-page-header--de:after{background-image:url(build/images/state-images/de.ad7fef5c.jpg)}}.c-page-header--dc:after{background-image:url(build/images/state-images/dc-sm.7595ab56.jpg)}@media (min-width:48em){.c-page-header--dc:after{background-image:url(build/images/state-images/dc.8df1cbd4.jpg)}}.c-page-header--fl:after{background-image:url(build/images/state-images/fl-sm.87e1e075.jpg)}@media (min-width:48em){.c-page-header--fl:after{background-image:url(build/images/state-images/fl.a391aced.jpg)}}.c-page-header--ga:after{background-image:url(build/images/state-images/ga-sm.95954c88.jpg)}@media (min-width:48em){.c-page-header--ga:after{background-image:url(build/images/state-images/ga.f341e3c0.jpg)}}.c-page-header--id:after{background-image:url(build/images/state-images/id-sm.05f3a91e.jpg)}@media (min-width:48em){.c-page-header--id:after{background-image:url(build/images/state-images/id.1cf3d9bc.jpg)}}.c-page-header--il:after{background-image:url(build/images/state-images/il-sm.923d553d.jpg)}@media (min-width:48em){.c-page-header--il:after{background-image:url(build/images/state-images/il.2f207a4b.jpg)}}.c-page-header--in:after{background-image:url(build/images/state-images/in-sm.02ed5216.jpg)}@media (min-width:48em){.c-page-header--in:after{background-image:url(build/images/state-images/in.27a5af62.jpg)}}.c-page-header--ia:after{background-image:url(build/images/state-images/ia-sm.22934960.jpg)}@media (min-width:48em){.c-page-header--ia:after{background-image:url(build/images/state-images/ia.f5b31e3a.jpg)}}.c-page-header--ks:after{background-image:url(build/images/state-images/ks-sm.54da3588.jpg)}@media (min-width:48em){.c-page-header--ks:after{background-image:url(build/images/state-images/ks.1f68628d.jpg)}}.c-page-header--ky:after{background-image:url(build/images/state-images/ky-sm.928f77c4.jpg)}@media (min-width:48em){.c-page-header--ky:after{background-image:url(build/images/state-images/ky.356e8613.jpg)}}.c-page-header--la:after{background-image:url(build/images/state-images/la-sm.6673443c.jpg)}@media (min-width:48em){.c-page-header--la:after{background-image:url(build/images/state-images/la.98a2b0dc.jpg)}}.c-page-header--me:after{background-image:url(build/images/state-images/me-sm.789ae3c2.jpg)}@media (min-width:48em){.c-page-header--me:after{background-image:url(build/images/state-images/me.2093aad2.jpg)}}.c-page-header--md:after{background-image:url(build/images/state-images/md-sm.72ef3702.jpg)}@media (min-width:48em){.c-page-header--md:after{background-image:url(build/images/state-images/md.9befc8e2.jpg)}}.c-page-header--ma:after{background-image:url(build/images/state-images/ma-sm.fbf9e05d.jpg)}@media (min-width:48em){.c-page-header--ma:after{background-image:url(build/images/state-images/ma.43ddf187.jpg)}}.c-page-header--mi:after{background-image:url(build/images/state-images/mi-sm.f2c71a7a.jpg)}@media (min-width:48em){.c-page-header--mi:after{background-image:url(build/images/state-images/mi.3adb0e29.jpg)}}.c-page-header--mn:after{background-image:url(build/images/state-images/mn-sm.4a521343.jpg)}@media (min-width:48em){.c-page-header--mn:after{background-image:url(build/images/state-images/mn.84f2c604.jpg)}}.c-page-header--mo:after{background-image:url(build/images/state-images/mo-sm.f9994728.jpg)}@media (min-width:48em){.c-page-header--mo:after{background-image:url(build/images/state-images/mo.8ac10c9b.jpg)}}.c-page-header--ms:after{background-image:url(build/images/state-images/ms-sm.7b67f21a.jpg)}@media (min-width:48em){.c-page-header--ms:after{background-image:url(build/images/state-images/ms.d31a4f21.jpg)}}.c-page-header--mt:after{background-image:url(build/images/state-images/mt-sm.a8f7d4cf.jpg)}@media (min-width:48em){.c-page-header--mt:after{background-image:url(build/images/state-images/mt.e7ff0887.jpg)}}.c-page-header--ne:after{background-image:url(build/images/state-images/ne-sm.40cb5a05.jpg)}@media (min-width:48em){.c-page-header--ne:after{background-image:url(build/images/state-images/ne.454760f2.jpg)}}.c-page-header--nh:after{background-image:url(build/images/state-images/nh-sm.38367b78.jpg)}@media (min-width:48em){.c-page-header--nh:after{background-image:url(build/images/state-images/nh.6cb764f5.jpg)}}.c-page-header--nj:after{background-image:url(build/images/state-images/nj-sm.c88f973c.jpg)}@media (min-width:48em){.c-page-header--nj:after{background-image:url(build/images/state-images/nj.9a2ccd2f.jpg)}}.c-page-header--nm:after{background-image:url(build/images/state-images/nm-sm.440856d2.jpg)}@media (min-width:48em){.c-page-header--nm:after{background-image:url(build/images/state-images/nm.3f9b3fd7.jpg)}}.c-page-header--ny:after{background-image:url(build/images/state-images/ny-sm.b9339eb8.jpg)}@media (min-width:48em){.c-page-header--ny:after{background-image:url(build/images/state-images/ny.b1944fd1.jpg)}}.c-page-header--nc:after{background-image:url(build/images/state-images/nc-sm.85575e78.jpg)}@media (min-width:48em){.c-page-header--nc:after{background-image:url(build/images/state-images/nc.02ff9e14.jpg)}}.c-page-header--nd:after{background-image:url(build/images/state-images/nd-sm.3e6823f0.jpg)}@media (min-width:48em){.c-page-header--nd:after{background-image:url(build/images/state-images/nd.af9f2a77.jpg)}}.c-page-header--oh:after{background-image:url(build/images/state-images/oh-sm.e74c0c0d.jpg)}@media (min-width:48em){.c-page-header--oh:after{background-image:url(build/images/state-images/oh.d278509a.jpg)}}.c-page-header--ok:after{background-image:url(build/images/state-images/ok-sm.eacbf617.jpg)}@media (min-width:48em){.c-page-header--ok:after{background-image:url(build/images/state-images/ok.59bbcadd.jpg)}}.c-page-header--or:after{background-image:url(build/images/state-images/or-sm.d3619dbe.jpg)}@media (min-width:48em){.c-page-header--or:after{background-image:url(build/images/state-images/or.967e1f3a.jpg)}}.c-page-header--pa:after{background-image:url(build/images/state-images/pa-sm.788b23cd.jpg)}@media (min-width:48em){.c-page-header--pa:after{background-image:url(build/images/state-images/pa.600d7a2d.jpg)}}.c-page-header--pr:after{background-image:url(build/images/state-images/pr-sm.ce1b4198.jpg)}@media (min-width:48em){.c-page-header--pr:after{background-image:url(build/images/state-images/pr.29d35f7c.jpg)}}.c-page-header--ri:after{background-image:url(build/images/state-images/ri-sm.459a0736.jpg)}@media (min-width:48em){.c-page-header--ri:after{background-image:url(build/images/state-images/ri.022a3667.jpg)}}.c-page-header--sc:after{background-image:url(build/images/state-images/sc-sm.d491c66d.jpg)}@media (min-width:48em){.c-page-header--sc:after{background-image:url(build/images/state-images/sc.c34dea79.jpg)}}.c-page-header--sd:after{background-image:url(build/images/state-images/sd-sm.c59f1500.jpg)}@media (min-width:48em){.c-page-header--sd:after{background-image:url(build/images/state-images/sd.d79cf026.jpg)}}.c-page-header--tn:after{background-image:url(build/images/state-images/tn-sm.8e12c0b4.jpg)}@media (min-width:48em){.c-page-header--tn:after{background-image:url(build/images/state-images/tn.845e8ab5.jpg)}}.c-page-header--tx:after{background-image:url(build/images/state-images/tx-sm.fdb072e4.jpg)}@media (min-width:48em){.c-page-header--tx:after{background-image:url(build/images/state-images/tx.0c47b7be.jpg)}}.c-page-header--vt:after{background-image:url(build/images/state-images/vt-sm.4ad250d3.jpg)}@media (min-width:48em){.c-page-header--vt:after{background-image:url(build/images/state-images/vt.26a9c9c5.jpg)}}.c-page-header--va:after{background-image:url(build/images/state-images/va-sm.4971e0e0.jpg)}@media (min-width:48em){.c-page-header--va:after{background-image:url(build/images/state-images/va.930c90e5.jpg)}}.c-page-header--wa:after{background-image:url(build/images/state-images/wa-sm.547ae1de.jpg)}@media (min-width:48em){.c-page-header--wa:after{background-image:url(build/images/state-images/wa.40121274.jpg)}}.c-page-header--wv:after{background-image:url(build/images/state-images/wv-sm.734141b0.jpg)}@media (min-width:48em){.c-page-header--wv:after{background-image:url(build/images/state-images/wv.592d7eb4.jpg)}}.c-page-header--wi:after{background-image:url(build/images/state-images/wi-sm.e8a61180.jpg)}@media (min-width:48em){.c-page-header--wi:after{background-image:url(build/images/state-images/wi.c02dd178.jpg)}}.c-page-header--wy:after{background-image:url(build/images/state-images/wy-sm.c9afdcb6.jpg)}@media (min-width:48em){.c-page-header--wy:after{background-image:url(build/images/state-images/wy.0c483a2c.jpg)}.c-page-header--multistate{display:-ms-flexbox;display:flex}.c-page-header--multistate .c-page-header__container{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;width:100%}.c-page-header--multistate .c-page-header__title-container{-ms-flex-line-pack:justify;align-content:space-between;display:-ms-flexbox;display:flex;width:100%}.c-page-header__container{padding-left:24px;padding-right:24px}.c-page-header__breadcrumbs{display:block}.c-page-header__title,.c-page-header__title--top{font-size:40px;font-size:2.2222222rem;line-height:1.4}.c-page-header__title--top{color:#fff;display:inline;font-weight:400}.c-page-header__state-badge{font-size:42px;font-size:2.3333333rem;height:128px;line-height:1;width:128px}.c-page-header__game-logo{height:128px;width:128px}}@media print{.c-page-header,.c-page-header__container{padding:0}.c-page-header__title{font-size:16px;font-size:.8888889rem;line-height:1.25}.c-page-header__game-logo{height:72px;width:72px}}.c-general-page-header{background-color:#0a0827;background-image:url(build/images/backgrounds/general-page-header.ec328463.svg);background-position:bottom 54% right -120px;background-repeat:no-repeat;background-size:143%;color:#fff;margin-bottom:32px;padding:20px 0 16px;position:relative}.c-general-page-header--roomy{padding:24px 0}.c-general-page-header--narrow .c-general-page-header__container{max-width:820px}.c-general-page-header--medium .c-general-page-header__container{max-width:1018px}.c-general-page-header--center .c-general-page-header__container{text-align:center}.c-general-page-header__container{-ms-flex-pack:center;-ms-flex-line-pack:start;align-content:flex-start;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;justify-content:center;margin-left:auto;margin-right:auto;max-width:1218px;padding-left:8px;padding-right:8px;position:relative;width:100%}.c-general-page-header__breadcrumbs{display:none}.c-general-page-header__title{font-size:28px;font-size:1.5555556rem;font-weight:700;line-height:1.2142857;margin-bottom:0}.c-general-page-header__intro{color:#fffc;font-size:18px;font-size:1rem;line-height:1.5555556;margin-bottom:0;margin-top:4px}@media (min-width:48em){.c-general-page-header{background-position:bottom 31% right -230px,50%;background-size:145%,100%;padding:32px 0 24px}.c-general-page-header__container{padding-left:24px;padding-right:24px}.c-general-page-header__breadcrumbs{display:block}.c-general-page-header__title{font-size:36px;font-size:2rem;line-height:1.2222222}.c-general-page-header__intro{margin-top:8px}}@media (min-width:73.125em){.c-general-page-header{background-position:bottom 30% right -170px,50%;background-size:116%,100%;display:-ms-flexbox;display:flex;margin-bottom:40px;padding:24px 0}.c-general-page-header__title{font-size:40px;font-size:2.2222222rem;line-height:1.4}.c-general-page-header--roomy{padding:40px 0}.c-general-page-header--roomy .c-general-page-header__title{font-size:42px;font-size:2.3333333rem;line-height:1.1904762}}.c-region-menu{background-color:#fff;border-bottom:1px solid #dfdee8;box-shadow:0 4px 2px 0 rgba(0,0,0,.025);pointer-events:auto}@media (min-width:48em){.c-region-menu__container{margin-left:auto;margin-right:auto;max-width:1218px;padding-left:16px;padding-right:24px}}.c-region-menu__menu{display:-ms-flexbox;display:flex;-ms-flex-wrap:nowrap;flex-wrap:nowrap;list-style-type:none;margin:0;overflow:hidden}.c-region-menu__menu .c-carousel{width:100%}.c-region-menu__menu .c-carousel__item:last-child{padding-right:16px!important}@media (min-width:48em){.c-region-menu__menu{padding-left:0}}.c-region-menu__menu-item{-ms-flex-align:baseline;align-items:baseline;display:-ms-flexbox;display:flex;-ms-flex-wrap:nowrap;flex-wrap:nowrap;margin-right:8px;white-space:nowrap}.c-region-menu__menu-item:last-of-type{margin-right:0}.c-region-menu__menu-link{color:#0a0827;display:-ms-flexbox;display:flex;-ms-flex:auto;flex:auto;-ms-flex-direction:column;flex-direction:column;-ms-flex-wrap:nowrap;flex-wrap:nowrap;font-size:14px;font-size:.7777778rem;line-height:1.1428571;padding:16px 0 16px 12px;text-decoration:none}.c-region-menu__menu-link--active,.c-region-menu__menu-link:active,.c-region-menu__menu-link:focus,.c-region-menu__menu-link:hover{text-decoration:underline;text-decoration-thickness:1px;text-underline-offset:6px}.c-region-menu__menu-link--active{font-weight:700;position:relative}@media (min-width:48em){.c-region-menu__menu-link{padding:20px 0 20px 12px}.c-breadcrumbs{margin:0 0 8px}.c-breadcrumbs__list{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;list-style-type:none;margin:0}.c-breadcrumbs__item{font-size:12px;font-size:.6666667rem;font-weight:700;letter-spacing:1px;line-height:1.3333333;margin-right:4px;text-transform:uppercase}.c-breadcrumbs__link{color:#fff;display:block;opacity:.6;text-decoration:none}.c-breadcrumbs__link:after{background-image:url(build/images/icons/12px/light/arrow-right.d0f44a66.svg);background-size:12px;content:"";display:inline-block;height:14px;vertical-align:middle;width:12px}}.c-navbar{background-color:#fff;border-bottom:1px solid #dfdee8;overflow:hidden;position:relative}@media (min-width:48em){.c-navbar__container{margin-left:auto;margin-right:auto;max-width:1218px;padding-left:16px;padding-right:16px}}.c-navbar__items{display:-ms-flexbox;display:flex;-ms-flex-wrap:nowrap;flex-wrap:nowrap;list-style-type:none;margin:0;padding:12px 0}.c-navbar__items .c-carousel__item{padding-right:8px!important}.c-navbar__items .c-carousel__item:first-child{padding-left:8px}.c-navbar__item{-ms-flex-align:baseline;align-items:baseline;display:-ms-flexbox;display:flex;-ms-flex-wrap:nowrap;flex-wrap:nowrap;padding:8px 0;white-space:nowrap}.c-navbar__button,.c-navbar__link{background-color:#0000000d;border:none;border-radius:24px;box-shadow:none!important;color:#0a0827;font-family:DM Sans,sans-serif;font-size:14px;font-size:.7777778rem;font-weight:400!important;line-height:1.1428571;padding:6px 20px!important;text-decoration:none}.c-navbar__button:active,.c-navbar__button:focus,.c-navbar__button:hover,.c-navbar__link:active,.c-navbar__link:focus,.c-navbar__link:hover{box-shadow:inset 0 0 0 1px #0a082766}.c-navbar__button:focus,.c-navbar__link:focus{outline:none}.c-navbar__button--active,.c-navbar__link--active{background-color:#0a0827;color:#fff;font-weight:500}.c-navbar__button--active:active,.c-navbar__button--active:focus,.c-navbar__button--active:hover,.c-navbar__link--active:active,.c-navbar__link--active:focus,.c-navbar__link--active:hover{background-color:#0a0827cc}@media (min-width:48em){.c-navbar__button,.c-navbar__link{font-size:16px;font-size:.8888889rem;line-height:1.25}}.c-navbar__submenu{background:#fff;border:1px solid #dfdee8;border-radius:6px;margin-top:8px;padding:8px 0;position:absolute;transform-origin:top center;width:205px;z-index:99999}.c-navbar__submenu:before{background:#fff;border-left:1px solid #dfdee8;border-top:1px solid #dfdee8;content:"";display:block;height:14px;left:calc(50% - 7px);position:absolute;top:-8px;transform:rotate(45deg);width:14px}.c-navbar__submenu-link{border-bottom:1px solid #f4f4f7;cursor:pointer;display:block;padding:8px 40px 8px 16px}.c-navbar__submenu-item:last-child .c-navbar__submenu-link{border-bottom:none}.c-navbar__submenu-link:hover{background:#f4f4f7;text-decoration:underline}.c-filter-bar{background-color:#fff;box-shadow:inset 0 -1px 0 0 #dfdee8;position:relative}.c-filter-bar,.c-filter-bar__items{display:-ms-flexbox;display:flex;width:100%}.c-filter-bar__items{-ms-flex-align:center;align-items:center;-ms-flex-wrap:wrap;flex-wrap:wrap;list-style-type:none;margin-bottom:0;margin-left:auto;margin-right:auto;max-width:1218px;padding:8px 16px;white-space:nowrap}.c-filter-bar__item{-ms-flex:auto;flex:auto;margin-right:8px;text-align:left}.c-filter-bar__item--sort{min-width:145px}.c-filter-bar__item--sort .c-dropdown__target{min-width:200px}.c-filter-bar__item--export{-ms-flex:0 1 auto;flex:0 1 auto;margin-left:auto;margin-right:0}.c-filter-bar__item--days,.c-filter-bar__item--draw,.c-filter-bar__item--range{display:none}.c-filter-bar__input{width:100%}.c-filter-bar__export-btn{height:40px;margin-right:0;width:40px}.c-filter-bar__export-btn span{display:none}@media (min-width:48em){.c-filter-bar__items{padding-left:24px;padding-right:24px}.c-filter-bar__item{-ms-flex:none;flex:none}.c-filter-bar__item--filter{display:none}.c-filter-bar__item--export{margin-right:0}.c-filter-bar__item--days,.c-filter-bar__item--draw,.c-filter-bar__item--range{display:-ms-flexbox;display:flex}.c-filter-bar__input{width:auto}.c-filter-bar__item--sort .c-filter-bar__input{width:100%}.c-filter-bar__export-btn{background-position:center right 12px;background-repeat:no-repeat;height:auto;padding-right:36px;width:auto}.c-filter-bar__export-btn span{display:block}}.c-results-table{display:block;margin-bottom:24px;width:100%}.c-results-table__counter{color:#0a082799;display:block;font-size:14px;font-size:.7777778rem;font-weight:700;letter-spacing:1.25px;line-height:1.4285714;padding-bottom:6px;padding-top:6px;text-transform:uppercase}.c-results-table__items{display:block;margin:0;width:100%}.c-results-table__promo-item{display:block;margin-bottom:24px;width:100%}.c-results-table__promo-item td{display:block;padding:0}.c-results-table__item-header{background-color:#dfdee8;color:#0a082799;display:block;font-size:14px;font-size:.7777778rem;font-weight:700;left:0;letter-spacing:1.25px;line-height:1.4285714;margin-bottom:16px;margin-left:-8px;padding-bottom:6px;padding-top:6px;position:-webkit-sticky;position:sticky;text-transform:uppercase;top:48px;width:100vw;z-index:50}.c-results-table__item-header td,.c-results-table__item-header th{display:block;padding:0;text-align:center}@media (min-width:48em){.c-results-table__item-header{border-radius:0;margin-left:-50vw;margin-right:-50vw;top:56px;width:100vw}}@media (min-width:73.125em){.c-results-table__promo-item{margin-bottom:16px}}@media print{.c-results-table{margin-bottom:0}}.c-ball{-ms-flex-line-pack:center;-ms-flex-pack:center;align-content:center;border-radius:100%;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;font-size:21px;font-size:1.1666667rem;font-weight:700;height:44px;justify-content:center;line-height:1.1428571;position:relative;text-align:center;transition:transform .15s ease-in-out;width:44px}@media (min-width:23.4375em){.c-ball--lg{font-size:24px;font-size:1.3333333rem;height:48px;line-height:1.1666667;width:48px}}.c-ball--default,.c-ball--white{-ms-flex-pack:center;-ms-flex-align:center;align-items:center;background:#fcfcff;background-image:linear-gradient(180deg,#f4f4f7b3,#dfdee8b3);border:1px solid #aeadb5;border-radius:100%;color:#0a0827;display:-ms-flexbox;display:flex;font-size:21px;font-size:1.1666667rem;font-weight:700;height:44px;justify-content:center;line-height:1.1428571;text-align:center;width:44px}.c-ball--extra,.c-ball--red{background-color:#be1e2d;background-image:radial-gradient(circle at top,#ffffff26 30%,#fff0 75%);box-shadow:inset 0 0 0 1px #be1e2d;color:#fff}.c-ball--extra.c-ball--empty,.c-ball--red.c-ball--empty{border-color:#be1e2d}.c-ball--yellow{background-color:#ff9e00;background-image:radial-gradient(circle at top,#ffffff26 30%,#fff0 75%);box-shadow:inset 0 0 0 1px #ff9e00;color:#0a0827}.c-ball--yellow.c-ball--empty{border-color:#ff9e00}.c-ball--green{background-color:#68c554;background-image:radial-gradient(circle at top,#ffffff26 30%,#fff0 75%);box-shadow:inset 0 0 0 1px #68c554;color:#0a0827}.c-ball--green.c-ball--empty{border-color:#68c554}.c-ball--fire{background-color:#f20;background-image:radial-gradient(circle at top,#ffffff26 30%,#fff0 75%);box-shadow:inset 0 0 0 1px #f20;color:#fff}.c-ball--fire.c-ball--empty{border-color:#f20}.c-ball--purple{background-color:#93498f;background-image:radial-gradient(circle at top,#ffffff26 30%,#fff0 75%);box-shadow:inset 0 0 0 1px #93498f;color:#fff}.c-ball--purple.c-ball--empty{border-color:#93498f}.c-ball--blue{background-color:#326eb1;background-image:radial-gradient(circle at top,#ffffff26 30%,#fff0 75%);box-shadow:inset 0 0 0 1px #326eb1;color:#fff}.c-ball--blue.c-ball--empty{border-color:#326eb1}.c-ball--aqua{background-color:#0a6b7d;background-image:radial-gradient(circle at top,#ffffff26 30%,#fff0 75%);box-shadow:inset 0 0 0 1px #0a6b7d;color:#fff}.c-ball--aqua.c-ball--empty{border-color:#0a6b7d}.c-ball--pink{background-color:#cf517a;background-image:radial-gradient(circle at top,#ffffff26 30%,#fff0 75%);box-shadow:inset 0 0 0 1px #cf517a;color:#fff}.c-ball--pink.c-ball--empty{border-color:#cf517a}.c-ball--orange{background-color:#ff9e00;background-image:radial-gradient(circle at top,#ffffff26 30%,#fff0 75%);box-shadow:inset 0 0 0 1px #ff9e00;color:#0a0827}.c-ball--orange.c-ball--empty{border-color:#ff9e00}.c-ball--dark{background-color:#413e5b;background-image:radial-gradient(circle at top,#ffffff26 30%,#fff0 75%);box-shadow:inset 0 0 0 1px #413e5b;color:#fff}.c-ball--dark.c-ball--empty{border-color:#413e5b}.c-ball--empty{background-color:initial;background-image:none;border:1px dashed;box-shadow:none}.c-ball--square{border:1px solid #0a0827;border-radius:0;box-shadow:none}@media (min-width:48em){.c-ball{font-size:23px;font-size:1.2777778rem;height:46px;line-height:1.173913;width:46px}}.c-ball--sm,.c-ball--sm .c-ball__label{font-size:16px;font-size:.8888889rem;height:32px;line-height:1.5;width:32px}@media print{.c-ball{font-size:16px;font-size:.8888889rem;line-height:1.25}}.c-ball__outer{position:relative}.c-ball__container{display:-ms-inline-flexbox;display:inline-flex}.c-ball__container,.c-ball__label{-ms-flex-align:center;align-items:center;-ms-flex-direction:column;flex-direction:column}.c-ball__label{-ms-flex-pack:center;border-radius:100%;display:-ms-flexbox;display:flex;font-size:21px;font-size:1.1666667rem;font-weight:700;justify-content:center;line-height:1.1428571;text-align:center}.c-ball--xs,.c-ball--xs .c-ball__label{font-size:12px;font-size:.6666667rem;height:24px;line-height:1.6666667;width:24px}.c-ball__reload{bottom:-16px;height:12px;opacity:0;position:absolute;width:12px}.c-ball--fluid{font-size:16px;font-size:.8888889rem;height:32px;line-height:1.5;width:32px}@media (min-width:23.4375em){.c-ball--fluid{font-size:21px;font-size:1.1666667rem;height:44px;line-height:1.1428571;width:44px}}.c-card{background-color:#fff;border:1px solid #dfdee8;border-radius:8px;box-shadow:0 2px 8px 0 #2622620d;overflow:hidden;padding:24px;position:relative}.c-card>:last-child{margin-bottom:0}.c-content-card{background-color:#fff;border-radius:8px;box-shadow:inset 0 0 0 4px #dfdee8,6px 6px 0 0 #dfdee8;margin-bottom:6px;padding:16px;position:relative;width:calc(100% - 6px)}.c-content-card--lg{padding:24px}.c-content-card--between{-ms-flex-pack:justify;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;justify-content:space-between}.c-content-card>:last-child{margin-bottom:0}@media (min-width:48em){.c-content-card--lg{padding:24px}}.c-content-link-card{position:relative;width:100%}.c-content-link-card:after{background-color:#dfdee8;border-radius:12px;content:"";display:block;height:100%;left:6px;pointer-events:none;position:absolute;right:0;top:6px;z-index:-1}.c-content-link-card:hover .c-content-link-card__body{border:4px solid #dfdee8}.c-content-link-card__body{background-color:#fff;border:4px solid #dfdee899;border-radius:12px;margin:0 6px 0 0;padding:20px 48px 20px 20px}.c-content-link-card__body>:last-child{margin-bottom:0}.c-content-link-card__body:after{background-image:url(build/images/icons/16px/dark/arrow-right.adad23de.svg);background-position:50%;background-repeat:no-repeat;color:#0a0827;content:"";height:100%;overflow:hidden;position:absolute;right:24px;top:0;white-space:nowrap;width:32px}.c-content-link-card__link{display:block;font-size:21px;font-size:1.1666667rem;font-weight:900;line-height:1.2380952;margin-bottom:2px;text-decoration:none}.c-content-link-card__link:after{bottom:0;content:"";left:0;overflow:hidden;position:absolute;right:0;top:0;white-space:nowrap;z-index:1}.c-content-link-card__desc{color:#0a0827cc;font-size:16px;font-size:.8888889rem;line-height:1.5}.c-explore-card{background-color:#fff;border:1px solid #dfdee8;border-radius:8px;box-shadow:0 2px 8px 0 #2622620d;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;position:relative;transition:.3s}.c-explore-card,.c-explore-card--themed{background-image:linear-gradient(180deg,#fffc 0,#fff 120px)}@media (max-width:47.99em){.c-explore-card--outlined-sm{border:1px solid #0a0827}}.c-explore-card__header{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;padding:24px 24px 0}.c-explore-card__media{margin-right:24px;width:104px}.c-explore-card__body{-ms-flex-pack:justify;display:-ms-flexbox;display:flex;-ms-flex:1;flex:1;justify-content:space-between;padding:8px 24px 16px}.c-explore-card__body--has-media{padding:16px 24px}.c-explore-card__title{color:#0a0827;font-size:26px;font-size:1.4444444rem;line-height:1.2307692;margin-bottom:0}.c-explore-card--daily .c-explore-card__title{font-size:21px;font-size:1.1666667rem;line-height:1.1428571}.c-explore-card__sub{color:#0a082799;font-size:16px;font-size:.8888889rem;line-height:1.5;margin-bottom:0}.c-explore-card__footer{-ms-flex-align:center;align-items:center;border-top:1px solid #dfdee8;display:-ms-flexbox;display:flex;margin-top:auto;padding:24px;transition:.3s}.c-explore-card__cta{color:#3554a4;display:block;font-size:16px;font-size:.8888889rem;font-weight:700;line-height:1.5;margin-right:16px;text-decoration:none}.c-explore-card__cta:before{content:"";display:block;height:100%;left:0;position:absolute;top:0;width:100%}.c-explore-card__cta-icon{margin-left:auto}.c-explore-card--reverse .c-explore-card__body{-ms-flex-align:center;align-items:center;-ms-flex-direction:row-reverse;flex-direction:row-reverse}.c-explore-card--reverse .c-explore-card__media{margin-left:24px;margin-right:0}.c-explore-card--center .c-explore-card__header{-ms-flex-direction:column;flex-direction:column;text-align:center}.c-explore-card--center .c-explore-card__media{margin:0 auto 16px}.c-explore-card--center .c-explore-card__footer{-ms-flex-pack:center;justify-content:center;text-align:center}.c-explore-card--center .c-explore-card__cta-icon{margin-left:4px}.c-explore-card:hover{box-shadow:0 2px 8px 0 #2622621a}.c-explore-card:hover .c-explore-card__footer{background-color:#f4f4f7;border-bottom-left-radius:8px;border-bottom-right-radius:8px}.c-explore-card-list{background-color:#fff;background-image:linear-gradient(180deg,#fffc 0,#fff 120px);border:1px solid #dfdee8;border-radius:8px;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;position:relative}@media (max-width:47.99em){.c-explore-card-list--outlined-sm{border:1px solid #0a0827}}.c-explore-card-list__header{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding:24px 24px 16px}.c-explore-card-list__header-body{-ms-flex-pack:justify;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex:1;flex:1;justify-content:space-between}.c-explore-card-list__header-body--has-media{padding:16px 24px}.c-explore-card-list__title{color:#0a0827;font-size:26px;font-size:1.4444444rem;line-height:1.2307692;margin-bottom:8px}.c-explore-card-list--daily .c-explore-card-list__title{font-size:21px;font-size:1.1666667rem;line-height:1.1428571}.c-explore-card-list__sub{color:#0a082799;font-size:16px;font-size:.8888889rem;line-height:1.5;margin:0}.c-explore-card-list__media{margin-left:24px;margin-right:0;width:104px}.c-explore-card-list__list{list-style-type:none;margin:0}.c-explore-card-list__list-item:hover{background-color:#f4f4f7;box-shadow:0 -1px 0 #dfdee8,inset 0 -1px 0 #dfdee8;cursor:pointer;text-decoration:underline;text-decoration-thickness:1px;text-underline-offset:6px}.c-explore-card-list__list-item:first-of-type:hover{box-shadow:inset 0 -1px 0 #dfdee8}.c-explore-card-list__list-item--active .c-explore-card-list__list-item-link{font-weight:700;text-decoration:underline;text-decoration-thickness:1px;text-underline-offset:6px}.c-explore-card-list__list-item:last-of-type:hover{border-bottom-left-radius:8px;border-bottom-right-radius:8px;box-shadow:0 -1px 0 #dfdee8}.c-explore-card-list__list-item:last-of-type .c-explore-card-list__list-item-link{box-shadow:none}.c-explore-card-list__list-item-link{-ms-flex-align:center;align-items:center;box-shadow:inset 0 -1px 0 0 #dfdee8;font-weight:400;margin-left:24px;padding:20px 0;text-decoration:none}.c-explore-card-list__list-item-link,.c-explore-card-list__list-item-link--btn{color:#0a0827;display:-ms-flexbox;display:flex;font-size:16px;font-size:.8888889rem;line-height:1.5}.c-explore-card-list__list-item-link--btn{background-color:initial;border:none;cursor:pointer;font-family:DM Sans,sans-serif;font-weight:500;margin-left:0;width:100%}.c-explore-card-list__list-item-link--btn span{margin-left:24px}.c-explore-card-list__list-item-icon{display:-ms-flexbox;display:flex;margin-right:8px}.c-explore-card-list__cta-icon{margin-left:auto;margin-right:24px}.c-claim-center-card{background-color:#fff;border:4px solid #dfdee8;border-radius:12px;box-shadow:6px 6px 0 0 #dfdee8;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;overflow:hidden;width:272px}@media (min-width:23.4375em){.c-claim-center-card{width:312px}}@media (min-width:73.125em){.c-claim-center-card{width:352px}}.c-claim-center-card__media{background-color:#f4f4f7;border-top-left-radius:8px;border-top-right-radius:8px;pointer-events:none}.c-claim-center-card__img img{display:block;height:auto;width:100%}.c-claim-center-card__body{color:#0a082799;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;font-size:16px;font-size:.8888889rem;font-weight:400;line-height:1.5;padding:16px}.c-claim-center-card__body>:last-child{margin-bottom:0}.c-claim-center-card__addr{font-style:normal;margin-bottom:0}.c-claim-center-card__content-row{margin-bottom:12px}.c-claim-center-card__content-row>:last-child{margin-bottom:0}.c-claim-center-card__content-row--pin-bottom{margin-top:auto}.c-claim-center-card__title{color:#0a0827;font-size:18px;font-size:1rem;font-weight:700;line-height:1.2222222;margin-bottom:0}.c-claim-center-card__subtitle{color:#0a0827;font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5625;margin-bottom:0}.c-claim-center-card__link{-webkit-user-drag:none;-khtml-user-drag:none;-moz-user-drag:none;-o-user-drag:none;user-drag:none;color:#0a082799;display:block;font-weight:400;-webkit-user-select:none;-ms-user-select:none;user-select:none}.c-claim-center-card__link--tel{display:block;margin-bottom:4px}.c-claim-center-card__link--tel:last-of-type{margin-bottom:0}.c-countdown{list-style-type:none;margin:0;white-space:nowrap}.c-countdown__item{display:inline}.c-countdown--block{-ms-flex-line-pack:distribute;align-content:space-around;display:-ms-flexbox;display:flex;padding:0 0 12px;white-space:normal}.c-countdown--block .c-countdown__item{-ms-flex-pack:center;background-color:#fff;border-radius:4px;color:#0a0827;display:inline-block;-ms-flex:1;flex:1;height:48px;justify-content:center;margin-right:4px;overflow:hidden;padding:10px;position:relative;text-align:center}.c-countdown--block .c-countdown__item:last-of-type{margin-right:0}.c-countdown--block .c-countdown__item-text{display:block;left:0;position:absolute;width:100%}.c-countdown--block .c-countdown__time{font-size:18px;font-size:1rem;font-weight:700;line-height:1.3333333}.c-countdown--block .c-countdown__label{font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5}.c-countdown--block .c-countdown__separator{clip:rect(0 0 0 0)!important;border:0!important;-webkit-clip-path:inset(50%)!important;clip-path:inset(50%)!important;height:1px!important;margin:-1px!important;overflow:hidden!important;padding:0!important;position:absolute!important;white-space:nowrap!important;width:1px!important}.c-pill{border-radius:12px;color:#fff;display:inline-block;font-size:14px;font-size:.7777778rem;font-weight:700;letter-spacing:1px;line-height:1.2857143;padding:3px 12px;text-transform:uppercase}.c-pill--primary{background-color:#262262}.c-pill--secondary{background-color:#008874}.c-pill--tertiary{background-color:#be1e2d}.c-standard-card{background-color:#fff;border:1px solid #dfdee8;border-radius:8px;padding:16px;width:100%}.c-standard-card--adaptive{border-radius:0}@media (min-width:48em){.c-standard-card--adaptive{border-radius:8px}}.c-standard-card--flush{padding-left:0;padding-right:0}.c-standard-card--flush .c-standard-card__title{padding-left:16px;padding-right:16px}.c-standard-card--muted{background-color:#0a08270d}.c-standard-card__title{font-size:21px;font-size:1.1666667rem;font-weight:700;line-height:1.2380952;margin-bottom:8px}.c-number-list{counter-reset:item-counter;list-style:none;margin:0;padding:0}.c-number-list--stacked{margin-bottom:12px}.c-number-list__item{box-shadow:inset 0 -1px 0 0 #0a08270d;color:#0a0827cc;counter-increment:item-counter;display:-ms-flexbox;display:flex;font-size:16px;font-size:.8888889rem;line-height:1.5;padding:8px 0}.c-number-list__item:before{content:counter(item-counter) ".";display:inline-block;font-weight:500;min-width:24px}.c-number-list__item:last-of-type{box-shadow:none;padding-bottom:0}.c-link-block-group__title{background-color:#fff;border-top:1px solid #dfdee8;border-top-left-radius:8px;border-top-right-radius:8px;box-shadow:inset 0 -1px 0 0 #0a08270d;font-size:21px;font-size:1.1666667rem;line-height:1.2380952;margin-bottom:0;padding:16px 16px 12px}.c-link-block-group__items,.c-link-block-group__title{border-left:1px solid #dfdee8;border-right:1px solid #dfdee8}.c-link-block-group__items{border-bottom:1px solid #dfdee8;list-style-type:none;margin:0}.c-link-block-group__items,.c-link-block-group__items .c-link-block-group__item:last-child{border-bottom-left-radius:8px;border-bottom-right-radius:8px}.c-link-block,.c-link-block-group__item{background-color:#fff}.c-link-block{box-shadow:inset 0 -1px 0 0 #0a08270d;display:-ms-flexbox;display:flex;list-style-type:none;padding:16px 16px 14px;position:relative}.c-link-block--single{border:1px solid #dfdee8;border-radius:8px;box-shadow:0 2px 8px 0 #0a08270d}.c-link-block:after{-ms-flex-item-align:center;align-self:center;background-color:#fff;background-image:url(build/images/icons/16px/dark/arrow-right.adad23de.svg);background-position:50%;background-repeat:no-repeat;border:2px solid #dfdee8;border-radius:8px;box-shadow:0 2px 4px 0 #2622620d;color:#0a0827;content:"";height:32px;overflow:hidden;position:absolute;right:16px;top:auto;white-space:nowrap;width:32px}.c-link-block__media{margin:0 12px 0 0}.c-link-block__body{-ms-flex-item-align:start;align-self:flex-start;-ms-flex:1;flex:1;padding-right:48px}.c-link-block__link{color:#0a0827;display:block;font-size:18px;font-size:1rem;font-weight:700;line-height:1.2222222;text-decoration:none}.c-link-block__link:after{bottom:0;content:"";left:0;overflow:hidden;position:absolute;right:0;top:0;white-space:nowrap;z-index:1}.c-link-block__desc{color:#0a0827cc;display:block;font-size:14px;font-size:.7777778rem;line-height:1.4285714;margin:0}.c-accordion-group{position:relative}.c-accordion-group--flow{margin-bottom:48px}.c-accordion-group__controls{position:absolute;right:0;top:-48px}@media (min-width:48em){.c-accordion-group__controls{right:0}}.c-accordion-group__controls .c-btn{padding:8px 0;text-align:right;width:110px}.c-accordion-group__item{background-color:#fff;border-left:1px solid #dfdee8;border-right:1px solid #dfdee8;box-shadow:inset 0 -1px 0 0 #dfdee8;overflow:hidden;padding-bottom:8px}.c-accordion-group__item--first{border-top:1px solid #dfdee8;border-top-left-radius:8px;border-top-right-radius:8px}.c-accordion-group__item:last-of-type{border-bottom:1px solid #dfdee8;border-bottom-left-radius:8px;border-bottom-right-radius:8px;box-shadow:none}.c-accordion-group__title{font-size:18px;font-size:1rem;font-weight:700;line-height:1.2222222;margin-bottom:0}.c-accordion-group__control{-ms-flex-align:center;align-items:center;-webkit-appearance:none;appearance:none;background-color:initial;border:none;border-radius:0;cursor:pointer;display:-ms-flexbox;display:flex;font:inherit;padding:16px 16px 8px;text-align:left;width:100%}.c-accordion-group__control:active,.c-accordion-group__control:focus{outline:none}.c-accordion-group__icon{margin-right:8px;min-width:32px;pointer-events:none}.c-accordion-group__panel{color:#0a0827cc;font-size:18px;font-size:1rem;line-height:1.5555556;padding-left:56px;padding-right:24px}.c-accordion-group__panel-content{padding-bottom:8px}.c-accordion-group__panel-content>:last-child{margin-bottom:0}@media (min-width:48em){.c-accordion-group--flow{margin-bottom:56px}}.c-timeline__title{background-color:#fff;border-left:4px solid #dfdee8;border-right:4px solid #dfdee8;border-top:4px solid #dfdee8;border-top-left-radius:8px;border-top-right-radius:8px;box-shadow:6px 6px 0 0 #dfdee8;font-size:18px;font-size:1rem;font-weight:700;line-height:1.5555556;padding:16px 16px 4px;position:relative;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}.c-timeline__title:before{background-color:#fff;border-radius:12px;box-shadow:inset 0 0 0 4px #dfdee8;content:"";display:block;height:24px;position:absolute;top:-12px;transition:background-color .15s ease-in-out,box-shadow .15s ease-in-out;width:24px;z-index:1}.c-timeline__title:first-of-type:before{content:none}.c-timeline__title--active{border-left:4px solid #262262;border-right:4px solid #262262;border-top:4px solid #262262;box-shadow:6px 6px 0 0 #262262;color:#262262}.c-timeline__title--active:before{background-color:#262262;box-shadow:none}.c-timeline__content{background-color:#fff;border-left:4px solid #dfdee8;border-right:4px solid #dfdee8;box-shadow:6px 6px 0 0 #dfdee8;color:#413e5b;font-size:16px;font-size:.8888889rem;line-height:1.5;margin:0;padding:0 16px 16px;position:relative;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;z-index:1}.c-timeline__content--last{border-bottom:4px solid #dfdee8;border-bottom-left-radius:8px;border-bottom-right-radius:8px;margin:0 0 24px}.c-timeline__content--last:after{background-color:#dfdee8;bottom:-24px;content:"";display:block;height:14px;left:26px;position:absolute;width:4px;z-index:-1}.c-timeline__content--active{border-left:4px solid #262262;border-right:4px solid #262262;box-shadow:6px 6px 0 0 #262262}.c-timeline__content--active.c-timeline__content--last{border-bottom:4px solid #262262}.c-timeline__content:last-of-type{margin-bottom:0}.c-timeline__content:last-of-type:after{content:none}@media (min-width:73.125em){.c-timeline__title{font-size:21px;font-size:1.1666667rem;line-height:1.3333333}.c-timeline__content{font-size:18px;font-size:1rem;line-height:1.5555556}}.c-table{background-color:#fff;border-collapse:initial;margin-bottom:16px}.c-table--full{width:100%}.c-table--fit{white-space:nowrap}.c-table--fixed{table-layout:fixed}.c-table thead tr:first-of-type th:first-child{border-top-left-radius:8px}.c-table thead tr:first-of-type th:last-child{border-top-right-radius:8px}.c-table tr td{border-bottom:1px solid #dfdee8}.c-table tbody tr th:first-child,.c-table tr td:first-child{border-left:1px solid #dfdee8}.c-table tr td:last-child{border-right:1px solid #dfdee8}@media (max-width:47.99em){.c-table--fixed-col tbody td:first-child,.c-table--fixed-col thead th:first-child{box-shadow:4px 0 8px 0 #0a08271a;left:0;position:-webkit-sticky;position:sticky;z-index:1}.c-table--fixed-col thead th:first-child{background-color:#0a0827}.c-table--fixed-col tbody td:first-child{background-color:#fff}}.c-table--light thead th{background-color:#dfdee8;color:#0a0827}.c-table thead{background-color:#0a0827;color:#fff;font-size:16px;font-size:.8888889rem;font-weight:900;letter-spacing:1px;line-height:1.5;text-align:left;text-transform:uppercase}.c-table tfoot{background-color:#dfdee880}.c-table td,.c-table th{padding:16px}.c-table tbody tr td,.c-table tbody tr th,.c-table tfoot tr td{border-bottom:1px solid #dfdee8}.c-table tbody th,.c-table td{font-size:16px;font-size:.8888889rem;line-height:1.5}.c-table--zebra tbody tr:nth-child(2n),.c-table__group,.c-table__group td{background-color:#f4f4f740}.c-table .c-table__nested-row td:first-child{border-left:0}.c-table__caption{font-size:18px;font-size:1rem;font-weight:700;line-height:1.2222222;padding:12px 0 16px;text-align:left}.c-table :last-child>:last-child>td:first-child{border-bottom-left-radius:8px}.c-table :last-child>:last-child>td:last-child{border-bottom-right-radius:8px}.c-table--nested tbody .c-table__grouped,.c-table--nested tbody .c-table__grouped:first-child{border-left:0}.c-table--nested :last-child>:last-child>td:first-child{border-bottom-left-radius:0}.c-table--nested .c-table__faux-bl{border-bottom-left-radius:8px}.c-table__bg{background-color:#f4f4f780}tfoot>.c-table__bg{background-color:initial}.c-table__blr{border-bottom-left-radius:8px}.c-table__split-cell{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;width:100%}.c-table__split-cell :first-child{display:block;-ms-flex:1;flex:1}.c-table__split-cell :last-child{-ms-flex:3;flex:3}.c-table tr .c-table__no-bl:first-child,tr .c-table__no-bl .c-table__no-bl:first-child{border-left:none}@media (min-width:48em){.c-table{background-color:initial;border-collapse:initial}.c-table tbody{background-color:#fff}.c-table thead th{background-color:#0a0827;color:#fff}.c-table tbody th,.c-table td,.c-table th{font-size:16px;font-size:.8888889rem;line-height:1.375}.c-table td,.c-table th{padding:20px}.c-table tbody tr th{text-align:left}.c-table--fit{white-space:normal}.c-table--has-caption thead th{border-top:0}.c-table--zebra tbody tr:nth-child(2n) td{background-color:#f4f4f740}.c-table__caption{border-top-left-radius:8px;border-top-right-radius:8px;padding-left:0}}@media (min-width:73.125em){.c-table--light thead th{background-color:#dfdee8;color:#0a0827}.c-table__split-cell{-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;width:100%}.c-table__split-cell :first-child{-ms-flex:0 1 auto;flex:0 1 auto;min-width:82px}.c-table__split-cell :last-child{-ms-flex:100%;flex:100%}.c-table--fixed-col thead th:first-child{width:20%}}@media print{.c-table thead tr th{border-bottom:1px solid #dfdee8;border-top:1px solid #dfdee8}.c-table thead tr th:first-child{border-left:1px solid #dfdee8}.c-table thead tr th:last-child{border-right:1px solid #dfdee8}}.c-notice{display:block;margin-bottom:40px;padding:16px 0 24px}.c-notice--covid{background-color:#f9e9ea}.c-notice__title{font-size:21px;font-size:1.1666667rem;font-weight:700;line-height:1.5238095}.c-notice__subtitle{color:#0a0827;font-size:18px;font-size:1rem;font-weight:700;line-height:1.2222222;margin-bottom:4px}.c-notice__col{color:#0a082799;font-size:16px;font-size:.8888889rem;line-height:1.5}.c-notice__col:last-child>:last-child{margin-bottom:0}@media (min-width:73.125em){.c-notice{margin-bottom:56px;padding-bottom:56px;padding-top:56px}.c-notice__col>:last-child{margin-bottom:0}.c-notice__title{font-size:24px;font-size:1.3333333rem;line-height:1.1666667}.c-notice__subtitle{margin-bottom:8px}}.c-scene{color:#fff;padding-bottom:40px;padding-top:40px;position:relative}.c-scene:before{background-color:#00000080;z-index:-1}.c-scene:after,.c-scene:before{content:"";display:block;height:100%;left:0;position:absolute;top:0;width:100%}.c-scene:after{background-position:50% 70%;background-size:cover;z-index:-2}.c-scene__title{font-size:21px;font-size:1.1666667rem;line-height:1.5238095}.c-scene__sub-title{margin-bottom:0}.c-scene__content,.c-scene__sub-title{font-size:18px;font-size:1rem;line-height:1.5555556}.c-scene__content p:first-of-type{font-weight:500}.c-scene__content p:last-of-type{margin-bottom:0}.c-scene--az:after{background-image:url(build/images/state-images/az.d58ab460.jpg)}.c-scene--ar:after{background-image:url(build/images/state-images/ar.7271609b.jpg)}.c-scene--ca:after{background-image:url(build/images/state-images/ca.c0f6674a.jpg)}.c-scene--co:after{background-image:url(build/images/state-images/co.9ced9947.jpg)}.c-scene--ct:after{background-image:url(build/images/state-images/ct.792e99f8.jpg)}.c-scene--de:after{background-image:url(build/images/state-images/de.ad7fef5c.jpg)}.c-scene--dc:after{background-image:url(build/images/state-images/dc.8df1cbd4.jpg)}.c-scene--fl:after{background-image:url(build/images/state-images/fl.a391aced.jpg)}.c-scene--ga:after{background-image:url(build/images/state-images/ga.f341e3c0.jpg)}.c-scene--id:after{background-image:url(build/images/state-images/id.1cf3d9bc.jpg)}.c-scene--il:after{background-image:url(build/images/state-images/il.2f207a4b.jpg)}.c-scene--in:after{background-image:url(build/images/state-images/in.27a5af62.jpg)}.c-scene--ia:after{background-image:url(build/images/state-images/ia.f5b31e3a.jpg)}.c-scene--ks:after{background-image:url(build/images/state-images/ks.1f68628d.jpg)}.c-scene--ky:after{background-image:url(build/images/state-images/ky.356e8613.jpg)}.c-scene--la:after{background-image:url(build/images/state-images/la.98a2b0dc.jpg)}.c-scene--me:after{background-image:url(build/images/state-images/me.2093aad2.jpg)}.c-scene--md:after{background-image:url(build/images/state-images/md.9befc8e2.jpg)}.c-scene--ma:after{background-image:url(build/images/state-images/ma.43ddf187.jpg)}.c-scene--mi:after{background-image:url(build/images/state-images/mi.3adb0e29.jpg)}.c-scene--mn:after{background-image:url(build/images/state-images/mn.84f2c604.jpg)}.c-scene--mo:after{background-image:url(build/images/state-images/mo.8ac10c9b.jpg)}.c-scene--ms:after{background-image:url(build/images/state-images/ms.d31a4f21.jpg)}.c-scene--mt:after{background-image:url(build/images/state-images/mt.e7ff0887.jpg)}.c-scene--ne:after{background-image:url(build/images/state-images/ne.454760f2.jpg)}.c-scene--nh:after{background-image:url(build/images/state-images/nh.6cb764f5.jpg)}.c-scene--nj:after{background-image:url(build/images/state-images/nj.9a2ccd2f.jpg)}.c-scene--nm:after{background-image:url(build/images/state-images/nm.3f9b3fd7.jpg)}.c-scene--ny:after{background-image:url(build/images/state-images/ny.b1944fd1.jpg)}.c-scene--nc:after{background-image:url(build/images/state-images/nc.02ff9e14.jpg)}.c-scene--nd:after{background-image:url(build/images/state-images/nd.af9f2a77.jpg)}.c-scene--oh:after{background-image:url(build/images/state-images/oh.d278509a.jpg)}.c-scene--ok:after{background-image:url(build/images/state-images/ok.59bbcadd.jpg)}.c-scene--or:after{background-image:url(build/images/state-images/or.967e1f3a.jpg)}.c-scene--pa:after{background-image:url(build/images/state-images/pa.600d7a2d.jpg)}.c-scene--pr:after{background-image:url(build/images/state-images/pr.29d35f7c.jpg)}.c-scene--ri:after{background-image:url(build/images/state-images/ri.022a3667.jpg)}.c-scene--sc:after{background-image:url(build/images/state-images/sc.c34dea79.jpg)}.c-scene--sd:after{background-image:url(build/images/state-images/sd.d79cf026.jpg)}.c-scene--tn:after{background-image:url(build/images/state-images/tn.845e8ab5.jpg)}.c-scene--tx:after{background-image:url(build/images/state-images/tx.0c47b7be.jpg)}.c-scene--vt:after{background-image:url(build/images/state-images/vt.26a9c9c5.jpg)}.c-scene--va:after{background-image:url(build/images/state-images/va.930c90e5.jpg)}.c-scene--wa:after{background-image:url(build/images/state-images/wa.40121274.jpg)}.c-scene--wv:after{background-image:url(build/images/state-images/wv.592d7eb4.jpg)}.c-scene--wi:after{background-image:url(build/images/state-images/wi.c02dd178.jpg)}.c-scene--wy:after{background-image:url(build/images/state-images/wy.0c483a2c.jpg)}@media (min-width:48em){.c-scene__title{font-size:24px;font-size:1.3333333rem;line-height:1.1666667}}.c-message{-ms-flex-align:start;align-items:flex-start;border-radius:8px;box-shadow:0 4px 8px 0 #0a08270d;padding:16px;text-align:left}.c-message,.c-message--floating{display:-ms-flexbox;display:flex}.c-message--floating{-ms-flex-align:center;align-items:center;padding:12px 16px}.c-message--floating .c-message__content{display:inline-block}.c-message--default{background-color:#e7e6e9;color:#0a0827cc}.c-message--warning{background-color:#ffeccc;color:#995f00}.c-message--error{background-color:#f2d2d5;color:#661018}.c-message--info{background-color:#d6e2ef;color:#1c3d61}.c-message--success{background-color:#cce7e3;color:#005549}.c-message__body{display:-ms-flexbox;display:flex;-ms-flex:1;flex:1;-ms-flex-direction:column;flex-direction:column}.c-message__body>:last-child{margin-bottom:0}.c-message__icon{display:inline-block;margin-right:12px;vertical-align:middle}.c-message__title{display:block;font-size:18px;font-size:1rem;font-weight:700;line-height:1.2222222;margin-bottom:4px}.c-message__content{display:block;font-size:16px;font-size:.8888889rem;font-weight:400;line-height:1.5}.c-message>:last-child{margin-bottom:0}.c-board--default{background-color:#fff;padding-bottom:56px;padding-top:40px}.c-board--covid{background-color:#f9e9ea}@media (min-width:48em){.c-board{padding-top:56px}}.c-list-block{list-style-type:none;margin:0;padding:0}.c-list-block__item{border-top:1px solid #dfdee8;padding:12px 0}.c-list-block__item:first-child{border-top:0;padding-top:0}.c-list-block__item>:last-child{margin-bottom:0}.c-list-block__item:last-of-type{border-bottom:none}.c-list-block__item-title{font-weight:500;margin-bottom:0}.c-list-block__item-desc,.c-list-block__item-title{font-size:16px;font-size:.8888889rem;line-height:1.5}.c-list-block__item-desc{color:#0a082799}@media (min-width:73.125em){.c-table .c-list-block{display:-ms-flexbox;display:flex}.c-table .c-list-block .c-list-block__item{border-top:0;-ms-flex:1;flex:1;padding:0}.c-table--2 .c-list-block .c-list-block__item{display:-ms-flexbox;display:flex;padding-bottom:0}.c-table--2 .c-list-block .c-list-block__item-title{margin-right:16px;min-width:72px}}.c-well{background-color:#f4f4f7;border:4px solid #dfdee8;border-radius:12px;box-shadow:0 -4px 0 0 #dfdee8,0 8px 0 0 #dfdee8}.c-well--adaptive{border:0;border-radius:0}.c-well .c-radio-group,.c-well__header{-ms-flex-align:center;align-items:center;border-bottom:1px solid #dfdee8;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5;padding:16px 16px 8px;text-align:left}.c-well__control{margin-bottom:8px;margin-right:8px}.c-well__control:last-of-type{margin-right:0}.c-well__body{padding:16px 16px 8px}.c-well__body--hidden{display:none}@media (min-width:48em){.c-well{border-radius:12px}.c-well__header{padding:24px 24px 16px}.c-well__body{padding:24px 24px 8px}}@media (min-width:73.125em){.c-well{box-shadow:inset 0 0 0 4px #dfdee8,6px 6px 0 0 #dfdee8}}.c-meta-list{margin:0;padding:0}.c-meta-list--center{text-align:center}.c-meta-list__title{color:#626078;font-size:14px;font-size:.7777778rem;font-weight:500;letter-spacing:.58px;line-height:1.4285714;text-transform:uppercase}.c-meta-list__value{color:#0a0827cc;font-size:16px;font-size:.8888889rem;line-height:1.5;margin:0}.c-meta-list__value--lg{font-size:24px;font-size:1.3333333rem;font-weight:700;line-height:1.25}.c-prediction{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;margin-bottom:16px}.c-prediction__header{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;margin-bottom:12px;padding:0;width:100%}.c-prediction__title{font-size:21px;font-size:1.1666667rem;line-height:1.5238095;margin-bottom:0}.c-prediction__icon{margin-left:auto}.c-prediction__body{-ms-flex-order:2;color:#0a0827cc;order:2;padding:0}.c-prediction__body>:last-child{margin-bottom:0}.c-prediction__card{-ms-flex-order:1;margin-bottom:16px;order:1}@media (min-width:48em){.c-prediction{display:block;margin-bottom:60px;overflow:hidden;padding-right:6px}.c-prediction__header{-ms-flex-pack:end;-ms-flex-direction:row-reverse;flex-direction:row-reverse;justify-content:flex-end;padding:0}.c-prediction__title{font-size:24px;font-size:1.3333333rem;line-height:1.1666667}.c-prediction__icon{margin-left:0;margin-right:8px}.c-prediction__body,.c-prediction__header{float:left;width:67.75%}.c-prediction__body{padding:0 24px 0 0}.c-prediction__card{float:right;width:32.25%}}.c-prediction-card{-ms-flex-align:center;align-items:center;background-color:#fff;border-radius:8px;box-shadow:inset 0 0 0 4px #dfdee8,6px 6px 0 0 #dfdee8;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;overflow:hidden;padding:16px 12px;position:relative;text-align:center;width:100%}.c-prediction-card>:last-child{margin-bottom:0}.c-prediction-card__balls{margin-bottom:8px}.c-prediction-card__title{font-size:18px;font-size:1rem;line-height:1.3333333;margin-bottom:0}.c-prediction-card__meta{color:#0a0827cc;font-size:16px;font-size:.8888889rem;line-height:1.5}@media (min-width:73.125em){.c-prediction-card{padding-bottom:40px;padding-top:40px}}.c-quick-pick-card{background-color:#fff;background-image:linear-gradient(180deg,#ffffff80 0,#fff 80px);border:1px solid #dfdee8;border-radius:8px;box-shadow:0 2px 8px 0 #2622620d;overflow:hidden;padding:0 16px 20px;position:relative}.c-quick-pick-card>:last-child{margin-bottom:0}.c-quick-pick-card__header{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;padding:16px 0 8px;width:100%}.c-quick-pick-card__title{display:block;font-size:21px;font-size:1.1666667rem;font-weight:700;line-height:1.2380952;margin-bottom:0}.c-quick-pick-card__sub-title{display:block;font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.4285714}.c-quick-pick-card__logo{height:48px;margin-right:12px;width:48px}.c-quick-pick-card__inputs{display:-ms-flexbox;display:flex;margin-bottom:16px;width:100%}.c-quick-pick-card__input{-ms-flex:1;flex:1;margin-right:4px}.c-quick-pick-card__input:last-of-type{margin-right:0!important}.c-quick-pick-card__instruction{display:block;font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5;margin-bottom:8px}.c-quick-pick-card__lines{margin-left:0}.c-quick-pick-card__line{-ms-flex-align:center;-ms-flex-pack:justify;align-items:center;border-bottom:1px solid #dfdee8;display:-ms-flexbox;display:flex;justify-content:space-between;margin-bottom:0;padding:12px 0}.c-quick-pick-card__line:last-child{border-bottom:none}.c-quick-pick-card__line-label{font-size:16px;font-size:.8888889rem;line-height:24px}.c-state-badge{-ms-flex-align:center;-ms-flex-pack:center;align-items:center;background-color:#262262;border-radius:100%;color:#fff;font-size:14px;font-size:.7777778rem;font-weight:700;height:40px;justify-content:center;line-height:1.1428571;width:40px}.c-result,.c-state-badge{display:-ms-flexbox;display:flex}.c-result{-ms-flex-wrap:wrap;flex-wrap:wrap;list-style-type:none;margin:0 -4px 0 0;max-width:352px;padding:0;position:relative}.c-result--lg .c-result__abbr,.c-result--lg .c-result__multiplier{font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5}.c-result--sm .c-result__item{font-size:16px;font-size:.8888889rem;height:32px;line-height:1.5;width:32px}.c-result--full{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.c-result--long{margin-bottom:-8px}.c-result--long .c-result__item{margin-bottom:8px}.c-result--long .c-result__item.c-ball--sm,.c-result--long .c-result__item.c-playing-card--sm{margin-bottom:4px}.c-result--long .c-result__multiplier{bottom:8px}.c-result__item{margin-right:4px}.c-result__bonus-ball{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;text-align:center}.c-result__abbr{color:#413e5b;display:block;font-size:15px;font-size:.8333333rem;line-height:1.3333333;margin-top:4px}.c-result__abbr[title]{text-decoration:none}.c-result__abbr--sm{font-size:14px;font-size:.7777778rem;line-height:1}.c-result__multiplier{bottom:0;color:#413e5b;display:block;font-size:15px;font-size:.8333333rem;left:0;line-height:1.3333333;position:absolute}.c-result__multiplier--sm{font-size:14px;font-size:.7777778rem;line-height:1}.c-result__string{color:#0a0827}.c-result--has-extra-custom{padding-bottom:32px}.c-result__extra-custom{bottom:6px;color:#0a0827;display:block;font-size:16px;font-size:.8888889rem;font-weight:500;left:0;line-height:1.25;position:absolute}.c-result__extra-irrelevant{color:#0a082780;font-size:14px;font-size:.7777778rem;line-height:1.4285714}@media (min-width:48em){.c-result{max-width:400px}}.c-playing-card{-ms-flex-pack:center;background-color:#fff;background:#fcfcff;background-image:linear-gradient(180deg,#f4f4f7b3,#dfdee8b3);border-radius:8px;box-shadow:inset 0 0 0 1px #aeadb5;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;font-weight:700;height:48px;justify-content:center;text-align:center;width:40px}.c-playing-card--sm{height:40px;width:32px}.c-playing-card__suit,.c-playing-card__value{display:block;margin:0}.c-playing-card__value{font-size:18px;font-size:1rem;line-height:1}.c-playing-card--sm .c-playing-card__value{font-size:16px;font-size:.8888889rem;line-height:1}.c-playing-card__suit{font-size:22px;font-size:1.2222222rem;line-height:.8181818}.c-playing-card--sm .c-playing-card__suit{font-size:22px;font-size:1.2222222rem;line-height:.7272727}.c-playing-card--red{color:#be1e2d}.c-playing-card--black{color:#0a0827}.c-result-card{background-color:#fff;border-radius:12px;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;margin-bottom:32px}.c-result-card~.c-result-card{margin-top:52px}.c-result-card--squeeze~.c-result-card--squeeze{margin-top:0}.c-result-card--squeeze{background-color:#fff;border:1px solid #0a0827;border-radius:12px;margin-bottom:24px}.c-result-card--squeeze .c-result-card__header,.c-result-card--squeeze .c-result-card__result-list,.c-result-card--squeeze .c-result-card__result-row{-ms-flex-align:start;align-items:flex-start;border:none;margin-left:0;margin-right:0;text-align:left}.c-result-card--squeeze .c-result-card__title{color:#0a0827;font-weight:700}.c-result-card--squeeze .c-result-card__header{background-image:none}.c-result-card--squeeze .c-result-card__result,.c-result-card--squeeze .c-result-card__result-row{border:none}.c-result-card--squeeze .c-result-card__result-row+.c-result-card__result-row{border-top:1px solid #c4c3cc}.c-result-card--squeeze .c-result-card__prize{background-color:#fff;border:none;border-top:1px solid #c4c3cc;display:-ms-flexbox;display:flex;margin:0 16px}.c-result-card--squeeze .c-result-card__prize-btn{-ms-flex-item-align:center;-ms-flex-align:center;align-items:center;align-self:center;background-color:#fff;background-image:url(build/images/icons/24px/dark/arrow-right.7e7acc47.svg);background-position:top 50% right 2px;background-repeat:no-repeat;border:1px solid #0a0827;border-radius:8px;box-shadow:none;color:#0a0827;display:-ms-flexbox;display:flex;font-size:16px;font-size:.8888889rem;font-weight:700;height:32px;letter-spacing:0;line-height:1.25;margin-left:auto;margin-right:0;text-decoration:none;text-transform:none;vertical-align:middle;width:32px}.c-result-card--squeeze .c-result-card__prize-details{border-bottom:none;display:-ms-inline-flexbox;display:inline-flex;padding-left:0;padding-right:0;width:auto}.c-result-card--squeeze .c-result-card__header{padding:16px 16px 0}.c-result-card--squeeze .c-result-card__result{background-color:initial;padding:0 16px}.c-result-card--squeeze .c-result-card__result-list{-ms-flex-pack:start;justify-content:flex-start}.c-result-card--squeeze>:last-child{border-bottom-left-radius:12px;border-bottom-right-radius:12px}.c-result-card--themed .c-result-card__header{background-color:currentColor;background-image:linear-gradient(180deg,#ffffffe6 0,#fff 80px)}.c-result-card--squeeze.c-result-card--themed .c-result-card__header{background-color:currentColor;background-image:linear-gradient(180deg,#ffffffe6 0,#fff 36px)}.c-result-card--minimal{display:block}.c-result-card--minimal .c-result-card__prize,.c-result-card--minimal .c-result-card__result{display:table-cell}.c-result-card--minimal .c-result-card__result{width:100%}.c-result-card--minimal .c-result-card__prize{background-color:initial;border-bottom-right-radius:12px;border-top:none;padding-right:16px}.c-result-card--full .c-result-card__prize-tables{color:#0a0827}.c-result-card--full .c-result-card__prize-tables-heading{background-image:linear-gradient(180deg,#dfdee8b3 0,#fff 36px);border-top:1px solid #dfdee8;color:#0a0827;font-size:18px;font-size:1rem;line-height:1.3333333;margin-bottom:0;padding:16px 16px 0}.c-result-card--full .u-responsive-table{margin-bottom:0}.c-result-card--full .c-selector-table__control{margin:0;white-space:nowrap}.c-result-card--full .c-selector-table__controls{background-color:#fff;border-bottom:1px solid #dfdee8;border-top-left-radius:0;border-top-right-radius:0;padding-left:0;padding-right:0}.c-result-card--full .c-selector-table__controls .c-carousel__item:first-child{padding-left:16px}.c-result-card--full .c-selector-table__controls .c-radio-field--button{-ms-flex-pack:center;-ms-flex-align:center;align-items:center;background-color:#fff;border:none;border-radius:8px;box-shadow:inset 0 0 0 2px #dfdee8;color:#0a0827;display:-ms-inline-flexbox;display:inline-flex;font-family:inherit;font-size:16px;font-size:.8888889rem;font-weight:500;justify-content:center;letter-spacing:0;line-height:24px;min-width:40px;padding:8px 12px;text-decoration:none;text-transform:none;transition:background-color .3s ease-in-out,color .3s ease-in-out}.c-result-card--full .c-selector-table__controls .c-radio-field--button.is-checked{background-color:#262262;box-shadow:0 2px 4px 0 #2622620d;color:#fff}.c-result-card--full .c-result-card__prize-table{color:#0a0827;margin-bottom:8px}.c-result-card--full .c-result-card__prize-table :last-child>:last-child>td{border-bottom:0}.c-result-card__header{-ms-flex-align:center;align-items:center;border-left:2px solid #0a0827;border-right:2px solid #0a0827;border-top:2px solid #0a0827;border-top-left-radius:12px;border-top-right-radius:12px;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;text-align:center}.c-result-card__media{background-color:#fff;border:1px solid #0a0827;border-radius:100%;display:block;margin:-34px auto 8px;padding:4px;text-align:center}.c-result-card__game-details .c-result-card__title{color:#0a0827;display:block;font-size:24px;font-size:1.3333333rem;font-weight:700;line-height:1.1666667;margin-bottom:4px}
                .c-coupon-card__perforation{position:relative}@media (max-width:47.99em){.c-coupon-card--coupon .c-coupon-card__perforation{height:24px;margin-bottom:8px;margin-left:-20px;margin-right:-20px;padding:12px 0;width:calc(100% + 40px)}}.c-coupon-card--coupon .c-coupon-card__perforation:after,.c-coupon-card--coupon .c-coupon-card__perforation:before{background:#f4f4f7;border:4px solid #0000;border-radius:100%;content:"";height:24px;position:absolute;width:24px}@media (max-width:47.99em){.c-coupon-card--coupon .c-coupon-card__perforation:after,.c-coupon-card--coupon .c-coupon-card__perforation:before{top:0}}.c-coupon-card--coupon .c-coupon-card__perforation:before{border-bottom-color:#ffd51e;border-right-color:#ffd51e}@media (max-width:47.99em){.c-coupon-card--coupon .c-coupon-card__perforation:before{left:-16px;transform:rotate(-45deg)}}.c-coupon-card--coupon .c-coupon-card__perforation:after{border-bottom-color:#1f1f1f;border-left-color:#1f1f1f}@media (max-width:47.99em){.c-coupon-card--coupon .c-coupon-card__perforation:after{right:-16px;transform:rotate(45deg)}}.c-coupon-card--coupon .c-coupon-card__perforation span{display:block}@media (max-width:47.99em){.c-coupon-card--coupon .c-coupon-card__perforation span{border-bottom:4px dashed #413e5b;margin-top:-2px}.c-coupon-card--light .c-coupon-card--coupon .c-coupon-card__perforation span{border-color:#dfdee8}}.c-coupon-card--coupon .c-coupon-card__code{background:#ffffff1a;border-radius:8px;box-shadow:inset 0 0 0 2px #413e5b;color:inherit;display:block;font-family:Roboto Mono,Courier New,Courier,monospace;font-size:24px;font-size:1.3333333rem;font-weight:700;line-height:1.1666667;margin-bottom:8px;padding:14px 12px;text-align:center}.c-coupon-card--light .c-coupon-card--coupon .c-coupon-card__code{background:#f4f4f7;box-shadow:inset 0 0 0 2px #dfdee8}.c-coupon-card--light .c-coupon-card--coupon .c-coupon-card__actions .c-btn{background-color:#262262;color:#fff}@media (min-width:48em){.c-coupon-card--coupon{display:-ms-flexbox;display:flex}.c-coupon-card--coupon:before{background:linear-gradient(0deg,#ffd51e,#007dc2,#1f1f1f);margin-left:-12px;margin-top:-4px}.c-coupon-card--coupon .c-coupon-card__details{-ms-flex:1;flex:1;padding-left:56px;position:relative}.c-coupon-card--coupon .c-coupon-card__image{left:0;position:absolute;top:calc(50% + 50px);transform:rotate(-90deg);transform-origin:top left}.c-coupon-card--coupon .c-coupon-card__heading{font-size:28px;font-size:1.5555556rem;font-weight:700;line-height:1.2142857}.c-coupon-card--coupon .c-coupon-card__body{color:#0a0827cc;color:inherit;font-size:18px;font-size:1rem;font-weight:400;line-height:1.5555556;opacity:.8}.c-coupon-card--coupon .c-coupon-card__info{margin-bottom:0}.c-coupon-card--coupon .c-coupon-card__info-item{display:block}.c-coupon-card--coupon .c-coupon-card__info-item strong{display:inline}.c-coupon-card--coupon .c-coupon-card__perforation{margin:-20px 16px;padding:0 12px;width:24px}.c-coupon-card--coupon .c-coupon-card__perforation:after,.c-coupon-card--coupon .c-coupon-card__perforation:before{left:0}.c-coupon-card--coupon .c-coupon-card__perforation:before{bottom:-20px;transform:rotate(225deg)}.c-coupon-card--coupon .c-coupon-card__perforation:after{top:-20px;transform:rotate(-45deg)}.c-coupon-card--coupon .c-coupon-card__perforation span{border-right:4px dashed #413e5b;height:100%;margin-left:-2px}.c-coupon-card--light .c-coupon-card--coupon .c-coupon-card__perforation span{border-color:#dfdee8}.c-coupon-card--coupon .c-coupon-card__actions{-ms-flex-pack:center;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;justify-content:center;min-width:220px}}.c-coupon-card--bright{background:linear-gradient(30deg,#0700b8 50%,#0f8);color:#fff}.c-coupon-card--bright .c-coupon-card__image{height:75px;margin-bottom:16px}.c-coupon-card--bright .c-coupon-card__heading{font-size:30px;font-size:1.6666667rem;font-weight:700;line-height:.8;margin-bottom:8px}.c-coupon-card--bright .c-coupon-card__body{font-size:16px;font-size:.8888889rem;font-weight:400;line-height:1.5;margin-bottom:16px}.c-coupon-card--bright .c-coupon-card__code{background:#ffffff1a;background:#f4f4f726;border-radius:8px;box-shadow:inset 0 0 0 2px #413e5b;box-shadow:inset 0 0 0 2px #dfdee840;color:inherit;display:block;font-family:Roboto Mono,Courier New,Courier,monospace;font-size:24px;font-size:1.3333333rem;font-weight:700;line-height:1.1666667;margin-bottom:8px;padding:10px 12px;text-align:center}.c-how-to-claim-card{text-align:center}.c-how-to-claim-card__image{margin:-12px -12px 16px}.c-how-to-claim-card__image img{border-bottom:1px solid #dfdee8;border-top-left-radius:5px;border-top-right-radius:5px;width:100%}.c-how-to-claim-card__title{margin-bottom:4px}.c-how-to-claim-card__desc{margin-bottom:0}.c-notifications{bottom:100%;left:calc(100% - 280px);position:relative;width:280px}@media (min-width:48em){.c-notifications{left:calc(100% - 350px);width:350px}}.c-notifications .c-message{margin:0 32px 16px}.c-notifications .c-message:last-child{margin-bottom:32px}.c-bottom-bar{-ms-flex-align:center;-ms-flex-pack:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-direction:column-reverse;flex-direction:column-reverse;justify-content:center;position:relative;transform:translateY(150%);width:100%}.c-bottom-bar:after{background-color:#262262;content:"";height:50px;left:0;position:absolute;top:100%;width:100%}.c-bottom-bar__body{-ms-flex-align:center;-ms-flex-pack:center;align-items:center;background:#fff;box-shadow:0 0 20px #2622621a;display:-ms-flexbox;display:flex;justify-content:center;padding:8px 0;width:100%}.c-bottom-bar__close-btn{-ms-flex-item-align:end;align-self:flex-end;background-color:#fff;background-image:url(build/images/icons/16px/dark/close.dd4cce19.svg);background-position:50%;background-repeat:no-repeat;border:0;border-top-left-radius:4px;cursor:pointer;height:24px;padding:0;width:24px}.c-global-overlay-footer{bottom:0;left:0;pointer-events:none;position:fixed;text-align:right;width:100%;z-index:140}.c-global-overlay-footer__item{pointer-events:all;text-align:left}.c-ad-wrapper,.c-ad-wrapper__ad-unit{-ms-flex-align:center;-ms-flex-pack:center;align-items:center;display:-ms-flexbox;display:flex;justify-content:center;padding:0;text-align:center;width:100%}.c-ad-wrapper__ad-unit{min-height:250px;min-width:300px}.c-ad-wrapper__ad-unit--footer{height:50px;min-height:auto;min-width:320px}.c-ad-wrapper td{padding:0}@media (min-width:23.4375em){.c-ad-wrapper__ad-unit{min-height:280px;min-width:336px}.c-ad-wrapper__ad-unit--footer{height:50px;min-height:auto;min-width:300px}}.c-ad-wrapper--in-content{display:block;margin-bottom:40px}.c-ad-wrapper--in-aside{display:block;margin-bottom:16px}@media (min-width:48em){.c-ad-wrapper--in-aside{margin-bottom:24px}.c-ad-wrapper__double{display:-ms-flexbox;display:flex}.c-ad-wrapper__double>*{margin:0 16px}.c-ad-wrapper__ad-unit--footer{height:90px}}@media print{.c-ad-wrapper{display:none}}.c-state-search-dropdown{position:relative}.c-state-search-dropdown__input{color:#0a0827}.c-state-search-dropdown__input--active{border-bottom-left-radius:0;border-bottom-right-radius:0}.c-state-search-dropdown__list{background-color:#fff;border-bottom-left-radius:8px;border-bottom-right-radius:8px;border-top:1px solid #f4f4f7;box-shadow:0 24px 24px 0 #0a082733;display:block;list-style-type:none;margin:0;max-height:50vh;overflow-x:auto;padding:0;position:absolute;text-align:left;width:100%;z-index:99999}.c-state-search-dropdown__list-item{-ms-flex-align:center;align-items:center;box-shadow:inset 0 -1px 0 0 #f4f4f7;display:-ms-flexbox;display:flex;position:relative}.c-state-search-dropdown .c-state-link{margin-bottom:0;padding:13px 16px}.c-state-search-dropdown .c-state-link--abbr{font-size:18px;font-size:1rem;line-height:1.2222222}.c-state-search-dropdown .c-state-link--abbr span{font-weight:700;width:36px}.c-state-search-dropdown .c-state-link--abbr:after{font-size:18px;font-size:1rem;line-height:1.2222222}.c-state-search-dropdown__state-badge{-ms-flex-align:center;-ms-flex-pack:center;align-items:center;background-color:#262262;border-radius:100%;color:#fff;display:-ms-flexbox;display:flex;font-size:14px;font-size:.7777778rem;font-size:12px;font-size:.6666667rem;font-weight:700;height:24px;justify-content:center;line-height:1.1428571;line-height:1.3333333;margin-left:16px;width:24px}.c-state-search-dropdown__list-link{color:#0a0827;-ms-flex:1;flex:1;font-size:18px;font-size:1rem;line-height:1.7777778;padding:8px 16px;text-decoration:none;z-index:1}.c-state-search-dropdown__list-link:after{bottom:0;content:"";left:0;overflow:hidden;position:absolute;right:0;top:0;white-space:nowrap}.c-state-search-dropdown .c-empty-state__content{margin:32px}.c-state-search-dropdown .c-empty-state__heading{color:#0a0827}.c-search-sheet{-webkit-overflow-scrolling:touch;background-color:#fff;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;height:100%;height:100vh;height:-webkit-fill-available;height:stretch;overflow:scroll;overscroll-behavior-y:contain;width:100%}.c-search-sheet__header{-ms-flex-pack:justify;box-shadow:inset 0 -1px 0 0 #dfdee8;display:-ms-flexbox;display:flex;justify-content:space-between;line-height:1;position:relative}.c-search-sheet__body{-webkit-overflow-scrolling:touch;height:100%;overflow-y:scroll;overscroll-behavior-y:contain;position:relative}.c-search-sheet__back-button{background-color:initial;background-image:url(build/images/icons/16px/light/close.a12e8f7e.svg);background-position:50%;background-repeat:no-repeat;background-size:16px;border:0;cursor:pointer;height:58px;padding:0;position:absolute;right:-100%;top:0;width:58px;z-index:1}.c-search-sheet .c-text-field{width:100%}.c-search-sheet__input{border-radius:0}.c-search-sheet__list{margin:0;padding-bottom:128px}.c-search-sheet .c-empty-state{padding-bottom:128px}.c-search-sheet .c-state-link{margin-bottom:0;padding:13px 16px}.c-search-sheet .c-state-link--abbr{font-size:18px;font-size:1rem;line-height:1.2222222}.c-search-sheet .c-state-link--abbr span{font-weight:700;width:36px}.c-search-sheet .c-state-link--abbr:after{font-size:18px;font-size:1rem;line-height:1.2222222}.c-copy-to-clipboard__input{clip:rect(0 0 0 0)!important;border:0!important;-webkit-clip-path:inset(50%)!important;clip-path:inset(50%)!important;height:1px!important;margin:-1px!important;overflow:hidden!important;padding:0!important;position:absolute!important;white-space:nowrap!important;width:1px!important}.c-back-to-top-button{background-color:#fff;background-image:url(build/images/icons/16px/dark/arrow-stem-up.3c592f67.svg);background-position:50%;background-repeat:no-repeat;background-size:16px;box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 2px #26226226;height:40px;margin-bottom:16px;margin-right:16px;position:relative;width:40px}.c-back-to-top-button:focus,.c-back-to-top-button:hover{box-shadow:0 2px 4px 0 #0a082740,inset 0 0 0 2px #0a0827}@media (min-width:73.125em){.c-back-to-top-button{margin-bottom:32px;margin-right:32px}}.c-generic-modal{background:#fff;border:1px solid #dfdee8;border-radius:6px;left:16px;padding:16px;position:fixed;top:140px;width:calc(100% - 32px);z-index:99999}@media (min-width:48em){.c-generic-modal{left:calc(50% - 324px);max-width:648px}}.c-generic-modal__overlay{-ms-flex-pack:end;background:#0a082799;display:-ms-flexbox;display:flex;height:100vh;justify-content:flex-end;position:fixed;top:0;width:100%;z-index:99999}.c-generic-modal__header{position:relative}.c-generic-modal__close-button{position:absolute;right:0}.c-generic-modal__body{-webkit-overflow-scrolling:touch;max-height:calc(100vh - 280px);overflow-y:scroll;overscroll-behavior-y:contain}.c-generic-modal__body :last-child{margin-bottom:0}.c-modal-toggle__modal-body{display:none}.c-details-table{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-bottom:16px}.c-details-table--full{width:100%}.c-details-table--fit{white-space:nowrap}.c-details-table dd,.c-details-table dt{-ms-flex-align:center;align-items:center;background:#fff;border-bottom:1px solid #dfdee8;display:-ms-flexbox;display:flex;font-size:14px;font-size:.7777778rem;line-height:1.2857143;padding:16px;width:50%}.c-details-table dd:first-child,.c-details-table dd:nth-child(2),.c-details-table dt:first-child,.c-details-table dt:nth-child(2){border-top:1px solid #dfdee8}.c-details-table dd{margin:0}.c-details-table--zebra dd:nth-child(4n+4),.c-details-table--zebra dt:nth-child(4n+3){background-color:#f4f4f740}@media (min-width:48em){.c-details-table dd,.c-details-table dt{font-size:16px;font-size:.8888889rem;line-height:1.375;padding:20px}}@media (min-width:73.125em){.c-details-table dd:nth-child(odd),.c-details-table dt:nth-child(odd){border-left:1px solid #dfdee8}.c-details-table dd:nth-child(2n),.c-details-table dt:nth-child(2n){border-right:1px solid #dfdee8}.c-details-table dd:first-child,.c-details-table dt:first-child{border-top-left-radius:8px}.c-details-table dd:nth-child(2),.c-details-table dt:nth-child(2){border-top-right-radius:8px}.c-details-table dd:nth-last-child(2),.c-details-table dt:nth-last-child(2){border-bottom-left-radius:8px}.c-details-table dd:last-child,.c-details-table dt:last-child{border-bottom-right-radius:8px}}@supports (display:grid){.c-details-table{display:grid;grid-template-columns:-webkit-min-content auto;grid-template-columns:min-content auto}.c-details-table dd,.c-details-table dt{width:100%}.c-details-table dt{grid-column-start:1}.c-details-table dd{grid-column-start:2}}.c-textarea-field{display:block}.c-textarea-field.is-hidden{clip:rect(0 0 0 0)!important;border:0!important;-webkit-clip-path:inset(50%)!important;clip-path:inset(50%)!important;height:1px!important;margin:-1px!important;overflow:hidden!important;padding:0!important;position:absolute!important;white-space:nowrap!important;width:1px!important}.c-textarea-field__input-container{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;min-height:220px;position:relative}.c-textarea-field--w-inner-label .c-textarea-field__input-container{-ms-flex-align:start;-ms-flex-pack:justify;align-items:flex-start;background-position:bottom 12px right 12px;-ms-flex-direction:column;flex-direction:column;justify-content:space-between;padding-left:16px;padding-right:16px}.c-textarea-field__inner-label{font-size:12px;font-size:.6666667rem;font-weight:800;left:16px;letter-spacing:1px;line-height:16px;text-transform:uppercase;top:11px}.c-textarea-field__input{-webkit-appearance:none;appearance:none;background:#0000;border:none;-ms-flex:1 1 auto;flex:1 1 auto;font-family:DM Sans,sans-serif;font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.25;min-height:180px!important;width:100%!important}.c-textarea-field__input:focus{outline:none}.c-input--lg .c-textarea-field__input{font-size:18px;font-size:1rem;line-height:1.3333333}.c-input--lg .c-textarea-field__input::-webkit-input-placeholder{font-size:18px;font-size:1rem;line-height:1.3333333}.c-input--lg .c-textarea-field__input::placeholder{font-size:18px;font-size:1rem;line-height:1.3333333}.c-input--lg .c-textarea-field__input:-ms-input-placeholder{font-size:18px;font-size:1rem;line-height:1.3333333}.c-input--lg .c-textarea-field__input::-ms-input-placeholder{font-size:18px;font-size:1rem;line-height:1.3333333}.c-textarea-field__error-message{background:#f2d2d5;border-bottom-left-radius:8px;border-bottom-right-radius:8px;color:#be1e2d;display:block;font-size:13px;font-weight:500;line-height:2;margin:-6px 0 8px;padding:10px 8px 4px}.c-recaptcha-field{display:inline-block;min-height:78px}.c-recaptcha-field__error-message{background:#f2d2d5;border-bottom-left-radius:8px;border-bottom-right-radius:8px;color:#be1e2d;display:block;font-size:13px;font-weight:500;line-height:2;margin:-8px 0 8px;padding:10px 8px 4px;width:calc(100% - 2px)}@media (max-width:47.99em){.c-game-combinations-tool__date-field{margin-top:8px}}.c-game-combinations-tool__winning-numbers-card{height:124px;overflow:hidden}@media (min-width:48em){.c-game-combinations-tool__winning-numbers-card{height:78px}}@media (max-width:47.99em){.c-game-combinations-tool__result{margin-top:8px}}@media (min-width:48em){.c-game-combinations-tool__result{-ms-flex-pack:end;justify-content:flex-end}}.c-game-combinations-tool__no-combinations{opacity:.3}.c-game-combinations-tool__export{-ms-flex-pack:end;display:-ms-flexbox;display:flex;justify-content:flex-end}.c-odds-table .c-select-field{width:100%}.c-odds-table .u-responsive-table{border-radius:8px;overflow-x:visible;overflow-y:hidden}.c-odds-table .c-table th{cursor:pointer}@media (max-width:47.99em){.c-odds-table .c-table td,.c-odds-table .c-table th{padding:16px 12px;white-space:normal}}.c-odds-table__th{-ms-flex-align:center;-ms-flex-pack:center;align-items:center;display:-ms-flexbox;display:flex;justify-content:center}.c-odds-table__sort-indicator{display:block;height:12px;margin-left:4px;opacity:.75;transition:transform .15s ease-in-out;width:12px;will-change:transform}.c-odds-table__sort-indicator--active{background-image:url(build/images/icons/16px/light/arrow-stem-down.a166b959.svg);background-position:top 50% center;background-repeat:no-repeat;background-size:12px}.c-odds-table__sort-indicator--desc{transform:rotate(180deg)}.c-odds-table__game{margin:0 auto;text-align:center;width:100px}@media (min-width:48em){.c-odds-table__game{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;text-align:left;width:220px}}.c-odds-table__game-logo{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;margin:0 auto 4px;width:50px}@media (min-width:48em){.c-odds-table__game-logo{height:24px;margin:0 16px 0 0}}.c-odds-table__game-logo img{width:100%}.c-odds-table__game-name{white-space:normal;width:calc(100% - 66px)}.c-odds-table__jackpot{min-width:129px;text-align:center}.c-odds-table__overall{min-width:105px;text-align:center}.c-odds-table__state{text-align:right;width:111px}.c-odds-table__state .c-odds-table__th{-ms-flex-pack:end;justify-content:flex-end}@media (max-width:47.99em){.c-odds-table .c-pill{font-size:12px;font-size:.6666667rem;line-height:1.3333333}}.c-odds-card{background-color:#fff;display:block;padding:0 16px;position:relative}.c-odds-card:last-child{margin-bottom:16px}.c-odds-card__header{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;padding:16px 0;width:100%}@media (min-width:73.125em){.c-odds-card__game-details{-ms-flex-pack:justify;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;justify-content:space-between;width:100%}}.c-odds-card__title{display:block;font-size:18px;font-size:1rem;font-weight:700;line-height:1.4444444}.c-odds-card__logo{height:48px;margin-right:12px;width:48px}.c-odds-card__odds{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;font-size:18px;font-size:1rem;font-weight:700;line-height:1.3333333;padding:0 0 16px}.c-odds-card__odds-list{-ms-flex-pack:justify;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;justify-content:space-between;margin-bottom:8px;width:100%}.c-odds-card__odds-title{color:#413e5b;font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5;position:relative;text-align:right}.c-odds-card__odds-title:before{background-position:50% 50%;background-size:24px 24px;content:"";display:inline-block;height:24px;margin-right:8px;vertical-align:top;width:24px}.c-odds-card__odds--jackpot .c-odds-card__odds-title:before{background-image:url(build/images/icons/24px/color/dollar.42d1b55f.svg)}.c-odds-card__odds--overall .c-odds-card__odds-title:before{background-image:url(build/images/icons/24px/dark/dollar.bdec4f04.svg);opacity:.3333}.c-odds-card__odds-label{display:block;font-size:21px;font-size:1.1666667rem;font-weight:700;line-height:1.2380952;margin-left:auto;text-align:right}.c-odds-card__icon{-ms-flex-align:center;align-items:center;margin-right:8px}.c-odds-card__state{padding:0;position:absolute;right:16px;top:24px}@media (min-width:73.125em){.c-odds-card{-ms-flex-pack:justify;border-radius:8px;box-shadow:0 2px 8px 0 #0a08270d;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;justify-content:space-between}.c-odds-card:hover{box-shadow:0 2px 8px 0 #0a08270d,inset 0 0 0 2px #0a0827;cursor:pointer}.c-odds-card:hover .c-odds-card__btn{box-shadow:inset 0 0 0 2px #0a0827}.c-odds-card__header{height:100%;padding:16px 0}.c-odds-card__header,.c-odds-card__odds{-ms-flex-preferred-size:25%;flex-basis:25%}.c-odds-card__odds{padding-bottom:8px;padding-top:8px}.c-odds-card__odds-list{-ms-flex-pack:center;-ms-flex-align:center;align-items:center;-ms-flex-direction:column;flex-direction:column;justify-content:center;margin-bottom:0}.c-odds-card__odds-title{color:#0a082799;display:block;font-size:14px;font-size:.7777778rem;font-weight:700;letter-spacing:1.25px;line-height:1.4285714;margin-bottom:8px;text-transform:uppercase}.c-odds-card__odds-title:before{content:none!important}.c-odds-card__odds-label{margin-left:0}.c-odds-card__state{-ms-flex-align:center;-ms-flex-pack:end;align-items:center;display:-ms-flexbox;display:flex;-ms-flex:1 1 auto;flex:1 1 auto;justify-content:flex-end;padding-bottom:8px;padding-right:48px;padding-top:8px;position:static}.c-odds-card__jackpot-history .c-btn{top:24px}.c-odds-card__jackpot-list{-ms-flex-pack:end;justify-content:flex-end}.c-odds-card__link,.c-odds-card__prize{box-shadow:inset 0 1px 0 0 #f4f4f7}.c-odds-card__prize{-ms-flex-preferred-size:45%;flex-basis:45%}.c-odds-card__prize-sub-value{display:inline-block;font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.4285714;margin-left:auto}.c-odds-card__link{-ms-flex-preferred-size:55%;flex-basis:55%;padding:16px 0}.c-odds-card__jackpot-row{-ms-flex-pack:end;box-shadow:none;justify-content:flex-end}.c-odds-card__jackpot-row+.c-odds-card__jackpot-row{box-shadow:inset 0 1px 0 0 #f4f4f7;padding-bottom:4px}.c-odds-card__jackpot-meta{margin-right:auto}.c-odds-card__prize-label{margin-right:8px}.c-odds-card__prize-details{padding:0}.c-odds-card__btn,.c-odds-card__prize-details{-ms-flex-item-align:center;align-self:center;width:auto}.c-odds-card__btn{font-size:14px;font-size:.7777778rem;height:auto;line-height:1.4285714;margin-left:auto;padding:6px 36px 6px 12px}}.c-result-table-title{font-size:24px;font-size:1.3333333rem;font-weight:700;line-height:1.1666667;margin-bottom:48px;text-align:center}@media (min-width:73.125em){.c-result-table-title{font-size:24px;font-size:1.3333333rem;line-height:1.3333333;margin-bottom:16px;text-align:left}}.c-daily-games-table td:first-child,.c-daily-games-table th:first-child{min-width:120px}@media (min-width:48em){.c-daily-games-table td:first-child,.c-daily-games-table th:first-child{width:200px!important}}.c-daily-games-table td:not(:first-child),.c-daily-games-table th:not(:first-child){text-align:center}.c-daily-games-table td{min-width:90px;padding:8px 16px}.c-daily-games-table .u-responsive-table{border-radius:8px;overflow-x:visible;overflow-y:hidden}.c-daily-games-table__game-toggle{display:-ms-flexbox;display:flex;margin-bottom:24px}.c-daily-games-table__game-toggle .c-radio-field{width:100%}.c-daily-games-table__game-toggle .c-radio-field:last-child{margin-right:0}.c-daily-games-table__state-dropdown-body{max-height:183px}@media (min-width:48em){.c-daily-games-table__state-dropdown-body{max-height:343px}}.c-daily-games-table__state-dropdown-footer{margin-top:0}.c-daily-games-table__highlight-export{-ms-flex-pack:justify;display:-ms-flexbox;display:flex;justify-content:space-between}.c-daily-games-table__highlight{cursor:pointer;display:block;height:40px;position:relative;width:190px}@media (max-width:47.99em){.c-daily-games-table__highlight{z-index:73}.c-daily-games-table__highlight.is-open{z-index:75}}@media (min-width:48em){.c-daily-games-table__highlight{width:100%}}.c-daily-games-table__highlight-container{border-radius:8px;min-height:40px;min-width:190px;overflow:hidden;text-align:right}@media (max-width:47.99em){.c-daily-games-table__highlight-container{background-color:#fff;border:none;box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;left:0;position:absolute;top:0}}@media (min-width:48em){.c-daily-games-table__highlight-container{display:-ms-flexbox;display:flex;width:100%}}.c-daily-games-table__highlight-button{background-color:initial;background-image:url(build/images/icons/16px/dark/highlight.8d3d7eb0.svg);background-position:center left 12px;background-repeat:no-repeat;background-size:16px;border:none;cursor:pointer;font-family:DM Sans,sans-serif;font-size:16px;font-size:.8888889rem;font-weight:500;left:0;line-height:1.25;padding:11px 12px 9px 36px;position:absolute;text-align:left;width:324px}@media (min-width:48em){.c-daily-games-table__highlight-button{background-position:0;cursor:auto;padding:11px 12px 9px 24px;position:static;width:auto}}.c-daily-games-table__highlight__button-label{opacity:0}.c-daily-games-table__highlight-label{display:block;font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5}@media (max-width:47.99em){.c-daily-games-table__highlight-label{margin-bottom:4px;margin-left:8px}}@media (min-width:48em){.c-daily-games-table__highlight-label{margin-right:16px}}.c-daily-games-table__highlight-group{-webkit-overflow-scrolling:touch;-ms-overflow-style:none;display:block;list-style-type:none;margin:40px 0 0;min-width:100%;overflow:scroll;overflow:-moz-scrollbars-none;overscroll-behavior-y:contain;padding:4px 12px 16px;scrollbar-width:none;white-space:nowrap;width:304px}.c-daily-games-table__highlight-group::-webkit-scrollbar{display:none}@media (min-width:23.4375em){.c-daily-games-table__highlight-group{width:324px}}@media (min-width:48em){.c-daily-games-table__highlight-group{margin-top:0;padding:0;width:auto}}.c-daily-games-table__highlight-group .c-checkbox-group__fields{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:first-child{background-color:#ff9e00}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(2){background-color:#326eb1}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(3){background-color:#008874}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(4){background-color:#be1e2d}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(5){background-color:#b63dcd}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(6){background-color:#a1cf6b}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(7){background-color:#cf517a}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(8){background-color:#e1d04a}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(9){background-color:#e46d46}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field.is-checked:nth-child(10){background-color:#33adb6}@media (max-width:47.99em){.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field{width:calc(20% - 3.2px)}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field:nth-child(5n){margin-right:0}.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field:nth-child(n+6){margin-bottom:0}}@media (min-width:48em){.c-daily-games-table__highlight-group .c-checkbox-group__fields .c-checkbox-field{margin-bottom:0;max-width:53px}}.c-daily-games-table__export{-ms-flex-pack:end;display:-ms-flexbox;display:flex;justify-content:flex-end;margin-bottom:8px;margin-left:8px}.c-daily-games-table__result{display:-ms-flexbox;display:flex}.c-daily-games-table__result,.c-daily-games-table__result-item{-ms-flex-pack:center;-ms-flex-align:center;align-items:center;justify-content:center}.c-daily-games-table__result-item{border-radius:4px;display:-ms-inline-flexbox;display:inline-flex;height:20px;margin-right:4px;width:16px}.c-daily-games-table__result-item:last-child{margin-right:0}.c-daily-games-table__result-item--highlighted{font-weight:500}.c-daily-games-table__result-item--highlighted-0{background-color:#ff9e00;color:#fff;font-weight:900}.c-daily-games-table__result-item--highlighted-1{background-color:#326eb1;color:#fff;font-weight:900}.c-daily-games-table__result-item--highlighted-2{background-color:#008874;color:#fff;font-weight:900}.c-daily-games-table__result-item--highlighted-3{background-color:#be1e2d;color:#fff;font-weight:900}.c-daily-games-table__result-item--highlighted-4{background-color:#b63dcd;color:#fff;font-weight:900}.c-daily-games-table__result-item--highlighted-5{background-color:#a1cf6b;color:#fff;font-weight:900}.c-daily-games-table__result-item--highlighted-6{background-color:#cf517a;color:#fff;font-weight:900}.c-daily-games-table__result-item--highlighted-7{background-color:#e1d04a;color:#fff;font-weight:900}.c-daily-games-table__result-item--highlighted-8{background-color:#e46d46;color:#fff;font-weight:900}.c-daily-games-table__result-item--highlighted-9{background-color:#33adb6;color:#fff;font-weight:900}.c-quick-picks-card{overflow:visible;position:relative}.c-quick-picks-card--w-buy-button{margin-bottom:32px}.c-quick-picks-card--simple{border:1px solid #dfdee8;box-shadow:none;width:100%}.c-quick-picks-card__header{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;width:100%}.c-quick-picks-card__logo{height:48px;margin-right:12px;width:48px}.c-quick-picks-card__title{display:block;font-size:21px;font-size:1.1666667rem;font-weight:700;line-height:1.2380952;margin-bottom:0}.c-quick-picks-card__subtitle{display:block;font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.4285714}.c-quick-picks-card__body{color:#413e5b;font-size:16px;font-size:.8888889rem;line-height:24px;margin-bottom:0;margin-top:8px}.c-quick-picks-card__inputs{margin-top:8px}.c-quick-picks-card__input-title{color:#0a0827cc;font-size:12px;font-size:.6666667rem;font-weight:500;line-height:16px}@media (min-width:48em){.c-quick-picks-card__input-title{font-size:14px;font-size:.7777778rem;line-height:20px}}.c-quick-picks-card .c-checkbox-field{font-size:14px;font-size:.7777778rem;line-height:20px}@media (min-width:48em){.c-quick-picks-card .c-checkbox-field{margin-top:20px}}.c-quick-picks-card__lines-input{-ms-flex-pack:justify;justify-content:space-between;margin-bottom:8px;margin-top:4px;width:100%}.c-quick-picks-card__range-label{line-height:20px}.c-quick-picks-card__buttons-label,.c-quick-picks-card__range-label{-ms-flex-negative:0;color:#0a082799;display:inline-block;flex-shrink:0;font-size:14px;font-size:.7777778rem;font-weight:500;margin-right:16px}.c-quick-picks-card__buttons-label{height:16px;line-height:16px}.c-quick-picks-card .c-quick-picks-button-group{display:-ms-flexbox;display:flex;width:235px}@media (min-width:23.4375em){.c-quick-picks-card .c-quick-picks-button-group{width:290px}}.c-quick-picks-card .c-quick-picks-button-group__button{-ms-flex:1;flex:1}.c-quick-picks-card__lines-group{display:-ms-flexbox;display:flex;width:100%}.c-quick-picks-card__lines-field{-ms-flex:1;flex:1;margin-right:4px;min-width:39px}.c-quick-picks-card__lines-field:last-of-type{margin-right:0!important}.c-quick-picks-card__game-config-inputs{margin-top:4px}@media (min-width:48em){.c-quick-picks-card__game-config-inputs{margin-top:8px}}.c-quick-picks-card__lines{margin-left:0;overflow:hidden;position:relative}@media (max-width:23.4275em){.c-quick-picks-card--actions-below .c-quick-picks-card__lines{margin-bottom:16px}}.c-quick-picks-card .o-ui-list__item{margin-bottom:0}.c-quick-picks-card .c-result{-webkit-tap-highlight-color:transparent;background-color:#fff;cursor:pointer;height:100%;max-width:none;padding:16px 0;position:relative;transition:left .15s ease-in-out;width:100%;z-index:2}.c-quick-picks-card .c-ball{-ms-flex-pack:start;border-radius:100%;justify-content:flex-start;overflow:hidden}.c-quick-picks-card .c-ball,.c-quick-picks-card .c-ball__label{-ms-flex-positive:0;-ms-flex-negative:0;-ms-flex-preferred-size:36px;flex-basis:36px;flex-grow:0;flex-shrink:0;font-size:18px;font-size:1rem;height:36px;line-height:1.1111111;width:36px}@media (min-width:23.4375em){.c-quick-picks-card .c-ball,.c-quick-picks-card .c-ball__label{-ms-flex-preferred-size:44px;flex-basis:44px;font-size:22px;font-size:1.2222222rem;height:48px;height:44px;line-height:1.1818182;width:48px;width:44px}}@media (min-width:48em){.c-quick-picks-card--gamepage .c-quick-picks-card .c-ball,.c-quick-picks-card--gamepage .c-quick-picks-card .c-ball__label{font-size:28px;font-size:1.5555556rem;line-height:24px;margin-right:8px}}.c-quick-picks-card__line{-ms-flex-align:center;align-items:center;border-bottom:1px solid #dfdee8;display:-ms-flexbox;display:flex;margin-bottom:0;overflow:hidden;position:relative}@media (min-width:73.125em){.c-quick-picks-card__line--long .c-ball,.c-quick-picks-card__line--long .c-ball__label{-ms-flex-preferred-size:36px;flex-basis:36px;font-size:18px;font-size:1rem;height:36px;line-height:1.3333333;width:36px}}.o-ui-list__item:last-child .c-quick-picks-card__line{border-bottom:none}.c-quick-picks-card__line-copy{background-image:url(build/images/icons/16px/dark/copy.56d70f3c.svg);background-position:50%;background-repeat:no-repeat;background-size:16px;border:2px solid #dfdee8;height:40px;margin-left:16px;width:40px}.c-quick-picks-card__line-copy--hidden{display:none}.c-quick-picks-card__footer{margin-top:4px}.c-quick-picks-card__button--reload{background-color:#262262;background-image:url(build/images/icons/30px/light/reload.e2bb7ef0.svg);background-position:50%;background-repeat:no-repeat;background-size:30px;border:none;border-radius:100%;bottom:-38px;cursor:pointer;height:64px;margin-bottom:6px;position:absolute;right:16px;width:64px}.c-quick-picks-card__buy-button{background-image:url(build/images/icons/16px/dark/arrow-stem-up-right.d24c2f14.svg);background-position:center right 12px;background-repeat:no-repeat;background-size:16px;bottom:-20px;letter-spacing:1.25px;padding:11px 36px 9px 16px;position:absolute;right:16px;text-align:left}.c-quick-picks-card--buy-button-left .c-quick-picks-card__buy-button{left:16px;right:0}.c-quick-picks-card__single-action{-ms-flex-item-align:stretch;align-self:stretch;background:none;background-color:#fff;background-image:url(build/images/icons/16px/dark/dot-menu.eeb68a0a.svg);background-position:100%;background-repeat:no-repeat;background-size:16px;border:0;cursor:pointer;margin:16px 0;position:relative;transition:left .15s ease-in-out;width:30px;z-index:2}.c-quick-picks-card__single-buttons{-ms-flex-align:center;align-items:center;cursor:pointer;display:-ms-flexbox;display:flex;height:100%;position:absolute;right:0;width:100px}.c-quick-picks-card .c-copy-to-clipboard,.c-quick-picks-card__single-buy{-ms-flex-pack:center;-ms-flex-align:center;align-items:center;background:#dfdee8;display:-ms-flexbox;display:flex;font-size:16px;font-weight:700;height:calc(100% - 32px);justify-content:center;letter-spacing:1.5px;line-height:1.2;padding:16px 0;text-transform:uppercase;width:100%;z-index:1}.c-quick-picks-card__single-buy,.c-quick-picks-card__single-copy{-webkit-user-select:none;-ms-user-select:none;user-select:none}.c-quick-picks-card__single-buy{background:#008874;color:#fff}.c-range-field{width:100%}.c-range-field__input-container{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex}.c-range-field__input{width:100%}.c-range-field__display{-ms-flex-negative:0;flex-shrink:0;font-size:12px;font-size:.6666667rem;line-height:24px;margin-left:16px;padding:4px 6px;text-align:center;width:40px}.c-range-field input[type=range]::-moz-range-track{animate:.2s;background:#dfdee8;border-radius:9999px;cursor:pointer;height:10px;width:100%}.c-range-field input[type=range]::-moz-range-thumb{background:#fff;border:1px solid #dfdee8;border-radius:100%;box-shadow:0 2px 4px 0 #0a082740;cursor:pointer;height:16px;width:16px}.c-range-field input[type=range]::-moz-range-progress{background-color:#262262;border-radius:9999px;height:10px}.c-quick-picks-button-group__button{-ms-flex-align:center;-ms-flex-pack:center;align-items:center;background-color:initial;border:none;border-radius:8px;box-shadow:inset 0 0 0 2px #dfdee8,0 2px 4px 0 #2622620d;box-shadow:inset 0 0 0 2px #dfdee8;color:#0a0827;cursor:pointer;display:-ms-inline-flexbox;display:inline-flex;font-family:inherit;font-size:12px;font-size:.6666667rem;font-weight:900;font-weight:500;justify-content:center;letter-spacing:0;line-height:24px;margin-right:4px;min-width:40px;padding:4px 6px;text-align:center;text-decoration:none;text-transform:none;transition:background-color .3s ease-in-out,color .3s ease-in-out}@media (min-width:23.4375em){.c-quick-picks-card--homepage .c-quick-picks-button-group__button{font-size:16px;font-size:.8888889rem;line-height:24px;min-width:51px;padding:8px 12px}.c-quick-picks-button-group__button{margin-right:8px}}.c-quick-picks-button-group__button:last-child{margin-right:0}.c-quick-picks-button-group__button.is-checked{background-color:#262262;box-shadow:0 2px 4px 0 #2622620d;color:#fff}.c-quick-picks-button-group__button.is-disabled{background-color:#f4f4f7}.c-quick-picks-button-group__icon{height:16px;margin-left:8px;width:16px}.c-state-results-table{opacity:1}.c-state-results-table .c-content-slide{width:calc(100% - 68px)}.c-state-results-table .c-state-results-table__controls--export .c-content-slide{width:calc(100% - 40px)}.c-state-results-table__controls{-ms-flex-pack:center;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;justify-content:center;margin:0 auto 16px;max-width:400px;position:relative}@media (min-width:73.125em){.c-state-results-table__controls{margin-bottom:32px}}.c-state-results-table__controls .c-content-slide{left:50px;position:relative}.c-state-results-table__controls .c-content-slide__panel{text-align:center}.c-state-results-table__controls-title{margin-bottom:0}.c-state-results-table__controls-icon{padding:8px}.c-state-results-table__controls-buttons{-ms-flex-pack:justify;display:-ms-flexbox;display:flex;justify-content:space-between;position:absolute;right:0;top:-3px;width:100%}.c-state-results-table__controls-button{background-position:50%;background-repeat:no-repeat;background-size:16px;height:32px;padding:8px;width:32px}.c-state-results-table__controls-button.is-disabled{background-color:initial;box-shadow:none;opacity:.3;pointer-events:none}.c-state-results-table__controls-button--prev{background-image:url(build/images/icons/16px/dark/arrow-left.e820daf7.svg);margin-right:4px}.c-state-results-table__controls-button--next{background-image:url(build/images/icons/16px/dark/arrow-right.adad23de.svg);margin-left:4px}.c-state-results-table .c-results-table{margin-top:48px}.c-state-results-table__no-draws{-ms-flex-pack:center;display:-ms-flexbox;display:flex;justify-content:center;width:100%}@media (min-width:48em){.c-state-results-table__no-draws{padding:32px}}.c-state-results-table__no-draws .c-message{max-width:400px;width:100%}.c-state-results-table__no-draws .c-empty-state__content{margin:16px}.c-live-results-table{background:#fff;margin-bottom:32px;position:relative}@media (max-width:47.99em){.c-live-results-table{padding:16px 8px 8px}}@media (min-width:48em){.c-live-results-table{padding-top:12px}}.c-live-results-table__header{margin-bottom:12px;position:relative}.c-live-results-table__header h2{margin:0}.c-live-results-table__indicator{height:16px;position:relative;width:16px}.c-live-results-table__indicator,.c-live-results-table__indicator:after{background:#4fab57;border-radius:100%;display:inline-block;margin-left:16px}.c-live-results-table__indicator:after{animation:pulse 3s ease-in-out infinite;content:"";height:40px;left:-28px;position:absolute;top:-12px;width:40px}.c-live-results-table .c-expanding-menu{position:absolute;right:0;top:-6px}@media (min-width:48em){.c-live-results-table .c-expanding-menu{cursor:default;height:auto;width:auto}.c-live-results-table .c-expanding-menu__container{border:none;border-radius:0!important;box-shadow:none!important;max-height:none!important;position:relative}.c-live-results-table .c-expanding-menu__button{display:none}.c-live-results-table .c-expanding-menu__list{display:-ms-flexbox!important;display:flex!important;margin-top:0;max-width:none!important;opacity:1!important;padding:4px 0;width:auto!important}.c-live-results-table .c-expanding-menu__list-item{margin-bottom:0}.c-live-results-table .c-expanding-menu__list-item .c-radio-field{padding:8px}}.c-live-results-table__extra-controls-button{font-weight:300;position:absolute;right:0;top:-8px}@media (min-width:48em){.c-live-results-table__extra-controls-button{display:none}}.c-live-results-table__extra-controls .c-text-field{-ms-flex:1;flex:1;margin-top:16px}.c-live-results-table__extra-controls .c-radio-group{right:0;top:31px}@media (max-width:47.99em){.c-live-results-table__extra-controls .c-radio-group{background:#fff;border-radius:4px;box-shadow:0 1px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;padding:8px;position:absolute;z-index:9999}}@media (min-width:48em){.c-live-results-table__extra-controls .c-radio-group{display:-ms-flexbox;display:flex;right:16px;top:19px}}.c-live-results-table__extra-controls .c-radio-field{color:#0a0827;-ms-flex-wrap:nowrap;flex-wrap:nowrap;padding:0}.c-live-results-table__extra-controls .c-radio-field.is-checked{background-color:initial;font-weight:300}.c-live-results-table .u-responsive-table{margin-bottom:16px}.c-live-results-table table{margin-bottom:-8px!important;margin-left:-8px;margin-right:-8px;table-layout:fixed;width:calc(100% + 16px)}@media (min-width:48em){.c-live-results-table table{margin-bottom:-16px!important;margin-left:-24px;margin-right:-24px;width:calc(100% + 48px)}}.c-live-results-table thead{background:#f4f4f7}.c-live-results-table .c-table thead th{background-color:#0a0827}.c-live-results-table--paused tbody{opacity:.5}.c-live-results-table td,.c-live-results-table th{padding:12px 24px}@media (max-width:47.99em){.c-live-results-table td,.c-live-results-table th{padding:8px}}.c-live-results-table th:first-child{border-radius:0!important}.c-live-results-table td:last-child,.c-live-results-table th:last-child{border-radius:0!important;text-align:right}@media (min-width:48em){.c-live-results-table td:last-child,.c-live-results-table th:last-child{width:90px}}.c-live-results-table td{background:#fff}.c-live-results-table .c-table :last-child>:last-child>td{border-bottom:none}.c-live-results-table .c-table :last-child>:last-child>td:first-child,.c-live-results-table .c-table :last-child>:last-child>td:last-child{border-radius:0}.c-live-results-table__paused-message{position:relative}.c-live-results-table__paused-message td{background:#dfdee8!important;color:#0a0827cc!important;cursor:pointer;padding:12px 24px;text-align:center!important}@media (max-width:47.99em){.c-live-results-table__paused-message td:nth-child(2),.c-live-results-table__paused-message td:nth-child(3){display:none}}.c-live-results-table__paused-message td:after{color:#0a0827;content:attr(data-label);left:0;position:absolute;text-align:center;top:12px;width:100%}@media (max-width:47.99em){.c-live-results-table__paused-message td:after{display:none}}@media (min-width:48em){.c-live-results-table__paused-message-text{visibility:hidden}}.c-live-results-table__separator{position:relative}.c-live-results-table__separator td{background:#f4f4f7;color:#0a0827;font-size:12px;font-size:.6666667rem;font-weight:700;letter-spacing:1px;line-height:1.3333333;padding:4px;text-align:center;text-transform:uppercase}@media (max-width:47.99em){.c-live-results-table__separator td:nth-child(2),.c-live-results-table__separator td:nth-child(3){display:none}}.c-live-results-table__separator td:after{color:#0a0827;content:attr(data-label);font-size:12px;font-size:.6666667rem;font-weight:700;left:0;letter-spacing:1px;line-height:1.3333333;position:absolute;text-align:center;text-transform:uppercase;width:100%}@media (max-width:47.99em){.c-live-results-table__separator td:after{display:none}}@media (min-width:48em){.c-live-results-table__separator-text{visibility:hidden}}.c-live-results-table__paused{background:#5464e8!important;color:#fff!important;cursor:pointer;text-align:center!important}.c-live-results-table__paused svg{fill:#fff;margin-right:16px}.c-live-results-table__item{position:relative}.c-live-results-table__item-game{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;text-decoration:none}.c-live-results-table__item-logo{height:40px;margin-right:16px;width:40px}@media (max-width:47.99em){.c-live-results-table__item-logo{display:none}}.c-live-results-table__item-subtitle{color:#0a082766;display:block;font-size:14px;font-size:.7777778rem;font-weight:700;font-weight:300;letter-spacing:1.25px;line-height:1.4285714;text-transform:uppercase}@media (max-width:47.99em){.c-live-results-table__item-subtitle{font-size:12px;font-size:.6666667rem;line-height:1.6666667}}.c-live-results-table__item-link-container{position:relative}.c-live-results-table__item-link{display:block;height:100%;left:0;position:absolute;text-decoration:none;top:0;width:100%;z-index:1}@media (min-width:48em){.c-live-results-table__item-link{background-image:url(build/images/icons/16px/dark/arrow-right.adad23de.svg);background-position:right 24px center;background-repeat:no-repeat;background-size:16px}}.c-live-results-table__time{background:#413e5b;border-radius:4px;color:#fff;display:inline-block;font-weight:900;letter-spacing:1px;margin-bottom:4px;padding:4px 16px;text-transform:uppercase}.c-live-results-table .c-countdown{display:inline-block;text-transform:lowercase}.c-live-results-table__result-row:nth-child(n+2){margin-top:16px}.c-live-results-table .c-result--long{margin-bottom:0}.c-live-results-table .c-result-card__result-label{margin-bottom:4px;text-align:left}.c-live-results-table__in-progress-col .c-live-results-table__sub,.c-live-results-table__not-in-progress-col .c-live-results-table__sub,.c-live-results-table__result-col .c-live-results-table__sub{color:#0a0827cc;display:block;font-size:14px;font-size:.7777778rem;font-size:12px;font-weight:400;line-height:1.4285714;margin-top:4px;opacity:.8}@media (min-width:48em){.c-live-results-table__in-progress-col .c-live-results-table__sub,.c-live-results-table__not-in-progress-col .c-live-results-table__sub,.c-live-results-table__result-col .c-live-results-table__sub{display:none}}.c-live-results-table__delayed,.c-live-results-table__not-in-progress{background:#dfdee8;border-radius:4px;display:inline-block;font-weight:900;letter-spacing:1px;padding:4px 16px;text-align:center;text-transform:uppercase}@media (max-width:47.99em){.c-live-results-table__delayed,.c-live-results-table__not-in-progress{font-size:10px;font-size:.5555556rem;line-height:12px}}.c-live-results-table__live{animation:throb 1.5s ease-in-out infinite;background:#4fab57;border-radius:4px;color:#fff;display:inline-block;font-weight:900;letter-spacing:1px;padding:4px 16px;text-align:center;text-transform:uppercase}@media (max-width:47.99em){.c-live-results-table__live{font-size:10px;font-size:.5555556rem;line-height:12px}}.c-live-results-table--paused .c-live-results-table__live{animation:none}.c-live-results-table__load-more-button{display:block;margin:0 auto}.c-live-results-table .svg-wait__arrow{animation:spin 20s ease-in-out infinite;transform-origin:center}.c-live-results-table--paused .svg-wait__arrow{animation:none}.c-live-results-table .c-table thead th{font-weight:500;letter-spacing:0;text-transform:none}.c-live-results-table .c-table tbody tr th:first-child,.c-live-results-table .c-table tr td:first-child{border-left:0}.c-live-results-table .c-table tbody tr th:last-child,.c-live-results-table .c-table tr td:last-child{border-right:0}@media (max-width:47.99em){.c-live-results-table .c-live-results-table__in-progress-body tr td:nth-child(3),.c-live-results-table .c-live-results-table__not-in-progress-body tr td:nth-child(3),.c-live-results-table .c-live-results-table__result-body tr td:nth-child(3),.c-live-results-table .c-live-results-table__upcoming-body tr:not(.c-live-results-table__separator) td:nth-child(2),.c-live-results-table .c-table tr td:nth-child(4),.c-live-results-table .c-table tr th:nth-child(3),.c-live-results-table .c-table tr th:nth-child(4){display:none}}@keyframes pulse{0%{opacity:1;transform:scale(0)}to{opacity:0;transform:scale(1)}}@keyframes throb{0%{opacity:1}50%{opacity:.75}to{opacity:1}}@keyframes spin{0%{transform:rotate(0deg)}47.5%{transform:rotate(0deg)}50%{transform:rotate(1turn)}52.5%{transform:rotate(1turn)}to{transform:rotate(1turn)}}.c-promo-card{background:linear-gradient(30deg,#0700b8 50%,#0f8);color:#fff}.c-promo-card__subtitle{font-size:14px;font-size:.7777778rem;font-weight:700;letter-spacing:1.25px;line-height:1.4285714;margin-bottom:8px;text-transform:uppercase}.c-promo-card__image{height:75px;margin-bottom:16px}.c-promo-card__title{font-size:30px;font-size:1.6666667rem;font-weight:700;line-height:1.2;margin-bottom:8px}.c-promo-card__body{font-size:16px;font-size:.8888889rem;font-weight:400;line-height:1.5;margin-bottom:16px}.c-password-field{position:relative}.c-password-field__show-button{background:none;box-shadow:none;color:#0a082780;position:absolute;right:0;top:31px}.c-password-field__show-button:hover{box-shadow:none}.c-password-field__show-button:focus,.c-password-field__show-button:hover{color:#0a0827}.c-password-field .c-text-field__input-container{padding-right:70px}.c-password-field__checklist{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-bottom:0;padding:8px 4px}.c-password-field__checklist-item{-ms-flex-align:center;align-items:center;color:#0a0827cc;display:-ms-flexbox;display:flex;font-size:12px;font-size:.6666667rem;line-height:1.6666667;width:50%}.c-password-field__checklist-icon{display:inline-block;height:16px;margin-right:8px;width:16px}.c-password-field__checklist-icon svg{height:16px;width:16px}.c-password-field__checklist-icon svg path:not(.check-circle__check){fill:#dfdee8!important;transition:fill .15s ease-in-out}.c-password-field__checklist-item--valid .c-password-field__checklist-icon svg path:not(.check-circle__check){fill:#008874!important}.c-registration-form{border-bottom:1px solid #dfdee8;margin-bottom:16px;overflow:visible}.c-registration-form__newsletter{margin-bottom:12px;margin-top:12px}.c-delete-account-form,.c-reset-password-request-form,.c-reset-password-reset-form{border-bottom:1px solid #dfdee8;margin-bottom:16px;overflow:visible}.c-dob-field__container{display:-ms-flexbox;display:flex;position:relative}.c-dob-field.is-disabled .c-dob-field__container{background-color:#f4f4f7}.c-dob-field__input{margin-right:16px;width:48px}.c-dob-field__input:last-child{-ms-flex-positive:1;flex-grow:1;margin-right:0}.c-dob-field .c-number-field__input-container.c-input,.c-dob-field .c-text-field__input-container.c-input{background:none;box-shadow:none;padding:0}.c-dob-field.is-disabled .c-dob-field .c-number-field__input{color:#0a082780}.c-dob-field__error-message{background:#f2d2d5;border-bottom-left-radius:8px;border-bottom-right-radius:8px;color:#be1e2d;display:block;font-size:13px;font-size:.7222222rem;font-weight:500;line-height:1.5384615;margin:-6px 0 8px;padding:10px 8px 4px}.c-login-form--admin .c-login-form__submit-button{background-color:#262262!important}.c-login-form__remember-me{font-size:14px;font-size:.7777778rem;line-height:1.4285714}.c-profile-form{border-bottom:1px solid #dfdee8;margin-bottom:16px;overflow:visible}.pac-container{border-bottom-left-radius:8px;border-bottom-right-radius:8px;box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;font-family:DM Sans,sans-serif,serif;padding:16px 4px 4px;z-index:1}.pac-icon{margin-top:0}.pac-item{border-radius:8px;border-top:none;color:#0a0827;cursor:pointer;font-size:14px;font-size:.7777778rem;line-height:20px;margin-bottom:4px;padding:8px}.pac-item:last-child{margin-bottom:0}.pac-item:hover{background:#f4f4f7}.pac-item-query{font-size:14px;font-size:.7777778rem;line-height:20px}.c-notifications-form .c-notifications-form__checkbox-row{margin-bottom:16px}.c-notifications-form .c-checkbox-field{font-size:18px;font-size:1rem;font-weight:500;line-height:1;padding:0}.c-notifications-form .c-notifications-form__checkbox-description{color:#0a0827cc;font-size:16px;font-size:.8888889rem;font-weight:400;line-height:1.5;margin-bottom:0;margin-right:60px}.c-lucky-numbers-ticket{background-image:url(build/images/backgrounds/stars-bg.06b6efb3.svg);background-position:top;background-repeat:no-repeat;background-size:cover;border-radius:8px;box-shadow:inset 0 0 100px 0 #000000e6;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding:24px 16px;position:relative;text-align:center;width:100%}.c-lucky-numbers-ticket--daily .c-lucky-numbers-ticket__row{-ms-flex-align:center;-ms-flex-pack:end;align-items:center;display:-ms-flexbox;display:flex;justify-content:flex-end}.c-lucky-numbers-ticket--daily .c-lucky-numbers-ticket__line{-ms-flex-pack:end;-ms-flex:1;flex:1;justify-content:flex-end;margin-left:auto;margin-right:0;padding:8px 0}.c-lucky-numbers-ticket--daily .c-lucky-numbers-ticket__draw-icon{-ms-flex-item-align:center;align-self:center;display:none;margin-right:8px}.c-lucky-numbers-ticket--daily .c-lucky-numbers-ticket__draw-label{-ms-flex-item-align:center;align-self:center;display:block;font-size:14px;font-size:.7777778rem;font-weight:700;line-height:1.1428571;padding:16px 0;text-transform:uppercase}.c-lucky-numbers-ticket__header{-ms-flex-align:start;align-items:flex-start;color:#fff;display:-ms-flexbox;display:flex;-ms-flex-direction:row-reverse;flex-direction:row-reverse;margin-bottom:32px}.c-lucky-numbers-ticket__header-body{-ms-flex-item-align:center;align-self:center;color:#fff;-ms-flex:1;flex:1;text-align:left}.c-lucky-numbers-ticket__title{font-size:24px;font-size:1.3333333rem;line-height:1.3333333;margin-bottom:0}.c-lucky-numbers-ticket__logo{background-color:#fff;border-radius:100%;height:64px;margin-left:8px;padding:4px;width:64px}.c-lucky-numbers-ticket__sub{color:#fff;text-align:left}.c-lucky-numbers-ticket__body{background-color:#0000004d;border-radius:8px;box-shadow:inset 0 0 0 1px #ffffff4d;color:#fff;padding:16px;text-align:left}.c-lucky-numbers-ticket__date{font-size:16px;font-size:.8888889rem;line-height:1.5;margin-bottom:16px}.c-lucky-numbers-ticket__line{-ms-flex-pack:start;display:-ms-flexbox;display:flex;justify-content:flex-start;list-style:none;margin:0 auto 0 0;width:100%}.c-lucky-numbers-ticket__abbr{color:#fff}.c-lucky-numbers-ticket__placeholder{color:#fffc;text-align:left}@media (min-width:23.4375em){.c-lucky-numbers-ticket .c-lucky-numbers-ticket__draw-icon{display:block}}.c-donut-chart{height:180px;position:relative;width:180px}.c-donut-chart__svg{transform:rotate(-90deg)}.c-donut-chart__value{-ms-flex-pack:center;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;font-size:24px;font-size:1.3333333rem;font-weight:700;height:100%;justify-content:center;left:0;line-height:1.1666667;position:absolute;top:0;width:100%}.c-result-example__group{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-left:0}@media (max-width:23.4275em){.c-result-example__group{margin-bottom:4px}}.c-result-example__separator{display:inline-block;font-weight:700;margin-right:4px}@media (max-width:47.99em){.c-result-example__separator{line-height:20px}}.c-tool-list__item{margin-bottom:16px}.c-tool-link-card{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;overflow:visible;padding:16px;width:100%}.c-tool-link-card:after{box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 2px #26226226}.c-tool-link-card--coming-soon{opacity:.5;pointer-events:none}.c-tool-link-card--authenticated-only:after{background-image:url(build/images/icons/16px/color/lock.d10139fe.svg)}.c-tool-link-card__icon{height:40px;margin-right:12px;width:40px}.c-tool-link-card__icon svg{height:40px;width:40px}.c-tool-link-card__body{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;font-weight:700}.c-tool-link-card__title{font-size:18px;font-size:1rem;line-height:1.2222222;text-decoration:none}.c-tool-link-card__desc{color:#0a0827cc;font-size:14px;font-size:.7777778rem;font-weight:400;line-height:1.4285714;margin-bottom:0}.c-tool-link-card--coming-soon .c-tool-link-card__desc{font-size:12px;font-size:.6666667rem;font-weight:700;letter-spacing:1px;line-height:1.3333333;margin-top:4px;text-transform:uppercase}.c-toggle-field{border-radius:8px;overflow:hidden;position:relative;width:100%}.c-toggle-field__slider{background-color:#2622621a;height:100%;left:0;position:absolute;top:0}.c-toggle-field .c-radio-group{display:-ms-flexbox;display:flex}.c-toggle-field .c-radio-field{border:1px solid #dfdee8;border-radius:0;color:#0a082780!important;cursor:pointer;font-size:14px;font-size:.7777778rem;font-weight:900;letter-spacing:1.25px;line-height:20px;padding:8px 0;position:relative;text-align:center;text-transform:uppercase;transition:color .3s ease-in-out;vertical-align:middle;width:100%;z-index:1}.c-toggle-field .c-radio-field:first-child{border-bottom-left-radius:8px;border-top-left-radius:8px}.c-toggle-field .c-radio-field:last-child{border-bottom-right-radius:8px;border-top-right-radius:8px}.c-toggle-field .c-radio-field.is-checked{border:1px solid #262262!important;color:#0a0827!important}.c-toggle-field .c-radio-field__input{clip:rect(0 0 0 0)!important;border:0!important;-webkit-clip-path:inset(50%)!important;clip-path:inset(50%)!important;height:1px!important;margin:-1px!important;overflow:hidden!important;padding:0!important;position:absolute!important;white-space:nowrap!important;width:1px!important}.c-user-acquisition-card{animation:fade-in .6s ease-in-out;border:1px solid #0a0827;margin:40px auto 52px;max-width:700px;position:-webkit-sticky;position:sticky;text-align:center;top:0}.c-user-acquisition-card__img{margin:0 auto 16px;max-width:200px;width:100px}@keyframes fade-in{0%{opacity:0}to{opacity:1}}.c-spotlight-card{-ms-flex-pack:end;background-color:#fff;border-radius:12px;color:#fff;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;justify-content:flex-end;min-height:300px;overflow:hidden;position:relative;width:100%}.c-spotlight-card--simple .c-spotlight-card__body{-ms-flex-pack:center;justify-content:center}.c-spotlight-card--cyan.c-spotlight-card--community{background-image:radial-gradient(farthest-side,#ffffff0d 99.9%,#fff0 100%),linear-gradient(to top right,#0e475e,#4eaac6)}.c-spotlight-card--cyan,.c-spotlight-card--cyan.c-spotlight-card--community{background-color:#4eaac6;background-position:right -340px top -300px,right 0 top;background-repeat:no-repeat;background-size:650px 650px,cover}.c-spotlight-card--cyan{background-image:radial-gradient(farthest-side,#ffffff0d 100%,#0000),linear-gradient(to top right,#0e475e,#4eaac6)}.c-spotlight-card--lucky.c-spotlight-card--green{background-color:#159e4c;background-image:url(build/images/backgrounds/lucky.2f4d8089.svg),radial-gradient(farthest-side,#ffffff0d 99.9%,#fff0 100%),linear-gradient(to top right,#008874,#159e4c);background-position:right 0 top 0,right -340px top -300px,right 0 top;background-repeat:no-repeat;background-size:auto,650px 650px,cover}.c-spotlight-card--green{background-color:#159e4c;background-image:radial-gradient(farthest-side,#ffffff0d 100%,#0000),linear-gradient(to top right,#008874,#159e4c)}.c-spotlight-card--blue,.c-spotlight-card--green{background-position:right -340px top -300px,right 0 top;background-repeat:no-repeat;background-size:650px 650px,cover}.c-spotlight-card--blue{background-color:#262262;background-image:radial-gradient(farthest-side,#ffffff0d 99.9%,#fff0 100%),linear-gradient(to top right,#6358ff,#262262)}.c-spotlight-card--orange{background-color:#fff;background-image:radial-gradient(farthest-side,#ffffff0d 99.9%,#fff0 100%),linear-gradient(to top right,#ff9e00,#fff);background-position:right -340px top -300px,right 0 top;background-repeat:no-repeat;background-size:650px 650px,cover;color:#0a0827}.c-spotlight-card--orange .c-spotlight-card__sub{color:#0a0827cc}.c-spotlight-card__media,.c-spotlight-card__rank{margin-bottom:auto;max-height:100px;width:160px}.c-spotlight-card__rank{-ms-flex-pack:center;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;height:100px;justify-content:center;width:235px}.c-spotlight-card__rank-icon{height:50px;margin-right:16px;width:50px}.c-spotlight-card__rank-info{-ms-flex-pack:center;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;justify-content:center}.c-spotlight-card__rank-title{font-size:14px;font-size:.7777778rem;font-weight:700;letter-spacing:1.25px;line-height:1.4285714;opacity:.8;text-transform:uppercase}.c-spotlight-card__rank-rank{font-weight:700;margin-bottom:0}.c-spotlight-card__body{-ms-flex-align:center;-ms-flex-item-align:center;-ms-flex-pack:end;align-items:center;align-self:center;display:-ms-flexbox;display:flex;-ms-flex:auto;flex:auto;-ms-flex-direction:column;flex-direction:column;justify-content:flex-end;padding:24px;text-align:center}.c-spotlight-card__title{font-size:24px;font-size:1.3333333rem;font-weight:700;line-height:1.3333333;margin-bottom:4px}.c-spotlight-card__sub{color:#fffc;font-size:14px;font-size:.7777778rem;line-height:1.4285714;margin-bottom:0}.c-spotlight-card__footer{-ms-flex-line-pack:center;-ms-flex-pack:justify;align-content:center;background-color:#0000001a;display:-ms-flexbox;display:flex;justify-content:space-between;padding:20px 24px;width:100%}.c-spotlight-card__cta{display:block;-ms-flex:1;flex:1;font-weight:500;text-decoration:none}.c-spotlight-card__cta:before{content:"";height:100%;left:0;position:absolute;top:0;width:100%}.c-user-account-menu{cursor:pointer;display:block;height:40px;margin:4px;position:relative;width:40px}@media (min-width:48em){.c-user-account-menu{height:48px;margin:4px 0;width:144px}}.c-user-account-menu__container{background-color:#fff;border:none;border-radius:8px;min-height:40px;min-width:40px;overflow:hidden;position:absolute;right:0;text-align:right;top:0;z-index:74}@media (min-width:48em){.c-user-account-menu__container{min-height:48px;min-width:144px}}.c-user-account-menu__button{background-color:initial;border:none;cursor:pointer;font-family:DM Sans,sans-serif;font-size:16px;font-size:.8888889rem;font-weight:500;left:0;line-height:1.25;min-width:200px;padding:4px;position:absolute;text-align:left}@media (min-width:48em){.c-user-account-menu__button{padding:8px 12px}}.c-user-account-menu__list{-webkit-overflow-scrolling:touch;-ms-overflow-style:none;display:block;display:none;list-style-type:none;margin:40px 0 0;min-width:100%;opacity:0;overflow:scroll;overflow:-moz-scrollbars-none;overscroll-behavior-y:contain;scrollbar-width:none;white-space:nowrap;width:200px;z-index:75}.c-user-account-menu__list::-webkit-scrollbar{display:none}@media (min-width:48em){.c-user-account-menu__list{margin-top:48px}}.c-user-account-menu__list-group{border-top:1px solid #dfdee8;padding-bottom:4px;padding-top:4px}.c-user-account-menu__list-button{-ms-flex-align:center;align-items:center;cursor:pointer;display:-ms-flexbox;display:flex;font-size:16px;font-size:.8888889rem;line-height:1.25;padding:12px 12px 12px 40px;text-decoration:none}.c-user-account-menu__list-button.has-icon{background-position:12px 14px;background-repeat:no-repeat;background-size:16px}.c-user-account-menu__list-button:hover{background-color:#f4f4f7}.c-user-account-menu__list-button img,.c-user-account-menu__list-button svg{margin-right:12px}.c-user-account-menu__list.is-hidden{display:none}.c-tools-acquisition-card{background-color:#262262;background-image:url(build/images/backgrounds/balls-default.179760b0.svg);color:#fff;text-align:center}.c-tools-acquisition-card__cta{margin-bottom:16px}@media (min-width:48em){.c-tools-acquisition-card__cta{-ms-flex-pack:center;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;justify-content:center}}.c-tools-acquisition-card__cta-text{color:#fff;font-size:24px;font-size:1.3333333rem;font-weight:700;line-height:1.1666667}@media (min-width:48em){.c-tools-acquisition-card__cta-text{margin-bottom:0;margin-right:16px}}.c-tools-acquisition-card__login-text{color:#0a0827cc;color:#fffc;font-size:14px;font-size:.7777778rem;font-weight:400;line-height:1.4285714}.c-accessible-select-field__button:focus{box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 2px #0a0827}.c-accessible-select-field__list-item{display:block}.c-accessible-select-field__list-item.is-focused:not(.is-default){border-radius:8px;box-shadow:0 2px 4px 0 #dfdee8,inset 0 0 0 2px #dfdee8}.c-accessible-select-field__list-item.is-default{cursor:default;opacity:.5}.c-user-promo-card{background-color:#fff;background-image:url(build/images/backgrounds/balls-pattern.9a59667e.svg);background-position:100% 100%;background-repeat:no-repeat;background-size:contain;border:1px solid #0a0827;border-radius:8px;box-shadow:0 2px 8px 0 #2622620d;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding:32px 24px 24px;position:relative;width:100%}.c-user-promo-card--split{background-image:url(build/images/backgrounds/balls-pattern.9a59667e.svg),linear-gradient(180deg,#a1cf6b0d,#a1cf6b0d)}.c-user-promo-card__media{margin-bottom:16px}.c-user-promo-card__logo{display:block}.c-user-promo-card__title{font-size:24px;font-size:1.3333333rem;line-height:1.3333333}.c-user-promo-card__sub{font-size:20px;font-size:1.1111111rem;line-height:1.2;margin-bottom:20px}.c-user-promo-card__reasons{list-style-type:none;margin:0 0 16px;padding:0}.c-user-promo-card__reasons li{background-image:url(build/images/logo-ball-dark.50800864.svg);background-position:0;background-repeat:no-repeat;background-size:24px 24px;color:#0a082799;font-size:16px;font-size:.8888889rem;line-height:1.5;margin-bottom:12px;padding-left:36px}.c-user-promo-card__reasons li:last-of-type{margin-bottom:0}.c-user-promo-card__cta{font-size:24px;font-size:1.3333333rem;line-height:1.1666667;text-transform:none}@media (min-width:73.125em){.c-user-promo-card--split .c-user-promo-card__reasons{-ms-flex-line-pack:center;align-content:center;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:4px 0}.c-user-promo-card--split .c-user-promo-card__reasons li{-ms-flex:50%;flex:50%}.c-user-promo-card--split .c-user-promo-card__reasons li:last-of-type{margin-bottom:12px}}.c-expanding-menu{cursor:pointer;display:block;height:40px;position:relative;width:40px}.c-expanding-menu__container{background-color:#fff;border:none;border-radius:8px;box-shadow:0 2px 4px 0 #0a08270d,inset 0 0 0 1px #dfdee8;min-height:40px;min-width:40px;overflow:hidden;position:absolute;right:0;text-align:right;top:0;z-index:74}.c-expanding-menu__button{background-color:initial;background-image:url(build/images/icons/16px/dark/export.728edb5e.svg);background-position:center left 12px;background-repeat:no-repeat;background-size:16px;border:0;cursor:pointer;font-family:DM Sans,sans-serif;font-size:16px;font-size:.8888889rem;font-weight:500;left:0;line-height:1.25;min-height:40px;padding:11px 12px 9px 36px;position:absolute;text-align:left;width:120px}.c-expanding-menu__button-label{opacity:0}.c-expanding-menu__list{-webkit-overflow-scrolling:touch;-ms-overflow-style:none;display:block;list-style-type:none;margin:40px 0 0;min-width:100%;overflow:scroll;overflow:-moz-scrollbars-none;overscroll-behavior-y:contain;padding:16px 12px;scrollbar-width:none;white-space:nowrap;width:120px;z-index:75}.c-expanding-menu__list::-webkit-scrollbar{display:none}.c-expanding-menu__list-item{margin-bottom:16px}.c-expanding-menu__list-item:last-child{margin-bottom:0}.c-expanding-menu__list-button{-ms-flex-align:center;align-items:center;background:none;background-repeat:no-repeat;background-size:16px;border:0;cursor:pointer;display:-ms-flexbox;display:flex;font-family:DM Sans,sans-serif;font-size:16px;font-size:.8888889rem;line-height:1;padding:0 0 0 24px;text-decoration:none}.c-expanding-menu__list-button img,.c-expanding-menu__list-button svg{margin-right:12px}.c-expanding-menu__list.is-hidden{display:none}.c-jackpots .c-select-field{width:100%}.c-jackpots__table{margin-top:8px}.c-jackpots__table,.c-jackpots__table-items{display:block;width:100%}.c-jackpots__table tr{margin-bottom:16px}.c-jackpots__state-dropdown-body{max-height:183px}@media (min-width:48em){.c-jackpots__state-dropdown-body{max-height:343px}}.c-jackpots__state-dropdown-footer{margin-top:0}.c-jackpot-tool__select-field{width:288px}@media (max-width:47.99em){.c-payment-schedule-tool__select-field{margin-bottom:8px}}.c-cash-converter-tool__number-field{display:inline-block;width:288px}@media (max-width:47.99em){.c-cash-converter-tool__number-field{margin-top:8px}.c-cash-converter-tool__select-field{margin-bottom:8px}}.c-jackpot-tax-tool .c-form-card__title{margin-bottom:0}.c-jackpot-tax-tool .c-form-card__calculated-values{margin-top:0}.c-jackpot-tax-tool .c-form-card__calculated-values--sm{font-size:16px;font-size:.8888889rem;line-height:1.25}.c-number-checker__result-header{margin-bottom:16px}.c-number-checker__result-header-text{font-size:21px;margin-bottom:8px}.c-number-checker__result-header .c-export-menu__button{height:40px;padding:12px;width:40px}.c-number-checker__result-actions{display:-ms-flexbox;display:flex;margin-bottom:16px}.c-number-checker__result-actions .c-number-checker__filter-toggle,.c-number-checker__result-actions .c-number-checker__sort-field{cursor:pointer;-ms-flex:1;flex:1;margin-right:8px}.c-number-checker__result-list{display:block;margin-bottom:24px;width:100%}.c-number-checker__result-items{display:block;margin:0;width:100%}.c-number-checker__result-item{margin-bottom:24px}.c-number-checker__result-item-header{background-color:#dfdee8;color:#0a082799;display:block;font-size:14px;font-size:.7777778rem;font-weight:700;letter-spacing:1.25px;line-height:1.4285714;margin-bottom:16px;padding-bottom:6px;padding-top:6px;text-transform:uppercase}.c-number-checker__result-item-header td,.c-number-checker__result-item-header th{display:block;padding:0;text-align:center}.c-number-checker__tr{-ms-flex-pack:justify;-ms-flex-align:center;align-items:center;border-top:1px solid #f4f4f7;display:-ms-flexbox;display:flex;justify-content:space-between;padding:16px 0 4px}.c-number-checker__filter-panel-section{border-bottom:1px solid #dfdee8;margin-bottom:16px;padding:16px}.c-number-checker__filter-panel .c-filter-sheet__footer .c-btn{width:100%}.c-number-checker__specific-date.is-hidden{display:none}.c-number-checker__pagination-end{display:-ms-flexbox;display:flex;width:100%}.c-number-checker__pagination-end td{-ms-flex:1;flex:1}.c-quick-picks__info-button-body-header{display:block;font-size:18px;font-weight:900;margin-bottom:16px;text-align:center}.c-quick-picks .c-info-button__tooltip a{border-bottom:1px solid #fff;color:#fff;font-weight:900;text-decoration:none}.c-quick-picks__lines .c-radio-field{min-width:39px}.c-quick-picks__pairs .c-checkbox-field{margin-bottom:8px}.c-quick-picks__pairs .c-checkbox-field:last-child{margin-bottom:0}.c-quick-picks__line{-ms-flex-pack:justify;-ms-flex-align:center;align-items:center;background:#fff;display:-ms-flexbox;display:flex;justify-content:space-between;margin-bottom:24px;padding:16px}.c-quick-picks__line:last-child{margin-bottom:16px}@media (max-width:23.4275em){.c-quick-picks__line{padding:16px 8px}}.c-quick-picks__line .c-ball{display:-ms-inline-flexbox;display:inline-flex;margin-right:4px}.c-quick-picks__line-copy{background-image:url(build/images/icons/16px/dark/copy.56d70f3c.svg);background-position:50%;background-repeat:no-repeat;background-size:16px;border:2px solid #dfdee8;height:32px;width:32px}.c-quick-picks__line-copy span{display:none}.c-quick-picks__result-header{-ms-flex-pack:justify;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;justify-content:space-between;margin-bottom:16px}.c-quick-picks__result-header-text{font-size:21px;margin-bottom:0}.c-hot-cold__distribution-grid{width:100%}@supports (display:grid){.c-hot-cold__distribution-grid{grid-column-gap:8px;grid-row-gap:8px;column-gap:8px;display:grid;grid-template-columns:repeat(auto-fit,minmax(40px,1fr));row-gap:8px}}.c-hot-cold__distribution-grid .c-ball{margin-bottom:8px;margin-right:8px}@supports (display:grid){.c-hot-cold__distribution-grid .c-ball{margin:0}}.c-hot-cold__distribution-table{width:calc(100% + 32px)}.c-hot-cold__distribution-table td:first-child,.c-hot-cold__distribution-table th:first-child{border-left:0!important;padding-left:32px}.c-hot-cold__distribution-table td:last-child,.c-hot-cold__distribution-table th:last-child{border-right:0!important;padding-right:32px}.c-hot-cold__distribution-table tr:last-child td{border-bottom:0;border-radius:0!important}@media (min-width:73.125em){.c-hot-cold__distribution-table{width:calc(100% + 24px)}.c-hot-cold__distribution-table td:first-child,.c-hot-cold__distribution-table th:first-child{padding-left:24px}.c-hot-cold__distribution-table td:last-child,.c-hot-cold__distribution-table th:last-child{padding-right:24px}}.c-drawn-together__overview-card-label{color:#0a0827cc;font-size:16px;font-size:.8888889rem;font-weight:400;line-height:1.5}.c-endings__analysis-ending-radio-field{width:40px}.c-sums .c-content-slide{margin-bottom:-200px;padding-bottom:200px}@media (max-width:47.99em){.c-even-odd .c-accordion-group__control{padding-left:0;padding-right:0}.c-even-odd .c-accordion-group__panel{padding-left:40px;padding-right:0}.c-even-odd .c-ball--xs,.c-even-odd .c-ball--xs .c-ball__label{font-size:10px;font-size:.5555556rem;height:20px;line-height:1.2;width:20px}}.c-even-odd__analysis-result-example{-ms-flex-pack:center;justify-content:center}@media (max-width:47.99em){.c-high-low .c-accordion-group__control{padding-left:0;padding-right:0}.c-high-low .c-accordion-group__panel{padding-left:40px;padding-right:0}.c-high-low .c-ball--xs,.c-high-low .c-ball--xs .c-ball__label{font-size:10px;font-size:.5555556rem;height:20px;line-height:1.2;width:20px}}.c-high-low__analysis-result-example{-ms-flex-pack:center;justify-content:center}.c-media-header{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;position:relative}.c-media-header__media{margin:0 8px 0 0}.c-media-header__logo{display:block;pointer-events:none}.c-media-header__body{display:-ms-flexbox;display:flex;-ms-flex:1;flex:1;-ms-flex-direction:column-reverse;flex-direction:column-reverse}.c-media-header__title{font-size:18px;font-size:1rem;font-weight:700;line-height:1.2222222;margin-bottom:0;padding-right:40px}.c-media-header__abbr{font-weight:400;text-transform:uppercase}.c-media-header__sub{font-size:14px;font-size:.7777778rem;font-weight:500;line-height:1.4285714;margin-bottom:1px}.c-media-header__btn{-ms-flex:none;flex:none;height:32px;width:32px}.c-definition{scroll-padding-top:70px}.c-definition__group{border-top:1px solid #dfdee8;display:-ms-flexbox;display:flex;padding:40px 0;position:relative}.c-definition__group:last-of-type{border-bottom:none}.c-definition__group-title{color:#0a0827cc;font-size:32px;font-size:1.7777778rem;font-weight:700;line-height:1.25;padding-right:32px}.c-definition dt{font-size:20px;font-size:1.1111111rem;font-weight:700;line-height:1.2;margin-bottom:8px}.c-definition dt[id]{scroll-margin-top:56px}@media (min-width:48em){.c-definition dt[id]{scroll-margin-top:72px}}.c-definition dd{color:#0a0827cc;margin:0 0 40px}.c-definition dd:last-of-type,.c-definition dd:last-of-type>:last-child{margin-bottom:0}.a-fade-group{position:relative;width:100%}.a-fade-item{display:none;opacity:0;position:absolute;top:0;width:100%}.a-fade-item.is-active{display:block;opacity:1;position:static}.t-display{font-size:42px;font-size:2.3333333rem;font-weight:700;line-height:1.1904762}.t-h1{font-size:36px;font-size:2rem;line-height:1.2222222}.t-h1,.t-h2{font-weight:700}.t-h2{font-size:32px;font-size:1.7777778rem;line-height:1.1875}.t-h3{font-size:28px;font-size:1.5555556rem;line-height:1.2142857}.t-h3,.t-h4{font-weight:700}.t-h4{font-size:24px;font-size:1.3333333rem;line-height:1.1666667}.t-h5{font-weight:700}.t-h5,.t-h6{font-size:21px;font-size:1.1666667rem;line-height:1.2380952}.t-h6{font-weight:400}.t-body-1{color:#0a0827cc}.t-body-1,.t-body-2{font-size:18px;font-size:1rem;font-weight:400;line-height:1.5555556}.t-bold-1{color:#0a0827cc}.t-bold-1,.t-bold-2{font-size:18px;font-size:1rem;font-weight:500;line-height:1.5555556}.t-body-small-1{color:#0a0827cc}.t-body-small-1,.t-body-small-2{font-size:16px;font-size:.8888889rem;font-weight:400;line-height:1.5}.t-bold-small-1{color:#0a0827cc}.t-bold-small-1,.t-bold-small-2{font-size:16px;font-size:.8888889rem;font-weight:500;line-height:1.5}.t-small-1{color:#0a0827cc}.t-small-1,.t-small-2{font-size:14px;font-size:.7777778rem;font-weight:400;line-height:1.4285714}.t-small-bold-1{color:#0a0827cc}.t-small-bold-1,.t-small-bold-2{font-weight:500}.t-button,.t-small-bold-1,.t-small-bold-2{font-size:14px;font-size:.7777778rem;line-height:1.4285714}.t-button{letter-spacing:1.25px}.t-button,.t-button-large{font-weight:700;text-transform:uppercase}.t-button-large{font-size:16px;font-size:.8888889rem;letter-spacing:1.5px;line-height:1.25}.t-overline{font-size:14px;font-size:.7777778rem;font-weight:700;letter-spacing:1.25px;line-height:1.4285714;text-transform:uppercase}.t-overline-small{font-weight:700;letter-spacing:1px;text-transform:uppercase}.t-overline-small,.t-sub-text{font-size:12px;font-size:.6666667rem;line-height:1.3333333}.t-sub-text{color:#0a0827cc}.t-lower{text-transform:lowercase}.t-center{text-align:center}.t-right{text-align:right}#fs-sticky-footer{z-index:150}.st-search-container{position:relative}.st-search-suggestions .st-spelling-suggestion-link{-ms-flex-align:start;align-items:flex-start;background-color:#fff;border-radius:8px;box-shadow:0 4px 8px 0 #0a08270d;color:#0a0827;display:-ms-flexbox;display:flex;font-family:DM Sans,sans-serif,serif;font-size:16px;font-size:.8888889rem;line-height:1.25;margin:0;position:relative;text-align:left}.st-ui-no-results .st-spelling-suggestion-link.st-ui-type-heading{background-image:none;color:#0a0827;font-weight:400;margin:0;padding:16px}.c-text-field__input-container .st-default-search-input,.c-text-field__input-container .st-ui-search-input{background:none;background-clip:padding-box;border:none;border-radius:6px;box-shadow:none;box-sizing:initial;color:#3b454f;display:inline-block;font-family:DM Sans,sans-serif,serif;font-weight:400;height:auto;padding:0;width:auto}.st-ui-injected-search-summary.st-search-summary{font-family:DM Sans,sans-serif,serif;padding:16px 0 24px}.st-autocomplete-results.st-ui-autocomplete a.st-ui-result.__swiftype_result{border:none;border-radius:0;box-shadow:0 0 1px 0 #26226280;font-size:16px;font-size:.8888889rem;line-height:1.25;margin-bottom:0;padding:16px 12px}@media (min-width:73.125em){.st-autocomplete-results.st-ui-autocomplete a.st-ui-result.__swiftype_result{padding:16px}}.st-autocomplete-results.st-ui-autocomplete a.st-ui-result.__swiftype_result .st-ui-type-heading{font-size:16px;font-size:.8888889rem;line-height:1.25;margin-bottom:4px;margin-right:8px}.st-autocomplete-results.st-ui-autocomplete a.st-ui-result.__swiftype_result .st-ui-type-detail{font-size:14px;font-size:.7777778rem;line-height:1.2857143}a.st-ui-result.__swiftype_result{background-color:#fff;border:1px solid #dfdee8;border-radius:6px;box-shadow:0 2px 8px 0 #2622620d;margin-bottom:8px;padding:16px}a.st-ui-result.__swiftype_result:last-of-type{border-bottom:1px solid #dfdee8}@media (min-width:73.125em){a.st-ui-result.__swiftype_result{margin-bottom:16px;padding:24px}}a.st-ui-result.__swiftype_result:hover{border:1px solid #262262;box-shadow:0 2px 8px 0 #26226226}a.st-ui-result.__swiftype_result .st-ui-type-heading{color:#0a0827;font-family:DM Sans,sans-serif,serif;font-size:16px;font-size:.8888889rem;font-weight:700;line-height:1.25;margin-bottom:4px}@media (min-width:73.125em){a.st-ui-result.__swiftype_result .st-ui-type-heading{font-size:18px;font-size:1rem;line-height:1.2222222;margin-bottom:8px}}a.st-ui-result.__swiftype_result .st-ui-type-detail,a.st-ui-result.__swiftype_result .st-ui-type-heading{margin-right:24px}@media (min-width:73.125em){a.st-ui-result.__swiftype_result .st-ui-type-detail,a.st-ui-result.__swiftype_result .st-ui-type-heading{margin-right:32px}}a.st-ui-result.__swiftype_result .st-ui-type-detail,a.st-ui-result.__swiftype_result .st-ui-type-detail-bold{color:#0a082780;font-family:DM Sans,sans-serif,serif;font-size:14px;font-size:.7777778rem;line-height:1.4285714;max-height:40px}a.st-ui-result.__swiftype_result:before{border-color:#0a082780;border-style:solid;border-width:1px 1px 0 0;content:"";display:block;height:8px;margin-top:-4px;position:absolute;right:16px;top:50%;transform:rotate(45deg);width:8px}@media (min-width:73.125em){a.st-ui-result.__swiftype_result:before{height:12px;margin-top:-6px;right:24px;top:50%;width:12px}}a.st-ui-result.__swiftype_result:hover:before{border-color:#262262}.st-ui-pagination.st-search-pagination .st-query-present{-ms-flex-pack:center;display:-ms-flexbox;display:flex;justify-content:center;padding:24px 0;width:100%}.st-ui-pagination-link.st-result-pagination-link,.st-ui-pagination-link.st-ui-pagination-number-link{text-decoration:none}.st-ui-pagination-link.st-ui-pagination-number-link.st-result-pagination-link{-ms-flex-align:center;-ms-flex-pack:center;align-items:center;border-radius:100%;color:#0a0827;display:-ms-flexbox;display:flex;height:32px;justify-content:center;margin-right:8px;padding:8px;text-align:center;width:32px}.st-ui-pagination-link.st-ui-pagination-number-link.st-result-pagination-link.active{background-color:#008874;color:#fff}.u-padding{padding:16px!important}.u-padding-tiny{padding:4px!important}.u-padding-small{padding:8px!important}.u-padding-large{padding:24px!important}.u-padding-huge{padding:32px!important}.u-padding-none{padding:0!important}.u-padding-top{padding-top:16px!important}.u-padding-top-tiny{padding-top:4px!important}.u-padding-top-small{padding-top:8px!important}.u-padding-top-large{padding-top:24px!important}.u-padding-top-huge{padding-top:32px!important}.u-padding-top-none{padding-top:0!important}.u-padding-right{padding-right:16px!important}.u-padding-right-tiny{padding-right:4px!important}.u-padding-right-small{padding-right:8px!important}.u-padding-right-large{padding-right:24px!important}.u-padding-right-huge{padding-right:32px!important}.u-padding-right-none{padding-right:0!important}.u-padding-bottom{padding-bottom:16px!important}.u-padding-bottom-tiny{padding-bottom:4px!important}.u-padding-bottom-small{padding-bottom:8px!important}.u-padding-bottom-large{padding-bottom:24px!important}.u-padding-bottom-huge{padding-bottom:32px!important}.u-padding-bottom-none{padding-bottom:0!important}.u-padding-left{padding-left:16px!important}.u-padding-left-tiny{padding-left:4px!important}.u-padding-left-small{padding-left:8px!important}.u-padding-left-large{padding-left:24px!important}.u-padding-left-huge{padding-left:32px!important}.u-padding-left-none{padding-left:0!important}.u-padding-horizontal{padding-left:16px!important;padding-right:16px!important}.u-padding-horizontal-tiny{padding-left:4px!important;padding-right:4px!important}.u-padding-horizontal-small{padding-left:8px!important;padding-right:8px!important}.u-padding-horizontal-large{padding-left:24px!important;padding-right:24px!important}.u-padding-horizontal-huge{padding-left:32px!important;padding-right:32px!important}.u-padding-horizontal-none{padding-left:0!important;padding-right:0!important}.u-padding-vertical{padding-bottom:16px!important;padding-top:16px!important}.u-padding-vertical-tiny{padding-bottom:4px!important;padding-top:4px!important}.u-padding-vertical-small{padding-bottom:8px!important;padding-top:8px!important}.u-padding-vertical-large{padding-bottom:24px!important;padding-top:24px!important}.u-padding-vertical-huge{padding-bottom:32px!important;padding-top:32px!important}.u-padding-vertical-none{padding-bottom:0!important;padding-top:0!important}.u-margin{margin:16px!important}.u-margin-tiny{margin:4px!important}.u-margin-small{margin:8px!important}.u-margin-large{margin:24px!important}.u-margin-huge{margin:32px!important}.u-margin-none{margin:0!important}.u-margin-top{margin-top:16px!important}.u-margin-top-tiny{margin-top:4px!important}.u-margin-top-small{margin-top:8px!important}.u-margin-top-large{margin-top:24px!important}.u-margin-top-huge{margin-top:32px!important}.u-margin-top-none{margin-top:0!important}.u-margin-right{margin-right:16px!important}.u-margin-right-tiny{margin-right:4px!important}.u-margin-right-small{margin-right:8px!important}.u-margin-right-large{margin-right:24px!important}.u-margin-right-huge{margin-right:32px!important}.u-margin-right-none{margin-right:0!important}.u-margin-bottom{margin-bottom:16px!important}.u-margin-bottom-tiny{margin-bottom:4px!important}.u-margin-bottom-small{margin-bottom:8px!important}.u-margin-bottom-large{margin-bottom:24px!important}.u-margin-bottom-huge{margin-bottom:32px!important}.u-margin-bottom-none{margin-bottom:0!important}.u-margin-left{margin-left:16px!important}.u-margin-left-tiny{margin-left:4px!important}.u-margin-left-small{margin-left:8px!important}.u-margin-left-large{margin-left:24px!important}.u-margin-left-huge{margin-left:32px!important}.u-margin-left-none{margin-left:0!important}.u-margin-horizontal{margin-left:16px!important;margin-right:16px!important}.u-margin-horizontal-tiny{margin-left:4px!important;margin-right:4px!important}.u-margin-horizontal-small{margin-left:8px!important;margin-right:8px!important}.u-margin-horizontal-large{margin-left:24px!important;margin-right:24px!important}.u-margin-horizontal-huge{margin-left:32px!important;margin-right:32px!important}.u-margin-horizontal-none{margin-left:0!important;margin-right:0!important}.u-margin-vertical{margin-bottom:16px!important;margin-top:16px!important}.u-margin-vertical-tiny{margin-bottom:4px!important;margin-top:4px!important}.u-margin-vertical-small{margin-bottom:8px!important;margin-top:8px!important}.u-margin-vertical-large{margin-bottom:24px!important;margin-top:24px!important}.u-margin-vertical-huge{margin-bottom:32px!important;margin-top:32px!important}.u-margin-vertical-none{margin-bottom:0!important;margin-top:0!important}.u-flow-10-to-14{margin-bottom:40px}@media (min-width:73.125em){.u-flow-10-to-14{margin-bottom:56px}}.u-flow-11-to-8{margin-bottom:44px}@media (min-width:73.125em){.u-flow-11-to-8{margin-bottom:32px}}.u-flow-11-to-6{margin-bottom:44px}@media (min-width:73.125em){.u-flow-11-to-6{margin-bottom:24px}}.u-flow-8-to-15{margin-bottom:32px}@media (min-width:73.125em){.u-flow-8-to-15{margin-bottom:60px}}.u-flow-10-to-15{margin-bottom:40px}@media (min-width:73.125em){.u-flow-10-to-15{margin-bottom:60px}}.u-list-plain{list-style:none}.u-responsive-table{margin-bottom:16px;overflow:auto}.u-responsive-table table{box-shadow:none;margin-bottom:0}.u-responsive-table--full{left:50%;margin-left:-50vw;margin-right:-50vw;position:relative;right:50%;width:100vw}@media (min-width:73.125em){.u-responsive-table--full{left:auto;margin-left:auto;margin-right:auto;right:auto;width:100%}.u-responsive-table{margin-bottom:32px}}.u-bg-white{background-color:#fff}.u-pointer-events--none{pointer-events:none}.u-pointer-events--auto{pointer-events:auto}.u-container-games .o-adaptive-container__pad-item{padding-left:0}@media print{*,:after,:before{background:#0000!important;color:#000!important;text-shadow:none!important}a,a:visited{text-decoration:underline}a[href^="#"]:after,a[href^="javascript:"]:after{content:""}blockquote,pre{border:1px solid #999;break-inside:avoid;page-break-inside:avoid}table{break-inside:auto;page-break-inside:auto}thead{display:table-header-group}img,tr{break-after:auto;break-before:auto;break-inside:avoid;page-break-after:auto;page-break-before:auto;page-break-inside:avoid}img{max-width:100%!important}h2,h3,p{orphans:3;widows:3}h2,h3{break-after:avoid;page-break-after:avoid}.u-print-none{display:none!important}.o-layout{display:block}.c-bottom-bar,.c-breadcrumbs,.c-copy-to-clipboard,.c-daily-games-table .c-dropdown,.c-daily-games-table__highlight,.c-export-menu,.c-filter-bar,.c-footer-navigation,.c-form-reset-button,.c-global-footer,.c-global-header__control,.c-global-nav,.c-info-button,.c-loader,.c-navbar,.c-number-checker__result-actions,.c-number-checker__result-item-header,.c-pagination__counter,.c-pagination__end,.c-pagination__load-more-button,.c-prize-sheet,.c-region-menu,.c-result-card__prize-btn,.c-results-table__item-header,.c-tool-list,.c-tool__breadcrumb,.c-tool__title,.c-user-account-menu{display:none!important}}.u-hidden-visually{clip:rect(0 0 0 0)!important;border:0!important;-webkit-clip-path:inset(50%)!important;clip-path:inset(50%)!important;height:1px!important;margin:-1px!important;overflow:hidden!important;padding:0!important;position:absolute!important;white-space:nowrap!important;width:1px!important}.u-hidden{display:none!important}
            </style>
       
          
 

</div>
<footer class="c-global-footer " role="contentinfo">
    <div class="o-container o-container--sm">
                    <h2 class="u-hidden-visually">Useful Links</h2>

        
                                <ul class="o-layout c-global-footer__link-block-list">
                                    <li class="o-layout__col o-layout__col--12 o-layout__col--6@md o-layout__col--3@lg">
                        <div class="c-global-footer__link-block">
                            <a href="faqs/index.html" class="c-global-footer__link-block-link" title="FAQs">FAQs</a>
                            <span class="c-global-footer__link-block-desc">Frequently asked questions</span>
                        </div>
                    </li>
                                    <li class="o-layout__col o-layout__col--12 o-layout__col--6@md o-layout__col--3@lg">
                        <div class="c-global-footer__link-block">
                            <a href="jackpots/index.html" class="c-global-footer__link-block-link" title="Jackpots">Jackpots</a>
                            <span class="c-global-footer__link-block-desc">Top lottery jackpots</span>
                        </div>
                    </li>
                                    <li class="o-layout__col o-layout__col--12 o-layout__col--6@md o-layout__col--3@lg">
                        <div class="c-global-footer__link-block">
                            <a href="daily-games/index.html" class="c-global-footer__link-block-link" title="Daily Games">Daily Games</a>
                            <span class="c-global-footer__link-block-desc">Numbers for daily games</span>
                        </div>
                    </li>
                                    <li class="o-layout__col o-layout__col--12 o-layout__col--6@md o-layout__col--3@lg">
                        <div class="c-global-footer__link-block">
                            <a href="live-draws/index.html" class="c-global-footer__link-block-link" title="Live Draws">Live Draws</a>
                            <span class="c-global-footer__link-block-desc">Live lottery numbers</span>
                        </div>
                    </li>
                                    <li class="o-layout__col o-layout__col--12 o-layout__col--6@md o-layout__col--3@lg">
                        <div class="c-global-footer__link-block">
                            <a href="whereto/index.html" class="c-global-footer__link-block-link" title="Where to Play">Where to Play</a>
                            <span class="c-global-footer__link-block-desc">Multi-state game participants</span>
                        </div>
                    </li>
                                    <li class="o-layout__col o-layout__col--12 o-layout__col--6@md o-layout__col--3@lg">
                        <div class="c-global-footer__link-block">
                            <a href="lottery-predictions/index.html" class="c-global-footer__link-block-link" title="Lottery Numerology Predictions">Lottery Numerology Predictions</a>
                            <span class="c-global-footer__link-block-desc">Weekly lottery predictions</span>
                        </div>
                    </li>
                                    <li class="o-layout__col o-layout__col--12 o-layout__col--6@md o-layout__col--3@lg">
                        <div class="c-global-footer__link-block">
                            <a href="search/index.html" class="c-global-footer__link-block-link" title="Search International Lottery ">Search</a>
                            <span class="c-global-footer__link-block-desc">Search International Lottery </span>
                        </div>
                    </li>
                                    <li class="o-layout__col o-layout__col--12 o-layout__col--6@md o-layout__col--3@lg">
                        <div class="c-global-footer__link-block">
                            <a href="odds/index.html" class="c-global-footer__link-block-link" title="Lottery Game Odds">Lottery Game Odds</a>
                            <span class="c-global-footer__link-block-desc">Odds of winning lottery games</span>
                        </div>
                    </li>
                            </ul>
        
                    <ul class="c-global-footer__link-bar">
                                    <li class="c-global-footer__link-bar-item">
                        <a href="about-us/index.html" class="c-global-footer__link-bar-link">About Us</a>
                    </li>
                                    <li class="c-global-footer__link-bar-item">
                        <a href="scams/index.html" class="c-global-footer__link-bar-link">Scams</a>
                    </li>
                                    <li class="c-global-footer__link-bar-item">
                        <a href="play-responsibly/index.html" class="c-global-footer__link-bar-link">Play Responsibly</a>
                    </li>
                                    <li class="c-global-footer__link-bar-item">
                        <a href="glossary/index.html" class="c-global-footer__link-bar-link">Glossary</a>
                    </li>
                                    <li class="c-global-footer__link-bar-item">
                        <a href="terms/index.html" class="c-global-footer__link-bar-link">Terms</a>
                    </li>
                                    <li class="c-global-footer__link-bar-item">
                        <a href="privacy-policy/index.html" class="c-global-footer__link-bar-link">Privacy Policy</a>
                    </li>
                                    <li class="c-global-footer__link-bar-item">
                        <a href="cookies/index.html" class="c-global-footer__link-bar-link">Cookies</a>
                    </li>
                                    <li class="c-global-footer__link-bar-item">
                        <a href="copyright-policy/index.html" class="c-global-footer__link-bar-link">Copyright Policy</a>
                    </li>
                                    <li class="c-global-footer__link-bar-item c-global-footer__link-bar-item--last-text">
                        <a href="contact-us/index.html" class="c-global-footer__link-bar-link">Contact Us</a>
                    </li>
                            </ul>
        <ul class="c-global-footer__link-bar c-global-footer__link-bar--social">
                <li class="c-global-footer__link-bar-item c-global-footer__link-bar-item--social-icon">
                    <a href="javascript:void(0)" target="_blank" title="International Lottery 's Facebook" rel="noopener noreferrer">
                        <span class="u-hidden-visually">International Lottery 's Facebook</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"><g><path fill="#FFFFFF" d="M64,32.2C64,14.41,49.67,0,32,0S0,14.41,0,32.2C0,48.27,11.7,61.58,27,64V41.5h-8.12V32.2H27V25.1
        c0-8.07,4.78-12.53,12.09-12.53c3.5,0,7.16,0.63,7.16,0.63v7.92h-4.04c-3.98,0-5.21,2.48-5.21,5.03v6.04h8.88l-1.42,9.31H37V64
        C52.3,61.58,64,48.27,64,32.2z"></path></g></svg>                    </a>
                </li>
                <li class="c-global-footer__link-bar-item c-global-footer__link-bar-item--social-icon">
                    <a href="javascript:void(0);" target="_blank" title="International Lottery 's Instagram" rel="noopener noreferrer">
                        <span class="u-hidden-visually">International Lottery 's Instagram</span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"><g><path fill="#FFFFFF" d="M32,5.77c8.54,0,9.56,0.03,12.93,0.19c3.12,0.14,4.81,0.66,5.94,1.1c1.49,0.58,2.56,1.27,3.68,2.39
        c1.12,1.12,1.81,2.19,2.39,3.68c0.44,1.13,0.96,2.82,1.1,5.94c0.15,3.37,0.19,4.39,0.19,12.93s-0.03,9.56-0.19,12.93
        c-0.14,3.12-0.66,4.81-1.1,5.94c-0.58,1.49-1.27,2.56-2.39,3.68c-1.12,1.12-2.19,1.81-3.68,2.39c-1.13,0.44-2.82,0.96-5.94,1.1
        c-3.37,0.15-4.39,0.19-12.93,0.19s-9.56-0.03-12.93-0.19c-3.12-0.14-4.81-0.66-5.94-1.1c-1.49-0.58-2.56-1.27-3.68-2.39
        c-1.12-1.12-1.81-2.19-2.39-3.68c-0.44-1.13-0.96-2.82-1.1-5.94C5.8,41.56,5.77,40.54,5.77,32s0.03-9.56,0.19-12.93
        c0.14-3.12,0.66-4.81,1.1-5.94c0.58-1.49,1.27-2.56,2.39-3.68c1.12-1.12,2.19-1.81,3.68-2.39c1.13-0.44,2.82-0.96,5.94-1.1
        C22.44,5.8,23.46,5.77,32,5.77 M32,0c-8.69,0-9.78,0.04-13.19,0.19c-3.41,0.16-5.73,0.7-7.77,1.49C8.93,2.5,7.15,3.59,5.37,5.37
        C3.59,7.15,2.5,8.93,1.68,11.04c-0.79,2.04-1.33,4.36-1.49,7.77C0.04,22.22,0,23.31,0,32c0,8.69,0.04,9.78,0.19,13.19
        c0.16,3.41,0.7,5.73,1.49,7.77c0.82,2.1,1.91,3.89,3.69,5.67c1.78,1.78,3.56,2.87,5.67,3.69c2.04,0.79,4.36,1.33,7.77,1.49
        C22.22,63.96,23.31,64,32,64s9.78-0.04,13.19-0.19c3.41-0.16,5.73-0.7,7.77-1.49c2.1-0.82,3.89-1.91,5.67-3.69
        c1.78-1.78,2.87-3.56,3.69-5.67c0.79-2.04,1.33-4.36,1.49-7.77C63.96,41.78,64,40.69,64,32s-0.04-9.78-0.19-13.19
        c-0.16-3.41-0.7-5.73-1.49-7.77c-0.82-2.1-1.91-3.89-3.69-5.67c-1.78-1.78-3.56-2.87-5.67-3.69c-2.04-0.79-4.36-1.33-7.77-1.49
        C41.78,0.04,40.69,0,32,0L32,0z"></path><path fill="#FFFFFF" d="M32,15.57c-9.08,0-16.43,7.36-16.43,16.43c0,9.08,7.36,16.43,16.43,16.43S48.43,41.08,48.43,32
        C48.43,22.92,41.08,15.57,32,15.57z M32,42.67c-5.89,0-10.67-4.78-10.67-10.67c0-5.89,4.78-10.67,10.67-10.67
        c5.89,0,10.67,4.78,10.67,10.67C42.67,37.89,37.89,42.67,32,42.67z"></path><circle fill="#FFFFFF" cx="49.08" cy="14.92" r="3.84"></circle></g></svg>                    </a>
                </li>
                <li class="c-global-footer__link-bar-item c-global-footer__link-bar-item--social-icon">
                    <a href="javascript:void(0);" target="_blank" title="International Lottery 's YouTube" rel="noopener noreferrer">
                        <span class="u-hidden-visually">International Lottery 's YouTube</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"><path fill="#FFFFFF" d="M61.11,17.49c-0.69-2.6-2.72-4.64-5.3-5.34c-4.68-1.26-23.44-1.26-23.44-1.26s-18.76,0-23.44,1.26
    c-2.58,0.69-4.61,2.74-5.3,5.34C2.36,22.2,2.36,32.03,2.36,32.03s0,9.83,1.25,14.54c0.69,2.6,2.72,4.64,5.3,5.34
    c4.68,1.26,23.44,1.26,23.44,1.26s18.76,0,23.44-1.26c2.58-0.69,4.61-2.74,5.3-5.34c1.25-4.71,1.25-14.54,1.25-14.54
    S62.36,22.2,61.11,17.49z M26.23,40.95V23.11l15.68,8.92L26.23,40.95z"></path></svg>                    </a>
                </li>
        </ul>
        

        <div class="o-layout o-layout--flush o-layout--stretch">
            <div class="o-layout__col o-layout__col--auto o-layout__col--8@lg">
                <ul class="c-global-footer__badges">
                    <li class="c-global-footer__badges__item">
                        <svg x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><path fill="#FFFFFF" fill-opacity="0.2" d="M40.6,16.5c-2.8,0-5.4-1.2-7.2-3.4c-1.8-2.1-2.5-5-2-7.7c-8.7-3.6-18.8-0.5-24,7.4
    s-4.2,18.3,2.5,25s17.1,7.7,25,2.5s11-15.3,7.4-24C41.7,16.5,41.1,16.5,40.6,16.5z"></path><path fill="#FFFFFF" d="M19.2,32.7V15.3h-2L13,17.2v2.4l2.9-0.7v13.8H19.2z M27.7,33c1.2,0,2.2-0.2,3.2-0.6c1-0.4,1.7-1,2.3-1.8
    c0.6-0.8,0.8-1.7,0.8-2.7c0-1.1-0.3-2-0.8-2.8s-1.3-1.4-2.2-1.7c0.8-0.3,1.4-0.8,1.9-1.5c0.5-0.7,0.7-1.4,0.7-2.2
    c0-0.8-0.2-1.6-0.7-2.3s-1.1-1.3-2-1.7c-0.9-0.4-2-0.6-3.3-0.6s-2.4,0.2-3.3,0.6s-1.6,1-2,1.7s-0.7,1.5-0.7,2.3
    c0,0.8,0.2,1.5,0.7,2.2c0.5,0.7,1.1,1.2,1.9,1.5c-0.9,0.3-1.6,0.9-2.2,1.7c-0.6,0.8-0.8,1.7-0.8,2.8c0,1,0.3,1.9,0.9,2.7
    c0.6,0.8,1.3,1.4,2.3,1.8C25.4,32.8,26.5,33,27.7,33z M27.7,22.4c-0.9,0-1.6-0.2-2.1-0.7c-0.5-0.4-0.7-1-0.7-1.7
    c0-0.8,0.2-1.4,0.7-1.8s1.2-0.6,2.1-0.6c0.9,0,1.6,0.2,2.1,0.6s0.7,1,0.7,1.8c0,0.7-0.2,1.3-0.7,1.7C29.2,22.2,28.5,22.4,27.7,22.4z
     M27.7,30.3c-1.1,0-1.9-0.3-2.4-0.8c-0.6-0.5-0.8-1.2-0.8-2c0-0.9,0.3-1.6,0.9-2.1s1.4-0.7,2.4-0.7s1.8,0.2,2.4,0.7s0.9,1.2,0.9,2.1
    c0,0.8-0.3,1.5-0.8,2C29.5,30.1,28.7,30.3,27.7,30.3z"></path><path fill="#FFFFFF" fill-opacity="0.2" d="M40.7,0c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3S48,11.3,48,7.3c0-1.9-0.8-3.8-2.1-5.2
    S42.6,0,40.7,0L40.7,0z"></path><polygon fill="#FFFFFF" points="44.9,8.3 41.7,8.3 41.7,11.5 39.7,11.5 39.7,8.3 36.5,8.3 36.5,6.3 39.7,6.3 39.7,3.1 41.7,3.1 
    41.7,6.3 44.9,6.3 "></polygon><path fill="#FFFFFF" fill-opacity="0.2" d="M44.4,16c3.8,9.7,0.4,20.7-8.3,26.4s-20.2,4.5-27.6-2.8S-0.1,20.7,5.6,12
    S22.4-0.2,32.1,3.6c0.3-0.7,0.6-1.3,1.1-1.8C22.5-2.5,10.4,1.2,4,10.7S-1,32.9,7,41s20.7,9.3,30.3,3s13.2-18.5,8.9-29.1
    C45.6,15.3,45,15.7,44.4,16z"></path></svg>                    </li>
                    <li class="c-global-footer__badges__item">
                        <svg x="0px" y="0px" width="43.7px" height="48px" viewBox="0 0 43.7 48" enable-background="new 0 0 43.7 48" xml:space="preserve"><path fill="#0175C2" d="M17.3,21.4c-0.2,0-0.3-0.1-0.5-0.1c-3.7-1.7-6-4.6-6.5-8.7C9.8,8.3,11.2,4.7,14.7,2c1.2-0.9,2.7-1.5,4.2-1.7
    c5-0.9,9.6,0.1,13.6,3.3c2.6,2.1,4.5,4.9,5.4,8c0,0.1,0,0.1,0,0.2c-0.1-0.1-0.1-0.2-0.2-0.3c-2-2.9-4.7-4.9-8.2-5.5
    c-4.1-0.7-7.7,0.4-10.8,3.3c-1.3,1.2-2.2,2.6-2.9,4.2c-1.1,2.7-0.7,5.2,1.2,7.5C17.1,21.2,17.2,21.3,17.3,21.4L17.3,21.4z"></path><path fill="#01577B" d="M20.2,9.6c0.5-0.4,0.9-0.7,1.4-1C25.9,6,31.3,6.6,34.9,10c1.9,1.7,3.1,3.9,3.6,6.4c0.2,1.6,0.1,3.2-0.4,4.7
    c-1.4,4.3-4,7.6-8,9.7c-3.6,1.9-7.8,2.4-11.8,1.4c0.8-0.1,1.5-0.2,2.3-0.3c6.7-1.2,11.1-7.6,9.8-14.3C30,16,29.4,14.4,28.5,13
    c-0.6-1-1.3-1.8-2.2-2.4c-1.6-1.2-3.7-1.6-5.7-1.1C20.5,9.5,20.3,9.6,20.2,9.6L20.2,9.6z"></path><path fill="#01B0F4" d="M29.2,18.1c0.5,3.6-0.4,6.7-2.9,9.4c-1.7,1.8-4,3-6.5,3.4c-2.9,0.4-5.6-0.1-8-1.9C10.2,27.7,8.9,26,8,24.2
    c-1-1.8-1.6-3.8-1.9-5.8c-0.4-3,0.1-6.1,1.4-8.9c0.7-1.4,1.5-2.8,2.6-4c0.1-0.1,0.2-0.1,0.2-0.2C10.2,5.8,10,6.3,9.8,6.7
    c-1.6,4.7-0.9,9,2.5,12.7c1.9,2.1,4.5,3.5,7.3,3.9c1.5,0.3,3.1,0.2,4.6-0.2c2.3-0.6,4.1-2.4,4.8-4.6C29.1,18.3,29.2,18.2,29.2,18.1z
    "></path><path fill="#01577B" d="M2.4,39.1c0,0.4-0.1,0.8-0.1,1.1c0,1.7,0,3.4,0,5.1c0,0.5,0.1,0.9,0.2,1.4c0,0.3,0.3,0.6,0.6,0.6L4,47.4v0.4
    H0.3v-0.4c0.3,0,0.5-0.1,0.8-0.1c0.3,0,0.5-0.2,0.5-0.5c0.1-0.8,0.1-1.7,0.2-2.5c0-1.7,0-3.4,0-5.2c0-0.1,0-0.2,0-0.3
    c0.1-0.7-0.4-1.3-1.1-1.3c0,0,0,0,0,0c-0.2,0-0.3,0-0.5-0.1V37h2.6c2,3,4.6,5.5,6.9,8.2h0.1c0-0.2,0-0.4,0-0.6c0-1.7,0-3.5,0-5.2
    c0-0.4-0.1-0.9-0.2-1.3c0-0.3-0.3-0.6-0.6-0.6L8,37.4L8,37h3.7v0.4c-0.3,0.1-0.5,0.1-0.7,0.2c-0.3,0-0.5,0.3-0.5,0.5
    c0,0.8-0.1,1.5-0.2,2.3c0,2.2,0,4.4,0,6.6c0,0.2,0,0.4,0,0.6c0,0.2,0,0.3-0.3,0.3L2.4,39.1z"></path><path fill="#01577B" d="M42.6,37.2c0.1,0.8,0.2,1.6,0.3,2.4l-0.4,0.1c-0.1-0.1-0.1-0.3-0.1-0.4c-0.3-1-1.1-1.7-2.1-1.9
    c-1-0.2-1.9-0.1-2.9,0.2c-1.4,0.5-2.4,1.8-2.6,3.3c-0.2,1.4,0,2.9,0.6,4.1c0.7,1.4,2.1,2.3,3.6,2.3c0.5,0,1.1,0,1.6-0.1
    c0.6-0.1,0.8-0.4,0.9-1c0-0.5,0-1.1,0-1.6c0-0.6-0.2-0.8-0.8-0.8l-1-0.1l-0.1-0.4h4.2v0.4c-0.1,0-0.3,0-0.4,0.1
    c-0.3,0.1-0.5,0.2-0.5,0.5c0,0.8,0,1.6,0,2.4c0,0.2,0.2,0.4,0.3,0.6c-0.6,0.1-1.1,0.3-1.6,0.4c-1.5,0.4-3.2,0.3-4.7-0.1
    c-1.8-0.6-3.2-1.8-3.7-3.7C32.3,41,34,38,36.9,37.2c0.1,0,0.2,0,0.2-0.1c1.6-0.4,3.2-0.4,4.8,0C42.2,37.2,42.4,37.2,42.6,37.2z"></path><path fill="#01577B" d="M24.1,47.8v-0.4l0.6-0.1c0.4,0,0.6-0.3,0.6-0.7c0-0.2,0.1-0.5,0.1-0.7c0-2.4,0-4.8,0-7.3c0-0.1,0-0.1,0-0.2
    c-0.1-0.6-0.2-0.8-0.8-0.8c-0.2,0-0.3,0-0.5-0.1v-0.4c0.2,0,0.5-0.1,0.7-0.1c1.4-0.1,2.7-0.1,4.1,0c1,0.1,1.8,0.5,2.4,1.3
    c0.9,1.3,0.6,3.2-0.8,4.1c-0.1,0.1-0.3,0.2-0.4,0.2c-0.7,0.3-1.4,0.5-2.2,0.5c0,0-0.1-0.1-0.1-0.2c0-0.1,0-0.1,0-0.2
    c0.9-0.2,1.8-0.6,2.2-1.6c0.3-0.8,0.3-1.6,0-2.4c-0.6-1.2-1.9-1.7-3.2-1.3c0,0.1-0.1,0.3-0.1,0.4c0,2.7,0,5.3,0,8c0,0,0,0,0,0
    c0,0.9,0.2,1.1,1.1,1.2l0.4,0v0.4L24.1,47.8z"></path><path fill="#01577B" d="M22.6,37.3l0.2,2.4l-0.4,0.1c0-0.1-0.1-0.2-0.1-0.3c-0.2-1-1-1.7-2-2c-0.7-0.2-1.4-0.2-2.1-0.1
    c-2.2,0.3-3.5,1.9-3.7,4.1c-0.2,1.3,0.1,2.6,0.6,3.7c1,1.8,3.2,2.7,5.2,2.2c0.9-0.2,1.6-0.8,2-1.6c0.1-0.2,0.2-0.4,0.3-0.6h0.4
    c-0.1,0.8-0.3,1.6-0.7,2.3c-1.9,0.7-3.9,0.8-5.8,0.2c-2.1-0.6-3.5-2.5-3.6-4.6c-0.1-2.5,1.1-4.5,3.2-5.5c1.3-0.6,2.7-0.8,4.2-0.6
    C21.1,37,21.9,37.1,22.6,37.3z"></path><path fill="#0175C2" d="M17.3,21.4L17.3,21.4L17.3,21.4L17.3,21.4L17.3,21.4z"></path><path fill="#78797C" d="M20.2,9.6C20.2,9.6,20.2,9.6,20.2,9.6L20.2,9.6z"></path><polygon fill="#01B0F4" points="10.5,5.2 10.4,5.2 10.5,5.2 "></polygon></svg>                    </li>

                    <li class="c-global-footer__badges__item">
                        <svg x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><circle fill-rule="evenodd" clip-rule="evenodd" fill="#EDD089" cx="24" cy="24" r="24"></circle><circle fill="#FFDCB3" cx="24" cy="24" r="22.7"></circle><g><path d="M24,6.6C14.7,6.6,7.2,14.4,7.2,24S14.7,41.4,24,41.4S40.8,33.6,40.8,24S33.3,6.6,24,6.6z M28.6,38.8
        c-2.7,1-4.8,0.9-4.8,0.9s1.1-0.3,2.1-0.7c1.1-0.5,1.3-0.7,2.6-1.6c0.8-0.5,1.8-0.9,2.4-0.9c0.6,0.1,0.8,0.5,0.8,0.5
        S30.4,38.1,28.6,38.8z M32.7,37.3c0,0-0.2-0.5-0.6-0.8s-0.9-0.7-2.1-0.5c-1.9,0.3-4.8,3.1-8.6,3.4c-1.2,0.1-2.5-0.3-4-1.2
        c-0.7-0.4-2.5-1.8-2.4-1.9c0.1-0.1,1.1,1.1,4.3,0.9c3.4-0.2,7.3-1.9,9.1-2.1c1.9-0.3,2.4-0.2,3.1,0.2c0.7,0.3,0.9,0.9,1.1,1.2
        C32.9,36.8,32.7,37.3,32.7,37.3z M34.6,36.1c-0.3,0.7-1.3,1.4-1.3,1.4s0.4-0.6,0.1-1.4c-0.5-1.3-1.3-1.5-2.5-1.7
        c-1.8-0.3-4.5,0.5-6,0.9c-1,0.3-2.3,0.6-5,0.8c-4.6,0.3-6.9-1.4-6.7-1.4c0.1,0,1.2,1.1,7,0c6.4-1.2,8.6-2.8,11.8-2
        C35.2,33.5,34.8,35.6,34.6,36.1z M34.8,33.8c0-0.1-0.1-0.2-0.2-0.2c0-0.1-0.1-0.1-0.2-0.2l0,0c-0.1-0.1-0.1-0.1-0.2-0.2
        c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1s-0.1-0.1-0.1-0.1l0,0c-0.1-0.1-0.2-0.1-0.3-0.2l0,0
        c0,0-0.1,0-0.1-0.1s-0.1,0-0.1-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.2-0.1-0.3-0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0
        c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.1,0-0.2,0c-3.2-0.9-5.5,0.7-11.9,1.9c-0.2,0-0.3,0.1-0.5,0.1c-0.1,0-0.2,0-0.3,0
        c-0.3,0.1-0.6,0.1-0.9,0.1c-0.6,0.1-1.1,0.1-1.5,0.1c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0c-0.2,0-0.4,0-0.6,0c0,0-0.1,0-0.1,0
        s-0.1,0-0.1,0c-0.2,0-0.5,0-0.7,0c-0.1,0-0.2,0-0.3,0c-0.6-0.1-1.1-0.2-1.4-0.3c-0.1-0.1-0.2-0.1-0.2-0.1c-2-2.7-3.2-6.2-3.2-10
        c0-8.7,6.2-15.7,13.9-15.7c1.6,0,3.2,0.3,4.6,0.9l0,0c0.6,0.2,1.2,0.5,1.8,0.9c4.5,2.6,7.5,7.9,7.5,13.9
        C37.9,27.7,36.7,31.2,34.8,33.8z"></path><path d="M33.5,15.8c0,0,0,0.1,0,0.1c0,0.2-0.1,0.4-0.2,0.6c0,0.1-0.1,0.2-0.1,0.3c0.7,0.4,1.2,1,1.1,1.6c0,0.2-0.1,0.4-0.2,0.5
        c0,0,0,0,0,0c0,0,0,0.1,0,0.2c0,0.2-0.1,0.4-0.2,0.5c-0.2,0.4-0.6,0.8-1.2,1c0,0,0,0.1,0,0.1c0,0,0.1,0.1,0.1,0.1
        c0.1,0.2,0.1,0.4,0.1,0.6c0.1,0.7-0.4,1.6-1.3,2.2c0,0.1,0,0.2,0,0.3c-0.1,0.2-0.2,0.3-0.3,0.5c0,0,0,0,0,0c0,0,0,0.1,0,0.2
        c-0.1,0.2-0.2,0.3-0.3,0.5c-0.4,0.6-1.5,0.9-2.6,0.5l0,0c0,0-0.1,0-0.1,0c-0.2-0.1-0.3-0.1-0.5-0.2l0,0c-0.1,0-0.2-0.1-0.2-0.1
        c-0.3,0.3-0.7,0.6-1.2,0.8c0.1-0.2,0.1-0.3,0.1-0.3S25.6,26,24.8,26c-0.3,0-1-0.5-1.2-0.5c-0.2,0-0.9,0.2-0.9,0.2s0,0.1,0.1,0.2
        c-0.2,0-0.5,0-0.7,0h0c0,0,0,0,0,0h0c0,0-0.1,0-0.1,0c-0.2,0-0.4,0-0.5-0.1h0c-0.6-0.1-1.1-0.4-1.4-0.8c0,0,0,0,0,0
        c-0.2,0.1-0.3,0.2-0.5,0.2l0,0c-1.1,0.4-2.1,0.2-2.5-0.5c0-0.1-0.1-0.2-0.1-0.3l0,0l-0.1-0.4c-0.1-0.1-0.1-0.1-0.1-0.2
        c-0.2-0.4-0.2-0.9,0-1.3v0c-1-0.2-1.6-0.8-1.7-1.5c0-0.1,0-0.2,0-0.3v0l0-0.4c0-0.1,0-0.2,0-0.3c0-0.6,0.3-1.2,1.1-1.6
        c0.1-0.4,0.4-0.9,0.8-1.2c-0.1-0.1-0.1-0.2-0.2-0.3c0-0.1-0.1-0.2-0.1-0.3l0,0l-0.1-0.4c0,0,0,0,0-0.1c-1.7,2.3-2.8,5.3-2.8,8.5
        c0,3.1,0.9,5.9,2.5,8.2c-0.4,0.1-0.6,0-0.7,0c0,0,0.1,0,0.2,0c0.1,0,0.3,0,0.5,0c0.7,0,1.8-0.2,3.3-0.7c0.7-0.2,2.6-1.2,3.8-1.9
        c-0.4,1.1-1,1.9-1,1.9s1.2-0.3,1.6-0.4c0.4-0.1,0.5-0.2,0.8-0.3c0.5-0.1,0.6,0.2,0.9,0.2c0.9,0,1.8-1,1.8-1s-0.8-0.5-1.2-1.5
        c0.9-0.2,2.1-0.3,3.7,0c2.5,0.4,4.4,2.7,4.8,3.3l0.2-0.3c0.1-0.1,0.1-0.2,0.2-0.3c1.2-2.1,1.9-4.5,1.9-7.2
        C36.7,21.4,35.5,18.2,33.5,15.8z M26,26.1c-0.2,0.3-0.6,1.2-0.6,2.4c0,0.4,0.1,0.7,0.2,1c0.4,0.9,1.2,1.5,1.2,1.5s-0.6,0.6-1.4,0.6
        c-0.3,0-0.4-0.4-0.8-0.3c-0.3,0.1-0.6,0.3-0.9,0.4c-0.3,0.1-1.1,0.4-1.1,0.4s0.5-0.7,0.8-1.7c0.2-0.5,0.3-1,0.3-1.6
        c0-1.5-0.8-2.9-0.8-2.9s0.4-0.1,0.6-0.1c0,0,0,0,0,0c0.2,0,0.6,0.3,0.9,0.4c0,0,0.1,0,0.1,0c0.3,0.1,0.5,0,0.7,0h0
        c0.4-0.1,0.8-0.2,0.8-0.2C26.1,26,26.1,26,26,26.1z"></path><path d="M16.4,16.1c0,0,0.1,0.1,0.1,0.1l0.1,0.5c0,0.1,0,0.1,0.1,0.2c0,0.1,0.1,0.2,0.2,0.3l0,0c0.1,0.1,0.2,0.1,0.3,0.2
        c-0.1,0.1-0.3,0.2-0.4,0.3l0,0l0,0l0,0c-0.3,0.3-0.6,0.7-0.7,1c0,0.1,0,0.1,0,0.2c-0.2,0.1-0.4,0.2-0.6,0.4l0,0
        c-0.3,0.3-0.5,0.6-0.5,0.9c0,0.1,0,0.2,0.1,0.3l0,0.5c0,0.1,0,0.2,0,0.2c0,0.6,0.7,1,1.5,1.1l0,0c0.1,0,0.2,0,0.2,0l0,0v0
        c0.1,0,0.1,0,0.2,0c-0.1,0.1-0.2,0.2-0.2,0.4c-0.2,0.4-0.3,0.8-0.1,1.1c0,0.1,0.1,0.1,0.1,0.2l0.2,0.5c0,0,0,0.1,0.1,0.1
        c0.3,0.5,0.9,0.6,1.7,0.4c0.1,0,0.3-0.1,0.4-0.1h0l0,0c0.2-0.1,0.3-0.1,0.5-0.2c0,0,0.1,0,0.1-0.1h0v0c0.1,0,0.1-0.1,0.2-0.1
        c0,0,0.1,0.1,0.1,0.1c0.3,0.3,0.7,0.6,1.3,0.7l0,0v0c0.2,0,0.3,0.1,0.5,0.1c0,0,0.1,0,0.1,0l0,0v0c0.5,0,1-0.1,1.4-0.2
        c0.1,0,0.1-0.1,0.2-0.1c0,0,0,0,0,0c0.3,0.4,1,0.6,1.7,0.6l0,0l0,0c0.2,0,0.3,0,0.5-0.1c0,0,0.1,0,0.1,0l0,0v0
        c0.6-0.2,1.2-0.5,1.5-0.9l0,0l0,0c0,0,0-0.1,0.1-0.1c0.1,0.1,0.3,0.2,0.5,0.3v0v0c0.1,0,0.2,0.1,0.3,0.1c0,0,0.1,0,0.2,0.1
        c0,0,0.1,0,0.1,0v0v0c1,0.3,1.9,0.1,2.3-0.4c-0.2,0.2-0.4,0.3-0.7,0.3l0,0c-0.3,0.1-0.6,0.1-1,0l0.1-0.5c0.7,0.1,1.4,0,1.7-0.3l0,0
        c0,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0.1-0.1c0,0.1-0.1,0.1-0.2,0.2l0,0c-0.5,0.3-1.2,0.4-2.1,0.1
        c-1.1-0.4-1.8-1.2-1.6-1.9c0.1-0.4,0.5-0.6,1-0.7c-0.1,0.3-0.1,0.6,0,0.8c0,0.1,0.1,0.1,0.1,0.2l0.2,0.6l0,0c0,0,0,0.1,0,0.1
        c0.3,0.6,1.2,0.7,2,0.3l0,0l0,0c0.2-0.1,0.3-0.1,0.5-0.2c0,0,0.1,0,0.1,0l0,0l0,0c0,0.1,0,0.2,0,0.3c0,0,0,0,0,0.1c0,0,0,0,0-0.1
        c0-0.1,0-0.2,0-0.3c0.9-0.5,1.4-1.4,1.2-2c0,0.2,0,0.4-0.1,0.6l0,0l0,0c-0.2,0.3-0.4,0.6-0.8,0.9l-0.2-0.4c0.7-0.5,1-1.1,1-1.7
        c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.2l0,0c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1c0,0,0,0,0,0c0.3,0,0.5-0.1,0.7-0.2l0,0l0,0
        c0.3-0.2,0.5-0.4,0.6-0.6c-0.1,0.1-0.2,0.2-0.3,0.3l0,0C33,20,32.6,20.2,32,20.2l0-0.5c0.7,0,1.3-0.3,1.6-0.6l0,0
        c0-0.1,0.1-0.1,0.1-0.2c0,0,0-0.1,0.1-0.1c0-0.1,0.1-0.1,0.1-0.2c0,0.1-0.1,0.3-0.2,0.3c-0.4,0.4-1.1,0.6-1.9,0.5
        c-1.2-0.1-2.1-0.8-2-1.5c0.1-0.7,1.1-1.2,2.2-1.1c0.8,0.1,1.4,0.4,1.8,0.8l0,0c0.2,0.2,0.2,0.4,0.2,0.6c0-0.3-0.1-0.5-0.3-0.7l0,0
        c-0.3-0.3-0.6-0.5-1.1-0.6c0.2-0.2,0.4-0.3,0.4-0.6c-0.1,0.2-0.3,0.4-0.6,0.5c-0.2,0-0.3-0.1-0.5-0.1c-0.1,0-0.3,0-0.4,0v-0.1
        c0.8-0.1,1.5-0.4,1.7-0.9c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1l0,0l0,0c0,0,0-0.1,0-0.1c0-0.1,0-0.2,0-0.3c0-0.5-0.3-0.9-0.8-1.2l0,0
        c-0.3-0.2-0.7-0.3-1.2-0.3c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.3,0c0-0.1,0-0.2,0-0.2c0,0,0-0.1,0-0.1c0,0,0,0.1,0,0.1
        c-0.1,0.4-0.4,0.9-1,1.3l-0.2-0.4c0.5-0.3,0.8-0.7,0.9-1.1c0.1-0.2,0.1-0.4,0.1-0.5c0-0.1,0-0.1,0-0.2c0,0.2-0.1,0.4-0.2,0.6
        c-0.2,0.4-0.7,0.8-1.2,1.1c-1,0.5-2.1,0.5-2.4-0.2c-0.1-0.3-0.1-0.6,0-0.9c0.1-0.1,0.1-0.1,0.2-0.2c0.1,0,0.3,0.1,0.5,0.1l0,0v0
        c0.2,0,0.3,0,0.5,0c0,0,0.1,0,0.1,0l0,0v0c0.6,0,1.2-0.2,1.5-0.5c0.3-0.2,0.4-0.4,0.5-0.6c-0.1,0.2-0.4,0.4-0.6,0.6
        c-0.2,0.1-0.5,0.2-0.8,0.3l0-0.5c0.1,0,0.2,0,0.3,0c0.7-0.1,1.2-0.5,1.4-0.9c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c-0.2,0.5-1,0.9-1.9,1
        c0,0-0.1,0-0.1,0c-0.6,0-1.2-0.2-1.6-0.4c-0.3-0.2-0.6-0.5-0.6-0.9c0-0.7,0.9-1.3,2.1-1.3c0.1,0,0.1,0,0.2,0l0,0
        c1,0.1,1.8,0.5,1.9,1.2c0,0,0,0.1,0,0.1v0c0,0,0-0.1,0-0.1l0,0c-0.1-0.7-1.1-1.3-2.2-1.3c-0.5,0-1,0.1-1.4,0.3
        c-0.4-0.1-1,0-1.5,0.2c-0.1,0-0.2,0.1-0.3,0.1c0-0.1,0-0.2,0-0.3c-0.1-0.2-0.2-0.3-0.3-0.5l0,0l0,0l0,0c-0.5-0.4-1.3-0.4-2.2-0.2
        c-0.8,0.3-1.4,0.7-1.6,1.2c0,0,0,0,0,0c-0.1,0-0.2,0-0.2,0c0,0,0,0,0,0l0,0l0,0l0,0l0,0c-0.8-0.1-1.5,0.1-1.7,0.6
        c0,0.1,0,0.2-0.1,0.2l-0.3,0.5l0,0c0,0,0,0.1-0.1,0.1c-0.1,0.2-0.1,0.5,0,0.7l0,0l0,0c0.1,0.2,0.3,0.5,0.5,0.7
        c-0.1,0-0.2,0-0.3,0.1l0,0c-0.2,0.1-0.4,0.1-0.6,0.3C16.8,14.3,16.1,15.4,16.4,16.1C16.4,16.1,16.4,16.1,16.4,16.1z M28.1,12.5
        c0.1,0,0.2,0,0.3,0l-0.1,0.3l0.1,0.1c-0.1,0-0.3,0-0.4,0c0,0,0,0,0,0l0-0.5C28,12.5,28,12.5,28.1,12.5z M16.9,16.9l-0.2-0.4
        c0,0,0-0.1,0-0.1c0,0,0.1,0,0.1,0c0.1,0.1,0.3,0.2,0.4,0.2l0.1,0.4C17.2,17,17,17,16.9,16.9z M17.8,17c-0.1,0-0.2,0.1-0.3,0.1l0,0
        l-0.3-0.5c0.1,0,0.3,0.1,0.5,0L17.8,17z M17.8,16.7c0.2,0,0.3,0,0.5-0.1l0,0.1c-0.1,0-0.3,0.1-0.4,0.1L17.8,16.7z M17.7,17.2
        c1-0.5,2-0.5,2.4,0c-0.1-0.1-0.2-0.3-0.4-0.3c0.3-0.2,0.6-0.5,0.8-0.8c0.2,0.1,0.4,0.1,0.6,0.1c0.1,0.3,0.3,0.5,0.6,0.7
        c0,0,0,0-0.1,0c-0.5,0.3-1,0.4-1.4,0.4c0,0.1,0.1,0.2,0.1,0.3c0,0,0,0,0.1,0l0.1,0.2c0,0-0.1,0-0.1,0c0,0,0,0,0-0.1s0,0,0,0
        c0,0,0,0.1,0,0.1c-0.1,0-0.1,0.1-0.2,0.1c-0.5,0.3-0.9,0.7-1.2,1.1c-0.4-0.3-1-0.4-1.7-0.3c-0.3,0-0.6,0.1-0.9,0.2
        C16.4,18.2,16.9,17.6,17.7,17.2z M19,16.7c-0.2,0-0.3,0-0.5,0.1l-0.1-0.1c0.2,0,0.3-0.1,0.5-0.2L19,16.7z M19,16.4
        C19,16.4,19,16.4,19,16.4c0.2-0.1,0.3-0.2,0.4-0.2l0.1,0.3l0.1,0.1c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.2,0-0.3,0L19,16.4z M21,15.8
        C21,15.8,21,15.8,21,15.8L21,15.8c-0.1,0.1-0.2,0-0.3,0l-0.1-0.2c0-0.1,0-0.2,0.1-0.3c0.1,0,0.2,0,0.3,0L21,15.8z M21,15.4
        c0,0,0.1,0,0.1,0l0,0.2L21,15.4z M21.2,15.5C21.2,15.4,21.2,15.4,21.2,15.5C21.2,15.4,21.3,15.4,21.2,15.5c0.1,0.1,0.2,0.3,0.3,0.4
        l-0.1,0.4c-0.1-0.1-0.2-0.2-0.2-0.4L21.2,15.5z M22.4,16.9c-0.1,0-0.3-0.1-0.4-0.1l0-0.5c0.1,0.1,0.3,0.1,0.5,0.2L22.4,16.9
        L22.4,16.9z M22.6,17.2L22.6,17.2L22.6,17.2c0.2,0,0.3,0.1,0.5,0.1c0,0,0.1,0,0.1,0l0,0v0c1,0,1.8-0.4,2.1-1
        c0.3,0.2,0.5,0.4,0.7,0.6c-0.3,0.1-0.6,0.4-0.9,0.6c-0.3,0.3-0.5,0.6-0.7,1c-0.2,0-0.4,0-0.6,0c-1.2-0.1-2.1-0.8-2-1.5
        c0,0,0,0,0-0.1C22.1,17.1,22.3,17.1,22.6,17.2z M23.1,17c-0.2,0-0.3,0-0.5-0.1l0-0.5c0.2,0,0.3,0.1,0.5,0.1L23.1,17L23.1,17z
         M23.7,17c-0.1,0-0.3,0-0.4,0c0,0,0,0,0,0l0-0.5c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.4,0l-0.1,0.3L23.7,17z M25.8,16.1
        c0.3,0,0.5-0.1,0.7-0.1c-0.2,0.2-0.4,0.4-0.5,0.6c-0.1,0-0.1,0-0.2,0L25.8,16.1z M21.6,22.4c0.2,0,0.3,0,0.5,0l0.1,0.4
        c-0.1,0-0.3,0-0.4,0L21.6,22.4z M21.6,22.8c-0.2,0-0.3-0.1-0.4-0.2L21,22.2c0,0,0-0.1,0-0.1c0,0,0.1,0,0.1,0
        c0.1,0.1,0.2,0.2,0.4,0.2L21.6,22.8z M22.1,22.4c0.2,0,0.3,0,0.5-0.1l0.1,0.4l0,0c-0.1,0-0.3,0.1-0.4,0.1L22.1,22.4z M22.7,22.3
        c0.2,0,0.3-0.1,0.5-0.2l0.1,0.4l0.1,0c-0.1,0.1-0.3,0.1-0.4,0.2L22.7,22.3z M23.3,22C23.3,22,23.3,22,23.3,22
        c0.2-0.1,0.3-0.2,0.4-0.2l0.1,0.3l0.1,0.1c-0.1,0.1-0.2,0.2-0.3,0.2c0,0,0,0,0,0L23.3,22z M23.3,21.7c-1,0.6-2.1,0.5-2.5-0.1
        c-0.3-0.6,0.2-1.6,1.3-2.2c1-0.6,2.1-0.5,2.5,0.1C24.9,20.2,24.3,21.2,23.3,21.7z M19.1,20.9c0,0,0,0.1,0,0.1
        c0,0.1,0.1,0.1,0.1,0.2c-0.3,0.3-0.7,0.6-1.3,0.7l-0.1-0.5C18.4,21.4,18.8,21.2,19.1,20.9z M19,20.5L19,20.5
        C19,20.5,19,20.5,19,20.5C19,20.5,19,20.5,19,20.5z M19.1,20.6c0,0,0-0.1,0-0.1C19.1,20.5,19.2,20.6,19.1,20.6
        c0.2,0,0.3,0.1,0.5,0.1l0.1,0.4c-0.2,0-0.3-0.1-0.4-0.2L19.1,20.6z M19.6,20.8c0.2,0,0.3,0,0.5,0l0.1,0.4c-0.1,0-0.3,0-0.4,0
        L19.6,20.8z M20.2,20.8c0.2,0,0.3,0,0.5-0.1c-0.1,0.2-0.1,0.3-0.1,0.5c0,0-0.1,0-0.1,0L20.2,20.8z M18.9,20.1
        c-0.3-0.6,0.2-1.6,1.3-2.2c0.5-0.3,0.9-0.4,1.4-0.4l-0.1,0.3c0,0.1,0,0.1,0,0.2c0,0.5,0.4,1,1,1.3c-0.2,0.1-0.3,0.1-0.5,0.2
        c-0.5,0.3-0.9,0.6-1.1,1C20,20.7,19.2,20.6,18.9,20.1z M20.3,17.5c0.2,0,0.3,0,0.5-0.1l0,0.1c-0.1,0-0.3,0.1-0.4,0.2L20.3,17.5z
         M21.5,17.4c-0.2,0-0.3,0-0.5,0.1l-0.1-0.1c0.2,0,0.3-0.1,0.5-0.2L21.5,17.4z M21.5,17.2C21.5,17.1,21.6,17.1,21.5,17.2
        c0.1-0.1,0.1-0.1,0.1-0.1c0,0,0,0.1,0,0.1l0,0.1L21.5,17.2z M21.7,17.5C21.7,17.5,21.8,17.5,21.7,17.5c0.1,0.2,0.2,0.4,0.3,0.5
        l-0.1,0.4c-0.1-0.1-0.2-0.3-0.2-0.4v-0.4C21.7,17.6,21.7,17.5,21.7,17.5z M21.7,17.4L21.7,17.4L21.7,17.4L21.7,17.4z M22.3,18.8
        c-0.1-0.1-0.2-0.1-0.3-0.2l0-0.6c0.1,0.1,0.2,0.2,0.4,0.3L22.3,18.8L22.3,18.8z M22.8,19.1c-0.1,0-0.2-0.1-0.4-0.2l0-0.5
        c0.1,0.1,0.3,0.2,0.5,0.2L22.8,19.1L22.8,19.1z M23,19l0-0.4c0.2,0.1,0.3,0.1,0.5,0.1L23.5,19C23.3,19,23.2,19,23,19z M23.6,19
        l0-0.3c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.4,0L24,19.1C23.9,19,23.7,19,23.6,19z M24.2,19.2C24.2,19.2,24.2,19.1,24.2,19.2l0-0.4
        c0,0,0.1,0,0.1,0C24.2,18.9,24.2,19,24.2,19.2z M21.9,16.7c-0.1-0.1-0.2-0.1-0.3-0.2l0-0.6c0.1,0.1,0.3,0.2,0.4,0.3L21.9,16.7
        L21.9,16.7z M15.6,21.5c-0.1-0.1-0.1-0.1-0.2-0.2l0,0l0,0c0-0.1-0.1-0.1-0.1-0.2l-0.1-0.4c0,0,0-0.1,0-0.1c0,0,0,0,0,0.1l0,0
        c0,0,0,0,0,0c0.1,0.1,0.2,0.2,0.3,0.3L15.6,21.5z M15.4,20.3L15.4,20.3c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1v0c0-0.7,0.9-1.2,2-1.3
        c0.6,0,1.1,0.1,1.5,0.3c-0.3,0.4-0.3,0.9-0.1,1.2c0,0.1,0.1,0.1,0.1,0.2l0.1,0.4c-0.4,0.3-0.9,0.5-1.5,0.5
        C16.5,21.3,15.6,20.9,15.4,20.3z M17.9,21.9c-0.1,0-0.3,0-0.4,0.1c0,0,0,0,0,0l-0.1-0.5c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.3,0l0,0.3
        L17.9,21.9z M16.1,21.8c-0.1,0-0.2-0.1-0.3-0.2l-0.1-0.5c0.1,0.1,0.3,0.2,0.4,0.3L16.1,21.8z M16.6,22c-0.1,0-0.3-0.1-0.4-0.1
        l-0.1-0.5c0.2,0.1,0.3,0.1,0.5,0.1L16.6,22L16.6,22z M16.8,22l-0.1-0.5c0.2,0,0.4,0,0.5,0l0,0.4l0,0.1C17.1,22,17,22,16.8,22z
         M17,24.1L17,24.1C17,24.1,17,24.1,17,24.1L17,24.1z M17.1,23.8c0,0-0.1-0.1-0.1-0.2c0,0,0-0.1,0-0.1c-0.1-0.4,0-0.9,0.3-1.3
        c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0l0,0v0c0.9-0.1,1.6-0.5,1.8-1c0.3,0.3,0.8,0.3,1.3,0.3c0,0.1,0,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1
        c0,0,0,0,0,0.1l0,0.1c0,0,0,0-0.1,0c0,0,0-0.1,0-0.1c0,0.6-0.5,1.3-1.3,1.8C18.5,24.3,17.5,24.3,17.1,23.8L17.1,23.8z M17.4,24.6
        L17.4,24.6c0,0-0.1-0.1-0.1-0.1l-0.2-0.3c0,0,0-0.1,0-0.1c0,0,0,0,0.1,0c0,0,0,0,0,0c0.1,0.1,0.2,0.2,0.4,0.2l0.1,0.4
        C17.6,24.7,17.5,24.7,17.4,24.6z M17.9,24.8l-0.3-0.5c0.2,0,0.3,0,0.5,0l0.1,0.4l0,0C18.2,24.9,18,24.8,17.9,24.8z M18.5,24.8
        l-0.3-0.4c0.2,0,0.3,0,0.5-0.1l0.1,0.4l0,0C18.7,24.8,18.6,24.8,18.5,24.8z M19,24.7l-0.3-0.4c0.2,0,0.3-0.1,0.5-0.2l0.1,0.4
        l0.1,0.1C19.3,24.6,19.2,24.7,19,24.7z M19.6,24.4C19.6,24.5,19.6,24.5,19.6,24.4l-0.3-0.4c0,0,0.1,0,0.1,0
        c0.1-0.1,0.2-0.1,0.3-0.2l0.1,0.3l0.1,0.1C19.9,24.3,19.8,24.4,19.6,24.4z M20.2,24.5C20.2,24.4,20.1,24.4,20.2,24.5
        c0-0.1,0-0.2,0-0.2L20.2,24.5z M20.6,24.9c-0.1-0.1-0.2-0.1-0.3-0.2l0-0.5c0,0,0,0,0,0c0.1,0.1,0.2,0.2,0.3,0.3L20.6,24.9
        L20.6,24.9z M21.2,25.1c-0.1,0-0.3-0.1-0.4-0.2l0-0.5c0.1,0.1,0.3,0.2,0.5,0.2L21.2,25.1L21.2,25.1z M21.8,25.2L21.8,25.2
        c-0.1,0.1-0.3,0-0.4,0l0-0.5c0.2,0.1,0.3,0.1,0.5,0.1L21.8,25.2z M20.6,24c0.3-0.4,0.5-0.9,0.4-1.3c0,0.5-0.4,1-0.9,1.5l-0.2-0.4
        c0.7-0.5,1-1.1,1-1.7c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0l0,0.1l0,0.1l0,0.1l0,0c0,0,0,0.1,0,0.1c0.3,0.6,1.2,0.7,2,0.3l0,0l0,0
        c0.2-0.1,0.3-0.1,0.5-0.2c0,0,0.1,0,0.1,0l0,0l0,0c0,0,0.1,0,0.1-0.1c0,0,0.1,0.1,0.1,0.1c-0.5,0.4-0.8,0.9-0.7,1.3
        c0,0.1,0,0.2,0.1,0.3l0,0.2c-0.3,0.1-0.7,0.1-1.2,0.1C21.5,24.5,20.9,24.3,20.6,24z M22.4,25.3c-0.1,0-0.3,0-0.4,0c0,0,0,0,0,0
        l0-0.5c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.4,0l-0.1,0.3L22.4,25.3z M22.5,25.3l0-0.5c0.3,0,0.6-0.1,0.9-0.2v0.1l0,0c0,0,0,0.1,0,0.1
        c0,0.1,0,0.1,0,0.2C23.1,25.2,22.8,25.3,22.5,25.3z M25.2,22.2c0.7-0.2,1.4-0.1,1.8,0.2c0,0,0,0,0,0c0,0.1,0,0.2,0,0.3l-0.2,0.5
        c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.3,0,0.6,0.2,1c-0.3,0.2-0.7,0.4-1.1,0.5c-1.1,0.3-2.2-0.1-2.3-0.8C23.3,23.3,24.1,22.5,25.2,22.2z
         M24,22.4c0.1-0.1,0.2-0.2,0.3-0.3c0,0,0,0,0,0l-0.1,0.3c0,0-0.1,0-0.1,0.1C24.1,22.5,24,22.5,24,22.4z M24.4,22.4v-0.2
        c0.1,0,0.1,0.1,0.2,0.1C24.6,22.3,24.5,22.3,24.4,22.4z M27,22.9C27,22.9,27,23,27,22.9c0,0.2,0.1,0.4,0.2,0.6L27,23.9
        c-0.1-0.1-0.1-0.3-0.1-0.4L27,22.9C27,23,27,22.9,27,22.9z M27,22.8L27,22.8C27,22.8,27,22.8,27,22.8L27,22.8z M23.6,25l-0.1-0.4
        c0,0,0-0.1,0-0.1c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.2,0.2,0.3,0.3l0,0.4C23.8,25.2,23.7,25.1,23.6,25z M24.1,25.4l-0.1-0.5
        c0.1,0.1,0.3,0.1,0.5,0.2l0,0.5C24.3,25.5,24.2,25.4,24.1,25.4z M24.6,25.5L24.5,25c0.2,0,0.3,0,0.5,0l0,0.5l0,0
        C24.9,25.6,24.7,25.6,24.6,25.5z M25.2,25.6L25,25.1c0.2,0,0.4,0,0.5,0l0,0.4l0.1,0.1C25.5,25.5,25.3,25.6,25.2,25.6z M25.8,25.5
        C25.8,25.5,25.8,25.5,25.8,25.5L25.6,25c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.1v0.4l0.1,0.1C26.1,25.4,25.9,25.5,25.8,25.5z
         M26.3,25.3l-0.1-0.4c0.3-0.1,0.6-0.3,0.9-0.5c0.1,0.1,0.2,0.2,0.3,0.3C27.1,24.9,26.7,25.2,26.3,25.3z M28.7,24.6
        c0.1,0,0.2,0.1,0.3,0.1L28.9,25l0,0.2c-0.1,0-0.3-0.1-0.4-0.1c0,0,0,0,0,0l0.1-0.5C28.7,24.6,28.7,24.6,28.7,24.6z M28.5,24.6
        l-0.2,0.3l0,0.1c-0.2-0.1-0.3-0.1-0.4-0.2l0.1-0.5C28.2,24.4,28.4,24.5,28.5,24.6z M28,24.3l-0.2,0.4l0,0c-0.1-0.1-0.2-0.2-0.3-0.2
        l0.1-0.5C27.7,24.1,27.9,24.2,28,24.3z M27.2,23.5c0.1,0.1,0.2,0.3,0.3,0.4l-0.2,0.4v0c-0.1-0.1-0.2-0.2-0.2-0.3L27.2,23.5z
         M27.2,22.1c-0.1,0-0.2,0.1-0.3,0.1c-0.5-0.2-1.1-0.3-1.8-0.1c0,0-0.1,0-0.1,0c-0.2-0.1-0.4-0.1-0.5-0.2c0.3-0.4,0.4-0.8,0.4-1.1
        c0,0,0,0.1,0.1,0.1c0.4,0.4,1.3,0.3,2.1-0.3l0,0l0,0c0.1,0,0.1-0.1,0.2-0.1c0,0,0,0,0,0l0.2,0.6l0,0c0,0,0,0.1,0,0.1
        c0.1,0.2,0.2,0.3,0.4,0.4c0,0.1-0.1,0.1-0.1,0.2C27.5,21.8,27.3,22,27.2,22.1z M28.2,19.1c0.2-0.1,0.3-0.1,0.5-0.2c0,0,0.1,0,0.1,0
        l0,0l0,0c0.2-0.1,0.5-0.3,0.6-0.5l-0.1,0.3c0,0.1-0.1,0.2-0.1,0.3c0,0.5,0.3,0.9,0.9,1.2c-0.1,0.1-0.3,0.2-0.4,0.3
        c-1,0.5-2,0.5-2.4,0c0,0,0,0,0.1-0.1c0,0,0,0,0.1-0.1h0l0,0C27.9,19.9,28.1,19.5,28.2,19.1C28.2,19.1,28.2,19.1,28.2,19.1
        L28.2,19.1L28.2,19.1z M28.3,18.3C28.3,18.3,28.3,18.3,28.3,18.3l0.1,0.4l0.1,0c-0.1,0-0.2,0.1-0.3,0.1
        C28.3,18.6,28.4,18.4,28.3,18.3z M28.4,18.2C28.5,18.2,28.5,18.2,28.4,18.2c0.2-0.1,0.3-0.2,0.4-0.2l0.1,0.3l0.1,0.1
        c-0.1,0.1-0.2,0.2-0.3,0.2c0,0,0,0,0,0L28.4,18.2z M29.1,20.9c0.2,0,0.3-0.1,0.5-0.2l0.1,0.4l0.1,0c-0.1,0.1-0.3,0.1-0.4,0.2
        L29.1,20.9z M29.2,21.4c-0.1,0-0.3,0.1-0.4,0.1L28.6,21c0.2,0,0.3,0,0.5-0.1L29.2,21.4L29.2,21.4z M29.7,20.7
        C29.7,20.6,29.8,20.6,29.7,20.7c0.2-0.1,0.3-0.2,0.4-0.2l0.1,0.3l0.1,0.1C30.2,20.9,30.1,21,30,21c0,0,0,0,0,0L29.7,20.7z
         M27.4,20.7L27.4,20.7L27.4,20.7C27.4,20.7,27.4,20.7,27.4,20.7z M27.4,20.1C27.3,20.1,27.3,20.1,27.4,20.1L27,19.8
        c0,0,0,0,0.1-0.1c0.1-0.1,0.2-0.2,0.2-0.3l0.2,0.3l0.1,0C27.6,19.8,27.5,20,27.4,20.1z M27.2,20.1L27.2,20.1c0,0.1-0.2,0.2-0.3,0.3
        l-0.4-0.3c0.1-0.1,0.3-0.2,0.4-0.3L27.2,20.1z M26.7,20.6L26.7,20.6c-0.1,0.1-0.2,0.1-0.3,0.2L26,20.4c0.2-0.1,0.3-0.1,0.5-0.2
        L26.7,20.6z M26.2,20.8c-0.1,0-0.2,0.1-0.3,0.1l-0.4-0.4c0.2,0,0.3,0,0.5-0.1L26.2,20.8z M27.8,21.7C27.8,21.7,27.8,21.7,27.8,21.7
        c0-0.1,0.1-0.1,0.1-0.1c0.1,0,0.1,0,0.2,0.1C27.9,21.7,27.9,21.7,27.8,21.7z M27.7,21.1l-0.2-0.3c0,0,0-0.1,0-0.1
        c0,0,0.1,0,0.1,0.1c0.1,0.1,0.2,0.1,0.4,0.2l0.1,0.4C27.9,21.3,27.8,21.3,27.7,21.1z M28.3,21.4L28,21c0.2,0,0.3,0,0.5,0l0.1,0.4
        C28.5,21.5,28.4,21.4,28.3,21.4z M28.6,22.9L28.6,22.9C28.6,22.9,28.6,22.9,28.6,22.9C28.6,22.9,28.6,22.9,28.6,22.9z M28.9,23.4
        l-0.2-0.3c0,0,0-0.1,0-0.1c0,0,0.1,0,0.1,0c0.1,0.1,0.2,0.2,0.4,0.2l0.1,0.4C29.1,23.6,29,23.5,28.9,23.4z M29.5,23.7l-0.3-0.5
        c0.2,0,0.3,0,0.5,0l0.1,0.4C29.7,23.7,29.6,23.7,29.5,23.7z M30.1,23.7l-0.3-0.4c0.2,0,0.3,0,0.5-0.1l0.1,0.4l0,0
        C30.3,23.6,30.2,23.7,30.1,23.7z M30.6,23.5l-0.3-0.4c0.2,0,0.3-0.1,0.5-0.2l0.1,0.4l0.1,0C30.9,23.4,30.8,23.5,30.6,23.5z
         M31.4,23l0.1,0.1c-0.1,0.1-0.2,0.2-0.3,0.2c0,0,0,0,0,0l-0.3-0.4c0,0,0.1,0,0.1,0c0.1-0.1,0.2-0.1,0.3-0.2L31.4,23z M31.4,19.7
        c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.4,0L31.8,20l0.1,0.1c-0.1,0-0.3,0-0.4,0c0,0,0,0,0,0L31.4,19.7z M31.4,20.4L31.4,20.4
        c0.3,0,0.6,0,0.8-0.1c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0,0,0.1,0,0.2c0.1,0.6-0.4,1.5-1.3,2c-1,0.6-2.1,0.5-2.5-0.1
        c-0.1-0.2-0.1-0.5,0-0.8c0.3,0,0.7-0.1,1-0.2l0,0l0,0c0.2-0.1,0.3-0.1,0.5-0.2c0,0,0.1,0,0.1-0.1h0v0c0.4-0.3,0.7-0.6,1-0.9
        c0.1,0,0.2,0,0.3,0C31.4,20.4,31.4,20.4,31.4,20.4L31.4,20.4z M30.8,19.5c0.2,0.1,0.3,0.1,0.5,0.1l-0.1,0.4l0,0.1
        c-0.2,0-0.3-0.1-0.5-0.1L30.8,19.5z M30.8,20.3L30.8,20.3C30.8,20.3,30.9,20.3,30.8,20.3c-0.1,0.2-0.3,0.3-0.4,0.4l-0.2-0.4
        c0.1-0.1,0.2-0.1,0.2-0.2C30.5,20.3,30.7,20.3,30.8,20.3L30.8,20.3z M30.3,19.3c0.1,0.1,0.3,0.2,0.5,0.2L30.7,20l0,0
        c-0.1,0-0.3-0.1-0.4-0.2L30.3,19.3z M29.9,19c0.1,0.1,0.2,0.2,0.4,0.3l-0.1,0.4c-0.1-0.1-0.2-0.1-0.3-0.2L29.9,19z M29.8,18.9
        l-0.1,0.4c-0.1-0.1-0.2-0.3-0.2-0.4l0-0.4c0,0,0-0.1,0-0.1c0,0,0,0.1,0.1,0.1C29.7,18.7,29.7,18.8,29.8,18.9z M30.1,17L30.1,17
        L30.1,17L30.1,17z M30.1,16.9C30.1,16.9,30.1,16.9,30.1,16.9c0,0,0,0.1-0.1,0.2c-0.3,0.2-0.5,0.5-0.6,0.8c0,0,0,0.1,0,0.1
        c-0.1,0.1-0.2,0.2-0.3,0.3l-0.3-0.4c0.6-0.5,1-1.1,1-1.7c0,0,0.1,0.1,0.1,0.1c0.1,0,0.1,0,0.2,0.1L30.1,16.9z M30.7,16.8
        c-0.2,0-0.3,0.1-0.5,0.2l0-0.5c0.2,0,0.3,0.1,0.5,0.1L30.7,16.8z M31.3,16.7c-0.1,0-0.3,0-0.4,0l0-0.2c0,0,0.1,0,0.1,0
        c0.1,0,0.2,0,0.4,0L31.3,16.7z M30.7,13.8c0.1,0,0.3,0,0.4,0c0.1,0,0.1,0,0.2,0c0.6,0.1,1.1,0.3,1.4,0.5c0.3,0.2,0.5,0.5,0.5,0.9
        c0,0.1,0,0.2,0,0.2c0,0,0,0,0,0.1c-0.3,0.6-1.1,0.9-2.1,0.9c-0.5,0-0.9-0.1-1.2-0.3c0,0.6-0.5,1.4-1.3,1.8c-0.1,0-0.1,0.1-0.2,0.1
        c0,0,0,0,0-0.1c0.1,0.5-0.1,1.1-0.5,1.7l-0.3-0.3c0.5-0.6,0.7-1.4,0.5-1.9c0,0,0-0.1-0.1-0.1c0,0,0,0,0,0c0.2,0.6-0.2,1.4-0.8,2.1
        c-0.7,0.7-1.7,1-2.2,0.7c0,0,0,0,0,0.1c0,0.1,0,0.1,0.1,0.2c0,0,0,0,0.1,0c0.1,0,0.3,0.1,0.4,0.1l0.2,0.4c-0.2,0-0.3,0-0.4-0.1
        l-0.3-0.3c0.1,0.5-0.3,1.1-0.9,1.6l-0.2-0.4c0.7-0.5,1-1.1,1-1.7c0,0,0-0.1,0-0.1c0-0.2,0-0.3-0.1-0.4c-0.1-0.1-0.1-0.2-0.2-0.3
        c0-0.5,0.3-1.2,0.9-1.7c0.8-0.8,1.9-1.1,2.4-0.6l0,0c-0.3-0.4-0.9-0.4-1.6-0.1c0.2-0.5,0.6-0.9,1.2-1.2c1-0.6,2.1-0.5,2.5,0.1
        c0,0,0,0,0,0c-0.1-0.2-0.2-0.3-0.4-0.4c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0l0,0l0,0C30.1,14.9,30.6,14.3,30.7,13.8z M29.2,14.6
        c0.1-0.1,0.2-0.1,0.3-0.2l0.1,0.3l0.1,0.1c-0.1,0.1-0.2,0.1-0.3,0.2c0,0,0,0,0,0l-0.2-0.4C29.1,14.6,29.1,14.6,29.2,14.6z M29,14.6
        l0.1,0.4l0.1,0c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.1,0-0.2,0l-0.2-0.3C28.7,14.8,28.8,14.7,29,14.6z M28.5,14.8l0.1,0.3
        c-0.1,0-0.3,0-0.4,0L28,14.9C28.1,14.9,28.3,14.9,28.5,14.8z M27.9,14.9l0.1,0.3c-0.1,0-0.2,0.1-0.3,0.1c0,0,0,0,0,0l-0.3-0.5
        C27.5,14.9,27.7,14.9,27.9,14.9z M26.9,14.6c0.1,0.1,0.2,0.2,0.4,0.2l0.1,0.4c-0.2-0.1-0.3-0.1-0.4-0.2L26.9,14.6
        c-0.1,0-0.1,0-0.1-0.1C26.9,14.6,26.9,14.6,26.9,14.6z M26.8,14.5L26.8,14.5L26.8,14.5C26.8,14.5,26.8,14.5,26.8,14.5z M26.6,14.4
        l0.1,0.5c0,0.1,0,0.1,0.1,0.2c0.1,0.2,0.2,0.3,0.4,0.4c-0.4,0.3-1,0.5-1.7,0.4c0,0,0,0-0.1,0c0,0.1,0,0.2-0.1,0.2c0,0,0,0,0.1,0
        c0.1,0,0.2,0,0.4,0l-0.1,0.3l0,0c-0.1-0.1-0.2-0.2-0.4-0.3c-0.2,0.4-0.8,0.7-1.5,0.8l0-0.5c0.8-0.1,1.5-0.4,1.7-0.9
        c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c-0.3,0.6-1.1,0.9-2.1,0.9c-1.2,0-2.1-0.7-2.1-1.4c0-0.3,0.2-0.5,0.4-0.7c0.1,0,0.2-0.1,0.3-0.2
        c0.4-0.2,0.9-0.3,1.5-0.3c1.2,0,2.1,0.7,2.1,1.4c0-0.5-0.3-0.9-0.9-1.2c0.3,0,0.7,0,1.1-0.2l0,0l0,0c0.2-0.1,0.3-0.1,0.5-0.2
        c0,0,0,0,0.1,0l0,0l0,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0c-0.1,0.3-0.1,0.5,0,0.7C26.5,14.3,26.6,14.4,26.6,14.4z M20.3,14.1
        c-0.1,0-0.3-0.1-0.4-0.1c0,0,0,0,0,0l0.2-0.5c0,0,0.1,0,0.1,0c0.1,0,0.2,0.1,0.3,0.1l-0.2,0.3L20.3,14.1z M19.7,13.8
        c-0.2-0.1-0.3-0.2-0.4-0.3l0.1-0.2l0.1-0.3c0.1,0,0.1,0.1,0.2,0.1c0.1,0.1,0.2,0.1,0.3,0.2L19.7,13.8L19.7,13.8z M19.2,13.5
        c-0.1-0.1-0.2-0.2-0.3-0.3l0.2-0.5c0.1,0.1,0.2,0.2,0.4,0.3L19.2,13.5L19.2,13.5z M20.5,13.6c0.8,0.2,1.5,0.1,1.9-0.2
        c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.2-0.2,0.3-0.3c0.1,0,0.3-0.1,0.4-0.1c0,0,0.1,0,0.1,0l0,0l0,0c0.1,0,0.2-0.1,0.3-0.1
        c0.1,0.3,0,0.6-0.1,0.9c0,0,0,0,0,0c-0.4,0-0.8,0-1.2,0.1c-0.3,0.4-1.1,0.6-1.9,0.3L20.5,13.6z M22.4,12.3c0.2,0,0.4,0,0.5-0.1
        l0,0.4l0.1,0.1c-0.2,0-0.3,0.1-0.5,0.1L22.4,12.3z M22.4,12.7c-0.1,0-0.3,0-0.4,0l-0.2-0.5c0.2,0,0.3,0,0.5,0L22.4,12.7L22.4,12.7z
         M23.7,13.2c0,0.1,0,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0,0,0-0.1,0c0,0,0,0,0,0c-0.1,0-0.2,0-0.2,0
        C23.6,13.5,23.6,13.3,23.7,13.2c-0.1-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3L23.7,13.2z M23.7,12.8C23.7,12.8,23.7,12.8,23.7,12.8
        L23.7,12.8L23.7,12.8z M26,13.3L26,13.3c-0.1,0.1-0.2,0.2-0.4,0.2l-0.2-0.4c0.2,0,0.3-0.1,0.5-0.2L26,13.3z M26,12.9
        C26,12.9,26.1,12.9,26,12.9c0.1-0.1,0.2-0.1,0.3-0.1c0.1,0,0.1,0.1,0.2,0.1l0,0.1l0.1,0.1c-0.1,0.1-0.2,0.1-0.3,0.2c0,0,0,0,0,0
        L26,12.9z M25.5,13.6L25.5,13.6c-0.1,0-0.3,0.1-0.4,0.1l-0.3-0.4c0.2,0,0.3,0,0.5-0.1L25.5,13.6z M24.9,13.6c-0.1,0-0.2,0-0.3,0
        l-0.3-0.5c0.1,0,0.3,0.1,0.5,0L24.9,13.6z M24.3,13.6c-0.2,0-0.3-0.1-0.4-0.2L23.8,13c0,0,0-0.1,0-0.1c0,0,0,0,0.1,0
        c0.1,0.1,0.3,0.2,0.4,0.2L24.3,13.6z M24,13.7L24,13.7C24,13.7,24,13.7,24,13.7C24,13.7,24,13.7,24,13.7z M23.2,12.6
        C23.2,12.6,23.2,12.6,23.2,12.6L23,12.1c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.1l0,0.3l0.1,0.1C23.5,12.5,23.4,12.5,23.2,12.6z
         M26.7,13L26.7,13C26.7,13,26.7,13,26.7,13C26.7,13,26.7,13,26.7,13z M27.9,12.5l-0.1,0.4l0,0.1c-0.2,0-0.3,0-0.5-0.1l0-0.5
        C27.5,12.5,27.7,12.5,27.9,12.5z M27.3,12.4l-0.1,0.5l0,0c-0.1,0-0.3-0.1-0.4-0.1l0-0.5C27,12.3,27.1,12.4,27.3,12.4z M26.7,12.2
        l-0.1,0.5c-0.1-0.1-0.2-0.1-0.3-0.2l0-0.6C26.4,12,26.6,12.1,26.7,12.2z M26.2,11.8C26.2,11.8,26.2,11.9,26.2,11.8l0,0.5
        c-0.1-0.1-0.2-0.3-0.3-0.4l0-0.2l0-0.2c0,0,0-0.1,0-0.1c0,0,0,0.1,0.1,0.1C26.1,11.6,26.1,11.7,26.2,11.8z M24.9,10.2
        c0.3-0.2,0.7-0.3,1-0.3l0,0l0,0c0.2,0,0.4,0,0.6,0c0,0,0,0,0,0c-0.4,0.3-0.7,0.6-0.7,1c0,0.1,0,0.2,0,0.3l-0.1,0.4c0,0,0,0.1,0,0.1
        c0,0,0,0.1,0,0.1c0,0.3,0.1,0.5,0.3,0.7c-0.9,0.5-1.9,0.5-2.3,0c0.4-0.2,0.8-0.5,0.9-0.9c0.1-0.2,0.2-0.4,0.2-0.6
        c0,0.2-0.2,0.4-0.3,0.6c-0.2,0.2-0.5,0.5-0.8,0.6l-0.2-0.4c0.1,0,0.2-0.1,0.3-0.1c0.6-0.3,1-0.8,1-1.3c0,0,0-0.1,0-0.1c0,0,0,0,0,0
        C24.8,10.3,24.9,10.3,24.9,10.2z M25.9,11.4C25.9,11.4,25.9,11.4,25.9,11.4L25.9,11.4L25.9,11.4z M21.5,9.8
        C21.5,9.8,21.5,9.8,21.5,9.8c0.3-0.2,0.5-0.3,0.9-0.4c0.7-0.2,1.4-0.2,1.8,0l0,0c0.3,0.1,0.5,0.3,0.6,0.6c0.2,0.7-0.5,1.5-1.6,1.9
        c-1.1,0.4-2.2,0.1-2.4-0.6C20.6,10.8,20.9,10.2,21.5,9.8z M21.3,12.1c0.1,0.1,0.3,0.1,0.5,0.1v0l0.1,0.4c-0.1,0-0.2,0-0.3-0.1
        l-0.1-0.2L21.3,12.1z M21.3,12.5C21.3,12.5,21.2,12.5,21.3,12.5c-0.2-0.1-0.3-0.2-0.4-0.3l-0.1-0.3c0,0,0-0.1,0-0.1
        c0,0,0.1,0,0.1,0.1c0.1,0.1,0.2,0.2,0.3,0.3L21.3,12.5L21.3,12.5z M20.7,11.7C20.7,11.7,20.7,11.7,20.7,11.7L20.7,11.7L20.7,11.7z
         M18.9,11.2c0.2-0.5,0.9-0.7,1.7-0.6c-0.1,0.2-0.1,0.5,0,0.7c0,0.1,0.1,0.2,0.1,0.2l0.1,0.5c0,0.1,0,0.1,0,0.2
        c0,0.1,0.1,0.2,0.2,0.3c0.3,0.4,1,0.5,1.8,0.4l0,0l0,0c0,0,0,0,0,0c-0.3,0.7-1.4,0.8-2.4,0.3c-0.1-0.1-0.3-0.1-0.4-0.2
        C19.1,12.6,18.6,11.8,18.9,11.2z M18.6,11.6C18.6,11.6,18.6,11.6,18.6,11.6C18.6,11.6,18.6,11.6,18.6,11.6L18.6,11.6z M18.4,12.1
        l0.1-0.3l0-0.1c0,0,0-0.1,0.1-0.1c0,0,0,0,0,0c0,0,0,0.1,0,0.1c0,0.1,0,0.3,0.1,0.4l-0.2,0.4C18.4,12.4,18.4,12.3,18.4,12.1z
         M18.6,12.8l0.2-0.5c0.1,0.1,0.2,0.3,0.3,0.4l-0.3,0.4C18.7,13,18.6,12.9,18.6,12.8z M16.6,15.1C16.6,15.1,16.6,15.1,16.6,15.1
        c0-0.1,0-0.1,0-0.1l0,0c0,0,0-0.1,0.1-0.1c0,0,0,0,0,0c0,0,0-0.1,0.1-0.1c0.2-0.4,0.6-0.7,1.2-1c0.3-0.1,0.6-0.3,0.9-0.3
        c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.2,0.1,0.3,0.2v0v0c0.1,0.1,0.3,0.2,0.4,0.2c0,0,0.1,0,0.1,0v0v0c0.6,0.2,1.1,0.3,1.5,0.2
        c-0.1,0.2-0.2,0.3-0.2,0.6c0,0.1,0,0.2,0,0.2c-0.2,0-0.3,0-0.5,0c0,0,0,0,0,0c0,0.5-0.4,1-1,1.5l-0.2-0.4c0.7-0.5,1.1-1.1,1-1.6
        c0,0,0-0.1,0-0.1c0,0.6-0.6,1.3-1.4,1.7c-1,0.5-2.1,0.5-2.4-0.2c0,0,0,0,0,0C16.5,15.7,16.5,15.4,16.6,15.1z"></path></g><g><path d="M5.3,34l3.2-0.6l0.3,0.5l-2.1,2.3l-0.3-0.5l0.5-0.5l-0.6-0.9l-0.7,0.1L5.3,34z M6.7,34.2l0.4,0.7L8,34L6.7,34.2z"></path><path d="M7.1,36.9l2.4-1.8l1.1,1.4l-0.4,0.3l-0.8-1l-0.7,0.5l0.6,0.8l-0.3,0.3l-0.6-0.8l-1,0.8L7.1,36.9z"></path><path d="M8.8,39L11,37l1.3,1.3l-0.3,0.3L11,37.6l-0.6,0.6l0.8,0.7l-0.3,0.3l-0.8-0.7l-0.9,0.9L8.8,39z"></path><path d="M10.7,40.8l2-2.3l0.4,0.3l-2,2.3L10.7,40.8z"></path><path d="M11.9,41.8l1.7-2.4l0.4,0.3l-1.5,2.1l1.1,0.7l-0.2,0.3L11.9,41.8z"></path><path d="M14.2,43.2l1.5-2.6l0.5,0.2l-1.5,2.6L14.2,43.2z"></path><path d="M15.4,43.8l2.1-2.4l0.6,0.2l-0.1,3.1l-0.5-0.2l0-0.7l-1-0.4L15.9,44L15.4,43.8z M16.7,43.1l0.8,0.3l0.1-1.3L16.7,43.1z"></path><path d="M19.1,45.1l0.6-2.4l-0.8-0.2L19,42l2.1,0.5L21,42.9l-0.8-0.2l-0.6,2.4L19.1,45.1z"></path><path d="M21.3,45.5l0.3-2.9l1.9,0.2l0,0.4L22.1,43L22,43.8l1.2,0.1l0,0.4L22,44.3l-0.1,0.8l1.4,0.1l0,0.4L21.3,45.5z"></path><path d="M25.6,45.6l-0.4-2.9l1.1-0.1c0.2,0,0.4,0,0.6,0c0.2,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.1,0.3,0.2,0.4c0,0.2,0,0.3,0,0.5
        c0,0.1-0.1,0.3-0.3,0.4c-0.1,0.1-0.3,0.2-0.6,0.2l-0.5,0.1l0.1,1.1L25.6,45.6z M25.9,44l0.5-0.1c0.2,0,0.3-0.1,0.4-0.2
        c0.1-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.3-0.2-0.3C26.6,43,26.4,43,26.3,43l-0.5,0.1L25.9,44z"></path><path d="M28,45.3l0.2-3.1l0.6-0.2l1.8,2.6l-0.5,0.1l-0.4-0.6l-1.1,0.3l0,0.7L28,45.3z M28.6,44l0.8-0.2l-0.7-1.1L28.6,44z"></path><path d="M31.5,44.3l-1.3-2.7l1-0.4c0.2-0.1,0.4-0.1,0.6-0.1c0.2,0,0.3,0.1,0.4,0.2c0.1,0.1,0.2,0.2,0.3,0.4
        c0.1,0.2,0.1,0.3,0.1,0.5c0,0.2-0.1,0.3-0.3,0.5l1.1,0.9l-0.6,0.2l-1-0.8L31.5,43l0.5,1.1L31.5,44.3z M31.3,42.7l0.5-0.2
        c0.2-0.1,0.3-0.2,0.3-0.3c0-0.1,0-0.2,0-0.4c-0.1-0.1-0.1-0.2-0.3-0.3c-0.1,0-0.3,0-0.4,0l-0.4,0.2L31.3,42.7z"></path><path d="M34.8,42.6l-1.4-2.1L32.7,41l-0.2-0.4l1.9-1.2l0.2,0.4l-0.7,0.4l1.4,2.1L34.8,42.6z"></path><path d="M36.6,41.4l-2-2.2l0.4-0.3l2.4,0.7L36,38l0.4-0.3l2,2.2l-0.4,0.3l-2.4-0.7l1.4,1.5L36.6,41.4z"></path><path d="M39.2,39.1l-2.3-1.9l1.2-1.4l0.3,0.3l-0.9,1l0.6,0.5l0.8-0.9l0.3,0.3l-0.8,0.9l0.7,0.5l0.9-1l0.3,0.3L39.2,39.1z"></path><path d="M41,36.9l-2.6-1.6l0.6-0.9c0.1-0.2,0.3-0.3,0.4-0.4c0.2-0.1,0.3-0.1,0.5-0.1c0.2,0,0.3,0.1,0.5,0.2
        c0.2,0.1,0.3,0.2,0.4,0.4c0.1,0.2,0.1,0.3,0,0.5l1.4,0.2l-0.3,0.5l-1.3-0.2l-0.2,0.4l1,0.6L41,36.9z M39.9,35.7l0.3-0.4
        c0.1-0.1,0.1-0.3,0.1-0.4c0-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.1-0.4-0.1c-0.1,0-0.2,0.1-0.3,0.3l-0.3,0.4L39.9,35.7z"></path></g><g><path d="M7.9,14.9l-2.5-1.6l0.3-0.5L7.8,13l-1.1-1.8l0.3-0.5l2.5,1.6l-0.3,0.4l-1.8-1.1l1,1.5l-0.2,0.3l-1.8-0.2l1.8,1.1L7.9,14.9z
        "></path><path d="M10.1,11.9L7.8,10l0.3-0.4l2.3,1.9L10.1,11.9z"></path><path d="M11.9,10.1c-0.2,0.2-0.4,0.3-0.7,0.4s-0.5,0-0.7-0.1c-0.2-0.1-0.5-0.3-0.7-0.5C9.6,9.7,9.4,9.5,9.4,9.2
        C9.3,9,9.3,8.8,9.3,8.5c0.1-0.2,0.2-0.4,0.4-0.6c0.3-0.2,0.5-0.3,0.8-0.4c0.3,0,0.6,0.1,0.8,0.3l-0.4,0.4c-0.1-0.1-0.3-0.1-0.4-0.1
        c-0.1,0-0.3,0.1-0.4,0.2C9.9,8.4,9.8,8.6,9.8,8.9c0,0.2,0.1,0.5,0.4,0.7c0.2,0.2,0.5,0.4,0.7,0.4c0.2,0,0.5,0,0.6-0.2
        c0.1-0.1,0.2-0.3,0.3-0.4c0-0.1,0-0.3-0.1-0.4l0.4-0.4c0.2,0.3,0.2,0.5,0.2,0.8C12.3,9.6,12.1,9.9,11.9,10.1z"></path><path d="M13.2,8.9l-1.7-2.4L12,6.2l0.7,1l1.1-0.7l-0.7-1l0.4-0.3l1.7,2.4l-0.4,0.3L14,6.9l-1.1,0.7l0.7,1.1L13.2,8.9z"></path><path d="M15.8,7.3l-1.4-2.6l0.5-0.2l1.4,2.6L15.8,7.3z"></path><path d="M18.1,6.4c-0.3,0.1-0.5,0.1-0.7,0c-0.2,0-0.4-0.2-0.6-0.3c-0.2-0.2-0.3-0.4-0.4-0.7c-0.1-0.3-0.1-0.6-0.1-0.8
        c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.4-0.3,0.6-0.4c0.3-0.1,0.6-0.1,0.9,0s0.5,0.3,0.6,0.5l-0.6,0.2C18,4,17.9,4,17.8,3.9
        c-0.1,0-0.3,0-0.5,0c-0.3,0.1-0.4,0.3-0.5,0.5s-0.1,0.5,0,0.8c0.1,0.3,0.3,0.5,0.5,0.6C17.5,6,17.7,6,18,5.9
        c0.2-0.1,0.4-0.2,0.5-0.4c0.1-0.2,0.1-0.4,0-0.6l-0.7,0.2l-0.1-0.4l1.2-0.4l0.6,1.5L19,6.1l-0.2-0.3c0,0.2-0.1,0.3-0.2,0.4
        C18.5,6.3,18.3,6.3,18.1,6.4z"></path><path d="M19.8,5.8l0.5-3.1L21,2.6l1.5,2.7l-0.6,0.1l-0.3-0.6L20.5,5l-0.1,0.7L19.8,5.8z M20.6,4.6l0.8-0.1l-0.6-1.1L20.6,4.6z"></path><path d="M23,5.4l0-2.9l0.5,0l1.3,2.1l0-2.1l0.5,0l0,2.9l-0.5,0l-1.3-2.1l0,2.1H23z"></path><path d="M27.2,5.6l0.7-2.9l0.5,0.1l-0.6,2.4l1.2,0.3L29,6L27.2,5.6z"></path><path d="M30.5,6.6c-0.3-0.1-0.5-0.3-0.6-0.5c-0.1-0.2-0.2-0.4-0.3-0.7c0-0.3,0-0.5,0.1-0.8C29.9,4.4,30,4.2,30.3,4
        c0.2-0.2,0.4-0.3,0.7-0.3c0.3,0,0.5,0,0.8,0.1c0.3,0.1,0.5,0.3,0.6,0.5c0.2,0.2,0.2,0.4,0.3,0.7c0,0.3,0,0.5-0.1,0.8
        C32.3,6,32.2,6.3,32,6.4c-0.2,0.2-0.4,0.3-0.7,0.3C31,6.8,30.8,6.8,30.5,6.6z M30.7,6.2c0.3,0.1,0.5,0.1,0.7,0
        c0.2-0.1,0.4-0.3,0.5-0.6C32.1,5.3,32.1,5,32,4.8c-0.1-0.2-0.2-0.4-0.5-0.5c-0.3-0.1-0.5-0.1-0.7,0c-0.2,0.1-0.4,0.3-0.5,0.6
        c-0.1,0.3-0.1,0.6-0.1,0.8C30.3,5.9,30.5,6.1,30.7,6.2z"></path><path d="M32.9,7.7l1.3-2.1l-0.7-0.4l0.2-0.4l1.9,1.1l-0.2,0.4l-0.7-0.4L33.3,8L32.9,7.7z"></path><path d="M35,9.1l1.6-1.9L36,6.6l0.3-0.3l1.7,1.3L37.7,8L37,7.5l-1.6,1.9L35,9.1z"></path><path d="M36.4,10.3l2.2-2l1.3,1.3l-0.3,0.3L38.7,9l-0.6,0.6l0.8,0.9l-0.3,0.3l-0.8-0.9l-0.6,0.6l0.9,0.9l-0.3,0.3L36.4,10.3z"></path><path d="M38.1,12.1l2.5-1.7l0.6,0.8c0.1,0.2,0.2,0.3,0.2,0.5c0,0.2,0,0.3-0.1,0.5c-0.1,0.1-0.2,0.3-0.3,0.3
        c-0.2,0.1-0.3,0.2-0.5,0.2c-0.2,0-0.3,0-0.5-0.1l-0.7,1.2L39,13.3l0.7-1.1l-0.3-0.3l-1,0.7L38.1,12.1z M39.7,11.6L40,12
        c0.1,0.1,0.2,0.2,0.3,0.2c0.1,0,0.2,0,0.4-0.1c0.1-0.1,0.2-0.2,0.2-0.3c0-0.1,0-0.2-0.1-0.4l-0.3-0.4L39.7,11.6z"></path><path d="M39.9,14.8l0.9-0.5l1.3-1.7l0.3,0.5l-0.9,1.2l1.5-0.1l0.3,0.5l-2.2,0.1l-0.9,0.5L39.9,14.8z"></path></g></svg>                    </li>

                    <li class="c-global-footer__badges__item c-global-footer__badges__item--wide">
                        <svg x="0px" y="0px" width="142.1px" height="48px" viewBox="0 0 142.1 48" enable-background="new 0 0 142.1 48" xml:space="preserve"><g><g><path fill="none" d="M63.8,17.2c-1.4,0-2.8,0-4.2,0c0-1,0-2,0-3c1.2,0,2.3,0,3.5,0c0-0.7,0-1.2,0-1.9c-1.2,0-2.3,0-3.5,0
            c0-0.9,0-1.8,0-2.7c1.4,0,2.8,0,4.1,0c0-0.7,0-1.2,0-1.9c-2.2,0-4.3,0-6.5,0c0,3.8,0,7.6,0,11.3c2.2,0,4.3,0,6.5,0
            C63.8,18.5,63.8,17.9,63.8,17.2z"></path><path fill="none" d="M33.1,7.5c-2.2,0-4.3,0-6.5,0c0,0,0,0,0,0c-2.2,0-4.3,0-6.5,0c-4.3,0.1-7.4,2.5-8.3,6.4
            c-0.3,1.4-0.4,2.8-0.5,4.1c-0.2,2.2-0.4,4.3-0.4,6.5c0,3.2,1.8,5.5,4.9,6.1c1.9,0.4,3.8,0.3,5.7,0.3c0.3,0,0.8-0.5,0.9-0.9
            c0.2-1.1,0.3-2.3,0.4-3.4c0.1-0.8-0.3-1.2-1.1-1.2c-0.5,0-1.1,0-1.6,0c-2.1-0.1-2.8-0.7-2.6-2.8c0.1-2.1,0.4-4.1,0.5-6.2
            c0.2-2.5,1-3.2,3.5-3.3c2.7,0,5.4,0,8.1,0c1.3,0,2.3-0.5,3-1.6c0.5-0.8,1.1-1.5,1.5-2.3c0.2-0.4,0.3-0.9,0.2-1.3
            C34.1,7.7,33.5,7.5,33.1,7.5z"></path><path fill="none" d="M28.8,17.4c-2-0.5-4.2-0.4-6.3-0.5c-0.6,0-1,0.4-1,1c-0.1,1.1-0.2,2.2-0.3,3.3c-0.1,0.8,0.3,1.3,1.2,1.3
            c0.6,0,1.2,0,1.9,0c1.6,0.1,2.4,1,2.3,2.6c-0.2,2.2-0.4,4.4-0.6,6.6c-0.3,2.4-1,3.1-3.4,3.1c-2.8,0-5.6,0-8.4,0
            c-1.3,0-2.2,0.5-2.9,1.5c-0.5,0.8-1.1,1.5-1.5,2.3c-0.2,0.4-0.3,0.9-0.2,1.3c0.1,0.3,0.7,0.5,1.1,0.5c2.3,0,4.6,0,6.9,0
            c0,0,0,0,0-0.1c2.3,0,4.7,0.1,7,0c3.7-0.2,6.6-2.6,7.5-6.2c0.3-1.2,0.4-2.4,0.5-3.6c0.2-2.5,0.4-5,0.4-7.5
            C33.1,20.3,31.4,18,28.8,17.4z"></path><path fill="none" d="M40.5,40.3c0.4,0,0.7,0,1,0c0-10.9,0-21.8,0-32.6c-0.4,0-0.7,0-1,0C40.5,18.6,40.5,29.4,40.5,40.3z"></path><path fill="none" d="M53.8,26.4c0.8,0,1.3,0.5,1.5,1.2c0.1,0.3,0.1,0.7,0.2,1.1c1.1,0,2.1,0,3.3,0c-0.1-0.7-0.2-1.4-0.4-2
            c-0.9-2.5-3.7-3.7-6.6-2.9c-1.8,0.5-3,1.5-3.3,3.4c-0.4,1.9,0.2,3.5,1.8,4.6c0.7,0.5,1.6,0.9,2.4,1.3c0.6,0.3,1.2,0.6,1.8,0.9
            c0.8,0.5,1.1,1.7,0.8,2.7c-0.3,0.8-1.1,1.1-2.2,0.9c-1-0.2-1.5-0.7-1.7-1.7c0-0.3-0.1-0.6-0.1-0.9c-1.1,0-2.2,0-3.3,0
            c0,0.4,0,0.7,0.1,1.1c0.5,2.4,2.2,4,4.9,4.3c2.6,0.3,4.9-0.9,5.5-2.9c0.8-2.5-0.1-4.8-2.6-6.2c-0.5-0.3-1.1-0.5-1.6-0.7
            c-0.7-0.4-1.5-0.8-2.1-1.3c-0.6-0.5-0.6-1.3-0.3-2C52.4,26.5,53,26.3,53.8,26.4z"></path><path fill="none" d="M51.2,17.3c-0.5-0.4-0.9-1-1.5-1.7c-0.4,0-1.1,0-1.8,0c0,1.9,1,3.2,2.8,3.6c3,0.7,5.1-1.1,4.6-3.9
            c-0.3-1.4-1.3-2.1-2.5-2.6c-0.6-0.3-1.3-0.5-1.8-1c-0.3-0.3-0.5-1-0.3-1.4c0.1-0.4,0.8-0.8,1.2-0.7c0.4,0,0.8,0.5,1.1,0.9
            c0.1,0.1,0.1,0.4,0.2,0.6c0.8,0,1.5,0,2.2,0c0-1.9-1.1-3.2-2.9-3.4c-2.1-0.3-3.8,0.7-4.2,2.4c-0.4,1.6,0.4,3,2.2,3.9
            c0.7,0.3,1.4,0.6,2,1c0.6,0.4,0.8,1.4,0.5,2C52.4,17.6,51.7,17.7,51.2,17.3z"></path><path fill="none" d="M100.5,17.2c-1.4,0-2.8,0-4.1,0c0-1,0-2,0-3c1.2,0,2.3,0,3.5,0c0-0.7,0-1.3,0-2c-1.2,0-2.4,0-3.5,0
            c0-0.9,0-1.7,0-2.6c1.4,0,2.8,0,4.1,0c0-0.7,0-1.3,0-1.9c-2.2,0-4.3,0-6.5,0c0,3.8,0,7.6,0,11.3c2.2,0,4.3,0,6.5,0
            C100.5,18.5,100.5,17.9,100.5,17.2z"></path><path fill="none" d="M71,45.8c-20,0-39.9,0-59.9,0C31.1,45.8,51,45.8,71,45.8c12.4,0,24.8,0,37.2,0C95.8,45.8,83.4,45.8,71,45.8z"></path><path fill="none" d="M78.9,19.3c2.2,0,3.5-1.2,3.6-3.2c0.1-2.2,0-4.4,0-6.7c0-0.5,0-1,0-1.6c-0.8,0-1.6,0-2.3,0c0,2.7,0,5.4,0,8.1
            c0,1.1-0.4,1.5-1.4,1.5c-1,0-1.4-0.4-1.4-1.5c0-1.7,0-3.4,0-5.2c0-1,0-1.9,0-2.9c-0.8,0-1.5,0-2.3,0c0,2.9-0.1,5.7,0,8.4
            C75.1,18.3,76.6,19.4,78.9,19.3z"></path><path fill="none" d="M65,33.1c1.7,0,3.4,0,5,0c0-0.9,0-1.8,0-2.7c-1.7,0-3.4,0-5,0c0-1.3,0-2.6,0-3.9c2,0,4,0,6,0
            c0-0.9,0-1.8,0-2.7c-3.1,0-6.2,0-9.3,0c0,5.5,0,10.9,0,16.3c3.2,0,6.2,0,9.3,0c0-0.9,0-1.8,0-2.7c-2,0-4,0-6,0
            C65,36,65,34.6,65,33.1z"></path><path fill="none" d="M127.1,16.6c-0.1,0.8,0,1.7,0,2.5c0.9,0,1.6,0,2.5,0c-0.9-3.3,0.6-5.9,1.8-8.7c0.3-0.7,0.6-1.3,0.8-2
            c0.1-0.2,0.1-0.4,0.2-0.7c-0.3,0-0.5,0-0.7,0c-1.7,0-1.7,0-2.3,1.6c-0.4,1.1-0.7,2.2-1.2,3.5c-0.4-1.2-0.7-2.1-1-3.1
            c-0.7-2.1-0.7-2.1-3.2-2c0.8,2,1.6,3.9,2.4,5.7C126.9,14.5,127.1,15.5,127.1,16.6z"></path><path fill="none" d="M87,15.1c0.9-0.3,1.3,0,1.5,0.8c0.3,0.9,0.7,1.9,1.1,2.8c0.1,0.2,0.3,0.5,0.4,0.5c0.7,0.1,1.5,0,2.3,0
            c-0.7-1.7-1.4-3.2-2-4.7c0.2-0.1,0.4-0.3,0.5-0.4c1.2-1.2,1.3-2.6,0.9-4.1c-0.4-1.4-1.5-2.1-2.8-2.1c-1.4-0.1-2.8,0-4.2,0
            c0,3.8,0,7.6,0,11.3c0.8,0,1.5,0,2.3,0C87,17.8,87,16.4,87,15.1z"></path><path fill="none" d="M123.1,16.8c0.3-1.6-0.1-2.7-1.4-3.5c1.3-0.8,1.5-2.1,1.2-3.4c-0.3-1.2-1.1-1.9-2.2-2c-1.6-0.1-3.2,0-4.8,0
            c0,3.7,0,7.5,0,11.2c1.6,0,3.2,0.1,4.8,0C121.9,19,122.8,18,123.1,16.8z"></path><path fill="none" d="M109.4,16.2c0.5-1.8,0.5-3.7,0-5.5c-0.4-1.5-1.4-2.5-2.9-2.8c-1.4-0.2-2.8-0.2-4.2-0.2c0,3.9,0,7.7,0,11.4
            c0.2,0,0.3,0,0.5,0c1,0,2.1,0,3.1-0.1C107.6,19,108.9,17.9,109.4,16.2z"></path><path fill="none" d="M118,35c0-1.1,0-2.2,0-3.3c-2,0-3.8,0-5.6,0c0,0.8,0,1.6,0,2.5c0.8,0,1.5,0,2.3,0c0,0.9,0,1.7,0,2.5
            c0,0.2-0.2,0.6-0.4,0.7c-1.5,1-3.6,0.2-4-1.5c-0.6-2.6-0.6-5.2,0-7.8c0.3-1.2,1.2-1.7,2.5-1.6c1.1,0.1,1.6,0.6,1.9,1.9
            c0,0.3,0.1,0.5,0.1,0.8c1.1,0,2.1,0,3.1,0c0-2.1-0.8-3.7-2.1-4.6c-3.5-2.2-8.2-0.4-8.9,3.6c-0.4,2.4-0.3,4.9-0.1,7.3
            c0.2,2.1,1.3,3.9,3.4,4.6c2.4,0.8,4.7,0.5,6.9-0.8c0.7-0.4,1-1,0.9-1.8C118,36.6,118,35.8,118,35z"></path><path fill="none" d="M126.9,23.6c-3.1-0.2-5.3,1.6-6,4.8c-0.5,2.5-0.5,5.1,0,7.6c0.6,2.9,2.7,4.5,5.6,4.5c2.9,0,5-1.6,5.6-4.5
            c0.3-1.3,0.3-2.6,0.4-3.6c-0.1-1.4-0.1-2.4-0.2-3.4C132,25.8,129.9,23.8,126.9,23.6z"></path><path fill="none" d="M76.9,27.8c0.4-1.1,1.2-1.5,2.6-1.4c1,0.1,1.6,0.6,1.8,1.8c0.1,0.4,0.1,0.8,0.1,1.2c1.1,0,2.2,0,3.3,0
            c-0.2-2.1-0.7-3.9-2.5-5c-3.3-2-7.7-0.3-8.6,3.5c-0.7,2.7-0.6,5.6,0,8.3c0.7,3.1,2.9,4.6,6,4.3c3.2-0.2,5.4-2.7,5-5.6
            c-1.1,0-2.1,0-3.2,0c-0.1,0.4,0,0.9-0.2,1.2c-0.3,0.5-0.6,1.2-1.1,1.4c-1.6,0.6-3.2,0.1-3.3-1.7c-0.1-2.4-0.1-4.8-0.1-7.2
            C76.7,28.3,76.8,28,76.9,27.8z"></path><path fill="none" d="M73.2,15.4c-0.7,0-1.5,0-2.2,0c0,0.3-0.1,0.6-0.1,0.8c-0.1,0.8-0.6,1.2-1.4,1.2c-0.8,0-1.5-0.2-1.6-1.1
            c-0.1-1.9-0.1-3.8,0-5.7c0-0.9,0.8-1.2,1.6-1.1c0.9,0,1.3,0.5,1.4,1.3c0,0.2,0,0.5,0.1,0.7c0.8,0,1.5,0,2.2,0
            c0-2.1-1.1-3.6-2.9-3.9c-2.4-0.4-4.2,0.6-4.7,2.7c-0.5,2-0.4,4.1,0,6.2c0.1,0.3,0.2,0.5,0.3,0.7c0.8,1.7,2.7,2.4,4.7,1.8
            C72.3,18.7,73.3,17.3,73.2,15.4z"></path><path fill="none" d="M86.2,26.6c1.3,0,2.6,0,4,0c0,4.6,0,9.1,0,13.6c1.1,0,2.1,0,3.3,0c0-4.6,0-9.1,0-13.6c1.4,0,2.7,0,4,0
            c0-0.9,0-1.8,0-2.7c-3.8,0-7.5,0-11.3,0C86.2,24.8,86.2,25.7,86.2,26.6z"></path><path fill="none" d="M100.2,40.2c1.1,0,2.1,0,3.2,0c0-5.5,0-10.9,0-16.3c-1.1,0-2.2,0-3.2,0C100.2,29.4,100.2,34.8,100.2,40.2z"></path><path fill="#03B374" d="M142.1,11.2c0-1.1-0.2-2.2-0.4-3.2c-1.3-4.8-5.6-7.9-10.8-7.9C109.9,0,89,0,68,0C49.1,0,30.1,0,11.2,0
            C4.8,0,0,4.8,0,11.1c0,8.6-0.1,17.2,0,25.7c0,1.6,0.3,3.2,1,4.6C3,45.8,6.5,48,11.2,48c20,0,39.9,0,59.9,0c20,0,39.9,0,59.9,0
            c6.4,0,11.2-4.7,11.2-11.2C142.1,28.3,142.2,19.7,142.1,11.2z M130.6,45.9c-7.4,0-14.9-0.1-22.3-0.1c-12.4,0-24.8,0-37.2,0
            c-20,0-39.9,0-59.9,0c-4.4,0-7.8-2.8-8.7-7.1c-0.1-0.7-0.2-1.4-0.2-2.1c0-8.4,0-16.9,0-25.3c0-5.4,3.7-9.2,9.2-9.2
            c39.8,0,79.5,0,119.3,0c4.6,0,8.2,2.8,9,7.1c0.1,0.7,0.1,1.4,0.1,2.1c0,8.4-0.1,16.8,0,25.1C140,42,135.7,45.9,130.6,45.9z"></path><path fill="#FCFDFD" d="M139.9,11.4c0-0.7,0-1.4-0.1-2.1c-0.9-4.3-4.4-7.1-9-7.1c-39.8,0-79.5,0-119.3,0c-5.5,0-9.2,3.7-9.2,9.2
            c0,8.4,0,16.9,0,25.3c0,0.7,0,1.4,0.2,2.1c0.9,4.2,4.4,7.1,8.7,7.1c20,0,39.9,0,59.9,0c12.4,0,24.8,0,37.2,0
            c7.4,0,14.9,0,22.3,0.1c5.1,0,9.4-3.9,9.4-9.3C139.8,28.2,139.9,19.8,139.9,11.4z M127.2,9.8c0.3,1,0.6,1.9,1,3.1
            c0.4-1.3,0.8-2.4,1.2-3.5c0.6-1.6,0.6-1.6,2.3-1.6c0.2,0,0.4,0,0.7,0c-0.1,0.3-0.1,0.5-0.2,0.7c-0.3,0.7-0.6,1.3-0.8,2
            c-1.2,2.8-2.7,5.5-1.8,8.7c-1,0-1.7,0-2.5,0c0-0.8,0-1.7,0-2.5c0.1-1.1-0.2-2.1-0.6-3.1c-0.8-1.9-1.6-3.7-2.4-5.7
            C126.5,7.6,126.5,7.6,127.2,9.8z M94,7.8c2.2,0,4.3,0,6.5,0c0,0.6,0,1.2,0,1.9c-1.4,0-2.7,0-4.1,0c0,0.9,0,1.7,0,2.6
            c1.1,0,2.3,0,3.5,0c0,0.7,0,1.3,0,2c-1.2,0-2.3,0-3.5,0c0,1,0,1.9,0,3c1.4,0,2.7,0,4.1,0c0,0.7,0,1.2,0,1.9c-2.1,0-4.3,0-6.5,0
            C94,15.4,94,11.6,94,7.8z M75,7.8c0.8,0,1.5,0,2.3,0c0,1,0,2,0,2.9c0,1.7,0,3.4,0,5.2c0,1.1,0.5,1.5,1.4,1.5c1,0,1.4-0.4,1.4-1.5
            c0-2.7,0-5.3,0-8.1c0.8,0,1.5,0,2.3,0c0,0.5,0,1,0,1.6c0,2.2,0,4.5,0,6.7c-0.1,2-1.4,3.2-3.6,3.2c-2.3,0-3.8-1-3.9-3.1
            C74.9,13.4,75,10.6,75,7.8z M57.3,7.8c2.2,0,4.3,0,6.5,0c0,0.6,0,1.2,0,1.9c-1.4,0-2.7,0-4.1,0c0,0.9,0,1.8,0,2.7
            c1.1,0,2.3,0,3.5,0c0,0.7,0,1.2,0,1.9c-1.2,0-2.3,0-3.5,0c0,1,0,1.9,0,3c1.4,0,2.8,0,4.2,0c0,0.7,0,1.3,0,1.9c-2.2,0-4.3,0-6.5,0
            C57.3,15.4,57.3,11.6,57.3,7.8z M32.7,30.5c-0.1,1.2-0.2,2.4-0.5,3.6c-0.9,3.6-3.7,6-7.5,6.2c-2.3,0.1-4.7,0-7,0c0,0,0,0,0,0.1
            c-2.3,0-4.6,0-6.9,0c-0.4,0-1-0.2-1.1-0.5c-0.2-0.3,0-0.9,0.2-1.3c0.4-0.8,1-1.5,1.5-2.3c0.7-1,1.6-1.6,2.9-1.5c2.8,0,5.6,0,8.4,0
            c2.4,0,3.2-0.7,3.4-3.1c0.2-2.2,0.4-4.4,0.6-6.6c0.1-1.7-0.7-2.5-2.3-2.6c-0.6,0-1.2,0-1.9,0c-0.9,0-1.3-0.4-1.2-1.3
            c0.1-1.1,0.2-2.2,0.3-3.3c0.1-0.6,0.4-1.1,1-1c2.1,0.1,4.2,0.1,6.3,0.5c2.6,0.6,4.3,2.9,4.3,5.6C33.1,25.5,32.9,28,32.7,30.5z
             M34.1,9.3c-0.4,0.8-1,1.5-1.5,2.3c-0.7,1.1-1.7,1.6-3,1.6c-2.7,0-5.4,0-8.1,0c-2.5,0-3.3,0.8-3.5,3.3c-0.2,2.1-0.4,4.1-0.5,6.2
            c-0.1,2.1,0.6,2.7,2.6,2.8c0.5,0,1.1,0,1.6,0c0.8,0,1.2,0.4,1.1,1.2c-0.1,1.2-0.1,2.3-0.4,3.4c-0.1,0.4-0.6,0.9-0.9,0.9
            c-1.9,0-3.9,0.1-5.7-0.3c-3.1-0.6-4.9-3-4.9-6.1c0-2.2,0.2-4.3,0.4-6.5c0.1-1.4,0.2-2.8,0.5-4.1c0.9-4,4-6.3,8.3-6.4
            c2.2,0,4.3,0,6.5,0c0,0,0,0,0,0c2.2,0,4.3,0,6.5,0c0.4,0,1,0.2,1.1,0.5C34.4,8.3,34.3,8.9,34.1,9.3z M41.5,40.3c-0.4,0-0.7,0-1,0
            c0-10.9,0-21.7,0-32.6c0.3,0,0.6,0,1,0C41.5,18.5,41.5,29.4,41.5,40.3z M52.3,14.9c-0.6-0.4-1.3-0.6-2-1c-1.8-0.9-2.6-2.3-2.2-3.9
            c0.4-1.7,2.1-2.6,4.2-2.4c1.7,0.2,2.8,1.5,2.9,3.4c-0.7,0-1.4,0-2.2,0c-0.1-0.2,0-0.5-0.2-0.6c-0.3-0.4-0.7-0.9-1.1-0.9
            c-0.4,0-1,0.4-1.2,0.7c-0.1,0.4,0,1.1,0.3,1.4c0.5,0.4,1.2,0.7,1.8,1c1.2,0.6,2.3,1.2,2.5,2.6c0.5,2.8-1.6,4.6-4.6,3.9
            c-1.7-0.4-2.7-1.7-2.8-3.6c0.8,0,1.5,0,1.8,0c0.6,0.7,0.9,1.4,1.5,1.7c0.5,0.3,1.2,0.2,1.6-0.4C53.2,16.3,53,15.3,52.3,14.9z
             M52.3,29.3c0.6,0.5,1.4,0.9,2.1,1.3c0.5,0.3,1.1,0.5,1.6,0.7c2.4,1.3,3.4,3.7,2.6,6.2c-0.7,2-2.9,3.2-5.5,2.9
            c-2.7-0.3-4.4-1.9-4.9-4.3c-0.1-0.3-0.1-0.7-0.1-1.1c1.1,0,2.2,0,3.3,0c0,0.3,0.1,0.6,0.1,0.9c0.2,1,0.7,1.5,1.7,1.7
            c1.1,0.2,1.9-0.1,2.2-0.9c0.4-1,0.1-2.2-0.8-2.7c-0.6-0.4-1.2-0.6-1.8-0.9c-0.8-0.4-1.7-0.8-2.4-1.3c-1.5-1.1-2.2-2.7-1.8-4.6
            c0.4-1.9,1.6-2.9,3.3-3.4c2.9-0.8,5.7,0.4,6.6,2.9c0.2,0.6,0.3,1.3,0.4,2c-1.2,0-2.2,0-3.3,0c-0.1-0.4-0.1-0.7-0.2-1.1
            c-0.2-0.8-0.7-1.2-1.5-1.2c-0.8,0-1.5,0.2-1.8,1C51.7,28,51.7,28.8,52.3,29.3z M71,40.2c-3.1,0-6.2,0-9.3,0c0-5.4,0-10.8,0-16.3
            c3.1,0,6.2,0,9.3,0c0,0.9,0,1.7,0,2.7c-2,0-3.9,0-6,0c0,1.3,0,2.5,0,3.9c1.7,0,3.3,0,5,0c0,1,0,1.8,0,2.7c-1.7,0-3.3,0-5,0
            c0,1.4,0,2.8,0,4.3c2,0,4,0,6,0C71,38.4,71,39.2,71,40.2z M70.6,19.2c-2,0.5-3.9-0.2-4.7-1.8c-0.1-0.2-0.2-0.5-0.3-0.7
            c-0.4-2.1-0.5-4.1,0-6.2c0.5-2.1,2.3-3.1,4.7-2.7c1.8,0.3,3,1.8,2.9,3.9c-0.7,0-1.5,0-2.2,0c0-0.3,0-0.5-0.1-0.7
            c-0.1-0.8-0.5-1.3-1.4-1.3c-0.8,0-1.6,0.2-1.6,1.1c-0.1,1.9-0.1,3.8,0,5.7c0,0.9,0.8,1.1,1.6,1.1c0.8,0,1.3-0.4,1.4-1.2
            c0-0.3,0.1-0.5,0.1-0.8c0.8,0,1.5,0,2.2,0C73.3,17.3,72.3,18.7,70.6,19.2z M76.8,35.7c0.1,1.9,1.7,2.3,3.3,1.7
            c0.5-0.2,0.8-0.9,1.1-1.4c0.2-0.3,0.1-0.8,0.2-1.2c1.1,0,2.1,0,3.2,0c0.4,3-1.8,5.4-5,5.6c-3.1,0.2-5.3-1.3-6-4.3
            c-0.6-2.7-0.6-5.6,0-8.3c0.9-3.8,5.2-5.5,8.6-3.5c1.8,1.1,2.3,3,2.5,5c-1.1,0-2.2,0-3.3,0c0-0.4-0.1-0.8-0.1-1.2
            c-0.2-1.2-0.7-1.7-1.8-1.8c-1.4-0.1-2.1,0.3-2.6,1.4c-0.1,0.2-0.2,0.5-0.2,0.8C76.7,31,76.6,33.4,76.8,35.7z M84.7,7.8
            c1.4,0,2.8-0.1,4.2,0c1.4,0.1,2.5,0.7,2.8,2.1c0.4,1.5,0.3,2.9-0.9,4.1c-0.1,0.1-0.3,0.3-0.5,0.4c0.7,1.5,1.3,3.1,2,4.7
            c-0.8,0-1.6,0-2.3,0c-0.2,0-0.3-0.3-0.4-0.5c-0.4-0.9-0.8-1.8-1.1-2.8c-0.3-0.7-0.6-1.1-1.5-0.8c0,1.3,0,2.7,0,4
            c-0.8,0-1.5,0-2.3,0C84.7,15.4,84.7,11.6,84.7,7.8z M97.5,26.6c-1.3,0-2.6,0-4,0c0,4.6,0,9.1,0,13.6c-1.2,0-2.2,0-3.3,0
            c0-4.5,0-9,0-13.6c-1.4,0-2.7,0-4,0c0-0.9,0-1.8,0-2.7c3.8,0,7.5,0,11.3,0C97.5,24.8,97.5,25.6,97.5,26.6z M103.4,40.2
            c-1.1,0-2.1,0-3.2,0c0-5.4,0-10.8,0-16.3c1,0,2.1,0,3.2,0C103.4,29.3,103.4,34.7,103.4,40.2z M102.7,19.2c-0.1,0-0.3,0-0.5,0
            c0-3.8,0-7.5,0-11.4c1.4,0.1,2.8,0,4.2,0.2c1.5,0.2,2.5,1.3,2.9,2.8c0.5,1.8,0.5,3.7,0,5.5c-0.4,1.7-1.8,2.7-3.5,2.9
            C104.8,19.2,103.8,19.2,102.7,19.2z M117.1,39.2c-2.2,1.4-4.5,1.7-6.9,0.8c-2.1-0.7-3.2-2.5-3.4-4.6c-0.2-2.4-0.3-4.9,0.1-7.3
            c0.7-4.1,5.4-5.9,8.9-3.6c1.3,0.9,2.1,2.5,2.1,4.6c-1,0-2.1,0-3.1,0c0-0.3-0.1-0.5-0.1-0.8c-0.2-1.3-0.8-1.8-1.9-1.9
            c-1.3-0.1-2.2,0.4-2.5,1.6c-0.6,2.6-0.6,5.2,0,7.8c0.4,1.7,2.5,2.4,4,1.5c0.2-0.1,0.4-0.5,0.4-0.7c0-0.8,0-1.6,0-2.5
            c-0.8,0-1.5,0-2.3,0c0-0.9,0-1.7,0-2.5c1.8,0,3.6,0,5.6,0c0,1.1,0,2.2,0,3.3c0,0.8-0.1,1.6,0,2.4
            C118.1,38.2,117.8,38.8,117.1,39.2z M115.8,19.1c0-3.7,0-7.5,0-11.2c1.6,0,3.2-0.1,4.8,0c1.1,0.1,2,0.8,2.2,2
            c0.3,1.3,0.1,2.6-1.2,3.4c1.3,0.8,1.7,1.9,1.4,3.5c-0.3,1.2-1.1,2.2-2.4,2.3C119.1,19.2,117.5,19.1,115.8,19.1z M132.2,36
            c-0.6,2.9-2.7,4.5-5.6,4.5c-2.9,0-5-1.6-5.6-4.5c-0.6-2.5-0.5-5.1,0-7.6c0.6-3.2,2.9-5,6-4.8c3,0.2,5.1,2.2,5.5,5.4
            c0.1,1,0.1,2.1,0.2,3.4C132.5,33.4,132.5,34.7,132.2,36z"></path></g><path fill="#26B57D" d="M26.6,7.5c2.2,0,4.3,0,6.5,0c0.4,0,1,0.2,1.1,0.5c0.2,0.3,0,0.9-0.2,1.3c-0.4,0.8-1,1.5-1.5,2.3
        c-0.7,1.1-1.7,1.6-3,1.6c-2.7,0-5.4,0-8.1,0c-2.5,0-3.3,0.8-3.5,3.3c-0.2,2.1-0.4,4.1-0.5,6.2c-0.1,2.1,0.6,2.7,2.6,2.8
        c0.5,0,1.1,0,1.6,0c0.8,0,1.2,0.4,1.1,1.2c-0.1,1.2-0.1,2.3-0.4,3.4c-0.1,0.4-0.6,0.9-0.9,0.9c-1.9,0-3.9,0.1-5.7-0.3
        c-3.1-0.6-4.9-3-4.9-6.1c0-2.2,0.2-4.3,0.4-6.5c0.1-1.4,0.2-2.8,0.5-4.1c0.9-4,4-6.3,8.3-6.4C22.3,7.5,24.5,7.5,26.6,7.5
        C26.6,7.5,26.6,7.5,26.6,7.5z"></path><path fill="#25B57C" d="M17.7,40.4c-2.3,0-4.6,0-6.9,0c-0.4,0-1-0.2-1.1-0.5c-0.2-0.3,0-0.9,0.2-1.3c0.4-0.8,1-1.5,1.5-2.3
        c0.7-1,1.6-1.6,2.9-1.5c2.8,0,5.6,0,8.4,0c2.4,0,3.2-0.7,3.4-3.1c0.2-2.2,0.4-4.4,0.6-6.6c0.1-1.7-0.7-2.5-2.3-2.6
        c-0.6,0-1.2,0-1.9,0c-0.9,0-1.3-0.4-1.2-1.3c0.1-1.1,0.2-2.2,0.3-3.3c0.1-0.6,0.4-1.1,1-1c2.1,0.1,4.2,0.1,6.3,0.5
        c2.6,0.6,4.3,2.9,4.3,5.6c0,2.5-0.2,5-0.4,7.5c-0.1,1.2-0.2,2.4-0.5,3.6c-0.9,3.6-3.7,6-7.5,6.2C22.4,40.4,20,40.3,17.7,40.4
        C17.7,40.3,17.7,40.3,17.7,40.4z"></path><path fill="#081F2F" d="M132.6,32.4c-0.1,1-0.1,2.3-0.4,3.6c-0.6,2.9-2.7,4.5-5.6,4.5c-2.9,0-5-1.6-5.6-4.5c-0.6-2.5-0.5-5.1,0-7.6
        c0.6-3.2,2.9-5,6-4.8c3,0.2,5.1,2.2,5.5,5.4C132.5,30,132.5,31.1,132.6,32.4z M123.9,32.1c0,0,0.1,0,0.1,0c0,0.8,0,1.7,0,2.5
        c0,0.3,0.1,0.6,0.1,0.9c0.3,1.5,1.1,2.2,2.5,2.2c1.3,0,2.2-0.7,2.3-2.2c0.2-2.1,0.1-4.3,0.1-6.4c0-0.5-0.2-0.9-0.4-1.4
        c-0.4-0.9-1.1-1.3-2-1.3c-1.3,0-2.1,0.7-2.4,2.2C124,29.7,124,30.9,123.9,32.1z"></path><path fill="#092030" d="M118,29c-1,0-2.1,0-3.1,0c0-0.3-0.1-0.5-0.1-0.8c-0.2-1.3-0.8-1.8-1.9-1.9c-1.3-0.1-2.2,0.4-2.5,1.6
        c-0.6,2.6-0.6,5.2,0,7.8c0.4,1.7,2.5,2.4,4,1.5c0.2-0.1,0.4-0.5,0.4-0.7c0-0.8,0-1.6,0-2.5c-0.8,0-1.5,0-2.3,0c0-0.9,0-1.7,0-2.5
        c1.8,0,3.6,0,5.6,0c0,1.1,0,2.2,0,3.3c0,0.8-0.1,1.6,0,2.4c0.1,0.9-0.3,1.4-0.9,1.8c-2.2,1.4-4.5,1.7-6.9,0.8
        c-2.1-0.7-3.2-2.5-3.4-4.6c-0.2-2.4-0.3-4.9,0.1-7.3c0.7-4.1,5.4-5.9,8.9-3.6C117.2,25.3,117.9,27,118,29z"></path><path fill="#092030" d="M48.1,35.1c1.1,0,2.2,0,3.3,0c0,0.3,0.1,0.6,0.1,0.9c0.2,1,0.7,1.5,1.7,1.7c1.1,0.2,1.9-0.1,2.2-0.9
        c0.4-1,0.1-2.2-0.8-2.7c-0.6-0.4-1.2-0.6-1.8-0.9c-0.8-0.4-1.7-0.8-2.4-1.3c-1.5-1.1-2.2-2.7-1.8-4.6c0.4-1.9,1.6-2.9,3.3-3.4
        c2.9-0.8,5.7,0.4,6.6,2.9c0.2,0.6,0.3,1.3,0.4,2c-1.2,0-2.2,0-3.3,0c-0.1-0.4-0.1-0.7-0.2-1.1c-0.2-0.8-0.7-1.2-1.5-1.2
        c-0.8,0-1.5,0.2-1.8,1c-0.3,0.7-0.3,1.5,0.3,2c0.6,0.5,1.4,0.9,2.1,1.3c0.5,0.3,1.1,0.5,1.6,0.7c2.4,1.3,3.4,3.7,2.6,6.2
        c-0.7,2-2.9,3.2-5.5,2.9c-2.7-0.3-4.4-1.9-4.9-4.3C48.1,35.8,48.1,35.5,48.1,35.1z"></path><path fill="#0A2030" d="M70,33.1c-1.7,0-3.3,0-5,0c0,1.4,0,2.8,0,4.3c2,0,4,0,6,0c0,0.9,0,1.8,0,2.7c-3.1,0-6.2,0-9.3,0
        c0-5.4,0-10.8,0-16.3c3.1,0,6.2,0,9.3,0c0,0.9,0,1.7,0,2.7c-2,0-3.9,0-6,0c0,1.3,0,2.5,0,3.9c1.7,0,3.3,0,5,0
        C70,31.4,70,32.2,70,33.1z"></path><path fill="#09202F" d="M84.7,29.4c-1.1,0-2.2,0-3.3,0c0-0.4-0.1-0.8-0.1-1.2c-0.2-1.2-0.7-1.7-1.8-1.8c-1.4-0.1-2.1,0.3-2.6,1.4
        c-0.1,0.2-0.2,0.5-0.2,0.8c0,2.4-0.1,4.8,0.1,7.2c0.1,1.9,1.7,2.3,3.3,1.7c0.5-0.2,0.8-0.9,1.1-1.4c0.2-0.3,0.1-0.8,0.2-1.2
        c1.1,0,2.1,0,3.2,0c0.4,3-1.8,5.4-5,5.6c-3.1,0.2-5.3-1.3-6-4.3c-0.6-2.7-0.6-5.6,0-8.3c0.9-3.8,5.2-5.5,8.6-3.5
        C84,25.5,84.5,27.3,84.7,29.4z"></path><path fill="#081F2F" d="M93.5,40.2c-1.2,0-2.2,0-3.3,0c0-4.5,0-9,0-13.6c-1.4,0-2.7,0-4,0c0-0.9,0-1.8,0-2.7c3.8,0,7.5,0,11.3,0
        c0,0.9,0,1.7,0,2.7c-1.3,0-2.6,0-4,0C93.5,31.1,93.5,35.6,93.5,40.2z"></path><path fill="#092030" d="M121.7,13.3c1.3,0.8,1.7,1.9,1.4,3.5c-0.3,1.2-1.1,2.2-2.4,2.3c-1.6,0.1-3.2,0-4.8,0c0-3.7,0-7.5,0-11.2
        c1.6,0,3.2-0.1,4.8,0c1.1,0.1,2,0.8,2.2,2C123.2,11.2,123,12.5,121.7,13.3z M118.2,17.2c2.2,0.1,2.7-0.2,2.7-1.6
        c-0.1-1.3-0.6-1.5-2.7-1.3C118.2,15.3,118.2,16.2,118.2,17.2z M118.1,12.5c0.8-0.1,1.8,0.4,2.3-0.6c0.2-0.5,0.2-1.3,0-1.7
        c-0.5-0.8-1.4-0.5-2.3-0.5C118.1,10.6,118.1,11.5,118.1,12.5z"></path><path fill="#0B2232" d="M84.7,7.8c1.4,0,2.8-0.1,4.2,0c1.4,0.1,2.5,0.7,2.8,2.1c0.4,1.5,0.3,2.9-0.9,4.1c-0.1,0.1-0.3,0.3-0.5,0.4
        c0.7,1.5,1.3,3.1,2,4.7c-0.8,0-1.6,0-2.3,0c-0.2,0-0.3-0.3-0.4-0.5c-0.4-0.9-0.8-1.8-1.1-2.8c-0.3-0.7-0.6-1.1-1.5-0.8
        c0,1.3,0,2.7,0,4c-0.8,0-1.5,0-2.3,0C84.7,15.4,84.7,11.6,84.7,7.8z M87,13.1c0.9-0.1,2,0.4,2.4-0.7c0.2-0.7,0.2-1.6-0.1-2.2
        c-0.4-0.8-1.4-0.5-2.3-0.5C87,10.8,87,11.9,87,13.1z"></path><path fill="#0B2232" d="M102.3,19.1c0-3.8,0-7.5,0-11.4c1.4,0.1,2.8,0,4.2,0.2c1.5,0.2,2.5,1.3,2.9,2.8c0.5,1.8,0.5,3.7,0,5.5
        c-0.4,1.7-1.8,2.7-3.5,2.9c-1,0.1-2.1,0.1-3.1,0.1C102.6,19.2,102.5,19.2,102.3,19.1z M104.6,9.7c0,2.6,0,5.1,0,7.5
        c2,0.1,2.6-0.4,2.7-2.4c0-0.9,0-1.9,0-2.8C107.2,10.1,106.6,9.6,104.6,9.7z"></path><path fill="#0A2131" d="M103.4,40.2c-1.1,0-2.1,0-3.2,0c0-5.4,0-10.8,0-16.3c1,0,2.1,0,3.2,0C103.4,29.3,103.4,34.7,103.4,40.2z"></path><path fill="#091F2F" d="M75,7.8c0.8,0,1.5,0,2.3,0c0,1,0,2,0,2.9c0,1.7,0,3.4,0,5.2c0,1.1,0.5,1.5,1.4,1.5c1,0,1.4-0.4,1.4-1.5
        c0-2.7,0-5.3,0-8.1c0.8,0,1.5,0,2.3,0c0,0.5,0,1,0,1.6c0,2.2,0,4.5,0,6.7c-0.1,2-1.4,3.2-3.6,3.2c-2.3,0-3.8-1-3.9-3.1
        C74.9,13.4,75,10.6,75,7.8z"></path><path fill="#0E2534" d="M57.3,7.8c2.2,0,4.3,0,6.5,0c0,0.6,0,1.2,0,1.9c-1.4,0-2.7,0-4.1,0c0,0.9,0,1.8,0,2.7c1.1,0,2.3,0,3.5,0
        c0,0.7,0,1.2,0,1.9c-1.2,0-2.3,0-3.5,0c0,1,0,1.9,0,3c1.4,0,2.8,0,4.2,0c0,0.7,0,1.3,0,1.9c-2.2,0-4.3,0-6.5,0
        C57.3,15.4,57.3,11.6,57.3,7.8z"></path><path fill="#0F2635" d="M94,7.8c2.2,0,4.3,0,6.5,0c0,0.6,0,1.2,0,1.9c-1.4,0-2.7,0-4.1,0c0,0.9,0,1.7,0,2.6c1.1,0,2.3,0,3.5,0
        c0,0.7,0,1.3,0,2c-1.2,0-2.3,0-3.5,0c0,1,0,1.9,0,3c1.4,0,2.7,0,4.1,0c0,0.7,0,1.2,0,1.9c-2.1,0-4.3,0-6.5,0
        C94,15.4,94,11.6,94,7.8z"></path><path fill="#092030" d="M47.9,15.6c0.8,0,1.5,0,1.8,0c0.6,0.7,0.9,1.4,1.5,1.7c0.5,0.3,1.2,0.2,1.6-0.4c0.4-0.6,0.1-1.6-0.5-2
        c-0.6-0.4-1.3-0.6-2-1c-1.8-0.9-2.6-2.3-2.2-3.9c0.4-1.7,2.1-2.6,4.2-2.4c1.7,0.2,2.8,1.5,2.9,3.4c-0.7,0-1.4,0-2.2,0
        c-0.1-0.2,0-0.5-0.2-0.6c-0.3-0.4-0.7-0.9-1.1-0.9c-0.4,0-1,0.4-1.2,0.7c-0.1,0.4,0,1.1,0.3,1.4c0.5,0.4,1.2,0.7,1.8,1
        c1.2,0.6,2.3,1.2,2.5,2.6c0.5,2.8-1.6,4.6-4.6,3.9C48.9,18.8,47.9,17.5,47.9,15.6z"></path><path fill="#092030" d="M73.2,11.6c-0.7,0-1.5,0-2.2,0c0-0.3,0-0.5-0.1-0.7c-0.1-0.8-0.5-1.3-1.4-1.3c-0.8,0-1.6,0.2-1.6,1.1
        c-0.1,1.9-0.1,3.8,0,5.7c0,0.9,0.8,1.1,1.6,1.1c0.8,0,1.3-0.4,1.4-1.2c0-0.3,0.1-0.5,0.1-0.8c0.8,0,1.5,0,2.2,0
        c0.1,1.9-0.9,3.3-2.6,3.8c-2,0.5-3.9-0.2-4.7-1.8c-0.1-0.2-0.2-0.5-0.3-0.7c-0.4-2.1-0.5-4.1,0-6.2c0.5-2.1,2.3-3.1,4.7-2.7
        C72.1,8,73.2,9.5,73.2,11.6z"></path><path fill="#0C2333" d="M124,7.8c2.5-0.2,2.5-0.2,3.2,2c0.3,1,0.6,1.9,1,3.1c0.4-1.3,0.8-2.4,1.2-3.5c0.6-1.6,0.6-1.6,2.3-1.6
        c0.2,0,0.4,0,0.7,0c-0.1,0.3-0.1,0.5-0.2,0.7c-0.3,0.7-0.6,1.3-0.8,2c-1.2,2.8-2.7,5.5-1.8,8.7c-1,0-1.7,0-2.5,0c0-0.8,0-1.7,0-2.5
        c0.1-1.1-0.2-2.1-0.6-3.1C125.6,11.7,124.8,9.8,124,7.8z"></path><path fill="#2AB77F" d="M41.5,40.3c-0.4,0-0.7,0-1,0c0-10.9,0-21.7,0-32.6c0.3,0,0.6,0,1,0C41.5,18.5,41.5,29.4,41.5,40.3z"></path><path fill="#FBFCFC" d="M123.9,32.1c0.1-1.2,0.1-2.4,0.3-3.5c0.2-1.5,1.1-2.2,2.4-2.2c1,0,1.7,0.4,2,1.3c0.2,0.4,0.4,0.9,0.4,1.4
        c0,2.1,0.1,4.3-0.1,6.4c-0.1,1.5-1,2.2-2.3,2.2c-1.3,0-2.2-0.7-2.5-2.2c-0.1-0.3-0.1-0.6-0.1-0.9c0-0.8,0-1.7,0-2.5
        C124,32.1,123.9,32.1,123.9,32.1z"></path><path fill="#F8F9F9" d="M118.2,17.2c0-1,0-2,0-2.9c2.1-0.2,2.6,0,2.7,1.3C120.9,17,120.4,17.3,118.2,17.2z"></path><path fill="#F8F9F9" d="M118.1,12.5c0-1,0-1.9,0-2.8c0.8,0,1.8-0.3,2.3,0.5c0.3,0.4,0.3,1.3,0,1.7C120,12.9,119,12.4,118.1,12.5z"></path><path fill="#F5F6F5" d="M87,13.1c0-1.2,0-2.2,0-3.4c0.8,0,1.8-0.4,2.3,0.5c0.3,0.6,0.3,1.6,0.1,2.2C89,13.5,87.9,12.9,87,13.1z"></path><path fill="#FAFBFB" d="M104.6,9.7c2-0.1,2.6,0.4,2.7,2.3c0,0.9,0.1,1.9,0,2.8c-0.1,1.9-0.7,2.4-2.7,2.4
        C104.6,14.8,104.6,12.3,104.6,9.7z"></path></g></svg>                    </li>
                </ul>
            </div>
            <div class="o-layout__col o-layout__col--auto o-layout__col--4@lg">
                <div class="c-global-footer__lusa-seal">
<span class="c-global-footer__lusa-seal-badge">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"><g><path fill="#F4DF84" d="M29.2,54.1c0,0,0-0.1,0-0.2c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1,0-0.3,0-0.4,0.1c0,0,0,0,0,0c0,0,0,0,0,0
        c-0.1,0.1-0.1,0.2-0.2,0.5c0,0.2-0.1,0.5-0.1,0.8c0,0.3-0.1,0.5-0.1,0.7s0,0.4,0.1,0.5c0.1,0.1,0.2,0.2,0.4,0.2
        c0.1,0,0.2,0,0.3-0.1c0.1-0.1,0.2-0.1,0.2-0.2l0,0c0,0,0,0,0,0l0.2-1.3c0-0.2,0-0.4,0-0.5C29.3,54.3,29.2,54.3,29.2,54.1
        C29.2,54.2,29.2,54.2,29.2,54.1z"></path><g><path fill="#F4DF84" d="M25.3,25.2c0-0.4,0-0.8,0.1-1.2s0.2-0.6,0.4-0.8c0.2-0.2,0.5-0.3,0.9-0.3c0.3,0,0.6,0.1,0.8,0.4
            s0.3,0.6,0.3,1.1s-0.1,0.9-0.3,1.4c-0.2,0.4-0.4,0.9-0.7,1.3c-0.3,0.4-0.5,0.9-0.9,1.3l-4,6.1v2.4h8.7v-2.7h-4.9l3-4.5
            c0.4-0.6,0.8-1.2,1.1-1.7c0.4-0.5,0.6-1.1,0.9-1.7c0.2-0.6,0.3-1.2,0.3-1.9c0-1.4-0.4-2.5-1.1-3.2c-0.8-0.8-1.9-1.2-3.4-1.2
            c-1.1,0-2,0.2-2.7,0.7c-0.7,0.5-1.2,1-1.5,1.8c-0.3,0.8-0.5,1.6-0.5,2.6V26h3.3V25.2z"></path><polygon fill="#F4DF84" points="34.9,37.2 38.4,37.2 42.1,22.5 42.1,20.1 34,20.1 34,22.8 38.6,22.8        "></polygon></g><path fill="#F4DF84" d="M32,1.1C15,1.1,1.1,15,1.1,32S15,62.8,32,62.8S62.8,49,62.8,32S49,1.1,32,1.1z M8.8,38.4l1.3,2l-2.3-0.9
        l-1.5,1.9L6.4,39l-2.3-0.9l2.4-0.6l0.1-2.4l1.3,2l2.4-0.6L8.8,38.4z M23.1,59.9l-1.6-0.5l2.1-6.3c-0.1,0-0.2,0-0.3,0
        c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0l0.4-1.2c0.1,0,0.2,0,0.4-0.1c0.1,0,0.3,0,0.5-0.1
        c0.2,0,0.4-0.1,0.5-0.1c0.1,0,0.3-0.1,0.4-0.1l1.3,0.4L23.1,59.9z M30.9,55.5l-0.4,3.1c-0.1,0.5-0.2,1-0.4,1.4
        c-0.2,0.4-0.5,0.7-0.8,0.9C29,61,28.5,61.1,27.9,61c-0.5-0.1-0.9-0.2-1.2-0.4c-0.3-0.2-0.5-0.5-0.6-0.8c-0.1-0.3-0.1-0.7,0-1.2
        c0,0,0,0,0-0.1c0,0,0,0,0-0.1l1.6,0.2c0,0.3,0,0.6,0,0.8s0.2,0.3,0.4,0.3c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.1-0.2,0.2-0.5
        s0.1-0.6,0.2-1l0.1-0.7c-0.1,0.1-0.3,0.2-0.5,0.3c-0.2,0.1-0.4,0.1-0.6,0.1c-0.4,0-0.8-0.2-1-0.5c-0.2-0.3-0.4-0.6-0.5-1
        c-0.1-0.4-0.1-0.8,0-1.3c0.1-0.6,0.2-1.1,0.4-1.5s0.5-0.7,0.8-0.9c0.4-0.2,0.8-0.2,1.4-0.2c0.5,0.1,1,0.2,1.3,0.5
        c0.3,0.3,0.5,0.6,0.6,1C31,54.5,31,54.9,30.9,55.5z M36.9,59.6c-0.1,0.4-0.3,0.8-0.6,1.1s-0.8,0.5-1.4,0.5c-0.5,0-1,0-1.3-0.1
        s-0.6-0.3-0.7-0.7s-0.3-0.7-0.3-1.2c0,0,0,0,0-0.1c0,0,0,0,0-0.1l1.6-0.2c0,0.3,0.1,0.6,0.2,0.7c0.1,0.2,0.2,0.2,0.5,0.2
        c0.2,0,0.3-0.1,0.3-0.2c0.1-0.1,0.1-0.3,0.1-0.5c0-0.2,0-0.6-0.1-1l-0.1-0.7c-0.1,0.2-0.2,0.3-0.4,0.4S34.4,58,34.2,58
        c-0.4,0-0.8,0-1.1-0.2s-0.5-0.5-0.7-0.9s-0.2-0.8-0.3-1.2c-0.1-0.6,0-1.1,0.1-1.5s0.3-0.8,0.6-1c0.3-0.3,0.7-0.4,1.3-0.5
        s1,0,1.3,0.2s0.6,0.5,0.8,0.8s0.3,0.8,0.4,1.4l0.3,3.1C37,58.7,37,59.2,36.9,59.6z M43.3,58.4c-0.1,0.3-0.2,0.6-0.5,0.8
        s-0.6,0.4-1.1,0.6c-0.6,0.2-1.1,0.2-1.4,0.1c-0.4-0.1-0.7-0.3-0.9-0.7c-0.2-0.3-0.4-0.8-0.6-1.2l1.6-0.5c0.1,0.3,0.2,0.5,0.3,0.7
        s0.2,0.3,0.3,0.3c0.1,0,0.2,0,0.4,0c0.2-0.1,0.3-0.2,0.3-0.3s0-0.3,0-0.6s-0.2-0.5-0.3-0.9c-0.1-0.3-0.2-0.5-0.3-0.7
        c-0.1-0.2-0.2-0.3-0.3-0.4c-0.1-0.1-0.3-0.1-0.5,0c-0.2,0-0.3,0.2-0.3,0.3C40,56,40,56.2,40,56.5l-1.4,0.5l-1.3-4.6l3.7-1.2
        l0.5,1.4l-2.4,0.8l0.5,1.7c0-0.1,0.1-0.2,0.3-0.4c0.2-0.1,0.3-0.2,0.5-0.3c0.4-0.2,0.8-0.2,1.1-0.1c0.3,0.1,0.6,0.3,0.9,0.7
        c0.3,0.3,0.5,0.8,0.7,1.4c0.1,0.4,0.2,0.8,0.3,1.2C43.4,57.7,43.4,58.1,43.3,58.4z M32,51.3c-10.7,0-19.3-8.7-19.3-19.3
        S21.3,12.7,32,12.7S51.3,21.3,51.3,32S42.7,51.3,32,51.3z M57.7,41.5l-1.5-1.9l-2.3,0.9l1.3-2l-1.5-1.9l2.3,0.6l1.3-2l0.1,2.4
        l2.4,0.6L57.6,39L57.7,41.5z M62,33.8c0-0.2,0-0.5,0-0.8c0-0.3,0-0.5-0.1-0.8c0-0.3-0.1-0.5-0.1-0.8c0-0.3-0.1-0.5-0.1-0.8
        c0-0.2-0.1-0.5-0.1-0.7c0-0.2-0.1-0.4-0.1-0.6c-0.1-0.4-0.1-0.7-0.2-0.9c0-0.2-0.1-0.3-0.1-0.3s0,0.1,0,0.4c0,0.2,0,0.5,0,0.9
        c0,0.2,0,0.4,0,0.6c0,0.2,0,0.5,0,0.7c0,0.2,0,0.5,0,0.7c0,0.2,0,0.5-0.1,0.8c0,0.3-0.1,0.5-0.1,0.8c0,0.2-0.1,0.5-0.1,0.7
        c0,0.2-0.1,0.5-0.1,0.7c0,0.2-0.1,0.4-0.1,0.6c0,0.1,0,0.2,0,0.3c0,0,0,0.1,0,0.1h0c0-0.1,0-0.2,0-0.2c0-0.2,0-0.5,0-0.8
        s0-0.5,0-0.8s0-0.6,0-0.9c0-0.3,0-0.6-0.1-0.9c0-0.3-0.1-0.6-0.1-0.9c0-0.3-0.1-0.6-0.1-0.9c0-0.3-0.1-0.5-0.1-0.8
        c0-0.3-0.1-0.5-0.1-0.7c0-0.2-0.1-0.4-0.1-0.6c0-0.2-0.1-0.3-0.1-0.5c-0.1-0.3-0.1-0.4-0.1-0.4s0,0.1,0,0.4c0,0.1,0,0.3,0,0.5
        c0,0.2,0,0.4,0,0.6c0,0.2,0,0.5,0,0.7c0,0.3,0,0.5,0,0.8c0,0.3,0,0.6,0,0.9c0,0.3,0,0.6,0,0.9c0,0.3-0.1,0.6-0.1,0.9
        s-0.1,0.6-0.1,0.8c0,0.3-0.1,0.5-0.1,0.8c0,0.2-0.1,0.5-0.1,0.7c0,0.1,0,0.2-0.1,0.3c0,0,0,0.1,0,0.1h0c0,0,0-0.1,0-0.2
        c0-0.3,0-0.5,0-0.8c0-0.3,0-0.6,0-0.9c0-0.2,0-0.3,0-0.5c0-0.2,0-0.3,0-0.5c0-0.3,0-0.7-0.1-1c0-0.3-0.1-0.7-0.1-1
        c0-0.3-0.1-0.6-0.2-0.9c-0.1-0.3-0.1-0.6-0.2-0.9c-0.1-0.3-0.1-0.5-0.2-0.8c0-0.2-0.1-0.5-0.2-0.6c0-0.2-0.1-0.4-0.1-0.5
        C58,26.6,58,26.4,58,26.4s0,0.1,0,0.5c0,0.1,0,0.3,0,0.5s0,0.4,0.1,0.7c0,0.2,0,0.5,0,0.8c0,0.3,0,0.6,0,0.9s0,0.6,0,0.9
        c0,0.3,0,0.6,0,1c0,0.3-0.1,0.6-0.1,1c0,0.2,0,0.3,0,0.5c0,0.2,0,0.3-0.1,0.5c0,0.3-0.1,0.6-0.1,0.8c0,0.3-0.1,0.5-0.1,0.8
        c0,0.1,0,0.2-0.1,0.3c0,0,0,0,0,0h0c0,0,0-0.1,0-0.1c0-0.2,0-0.3,0-0.5c0-0.1,0-0.2,0-0.2c0-0.1,0-0.2,0-0.2c0-0.3,0-0.7,0-1
        c0-0.3,0-0.7,0-1.1c0-0.1,0-0.2,0-0.3l0-0.3c0-0.2,0-0.4-0.1-0.6c0-0.2,0-0.4-0.1-0.6c0-0.2,0-0.4-0.1-0.5c0-0.2-0.1-0.4-0.1-0.5
        c0-0.2-0.1-0.4-0.1-0.5c-0.1-0.4-0.1-0.7-0.2-1s-0.2-0.6-0.2-0.9c0-0.1-0.1-0.3-0.1-0.4c0-0.1-0.1-0.2-0.1-0.4
        c-0.1-0.2-0.1-0.4-0.2-0.6c-0.1-0.3-0.2-0.5-0.2-0.5s0,0.2,0.1,0.5c0,0.2,0.1,0.4,0.1,0.6c0,0.1,0,0.2,0.1,0.4c0,0.1,0,0.3,0,0.4
        c0,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.7,0.1,1c0,0.2,0,0.4,0,0.5c0,0.2,0,0.4,0,0.5c0,0.2,0,0.4,0,0.5c0,0.2,0,0.4,0,0.5
        c0,0.2,0,0.4,0,0.5l0,0.3c0,0.1,0,0.2,0,0.3c0,0.4-0.1,0.7-0.1,1.1c0,0.3-0.1,0.7-0.1,1c0,0.1,0,0.2,0,0.2c0,0.1,0,0.2,0,0.2
        c0,0.1,0,0.3-0.1,0.4c0,0.1,0,0.2-0.1,0.3c0-0.2,0-0.3,0-0.5c0-0.3,0-0.6,0-1c0-0.1,0-0.2,0-0.3s0-0.2,0-0.3c0-0.2,0-0.3,0-0.5
        c0-0.2,0-0.3,0-0.5c0-0.2,0-0.4,0-0.5c0-0.4,0-0.7-0.1-1.1c0-0.4-0.1-0.7-0.2-1c-0.1-0.3-0.1-0.7-0.2-1c0-0.3-0.1-0.6-0.2-0.8
        s-0.1-0.5-0.2-0.7c-0.1-0.2-0.1-0.4-0.2-0.5c-0.1-0.3-0.1-0.5-0.1-0.5s0,0.2,0.1,0.5c0,0.1,0.1,0.3,0.1,0.5s0,0.5,0.1,0.7
        s0.1,0.5,0.1,0.9c0,0.3,0,0.6,0.1,1c0,0.3,0,0.7,0,1s0,0.7,0,1.1c0,0.2,0,0.3,0,0.5c0,0.2,0,0.3,0,0.5c0,0.2,0,0.3,0,0.5
        c0,0.1,0,0.2,0,0.2c0,0.1,0,0.2,0,0.2c0,0.3-0.1,0.6-0.2,0.9c0,0.2-0.1,0.5-0.1,0.7c0-0.3,0-0.6,0-0.9c0-0.2,0-0.3,0-0.5
        c0-0.2,0-0.3,0-0.5c0-0.3,0-0.7,0-1c0-0.3,0-0.7-0.1-1c0-0.1,0-0.2,0-0.2c0-0.1,0-0.2,0-0.2c0-0.1,0-0.3-0.1-0.5
        c0-0.3-0.1-0.6-0.1-0.9c-0.1-0.3-0.1-0.5-0.2-0.8c0-0.2-0.1-0.5-0.2-0.7c0-0.2-0.1-0.4-0.1-0.5c-0.1-0.3-0.1-0.5-0.1-0.5
        s0,0.2,0,0.5c0,0.1,0,0.3,0.1,0.5c0,0.2,0,0.4,0.1,0.7c0,0.2,0,0.5,0,0.8c0,0.3,0,0.6,0,0.9c0,0.1,0,0.3,0,0.5c0,0.1,0,0.1,0,0.2
        s0,0.1,0,0.2c0,0.3,0,0.6-0.1,1c0,0.3-0.1,0.6-0.1,1c0,0.2,0,0.3-0.1,0.5c0,0.2-0.1,0.3-0.1,0.5C54,34.7,54,35,53.9,35.2
        c0,0,0,0.1,0,0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.3,0-0.5c0-0.2,0-0.3,0-0.5c0-0.3,0-0.6,0-0.9c0-0.3,0-0.6,0-0.9c0-0.1,0-0.2,0-0.2
        c0-0.1,0-0.1,0-0.2c0-0.1,0-0.3,0-0.5c0-0.3,0-0.6-0.1-0.8c0-0.3-0.1-0.5-0.1-0.7s-0.1-0.4-0.1-0.6c0-0.2-0.1-0.3-0.1-0.5
        c-0.1-0.3-0.1-0.4-0.1-0.4s0,0.1,0,0.4c0,0.1,0,0.3,0,0.5c0,0.2,0,0.4,0,0.6s0,0.5,0,0.7c0,0.3,0,0.5,0,0.8c0,0.1,0,0.3,0,0.4
        c0,0.1,0,0.2,0,0.2c0,0.1,0,0.2,0,0.2c0,0.3-0.1,0.6-0.1,0.9c0,0.3-0.1,0.6-0.1,0.9c0,0.1,0,0.3-0.1,0.4s-0.1,0.3-0.1,0.4
        c0,0.1,0,0.2-0.1,0.3c0-0.1,0-0.2,0-0.3c0-0.3,0-0.5,0-0.8c0-0.3,0-0.5,0-0.8s0-0.5,0-0.8s0-0.5-0.1-0.7s-0.1-0.5-0.1-0.6
        c0-0.2,0-0.4-0.1-0.5c0-0.1,0-0.3-0.1-0.4c0-0.2-0.1-0.4-0.1-0.4s0,0.1,0,0.4c0,0.1,0,0.3,0,0.4s0,0.3,0,0.5s0,0.4,0,0.6
        c0,0.2,0,0.5-0.1,0.7s0,0.5-0.1,0.7c0,0.2-0.1,0.5-0.1,0.8c0,0.2-0.1,0.5-0.2,0.8c0,0.2-0.1,0.4-0.1,0.6h0c0.2-1.1,0.3-2.2,0.3-3.3
        c0-11-9-20-20-20s-20,9-20,20c0,1.2,0.1,2.3,0.3,3.4h0c-0.1-0.2-0.1-0.4-0.1-0.6c-0.1-0.2-0.1-0.5-0.2-0.8
        c-0.1-0.3-0.1-0.5-0.1-0.8c-0.1-0.2-0.1-0.5-0.1-0.7c0-0.2-0.1-0.5-0.1-0.7c0-0.2,0-0.4-0.1-0.6s0-0.4,0-0.5c0-0.1,0-0.3,0-0.4
        c0-0.2,0-0.4,0-0.4s0,0.1-0.1,0.4c0,0.1-0.1,0.2-0.1,0.4c0,0.1-0.1,0.3-0.1,0.5c0,0.2-0.1,0.4-0.1,0.6c0,0.2,0,0.5-0.1,0.7
        c0,0.2-0.1,0.5-0.1,0.8c0,0.3,0,0.5,0,0.8c0,0.3,0,0.5,0,0.8c0,0.1,0,0.2,0,0.3c0-0.1-0.1-0.2-0.1-0.3c0-0.1-0.1-0.3-0.1-0.4
        s-0.1-0.3-0.1-0.4c-0.1-0.3-0.1-0.6-0.1-0.9s-0.1-0.6-0.1-0.9c0-0.1,0-0.2,0-0.2c0-0.1,0-0.1,0-0.2c0-0.1,0-0.3,0-0.4
        c0-0.3,0-0.6,0-0.8s0-0.5,0-0.7s0-0.4,0-0.6c0-0.2,0-0.4,0-0.5c0-0.3,0-0.4,0-0.4s0,0.1-0.1,0.4c0,0.1-0.1,0.3-0.1,0.5
        c-0.1,0.2-0.1,0.4-0.1,0.6c0,0.2-0.1,0.5-0.1,0.7s-0.1,0.5-0.1,0.8c0,0.1,0,0.3-0.1,0.5c0,0.1,0,0.2,0,0.2c0,0.1,0,0.2,0,0.2
        c0,0.3,0,0.6-0.1,0.9c0,0.3,0,0.6,0,0.9c0,0.2,0,0.3,0,0.5c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0,0-0.1,0-0.2
        C10.1,35,10,34.7,10,34.4c0-0.2-0.1-0.3-0.1-0.5c0-0.2-0.1-0.3-0.1-0.5c0-0.3-0.1-0.6-0.1-1c0-0.3-0.1-0.6-0.1-1c0-0.1,0-0.1,0-0.2
        c0-0.1,0-0.1,0-0.2c0-0.1,0-0.3,0-0.5c0-0.3,0-0.6,0-0.9c0-0.3,0-0.5,0.1-0.8s0-0.5,0.1-0.7c0-0.2,0.1-0.4,0.1-0.5
        c0-0.3,0.1-0.4,0.1-0.5c0,0-0.1,0.2-0.1,0.4c0,0.1-0.1,0.3-0.1,0.5c-0.1,0.2-0.1,0.4-0.1,0.7c-0.1,0.2-0.1,0.5-0.1,0.8
        c-0.1,0.3-0.1,0.6-0.1,0.9c0,0.1-0.1,0.3-0.1,0.5c0,0.1,0,0.2,0,0.2c0,0.1,0,0.2,0,0.2c0,0.3-0.1,0.7-0.1,1c0,0.3,0,0.7,0,1
        c0,0.2,0,0.3,0,0.5c0,0.2,0,0.3,0,0.5c0,0.3,0,0.6,0.1,0.9C9,35.2,9,35,8.9,34.8c-0.1-0.3-0.1-0.6-0.1-0.9c0-0.1,0-0.2,0-0.2
        c0-0.1,0-0.2,0-0.2c0-0.2,0-0.3-0.1-0.5s0-0.3-0.1-0.5c0-0.2,0-0.4,0-0.5c0-0.4-0.1-0.7,0-1.1c0-0.4,0-0.7,0-1s0.1-0.7,0.1-1
        c0-0.3,0.1-0.6,0.1-0.9s0.1-0.5,0.1-0.7c0-0.2,0.1-0.4,0.1-0.5C8.9,26.3,9,26.1,9,26.1s-0.1,0.2-0.1,0.5c-0.1,0.1-0.1,0.3-0.1,0.5
        c-0.1,0.2-0.1,0.5-0.2,0.7c-0.1,0.3-0.1,0.5-0.2,0.8c-0.1,0.3-0.1,0.6-0.2,1C8.1,30,8,30.3,8,30.7s-0.1,0.7-0.1,1.1
        c0,0.2,0,0.4-0.1,0.5c0,0.2,0,0.4,0,0.5c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0.3,0,0.7,0,1c0,0.2,0,0.3,0,0.5
        c0-0.1,0-0.2,0-0.3c0-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.1-0.1-0.2c0-0.1,0-0.2,0-0.2c-0.1-0.3-0.1-0.6-0.1-1c0-0.3-0.1-0.7-0.1-1.1
        c0-0.1,0-0.2,0-0.3l0-0.3c0-0.2,0-0.4,0-0.5c0-0.2,0-0.4,0-0.5c0-0.2,0-0.4,0-0.5c0-0.2,0-0.4,0-0.5c0-0.2,0-0.4,0-0.5
        c0-0.4,0.1-0.7,0.1-1c0-0.3,0.1-0.6,0.1-0.9c0-0.1,0-0.3,0.1-0.4c0-0.1,0.1-0.2,0.1-0.4c0.1-0.2,0.1-0.4,0.1-0.6
        c0.1-0.3,0.1-0.5,0.1-0.5s-0.1,0.2-0.2,0.5c-0.1,0.1-0.1,0.4-0.2,0.6c0,0.1-0.1,0.2-0.1,0.4c-0.1,0.1-0.1,0.3-0.1,0.4
        c-0.1,0.3-0.1,0.6-0.2,0.9c-0.1,0.3-0.1,0.6-0.2,1c0,0.2-0.1,0.4-0.1,0.5c0,0.2-0.1,0.4-0.1,0.5c0,0.2-0.1,0.4-0.1,0.5
        c0,0.2,0,0.4-0.1,0.6c0,0.2,0,0.4-0.1,0.6l0,0.3c0,0.1,0,0.2,0,0.3c0,0.4,0,0.7-0.1,1.1c0,0.3,0,0.7,0,1c0,0.1,0,0.2,0,0.2
        s0,0.2,0,0.2c0,0.2,0,0.3,0,0.5c0,0,0,0.1,0,0.1h0v0c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.2-0.1-0.5-0.1-0.8c-0.1-0.3-0.1-0.5-0.1-0.8
        c0-0.2-0.1-0.3-0.1-0.5c0-0.2,0-0.3-0.1-0.5c0-0.3-0.1-0.6-0.1-1c0-0.3,0-0.6-0.1-1c0-0.3,0-0.6,0-0.9c0-0.3,0-0.6,0-0.9
        c0-0.3,0-0.5,0.1-0.8c0-0.2,0-0.5,0.1-0.7c0-0.2,0-0.4,0.1-0.5c0-0.2,0.1-0.4,0.1-0.5c0,0-0.1,0.2-0.1,0.4c0,0.1-0.1,0.3-0.1,0.5
        c-0.1,0.2-0.1,0.4-0.2,0.6c-0.1,0.2-0.1,0.5-0.2,0.8c-0.1,0.3-0.1,0.6-0.2,0.9c-0.1,0.3-0.1,0.6-0.2,0.9c0,0.3-0.1,0.6-0.1,1
        c0,0.3-0.1,0.7-0.1,1c0,0.2,0,0.3,0,0.5c0,0.2,0,0.3,0,0.5c0,0.3,0,0.6,0,0.9c0,0.3,0,0.6,0,0.8c0,0,0,0.1,0,0.2H4.9
        c0,0,0-0.1,0-0.1c0-0.1,0-0.2-0.1-0.3c-0.1-0.2-0.1-0.5-0.1-0.7c-0.1-0.2-0.1-0.5-0.1-0.8c-0.1-0.3-0.1-0.5-0.1-0.8
        c0-0.3-0.1-0.6-0.1-0.9c0-0.3,0-0.6-0.1-0.9c0-0.3,0-0.6,0-0.9c0-0.3,0-0.5,0-0.8c0-0.3,0-0.5,0-0.7s0-0.4,0-0.6c0-0.2,0-0.3,0-0.5
        c0-0.3,0-0.4,0-0.4s0,0.1-0.1,0.4c0,0.1-0.1,0.3-0.1,0.5c-0.1,0.2-0.1,0.4-0.1,0.6C4,28.7,4,29,3.9,29.2c-0.1,0.3-0.1,0.5-0.1,0.8
        c0,0.3-0.1,0.6-0.1,0.9c0,0.3-0.1,0.6-0.1,0.9c0,0.3,0,0.6-0.1,0.9s0,0.6,0,0.9c0,0.3,0,0.6,0,0.8c0,0.3,0,0.5,0,0.8
        c0,0.1,0,0.2,0,0.2h0c0,0,0-0.1,0-0.1c0-0.1,0-0.2,0-0.3c0-0.2-0.1-0.4-0.1-0.6c0-0.2-0.1-0.5-0.1-0.7S3,33.2,3,33
        s-0.1-0.5-0.1-0.8c0-0.2,0-0.5-0.1-0.8c0-0.2,0-0.5,0-0.7s0-0.5,0-0.7c0-0.2,0-0.4,0-0.6c0-0.4,0-0.7,0-0.9c0-0.2,0-0.4,0-0.4
        s0,0.1-0.1,0.3c0,0.2-0.1,0.5-0.2,0.9c0,0.2-0.1,0.4-0.1,0.6c0,0.2-0.1,0.5-0.1,0.7c0,0.2-0.1,0.5-0.1,0.8c0,0.3-0.1,0.5-0.1,0.8
        c0,0.3,0,0.5-0.1,0.8c0,0.3,0,0.5,0,0.8c0,0.2,0,0.5,0,0.7c0,0.2,0,0.5,0,0.6c0,0.1,0,0.2,0,0.2c-0.1-1.1-0.2-2.2-0.2-3.4
        c0-16.7,13.6-30.2,30.2-30.2c16.7,0,30.2,13.6,30.2,30.2c0,1.1-0.1,2.3-0.2,3.3c0-0.1,0-0.2,0-0.2c0-0.2,0-0.4,0-0.6
        C62,34.2,62,34,62,33.8z"></path><path fill="#F4DF84" d="M35,56.2l-0.1-1.2c0-0.2,0-0.3-0.1-0.5c0,0,0-0.1,0-0.1c0-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.2-0.1-0.4-0.1
        c-0.2,0-0.3,0.1-0.3,0.2s-0.1,0.3-0.1,0.5v0l0,0c0,0.2,0,0.5,0,0.8c0,0.3,0.1,0.5,0.1,0.7c0,0.2,0.1,0.3,0.2,0.5s0.2,0.2,0.4,0.1
        c0.1,0,0.2-0.1,0.3-0.1c0.1-0.1,0.1-0.2,0.2-0.2L35,56.2L35,56.2L35,56.2z"></path><path fill="#F4DF84" d="M56.5,17.3l-5.6,2.8l0.7,1.4c0.2,0.5,0.5,0.8,0.8,1s0.5,0.3,0.9,0.3c0.3,0,0.7-0.1,1.1-0.4l2-1
        c0.4-0.2,0.7-0.4,0.9-0.7c0.2-0.2,0.3-0.5,0.3-0.8c0-0.3-0.1-0.7-0.4-1.2L56.5,17.3z M56.3,19.8c-0.1,0.1-0.2,0.1-0.4,0.2l-2.4,1.2
        c-0.2,0.1-0.3,0.1-0.4,0.2s-0.2,0-0.3,0c-0.1-0.1-0.2-0.2-0.3-0.4l-0.1-0.2l3.8-1.9l0.1,0.2c0.1,0.2,0.1,0.3,0.1,0.4
        C56.4,19.7,56.4,19.8,56.3,19.8z"></path><path fill="#F4DF84" d="M32,0C14.4,0,0,14.4,0,32s14.4,32,32,32s32-14.3,32-32S49.7,0,32,0z M32,63.4C14.7,63.4,0.6,49.3,0.6,32
        S14.7,0.6,32,0.6S63.4,14.7,63.4,32S49.3,63.4,32,63.4z"></path><polygon fill="#F4DF84" points="51,15.6 51.7,16.5 52.5,15.9 51.8,15 53,14 53.9,15.1 54.6,14.5 52.8,12.4 48,16.4 49.8,18.5
        50.5,17.9 49.6,16.8     "></polygon><path fill="#F4DF84" d="M14.4,15.9c-0.3-0.3-0.7-0.4-1-0.4c-0.3,0-0.7,0-1,0.1l-0.7,0.1c-0.2,0.1-0.4,0.1-0.6,0.1
        c-0.2,0-0.4-0.1-0.6-0.2c-0.1-0.1-0.1-0.1-0.2-0.3c-0.1-0.1,0-0.2,0.1-0.3c0.1-0.1,0.1-0.1,0.2-0.1c0.1,0,0.2,0,0.3,0.1
        s0.3,0.1,0.4,0.3l0.6-1c-0.1-0.1-0.3-0.2-0.5-0.3c-0.2-0.1-0.4-0.1-0.6-0.2c-0.2,0-0.4,0-0.6,0.1c-0.2,0.1-0.4,0.3-0.6,0.5
        c-0.3,0.4-0.5,0.8-0.4,1.3c0,0.4,0.3,0.8,0.7,1.1c0.3,0.2,0.6,0.4,0.9,0.4c0.3,0,0.6,0,0.9-0.1l0.7-0.1c0.3-0.1,0.5-0.1,0.7-0.1
        c0.2,0,0.4,0.1,0.6,0.2c0.1,0.1,0.1,0.1,0.2,0.2s0,0.2-0.1,0.3c-0.1,0.1-0.1,0.1-0.3,0.2c-0.1,0-0.2,0-0.4-0.1
        c-0.1-0.1-0.3-0.2-0.6-0.3l-0.6,1c0.4,0.3,0.7,0.4,1,0.5s0.6,0,0.9-0.1c0.3-0.1,0.5-0.3,0.8-0.6c0.2-0.3,0.3-0.5,0.4-0.8
        c0.1-0.3,0-0.5-0.1-0.8C14.8,16.3,14.6,16.1,14.4,15.9z"></path><polygon fill="#F4DF84" points="15.8,9.6 15.1,8.9 12.6,10.9 13.3,11.7 14,11.1 17.3,15.1 18.4,14.2 15,10.2     "></polygon><polygon fill="#F4DF84" points="35.4,9.8 36.8,10 37.9,3.9 36.6,3.7  "></polygon><polygon fill="#F4DF84" points="11.1,21.9 9.4,21.1 9.9,20.2 9,19.8 8.6,20.8 7.2,20.1 7.8,18.8 6.9,18.4 5.7,21 11.4,23.6
        12.6,21 11.7,20.6   "></polygon><path fill="#F4DF84" d="M28.2,7.1C28,7,27.9,6.8,27.7,6.7c-0.2-0.1-0.4-0.1-0.6-0.1c0.2-0.1,0.3-0.2,0.4-0.3
        c0.1-0.1,0.2-0.3,0.2-0.5c0-0.2,0-0.4,0-0.6c-0.1-0.3-0.2-0.6-0.3-0.8c-0.1-0.2-0.3-0.3-0.5-0.4C26.6,4,26.4,4,26.1,4
        c-0.2,0-0.5,0.1-0.8,0.1l-1.6,0.4l1.4,6.1l1.9-0.4c0.3-0.1,0.5-0.2,0.8-0.3s0.4-0.3,0.5-0.5c0.1-0.2,0.2-0.4,0.2-0.6
        c0-0.2,0-0.5-0.1-0.8C28.4,7.6,28.3,7.3,28.2,7.1z M25.3,5L25.5,5c0.2-0.1,0.3-0.1,0.5,0c0.1,0,0.2,0.1,0.3,0.2
        c0.1,0.1,0.1,0.2,0.2,0.4s0.1,0.3,0,0.4c0,0.1-0.1,0.2-0.1,0.3s-0.2,0.2-0.5,0.2l-0.3,0.1L25.3,5z M27.2,8.8
        c-0.1,0.2-0.3,0.3-0.5,0.4l-0.3,0.1l-0.4-1.8l0.3-0.1c0.2-0.1,0.4-0.1,0.5,0c0.1,0,0.2,0.1,0.3,0.2s0.1,0.3,0.2,0.5
        C27.2,8.4,27.2,8.7,27.2,8.8z"></path><path fill="#F4DF84" d="M18.2,6.9l1.8,6l1.1-0.6L20.8,11l0.8-0.4l0.8,1.1l1.1-0.6l-3.9-5L18.2,6.9z M21.1,10l-0.6,0.3L19.7,8
        L21.1,10z"></path><polygon fill="#F4DF84" points="32.3,3.3 30.9,3.3 30.8,9.5 33.6,9.6 33.6,8.6 32.2,8.6     "></polygon><path fill="#F4DF84" d="M42.3,8.4L42,7.7c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.2,0-0.4,0.1-0.6c0-0.1,0.1-0.2,0.2-0.3s0.2-0.1,0.3-0.1
        c0.1,0.1,0.2,0.1,0.2,0.2c0,0.1,0,0.2,0,0.3s-0.1,0.3-0.2,0.5l1.2,0.3c0.1-0.2,0.1-0.3,0.2-0.6c0-0.2,0-0.4,0-0.6
        c0-0.2-0.1-0.4-0.3-0.6s-0.4-0.3-0.7-0.5c-0.5-0.2-1-0.2-1.3-0.1c-0.4,0.1-0.7,0.5-0.9,0.9c-0.1,0.3-0.2,0.7-0.1,1
        c0.1,0.3,0.2,0.6,0.3,0.9L41,8.7c0.1,0.2,0.2,0.5,0.3,0.7c0,0.2,0,0.4-0.1,0.7c0,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.1-0.3,0
        c-0.1-0.1-0.2-0.1-0.2-0.2c0-0.1-0.1-0.2,0-0.4c0-0.2,0.1-0.4,0.2-0.6l-1.2-0.3c-0.2,0.4-0.2,0.8-0.2,1.1c0,0.3,0.1,0.6,0.3,0.8
        c0.2,0.2,0.5,0.4,0.8,0.6c0.3,0.1,0.6,0.2,0.9,0.1s0.5-0.1,0.7-0.3s0.4-0.4,0.5-0.7c0.2-0.4,0.2-0.8,0.2-1.1S42.5,8.7,42.3,8.4z"></path><path fill="#F4DF84" d="M18,39.9H46c0.3-0.3,0.7-0.5,1-0.9H17C17.3,39.3,17.6,39.5,18,39.9z"></path><g><path fill="#F4DF84" d="M24.8,41.1C24.8,41.1,24.7,41.1,24.8,41.1l-0.6,2h0l-0.6-1.9c0,0,0-0.1-0.1-0.1h-0.9c-0.1,0-0.1,0-0.1,0.1
            l1.1,3v2c0,0,0,0.1,0.1,0.1h0.9c0,0,0.1,0,0.1-0.1v-2l1.1-3c0,0-0.1-0.1-0.1-0.1H24.8z"></path><path fill="#F4DF84" d="M26.7,41.1C26.6,41.1,26.6,41.1,26.7,41.1l-0.1,5.1c0,0,0,0.1,0.1,0.1h2.5c0,0,0.1,0,0.1-0.1v-0.8
            c0,0,0-0.1-0.1-0.1h-1.4c0,0,0,0,0,0v-1.2c0,0,0,0,0,0H29c0,0,0.1,0,0.1-0.1v-0.7c0,0,0-0.1-0.1-0.1h-1.2c0,0,0,0,0,0v-1.1
            c0,0,0,0,0,0h1.4c0,0,0.1,0,0.1-0.1v-0.8c0,0,0-0.1-0.1-0.1C29.2,41.1,26.7,41.1,26.7,41.1z"></path><path fill="#F4DF84" d="M32.2,41.1h-1c0,0-0.1,0-0.1,0.1l-1.2,5c0,0,0,0.1,0.1,0.1h0.9c0.1,0,0.1,0,0.1-0.1l0.2-0.9h1.1l0.2,0.9
            c0,0,0,0.1,0.1,0.1h0.9c0,0,0.1,0,0.1-0.1l-1.2-5C32.3,41.2,32.3,41.1,32.2,41.1z M31.4,44.5l0.4-1.8h0l0.3,1.8H31.4z"></path><path fill="#F4DF84" d="M40.4,43.2l-0.3-0.1c-0.4-0.2-0.5-0.3-0.5-0.7c0-0.3,0.1-0.5,0.4-0.5s0.4,0.2,0.4,0.6c0,0,0,0.1,0.1,0.1
            l0.9-0.1c0,0,0.1,0,0.1-0.1c0-0.8-0.5-1.3-1.5-1.3c-1,0-1.5,0.5-1.5,1.4c0,0.8,0.3,1.2,1.1,1.5l0.3,0.1c0.4,0.1,0.5,0.3,0.5,0.8
            s-0.1,0.6-0.4,0.6c-0.3,0-0.5-0.2-0.5-0.7c0,0,0-0.1-0.1-0.1l-0.9,0.1c0,0-0.1,0-0.1,0.1c0,0.9,0.5,1.4,1.5,1.4
            c1.2,0,1.6-0.5,1.6-1.6C41.5,43.9,41.2,43.5,40.4,43.2z"></path><path fill="#F4DF84" d="M37.5,42.7c0-1.2-0.7-1.6-1.7-1.6h-1.4c0,0-0.1,0-0.1,0.1v5c0,0,0,0.1,0.1,0.1h0.9c0,0,0.1,0,0.1-0.1v-1.9
            c0,0,0,0,0,0h0.3l0.7,2c0,0,0,0.1,0.1,0.1h1c0,0,0,0,0-0.1L36.9,44C37.3,43.8,37.5,43.4,37.5,42.7z M35.8,43.4h-0.2c0,0,0,0,0,0
            V42c0,0,0,0,0,0h0.2c0.4,0,0.6,0.2,0.6,0.7C36.4,43.2,36.2,43.4,35.8,43.4z"></path></g><path fill="#F4DF84" d="M32,13.3c-10.3,0-18.7,8.4-18.7,18.7c0,10.3,8.4,18.7,18.7,18.7S50.7,42.3,50.7,32S42.3,13.3,32,13.3z
         M32,50.1C22,50.1,13.9,42,13.9,32S22,13.9,32,13.9S50.1,22,50.1,32S42,50.1,32,50.1z"></path><polygon fill="#F4DF84" points="49.1,9 47.6,11.1 46.8,10.5 48.3,8.5 47.2,7.7 43.5,12.7 44.6,13.5 46.2,11.3 47,11.9 45.4,14.1
        46.5,14.9 50.2,9.9  "></polygon></g></svg></span>
                    <p class="c-global-footer__lusa-seal-text"><span class="t-h6">Established in 1995</span>, <br>Lottery
                        USA is America's leading lottery resource.</p>
                </div>
            </div>
        </div>


    </div>
    <div class="c-global-footer__small-print">
        <div class="o-container">
                            <small>Please note: These results are unofficial. Always check with the official source for lottery numbers in a particular state. International Lottery  is an independent lottery results service and is neither endorsed, affiliated nor approved by any state, multi-state lottery operator or organization whatsoever. All trademarks remain the property of their rightful owners and used for informational purposes only. Copyright 1995-2023 Lotto Logic LTD., All Rights Reserved.</small>
                                        <p class="c-global-footer__updated">Updated:
                    <time datetime="2023-01-14T07:00">Sat, Jan 14, 2023 @ 7:00 AM</time>
                </p>
                    </div>
    </div>

</footer>


                            @endsection

