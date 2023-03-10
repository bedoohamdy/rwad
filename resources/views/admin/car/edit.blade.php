@extends('admin.layouts.master')

@section('title',"تعديل بيانات سيارة")
@section('icon',"bi bi-car-front-fill mx-1")


@section('content')

    
    <form action="/admin/cars/{{$Car->id}}" method="post" enctype="multipart/form-data">
      @csrf
      @method("PUT")
  <div class="player-data d-flex flex-column align-items-center flex-lg-row flex-lg-row-reverse mt-4" style="min-height: calc(100vh - 90px);">


      <div class="container">
        <div class="data-info row p-0 m-0 w-100 flex-row-reverse justify-content-center align-items-center">
          <div class="data-text col-4 my-2 text-center mb-3">
            <label class="text-light fs-4 mb-2">طباشيرى</label>
            <input id="name" readonly class="form-control w-100 text-center mx-auto" name="Tabashery" type="text" value="{{$Car->Tabashery}}" placeholder="طباشيرى">
          </div>
          <div class="data-text col-4 my-2 text-center mb-3">
            <label class="text-light fs-4 mb-2">رقم اللوحة</label>
            <input class="form-control w-100 text-center mx-auto" name="PlateNumber" value="{{$Car->PlateNumber}}" type="text" placeholder="أ ل ف - 678">
          </div>
          <div class="data-text col-4 my-2 text-center mb-3">
            <label class="text-light fs-4 mb-2">نوع السيارة</label>
            <input class="form-control w-100 text-center mx-auto" readonly name="CarType" value="{{$Car->CarType}}" type="text" placeholder="أ ل ف - 678">
            
          </div>
          <div class="data-text col-4 my-2 text-center mb-3">
            <label class="text-light fs-4 mb-2">عداد البداية</label>
            <input class="form-control w-100 text-center mx-auto" name="SCounter" value="{{$Car->SCounter}}" type="number" placeholder="Ex. 567666">
          </div>
          <div class="data-text col-4 my-2 text-center mb-3">
            <label class="text-light fs-4 mb-2">الفرع</label>
            <input class="form-control w-100 text-center mx-auto" name="BranchName" value="{{$Car->BranchName}}" type="text" placeholder="Ex. 567666">
           
          </div>
          <div class="col-7">

            <button type="submit" class=" col-5 d-block btn add-player btn-danger text-light mt-4  mx-auto d-block">تعديل البيانات</button>

          </div>

          <div class="col-7">

            <a href="/admin/cars" class="col-5 d-block btn add-player btn-light text-dark mt-4  mx-auto d-block">إلغاء</a>

          </div>
  
        </div>
      </div>
      </div>
    
  
  
  

</form>

{{-- <script src="{{asset('includes/custom/js/newplayer.js')}}"></script> --}}


@section('script')
    
<script>

  // Focus
  window.onload = () =>{
    let inputs = document.querySelectorAll("input");

    console.log(inputs);

    inputs[2].focus();
  }


  // Save Data Shortcut
document.addEventListener('keydown', (e) => {

  let form = document.querySelector("form");

  let newInputs = document.querySelectorAll("input");


  // 48 = 0 key
  // 32 = space key

  if(e.ctrlKey && e.keyCode == 32) {

    form.submit();

  }


  if(e.keyCode == 13){
    e.preventDefault();
  }



});

</script>

@endsection 
    
@endsection