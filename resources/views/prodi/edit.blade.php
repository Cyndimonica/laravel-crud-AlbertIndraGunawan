@section{'layout.master'}
@section{'title', 'Halaman Edit Prodi'}

@section('content')
<div class="row pt-4">
    <div class="col">
        <h2>Form Edit Prodi</h2>
        @if (session()->has('into'))
        <div class="alert alert-succes">
            {{ session()->get('info') }}
        </div>
        @endif 
        <form action="{{ route('prodi.update' ,['prodi' => $prod->id]) }}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="id" class="form-control" value="{{ old('nama') ?? $prodi->nama }}">
                {{ --null coalscing operator-- }}
                @error('nama')
                    <div class="text-danger"> {{ $message }} </div>
                    @enderror
            </div>
            <button type="submnit" class="btn btn primary mt-2">Ubah</button>
        </form>
    </div>
</div>
@endsection