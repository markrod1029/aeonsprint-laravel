<template>
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
    <li class="nav-item" id="toggleMenuIcon">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
        

</ul>

<ul class="navbar-nav ml-auto">

    <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
        </a>

        <div class="navbar-search-block">
            <form class="form-inline">
                <div class="input-group input-group-sm">
                    
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    
                    <div class="input-group-append">
                        
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>

                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    


        <!-- Full Screen  -->
             <!-- <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>  -->


       <!-- right sidebar button  -->
            <!-- <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>  -->


</ul>
</nav>
        
    
</template>



<script>

document.addEventListener('DOMContentLoaded', () => {

    const toggleMenuIcon = document.getElementById('toggleMenuIcon');
    
    const body = document.querySelector('body');

    toggleMenuIcon.addEventListener('click', () => {

        if(body.classList.contains('sidebar-collapse')){
            localStorage.setItem('sidebarState', 'expanded');
            
        } else {
            localStorage.setItem('sidebarState', 'collapsed');
        }

    });

    const sidebarState = localStorage.getItem('sidebarState');

    if(sidebarState == 'collapsed'){
        body.classList.add('sidebar-collapse');
    }

});

</script>