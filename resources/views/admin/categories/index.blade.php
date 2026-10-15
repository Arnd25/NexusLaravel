<x-admin-layout title="Категории">
    <x-admin.head
        title="Управление категориями"
        subtitle="управлениями категориими для услуг"
        href="{{route('admin.categories.create')}}"
        link="Создать категорию"
    />
    <div class="bg-white rounded-lg border border-state-200 shadow-sm overflow-hidden">
        <table class="w-full text-left text-sm text-slate-600 border-collapse">
            <thead class="bg-slate-50  border-b border-slate-200 text-sm font-semibold">
                <tr>
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Название</th>
                    <th class="px-6 py-4">Статус</th>
                    <th class="px-6 py-4">Дата создания</th>
                    <th class="px-6 py-4">Действия</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @forelse($categories as $category)
                    <tr class="hover:bg-slate-500/60 transition-colors">
                        <td class="px-6 py-4 text-shadow-slate-400 font-mono text-xs">{{$category->id}}</td>
                        <td class="px-6 py-4 text-shadow-slate-400 text-xs font-semibold">{{$category->name}}</td>
                        <td class="px-6 py-4">
                            @if($category->is_active)
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    Активна
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-rose-50 text-rose-700 border border-rose-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                                    Отключена
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-shadow-slate-400 text-xs font-semibold">
                            {{$category->created_at->format('d.m.Y')}}
                        </td>
                        <td class="px-6 py-4 text-shadow-slate-400 text-xs flex gap-2">
                            <a
                                class="text-slate-500 hover:text-slate-700 text-xs font-semibold"
                                href="{{route('admin.categories.show', $category)}}">Подробнее
                            </a>
                            <a
                                class="text-indigo-600 hover:text-indigo-800 text-xs font-semibold"
                                href="{{route('admin.categories.edit', $category)}}">Обновить
                            </a>
                        </td>

                    </tr>

                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-slate-300">
                            Категории пока не добавлены
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-admin-layout>
