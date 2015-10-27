<?php
class OXO2
{
	private $stog2;
	private $gtos2;
    private $tgt2;
	private $g2;
	private $s2;
	private $youPlay;
	private $computerPlays;
	private $computerStarts;
	private $computerPlaysNext;
    private $whoHasWon;
	function __construct()
	{
		private $youPlay= "X";
		private $computerPlays   = "0";
		private $computerStarts  = true;
		private $computerPlaysNext=true;
		private $whoHasWon		= "#";
		$stog2	=array(array(0,1,2),
						array(3, 4, 5),
						array(6, 7, 8),
						array(0, 3, 6),
						array(1, 4, 7),
						array(2, 5, 8),
						array(0 ,4 ,8),
						array(2, 4, 6)
						);
		$gtos2	=array(array(0, 3, 6,-1),
						array(0, 4,-1,-1),
                        array(0, 5, 7,-1),
						array(1, 3,-1,-1)
						array(1, 4, 6, 7),
						array(1 ,5,-1,-1),
						array(2, 3, 7,-1),
						array(2, 4,-1,-1),
						array(2, 5 ,6,-1)
				);
		$s2		=array(0,0,0,0,0,0,0,0);
		$g2		=array(
						array(0,0,0),
						array(0,0,0),
						array(0,0,0)
					);
		$tgt	=array(3,30,2,20,1,10,0);
	}
	function whoStarts()
	{
		print 'Toss a Coin... 
		        <form >
					Heads <input type="radio" name="coin" id="coin" value="H"   onclick="heads()" /> 
					Tails <input type="radio" name="coin" id="coin" value="T"  onclick="tails()"  />
				</form>';
	}
}
?>
 