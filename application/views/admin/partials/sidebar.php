<nav class="sidebar">
    <div class="sidebar-header">
        <a href="<?= base_url('admin/dashboard'); ?>" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav" id="sidebarNav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="<?= base_url('admin/dashboard'); ?>" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Content Manager</li>

            
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="blank-page.html#emails" role="button"
                    aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Email</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../email/inbox.html" class="nav-link">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a href="../email/read.html" class="nav-link">Read</a>
                        </li>
                        <li class="nav-item">
                            <a href="../email/compose.html" class="nav-link">Compose</a>
                        </li>
                    </ul>
                </div>
            </li>







            <li class="nav-item">
                <a href="../apps/chat.html" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Chat</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>
            <li class="nav-item nav-category">Components</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="blank-page.html#uiComponents" role="button"
                    aria-expanded="false" aria-controls="uiComponents">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">UI Kit</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="uiComponents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../ui-components/accordion.html" class="nav-link">Accordion</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/alerts.html" class="nav-link">Alerts</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/badges.html" class="nav-link">Badges</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/breadcrumbs.html" class="nav-link">Breadcrumbs</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/buttons.html" class="nav-link">Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/button-group.html" class="nav-link">Button group</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/cards.html" class="nav-link">Cards</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/carousel.html" class="nav-link">Carousel</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/collapse.html" class="nav-link">Collapse</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/dropdowns.html" class="nav-link">Dropdowns</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/list-group.html" class="nav-link">List group</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/media-object.html" class="nav-link">Media object</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/modal.html" class="nav-link">Modal</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/navs.html" class="nav-link">Navs</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/navbar.html" class="nav-link">Navbar</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/pagination.html" class="nav-link">Pagination</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/popover.html" class="nav-link">Popovers</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/progress.html" class="nav-link">Progress</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/scrollbar.html" class="nav-link">Scrollbar</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/scrollspy.html" class="nav-link">Scrollspy</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/spinners.html" class="nav-link">Spinners</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/tabs.html" class="nav-link">Tabs</a>
                        </li>
                        <li class="nav-item">
                            <a href="../ui-components/tooltips.html" class="nav-link">Tooltips</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="blank-page.html#advancedUI" role="button"
                    aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="anchor"></i>
                    <span class="link-title">Advanced UI</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="advancedUI">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../advanced-ui/cropper.html" class="nav-link">Cropper</a>
                        </li>
                        <li class="nav-item">
                            <a href="../advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                        </li>
                        <li class="nav-item">
                            <a href="../advanced-ui/sortablejs.html" class="nav-link">SortableJs</a>
                        </li>
                        <li class="nav-item">
                            <a href="../advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="blank-page.html#forms" role="button"
                    aria-expanded="false" aria-controls="forms">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Forms</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="forms">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../forms/basic-elements.html" class="nav-link">Basic Elements</a>
                        </li>
                        <li class="nav-item">
                            <a href="../forms/advanced-elements.html" class="nav-link">Advanced Elements</a>
                        </li>
                        <li class="nav-item">
                            <a href="../forms/editors.html" class="nav-link">Editors</a>
                        </li>
                        <li class="nav-item">
                            <a href="../forms/wizard.html" class="nav-link">Wizard</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="blank-page.html#charts" role="button"
                    aria-expanded="false" aria-controls="charts">
                    <i class="link-icon" data-feather="pie-chart"></i>
                    <span class="link-title">Charts</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="charts">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../charts/apex.html" class="nav-link">Apex</a>
                        </li>
                        <li class="nav-item">
                            <a href="../charts/chartjs.html" class="nav-link">ChartJs</a>
                        </li>
                        <li class="nav-item">
                            <a href="../charts/flot.html" class="nav-link">Flot</a>
                        </li>
                        <li class="nav-item">
                            <a href="../charts/peity.html" class="nav-link">Peity</a>
                        </li>
                        <li class="nav-item">
                            <a href="../charts/sparkline.html" class="nav-link">Sparkline</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="blank-page.html#tables" role="button"
                    aria-expanded="false" aria-controls="tables">
                    <i class="link-icon" data-feather="layout"></i>
                    <span class="link-title">Table</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="tables">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../tables/basic-table.html" class="nav-link">Basic Tables</a>
                        </li>
                        <li class="nav-item">
                            <a href="../tables/data-table.html" class="nav-link">Data Table</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="blank-page.html#icons" role="button"
                    aria-expanded="false" aria-controls="icons">
                    <i class="link-icon" data-feather="smile"></i>
                    <span class="link-title">Icons</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="icons">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../icons/feather-icons.html" class="nav-link">Feather Icons</a>
                        </li>
                        <li class="nav-item">
                            <a href="../icons/flag-icons.html" class="nav-link">Flag Icons</a>
                        </li>
                        <li class="nav-item">
                            <a href="../icons/mdi-icons.html" class="nav-link">Mdi Icons</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Pages</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="blank-page.html#general-pages" role="button"
                    aria-expanded="false" aria-controls="general-pages">
                    <i class="link-icon" data-feather="book"></i>
                    <span class="link-title">Special pages</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="general-pages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="blank-page.html" class="nav-link">Blank page</a>
                        </li>
                        <li class="nav-item">
                            <a href="faq.html" class="nav-link">Faq</a>
                        </li>
                        <li class="nav-item">
                            <a href="invoice.html" class="nav-link">Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a href="profile.html" class="nav-link">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="pricing.html" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="timeline.html" class="nav-link">Timeline</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="blank-page.html#authPages" role="button"
                    aria-expanded="false" aria-controls="authPages">
                    <i class="link-icon" data-feather="unlock"></i>
                    <span class="link-title">Authentication</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="authPages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../auth/login.html" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="../auth/register.html" class="nav-link">Register</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="blank-page.html#errorPages" role="button"
                    aria-expanded="false" aria-controls="errorPages">
                    <i class="link-icon" data-feather="cloud-off"></i>
                    <span class="link-title">Error</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="errorPages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../error/404.html" class="nav-link">404</a>
                        </li>
                        <li class="nav-item">
                            <a href="../error/500.html" class="nav-link">500</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Docs</li>
            <li class="nav-item">
                <a href="../../../../documentation/docs.html" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</nav>