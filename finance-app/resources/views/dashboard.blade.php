@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h2 fw-bold text-primary">
        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
    </h1>
</div>

<style>
.card:hover {
    transform: translateY(-3px);
    transition: all 0.25s ease-in-out;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

.form-select:focus {
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.25) !important;
    outline: none;
    border-color: #fff;
}

.form-select option {
    color: #000;
}
</style>

