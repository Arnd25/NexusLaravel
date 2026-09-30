<x-layout>
    <x-hero/>
    <x-articles/>
        <x-container class="grid grid-cols-12 gap-10">
            <x-posts/>
            <div class="col-span-4 flex flex-col gap-3">
                <x-home.monthly-releases/>
                <x-home.top-discussions/>
                <x-home.editors-choice/>
                <x-home.subscribe-form/>
            </div>
        </x-container>
</x-layout>
