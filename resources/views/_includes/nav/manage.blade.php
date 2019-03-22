<div class="side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manageusers.index')}}">Dashboard</a></li>
    </ul>

    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a href="/tables">Tables</a></li>
      <li><a href="/manageorders">Manage Orders</a></li>

      <li>
      <li><a href="{{route('manageusers.index')}}">Manage Users</a></li>
           
      
        <a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
        <ul>
          <li><a href="{{route('roles.index')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
