<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fa ion-ios-body"></i>
        <p>
          Tissues
          <i class="right fa fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/tissues" class="nav-link">
            <i class="fa ion-ios-list-outline nav-icon"></i>
            <p>List</p>
          </a>
        </li>
        @if((Auth::user())->can('create articles'))
        <li class="nav-item">
          <a href="/tissues/create" class="nav-link">
            <i class="fa ion-plus-round nav-icon"></i>
            <p>create</p>
          </a>
        </li>
        @endif
      </ul>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fa flaticon-x-ray-of-lungs"></i>
        <p>
          Tissue Types
          <i class="right fa fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/tissue_types" class="nav-link">
            <i class="fa ion-ios-list-outline nav-icon"></i>
            <p>List</p>
          </a>
        </li>
        @if((Auth::user())->can('create articles'))
        <li class="nav-item">
          <a href="/tissue_types/create" class="nav-link">
            <i class="fa ion-plus-round nav-icon"></i>
            <p>create</p>
          </a>
        </li>
        @endif
      </ul>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fa flaticon-bones-crossed"></i>
        <p>
          Bones
          <i class="right fa fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/bones" class="nav-link">
            <i class="fa ion-ios-list-outline nav-icon"></i>
            <p>List</p>
          </a>
        </li>
        @if((Auth::user())->can('create articles'))
        <li class="nav-item">
          <a href="/bones/create" class="nav-link">
            <i class="fa ion-plus-round nav-icon"></i>
            <p>create</p>
          </a>
        </li>
        @endif
      </ul>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fa flaticon-biceps"></i>
        <p>
          Muscles
          <i class="right fa fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/muscles" class="nav-link">
            <i class="fa ion-ios-list-outline nav-icon"></i>
            <p>List</p>
          </a>
        </li>
        @if((Auth::user())->can('create articles'))
        <li class="nav-item">
          <a href="/muscles/create" class="nav-link">
            <i class="fa ion-plus-round nav-icon"></i>
            <p>create</p>
          </a>
        </li>
        @endif
      </ul>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="right fa ion-compass nav-icon"></i>
        <p>
          Zones <i class="right fa fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/zones" class="nav-link">
            <i class="fa ion-ios-list-outline nav-icon"></i>
            <p>List</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/zones/create" class="nav-link">
            <i class="fa ion-plus-round nav-icon"></i>
            <p>create</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->