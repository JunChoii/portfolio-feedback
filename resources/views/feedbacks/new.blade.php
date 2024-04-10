<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body style="max-width: 600px; margin: 0 auto; font-family: Arial, sans-serif; background-color: #4A5568; color: #FFFFFF;">
<h1 style="text-align: center;">Give me your feedback!</h1>
<form action="/feedback/create" method="POST" style="background-color: #2D3748; padding: 20px; border-radius: 10px;">
   @csrf
   <input type="text" name="name" placeholder="Your name" style="margin-bottom: 10px; padding: 5px; width: 100%; border-radius: 5px; border: 1px solid #ccc; background-color: #FFFFFF;">
   <input type="text" name="feedback" placeholder="Your feedback" style="margin-bottom: 10px; padding: 5px; width: 100%; border-radius: 5px; border: 1px solid #ccc; background-color: #FFFFFF;">
   <button style="padding: 5px 10px; border: none; border-radius: 5px; background-color: #3182CE; color: #FFFFFF; cursor: pointer;">Swish!</button>
</form>
<div style="text-align: center; margin-top: 20px;">
   <a href="/feedback" style="text-decoration: none; color: #FFFFFF; background-color: #63B3ED; padding: 10px 20px; border-radius: 5px; display: inline-block;">Go Back to Main</a>
</div>
</body>
</html>
