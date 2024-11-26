<?php


class Calori_Calc_Time
{
    private $closing_and_delivery_days;
    private $orderDurationString;
    private $ignoreSettings = array(
        "ignore weekends" => false,
        "ignore exact day" => "",
    );
    public function __construct(string $orderDurationString = "")
    {
        $this->closing_and_delivery_days = get_field('first_delivery_days', 'option') ?? [];
        $this->orderDurationString = $orderDurationString;
    }
    private function setIgnoreSettings()
    {
        if (str_contains($this->orderDurationString, "(arkipäivät)")) {
            $this->ignoreSettings["ignore weekends"] = true;
        }
    }
    private function set_correct_timezone()
    {
        $timezone = wp_timezone();
        $timezone_string = $timezone->getName();
        date_default_timezone_set($timezone_string);
    }

    public function calculate_delivery_date(string $order_date_time): string
    {
        $this->set_correct_timezone();

        $order_date = new DateTime($order_date_time);

        foreach ($this->closing_and_delivery_days as $entry) {
            $closing_day = $entry['order_close_day'];
            $delivery_day = $entry['first_delivery_day'];
            $deadline_time = $entry['order_close_time'] ?? '14:30';

            $closing_deadline = new DateTime("next $closing_day $deadline_time");

            if ($order_date < $closing_deadline) {
                $delivery_date = new DateTime("next $delivery_day");
                break;
            }
        }

        return $delivery_date->format('Y-m-d');
    }

    public function calculate_subs_duration(string $order_date_time, string $days): array
    {
        $this->setIgnoreSettings();
        $this->set_correct_timezone();

        $sub_start_date = $this->calculate_delivery_date($order_date_time);
        $sub_start_date_obj = new DateTime($sub_start_date);
        $sub_end_date_obj = clone $sub_start_date_obj;

        if ($this->ignoreSettings["ignore weekends"]) {
            $days_added = 0;
            while ($days_added < (int) $days) {
                $sub_end_date_obj->modify('+1 day');

                if ($sub_end_date_obj->format('N') < 6) {
                    $days_added++;
                }
            }
        } else {
            $sub_end_date_obj->modify('+ ' . $days . ' days');
        }

        return array(
            'start_date' => $sub_start_date_obj->format('Y-m-d'),
            'end_date' => $sub_end_date_obj->format('Y-m-d')
        );
    }
}