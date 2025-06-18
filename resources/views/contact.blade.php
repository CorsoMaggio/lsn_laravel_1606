<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <div>
        <h1>Contact Us</h1>

        <form method="POST" action="contact">
            @csrf

            <div>
                <label for="email" class="form-label">Email address</label>
            </div>
            <input name="email" value="{{ old('email') }}" class="form-control" id="email"
                placeholder="name@example.com">
            @if ($errors->any())
                <div class="alert alert-danger">

                    @error('email')
                        {{ $message }}
                    @enderror

                </div>
            @endif

            <div class>
                <label for="message" value="{{ old('message') }}" class="form-label">Your Message</label>
                <textarea name="message" class="form-control" id="message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">

            @error('message')
                {{ $message }}
            @enderror

        </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
