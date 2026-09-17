<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f0f2f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-card {
            background: #ffffff;
            padding: 40px 32px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            width: 320px;
            text-align: center;
        }

        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #d9d9d9;
            border: 3px solid #cfcfcf;
            margin: 0 auto 28px auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .avatar svg {
            width: 60px;
            height: 60px;
            fill: #9a9a9a;
        }

        .info-box {
            background-color: #e6e6e6;
            border-radius: 8px;
            padding: 12px 16px;
            margin-bottom: 12px;
            font-size: 16px;
            color: #333;
            text-align: center;
        }

        .info-box:last-child {
            margin-bottom: 0;
        }

        .info-box strong {
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="avatar">
            <svg viewBox="0 0 24 24">
                <path d="M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.5c-3.3 0-9.8 1.6-9.8 4.9v2.4h19.6v-2.4c0-3.3-6.5-4.9-9.8-4.9z"/>
            </svg>
        </div>

       <div class="info-box"><strong>{{ $nama }}</strong></div>
<div class="info-box"><strong>{{ $kelas }}</strong></div>
<div class="info-box"><strong>{{ $npm }}</strong></div>
    </div>

</body>
</html>