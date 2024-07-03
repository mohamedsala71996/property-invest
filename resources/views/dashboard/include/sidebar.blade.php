<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="../../dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open"> <a href="{{route('dashboard.index')}}" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Dashboard
                                    
                                </p>
                            </a>
                           
                        </li>
                       
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-clipboard-fill"></i>
                                <p>
                                    News
                                    <span class="nav-badge badge text-bg-secondary me-3">{{\App\Models\News::count()}}</span> <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{route('dashboard.news.index')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>All News</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="{{route('dashboard.news.add')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Add New</p>
                                    </a> </li>
                             
                              
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-clipboard-fill"></i>
                                <p>
                                    Posts
                                    <span class="nav-badge badge text-bg-secondary me-3">{{\App\Models\PostAdvertise::count()}}</span> <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{route('dashboard.posts.index')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>All Posts</p>
                                    </a> </li>
                                   
                                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>
                                        Settings
                                            <i class="nav-arrow bi bi-chevron-right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview" style="box-sizing: border-box; display: none;">
                                        <li class="nav-item"> <a href="{{route('dashboard.advertise.duration.index')}}" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Advertise Durations</p>
                                            </a> </li>
                                            <li class="nav-item"> <a href="{{route('dashboard.property.types.index')}}" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Property Types</p>
                                            </a> </li>
                                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Bedrooms</p>
                                            </a> </li>
                                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Bathrooms</p>
                                            </a> </li>
                                            <li class="nav-item"> <a href="{{route('dashboard.floors.index')}}" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Floors</p>
                                            </a> </li>
                                            <li class="nav-item"> <a href="{{route('dashboard.furnishing.types.index')}}" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Furnishing</p>
                                            </a> </li>
                                            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Furnishing</p>
                                            </a> </li>
                                            <li class="nav-item"> <a href="{{route('dashboard.completion.status.index')}}" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Completion Status</p>
                                            </a> </li>
                                            <li class="nav-item"> <a href="{{route('dashboard.amenities.index')}}" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Amenities</p>
                                            </a> </li>
                                            <li class="nav-item"> <a href="{{route('dashboard.virtual.viewings.index')}}" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Virtual Viewings</p>
                                            </a> </li>
                                            <li class="nav-item"> <a href="{{route('dashboard.countries.index')}}" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Countries</p>
                                            </a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                       
       
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar-->