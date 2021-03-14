<ul>
    <li><a class="font-bold text-lg mb-4 block"
            href="{{ route('home') }}">主頁</a></li>

    <li><a class="font-bold text-lg mb-4 block"
            href="/explore">探索</a></li>

    <li><a class="font-bold text-lg mb-4 block"
            href="{{ route('profile', current_user()) }}">個人資料</a></li>

    <li>
        <form method="POST"
            action="/logout">
            @csrf

            <button class="font-bold text-lg">登出</button>
        </form>
    </li>
</ul>
