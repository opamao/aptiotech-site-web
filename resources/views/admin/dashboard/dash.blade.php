@extends('admin.layouts.master', [
    'titre' => 'Tableau de bord',
    'nomPage' => 'Tableau de bord',
    'descriPage' => 'Un recap de tous les activités sur le site',
])
{{-- @push('btnadd')
    @include('admin.layouts.btn-add', ['nomBtn' => 'Ajouter'])
@endpush --}}
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container  container-fluid ">
                <div class="row gy-5 gx-xl-10">
                    <div class="col-xl-12 mb-5 mb-xl-12">
                        <div class="row g-lg-5 g-xl-12">
                            <div class="col-md-4 col-xl-4 mb-5 mb-xl-10">
                                <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                        <div class="mb-4 px-9">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">47,769,700</span>
                                            </div>
                                            <span class="fs-6 fw-semibold text-gray-500">Total Online
                                                Sales</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-flush h-md-50 mb-lg-10">
                                    <div class="card-header pt-5">
                                        <div class="card-title d-flex flex-column">
                                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                                           
                                            <span class="text-gray-500 pt-1 fw-semibold fs-6">Expected
                                                Earnings This Month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4 mb-md-5 mb-xl-10">
                                <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                        <div class="mb-4 px-9">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">259,786</span>
                                            </div>
                                            <span class="fs-6 fw-semibold text-gray-500">Total
                                                Shipments</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-flush h-md-50 mb-lg-10">
                                    <div class="card-header pt-5">
                                        <div class="card-title d-flex flex-column">
                                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">604</span>
                                            
                                            <span class="text-gray-500 pt-1 fw-semibold fs-6">New
                                                Customers This Month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4 mb-md-5 mb-xl-10">
                                <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                        <div class="mb-4 px-9">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">259,786</span>
                                            </div>
                                            <span class="fs-6 fw-semibold text-gray-500">Total
                                                Shipments</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-flush h-md-50 mb-lg-10">
                                    <div class="card-header pt-5">
                                        <div class="card-title d-flex flex-column">
                                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">604</span>
                                            
                                            <span class="text-gray-500 pt-1 fw-semibold fs-6">New
                                                Customers This Month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
