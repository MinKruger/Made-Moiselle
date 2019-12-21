<script src="https://raw.githubusercontent.com/juliangarnier/anime/master/lib/anime.min.js"></script>

<div class="main-body">
    <div class="nav-bar">
        <div class="title">
            <div id="title-text">Menu</div>
            <div id="box"></div>
        </div>
        <div class="nav-item-list">
            <!-- <div id="indicator"></div> Sidebar done-->
            <div class="nav-item">
                <div class="item-text"><a class="nav-link" href="{{ route('dashboard.index') }}">Home</a></div>
            </div><br>
            <div class="nav-item">
                <div class="item-text"><a class="nav-link" href="{{ route('clients.index') }}">Clientes</a></div>
            </div><br>
            <div class="nav-item">
                <div class="item-text"><a class="nav-link" href="{{ route('procedures.index') }}">Procedimentos</a>
                </div>
            </div><br>
            <div class="nav-item">
                <div class="item-text"><a class="nav-link" href="{{ route('schedule.index') }}">Agenda</a></div>
            </div><br>
            <div class="nav-item">
                <div class="item-text"><a class="nav-link" href="{{ route('profiles.edit', Auth::id()) }}">Editar
                        Perfil</a></div>
            </div><br>
        </div>
    </div>
</div>