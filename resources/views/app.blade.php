<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energeek To Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F8F9FA;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 150px;
        }
        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        .frame-container {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 30px;
            gap: 60px;
            width: 138px;
            height: 80px;
            background: #FFFFFF;
            border-radius: 6px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .form-group label {
            margin: 0; 
        }
        .form-group input {
            width: 200px;
            height: 25px;
        }
        .todo-list {
            margin-bottom: 20px;
        }
        .todo-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .todo-item input {
            flex-grow: 1;
            margin-right: 10px;
        }
        .todo-item select {
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ddd;
            outline: none;
            transition: border-color 0.3s;
            margin-right: 10px;
        }
        .todo-item select:focus {
            border-color: #007BFF;
        }
        .todo-item button {
            background-color: #FF4D4F;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .todo-item button:hover {
            background-color: #FF6B6B;
        }
        .add-todo {
            background-color: #FFD1D1;
            color: #FF4D4F;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            display: inline-block;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }
        .add-todo:hover {
            background-color: #FFBBBB;
        }
        .submit-btn {
            background-color: #28A745;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 15px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }
        .submit-btn:hover {
            background-color: #218838;
        }
        .header-container {
            display: flex;
            align-items: center; /* Vertikal alignment */
            justify-content: space-between; /* Jarak antar elemen */
        }

        .header-container h2 {
            margin: 0; /* Hapus margin default */
        }

        .header-container button {
            padding: 10px 20px; /* Padding untuk tombol */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
    <img src="{{ asset('assets/logo.svg') }}" alt="Energeek Logo">
    </div>

    <div class="frame-container">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" placeholder="Nama">
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Username">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email">
        </div>
    </div>

    <div class="header-container">
        <h2>To Do List</h2>
        <button class="add-todo">+ Tambah To Do</button>
    </div>

    <div class="todo-list">
        <div class="todo-item">
            <input type="text" placeholder="Contoh : Perbaikan api master">
            <select>
                <option>To Do</option>
                <option>In Progress</option>
                <option>Done</option>
            </select>
            <button><img src="{{ asset('assets/sampah.svg') }}" alt=""></button>
        </div>
        <div class="todo-item">
            <input type="text" placeholder="Contoh : Perbaikan api master">
            <select>
                <option>To Do</option>
                <option>In Progress</option>
                <option>Done</option>
            </select>
            <button><img src="{{ asset('assets/sampah.svg') }}" alt=""></button>
        </div>
        <div class="todo-item">
            <input type="text" placeholder="Contoh : Perbaikan api master">
            <select>
                <option>To Do</option>
                <option>In Progress</option>
                <option>Done</option>
            </select>
            <button><img src="{{ asset('assets/sampah.svg') }}" alt=""></button>
        </div>
    </div>


    <button class="submit-btn">SIMPAN</button>
</div>

</body>
</html>
