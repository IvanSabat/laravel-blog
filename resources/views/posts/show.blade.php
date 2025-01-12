<x-layout>
    <section class="post-header">
        <div class="header-content post-container">
            <a href="{{ route('posts.index') }}" class="back-home">Back To Home</a>

            <h1 class="header-title">{{ $post->title }}</h1>

            <img src="{{ asset("images/post-$post->id.jpg") }}" alt="" class="header-img">
        </div>
    </section>

    <section class="post-content post-container">
        <?= $post->body ?>
    </section>

{{--    <div class="share post-container">--}}
{{--        <span class="share-title">Share this article</span>--}}
{{--        <div class="social">--}}
{{--            <a href="#"><i class='bx bxl-facebook'></i></a>--}}
{{--            <a href="#"><i class='bx bxl-twitter'></i></a>--}}
{{--            <a href="#"><i class='bx bxl-instagram'></i></a>--}}
{{--            <a href="#"><i class='bx bxl-linkedin'></i></a>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-layout>
