<article class="flex gap-5 rounded-xl bg-dark-card p-6">
    <div class="relative aspect-square overflow-hidden rounded-lg">
        <img
            src="{{ asset('storage/post-card.jpg') }}"
            alt=""
            class="h-full w-full object-cover"
        >

        <div class="absolute left-3 top-3 rounded-lg bg-cyan px-3 py-1.5 text-lg font-extrabold items-center text-cyan-deep">
            8.5
            отлично
        </div>
    </div>

    <div class="flex min-w-0 flex-col justify-between">
        <div class="flex flex-col gap-4">
            <div class="flex items-center gap-2">
                <x-ui.platform-badge type="pc"/>
                <x-ui.platform-badge type="pc"/>

                <span class="text-xs aspect-square w-1.5 rounded-full bg-pointer"></span>

                <p class="text-lg text-muted">
                    Рецензия
                </p>

            </div>
            <h3 class="font-serif text-3xl font-bold text-secondary">
                Обзор Dragon Age: The
                Veilguard — Красочное фэнтези,
                застрявшее между эпохами
            </h3>
            <p class="text-lg text-main">
                Великолепный визуальный стиль, драйвовая
                динамическая боевка и яркие локации
                сталкиваются с безопасными диалогами и…
            </p>
            <div class="flex flex-wrap gap-2">
                <span class="rounded-md bg-[#282A30] px-2 py-1 text-lg text-cyan">
                    Бодрая боевка
                </span>
                <span class="rounded-md bg-[#282A30] px-2 py-1 text-lg text-cyan">
                    Бодрая боевка
                </span>
                <span class="rounded-md bg-[#282A30] px-2 py-1 text-lg text-cyan">
                    Бодрая боевка
                </span>
            </div>
        </div>
        <div class="flex items-center justify-between mt-10">
            <div class="">
                <span class="text-secondary text-lg">
                    Артем Зайцев
                </span>

                <span class="text-muted text-lg">
                     •
                    Вчера, 18:40
                </span>
            </div>
            <div class="flex gap-2 items-center">
                <button class="flex gap-1 items-center text-main">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 15L12 12H1.5C1.0875 12 0.734375 11.8531 0.440625 11.5594C0.146875 11.2656 0 10.9125 0 10.5V1.5C0 1.0875 0.146875 0.734375 0.440625 0.440625C0.734375 0.146875 1.0875 0 1.5 0H13.5C13.9125 0 14.2656 0.146875 14.5594 0.440625C14.8531 0.734375 15 1.0875 15 1.5V15ZM1.5 10.5H12.6375L13.5 11.3438V1.5H1.5V10.5ZM1.5 10.5V1.5V10.5Z" fill="#CBC3D7"/>
                    </svg>
                    96
                </button>

                <button class="flex gap-1 items-center">
                    <svg width="14" height="16" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 13.5V1.5C0 1.0875 0.146875 0.734375 0.440625 0.440625C0.734375 0.146875 1.0875 0 1.5 0H9C9.4125 0 9.76562 0.146875 10.0594 0.440625C10.3531 0.734375 10.5 1.0875 10.5 1.5V13.5L5.25 11.25L0 13.5ZM1.5 11.2125L5.25 9.6L9 11.2125V1.5H1.5V11.2125ZM1.5 1.5H9H5.25H1.5Z" fill="#CBC3D7"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

</article>
