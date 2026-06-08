@extends('main')

@section('content')
    {{-- ambil dari highchart.js --}}

    {{-- html --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/themes/adaptive.js"></script>

    {{-- <figure class="highcharts-figure"> --}}
        <div class="row">
            <div class="col-12 col-md-6">
                <div id="container" style="min-height: 450px"></div>
            </div>
    {{-- <figure class="highcharts-figure"> --}}
            <div class="col-12 col-md-6">
                <div id="containerTahunAngkatan" style="min-height: 450px"></div>
            </div>
        </div>


    {{-- css --}}
    <style>
        body {
            font-family:
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                Roboto,
                Helvetica,
                Arial,
                "Apple Color Emoji",
                "Segoe UI Emoji",
                "Segoe UI Symbol",
                sans-serif;
            background: var(--highcharts-background-color);
            color: var(--highcharts-neutral-color-100);
        }

        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            max-width: 800px;
            margin: 1em auto;
        }

        #container {
            height: 400px;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid var(--highcharts-neutral-color-10, #e6e6e6);
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: var(--highcharts-neutral-color-60, #666);
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tbody tr:nth-child(even) {
            background: var(--highcharts-neutral-color-3, #f7f7f7);
        }

        .highcharts-description {
            margin: 0.3rem 10px;
        }
    </style>

    {{-- js --}}
    <script>
        // column chart => jumlah mahasiswa per prodi
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Jumlah Mahasiswa UMDP per Program Studi'
            },
            subtitle: {
                text:
                    'Source: Aplikasi SIMPONI'
            },
            xAxis: {
                categories: [
                    @foreach ($jumlahMahasiswa as $data)
                        '{{ $data->nama_prodi }}',
                    @endforeach
                ],
                crosshair: true,
                accessibility: {
                    description: 'Program Studi'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Mahasiswa'
                }
            },
            tooltip: {
                valueSuffix: ' (orang)'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
                {
                    name: 'Mahasiswa',
                    data: [
                        @foreach ($jumlahMahasiswa as $data)
                            {{ $data->jumlah }},
                        @endforeach
                    ]
                }
            ]
        });
    </script>


    {{-- css --}}
    <style>
        body {
            font-family:
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                Roboto,
                Helvetica,
                Arial,
                "Apple Color Emoji",
                "Segoe UI Emoji",
                "Segoe UI Symbol",
                sans-serif;
            background: var(--highcharts-background-color);
            color: var(--highcharts-neutral-color-100);
        }

        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            max-width: 800px;
            margin: 1em auto;
        }

        #containerTahunAngkatan {
            height: 400px;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid var(--highcharts-neutral-color-10, #e6e6e6);
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: var(--highcharts-neutral-color-60, #666);
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tbody tr:nth-child(even) {
            background: var(--highcharts-neutral-color-3, #f7f7f7);
        }

        .highcharts-description {
            margin: 0.3rem 10px;
        }
    </style>

    {{-- js --}}
    <script>
        // column chart => jumlah mahasiswa per prodi
        Highcharts.chart('containerTahunAngkatan', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Jumlah Mahasiswa UMDP per Tahun Angkatan'
            },
            subtitle: {
                text:
                    'Source: Aplikasi SIMPONI'
            },
            xAxis: {
                categories: [
                    @foreach ($grafik_angkatan as $data)
                        '{{ $data->Tahun_Angkatan }}',
                    @endforeach
                ],
                crosshair: true,
                accessibility: {
                    description: 'Program Studi'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Mahasiswa'
                }
            },
            tooltip: {
                valueSuffix: ' (orang)'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
                {
                    name: 'Mahasiswa',
                    data: [
                        @foreach ($grafik_angkatan as $data)
                            {{ $data->jumlah }},
                        @endforeach
                    ]
                }
            ]
        });
    </script>
@endsection