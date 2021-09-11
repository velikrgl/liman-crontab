<?php
namespace App\Controllers;

use Liman\Toolkit\Shell\Command;

class CrontabController
{
//echo "* * * * * echo "veli" >/dev/pts/0" >> /var/spool/cron/crontabs/$USER
	public function CalCommand($min,$hour,$dayOfMonth,$month,$dayOfWeek,$userCommand)
	{
		
		$result = Command::runSudo('');

	}
}
