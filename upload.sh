#!/bin/sh
rsync -avz --exclude .git --exclude upload.sh . viewgit.sourceforge.net:/home/groups/v/vi/viewgit/htdocs
