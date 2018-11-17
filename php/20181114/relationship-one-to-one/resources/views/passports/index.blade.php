@foreach($users as $user)
<div>
  {{$user['id']}} - {{$user['user']['name']}} - {{$user['number']}} </div>@endforeach