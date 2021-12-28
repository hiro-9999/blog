“ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(
this, drawer, toolbar,
R.string.navigation_drawer_open,
R.string.navigation_drawer_close);
drawer.setDrawerListener(toggle);
toggle.syncState();
NavigationView navigationView = (NavigationView)
findViewById(R.id.nav_view);
navigationView.setNavigationItemSelectedListener(this);”

抜粋:: Smyth, Neil  “Android Studio 3.3 Development Essentials - Android 9 Edition: Developing Android 9 Apps Using Android Studio 3.3, Java and Android Jetpack”。 Apple Books  
