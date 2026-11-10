<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>確認画面</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            min-height: 100vh;
            margin: 0;
            display: grid;
            place-items: center;
        }

        body.alternate {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    <p>
        Hello World<br>
        youkoso!
    </p>
    <script>
        window.setInterval(() => {
            document.body.classList.toggle('alternate');
        }, 50);
    </script>
</body>
</html>
