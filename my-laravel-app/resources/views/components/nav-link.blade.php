@props(['active' => false])
<a 
    style="{{$active ? 'color: green' : 'color: blue'}}"
    class="rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{$active ? 'page' : false}}"
    {{$attributes}}>
    {{$slot}}
</a>