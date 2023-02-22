@extends('layouts.main')
@section('main')
    <!-- off canvas -->
    <x-canvas></x-canvas>

    <!--  -->
    <x-owl-carousel></x-owl-carousel>

    <x-trending-section></x-trending-section>

    <x-post.home-section sectionTitle="Anime" :data="$anime" />
    <x-post.home-section sectionTitle="Manga" :data="$manga" />
    <x-post.home-section sectionTitle="Game" :data="$games" />
    <x-post.home-section sectionTitle="Writer's Pen" :data="$writersPen" />
    
    <x-feature-section />
@endSection