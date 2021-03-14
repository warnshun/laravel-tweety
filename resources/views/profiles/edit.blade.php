<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="name">
                名稱
            </label>

            <input class="border border-gray-400 p-2 w-full rounded"
                type="text"
                name="name"
                id="name"
                value="{{ $user->name }}"
                required>

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="username">
                用戶名
            </label>

            <input class="border border-gray-400 p-2 w-full rounded"
                type="text"
                name="username"
                id="username"
                value="{{ $user->username }}"
                required>

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ message }}</p>
            @enderror
        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="avatar">
                頭像
            </label>

            <div class="flex">

                <input class="border border-gray-400 p-2 w-full rounded"
                    type="file"
                    name="avatar"
                    id="avatar"
                >

                <img
                    src="{{ $user->avatar }}"
                    alt="your avatar"
                    width="100"
                    class="rounded-lg"
                >
            </div>

            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="email">
                E-Mail
            </label>

            <input class="border border-gray-400 p-2 w-full rounded"
                type="email"
                name="email"
                id="email"
                value="{{ $user->email }}"
                required>

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="password">
                密碼
            </label>

            <input class="border border-gray-400 p-2 w-full rounded"
                type="password"
                name="password"
                id="password"
                required>

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="password_confirmation">
                密碼確認
            </label>

            <input class="border border-gray-400 p-2 w-full rounded"
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                required>

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4"
            >
                送出
            </button>

            <a href="{{ $user->path() }}" class="hover:underline">取消</a>
        </div>

    </form>
</x-app>
