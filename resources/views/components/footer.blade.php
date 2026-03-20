{{-- Footer Component for DPA Summit 2026 --}}
{{-- Usage: @include('components.footer') --}}

<footer class="bg-black text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            {{-- Event Information --}}
            <div class="col-span-1 md:col-span-2">
                <div class="text-2xl font-bold text-green-400 mb-4">
                    DPA <span class="text-red-400">2026</span>
                </div>
                <p class="text-gray-300 mb-4 max-w-md">
                    Africa Digital Procurement Summit 2026 - Accelerating Procurement Transformation for Large Enterprises in the Digital Era
                </p>
                <div class="space-y-2 text-gray-400">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        <span>May 26, 2026</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Eko Hotels and Suites, Victoria Island, Lagos</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        <span>info@dpa-summit.com</span>
                    </div>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="text-lg font-semibold text-green-400 mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-green-400 transition-colors">Home</a></li>
                    <li><a href="{{ route('delegates') }}" class="text-gray-400 hover:text-green-400 transition-colors">Delegates</a></li>
                    <li><a href="{{ route('agenda') }}" class="text-gray-400 hover:text-green-400 transition-colors">Program</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-400 transition-colors">Speakers</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-400 transition-colors">Sponsors</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-400 transition-colors">Register</a></li>
                </ul>
            </div>

            {{-- Resources --}}
            <div>
                <h3 class="text-lg font-semibold text-green-400 mb-4">Resources</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-green-400 transition-colors">Media</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-400 transition-colors">FAQ</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-400 transition-colors">Contact</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-400 transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-400 transition-colors">Terms of Service</a></li>
                </ul>
            </div>
        </div>

        {{-- Social Media Links --}}
        <div class="mt-8 pt-8 border-t border-gray-800">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h4 class="text-green-400 font-semibold mb-2">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-green-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-green-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-green-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .773 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .773 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="text-center md:text-right">
                    <p class="text-gray-400 text-sm">
                        © 2026 DPA Summit. All rights reserved.
                    </p>
                    <p class="text-gray-500 text-xs mt-1">
                        Powered by <a href="https://gloopro.com" target="_blank" rel="noopener noreferrer" class="text-green-400 hover:text-green-300 transition-colors">Gloopro</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
