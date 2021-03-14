@if (current_user()->isNot($user))

    <form method="POST"
        action="{{ route('follow', $user->username) }}">
        @csrf

        <button type="submit"
            class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
            {{ current_user()->following($user)
    ? '追隨中'
    : '追隨我' }}
        </button>
    </form>

@endif
