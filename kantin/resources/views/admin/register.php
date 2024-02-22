<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background-color: yellow;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .button {
            background-color: #ff9800;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #ff9800;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Register</h2>
    <form action="#" method="post">
        <input type="text" name="fullname" placeholder="Nama Lengkap" required>
        <input type="text" name="phone" placeholder="Nomor HP" required>
        <input type="email" name="email" placeholder="Email" required>
        <select name="gender" required>
            <option value="" disabled selected>Jenis Kelamin</option>
            <option value="male">Laki-laki</option>
            <option value="female">Perempuan</option>
        </select>
        <input type="file" name="profile_pic" accept="image/*" required>
        <button type="submit" class="button">Register</button>
    </form>
</div>

</body>
</html>