<?php


class Calori_Calc_Time
{
    private $deliveries;
    private $orderDurationString;
    private $ignoreSettings = array(
        "ignore weekends" => false,
        "ignore exact day" => "",
    );
    public function __construct(string $orderDurationString = "")
    {
        $this->deliveries = get_field('deliveries', 'option') ?? [];
        error_log("DELIVERIES: " . print_r($this->deliveries, true));
        $this->orderDurationString = $orderDurationString;
    }
    private function setIgnoreSettings()
    {
        if (str_contains($this->orderDurationString, "arkipaivat")) {
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
        $order_date = new DateTime($order_date_time); // Текущее время заказа

        $dates = array(); // Массив для хранения возможных дат доставки

        if (have_rows('deliveries', 'option')) {
            while (have_rows('deliveries', 'option')) {
                the_row();

                $delivery_day = get_sub_field('delivery_day');
                $delivery_day_parts = explode(":", $delivery_day);
                $delivery_day = trim($delivery_day_parts[0]);

                $closing_day = get_sub_field('order_close_day');
                $closing_day_parts = explode(":", $closing_day);
                $closing_day = trim($closing_day_parts[0]);

                $deadline_time = get_sub_field('order_close_time');

                $closing_deadline = new DateTime("$closing_day $deadline_time");

                if ($order_date < $closing_deadline) {
                    $delivery_date = new DateTime("next $delivery_day $deadline_time");

                    if ($delivery_date <= $order_date) {
                        $delivery_date->modify("+1 week");
                    }

                    array_push($dates, $delivery_date);
                }
            }
        }

        if (!empty($dates)) {
            usort($dates, function ($a, $b) {
                return $a <=> $b;
            });

            $delivery_date = $dates[0];
        } else {
            $delivery_date = null;
        }

        return $delivery_date->format('Y-m-d');
    }

    public function calculate_subs_duration(string $order_date_time, string $days): array
    {
        $this->setIgnoreSettings();
        $this->set_correct_timezone();

        $sub_start_date = $this->calculate_delivery_date($order_date_time);

        if(!$sub_start_date) {
            return array(
                'start_date' => '',
                'end_date' => ''
            );
        }

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