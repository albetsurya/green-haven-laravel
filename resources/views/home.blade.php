@extends('layouts.main')

@section('content')
<div class="main">
    <div class="main-hero">
        <h3 class="main-subtitle">Green Haven Project - Mangrove</h3>
        <h1 class="main-title">Green Horizons Await, Join Us in Planting 10,000 Mangroves!</h1>
        <div class="hero-scroll">
            <div class="scroll-container">
                <div class="scroll-item">
                    <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="hero-scroll">
                    <p>5690/10000 Pohon</p>
                </div>
                <button>Support Our Mission</button>
            </div>
            <img src="{{ asset('images/hero-image.png') }}" alt="main-hero" class="hero-image">
        </div>
    </div>

    <div class="leaderboard">
        <div class="leaderboard-title">Leaderboard</div>
        <ul class="leaderboard-list">
            <li class="leaderboard-item">
                <div class="leaderboard-logo">
                    <img src="{{ asset('images/leaderboard-logo1.svg') }}" alt="leaderboard-logo">
                    <span>Budi Hartanto</span>
                </div>
                <div>
                    <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                    <span>350 Pohon</span>
                </div>
            </li>
            <li class="leaderboard-item">
                <div>
                    <img src="{{ asset('images/leaderboard-logo1.svg') }}" alt="leaderboard-logo">
                    <span>Dewi Sartika</span>
                </div>
                <div>
                    <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                    <span>330 Pohon</span>
                </div>
            </li>
            <li class="leaderboard-item">
                <div>
                    <img src="{{ asset('images/leaderboard-logo1.svg') }}" alt="leaderboard-logo">
                    <span>Eko Wahyudi</span>
                </div>
                <div>
                    <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                    <span>200 Pohon</span>
                </div>
            </li>
            <li class="leaderboard-item">
                <div>
                    <img src="{{ asset('images/leaderboard-logo2.svg') }}" alt="leaderboard-logo">
                    <span>Rina Kartika</span>
                </div>
                <div>
                    <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                    <span>190 Pohon</span>
                </div>
            </li>
            <li class="leaderboard-item">
                <div>
                    <img src="{{ asset('images/leaderboard-logo2.svg') }}" alt="leaderboard-logo">
                    <span>Agus Prasetyo</span>
                </div>
                <div>
                    <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                    <span>140 Pohon</span>
                </div>
            </li>
            <li class="leaderboard-item">
                <div>
                    <img src="{{ asset('images/leaderboard-logo3.svg') }}" alt="leaderboard-logo">
                    <span>Irfan Setiawan</span>
                </div>
                <div>
                    <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                    <span>80 Pohon</span>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class='About'>
    <div class="about-header">
        <h1 class="about-title">About Green Haven</h1>
        <p class="about-description">The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by planting mangroves and educating participants about the importance of these areas. This six-hour event will involve JCI members, local farmers, and students, focusing on combating beach erosion and promoting ESG values.</p>
    </div>
    <div>
        <div class="event-details">
            <img>
            <p class="event-description">Before mangroves were planted</p>
        </div>
        <div class="event-details">
        <img>
            <p class="event-description">After mangroves were planted</p>
        </div>
    </div>
</div>

<div class="event-summary">
    <div class="event-header">
        <h1 class="event-title">Event Summary</h1>
        <p>We give you a brief overview of the event to give you a glimpse of what we're doing
                in the Green Haven Project, download the detailed PDF to see how you can get involved</p>
    </div>
    <div class="event-content">
        <div class="event-details">
            <h1 class="event-date">26/04/2024 </h1>
            <h1 class="event-time">08:00 - 11:00 WIB</h1>
            <p class="event-description">
                Join the impactful journey of planting mangroves,
                where you'll learn, collaborate with locals, earn recognition,
                and share your story through media coverage
            </p>
            <a href="#" class="event-link">View Event Details</a>
        </div>
            <div class="event-image">
            <img src="{{ asset('images/before-mangroves.jpg') }}" alt="Before Mangroves">
        </div>

    </div>
    <div class="event-tabs">
            <div class="tab-item">
                <h2 >01</h2>
                <p>Introducing the beauty
                of mangroves on a journey to the planting site.</p>
            </div>
            <div class="tab-item">
                <h2>02</h2>
                <p>Working together with local farmers while planting each mangrove</p>
            </div>
            <div class="tab-item">
                <h2>03</h2>
                <p>Exploring the wonders of mangrove ecotourism, an educational adventure.</p>
            </div>
            <div class="tab-item">
                <h2>04</h2>
                <p>Receive a plaque & badge, a mark of honor for every tree you plant.</p>
            </div>
            <div class="tab-item">
                <h2>05</h2>
                <p>Coverage & documentation by news media, share your story of change!</p>
            </div>
        </div>
</div>

<div class="sponsorship">
    <div class="sponsorship-header">
        <h1 class="sponsorship-title">Sponsorship Packages</h1>
        <p class="sponsorship-description">Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal for enhancing company presence and community engagement.</p>
    </div>
    <div class="sponsorship-content">
        <h1 class="sponsorship-subtitle">Personal Sponsorship Package</h1>
        <table class="sponsorship-table">
            <thead>
                <tr>
                    <th>Membership Tier</th>
                    <th>Min. Seeds</th>
                    <th>Min. Buy</th>
                    <th>Benefits</th>
                    <th>Donors</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Seedling Scout</td>
                    <td>5 Seeds</td>
                    <td>IDR 75K</td>
                    <td>Badge</td>
                    <td>4,900 Donors</td>
                    <td><a href="#" class="sponsor-button">Support Our Mission</a></td>
                </tr>
                <tr>
                    <td>Sapling Savior</td>
                    <td>10 Seeds</td>
                    <td>IDR 150K</td>
                    <td>Badge + Pin</td>
                    <td>4300 Donors</td>
                    <td><a href="#" class="sponsor-button">Support Our Mission</a></td>
                </tr>
                <tr>
                    <td>Tree Titan</td>
                    <td>20 Seeds</td>
                    <td>IDR 300K</td>
                    <td>Badge + Pin</td>
                    <td>15,000 Donors</td>
                    <td><a href="#" class="sponsor-button">Support Our Mission</a></td>
                </tr>
                <tr>
                    <td>Mangorve Master</td>
                    <td>50 Seeds</td>
                    <td>IDR 750K</td>
                    <td>Badge + Pin + Bag</td>
                    <td>5000 Donors</td>
                    <td><a href="#" class="sponsor-button">Support Our Mission</a></td>
                </tr>
                <tr>
                    <td>Guardian Of The Grove</td>
                    <td>100 Seeds</td>
                    <td>IDR 1500K</td>
                    <td>Badge + Pin + Bag</td>
                    <td>300 Donors</td>
                    <td><a href="#" class="sponsor-button">Support Our Mission</a></td>
                </tr>
                <tr>
                    <td>Mangrove Maven</td>
                    <td>200 Seeds</td>
                    <td>IDR 3000K</td>
                    <td>Badge + Pin + Bag</td>
                    <td>10 Donors</td>
                    <td><a href="#" class="sponsor-button">Support Our Mission</a></td>
                </tr>
            </tbody>
        </table>
    </div>
<div class="sponsorship-content">
        <h1 class="sponsorship-subtitle">Corporate Sponsorship Package</h1>
        <table class="sponsorship-table">
            <thead>
                <tr>
                    <th>Benefits</th>
                    <th>Eco Traiblazers</th>
                    <th>Green Innovators</th>
                    <th>Eco Vanguard</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>15 Million IDR</td>
                    <td>30 Million IDR</td>
                    <td>45 Million IDR</td>
                </tr>
                <tr>
                    <td>CO2 Sequestration</td>
                    <td>22,5 ton/year</td>
                    <td>45ton/year</td>
                    <td>67,5 ton/year</td>
                </tr>
            </tbody>
            <tr>
                <td>Logo on JCI Banners</td>
                <td><img></td>
                <td><img></td>
                <td><img></td>
            </tr>
            <tr>
                <td>Considered as Main Sponsor</td>
                <td><img></td>
                <td><img></td>
                <td><img></td>
            </tr>
            <tr>
                <td>Dedicated Stainless Plate</td>
                <td></td>
                <td><img></td>
                <td><img></td>
            </tr>
            <tr>
                <td>Report Update on Planted Trees</td>
                <td></td>
                <td><img></td>
                <td><img></td>
            </tr>
            <tr>
                <td>Logo on Event Clothibgs</td>
                <td></td>
                <td></td>
                <td><img></td>
            </tr>
            <tr>
                <td>Make a Donation</td>
                <td><a href="#" class="support-button">Support Our Mission</a></td>
                <td><a href="#" class="support-button">Support Our Mission</a></td>
                <td><a href="#" class="support-button">Support Our Mission</a></td>
            </tr>
        </table>
    </div>
</div>

<div class="close">
    <div class="close-header">
        <h1 class="close-title">Donate Today and be a
            Guardian of the Green Belt.</h1>
        <p class="close-description">Join us in our mission to rejuvenate and protect our shorelines
            by donating to our mangrove planting project. </p>
        <button class="close-button">Support Our Mission</button>
    </div>
    <div>
        <img src="{{ asset('images/event-summary.png') }}" alt="">
        <img src="{{ asset('images/event-summary.png') }}" alt="">
        <img src="{{ asset('images/event-summary.png') }}" alt="">
        <img src="{{ asset('images/event-summary.png') }}" alt="">
        <img src="{{ asset('images/event-summary.png') }}" alt="">
    </div>
</div>
@endsection
