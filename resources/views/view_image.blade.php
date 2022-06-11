<div class="container">
    <h3>View all image</h3><hr>
    <a href="{{ route('table.add') }}"><button>Back</button></a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Image id</th>
          <th scope="col">Image</th>
          <th scope="col">ประเภทธุรกิจ</th>
          <th scope="col">ประเภทเว็ปไซต์</th>
        </tr>
      </thead>
      <tbody>
        @foreach($imageData as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>
	     <img src="{{ url('public/Image/'.$data->image) }}"
 style="height: 100px; width: 150px;">
	  </td>
    <td align="center">{{$data->business_id}}</td>
    <td align="center">{{$data->web_id}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>