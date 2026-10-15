<x-admin-layout title="Редактирование категории">
    <x-admin.head
        title="{{ $category->name }}"
        subtitle="Редактирование категории"
        href="{{ route('admin.categories.index') }}"
        link="Назад"
    />
    <x-admin.form action="{{ route('admin.categories.update', $category) }}" method="POST">
        @method('PUT')
        <x-admin.input name="name" label="Название" :value="old('name', $category->name)" required />
        <x-admin.checkbox name="is_active" label="Категория активна" :checked="old('is_active', $category->is_active)" />
    </x-admin.form>
</x-admin-layout>
