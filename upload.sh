#!/bin/sh
rsync -avz --exclude .git --exclude upload.sh . sourceforge:/home/groups/v/vi/viewgit/htdocs
