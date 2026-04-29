@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="hero-content">

        <div class="small-line"></div>

        <h1>
            WE BUILD WEBSITES <br>
            THAT BRING YOU CLIENTS
        </h1>

        <h3>
            Premium Web Design for Growing Businesses
        </h3>

        <p>
            We help restaurants, salons, clinics, and local brands
            turn visitors into paying customers through powerful,
            conversion-focused websites.
        </p>

        <div class="hero-buttons">
            <a href="{{ route('contact') }}" class="btn">
                Book Free Consultation
            </a>

            <a href="#portfolio" class="btn btn-outline">
                View Our Work
            </a>
        </div>

        <div class="hero-proof">
            <div>Responsive Design</div>
            <div>SEO Ready</div>
            <div>Built to Convert</div>
        </div>

    </div>
</section>

<section id="portfolio" class="section portfolio-section">
    <h2 class="section-title">Recent Website Concepts</h2>
    <p class="section-subtitle">
        Sample website designs built for businesses that need stronger online presence, better trust, and more customer inquiries.
    </p>

    <div class="portfolio-grid">
        <div class="portfolio-card">
            <div class="portfolio-image restaurant-demo"></div>
            <div class="portfolio-content">
                <span>Restaurant Website</span>
                <h3>Reservation & Menu Website</h3>
                <p>
                    A premium restaurant website concept with menu display, reservation CTA,
                    location details, and high-converting food presentation.
                </p>
                <a href="{{ route('contact') }}">Request Similar Website</a>
            </div>
        </div>

        <div class="portfolio-card">
            <div class="portfolio-image salon-demo"></div>
            <div class="portfolio-content">
                <span>Salon Website</span>
                <h3>Booking-Focused Salon Website</h3>
                <p>
                    A clean beauty service website concept designed for appointment booking,
                    service lists, price display, and client inquiries.
                </p>
                <a href="{{ route('contact') }}">Request Similar Website</a>
            </div>
        </div>

        <div class="portfolio-card">
            <div class="portfolio-image clinic-demo"></div>
            <div class="portfolio-content">
                <span>Clinic Website</span>
                <h3>Professional Clinic Website</h3>
                <p>
                    A trustworthy clinic website concept with service pages, appointment forms,
                    credibility sections, and clear contact information.
                </p>
                <a href="{{ route('contact') }}">Request Similar Website</a>
            </div>
        </div>
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