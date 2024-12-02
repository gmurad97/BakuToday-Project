        <!-- ========== App Menu Start ========== -->
        <div class="main-nav">
            <!-- Sidebar Logo -->
            <div class="logo-box">
                <a href="index.html" class="logo-dark">
                    <img src="<?= base_url('public/admin/assets/images/logo-sm.png'); ?>" class="logo-sm"
                        alt="logo sm" />
                    <img src="<?= base_url('public/admin/assets/images/logo-dark.png'); ?>" class="logo-lg"
                        alt="logo dark" />
                </a>

                <a href="index.html" class="logo-light">
                    <img src="<?= base_url('public/admin/assets/images/logo-sm.png'); ?>" class="logo-sm"
                        alt="logo sm" />
                    <img src="<?= base_url('public/admin/assets/images/logo-light.png'); ?>" class="logo-lg"
                        alt="logo light" />
                </a>
            </div>

            <!-- Menu Toggle Button (sm-hover) -->
            <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                <iconify-icon icon="iconamoon:arrow-left-4-square-duotone" class="button-sm-hover-icon"></iconify-icon>
            </button>

            <div class="scrollbar" data-simplebar>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title">General</li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarDashboards"
                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="sidebarDashboards">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:home-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Dashboards </span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="index.html">Analytics</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="dashboard-finance.html">Finance</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="dashboard-sales.html">Sales</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title">Apps</li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarEcommerce"
                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="sidebarEcommerce">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:shopping-bag-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Ecommerce </span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-ecommerce-product-list.html">Products</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-ecommerce-product-detail.html">Product
                                        Details</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-ecommerce-product-add.html">Create Product</a>
                                </li>

                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-ecommerce-customer-list.html">Customers</a>
                                </li>

                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-ecommerce-seller-list.html">Sellers</a>
                                </li>

                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-ecommerce-order-list.html">Orders</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-ecommerce-order-detail.html">Order Details</a>
                                </li>

                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-ecommerce-inventory.html">Inventory</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="apps-chat.html">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:comment-dots-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Chat </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="apps-email.html">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:email-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Email </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarCalendar"
                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="sidebarCalendar">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:calendar-1-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Calendar </span>
                        </a>
                        <div class="collapse" id="sidebarCalendar">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-calendar-schedule.html">Schedule</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-calendar-integration.html">Integration</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-calendar-help.html">Help</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="apps-todo.html">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:ticket-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Todo </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="apps-social.html">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:squinting-face-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Social </span>
                            <span class="badge badge-pill text-end bg-danger">Hot</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="apps-contacts.html">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:profile-circle-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Contacts </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarInvoice"
                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="sidebarInvoice">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:invoice-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Invoices </span>
                        </a>
                        <div class="collapse" id="sidebarInvoice">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-invoices.html">Invoices</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="apps-invoice-details.html">Invoice Details</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title">Custom</li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarPages" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarPages">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:copy-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Pages </span>
                        </a>
                        <div class="collapse" id="sidebarPages">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-starter.html">Welcome</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-faqs.html">FAQs</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-profile.html">Profile</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-comingsoon.html">Coming Soon</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-contact-us.html">Contact Us</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-about-us.html">About Us</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-team.html">Our Team</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-timeline.html">Timeline</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-pricing.html">Pricing</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-maintenance.html">Maintenance</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-404.html">404 Error</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-404-2.html">404 Error 2</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-404-alt.html">404 Error (alt)</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end Pages Menu -->

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarAuthentication"
                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="sidebarAuthentication">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:lock-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Authentication </span>
                        </a>
                        <div class="collapse" id="sidebarAuthentication">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-signin.html">Sign In</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-signin2.html">Sign In 2</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-signup.html">Sign Up</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-signup2.html">Sign Up 2</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-password.html">Reset Password</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-password2.html">Reset Password 2</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-lock-screen.html">Lock Screen</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-lock-screen2.html">Lock Screen 2</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="widgets.html">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:gift-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text">Widgets</span>
                            <span class="badge bg-info badge-pill text-end">9+</span>
                        </a>
                    </li>
                    <!-- end Demo Menu Item -->

                    <li class="menu-title">Components</li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarBaseUI" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarBaseUI">
                            <span class="nav-icon"><iconify-icon
                                    icon="iconamoon:briefcase-duotone"></iconify-icon></span>
                            <span class="nav-text"> Base UI </span>
                        </a>
                        <div class="collapse" id="sidebarBaseUI">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-accordion.html">Accordion</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-alerts.html">Alerts</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-avatar.html">Avatar</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-badge.html">Badge</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-buttons.html">Buttons</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-card.html">Card</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-carousel.html">Carousel</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-collapse.html">Collapse</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-dropdown.html">Dropdown</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-list-group.html">List Group</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-modal.html">Modal</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-tabs.html">Tabs</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-offcanvas.html">Offcanvas</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-pagination.html">Pagination</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-placeholders.html">Placeholders</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-popovers.html">Popovers</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-progress.html">Progress</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-scrollspy.html">Scrollspy</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-spinners.html">Spinners</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-toasts.html">Toasts</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-tooltips.html">Tooltips</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end Base UI Menu -->

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarExtendedUI"
                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="sidebarExtendedUI">
                            <span class="nav-icon"><iconify-icon
                                    icon="iconamoon:component-duotone"></iconify-icon></span>
                            <span class="nav-text"> Advanced UI </span>
                        </a>
                        <div class="collapse" id="sidebarExtendedUI">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="extended-ratings.html">Ratings</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="extended-sweetalert.html">Sweet Alert</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="extended-swiper-silder.html">Swiper Slider</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="extended-scrollbar.html">Scrollbar</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="extended-toastify.html">Toastify</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end Extended UI Menu -->

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarCharts" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarCharts">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:3d-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Charts </span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-area.html">Area</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-bar.html">Bar</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-bubble.html">Bubble</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-candlestick.html">Candlestick</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-column.html">Column</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-heatmap.html">Heatmap</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-line.html">Line</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-mixed.html">Mixed</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-timeline.html">Timeline</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-boxplot.html">Boxplot</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-treemap.html">Treemap</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-pie.html">Pie</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-radar.html">Radar</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-radialbar.html">RadialBar</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-scatter.html">Scatter</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-polar-area.html">Polar Area</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end Chart library Menu -->

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarForms" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarForms">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:cheque-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Forms </span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-basic.html">Basic Elements</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-checkbox-radio.html">Checkbox &amp; Radio</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-choices.html">Choice Select</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-clipboard.html">Clipboard</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-flatepicker.html">Flatepicker</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-validation.html">Validation</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-wizard.html">Wizard</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-fileuploads.html">File Upload</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-editors.html">Editors</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-input-mask.html">Input Mask</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-range-slider.html">Slider</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end Form Menu -->

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarTables" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarTables">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:box-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Tables </span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="tables-basic.html">Basic Tables</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="tables-gridjs.html">Grid Js</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end Table Menu -->

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarIcons" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarIcons">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:lightning-1-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Icons </span>
                        </a>
                        <div class="collapse" id="sidebarIcons">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="icons-boxicons.html">Boxicons</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="icons-iconamoon.html">IconaMoon Icons</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end Icons library Menu -->

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarMaps" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarMaps">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:location-pin-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Maps </span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="maps-google.html">Google Maps</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="maps-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end Map Menu -->

                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:badge-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text">Badge Menu</span>
                            <span class="badge bg-danger badge-pill text-end">1</span>
                        </a>
                    </li>
                    <!-- end Demo Menu Item -->

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="pages-starter.html#sidebarMultiLevelDemo"
                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="sidebarMultiLevelDemo">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:folder-add-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Menu Item </span>
                        </a>
                        <div class="collapse" id="sidebarMultiLevelDemo">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="javascript:void(0);">Menu Item 1</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link menu-arrow" href="pages-starter.html#sidebarItemDemoSubItem"
                                        data-bs-toggle="collapse" role="button" aria-expanded="false"
                                        aria-controls="sidebarItemDemoSubItem">
                                        <span> Menu Item 2 </span>
                                    </a>
                                    <div class="collapse" id="sidebarItemDemoSubItem">
                                        <ul class="nav sub-navbar-nav">
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="javascript:void(0);">Menu Sub item</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end Demo Menu Item -->

                    <li class="nav-item">
                        <a class="nav-link disabled" href="javascript:void(0);">
                            <span class="nav-icon">
                                <iconify-icon icon="iconamoon:unavailable-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Disabled Item </span>
                        </a>
                    </li>
                    <!-- end Demo Menu Item -->
                </ul>
            </div>
        </div>

        <!-- ========== App Menu End ========== -->

                <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">
            <!-- Start Container -->
            <div class="container-xxl"></div>