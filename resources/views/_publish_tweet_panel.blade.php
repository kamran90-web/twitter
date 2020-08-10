<div class = "border border-blue-400 rounded-lg px-4 py-4 mb-8">
    <form method = "POST" action = "/tweets">
        @csrf
        <textarea  rows = '3' cols = '85' name = "body" class = "full" placeholder = "Whats up doc?"></textarea>
        <hr class = "mb-4">
        <footer class = "flex justify-between">
        <img src = "{{asset('/storage/'.Auth::user()->avatar)}}" alt = "" class = "rounded-full mr-2" style = "width:50px;height:50px">
            <button type = "submit" class = "bg-blue-500 hover: bg-blue-600 rounded-lg shadow py-2 px-2 tex-white">Tweet</button>
        </footer>
    </form>   
    @error('body')
<p class = "text-red text-sm">{{$message}}</p>
    @enderror
</div>