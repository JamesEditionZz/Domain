<x-app-layout>
    <x-slot name="header">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <style>
        .photo__grid{
          margin-top: 2rem;
          display: grid;
          grid-template-columns: 1fr 1fr;
          grid-gap: 2rem;
        }
        .photo__grid--item{
          width: 100%;
          height: 100%;
        }
        .photo__grid--item img{
          width: 80%;
          height: 100%;
          margin:  auto auto;
        }
      </style>
  <body>
    <div class="py-6">
        <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <p>เลือกประเภทธุรกิจ</p>
                <select class="form-select busi" name="busi" id="busi">
                  <option>{{'กรุณาเลือกธีม'}}</option>
                  @foreach ($business as $row)
                    <option value="{{$row->id}}">{{$row->name_business}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-sm-3">
                <p>ประเภทเว็บไซต์</p>
                <select class="form-select web" name="busi" id="web">
                  <option></option>
                </select>
              </div>
            </div>
        </div>
        <br>
        <div class="container p-2 text-center">
            <h3>กรุณาเลือกธีม</h3>
        </div> 
        <div class="container">
          <div class="photo__grid">
            <div class="photo__grid--item">
            </div>
          </div>
        </div>
      </div>
    </div>
    {{ csrf_field() }}
  </body>
    <script>
      $('.busi').change(function(){
          if($(this).val()!=''){
              var select=$(this).val();
              var _token=$('input[name="_token"]').val();
              $.ajax({
                  url:"{{route('dropdown.fetch')}}",
                  method:"POST",
                  data:{select:select,_token:_token},
                  success:function(result){
                      $('.web').html(result);
                  }
              })
          }
      });
      $('.web').change(function(){
          if($(this).val()!=''){
              var selectweb=$(this).val();
              var _token=$('input[name="_token"]').val();
              $.ajax({
                  url:"{{route('dropdown.fetch')}}",
                  method:"POST",
                  data:{selectweb:selectweb,_token:_token},
                  success:function(result){
                      $('.img').html(result);
                  }
              })
          }
      });
    </script>
</x-slot>
</x-app-layout>
