@extends('layouts.web')
  
@section('content')
<div class="container">
 <table>
  <thead>
    <tr>
      <th>Clerk ID</th>
      <th>Name</th>
      <th>Gender</th>
      <th>IC</th>
      <th>Contact No</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $data)
    <tr>
      <td>{{ $data->clerkID }}</td>
      <td>{{ $data->clerkName }}</td>
      <td>{{ $data->clerkGender }}</td>
      <td>{{ $data->clerkIC }}</td>
      <td>{{ $data->clerkContactNo }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection