<?php

$current_date = new DateTime();

$christmas = date('Y') . '-12-25';

if (date('m') == 12 && date('d') > 25) {
    $christmas = (date('Y') + 1) . '-12-25';
}

$christmas = new DateTime($christmas);

$difference = $current_date->diff($christmas);

echo json_encode(['days_left' => $difference->days]);