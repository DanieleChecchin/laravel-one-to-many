@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea un nuovo progetto</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Nome del progetto</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="type_id" class="form-label text-light">Tipologia del Progetto</label>
                        <select name="type_id" id="type_id" class="form-select" required>
                            <option value="">Seleziona un Tipo</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Salva Progetto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
