假如git commit 链是

A -> B -> C -> D 

如果想把B，C，D都给revert，除了一个一个revert之外，还可以使用range revert

git revert B^..D 
