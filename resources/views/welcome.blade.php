<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GitHub Repositories</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/25/25231.png"> 
    <livewire:styles />

    <script src="//unpkg.com/alpinejs" defer></script>

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body>

    <div class="px-3 py-3 mx-auto text-center pt-md-5 pb-md-4">
        <img class="mx-auto mb-4 d-block" src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="" width="72" height="72">
        <p class="lead">guiiivale repositories - <a href="https://github.com/guiiivale/" target="_blank">GitHub</a></p>
    </div>

    <div class="container">
      <livewire:repository-table theme="bootstrap-4" />
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <livewire:scripts />
{{--    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>--}}
    <script src="https://unpkg.com/@nextapps-be/livewire-sortablejs@0.1.1/dist/livewire-sortable.js"></script>
</body>
</html>