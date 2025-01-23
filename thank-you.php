<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .thank-you-container {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 500px;
            text-align: center;
        }
        .thank-you-container h1 {
            font-size: 2rem;
            color: #4CAF50;
            margin-bottom: 20px;
        }
        .thank-you-container p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 30px;
        }
        .thank-you-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .thank-you-container button:hover {
            background-color: #45a049;
        }
        .thank-you-container button:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <h1>Thank You!</h1>
        <p>Your submission has been received successfully.</p>
        <button onclick="window.history.back()">Return</button>
    </div>
</body>
</html>
