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
        <h1>Send notification or message service</h1>
        <!-- Success message -->
        @if(Session::has('message'))
            <div class="alert alert-success" id="flash-message">
                {{Session::get('message')}}
            </div>
        @endif
    <form method="POST" action="{{ route('contact.submit') }}"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>
    @csrf
    <div class="form-group">
        <label>Phone number</label>
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

<div class="form-group">
    <label>Send To</label>
<br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="send_to" id="send_to_all" value="all" checked>
        <label class="form-check-label" for="send_to_all">
            All
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="send_to" id="send_to_slack" value="slack">
        <label class="form-check-label" for="send_to_slack">
            Slack
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="send_to" id="do_not_send_to_slack" value="sms">
        <label class="form-check-label" for="do_not_send_to_slack">
            SMS
        </label>
    </div>
    @if ($errors->has('send_to'))
        <div class="error">
            {{ $errors->first('send_to') }}
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
