@extends('Masters.MasterPanel')

@section('header')
    @include('Global.Admin.Header.Header')
@stop

@section('sidebar')
    @include('Global.Admin.Sidebar.Sidebar')
@stop

@section('content')
    @include('Elements.Admin.Orders.ManageOrders')
@stop

@section('foter')
    @include('Global.Admin.Foter.Foter')
@stop