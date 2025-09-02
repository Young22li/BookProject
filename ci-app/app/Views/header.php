<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK.com</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        
        .header {
            background: #f8f9fa;
            padding: 1rem 0;
            border-bottom: 1px solid #ddd;
        }

        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #007bff;
        }

        
        .main-content {
            flex: 1;
            padding: 2rem;
            text-align: center;
        }

        .content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        
        .footer {
            background: #333;
            color: #fff;
            margin-top: auto;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h4 {
            margin-bottom: 1rem;
            color: #fff;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #fff;
        }

        
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }

            .nav-links {
                gap: 1rem;
            }

            .footer-content {
                padding: 1rem;
                gap: 1rem;
            }
        }
    </style>
</head>


<body>
<header class="header">
        <nav class="navbar">
            <a href="/" class="logo">BOOK.com</a>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/Book/add">Add Book</a></li>
                <li><a href="/Book/view">View Book</a></li>
            </ul>
        </nav>
</header>
<main class="main-content">