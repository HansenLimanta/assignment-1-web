<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-gray-200 shadow hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Jadwal"
                href="/jadwal"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/jadwal') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
            >Jadwal</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Paket"
                href="/paket"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/paket') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
            >Paket</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Trainer"
                href="/trainer"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/trainer') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
            >Trainer</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Kendaraan"
                href="/kendaraan"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/kendaraan') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
            >Kendaraan</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/contact') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
            >Contact</a>
        </li>
    </ul>
</nav>
