
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
    <style>
        /* Set font and color for the entire document */
        body {
            font-family: Arial, sans-serif;
            color: #000; /* Set all text to black */
        }

        /* Center the main title */
        h1 {
            text-align: center;
            font-size: 28px;
            color: #000;
        }

        /* Style each article title */
        h3 {
            font-size: 18px;
            color: #367AFF; 
            margin-top: 15px;
            margin-bottom: 5px;
        }

        /* Style the list */
        ul {
            list-style-type: none;
            padding: 0;
            max-width: 600px;
            margin: auto; /* Centers the list */
        }

        /* Style each list item */
        li {
            font-size: 16px;
            color: #808080;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        /* Style the link */
        a {
            color: #000; /* Set link color to black */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Style for the post date */
        em {
            font-size: 14px;
            color: #555; /* Set a slightly lighter black for the date */
            display: block;
            margin-top: 5px;
        }

        /* Divider line */
        p {
            color:#C2C2C2;
            margin: 0;
            font-size: 12px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Bảng tin mới nhất</h1>
    <ul>
        @foreach ($query as $item)
            <li>
                <h3>Bài viết số {{ $item->id }}</h3>
                <a href="{{ url('chitiet/' . $item->id) }}"> 
                    {{ $item->tieuDe }} - {{ $item->xem }} lượt xem 
                </a>
                <em>{{ $item->ngayDang }}</em>
                <p>--------------------------------------------------</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
