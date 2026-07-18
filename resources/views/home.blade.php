
@extends('layouts.app')

@section('title')
Sarita Pal | Senior PHP Laravel Developer Portfolio
@endsection

@section('description')
Portfolio of Sarita Pal, an experienced PHP Laravel Developer with expertise in Laravel, PHP, MySQL, Vue.js, Docker and AWS.
@endsection

@section('content')
  
  <main class="main">

    <!-- Hero Section -->
        @include('sections.hero')
    <!-- /Hero Section -->

    <!-- About Section -->
        @include('sections.about')
    <!-- /About Section -->

    <!-- Skills Section -->
        @include('sections.skills')
    <!-- /Skills Section -->

    <!-- Resume Section -->
        @include('sections.resume')
    <!-- /Resume Section -->

    <!-- Services Section -->
        @include('sections.service')
    <!-- /Services Section -->

    <!-- Portfolio Section -->
        @include('sections.portfolio')
    <!-- /Portfolio Section -->

    <!-- Testimonials Section -->
        @include('sections.current_learnings')
    <!-- /Testimonials Section -->

    <!-- Faq Section -->
        @include('sections.faq')
    <!-- /Faq Section -->

    <!-- Contact Section -->
        @include('sections.contact')
    <!-- /Contact Section -->

  </main>

@endsection