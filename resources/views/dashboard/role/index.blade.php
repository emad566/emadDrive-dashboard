@extends('dashboard.layouts.app')
@section('title', __('Role'))
@section('contant')
    <div class="d-flex flex-column-fluid">
        <div class="container">

             <x-sub-header>{{__('Role')}}</x-sub-header>

            @livewire('role.index')
        </div>
    </div>
@endsection
