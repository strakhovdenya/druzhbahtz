<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top"  title="Logout"
       href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form-footer').submit();">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
    <form id="logout-form-footer" action="{{ route('logout') }}" method="POST"
          style="display: none;">
        @csrf
    </form>
</div>




