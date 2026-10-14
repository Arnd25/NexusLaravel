<button
    {{$attributes->merge([
    'type'=>'submit',
    'class'=> 'inline-flex items-center cursor-pointer justify-center gap-2 rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white hover:bg-indigo-500',

])}}
>
    {{$slot}}
</button>
