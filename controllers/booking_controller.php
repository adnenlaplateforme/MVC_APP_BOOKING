<?php

function booking_index()
{
    $data = [
        'title' => 'Liste de réservations',
        'message' => '',
        'list_booking' => getAllBooking()
    ];
    load_view_with_layout('booking/index', $data);
}

function booking_add()
{
    $data = [
        'title' => "Ajouter une réservation"
    ];
    if (is_post()) {
    }
    load_view_with_layout('booking/add', $data);
}
