@extends('layouts.app')

@section('content')

<section class="section dark-section">
    <h2 class="section-title">Let’s Build Your Website</h2>
    <p class="section-subtitle">
        Tell us what kind of website your business needs.
    </p>

    <div class="contact-wrapper">
        <div class="contact-info">
            <h3>Contact Krysalis</h3>

            <p><strong>Facebook:</strong> Krysalis</p>
            <p><strong>Email:</strong> krysalisbusiness@gmail.com</p>
            <p><strong>Phone:</strong> +63 XXX XXX XXXX</p>
            <p><strong>Location:</strong> Pampanga, Philippines</p>

            <br>

            <h3>Business Hours</h3>
            <p>Monday – Saturday</p>
            <p>9:00 AM – 6:00 PM</p>
        </div>

        <form>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Business Name">
            <input type="email" placeholder="Email Address">
            <input type="text" placeholder="Phone Number">

            <select>
                <option>Type of Website Needed</option>
                <option>Restaurant Website</option>
                <option>Salon Website</option>
                <option>Dental / Clinic Website</option>
                <option>Business Landing Page</option>
                <option>E-Commerce Website</option>
                <option>Website Maintenance</option>
            </select>

            <textarea placeholder="Tell us about your business"></textarea>

            <button type="submit" class="btn">Submit Inquiry</button>
        </form>
    </div>
</section>

@endsection