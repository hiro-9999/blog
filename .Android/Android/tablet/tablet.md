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
