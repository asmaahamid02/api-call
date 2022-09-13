<?php
function empty_inputs($inputs)
{
    $data['errors'] = array();

    for ($i = 0; $i < count($inputs); $i++) {
        if ($inputs[$i] == '' || $inputs[$i] == null) {
            $data['errors'][$i] = 'field is empty!';
        }
    }

    return $data;
}