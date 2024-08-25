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
        "about" => "Hakkında Bilgi",
        "kat" => "Kat",
        "blok" => "Blok",
        "ara_odeme_tarih" => "Ara Ödeme Tarihi",
        "ara_odeme_tutar" => "Ara Ödeme Tutar",
        "takas_deger" => "Takas Değeri",
        "extra_odeme" => "Extra Ödeme",
        "extra_odeme" => "Aylık Bütçe"
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