@extends('layouts.back.app')

@section('title')
Barang
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>@yield('title')</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Barang
                <button type="button" wire:click="create"
                    class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#create">
                    Tambah
                </button>
            </div>
            <div class="card-body">
                <livewire:administrator.barang.barang />
            </div>
        </div>
    </section>
</div>
@endsection

