@extends('admin.layouts.master', [
    'titre' => 'Acceuil Slide',
    'nomPage' => 'Slide',
    'descriPage' => "Permet d'afficher l'image en grand sur la page d'accueil",
])

@push('scripts')
    <script src="{{ asset('back') }}/assets/js/custom/apps/user-management/users/list/table.js"></script>
    <script src="{{ asset('back') }}/assets/js/custom/apps/user-management/users/list/export-users.js"></script>
    <script src="{{ asset('back') }}/assets/js/custom/apps/user-management/users/list/add.js"></script>
@endpush

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <div id="kt_app_content_container" class="app-container container-fluid ">
                <div class="card">
                    <div class="card-header border-0 pt-6 d-flex justify-content-end">
                        <div class="card-toolbar">
                            <div data-kt-user-table-toolbar="base">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_user">
                                    <i class="ki-duotone ki-plus fs-2"></i> Ajouter slide
                                </button>
                            </div>
                            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <div class="modal-content">
                                        <div class="modal-header" id="kt_modal_add_user_header">
                                            <h2 class="fw-bold">Ajouter un slide</h2>
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                        </div>

                                        <div class="modal-body px-5 my-7">
                                            <form id="kt_modal_add_user_form" class="form" action="list.html#">
                                                <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                    id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                    data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                                                    data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                    data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                    data-kt-scroll-offset="300px">
                                                    <div class="fv-row mb-7">
                                                        <style>
                                                            .image-input-placeholder {
                                                                background-image: url('{{ asset('back') }}/assets/media/svg/files/blank-image.svg');
                                                            }

                                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                                background-image: url('{{ asset('back') }}/assets/media/svg/files/blank-image-dark.svg');
                                                            }
                                                        </style>
                                                        <div class="image-input image-input-outline image-input-placeholder"
                                                            data-kt-image-input="true" style="width: 500px">
                                                            <div class="image-input-wrapper h-125px" style="width: 500px">
                                                            </div>
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                                title="Ajouter le slide">
                                                                <i class="ki-duotone ki-pencil fs-7"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                                <input type="file" name="avatar"
                                                                    accept=".png, .jpg, .jpeg" />
                                                                <input type="hidden" name="avatar_remove" />
                                                            </label>
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-danger w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                                title="Supprimer le slide">
                                                                <i class="ki-duotone ki-cross fs-2"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-danger w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                                title="Supprimer le slide">
                                                                <i class="ki-duotone ki-cross fs-2"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <div class="form-text">Types de fichiers autorisés:
                                                            png, jpg, jpeg.</div>
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
                        <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                            <div class="image-input-wrapper"
                                style="background-image: url(http://127.0.0.1:8000/assets/images/hero.jpg);height: 250px;width: 885px;">
                            </div>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-active-color-danger w-25px h-25px bg-body shadow"
                                data-bs-toggle="tooltip" title="Supprimer le slide">
                                <i data-bs-toggle="modal" data-bs-target="#at_delete" class="ki-duotone ki-cross fs-2" style="color: red"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </span>
                            <div class="modal fade" id="at_delete" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <div class="modal-content">
                                        <div class="modal-header" id="at_delete">
                                            <h2 class="fw-bold text-danger">Suppression</h2>
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                                <i class="ki-duotone ki-cross fs-1" style="color: red"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                        </div>

                                        <div class="modal-body px-5 my-7">
                                            <form class="form" action="#" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                    id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                    data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                                                    data-kt-scroll-offset="300px">
                                                    <div class="fv-row mb-7">
                                                        <h3 class="text-primary">Êtes-vous sûr de vouloir supprimer ?</h3>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
