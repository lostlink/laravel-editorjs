@php
$tag = "h" . $data['level'] ?? 1;
@endphp

<{{ $tag }}>{{ $data['text'] ?? '' }}</{{ $tag }}>