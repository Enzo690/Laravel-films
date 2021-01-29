@extends('template')
@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Contactez-moi</h4>
            <div class="card-body">
                <form action="{{ url('contact') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Votre nom" value="{{ old('nom') }}">
                        @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
                        @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!DOCTYPE html>
                    <html lang="fr">
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                        <title>Mon joli site</title>
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                        <style>
                            textarea { resize: none; }
                            .card { width: 25em; }
                        </style>
                    </head>
                    <body>
                    </body>
                    </html>

                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>
            </div>
        </div>
    </div>
@endsection
