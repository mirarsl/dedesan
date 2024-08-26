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
        "extra_odeme" => "Extra ödeme var mı?",
        "isim" => "İsim",
        "soyisim" => "Soyisim",
        "daire" => "Daire",
        "nakit" => "Nakit Tutar",
        "proje" => "İlgili Proje",
        "takas" => "Takas var mı?",
        "aylik_butce" => "Aylık Bütçe",
        'telefon' => "Telefon",
        'takas_tanimi' => "Takas Tanımı",
        "mesaj" => "Mesaj"
    ];
    $sira = [
        'name','isim','soyisim','email', 'phone','subject','message', 'telefon','blok','kat','daire','nakit','aylik_butce','extra_odeme','ara_odeme_tutar','ara_odeme_tarih','takas','takas_deger','takas_tanimi','mesaj'
    ];
    $data = collect($data)->only($sira)->toArray();
@endphp
@foreach ($sira as $key)
    @if (array_key_exists($key, $data))
    <strong style="width:200px;display:inline-block">{{$lang[$key] ?? $key}}:</strong>
        @if ($key == "file")
        <a href="/{{asset($data[$key])}}" target="_blank">Görüntüle</a>
        @else
        {{$data[$key] ?? ''}} 
        @endif
        <br>
    @endif 
@endforeach 