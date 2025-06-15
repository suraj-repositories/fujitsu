@extends('layouts.super_admin')
@section('title', 'Registration Settings')

@section('super-admin-content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <h1 class="page-title font-medium text-lg mb-2">Registration Settings</h1>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Auth Settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registration Settings</li>
                    </ol>
                </nav>

            </div>
            <div class="flex flex-wrap gap-2">
                <a href="javascript:void(0);" class="ti-btn ti-btn-soft-info btn-wave  waves-effect waves-light me-2 m-0">
                    <i class="bx bx-info-circle align-middle"></i> Help
                </a>
                {{-- <button type="button" class="ti-btn ti-btn-soft-primary btn-wave me-0 waves-effect waves-light">
                    <i class="bx bxs-chevron-up align-middle"></i>
                </button> --}}
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start:: row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Form Fields
                        </div>
                        <div class="prism-toggle">

                        </div>
                    </div>
                    <div class="box-body">

                        <h6 class="mb-3 font-bold"></h6>

                        <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                            id="form-fields">
                            @forelse ($form->fields as $field)
                                <div
                                    class="form-check p-3 border border-dashed border-secondary rounded cursor-pointer clip-checked min-w-[200px]">
                                    <input type="checkbox" id="{{ $field->id }}" class="form-check-input"
                                        data-field-target="#field-{{ $field->id }}" @if($field->enabled) checked @endif/>
                                    <label for="{{ $field->id }}" class="form-check-label">
                                        <span class="ms-2">{{ $field->default_label }}</span>
                                    </label>
                                </div>
                            @empty
                                <x-no-data.no-data-component />
                            @endforelse
                        </div>

                    </div>
                    <div class="box-footer hidden border-t-0">

                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-1 -->

        <!-- Start:: row-2 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Field Properties
                        </div>
                        <div class="prism-toggle">

                        </div>
                    </div>
                    <div class="box-body">

                        <div class="hs-accordion-group">
                            @forelse($form->fields as $field)
                                <div class="hs-accordion accordion-item overflow-hidden !border-b-0"
                                    id="hs-basic-heading-custom-{{ $loop->iteration }}">

                                    <button id="field-{{ $field->id }}"
                                        class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80 "
                                        aria-controls="hs-basic-heading-custom-{{ $loop->iteration }}" type="button"  @if(!$field->enabled) disabled @endif>
                                        <svg class="hs-accordion-active:hidden block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        <svg class="hs-accordion-active:block hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                        </svg>
                                        {{ $field->default_label }}

                                        <i class='bx bx-lock-alt ms-auto lock-icon @if($field->enabled) hidden @endif'></i>

                                    </button>

                                    <div id="hs-basic-collapse-custom-{{ $loop->iteration }}"
                                        class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-custom-{{ $loop->iteration }}">
                                        <div class="accordion-body ps-10">

                                             <!-- Title Name -->
                                            <div class="flex items-center gap-4 flex-wrap mb-4">
                                                <label for="title_name" class="ti-form-label min-w-[140px]">Field Label:</label>
                                                <input type="text" id="title_name" class="ti-form-control max-w-[200px]"
                                                    placeholder="Enter field label" value="{{ $field->label }}">
                                                <span class="form-text text-sm text-gray-500">Must be 4–20 characters
                                                    long.</span>
                                            </div>

                                            <!-- Is Required -->
                                            @if (in_array('required', $field->validation_rules) || in_array('nullable', $field->validation_rules))
                                                <div class="flex items-center gap-4 flex-wrap mb-4">
                                                    <label class="ti-form-label min-w-[140px]">Field Requirement:</label>
                                                    <div class="flex gap-4">
                                                        <div class="form-check flex items-center gap-2">
                                                            <input type="radio" name="{{ $field->name }}_is_required"
                                                                id="is_required_required-{{ $field->id }}"
                                                                class="form-check-input w-4 h-4 rounded-full border border-gray-300 checked:bg-blue-600"
                                                                @if (in_array('required', $field->validation_rules)) checked @endif>
                                                            <label for="is_required_required-{{ $field->id }}"
                                                                class="ml-2">Required</label>

                                                        </div>
                                                        <div class="form-check flex items-center gap-2">
                                                            <input
                                                                class="form-check-input w-4 h-4 rounded-full border border-gray-300 checked:bg-blue-600"
                                                                type="radio" name="{{ $field->name }}_is_required" id="is_required_optional-{{ $field->id }}"
                                                                value="0"
                                                                @if (in_array('nullable', $field->validation_rules)) checked @endif>
                                                            <label class="form-check-label"
                                                                for="is_required_optional-{{ $field->id }}">Optional</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif




                                            <!-- Contact Settings -->
                                            <div class="flex items-center gap-4 flex-wrap mb-4">
                                                <label class="ti-form-label min-w-[140px]">Country Code Setting:</label>
                                                <div class="flex gap-4">
                                                    <div class="form-check flex items-center gap-2">
                                                        <input
                                                            class="form-check-input w-4 h-4 rounded-full border border-gray-300 checked:bg-blue-600"
                                                            type="checkbox" name="country_code_enabled"
                                                            id="country_code_enabled" value="1" checked>
                                                        <label class="form-check-label" for="country_code_enabled">Enable
                                                            Country Code</label>
                                                    </div>
                                                </div>
                                                <input type="tel" class="ti-form-control country-input"
                                                    placeholder="...">
                                            </div>

                                            <!-- Options -->
                                            <div class="flex items-center gap-4 flex-wrap mb-4">
                                                <label class="ti-form-label min-w-[140px]">Option Tags:</label>
                                                <input name="drag-sort" class="form-control max-w-[400px]"
                                                    value="tag 1, tag 2, tag 3" type="text" placeholder="...">
                                            </div>

                                            <!-- Max Allowed -->
                                            <div class="flex items-center gap-4 flex-wrap mb-4">
                                                <label class="ti-form-label min-w-[140px]">Max Allowed:</label>
                                                <div class="flex gap-4">
                                                    <div class="form-check flex items-center gap-2">
                                                        <input
                                                            class="form-check-input w-4 h-4 rounded-full border border-gray-300 checked:bg-blue-600"
                                                            type="radio" name="max_limit" id="max_unlimited"
                                                            value="0" checked>
                                                        <label class="form-check-label" for="max_unlimited">No
                                                            Limit</label>
                                                    </div>
                                                    <div class="form-check flex items-center gap-2">
                                                        <input
                                                            class="form-check-input w-4 h-4 rounded-full border border-gray-300 checked:bg-blue-600"
                                                            type="radio" name="max_limit" id="max_limited"
                                                            value="1">
                                                        <label class="form-check-label" for="max_limited">Set
                                                            Limit</label>
                                                    </div>
                                                </div>
                                                <input type="number" id="max_allowed_value"
                                                    class="ti-form-control max-w-[200px]" min="1" value="5"
                                                    placeholder="Enter max value">
                                            </div>

                                            <!-- Needs Verification -->
                                            <div class="flex items-center gap-4 flex-wrap mb-4">
                                                <label class="ti-form-label min-w-[140px]">Needs Verification:</label>
                                                <div class="flex gap-4">
                                                    <div class="form-check flex items-center gap-2">
                                                        <input
                                                            class="form-check-input w-4 h-4 rounded-full border border-gray-300 checked:bg-blue-600"
                                                            type="radio" name="needs_verification"
                                                            id="verification_yes" value="1" checked>
                                                        <label class="form-check-label" for="verification_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check flex items-center gap-2">
                                                        <input
                                                            class="form-check-input w-4 h-4 rounded-full border border-gray-300 checked:bg-blue-600"
                                                            type="radio" name="needs_verification" id="verification_no"
                                                            value="0">
                                                        <label class="form-check-label" for="verification_no">No</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Password Confirmation -->
                                            <div class="flex items-center gap-4 flex-wrap mb-4">
                                                <label class="ti-form-label min-w-[140px]">Password Confirmation:</label>
                                                <div class="flex gap-4">
                                                    <div class="form-check flex items-center gap-2">
                                                        <input
                                                            class="form-check-input w-4 h-4 rounded-full border border-gray-300 checked:bg-blue-600"
                                                            type="radio" name="confirm_password" id="confirm_yes"
                                                            value="1" checked>
                                                        <label class="form-check-label" for="confirm_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check flex items-center gap-2">
                                                        <input
                                                            class="form-check-input w-4 h-4 rounded-full border border-gray-300 checked:bg-blue-600"
                                                            type="radio" name="confirm_password" id="confirm_no"
                                                            value="0">
                                                        <label class="form-check-label" for="confirm_no">No</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Content -->
                                            <div class="flex items-center gap-4 flex-wrap mb-4">
                                                <label class="ti-form-label min-w-[50px]">Content:</label>
                                                <button type="button"
                                                    class="m-1 ms-0 ti-btn ti-btn-soft-primary btn-wave  waves-effect waves-light"
                                                    data-hs-overlay="#hs-full-screen-modal">
                                                    <i class='bx bx-file align-middle'></i>
                                                    Terms Content
                                                </button>
                                                <div id="hs-full-screen-modal" class="hs-overlay hidden ti-modal">
                                                    <div
                                                        class="hs-overlay-open:mt-0 ti-modal-box mt-10 !m-0 !max-w-full !w-full h-full">
                                                        <div class="ti-modal-content !rounded-none">
                                                            <div class="ti-modal-header">
                                                                <h6 class="ti-modal-title">
                                                                    Terms Content
                                                                </h6>
                                                                <button type="button"
                                                                    class="hs-dropdown-toggle ti-modal-close-btn"
                                                                    data-hs-overlay="#hs-full-screen-modal">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8"
                                                                        height="8" viewBox="0 0 8 8" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="ti-modal-body h-full">
                                                                <p
                                                                    class="mt-1 text-gray-800 text-textmuted dark:text-textmuted/50">
                                                                    ...
                                                                </p>
                                                            </div>
                                                            <div class="ti-modal-footer">
                                                                <button type="button"
                                                                    class="hs-dropdown-toggle ti-btn  btn-wave ti-btn-secondary-full"
                                                                    data-hs-overlay="#hs-full-screen-modal">
                                                                    Close
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                            @empty
                                <x-no-data.no-data-component />
                            @endforelse
                        </div>


                    </div>

                    <div class="box-footer hidden border-t-0">

                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-2 -->

    </div>
@endsection
