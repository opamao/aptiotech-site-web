@extends('admin.layouts.master', [
    'titre' => 'Contact',
    'nomPage' => 'Contact',
    'descriPage' => "Les différents contacts ou on peut joindre l'entreprise",
])

@push('scripts')
    <script src="{{ asset('back') }}/assets/js/custom/apps/user-management/users/list/table.js"></script>
    <script src="{{ asset('back') }}/assets/js/custom/apps/user-management/users/list/export-users.js"></script>
    <script src="{{ asset('back') }}/assets/js/custom/apps/user-management/users/list/add.js"></script>
@endpush

@section('content')
    @include('admin.layouts.status')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <div id="kt_app_content_container" class="app-container container-fluid ">
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span
                                        class="path1"></span><span class="path2"></span></i>
                                <input type="text" data-kt-user-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-13"
                                    placeholder="Chercher le contact" />
                            </div>
                        </div>

                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Exporter
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-gray-900 fw-bold">Type exportation</div>
                                    </div>

                                    <div class="separator border-gray-200"></div>

                                    <div class="px-7 py-5" data-kt-user-table-filter="form">
                                        <div class="mb-10">
                                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                                data-placeholder="Sélectionnez le type" data-allow-clear="true"
                                                data-kt-user-table-filter="role" data-hide-search="true">
                                                <option></option>
                                                <option value="excel">Excel</option>
                                                <option value="pdf">PDF</option>
                                                <option value="cvs">CVS</option>
                                                <option value="zip">ZIP</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                                data-kt-menu-dismiss="true"
                                                data-kt-user-table-filter="reset">Annuler</button>
                                            <button type="submit" class="btn btn-primary fw-semibold px-6"
                                                data-kt-menu-dismiss="true"
                                                data-kt-user-table-filter="filter">Exporter</button>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_user">
                                    <i class="ki-duotone ki-plus fs-2"></i> Ajouter contact
                                </button>
                            </div>
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-user-table-toolbar="selected">
                                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">
                                    Delete Selected
                                </button>
                            </div>

                            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <div class="modal-content">
                                        <div class="modal-header" id="kt_modal_add_user_header">
                                            <h2 class="fw-bold">Ajout de contact</h2>
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                        </div>

                                        <div class="modal-body px-5 my-7">
                                            <form id="kt_modal_add_user_form" class="form"
                                                action="{{ route('contacts.store') }}" method="POST">
                                                @csrf
                                                <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                    id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                    data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                                                    data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                    data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                    data-kt-scroll-offset="300px">
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">E-mail</label>
                                                        <input required type="email" name="email"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="info@aptiotech.com" />
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Téléphone</label>
                                                        <input required type="text" name="phone"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="+(225) 0710848785" />
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Localisation</label>
                                                        <input required type="text" name="locale"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="Ou l'entreprise est localiser" />
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Jour & Date de
                                                            travail</label>
                                                        <input required type="text" name="date"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="Lun-Vend 09h à 18h" />
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Lien Map</label>
                                                        <input required type="text" name="mapping"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="Lien" />
                                                    </div>
                                                </div>
                                                <div class="text-center pt-10">
                                                    <button type="reset" class="btn btn-light me-3"
                                                        data-bs-dismiss="modal">
                                                        Annuler
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        Soumettre
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body py-4">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">E-mail</th>
                                    <th class="min-w-125px">Téléphone</th>
                                    <th class="min-w-125px">Localisation</th>
                                    <th class="min-w-125px">Date </th>
                                    <th class="text-end min-w-100px"></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                                @foreach ($contacts as $list)
                                    <tr>
                                        <td> {{ $list->email_cont }} </td>
                                        <td>
                                            <div class="badge badge-light fw-bold">{{ $list->phone_cont }}</div>
                                        </td>
                                        <td>{{ $list->local_cont }}</td>
                                        <td>{{ $list->travail_cont }}</td>
                                        <td class="">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#at_view{{ $list->idcont }}">
                                                <i class="bi bi-eye fs-1x text-white">
                                                </i>
                                            </button>
                                            <div class="modal fade" id="at_view{{ $list->idcont }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <div class="modal-content">
                                                        <div class="modal-header" id="kt_modal_add_user_header">
                                                            <h2 class="fw-bold">Détails</h2>
                                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                data-kt-users-modal-action="close"
                                                                data-bs-dismiss="modal">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                        </div>

                                                        <div class="modal-body px-5 my-7">
                                                            <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                                id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                                data-kt-scroll-activate="true"
                                                                data-kt-scroll-max-height="auto"
                                                                data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                                data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                                data-kt-scroll-offset="300px">
                                                                <div class="row g-5 g-lg-9">
                                                                    <div class="col-6">
                                                                        <div class="card card-shadow">
                                                                            <div
                                                                                class="card-body bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                                                <i
                                                                                    class="bi bi-send fs-2x fs-lg-2hx text-gray-500 ms-n1"></i>
                                                                                <div class="fw-bold fs-5 pt-4">
                                                                                    E-mail </div>
                                                                                <span>{{ $list->email_cont }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="card card-shadow">
                                                                            <div
                                                                                class="card-body bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                                                <i
                                                                                    class="bi bi-phone fs-2x fs-lg-2hx text-gray-500 ms-n1"></i>
                                                                                <div class="fw-bold fs-5 pt-4">
                                                                                    Téléphone </div>
                                                                                <span>{{ $list->phone_cont }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="card card-shadow">
                                                                            <div
                                                                                class="card-body bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                                                <i
                                                                                    class="bi bi-calendar fs-2x fs-lg-2hx text-gray-500 ms-n1"></i>
                                                                                <div class="fw-bold fs-5 pt-4">
                                                                                    Date </div>
                                                                                <span>{{ $list->travail_cont }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="card card-shadow ">
                                                                            <div
                                                                                class="card-body bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                                                <i
                                                                                    class="bi bi-map fs-2x fs-lg-2hx text-gray-500 ms-n1"></i>
                                                                                <div class="fw-bold fs-5 pt-4">
                                                                                    Localisation </div>
                                                                                <span>{{ $list->local_cont }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center pt-10">
                                                                <button type="reset" class="btn btn-light me-3"
                                                                    data-bs-dismiss="modal">
                                                                    Compris
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#at_edit{{ $list->idcont }}">
                                                <i class="bi bi-pencil fs-1x text-dark">
                                                </i>
                                            </button>
                                            <div class="modal fade" id="at_edit{{ $list->idcont }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <div class="modal-content">
                                                        <div class="modal-header" id="kt_modal_add_user_header">
                                                            <h2 class="fw-bold">Modification</h2>
                                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                data-kt-users-modal-action="close"
                                                                data-bs-dismiss="modal">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                        </div>

                                                        <div class="modal-body px-5 my-7">
                                                            <form id="kt_modal_add_user_form" class="form"
                                                                action="{{ route('contacts.update', $list->idcont) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PATCH')
                                                                <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                                    id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                                    data-kt-scroll-activate="true"
                                                                    data-kt-scroll-max-height="auto"
                                                                    data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                                    data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                                    data-kt-scroll-offset="300px">
                                                                    <div class="fv-row mb-7">
                                                                        <label
                                                                            class="required fw-semibold fs-6 mb-2">E-mail</label>
                                                                        <input value="{{ $list->email_cont }}" required
                                                                            type="email" name="email"
                                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                                            placeholder="info@aptiotech.com" />
                                                                    </div>
                                                                    <div class="fv-row mb-7">
                                                                        <label
                                                                            class="required fw-semibold fs-6 mb-2">Téléphone</label>
                                                                        <input value="{{ $list->phone_cont }}" required
                                                                            type="text" name="phone"
                                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                                            placeholder="+(225) 0710848785" />
                                                                    </div>
                                                                    <div class="fv-row mb-7">
                                                                        <label
                                                                            class="required fw-semibold fs-6 mb-2">Localisation</label>
                                                                        <input value="{{ $list->local_cont }}" required
                                                                            type="text" name="locale"
                                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                                            placeholder="Ou l'entreprise est localiser" />
                                                                    </div>
                                                                    <div class="fv-row mb-7">
                                                                        <label class="required fw-semibold fs-6 mb-2">Jour
                                                                            &
                                                                            Date de travail</label>
                                                                        <input value="{{ $list->travail_cont }}" required
                                                                            type="text" name="date"
                                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                                            placeholder="Lun-Vend 09h à 18h" />
                                                                    </div>
                                                                    <div class="fv-row mb-7">
                                                                        <label class="required fw-semibold fs-6 mb-2">Lien
                                                                            Map</label>
                                                                        <input value="{{ $list->map_cont }}" required
                                                                            type="text" name="mapping"
                                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                                            placeholder="Lien" />
                                                                    </div>
                                                                </div>
                                                                <div class="text-center pt-10">
                                                                    <button type="reset" class="btn btn-light me-3"
                                                                        data-bs-dismiss="modal">
                                                                        Annuler
                                                                    </button>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Soumettre
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#at_delete{{ $list->idcont }}">
                                                <i class="bi bi-trash fs-1x text-white">
                                                </i>
                                            </button>
                                            <div class="modal fade" id="at_delete{{ $list->idcont }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <div class="modal-content">
                                                        <div class="modal-header" id="at_delete">
                                                            <h2 class="fw-bold text-danger">Suppression</h2>
                                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                data-kt-users-modal-action="close"
                                                                data-bs-dismiss="modal">
                                                                <i class="ki-duotone ki-cross fs-1"
                                                                    style="color: red"><span class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                        </div>

                                                        <div class="modal-body px-5 my-7">
                                                            <form class="form"
                                                                action="{{ route('contacts.destroy', $list->idcont) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                                    id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                                    data-kt-scroll-activate="true"
                                                                    data-kt-scroll-max-height="auto"
                                                                    data-kt-scroll-offset="300px">
                                                                    <div class="fv-row mb-7">
                                                                        <h3 class="text-primary">Êtes-vous sûr de vouloir
                                                                            supprimer ?</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center pt-10">
                                                                    <button type="reset" class="btn btn-light me-3"
                                                                        data-bs-dismiss="modal">
                                                                        Annuler
                                                                    </button>
                                                                    <button type="submit" class="btn btn-danger">
                                                                        Supprimer
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
