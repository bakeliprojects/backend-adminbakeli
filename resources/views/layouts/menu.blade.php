<li class="{{ Request::is('links*') ? 'active' : '' }}">
    <a href="{!! route('links.index') !!}"><i class="fa fa-edit"></i><span>links</span></a>
</li>

<li class="{{ Request::is('vcs*') ? 'active' : '' }}">
    <a href="{!! route('vcs.index') !!}"><i class="fa fa-edit"></i><span>vcs</span></a>
</li>

