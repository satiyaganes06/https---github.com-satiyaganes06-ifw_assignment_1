
<nav class="navbar navbar-expand-lg navbar-dark ">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <a class="navbar-brand mt-2 mt-lg-0" href="/">
                <img src="{{URL('images/logo.svg')}}" height="30" alt="Disney+" loading="lazy" />
            </a>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Premium</a>
                </li>
            </ul>

        </div>



        <div class="d-flex align-items-center">

            <form class="d-flex input-group w-auto">
                <input type="search" class="form-control rounded-3" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />


                <a class="btn btn-outline-warning text-white-50  ml-2 rounded-3" href="/subscription"><i class="fas fa-crown"></i> Subscribe</a>
            </form>
        </div>

    </div>

</nav>