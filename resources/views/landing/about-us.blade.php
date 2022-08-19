@extends('landing.layouts.app')

@section('content')
<div>
    <img src="{{ asset('img/Media.png') }}" class="block mr-auto ml-auto my-10" />
</div>

<!-- second slide section -->
<aside>
    <div class="max-w-md mx-auto bg-white overflow-hidden sm:max-w-[69rem]">
        <div class="md:flex">
            <div class="md:shrink-0">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/v7LhO3jiaqo"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="p-8">
                <a class="flex items-center py-6 px-1 space-x-2">
                    <img src="{{ asset('img/Shield.png') }}" />
                    <span class="text-black text-3xl font-Montserrat">Program RumahPerkerja.id </span>
                </a>
                <p class="block mt-1 text-lg leading-tight font-medium text-gray-500 my-6">Program
                    untuk
                    mendukung peningkatan kompetensi Pekerja Indonesia.</p>
                <p class="mt-2  text-slate-500 block text-lg leading-tight font-medium">
                    Rumah Pekerja Indonesia adalah program nasional kerja sama PT. Indonesia Satu Manajemen
                    dengan Kementerian
                    Tenaga Kerja dan berbagai stakeholder sentral di bidang sumber daya manusia. Rumah Pekerja
                    Indonesia hadir
                    untuk mendukung seluruh pekerja Indonesia agar semakin berdaya.
                </p>
            </div>
        </div>
    </div>
</aside>
<!-- second slide section -->

<!-- third slide section -->
<section class="h-auto shadow-lg bg-gradient-to-br from-white to-red-100 my-6">
    <div class="container px-5 py-10 mx-auto md:max-w-[69rem] ">
        <div class="flex flex-wrap w-full mb-10 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-3xl font-medium title-font text-gray-900"><span class="text-red-700">Rumah
                    Pekerja Indonesia</span> adalah Platform Teknologi yang Menjadi<br> Wadah untuk Meningkatkan
                kesempatan Kerja yang Berkualitas.</h1>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div>
                    <p class="leading-relaxed text-base">Pekerja Indonesia adalah wadah bagi seluruh pekerja
                        Indonesia untuk<br>
                        bercengkerama,
                        update
                        informasi<br> ketenagakerjaan, informasi lowongan kerja,<br> meningkatkan kemampuan serta
                        kompetensi diri.</p>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-#F9A0A6 p-6 rounded-lg">
                    <div class="w-160 h-135 inline-flex items-center justify-center rounded-full mb-4">
                        <img class="mx-28" src="{{ asset('img/v1.png') }}" />
                    </div>
                    <h2 class=" text-gray-900 font-medium title-font mb-2 mx-24">Terpercaya</h2>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-#F9A0A6 p-6 rounded-lg">
                    <div class="w-160 h-135 inline-flex items-center justify-center rounded-full mb-4">
                        <img class="mx-28" src="{{ asset('img/v2.png') }}" />
                    </div>
                    <h2 class="text-gray-900 font-medium title-font mb-2 mx-24">Transparan</h2>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-#F9A0A6 p-6 rounded-lg">
                    <div class="w-160 h-135  inline-flex items-center justify-center rounded-full mb-4">
                        <img class="mx-28 my-4" src="{{ asset('img/Group 1.png') }}" />
                    </div>
                    <h2 class="text-gray-900 font-medium title-font mb-2 mx-24">Proses Cepat</h2>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-#F9A0A6 p-6 rounded-lg">
                    <div class="w-160 h-135 inline-flex items-center justify-center rounded-full mb-4">
                        <img class="block my-5 mx-28" src="{{ asset('img/Group 2.png') }}" />
                    </div>
                    <h2 class="text-gray-900 font-medium title-font mb-2 mx-28">Resmi</h2>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-#F9A0A6 p-6 rounded-lg flex items-center">
                    <div class="w-160 h-135 inline-flex items-center justify-center rounded-full mb-4">
                        <img class="block my-7 mx-20 h-28" src="{{ asset('img/mobile-android 1.png') }}" />
                    </div>
                    <h2 class="text-gray-900 font-medium title-font">Donwload</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- third slide section -->


<!-- fourth slide section -->
<section>
    <div class="container px-5 py-24 mx-auto md:max-w-[69rem]">
        <div class="flex flex-col text-center w-full mb-10 ">
            <h1 class="text-4xl leading-tight font-medium my-7 font-Montserrat block">Dampak Positif terhadap
                Perekonomian Indonesia</h1>
            <img class="mx-auto" src="{{ asset('img/Line 7.png') }}" alt="">
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 lg:w-1/2">
                <div
                    class=" border rounded-2xl h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team"
                        class="mx-4 flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                        src="{{ asset('img/Register-Pekerja.png') }}">
                    <div class="flex-grow sm:pl-8">
                        <h2 class="title-font font-medium text-lg text-gray-900 my-6">Memperluas
                            Jangkauan<br> Koneksi dan Relasi</h2>
                        <p class="mb-4 my-5">Rumahpekerja.id menciptakan platform yang
                            memudahkan para pekerja untuk memperluas koneksi dan relasi, baik antar
                            pekerja maupun dengan industri.</p>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/2">
                <div
                    class="border rounded-2xl h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team"
                        class="mx-4 flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                        src="{{ asset('img/Register-Pekerja.png') }}">
                    <div class="flex-grow sm:pl-8">
                        <h2 class="title-font font-medium text-lg text-gray-900 my-6">Pengentasan
                            Pengangguran<br> Secara Berkelanjutan</h2>
                        <p class="mb-4 my-5">Rumahpekerja.id mengkurasi berbagai kesempatan kerja
                            dalam negeri maupun luar negeri, dengan berbagai pilihan profesi yang cocok
                            untuk generasi muda.</p>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/2">
                <div
                    class="border rounded-2xl h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team"
                        class="mx-4 flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                        src="{{ asset('img/Register-Pekerja.png') }}">
                    <div class="flex-grow sm:pl-8">
                        <h2 class="title-font font-medium text-lg text-gray-900 my-6">Memberdayakan Usia<br>
                            Produktif Anak Bangsa</h2>
                        <p class="mb-4">Rumahpekerja.id mengkurasi berbagai kesempatan kerja dalam negeri maupun
                            luar negeri, dengan berbagai pilihan profesi yang cocok untuk generasi muda.</p>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/2">
                <div
                    class="border rounded-2xl h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team"
                        class="mx-4 flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                        src="{{ asset('img/Register-Pekerja.png') }}">
                    <div class="flex-grow sm:pl-8">
                        <h2 class="title-font font-medium text-lg text-gray-900 my-6">Mengurangi Tingkat<br>
                            Kemiskinan</h2>
                        <p class="mb-4">Rumahpekerja.id mempertemukan dengan ekosistem yang tepat, hingga membuka
                            berbagai kesempatan untuk terus menempa diri dan juga menemukan karir yang tepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- fourth slide section -->

<!-- fifth slide section -->
<section id="perjalanan" class="pt-36">
    <div class="container relative md:max-w-[69rem] mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2 ">
                <a class="flex items-center py-2 px-1 space-x-2">
                    <img src="{{ asset('img/Shield.png') }}" />
                    <span class="font-Montserrat text-black text-3xl">Perjalanan Kami
                    </span>
                </a>
                <p class="mt-2 text-slate-500 text-base">RPI dibentuk untuk memudahkan, melindungi,
                    mendayagunakan <br> para tenaga kerja Indonesia untuk mendapatkan kesempatan<br>
                    kerja
                    yang berkualitas. </p>
                <p class="mt-2 text-slate-500">Memudahkan pekerja dengan memberikan program
                    pelatihan<br> yang mampu meningkatkan kemampuan dan ketrampilan.
                </p>
                <p class="mt-2 text-slate-500">Melindungi pekerja dengan memberikan saran, advokasi
                    dan<br> mengkomunikasikan dengan stakeholder terkait untuk<br> mendapatkan
                    pelindungan
                    sesuai dengan Undang-Undang yang<br> berlaku.
                </p>
                <p class="mt-2 text-slate-500">
                    Mendayagunakan pekerja untuk mendapatkan pekerjaan sesuai<br> dengan kemampuan
                    yang
                    dimiliki dengan industri yang telah ada.
                </p>
            </div>
            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="mt-10">
                    <img src="{{ asset('img/image 2.png') }}" alt=""
                    class="max-w-full mx-auto">

                </div>

            </div>
        </div>

    </div>

</section>
<!-- fifth slide section -->

<!-- sixth slide -->
<aside>
    <div class="bg-whit h-auto ">
        <div class="flex items-center justify-center blok my-10">
            <a class="flex items-center px-4 space-x-2">
                <img src="{{ asset('img/Shield (1).png') }}" />
                <span class="font-semibold text-black text-3xl">Liputan Media </span>
            </a>
        </div>
        <div class="md:max-w-[69rem] mx-auto">
            <div class="flex flex-wrap -m-5 items-center">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="p-6 rounded-lg">
                        <img src="{{ asset('img/Kontan.png') }}" alt="">
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class=" p-6 rounded-lg">
                        <img src="{{ asset('img/IDNTimes.png') }}" alt="">
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class=" p-6 rounded-lg">
                        <img src="{{ asset('img/Dailysocial.png') }}" alt="">
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <img src="{{ asset('img/Akurat.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="md:max-w-[69rem] mx-auto">
            <div>
                <div class="flex flex-wrap -m-5 items-center">
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="p-6 rounded-lg">
                            <img src="{{ asset('img/Republika.png') }}" alt="">
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class=" p-6 rounded-lg">
                            <img src="{{ asset('img/Logo-times-indonesia.png') }}" alt="">
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class=" p-6 rounded-lg">
                            <img src="{{ asset('img/katadata.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


</aside>
<!-- sixth slide -->

<!-- seventh slide -->
<aside>
    <div class="bg-gradient-to-br from-red-100 to-white h-full">
        <div class="flex">
            <div class="flex items-center justify-center blok my-10 mx-auto">
                <a class="flex items-center px-4 space-x-2">
                    <img src="{{ asset('img/Shield (1).png') }}" />
                    <span class="font-semibold text-black text-3xl">Liputan Media </span>
                </a>
            </div>
        </div>
        <div class="flex flex-wrap -m-5 items-center mx-auto md:max-w-6xl">
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <div class="p-6 rounded-lg">
                    <svg width="212" height="72" viewBox="0 0 212 72" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_7_951)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.4 40.575C13.8 38.175 13.8 34.275 11.4 31.8C8.925 29.4 5.025 29.4 2.55 31.8C0.15 34.275 0.15 38.25 2.55 40.65C4.95 43.05 8.925 43.05 11.4 40.575ZM60.075 31.35C57.675 33.825 57.675 37.8 60.075 40.2C62.475 42.6 66.45 42.6 68.925 40.2C71.325 37.725 71.325 33.825 68.925 31.35C66.45 28.95 62.55 28.95 60.075 31.35ZM47.475 28.65L51.825 33C52.875 34.05 54.45 34.05 55.425 33L61.5 26.925C63.6 24.9 63.6 21.525 61.5 19.425L61.05 18.975C58.95 16.95 55.65 16.95 53.55 18.975L47.475 25.05C46.5 26.025 46.5 27.675 47.475 28.65ZM38.175 37.65C43.35 42.825 48.375 47.85 53.55 53.025C55.65 55.125 58.95 55.125 61.05 53.025L61.5 52.575C63.6 50.475 63.6 47.1 61.5 45.075L45.45 28.95C44.925 28.425 44.925 27.6 45.45 27.15L38.175 34.35C37.275 35.25 37.275 36.75 38.175 37.65ZM38.7 55.725L44.775 61.8C46.875 63.9 50.25 63.9 52.275 61.8L52.725 61.35C54.825 59.25 54.825 55.875 52.725 53.85L46.725 47.7C45.675 46.725 44.1 46.725 43.05 47.7L38.7 52.125C37.725 53.1 37.725 54.75 38.7 55.725ZM39.9 60.375C37.5 57.9 33.525 57.9 31.125 60.375C28.725 62.775 28.65 66.75 31.125 69.15C33.525 71.625 37.5 71.55 39.9 69.15C42.375 66.75 42.375 62.775 39.9 60.375ZM34.125 38.4L18.675 53.85C16.65 55.875 16.65 59.25 18.675 61.35L19.2 61.8C21.225 63.9 24.6 63.9 26.7 61.8L42.75 45.75C43.275 45.225 44.1 45.225 44.625 45.75C42.225 43.275 39.75 40.875 37.35 38.4C36.45 37.5 35.025 37.5 34.125 38.4ZM24 43.35L19.65 38.925C18.6 37.95 17.025 37.95 15.975 38.925L9.975 45.075C7.875 47.1 7.875 50.475 9.975 52.575L10.425 53.025C12.45 55.125 15.825 55.125 17.85 53.025L24 46.95C24.975 45.975 24.975 44.325 24 43.35ZM44.775 10.2L28.725 26.325C28.2 26.85 27.375 26.85 26.85 26.325C29.25 28.725 31.725 31.125 34.125 33.6C35.025 34.5 36.45 34.5 37.35 33.6L52.725 18.15C54.825 16.125 54.825 12.75 52.725 10.725L52.275 10.2C50.25 8.17502 46.875 8.17502 44.775 10.2ZM31.5 11.625C33.975 14.1 37.95 14.025 40.35 11.625C42.75 9.22502 42.825 5.25002 40.35 2.85002C37.95 0.375024 33.975 0.375024 31.575 2.85002C29.1 5.25002 29.1 9.22502 31.5 11.625ZM18.675 18.15L24.75 24.225C25.8 25.275 27.375 25.275 28.425 24.225L32.775 19.875C33.75 18.9 33.75 17.25 32.775 16.275L26.7 10.2C24.6 8.17502 21.225 8.17502 19.2 10.2L18.675 10.725C16.65 12.75 16.65 16.125 18.675 18.15ZM9.975 26.925L26.025 43.05C26.55 43.575 26.55 44.4 26.025 44.925L33.3 37.65C34.2 36.75 34.2 35.25 33.3 34.35C28.125 29.175 23.1 24.15 17.85 18.975C15.825 16.95 12.45 16.95 10.425 18.975L9.975 19.425C7.875 21.525 7.875 24.9 9.975 26.925Z"
                                fill="#13406A" />
                            <path
                                d="M79.575 33.45H81.45V30.6L82.875 29.025L85.35 33.45H87.675L84.15 27.75L87.525 24.075H85.05L81.45 28.275V24.075H79.575V33.45ZM88.875 33.45H95.625V31.875H90.675V29.325H95.175V27.75H90.675V25.65H95.475V24.075H88.875V33.45ZM96.75 25.65H99.375V33.45H101.25V25.65H103.875V24.075H96.75V25.65ZM105.225 33.45H112.05V31.875H107.1V29.325H111.6V27.75H107.1V25.65H111.9V24.075H105.225V33.45ZM113.85 33.45H115.5V27.375L119.1 33.45H120.9V24.075H119.25V30.3L115.575 24.075H113.85V33.45ZM122.175 33.45H124.125L124.8 31.275H128.4L129.15 33.45H131.1L127.575 24.075H125.625L122.175 33.45ZM125.4 29.775L126.6 26.25L127.8 29.775H125.4ZM131.55 28.725C131.55 31.875 133.125 33.525 136.05 33.6C136.8 33.525 137.55 33.375 138.225 33.15C138.9 32.85 139.5 32.55 139.875 32.175V28.425H135.975V30H138V31.2C137.4 31.725 136.725 31.95 135.9 31.95C134.25 31.95 133.425 30.825 133.35 28.65C133.425 26.55 134.25 25.5 135.975 25.5C136.95 25.5 137.625 26.025 137.925 27L139.725 26.625C139.425 24.825 138.15 23.925 135.975 23.925C134.475 23.925 133.35 24.375 132.675 25.275C131.925 26.175 131.55 27.375 131.55 28.725ZM140.925 33.45H142.8L143.55 31.275H147.15L147.9 33.45H149.85L146.325 24.075H144.375L140.925 33.45ZM144.075 29.775L145.35 26.25L146.55 29.775H144.075ZM151.125 33.45H152.925V30.6L154.425 29.025L156.825 33.45H159.15L155.625 27.75L159 24.075H156.6L152.925 28.275V24.075H151.125V33.45ZM160.35 33.45H167.175V31.875H162.225V29.325H166.65V27.75H162.225V25.65H167.025V24.075H160.35V33.45ZM168.9 33.45H170.775V29.55H171.15C171.6 29.55 171.9 29.55 172.05 29.625C172.125 29.625 172.2 29.7 172.275 29.775C172.35 29.775 172.5 29.85 172.575 30C172.725 30.15 173.025 30.6 173.475 31.425L174.825 33.45H176.925L175.875 31.575C175.425 30.9 175.125 30.375 174.825 30.075C174.6 29.775 174.225 29.55 173.85 29.325C175.425 29.025 176.25 28.125 176.25 26.7C176.175 25.5 175.725 24.75 174.825 24.375C174.375 24.15 173.7 24.075 172.725 24.075H168.9V33.45ZM170.775 28.05V25.65H172.2C172.5 25.65 172.8 25.65 173.025 25.65C173.25 25.65 173.4 25.725 173.475 25.725C174.075 25.8 174.375 26.175 174.375 26.85C174.375 27.45 174.15 27.825 173.7 27.975C173.475 28.05 172.95 28.05 172.125 28.05H170.775ZM179.175 30.375L177.525 30.525C177.525 32.55 178.5 33.6 180.225 33.6C181.05 33.6 181.725 33.375 182.1 33.075C182.55 32.7 182.85 32.325 183 31.875C183.15 31.425 183.225 30.825 183.225 30V24.075H181.425V30.15C181.425 30.9 181.35 31.35 181.125 31.65C180.975 31.875 180.675 32.025 180.3 31.95C179.625 32.025 179.25 31.425 179.175 30.375ZM184.2 33.45H186.15L186.825 31.275H190.425L191.175 33.45H193.125L189.6 24.075H187.725L184.2 33.45ZM187.425 29.775L188.625 26.25L189.825 29.775H187.425ZM193.5 33.45H195.375L196.125 31.275H199.725L200.475 33.45H202.425L198.9 24.075H196.95L193.5 33.45ZM196.725 29.775L197.925 26.25L199.125 29.775H196.725ZM203.7 33.45H205.35V27.375L208.95 33.45H210.75V24.075H209.1V30.3L205.425 24.075H203.7V33.45Z"
                                fill="#13406A" />
                            <path
                                d="M79.575 19.125H81.45V16.35L82.875 14.775L85.35 19.125H87.675L84.15 13.425L87.525 9.82501H85.05L81.45 13.95V9.82501H79.575V19.125ZM88.875 19.125H95.625V17.55H90.675V15H95.175V13.425H90.675V11.4H95.475V9.82501H88.875V19.125ZM97.425 19.125H99.075V11.775L100.8 19.125H102.525L104.325 11.775V19.125H105.975V9.82501H103.275L101.7 16.125L100.125 9.82501H97.425V19.125ZM108.075 19.125H114.9V17.55H109.95V15H114.45V13.425H109.95V11.4H114.75V9.82501H108.075V19.125ZM116.7 19.125H118.35V13.05L121.95 19.125H123.75V9.82501H122.1V16.05L118.425 9.82501H116.7V19.125ZM125.25 11.4H127.95V19.125H129.75V11.4H132.375V9.82501H125.25V11.4ZM133.8 19.125H140.625V17.55H135.6V15H140.1V13.425H135.6V11.4H140.4V9.82501H133.8V19.125ZM142.35 19.125H144.225V15.225H144.525C144.975 15.225 145.275 15.3 145.425 15.3C145.575 15.375 145.65 15.375 145.725 15.45C145.8 15.45 145.875 15.6 145.95 15.675C146.1 15.825 146.475 16.35 146.925 17.1L148.2 19.125H150.375L149.25 17.325C148.875 16.575 148.5 16.125 148.275 15.75C147.975 15.45 147.675 15.225 147.3 15C148.875 14.7 149.625 13.875 149.625 12.375C149.625 11.25 149.1 10.425 148.2 10.05C147.75 9.90001 147.075 9.82501 146.1 9.82501H142.35V19.125ZM144.225 13.725V11.4H145.575C145.95 11.4 146.25 11.4 146.475 11.4C146.7 11.4 146.775 11.4 146.85 11.4C147.45 11.55 147.75 11.925 147.825 12.525C147.75 13.125 147.525 13.5 147.15 13.65C146.925 13.725 146.325 13.725 145.5 13.725H144.225ZM151.575 19.125H153.375V9.82501H151.575V19.125ZM154.275 19.125H156.15L156.9 17.025H160.5L161.25 19.125H163.2L159.675 9.82501H157.725L154.275 19.125ZM157.5 15.45L158.7 12L159.9 15.45H157.5ZM164.475 19.125H166.125V13.05L169.725 19.125H171.525V9.82501H169.875V16.05L166.2 9.82501H164.475V19.125Z"
                                fill="#13406A" />
                            <path
                                d="M79.575 47.7H81.45V43.8H81.825C82.275 43.875 82.575 43.875 82.725 43.95C82.8 43.95 82.875 44.025 83.025 44.025C83.1 44.1 83.175 44.175 83.25 44.25C83.4 44.475 83.7 44.925 84.225 45.675L85.5 47.7H87.6L86.55 45.9C86.1 45.225 85.8 44.7 85.5 44.4C85.275 44.1 84.9 43.8 84.525 43.575C86.1 43.275 86.925 42.45 86.925 41.025C86.85 39.825 86.4 39.075 85.5 38.7C85.05 38.475 84.375 38.4 83.4 38.4H79.575V47.7ZM81.45 42.375V39.975H82.875C83.175 39.975 83.475 39.975 83.7 39.975C83.925 39.975 84.075 39.975 84.15 40.05C84.75 40.125 85.05 40.5 85.05 41.175C85.05 41.7 84.825 42.075 84.375 42.225C84.15 42.3 83.625 42.375 82.8 42.375H81.45ZM88.875 47.7H95.7V46.125H90.75V43.65H95.175V42.075H90.75V39.975H95.55V38.4H88.875V47.7ZM97.425 47.7H99.3V44.175H100.425C101.7 44.25 102.675 44.025 103.2 43.65C103.875 43.2 104.25 42.375 104.25 41.25C104.25 40.875 104.25 40.575 104.175 40.275C104.1 39.975 103.95 39.75 103.8 39.525C103.575 39.15 103.275 38.925 102.975 38.775C102.75 38.625 102.45 38.55 102.075 38.475C101.7 38.4 101.1 38.4 100.35 38.4H97.425V47.7ZM99.3 42.6V39.975H100.125C100.875 39.975 101.325 39.975 101.55 40.05C101.775 40.125 101.925 40.275 102.15 40.425C102.225 40.575 102.3 40.725 102.375 40.875C102.375 41.025 102.375 41.175 102.375 41.325C102.375 41.55 102.375 41.85 102.225 42C102.075 42.225 101.925 42.375 101.625 42.45C101.4 42.6 100.875 42.6 100.275 42.6H99.3ZM105.75 43.35C105.75 44.175 105.825 44.85 105.9 45.375C105.975 45.9 106.125 46.35 106.425 46.8C106.725 47.1 107.025 47.4 107.475 47.55C108 47.775 108.6 47.85 109.425 47.85C110.175 47.85 110.775 47.775 111.225 47.55C111.6 47.4 111.975 47.175 112.2 46.875C112.5 46.575 112.65 46.125 112.8 45.6C112.875 45.075 112.95 44.325 112.95 43.275V38.4H111.075V43.575C111.075 44.1 111.075 44.55 111 44.85C111 45.15 110.925 45.375 110.85 45.525C110.7 45.825 110.475 46.05 110.175 46.125C109.95 46.275 109.65 46.275 109.35 46.275C109.05 46.275 108.75 46.2 108.525 46.125C108.225 45.975 108 45.75 107.85 45.45C107.775 45.375 107.7 45.225 107.7 45C107.625 44.775 107.625 44.25 107.625 43.425V38.4H105.75V43.35ZM115.05 38.4V47.7H118.125C119.175 47.7 119.925 47.7 120.375 47.625C120.525 47.625 120.75 47.55 120.9 47.55C121.05 47.475 121.2 47.4 121.35 47.325C121.65 47.175 121.95 46.875 122.175 46.425C122.4 46.05 122.55 45.6 122.55 45C122.55 43.875 121.95 43.125 120.825 42.75C121.65 42.375 122.1 41.625 122.1 40.725C122.1 40.35 122.025 39.975 121.8 39.6C121.65 39.3 121.35 39 121.05 38.85C120.825 38.625 120.45 38.55 120.15 38.475C119.775 38.4 119.25 38.4 118.65 38.4H115.05ZM116.925 42.15V39.975H117.9C118.725 39.975 119.25 39.975 119.4 39.975C119.55 39.975 119.625 40.05 119.7 40.05C119.775 40.05 119.85 40.05 119.85 40.125C120.15 40.275 120.3 40.575 120.375 41.025C120.375 41.25 120.3 41.475 120.225 41.625C120.075 41.775 120 41.85 119.85 41.925C119.7 42 119.55 42.075 119.4 42.075C119.175 42.075 118.725 42.15 118.05 42.15H116.925ZM116.925 46.125V43.65H118.35C118.95 43.65 119.4 43.65 119.625 43.725C119.925 43.725 120.075 43.875 120.225 43.95C120.525 44.175 120.675 44.55 120.675 44.925C120.675 45.225 120.6 45.45 120.525 45.6C120.375 45.75 120.3 45.9 120.075 45.975C120 46.05 119.85 46.125 119.625 46.125C119.4 46.125 119.1 46.125 118.575 46.125H116.925ZM124.35 47.7H130.725V46.125H126.225V38.475H124.35V47.7ZM132.075 47.7H133.95V38.4H132.075V47.7ZM135.75 47.7H137.625V44.925L139.05 43.35L141.525 47.7H143.85L140.325 42.075L143.625 38.4H141.225L137.625 42.525V38.4H135.75V47.7Z"
                                fill="#13406A" />
                            <path
                                d="M79.575 62.025H81.45V52.7248H79.575V62.025ZM83.25 62.025H84.9V55.9499L88.5 62.025H90.3V52.7248H88.65V58.9499L85.05 52.7248H83.25V62.025ZM92.475 62.025H95.85C96.6 62.025 97.2 61.95 97.65 61.725C98.1 61.575 98.475 61.35 98.775 61.125C99.525 60.375 99.9 59.1749 99.975 57.4499C99.975 56.4749 99.825 55.6498 99.6 55.0498C99.375 54.4498 99.15 53.9998 98.85 53.7748C98.625 53.5498 98.475 53.3998 98.325 53.3248C98.175 53.1748 97.95 53.0248 97.725 52.9498C97.35 52.7998 96.675 52.7248 95.775 52.7248H92.475V62.025ZM94.35 60.45V54.2998H95.175C95.925 54.2998 96.45 54.2998 96.75 54.3748C96.9 54.4498 97.05 54.4498 97.125 54.5248C97.275 54.5998 97.35 54.6748 97.425 54.8248C97.65 55.0498 97.8 55.3498 97.95 55.7248C98.025 56.0999 98.1 56.6999 98.1 57.3749C98.1 58.1249 98.025 58.6499 97.95 59.0999C97.8 59.475 97.65 59.775 97.425 60C97.275 60.15 97.05 60.3 96.825 60.375C96.675 60.375 96.525 60.375 96.3 60.45C96.225 60.45 96.15 60.45 96 60.45C95.925 60.45 95.775 60.45 95.7 60.45H94.35ZM101.325 57.3749C101.4 60.525 102.825 62.1 105.675 62.175C108.525 62.1 109.95 60.525 110.025 57.3749C109.95 54.1498 108.525 52.5748 105.675 52.4998C104.4 52.4998 103.35 52.8748 102.525 53.7748C101.775 54.5998 101.325 55.7998 101.325 57.3749ZM103.2 57.2999C103.275 55.1998 104.1 54.0748 105.675 54.0748C107.25 54.0748 108.075 55.1998 108.15 57.2999C108.075 59.475 107.25 60.6 105.675 60.6C104.925 60.6 104.4 60.3 103.95 59.775C103.425 59.1749 103.2 58.4249 103.2 57.2999ZM111.525 62.025H113.25V55.9499L116.775 62.025H118.575V52.7248H116.925V58.9499L113.325 52.7248H111.525V62.025ZM120.75 62.025H127.575V60.45H122.625V57.8999H127.125V56.3249H122.625V54.2998H127.425V52.7248H120.75V62.025ZM128.925 59.0249C129.15 61.125 130.35 62.175 132.6 62.175C133.35 62.175 134.025 62.1 134.55 61.8C135.075 61.65 135.45 61.275 135.75 60.825C136.05 60.375 136.125 59.85 136.2 59.3249C136.2 58.2749 135.75 57.4499 134.85 56.9249C134.4 56.6249 133.725 56.3999 132.825 56.1749C132.15 56.0249 131.625 55.7998 131.325 55.6498C131.1 55.4248 130.95 55.1998 130.95 54.9748C130.95 54.6748 131.1 54.3748 131.4 54.2998C131.7 54.1498 132.075 54.0748 132.45 54.0748C133.425 54.0748 133.95 54.5248 134.1 55.4248L135.9 55.3498C135.9 53.4748 134.7 52.5748 132.45 52.4998C131.4 52.4998 130.575 52.7998 130.05 53.2498C129.525 53.7748 129.225 54.3748 129.225 55.1248C129.225 56.5499 130.125 57.4499 132.075 57.9749C132.375 57.9749 132.675 58.0499 132.975 58.1999C133.275 58.2749 133.5 58.3499 133.65 58.4249C133.95 58.5749 134.1 58.7249 134.175 58.7999C134.25 59.0249 134.325 59.1749 134.325 59.3249C134.325 59.7 134.175 60 133.875 60.225C133.575 60.45 133.125 60.6 132.6 60.6C131.475 60.6 130.875 60 130.65 58.7999L128.925 59.0249ZM137.625 62.025H139.5V52.7248H137.625V62.025ZM140.4 62.025H142.275L143.025 59.925H146.55L147.375 62.025H149.325L145.725 52.7248H143.85L140.4 62.025ZM143.55 58.3499L144.75 54.8998L146.025 58.3499H143.55Z"
                                fill="#13406A" />
                        </g>
                        <defs>
                            <clipPath id="clip0_7_951">
                                <rect width="211.5" height="72" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>

            <div class="xl:w-1/4 md:w-1/2 p-4">
                <div class=" p-6 rounded-lg">
                    <svg width="226" height="72" viewBox="0 0 226 72" fill="none" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g clip-path="url(#clip0_7_961)">
                            <rect x="0.5" width="225" height="72" fill="url(#pattern0)" />
                        </g>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_7_961" transform="scale(0.002 0.00625)" />
                            </pattern>
                            <clipPath id="clip0_7_961">
                                <rect width="225" height="72" fill="white" transform="translate(0.5)" />
                            </clipPath>
                            <image id="image0_7_961" width="500" height="160"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>

                </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <div class=" p-6 rounded-lg">
                    <svg width="259" height="48" viewBox="0 0 259 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_7_991)">
                            <path
                                d="M50.5504 13.5652C48.5486 11.5647 45.9987 10.2026 43.2229 9.65106C40.4471 9.09953 37.5701 9.38335 34.9556 10.4667C32.3411 11.55 30.1065 13.3842 28.5343 15.7373C26.962 18.0904 26.1228 20.8569 26.1226 23.687C26.1317 26.3641 25.1919 28.9579 23.47 31.0078C21.748 33.0577 19.3554 34.4311 16.7169 34.8841C14.0783 35.3372 11.3646 34.8406 9.05752 33.4825C6.75039 32.1244 4.9992 29.9927 4.1148 27.4658C3.2304 24.9389 3.27003 22.1805 4.22666 19.6801C5.1833 17.1796 6.99503 15.0992 9.3402 13.8079C11.6854 12.5167 14.4122 12.0982 17.0367 12.6269C19.6611 13.1556 22.0133 14.5971 23.6756 16.6957C23.7993 16.8498 23.9521 16.9781 24.1254 17.0732C24.2986 17.1683 24.4889 17.2284 24.6854 17.2499C24.8818 17.2715 25.0806 17.2542 25.2704 17.1988C25.4601 17.1436 25.6371 17.0515 25.7913 16.9279C25.9454 16.8042 26.0737 16.6513 26.1688 16.4781C26.264 16.3048 26.324 16.1146 26.3456 15.9181C26.3671 15.7216 26.3497 15.5229 26.2945 15.3331C26.2392 15.1434 26.1471 14.9663 26.0234 14.8122C23.9204 12.1596 20.9457 10.3376 17.6271 9.66958C14.3086 9.00154 10.8606 9.53064 7.89498 11.163C4.92939 12.7952 2.63783 15.4252 1.42686 18.5864C0.215895 21.7475 0.163803 25.2355 1.27983 28.4313C2.39586 31.6272 4.60785 34.3245 7.5234 36.0446C10.4389 37.7648 13.8695 38.3965 17.2066 37.8279C20.5437 37.2593 23.5714 35.527 25.7528 32.9384C27.9341 30.3497 29.1279 27.0721 29.1226 23.687C29.1186 21.0118 30.0621 18.4218 31.7857 16.3759C33.5092 14.33 35.9016 12.9604 38.5385 12.5102C41.1755 12.0599 43.8867 12.5578 46.1915 13.9158C48.4964 15.2737 50.2458 17.4039 51.1299 19.9288C52.014 22.4536 51.9755 25.2099 51.0212 27.7091C50.0669 30.2082 48.2585 32.2887 45.9167 33.5817C43.5748 34.8747 40.8507 35.2967 38.2274 34.7729C35.604 34.2491 33.2509 32.8132 31.5852 30.72C31.4612 30.5662 31.3081 30.4383 31.1346 30.3436C30.9612 30.249 30.7708 30.1894 30.5744 30.1683C30.3779 30.1473 30.1792 30.1651 29.9897 30.2208C29.8001 30.2766 29.6234 30.3691 29.4696 30.4931C29.3157 30.6171 29.1878 30.7702 29.0932 30.9436C28.9985 31.117 28.939 31.3074 28.9179 31.5039C28.8968 31.7003 28.9146 31.899 28.9704 32.0886C29.0261 32.2781 29.1186 32.4549 29.2426 32.6087C30.4565 34.1308 31.9683 35.3893 33.6855 36.307C35.4026 37.2248 37.2889 37.7825 39.229 37.9461C41.169 38.1096 43.1221 37.8756 44.9687 37.2583C46.8152 36.641 48.5163 35.6535 49.968 34.356C51.4197 33.0586 52.5914 31.4786 53.4116 29.7128C54.2313 27.9469 54.6826 26.0323 54.7368 24.0861C54.7916 22.1399 54.4483 20.203 53.7283 18.394C53.0088 16.585 51.9272 14.9419 50.5504 13.5652Z"
                                fill="#32D320" />
                            <path
                                d="M27.6304 11.0087C26.5413 11.0107 25.4761 10.6897 24.5695 10.0861C23.663 9.48256 22.9558 8.62362 22.5376 7.61802C22.1194 6.61242 22.0089 5.50534 22.2201 4.43691C22.4313 3.36848 22.9548 2.38672 23.7241 1.61588C24.4935 0.84504 25.4742 0.319767 26.5423 0.106533C27.6103 -0.106701 28.7176 0.00169285 29.724 0.417996C30.7304 0.834297 31.5906 1.5398 32.196 2.44521C32.8012 3.35062 33.1243 4.41524 33.1243 5.50435C33.1229 6.96193 32.544 8.35962 31.5143 9.3913C30.4846 10.423 29.088 11.0046 27.6304 11.0087ZM27.6304 2.99999C27.1351 2.99999 26.6509 3.14687 26.2391 3.42205C25.8272 3.69723 25.5062 4.08836 25.3167 4.54597C25.1271 5.00358 25.0776 5.50711 25.1742 5.9929C25.2708 6.4787 25.5093 6.92494 25.8595 7.27518C26.2098 7.62543 26.656 7.86391 27.1418 7.96059C27.6276 8.05722 28.1312 8.0076 28.5888 7.81805C29.0464 7.6285 29.4375 7.30753 29.7127 6.89567C29.9879 6.48386 30.1348 5.99963 30.1348 5.50435C30.1348 4.84015 29.8709 4.20316 29.4013 3.7335C28.9316 3.26384 28.2946 2.99999 27.6304 2.99999Z"
                                fill="#32D320" />
                            <path
                                d="M14.9417 18.2609C16.0134 18.2619 17.0608 18.5806 17.9514 19.1766C18.8421 19.7727 19.5361 20.6193 19.9457 21.6096C20.3554 22.6 20.4623 23.6895 20.2529 24.7406C20.0436 25.7916 19.5274 26.7571 18.7696 27.5149C18.0118 28.2727 17.0464 28.7888 15.9953 28.9982C14.9442 29.2075 13.8548 29.1006 12.8644 28.691C11.8741 28.2813 11.0274 27.5873 10.4314 26.6967C9.83533 25.806 9.51665 24.7587 9.51561 23.687C9.51701 22.2483 10.0891 20.8689 11.1064 19.8516C12.1237 18.8344 13.503 18.2622 14.9417 18.2609ZM14.9417 15.2609C13.2752 15.2609 11.6461 15.7551 10.2604 16.6809C8.87475 17.6068 7.79475 18.9227 7.15703 20.4624C6.51926 22.0021 6.35241 23.6963 6.67755 25.3308C7.00265 26.9653 7.80514 28.4667 8.98359 29.6451C10.162 30.8235 11.6633 31.626 13.2978 31.9511C14.9324 32.2762 16.6265 32.1094 18.1662 31.4717C19.7059 30.8339 21.0219 29.7539 21.9478 28.3683C22.8736 26.9826 23.3678 25.3535 23.3678 23.687C23.3678 22.5804 23.1498 21.4847 22.7264 20.4624C22.303 19.4402 21.6823 18.5112 20.8998 17.7288C20.1174 16.9464 19.1885 16.3257 18.1662 15.9022C17.144 15.4788 16.0482 15.2609 14.9417 15.2609Z"
                                fill="#32D320" />
                            <path
                                d="M40.6739 18.2609C41.7454 18.263 42.7923 18.5825 43.6822 19.1792C44.5722 19.7758 45.2654 20.6229 45.6742 21.6133C46.0831 22.6037 46.1892 23.6931 45.9793 24.7438C45.7694 25.7945 45.2528 26.7594 44.4948 27.5167C43.7368 28.274 42.7713 28.7897 41.7204 28.9986C40.6695 29.2075 39.5803 29.1003 38.5902 28.6905C37.6002 28.2807 36.7539 27.5867 36.158 26.6961C35.5622 25.8056 35.2437 24.7585 35.2426 23.687C35.244 22.2474 35.8169 20.8673 36.8352 19.8498C37.8537 18.8324 39.2344 18.2609 40.6739 18.2609ZM40.6739 15.2609C39.007 15.2588 37.3769 15.7513 35.9898 16.6759C34.6028 17.6005 33.5212 18.9157 32.8818 20.4552C32.2425 21.9947 32.0741 23.6892 32.3981 25.3244C32.722 26.9596 33.5237 28.462 34.7016 29.6414C35.8797 30.8209 37.381 31.6244 39.0158 31.9504C40.6506 32.2763 42.3453 32.1101 43.8856 31.4727C45.4259 30.8352 46.7425 29.7552 47.6688 28.3693C48.5951 26.9835 49.0896 25.3539 49.0896 23.687C49.0896 21.454 48.2033 19.3124 46.6253 17.7325C45.0474 16.1526 42.9069 15.2636 40.6739 15.2609Z"
                                fill="#32D320" />
                            <path
                                d="M31.5383 45.7461H23.7122C23.3929 45.7422 23.0801 45.6549 22.805 45.4928C22.5298 45.3308 22.3018 45.0996 22.1436 44.8222C21.9854 44.5448 21.9025 44.2308 21.9031 43.9115C21.9037 43.5922 21.9878 43.2785 22.147 43.0017L26.0653 36.2191C26.2263 35.9419 26.4573 35.7118 26.7352 35.5519C27.0131 35.3919 27.3281 35.3077 27.6487 35.3077C27.9693 35.3077 28.2844 35.3919 28.5622 35.5519C28.8401 35.7118 29.0711 35.9419 29.2322 36.2191L33.1505 43.0017C33.3097 43.2785 33.3938 43.5922 33.3944 43.9115C33.395 44.2308 33.3121 44.5448 33.1539 44.8222C32.9956 45.0996 32.7676 45.3308 32.4925 45.4928C32.2173 45.6549 31.9046 45.7422 31.5853 45.7461H31.5383ZM25.46 42.8974H29.7748L27.6305 39.1617L25.46 42.8974Z"
                                fill="#32D320" />
                            <path
                                d="M99.0252 4.8783V38.087H91.3348V24.48H76.2409V38.087H68.5557V4.8783H76.2461V17.9792H91.3348V4.8783H99.0252Z"
                                fill="black" />
                            <path
                                d="M122.78 31.9565C123.853 31.5319 124.829 30.8948 125.65 30.0835L129.589 34.3565C127.185 37.1078 123.674 38.4835 119.055 38.4835C116.41 38.5366 113.789 37.9589 111.411 36.7983C109.289 35.7561 107.511 34.1262 106.288 32.1026C105.07 30.0527 104.445 27.7045 104.483 25.32C104.446 22.9392 105.061 20.5935 106.262 18.5374C107.426 16.5508 109.119 14.9255 111.15 13.8418C113.305 12.6982 115.714 12.1185 118.152 12.1565C120.462 12.1333 122.742 12.6704 124.799 13.7218C126.774 14.7339 128.426 16.2793 129.568 18.1826C130.793 20.2744 131.409 22.667 131.347 25.0905L112.46 28.7426C112.951 29.9577 113.85 30.9646 115.001 31.5913C116.314 32.2613 117.775 32.588 119.248 32.5409C120.451 32.5649 121.648 32.3668 122.78 31.9565ZM113.597 19.5913C112.425 20.7913 111.808 22.4522 111.745 24.5739L124.178 22.1531C123.869 20.8786 123.121 19.7537 122.065 18.9757C120.931 18.1675 119.565 17.7516 118.173 17.7913C117.327 17.7561 116.483 17.898 115.695 18.208C114.907 18.518 114.193 18.9891 113.597 19.5913Z"
                                fill="black" />
                            <path
                                d="M162.051 12.5687V33.8296C162.051 38.5113 160.865 41.9896 158.493 44.2644C156.121 46.5392 152.674 47.68 148.152 47.687C145.852 47.7002 143.561 47.3965 141.343 46.7844C139.396 46.2747 137.567 45.3885 135.959 44.1757L138.902 38.8592C140.073 39.7947 141.409 40.5026 142.841 40.9461C144.356 41.4471 145.941 41.7043 147.536 41.7079C150.006 41.7079 151.81 41.1392 152.947 40.0018C154.084 38.8644 154.655 37.1253 154.658 34.7844V33.9131C153.699 34.8736 152.549 35.6219 151.283 36.1096C149.952 36.6228 148.536 36.8812 147.109 36.8713C143.755 36.8713 141.098 35.9148 139.136 34.0018C137.175 32.0887 136.194 29.2174 136.194 25.3879V12.5687H143.597V24.2922C143.597 28.4383 145.321 30.5113 148.768 30.5113C149.562 30.5449 150.355 30.4077 151.092 30.1089C151.829 29.8101 152.494 29.3566 153.041 28.7792C154.116 27.6244 154.653 25.9079 154.653 23.6296V12.5687H162.051Z"
                                fill="black" />
                            <path
                                d="M171.354 36.1774C169.74 34.6435 168.933 32.4679 168.933 29.6505V2.88525H176.326V29.2174C176.267 30.1251 176.564 31.0202 177.156 31.7113C177.463 32.0139 177.832 32.2484 178.236 32.3993C178.641 32.5503 179.072 32.6146 179.503 32.5878C179.895 32.587 180.286 32.5397 180.667 32.447C180.989 32.3785 181.299 32.2661 181.59 32.1131L181.924 37.8522C180.684 38.2638 179.385 38.4717 178.079 38.4679C175.209 38.4783 172.968 37.7148 171.354 36.1774Z"
                                fill="black" />
                            <path
                                d="M211.032 12.5687V38.087H203.978V35.16C202.142 37.3756 199.485 38.4835 196.006 38.4835C193.728 38.5158 191.48 37.9606 189.479 36.8713C187.543 35.8069 185.954 34.2099 184.898 32.2696C183.758 30.1413 183.187 27.7547 183.239 25.3409C183.187 22.927 183.758 20.5405 184.898 18.4122C185.954 16.472 187.544 14.8751 189.479 13.8105C191.48 12.7214 193.728 12.1661 196.006 12.1983C199.265 12.1983 201.813 13.2261 203.65 15.2818V12.5687H211.032ZM201.917 30.4852C203.152 29.2052 203.77 27.4887 203.77 25.3357C203.77 23.1826 203.152 21.4661 201.917 20.1861C200.673 18.955 198.993 18.2644 197.243 18.2644C195.492 18.2644 193.812 18.955 192.568 20.1861C191.333 21.4661 190.716 23.1826 190.716 25.3357C190.716 27.4887 191.333 29.2052 192.568 30.4852C193.812 31.7163 195.492 32.4069 197.243 32.4069C198.993 32.4069 200.673 31.7163 201.917 30.4852Z"
                                fill="black" />
                            <path
                                d="M258.239 12.5687V26.6557C258.239 30.4226 257.211 33.3339 255.156 35.3896C253.1 37.4452 250.173 38.4731 246.375 38.4731C244.725 38.5031 243.085 38.2162 241.543 37.6279C240.132 37.0557 238.907 36.1019 238.006 34.8731C237.112 36.0971 235.897 37.0504 234.495 37.6279C232.916 38.2326 231.234 38.5232 229.543 38.4835C225.718 38.4835 222.791 37.4557 220.763 35.4C218.735 33.3444 217.722 30.4331 217.726 26.6661V12.5792H225.13V26.087C225.13 28.2087 225.493 29.774 226.22 30.7826C226.947 31.7913 228.086 32.2905 229.637 32.28C231.22 32.28 232.391 31.7739 233.149 30.7618C233.907 29.7496 234.286 28.1913 234.286 26.087V12.5687H241.69V26.087C241.69 28.1739 242.069 29.7252 242.827 30.7409C243.585 31.7566 244.756 32.2627 246.338 32.2592C247.886 32.2592 249.025 31.76 249.756 30.7618C250.486 29.7635 250.85 28.1983 250.846 26.0661V12.5687H258.239Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_7_991">
                                <rect width="258.261" height="48" fill="white" transform="translate(0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <svg width="200" height="64" viewBox="0 0 200 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.15029 27.5143C8.15029 27.5143 8.39845 23.2322 9.47377 21.3481C10.0185 20.3936 11.2072 17.935 12.3085 15.6568C13.3811 13.4381 14.3708 11.3908 14.6022 11.0713C15.0713 10.4238 15.7603 9.70108 16.9183 8.84467C18.0764 7.98826 20.0615 7.47443 20.5579 7.47443H40.0791C41.7335 7.47443 43.3879 8.6734 45.0423 9.87235C46.6965 11.0713 50.1707 14.497 50.5015 14.8395C50.8325 15.1821 50.8325 15.5246 50.8325 15.6959V18.9502C50.8325 19.4962 50.4341 19.8887 50.2322 20.0877C50.2087 20.1108 50.1879 20.1314 50.1707 20.1492C50.0053 20.3206 49.509 20.6631 49.0126 20.6631H20.227C20.227 20.6631 17.7455 21.1769 16.2566 22.8898C14.7677 24.6025 13.9405 27.343 13.9405 27.343V34.1943V42.2445C13.9405 42.9296 14.4368 45.8414 16.2566 47.5542C18.0764 49.2671 19.3998 49.9522 20.7234 49.9522H49.0126C49.8398 49.9522 50.9979 50.466 50.9979 51.4937V54.7479C50.9979 55.6745 49.8398 56.4608 49.1781 56.4608H19.069C17.5801 56.4608 14.0805 55.2619 11.6117 52.3501C9.14291 49.4382 7.98486 46.869 7.98486 45.1563C7.98486 43.4434 8.15029 27.5143 8.15029 27.5143ZM19.8962 35.2221C19.8962 33.3302 21.4299 31.7965 23.3218 31.7965H47.9031C49.795 31.7965 51.3287 33.3302 51.3287 35.2221C51.3287 37.114 49.795 38.6477 47.9031 38.6477H23.3218C21.4299 38.6477 19.8962 37.114 19.8962 35.2221ZM77.6704 19.6205C78.357 19.6205 78.9092 19.8434 79.3269 20.2894C79.7449 20.7357 79.9538 21.3362 79.9538 22.091V53.9005C79.9538 54.6896 79.7449 55.3074 79.3269 55.7534C78.939 56.1995 78.4018 56.4226 77.7152 56.4226C77.0286 56.4226 76.4764 56.1995 76.0587 55.7534C75.6706 55.3074 75.4766 54.6896 75.4766 53.9005V51.8416C74.8199 53.3515 73.8649 54.5181 72.6112 55.3417C71.3575 56.1309 69.9099 56.5255 68.2683 56.5255C66.3879 56.5255 64.7015 55.9766 63.2091 54.8784C61.7465 53.7803 60.5973 52.2363 59.7616 50.2461C58.9557 48.2557 58.5527 45.9739 58.5527 43.4002C58.5527 40.7924 58.9557 38.5104 59.7616 36.5545C60.5973 34.5986 61.7465 33.0887 63.2091 32.0251C64.6717 30.9613 66.3581 30.4294 68.2683 30.4294C69.9099 30.4294 71.3426 30.8413 72.5664 31.6647C73.8201 32.4541 74.7751 33.5863 75.4318 35.0619V21.9881C75.4318 21.2674 75.6258 20.7014 76.0139 20.2894C76.4318 19.8434 76.984 19.6205 77.6704 19.6205ZM69.3428 52.4079C71.283 52.4079 72.7902 51.6358 73.8649 50.0916C74.9394 48.5474 75.4766 46.3513 75.4766 43.5031C75.4766 40.6551 74.9394 38.4591 73.8649 36.9149C72.8201 35.3707 71.3127 34.5986 69.3428 34.5986C67.3728 34.5986 65.8357 35.3707 64.7314 36.9149C63.6567 38.4247 63.1195 40.5865 63.1195 43.4002C63.1195 46.2141 63.6716 48.4274 64.776 50.04C65.8805 51.6185 67.4027 52.4079 69.3428 52.4079ZM111.331 30.4294C116.226 30.4294 118.674 33.8095 118.674 40.5693V53.9519C118.674 54.7412 118.465 55.3588 118.047 55.805C117.629 56.2167 117.077 56.4226 116.39 56.4226C115.734 56.4226 115.196 56.2167 114.778 55.805C114.361 55.3588 114.152 54.7412 114.152 53.9519V40.6208C114.152 38.5277 113.823 37.0178 113.167 36.0912C112.51 35.1305 111.48 34.6502 110.077 34.6502C108.436 34.6502 107.137 35.3021 106.182 36.6061C105.227 37.8756 104.75 39.6256 104.75 41.8562V53.9519C104.75 54.7412 104.541 55.3588 104.123 55.805C103.705 56.2167 103.153 56.4226 102.466 56.4226C101.809 56.4226 101.272 56.2167 100.854 55.805C100.436 55.3588 100.228 54.7412 100.228 53.9519V40.6208C100.228 38.5277 99.8992 37.0178 99.2425 36.0912C98.586 35.1305 97.5561 34.6502 96.1532 34.6502C94.5117 34.6502 93.1984 35.3021 92.2133 36.6061C91.2581 37.8756 90.7806 39.6256 90.7806 41.8562V53.9519C90.7806 54.7412 90.5717 55.3588 90.1538 55.805C89.736 56.2167 89.1988 56.4226 88.542 56.4226C87.8853 56.4226 87.3332 56.2167 86.8855 55.805C86.4676 55.3588 86.2587 54.7412 86.2587 53.9519V33.003C86.2587 32.248 86.4825 31.6477 86.9301 31.2015C87.378 30.7554 87.9152 30.5323 88.542 30.5323C89.1689 30.5323 89.6763 30.7554 90.0644 31.2015C90.4821 31.6134 90.691 32.1966 90.691 32.9515V34.856C91.3477 33.4148 92.2581 32.3167 93.4222 31.5618C94.5863 30.807 95.9294 30.4294 97.4517 30.4294C99.1232 30.4294 100.496 30.824 101.571 31.6134C102.675 32.4025 103.496 33.6206 104.033 35.2678C104.69 33.7922 105.66 32.6256 106.943 31.7677C108.227 30.8756 109.689 30.4294 111.331 30.4294ZM143.401 31.2015C143.014 30.7554 142.476 30.5323 141.79 30.5323C141.103 30.5323 140.551 30.7726 140.133 31.253C139.715 31.699 139.506 32.2996 139.506 33.0544V45.1502C139.506 47.312 138.969 49.045 137.895 50.349C136.85 51.6528 135.447 52.3049 133.686 52.3049C132.194 52.3049 131.089 51.8244 130.373 50.8637C129.657 49.9028 129.298 48.4102 129.298 46.3856V33.0544C129.298 32.2653 129.089 31.6477 128.671 31.2015C128.283 30.7554 127.746 30.5323 127.06 30.5323C126.343 30.5323 125.776 30.7554 125.358 31.2015C124.97 31.6477 124.776 32.2653 124.776 33.0544V46.437C124.776 53.1627 127.433 56.5255 132.746 56.5255C134.238 56.5255 135.581 56.1481 136.775 55.3931C137.999 54.6382 138.954 53.5401 139.641 52.099V54.055C139.641 54.7755 139.835 55.3588 140.223 55.805C140.611 56.2167 141.118 56.4226 141.745 56.4226C142.431 56.4226 142.984 56.1995 143.401 55.7534C143.819 55.3074 144.028 54.7239 144.028 54.0034V33.0544C144.028 32.2653 143.819 31.6477 143.401 31.2015ZM168.713 52.099C169.25 52.6137 169.519 53.2486 169.519 54.0034C169.519 54.6553 169.325 55.2215 168.937 55.7019C168.549 56.1824 168.086 56.4226 167.549 56.4226C166.982 56.4226 166.474 56.1824 166.026 55.7019L154.878 44.3782V53.9005C154.878 54.7239 154.669 55.3588 154.251 55.805C153.833 56.2167 153.296 56.4226 152.64 56.4226C151.983 56.4226 151.431 56.2167 150.983 55.805C150.565 55.3588 150.356 54.7239 150.356 53.9005V22.1424C150.356 21.319 150.565 20.7014 150.983 20.2894C151.431 19.8434 151.983 19.6205 152.64 19.6205C153.296 19.6205 153.833 19.8434 154.251 20.2894C154.669 20.7014 154.878 21.319 154.878 22.1424V42.3193L165.086 31.3559C165.594 30.8413 166.086 30.5838 166.564 30.5838C167.131 30.5838 167.623 30.824 168.041 31.3044C168.459 31.7849 168.668 32.351 168.668 33.003C168.668 33.655 168.414 34.2555 167.907 34.8045L159.937 43.1943L168.713 52.099ZM192.021 31.2015C191.634 30.7554 191.095 30.5323 190.409 30.5323C189.723 30.5323 189.172 30.7726 188.752 31.253C188.334 31.699 188.126 32.2996 188.126 33.0544V45.1502C188.126 47.312 187.589 49.045 186.514 50.349C185.47 51.6528 184.066 52.3049 182.306 52.3049C180.812 52.3049 179.708 51.8244 178.992 50.8637C178.276 49.9028 177.918 48.4102 177.918 46.3856V33.0544C177.918 32.2653 177.709 31.6477 177.291 31.2015C176.903 30.7554 176.366 30.5323 175.679 30.5323C174.963 30.5323 174.396 30.7554 173.978 31.2015C173.59 31.6477 173.396 32.2653 173.396 33.0544V46.437C173.396 53.1627 176.052 56.5255 181.365 56.5255C182.859 56.5255 184.201 56.1481 185.396 55.3931C186.619 54.6382 187.573 53.5401 188.26 52.099V54.055C188.26 54.7755 188.455 55.3588 188.843 55.805C189.23 56.2167 189.739 56.4226 190.364 56.4226C191.051 56.4226 191.604 56.1995 192.021 55.7534C192.439 55.3074 192.647 54.7239 192.647 54.0034V33.0544C192.647 32.2653 192.439 31.6477 192.021 31.2015Z"
                        fill="#407BFF" />
                </svg>
            </div>
        </div>
        <div class="mr-auto ml-[640px] block items-center my-16">
            <button type="button"
                class="bg-transparent hover:bg-[#F2404D]  h-18 w-24 text-black font-semibold hover:text-white py-2 px-4 border border-[#F2404D] hover:border-transparent rounded-lg">
                More
            </button>
        </div>

    </div>
</aside>
<!-- seventh slide -->

<!-- eighth slide -->
<aside>
    <div class="bg-white my-16 h-72">
        <div class="flex">
            <div class="flex items-center justify-center my-4 mx-auto">
                <a class="flex items-center py-6 px-4 space-x-2">
                    <img src="{{ asset('img/Shield (2).png') }}" />
                    <span class="font-semibold text-black text-3xl">Partner Pembayaran </span>
                </a>
            </div>
        </div>
        <div class="md:max-w-[69rem] mx-auto">
            <div class="flex flex-wrap -m-5 items-center">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="p-6 rounded-lg">
                        <img src="{{ asset('img/logo-bca.png') }}" alt="">
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class=" p-6 rounded-lg">
                        <img src="{{ asset('img/logo-bni.png') }}" alt="">
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class=" p-6 rounded-lg">
                        <img src="{{ asset('img/logo-mandiri.png') }}" alt="">
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <img src="{{ asset('img/logo-bri.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- eighth slide -->
@endsection