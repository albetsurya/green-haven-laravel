@extends('layouts.main')

@section('content')
    <div class="main">
        <div class="main-container">
            <div class="main-hero">
                <div class="main-content">
                    <div class="main-header">
                        <h3 class="main-subtitle">Green Haven Project - Mangrove</h3>
                        <h1 class="main-title">Green Horizons Await, Join Us in Planting 10,000 Mangroves!</h1>
                    </div>
                    <div class="hero-scroll">
                        <div class="scroll-container">
                            <div class="scroll-item">
                                <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="hero-scroll">
                                <p>5690<span>/10000 Pohon</span></p>
                            </div>
                            <button>Support Our Mission</button>
                        </div>
                        <div class="hero-scroll-line">
                            <div class="scroll-active"></div>
                            <div class="scroll-inactive"></div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('images/hero-image.png') }}" alt="main-hero" class="hero-image">
            </div>

            <div class="leaderboard">
                <div class="leaderboard-header">
                    <h1 class="leaderboard-title">Leaderboard</h1>
                    <div class="leaderboard-tabs">
                        <div class="tab-item" active>
                            <h2>Most Donation</h2>
                        </div>
                        <div class="tab-item">
                            <h2>Most Recent</h2>
                        </div>
                    </div>
                </div>
                <ul class="leaderboard-list">
                    <li class="leaderboard-item">
                        <div class="leaderboard-logo">
                            <h2 class="step-1">01</h2>
                            <img src="{{ asset('images/leaderboard-logo1.svg') }}" alt="leaderboard-logo">
                        </div>
                        <div class="leaderboard-name">
                            <p>Mangrove Maven</p>
                            <span>Budi Hartanto</span>
                        </div>
                        <div class="leaderboard-icon">
                            <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                            <p>350<span> Pohon</span></p>
                        </div>
                    </li>
                    <li class="leaderboard-item">
                        <div class="leaderboard-logo">
                            <h2 class="step-2">02</h2>
                            <img src="{{ asset('images/leaderboard-logo1.svg') }}" alt="leaderboard-logo">
                        </div>
                        <div class="leaderboard-name">
                            <p>Mangrove Maven</p>
                            <span>Dewi Sartika</span>
                        </div>
                        <div class="leaderboard-icon">
                            <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                            <p>330<span> Pohon</span></p>
                        </div>
                    </li>
                    <li class="leaderboard-item">
                        <div class="leaderboard-logo">
                            <h2 class="step-3">03</h2>
                            <img src="{{ asset('images/leaderboard-logo1.svg') }}" alt="leaderboard-logo">
                        </div>
                        <div class="leaderboard-name">

                            <p>Mangrove Maven</p>
                            <span>Eko Wahyudi</span>
                        </div>
                        <div class="leaderboard-icon">
                            <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                            <p>200<span> Pohon</span></p>
                        </div>
                    </li>
                    <li class="leaderboard-item">
                        <div class="leaderboard-logo">
                            <h2 class="step-4">04</h2>
                            <img src="{{ asset('images/leaderboard-logo2.svg') }}" alt="leaderboard-logo">
                        </div>
                        <div class="leaderboard-name">

                            <p>Guardian of the Grove</p>
                            <span>Rina Kartika</span>
                        </div>
                        <div class="leaderboard-icon">
                            <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                            <p>190<span> Pohon</span></p>
                        </div>
                    </li>
                    <li class="leaderboard-item">
                        <div class="leaderboard-logo">
                            <h2 class="step-5">05</h2>
                            <img src="{{ asset('images/leaderboard-logo2.svg') }}" alt="leaderboard-logo">
                        </div>
                        <div class="leaderboard-name">

                            <p>Guardian of the Grove</p>
                            <span>Agus Prasetyo</span>
                        </div>
                        <div class="leaderboard-icon">
                            <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                            <p>140<span> Pohon</span></p>
                        </div>
                    </li>
                    <li class="leaderboard-item">
                        <div class="leaderboard-logo">
                            <h2 class="step-6">06</h2>
                            <img src="{{ asset('images/leaderboard-logo3.svg') }}" alt="leaderboard-logo">
                        </div>
                        <div class="leaderboard-name">

                            <p>Mangorove Master</p>
                            <span>Irfan Setiawan</span>
                        </div>
                        <div class="leaderboard-icon">
                            <img src="{{ asset('images/leaderboard-icon.svg') }}" alt="leaderboard-icon">
                            <p>80<span> Pohon</span></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="logo-clients">
            <img src="{{ asset('images/jala.png') }}" alt="jala" class="logo-client">
            <img src="{{ asset('images/efishery.png') }}" alt="efishery" class="logo-client">
            <img src="{{ asset('images/azarine.png') }}" alt="azarine" class="logo-client">
            <img src="{{ asset('images/kompas.png') }}" alt="kompas" class="logo-client">
            <img src="{{ asset('images/tribun.png') }}" alt="tribun" class="logo-client">
            <img src="{{ asset('images/jawapos.png') }}" alt="jawapos" class="logo-client">
        </div>
    </div>

    <div class='about'>
        <div class="about-logo">
            <img class="jci" src="{{ asset('images/jci.png') }}" alt="jci">
            <img class="green-haven" src="{{ asset('images/green-haven.png') }}" alt="green-haven">
        </div>
        <div class="about-header">
            <h1 class="about-title">About Green Haven</h1>
            <p class="about-description">
                The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by planting
                mangroves and educating participants about the importance of these areas. This six-hour event will involve
                JCI members, local farmers, and students, focusing on combating beach erosion and promoting ESG values.
            </p>
        </div>
        <div class="about-event">
            <div class="event-details">
                <img src="{{ asset('images/about-before.png') }}" alt="about-before">
                <p class="event-description">Before mangroves were planted</p>
            </div>
            <div class="event-details">
                <img src="{{ asset('images/about-after.png') }}" alt="about-after">
                <p class="event-description">After mangroves were planted</p>
            </div>
            <div class="transformation">
                <img src="{{ asset('images/tranformation.png') }}" alt="transformation">
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
                <button class="event-link">
                    <p> View Event Details</p>
                </button>
            </div>
            <div class="event-image">
                <img src="{{ asset('images/event-image.png') }}" alt="event">
            </div>

        </div>
        <div class="event-tabs">
            <div class="tab-item">
                <h2>01</h2>
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
            <p class="sponsorship-description">Our sponsorship package offers branding, promotional opportunities, and
                visibility at our event, ideal for enhancing company presence and community engagement.</p>
        </div>
        <div class="sponsorship-package">
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
                            <td>
                                <img src="{{ asset('images/logo1.png') }}" alt="logo">
                                <span>Seedling Scout</span>
                            </td>
                            <td>5 Seeds</td>
                            <td>IDR 75K</td>
                            <td>Badge</td>
                            <td>4,900 Donors</td>
                            <td><a href="#" class="sponsor-button">Support Our Mission</a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('images/logo2.png') }}" alt="logo">
                                <span>Sapling Savior</span>
                            </td>
                            <td>10 Seeds</td>
                            <td>IDR 150K</td>
                            <td>Badge + Pin</td>
                            <td>4300 Donors</td>
                            <td><a href="#" class="sponsor-button">Support Our Mission</a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('images/logo3.png') }}" alt="logo">
                                <span>Tree Titan</span>
                            </td>
                            <td>20 Seeds</td>
                            <td>IDR 300K</td>
                            <td>Badge + Pin</td>
                            <td>15,000 Donors</td>
                            <td><a href="#" class="sponsor-button">Support Our Mission</a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('images/logo4.png') }}" alt="logo">
                                <span>Mangorve Master</span>
                            </td>
                            <td>50 Seeds</td>
                            <td>IDR 750K</td>
                            <td>Badge + Pin + Bag</td>
                            <td>5000 Donors</td>
                            <td><a href="#" class="sponsor-button">Support Our Mission</a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('images/logo5.png') }}" alt="logo">
                                <span>Guardian Of The Grove</span>
                            </td>
                            <td>100 Seeds</td>
                            <td>IDR 1500K</td>
                            <td>Badge + Pin + Bag</td>
                            <td>300 Donors</td>
                            <td><a href="#" class="sponsor-button">Support Our Mission</a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('images/logo6.png') }}" alt="logo">
                                <span>Mangrove Maven</span>
                            </td>
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
                    <tr class="last-row">
                        <td>Make a Donation</td>
                        <td><a href="#" class="support-button">Support Our Mission</a></td>
                        <td><a href="#" class="support-button">Support Our Mission</a></td>
                        <td><a href="#" class="support-button">Support Our Mission</a></td>
                    </tr>
                </table>
            </div>
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
        <div class="close-images">
            <img src="{{ asset('images/close-image1.png') }}" alt="close-image">
            <img src="{{ asset('images/close-image2.png') }}" alt="close-image">
            <img src="{{ asset('images/close-image3.png') }}" alt="close-image">
            <img src="{{ asset('images/close-image4.png') }}" alt="close-image">
            <img src="{{ asset('images/close-image5.png') }}" alt="close-image">
        </div>
    </div>
@endsection
