<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>News Detail</title>
    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            font-size: 28px;
            color:  #367AFF; 
            margin-top: 20px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            text-transform : uppercase;


        }

        p {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            line-height: 1.6;
            color: #444;
            text-align: justify;
        }

        .date-time {
            text-align: right;
            font-size: 14px;
            color: #888;
            margin: 10px 20px;
        }

        .summary {
            font-style: italic;
            color: #555;
            margin: 20px 0;
            font-weight: bold; 
        }

        .published-date {
            text-align: right;
            font-size: 14px;
            color: #888;
            margin: 10px 20px;
        }
    </style>
</head>
<body>
<div class="container-lg">

    <!-- Display current date and time -->
    <div class="date-time">
        {{ \Carbon\Carbon::now()->format('l, F j, Y - H:i:s') }}
    </div>

    <!-- Display article title -->
    <h1>{{ $query->tieuDe }}</h1>

    <!-- Display summary -->
    <div class="summary">
        <strong>Tóm tắt:</strong> {{ $query->tomTat }}
    </div>
    <p>{!! $query->noiDung !!}</p>

    <!-- Display publish date -->
    <div class="published-date">
        <strong> Ngày đăng:</strong> {{ $query->ngayDang }}
    </div>
 </div>

</body>
</html>
