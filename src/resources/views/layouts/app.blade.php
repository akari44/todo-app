<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-List</title>
    <link rel="stylesheet" href="sanitize.css">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="" class="header__logo">Todo</a>
        </div>
        <!-- メッセージ-->
        <div class="header__message">
            <!-- 作成完了メッセージ-->
            <span class="header__true-message">完了しました</span>
            <!-- エラーメッセージ-->
            <span class="header__error-message">エラーです</span>
        </div>

    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>