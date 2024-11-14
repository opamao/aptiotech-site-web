@extends('admin.layouts.master', [
    'titre' => 'Projets',
    'nomPage' => 'Nos projets',
    'descriPage' => 'La liste de tous les projets que nous avons réalisés',
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
                                    class="form-control form-control-solid w-250px ps-13" placeholder="Chercher projet" />
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
                                    <i class="ki-duotone ki-plus fs-2"></i> Ajouter un projet
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
                                            <h2 class="fw-bold">Ajout d'un projet</h2>
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                        </div>

                                        <div class="modal-body px-5 my-7">
                                            <form class="form" action="{{ route('realisation.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                    id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                    data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                                                    data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                    data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                    data-kt-scroll-offset="300px">
                                                    <div class="fv-row mb-7">
                                                        <div class="image-input image-input-outline image-input-placeholder"
                                                            data-kt-image-input="true">
                                                            <div class="image-input-wrapper w-125px h-125px"
                                                                style="background-image: url();">
                                                            </div>
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                                title="Ajouter sa photo">
                                                                <i class="ki-duotone ki-pencil fs-7"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                                <input required type="file" name="avatar"
                                                                    accept=".png, .jpg, .jpeg" />
                                                                <input type="hidden" name="avatar_remove" />
                                                            </label>
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" title="Annuler la photo">
                                                                <i class="ki-duotone ki-cross fs-2"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" title="Supprimer la photo">
                                                                <i class="ki-duotone ki-cross fs-2"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <div class="form-text">Types de fichiers autorisés:
                                                            png, jpg, jpeg.</div>
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Libelle</label>
                                                        <input required type="text" name="libelle"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="Le titre du projet" />
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Description</label>
                                                        <textarea class="form-control form-control-solid mb-3 mb-lg-0" required placeholder="La description du projet"
                                                            name="description" id="" cols="30" rows="10"></textarea>
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
                                    <th class="min-w-125px"></th>
                                    <th class="text-end min-w-100px"></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                                @foreach ($projets as $list)
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="#">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset('projets') . '/' . $list->photo_pro }}"
                                                            alt="Emma Smith" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary mb-1">{{ $list->libelle_pro }}</a>
                                            </div>
                                        </td>
                                        <td class="">
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#at_edit{{ $list->idpro }}">
                                                <i class="bi bi-pencil fs-1x text-dark">
                                                </i>
                                            </button>
                                            <div class="modal fade" id="at_edit{{ $list->idpro }}" tabindex="-1"
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
                                                            <form class="form"
                                                                action="{{ route('realisation.update', $list->idpro) }}"
                                                                method="POST" enctype="multipart/form-data">
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
                                                                        <div class="image-input image-input-outline image-input-placeholder"
                                                                            data-kt-image-input="true">
                                                                            <div class="image-input-wrapper w-125px h-125px"
                                                                                style="background-image: url({{ asset('projets') . '/' . $list->photo_pro }});">
                                                                            </div>
                                                                            <label
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="change"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Modifier sa photo">
                                                                                <i class="ki-duotone ki-pencil fs-7"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                                <input type="file" name="avatar"
                                                                                    accept=".png, .jpg, .jpeg" />
                                                                                <input type="hidden"
                                                                                    name="avatar_remove" />
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-text">Types de fichiers autorisés:
                                                                            png, jpg, jpeg.</div>
                                                                    </div>
                                                                    <div class="fv-row mb-7">
                                                                        <label
                                                                            class="required fw-semibold fs-6 mb-2">Libelle</label>
                                                                        <input value="{{ $list->libelle_pro }}" required
                                                                            type="text" name="libelle"
                                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                                            placeholder="Le titre du projet" />
                                                                    </div>
                                                                    <div class="fv-row mb-7">
                                                                        <label
                                                                            class="required fw-semibold fs-6 mb-2">Description</label>
                                                                        <textarea class="form-control form-control-solid mb-3 mb-lg-0" required placeholder="La description du projet"
                                                                            name="description" id="" cols="30" rows="10">{{ $list->descripton_pro }}</textarea>
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
                                                data-bs-target="#at_delete{{ $list->idpro }}">
                                                <i class="bi bi-trash fs-1x text-white">
                                                </i>
                                            </button>
                                            <div class="modal fade" id="at_delete{{ $list->idpro }}" tabindex="-1"
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
                                                                action="{{ route('realisation.destroy', $list->idpro) }}"
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