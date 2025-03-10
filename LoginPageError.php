<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập lỗi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #E5E5E5; 
        }
        .container {
            width: 1440px;
            height: 1024px;
            background: #FFFFFF;
            box-shadow: 0px 2px 10px 3px rgba(0, 0, 0, 0.25);
            position: relative;
        }
        .header {
            width: 1440px;
            height: 75px;
            background: #007EC6;
            position: relative;
        }
        .header-text {
            font-family: 'Noto Sans JP', sans-serif;
            color: #FFFFFF;
            position: absolute;
        }
        /* Text 1: "Hệ thống quản lý đơn" */
        .text-1 {
            width: 240px;
            height: 29px;
            top: 26px;
            left: 233px;
            font-weight: 400;
            font-size: 24px;
            line-height: 100%;
        }
        /* Text 2: "Sanshin" */
        .text-2 {
            width: 158px;
            height: 48px;
            top: 15px;
            left: 42px;
            font-weight: 700;
            font-size: 40px;
            line-height: 100%;
        }
        /* Text 4: "Sanshin IT Solution" ở giữa màn hình */
        .text-4 {
            width: 541px;
            height: 82px;
            top: 345px;
            left: 449px;
            font-weight: 700;
            font-size: 56px;
            line-height: 100%;
            text-align: center;
            color: #007EC6;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            border-radius: 10px;
        }
        /* TextInput */
        .text-input {
            width: 475px;
            height: 43px;
            border: none;
            border-radius: 4px;
            padding: 8px;
            font-size: 16px;
            font-family: 'Noto Sans JP', sans-serif;
            outline: none;
            position: absolute;
            background: #FFFFFF;
            display: flex;
            align-items: center;
            position: relative;
        }
        .text-input-1 {
            top: 400px;
            left: 484px;
        }
        .text-input-2 {
            top: 410px;
            left: 484px;
        }
        .text-label {
            position: absolute;
            top: 50%;
            left: -20px;
            transform: translateY(-50%);
            font-family: 'Noto Sans JP', sans-serif;
            font-weight: 400;
            font-size: 14px;
            color: #0D0C0C;
            width: 120px;
            text-align: right;
        }
        .text-label span {
            color: #BD0101;
        }
        .rectangle-15 {
            width: 342px;
            height: 40px;
            position: absolute;
            top: 3px;
            left: 133px;
            background: #FFFFFF;
            border: 1px solid #CCCCCC;
            border-radius: 4px;
            display: flex;
            align-items: center;
            padding-left: 10px;
            font-size: 14px;
            color: #999;
            font-family: 'Noto Sans JP', sans-serif;
        }
        .text-input input {
            width: 100%;
            height: 100%;
            border: none;
            padding-left: 130px;
            background: transparent;
            outline: none;
            font-size: 16px;
            font-family: 'Noto Sans JP', sans-serif;
        }
        /* Button */
        .button-1 {
            width: 161px;
            height: 50px;
            position: absolute;
            top: 615px;
            left: 617px;
            background: #007EC6;
            border: 1px solid #CCCCCC;
            border-radius: 4px;
            padding: 4px 24px;
            font-family: 'Noto Sans JP', sans-serif;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }
        .button-2 {
            width: 156px;
            height: 50px;
            position: absolute;
            top: 615px;
            left: 803px;
            background: #E2005C;
            border: 1px solid #CCCCCC;
            border-radius: 4px;
            padding: 4px 24px;
            font-family: 'Noto Sans JP', sans-serif;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-text text-1">Hệ thống quản lý đơn</div>
            <div class="header-text text-2">Sanshin</div>
            <div class="header-text text-3"></div>
        </div>
        <div class="header-text text-4">Sanshin IT Solution</div>
        
        <div class="text-input text-input-1">
            <span class="text-label">Tên đăng nhập <span>*</span></span>
            <div class="rectangle-15">Tên đăng nhập</div>
            <input type="text">
        </div>

        <div class="text-input text-input-2">
            <span class="text-label">Mật khẩu <span>*</span></span>
            <div class="rectangle-15">Mật khẩu</div>
            <input type="password">
        </div>

        <!-- Button -->
        <button class="button-1">Login</button>
        <button class="button-2">Clear</button>
    </div>
</body>
</html>
