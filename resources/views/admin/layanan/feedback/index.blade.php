@extends('layouts.app')

@section('title', 'Kritik dan Saran | Desa Cikamunding')

@section('page-title', 'Kritik dan Saran')

@section('location', 'Layanan')

@section('location-title', 'Kritik dan Saran')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">List Kritik dan Saran</h3>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Pesan</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($feedbacks as $feedback)
                                        <tr>
                                            <td>{{ $feedback->nama ?? 'Anonim' }}</td>
                                            <td>{{ $feedback->email ?? 'Tidak tersedia' }}</td>
                                            <td>{{ $feedback->message }}</td>
                                            <td>{{ $feedback->created_at->format('d-m-Y H:i') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
