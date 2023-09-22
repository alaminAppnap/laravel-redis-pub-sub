<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        <!-- Success message -->
        @if(Session::has('message'))
            <div class="alert alert-success" id="flash-message">
                {{Session::get('message')}}
            </div>
        @endif
    <form method="POST" action="{{ route('contact.submit') }}">
    @csrf
    <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
        @if ($errors->has('phone'))
        <div class="error">
            {{ $errors->first('phone') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Message</label>
        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
            rows="4"></textarea>
        @if ($errors->has('message'))
        <div class="error">
            {{ $errors->first('message') }}
        </div>
        @endif
    </div>
    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>   
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function(){
        var flashMessage = $('#flash-message');
        
        if (flashMessage.length > 0) {
            setTimeout(function(){
                flashMessage.fadeOut(500, function(){
                    flashMessage.remove();
                });
            }, 5000);
        }
    });
</script>
</body>
</html>
