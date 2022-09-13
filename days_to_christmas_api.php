<?php
function get_diff($date1, $date2)
{
    $date1 = new DateTime($date1);
    $date2 = new DateTime($date2);

    return $date1->diff($date2);
}

function get_christmas_date()
{
    $christmas = date('Y') . '-12-25';

    if (date('m') == 12 && date('d') > 25) {
        $christmas = (date('Y') + 1) . '-12-25';
    }

    return $christmas;
}

echo json_encode(['days_left' => get_diff(date('Y-m-d'), get_christmas_date())->days]);