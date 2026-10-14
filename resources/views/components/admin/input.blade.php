@props(['name', 'label'=> null,'type'=> 'text'])

<div class="mt-5">
    @if($label)
        <label for="{{$name}}" class="block text-sm font-semibold text-slate-700 mb-2">{{$label}}</label>
    @endif
    <input
        type="{{$type}}"
        name="{{$name}}"
        id="{{$name}}"
        value="{{old($name)}}"
        {{$attributes->merge([
            'class'=> 'w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm text-slate-800'
            ])
        }}
    >
    @error($name)
        <p class="mt-1.5 text-xs font-medium text-rose-500">{{$message}}</p>
    @enderror
</div>
