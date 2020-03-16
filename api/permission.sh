perms=$(stat -c %a $1)
if [ "$perms" != "777" ]
then
  echo "$1 - $perms"
  eval "chmod 0777 -R $1"
fi
