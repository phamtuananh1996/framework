<option value="" selected>Chọn quận / huyện</option>
@foreach ($district->wards as $ward)
  <option value="{{$ward->name}}">{{$ward->name}}</option>
@endforeach