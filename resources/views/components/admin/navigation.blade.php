<nav>
    <menu class="grid gap-3 font-medium text-gray-400 ">
        <li >
            <x-admin.nav-link href="{{route('admin.dashboard')}}">Панель администратора</x-admin.nav-link>
        </li>
        <li>
            <x-admin.nav-link href="{{route('admin.categories.index')}}">Категории</x-admin.nav-link>
        </li>
        <li>
            <x-admin.nav-link href="{{route('admin.services.index')}}">Услуги</x-admin.nav-link>
        </li>
    </menu>
</nav>
