@extends('Masters.MasterIndex')

@section('header')
    @include('Global.Header.Header')
@stop

@section('about')
    @include('Elements.Index.About')
@stop

@section('services')
    @include('Elements.Index.Services')
@stop
@section('work')
    @include('Elements.Index.Work')
@stop
@section('testimonial')
    @include('Elements.Index.Testimonial')
@stop
@section('contact')
    @include('Elements.Index.Contact')
@stop
@section('foter')
    @include('Global.Foter.Foter')
@stop