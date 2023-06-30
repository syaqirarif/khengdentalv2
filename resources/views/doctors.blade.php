@extends('layouts.web')
  
@section('content')
<div class="container">
 <table>
  <thead>
    <tr>
      <th>Doctor ID</th>
      <th>Name</th>
      <th>Gender</th>
      <th>IC</th>
      <th>Contact No</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $data)
    <tr>
      <td>{{ $data->docID }}</td>
      <td>{{ $data->docName }}</td>
      <td>{{ $data->docGender }}</td>
      <td>{{ $data->docIC }}</td>
      <td>{{ $data->docContactNo }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection