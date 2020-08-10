@if(auth()->user()->isNot($user))
<form method = "POST" action = "/profiles/{{ $user->username }}/follow">
    @csrf
       <button type = "submit" class = "bg-blue-500 rounded-full shadow py-2 px-4 tex-white text-xs">
          {{ auth()->user()->following($user) ? 'UnFollow'  : 'Follow me ' }}</button>
</form>
@endif