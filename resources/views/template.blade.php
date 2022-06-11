<x-app-layout>
    <x-slot name="header">
    <div class="py-6">
        <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <p>เลือกประเภทธุรกิจ</p>
                <select class="form-select" name="selectbus">
                    <option></option>
                </select>
              </div>
              <div class="col-sm-3">
                <p>เลือกประเภทเว็บไซต์</p>
                <select class="form-select" name="selectweb">
                    <option></option>
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
    </div>
</x-slot>
</x-app-layout>
