@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Edit Report') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-10 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Insert Report Detail</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('reports.update', $reports->id) }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">

                        <h6 class="heading-small text-muted mb-4">Report information</h6>

                        <div class="pl-lg-4">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Email PIC<span class="small text-danger">*</span></label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com"  value="{{ old('email', $reports->email) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="name">Nama Laporan<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Laporan Bulan Maret"  value="{{ old('name', $reports->name) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="jenis"> Jenis Laporan <span class="small text-danger">*</span></label>
                                        <select id="jenis" class="form-control" name="jenis" value="{{ old('jenis', $reports->jenis) }}">
                                            <option value="bulanan">Bulanan</option>
                                            <option value="triwulan">Triwulan</option>
                                            <option value="semester">Semester</option>
                                            <option value="tahunan">Tahunan</option>
                                            <option value="insidentil">Insidentil</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kategori"> Kategori <span class="small text-danger">*</span></label>
                                        <select id="kategori" class="form-control" name="kategori" value="{{ old('kategori', $reports->kategori) }}">
                                            <option value="produk">Produk</option>
                                            <option value="perusahaan">Perusahaan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="regulator">Tujuan (Regulator)<span class="small text-danger">*</span></label>
                                        <input type="text" id="regulator" class="form-control" name="regulator" placeholder="Investor" value="{{ old('regulator', $reports->regulator) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pembuat">Pembuat Laporan<span class="small text-danger">*</span></label>
                                        <input type="text" id="pembuat" class="form-control" name="pembuat" placeholder="OPR" value="{{ old('pembuat', $reports->pembuat) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pengirim">Pengirim Laporan<span class="small text-danger">*</span></label>
                                        <input type="text" id="pengirim" class="form-control" name="pengirim" placeholder="MKT" value="{{ old('pengirim', $reports->pengirim) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="deadline">Deadline<span class="small text-danger">*</span></label>
                                        <input type="date" id="deadline" class="form-control" name="deadline" value="{{ old('deadline', $reports->deadline) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="format">Format Laporan<span class="small text-danger">*</span></label>
                                        <input type="text" id="format" class="form-control" name="format" placeholder="Softcopy" value="{{ old('format', $reports->format) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="notes">Notes<span class="small text-danger">*</span></label>
                                        <textarea type="text" id="notes" class="form-control" name="notes" placeholder="jika tidak ada notes silahkan tulis -" value="{{ old('notes', $reports->notes) }}"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
