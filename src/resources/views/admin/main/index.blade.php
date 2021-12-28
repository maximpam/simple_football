@extends('layouts.app')

@section('scripts')
    @yield('scripts')
@endsection

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-2">
                @include('admin.main.sidebar')
            </div>

            <div class="col-md-10">
                <main class="">
                    @yield('admin_panel')
                </main>
            </div>
        </div>
    </div>
@endsection
