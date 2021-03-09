<x-app>
    <header class="mb-6 relative">
        <img
            src="/images/default-profile-banner.jpg"
            alt=""
            class="mb-2 rounded-lg"
        >

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p>加入於 {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">編輯</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">追隨我</a>
            </div>
        </div>

        <p class="text-sm">
            個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介
            個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介
            個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介個人簡介
        </p>

        <img
            src="{{ $user->avatar }}"
            alt=""
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 100px"
        >

    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>
