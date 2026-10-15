<x-admin-layout>
    <x-admin.head
        title="упарваление услугами"
        subtitle="просмотр созданых усулг"
        href="{{route('admin.services.create')}}"
        link="создать новую слугу"/>
    <div class="bg-white rounded-lg border border-state-200 shadow-sm overflow-hidden">
        <table class="w-full text-left text-sm text-slate-600 border-collapse">
            <thead class="bg-slate-50  border-b border-slate-200 text-sm font-semibold">
            <tr>
                <th class="px-6 py-4">ID</th>
                <th class="px-6 py-4">Название</th>
                <th class="px-6 py-4">Категория</th>
                <th class="px-6 py-4">Дата создания</th>
                <th class="px-6 py-4">Действия</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
            @forelse($services as $service)
                <tr class="hover:bg-slate-500/60 transition-colors">
                    <td class="px-6 py-4 text-shadow-slate-400 font-mono text-xs">{{$service->id}}</td>
                    <td class="px-6 py-4 text-shadow-slate-400 text-xs font-semibold">{{$service->title}}</td>
                    <td class="px-6 py-4 text-shadow-slate-400 text-xs font-semibold">{{$service->category->name}}-{{$service->category->created_at}}</td>
                    <td class="px-6 py-4 text-shadow-slate-400 text-xs font-semibold">
                        {{$service->created_at->format('d.m.Y')}}
                    </td>
                    <td class="px-6 py-4 text-shadow-slate-400 text-xs flex gap-2">
                        <a
                            class="text-slate-500 hover:text-slate-700 text-xs font-semibold"
                            href="{{route('admin.services.show', $service)}}">
                            Подробнее
                        </a>
                        <a
                            class="text-slate-500 hover:text-slate-700 text-xs font-semibold"
                            href="{{route('admin.services.edit', $service)}}">
                            Обновить
                        </a>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-slate-300">
                        Услуги пока не добавлены
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

</x-admin-layout>
