<x-app-layout>
    <x-slot name="header">
      
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
        .photo__grid--item p{
          width: 100%;
          height: 100%;
          margin:  auto auto;
        }
      </style>
  <body>
      <div class="py-1">
        <div class="container">
            <div class="row">
              <div class="col-sm-4">
                {{'Logo สำหรับใช้ในเว็บไซต์'}}
                <input type="file" class="form-control" name="logo">
              </div>
              <div class="col-sm-4">
                {{'ไฟล์ CI (สี,ฟ้อน,การจัดวาง)'}}
                <input type="file" class="form-control" name="CI">
              </div>
              <div class="col-sm-4">
                {{'รายละเอียดเนื้อหา (ไฟล์ Word)'}}
                <input type="file" class="form-control" name="word">
              </div>
            </div>
            <div class="py-3">
              <div class="row">
                <div class="col-sm-4">
                  {{'เมนูที่ต้องการ (ไฟล์ Word)'}}
                  <input type="file" class="form-control" name="menu">
                </div>
                <div class="col-sm-4">
                  {{'รูปสินค้า หรือ บริการ (ไฟล์ JPEG,PNG)'}}
                  <input type="file" class="form-control" name="product">
                </div>
                <div class="col-sm-4">
                  {{'รายละเอียดสินค้าหรือบริการทั้งหมด (ไฟล์ Word)'}}
                  <input type="file" class="form-control" name="menu">
                </div>
              </div>
            </div>
          <div class="py-1">
            <div class="row">
              <div class="col-sm-3">
                {{'เลือกประเภทธุรกิจ'}}
                <select class="form-select busi" name="busi" id="busi">
                  <option>{{'กรุณาเลือกธีม'}}</option>
                  @foreach ($business as $row)
                    <option value="{{$row->id}}">{{$row->name_business}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-sm-3">
                {{'ประเภทเว็บไซต์'}}
                <select class="form-select web" name="busi" id="web">
                  <option></option>
                </select>
              </div>
            </div>
          </div>
              <div class="py-2">
                <div class="row">
                    <p><h4 align="center">{{'สีที่อยากได้และสไตล์ของตัวหนังสือ'}}</h4></p>
                    <div class="col-sm-2">
                      <p>{{'สีที่ 1 (สีหลัก 70%)'}}</p>
                      <input type="color" class="form-control" name="color1">
                    </div>
                    <div class="col-sm-2">
                      <p>{{'สีที่ 2 (สีรอง 20%)'}}</p>
                      <input type="color" class="form-control" name="color2">
                    </div>
                    <div class="col-sm-2">
                      <p>{{'สีที่ 3 (สีรอง 10%)'}}</p>
                      <input type="color" class="form-control" name="color3">
                    </div>
                    <div class="col-sm-1">
                      
                    </div>
                    <div class="col-sm-4">
                      <p align="center">{{'สไตล์ตัวหนังสือ'}}</p>
                      <input type="radio" id="Oswald" name="Font" value="Oswald">
                      <label for="Oswald">Oswald</label><span style="padding: 30px"></span>
                      <input type="radio" id="Josefin Sans" name="Font" value="Josefin Sans">
                      <label for="Josefin Sans">Josefin Sans</label><span style="padding: 30px"></span>
                      <input type="radio" id="Cardo" name="Font" value="Cardo">
                      <label for="Cardo">Cardo</label>
                    </div>
                </div>
              </div>
              <div class="py-2">
                <div class="row">
                  <p><h4 align="center">{{'Arkwork 1'}}</h4></p>
                  <div class="col-sm-4">
                    {{'อธิบายสิ่งที่ต้องการให้มีใน Arkwork'}}
                    <input type="text" class="form-control" name="aboutark1">
                  </div>
                  <div class="col-sm-4">
                    {{'ข้อความ Arkwork'}}
                    <input type="text" class="form-control" name="messageark1">
                  </div>
                  <div class="col-sm-4">
                    {{'Mood & Tone ของ Arkwork (File ตัวอย่าง)'}}
                    <input type="file" class="form-control" name="arkfile1">
                  </div>
                </div>
              </div>
              <div class="py-2">
                <div class="row">
                  <p><h4 align="center">{{'Arkwork 2'}}</h4></p>
                  <div class="col-sm-4">
                    {{'อธิบายสิ่งที่ต้องการให้มีใน Arkwork'}}
                    <input type="text" class="form-control" name="aboutark2">
                  </div>
                  <div class="col-sm-4">
                    {{'ข้อความ Arkwork'}}
                    <input type="text" class="form-control" name="messageark2">
                  </div>
                  <div class="col-sm-4">
                    {{'Mood & Tone ของ Arkwork (File ตัวอย่าง)'}}
                    <input type="file" class="form-control" name="arkfile2">
                  </div>
                </div>
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
              <p class="img" id="img"></p>
            </div>
          </div>
        </div>
    </div>
    {{ csrf_field() }}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                  url:"{{route('img')}}",
                  method:"POST",
                  data:{selectweb:selectweb,_token:_token},
                  success:function(resultimg){
                      $('.img').html(resultimg);
                  }
              })
          }
      });
    </script>
  </body>
    
    
</x-slot>
</x-app-layout>
