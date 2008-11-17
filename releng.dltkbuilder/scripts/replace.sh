#!/bin/bash
SOURCE_PATH=$1
cd $SOURCE_PATH
for file in $SOURCE_PATH/*.*
do
  cp $file $file'_'
  sed 's/:pserver:anonymous@dev.eclipse.org/:ext:devteam@cvs.xored.com/g' $file'_' > $file
  rm $file'_'
done
