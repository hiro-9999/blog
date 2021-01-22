https://stackoverflow.com/questions/39332842/no-activity-found-to-handle-intent-when-using-fileprovider
```java
BroadcastReceiver onComplete = new BroadcastReceiver() {
       public void onReceive(Context ctxt, Intent intent) {

       downloadButton.setEnabled(true);
       downloadButton.setText("Terminado");
       progressbar.setVisibility(View.GONE);

       if (android.os.Build.VERSION.SDK_INT >= Build.VERSION_CODES.N){
            Intent install = new Intent(Intent.ACTION_VIEW);
            install.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);

            Uri apkURI = FileProvider.getUriForFile(
                     self,
                     self.getApplicationContext()
                     .getPackageName() + ".provider", file);
            install.setDataAndType(apkURI,
                    manager.getMimeTypeForDownloadedFile(downloadId));
            install.addFlags(Intent.FLAG_GRANT_READ_URI_PERMISSION);
            startActivity(install);
       } else{
            String destination = Environment.getExternalStoragePublicDirectory(Environment.DIRECTORY_DOWNLOADS) + "/";
            String fileName = "surveyevent.apk";
            destination += fileName;
            Uri uri = Uri.parse("file://" + destination);

            Intent install = new Intent(Intent.ACTION_VIEW);
            install.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
            install.setDataAndType(uri,
                    manager.getMimeTypeForDownloadedFile(downloadId));
            startActivity(install);
       }
       unregisterReceiver(this);
       finish();
  }
};
```
