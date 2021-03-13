<div class="bg-gray-200 rounded-lg px-6 py-4">
    <h3 class="font-bold text-xl mb-4">追蹤中</h3>

    <ul>
        @foreach (auth()->user()->follows as $user)
            <li class="mb-4">
                <div>
                    <a href="{{ route('profile', $user->name) }} "
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
        @endforeach
    </ul>
</div>
