{{-- SEO Meta Tags Component for DPA Summit 2026 --}}
{{-- Include this in your master layout header --}}

{{-- Basic Meta Tags --}}
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="Laravel 13.1">

{{-- Page Specific Meta --}}
<title>@yield('title', 'Africa Digital Procurement Summit 2026 | Digital Transformation Event')</title>
<meta name="description" content="@yield('description', 'Join Africa\'s premier digital procurement summit on May 26, 2026. Connect with 500+ CPOs, CFOs, and procurement leaders.')">
<meta name="keywords" content="@yield('keywords', 'digital procurement, Africa, summit 2026, Lagos, procurement transformation, CPO, CFO, enterprise')">

@if(isset($author))
    <meta name="author" content="{{ $author }}">
@endif

{{-- Canonical URL --}}
@if(isset($canonical))
    <link rel="canonical" href="{{ $canonical }}">
@else
    <link rel="canonical" href="{{ url()->current() }}">
@endif

{{-- Open Graph Meta Tags --}}
<meta property="og:type" content="website">
<meta property="og:site_name" content="Africa Digital Procurement Summit 2026">
<meta property="og:title" content="{{ $title ?? 'Africa Digital Procurement Summit 2026' }}">
<meta property="og:description" content="{{ $description ?? 'Join C-Suite executives at Africa Digital Procurement Summit 2026 in Lagos. Explore digital transformation in procurement.' }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:locale" content="en_US">

@if(isset($og_image))
    <meta property="og:image" content="{{ $og_image }}">
    <meta property="og:image:secure_url" content="{{ $og_image }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $title ?? 'Africa Digital Procurement Summit 2026' }}">
@else
    <meta property="og:image" content="{{ asset('images/dpa-summit-2026-og.jpg') }}">
    <meta property="og:image:secure_url" content="{{ asset('images/dpa-summit-2026-og.jpg') }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Africa Digital Procurement Summit 2026">
@endif

{{-- Twitter Card Meta Tags --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@DPASummit2026">
<meta name="twitter:creator" content="@gloopro">
<meta name="twitter:title" content="{{ $title ?? 'Africa Digital Procurement Summit 2026' }}">
<meta name="twitter:description" content="{{ $description ?? 'Join C-Suite executives at Africa Digital Procurement Summit 2026 in Lagos.' }}">
<meta name="twitter:image" content="{{ $og_image ?? asset('images/dpa-summit-2026-og.jpg') }}">

{{-- Schema.org Structured Data --}}
@if(isset($schema))
    {!! $schema !!}
@else
    <!-- Default Event Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "Africa Digital Procurement Summit 2026",
        "description": "A high-level executive forum convening industry leaders, CFOs, and CPOs to explore how digital transformation is reshaping procurement across Africa's largest enterprises.",
        "startDate": "2026-05-26T09:00:00+01:00",
        "endDate": "2026-05-26T18:00:00+01:00",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "eventStatus": "https://schema.org/EventScheduled",
        "location": {
            "@type": "Place",
            "name": "Eko Hotels and Suites",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "1415 Adetokunbo Ademola Street",
                "addressLocality": "Victoria Island",
                "addressRegion": "Lagos",
                "postalCode": "101241",
                "addressCountry": "NG"
            }
        },
        "organizer": {
            "@type": "Organization",
            "name": "Gloopro Procurement Systems",
            "url": "https://gloopro.com",
            "logo": "https://gloopro.com/logo.png"
        },
        "offers": {
            "@type": "Offer",
            "url": "https://digitalprocurement.africa/register",
            "price": "0",
            "priceCurrency": "NGN",
            "availability": "https://schema.org/InStock",
            "validFrom": "2026-01-01T00:00:00+01:00"
        },
        "performer": [
            {
                "@type": "Person",
                "name": "Industry Experts",
                "jobTitle": "CPOs & CFOs"
            }
        ],
        "image": [
            "{{ asset('images/dpa-summit-2026-hero.jpg') }}",
            "{{ asset('images/dpa-summit-2026-og.jpg') }}"
        ],
        "url": "https://digitalprocurement.africa",
        "keywords": "digital procurement, Africa, summit, Lagos, procurement transformation, CPO, CFO, enterprise",
        "inLanguage": "en-US",
        "isAccessibleForFree": true
    }
    </script>
@endif

 Additional Meta Tags --}}
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta name="googlebot" content="index, follow">
<meta name="bingbot" content="index, follow">

{{-- Language and Region --}}
<meta name="language" content="English">
<meta name="geo.region" content="NG-LA">
<meta name="geo.placename" content="Lagos, Nigeria">
<meta name="ICBM" content="6.4531;3.3958">

{{-- Mobile and App Meta --}}
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="DPA Summit 2026">
<meta name="application-name" content="DPA Summit 2026">
<meta name="msapplication-TileColor" content="#2563eb">
<meta name="theme-color" content="#2563eb">

{{-- Favicon and App Icons --}}
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
<link rel="manifest" href="{{ asset('site.webmanifest') }}">

{{-- DNS Prefetch for Performance --}}
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link rel="dns-prefetch" href="//www.googletagmanager.com">
<link rel="dns-prefetch" href="//www.google-analytics.com">
<link rel="dns-prefetch" href="//gloopro.com">

{{-- Preconnect for Critical Resources --}}
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

{{-- RSS Feed (if applicable) --}}
<link rel="alternate" type="application/rss+xml" title="DPA Summit 2026 News" href="{{ url('/feed') }}">

{{-- JSON-LD for Breadcrumbs (if applicable) --}}
@if(isset($breadcrumbs))
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            @foreach($breadcrumbs as $index => $breadcrumb)
            {
                "@type": "ListItem",
                "position": {{ $index + 1 }},
                "name": "{{ $breadcrumb['name'] }}",
                "item": "{{ $breadcrumb['url'] }}"
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script>
@endif
