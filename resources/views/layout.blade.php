<!DOCTYPE html>
<html>
<head>
    <title>Akademik Kampus</title>
    <style>
        html, body {
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        background-color: #ffffff; 
    }

    .container {
        text-align: center;
        max-width: 100%;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background-color: #fff;
    }

    button {
        background-color: #ffc0cb; 
        border: none;
        color: black;
        padding: 10px 20px; 
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px; 
        margin: 2px; 
        cursor: pointer;
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #ff6ec7; 
    }

    button:disabled {
        background-color: #cccccc; 
        cursor: not-allowed;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 18px;
        text-align: left;
    }

    table thead tr {
        background-color: #f2f2f2;
        color: #333;
        text-align: center;
        font-weight: bold;
    }

    table th, table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
    }

    table tbody tr {
        border-bottom: 1px solid #ddd;
    }

    table tbody tr:nth-of-type(even) {
        background-color: #f9f9f9;
    }

    table tbody tr:last-of-type {
        border-bottom: 2px solid #ffc0cb;
    }

    table tbody tr:hover {
        background-color: #f1f1f1;
    }

    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>