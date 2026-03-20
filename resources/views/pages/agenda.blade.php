@extends('layouts.master')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-green-600 to-red-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Program & Agenda
            </h1>
            <p class="text-xl md:text-2xl">
                Three Critical Sessions for Digital Procurement Excellence
            </p>
        </div>
    </div>
</section>

<!-- Event Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gray-50 rounded-lg p-8 mb-12">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-3xl font-bold text-green-600 mb-2">May 26, 2026</div>
                    <div class="text-gray-700">Full Day Program</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-red-600 mb-2">9:00 AM - 6:00 PM</div>
                    <div class="text-gray-700">9 Hours of Content</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-green-600 mb-2">500+ Delegates</div>
                    <div class="text-gray-700">Senior Executives</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Session I: Digital Governance -->
<section class="py-16 bg-green-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="bg-green-600 text-white rounded-full w-16 h-16 flex items-center justify-center font-bold text-2xl mr-6">
                I
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Digital Governance</h2>
                <p class="text-xl text-gray-700">9:00 AM - 12:00 PM</p>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Key Topics</h3>
                <div class="space-y-4">
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h4 class="font-bold text-green-600 mb-2">Framework Development</h4>
                        <p class="text-gray-700">Building digital procurement policies for enterprise-wide adoption and compliance.</p>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h4 class="font-bold text-green-600 mb-2">Risk Management</h4>
                        <p class="text-gray-700">Identifying and mitigating digital procurement risks in large organizations.</p>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h4 class="font-bold text-green-600 mb-2">Change Management</h4>
                        <p class="text-gray-700">Leading organizational transformation and stakeholder adoption strategies.</p>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Learning Outcomes</h3>
                <div class="bg-white rounded-lg p-6 shadow">
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Develop a comprehensive digital procurement governance framework</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Implement risk assessment methodologies for digital procurement</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Create change management strategies for enterprise adoption</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Establish KPIs for digital procurement governance</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Session II: Leakage Audit -->
<section class="py-16 bg-red-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="bg-red-600 text-white rounded-full w-16 h-16 flex items-center justify-center font-bold text-2xl mr-6">
                II
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Leakage Audit</h2>
                <p class="text-xl text-gray-700">1:00 PM - 3:30 PM</p>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Key Topics</h3>
                <div class="space-y-4">
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h4 class="font-bold text-red-600 mb-2">Value Leakage Identification</h4>
                        <p class="text-gray-700">Advanced analytics techniques to identify 15-30% procurement value leaks.</p>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h4 class="font-bold text-red-600 mb-2">Process Optimization</h4>
                        <p class="text-gray-700">Streamlining procurement processes to eliminate inefficiencies and reduce costs.</p>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h4 class="font-bold text-red-600 mb-2">Spend Analytics</h4>
                        <p class="text-gray-700">Implementing spend visibility solutions for better procurement decisions.</p>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Learning Outcomes</h3>
                <div class="bg-white rounded-lg p-6 shadow">
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-red-600 mr-2">✓</span>
                            <span>Conduct comprehensive procurement leakage audits</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-2">✓</span>
                            <span>Implement spend analytics for procurement optimization</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-2">✓</span>
                            <span>Develop process improvement strategies for cost reduction</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-2">✓</span>
                            <span>Calculate ROI from leakage elimination initiatives</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Session III: Automation -->
<section class="py-16 bg-green-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="bg-green-600 text-white rounded-full w-16 h-16 flex items-center justify-center font-bold text-2xl mr-6">
                III
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Automation</h2>
                <p class="text-xl text-gray-700">3:45 PM - 6:00 PM</p>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Key Topics</h3>
                <div class="space-y-4">
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h4 class="font-bold text-green-600 mb-2">AI-Powered Procurement</h4>
                        <p class="text-gray-700">Leveraging artificial intelligence for strategic sourcing and supplier management.</p>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h4 class="font-bold text-green-600 mb-2">Process Automation</h4>
                        <p class="text-gray-700">Automating routine procurement tasks for efficiency and compliance.</p>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h4 class="font-bold text-green-600 mb-2">Technology Integration</h4>
                        <p class="text-gray-700">Integrating procurement systems with ERP and enterprise platforms.</p>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Learning Outcomes</h3>
                <div class="bg-white rounded-lg p-6 shadow">
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Evaluate and implement AI procurement solutions</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Automate procurement workflows for efficiency gains</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Integrate procurement technology with existing systems</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Measure automation ROI and performance improvements</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Networking Sessions -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Networking & Breakout Sessions</h2>
            <p class="text-xl text-gray-700">Connect with Peers and Industry Experts</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Morning Break</h3>
                <p class="text-gray-700 mb-2"><strong>10:30 AM - 11:00 AM</strong></p>
                <p class="text-gray-700">Coffee networking with industry peers and solution providers.</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Lunch Break</h3>
                <p class="text-gray-700 mb-2"><strong>12:00 PM - 1:00 PM</strong></p>
                <p class="text-gray-700">Buffet lunch with structured networking activities.</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Afternoon Break</h3>
                <p class="text-gray-700 mb-2"><strong>3:30 PM - 3:45 PM</strong></p>
                <p class="text-gray-700">Refreshments and peer-to-peer discussions.</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Evening Reception</h3>
                <p class="text-gray-700 mb-2"><strong>6:00 PM - 7:30 PM</strong></p>
                <p class="text-gray-700">Cocktail reception with speakers and sponsors.</p>
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
            Join us for a comprehensive day of insights, strategies, and networking.
        </p>
        <div class="space-x-4">
            <a href="{{ route('register') }}" class="bg-white text-green-600 hover:bg-gray-100 font-bold py-3 px-6 rounded-lg transition-colors inline-block">
                Register for Full Program
            </a>
            <a href="{{ route('speakers') }}" class="border-2 border-white text-white hover:bg-white hover:text-green-600 font-bold py-3 px-6 rounded-lg transition-colors inline-block">
                View Speakers
            </a>
        </div>
    </div>
</section>
@endsection
