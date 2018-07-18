<section>
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="http://shahali.me/images/shahali-web-developer.png" width="48" alt="User"/>
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Shahali Bogdadi
                </div>
                <div class="email small">Admin</div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="{{ url('backend') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle toggled">
                        <i class="material-icons">linear_scale</i>
                        <span>Record</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ url('record') }}">All Record</a>
                        </li>
                        <li>
                            <a href="{{ url('record/create') }}">Add New Record</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; {{ date("Y") }} <a href="{{ url('backend') }}">Shahali.me</a>.
            </div>
            <div class="version">
                Developed by<b><a href="">Shahali Bogdadi</a> </b>
            </div>
        </div>
        <!-- #Footer -->
    </aside>
</section>