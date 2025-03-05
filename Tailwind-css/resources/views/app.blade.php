<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Improved Web Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(77, 76, 76);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        .footer {
            margin-top: 20px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
        <p>Welcome to my improved web page. This page now has a cleaner layout and better styling to enhance the user experience. Feel free to explore and enjoy the content!</p>
        <div class="footer">
            &copy; Hello world
        </div>
    </div>
</body>
</html>
