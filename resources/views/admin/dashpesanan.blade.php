@extends('layouts.adminlayout')
@section('content')
          <!-- Start Pesan -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-dark">Pesanan Customer</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                          @forelse ($pesanans as $pesanan)
                          <div class="card text-dark mt-3 {{ $pesanan->status == 'DISETUJUI' ? 'bg-white' : ($pesanan->status == 'BELUM DISETUJUI' ? 'bg-green' : ($pesanan->status == 'TELAH MEMBAYAR' ? 'bg-green' : ($pesanan->status == 'TIDAK DISETUJUI' ? 'bg-red' : ''))) }}">
                            <div class="m-3 d-grid gap-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Pesanan {{$pesanan->nama}}, {{$pesanan->jenis}} ({{$pesanan->ukuran}})</h4>
                                    <a class="btn btn-warning" href="{{ route('status_pesanan_admin',['pesanan' => $pesanan->nomor]) }}" title="Edit"><i>Edit</i></a>
                                </div>
                                <p class="mb-0">Pesanan Milik {{$pesanan->nama}} dengan jenis {{$pesanan->jenis}} ukuran {{$pesanan->ukuran}}. Klik "Lihat" untuk detail pesanan </p><h6>Status Pesanan : ({{$pesanan->status}})</h6>
                              </div>
                        </div>
                          @empty
                          @endforelse
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
