<x-app-layout>
    <x-slot name="header">
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
        <table border="1">
          <div class="mt-3">
              <tr>
                @foreach ($imageData as $theme)
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-5">
                        <td>
                          <img src="{{ url('public/Image/'.$theme->image) }}" style="height: 600px; width: 400;">
                        </td>
                    </div>
                  </div>
                </div> 
                @endforeach
              </tr> 
            </div>
        </table> 
        {!! $imageData->links() !!}
    </div>
</x-slot>
</x-app-layout>
