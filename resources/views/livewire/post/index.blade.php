@extends('layouts.dashboard')
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Tables Widget 9-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Header-->
            {{-- <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Members Statistics</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span>
                </h3>
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                    title="Click to add a user">
                    <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_invite_friends">
                        <i class="ki-duotone ki-plus fs-2"></i>New Member</a>
                </div>
            </div> --}}
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                {{-- @if (!empty($list) && isset($isLoading)) --}}
                <livewire:component.form.create-post-form />
                <livewire:content.table :datas="($list)" :headers="['post_title']" :aliases="['Judul']" :isLoading="$isLoading"  />
                {{-- @endif --}}
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
@endsection
