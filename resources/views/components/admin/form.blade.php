@props(['action', 'method'=> 'POST'])

<div class="bg-white rounded-lg border-slate-300 p-8">
    <form action="{{$action}}" method="{{$method}}" enctype="multipart/form-data">
        @csrf
        {{$slot}}
        <div class="pt-4 mt-4 border-t border-slate-100 flex justify-end">
            <x-admin.button>Сохранить</x-admin.button>
        </div>
    </form>
</div>
