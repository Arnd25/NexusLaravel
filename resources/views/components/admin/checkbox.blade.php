@props(['name','label'=> null, 'checked'=>false])

<div class="mt-5 flex flex-col gap-1">
    <input type="hidden" name="{{ $name }}" value="0">
    <label for="{{$name}}" class="block text-sm font-semibold text-slate-700 mb-2">{{$label}}</label>
    <input
        type="checkbox"
        name="{{$name}}"
        id="{{$name}}"
        value="1"
        {{old($name, $checked) ? 'checked': ''}}
        {{$attributes->merge([
            'class'=>'w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500/20 cursor-pointer'
        ])}}
    >
    @error($name)
        <p class="mt-1.5 text-xs font-medium text-rose-500">{{$message}}</p>
    @enderror
</div>
