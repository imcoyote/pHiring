@extends('layouts.master')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <form action="/jobCreate" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="jobTitle" class="col-sm-2 col-form-label">Titre</label>
                <div class="col-sm-10">
                    <input name="jobTitle" type="text" class="form-control" id="jobTitle">
                </div>
            </div>
            <div class="form-group row">
                <label for="publishDate" class="col-sm-2 col-form-label">Date de publication</label>
                <div class="col-sm-10">
                    <input name="publishDate" type="date" class="form-control" id="publishDate">
                </div>
            </div>
            <div class="form-group row">
                <label for="enDate" class="col-sm-2 col-form-label">Date limite</label>
                <div class="col-sm-10">
                    <input name="endDate" type="date" class="form-control" id="endDate">
                </div>
            </div>
            <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label">Filière</label>
                <div class="col-sm-10">
                    <select name="department" id="department">
                        @foreach($departmentList as $department)
                            <option value="{{ $department->id_departement }}">{{ $department->departement_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sauvegarder
    </main>
@endsection