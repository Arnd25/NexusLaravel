<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-[#0C0E14] text-white min-h-screen flex flex-col gap-10">
    <header class="text-[#CBC3D7]">
        <div class="flex shadow-[0_1px_8px_rgba(0,0,0,0.4)] flex-col">
            <x-container class="flex justify-between items-center py-2 font-semibold">
                <div class="flex items-center gap-3 ">
                    <div class="flex items-center gap-2 font-bold text-[#f5a623]">
                        <span class="h-2 aspect-square rounded-full bg-[#f5a623]"></span>
                        ТРЕНДЫ:
                    </div>
                    <div class="flex gap-2 items-center ">
                        <p>GTA VI</p>
                        <span class="h-1.5 aspect-square rounded-full bg-[#494454]"></span>
                        <p>Cyberpunk Orion</p>
                        <span class="h-1.5 aspect-square rounded-full bg-[#494454]"></span>
                        <p>RTX 5090</p>
                        <span class="h-1.5 aspect-square rounded-full bg-[#494454]"></span>
                        <p>The Witcher 4</p>
                        <span class="h-1.5 aspect-square rounded-full bg-[#494454]"></span>
                        <p>Steam Spring Sale</p>
                    </div>

                </div>
                <div class="flex h-full gap-1 items-center">
                    <div class="flex gap-1 items-center">
                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.45417 7.58333L8.75 4.2875L7.90417 3.44167L5.43958 5.90625L4.21458 4.68125L3.38333 5.5125L5.45417 7.58333ZM3.20833 9.33333C2.32361 9.33333 1.56771 9.02708 0.940625 8.41458C0.313542 7.80208 0 7.05347 0 6.16875C0 5.41042 0.228472 4.73472 0.685417 4.14167C1.14236 3.54861 1.74028 3.16944 2.47917 3.00417C2.72222 2.10972 3.20833 1.38542 3.9375 0.83125C4.66667 0.277083 5.49306 0 6.41667 0C7.55417 0 8.5191 0.396181 9.31146 1.18854C10.1038 1.9809 10.5 2.94583 10.5 4.08333C11.1708 4.16111 11.7274 4.45035 12.1698 4.95104C12.6122 5.45174 12.8333 6.0375 12.8333 6.70833C12.8333 7.4375 12.5781 8.05729 12.0677 8.56771C11.5573 9.07812 10.9375 9.33333 10.2083 9.33333H3.20833ZM3.20833 8.16667H10.2083C10.6167 8.16667 10.9618 8.02569 11.2437 7.74375C11.5257 7.46181 11.6667 7.11667 11.6667 6.70833C11.6667 6.3 11.5257 5.95486 11.2437 5.67292C10.9618 5.39097 10.6167 5.25 10.2083 5.25H9.33333V4.08333C9.33333 3.27639 9.04896 2.58854 8.48021 2.01979C7.91146 1.45104 7.22361 1.16667 6.41667 1.16667C5.60972 1.16667 4.92188 1.45104 4.35313 2.01979C3.78438 2.58854 3.5 3.27639 3.5 4.08333H3.20833C2.64444 4.08333 2.16319 4.28264 1.76458 4.68125C1.36597 5.07986 1.16667 5.56111 1.16667 6.125C1.16667 6.68889 1.36597 7.17014 1.76458 7.56875C2.16319 7.96736 2.64444 8.16667 3.20833 8.16667Z" fill="#4CD7F6"/>
                        </svg>

                        <p>Серверы: Online</p>
                    </div>
                    <div class=" w-0.5 h-6 bg-[#494454]"></div>
                    <p>v4.8 Cyber Core</p>

                </div>


            </x-container>
        </div>
        <div class="bg-[#151820] shadow-[0_4px_24px_rgba(0,0,0,0.6)] py-3">
            <x-container class=" flex gap-3 items-center">
                <x-ui.logo/>
                <nav>
                    <ul class="flex gap-2 items-center bg-dark-card p-1 rounded-lg">
                        <li class="px-4 py-1 text-[#340080] bg-[#A078FF] rounded-lg">
                            <a class="font-semibold text-lg transition-colors duration-200 hover:text-white" href="/">Главная</a>
                        </li>
                        <li class="px-4 rounded-lg">
                            <a class="font-semibold text-lg leading-none transition-colors duration-200 hover:text-white" href="/">Статьи и лонгриды</a>
                        </li>
                        <li class="px-4 rounded-lg">
                            <a class="font-semibold text-lg transition-colors duration-200 hover:text-white" href="/">Обзоры</a>
                        </li>
                        <li class="px-4 rounded-lg">
                            <a class="font-semibold text-lg transition-colors duration-200 hover:text-white" href="/">Гайды</a>
                        </li>
                        <li class="px-4 py-1 rounded-lg">
                            <a class="font-semibold text-lg transition-colors duration-200 hover:text-white" href="/">Железо</a>
                        </li>
                        <li class="px-4 py-1 rounded-lg">
                            <a class="font-semibold text-lg transition-colors duration-200 hover:text-white" href="/">Турниры</a>
                        </li>
                    </ul>
                </nav>
                <div class="flex items-center rounded-2xl bg-[#0C0E14] p-1">
                    <a href="#" class="rounded-full bg-[#4CD7F61A]/40 px-3 p-0.5 font-bold text-[#4CD7F6]">
                        PC
                    </a>
                    <a href="#" class="rounded-full px-3 p-0.5 font-bold text-[#D0BCFF] transition-colors duration-200 hover:text-white">
                        PS5
                    </a>

                    <a href="#" class="rounded-full px-3 p-0.5 font-bold text-[#FFB95F] transition-colors duration-200 hover:text-white">
                        XBOX
                    </a>

                    <a href="#" class="rounded-full px-3 p-0.5 font-bold text-[#FFB4AB] transition-colors duration-200 hover:text-white">
                        SWITCH
                    </a>
                </div>
                <div class=" flex items-center rounded-lg w-full px-3 bg-[#0C0E14]">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.45 13.5L7.725 8.775C7.35 9.075 6.91875 9.3125 6.43125 9.4875C5.94375 9.6625 5.425 9.75 4.875 9.75C3.5125 9.75 2.35938 9.27813 1.41562 8.33438C0.471875 7.39063 0 6.2375 0 4.875C0 3.5125 0.471875 2.35938 1.41562 1.41562C2.35938 0.471875 3.5125 0 4.875 0C6.2375 0 7.39063 0.471875 8.33438 1.41562C9.27813 2.35938 9.75 3.5125 9.75 4.875C9.75 5.425 9.6625 5.94375 9.4875 6.43125C9.3125 6.91875 9.075 7.35 8.775 7.725L13.5 12.45L12.45 13.5ZM4.875 8.25C5.8125 8.25 6.60938 7.92188 7.26562 7.26562C7.92188 6.60938 8.25 5.8125 8.25 4.875C8.25 3.9375 7.92188 3.14062 7.26562 2.48438C6.60938 1.82812 5.8125 1.5 4.875 1.5C3.9375 1.5 3.14062 1.82812 2.48438 2.48438C1.82812 3.14062 1.5 3.9375 1.5 4.875C1.5 5.8125 1.82812 6.60938 2.48438 7.26562C3.14062 7.92188 3.9375 8.25 4.875 8.25Z" fill="#958EA0"/>
                    </svg>

                    <input
                        type="text"
                        placeholder="Поиск игр, новостей, обзоров..."
                        class="w-full bg-transparent  p-2 text-white outline-none placeholder:text-[#958EA0]"
                    >

                </div>
                <button class="w-20 cursor-pointer">
                    <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 17V15H2V8C2 6.61667 2.41667 5.3875 3.25 4.3125C4.08333 3.2375 5.16667 2.53333 6.5 2.2V1.5C6.5 1.08333 6.64583 0.729167 6.9375 0.4375C7.22917 0.145833 7.58333 0 8 0C8.41667 0 8.77083 0.145833 9.0625 0.4375C9.35417 0.729167 9.5 1.08333 9.5 1.5V2.2C10.8333 2.53333 11.9167 3.2375 12.75 4.3125C13.5833 5.3875 14 6.61667 14 8V15H16V17H0ZM8 20C7.45 20 6.97917 19.8042 6.5875 19.4125C6.19583 19.0208 6 18.55 6 18H10C10 18.55 9.80417 19.0208 9.4125 19.4125C9.02083 19.8042 8.55 20 8 20ZM4 15H12V8C12 6.9 11.6083 5.95833 10.825 5.175C10.0417 4.39167 9.1 4 8 4C6.9 4 5.95833 4.39167 5.175 5.175C4.39167 5.95833 4 6.9 4 8V15Z" fill="#CBC3D7"/>
                    </svg>

                </button>
            </x-container>
        </div>
    </header>
    <main class="flex flex-col gap-10">
        {{$slot}}
    </main>
    <footer class="mt-auto  w-full shadow-[0_-8px_32px_rgba(0,0,0,0.8)] py-10">
        <x-container class="flex flex-col gap-4 text-[#CBC3D7]">
            <div class="grid grid-cols-5 gap-10">
                <div class="flex flex-col gap-2 col-span-2">
                    <x-ui.logo/>
                    <p>Премиальное игровое медиа, аналитика индустрии и
                        независимые рецензии. Мы исследуем виртуальные
                        миры с технической точностью и художественной
                        страстью.</p>
                    <div class="flex items-center gap-2">
                        <a href="#" class="aspect-square w-9 bg-dark-card flex items-center justify-center rounded-lg">
                            <img src="{{asset('storage/FooterIcon1.svg')}}" alt="">
                        </a>
                         <a href="#" class="aspect-square w-9 bg-dark-card flex items-center justify-center rounded-lg">
                             <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.625 9.375L10.875 6L5.625 2.625V9.375ZM1.5 12C1.0875 12 0.734375 11.8531 0.440625 11.5594C0.146875 11.2656 0 10.9125 0 10.5V1.5C0 1.0875 0.146875 0.734375 0.440625 0.440625C0.734375 0.146875 1.0875 0 1.5 0H13.5C13.9125 0 14.2656 0.146875 14.5594 0.440625C14.8531 0.734375 15 1.0875 15 1.5V10.5C15 10.9125 14.8531 11.2656 14.5594 11.5594C14.2656 11.8531 13.9125 12 13.5 12H1.5ZM1.5 10.5H13.5V1.5H1.5V10.5ZM1.5 10.5V1.5V10.5Z" fill="#CBC3D7"/>
                            </svg>
                        </a>
                         <a href="#" class="aspect-square w-9 bg-dark-card flex items-center justify-center rounded-lg">
                             <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 12V0L14.25 6L0 12ZM1.5 9.75L10.3875 6L1.5 2.25V4.875L6 6L1.5 7.125V9.75ZM1.5 9.75V6V2.25V4.875V7.125V9.75Z" fill="#CBC3D7"/>
                            </svg>
                        </a>
                         <a href="#" class="aspect-square w-9 bg-dark-card flex items-center justify-center rounded-lg">
                             <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.625 9.375L10.875 6L5.625 2.625V9.375ZM4.5 13.5V12H1.5C1.0875 12 0.734375 11.8531 0.440625 11.5594C0.146875 11.2656 0 10.9125 0 10.5V1.5C0 1.0875 0.146875 0.734375 0.440625 0.440625C0.734375 0.146875 1.0875 0 1.5 0H13.5C13.9125 0 14.2656 0.146875 14.5594 0.440625C14.8531 0.734375 15 1.0875 15 1.5V10.5C15 10.9125 14.8531 11.2656 14.5594 11.5594C14.2656 11.8531 13.9125 12 13.5 12H10.5V13.5H4.5ZM1.5 10.5H13.5V1.5H1.5V10.5ZM1.5 10.5V1.5V10.5Z" fill="#CBC3D7"/>
                            </svg>
                        </a>
                         <a href="#" class="aspect-square w-9 bg-dark-card flex items-center justify-center rounded-lg">
                             <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.625 9.375L10.875 6L5.625 2.625V9.375ZM4.5 13.5V12H1.5C1.0875 12 0.734375 11.8531 0.440625 11.5594C0.146875 11.2656 0 10.9125 0 10.5V1.5C0 1.0875 0.146875 0.734375 0.440625 0.440625C0.734375 0.146875 1.0875 0 1.5 0H13.5C13.9125 0 14.2656 0.146875 14.5594 0.440625C14.8531 0.734375 15 1.0875 15 1.5V10.5C15 10.9125 14.8531 11.2656 14.5594 11.5594C14.2656 11.8531 13.9125 12 13.5 12H10.5V13.5H4.5ZM1.5 10.5H13.5V1.5H1.5V10.5ZM1.5 10.5V1.5V10.5Z" fill="#CBC3D7"/>
                            </svg>
                        </a>
                    </div>

                </div>
                <div class="flex flex-col gap-3">
                    <h2 class="font-bold uppercase text-white">
                        Разделы
                    </h2>
                    <nav class="flex flex-col gap-2">
                        <a href="#" class=" transition-colors duration-200 hover:text-white">
                            Обзоры
                        </a>
                        <a href="#" class="  transition-colors duration-200 hover:text-white">
                            Новости
                        </a>
                        <a href="#" class=" transition-colors duration-200 hover:text-white">
                            Статьи
                        </a>
                        <a href="#" class="  transition-colors duration-200 hover:text-white">
                            База игр
                        </a>
                    </nav>
                </div>
                <div class="flex flex-col gap-3">
                    <h2 class="font-bold uppercase text-white">
                        Платформы
                    </h2>
                    <nav class="flex flex-col gap-2">
                        <a href="#" class=" transition-colors duration-200 hover:text-white">
                            PC Gaming
                        </a>
                        <a href="#" class="  transition-colors duration-200 hover:text-white">
                            PlayStation 5
                        </a>
                        <a href="#" class=" transition-colors duration-200 hover:text-white">
                            Xbox Series X|S
                        </a>
                        <a href="#" class="  transition-colors duration-200 hover:text-white">
                            Nintendo Switch
                        </a>
                        <a href="#" class="  transition-colors duration-200 hover:text-white">
                            Мобильные
                        </a>
                    </nav>
                </div>
                <div class="flex flex-col gap-3">
                    <h2 class="font-bold uppercase text-white">
                        Редакция
                    </h2>
                    <nav class="flex flex-col gap-2">
                        <a href="#" class=" transition-colors duration-200 hover:text-white">
                            О проекте
                        </a>
                        <a href="#" class="  transition-colors duration-200 hover:text-white">
                            Авторы
                        </a>
                        <a href="#" class=" transition-colors duration-200 hover:text-white">
                            Вакансии
                        </a>
                        <a href="#" class="  transition-colors duration-200 hover:text-white">
                            Реклама
                        </a>
                        <a href="#" class="  transition-colors duration-200 hover:text-white">
                            Контакты
                        </a>
                    </nav>
                </div>
            </div>
            <div class="flex items-center justify-between font-semibold">
                <p>© 2025 NEXUS Media. Все права защищены.</p>
                <div class="flex items-center gap-6">
                    <a class="hover:text-white transition-colors duration-300" href="#">
                        Политика конфиденциальности
                    </a>
                    <a class="hover:text-white transition-colors duration-300" href="#">
                        Правила комьюнити
                    </a>
                    <p class="text-[#FFB95F] bg-dark-card px-1.5 py-0.5 rounded-lg">18+</p>
                </div>
            </div>
        </x-container>
    </footer>
</body>
</html>
