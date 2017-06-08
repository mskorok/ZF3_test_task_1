<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 17.1.6
 * Time: 21:21
 */

namespace Application\Command;

use JMS\Serializer\Exception\RuntimeException;
use Zend\Console\Adapter\AdapterInterface;
use Zend\Console\ColorInterface;
use Zend\Console\Prompt\Line;
use ZF\Console\Route;

class Salary
{
    protected const MONTHS = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];

    /**
     * @param Route $route
     * @param AdapterInterface $console
     * @return void
     */
    public function __invoke(Route $route, AdapterInterface $console): void
    {
        $file = $route->getMatchedParam('file');
        try {
            if ($file === null) {
                $console->writeLine('You did`nt enter file name!' . PHP_EOL, ColorInterface::RED);
                $file = Line::prompt(
                    'Please enter file name! ',
                    false,
                    100
                );
            }
            if (strlen($file) < 3) {
                throw new RuntimeException('File name is too short');
            }
            $console->write('You inserted ');
            $console->write($file . PHP_EOL, ColorInterface::GREEN);
            $dir = ROOT_PATH . '/data/testFiles/';
            $file = $dir . $file . '.csv';
            if ($r = @fopen($file, 'w+')) {
                $year = Line::prompt(
                    'Please enter year! ',
                    false,
                    100
                );
                $year = (int)$year;
                if ($year > 2000 && $year < 2020) {
                    $console->write('You inserted ');
                    $console->write($year . PHP_EOL, ColorInterface::BLUE);
                    $list = $this->getYearArray($year);
                    if (is_iterable($list)) {
                        foreach ($list as $row) {
                            fputcsv($r, $row);
                        }
                    }
                } else {
                    $console->write(
                        'Year was entered incorrect, current year will be used' . PHP_EOL,
                        ColorInterface::RED
                    );
                }

                fclose($r);
            } else {
                throw new RuntimeException('file not found');
            }

        } catch (\RuntimeException $e) {
            $console->write($e->getMessage() . PHP_EOL, ColorInterface::RED);
        }
    }

    /**
     * @param $year
     * @return array
     */
    private function getYearArray($year): array
    {
        $result = [];
        $result[] = ['Month', 'Salary Date', 'Bonus Date'];
        for ($i = 1; $i <= 12; $i++) {
            $bonusDate = (new \DateTime($year . '-' . $i . '-15'))->format('Y-m-d');
            $dayOfWeek = (new \DateTime($bonusDate))->format('l');
            if ($dayOfWeek === 'Saturday') {
                $bonusDate = (new \DateTime($bonusDate))->modify('4 day')->format('Y-m-d');
            } elseif ($dayOfWeek === 'Sunday') {
                $bonusDate = (new \DateTime($bonusDate))->modify('3 day')->format('Y-m-d');
            }
            $salaryDate = date('Y-m-t', strtotime($year . '-' . $i . '-1'));
            $dayOfWeek = (new \DateTime($salaryDate))->format('l');
            if ($dayOfWeek === 'Saturday') {
                $salaryDate = (new \DateTime($salaryDate))->modify('-1 day')->format('Y-m-d');
            } elseif ($dayOfWeek === 'Sunday') {
                $salaryDate = (new \DateTime($salaryDate))->modify('-2 day')->format('Y-m-d');
            }
            $result[] = [self::MONTHS[$i - 1], $salaryDate, $bonusDate];
        }

        return $result;
    }
}
