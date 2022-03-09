@extends('frontEnd.layouts.main')
@section('content')
@include('frontEnd.partition.about')

@include('frontEnd.partition.facts')

@include('frontEnd.partition.skills')

@include('frontEnd.partition.resume')

@include('frontEnd.partition.portfolio')

@include('frontEnd.partition.services')

@include('frontEnd.partition.testimonials')

@include('frontEnd.partition.contact')
@endsection()
