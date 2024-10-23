<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marlena's Vintage Shop</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0e4d7;
            color: #333;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg'); /* Add a vintage background image */
            background-size: cover;
            background-attachment: fixed;
        }
        header {
            background-color: rgba(139, 91, 41, 0.8);
            color: white;
            text-align: center;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }
        h1 {
            font-family: 'Georgia', serif;
            font-size: 3em;
            margin: 0;
        }
        h2 {
            font-family: 'Georgia', serif;
            color: #d4b39a;
        }
        nav {
            background-color: rgba(212, 179, 154, 0.8);
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: rgba(139, 91, 41, 0.6);
        }
        .content {
            text-align: center;
            margin: 20px auto;
            max-width: 800px;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #d4b39a;
        }
        img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            margin: 10px;
            border-radius: 5px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(139, 91, 41, 0.8);
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Marlena's Vintage Shop</h1>
        <h2>Your one-stop shop for vintage treasures!</h2>
    </header>

    <nav>
        <a href="home_page.php">Home</a>
        <a href="aboutus.html">About</a>
        <a href="shop.html">Shop</a>
        <a href="contactpage.html">Contact</a>
        <a href="processorder.php">Order Form</a> <!-- Link to the order form -->

    </nav>

    <div class="content">
        <div>
            <img src="vintage-item1.jpg" alt="Vintage Item 1" />
            <img src="vintage-item2.jpg" alt="Vintage Item 2" />
            <img src="vintage-item3.jpg" alt="Vintage Item 3" />
        </div>

    </div>

    <footer>
        <p>&copy; 2024 Marlena's Vintage Shop. All rights reserved.</p>
    </footer>
</body>
</html>
