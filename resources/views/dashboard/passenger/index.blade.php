@extends('dashboard.layouts.app')
@section('title', __('Passenger'))
@section('contant')
    <div class="d-flex flex-column-fluid">
        <div class="container">

             <x-sub-header>{{__('Passenger')}}</x-sub-header>

            @livewire('passenger.index')
        </div>
    </div>
@endsection
