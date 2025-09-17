<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Book - Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .hero {
            text-align: center;
            max-width: 600px;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
            margin: 20px 0;
        }
        .btn-custom {
            background-color: #fff;
            color: #2575fc;
            font-weight: bold;
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #f8f9fa;
            color: #6a11cb;
        }
        .features {
            margin-top: 40px;
        }
        .features div {
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            padding: 15px;
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <div class="hero">
        <h1>📒 Personal Contact Book App</h1>
        <p>Keep all your contacts safe, organized, and accessible anytime.<br>
           Add names, emails, phone numbers, and addresses in one simple place.</p>
        
        <a href="{{ route('login') }}" class="btn-custom">Get Started</a>

        <div class="features mt-4">
            <div>✅ Easy to Add & Edit Contacts</div>
            <div>✅ Quick Search & Organized View</div>
            <div>✅ Clean & Responsive Design</div>
        </div>
    </div>
</body>
</html>
