<x-admin-layout title="Новая категория">
    <div class="flex items-center justify-between mb-2">
        <div class="">
            <h2 class="text-xl font-bold text-gray-200">Новая категория</h2>
            <p class="text-sm text-gray-500 mt-0.5">Создайте новую категорию услуги</p>
        </div>
        <a class="inline-flex items-center gap-2 rounded-lg bg-indigo-800 text-white px-4 py-2.5"
           href="{{route('admin.categories.index')}}">
            Назад
        </a>
    </div>
    <div class="bg-white rounded-lg border-slate-300 p-8">
        <form action="{{route('admin.categories.store')}}" method="POST">
            @method('POST')
            @csrf
            <x-admin.input name="name" label="Название категории" placeholder="Название: веб-разработка" />
            <x-admin.checkbox name="is_active" label="Категория активна" :checked="true"/>
            <div class="pt-4 mt-4 border-t border-slate-100 flex justify-end">
                <x-admin.button>Сохранить</x-admin.button>
            </div>
        </form>
    </div>
</x-admin-layout>
