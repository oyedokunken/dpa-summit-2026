@extends('layouts.master')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-green-600 to-red-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Africa Digital Procurement Summit 2026
            </h1>
            <p class="text-xl md:text-2xl mb-8">
                Accelerating Procurement Transformation for Large Enterprises in the Digital Era
            </p>
            <div class="bg-white/20 backdrop-blur-sm rounded-lg p-6 mb-8 max-w-md mx-auto">
                <div class="text-3xl font-bold mb-2">May 26, 2026</div>
                <div class="text-lg">Eko Hotels and Suites, Victoria Island, Lagos</div>
            </div>
            <a href="{{ route('register') }}" class="bg-white text-green-600 hover:bg-gray-100 font-bold py-4 px-8 rounded-lg text-lg transition-colors inline-block">
                Register Now - Limited Seats Available
            </a>
        </div>
    </div>
</section>

<!-- Big Idea Problem Statement -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    The Digital Procurement Gap is Costing Millions
                </h2>
                <div class="space-y-4 text-gray-700">
                    <p class="text-lg">
                        Large enterprises in Africa are losing an estimated <strong>15-30% of procurement value</strong> due to manual processes, lack of visibility, and fragmented systems.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Poor spend visibility across departments</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Manual approval processes causing delays</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Lack of real-time data for decision making</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Compliance and audit challenges</span>
                        </li>
                    </ul>
                </div>
                <div class="mt-8">
                    <a href="{{ route('delegates') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                        Who Should Attend →
                    </a>
                </div>
            </div>
            <div class="bg-gray-100 rounded-lg p-8">
                <div class="text-center">
                    <div class="text-5xl font-bold text-red-600 mb-2">2026</div>
                    <div class="text-xl text-gray-700">The Year of Digital Transformation</div>
                    <div class="mt-6 text-gray-600">
                        Join 500+ CPOs, CFOs, and Procurement Leaders
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Focus Areas -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Three Critical Sessions</h2>
            <p class="text-xl text-gray-700">Deep dive into the pillars of digital procurement excellence</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="text-green-600 text-4xl font-bold mb-4">I</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Digital Governance</h3>
                <p class="text-gray-700 mb-4">
                    Establishing frameworks for digital procurement policies, compliance, and risk management in large enterprises.
                </p>
                <a href="{{ route('agenda') }}" class="text-green-600 hover:text-green-700 font-semibold">
                    Learn More →
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="text-red-600 text-4xl font-bold mb-4">II</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Leakage Audit</h3>
                <p class="text-gray-700 mb-4">
                    Identifying and plugging procurement value leaks through advanced analytics and process optimization.
                </p>
                <a href="{{ route('agenda') }}" class="text-green-600 hover:text-green-700 font-semibold">
                    Learn More →
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="text-green-600 text-4xl font-bold mb-4">III</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Automation</h3>
                <p class="text-gray-700 mb-4">
                    Implementing AI-powered procurement automation for strategic sourcing and supplier management.
                </p>
                <a href="{{ route('agenda') }}" class="text-green-600 hover:text-green-700 font-semibold">
                    Learn More →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-gradient-to-r from-green-600 to-red-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">
            Transform Your Procurement Strategy
        </h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">
            Join Africa's leading procurement executives for a day of insights, networking, and actionable strategies.
        </p>
        <div class="space-x-4">
            <a href="{{ route('register') }}" class="bg-white text-green-600 hover:bg-gray-100 font-bold py-3 px-6 rounded-lg transition-colors inline-block">
                Register Now
            </a>
            <a href="{{ route('agenda') }}" class="border-2 border-white text-white hover:bg-white hover:text-green-600 font-bold py-3 px-6 rounded-lg transition-colors inline-block">
                View Agenda
            </a>
        </div>
    </div>
</section>
@endsection
