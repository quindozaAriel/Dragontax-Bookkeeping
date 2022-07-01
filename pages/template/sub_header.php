</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light z-4">
        <div class="container">
            <a class="navbar-brand" href="./home">
                <img src="../assets/build/images/bk_logo.svg" class="website__logo" alt="Dragon Tax & Management Inc Bookkeeping Logo">&nbsp;
            </a>
            <button class="navbar-toggler" type="button" onclick="MAIN.show_nav()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= (($page == 'home') ? 'active' : '') ?>" href="http://bk:8001">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= (($page == 'pricing') ? 'active' : '') ?>" href="http://bk:8001/pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= (($page == 'our_service') ? 'active' : '') ?>" href="http://bk:8001/our-service">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= (($page == 'contact_us') ? 'active' : '') ?>" href="http://bk:8001/contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="popup_nav popup_nav__mod">
        <span class="closing" onclick="MAIN.hide_nav()">X</span>
        <ul>
            <li class="nav-item">
                <a class="nav-link nav-link-custom <?= (($page == 'home') ? 'active' : '') ?>" href="http://bk:8001">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom <?= (($page == 'pricing') ? 'active' : '') ?>" href="http://bk:8001/pricing">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom <?= (($page == 'our_service') ? 'active' : '') ?>" href="http://bk:8001/our-service">Our Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom <?= (($page == 'contact_us') ? 'active' : '') ?>" href="http://bk:8001/contact-us">Contact Us</a>
            </li>
        </ul>
    </div>