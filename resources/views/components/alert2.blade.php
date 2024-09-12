<div
    class="alert alert-{{$class}}"
    role="alert"
>
    <strong>{{$title ?? "Alerta"}}</strong> {{$slot}}
    <p>{{$attributes}}</p>
</div>
