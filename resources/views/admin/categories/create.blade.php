<x-admin-layout title="Новая категория">
    <x-admin.head
        title="Новая категория"
        subtitle="создание категории для услуг"
        href="{{route('admin.categories.index')}}"
        link="назад"
    />
    <x-admin.form action="{{route('admin.categories.store')}}" method="POST">
        <x-admin.input name="name" label="Название категории" placeholder="Название: веб-разработка" />
        <x-admin.checkbox name="is_active" label="Категория активна" :checked="true"/>
    </x-admin.form>
</x-admin-layout>
