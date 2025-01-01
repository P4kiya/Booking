<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ Request::is('admin/') ? 'active' : '' }}">
                    <a href="/admin/"><i class="fa-solid fa-home"></i> <span>Accueil</span></a>
                </li>
                <li class="{{ Request::is('admin/clients') || Request::is('admin/add-client') || Request::is('admin/edit-client/*') ? 'active' : '' }}">
                    <a href="/admin/clients"><i class="fa-solid fa-users"></i><span>Clients</span></a>
                </li>
                <li class="{{ Request::is('admin/appartements') || Request::is('admin/add-appartement') || Request::is('admin/edit-appartement/*') ? 'active' : '' }}">
                    <a href="/admin/appartements"><i class="fa-solid fa-house-user"></i><span>Appartements</span></a>
                </li>
                <li class="{{ Request::is('admin/calendar') ? 'active' : '' }}">
                    <a href="/admin/calendar"> <i class="fa-solid fa-calendar-days"></i><span>Planning</span></a>
                </li>
                <li class="{{ Request::is('admin/reservation') || Request::is('admin/add-reservation')|| Request::is('admin/view-reservation/*') || Request::is('admin/edit-reservation/*') ? 'active' : '' }}">
                    <a href="/admin/reservation"> <i class="fa fa-window-restore tooltipped"></i><span>Reservation</span></a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
