<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - File Upload &amp; Image Preview</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<h2>File Upload & Image Preview</h2>

<!-- Upload  -->
<form id="file-upload-form" class="uploader" method="POST" action="/upload_images" enctype="multipart/form-data">
    @csrf
  <input id="file-upload" type="file" name="file" accept="image/*" />

  <label for="file-upload" id="file-drag">
    <img id="file-image" src="#" alt="Preview" class="hidden">
    <div id="start">
      <i class="fa fa-download" aria-hidden="true"></i>
      <div>Selecione a imagem ou arraste para cá</div>
      <div id="notimage" class="hidden">Por favor, selecione a imagem</div>
      <span id="file-upload-btn" class="btn btn-primary">Selecione a imagem</span>
    </div>
    <div id="response" class="hidden">
      <div id="messages"></div>
    </div>
        <button type="submit" name="myButton" value="foo" class="btn btn-primary">Enviar</button>
  </label>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="{{asset('js/script.js')}}"></script>

</body>
</html>
