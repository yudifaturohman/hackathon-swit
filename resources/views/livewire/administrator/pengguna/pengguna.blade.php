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
                <th>Nama</th>
                <th>Email</th>
                <th>No. Hp</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengguna as $item)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->telp}}</td>
                <td>
                    <button wire:click="delete({{ $item->id }})" type="button"
                        class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pengguna->links() }}

    {{-- Modal --}}
    @include('livewire.administrator.pengguna.create')
</div>
