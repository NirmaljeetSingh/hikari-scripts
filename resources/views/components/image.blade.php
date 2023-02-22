@php 
    $error = isset($error) ? $error : "/assets/img/user-profile-cover.jpg";
    $alt = isset($alt) ? $alt : '';
@endphp
<img src="{{ storageMedia($src) }}" alt="" onerror="this.src='{{ $error }}'" alt="{{$alt}}" @class(isset($class) ? $class : '')/>