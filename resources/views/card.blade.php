<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .card {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            display: grid;
            font-family: "Trebuchet MS", sans-serif;
            height: 200px;
            margin: 20px auto;
            width: 350px;
        }
        .front {
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(4, 1fr);
        }
        .front .blue {
            background-color: #4cc9c8;
            grid-column: 8 / span 5;
            grid-row: 1 / span 4;
        }
        .front .yellow {
            background-color: #f1ef1c;
            grid-column: 1 / span 7;
            grid-row: 1 / span 4;
        }
        .front .pink {
            background-color: #fa001a;
            -webkit-clip-path: polygon(0% 0%, 100% 0%, 0% 100%);
            clip-path: polygon(0% 0%, 100% 0%, 0% 100%);
            grid-row: 1 / span 3;
            grid-column: 1 / span 11;
            position: relative;
            z-index: 2;
        }
        .front .dots {
            background: radial-gradient(#fa001a 20%, transparent 19%), radial-gradient(#fa001a 20%, transparent 19%), transparent;
            background-size: 6px 6px;
            background-position: 0 0, 3px 3px;
            grid-column: 1 / span 12;
            grid-row: 3 / span 2;
            margin: 0 0 15px 20px;
            z-index: 1;
        }
        .front .personal-intro {
            background: black;
            color: white;
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            grid-column: 4 / span 6;
            grid-row: 2 / span 2;
            -webkit-box-pack: center;
            justify-content: center;
            text-align: center;
            z-index: 3;
        }
        .front .personal-intro p {
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .front .personal-intro p:first-of-type {
            font-size: 18px;
        }
        .front .personal-intro p:last-of-type {
            font-size: 8px;
            margin-top: 5px;
        }
        .back {
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(12, 1fr);
        }
        .back .yellow {
            background-color: #f1ef1c;
            grid-column: 1 / span 9;
            grid-row: 1 / span 3;
        }
        .back .top.dots {
            background: radial-gradient(#4cc9c8 20%, transparent 19%), radial-gradient(#4cc9c8 20%, transparent 19%), transparent;
            background-size: 6px 6px;
            background-position: 0 0, 3px 3px;
            grid-column: 8 / span 6;
            grid-row: 2 / span 3;
        }
        .back .personal-info {
            grid-column: 2 / span 6;
            grid-row: 5 / span 6;
        }
        .back .personal-info p {
            font-size: 10px;
        }
        .back .personal-info p:first-of-type {
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .back .personal-info p:nth-of-type(2) {
            font-size: 12px;
            margin-bottom: 15px;
        }
        .back .bottom.dots {
            background: radial-gradient(#4cc9c8 20%, transparent 19%), radial-gradient(#4cc9c8 20%, transparent 19%), transparent;
            background-size: 6px 6px;
            background-position: 0 0, 3px 3px;
            grid-column: 1 / span 8;
            grid-row: 11 / span 2;
            z-index: 2;
        }
        .back .pink {
            background-color: #fa001a;
            grid-column: 8 / span 5;
            grid-row: 10 / span 3;
        }

    </style>
</head>
<body>

<div class="card back">
    <div class="yellow">
        <p style="font-size: 20px; margin-top: 0px; text-align: center">Colony Managment</p>
        <p style="font-size: 15px; margin-top: -15px; text-align: center">Visitor Card</p>
    </div>
    <div class="top dots"></div>
    <div class="personal-info">
        <p>{{$data->name}}</p>
        <p style="margin-top: -15px">{{$data->cnic}}</p>
        <p style="margin-top: -16px">{{$data->vehicle_type}}</p>
        <p style="margin-top: -10px">{{$data->vehicle_destination}}</p>

    </div>
    <div class="bottom dots"></div>
    <div class="pink"></div>
</div>
</body>
</html>



