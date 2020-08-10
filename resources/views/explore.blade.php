<x-app>
    <div>
        @foreach($users as $user)
            <a href = "{{$user->path()}}"><div class = "flex items-center mb-4">
            <img src ="{{asset($user->avatar?'/storage/'. $user->avatar:'/images/default-avatar.jpg')}}  " alt = "{{$user->username}}'s avatar" class = "mr-4 rounded" style = "width:80px;">
            <div>
                <h4 class = "font-bold">{{'@'.$user->username}}</h4>
            </div>
            </div>
</a>
        @endforeach
    </div>
</x-app>