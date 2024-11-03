<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
            font-weight: bold;
        }
        input, textarea {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            resize: vertical;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">blog</a>
    <a href="/contact">contact</a>

    <div class="container">
        <h1>Hubungi Kami</h1>
        <form action="#" method="post">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
            
            <label for="message">Pesan</label>
            <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
            
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
