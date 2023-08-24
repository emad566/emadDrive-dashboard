@extends('dashboard.layouts.app')
@section('title', __('Permission'))
@section('contant')
    <div class="d-flex flex-column-fluid">
        <div class="container">

             <x-sub-header>{{__('Permission')}}</x-sub-header>

            @livewire('permission.index')
        </div>
    </div>
@endsection
