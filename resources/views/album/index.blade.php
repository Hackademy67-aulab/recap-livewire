<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Tutti gli album</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($albums as $album)
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{$album->title}}</h5>
                            <label>Artista:</label>
                            <p>{{$album->artist}}</p>

                            <a href="{{route('showAlbum', compact('album'))}}" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>