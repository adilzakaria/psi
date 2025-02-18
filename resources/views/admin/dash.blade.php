@extends('layouts.adminlayoutdash')
@section('content')

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-dark">Ulasan Pembeli</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th class="text-dark">ID</th>
                            <th class="text-dark">Nama Pembeli</th>
                            <th class="text-dark">Email Pembeli</th>
                            <th class="text-dark">Jenis Baju</th>
                            <th class="text-dark">Rating</th>
                            <th class="text-dark">Ulasan</th>
                            <th class="text-dark">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($ulasans as $ulasan)
                            <tr>
                              <td class="align-middle">
                                <p class="text-dark mb-0">{{$ulasan->id}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$ulasan->nama}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$ulasan->email}}</p>
                              </td>
                              <td class="align-middle text-sm">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$ulasan->jenis}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$ulasan->rating}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$ulasan->review}}</p>
                              </td>
                              <td class="align-middle">
                                <a class="btn btn-danger" href="{{ route('hapus_ulasan',['ulasan' => $ulasan->id]) }}"><i title="Delete">Hapus</i></a>
                              </td>
                            </tr>
                            @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!-- Start Katalog -->
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="text-dark">Katalog Isna Collection</h4>
                        <a class="btn btn-success " href="{{ route('buat_katalog')}}"><h5>+</h5>Buat Katalog Baru</a>
                      <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th class="text-dark">ID</th>
                            <th class="text-dark">Gambar</th>
                            <th class="text-dark">Nama Produk</th>
                            <th class="text-dark">Kategori</th>
                            <th class="text-dark text-center" colspan="2">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($katalogs as $katalog)
                            <tr>
                              <td class="align-middle">
                                <p class="text-dark mb-0">{{$katalog->id}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$katalog->gambar}}</p>
                              </td>
                              <td class="align-middle text-sm">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$katalog->nama_produk}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$katalog->kategori}}</p>
                              </td>
                              <td class="align-middle">
                                <a class="btn btn-warning" href="{{ route('edit_katalog',['katalog' => $katalog->id]) }}"><i title="Edit">Edit</i></a>
                              </td>
                              <td class="align-middle">
                                <a class="btn btn-danger" href="{{ route('hapus_katalog',['katalog' => $katalog->id]) }}"><i title="Delete">Hapus</i></a>
                              </td>
                            </tr>
                            @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- End Katalog -->
          <!-- Start Pesan -->
          <div class="row">
              <div class="col-12 grid-margin">
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
                              <p class="text-center text-dark">Tidak ada data</p>
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
