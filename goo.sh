rm -rf ../kesau.github.io/*

cp -r ./* ../kesau.github.io

git add .
git commit -m "commit from thinkbook"
git push

cd ../kesau.github.io
git add .
git commit -m "commit from thinkbook"
git push