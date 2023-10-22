<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-5xl font-bold underline text-center text-blue-500">
    Hello world!
  </h1>
 <?php $pizzas = [
    ['type' => 'hawaiian', 'base' => 'cheesy crust'],
    ['type' => 'mushroom', 'base' => 'thin'],
    ['type' => 'cheezy', 'base' => 'super cheesy crust']
];
?>

  <div class="text-center text-teal-700">
    @foreach ($pizzas as $pizza)
        <div>{{ $pizza['type'] }} - {{ $pizza['base'] }}</div>
    @endforeach
  </div>
</body>
</html>

