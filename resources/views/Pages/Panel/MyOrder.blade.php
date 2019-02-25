@extends('Masters.MasterPanel')

@section('header')
    @include('Global.Panel.Header.Header')
@stop

@section('sidebar')
    @include('Global.Panel.Sidebar.Sidebar')
@stop

@section('content')
    @include('Elements.Panel.Orders.MyOrder')
@stop

@section('foter')
    @include('Global.Foter.Foter')
@stop