<!-- DESKTOP NAV --->
<button type="button" class="navbar-toggle menu-txt-toggle" style="">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>

<!-- MOBILE NAV -->
<button type="button" id="mobile-toggle" class="mobile-toggle mobile-nav" data-toggle="offcanvas"
        data-target="#myNavmenu">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>

<div class="navbar navbar-default navbar-top">

        <div class="navbar-icons__wrapper">

            <div id="nav-toggle col-sm-6">
                <search></search>
            </div>
            @if(Entrust::hasRole('administrator') || Entrust::hasRole('owner'))
              
            @endif
            @include('navigation.topbar.user-profile')
            <div id="nav-toggle col-sm-2">
                <a id="grid-action" role="button" data-toggle="dropdown">
                    <div class="badge-notification">
                    <span class="top-bar-toggler">
                        <i class="fa fa-bell fa-5x fa-border icon-grey badge" 
                        style="width: 100px; display: inline-block; text-align: center;
                            vertical-align: middle;  position: relative;"></i>
                    </span>
                </div>
                </a>
            </div>
        </div>

    @include('partials.action-panel._panel')
<!--NOTIFICATIONS END-->

</div>

