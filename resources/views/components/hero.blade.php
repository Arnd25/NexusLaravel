    <x-container>
        <div class="relative min-h-125 overflow-hidden rounded-xl bg-cover bg-center"
             style="background-image: url('{{ asset('storage/Hero.png') }}')">
            <div class="absolute inset-0 bg-linear-to-r from-darkBg via-[#0b0d14]/80 to-transparent"></div>
            <div class="absolute inset-0 bg-linear-to-t from-darkBg via-[#0b0d14]/80 to-transparent"></div>
            <div class="h-96 w-96 absolute rounded-full -top-1/2  translate-y-1/2 bg-purple/20 blur-[120px]">
            </div>
            <div class="relative pt-28 pl-10 pb-10 max-w-3xl flex flex-col gap-5">
                <div class="flex flex-wrap items-center gap-2">
                    <div class="rounded-full bg-purple px-2.5 py-1 text-xs uppercase font-bold flex items-center gap-1 text-purple-dark">
                        <span class="w-1.5 aspect-square rounded-full bg-purple-dark"></span>
                        В фокусе
                    </div>
                    <div class="text-xs font-semibold bg-[#33343BCC] px-2.5 py-1 rounded-full text-cyan">
                        PC • PS5 • Xbox Series X|S
                    </div>

                    <span class="rounded-full bg-[#33343BCC] px-2.5 py-1 text-xs text-main">
                            12 мин чтения
                    </span>

                    <span class="rounded-full bg-[#CA81004D]/30 px-2.5 py-1 text-xs font-semibold text-orange">
                            Авторский лонгрид
                    </span>

                </div>
                <h1
                    class=" font-bold text-5xl font-serif leading-none">
                    Главный эксклюзив года:
                    Почему следующий проект
                    авторов Ведьмака изменит жанр
                    RPG навсегда
                </h1>
                <p class="max-w-2xl py-2 text-lg text-main">
                    Первые подробности о революционной боевой системе, бесшовной
                    симуляции открытого мира на движке нового поколения и
                    бескомпромиссной свободе выбора в сюжетных разветвлениях.
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('storage/Алексей Соколов.png') }}" alt="" class="h-12 aspect-square rounded-full object-cover">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                    <span class="text-sm font-bold text-white-soft">
                                        Алексей Соколов
                                    </span>
                                <span class="rounded-full bg-[#D0BCFF1A]/40 px-2 py-1 text-sm font-semibold text-purple">
                                        Главный редактор
                                    </span>

                            </div>
                            <div class="flex items-center gap-2 text-sm text-main">
                                <span class="text-muted text-sm">28 минут назад</span>
                                <span class="w-1.5 aspect-square bg-muted rounded-full"></span>
                                <span class="flex gap-1">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3333 13.3333L10.6667 10.6667H1.33333C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333V1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0H12C12.3667 0 12.6806 0.130556 12.9417 0.391667C13.2028 0.652778 13.3333 0.966667 13.3333 1.33333V13.3333ZM1.33333 9.33333H11.2333L12 10.0833V1.33333H1.33333V9.33333ZM1.33333 9.33333V1.33333V9.33333Z" fill="#4CD7F6"/>
                                        </svg>
                                        142
                                    </span>
                                <span class="w-1.5 aspect-square bg-muted rounded-full"></span>
                                <span class="flex gap-1">
                                        <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.33333 8C8.16667 8 8.875 7.70833 9.45833 7.125C10.0417 6.54167 10.3333 5.83333 10.3333 5C10.3333 4.16667 10.0417 3.45833 9.45833 2.875C8.875 2.29167 8.16667 2 7.33333 2C6.5 2 5.79167 2.29167 5.20833 2.875C4.625 3.45833 4.33333 4.16667 4.33333 5C4.33333 5.83333 4.625 6.54167 5.20833 7.125C5.79167 7.70833 6.5 8 7.33333 8ZM7.33333 6.8C6.83333 6.8 6.40833 6.625 6.05833 6.275C5.70833 5.925 5.53333 5.5 5.53333 5C5.53333 4.5 5.70833 4.075 6.05833 3.725C6.40833 3.375 6.83333 3.2 7.33333 3.2C7.83333 3.2 8.25833 3.375 8.60833 3.725C8.95833 4.075 9.13333 4.5 9.13333 5C9.13333 5.5 8.95833 5.925 8.60833 6.275C8.25833 6.625 7.83333 6.8 7.33333 6.8ZM7.33333 10C5.71111 10 4.23333 9.54722 2.9 8.64167C1.56667 7.73611 0.6 6.52222 0 5C0.6 3.47778 1.56667 2.26389 2.9 1.35833C4.23333 0.452778 5.71111 0 7.33333 0C8.95556 0 10.4333 0.452778 11.7667 1.35833C13.1 2.26389 14.0667 3.47778 14.6667 5C14.0667 6.52222 13.1 7.73611 11.7667 8.64167C10.4333 9.54722 8.95556 10 7.33333 10ZM7.33333 8.66667C8.58889 8.66667 9.74167 8.33611 10.7917 7.675C11.8417 7.01389 12.6444 6.12222 13.2 5C12.6444 3.87778 11.8417 2.98611 10.7917 2.325C9.74167 1.66389 8.58889 1.33333 7.33333 1.33333C6.07778 1.33333 4.925 1.66389 3.875 2.325C2.825 2.98611 2.02222 3.87778 1.46667 5C2.02222 6.12222 2.825 7.01389 3.875 7.675C4.925 8.33611 6.07778 8.66667 7.33333 8.66667Z" fill="#CBC3D7"/>
                                        </svg>
                                        2.4k
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2">

                        <a href="#" class="flex items-center gap-2 rounded-lg bg-purple px-4 py-2 text-lg font-bold text-purple-dark">
                            Читать лонгрид
                            <img src="{{asset('storage/IconArrow.svg')}}" alt="">
                        </a>

                        <button class="flex p-4 items-center justify-center rounded-md bg-dark-card">
                            <img src="{{asset('storage/IconSave.svg')}}" alt="">
                        </button>

                        <button class="flex p-4 items-center justify-center rounded-md bg-dark-card">
                            <img src="{{asset('storage/IconRepost.svg')}}" alt="">
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </x-container>
