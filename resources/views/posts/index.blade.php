<x-layout>
    <section class="home" id="home">
        <div class="home-text container">
            <h2 class="home-title">Ivan Sabat's blog</h2>
            <span class="home-subtitle">Your source of great content</span>
        </div>
    </section>

{{--    <div class="post-filter container">--}}
{{--        <span class="filter-item active-filter" data-filter="all">All</span>--}}
{{--        <span class="filter-item" data-filter="design">Laravel</span>--}}
{{--        <span class="filter-item" data-filter="tech">PHP</span>--}}
{{--        <span class="filter-item" data-filter="mobile">Linux</span>--}}
{{--    </div>--}}

    <section class="post container">
        @foreach($posts as $post)
            <div class="post-box mobile">
                <img src="{{ asset("images/post-$post->id.jpg") }}" alt="" class="post-img">
                <h2 class="category">Linux</h2>
                <a href="{{ route('posts.show', $post) }}" class="post-title">
                    {{ $post->title }}
                </a>
                <span class="post-date">{{ $post->created_at->diffForHumans() }}</span>
                <p class="post-description">{{ $post->excerpt }}</p>
                <div class="profile">
                    <img src="{{ asset("images/profile-{$post->author->id}.jpg") }}" alt="" class="profile-img">
                    <span class="profile-name">{{ $post->author->name }}</span>
                </div>
            </div>
        @endforeach
        <nav class="mt-2" aria-label="Page navigation example">
            {{ $posts->links('pagination::bootstrap-5') }}
        </nav>
    </section>
</x-layout>
