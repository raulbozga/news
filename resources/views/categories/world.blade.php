<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Serviciu stiri</title>
<link rel="stylesheet" type='text/css' href="../CSS/style.css" />

<head>



</head>

<header>
    <a href="/">
        <h1 style="position: fixed ; padding: right 1rem;"><img src="../poze/logo2.png "></h1>
    </a>

</header>

<body class="body-world">
    <x-logare />

    <div class="stire">
        <?php

        $category = "world";

        $file = "https://newsdata.io/api/1/news?apikey=pub_84288303248520ee801ef808f4ef5dc36fc0&category={$category}";
        //$file = "http://api.mediastack.com/v1/news?access_key=26c3c6cb2249167251ba46a4774c4b0c&country=ro";
        $data = file_get_contents($file);

        $result = json_decode($data);
        $user_data = $result->results;

        ?>
        <h2>World news</h2>
        <a href="/">
            Back </a>
        <?php foreach ($user_data as $user) : ?>
            <article>


                <h2>
                    <a href="{{$user->link}}">{{$user->title}} </a>
                </h2>

                <a href="{{$user->link}}">
                    <img src="{{$user->image_url}} " style=" max-width: 100%; height: auto; margin: auto; border-radius: 8px;">
                </a>

                <h3>
                    {{$user->pubDate}}
                </h3>

                <div>
                    {{$user->description}}

                </div>

                <div>


                </div>
            </article>

        <?php endforeach; ?>



    </div>

    <a style="padding-bottom: 5rem ;" href="/">
        Back </a>

    <x-footer />

</body>

</html>