<x-layout>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <h1 class="text-center">Modifica Album {{$album->title}}</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <form method="POST" action="{{route('updateAlbum', compact('album'))}}" class="shadow p-5">

                        @method('put')

                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputTitle" class="form-label">Titolo album</label>
                            <input name="title" type="text" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp" value="{{$album->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Nome Artista</label>
                            <input name="artist" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" value="{{$album->artist}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputRelease" class="form-label">Anno uscita</label>
                            <input name="release" type="text" class="form-control" id="exampleInputRelease" aria-describedby="releaseHelp" value="{{$album->release}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputDescription" class="form-label">Piccola descrizione:</label>
                            <textarea name="description" class="form-control" id="exampleInputDescription" cols="30" rows="10">{{$album->description}}</textarea>
                        </div>
    
                        <button type="submit" class="btn btn-primary">Modifica album</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>