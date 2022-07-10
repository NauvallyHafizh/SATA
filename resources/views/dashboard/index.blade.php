@extends('dashboard.layouts.main')

@section('container')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li><i data-feather="chevron-right" height="12" weight="12"></i></li>
                                    <li aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-lg-4">
                        <div class="card">
                            <div class="row-lg-2 card-body">
                                <h2 class="font-light text-primary font-medium">{{ $userCount }}</h2>
                                <h4 class="card-title mb-0">Users</h4>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h2 class="font-light text-primary font-medium">8</h2>
                                <h4 class="card-title mb-0">Fertilizers</h4>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h2 class="font-light text-primary font-medium">2 </h2>
                                <h4 class="card-title mb-0">Categories</h4>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="myChart3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
<script>
var barData = JSON.parse(`<?php echo $dataBar['chart_data']; ?>`);
var pieData = JSON.parse(`<?php echo $dataPie['chart_data']; ?>`);
var lineLabel = JSON.parse(`<?php echo $labelLine['chart_data']; ?>`);
var lineData1 = JSON.parse(`<?php echo $dataLine1['chart_data']; ?>`);
var lineData2 = JSON.parse(`<?php echo $dataLine2['chart_data']; ?>`);

</script>
@endsection