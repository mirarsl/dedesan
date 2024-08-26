<section class="contact-area-2 space-bottom overflow-hidden">        
 <div class="container">
        @error('json.name')
        <div class="help-block with-errors">{{$message}}</div>
        @enderror
        @error('json.email')
        <div class="help-block with-errors">{{$message}}</div>
        @enderror
        @error('json.phone')
        <div class="help-block with-errors">{{$message}}</div>
        @enderror
        @error('json.message')
        <div class="help-block with-errors">{{$message}}</div>
        @enderror
  <div class="contact-wrap2 space overflow-hidden">
   <div class="row gy-60 justify-content-lg-end justify-content-center">
    <div class="col-xl-7">
     <div class="contact-form-wrap">
      <div class="title-area">
       <span class="sub-title text-theme">{{$module->top}} </span>
       <h2 class="sec-title">{{$module->title}}</h2>
      </div>
      <form action="{{route('store')}}" method="POST">
       @csrf
       <input type="hidden" name="type" value="İletişim Formu">
       <div class="row gy-4">
        <div class="col-md-12">
         <div class="form-group">
          <input type="text" class="form-control" name="json[name]" id="name" placeholder="İsim Soyisim">
         </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
          <input type="email" class="form-control" name="json[email]" id="email" placeholder="E-Posta">
         </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
          <input type="tel" class="form-control" name="json[phone]" id="phone" placeholder="Telefon">
         </div>
        </div>
        <div class="col-12">
         <div class="form-group ">
          <textarea name="json[message]" id="message" cols="30" rows="3" class="form-control" placeholder="Mesajınız"></textarea>
         </div>
        </div>
        <div class="form-btn col-12">
         <button class="btn w-100">Gönder <i class="ri-arrow-right-up-line"></i></button>
        </div>
       </div>
       <p class="form-messages mb-0 mt-3"></p>
      </form>
     </div>
    </div>            
   </div>
  </div>
 </div>
@push('scripts')

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
</section>   
