<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg"
                alt=""
                class="mb-2 rounded-lg">

            <img src="{{ $user->avatar }}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                width="150"
                style="left: 50%">
        </div>


        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 300px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p>加入於 {{ $user->created_at->diffForHumans() }}</p>
            </div>


            <div class="flex">
                @can('edit', $user)

                    <a href="{{ $user->path('edit') }}"
                        class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                        編輯
                    </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介
            個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介
            個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介
        </p>

    </header>

    @include('_timeline', [
    'tweets' => $tweets
    ])
</x-app>
