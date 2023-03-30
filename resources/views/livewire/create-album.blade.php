<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Inserisci Album</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form wire:submit.prevent="store" class="shadow p-5">
                    <div class="mb-3">
                        <label for="exampleInputTitle" class="form-label">Titolo album</label>
                        <input wire:model.lazy="title" type="text" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp">
                        @error('title') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nome Artista</label>
                        <input wire:model.lazy="artist" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                        @error('artist') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputRelease" class="form-label">Anno uscita</label>
                        <input wire:model.lazy="release" type="text" class="form-control" id="exampleInputRelease" aria-describedby="releaseHelp">
                        @error('release') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescription" class="form-label">Piccola descrizione:</label>
                        <textarea wire:model.lazy="description" class="form-control" id="exampleInputDescription" cols="30" rows="10"></textarea>
                        @error('description') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputStore" class="form-label">Generi:</label>
                        <select multiple id="exampleInputStore" class="form-control" wire:model="genresSelected">
                            @foreach($allGeners as $genre)
                                <option value="{{$genre->id}}">{{$genre->name}}</option>
                            @endforeach
                        </select>
                    </div>
            

                    <button type="submit" class="btn btn-primary">Crea Album</button>
                  </form>
            </div>
        </div>
    </div>
</div>
