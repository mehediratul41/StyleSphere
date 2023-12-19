@extends('layouts.main')
@section('main_section')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->user_id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>     
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
