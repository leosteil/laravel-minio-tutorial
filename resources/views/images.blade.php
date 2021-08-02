<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Imagens</title>
</head>
<body>
    <ul>
        @foreach($imagesUrl as $url)
            <tr>
                <li>
                <img class="w-100" src="{{Storage::disk('s3')->url($url)}}" alt="">
                </li>
            </tr>
        @endforeach
    </ul>
</body>
</html>
