@include('partials.navbar')


<!-- Hero Section -->
<div class="hero-container">
    <div class="hero position-relative">
        <img src="{{ asset('assets/img/img_26.jpeg') }}" class="img-fluid w-100" alt="Global Dance Festival Vancouver" style="height: 80vh; object-fit: cover;">
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay"></div>
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="display-3 fw-bold text-white">Global Dance Festival</h1>
            <p class="lead text-white">August 23, 2025 | Vancouver, BC</p>
            <a href="https://www.axs.com/" class="btn btn-theme-primary btn-lg mt-3">Get Tickets</a>
        </div>
    </div>
</div>

<!-- Countdown Timer -->
<div class="countdown bg-theme-dark text-white py-4 text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="countdown-timer" class="d-flex justify-content-center gap-4">
                    <div class="days">
                        <span class="h2 timer-number text-white">00</span>
                        <span class="d-block text-white">Days</span>
                    </div>
                    <div class="hours">
                        <span class="h2 timer-number text-white">00</span>
                        <span class="d-block text-white">Hours</span>
                    </div>
                    <div class="minutes">
                        <span class="h2 timer-number text-white">00</span>
                        <span class="d-block text-white">Minutes</span>
                    </div>
                    <div class="seconds">
                        <span class="h2 timer-number text-white">00</span>
                        <span class="d-block text-white">Seconds</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ticket Bar -->
<div class="ticket-bar bg-theme-primary py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-center gap-3">
                <a href="#" class="btn btn-outline-light btn-lg">Buy Tickets</a>
                <a href="#" class="btn btn-outline-light btn-lg">Event Details</a>
                <a href="https://globaldancefestival.com/tickets/vip-tickets/" class="btn btn-outline-light btn-lg">Call of Artists</a>
                <a href="https://globaldancefestival.com/lineup/" class="btn btn-outline-light btn-lg">Location</a>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->
<div class="container my-5">
    <!-- Event Information -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow border-0">
                <div class="card-header bg-theme-primary text-white py-3">
                    <h2 class="card-title text-center mb-0 text-white">Event Details</h2>
                </div>
                <div class="card-body p-md-5">
                    <p class="lead mb-4">Welcome to the Global Dance Festival 2025: Fusion of Diversity!
Get ready for Surrey’s most electrifying event of the year—the Global Dance Festival 2025: Fusion of Diversity! On August 23rd, the Bell Performing Arts Centre will ignite with a breathtaking celebration of movement, culture, and passion.
<br><br>🌍 A Spectacle of Global Rhythms
From the grace of Indian Classical Dance to the high-energy beats of Hip Hop, Jazz, and Latin rhythms, witness an awe-inspiring fusion of styles that transcend borders. Experience the magic of storytelling through dance, as talented performers, including those with special abilities, bring their own extraordinary flair to the stage. <br>
<br>🎭 More Than Just a Festival—An Unforgettable Experience!
Immerse yourself in a vibrant atmosphere beyond the performances. Explore a lively cultural marketplace, indulge in delicious international flavors, and celebrate diversity, inclusivity, and unity in a way that only dance can express.
<br><br>💡 Opportunities for Businesses & Brands
Be part of something extraordinary! Exciting sponsorship opportunities are available for businesses to showcase their values and connect with a dynamic, diverse audience.
<br><br>🎟 Reserve Your Spot Now!
With limited seats available, don’t miss your chance to be part of this spectacular celebration. Secure your tickets today and get ready to make unforgettable memories!
<br><br>✨ The rhythm is calling. Are you ready to make history?</p>
                    
                    <h3 class="mt-5 mb-3 text-theme-primary">Event Highlights:</h3>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><i class="fas fa-star text-theme-primary me-2"></i> Charity Partner BC Children's Hospital</li>
                        <li class="list-group-item"><i class="fas fa-star text-theme-primary me-2"></i> A performance by students from a special needs school</li>
                        <li class="list-group-item"><i class="fas fa-star text-theme-primary me-2"></i> VIP Guest</li>
                        <li class="list-group-item"><i class="fas fa-star text-theme-primary me-2"></i> Top dance school performances</li>
                        <li class="list-group-item"><i class="fas fa-star text-theme-primary me-2"></i> Canadian local vendors</li>
                        <li class="list-group-item"><i class="fas fa-star text-theme-primary me-2"></i> Local Business networking</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Festival Details -->
<div class="row mb-5">
    <div class="col-lg-10 mx-auto">
        <div class="card shadow border-0">
            <div class="card-header bg-theme-primary text-white py-3">
                <h2 class="card-title text-center mb-0 text-white">Festival Details</h2>
            </div>
            <div class="card-body p-md-5">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="info-box p-4 bg-light rounded">
                            <h4 class="text-theme-primary mb-3"><i class="far fa-calendar-alt me-2"></i> Date</h4>
                            <p class="mb-0 ps-1">Saturday, August 23rd, 2025</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="info-box p-4 bg-light rounded">
                            <h4 class="text-theme-primary mb-3"><i class="far fa-clock me-2"></i> Hours</h4>
                            <p class="mb-0 ps-1">4:30 PM – 8:30 PM</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="info-box p-4 bg-light rounded">
                            <h4 class="text-theme-primary mb-3"><i class="fas fa-map-marker-alt me-2"></i> Venue</h4>
                            <p class="mb-0 ps-1">Bell Performing Arts Centre<br>6250 144 St, Surrey, BC V3X 1A2</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="info-box p-4 bg-light rounded">
                            <h4 class="text-theme-primary mb-3"><i class="fas fa-parking me-2"></i> Parking</h4>
                            <p class="mb-0 ps-1">Free Parking</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="info-box p-4 bg-light rounded">
                            <h4 class="text-theme-primary mb-3"><i class="fas fa-users me-2"></i> Age</h4>
                            <p class="mb-0 ps-1">All ages welcome</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="info-box p-4 bg-light rounded">
                            <h4 class="text-theme-primary mb-3"><i class="fas fa-utensils me-2"></i> Food and Beverages</h4>
                            <p class="mb-0 ps-1">Available for purchase outside the theatre. Food is not permitted inside the theatre.</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
                    <a href="https://www.axs.com/" class="btn btn-theme-primary btn-lg px-5">Secure Your Tickets Now</a>
                    <p class="mt-3">Be part of this incredible celebration of dance and culture!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Additional styles for better text alignment */
.info-box {
    height: 100%;
    transition: all 0.3s ease;
    border-left: 4px solid var(--theme-primary);
    display: flex;
    flex-direction: column;
}

.info-box h4 {
    margin-bottom: 12px !important;
    border-bottom: 1px solid rgba(235, 0, 41, 0.1);
    padding-bottom: 8px;
}

.info-box p {
    line-height: 1.6;
}

/* Ensure consistent height for boxes with shorter content */
.info-box p.mb-0 {
    flex-grow: 1;
}

.card-img-container{
    height: 300px;
}
.card-img-container img{
    height: 300px;
}
}
</style>
    <!-- Video Section -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow border-0">
                <div class="card-header bg-theme-primary text-white py-3">
                    <h2 class="card-title text-center mb-0 text-white">Festival Highlights</h2>
                </div>
                <div class="card-body p-md-5">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/9aEibOnV_uM" title="Global Dance Festival Trailer" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Attractions Section -->
<div class="full-width-news bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="text-center mb-5 text-theme-primary">Festival Attractions</h2>
            </div>
            
            <!-- Attraction 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/img/event_sec_img_1.jpg') }}" class="card-img-top" alt="BC Children's Hospital">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title h4 text-theme-primary"> Partially Proceeds as Donations</h3>
                        <p class="card-text">Supporting BC Children's Hospital with a portion of all ticket sales donated to help children in need.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="https://secured.bcchf.ca/registrant/FundraisingPage.aspx?registrationID=5513482&langPref=en-CA#&panel1-4" class="btn btn-theme-outline">Donate Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Attraction 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/img/event_sec_img_2.jpg') }}" class="card-img-top" alt="Special Performances">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title h4 text-theme-primary">Special Performances</h3>
                        <p class="card-text">Experience a heartwarming performance by students from a special needs school that will inspire everyone.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="https://docs.google.com/forms/d/1WYtPOEgJaNiz2ALMB3F01RZ-4Rk4C9030TVqSL2_Rww/viewform?edit_requested=true" class="btn btn-theme-outline">Register Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Attraction 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/img/img_12.jpeg') }}" class="card-img-top" alt="Local Vendors">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title h4 text-theme-primary">Local Vendors</h3>
                        <p class="card-text">Explore products and services from Canadian local vendors and network with local businesses.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-theme-outline">Vendor List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Section -->
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow border-0">
                <div class="card-header bg-theme-primary text-white py-3">
                    <h2 class="card-title text-center mb-0 text-white">Location</h2>
                </div>
                <div class="card-body p-md-5">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.073371486493!2d-122.83249362378129!3d49.12620397125169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d7f65a5bb1a5%3A0x9f10fae36f1c43ef!2sBell%20Performing%20Arts%20Centre!5e0!3m2!1sen!2sca!4v1711149269532!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="footer-cta py-5 text-white" style="background: url('{{ asset('assets/img/img_26.jpeg') }}') center center / cover no-repeat fixed;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-4 mb-3 text-white">Join Us on August 23rd</h2>
                <p class="lead mb-4 text-white">Secure your tickets now and be part of this incredible celebration of dance and culture in Greater Vancouver!</p>
                <a href="https://www.axs.com/" class="btn btn-theme-primary btn-lg px-4">Get Your Tickets</a>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set the date we're counting down to
        const countDownDate = new Date("August 23, 2025 16:30:00").getTime();

        // Update the countdown every 1 second
        const x = setInterval(function() {
            // Get today's date and time
            const now = new Date().getTime();
            
            // Find the distance between now and the count down date
            const distance = countDownDate - now;
            
            // Time calculations for days, hours, minutes and seconds
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Display the result
            document.querySelector(".days .timer-number").textContent = days.toString().padStart(2, '0');
            document.querySelector(".hours .timer-number").textContent = hours.toString().padStart(2, '0');
            document.querySelector(".minutes .timer-number").textContent = minutes.toString().padStart(2, '0');
            document.querySelector(".seconds .timer-number").textContent = seconds.toString().padStart(2, '0');
            
            // If the count down is finished, display expiry message
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown-timer").innerHTML = "The festival has begun!";
            }
        }, 1000);
    });
</script>

<style>
    /* Custom Theme Colors */
    :root {
        --theme-primary: #EB0029;
        --theme-white: #FFFFFF; 
        --theme-dark: #161921;
    }

    /* Global Styles */
    body {
        font-family: 'Roboto', sans-serif;
        color: var(--theme-dark);
    }

    .bg-theme-primary {
        background-color: var(--theme-primary) !important;
    }
    
    .bg-theme-dark {
        background-color: var(--theme-dark) !important;
    }

    .text-theme-primary {
        color: var(--theme-primary) !important;
    }

    .btn-theme-primary {
        background-color: var(--theme-primary);
        border-color: var(--theme-primary);
        color: var(--theme-white);
    }

    .btn-theme-primary:hover, 
    .btn-theme-primary:focus {
        background-color: #c5001e;
        border-color: #c5001e;
        color: var(--theme-white);
    }

    .btn-theme-white {
        background-color: var(--theme-white);
        border-color: var(--theme-white);
        color: var(--theme-primary);
        font-weight: bold;
    }

    .btn-theme-white:hover, 
    .btn-theme-white:focus {
        background-color: #f0f0f0;
        border-color: #f0f0f0;
        color: var(--theme-primary);
    }

    .btn-theme-outline {
        border-color: var(--theme-primary);
        color: var(--theme-primary);
    }

    .btn-theme-outline:hover, 
    .btn-theme-outline:focus {
        background-color: var(--theme-primary);
        color: var(--theme-white);
    }

    /* Hero Section */
    .hero-container {
        position: relative;
    }

    .hero-overlay {
        background-color: rgba(22, 25, 33, 0.5);
    }

    /* Countdown Timer */
    .timer-number {
        font-weight: bold;
        font-size: 2.5rem;
    }

    /* Ticket Bar */
    .ticket-bar .btn {
        font-weight: bold;
        text-transform: uppercase;
        min-width: 150px;
    }

    /* Info Boxes */
    .info-box {
        height: 100%;
        transition: all 0.3s ease;
        border-left: 4px solid var(--theme-primary);
    }

    .info-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    /* Card Styles */
    .card {
        transition: transform 0.3s ease;
        overflow: hidden;
        border-radius: 8px;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-img-container {
        overflow: hidden;
        position: relative;
    }

    .card-img-top {
        height: 220px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .card:hover .card-img-top {
        transform: scale(1.05);
    }

    .card-header {
        border-bottom: none;
        border-radius: 8px 8px 0 0 !important;
    }

    /* List Styles */
    .list-group-item {
        border-left: none;
        border-right: none;
        border-top: none;
        padding-left: 0;
        padding-right: 0;
    }
    
    .list-group-item:last-child {
        border-bottom: none;
    }

    .list-group-item i {
        width: 20px;
        text-align: center;
    }

    /* CTA Section */
    .footer-cta {
        position: relative;
    }

    .footer-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(22, 25, 33, 0.8);
        z-index: 1;
    }

    .footer-cta .container {
        position: relative;
        z-index: 2;
    }
</style>

@include('partials.footer')