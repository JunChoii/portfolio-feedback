<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #4A5568; padding: 0 10px;">

    <h1 style="color: #FFFFFF; text-align: center;">Feedbacks</h1>

    <a href="/feedback/new" style="display: block; text-align: center; margin: 0 auto 10px; text-decoration: none; color: #FFFFFF; background-color: #63B3ED; padding: 10px 15px; border-radius: 5px; max-width: 200px;">New Feedback</a>

    <ul style="list-style-type: none; padding: 0;">
        @foreach($feedbacks as $feedback)
        <li style="margin-bottom: 10px; padding: 10px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center; background-color: #2D3748; color: #FFFFFF;">
            <span style="flex: 1; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">'{{ $feedback['name'] }}' says "{{ $feedback['feedback'] }}"</span>
            <div>
                <a href="/feedback/edit/{{ $feedback['id'] }}" style="text-decoration: none; color: green;">Tweak</a>
                <a href="/feedback/delete/{{ $feedback['id'] }}" style="text-decoration: none; color: red; margin-left: 10px;">Delete</a>
            </div>
        </li>
        @endforeach
    </ul>

    <style>
        @media only screen and (min-width: 600px) {
            body {
                max-width: 600px;
                margin: 0 auto;
            }
        }
    </style>
</body>
</html>
