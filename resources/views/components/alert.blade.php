@props(['type' => "info"])
 @php
     switch ($type) {
        case 'success':
            $class = "success";
            break;
        case 'danger':
            $class = "danger";
            break;
        
        default:
            $class = "primary";
            break;
    }
 @endphp
<div
    class="alert alert-{{$class}}"
    role="alert"
>
    <strong>{{$title ?? "Alerta"}}</strong> {{$slot}}
    <p>{{$attributes}}</p>
</div>
