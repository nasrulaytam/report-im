@extends('layouts.admin')

@section('main-content')
    <!-- Project Card Example -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Manage Report') }}</h1>

    <div>
        <div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List of Reports</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>User</th>
                                        <th>PIC</th>
                                        <th>Nama Laporan</th>
                                        <th>Regulator</th>
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
                                    @foreach ($reports as $report)
                                        <tr>
                                            <td>
                                                <h6 class="text-sm">{{ $increment }}</h6>
                                            </td>
                                            <td class="py-1" style="display: flex; align-items: center">
                                                <div class="card-profile-image mt-1">
                                                    <figure class="rounded-circle avatar avatar font-weight-bold"
                                                        style="font-size: 20px; height: 35px; width: 35px;"
                                                        data-initial="{{ $report->email[0] }}"></figure>
                                                </div>
                                            </td>
                                            <td>{{ $report->email }}</td>
                                            <td>{{ $report->name }}</td>
                                            <td>{{ $report->regulator }}</td>
                                            <td>{{ $report->pembuat }}</td>
                                            <td>{{ $report->deadline }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-primary mx-1" data-toggle="modal"
                                                        data-target="#viewDetailModal{{ $report->id }}">
                                                        <i class="fas fa-eye"></i> Preview
                                                    </button>
                                                    <a href="{{ route('reports.edit', $report->id) }}"
                                                        class="btn btn-sm btn-warning mx-1">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form onsubmit="return confirm('Are you sure?');"
                                                        action="{{ route('reports.destroy', $report->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger mx-1">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="viewDetailModal{{ $report->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="viewDetailModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="viewDetailModalLabel">Report Details
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Isi detail laporan di sini, contohnya: -->
                                                            <p>PIC : {{ $report->email }}</p>
                                                            <p>Nama Laporan : {{ $report->name }}</p>
                                                            <p>Jenis Laporan : {{ $report->jenis }}</p>
                                                            <p>Kategori : {{ $report->kategori }}</p>
                                                            <p>Regulator : {{ $report->regulator }}</p>
                                                            <p>Pembuat Laporan : {{ $report->pembuat }}</p>
                                                            <p>Pengirim Laporan : {{ $report->pengirim }}</p>
                                                            <p>Deadline : {{ $report->deadline }}</p>
                                                            <p>Format Laporan : {{ $report->format }}</p>
                                                            <p>Notes : {{ $report->notes }}</p>
                                                            <p>Due Date : {{ $report->progress }}%</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <td>
                                                <b><span id="dueDate{{ $report->id }}"></span></b>
                                            </td> <!-- tampilkan countdown disini-->
                                            {{-- <td>
                                            <form id="imageUploadForm{{ $report->id }}" action="{{ route('upload.image', $report->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="image" accept="image/*" onchange="handleImageChange{{ $report->id }}(this)">
                                            </form>
                                        </td> --}}
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

        <div class="pt-10 pb-10 d-flex flex-wrap justify-content-between">
            <div class="left"></div>
            <div class="right">
                {{ $reports->links() }}
            </div>
        </div>

    </div>

    <script>
        @foreach ($reports as $report)
            // Membuat variabel untuk melacak status gambar diunggah
            var imageUploaded{{ $report->id }} = localStorage.getItem('imageUploaded_{{ $report->id }}') === 'true';

            console.log(imageUploaded{{ $report->id }});
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

                document.getElementById('dueDate{{ $report->id }}').textContent = days + "d " + hours + "h " + minutes +
                    "m " + seconds + "s";
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


                    var route = `{{ route('reports.markUploaded', $report->id) }}`;
                    console.log(route);
                    // Kirim permintaan Ajax ke ser.ver untuk mengonfirmasi bahwa gambar diunggah
                    fetch(`{{ route('reports.markUploaded', $report->id) }}`, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },

                        })
                        .then(response => {
                            console.log(response);
                            return response;
                        })

                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Jika berhasil, setel status gambar diunggah dan hentikan countdown
                                imageUploaded{{ $report->id }} = true;
                                localStorage.setItem('imageUploaded_{{ $report->id }}', 'true');
                                clearInterval(interval{{ $report->id }});
                                document.getElementById('dueDate{{ $report->id }}').textContent =
                                    'Assignment Submitted';
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
            rows.forEach(function(row) {
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
@endsection <!-- true -->
