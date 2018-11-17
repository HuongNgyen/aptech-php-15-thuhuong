 @foreach($users as $user)
<div>
  {{$user['id']}} - {{$user['name']}} - {{$user['passport']['number']}} </div>@endforeach