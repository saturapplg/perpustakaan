@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-14">

    <h1 class="text-2xl font-semibold mb-8">
        Koleksi Buku
    </h1>

    <div class="grid grid-cols-2 md:grid-cols-5 gap-6">

        @foreach ($books as $book)
            <div class="bg-white border rounded-lg p-3">

                {{-- COVER --}}
                <img
                    src="{{ asset('storage/' . $book->cover) }}"
                    class="h-48 w-full object-cover rounded mb-3"
                >

                {{-- JUDUL --}}
                <div class="text-sm font-medium leading-tight">
                    {{ $book->title }}
                </div>

                {{-- AUTHOR --}}
                <div class="text-xs text-gray-500 mb-3">
                    {{ $book->author }}
                </div>

                {{-- ACTION --}}
                <div class="flex items-center justify-between">

                    {{-- ⭐ FAVORIT --}}
                    <form method="POST" action="{{ route('books.favorite', $book) }}">
                        @csrf
                        <button class="text-xl">
                            {{ $book->is_favorite ? '⭐' : '☆' }}
                        </button>
                    </form>

                    {{-- 📄 PDF --}}
                    @if ($book->pdf_file)
                        <a
                            href="{{ asset('storage/' . $book->pdf_file) }}"
                            target="_blank"
                            class="text-xs border px-2 py-1 rounded"
                        >
                            PDF
                        </a>
                    @endif

                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
