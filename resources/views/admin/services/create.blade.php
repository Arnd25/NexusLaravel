<x-admin-layout title="Новая услуга">
    <x-admin.head
        title="Новая услуга"
        subtitle="Создайте новую услугу"
        href="{{ route('admin.services.index') }}"
        link="Назад"
    />
    <x-admin.form action="{{ route('admin.services.store') }}">
        <div class="grid grid-cols-3 gap-4">
            <x-admin.select name="category_id" label="Категория" required>
                <option value="">Выберите категорию</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </x-admin.select>
            <x-admin.input
                name="title"
                label="Название услуги"
                placeholder="Название: разработка интернет-магазина"
                required
            />
            <x-admin.input
                name="tags"
                label="Теги"
                placeholder="через запятую: дизайн, логотип, брендинг"
                required
            />
        </div>
        <div class="mt-5">
            <label for="description" class="block text-sm font-semibold text-slate-700 mb-2">Описание</label>
            <textarea
                name="description"
                id="description"
                rows="5"
                placeholder="Подробное описание услуги..."
                class="w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900">{{ old('description') }}</textarea>
            @error('description')
            <p class="mt-1.5 text-xs font-medium text-rose-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="images" class="block text-sm font-semibold text-slate-700 mb-2">Изображения</label>
            <input
                type="file"
                name="images[]"
                id="images"
                multiple
                accept="image/*"
                class="w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900"
            >
            @error('images')
            <p class="mt-1.5 text-xs font-medium text-rose-500">{{ $message }}</p>
            @enderror
            @error('images.*')
            <p class="mt-1.5 text-xs font-medium text-rose-500">{{ $message }}</p>
            @enderror
        </div>

        <x-admin.checkbox name="is_active" label="Услуга активна" :checked="true" />
    </x-admin.form>
</x-admin-layout>
