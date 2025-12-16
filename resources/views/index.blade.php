@extends('base')
@section('title','Beranda')
@section('menuberanda', 'underline decoration-4 underline-offset-7')
@section('content')
    <section class="p-4 bg-white rounded-lg">
        <h1 class="text-3xl font-bold text-[#C0392B] mb-6 text-center">Statistik</h1>
        <div class="mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <div class="flex justify-center">
                        <canvas id="chart1" class="w-full max-w-[600px]"></canvas>
                    </div>
                </div>
                <div class="flex justify-center">
                    <canvas id="chart2" class="w-full max-w-[600px]"></canvas>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{ asset('plugins/chartjs-4/chart-4.5.0.js') }}"></script>
    <script>
        const ctx1 = document.getElementById('chart1');
        new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: ["Male", "Female"],
                datasets: [{
                    label: 'Jumlah',
                    data: [4644,4800],
                    backgroundColor: [
                        '#3b82f6',
                        '#ec4899'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                        text: 'Persentase Pegawai Berdasarkan Gender'
                    }
                }
            }
        });

        const ctx2 = document.getElementById('chart2').getContext('2d');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: [
                    "Software Engineer",
                    "Data Analyst",
                    "Project Manager",
                    "System Administrator",
                    "UI/UX Designer"
                ],
                datasets: [{
                    label: 'Jumlah Pegawai',
                    data: [110, 95, 85, 75, 70],
                    backgroundColor: '#C0392B',
                    borderColor: '#922B21',
                    borderWidth: 1,
                    borderRadius: 4, // rounded bars
                    barPercentage: 0.6,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Top 5 Pekerjaan Dengan Jumlah Pegawai Paling Banyak'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                }
            }
        });
    </script>
@endpush
