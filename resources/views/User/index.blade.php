@extends('layouts.app')

@section('content')
<div class="container container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal-tab-pane" type="button" role="tab" aria-controls="personal-tab-pane" aria-selected="true">I</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="service-tab" data-bs-toggle="tab" data-bs-target="#service-tab-pane" type="button" role="tab" aria-controls="service-tab-pane" aria-selected="false">II</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="training-tab" data-bs-toggle="tab" data-bs-target="#training-tab-pane" type="button" role="tab" aria-controls="training-tab-pane" aria-selected="false">III</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="special-tab" data-bs-toggle="tab" data-bs-target="#special-tab-pane" type="button" role="tab" aria-controls="special-tab-pane" aria-selected="false">IV</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @include('User/Partial/user_info')
                        @include('User/Partial/user_service')
                        @include('User/Partial/user_training')
                        @include('User/Partial/user_special_training')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
