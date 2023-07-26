@if(session()->has('message'))
<div class="message" x-data="{show: true}" x-init="setTimeout(()=> show=false, 5000)", x-show="show">
    <p class="text">{{session('message')}}</p>
</div>
@endif