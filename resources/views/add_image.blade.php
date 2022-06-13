  {{-- add_image.blade.php --}}
  <div class="container">
    <form method="post" action="{{ route('images.store') }}" 
      enctype="multipart/form-data">
      @csrf
      <div class="image">
        <label><h4>Add image</h4></label>
        <input type="file" class="form-control" required name="image">
      </div>
      <strong>ประเภทธุรกิจ</strong>
      <select name="business">
        @foreach ($business as $data)
            <option value="{{$data->id}}">{{$data->name_business}}</option>
        @endforeach
      </select>
      <strong>ประเภทเว็บไซต์</strong>
      <select name="web">
      @foreach ($temweb as $wdata)
          <option value="{{$wdata->id}}">{{$wdata->name_web}}</option>
      @endforeach
      </select>
      <strong>ลิ้งเว็ป</strong>
      <input type="text" name="linkweb">
      <div class="post_button">
        <button type="submit" class="btn btn-success">Add</button>
      </div>
    </form>
    <a href="{{ Route('images.view') }}"><button>view</button></a>
  </div>

