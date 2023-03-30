<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Dettaglio album {{$album->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{$album->title}}</h5>
                            <label>Artista:</label>
                            <p>{{$album->artist}}</p>
                            <label>Anno uscita:</label>
                            <p>{{$album->release}}</p>
                            <label>Descrizione:</label>
                            <p>{{$album->description}}</p>
                            <label>Inserito da:</label>
                            <p>{{$album->user->name}}</p>

                            <label>Generi:</label>
                            {{-- @foreach($album->genres as $genre)
                                <p>{{$genre->name}}</p>
                            @endforeach --}}

                            @forelse ($album->genres as $genre)
                                <p>{{$genre->name}}</p>
                            @empty
                                <p>Non ci sono generi collegati</p>
                            @endforelse

                            <div class="d-flex">
                                <a href="{{route('indexAlbum')}}" class="btn btn-primary">Torna indietro</a>
                                <a href="{{route('editAlbum', compact('album'))}}" class="btn btn-warning">Modifica</a>
                                <a href="#" onclick="event.preventDefault(); document.querySelector('#form-delete').submit();" class="btn btn-danger">Cancella</a>
                                <form action="{{route('deleteAlbum', compact('album'))}}" method="POST" id="form-delete" class="d-none">
                                    @method('delete')
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</x-layout>