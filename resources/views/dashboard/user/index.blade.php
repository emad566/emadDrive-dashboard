@extends('dashboard.layouts.app')
@section('title', __('User'))
@section('contant')
    <div class="d-flex flex-column-fluid">
        <div class="container">

             <x-sub-header>{{__('User')}}</x-sub-header>

            @livewire('user.index')
        </div>
    </div>
@endsection
