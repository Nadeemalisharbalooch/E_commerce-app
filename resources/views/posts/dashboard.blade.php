@extends('layouts.auth')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-6 col-md-4">
                <div class="card card-default card-mini bg-info text-white">
                    <div class="card-header">
                        <h2>PRODUCTS</h2>
                        <div class="sub-title">
                            <span class="mr-1">{{ count($products) }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card card-default card-mini bg-success text-white">
                    <div class="card-header">
                        <h2>CATEGORIES</h2>
                        <div class="sub-title">
                            <span class="mr-1">{{ count($category) }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card card-default card-mini bg-warning text-white">
                    <div class="card-header">
                        <h2>VENDOR</h2>
                        <div class="sub-title">
                            <span class="mr-1">{{count($vendor)}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-4">
                <div class="card card-default card-mini bg-primary text-white">
                    <div class="card-header">
                        <h2>BRANDS</h2>
                        <div class="sub-title">
                            <span class="mr-1">{{ count($brand) }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card card-default card-mini bg-secondary text-white">
                    <div class="card-header">
                        <h2>ORDERS</h2>
                        <div class="sub-title">
                            <span class="mr-1">{{ count($order) }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card card-default card-mini bg-danger text-white">
                    <div class="card-header">
                        <h2>USERS</h2>
                        <div class="sub-title">
                            <span class="mr-1">{{ count($users) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('auth/js/mono.js') }}"></script>
<script src="{{ asset('auth/js/chart.js') }}"></script>
<script src="{{ asset('auth/js/map.js') }}"></script>
<script src="{{ asset('auth/js/custom.js') }}"></script>
@endsection
