<div>
    @if (session()->has('message'))
    <div class="alert alert-light-success alert-dismissible show fade">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="col-sm-12">
        <div class="form-group position-relative has-icon-right">
            <input wire:model="search" type="text" class="form-control"
                placeholder="Search..">
            <div class="form-control-icon">
                <i class="bi bi-search"></i>
            </div>
        </div>
    </div>
    <table class="table table-striped" id="table1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Gambar</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog as $item)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$item->judul}}</td>
                <td>{{$item->konten}}</td>
                <td>
                    <a href="{{url(Storage::url('blog/'.$item->gambar))}}" class="btn btn-sm btn-info" target="_blank">
                        Lihat</a>
                </td>
                <td>
                    <button type="button" wire:click="edit({{ $item->id }})" class="btn btn-sm btn-warning"
                        data-bs-toggle="modal" data-bs-target="#edit">
                        Ubah
                    </button>
                    <button wire:click="delete({{ $item->id }})" type="button"
                        class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $blog->links() }}

    {{-- Modal --}}
    @include('livewire.administrator.blog.create')
    @include('livewire.administrator.blog.edit')
</div>
