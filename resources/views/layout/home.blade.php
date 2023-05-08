@extends('layout.main')

@section('http')
SIA | Dashboard
@endsection

@section('isi')
<div class="row ">
        <div class="col-xl-4   col-lg-8">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Posisi Keuangan</h5>
                    </div>
                    <p>&nbsp;</p>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Rp 25.000.000
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span><i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-8">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Laba Rugi</h5>
                    </div>
                    <p>&nbsp;</p>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Rp 10.000.000
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span><i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-8">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Arus Kas</h5>
                    </div>
                    <p>&nbsp;</p>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Rp 33.000.000
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span> <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection