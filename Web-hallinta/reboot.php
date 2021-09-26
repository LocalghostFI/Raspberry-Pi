<?php
exec ('/usr/bin/sudo /etc/init.d/portmap restart');
shell_exec("/sbin/reboot");
exec("sudo /sbin/reboot");
system("/sbin/reboot");
?>
