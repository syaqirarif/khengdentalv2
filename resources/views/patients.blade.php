@extends('layouts.web')
  
@section('content')
<div class="container">
 <table>
  <thead>
    <tr>
      <th>Patient ID</th>
      <th>Name</th>
      <th>Gender</th>
      <th>IC</th>
      <th>Contact No</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $data)
    <tr>
      <td>{{ $data->patID }}</td>
      <td>{{ $data->patName }}</td>
      <td>{{ $data->patGender }}</td>
      <td>{{ $data->patIC }}</td>
      <td>{{ $data->patContactNo }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection