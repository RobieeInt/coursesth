@extends('layouts.course')

@section('content')
    <livewire:components.navbar />
    <livewire:components.hero :courses="$courses" />
    <livewire:components.categories />
    <livewire:components.courses />
    <livewire:components.about-us />


    <livewire:components.footer />
@endsection
