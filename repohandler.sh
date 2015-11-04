#!/bin/bash

GIT=/usr/intel/bin/git
REPO=https://github.intel.com/ilab/iLab-Template-Scripts.git
WWWDIR=/nfs/site/disks/iir-ec_ilabprep
REPODIR=$WWWDIR/releases
TAGDIR=$WWWDIR/releases/tags
LOGDIR=$WWWDIR/releases/log
DATE=`date +"%d-%m-%Y-%T"`
LOG=$LOGDIR/$DATE.txt

mkdir -vp $LOGDIR/ > /dev/null 2>&1
mkdir -vp $TAGDIR/ > $LOG 2>&1 

if [ ! -f $WWWDIR/releases/.build ]; then
    exit 0;
fi

if [ -f $WWWDIR/releases/.lock ]; then
    exit 0;
fi

touch $LOG
touch $WWWDIR/releases/.lock >> $LOG 2>&1

echo "Logging to $LOG..."

rm -rvf $TAGDIR/* >> $LOG 2>&1

if [ ! -d "$REPODIR/devel" ]; then
	$GIT clone $REPO $REPODIR/devel/ >> $LOG 2>&1
fi

cd $REPODIR/devel/ >> $LOG 2>&1
$GIT pull >> $LOG 2>&1

TAGS=`$GIT tag -l`

rm -rvf $WWWDIR/downloads/* >> $LOG 2>&1

# checkout tagged verions
for TAG in $TAGS; do 
	echo "Checking out " $TAG ".... to $TAGDIR/$TAG/" >> $LOG 2>&1
	cd $REPODIR/devel/ >> $LOG 2>&1
    mkdir -vp $WWWDIR/downloads/$TAG >> $LOG 2>&1
    mkdir -vp $TAGDIR/$TAG/ >> $LOG 2>&1
    $GIT read-tree $TAG >> $LOG 2>&1 
	$GIT checkout-index -a -f --prefix=$TAGDIR/$TAG/ >> $LOG 2>&1
    cd $TAGDIR/$TAG/ >> $LOG 2>&1
    ./create-unix-installer.sh >> $LOG 2>&1
    ./create-windows-installer.sh >> $LOG 2>&1
    cp -rvf $TAGDIR/$TAG/output/* $WWWDIR/downloads/$TAG >> $LOG 2>&1
    cd $TAGDIR/ >> $LOG 2>&1
    rm -rvf $TAGDIR/$TAG/ >> $LOG 2>&1
done

# checkout devel version
cd $REPODIR/devel/ >> $LOG 2>&1
mkdir -vp $WWWDIR/downloads/devel >> $LOG 2>&1
./create-unix-installer.sh >> $LOG 2>&1
./create-windows-installer.sh >> $LOG 2>&1
cp -rvf $REPODIR/devel/output/* $WWWDIR/downloads/devel >> $LOG 2>&1
# checkout beta version
BETA="deploy2.0"
$GIT checkout -f $BETA >> $LOG 2>&1
./create-unix-installer.sh >> $LOG 2>&1
cp -rvf $REPODIR/devel/output/ilab.run $WWWDIR/downloads/ >> $LOG 2>&1

rm -rvf $REPODIR/devel >> $LOG 2>&1
rm -rvf $WWWDIR/releases/.lock >> $LOG 2>&1
rm -rvf $WWWDIR/releases/.build >> $LOG 2>&1
