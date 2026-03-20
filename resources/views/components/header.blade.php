{{-- Header Component for DPA Summit 2026 --}}
{{-- Usage: @include('components.header') --}}

<header class="bg-white shadow-lg sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="text-2xl font-bold text-green-600">
                        DPA <span class="text-red-600">2026</span>
                    </div>
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        Home
                    </a>
                    <a href="{{ route('delegates') }}" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        Delegates
                    </a>
                    <a href="{{ route('agenda') }}" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        Program
                    </a>
                    <a href="#" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        Speakers
                    </a>
                    <a href="#" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        Sponsors
                    </a>
                    <a href="#" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        Media
                    </a>
                    <a href="#" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        FAQ
                    </a>
                    <a href="#" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        Contact
                    </a>
                </div>
            </div>

            {{-- CTA Button --}}
            <div class="hidden md:block">
                <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg transition-colors shadow-md hover:shadow-lg">
                    Register Now
                </a>
            </div>

            {{-- Mobile menu button --}}
            <div class="md:hidden">
                <button type="button" class="mobile-menu-button bg-gray-100 p-2 rounded-md text-gray-700 hover:text-green-600 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation --}}
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium">
                    Home
                </a>
                <a href="{{ route('delegates') }}" class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium">
                    Delegates
                </a>
                <a href="{{ route('agenda') }}" class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium">
                    Program
                </a>
                <a href="#" class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium">
                    Speakers
                </a>
                <a href="#" class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium">
                    Sponsors
                </a>
                <a href="#" class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium">
                    Media
                </a>
                <a href="#" class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium">
                    FAQ
                </a>
                <a href="#" class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium">
                    Contact
                </a>
                <div class="pt-4 pb-3 border-t">
                    <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg w-full text-center block transition-colors">
                        Register Now
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

{{-- Mobile Menu Script --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
});
</script>
