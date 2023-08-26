@extends('dashboard.layouts.app')
@section('title', __('Roles'))
@section('contant')
    <div class="d-flex flex-column-fluid">
        <div class="container">

            <x-sub-header>{{__('Roles')}}</x-sub-header>

            @livewire('role.index')
        </div>
    </div>
@endsection
