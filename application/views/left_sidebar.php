
<style>
/* .sidebar {
    min-width: 250px;
    max-width: 250px;
    transition: margin-left .35s ease-in-out,left .35s ease-in-out,margin-right .35s ease-in-out,right .35s ease-in-out;
    direction: ltr;
    background: #607d8b;
}
        .simplebar-content-wrapper {
    direction: inherit;
    box-sizing: border-box;
    position: relative;
    display: block;
    height: 100%;
    width: auto;
    max-width: 100%;
    max-height: 100%;
    scrollbar-width: none;
    -ms-overflow-style: none;
    overflow: hidden scroll;
}
        .sidebar-brand {
    font-weight: 500;
    font-size: 1.125rem;
    padding: 8.9px 1.5rem;
    display: block;
    text-align: center;
    color: #fff;
    background: #f7f4f4;
    margin-bottom: 35px;
    border-right: 1px solid #003948;
}
img.mainlogo {
    width:25%;
}
.sidebar-nav {
    padding-left: 0;
    list-style: none;
    font-family: 'poppins';
    font-size: 13px;
}
.sidebar-nav li.sidebar-item.active {
    border-right: 4px solid #FFF;
    background: rgb(255 255 255 / 21%);
}
.sidebar-nav .sidebar-link, .sidebar-nav a.sidebar-link {
    display: block;
    padding: 0.625rem 1.625rem;
    font-weight: 400;
    transition: color 75ms ease-in-out;
    position: relative;
    text-decoration: none;
    cursor: pointer;
    color: #fff;
}
.sidebar-nav .sidebar-link:hover {
    color: rgba(233,236,239,.75);
}
.sidebar-nav .sidebar-link i, .sidebar-nav .sidebar-link svg, 
.sidebar-nav a.sidebar-link i, .sidebar-nav a.sidebar-link svg {
    margin-right: 0.75rem;
    color: rgba(233,236,239,.5);
}
.sidebar-nav .sidebar-link:hover i, .sidebar-nav .sidebar-link:hover svg {
    color: rgba(233,236,239,.75);
}
.sidebar-nav .align-middle {
    vertical-align: middle;
}
.sidebar-nav .sidebar-header {
    background: transparent;
    padding: 1.5rem 1.5rem 0.375rem;
    font-size: .75rem;
    color: #ced4da;
} */

</style>
<nav class="sidebar">
        <div class="simplebar-content-wrapper">
            <div class="simplebar-content">
                <a class="sidebar-brand" href="javascript: void(0);">
                    <img src="imgs/logo.png" class="mainlogo">
                </a>

                <ul class="sidebar-nav">

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="<?php echo base_url('dashboard')?>">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-sliders align-middle"
                    >
                        <line x1="4" y1="21" x2="4" y2="14"></line>
                        <line x1="4" y1="10" x2="4" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12" y2="3"></line>
                        <line x1="20" y1="21" x2="20" y2="16"></line>
                        <line x1="20" y1="12" x2="20" y2="3"></line>
                        <line x1="1" y1="14" x2="7" y2="14"></line>
                        <line x1="9" y1="8" x2="15" y2="8"></line>
                        <line x1="17" y1="16" x2="23" y2="16"></line>
                    </svg>
                    <span class="align-middle">Dashboards</span>
                    </a>
                </li>

                <li class="sidebar-header">Globalshippersrwanda Services</li>

                <li class="sidebar-item">
                    <a href="<?php echo base_url('shopnship');?>" class="sidebar-link">
                    <i class="fa fa-shopping-basket"></i>
                    <span class="align-middle"> Shop n Ship</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="<?php echo base_url('assisted_sns');?>" class="sidebar-link">
                    <i class="align-middle mr-2 fas fa-fw fa-handshake"></i>
                    <span class="align-middle">Assisted shop n ship</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a
                    href="<?php echo base_url('international_shipment')?>" class="sidebar-link">
                    <i class="align-middle mr-2 fas fa-fw fa-plane-departure"></i>
                    <span class="align-middle">International Shipment</span>
                    </a>
                </li>

                <li class="sidebar-header">Globalshippersrwanda Help</li>

                <li class="sidebar-item">
                    <a
                    href="javascript:void(0);" target="_blank" class="sidebar-link">
                    <i class="align-middle fas fa-fw fa-ban"></i>
                    <span class="align-middle">Prohibited Items</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                    href="javascript:void(0);" target="_blank" class="sidebar-link">
                    <i class="align-middle fas fa-fw fa-exclamation-circle"></i>
                    <span class="align-middle"> Contact Us</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="javascript:void(0);" target="_blank" class="sidebar-link">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-help-circle align-middle"
                    >
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    <span class="align-middle"> FAQ</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="javascript:void(0);" class="sidebar-link">
                    <i class="align-middle fas fa-fw fa-exclamation-circle"></i>
                    <span class="align-middle"> How It Works</span>
                    </a>
                </li>

                <li class="sidebar-header">Other</li>

                <li class="sidebar-item">
                    <a href="javascript:void(0);" class="sidebar-link">
                    <i class="align-middle fas fa-fw fa-tags"></i>
                    <span class="align-middle"> Coupons</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a
                    href="javascript:void(0);" class="sidebar-link">
                    <i class="align-middle fas fa-fw fa-address-book"></i>
                    <span class="align-middle"> Address Book</span>
                    </a>
                </li>

                <li class="sidebar-header">Blog</li>

                <li class="sidebar-item">
                    <a href="javascript:void(0);" target="_blank" class="sidebar-link">
                    <i class="align-middle fab fa-fw fa-blogger"></i>
                    <span class="align-middle"> Blog</span>
                    </a>
                </li>

                </ul>
            </div>
        </div>
    </nav>