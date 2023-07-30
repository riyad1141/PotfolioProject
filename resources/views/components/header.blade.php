<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{url('/')}}" class="logo d-flex align-items-center  me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <i class="bi bi-camera"></i>
            <h1>PhotoFolio</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{url('/')}}" class="active">Home</a></li>
                <li><a href="{{url('/About')}}">About</a></li>
                <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{url('/GALLERY')}}">Nature</a></li>
                        <li><a href="{{url('/GALLERY')}}">People</a></li>
                        <li><a href="{{url('/GALLERY')}}">Architecture</a></li>
                        <li><a href="{{url('/GALLERY')}}">Animals</a></li>
                        <li><a href="{{url('/GALLERY')}}">Sports</a></li>
                        <li><a href="{{url('/GALLERY')}}">Travel</a></li>
                        <li class="dropdown"><a href="#"><span>Sub Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Sub Menu 1</a></li>
                                <li><a href="#">Sub Menu 2</a></li>
                                <li><a href="#">Sub Menu 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{url('/Services')}}">Services</a></li>
                <li><a href="{{url('/Contact')}}">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="header-social-links">
            <a id="twitter" target="_blank" href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a id="facebook" target="_blank" href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a id="instagram" target="_blank" href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a id="linkedin" target="_blank" href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->





<script>

    social();

   async function social() {
        try {
            let URL = "/social_Data";

            let response = await axios.get(URL);

            document.getElementById('twitter').href = response.data['twitter'];
            document.getElementById('facebook').href = response.data['facebook'];
            document.getElementById('instagram').href = response.data['instagram'];
            document.getElementById('linkedin').href = response.data['linkedin'];


        }catch (e) {
            alert(e);
        }
    }


</script>












