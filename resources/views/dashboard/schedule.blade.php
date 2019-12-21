@extends('layouts.app')

@section('content')
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Cadastrar Cliente</a></li>
            <li><a href="#">Cadastrar Procedimento</a></li>
            <li><a href="#">Agenda</a></li>
            <li><a href="#">Editar Perfil</a></li>
        </ul>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#" class="btn btn-primary" id="menu-toggle"><span
                            class="glyphicon glyphicon-menu-hamburger"></span></a>
                    <!-- resto do código -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection