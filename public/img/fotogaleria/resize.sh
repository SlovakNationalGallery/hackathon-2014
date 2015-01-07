mkdir thumb
for img in `ls *.jpg`
do
  convert -define jpeg:size=200x200 $img  -thumbnail 200x200^ -gravity center -extent 200x200  ./thumb/$img
done