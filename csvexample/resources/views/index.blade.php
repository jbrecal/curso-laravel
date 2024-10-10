<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
    <title>CSV Example</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('export') }}">Export CSV</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="POST" action="{{ route('import') }}" enctype="multipart/form-data">
            <h3>Import CSV</h3>
            @csrf
            <input type="file" name="document_csv" required />
            <input type="submit" value="Import CSV" />
        </form>

        <section>
            @forelse ($products as $product)
                <article>
                    <header>
                        <h2>{{ $product->name }}</h2>
                    </header>
                    <p>{{ $product->description }}</p>
                    <footer>
                        <strong>{{ $product->price }} $</strong>
                    </footer>
                </article>
            @empty
                <p>No data</p>
            @endforelse
        </section>
    </main>
</body>

</html>
