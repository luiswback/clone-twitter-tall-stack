<div class="mt-10 text-black text-large">
    @foreach($tweets as $tweet)
        <div>
            {{$loop->index}} - {{$tweet->body}}
        </div>
    @endforeach

    <div  class="bg-blue-400 h-10 w-10" x-data="{
        infinityScroll(){
            const observer = new IntersectionObserver((items) => {
                items.forEach((item) => {
                    if (item.isIntersecting){
{{--                    console.log(item)--}}
                        @this.loadMore();
                    }
                })
            },
            {
                threshold: 0.5,
                rootMargin: '100px'
            });
            observer.observe(this.$el)
        }
    }" x-init="jeremias()">

    </div>
</div>
