<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact us any time</h1>
    <form class="form" action="{{route('contact')}}" method="post">
     @csrf
        <input class="" type="text" name="name" placeholder="Your Name Please" />
        <input class="" type="email" name="email" placeholder="Your Valid Email" />
        <textarea class="" name="message" cols="30" rows="10" placeholder="Your query"></textarea>
        <input class="" type="submit" value="Submit" />
     </form>
</body>
</html>
