<x-admin-layout title="Просмотр услуги">
    <x-admin.head
        title="{{ $category->name }}"
        subtitle="Подробная информация о услуге"
        href="{{ route('admin.categories.index') }}"
        link="Назад"
    />
        <div class="bg-white rounded-xl border shadow-lg border-slate-300 p-4">
            <h3 class="text-lg font-bold text-slate-600 uppercase mb-1">Сводка</h3>
            <dl class="grid grid-cols-2 text-sm gap-2">
                <div class="flex justify-between items-center py-2 px-4 ">
                    <dt class="text-slate-800">ID</dt>
                    <dd class="font-mono text-xs text-slate-600 font-semibold">{{ $category->id }}</dd>
                </div>
                <div class="flex justify-between items-center py-2 px-4     ">
                    <dt class="text-slate-800">Название</dt>
                    <dd class="font-mono text-xs text-slate-600 font-semibold">{{ $category->name }}</dd>
                </div>
                <div class="flex justify-between items-center border-t py-2 px-4 border-gray-300">
                    <dt class="text-slate-800 font-se">Статус</dt>
                    <dd>
                        @if($category->is_active)
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
                <div class="flex justify-between items-center border-t py-2 px-4 border-gray-300">
                    <dt class="text-slate-800">Кол-во услуг</dt>
                    <dd class="font-mono text-xs text-slate-600 font-semibold">{{count($category->services)}}</dd>
                </div>

                <div class="flex justify-between items-center border-t py-2 px-4 border-gray-300">
                    <dt class="text-slate-800">Создана</dt>
                    <dd class="text-slate-700">{{ $category->created_at->format('d.m.Y H:i') }}</dd>
                </div>
                <div class="flex justify-between items-center border-t py-2 px-4 border-gray-300">
                    <dt class="text-slate-800">Обновлена</dt>
                    <dd class="text-slate-700">{{ $category->updated_at->format('d.m.Y H:i') }}</dd>
                </div>
            </dl>
        </div>
</x-admin-layout>
