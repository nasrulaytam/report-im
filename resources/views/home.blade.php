@extends('layouts.admin')

@section('main-content')

    <div>
        <h5>Halo, <b>{{ Auth::user()->fullName }}</b> </h5>
    </div>

    <br>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Monthly Task</div>
                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> --}}
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Quarter Task</div>
                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div> --}}
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">30%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users -->
        <div class="col-xl-3 col-md-6 mb-4">
            @if (Auth::user()->isAdmin())
                <a href="{{ route('user') }}" style="text-decoration: none">
            @else
                <a href="#" style="text-decoration: none" onclick="alert('You do not have permission to access this page.')">
            @endif
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">{{ __('Users') }}</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $widget['users'] }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            {{-- @if (Auth::user()->isAdmin())
                <a href="{{ route('send-email') }}" style="text-decoration: none">
            @else
                <a href="#" style="text-decoration: none" onclick="alert('You do not have permission to access this page.')">
            @endif --}}
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Annual Task</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">Email</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div>
        <div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">List of Reports</h4>
                            {{-- <i class="fa-solid fa-filter fa-2x" style="color: #a93737;"></i> --}}
                        </div>
                        <label for="reportTypeFilter" class="form-label">Filter berdasarkan Jenis Laporan:</label>
                        <select class="form-select" id="reportTypeFilter" onchange="filterReports()">
                            <option value="all">Semua</option>
                            <option value="bulanan">Bulanan</option>
                            <option value="triwulan">Triwulan</option>
                            <option value="semester">Semester</option>
                            <option value="tahunan">Tahunan</option>
                            <option value="insidentil">Insidentil</option>
                        </select>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>User</th>
                                        <th>PIC</th>
                                        <th>Nama Laporan</th>
                                        <th>Jenis</th>
                                        <th>Pembuat</th>
                                        <th>Deadline</th>
                                        <th>Action</th>
                                        <th>Due Date:</th>
                                        <th>Submit:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $increment = 1;
                                    @endphp
                                    @foreach($reports as $report)
                                    <tr>
                                        <td><h6 class="text-sm">{{ $increment }}</h6></td>
                                        <td class="py-1" style="display: flex; align-items: center">
                                            <div class="card-profile-image mt-1">
                                                <figure class="rounded-circle avatar avatar font-weight-bold" style="font-size: 20px; height: 35px; width: 35px;" data-initial="{{ $report->email[0] }}"></figure>
                                            </div>
                                        </td>
                                        <td>{{ $report->email }}</td>
                                        <td>{{ $report->name }}</td>
                                        <td class="report-type">{{ $report->jenis }}</td>
                                        <td>{{ $report->pembuat }}</td>
                                        <td>{{ $report->deadline }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-primary mx-1" data-toggle="modal" data-target="#viewDetailModal{{ $report->id }}">
                                                    <i class="fas fa-eye"></i> Preview
                                                </button>
                                            </div>
                                        </td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="viewDetailModal{{ $report->id }}" tabindex="-1" role="dialog" aria-labelledby="viewDetailModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="viewDetailModalLabel">Report Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Isi detail laporan di sini, contohnya: -->
                                                            <p>PIC              : {{ $report->email }}</p>
                                                            <p>Nama Laporan     : {{ $report->name }}</p>
                                                            <p>Jenis Laporan    : {{ $report->jenis }}</p>
                                                            <p>Kategori         : {{ $report->kategori }}</p>
                                                            <p>Regulator        : {{ $report->regulator }}</p>
                                                            <p>Pembuat Laporan  : {{ $report->pembuat }}</p>
                                                            <p>Pengirim Laporan : {{ $report->pengirim }}</p>
                                                            <p>Deadline         : {{ $report->deadline }}</p>
                                                            <p>Format Laporan   : {{ $report->format }}</p>
                                                            <p>Notes            : {{ $report->notes }}</p>
                                                            <p>Due Date         : {{ $report->progress }}%</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <td>
                                            <b><span id="dueDate{{ $report->id }}"></span></b>
                                        </td> <!-- tampilkan countdown disini-->
                                        <td>
                                            @if(auth()->user()->email == $report->email)
                                            <form>
                                                <input type="file" name="image" accept="image"
                                                    onchange="handleImageChange{{ $report->id }}(this)"
                                                    id="imageInput{{ $report->id }}">

                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @php
                                        $increment++;
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        {{-- <div class="pt-10 pb-10 d-flex flex-wrap justify-content-between">
            <div class="left"></div>
            <div class="right">
                {{ $reports->links() }}
            </div>
        </div> --}}

    </div>

    {{-- <script>
        @foreach($reports as $report)
            // Membuat variabel untuk melacak status gambar diunggah
            var imageUploaded{{ $report->id }} = localStorage.getItem('imageUploaded_{{ $report->id }}') === 'true';

            if (imageUploaded{{ $report->id }}) {
                // Jika gambar diunggah, sembunyikan tombol "Choose File"
                document.getElementById('imageInput{{ $report->id }}').style.display = 'none';
            }

            function updateCountdown{{ $report->id }}() {
                var deadlineInput = new Date('{{ $report->deadline }}');
                var now = new Date();

                if (imageUploaded{{ $report->id }}) {
                    // Jika gambar diunggah, hentikan countdown
                    clearInterval(interval{{ $report->id }});
                    document.getElementById('dueDate{{ $report->id }}').textContent = 'Assignment Submitted';
                    return;
                }

                if (deadlineInput < now) {
                    document.getElementById('dueDate{{ $report->id }}').textContent = 'Assignment is Overdue';
                    return;
                }

                var timeRemaining = deadlineInput - now;

                var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                document.getElementById('dueDate{{ $report->id }}').textContent = days + "d " + hours + "h " + minutes + "m " + seconds + "s";
            }

            // Update the countdown every second
            var interval{{ $report->id }} = setInterval(updateCountdown{{ $report->id }}, 1000);

            // Initial call to update the countdown
            updateCountdown{{ $report->id }}();

            // Fungsi untuk mendeteksi perubahan pada input file //lama
            function handleImageChange{{ $report->id }}(input) {
                if (input.files.length > 0) {
                    // Gambar dipilih, kirim formulir secara otomatis
                    var form = input.form;
                    var formData = new FormData(form);

                    // Kirim permintaan Ajax ke server untuk mengonfirmasi bahwa gambar diunggah
                    fetch('{{ route('reports.markUploaded', $report->id) }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ uploaded: true })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Jika berhasil, setel status gambar diunggah dan hentikan countdown
                            imageUploaded{{ $report->id }} = true;
                            localStorage.setItem('imageUploaded_{{ $report->id }}', 'true');
                            clearInterval(interval{{ $report->id }});
                            document.getElementById('dueDate{{ $report->id }}').textContent = 'Assignment Submitted';
                        }
                    });
                }

                // Sembunyikan tombol "Choose File" sejak tidak lagi dibutuhkan
                input.style.display = 'none';
            }
        @endforeach

        function filterReports() {
            var filter = document.getElementById('reportTypeFilter').value;

            // Loop melalui semua baris dalam tabel
            var rows = document.querySelectorAll('.table tbody tr');
            rows.forEach(function (row) {
                var reportType = row.querySelector('.report-type').textContent.toLowerCase();

                // Tampilkan atau sembunyikan baris berdasarkan filter
                if (filter === 'all' || filter === reportType) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }


    </script> --}}

    <script>
        @foreach($reports as $report)
            // Membuat variabel untuk melacak status gambar diunggah
            var imageUploaded{{ $report->id }} = localStorage.getItem('imageUploaded_{{ $report->id }}') === 'true';

            if (imageUploaded{{ $report->id }}) {
                // Jika gambar diunggah, sembunyikan tombol "Choose File"
                document.getElementById('imageInput{{ $report->id }}').style.display = 'none';
            }

            function updateCountdown{{ $report->id }}() {
                var deadlineInput = new Date('{{ $report->deadline }}');
                var now = new Date();

                if (imageUploaded{{ $report->id }}) {
                    // Jika gambar diunggah, hentikan countdown
                    clearInterval(interval{{ $report->id }});
                    document.getElementById('dueDate{{ $report->id }}').textContent = 'Assignment Submitted';
                    return;
                }

                if (deadlineInput < now) {
                    document.getElementById('dueDate{{ $report->id }}').textContent = 'Assignment is Overdue';
                    return;
                }

                var timeRemaining = deadlineInput - now;

                var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                document.getElementById('dueDate{{ $report->id }}').textContent = days + "d " + hours + "h " + minutes + "m " + seconds + "s";
            }

            // Update the countdown every second
            var interval{{ $report->id }} = setInterval(updateCountdown{{ $report->id }}, 1000);

            // Initial call to update the countdown
            updateCountdown{{ $report->id }}();

            // Fungsi untuk mendeteksi perubahan pada input file //lama
            function handleImageChange{{ $report->id }}(input) {
                if (input.files.length > 0) {
                    // Gambar dipilih, kirim formulir secara otomatis
                    var form = input.form;
                    var formData = new FormData(form);

                    // Kirim permintaan Ajax ke server untuk mengonfirmasi bahwa gambar diunggah
                    fetch('{{ route('reports.markUploaded', $report->id) }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ uploaded: true })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Jika berhasil, setel status gambar diunggah dan hentikan countdown
                            imageUploaded{{ $report->id }} = true;
                            localStorage.setItem('imageUploaded_{{ $report->id }}', 'true');
                            clearInterval(interval{{ $report->id }});
                            document.getElementById('dueDate{{ $report->id }}').textContent = 'Assignment Submitted';
                        }
                    });
                }

                // Sembunyikan tombol "Choose File" sejak tidak lagi dibutuhkan
                input.style.display = 'none';
            }
        @endforeach

        function filterReports() {
            var filter = document.getElementById('reportTypeFilter').value;

            // Loop melalui semua baris dalam tabel
            var rows = document.querySelectorAll('.table tbody tr');
            rows.forEach(function (row) {
                var reportType = row.querySelector('.report-type').textContent.toLowerCase();

                // Tampilkan atau sembunyikan baris berdasarkan filter
                if (filter === 'all' || filter === reportType) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>


@endsection
