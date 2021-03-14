<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-xl mb-4">{{ __('註冊') }}</div>

                <form method="POST"
                    action="{{ route('register') }}">
                    @csrf


                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-sm text-gray-700"
                            for="username">
                            用戶名
                        </label>

                        <input class="border border-gray-400 p-2 w-full rounded"
                            type="text"
                            name="username"
                            id="username"
                            value="{{ old('username') }}"
                            required
                            autocomplete="username"
                            autofocus>

                        @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-sm text-gray-700"
                            for="name">
                            名稱
                        </label>

                        <input class="border border-gray-400 p-2 w-full rounded"
                            type="text"
                            name="name"
                            id="name"
                            value="{{ old('name') }}"
                            required
                            autocomplete="name"
                            autofocus>

                        @error('name')
                            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-sm text-gray-700"
                            for="email">
                            E-Mail
                        </label>

                        <input class="border border-gray-400 p-2 w-full rounded"
                            type="email"
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email">

                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-sm text-gray-700"
                            for="password">
                            密碼
                        </label>

                        <input class="border border-gray-400 p-2 w-full rounded"
                            type="password"
                            name="password"
                            id="password"
                            required
                            autocomplete="new-password">

                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-sm text-gray-700"
                            for="password_confirmation">
                            密碼確認
                        </label>

                        <input class="border border-gray-400 p-2 w-full rounded"
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            required
                            autocomplete="new-password">

                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                            class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600 mr-2">
                            註冊
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
