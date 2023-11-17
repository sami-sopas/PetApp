<x-admin-layout>
        <div class="p-4 sm:ml-64">
            <div class="p-4 mt-10">
                <span>{{ Breadcrumbs::render('home') }}</span>

                <!-- Tarjeta donde iran las tablas -->
                <div class="pt-4">

                    <div
                        class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                        <h5 class="mb-5 text-3xl font-bold text-gray-900 dark:text-white">
                            Inicio
                        </h5>

                        {{-- Grid de cards --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                            <div
                                class="flex flex-col p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                                <p
                                    class="text-center text-gray-900 dark:text-white overflow-ellipsis overflow-hidden mb-2">
                                    Administradores</p>
                                <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-white mb-auto">
                                    {{ $admins }}</h2>
                                <div class="flex justify-center mt-auto">
                                    <i class="fas fa-icon1"></i>
                                </div>
                            </div>
                            <div
                                class="flex flex-col p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                                <p
                                    class="text-center text-gray-900 dark:text-white overflow-ellipsis overflow-hidden mb-2">
                                    Usuarios registrados</p>
                                <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-white mb-auto">
                                    {{ $users }}</h2>
                                <div class="flex justify-center mt-auto">
                                    <i class="fas fa-icon2"></i>
                                </div>
                            </div>
                            <div
                                class="flex flex-col p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                                <p
                                    class="text-center text-gray-900 dark:text-white overflow-ellipsis overflow-hidden mb-2">
                                    Publicaciones hechas</p>
                                <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-white mb-auto">
                                    {{ $posts }}</h2>
                                <div class="flex justify-center mt-auto">
                                    <i class="fas fa-icon3"></i>
                                </div>
                            </div>
                            <div
                                class="flex flex-col p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                                <p
                                    class="text-center text-gray-900 dark:text-white overflow-ellipsis overflow-hidden mb-2">
                                    Mascotas adoptadas</p>
                                <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-white mb-auto">
                                    {{ $adoptions }}</h2>
                                <div class="flex justify-center mt-auto">
                                    <i class="fas fa-icon4"></i>
                                </div>
                            </div>
                        </div>

                        {{-- Charts --}}
                        <div>
                            <div class="card mt-5">

                                <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                                    <div
                                        class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                                        <div class="flex items-center">
                                            <div
                                                class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
                                                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 19">
                                                    <path
                                                        d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                                    <path
                                                        d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h5
                                                    class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">
                                                    {{$averageUsersPerWeek}}</h5>
                                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Usuarios promedios registrados por semana</p>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div id="column-chart"></div>
                                    <div
                                        class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                                        <div class="flex justify-between items-center pt-5">
                                            
                                            <!-- Dropdown menu -->
                                            <div id="lastDaysdropdown"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="dropdownDefaultButton">
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                            7 days</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                            30 days</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                            90 days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#"
                                                class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                                                Descargar reporte
                                                <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    // Data for column chart
                                    let usersPerDay = @json($usersPerDay);

                                    // ApexCharts options and config
                                    window.addEventListener("load", function() {
                                        const options = {
                                            colors: ["#1A56DB", "#FDBA8C"],
                                            series: [{
                                                    name: "Usuarios registrados",
                                                    color: "#1A56DB",
                                                    data: Object.entries(usersPerDay).map(([day, count]) => ({
                                                        x: day,
                                                        y: count
                                                    }))
                                                },
                                            ],
                                            chart: {
                                                type: "bar",
                                                height: "320px",
                                                fontFamily: "Inter, sans-serif",
                                                toolbar: {
                                                    show: false,
                                                },
                                            },
                                            plotOptions: {
                                                bar: {
                                                    horizontal: false,
                                                    columnWidth: "70%",
                                                    borderRadiusApplication: "end",
                                                    borderRadius: 8,
                                                },
                                            },
                                            tooltip: {
                                                shared: true,
                                                intersect: false,
                                                style: {
                                                    fontFamily: "Inter, sans-serif",
                                                },
                                            },
                                            states: {
                                                hover: {
                                                    filter: {
                                                        type: "darken",
                                                        value: 1,
                                                    },
                                                },
                                            },
                                            stroke: {
                                                show: true,
                                                width: 0,
                                                colors: ["transparent"],
                                            },
                                            grid: {
                                                show: false,
                                                strokeDashArray: 4,
                                                padding: {
                                                    left: 2,
                                                    right: 2,
                                                    top: -14
                                                },
                                            },
                                            dataLabels: {
                                                enabled: false,
                                            },
                                            legend: {
                                                show: false,
                                            },
                                            xaxis: {
                                                floating: false,
                                                labels: {
                                                    show: true,
                                                    style: {
                                                        fontFamily: "Inter, sans-serif",
                                                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                                                    }
                                                },
                                                axisBorder: {
                                                    show: false,
                                                },
                                                axisTicks: {
                                                    show: false,
                                                },
                                            },
                                            yaxis: {
                                                show: false,
                                            },
                                            fill: {
                                                opacity: 1,
                                            },
                                        }

                                        if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
                                            const chart = new ApexCharts(document.getElementById("column-chart"), options);
                                            chart.render();
                                        }
                                    });
                                </script>

                            </div>
                            <div class="card">
                                <!-- Aquí va el segundo gráfico -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

</x-admin-layout>
