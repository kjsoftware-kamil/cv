<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __('About Me') }} — {{ config('app.name', 'CV') }}</title>
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            
            :root {
                --bg: #ffffff;
                --text-primary: #1a1a1a;
                --text-secondary: #666666;
                --text-muted: #999999;
                --border: #e5e5e5;
                --accent: #0066ff;
                --card-bg: #fafafa;
            }
            
            .dark {
                --bg: #0a0a0a;
                --text-primary: #ffffff;
                --text-secondary: #b3b3b3;
                --text-muted: #666666;
                --border: #2a2a2a;
                --accent: #3399ff;
                --card-bg: #151515;
            }
            
            html { scroll-behavior: smooth; }
            
            body {
                font-family: 'Roboto', -apple-system, BlinkMacSystemFont, sans-serif;
                background: var(--bg);
                color: var(--text-primary);
                line-height: 1.6;
                transition: background-color 0.3s ease, color 0.3s ease;
            }
            
            /* Header */
            header {
                position: sticky;
                top: 0;
                z-index: 1000;
                background: var(--bg);
                border-bottom: 1px solid var(--border);
                backdrop-filter: blur(10px);
                background: rgba(255, 255, 255, 0.8);
            }
            
            .dark header {
                background: rgba(10, 10, 10, 0.8);
            }
            
            .header-content {
                max-width: 1200px;
                margin: 0 auto;
                padding: 1.25rem 2rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            
            .logo {
                font-size: 1.125rem;
                font-weight: 600;
                color: var(--text-primary);
                text-decoration: none;
                letter-spacing: -0.02em;
            }
            
            nav {
                display: flex;
                gap: 2rem;
                align-items: center;
            }
            
            nav a {
                color: var(--text-secondary);
                text-decoration: none;
                font-size: 0.9375rem;
                font-weight: 500;
                transition: color 0.2s ease;
                position: relative;
            }
            
            nav a:hover, nav a.active {
                color: var(--text-primary);
            }
            
            nav a.active::after {
                content: '';
                position: absolute;
                bottom: -1.5rem;
                left: 0;
                right: 0;
                height: 2px;
                background: var(--accent);
            }
            
            .theme-toggle {
                background: none;
                border: none;
                cursor: pointer;
                padding: 0.5rem;
                color: var(--text-secondary);
                transition: color 0.2s ease;
            }
            
            .theme-toggle:hover {
                color: var(--text-primary);
            }
            
            .mobile-toggle {
                display: none;
                background: none;
                border: none;
                cursor: pointer;
                color: var(--text-secondary);
                padding: 0.5rem;
            }
            
            /* About Hero */
            .about-hero {
                max-width: 1200px;
                margin: 0 auto;
                padding: 5rem 2rem 4rem;
                display: grid;
                grid-template-columns: 280px 1fr;
                gap: 4rem;
                align-items: start;
            }
            
            .about-photo-wrapper {
                position: sticky;
                top: 6rem;
            }
            
            .about-photo {
                width: 100%;
                aspect-ratio: 1;
                border-radius: 1.5rem;
                object-fit: cover;
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            }
            
            .about-photo-placeholder {
                width: 100%;
                aspect-ratio: 1;
                border-radius: 1.5rem;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 5rem;
                font-weight: 700;
            }
            
            .about-social {
                display: flex;
                gap: 0.75rem;
                margin-top: 1.5rem;
            }
            
            .about-social a {
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 0.5rem;
                background: var(--card-bg);
                color: var(--text-secondary);
                transition: all 0.2s ease;
                border: 1px solid var(--border);
                text-decoration: none;
            }
            
            .about-social a:hover {
                background: var(--text-primary);
                color: var(--bg);
                border-color: var(--text-primary);
                transform: translateY(-2px);
            }
            
            /* About Content */
            .about-content {
                min-width: 0;
            }
            
            .about-name {
                font-size: 3rem;
                font-weight: 700;
                letter-spacing: -0.03em;
                line-height: 1.1;
                margin-bottom: 0.5rem;
            }
            
            .about-title {
                font-size: 1.25rem;
                color: var(--accent);
                font-weight: 500;
                margin-bottom: 2rem;
            }
            
            .about-bio {
                font-size: 1.0625rem;
                line-height: 1.8;
                color: var(--text-secondary);
                margin-bottom: 3rem;
                max-width: 640px;
            }
            
            /* Info Grid */
            .info-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1.5rem;
                margin-bottom: 3rem;
            }
            
            .info-item {
                display: flex;
                align-items: flex-start;
                gap: 1rem;
                padding: 1.25rem;
                background: var(--card-bg);
                border: 1px solid var(--border);
                border-radius: 0.75rem;
                transition: border-color 0.2s ease;
            }
            
            .info-item:hover {
                border-color: var(--accent);
            }
            
            .info-icon {
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 0.5rem;
                background: var(--bg);
                color: var(--accent);
                flex-shrink: 0;
            }
            
            .info-label {
                font-size: 0.75rem;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.05em;
                color: var(--text-muted);
                margin-bottom: 0.25rem;
            }
            
            .info-value {
                font-size: 0.9375rem;
                font-weight: 500;
                color: var(--text-primary);
            }
            
            .info-value a {
                color: var(--accent);
                text-decoration: none;
            }
            
            .info-value a:hover {
                text-decoration: underline;
            }
            
            /* Skills Section */
            .about-section {
                margin-bottom: 3rem;
            }
            
            .about-section-title {
                font-size: 1.5rem;
                font-weight: 700;
                letter-spacing: -0.02em;
                margin-bottom: 1.5rem;
                padding-bottom: 0.75rem;
                border-bottom: 2px solid var(--border);
            }
            
            .skills-tags {
                display: flex;
                flex-wrap: wrap;
                gap: 0.5rem;
            }
            
            .skill-tag {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                padding: 0.5rem 1rem;
                background: var(--card-bg);
                border: 1px solid var(--border);
                border-radius: 9999px;
                font-size: 0.875rem;
                font-weight: 500;
                color: var(--text-primary);
                transition: all 0.2s ease;
            }
            
            .skill-tag:hover {
                border-color: var(--accent);
                transform: translateY(-1px);
            }
            
            .skill-tag img {
                width: 20px;
                height: 20px;
                border-radius: 4px;
                object-fit: contain;
            }
            
            .skill-tag-letter {
                width: 20px;
                height: 20px;
                border-radius: 4px;
                background: var(--accent);
                color: white;
                font-size: 0.6875rem;
                font-weight: 700;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .skill-bar-wrapper {
                margin-top: 0.25rem;
                height: 3px;
                background: var(--border);
                border-radius: 3px;
                overflow: hidden;
            }
            
            .skill-bar-fill {
                height: 100%;
                border-radius: 3px;
                background: var(--accent);
                transition: width 1s ease;
            }
            
            /* Experience / Education Timeline */
            .timeline-list {
                display: flex;
                flex-direction: column;
            }
            
            .timeline-entry {
                padding: 1.25rem 0;
                border-bottom: 1px solid var(--border);
            }
            
            .timeline-entry:last-child {
                border-bottom: none;
            }
            
            .timeline-entry-header {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                gap: 1rem;
                margin-bottom: 0.25rem;
            }
            
            .timeline-entry-title {
                font-size: 1.0625rem;
                font-weight: 600;
                color: var(--text-primary);
            }
            
            .timeline-entry-date {
                font-size: 0.8125rem;
                font-weight: 500;
                color: var(--text-muted);
                white-space: nowrap;
                flex-shrink: 0;
            }
            
            .timeline-entry-date.current {
                color: var(--accent);
            }
            
            .timeline-entry-sub {
                font-size: 0.875rem;
                font-weight: 600;
                color: var(--text-primary);
                margin-bottom: 0.25rem;
            }
            
            .timeline-entry-meta {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                gap: 0.5rem;
                font-size: 0.8125rem;
                color: var(--text-secondary);
                margin-bottom: 0.5rem;
            }
            
            .timeline-entry-meta .dot {
                width: 3px;
                height: 3px;
                border-radius: 50%;
                background: var(--text-muted);
            }
            
            .timeline-entry-desc {
                font-size: 0.875rem;
                line-height: 1.6;
                color: var(--text-secondary);
            }
            
            /* Two column layout for exp + edu */
            .two-col {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 3rem;
            }
            
            /* Languages list */
            .languages-list {
                display: flex;
                flex-wrap: wrap;
                gap: 0.75rem;
            }
            
            .language-item {
                padding: 0.75rem 1.5rem;
                background: var(--card-bg);
                border: 1px solid var(--border);
                border-radius: 0.75rem;
                font-size: 0.9375rem;
                font-weight: 500;
            }
            
            /* Footer */
            footer {
                border-top: 1px solid var(--border);
                padding: 2rem;
                margin-top: 0;
            }
            
            .footer-content {
                max-width: 1200px;
                margin: 0 auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 0.875rem;
                color: var(--text-muted);
            }
            
            .footer-links {
                display: flex;
                gap: 1.5rem;
            }
            
            .footer-links a {
                color: var(--text-muted);
                text-decoration: none;
                transition: color 0.2s ease;
            }
            
            .footer-links a:hover {
                color: var(--text-primary);
            }
            
            /* Back Link */
            .back-link {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                color: var(--text-secondary);
                text-decoration: none;
                font-size: 0.9375rem;
                font-weight: 500;
                margin-bottom: 2rem;
                transition: color 0.2s ease;
            }
            
            .back-link:hover {
                color: var(--text-primary);
            }
            
            /* Animations */
            @keyframes fadeInUp {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            
            .fade-in {
                animation: fadeInUp 0.5s ease-out both;
            }
            
            .fade-in-1 { animation-delay: 0.1s; }
            .fade-in-2 { animation-delay: 0.2s; }
            .fade-in-3 { animation-delay: 0.3s; }
            .fade-in-4 { animation-delay: 0.4s; }
            
            /* ===== Ambient Glow Blobs ===== */
            .glow-container {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
                z-index: 0;
                overflow: hidden;
            }
            
            .glow-blob {
                position: absolute;
                border-radius: 50%;
                filter: blur(80px);
                opacity: 0.12;
                animation: blobFloat 20s ease-in-out infinite;
            }
            
            .dark .glow-blob {
                opacity: 0.07;
            }
            
            .glow-blob-1 {
                width: 500px;
                height: 500px;
                background: radial-gradient(circle, #3b82f6, #8b5cf6);
                top: -15%;
                right: -10%;
                animation-delay: 0s;
            }
            
            .glow-blob-2 {
                width: 400px;
                height: 400px;
                background: radial-gradient(circle, #06b6d4, #3b82f6);
                top: 30%;
                left: -8%;
                animation-delay: -7s;
                animation-duration: 25s;
            }
            
            @keyframes blobFloat {
                0%, 100% { transform: translate(0, 0) scale(1); }
                25% { transform: translate(30px, -40px) scale(1.05); }
                50% { transform: translate(-20px, 20px) scale(0.95); }
                75% { transform: translate(40px, 30px) scale(1.02); }
            }
            
            /* ===== Light Beam for Two-Col ===== */
            .two-col-wrapper {
                position: relative;
                overflow: hidden;
            }
            
            .light-beam {
                position: absolute;
                top: -60%;
                left: 50%;
                transform: translateX(-50%);
                width: 80%;
                height: 400px;
                background: radial-gradient(ellipse at center top, rgba(59, 130, 246, 0.08) 0%, rgba(6, 182, 212, 0.04) 40%, transparent 70%);
                pointer-events: none;
                z-index: 0;
                animation: beamPulse 8s ease-in-out infinite;
            }
            
            .dark .light-beam {
                background: radial-gradient(ellipse at center top, rgba(59, 130, 246, 0.12) 0%, rgba(6, 182, 212, 0.06) 40%, transparent 70%);
            }
            
            @keyframes beamPulse {
                0%, 100% { opacity: 1; transform: translateX(-50%) scale(1); }
                50% { opacity: 0.7; transform: translateX(-50%) scale(1.05); }
            }
            
            .two-col-wrapper > .two-col {
                position: relative;
                z-index: 1;
            }
            
            
            /* Ensure content stays above glow */
            main, footer {
                position: relative;
                z-index: 2;
            }
            
            .about-hero {
                position: relative;
            }
            
            /* Responsive */
            @media (max-width: 768px) {
                nav { display: none; }
                .mobile-toggle { display: block; }
                
                nav.mobile-open {
                    display: flex;
                    flex-direction: column;
                    position: absolute;
                    top: 100%;
                    left: 0;
                    right: 0;
                    background: var(--bg);
                    border-bottom: 1px solid var(--border);
                    padding: 1rem 2rem;
                    gap: 0.25rem;
                }
                
                nav.mobile-open a.active::after {
                    display: none;
                }
                
                nav.mobile-open a {
                    padding: 0.5rem 1rem;
                    border-radius: 0.5rem;
                }
                
                nav.mobile-open a.active {
                    background: rgba(59, 130, 246, 0.08);
                    color: var(--accent);
                }
                
                .about-hero {
                    grid-template-columns: 1fr;
                    gap: 2rem;
                    padding: 3rem 1.5rem 2rem;
                }
                
                .about-photo-wrapper {
                    position: static;
                    max-width: 200px;
                    margin: 0 auto;
                }
                
                .about-name {
                    font-size: 2rem;
                    text-align: center;
                }
                
                .about-title {
                    text-align: center;
                }
                
                .about-bio {
                    text-align: center;
                }
                
                .about-social {
                    justify-content: center;
                }
                
                .info-grid {
                    grid-template-columns: 1fr;
                }
                
                .two-col {
                    grid-template-columns: 1fr;
                }
                
                .footer-content {
                    flex-direction: column;
                    gap: 1rem;
                    text-align: center;
                }
                
                .footer-links {
                    flex-wrap: wrap;
                    justify-content: center;
                }
                
                /* Scale down glow blobs for mobile */
                .glow-blob-1 {
                    width: 250px;
                    height: 250px;
                }
                .glow-blob-2 {
                    width: 200px;
                    height: 200px;
                }
                .light-beam {
                    width: 100%;
                    height: 250px;
                }
            }
        </style>
    </head>
    <body>
        <!-- Ambient Glow Blobs -->
        <div class="glow-container">
            <div class="glow-blob glow-blob-1"></div>
            <div class="glow-blob glow-blob-2"></div>
        </div>
        
        <!-- Header -->
        <header>
            <div class="header-content">
                <a href="/" class="logo">{{ config('app.name', 'Your Name') }}</a>
                
                <nav id="nav">
                    <a href="/" class="nav-link">{{ __('Home') }}</a>
                    <a href="{{ route('about') }}" class="nav-link active">{{ __('About') }}</a>
                </nav>
                
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <a href="{{ route('locale.switch', app()->getLocale() === 'en' ? 'nl' : 'en') }}" style="color: var(--text-secondary); font-size: 0.9375rem; font-weight: 500; text-decoration: none;">
                        {{ app()->getLocale() === 'en' ? 'NL' : 'EN' }}
                    </a>
                    
                    <button class="theme-toggle" id="theme-toggle" aria-label="Toggle dark mode">
                        <svg id="sun-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <svg id="moon-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                    </button>
                    
                    <button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle menu">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <main>
            @if($personalInfo)
                <div class="about-hero">
                    <!-- Left: Photo + Social -->
                    <div class="about-photo-wrapper fade-in">
                        @if($personalInfo->photo)
                            <img src="{{ asset('storage/' . $personalInfo->photo) }}" alt="{{ $personalInfo->full_name }}" class="about-photo">
                        @else
                            <div class="about-photo-placeholder">
                                {{ substr($personalInfo->full_name ?? 'U', 0, 1) }}
                            </div>
                        @endif
                        
                        @if($personalInfo->linkedin || $personalInfo->github || $personalInfo->website)
                            <div class="about-social">
                                @if($personalInfo->linkedin)
                                    <a href="{{ $personalInfo->linkedin }}" target="_blank" rel="noopener" title="LinkedIn">
                                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                    </a>
                                @endif
                                @if($personalInfo->github)
                                    <a href="{{ $personalInfo->github }}" target="_blank" rel="noopener" title="GitHub">
                                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                                    </a>
                                @endif
                                @if($personalInfo->website)
                                    <a href="{{ $personalInfo->website }}" target="_blank" rel="noopener" title="{{ __('Website') }}">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                                    </a>
                                @endif
                            </div>
                        @endif
                    </div>
                    
                    <!-- Right: All Content -->
                    <div class="about-content">
                        <a href="/" class="back-link fade-in">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
                            {{ __('Back to Home') }}
                        </a>
                        
                        <h1 class="about-name fade-in fade-in-1">{{ $personalInfo->full_name }}</h1>
                        <p class="about-title fade-in fade-in-2">{{ $personalInfo->trans('job_title') }}</p>
                        
                        @if($personalInfo->trans('bio'))
                            <p class="about-bio fade-in fade-in-3">{{ $personalInfo->trans('bio') }}</p>
                        @endif
                        
                        <!-- Personal Info Grid -->
                        <div class="info-grid fade-in fade-in-4">
                            @if($personalInfo->email)
                                <div class="info-item">
                                    <div class="info-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                    </div>
                                    <div>
                                        <p class="info-label">{{ __('Email') }}</p>
                                        <p class="info-value"><a href="mailto:{{ $personalInfo->email }}">{{ $personalInfo->email }}</a></p>
                                    </div>
                                </div>
                            @endif
                            @if($personalInfo->phone)
                                <div class="info-item">
                                    <div class="info-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                    </div>
                                    <div>
                                        <p class="info-label">{{ __('Phone') }}</p>
                                        <p class="info-value"><a href="tel:{{ $personalInfo->phone }}">{{ $personalInfo->phone }}</a></p>
                                    </div>
                                </div>
                            @endif
                            @if($personalInfo->location)
                                <div class="info-item">
                                    <div class="info-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                    </div>
                                    <div>
                                        <p class="info-label">{{ __('Location') }}</p>
                                        <p class="info-value">{{ $personalInfo->location }}</p>
                                    </div>
                                </div>
                            @endif
                            @if($personalInfo->driving_licence)
                                <div class="info-item">
                                    <div class="info-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="22" height="18" rx="2"/><path d="M1 9h22"/><path d="M10 15h4"/></svg>
                                    </div>
                                    <div>
                                        <p class="info-label">{{ __('Driving Licence') }}</p>
                                        <p class="info-value">{{ $personalInfo->driving_licence }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Languages -->
                        @if($personalInfo->languages)
                            <div class="about-section">
                                <h2 class="about-section-title">{{ __('Languages') }}</h2>
                                <div class="languages-list">
                                    @foreach(explode(',', $personalInfo->languages) as $language)
                                        <div class="language-item">{{ trim($language) }}</div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        
                        <!-- Skills -->
                        @if($skills->isNotEmpty())
                            <div class="about-section">
                                <h2 class="about-section-title">{{ __('Skills') }}</h2>
                                <div class="skills-tags">
                                    @foreach($skills as $skill)
                                        <div class="skill-tag">
                                            @if($skill->icon)
                                                <img src="{{ asset('storage/' . $skill->icon) }}" alt="{{ $skill->trans('name') }}">
                                            @else
                                                <span class="skill-tag-letter">{{ substr($skill->trans('name'), 0, 1) }}</span>
                                            @endif
                                            {{ $skill->trans('name') }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        
                        <!-- Experience & Education -->
                        <div class="two-col-wrapper">
                            <div class="light-beam"></div>
                        <div class="two-col">
                            @if($experiences->isNotEmpty())
                                <div class="about-section">
                                    <h2 class="about-section-title">{{ __('Experience') }}</h2>
                                    <div class="timeline-list">
                                        @foreach($experiences as $exp)
                                            <div class="timeline-entry">
                                                <div class="timeline-entry-header">
                                                    <h3 class="timeline-entry-title">{{ $exp->trans('title') }}</h3>
                                                    <span class="timeline-entry-date {{ $exp->is_current ? 'current' : '' }}">
                                                        {{ $exp->is_current ? __('Present') : $exp->start_date->format('Y') }}
                                                    </span>
                                                </div>
                                                <p class="timeline-entry-sub">{{ $exp->company }}</p>
                                                <div class="timeline-entry-meta">
                                                    <span>{{ $exp->start_date->format('M Y') }} — {{ $exp->is_current ? __('Present') : $exp->end_date->format('M Y') }}</span>
                                                    @if($exp->location)
                                                        <span class="dot"></span>
                                                        <span>{{ $exp->location }}</span>
                                                    @endif
                                                </div>
                                                @if($exp->trans('description'))
                                                    <p class="timeline-entry-desc">{{ $exp->trans('description') }}</p>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            
                            @if($education->isNotEmpty())
                                <div class="about-section">
                                    <h2 class="about-section-title">{{ __('Education') }}</h2>
                                    <div class="timeline-list">
                                        @foreach($education as $edu)
                                            <div class="timeline-entry">
                                                <div class="timeline-entry-header">
                                                    <h3 class="timeline-entry-title">{{ $edu->trans('degree') }}</h3>
                                                    <span class="timeline-entry-date {{ $edu->is_current ? 'current' : '' }}">
                                                        {{ $edu->is_current ? __('Present') : $edu->start_date->format('Y') }}
                                                    </span>
                                                </div>
                                                <p class="timeline-entry-sub">{{ $edu->institution }}</p>
                                                <div class="timeline-entry-meta">
                                                    <span>{{ $edu->start_date->format('M Y') }} — {{ $edu->is_current ? __('Present') : $edu->end_date->format('M Y') }}</span>
                                                    @if($edu->location)
                                                        <span class="dot"></span>
                                                        <span>{{ $edu->location }}</span>
                                                    @endif
                                                </div>
                                                @if($edu->trans('field_of_study'))
                                                    <p class="timeline-entry-desc" style="margin-bottom: 0.25rem;">{{ $edu->trans('field_of_study') }}</p>
                                                @endif
                                                @if($edu->trans('description'))
                                                    <p class="timeline-entry-desc">{{ $edu->trans('description') }}</p>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                        </div>
                    </div>
                </div>
            @else
                <div style="max-width: 1200px; margin: 0 auto; padding: 5rem 2rem; text-align: center;">
                    <h1 style="font-size: 2rem; margin-bottom: 1rem;">{{ __('About Me') }}</h1>
                    <p style="color: var(--text-secondary);">{{ __('No personal information added yet.') }}</p>
                    <a href="/" class="back-link" style="margin-top: 2rem; display: inline-flex;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
                        {{ __('Back to Home') }}
                    </a>
                </div>
            @endif
        </main>

        <!-- Footer -->
        <footer>
            <div class="footer-content">
                <div class="copyright">
                    © {{ date('Y') }} {{ config('app.name', 'CV') }}. {{ __('All rights reserved.') }}
                </div>
                
                <div class="footer-links">
                    <a href="/">{{ __('Home') }}</a>
                    <a href="{{ route('about') }}">{{ __('About') }}</a>
                </div>
            </div>
        </footer>

        <script>
            // Theme toggle
            const themeToggle = document.getElementById('theme-toggle');
            const sunIcon = document.getElementById('sun-icon');
            const moonIcon = document.getElementById('moon-icon');
            const html = document.documentElement;
            
            function updateThemeIcons() {
                const isDark = html.classList.contains('dark');
                sunIcon.style.display = isDark ? 'block' : 'none';
                moonIcon.style.display = isDark ? 'none' : 'block';
            }
            
            const savedTheme = localStorage.getItem('theme');
            const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            
            if (savedTheme === 'dark' || (!savedTheme && systemDark)) {
                html.classList.add('dark');
            }
            updateThemeIcons();
            
            themeToggle.addEventListener('click', () => {
                html.classList.toggle('dark');
                localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
                updateThemeIcons();
            });
            
            // Mobile menu toggle
            const mobileToggle = document.getElementById('mobile-toggle');
            const nav = document.getElementById('nav');
            
            mobileToggle.addEventListener('click', () => {
                nav.classList.toggle('mobile-open');
            });
            
            document.querySelectorAll('nav a').forEach(link => {
                link.addEventListener('click', () => {
                    nav.classList.remove('mobile-open');
                });
            });
        </script>
    </body>
</html>
