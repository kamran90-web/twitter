<x-app>
 
  <header class = "mb-4 relative">
       <img src = "{{asset('images/default-banner.jpg'?: '/images/default-avatar.jpg')}}" 
       style = "width:700px;height:230px;border-radius:20px">
       <img src = "{{asset('/storage/'. $user->avatar)}}" alt = "" 
         class = "rounded-full mr-2 absolute" 
         style = "width:130px;left:calc(49% - 85px); top:48%;height:130px">
      <div class = "flex justify-between items-center mb-2">
          <div>
            <h2 class = "font-bold" >{{$user->name}}</h2>
            <p class = "text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            
          </div> 
         <div class = "py-4 pl-20 flex">
             <!-- @if(current_user()->is($user)) -->
            @can('edit', $user)
         <a href = "{{$user->path('edit')}}" class = "rounded-full border border-gray-300 
               py-2 px-2 tex-black text-xs mr-2">
               Edit Profile</a>
            @endcan
            <!-- @endif -->
          <x-follow-button :user='$user'>
          </x-follow-button>
         </div>   
      </div>
      <p class = "text-sm">
         Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
         when an unknown printer took a galley 
      </p>
     
         
  </header>
   @include('_timeline', [
      'tweets' => $tweets
   ])
</x-app>

