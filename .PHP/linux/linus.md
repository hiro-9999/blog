cat test.log | head -n 10100 | tail -n 100

# ファイルの特定の範囲の行を取り出すコマンド（headとtail）

```rub
head

ファイルの先頭から数行だけ表示させたい場合は head を利用する。例えば、最初の 5 行だけを見たい場合は -n5 オプションを付けて head コマンドを実行すればよい。

head -n5 sample.fa
## >seq1
## cgatgtgcatgtcaatagctagctagttagcta
## acgtagctagctagctagctatgctag
## 
## >seq2
cat コマンドと一緒に使うこともできる。

cat sample.fa | head -n5
```
