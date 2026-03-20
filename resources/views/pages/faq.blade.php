@extends('layouts.master')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-green-600 to-red-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Frequently Asked Questions
            </h1>
            <p class="text-xl md:text-2xl">
                Everything You Need to Know About DPA Summit 2026
            </p>
        </div>
    </div>
</section>

<!-- FAQ Categories -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Quick Navigation</h2>
            <p class="text-xl text-gray-700">Find answers to your questions</p>
        </div>
        <div class="grid md:grid-cols-4 gap-4 mb-12">
            <button class="bg-green-100 text-green-800 px-4 py-2 rounded-lg font-semibold hover:bg-green-200 transition-colors">
                Registration
            </button>
            <button class="bg-red-100 text-red-800 px-4 py-2 rounded-lg font-semibold hover:bg-red-200 transition-colors">
                Event Details
            </button>
            <button class="bg-green-100 text-green-800 px-4 py-2 rounded-lg font-semibold hover:bg-green-200 transition-colors">
                Logistics
            </button>
            <button class="bg-red-100 text-red-800 px-4 py-2 rounded-lg font-semibold hover:bg-red-200 transition-colors">
                Technical
            </button>
        </div>
    </div>
</section>

<!-- Registration FAQs -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-green-600 mb-4">Registration & Invitations</h2>
        </div>
        <div class="space-y-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Who can attend DPA Summit 2026?</h3>
                <p class="text-gray-700">
                    DPA Summit 2026 is designed for senior executives involved in procurement and digital transformation. 
                    Primary attendees include CPOs, CFOs, Procurement Directors, Supply Chain VPs, and Digital Transformation 
                    Heads from large enterprises with annual procurement budgets over $10M.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">How do I register for the event?</h3>
                <p class="text-gray-700">
                    Registration is simple and can be completed through our online registration form. 
                    Click the "Register Now" button on any page, fill in your details, and submit. 
                    You'll receive a confirmation email within 24 hours with further details.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">What is the registration fee?</h3>
                <p class="text-gray-700">
                    Early bird registration is $500 per delegate (available until April 30, 2026). 
                    Standard registration is $750 per delegate. Group discounts are available for 
                    5+ delegates from the same organization.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Can I get an invitation letter for visa purposes?</h3>
                <p class="text-gray-700">
                    Yes, we provide official invitation letters for international delegates requiring visas. 
                    After completing registration, contact us at info@digitalprocurement.africa with your 
                    registration details to request an invitation letter.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">What is the cancellation policy?</h3>
                <p class="text-gray-700">
                    Cancellations received 30 days before the event receive a 75% refund. 
                    Cancellations 15-29 days before receive a 50% refund. 
                    No refunds for cancellations less than 15 days before the event.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Event Details FAQs -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-red-600 mb-4">Event Details</h2>
        </div>
        <div class="space-y-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">What are the main topics covered?</h3>
                <p class="text-gray-700">
                    The summit focuses on three critical areas: <strong>Digital Governance</strong> (frameworks and policies), 
                    <strong>Leakage Audit</strong> (identifying and plugging value leaks), and <strong>Automation</strong> 
                    (AI-powered procurement solutions).
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Who are the speakers?</h3>
                <p class="text-gray-700">
                    Our speakers include CPOs and CFOs from Africa's largest enterprises, global procurement technology 
                    experts, digital transformation specialists, and industry analysts. The full speaker lineup will 
                    be announced in April 2026.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Will there be demos of procurement solutions?</h3>
                <p class="text-gray-700">
                    Yes, we have dedicated demo sessions where leading procurement technology providers will showcase 
                    their solutions. These are interactive sessions designed to help you evaluate different platforms.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">What industries will be represented?</h3>
                <p class="text-gray-700">
                    We expect strong representation from banking and financial services, telecommunications, 
                    oil & gas, manufacturing, retail, and government sectors. The content is tailored for 
                    large enterprises across all industries.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Logistics FAQs -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-green-600 mb-4">Logistics & Venue</h2>
        </div>
        <div class="space-y-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Where is the event held?</h3>
                <p class="text-gray-700">
                    DPA Summit 2026 takes place at Eko Hotels and Suites, Victoria Island, Lagos, Nigeria. 
                    The venue offers world-class facilities and is easily accessible from the airport and city center.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">What time does the event start and end?</h3>
                <p class="text-gray-700">
                    Registration opens at 8:00 AM on May 26, 2026. The main program runs from 9:00 AM to 6:00 PM, 
                    followed by a networking reception from 6:00 PM to 7:30 PM.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Is accommodation included?</h3>
                <p class="text-gray-700">
                    Accommodation is not included in the registration fee. However, we have negotiated special 
                    rates at Eko Hotels and nearby hotels. Details will be provided in your confirmation email.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Is parking available at the venue?</h3>
                <p class="text-gray-700">
                    Yes, complimentary parking is available for all delegates at Eko Hotels and Suites. 
                    Valet parking is also available for a small fee.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">What is the dress code?</h3>
                <p class="text-gray-700">
                    Business casual is recommended for the main sessions. Business formal is suggested for 
                    the evening networking reception.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Technical FAQs -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-red-600 mb-4">Technical & Support</h2>
        </div>
        <div class="space-y-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Will there be WiFi available?</h3>
                <p class="text-gray-700">
                    Yes, complimentary high-speed WiFi is available throughout the venue for all delegates. 
                    Network details will be provided in your event materials.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Do I need to bring my own device?</h3>
                <p class="text-gray-700">
                    We recommend bringing a laptop or tablet for interactive sessions and workshops. 
                    Power outlets will be available in the main conference hall.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Will event materials be provided digitally?</h3>
                <p class="text-gray-700">
                    Yes, all presentations, speaker notes, and supplementary materials will be provided 
                    digitally via our event app. You'll receive access details before the event.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Still Have Questions -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-green-600 to-red-600 rounded-lg p-8 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Still Have Questions?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Can't find the answer you're looking for? Our team is here to help.
            </p>
            <div class="space-x-4">
                <a href="{{ route('contact') }}" class="bg-white text-green-600 hover:bg-gray-100 font-bold py-3 px-6 rounded-lg transition-colors inline-block">
                    Contact Us
                </a>
                <a href="mailto:info@digitalprocurement.africa" class="border-2 border-white text-white hover:bg-white hover:text-green-600 font-bold py-3 px-6 rounded-lg transition-colors inline-block">
                    Email Us
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
