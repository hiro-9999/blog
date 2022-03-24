# study good 🟠
https://xr-hub.com/archives/2486

🟠Unity+VSCode で快適な開発環境を作る
https://nodachisoft.com/common/jp/article/jp000177/

🟠[macOS] VSCodeで快適にUnity開発する設定
https://qiita.com/kabosu3d/items/a4bc9abe991f95670964

 //ログ出力しないようにする
        Debug.unityLogger.logEnabled = false;
 
        //文字列をと出力
        Debug.Log("文字列だよ！");
        
# build exe write log in appdata🟠
 String path = Application.dataPath + "/" + "log.txt";
     
        FileInfo fi = new FileInfo(path);
        using (StreamWriter sw = fi.AppendText()) {
            sw.WriteLine(requestURL);
            sw.close();
        }

QiitaQiita
[macOS] VSCodeで快適にUnity開発する設定(2022/02/19) - Qiita



## metaファイルとは
Assetファイルと対になった、メタ情報が書かれたファイルのこと。Assetを一意に識別することができるguidや、画像の圧縮フォーマット、またAsset同士の関係も保存されている。
https://qiita.com/4_mio_11/items/91ebcdd30398af607373

https://qiita.com/Takaaki_Ichijo/items/0693504c90e67a698858
 ## [System.Serializable]
 
##  Complete C# for Unity Game Development [Updated for 2021]
https://learning.oreilly.com/videos/complete-c-for/9781838985035/9781838985035-video8_2/


“ Ray ray = new Ray (camera.position, camera.rotation * 
       Vector3.forward); 
    RaycastHit hit; 
    if (Physics.Raycast (ray, out hit)) { 
      if (hit.distance <= defaultPosZ) { 
        transform.localPosition = new Vector3(0, 0, hit.distance); 
      } else { 
        transform.localPosition = new Vector3(0, 0, defaultPosZ); 
      } ”

抜粋:: Jesse Glover  “Complete Virtual Reality and Augmented Reality Development with Unity”。 Apple Books  
