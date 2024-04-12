<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Form Submission</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div style="padding: 20px; background-color: #f5f5f5;">
        <header style="display: flex; justify-content: space-between; align-items: center;">
            <h1 style="font-size: 20px; margin: 0;">AEQ</h1>
            
        </header>
        <hr>

        <section class="d-flex" style="padding: 20px;">
            <h2>Contact Form Submission</h2>
            <p class="text-center">Name: {{ $data['name'] }}</p>
            <p class="text-center">Email: {{ $data['email'] }}</p>
            @isset($data['mobile'])
            <p class="text-center">Phone: {{ $data['mobile'] }}</p>
            @endisset
           

            <p>Message:</p>
            <p>{{ $data['message'] }}</p>
        </section>

        <footer style="text-align: center; padding: 10px; background-color: #ddd;">
            <p style="font-size: 12px; margin: 0;">&copy; {{ date('Y') }} AEQ</p>
        </footer>
    </div>
</body>
</html>