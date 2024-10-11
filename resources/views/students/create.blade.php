<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-image: url('https://i.pinimg.com/564x/49/54/3e/49543eee199fa8c5bf9cf0a2c6e2cbcf.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: left;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            /* Kích thước chữ tiêu đề */
            color: #4a90e2;
            /* Màu chữ tiêu đề */
        }

        .login-container input {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            width: 100%;
            margin-top: 5px;
            transition: border-color 0.3s;
        }

        .login-container input:focus {
            border-color: #4a90e2;
            outline: none;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
        }

        .login-container label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
            font-size: 16px;
        }

        .primary-button {
            background-color: #4a90e2;
            color: white;
            padding: 12px;
            margin-top: 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .primary-button:hover {
            background-color: #357ab8;
            transform: translateY(-2px);
        }

        .go-back-button {
            background-color: #ccc;
            color: black;
            padding: 12px;
            margin-top: 10px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .go-back-button:hover {
            background-color: #aaa;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Thêm sinh viên</h1>
        <form method="POST" action="{{ route('students.store') }}">
            @csrf

            <!-- student_code -->
            <div>
                <x-input-label for="student_code" :value="__('student_code')" />
                <x-text-input id="student_code" class="block mt-1" type="text" name="student_code" required />
                <x-input-error :messages="$errors->get('student_code')" class="mt-2" />
            </div>

            <!-- Tên -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Tên')" />
                <x-text-input id="name" class="block mt-1" type="text" name="name" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Lớp -->
            <div class="mt-4">
                <x-input-label for="class" :value="__('Lớp')" />
                <x-text-input id="class" class="block mt-1" type="text" name="class" required />
                <x-input-error :messages="$errors->get('class')" class="mt-2" />
            </div>

            <!-- Khoa -->
            <div class="mt-4">
                <x-input-label for="faculty" :value="__('Khoa')" />
                <x-text-input id="faculty" class="block mt-1" type="text" name="faculty" required />
                <x-input-error :messages="$errors->get('faculty')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1" type="email" name="email" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Mật khẩu -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mật khẩu')" />
                <x-text-input id="password" class="block mt-1" type="password" name="password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <button type="submit" class="primary-button">
                {{ __('Thêm') }}
            </button>
            <button type="button" class="go-back-button" onclick="window.history.back();">
                Quay lại
            </button>
        </form>
    </div>
</body>

</html>
