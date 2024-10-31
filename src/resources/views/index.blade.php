<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <p class="header__logo">
                PiGly
            </p>
            <div class="header__button">
                <a class="goal-set__button" href="/wight_logs/goal_setting">
                    目標体重設定
                </a>
                <a class="logout__button" href="/logout">
                    ログアウト
                </a>
            </div>
        </div>
    </header>

    <main>
        <div class="admin">
            <table class="admin-table__heading">
                <tr class="admin-row__heading">
                    <th class="admin-label__header">目標体重</th>
                    <th class="admin-label__middle">目標まで</th>
                    <th class="admin-label__under">最新体重</th>
                </tr>  
            </table>
</body>
</html>