<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Jadwal" href="/jadwal"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/jadwal') ? 'active text-blue-600' : '' }}">
        Jadwal
    </a>
    
    <a title="{{ $page->siteName }} Paket" href="/paket"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/paket') ? 'active text-blue-600' : '' }}">
        Paket
    </a>

    <a title="{{ $page->siteName }} Trainer" href="/trainer"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/trainer') ? 'active text-blue-600' : '' }}">
        Trainer
    </a>

    <a title="{{ $page->siteName }} Kendaraan" href="/kendaraan"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/kendaraan') ? 'active text-blue-600' : '' }}">
        Kendaraan
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        Contact
    </a>
</nav>
