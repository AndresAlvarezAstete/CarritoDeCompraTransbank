@extends('layouts.simple.master')

@section('title', 'Default')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Details</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Details</li>
@endsection

@section('content')
 <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order Details</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Order Details</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h1>Your order was approved with the transaction ID: {{ $compra_id }}</h1>
                </div>
                <br>
                <a href="/" class="btn btn-dark">Home</a>
            </div>
        </div>
    </div>
<script type="text/javascript">
    var session_layout = '{{ session()->get('layout') }}';
</script>
@endsection

@section('script')

@endsection
