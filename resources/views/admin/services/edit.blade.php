<x-admin-layout title="Изменение услуги">
    <x-admin.head
        title="{{$service->title}}"
        subtitle="Изменение услуги"
        href="{{ route('admin.services.index') }}"
        link="Назад"
    />
    <x-admin.form action="{{ route('admin.services.update', $service) }}" method="POST">
        @method("PUT")
        <div class="grid grid-cols-3 gap-4">
            <x-admin.select name="category_id" label="Категория" required>
                <option value="">Выберите категорию</option>
                @foreach($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        @selected(old('category_id', $service->category_id == $category->id))
                    >
                    {{ $category->name }}
                    </option>
                @endforeach
            </x-admin.select>
            <x-admin.input
                name="title"
                label="Название услуги"
                placeholder="Название: разработка интернет-магазина"
                :value="old('title', $service->title)"
                required
            />
            <x-admin.input
                name="tags"
                label="Теги"
                placeholder="через запятую: дизайн, логотип, брендинг"
                :value="old('title', implode(',', $service->tags))"
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
                class="w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900">{{ old('description', $service->description) }}</textarea>
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
            @if($service->images)
                <div class="flex gap-4 mt-2">
                @foreach($service->images as $image)
                    <img src="{{asset('storage/'. $image)}}" alt="" class="h-full object-cover max-w-40">
                @endforeach
                </div>
            @endif
        </div>
    </x-admin.form>
</x-admin-layout>
