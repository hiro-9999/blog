https://stackoverflow.com/questions/41025200/android-view-inflateexception-error-inflating-class-android-webkit-webview

```
 implementation 'androidx.appcompat:appcompat:1.2.0-alpha03'
  @Override
    public void applyOverrideConfiguration(final Configuration overrideConfiguration) {
        if (Build.VERSION.SDK_INT >= 21 && Build.VERSION.SDK_INT < 25) {
            overrideConfiguration.uiMode &= ~Configuration.UI_MODE_NIGHT_MASK;
        }
        super.applyOverrideConfiguration(overrideConfiguration);
    }
    
    ```
