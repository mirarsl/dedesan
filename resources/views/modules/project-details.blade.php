<div class="project-details-area space-top overflow-hidden">
    <div class="container">
        <div class="row gy-30 gx-30">
            <div class="col-12">
                <div class="single-page">
                    <div class="project-page-thumb mb-50">
                        <img class="w-100" src="{{asset($Page->image)}}" alt="{{$Page->title}}">
                        @if (count($Page->speciality) > 0)
                        <aside class="sidebar-area">
                            <div class="widget widget_project_info style2">
                                <h2 class="widget_title">Özellikler</h2>
                                <ul class="project-info-list border-0 p-0 m-0">
                                    @foreach ($Page->speciality as $item)
                                    <li><strong>{{$item->title}}<span>:</span></strong> <span>{{$item->text}}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                        @endif
                    </div>
                    <h2 class="sec-title mb-25">{{$Page->title}}</h2>
                    <div class="mb-50">
                        {!! $Page->text !!}
                    </div>
                    
                    <div class="product-tab-area">
                        <ul class="nav product-tab-style1" id="projectTab" role="tablist">
                            @foreach ($Page->blocks as $item)
                            <li class="service-card style4" role="presentation">
                                <a class="nav-link {{$loop->index == 0 ? 'active':''}}" id="{{Str::slug($item->title)}}-tab" data-bs-toggle="tab" href="#{{Str::slug($item->title)}}" role="tab" aria-controls="{{Str::slug($item->title)}}" aria-selected="false">{{$item->title}} Blok</a>
                            </li>
                            @endforeach
                        </ul>
                        @if ($Page->leftCount() > 0)
                        <div class="project-left">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h3>Satışlarımız Devam Ediyor. <strong>Son {{$Page->leftCount()}} Daire !</strong></h3>
                                    <span class="desig">Bilgi almak için teklif formumuzu doldurunuz.</span>
                                </div>
                                <div class="col-lg-3">
                                    <a data-fancybox href="#offer-form" class="btn btn-primary">Teklif Formu</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        <h2>Kat Planları</h2>
                        <div class="tab-content" id="projectTabContent">
                            @foreach ($Page->blocks as $block)
                            <div class="tab-pane row fade {{$loop->index == 0 ? ' show active':''}}" id="{{Str::slug($block->title)}}" role="tabpanel" aria-labelledby="{{Str::slug($block->title)}}-tab">
                                @foreach ($block->apartments as $apartment)
                                <div class="col-md-6">
                                    <div class="apartment">
                                        <a data-fancybox href="{{asset($apartment->image)}}"><img src="{{asset($apartment->image)}}" alt="{{$Page->title}} {{$block->title}} Blok {{$apartment->number}} No"></a>
                                        <div class="informations">
                                            <h3>{{$block->title}} Blok</h3>
                                            <h4>{{$apartment->floor}}</h4>
                                            <h5>No: {{$apartment->number}}</h5>
                                        </div>
                                        <div class="plan">
                                            <strong>Daire Planı</strong>
                                            {{$apartment->plan}}
                                        </div>
                                        @if (!(empty($apartment->metter)))
                                        <div class="plan">
                                            <strong>Metre²</strong>
                                            {{$apartment->metter}}
                                        </div>
                                        @endif
                                        <div class="status {{$apartment->type == 2 ? 'done':''}}">
                                            {{$apartment->getType()}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="offer-form" style="display:none;max-width:600px">
    <form action="{{route('store',)}}" method="POST">
        @csrf
        <input type="hidden" name="type" value="Ön Talep Formu">
        <input type="hidden" name="json[proje]" value="{{$Page->title}}">
        <div class="row gy-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">İsim</label>
                    <input type="text" class="form-control" name="json[isim]" id="name" placeholder="İsim" value="{{old('json.isim')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="surname">Soyisim</label>
                    <input type="text" class="form-control" name="json[soyisim]" id="surname" placeholder="Soyisim" value="{{old('json.soyisim')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-posta</label>
                    <input type="email" class="form-control" name="json[email]" id="email" placeholder="E-posta adresi" value="{{old('json.email')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="number">Telefon</label>
                    <input type="text" class="form-control" name="json[telefon]" id="number" placeholder="Telefon" value="{{old('json.telefon')}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="block">Blok</label>
                    <select name="json[blok]" id="block" class="single-select nice-select form-select">
                        <option disabled selected hidden>Blok Seçiniz</option>
                        @foreach ($Page->blocks as $block)
                        <option @checked(old('json.blok') == $block->title.' Blok') data-id="{{$block->id}}" value="{{$block->title}} Blok">{{$block->title}} Blok</option>                            
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="kat">Kat</label>
                    <select name="json[kat]" id="kat" class="single-select nice-select form-select">
                        <option disabled selected hidden>Kat Seçiniz</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="daire">Daire</label>
                    <select name="json[daire]" id="daire" class="single-select nice-select form-select">
                        <option disabled selected hidden>Daire Seçiniz</option>
                    </select>
                </div>
            </div>
            @push('scripts')
            <script>
                $('select#block').on('change',function(){
                    var block_id = $(this).children('option:selected').data('id');
                    $.ajax({
                        type: "POST",
                        url: "{{route('floors')}}",
                        data: {'block_id':block_id,'_token':'{{csrf_token()}}'},
                        success: function (response) {
                            $('select#kat').children('option').remove();
                            $('select#kat').append('<option disabled selected hidden>Kat Seçiniz</option>');
                            response.forEach(element => {
                                $('select#kat').append('<option data-id="'+element.kat+'" value="'+element.kat+'">'+element.kat+'</option>');
                            });
                            $('select#kat').niceSelect('update');
                        }
                    });
                });
                $('select#kat').on('change',function(){
                    var kat_id = $(this).children('option:selected').data('id');
                    $.ajax({
                        type: "POST",
                        url: "{{route('apartments')}}",
                        data: {'kat':kat_id,'block_id':$('select#block').children('option:selected').data('id'),'_token':'{{csrf_token()}}'},
                        success: function (response) {
                            $('select#daire').children('option').remove();
                            $('select#daire').append('<option disabled selected hidden>Daire Seçiniz</option>');
                            response.forEach(element => {
                                $('select#daire').append('<option value="No: '+element.daire+'">No: '+element.daire+' ('+element.daire_plani+')</option>');
                            });
                            $('select#daire').niceSelect('update');
                        }
                    });
                });
            </script>
            @endpush
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nakit">Nakit Peşinat</label>
                    <input type="text" data-inputmask="'alias':'currency'" class="form-control" name="json[nakit]" id="nakit" placeholder="Nakit Peşinat" value="{{old('json.nakit')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="aylik_butce">Aylık Ödeme Bütçesi</label>
                    <input type="text" data-inputmask="'alias':'currency'" class="form-control" name="json[aylik_butce]" id="aylik_butce" placeholder="Aylık Ödeme Bütçesi" value="{{old('json.aylik_butce')}}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="extra_odeme">Ara(extra) ödeme yapılacak mı?</label>
                    <select name="json[extra_odeme]" id="extra_odeme" class="single-select nice-select form-select">
                        <option disabled selected hidden>Seçiniz</option>
                        <option value="Evet">Evet</option>
                        <option value="Hayır">Hayır</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 extra_odeme" style="display: none">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ara_odeme_tutar">Ara Ödeme Tutar</label>
                            <input type="text" data-inputmask="'alias':'currency'" class="form-control" name="json[ara_odeme_tutar]" id="ara_odeme_tutar" placeholder="Ara Ödeme Tutar" value="{{old('json.ara_odeme_tutar')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ara_odeme_tarih">Ara Ödeme Tarihi</label>
                            <input type="date" class="form-control" name="json[ara_odeme_tarih]" id="ara_odeme_tarih" placeholder="Ara Ödeme Tarihi" value="{{old('json.ara_odeme_tarih')}}">
                        </div>
                    </div>
                </div>
            </div>
            @push('scripts')
            <script>
                $('select#extra_odeme').on('change',function(){
                    if($(this).val() == 'Evet'){
                        $('.extra_odeme').show();
                    }else{
                        $('.extra_odeme').hide();
                    }
                });
            </script>
            @endpush
            
            <div class="col-md-12">
                <div class="form-group">
                    <label for="takas">Takas yapacak mısınız?</label>
                    <select name="json[takas]" id="takas" class="single-select nice-select form-select">
                        <option disabled selected hidden>Seçiniz</option>
                        <option value="Evet">Evet</option>
                        <option value="Hayır">Hayır</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 takas" style="display: none">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="takas_deger">Takas Değeri</label>
                            <input type="text" data-inputmask="'alias':'currency'" class="form-control" name="json[takas_deger]" id="takas_deger" placeholder="Takas Değeri" value="{{old('json.takas_deger')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="takas_tanimi">Takas Tanımı</label>
                            <select name="json[takas_tanimi]" id="takas_tanimi" class="single-select nice-select form-select">
                                <option disabled selected hidden>Seçiniz</option>
                                <option value="Araç">Araç</option>
                                <option value="Gayrimenkul">Gayrimenkul</option>
                                <option value="Diğer">Diğer</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
            @push('scripts')
            <script>
                $('select#takas').on('change',function(){
                    if($(this).val() == 'Evet'){
                        $('.takas').show();
                    }else{
                        $('.takas').hide();
                    }
                });
            </script>
            @endpush
            
            <div class="col-12">
                <div class="form-group ">
                    <textarea name="json[mesaj]" id="message" cols="30" rows="3" class="form-control" placeholder="Mesajınız">{{old('json.mesaj')}}</textarea>
                </div>
            </div>
            <div class="form-btn col-12">
                <button class="btn w-100">Gönder <i class="ri-arrow-right-up-line"></i></button>
            </div>
        </div>
        <p class="form-messages mb-0 mt-3"></p>
    </form>
</div>
<div class="video-area overflow-hidden">
    <div class="video-wrap mt-20">
        <div class="container">
            <div class="gallery row">
                @foreach (json_decode($Page->gallery) as $item)
                <div class="col mb-3">
                    <a href="{{asset($item)}}" data-fancybox="gallery"><img src="{{asset($item)}}" alt="{{$Page->title}}"></a>
                </div>
                @endforeach 
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="" alt="">
            </div>
        </div>
    </div>
</div>


<div class="pt-60 pb-60 overflow-hidden">
    <div class="container">
        <div class="row justify-content-between align-items-center gy-40">
            <div class="col-lg-6">
                <div class="title-area text-md-start text-center">
                    <h2 class="sec-title">Features of Project</h2>
                </div>
                <div class="process-thumb2-1">
                    <img src="assets/img/normal/process-thumb2-1.png" alt="img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-grid-list style2">
                    <div class="process-grid-list-bg-text">
                        BENEFIT
                    </div>
                    <div class="process-grid">
                        <div class="process-grid-number">01</div>
                        <div class="process-grid-details">
                            <h3 class="process-grid-title">Advanced Technology </h3>
                            <p class="process-grid-text">We craft unique digital experiences. With more years of expertise we design </p>
                        </div>
                    </div>
                    <div class="process-grid">
                        <div class="process-grid-number">02</div>
                        <div class="process-grid-details">
                            <h3 class="process-grid-title">Trusted Company </h3>
                            <p class="process-grid-text">We craft unique digital experiences. With more years of expertise we design </p>
                        </div>
                    </div>
                    <div class="process-grid">
                        <div class="process-grid-number">03</div>
                        <div class="process-grid-details">
                            <h3 class="process-grid-title">Professional Teams </h3>
                            <p class="process-grid-text">We craft unique digital experiences. With more years of expertise we design </p>
                        </div>
                    </div>
                    <div class="process-grid">
                        <div class="process-grid-number">04</div>
                        <div class="process-grid-details">
                            <h3 class="process-grid-title">Stylistic formula method</h3>
                            <p class="process-grid-text">We craft unique digital experiences. With more years of expertise we design </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('links')
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/bindings/inputmask.binding.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    $(document).ready(function() {
        $(":input").inputmask();
    });
</script>
@if (session()->has('dialog'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Swal.fire({
        title: "{{session('status') == 'success' ? 'Success':'Error'}}",
        text: "{{session('message')}}",
        icon: "{{session('status')}}",
    });
</script>
@endif
@endpush