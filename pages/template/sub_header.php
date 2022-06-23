</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/build/images/bk_logo.svg" class="website__logo" alt="Dragon Tax & Management Inc Bookkeeping Logo">&nbsp;
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= (($page == 'home') ? 'active' : '')?>" aria-current="page" href="http://bk:8001">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= (($page == 'pricing') ? 'active' : '')?>" href="http://bk:8001/pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= (($page == 'our_service') ? 'active' : '')?>" href="http://bk:8001/our-service">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= (($page == 'contact_us') ? 'active' : '')?>"  href="http://bk:8001/contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>