<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>VBS Generator</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="style.css">
   </head>
   <body class="m-4" style="position: initial; overflow: initial;">
      <h1>VBS Generator</h1>
      <br>
      <p>Use the tools below to generate a VBS file!</p>
      <h3>General</h3>
      <br>
      <button class="btn btn-secondary"><i class="fa-solid fa-rotate-left"></i> Delete last</button>
      <p></p>
      <h3>Scripting</h3>
      <br>
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal"><i class="fa-solid fa-plus"></i> Create Message Box</button>
      <button class="btn btn-secondary"><i class="fa-solid fa-plus"></i> Delete last</button>
      <button class="btn btn-secondary"><i class="fa-solid fa-plus"></i> Delete last</button>
      <p></p>
      <h4>Generated Code:</h4>
      <br>
      <div class="text-wrap">
         <textarea id="textA" readonly=""></textarea>
         <div id="copyToClipboard-a" class="clipboard icon"></div>
      </div>
      <script src="script.js"></script>
      <script src="https://kit.fontawesome.com/0edde49b86.js" crossorigin="anonymous"></script>
   </body>
</html>