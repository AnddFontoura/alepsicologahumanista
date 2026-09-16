<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="{{ config('app.base') }}">

        @php
            $siteName = config('app.name', 'Alessandra Scapin - Psicóloga Humanista');
            $siteUrl = rtrim(config('app.url'), '/');
            // Public assets are served under /public in this deployment (document root is the project root)
            $assetBase = $siteUrl . '/public';
            $defaultDescription = 'Psicóloga humanista (CRP 06/86402) com atendimento online. Terapia individual, de casal e familiar, apoio a vítimas de violência doméstica e relacionamentos abusivos. Agende sua consulta.';
            $ogImage = $assetBase . '/img/perfil_pure.jpeg';
        @endphp

        {{-- Título e descrição (sobrescritos por página via Inertia <Head>) --}}
        <title inertia>{{ $siteName }}</title>
        <meta head-key="description" name="description" content="{{ $defaultDescription }}">
        <meta name="author" content="Alessandra Scapin">
        <meta name="robots" content="index, follow, max-image-preview:large">
        <meta name="theme-color" content="#0ea5e9">
        <meta name="geo.region" content="BR-SP">
        <meta name="geo.placename" content="São Paulo">
        <link rel="canonical" href="{{ $siteUrl }}/">

        {{-- Favicon --}}
        <link rel="icon" href="{{ $assetBase }}/favicon.ico" sizes="any">

        {{-- Open Graph (Facebook, WhatsApp, LinkedIn) --}}
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ $siteName }}">
        <meta property="og:locale" content="pt_BR">
        <meta head-key="og:title" property="og:title" content="{{ $siteName }}">
        <meta head-key="og:description" property="og:description" content="{{ $defaultDescription }}">
        <meta property="og:url" content="{{ $siteUrl }}/">
        <meta property="og:image" content="{{ $ogImage }}">
        <meta property="og:image:alt" content="Alessandra Scapin, psicóloga humanista">

        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta head-key="twitter:title" name="twitter:title" content="{{ $siteName }}">
        <meta head-key="twitter:description" name="twitter:description" content="{{ $defaultDescription }}">
        <meta name="twitter:image" content="{{ $ogImage }}">

        {{-- Dados estruturados (JSON-LD) para o Google --}}
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Psychologist",
            "name": "Alessandra Scapin",
            "alternateName": "{{ $siteName }}",
            "description": "{{ $defaultDescription }}",
            "url": "{{ $siteUrl }}/",
            "image": "{{ $ogImage }}",
            "telephone": "+5519998845678",
            "priceRange": "$$",
            "areaServed": {
                "@type": "Country",
                "name": "Brasil"
            },
            "availableService": [
                { "@type": "MedicalTherapy", "name": "Psicoterapia individual" },
                { "@type": "MedicalTherapy", "name": "Terapia de casal e familiar" },
                { "@type": "MedicalTherapy", "name": "Apoio a vítimas de violência doméstica" },
                { "@type": "MedicalTherapy", "name": "Acompanhamento em relacionamentos abusivos" }
            ],
            "knowsAbout": [
                "Psicologia Humanista",
                "Autoconhecimento",
                "Equilíbrio emocional",
                "Mediação de conflitos"
            ],
            "knowsLanguage": "pt-BR",
            "sameAs": [
                "https://wa.me/5519998845678"
            ]
        }
        </script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>

</html>
