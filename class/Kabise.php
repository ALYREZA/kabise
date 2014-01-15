<?php
class Kabise 
{

	public static function isKabise($year)
    {
        if($year < 473)
        {
            $k_hesabi = array(0,4,8,12,16,20,25,29,33,38,41,45,49,53,58,62,66,70,74,78,82,86,91,95,99,103,107,111,115,120,124);
        }else
        {
            $k_hesabi = array(0,4,8,12,16,20,24,29,33,38,41,45,49,53,57,62,66,70,74,78,82,86,90,95,99,103,107,111,115,119,124);
        }
        $kabi_plus = array(1275,1308,1341,1403,1436,1469,1473,1502);

        $kabi_minus = array(9,13,17,21,42,46,50,54,71,75,79,83,87,104,108,112,116,137,141,145,149,170,174,178,182,203,207,211,215,236,240,244,269,273,277,302,306,310,331,335,339,343,364,368,372,397,401,405,430,434,438,463,467,471,475,496,500,504,529,533,537,558,862,566,570,591,595,599,603,624,628,632,661,665,690,694,698,723,727,731,756,760,789,793,822,826,855,859,888,921,954,983,987,1014,1049,1082,1115,1243);

        foreach($kabi_minus as $value)
        {
            if($year == $value)
            {
                return 1 ;
            }
        }

        foreach($kabi_minus as $value)
        {
            $minus = $value - 1 ;

            if($year == $minus)
            {
                return 0;
            } 
        }

        foreach ($kabi_plus as $value) {
            
            if($year == $value)
            {
                return 1;
            }

        }

        foreach ($kabi_plus as $value) {
            
            $plus = $value + 1;

            if($year == $plus)
            {
                return 0;
            }


        }


        $baqimande = $year % 128;

        foreach ($k_hesabi as $val) {
            
            if($baqimande == $val)
            {
                return 1;
            }

        }
    
        return 0;

    }

    public static function nextKabise($year)
    {
        $year = $year + 1;
        $till = $year + 10;

        for($year;$year<=$till;$year++)
        {
            if(self::isKabise($year)){

                    return $year;


            }
        }

    }

}

