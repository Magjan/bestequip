<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Top 3 scorers of the team.')
            ->setSubtitle('Season 2021.')
            ->addData([40, 50, 30])
            ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }

    public function buildDonut(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart->donutChart()
        ->setTitle('Top 3 scorers of the team.')
        ->setSubtitle('Season 2021.')
        ->addData([20, 24, 30])
        ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }    
    public function buildRadarChart(): \ArielMejiaDev\LarapexCharts\RadialChart
    {
        return $this->chart->radialChart()
        ->setTitle('Passing effectiveness.')
        ->setSubtitle('Barcelona city vs Madrid sports.')
        ->addData([75, 60])
        ->setLabels(['Barcelona city', 'Madrid sports'])
        ->setColors(['#D32F2F', '#03A9F4']);
    }  
    
    public function buildPolar(): \ArielMejiaDev\LarapexCharts\PolarAreaChart
    {
        return $this->chart->polarAreaChart()
        ->setTitle('Top 3 scorers of the team.')
        ->setSubtitle('Season 2021.')
        ->addData([20, 24, 30])
        ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }  
    
    
    public function buildBar(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
    ->setTitle('San Francisco vs Boston.')
    ->setSubtitle('Wins during season 2021.')
    ->addData('San Francisco', [6, 9, 3, 4, 10, 8])
    ->addData('Boston', [7, 3, 8, 2, 6, 4])
    ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
