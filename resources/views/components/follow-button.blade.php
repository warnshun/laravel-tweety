<form method="POST"
    action="/profiles/{{ $user->name }}/follow">
    @csrf

    <button type="submit"
        class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
        {{ auth()->user()->following($user) ? '追隨中' : '追隨我' }}
    </button>
</form>
