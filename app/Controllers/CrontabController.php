<?php
namespace App\Controllers;

use Liman\Toolkit\Shell\Command;

class CrontabController
{
// echo "* * * * * echo "veli" >/dev/pts/0" >> /var/spool/cron/crontabs/$USER
// echo "@{:newMinute} @{:newHour} @{:newMday} @{:newmonth} @{:newWday} @{:newcommand}" >> /var/spool/cron/crontabs/$USER  
	public function CalCommand()
	{

		//$result = ;
		$output = Command::runSudo('echo "@{:newMinute} @{:newHour} @{:newMday} @{:newmonth} @{:newWday} @{:newcommand}" >> /var/spool/cron/crontabs/$USER',
        [
			
            "newMinute" => request("newMinute"),
			"newHour" => request("newHour"),
			"newMday" => request("newMday"),
			"newmonth" => request("newmonth"),
			"newWday" => request("newWday"),
			"newcommand" => request("newcommand"),

        ]);
		return respond($output,200);
	}
	
}
