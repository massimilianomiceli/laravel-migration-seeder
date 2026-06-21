<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div class="container py-4">
        <h1 class="mb-4">Treni in partenza</h1>

        <div class="row g-4">
            @forelse ($trains as $train)
                <div class="col-12 col-md-6 col-lg-4">
                    <x-train-card :train="$train" />
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        Non ci sono treni in partenza da oggi in avanti.
                    </div>
                </div>
            @endforelse
        </div>
    </div>

</body>

</html>
