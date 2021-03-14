<div class="border border-gray-300 rounded-lg">
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">目前未有貼文</p>
    @endforelse

    {{ $tweets->links() }}
</div>
