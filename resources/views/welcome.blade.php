@extends("layout")  {{--sadrzi fajl layout u kom je navigacija i footer--}}

@section("nazivStranice") {{-- u layoutu smo yiled da je title naziv stranice --}}
    Moj Sajt
@endsection


@section("sadrzajStranice") {{-- u layoutu smo stavili (yiled) da je sadrzajStranice sve izmedju navigacije i footer --}}
    <p class="text-primary">Trenutno sati je: {{ $sat }}</p>
    <p class="text-danger ">Trenutno vrijeme je {{ $trenutnoVrijeme  }}</p>
    <p>{{ $poruka }}</p>


    <br><br>

    @foreach($latestProducts as $product)
        {{$product->name}}
        <br>
        {{$product->description}}
        <br>
        Kolicina: {{$product->amount}}
        <br>
        Cijena: {{$product->price}}
        <br><br>

    @endforeach
@endsection
