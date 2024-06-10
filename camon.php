<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cảm ơn</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        #header {
            text-align: center;
            margin-top: 50px;
            animation: fadein 2s;
        }

        h1 {
            font-size: 48px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        p {
            font-size: 24px;
            color: #555;
            margin-bottom: 40px;
        }

        #image {
            display: block;
            margin: 0 auto;
            width: 200px;
            height: 200px;
            animation: rotate 2s infinite;
        }

        #button {
            display: block;
            margin: 0 auto;
            width: 200px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            font-size: 24px;
            color: #fff;
            background-color: #4CAF50;
            border-radius: 25px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        #button:hover {
            transform: scale(1.1);
            box-shadow: 0 0 10px #4CAF50;
        }

        @keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Cảm ơn bạn đã mua hàng!</h1>
        <p>Chúng tôi đã nhận được đơn hàng của bạn và sẽ sớm xử lý.</p>
        <img id="image" src="imgsql/kisspng-check-mark-tick-clip-art-green-tick-mark-5aa8e456cec986.968665711521017942847-removebg-preview.png" alt="icon"> <br>
        <a id="button" href="Index1.php">Tiếp tục mua sắm</a>
    </div>
</body>
</html>
