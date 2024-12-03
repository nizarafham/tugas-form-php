<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nomer = htmlspecialchars($_POST['nomer']);
    $kebutuhan = htmlspecialchars($_POST['kebutuhan']);

    echo "
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #2d3e4f, #e9ecef);
            margin: 0;
            padding: 0;
            height: 100vh;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            margin-top: 20vh;
        }
        button {
            display: inline-block;
            background: #007bff;
            color: #ffffff;
            font-size: 1rem;
            font-weight: bold;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        button:hover {
            background: #0056b3;
        }
    </style>
    <div class='container'>
        <h2>Data Telah Terkirim</h2>
        <p>No WhatsApp: $nomer</p>
        <p>Kebutuhan: $kebutuhan</p>
        <br>
        <button onclick=\"location.href='index.html'\">Cari Lagi</button>
    </div>
    ";
} else {
    echo "<p>Form tidak dikirim dengan metode POST.</p>";
}
?>
