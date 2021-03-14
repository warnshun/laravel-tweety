<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-xl mb-4">{{ __('登入') }}</div>

                <form method="POST"
                    action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-sm text-gray-700"
                            for="email">
                            E-Mail
                        </label>

                        <input class="border border-gray-400 p-2 w-full rounded"
                            type="text"
                            name="email"
                            id="email"
                            autocomplete="email"
                            value="{{ old('email') }}"
                            required>

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
                            autocomplete="current-password"
                        >

                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <div>
                            <input
                                type="checkbox"
                                name="re"
                                id="re" {{ old('remember') ? 'checked' : '' }}
                            >
                            <label for="re"
                            class="text-xs text-gray-700 font-bold uppercase"
                            >
                                記住我
                            </label>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600 mr-2">
                            登入
                        </button>

                        <a href="{{ route('password.request') }}" class="text-xs text-gray-700">忘記密碼</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
