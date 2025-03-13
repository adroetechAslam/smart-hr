@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
        <div class="my-auto mb-2">
            <h2 class="mb-1">{{auth()->user()->role}} Dashboard</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Dashboard
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{auth()->user()->role}} Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
            <div class="me-2 mb-2">
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                        data-bs-toggle="dropdown">
                        <i class="ti ti-file-export me-1"></i>Export
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end p-3">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                    class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                    class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-2">
                <div class="input-icon w-120 position-relative">
                    <span class="input-icon-addon">
                        <i class="ti ti-calendar text-gray-9"></i>
                    </span>
                    <input type="text" class="form-control yearpicker" value="2025">
                </div>
            </div>
            <div class="ms-2 head-icons">
                <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-original-title="Collapse" id="collapse-header">
                    <i class="ti ti-chevrons-up"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Welcome Wrap -->
    <div class="card border-0">
        <div class="card-body d-flex align-items-center justify-content-between flex-wrap pb-1">
            <div class="d-flex align-items-center mb-3">
                <span class="avatar avatar-xl flex-shrink-0">
                    <img src="{{ asset('img/logo-small.svg') }}" class="rounded-circle" alt="img">
                </span>
                <div class="ms-3">
                    <h3 class="mb-2">Welcome Back, {{auth()->user()->name}} </h3>
                    <p>You have <span class="text-primary text-decoration-underline">21</span> Pending Approvals & <span
                            class="text-primary text-decoration-underline">14</span> Leave Requests</p>
                </div>
            </div>
            <div class="d-flex align-items-center flex-wrap mb-1">
                <a href="#" class="btn btn-secondary btn-md me-2 mb-2" data-bs-toggle="modal"
                    data-bs-target="#add_project"><i class="ti ti-square-rounded-plus me-1"></i>Add Project</a>
                <a href="#" class="btn btn-primary btn-md mb-2" data-bs-toggle="modal" data-bs-target="#add_leaves"><i
                        class="ti ti-square-rounded-plus me-1"></i>Add Requests</a>
            </div>
        </div>
    </div>
@endsection
