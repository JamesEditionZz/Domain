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
        .photo__grid--item img{
          width: 80%;
          height: 100%;
          margin:  auto auto;
        }
      </style>
    <div class="py-6">
        <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <p>เลือกประเภทธุรกิจ</p>
                <select class="form-select" name="selectbus">
                  @foreach ($business as $Data)
                    <option>{{$Data->name_business}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-sm-3">
                <p>เลือกประเภทเว็บไซต์</p>
                <select class="form-select" name="selectweb">
                  @foreach ($temweb as $wData)
                      <option>{{$wData->name_web}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-sm-3">
                <p>เลือก Mood&Tone ของสี</p>
                <select class="form-select" name="selectweb">
                    <option></option>
                </select>
              </div>
              <div class="col-sm-3">
                <p>เลือก Mood&Tone ของFont(ตัวอักษร)</p>
                <select class="form-select" name="selectweb">
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
            @foreach ($imageData as $image)
            <div class="photo__grid--item">
              <img src="{{ url('public/Image/'.$image->image) }}">
            </div>
            @endforeach
          </div>
        </div>
      </div>
          
    </div>
</x-slot>
</x-app-layout>
