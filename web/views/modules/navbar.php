<style>
  .dropdown-toggle::after{
    display: none !important;
  }

ul{
  padding: 0;
  list-style: none;
  text-decoration: none;
}
</style>

<div class="container py-2 py-lg-4">
  <div class="row">

    <div class="col-12 col-lg-2 mt-1">

      <div class="d-flex justify-content-center">
        <a href="../../index3.html" class="navbar-brand">
          <img src="<?php echo $path ?>views/assets/img/logo/logoSisconet.jpg" alt="Logo" class="brand-image img-circle img-fluid py-3 px-5 p-lg-0 pe-lg-3">
        </a>

      </div>


    </div>

    <div class="col-12 col-lg-7 col-xl-8 mt-1 px-3 px-lg-0">

      <a class="nav-link float-start" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      
      <div class="dropdown px-1 float-start" style="background: #47BAc1; color: white">

            <a id="dropdownSubMenu1" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-uppercase"> <span class="d-lg-block d-none">Categorias <i class="ps-lg-2 fas fa-th-list"></i> </span>
            <span class="d-lg-none d-block"><i class="ps-lg-2 fas fa-th-list"></i> </span>
          </a> 

            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

             <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase ps-2">
                  
                  <i class="fas fa-desktop pe-2 fa-xs"></i> Computadoras
                               
                </a>

                <!--<ul class=" border-0 shadow py-3 ps-3 d-block d-lg-none">
                  
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">PC Escritorio</a>
                  </li>

                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Portatil</a>
                  </li>

                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Todo en Uno</a>
                  </li>

                </ul>-->

                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">PC Escritorio</a>
                  </li>

                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Portatil</a>
                  </li>

                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Todo en Uno</a>
                  </li>

                </ul>

              </li>
              <!-- End Level two -->

              <!-- Level three dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase ps-2">
                  
                  <i class="fas fa-print pe-2 fa-xs"></i> Impresoras
                               
                </a>

                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Punto de Venta</a>
                  </li>

                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Multifuncion</a>
                  </li>

                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Laser</a>
                  </li>

                </ul>

              </li>
              <!-- End Level three -->

               <!-- Level three dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase ps-2">
                  
                  <i class="fas fa-microchip pe-2 fa-xs"></i> Componentes
                               
                </a>

                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Motherboard</a>
                  </li>

                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Tarjetas de Video</a>
                  </li>

                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Monitores</a>
                  </li>

                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Fuentes de Poder</a>
                  </li>

                </ul>

              </li>
              <!-- End Level three -->
            
            </ul>

      </div>
       
      <!-- SEARCH FORM -->
        <form class="form-inline">
          <div class="input-group w-100 me-0 me-lg-4">
            <input class="form-control rounded-0 p-3 pe-5" type="search" placeholder="Buscar..." style="height: 40px;">
            <div class="input-group-append px-2" style="background: #47BAc1; color: white">
              <button class="btn btn-navbar text-white" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>

    </div>

    <div class="col-12 col-lg-3 col-xl-2 mt-1 px-3 px-lg-0">

      <div class="my-2 my-lg-0 d-flex justify-content-center">

        <a href="">

          <button class="bt btn-default float-start rounded-0 border-0 py-2 px-3" style="background: #47BAC1; color: white">

            <i class="fa fa-shopping-cart"></i>

          </button>

        </a>
        <div class="small border float-start ps-2 pe-5 w-100">

          TU CESTA <span>0</span> USD $<span>0</span>

        </div>
      </div>


    </div>

  </div>

</div>