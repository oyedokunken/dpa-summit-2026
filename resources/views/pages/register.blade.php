@extends('layouts.master')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-green-600 to-red-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Register for DPA Summit 2026
            </h1>
            <p class="text-xl md:text-2xl">
                Join Africa's Leading Procurement and Finance Executives
            </p>
            <div class="mt-8 bg-white/20 backdrop-blur-sm rounded-lg p-6 max-w-md mx-auto">
                <div class="text-2xl font-bold mb-2">Limited Seats Available</div>
                <div class="text-lg">500 Delegates Maximum</div>
            </div>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Pricing Tiers -->
            <div class="md:col-span-1">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Registration Options</h2>
                <div class="space-y-4">
                    <div class="bg-green-50 border-2 border-green-200 rounded-lg p-6">
                        <div class="bg-green-600 text-white rounded-lg px-3 py-1 inline-block font-bold mb-3 text-sm">
                            EARLY BIRD
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Standard Delegate</h3>
                        <div class="text-3xl font-bold text-green-600 mb-4">$500</div>
                        <p class="text-gray-700 mb-4">Available until April 30, 2026</p>
                        <ul class="text-sm text-gray-700 space-y-2 mb-4">
                            <li>✓ Full conference access</li>
                            <li>✓ All sessions and materials</li>
                            <li>✓ Lunch and refreshments</li>
                            <li>✓ Networking reception</li>
                            <li>✓ Certificate of attendance</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 border-2 border-gray-200 rounded-lg p-6">
                        <div class="bg-gray-600 text-white rounded-lg px-3 py-1 inline-block font-bold mb-3 text-sm">
                            STANDARD
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Standard Delegate</h3>
                        <div class="text-3xl font-bold text-gray-600 mb-4">$750</div>
                        <p class="text-gray-700 mb-4">From May 1, 2026</p>
                        <ul class="text-sm text-gray-700 space-y-2 mb-4">
                            <li>✓ Full conference access</li>
                            <li>✓ All sessions and materials</li>
                            <li>✓ Lunch and refreshments</li>
                            <li>✓ Networking reception</li>
                            <li>✓ Certificate of attendance</li>
                        </ul>
                    </div>
                    <div class="bg-red-50 border-2 border-red-200 rounded-lg p-6">
                        <div class="bg-red-600 text-white rounded-lg px-3 py-1 inline-block font-bold mb-3 text-sm">
                            GROUP
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Group Registration</h3>
                        <div class="text-3xl font-bold text-red-600 mb-4">$400</div>
                        <p class="text-gray-700 mb-4">5+ delegates from same organization</p>
                        <ul class="text-sm text-gray-700 space-y-2 mb-4">
                            <li>✓ All standard benefits</li>
                            <li>✓ Group discount</li>
                            <li>✓ Dedicated networking</li>
                            <li>✓ Priority seating</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="md:col-span-2">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Registration Form</h2>
                <form action="{{ route('register.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
                        <p class="text-red-800 text-sm">
                            <strong>Important:</strong> Registration is subject to approval. We prioritize C-level executives and senior procurement leaders from large enterprises.
                        </p>
                    </div>

                    <!-- Personal Information -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Personal Information</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                <input type="text" id="first_name" name="first_name" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-4 mt-4">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="job_title" class="block text-sm font-medium text-gray-700 mb-2">Job Title *</label>
                            <input type="text" id="job_title" name="job_title" required
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                    </div>

                    <!-- Company Information -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Company Information</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name *</label>
                                <input type="text" id="company" name="company" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="industry" class="block text-sm font-medium text-gray-700 mb-2">Industry *</label>
                                <select id="industry" name="industry" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="">Select industry</option>
                                    <option value="banking">Banking & Financial Services</option>
                                    <option value="telecom">Telecommunications</option>
                                    <option value="oil_gas">Oil & Gas</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="retail">Retail</option>
                                    <option value="government">Government</option>
                                    <option value="healthcare">Healthcare</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-4 mt-4">
                            <div>
                                <label for="company_size" class="block text-sm font-medium text-gray-700 mb-2">Company Size *</label>
                                <select id="company_size" name="company_size" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="">Select company size</option>
                                    <option value="1000-5000">1,000 - 5,000 employees</option>
                                    <option value="5000-10000">5,000 - 10,000 employees</option>
                                    <option value="10000+">10,000+ employees</option>
                                </select>
                            </div>
                            <div>
                                <label for="procurement_budget" class="block text-sm font-medium text-gray-700 mb-2">Annual Procurement Budget *</label>
                                <select id="procurement_budget" name="procurement_budget" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="">Select budget range</option>
                                    <option value="10-50">$10M - $50M</option>
                                    <option value="50-100">$50M - $100M</option>
                                    <option value="100-500">$100M - $500M</option>
                                    <option value="500+">$500M+</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Current Systems -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Current Procurement Systems</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label for="current_erp" class="block text-sm font-medium text-gray-700 mb-2">Current ERP System *</label>
                                <select id="current_erp" name="current_erp" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="">Select ERP system</option>
                                    <option value="sap">SAP</option>
                                    <option value="oracle">Oracle</option>
                                    <option value="microsoft">Microsoft Dynamics</option>
                                    <option value="infor">Infor</option>
                                    <option value="custom">Custom Solution</option>
                                    <option value="none">None</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="procurement_tools" class="block text-sm font-medium text-gray-700 mb-2">Procurement Tools *</label>
                                <select id="procurement_tools" name="procurement_tools" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="">Select tools</option>
                                    <option value="coupa">Coupa</option>
                                    <option value="sap_ariba">SAP Ariba</option>
                                    <option value="jaggaer">Jaggaer</option>
                                    <option value="gep">GEP</option>
                                    <option value="manual">Manual Processes</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Interest Areas -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Areas of Interest</h3>
                        <div class="space-y-3">
                            <label class="flex items-center">
                                <input type="checkbox" name="interests[]" value="governance" class="mr-2 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="text-gray-700">Digital Governance & Policies</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="interests[]" value="leakage" class="mr-2 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="text-gray-700">Leakage Audit & Cost Reduction</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="interests[]" value="automation" class="mr-2 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="text-gray-700">AI & Automation</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="interests[]" value="analytics" class="mr-2 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="text-gray-700">Spend Analytics</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="interests[]" value="supplier" class="mr-2 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="text-gray-700">Supplier Management</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Additional Information</h3>
                        <div>
                            <label for="expectations" class="block text-sm font-medium text-gray-700 mb-2">What do you hope to achieve at DPA Summit 2026? *</label>
                            <textarea id="expectations" name="expectations" rows="3" required
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"></textarea>
                        </div>
                        <div class="mt-4">
                            <label for="dietary" class="block text-sm font-medium text-gray-700 mb-2">Dietary Requirements</label>
                            <input type="text" id="dietary" name="dietary"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                   placeholder="None">
                        </div>
                    </div>

                    <!-- Terms and Submit -->
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <input type="checkbox" id="terms" name="terms" required class="mr-2 rounded border-gray-300 text-green-600 focus:ring-green-500 mt-1">
                            <label for="terms" class="text-sm text-gray-700">
                                I agree to the <a href="#" class="text-green-600 hover:text-green-700">Terms and Conditions</a> and 
                                <a href="#" class="text-green-600 hover:text-green-700">Privacy Policy</a> *
                            </label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="marketing" name="marketing" value="1" class="mr-2 rounded border-gray-300 text-green-600 focus:ring-green-500 mt-1">
                            <label for="marketing" class="text-sm text-gray-700">
                                I would like to receive updates about DPA Summit 2026 and related events
                            </label>
                        </div>
                        <button type="submit" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-6 rounded-lg transition-colors text-lg">
                            Complete Registration
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- What's Included -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">What's Included</h2>
            <p class="text-xl text-gray-700">Your registration includes comprehensive access</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">All Sessions</h3>
                <p class="text-gray-700">Access to all three critical sessions on Digital Governance, Leakage Audit, and Automation</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="bg-red-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Networking</h3>
                <p class="text-gray-700">Connect with 500+ senior executives during breaks, lunch, and evening reception</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Certificate</h3>
                <p class="text-gray-700">Official certificate of attendance for your professional development records</p>
            </div>
        </div>
    </div>
</section>
@endsection
