<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa sinh viên</title>
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

        .container {
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

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            width: 100%;
            margin-top: 5px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #4a90e2;
            outline: none;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
        }

        .btn-primary {
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

        .btn-primary:hover {
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
    <div class="container">
        <h1>Chỉnh sửa sinh viên</h1>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}"
                    required>
            </div>
            <div class="form-group">
                <label for="class">Lớp</label>
                <input type="text" class="form-control" id="class" name="class" value="{{ $student->class }}"
                    required>
            </div>
            <div class="form-group">
                <label for="faculty">Khoa</label>
                <input type="text" class="form-control" id="faculty" name="faculty" value="{{ $student->faculty }}"
                    required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}"
                    required>
            </div>
            <button type="submit" class="btn-primary">Cập nhật</button>
            <button type="button" class="go-back-button" onclick="window.history.back();">Quay lại</button>
        </form>
    </div>
</body>

</html>
