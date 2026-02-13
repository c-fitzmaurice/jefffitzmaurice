@extends('_layouts.master')

@section('body')

<div class="flex flex-col md:flex-row">
    <div class="w-full md:w-2/3">
        <div class="flex justify-center">
            <a
                href="{{ $page->full($page->img) }}"
                data-lightbox-trigger
                class="inline-block w-full"
                aria-label="Open {{ $page->title }} in full-screen lightbox"
            >
                <img loading="lazy" class="shadow hover:shadow-lg w-full" src="{{ $page->full($page->img) }}" alt="{{ $page->title }}">
            </a>
        </div>

        <div
            data-lightbox
            class="hidden fixed inset-0 z-50 overflow-y-auto p-4 sm:p-8"
            role="dialog"
            aria-modal="true"
            aria-label="Image lightbox"
        >
            <div
                data-lightbox-backdrop
                class="fixed inset-0 bg-black/80 opacity-0 transition-opacity duration-300 ease-out"
                aria-hidden="true"
            ></div>

            <button
                type="button"
                data-lightbox-close
                class="fixed top-4 right-4 z-20 text-gold hover:text-white focus:outline-none opacity-0 transition-opacity duration-300 ease-out"
                aria-label="Close lightbox"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-9 h-9">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <img
                data-lightbox-image
                class="relative z-10 block mx-auto w-full h-auto max-w-7xl shadow-lg opacity-0 transition-opacity duration-300 ease-out"
                style="animation: none;"
                alt=""
            >
        </div>
    </div>
    
    <div class="w-full md:w-1/3 md:px-4 mt-8 md:mt-0">
        <h1 class="border-b-2 border-gold pb-2 mb-4 font-serif text-4xl">{{ $page->title }}</h1>

        {{-- <div class="copy">
            @yield('content')
        </div> --}}
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const trigger = document.querySelector('[data-lightbox-trigger]');
        const lightbox = document.querySelector('[data-lightbox]');
        const backdrop = document.querySelector('[data-lightbox-backdrop]');
        const lightboxImage = document.querySelector('[data-lightbox-image]');
        const closeButton = document.querySelector('[data-lightbox-close]');

        if (!trigger || !lightbox || !backdrop || !lightboxImage || !closeButton) {
            return;
        }

        let previousFocus = null;
        let hideTimeout = null;

        const fadeIn = function (element) {
            element.classList.remove('opacity-0');
            element.classList.add('opacity-100');
        };

        const fadeOut = function (element) {
            element.classList.remove('opacity-100');
            element.classList.add('opacity-0');
        };

        const openLightbox = function (event) {
            event.preventDefault();

            const image = trigger.querySelector('img');

            if (hideTimeout) {
                window.clearTimeout(hideTimeout);
                hideTimeout = null;
            }

            previousFocus = document.activeElement;

            lightboxImage.src = trigger.href;
            lightboxImage.alt = image ? image.alt : '';
            lightbox.classList.remove('hidden');
            lightbox.scrollTop = 0;
            document.body.classList.add('overflow-hidden');

            window.requestAnimationFrame(function () {
                fadeIn(backdrop);
                fadeIn(lightboxImage);
                fadeIn(closeButton);
            });

            closeButton.focus();
        };

        const closeLightbox = function () {
            fadeOut(backdrop);
            fadeOut(lightboxImage);
            fadeOut(closeButton);

            hideTimeout = window.setTimeout(function () {
                lightbox.classList.add('hidden');
                lightboxImage.removeAttribute('src');
                document.body.classList.remove('overflow-hidden');
                hideTimeout = null;
            }, 300);

            if (previousFocus && typeof previousFocus.focus === 'function') {
                previousFocus.focus();
            }
        };

        trigger.addEventListener('click', openLightbox);
        closeButton.addEventListener('click', closeLightbox);

        lightbox.addEventListener('click', function (event) {
            if (event.target === lightbox || event.target === backdrop) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && !lightbox.classList.contains('hidden')) {
                closeLightbox();
            }
        });
    });
</script>

@endsection
