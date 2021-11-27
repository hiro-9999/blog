https://git-scm.com/downloads

% git --version
git version 2.34.1

brew install git

Advanced Git Understanding Git Collaboration  Workflows (2nd Edition) by Jawwad Ahmad Chris Belanger [Ahmad J., Belanget C.] (z-lib.org).pdf

git log -5 --oneline

# Converting short hash into long
Execute the command below to convert a short hash into its long equivalent, substituting your own short hash:
## git rev-parse d83ab2b

show file
## git cat-file -p d27f2

 # git reset --hard HEAD
 
 • git config merge.conflictstyle diff3 provides a three-way view of the conflict, with the common ancestor, “their” change, and “our” change.
• git status -sb gives a concise view of the state of your working tree.

# git stash
cd .git/refs/
Inside that directory, you’ll find a file named, simply, stash. Print the contents of that file out to the command line with the following command to inspect its contents:
cat stash

# git stash list

   git stash apply stash@{2}
   
    git stash pop
    
     git reset temp/.keep
rm temp/.keep

   
    git stash clear
