<div class="mt-10 text-black text-large">
    @foreach($tweets as $tweet)
        <div>
            {{$tweet->body}}
        </div>
    @endforeach
</div>
