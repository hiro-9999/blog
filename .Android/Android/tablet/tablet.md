https://blog.csdn.net/qq_35619188/article/details/71161834
```

public static boolean isTablet(Context context) {
        return (context.getResources().getConfiguration().screenLayout
                & Configuration.SCREENLAYOUT_SIZE_MASK)
                >= Configuration.SCREENLAYOUT_SIZE_LARGE;
    }
```
If you want ActionBar back button behave same way as hardware back button:

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
            if (item.getItemId() == android.R.id.home) {
                    onBackPressed();
                    return true;
            }
            return false;
    }
https://stackoverflow.com/questions/14437745/how-to-override-action-bar-back-button-in-android
```
 @Override
    public boolean onOptionsItemSelected(final MenuItem item) {
        try {
            //Here is how back button changes its behavior
            Intent[] listIntents = stackBuilder.getIntents();
            if (item.getItemId() == android.R.id.home) {
            
            ```
