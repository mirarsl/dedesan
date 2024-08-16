<div class="send-msg-section">
 <div class="container">
  <div class="row align-items-center">
   <div class="col-lg-6 col-md-12">
    <div class="section-title">
     <h3 class="wow fadeInUp" data-wow-delay="0.50s">{{$module->top}}</h3>
     <h2 class="text-anime">{{$module->title}}</h2>
    </div>
    
    <div class="send-msg-body">
     <div class="wow fadeInUp" data-wow-delay="0.75s">{!! $module->text !!}</div>
    </div>
   </div>
   
   <div class="col-lg-6 col-md-12">					
    <div class="contact-form wow fadeInUp" data-wow-delay="1.25s">
     <form action="{{route('store')}}" method="POST">
      @csrf
      <input type="hidden" name="type" value="Contact Form">
      <div class="row">
       <div class="form-group col-md-12 mb-4">
        <input type="text" value="{{old('json.name')}}" name="json[name]" class="form-control" id="name" placeholder="Name"  >
        @error('json.name')
        <div class="help-block with-errors">{{$message}}</div>
        @enderror
       </div>
       
       <div class="form-group col-md-12 mb-4">
        <input type="email" value="{{old('json.email')}}" name ="json[email]" class="form-control" id="email" placeholder="Email"  >
        @error('json.email')
        <div class="help-block with-errors">{{$message}}</div>
        @enderror
       </div>
       
       <div class="form-group col-md-12 mb-4">
        <input type="text" value="{{old('json.phone')}}" name="json[phone]" class="form-control" id="phone" placeholder="Phone"  >
        @error('json.phone')
        <div class="help-block with-errors">{{$message}}</div>
        @enderror
       </div>
       
       <div class="form-group col-md-12 mb-4">
        <textarea name="json[message]" class="form-control" id="msg" rows="4" placeholder="Write a Message" >{{old('json.message')}}</textarea>
        @error('json.message')
        <div class="help-block with-errors">{{$message}}</div>
        @enderror
       </div>
       
       <div class="col-md-12 button-group">
        <button type="submit" class="btn-default">Submit Now</button>
        <div id="msgSubmit" class="h3 text-left hidden"></div>
       </div>
      </div>
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

