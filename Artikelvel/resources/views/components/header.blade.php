<header
    class="flex flex-col md:flex-row items-center justify-between min-w-full min-h-15 h-fit gap-2 bg-black text-white px-4 py-4 md:px-25 lg:px-30 xl:px-50 text-xl font-semibold">
    <div class="flex items-center justify-center md:justify-start gap-2 w-full">
        <a href="#">English</a>
        <a href="#" class="text-yellow-400">Indonesia</a>
    </div>
    <form action="#" class="flex items-center gap-4 w-full h-fit xs:w-2/3 sm:w-3/5 md:w-full justify-end">
        <input type="search" name="cari" id="cari" placeholder="Cari..."
            class="min-w-full w-full bg-white text-black px-3 py-1 outline-none rounded-md md:min-w-0 md:w-64 font-normal text-base" />
    </form>
</header>

@php
$allDdMenu = [
[
'ddTitle' => 'Tentang',
'ddLink' => '#',
'listHeader' => ['Tentang', 'Program Kami'],
'listContent' => [
[
['name' => 'Siapa Kami', 'link' => '#'],
['name' => 'Struktur Kami', 'link' => '#'],
['name' => 'Kebijakan Sosial', 'link' => '#'],
['name' => 'Kontak', 'link' => '#'],
['name' => 'FAQ', 'link' => '#']
],
[
['name' => 'Transformasi Pasar dan Iklim', 'link' => '#'],
['name' => 'Hutan dan Satwa Liar', 'link' => '#'],
['name' => 'Kelautan dan Perikanan', 'link' => '#']
]
]
],
[
'ddTitle' => 'Aksi',
'ddLink' => '#',
'listHeader' => ['Kampanye', 'Edukasi', 'Terlibatlah', 'Bekerja dengan Kami'],
'listContent' => [
[
['name' => 'Beli yang Baik', 'link' => '#'],
['name' => 'Earth Hour', 'link' => '#'],
['name' => 'Pangan Bijak Nusantara', 'link' => '#'],
['name' => 'Plastic Smart Cities', 'link' => '#'],
['name' => 'Seafood Saver', 'link' => '#'],
['name' => 'Marine Buddies', 'link' => '#'],
['name' => 'Nature X Youth', 'link' => '#']
],
[
['name' => 'Edukasi pembangunan berkelanjutan', 'link' => '#'],
['name' => 'Panda Mobile', 'link' => '#'],
['name' => 'Zero Waste School', 'link' => '#'],
],
[
['name' => 'Members of Nature', 'link' => '#'],
['name' => 'Volunteer', 'link' => '#'],
['name' => 'Berbagi Ruang', 'link' => '#'],
],
[
['name' => 'Pekerjaan', 'link' => '#'],
['name' => 'Magang', 'link' => '#'],
]
]
],
[
'ddTitle' => 'Terkini',
'ddLink' => '#',
'listHeader' => ['Terkini'],
'listContent' => [
[
['name' => 'Artikel', 'link' => '#'],
['name' => 'Stories from the Field', 'link' => '#'],
['name' => 'Publikasi', 'link' => '#'],
['name' => 'Siaran Pers', 'link' => '#'],
]
]
],
[
'ddTitle' => 'Laporan',
'ddLink' => '#',
'listHeader' => ['Laporan Keuangan', 'Laporan Tahunan', 'Laporan Living Planet'],
'listContent' => [
[
['name' => 'Laporan Keuangan FY 2024', 'link' => '#'],
['name' => 'Laporan Keuangan FY 2023', 'link' => '#'],
],
[
['name' => 'Laporan Tahunan 2023', 'link' => '#'],
['name' => 'Laporan Tahunan 2022', 'link' => '#'],
['name' => 'Laporan Tahunan 2021', 'link' => '#'],
['name' => 'Laporan Tahunan 2020', 'link' => '#'],
],
[
['name' => 'Laporan Living Planet 2024', 'link' => '#'],
['name' => 'Laporan Living Planet 2022', 'link' => '#'],
['name' => 'Laporan Living Planet 2020', 'link' => '#'],
['name' => 'Laporan Living Planet 2018', 'link' => '#'],
]
]
],
[
'ddTitle' => 'Kemitraan',
'ddLink' => '#',
'listHeader' => ['Kemitraan Kami', 'Laporan Kemitraan Korporasi'],
'listContent' => [
[
['name' => 'Kemitraan Korporasi', 'link' => '#'],
['name' => 'Kelompok Masyarakat Mandani', 'link' => '#'],
['name' => 'Lembaga Akademik', 'link' => '#'],
['name' => 'Lembaga Pemerintahan', 'link' => '#'],
],
[
['name' => 'Laporan Kemitraan Korporasi FY 2021', 'link' => '#'],
['name' => 'Laporan Kemitraan Korporasi FY 2020', 'link' => '#'],
['name' => 'Laporan Kemitraan Korporasi FY 2019', 'link' => '#'],
]
]
],
];
@endphp

<nav x-data="{ddOpen: 0}" @mouseleave="ddOpen = 0"
    class="min-w-full max-w-full w-full h-auto sticky top-0 min-h-15 bg-white text-black hidden md:flex items-center justify-between z-100 px-4 md:px-15 lg:px-30 xl:px-45 shadow-xs">
    <section class="flex items-center justify-start w-full h-full gap-12 ">
        <div class="w-9 h-full hidden lg:block">
            <img class="rounded-full" src="https://laravel.com/images/home/community/chandresh-patel.jpg" alt="Logo">
        </div>
        <div class="flex items-center justify-start gap-8 font-black uppercase text-2xl ">

            @foreach ($allDdMenu as $ddMenu)
            <a href="{{ $ddMenu['ddLink'] }}" @mouseover="ddOpen = {{ $loop->index + 1 }}"
                class="relative text-black after:content-['◤'] after:block after:absolute after:-right-2 after:top-4/7 after:h-1 after:w-1 after:text-[.6rem] after:box-border after:origin-[60%_60%] after:rotate-225">
                {{ $ddMenu['ddTitle'] }}
            </a>
            @endforeach


        </div>
    </section>

    @foreach ($allDdMenu as $menu)
    <x-ddmenu x-data="{ddOpen: ddOpen}" :ddId="$loop->index + 1" :listHeader="$menu['listHeader']"
        :listContent="$menu['listContent']" />
    @endforeach

    <section class="flex items-center justify-end w-full h-15 uppercase text-neutral-900 font-black text-3xl">
        <a href="#" class="bg-[#f5d200] w-fit h-full flex items-center justify-center px-3">
            gerai
        </a>
        <a href="#" class="bg-[#f07d00] w-fit h-full flex items-center justify-center px-3 text-2xl ">
            dukung kami
        </a>
    </section>
</nav>


<section x-data="{mobNavOpen: false}"
    class="flex flex-col md:hidden items-center justify-between min-w-full max-w-full w-full mih-h-15 h-fit bg-white text-black px-4">
    <div class="flex items-center justify-between w-full min-h-15 px-2">
        <img class="rounded-full h-12" src="https://laravel.com/images/home/community/chandresh-patel.jpg" alt="Logo">
        <button @click="mobNavOpen = !mobNavOpen"
            class="flex items-center justify-center w-13 h-10 bg-white rounded-md shadow-xs cursor-pointer hover:bg-gray-100 focus:outline-none active:bg-gray-200">
            <img src="{{ asset('img/hambar.png') }}" alt="Hamburger Menu"
                class="w-8 h-8 object-cover object-center cursor-pointer">
        </button>
    </div>
    <nav x-cloak x-show="mobNavOpen" class="min-w-full max-w-full w-full min-h-5 h-fit bg-white mt-10 flex flex-col items-center justify-between">
        @foreach ($allDdMenu as $menu)
            <div x-data="{ddOpen: false}" @click.outside="ddOpen = false" class="flex flex-col items-center justify-between w-full h-fit px-3" :class="!ddOpen ? 'mb-5' : ''">
                <div class="flex items-center justify-between w-full h-fit bg-white uppercase text-2xl font-bold">
                    <a href="{{ $menu['ddLink'] }}">{{ $menu['ddTitle'] }}</a>
                    <img @click="ddOpen=!ddOpen" src="{{ asset('img/plusicon.png') }}" alt="+" class="w-6 h-6 object-cover object-center cursor-pointer mr-2">
                </div>
                <div x-cloak x-show="ddOpen" class="min-w-full max-w-full w-full h-auto bg-white tracking-tight flex flex-col text-base font-bold px-1 gap-2 mt-5 ">
                    <section class="flex w-full h-fit gap-3 *:hover:text-yellow-500">
                        @foreach($menu['listHeader'] as $menuHead)
                            <h1 class="w-full border-b-[.5px] border-b-black/25 h-full">{{ $menuHead }}</h1>
                        @endforeach
                    </section>
                    <section class="w-full flex h-full font-normal text-sm normal-case *:*:hover:text-yellow-500 pb-3 gap-4">
                        @foreach($menu['listContent'] as $contents)
                        <div class="w-full flex flex-col gap-4">
                            @foreach($contents as $content)
                                    <a href="{{ $content['link'] }}">{{ $content['name'] }}</a>
                                @endforeach
                            </div>
                        @endforeach
                    </section>
                </div>
            </div>
        @endforeach
    </nav>
</section>