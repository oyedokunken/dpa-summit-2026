@extends('layouts.master')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-green-600 to-red-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Expert Speakers
            </h1>
            <p class="text-xl md:text-2xl">
                Learn from Africa's Leading Procurement and Digital Transformation Experts
            </p>
        </div>
    </div>
</section>

<!-- Coming Soon Notice -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="bg-yellow-50 border-2 border-yellow-200 rounded-lg p-8 max-w-2xl mx-auto">
                <div class="text-6xl mb-4">🎤</div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Speaker Lineup Coming Soon</h2>
                <p class="text-xl text-gray-700 mb-6">
                    We're finalizing an exceptional lineup of industry leaders, CPOs, CFOs, and digital transformation experts.
                </p>
                <div class="space-y-4 text-left bg-white rounded-lg p-6">
                    <h3 class="font-bold text-gray-900 mb-3">What to Expect:</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>CPOs from Africa's largest enterprises (banking, telecom, oil & gas)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>CFOs sharing procurement finance and ROI insights</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Global procurement technology experts</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Digital transformation success stories</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Procurement analytics and AI specialists</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Speaker Categories Preview -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Speaker Categories</h2>
            <p class="text-xl text-gray-700">Diverse Expertise for Comprehensive Learning</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="text-green-600 text-4xl mb-4">🏢</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Enterprise Leaders</h3>
                <p class="text-gray-700 mb-4">
                    CPOs and CFOs from Africa's largest companies sharing real-world implementation experiences.
                </p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Banking & Financial Services</li>
                    <li>• Telecommunications</li>
                    <li>• Oil & Gas</li>
                    <li>• Manufacturing</li>
                </ul>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="text-red-600 text-4xl mb-4">🚀</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Technology Experts</h3>
                <p class="text-gray-700 mb-4">
                    Procurement technology specialists and digital transformation consultants.
                </p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• AI & Machine Learning</li>
                    <li>• Procurement Platforms</li>
                    <li>• Analytics Solutions</li>
                    <li>• Integration Experts</li>
                </ul>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="text-green-600 text-4xl mb-4">📊</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Industry Analysts</h3>
                <p class="text-gray-700 mb-4">
                    Market researchers and procurement analysts providing industry insights and trends.
                </p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Market Trends</li>
                    <li>• Benchmarking Data</li>
                    <li>• Best Practices</li>
                    <li>• Future Outlook</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Topics to Be Covered -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Key Topics & Insights</h2>
            <p class="text-xl text-gray-700">What Our Speakers Will Cover</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold text-green-600 mb-4">Strategic Sessions</h3>
                <div class="space-y-3">
                    <div class="bg-green-50 rounded-lg p-4">
                        <h4 class="font-bold text-gray-900">Digital Procurement Strategy</h4>
                        <p class="text-gray-700 text-sm">Building enterprise-wide digital transformation roadmaps</p>
                    </div>
                    <div class="bg-green-50 rounded-lg p-4">
                        <h4 class="font-bold text-gray-900">ROI Measurement</h4>
                        <p class="text-gray-700 text-sm">Quantifying returns from procurement technology investments</p>
                    </div>
                    <div class="bg-green-50 rounded-lg p-4">
                        <h4 class="font-bold text-gray-900">Risk Management</h4>
                        <p class="text-gray-700 text-sm">Mitigating risks in digital procurement implementations</p>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-bold text-red-600 mb-4">Technical Sessions</h3>
                <div class="space-y-3">
                    <div class="bg-red-50 rounded-lg p-4">
                        <h4 class="font-bold text-gray-900">AI in Procurement</h4>
                        <p class="text-gray-700 text-sm">Practical applications of artificial intelligence</p>
                    </div>
                    <div class="bg-red-50 rounded-lg p-4">
                        <h4 class="font-bold text-gray-900">Spend Analytics</h4>
                        <p class="text-gray-700 text-sm">Advanced analytics for procurement optimization</p>
                    </div>
                    <div class="bg-red-50 rounded-lg p-4">
                        <h4 class="font-bold text-gray-900">System Integration</h4>
                        <p class="text-gray-700 text-sm">Connecting procurement with ERP systems</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-gradient-to-r from-green-600 to-red-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">
            Be the First to Know About Speaker Announcements
        </h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">
            Get notified as soon as we confirm our expert speaker lineup.
        </p>
        <div class="space-x-4">
            <a href="{{ route('register') }}" class="bg-white text-green-600 hover:bg-gray-100 font-bold py-3 px-6 rounded-lg transition-colors inline-block">
                Register for Updates
            </a>
            <a href="{{ route('agenda') }}" class="border-2 border-white text-white hover:bg-white hover:text-green-600 font-bold py-3 px-6 rounded-lg transition-colors inline-block">
                View Agenda
            </a>
        </div>
    </div>
</section>
@endsection
