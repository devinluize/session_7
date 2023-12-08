<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>{{ __('regis.welcome') }}</h1>
    <form>
        @csrf
        <label for="nim">{{ __('regis.nim') }}</label>
        <input type="text" name="gender" id="nim">

        <label for="name">{{ __('regis.name') }}</label>
        <input type="text" name="name" id="name">

        <label>{{ __('regis.gender') }}</label>
        <div>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">{{ __('regis.male') }}</label>

            <input type="radio" id="female" name="gender" value="female">
            <label for="female">{{ __('regis.female') }}</label>
        </div>
        <label for="email">{{ __('regis.email') }}</label>
        <input type="email" name="email" id="email">

        <label for="password">{{ __('regis.password') }}</label>
        <input type="password" name="password" id="password">

        <button type="submit">{{ __('regis.register') }}</button>
    </form>
</body>

</html>
