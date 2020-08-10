<h3 class = "font-bold text-xl mb-4"><b>Following</b></h3>
<ul>
    @forelse(auth()->user()->follows as $user)
    <li class = "mb-4">
        <div class = "flex items-center">
          
        <a href = "{{route('profile', $user->name)}}"><img src = "{{$user->avatar}}" alt = "" class = "rounded-full mr-2"></a>
        {{$user->name}}
    </li> 
    @empty 
    <p class = "p-4">No Friends</p>
    @endforelse     
<ul>