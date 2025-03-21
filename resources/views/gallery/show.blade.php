<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($images as $image)
            <div class="aspect-square">
                <img src="{{ Storage::url($image) }}" alt="Gallery image" class="w-full h-full object-cover rounded-lg">
            </div>
        @endforeach
    </div>
</body>

</html>
