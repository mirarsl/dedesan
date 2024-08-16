<br>
@php
    $data = json_decode($content);
    $lang = [
        'name' => "İsim",
        "surname" => "Soyisim",
        "email" => 'E-Posta',
        'phone' => "Telefon",
        'subject' => "Konu",
        "company" => 'Firma',
        'message' => "Mesaj",
        "file" => "Dosya",
        "about" => "Hakkında Bilgi"
    ];
@endphp
@foreach ($data as $key => $item)
    <strong style="width:100px;display:inline-block">{{$lang[$key] ?? $key}}:</strong>
    @if ($key == "file")
    <a href="/{{asset($item)}}" target="_blank">Görüntüle</a>
    @else
    {{$item}} 
    @endif
    <br>
@endforeach 