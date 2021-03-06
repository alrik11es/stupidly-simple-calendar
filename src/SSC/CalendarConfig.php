<?php
namespace SSC;

class CalendarConfig{
    
    /** @var DateTime */
    private $start_date;
    /** @var DateInterval */
    private $interval;
    /** @var formatters\FormatterInterface */
    private $formatter;
    
    public $include_quarters = true;
    public $include_weeks = true;
    
    public function setFormatter(formatters\FormatterInterface $formatter)
    {
        $this->formatter = $formatter;    
    }
    
    public function setInterval(\DateInterval $interval)
    {
        $this->interval = $interval;
    }
    
    public function getInterval()
    {
        return $this->interval;
    }
    
    public function getFormatter()
    {
        return $this->formatter;
    }
    
    public function setStartDate(\DateTime $date)
    {
        $this->start_date = $date;
    }
    
    public function getStartDate(){
        return $this->start_date;
    }
}
