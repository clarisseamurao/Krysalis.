@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="hero-content">
        <div class="small-line"></div>
        <h1>KRYSALIS</h1>
        <h3>Websites That Transform Businesses</h3>
        <p>
            We create powerful, minimalist, and high-converting websites for restaurants,
            salons, dental clinics, service businesses, and growing local brands.
        </p>

        <a href="{{ route('contact') }}" class="btn">Start Your Website</a>
        <a href="{{ route('services') }}" class="btn btn-outline">View Services</a>
    </div>
</section>

<section class="section light-section">
    <h2 class="section-title">What We Build</h2>
    <p class="section-subtitle">
        Krysalis helps businesses move beyond simple social media pages by creating websites
        that build trust, attract customers, and generate inquiries.
    </p>

    <div class="cards">
        <div class="card">
            <h3>Restaurant Websites</h3>
            <p>Menus, reservations, pickup ordering, food galleries, location maps, and promotions.</p>
        </div>

        <div class="card">
            <h3>Salon Websites</h3>
            <p>Service lists, booking forms, stylist profiles, price lists, and client inquiries.</p>
        </div>

        <div class="card">
            <h3>Dental Websites</h3>
            <p>Professional clinic pages, appointment forms, treatments, contact details, and credibility sections.</p>
        </div>
    </div>
</section>

<section class="section dark-section">
    <h2 class="section-title">Why Your Business Needs a Website</h2>
    <p class="section-subtitle">
        A website gives your business credibility, visibility, and control. Social media is useful,
        but it should not be your only online presence. A professional website makes your business
        easier to find, easier to trust, and easier to contact.
    </p>
</section>

<section class="section light-section">
    <h2 class="section-title">The Story of Krysalis</h2>

    <div class="about-box">
        <p>
            Krysalis was founded to help small and growing businesses build a stronger online presence.
            Many local businesses still depend only on social media, which limits their credibility,
            customer reach, and ability to convert visitors into paying clients. Krysalis was created
            to solve that problem by offering clean, professional, and conversion-focused websites
            designed for real business growth.
        </p>
    </div>
</section>

@endsection