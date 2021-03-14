<div class="bg-gray-200 border border-gray-300 rounded-lg px-6 py-4">
    <h3 class="font-bold text-xl mb-4">追蹤中</h3>

    <ul>
        @forelse (auth()->user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4' }}">
                <div>
                    <a href="{{ $user->path() }} "
                        class="flex items-center text-sm">
                        <img src="{{ $user->avatar }}"
                            alt=""
                            class="rounded-full mr-2"
                            width="40"
                            height="40">

                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li>未有追隨</li>
        @endforelse
    </ul>
</div>
