@extends('layout')
@section('tieudetrang')
    Tin trong loại {{ $categoryName }}
@endsection
@section('noidung')
    <h1>Các tin trong loại {{ $categoryName }}</h1>
    <ul>
        @foreach ($listtin as $t)
            <li class= "tittle">
                <div class="row">
                    <h3>
                        <a href="{{ url('noidung/' . $t->id) }}">
                            {{ $t->tieuDe }}
                        </a>
                    </h3>
                    <p>{{ $t->tomTat }}</p>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

