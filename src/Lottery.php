<?php
/**
 * 彩票相关工具
 */
namespace HaiLibrary;

use HaiLibrary\library\LotteryNumber;

class Lottery
{
    /**
     * 生成双色球号码
     * ---
     * @return string 逗号分隔
     */
    public static function createDoubleColorBallNumber()
    {
        LotteryNumber::createDoubleColorBallNumber();
    }
}
