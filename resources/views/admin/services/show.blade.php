<x-admin-layout title="Просмотр услуги">
    <x-admin.head
        title="{{ $service->title }}"
        subtitle="Подробная информация о услуге"
        href="{{ route('admin.services.index') }}"
        link="Назад"
    />
    <div class="bg-white rounded-lg border border-slate-300 p-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
        @if($service->images)
            <div class="bg-white rounded-lg border border-slate-200 p-6">
                <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wide mb-3">Изображения
                    ({{ count($service->images) }})</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    @foreach($service->images as $image)
                        <a href="{{ asset('storage/' . $image) }}" target="_blank">
                            <img src="{{ asset('storage/' . $image) }}" alt=""
                                 class="w-full h-40 object-cover rounded-lg border border-slate-200 hover:opacity-90 transition">
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="space-y-6">
            <div class="bg-white rounded-lg border border-slate-200 p-6">
                <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wide mb-4">Сводка</h3>
                <dl class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <dt class="text-slate-500">ID</dt>
                        <dd class="font-mono text-xs text-slate-400">{{ $service->id }}</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-slate-500">Статус</dt>
                        <dd>
                            @if($service->is_active)
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    Активна
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-rose-50 text-rose-700 border border-rose-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                                    Отключена
                                </span>
                            @endif
                        </dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-slate-500">Создана</dt>
                        <dd class="text-slate-700">{{ $service->created_at->format('d.m.Y H:i') }}</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-slate-500">Обновлена</dt>
                        <dd class="text-slate-700">{{ $service->updated_at->format('d.m.Y H:i') }}</dd>
                    </div>
                </dl>
            </div>

            @if($service->tags)
                <div class="bg-white rounded-lg border border-slate-200 p-6">
                    <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wide mb-3">Теги</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($service->tags as $tag)
                            <span
                                class="px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600 border border-slate-200">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        <div class="bg-white rounded-lg border border-slate-200 p-6">
            <h3 class="text-sm font-semibold text-slate-700 uppercase tracking-wide mb-4">Описание</h3>
            <p class="text-slate-500">{{ $service->description }}</p>
        </div>
    </div>
</x-admin-layout>
