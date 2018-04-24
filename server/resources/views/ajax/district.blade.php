<option value="" selected>Chọn quận / huyện</option>
@foreach ($province->districts as $distrist)
  <option value="{{$distrist->name}}">{{$distrist->name}}</option>
@endforeach

