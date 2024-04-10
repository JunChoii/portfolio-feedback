<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="max-width: 400px; margin: 0 auto; font-family: Arial, sans-serif; background-color: #4A5568;">

    <h1 style="color: #FFFFFF; text-align: center;">Edit your feedback!</h1>

    <form action="/feedback/update/{{ $feedback['id'] }}" method="POST" style="background-color: #2D3748; padding: 20px; border-radius: 10px;">
        @csrf
        <div style="color: #FFFFFF; margin-bottom: 10px;">{{ $feedback['name'] }}</div>
        <input type="text" name="feedback" placeholder="{{ $feedback['feedback'] }}" style="margin-bottom: 10px; padding: 5px; width: 100%; border-radius: 5px; border: 1px solid #ccc; background-color: #FFFFFF; color: #333;">
        <button style="padding: 5px 10px; border: none; border-radius: 5px; background-color: #3182CE; color: #FFFFFF; cursor: pointer; display: block; margin: 0 auto;">Swish!</button>
    </form>
    <div style="text-align: center; margin-top: 20px;">
   <a href="/feedback" style="text-decoration: none; color: #FFFFFF; background-color: #63B3ED; padding: 10px 20px; border-radius: 5px; display: inline-block;">Go Back to Main</a>
</div>

    <style>
        @media only screen and (min-width: 600px) {
            body {
                max-width: 600px;
            }
        }
        @media only screen and (min-width: 800px) {
            body {
                max-width: 800px;
            }
        }
    </style>
</body>
</html>
