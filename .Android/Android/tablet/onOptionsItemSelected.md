onSupportNavigateUp()

https://qiita.com/orimomo/items/c710ce4c5c3d2553ef07

Android Toolbar Not Calling onOptionsItemSelected From Fragments On Backstack

Toolbar toolbar = (Toolbar)findViewById( R.id.toolbar );
if (toolbar != null) {
    setSupportActionBar( toolbar );
    getSupportActionBar().setDisplayHomeAsUpEnabled( true );
    toolbar.setNavigationIcon( R.drawable.toolbar_icon_menu );
}

https://stackoverflow.com/questions/26530224/android-toolbar-not-calling-onoptionsitemselected-from-fragments-on-backstack


Dont forget to call setHasOptionsMenu(true) in the OnCreate of your fragment
