@extends('dashboard.layouts.app')
@section('title', __('Captain'))
@section('contant')
    <div class="d-flex flex-column-fluid">
        <div class="container">

             <x-sub-header>{{__('Captain')}}</x-sub-header>
            @livewire('captain.index')
        </div>
    </div>
@endsection
