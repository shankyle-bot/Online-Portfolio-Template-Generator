@extends('layouts.app')

@section('title', $portfolio->full_name . ' - Portfolio')

@section('content')

@if($portfolio->template === 'simple')

    @include('portfolios.templates.simple')

@elseif($portfolio->template === 'modern')

    @include('portfolios.templates.modern')

@elseif($portfolio->template === 'creative')

    @include('portfolios.templates.creative')

@endif

@endsection